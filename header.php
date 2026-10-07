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
                if (m && (m[1] === 'light' || m[1] === 'dark')) return decodeURIComponent(m[1]);
                try {
                    var l = localStorage.getItem('guardify_theme');
                    if (l === 'light' || l === 'dark') return l;
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
    
    <!-- Comprehensive SEO Meta Tags -->
    <meta name="description" content="گاردفای پرو (Guardify Pro v4.00)؛ کپچای ۱۰۰٪ بومی و آفلاین وردپرس با مصونیت کامل در شرایط قطعی اینترنت بین‌الملل و اینترنت ملی (نت ملی). جلوگیری از اسپم، حملات Brute-Force و ریزش سبد خرید ووکامرس.">
    <meta name="keywords" content="کپچای بومی, کپچای آفلاین وردپرس, کپچای اینترنت ملی, کپچای نت ملی, امنیت ورود وردپرس, کپچای ووکامرس, ضد اسپم وردپرس, تغییر آدرس wp-login, گاردفای پرو, Guardify Pro, کپچای بدون گوگل, کپچای پازلی فارسی">
    <meta name="author" content="DevBan">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="theme-color" content="#6366f1">
    <meta name="application-name" content="گاردفای پرو Guardify Pro v4.00">
    
    <!-- Resource Hints & DNS Prefetch for Performance -->
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
    <link rel="preconnect" href="https://unpkg.com" crossorigin>
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">
    <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
    <link rel="dns-prefetch" href="https://unpkg.com">

    <!-- Canonical and Social Cards (OpenGraph & Twitter) -->
    <link rel="canonical" href="https://guardifypro.ir/" id="canonical-link">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="fa_IR">
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="og:description" content="کپچای ۱۰۰٪ بومی و آفلاین وردپرس؛ پایداری کامل در زمان اختلال اینترنت بین‌الملل و نت ملی بدون ارسال حتی یک بایت داده به خارج از سرور.">
    <meta property="og:url" content="https://guardifypro.ir/">
    <meta property="og:image" content="https://guardifypro.ir/img/Guardify-Captcha-Pro_result.webp">
    <meta property="og:site_name" content="گاردفای پرو Guardify Pro">
    
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta name="twitter:description" content="کپچای ۱۰۰٪ بومی و آفلاین وردپرس؛ پایداری کامل در زمان اختلال اینترنت بین‌الملل و نت ملی بدون وابستگی خارجی.">
    <meta name="twitter:image" content="https://guardifypro.ir/img/Guardify-Captcha-Pro_result.webp">
    
    <!-- Rich Schema.org Structured Data (JSON-LD) with SoftwareApplication, WebSite, Breadcrumbs & FAQPage -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "SoftwareApplication",
          "@id": "https://guardifypro.ir/#software",
          "name": "Guardify Pro",
          "alternateName": ["گاردفای پرو", "Guardify Captcha Pro", "افزونه کپچای آفلاین وردپرس", "کپچای بومی اینترنت ملی"],
          "applicationCategory": "SecurityApplication",
          "operatingSystem": "WordPress 5.0+, WooCommerce 4.0+, PHP 7.4 - 8.3+",
          "softwareVersion": "4.00 Pro",
          "description": "کپچای ۱۰۰٪ بومی، مستقل و آفلاین وردپرس با اعتبارسنجی سمت سرور، ضد اسپم و سپر امنیتی ورود وردپرس با پایداری کامل در قطعی اینترنت بین‌الملل و شبکه ملی اطلاعات.",
          "offers": {
            "@type": "Offer",
            "price": "299000",
            "priceCurrency": "IRR",
            "availability": "https://schema.org/InStock",
            "url": "https://guardifypro.ir"
          },
          "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "5.0",
            "reviewCount": "128"
          },
          "author": {
            "@type": "Organization",
            "name": "DevBan",
            "url": "https://guardifypro.ir"
          }
        },
        {
          "@type": "WebSite",
          "@id": "https://guardifypro.ir/#website",
          "url": "https://guardifypro.ir/",
          "name": "گاردفای پرو | وب‌سایت رسمی Guardify Pro",
          "description": "وب‌سایت رسمی افزونه گاردفای پرو - کپچای بومی و امنیت ورود وردپرس",
          "inLanguage": "fa-IR"
        },
        {
          "@type": "BreadcrumbList",
          "@id": "https://guardifypro.ir/#breadcrumb",
          "itemListElement": [
            {
              "@type": "ListItem",
              "position": 1,
              "name": "صفحه اصلی",
              "item": "https://guardifypro.ir/"
            },
            {
              "@type": "ListItem",
              "position": 2,
              "name": "شبیه ساز افزونه",
              "item": "https://guardifypro.ir/demo.php"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "@id": "https://guardifypro.ir/#faq",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "عملکرد گاردفای پرو در زمان قطعی اینترنت بین‌الملل و نت ملی چگونه است؟",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "گاردفای پرو ۱۰۰٪ آفلاین و محلی روی سرور یا هاست شما اجرا می‌شود. بر خلاف گوگل ریکپچا و کلودفلر، حتی در شرایط قطعی کامل اینترنت بین‌الملل و فعال بودن اینترنت ملی (نت ملی)، تسویه‌حساب مشتریان، فرم‌های ورود و ثبت‌نام با سرعت زیر ۵ میلی‌ثانیه کار می‌کنند و هیچ سفارشی از دست نمی‌رود."
              }
            },
            {
              "@type": "Question",
              "name": "آیا گاردفای پرو نیاز به API Key یا سرور خارجی دارد؟",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "خیر، هیچ‌گونه نیازی به کلید API، ثبت‌نام در سایت‌های خارجی یا ارتباط شبکه با سرورهای خارجی ندارد و تمام محاسبات با موتور توابع PHP به صورت ایمن در داخل هاست انجام می‌شود."
              }
            },
            {
              "@type": "Question",
              "name": "آیا با ووکامرس، دیجیتس و افزونه‌های کش سازگار است؟",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "بله، سازگاری کامل با فرم پرداخت و تسویه‌حساب ووکامرس، ورود پیامکی دیجیتس (Digits) و کلیه افزونه‌های کش مانند لایت‌اسپید کش (LiteSpeed Cache) و راکت وجود دارد."
              }
            }
          ]
        }
      ]
    }
    </script>

    <!-- Tailwind CDN with Class Dark Mode and Local IRANSans Font Family -->
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
                        sans: ['IRANSans', 'IRANSansWeb', 'IRANYekan', 'sans-serif'],
                        heading: ['IRANSans', 'IRANSansWeb', 'IRANYekan', 'sans-serif']
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
    <link rel="stylesheet" href="/css/captcha-themes.css">
    
    <!-- Main Style (with local IRANSans @font-face suite and cache busting) -->
    <link rel="stylesheet" href="/css/style.css?v=4.50">
    
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
            
            <!-- Desktop Navigation Links (Clean, Spacious & Uncluttered) -->
            <nav class="hidden lg:flex items-center gap-7 text-xs font-black tracking-wider" aria-label="منوی ناوبری اصلی">
                <a href="/#why-guardify" class="text-slate-700 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">چرا گاردفای؟</a>
                <a href="/#captcha-modalities" class="text-slate-700 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">انواع کپچا</a>
                <a href="/#forms-protection" class="text-slate-700 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">فرم‌ها و ووکامرس</a>
                <a href="/#faq" class="text-slate-700 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">سوالات متداول</a>

                <!-- Highlighted Direct Button to Demo Studio -->
                <a href="/demo.php" class="nav-demo-btn px-4 py-2 rounded-xl bg-indigo-600 hover:bg-indigo-700 text-white transition-all font-black flex items-center gap-2 shadow-md shadow-indigo-600/25">
                    <i class="fas fa-desktop text-[12px] text-amber-300"></i>
                    <span>شبیه ساز افزونه</span>
                </a>
            </nav>

            <!-- Actions Bar: Theme Toggle & RTL-Theme Purchase -->
            <div class="flex items-center gap-3">
                <!-- Unified Theme Toggle Button -->
                <button id="theme-toggle" class="theme-toggle cursor-pointer" aria-label="تغییر حالت شب و روز" title="تغییر حالت شب و روز">
                    <i class="fas fa-moon dark:hidden text-indigo-600"></i>
                    <i class="fas fa-sun hidden dark:block text-amber-400"></i>
                </button>
                
                <a href="https://www.rtl-theme.com" target="_blank" rel="noopener noreferrer" class="hidden sm:inline-flex items-center gap-2 bg-gradient-to-r from-emerald-500 via-lime-500 to-emerald-600 hover:from-emerald-400 hover:to-lime-400 text-slate-950 px-4 sm:px-5 py-2.5 rounded-xl text-xs font-black shadow-lg shadow-emerald-500/20 hover:scale-105 transition-all">
                    <i class="fas fa-crown text-slate-950 text-xs"></i>
                    <span>خرید افزونه</span>
                </a>
                
                <button id="mobile-menu-btn" onclick="toggleMobileNavMenu()" class="lg:hidden p-2 text-readable cursor-pointer z-50" aria-label="منوی موبایل">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>

        <script>
        function toggleMobileNavMenu() {
            var mobileMenu = document.getElementById('mobile-menu');
            var mobileBtn = document.getElementById('mobile-menu-btn');
            if (mobileMenu) {
                var isHidden = mobileMenu.classList.contains('hidden');
                if (isHidden) {
                    mobileMenu.classList.remove('hidden');
                } else {
                    mobileMenu.classList.add('hidden');
                }
                if (mobileBtn) {
                    var icon = mobileBtn.querySelector('i');
                    if (icon) {
                        if (isHidden) {
                            icon.className = 'fas fa-xmark text-xl';
                        } else {
                            icon.className = 'fas fa-bars text-xl';
                        }
                    }
                }
            }
        }
        </script>

        <!-- Mobile Drawer Menu (Streamlined, Clear & Clean) -->
        <div id="mobile-menu" class="lg:hidden hidden bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800 backdrop-blur-3xl overflow-hidden transition-all duration-300 shadow-2xl">
            <div class="flex flex-col p-4 gap-2 text-xs font-black">
                <a href="/" class="mobile-link py-2 px-3 rounded-xl text-slate-800 dark:text-slate-200 hover:bg-indigo-50 dark:hover:bg-slate-800 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors flex items-center gap-2.5">
                    <i class="fas fa-home text-indigo-500"></i>
                    <span>صفحه اصلی</span>
                </a>
                <a href="/#why-guardify" class="mobile-link py-2 px-3 rounded-xl text-slate-800 dark:text-slate-200 hover:bg-indigo-50 dark:hover:bg-slate-800 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors flex items-center gap-2.5">
                    <i class="fas fa-shield-halved text-indigo-500"></i>
                    <span>چرا گاردفای پرو؟</span>
                </a>
                <a href="/#captcha-modalities" class="mobile-link py-2 px-3 rounded-xl text-slate-800 dark:text-slate-200 hover:bg-indigo-50 dark:hover:bg-slate-800 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors flex items-center gap-2.5">
                    <i class="fas fa-cube text-purple-500"></i>
                    <span>انواع کپچای بومی</span>
                </a>
                <a href="/#forms-protection" class="mobile-link py-2 px-3 rounded-xl text-slate-800 dark:text-slate-200 hover:bg-indigo-50 dark:hover:bg-slate-800 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors flex items-center gap-2.5">
                    <i class="fas fa-cart-shopping text-emerald-500"></i>
                    <span>فرم‌ها و ووکامرس</span>
                </a>
                <a href="/#faq" class="mobile-link py-2 px-3 rounded-xl text-slate-800 dark:text-slate-200 hover:bg-indigo-50 dark:hover:bg-slate-800 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors flex items-center gap-2.5">
                    <i class="fas fa-circle-question text-amber-500"></i>
                    <span>سوالات متداول</span>
                </a>

                <div class="pt-3 mt-1 border-t border-slate-200 dark:border-slate-800 flex flex-col gap-2">
                    <a href="/demo.php" class="nav-demo-btn mobile-link py-2.5 px-4 rounded-xl bg-indigo-600 hover:bg-indigo-700 text-white font-black flex items-center justify-center gap-2 shadow-md">
                        <i class="fas fa-desktop text-amber-300"></i>
                        <span>شبیه ساز افزونه</span>
                    </a>
                    <a href="https://www.rtl-theme.com" target="_blank" rel="noopener noreferrer" class="mobile-link py-2.5 px-4 text-center rounded-xl bg-gradient-to-r from-emerald-500 via-lime-500 to-emerald-600 text-slate-950 font-black shadow-md flex items-center justify-center gap-2">
                        <i class="fas fa-crown"></i>
                        <span>خرید افزونه از راست‌چین</span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Global Padding Spacer for Fixed Header -->
    <div class="h-20"></div>
