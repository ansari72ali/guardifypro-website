<?php
/**
 * Guardify Pro Universal Header Component
 * Shared across index.php and preview.php
 */
if (!isset($page_title)) {
    $page_title = "گاردفای پرو Guardify Pro v4.00 | کپچای بومی و سپر ضد نفوذ ورود وردپرس";
}
if (!isset($current_page)) {
    $current_page = "home";
}
// Read theme preference from Cookie for instant server-rendered HTML class
$server_theme = isset($_COOKIE['guardify_theme']) ? $_COOKIE['guardify_theme'] : (isset($_COOKIE['user-theme']) ? $_COOKIE['user-theme'] : '');
$html_theme_class = ($server_theme === 'light' || $server_theme === 'dark') ? $server_theme : '';
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl" class="<?php echo htmlspecialchars($html_theme_class); ?>" data-theme="<?php echo htmlspecialchars($html_theme_class); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Instant Synchronous Zero-FOUT Theme Engine (Executes before any DOM paint) -->
    <script>
        (function() {
            function getTheme() {
                var m = document.cookie.match(/(?:^|;\s*)(?:guardify_theme|user-theme)=([^;]+)/);
                if (m) return decodeURIComponent(m[1]);
                try {
                    var l = localStorage.getItem('guardify_theme');
                    if (l) return l;
                } catch(e) {}
                if (window.matchMedia && window.matchMedia('(prefers-color-scheme: light)').matches) {
                    return 'light';
                }
                return 'dark';
            }
            var t = getTheme();
            document.documentElement.classList.remove('dark', 'light');
            document.documentElement.classList.add(t);
            document.documentElement.setAttribute('data-theme', t);
        })();
    </script>
    
    <title><?php echo htmlspecialchars($page_title); ?></title>
    
    <meta name="description" content="کپچای ۱۰۰٪ بومی و آفلاین وردپرس بدون وابستگی خارجی؛ جلوگیری از اسپم، حملات Brute-Force و ریزش سبد خرید ووکامرس در زمان اختلال اینترنت بین‌الملل.">
    <meta name="keywords" content="گاردفای پرو, کپچای آفلاین وردپرس, کپچای بومی, امنیت ورود وردپرس, کپچای ووکامرس, ضد اسپم وردپرس, تغییر آدرس لاگین, DevBan">
    <meta name="author" content="DevBan">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="theme-color" content="#6366f1">
    <meta name="application-name" content="گاردفای پرو Guardify Pro v4.00">
    
    <!-- Resource Hints & DNS Prefetch for Max Performance -->
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    <link rel="preconnect" href="https://unpkg.com" crossorigin>
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
    <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
    <link rel="dns-prefetch" href="https://unpkg.com">

    <!-- Canonical and Social Cards -->
    <link rel="canonical" href="https://guardifypro.ir/" id="canonical-link">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="fa_IR">
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="og:description" content="کپچای ۱۰۰٪ آفلاین وردپرس بدون وابستگی خارجی؛ بدون افت سرعت تسویه‌حساب ووکامرس در زمان اختلال اینترنت.">
    <meta property="og:url" content="https://guardifypro.ir/">
    <meta property="og:image" content="https://guardifypro.ir/img/Guardify-Captcha-Pro_result.webp">
    <meta property="og:site_name" content="گاردفای پرو Guardify Pro">
    
    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "SoftwareApplication",
          "@id": "https://guardifypro.ir/#software",
          "name": "Guardify Pro",
          "alternateName": ["گاردفای پرو", "Guardify Captcha Pro"],
          "applicationCategory": "SecurityApplication",
          "operatingSystem": "WordPress 5.0+, WooCommerce 4.0+",
          "softwareVersion": "4.00",
          "description": "کپچای ۱۰۰٪ بومی و آفلاین وردپرس با اعتبارسنجی سمت سرور، ضد اسپم و سپر امنیتی ورود وردپرس.",
          "offers": {
            "@type": "Offer",
            "price": "299000",
            "priceCurrency": "IRR",
            "availability": "https://schema.org/InStock",
            "url": "https://www.rtl-theme.com"
          },
          "author": {
            "@type": "Organization",
            "name": "DevBan",
            "url": "https://guardifypro.ir"
          }
        }
      ]
    }
    </script>

    <!-- Tailwind CDN with Class Dark Mode and Local IRANYekan Font Family -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: '#6366f1'
                    },
                    fontFamily: {
                        sans: ['IRANYekan', 'IRANYekanWeb', 'sans-serif'],
                        heading: ['IRANYekan', 'IRANYekanWeb', 'sans-serif']
                    }
                }
            }
        };
    </script>
    
    <!-- Local & Vendor Icons & Styles (100% Offline Local Font Awesome with CDN Fallback) -->
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    
    <!-- Main Style (with local IRANYekan @font-face suite and cache busting) -->
    <link rel="stylesheet" href="/css/style.css?v=4.40">
    
    <!-- Universal Theme Manager Script -->
    <script src="/js/theme-manager.js?v=4.30"></script>
