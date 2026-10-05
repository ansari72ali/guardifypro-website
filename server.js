import express from 'express';
import compression from 'compression';
import path from 'path';
import fs from 'fs';
import { fileURLToPath } from 'url';

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);

const app = express();
const PORT = 3000;

// Enable gzip and deflate compression
app.use(compression());

// PHP Preprocessor Engine for Node.js
function renderPhpFile(filePath, req) {
    if (!fs.existsSync(filePath)) return null;
    let content = fs.readFileSync(filePath, 'utf8');
    const baseDir = path.dirname(filePath);

    // Read cookie theme
    const cookieHeader = (req && req.headers && req.headers.cookie) || '';
    let serverTheme = '';
    const m = cookieHeader.match(/(?:^|;\s*)(?:guardify_theme|user-theme)=([^;]+)/);
    if (m) {
        serverTheme = decodeURIComponent(m[1]);
    }

    // Extract page variables
    let pageTitle = "گاردفای پرو Guardify Pro v4.00 | کپچای بومی و سپر ضد نفوذ ورود وردپرس";
    let currentPage = "home";

    const titleMatch = content.match(/\$page_title\s*=\s*["']([^"']+)["']/);
    if (titleMatch) pageTitle = titleMatch[1];

    const pageMatch = content.match(/\$current_page\s*=\s*["']([^"']+)["']/);
    if (pageMatch) currentPage = pageMatch[1];

    // Recursively resolve includes (inside or outside <?php tags)
    for (let iter = 0; iter < 4; iter++) {
        content = content.replace(/(<\?php[\s\S]*?)?(?:include|require)(?:_once)?\s*(?:\(\s*)?(?:__DIR__\s*\.\s*)?['"]([^'"]+)['"](?:\s*\))?\s*;([\s\S]*?\?>)?/g, (match, prefix, inc, suffix) => {
            const incPath = path.resolve(baseDir, inc.replace(/^\//, ''));
            if (fs.existsSync(incPath)) {
                let incContent = fs.readFileSync(incPath, 'utf8');
                return (prefix ? prefix.trim() + ' ' : '') + incContent + (suffix ? ' ' + suffix.trim() : '');
            }
            return '';
        });
    }

    // Evaluate basic PHP conditionals
    content = content.replace(/<\?php\s+if\s*\(\$current_page\s*===\s*['"]home['"]\):\s*\?>([\s\S]*?)<\?php\s+elseif\s*\(\$current_page\s*===\s*['"]preview['"]\):\s*\?>([\s\S]*?)<\?php\s+endif;\s*\?>/g, (match, homeBlock, previewBlock) => {
        return currentPage === 'home' ? homeBlock : previewBlock;
    });

    content = content.replace(/<\?php\s+if\s*\(\$current_page\s*===\s*['"]([^'"]+)['"]\):\s*\?>([\s\S]*?)<\?php\s+endif;\s*\?>/g, (match, targetPage, block) => {
        return currentPage === targetPage ? block : '';
    });

    // Evaluate ternaries
    content = content.replace(/<\?php\s+echo\s+\$current_page\s*===\s*['"]([^'"]+)['"]\s*\?\s*['"]([^'"]+)['"]\s*:\s*['"]([^'"]+)['"]\s*;\s*\?>/g, (match, pageName, trueVal, falseVal) => {
        return currentPage === pageName ? trueVal : falseVal;
    });

    // Evaluate variable echoes
    content = content.replace(/<\?php\s+echo\s+(?:htmlspecialchars\()?\$page_title\)?\s*;\s*\?>/g, pageTitle);
    content = content.replace(/<\?php\s+echo\s+\$current_page\s*;\s*\?>/g, currentPage);
    content = content.replace(/<\?php\s+echo\s+htmlspecialchars\(\$html_theme_class\)\s*;\s*\?>/g, serverTheme);
    content = content.replace(/<\?php\s+echo\s+\$html_theme_class\s*;\s*\?>/g, serverTheme);

    // Remove any remaining PHP blocks and dangling markers
    content = content.replace(/<\?php[\s\S]*?\?>/g, '');
    content = content.replace(/<\?php[\s\S]*$/g, '');
    content = content.replace(/\?>/g, '').trim();

    return content;
}

// Explicit PHP-first and HTML route handlers
app.get(['/', '/index.php', '/index.html'], (req, res) => {
    res.setHeader('Cache-Control', 'no-cache, must-revalidate');
    res.setHeader('Content-Type', 'text/html; charset=UTF-8');
    const html = renderPhpFile(path.join(__dirname, 'index.php'), req);
    res.send(html);
});

app.get(['/preview', '/preview.php', '/preview.html'], (req, res) => {
    res.setHeader('Cache-Control', 'no-cache, must-revalidate');
    res.setHeader('Content-Type', 'text/html; charset=UTF-8');
    const html = renderPhpFile(path.join(__dirname, 'preview.php'), req);
    res.send(html);
});

// Serve static assets with caching headers
app.use(express.static(__dirname, {
    maxAge: '1h',
    setHeaders: (res, filePath) => {
        if (filePath.endsWith('.html') || filePath.endsWith('.js') || filePath.endsWith('.css') || filePath.endsWith('.php')) {
            // Instant updates without stale cache
            res.setHeader('Cache-Control', 'no-cache, must-revalidate');
        } else if (filePath.endsWith('.png') || filePath.endsWith('.jpg') || filePath.endsWith('.webp') || filePath.endsWith('.woff') || filePath.endsWith('.woff2') || filePath.endsWith('.svg')) {
            // Media and font assets: cache efficiently
            res.setHeader('Cache-Control', 'public, max-age=86400');
        }
    }
}));

// Fallback route
app.get('*', (req, res) => {
    res.setHeader('Cache-Control', 'no-cache, must-revalidate');
    res.setHeader('Content-Type', 'text/html; charset=UTF-8');
    const html = renderPhpFile(path.join(__dirname, 'index.php'), req);
    res.send(html);
});

app.listen(PORT, '0.0.0.0', () => {
    console.log(`Guardify PHP-Ready Server running at http://0.0.0.0:${PORT}`);
});
