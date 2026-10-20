<?php
/**
 * Guardify Pro Universal Header Component
 * Shared across index.php, demo.php, preview.php, and guide.php
 */
if (!isset($page_title)) {
    $page_title = "گاردفای پرو (Guardify Pro v4.00) | افزونه کپچای بومی، آفلاین و امنیت ورود وردپرس";
}
if (!isset($page_description)) {
    $page_description = "افزونه گاردفای پرو (Guardify Pro)؛ سامانه کپچای ۱۰۰٪ بومی و آفلاین وردپرس و ووکامرس با پایداری کامل در اینترنت ملی، بار مصرفی زیر ۱۰ کیلوبایت روی لود سایت، ۳۵+ تم آماده و استایلر صفحه ورود.";
}
if (!isset($current_page)) {
    $current_page = "home";
}
// Read theme preference from Cookie for instant server-rendered HTML class
$server_theme = isset($_COOKIE['guardify_theme']) ? $_COOKIE['guardify_theme'] : (isset($_COOKIE['user-theme']) ? $_COOKIE['user-theme'] : '');
$html_theme_class = ($server_theme === 'light' || $server_theme === 'dark') ? $server_theme : '';
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl" class="<?php echo htmlspecialchars($html_theme_class); ?> scroll-smooth" data-theme="<?php echo htmlspecialchars($html_theme_class); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
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
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta name="keywords" content="گاردفای پرو, Guardify Pro, افزونه کپچای بومی وردپرس, کپچای آفلاین وردپرس, کپچای اینترنت ملی, کپچای نت ملی, امنیت ورود وردپرس, کپچای ووکامرس, ضد اسپم وردپرس, تغییر ظاهر wp-login, کپچای دیجیتس, کپچای بدون گوگل, کپچای پازلی فارسی">
    <meta name="author" content="DevBan">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="theme-color" content="#4f46e5" media="(prefers-color-scheme: light)">
    <meta name="theme-color" content="#070b14" media="(prefers-color-scheme: dark)">
    <meta name="application-name" content="گاردفای پرو Guardify Pro">
    <meta name="apple-mobile-web-app-title" content="گاردفای پرو">
    <meta name="format-detection" content="telephone=no">
    
    <!-- Language & Regional Targeting -->
    <link rel="alternate" hreflang="fa-IR" href="https://guardifypro.ir/">
    <link rel="alternate" hreflang="x-default" href="https://guardifypro.ir/">

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
    <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta property="og:url" content="https://guardifypro.ir/">
    <meta property="og:image" content="https://guardifypro.ir/img/Guardify-Captcha-Pro_result.webp">
    <meta property="og:image:alt" content="پیشخوان و ویژگی‌های افزونه کپچای بومی گاردفای پرو برای وردپرس و ووکامرس">
    <meta property="og:site_name" content="گاردفای پرو | Guardify Pro">
    
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta name="twitter:image" content="https://guardifypro.ir/img/Guardify-Captcha-Pro_result.webp">
    <meta name="twitter:image:alt" content="افزونه گاردفای پرو - سامانه کپچای ۱۰۰٪ بومی و سپر امنیتی ورود وردپرس">
    
    <!-- Rich Schema.org Structured Data (JSON-LD) with SoftwareApplication, Organization, WebSite, HowTo, BreadcrumbList & FAQPage -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "SoftwareApplication",
          "@id": "https://guardifypro.ir/#software",
          "name": "گاردفای پرو (Guardify Pro)",
          "alternateName": ["Guardify Captcha Pro", "افزونه کپچای بومی وردپرس", "کپچای آفلاین ووکامرس", "سپر امنیتی ورود وردپرس"],
          "applicationCategory": "SecurityApplication",
          "applicationSubCategory": "WordPress Security & Anti-Spam Plugin",
          "operatingSystem": "WordPress 5.0+, WooCommerce 4.0+, PHP 7.4 - 8.3+",
          "softwareVersion": "4.00 Pro",
          "description": "سامانه کپچای ۱۰۰٪ بومی و آفلاین وردپرس با بار مصرفی زیر ۱۰ کیلوبایت روی لود سایت، استایلر حرفه‌ای صفحه ورود wp-login.php، سازگاری کامل با ووکامرس و دیجیتس و پایداری تضمینی در اینترنت ملی.",
          "featureList": [
            "اجرای ۱۰۰٪ بومی و آفلاین روی سرور بدون نیاز به گوگل یا کلودفلر",
            "بار مصرفی فوق‌سبک زیر ۱۰ کیلوبایت روی لود صفحات فرانت‌اند سایت",
            "۶ نوع چالش متنوع: اسلایدر پازلی، جمع و ضرب ریاضی، معادله ۳ بخشی، تطبیق آیکون و هانی‌پات نامرئی",
            "بیش از ۳۵ تم رنگی آماده و استودیوی بازطراحی صفحه ورود وردپرس (wp-login.php)",
            "سازگاری کامل با ووکامرس، دیجیتس (Digits)، المنتور و افزونه‌های کش لایت‌اسپید و راکت",
            "مجهز به ۶ سپر امنیتی ضد نفوذ (Login Hardening) و فایروال ضد Brute-Force"
          ],
          "offers": {
            "@type": "Offer",
            "price": "299000",
            "priceCurrency": "IRR",
            "availability": "https://schema.org/InStock",
            "url": "https://www.rtl-theme.com"
          },
          "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "5.0",
            "bestRating": "5",
            "worstRating": "1",
            "ratingCount": "142",
            "reviewCount": "128"
          },
          "author": {
            "@type": "Organization",
            "@id": "https://guardifypro.ir/#organization",
            "name": "DevBan",
            "url": "https://guardifypro.ir/"
          }
        },
        {
          "@type": "WebSite",
          "@id": "https://guardifypro.ir/#website",
          "url": "https://guardifypro.ir/",
          "name": "گاردفای پرو | وب‌سایت رسمی افزونه Guardify Pro",
          "description": "معرفی، بررسی تخصصی و دموی آنلاین افزونه کپچای بومی و امنیت ورود وردپرس گاردفای پرو",
          "inLanguage": "fa-IR",
          "publisher": {
            "@id": "https://guardifypro.ir/#organization"
          }
        },
        {
          "@type": "HowTo",
          "@id": "https://guardifypro.ir/#howto-setup",
          "name": "نحوه نصب و فعال‌سازی کپچای بومی گاردفای پرو در وردپرس",
          "description": "راه‌اندازی کامل کپچای آفلاین و سپر امنیتی ورود وردپرس در کمتر از ۶۰ ثانیه بدون نیاز به کلید API.",
          "totalTime": "PT1M",
          "step": [
            {
              "@type": "HowToStep",
              "position": 1,
              "name": "نصب و فعال‌سازی افزونه",
              "text": "فایل افزونه گاردفای پرو را در بخش افزونه‌های پیشخوان وردپرس بارگذاری و فعال کنید."
            },
            {
              "@type": "HowToStep",
              "position": 2,
              "name": "انتخاب نوع چالش و تم رنگی",
              "text": "از پنل تنظیمات فارسی، چالش دلخواه (اسلایدر، ریاضی، آیکون یا هانی‌پات) و تم رنگی هماهنگ با قالب خود را انتخاب نمایید."
            },
            {
              "@type": "HowToStep",
              "position": 3,
              "name": "تیک زدن فرم‌های هدف",
              "text": "فرم‌های مورد نظر شامل ورود وردپرس، تسویه‌حساب ووکامرس، دیجیتس یا فرم‌سازها را با یک کلیک فعال کنید."
            }
          ]
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
              "name": "دموی افزونه",
              "item": "https://guardifypro.ir/demo.php"
            },
            {
              "@type": "ListItem",
              "position": 3,
              "name": "راهنمای جامع امنیت و تنظیمات",
              "item": "https://guardifypro.ir/guide.php"
            }
          ]
        },
        {
          "@type": "FAQPage",
          "@id": "https://guardifypro.ir/#faq-schema",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "عملکرد گاردفای پرو در زمان قطعی اینترنت بین‌الملل و نت ملی چگونه است؟",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "گاردفای پرو ۱۰۰٪ آفلاین و محلی روی سرور یا هاست شما اجرا می‌شود. بر خلاف گوگل ریکپچا و کلودفلر، حتی در شرایط قطعی کامل اینترنت بین‌الملل و فعال بودن اینترنت ملی (نت ملی)، تسویه‌حساب مشتریان، فرم‌های ورود و ثبت‌نام با سرعت زیر ۱ میلی‌ثانیه کار می‌کنند و هیچ سفارشی از دست نمی‌رود."
              }
            },
            {
              "@type": "Question",
              "name": "باری که گاردفای پرو روی لود صفحات سایت می‌اندازد چقدر است؟",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "با وجود امکانات گسترده در پیشخوان مدیریت، باری که گاردفای پرو روی لود فرانت‌اند صفحات سایت شما می‌اندازد زیر ۱۰ کیلوبایت است؛ بنابراین کوچک‌ترین افت سرعتی در لود سایت یا امتیاز Google PageSpeed ایجاد نمی‌کند."
              }
            },
            {
              "@type": "Question",
              "name": "آیا گاردفای پرو نیاز به API Key یا ثبت‌نام در سایت‌های خارجی دارد؟",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "خیر، موتور بومی گاردفای پرو هیچ‌گونه نیازی به کلید API، ثبت‌نام در سرویس‌های خارجی یا ارتباط شبکه با سرورهای بیرون از کشور ندارد و تمام محاسبات به صورت ایمن در داخل هاست شما انجام می‌شود."
              }
            },
            {
              "@type": "Question",
              "name": "آیا با ووکامرس، دیجیتس و افزونه‌های کش مانند لایت‌اسپید سازگار است؟",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "بله، گاردفای پرو به صورت یکپارچه از فرم‌های ورود، ثبت‌نام و تسویه‌حساب ووکامرس (WooCommerce) و پنجره‌های پیامکی دیجیتس (Digits) محافظت می‌کند و به لطف فناوری توکن پویا (AJAX Nonce)، با افزونه‌های LiteSpeed Cache و WP Rocket ۱۰۰٪ سازگار است."
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
                        sans: ['IRANSans', 'IRANSansWeb', 'IRANYekan', 'Vazirmatn', 'sans-serif'],
                        heading: ['IRANSans', 'IRANSansWeb', 'IRANYekan', 'Vazirmatn', 'sans-serif']
                    }
                }
            }
        };
    </script>
    
    <!-- Local & Vendor Icons & Styles (Font Awesome 6.5.1 with CDN + Local Fallback) -->
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <link rel="stylesheet" href="/css/captcha-themes.css">
    
    <!-- Main Style (with local IRANSans @font-face suite and cache busting) -->
    <link rel="stylesheet" href="/css/style.css?v=4.65">
    
    <!-- Universal Theme Manager Script -->
    <script src="/js/theme-manager.js?v=4.30"></script>