</head>
<body class="transition-colors duration-500 min-h-screen flex flex-col">

    <!-- Atmospheric Modern Multi-Layered Background FX -->
    <div class="fixed inset-0 pointer-events-none -z-20 overflow-hidden">
        <!-- Interactive Mouse Spotlight -->
        <div id="mouse-spotlight" class="mouse-spotlight"></div>

        <!-- 4-Orb Multi-Layered Cyber Aurora -->
        <div class="mesh-gradient mesh-1"></div>
        <div class="mesh-gradient mesh-2"></div>
        <div class="mesh-gradient mesh-3"></div>
        <div class="mesh-gradient mesh-4"></div>

        <!-- Cyber Grid Overlay with Masking -->
        <div class="cyber-grid-overlay"></div>
        <div class="ui-pattern pulse-effect"></div>

        <!-- Interactive Cyber Particles Canvas -->
        <canvas id="cyber-particles-canvas" class="absolute inset-0 w-full h-full pointer-events-none opacity-60"></canvas>
    </div>

    <!-- Unified High-Tech Navigation Bar -->
    <header class="fixed top-0 w-full z-50 glass-nav">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 h-20 flex items-center justify-between">
            
            <!-- Brand Logo & Identity -->
            <a href="/" class="flex items-center gap-3 group cursor-pointer transition-transform duration-300 hover:scale-[1.02]" aria-label="گاردفای پرو - صفحه اصلی">
                <div class="bg-indigo-600 p-2.5 rounded-xl shadow-lg shadow-indigo-600/30 group-hover:bg-indigo-500 transition-colors">
                    <i class="fas fa-shield-halved text-white text-xl"></i>
                </div>
                <div class="text-right">
                    <span class="text-xl font-black tracking-tight leading-tight block text-readable">گاردفای <span class="text-indigo-400">پرو</span></span>
                    <span class="text-[10px] text-muted font-semibold tracking-wider block">کپچای بومی و امنیت ورود · DevBan</span>
                </div>
            </a>
            
            <!-- Desktop Navigation Links (Consistent & Unified) -->
            <div class="hidden lg:flex items-center gap-6 text-xs font-black tracking-wider">
                <a href="/" class="<?php echo $current_page === 'home' ? 'text-indigo-400 font-black' : 'hover:text-indigo-400 transition-colors'; ?>">صفحه اصلی</a>
                <a href="/#features" class="hover:text-indigo-400 transition-colors">امکانات و مزایا</a>
                <a href="/preview.php#login-styler" class="hover:text-amber-400 text-amber-400 transition-colors font-extrabold flex items-center gap-1.5">
                    <i class="fas fa-palette text-[10px]"></i>
                    <span>استودیوی WP-Login Pro</span>
                </a>
                <a href="/preview.php" class="px-3 py-1.5 rounded-xl <?php echo $current_page === 'preview' ? 'bg-indigo-600 text-white shadow-md' : 'bg-indigo-600/20 text-indigo-400 border border-indigo-500/30 hover:bg-indigo-600 hover:text-white'; ?> transition-all font-black flex items-center gap-1.5 shadow-sm">
                    <i class="fas fa-flask-vial text-[11px]"></i>
                    <span>آزمایشگاه زنده (پیش‌نمایش)</span>
                </a>
                <a href="/#security-guide" class="hover:text-indigo-400 transition-colors">راهنمای امنیت</a>

                <!-- "More" Dropdown Menu -->
                <div class="relative group" id="nav-dropdown-wrapper">
                    <button id="nav-dropdown-btn" type="button" class="flex items-center gap-1.5 py-2 text-readable hover:text-indigo-400 font-bold transition-colors cursor-pointer">
                        <span>بیشتر</span>
                        <i class="fas fa-chevron-down text-[10px] group-hover:rotate-180 transition-transform duration-300"></i>
                    </button>

                    <div id="nav-dropdown-menu" class="absolute top-full right-0 pt-2 w-60 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                        <div class="p-2 rounded-2xl bg-[var(--card-current)] border border-[var(--border-current)] shadow-2xl backdrop-blur-2xl">
                            <a href="/#performance" class="flex items-center gap-2.5 px-3 py-2.5 rounded-xl hover:bg-indigo-500/10 hover:text-emerald-400 text-readable transition-colors font-bold text-xs">
                                <i class="fas fa-gauge-high text-xs text-emerald-400"></i>
                                <span>سرعت و Core Web Vitals</span>
                            </a>
                            <a href="/#providers" class="flex items-center gap-2.5 px-3 py-2.5 rounded-xl hover:bg-indigo-500/10 hover:text-indigo-400 text-readable transition-colors font-bold text-xs">
                                <i class="fas fa-network-wired text-xs text-indigo-400"></i>
                                <span>ارائه‌دهندگان جهانی</span>
                            </a>
                            <a href="/#faq" class="flex items-center gap-2.5 px-3 py-2.5 rounded-xl hover:bg-indigo-500/10 hover:text-indigo-400 text-readable transition-colors font-bold text-xs">
                                <i class="fas fa-circle-question text-xs text-indigo-400"></i>
                                <span>سوالات متداول</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Actions Bar: Theme Toggle & RTL-Theme Purchase -->
            <div class="flex items-center gap-3">
                <!-- Unified Theme Toggle Button -->
                <button id="theme-toggle" class="theme-toggle cursor-pointer" aria-label="تغییر حالت شب و روز" title="تغییر حالت شب و روز">
                    <i class="fas fa-moon dark:hidden text-indigo-600"></i>
                    <i class="fas fa-sun hidden dark:block text-amber-400"></i>
                </button>
                
                <a href="https://www.rtl-theme.com" target="_blank" rel="noopener noreferrer" class="hidden sm:inline-flex items-center gap-2 bg-gradient-to-r from-emerald-500 via-lime-500 to-emerald-600 hover:from-emerald-400 hover:to-lime-400 text-slate-950 px-4 sm:px-5 py-2.5 rounded-xl text-xs font-black shadow-lg shadow-emerald-500/20 hover:scale-105 transition-all">
                    <i class="fas fa-crown text-slate-950 text-xs"></i>
                    <span>فروش انحصاری در راست‌چین</span>
                </a>
                
                <button id="mobile-menu-btn" class="lg:hidden p-2 text-readable cursor-pointer" aria-label="منوی موبایل">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Drawer Menu -->
        <div id="mobile-menu" class="lg:hidden hidden bg-[var(--card-current)] border-b border-[var(--border-current)] backdrop-blur-3xl overflow-hidden transition-all duration-300">
            <div class="flex flex-col p-6 gap-3 text-xs font-black">
                <a href="/" class="mobile-link py-2.5 px-3 rounded-xl hover:bg-indigo-500/10 hover:text-indigo-400 transition-colors flex items-center gap-2.5">
                    <i class="fas fa-home text-indigo-400"></i>
                    <span>صفحه اصلی</span>
                </a>
                <a href="/preview.php" class="mobile-link py-3 px-3 rounded-xl bg-indigo-500/15 text-indigo-400 border border-indigo-500/30 font-bold flex items-center gap-2.5">
                    <i class="fas fa-flask-vial text-indigo-400"></i>
                    <span>آزمایشگاه زنده (پیش‌نمایش کپچا و ورود)</span>
                </a>
                <a href="/preview.php#login-styler" class="mobile-link py-2.5 px-3 rounded-xl bg-amber-500/10 text-amber-400 font-bold flex items-center gap-2.5">
                    <i class="fas fa-palette text-amber-400"></i>
                    <span>استودیوی سفارشی‌ساز WP-Login Pro</span>
                </a>
                <a href="/#features" class="mobile-link py-2.5 px-3 rounded-xl hover:bg-indigo-500/10 hover:text-indigo-400 transition-colors flex items-center gap-2.5">
                    <i class="fas fa-shield-halved text-indigo-400"></i>
                    <span>امکانات و مزایا</span>
                </a>
                <a href="/#security-guide" class="mobile-link py-2.5 px-3 rounded-xl hover:bg-indigo-500/10 hover:text-indigo-400 transition-colors flex items-center gap-2.5">
                    <i class="fas fa-book-open text-indigo-400"></i>
                    <span>راهنمای جامع امنیت</span>
                </a>
                <a href="/#performance" class="mobile-link py-2.5 px-3 rounded-xl hover:bg-indigo-500/10 hover:text-emerald-400 transition-colors flex items-center gap-2.5">
                    <i class="fas fa-gauge-high text-emerald-400"></i>
                    <span>سرعت و Core Web Vitals</span>
                </a>
                <a href="/#providers" class="mobile-link py-2.5 px-3 rounded-xl hover:bg-indigo-500/10 hover:text-indigo-400 transition-colors flex items-center gap-2.5">
                    <i class="fas fa-network-wired text-indigo-400"></i>
                    <span>ارائه‌دهندگان جهانی</span>
                </a>
                <a href="/#faq" class="mobile-link py-2.5 px-3 rounded-xl hover:bg-indigo-500/10 hover:text-indigo-400 transition-colors flex items-center gap-2.5">
                    <i class="fas fa-circle-question text-indigo-400"></i>
                    <span>سوالات متداول</span>
                </a>
                <a href="https://www.rtl-theme.com" target="_blank" rel="noopener noreferrer" class="mobile-link py-3 px-4 text-center rounded-xl bg-gradient-to-r from-emerald-500 via-lime-500 to-emerald-600 text-slate-950 font-black mt-2 shadow-lg shadow-emerald-500/20 flex items-center justify-center gap-2 text-xs">
                    <i class="fas fa-crown"></i>
                    <span>فروش انحصاری در راست‌چین (RTL-Theme)</span>
                </a>
            </div>
        </div>
    </header>

    <!-- Global Padding Spacer for Fixed Header -->
    <div class="h-20"></div>
