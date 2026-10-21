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

    // Recursively resolve includes (standalone and inside multi-statement PHP blocks)
    for (let iter = 0; iter < 5; iter++) {
        // Standalone <?php include ...; ?>
        content = content.replace(/<\?php\s*(?:include|require)(?:_once)?\s*(?:\(\s*)?(?:__DIR__\s*\.\s*)?['"]([^'"]+)['"](?:\s*\))?\s*;\s*\?>/g, (match, inc) => {
            const incPath = path.resolve(baseDir, inc.replace(/^\//, ''));
            if (fs.existsSync(incPath)) {
                return fs.readFileSync(incPath, 'utf8');
            }
            return '';
        });

        // Embedded include inside multi-line <?php ... include ...; ... ?>
        content = content.replace(/(<\?php[\s\S]*?)(?:include|require)(?:_once)?\s*(?:\(\s*)?(?:__DIR__\s*\.\s*)?['"]([^'"]+)['"](?:\s*\))?\s*;([\s\S]*?\?>)/g, (match, before, inc, after) => {
            const incPath = path.resolve(baseDir, inc.replace(/^\//, ''));
            const incContent = fs.existsSync(incPath) ? fs.readFileSync(incPath, 'utf8') : '';
            return before + '?>\n' + incContent + '\n<?php ' + after;
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

// Helper to send custom HTML error pages
function sendCustomError(res, statusCode) {
    const errorFile = path.join(__dirname, `${statusCode}.html`);
    res.status(statusCode);
    res.setHeader('Cache-Control', 'no-store, no-cache, must-revalidate, max-age=0');
    res.setHeader('Content-Type', 'text/html; charset=UTF-8');
    if (fs.existsSync(errorFile)) {
        return res.sendFile(errorFile);
    }
    return res.send(`<h1>HTTP Error ${statusCode}</h1>`);
}

// Security Middleware: Headers, Directory Listing Prevention & Protected Files
app.use((req, res, next) => {
    res.setHeader('X-Content-Type-Options', 'nosniff');
    res.setHeader('X-Frame-Options', 'SAMEORIGIN');
    res.setHeader('Referrer-Policy', 'strict-origin-when-cross-origin');
    res.removeHeader('X-Powered-By');

    let reqPath = '/';
    try {
        reqPath = decodeURIComponent(req.path || '/');
    } catch (e) {
        return sendCustomError(res, 400);
    }

    const baseName = path.basename(reqPath);

    // Block hidden dotfiles (.htaccess, .git, .env, etc.) except .well-known
    if (baseName.startsWith('.') && !reqPath.startsWith('/.well-known/')) {
        return sendCustomError(res, 403);
    }

    // Block direct access to internal template partials & config files
    if (/^(header\.php|footer\.php|admin-panel-markup\.html|server\.(js|ts)|package(-lock)?\.json|tsconfig\.json|metadata\.json)$/i.test(baseName)) {
        return sendCustomError(res, 403);
    }

    // Prevent directory listing on existing folders (e.g., /css/, /js/, /fonts/, /img/)
    if (reqPath !== '/') {
        const diskPath = path.join(__dirname, reqPath);
        if (fs.existsSync(diskPath) && fs.statSync(diskPath).isDirectory()) {
            return sendCustomError(res, 403);
        }
    }

    next();
});

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

app.get(['/demo', '/demo.php', '/demo.html'], (req, res) => {
    res.setHeader('Cache-Control', 'no-cache, must-revalidate');
    res.setHeader('Content-Type', 'text/html; charset=UTF-8');
    const html = renderPhpFile(path.join(__dirname, 'demo.php'), req);
    res.send(html);
});

app.get(['/admin', '/admin.php', '/admin.html'], (req, res) => {
    res.setHeader('Cache-Control', 'no-cache, must-revalidate');
    res.setHeader('Content-Type', 'text/html; charset=UTF-8');
    const html = renderPhpFile(path.join(__dirname, 'admin.php'), req);
    res.send(html);
});

app.get(['/comparison', '/comparison.php', '/comparison.html'], (req, res) => {
    res.setHeader('Cache-Control', 'no-cache, must-revalidate');
    res.setHeader('Content-Type', 'text/html; charset=UTF-8');
    const html = renderPhpFile(path.join(__dirname, 'comparison.php'), req);
    res.send(html);
});

app.get(['/guide', '/guide.php', '/guide.html', '/tutorial', '/tutorial.php', '/tutorial.html'], (req, res) => {
    res.setHeader('Cache-Control', 'no-cache, must-revalidate');
    res.setHeader('Content-Type', 'text/html; charset=UTF-8');
    const html = renderPhpFile(path.join(__dirname, 'guide.php'), req);
    res.send(html);
});

app.get(['/rtl-landing', '/rtl-landing.php', '/presentation', '/presentation.php', '/rtl-presentation', '/rtl-presentation.php'], (req, res) => {
    res.setHeader('Cache-Control', 'no-cache, must-revalidate');
    res.setHeader('Content-Type', 'text/html; charset=UTF-8');
    const html = renderPhpFile(path.join(__dirname, 'rtl-landing.php'), req);
    res.send(html);
});

// Direct routes for custom error pages
['400', '401', '403', '404', '429', '500', '502', '503', '504'].forEach((code) => {
    app.get([`/${code}`, `/${code}.html`], (req, res) => {
        sendCustomError(res, parseInt(code, 10));
    });
});

app.get(['/wp-login', '/wp-login.php'], (req, res) => {
    return sendCustomError(res, 404);
});

// Serve static assets with caching headers (dotfiles & directory indexes disabled)
app.use(express.static(__dirname, {
    index: false,
    dotfiles: 'deny',
    maxAge: '1h',
    setHeaders: (res, filePath) => {
        if (filePath.endsWith('.html') || filePath.endsWith('.js') || filePath.endsWith('.css') || filePath.endsWith('.php')) {
            res.setHeader('Cache-Control', 'no-cache, must-revalidate');
        } else if (filePath.endsWith('.png') || filePath.endsWith('.jpg') || filePath.endsWith('.webp') || filePath.endsWith('.woff') || filePath.endsWith('.woff2') || filePath.endsWith('.svg')) {
            res.setHeader('Cache-Control', 'public, max-age=86400');
        }
    }
}));

// Fallback 404 route
app.get('*', (req, res) => {
    return sendCustomError(res, 404);
});

app.listen(PORT, '0.0.0.0', () => {
    console.log(`Guardify PHP-Ready Server running at http://0.0.0.0:${PORT}`);
});