</head>
<body class="transition-colors duration-300 min-h-screen flex flex-col selection:bg-indigo-600 selection:text-white">

    <!-- Accessibility Skip Link for SEO & Keyboard Navigation -->
    <a href="#main-content" class="sr-only focus:not-sr-only focus:fixed focus:top-3 focus:right-3 focus:z-[100] focus:px-5 focus:py-2.5 focus:rounded-xl focus:bg-indigo-600 focus:text-white focus:font-black focus:text-xs focus:shadow-2xl">
        پرش به محتوای اصلی صفحه
    </a>

    <!-- Atmospheric Modern Multi-Layered Background FX -->
    <div class="background-elements fixed inset-0 pointer-events-none -z-20 overflow-hidden" aria-hidden="true">
        <div id="mouse-spotlight" class="mouse-spotlight"></div>
        <div class="mesh-gradient mesh-1"></div>
        <div class="mesh-gradient mesh-2"></div>
        <div class="mesh-gradient mesh-3"></div>
        <div class="mesh-gradient mesh-4"></div>
        <div class="cyber-grid-overlay"></div>
        <canvas id="cyber-particles-canvas" class="absolute inset-0 w-full h-full pointer-events-none opacity-25"></canvas>
    </div>

    <!-- Unified User-Friendly Responsive Header -->
    <header class="fixed top-0 w-full z-50 glass-nav border-b border-slate-200/80 dark:border-slate-800/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 h-20 flex items-center justify-between gap-4">
            
            <!-- Zone 1: Brand Wordmark -->
            <a href="/" class="flex items-center gap-3 group cursor-pointer shrink-0 focus:outline-none focus-visible:ring-2 focus-visible:ring-indigo-500 rounded-xl" aria-label="گاردفای پرو - صفحه اصلی">
                <div class="w-11 h-11 rounded-2xl bg-gradient-to-tr from-indigo-600 to-indigo-500 flex items-center justify-center shadow-lg shadow-indigo-600/25 group-hover:bg-indigo-500 transition-colors">
                    <i class="fas fa-shield-halved text-white text-lg"></i>
                </div>
                <div class="text-right">
                    <span class="text-lg sm:text-xl font-black tracking-tight leading-tight block text-slate-900 dark:text-white whitespace-nowrap">
                        گاردفای <span class="text-indigo-600 dark:text-indigo-400">پرو</span>
                    </span>
                    <span class="text-[10px] text-slate-500 dark:text-slate-400 font-bold block whitespace-nowrap">
                        کپچای بومی و امنیت ورود وردپرس
                    </span>
                </div>
            </a>
            
            <!-- Zone 2: Desktop Single-Line Navigation Links -->
            <nav class="hidden lg:flex items-center gap-6 xl:gap-7 text-xs font-bold text-slate-700 dark:text-slate-300" aria-label="منوی ناوبری اصلی">
                <a href="/#why-guardify" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors whitespace-nowrap shrink-0 py-1">چرا گاردفای؟</a>
                <a href="/#captcha-modalities" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors whitespace-nowrap shrink-0 py-1">انواع چالش و تم‌ها</a>
                <a href="/#login-styler" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors whitespace-nowrap shrink-0 py-1">طراحی صفحه ورود</a>
                <a href="/#forms-protection" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors whitespace-nowrap shrink-0 py-1">ووکامرس و فرم‌ها</a>
                <a href="/#comparison" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors whitespace-nowrap shrink-0 py-1">مقایسه فنی</a>
                <a href="/#faq" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors whitespace-nowrap shrink-0 py-1">سوالات متداول</a>
                <a href="/guide.php" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors whitespace-nowrap shrink-0 py-1">راهنمای پنل افزونه</a>
            </nav>

            <!-- Zone 3: Primary Actions & Theme Switcher -->
            <div class="flex items-center gap-2.5 sm:gap-3 shrink-0">
                <!-- Theme Toggle Button -->
                <button id="theme-toggle" type="button" class="theme-toggle w-10 h-10 rounded-xl flex items-center justify-center border border-slate-200 dark:border-slate-700 bg-white/80 dark:bg-slate-800/80 hover:border-indigo-500 transition-colors cursor-pointer" aria-label="تغییر حالت نمایش روز و شب" title="تغییر حالت نمایش روز و شب">
                    <i class="fas fa-moon dark:hidden text-indigo-600 text-sm"></i>
                    <i class="fas fa-sun hidden dark:block text-amber-400 text-sm"></i>
                </button>

                <!-- Live Demo Button -->
                <a href="/demo.php" class="hidden sm:inline-flex items-center gap-2 px-4 py-2.5 rounded-xl bg-indigo-600 hover:bg-indigo-700 text-white text-xs font-black transition-all shadow-md shadow-indigo-600/20 whitespace-nowrap shrink-0">
                    <i class="fas fa-desktop text-amber-300 text-xs"></i>
                    <span>دموی افزونه</span>
                </a>
                
                <!-- RTL-Theme Direct Purchase CTA -->
                <a href="https://www.rtl-theme.com" target="_blank" rel="noopener noreferrer" class="hidden md:inline-flex items-center gap-2 bg-gradient-to-r from-emerald-500 via-teal-500 to-emerald-600 hover:from-emerald-400 hover:to-teal-500 text-slate-950 px-4 py-2.5 rounded-xl text-xs font-black shadow-md shadow-emerald-500/20 transition-all whitespace-nowrap shrink-0">
                    <i class="fas fa-bag-shopping text-slate-950 text-xs"></i>
                    <span>خرید از راست‌چین</span>
                </a>
                
                <!-- Mobile Hamburger Button -->
                <button id="mobile-menu-btn" type="button" onclick="toggleMobileNavMenu()" class="lg:hidden w-10 h-10 rounded-xl border border-slate-200 dark:border-slate-700 bg-white/80 dark:bg-slate-800/80 flex items-center justify-center text-slate-800 dark:text-slate-100 cursor-pointer z-50" aria-label="باز کردن منوی موبایل" aria-expanded="false" aria-controls="mobile-menu">
                    <i class="fas fa-bars text-lg"></i>
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
                    if (mobileBtn) mobileBtn.setAttribute('aria-expanded', 'true');
                } else {
                    mobileMenu.classList.add('hidden');
                    if (mobileBtn) mobileBtn.setAttribute('aria-expanded', 'false');
                }
                if (mobileBtn) {
                    var icon = mobileBtn.querySelector('i');
                    if (icon) {
                        icon.className = isHidden ? 'fas fa-xmark text-lg' : 'fas fa-bars text-lg';
                    }
                }
            }
        }
        </script>

        <!-- Responsive Mobile Drawer Menu -->
        <div id="mobile-menu" class="lg:hidden hidden bg-white/95 dark:bg-slate-900/95 border-b border-slate-200 dark:border-slate-800 backdrop-blur-2xl overflow-hidden transition-all duration-200 shadow-2xl">
            <div class="max-w-7xl mx-auto px-4 py-4 flex flex-col gap-1.5 text-xs font-bold">
                <a href="/#why-guardify" class="mobile-link py-2.5 px-3.5 rounded-xl text-slate-800 dark:text-slate-200 hover:bg-indigo-50 dark:hover:bg-slate-800 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors flex items-center justify-between">
                    <span class="flex items-center gap-2.5"><i class="fas fa-bolt text-emerald-500 w-4 text-center"></i> چرا گاردفای پرو؟ (مقایسه پایداری)</span>
                    <i class="fas fa-angle-left text-slate-400"></i>
                </a>
                <a href="/#captcha-modalities" class="mobile-link py-2.5 px-3.5 rounded-xl text-slate-800 dark:text-slate-200 hover:bg-indigo-50 dark:hover:bg-slate-800 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors flex items-center justify-between">
                    <span class="flex items-center gap-2.5"><i class="fas fa-sliders text-indigo-500 w-4 text-center"></i> ۶ نوع چالش کپچا و ۳۵+ تم رنگی</span>
                    <i class="fas fa-angle-left text-slate-400"></i>
                </a>
                <a href="/#login-styler" class="mobile-link py-2.5 px-3.5 rounded-xl text-slate-800 dark:text-slate-200 hover:bg-indigo-50 dark:hover:bg-slate-800 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors flex items-center justify-between">
                    <span class="flex items-center gap-2.5"><i class="fas fa-paintbrush text-purple-500 w-4 text-center"></i> استودیوی طراحی صفحه ورود (WP-Login)</span>
                    <i class="fas fa-angle-left text-slate-400"></i>
                </a>
                <a href="/#forms-protection" class="mobile-link py-2.5 px-3.5 rounded-xl text-slate-800 dark:text-slate-200 hover:bg-indigo-50 dark:hover:bg-slate-800 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors flex items-center justify-between">
                    <span class="flex items-center gap-2.5"><i class="fas fa-cart-shopping text-emerald-500 w-4 text-center"></i> حفاظت از ووکامرس، دیجیتس و فرم‌سازها</span>
                    <i class="fas fa-angle-left text-slate-400"></i>
                </a>
                <a href="/#comparison" class="mobile-link py-2.5 px-3.5 rounded-xl text-slate-800 dark:text-slate-200 hover:bg-indigo-50 dark:hover:bg-slate-800 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors flex items-center justify-between">
                    <span class="flex items-center gap-2.5"><i class="fas fa-scale-balanced text-amber-500 w-4 text-center"></i> جدول مقایسه فنی با ریکپچا و کلودفلر</span>
                    <i class="fas fa-angle-left text-slate-400"></i>
                </a>
                <a href="/#faq" class="mobile-link py-2.5 px-3.5 rounded-xl text-slate-800 dark:text-slate-200 hover:bg-indigo-50 dark:hover:bg-slate-800 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors flex items-center justify-between">
                    <span class="flex items-center gap-2.5"><i class="fas fa-circle-question text-cyan-500 w-4 text-center"></i> سوالات متداول پیش از خرید</span>
                    <i class="fas fa-angle-left text-slate-400"></i>
                </a>
                <a href="/guide.php" class="mobile-link py-2.5 px-3.5 rounded-xl text-slate-800 dark:text-slate-200 hover:bg-indigo-50 dark:hover:bg-slate-800 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors flex items-center justify-between">
                    <span class="flex items-center gap-2.5"><i class="fas fa-book-open text-rose-500 w-4 text-center"></i> راهنمای پنل افزونه (تولتیپ تعاملی)</span>
                    <i class="fas fa-angle-left text-slate-400"></i>
                </a>

                <div class="pt-3 mt-1 border-t border-slate-200 dark:border-slate-800 grid grid-cols-1 sm:grid-cols-2 gap-2.5">
                    <a href="/demo.php" class="mobile-link py-3 px-4 rounded-xl bg-indigo-600 hover:bg-indigo-700 text-white font-black flex items-center justify-center gap-2 shadow-md">
                        <i class="fas fa-desktop text-amber-300"></i>
                        <span>ورود به دموی افزونه</span>
                    </a>
                    <a href="https://www.rtl-theme.com" target="_blank" rel="noopener noreferrer" class="mobile-link py-3 px-4 text-center rounded-xl bg-gradient-to-r from-emerald-500 via-teal-500 to-emerald-600 text-slate-950 font-black shadow-md flex items-center justify-center gap-2">
                        <i class="fas fa-bag-shopping"></i>
                        <span>خرید لایسنس از راست‌چین</span>
                    </a>
                </div>
            </div>
        </div>
    </header>

    <!-- Global Padding Spacer for Fixed Header -->
    <div class="h-20"></div>
