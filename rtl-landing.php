<?php
/**
 * Guardify Pro - Official Landing Page & Technical Presentation (RTL)
 * 100% Native, Offline, Zero-Dependency WordPress Security & CAPTCHA Solution
 */
$page_title = "گاردفای پرو (Guardify Pro v4.00) | سامانه کپچای سبک و محافظت از فرم‌های وردپرس";
$page_description = "گاردفای پرو (Guardify Pro): افزونه کپچای سبک، محلی و مستقل وردپرس و ووکامرس با بار مصرفی زیر ۱۰ کیلوبایت روی لود سایت، ۴ مدل کپچای لمسی و شخصی‌سازی صفحه ورود بدون وابستگی به سرورهای خارجی.";
$canonical_url = "https://guardifypro.ir/rtl-landing.php";
?>
<!DOCTYPE html>
<html lang="fa-IR" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <title><?php echo htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8'); ?></title>
    
    <!-- Primary Semantic SEO Meta Tags -->
    <meta name="description" content="<?php echo htmlspecialchars($page_description, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="keywords" content="گاردفای پرو, افزونه کپچا وردپرس, کپچا ووکامرس, جایگزین ریکپچا گوگل, امنیت ورود وردپرس, کپچای آفلاین وردپرس, افزونه ضد اسپم وردپرس, تغییر ظاهر صفحه ورود وردپرس, Guardify Pro">
    <meta name="author" content="تیم توسعه گاردفای پرو (DevBan)">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="theme-color" content="#4f46e5">
    <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8'); ?>">

    <!-- Open Graph / Social Sharing Meta Tags -->
    <meta property="og:type" content="product">
    <meta property="og:locale" content="fa_IR">
    <meta property="og:site_name" content="گاردفای پرو | Guardify Pro">
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($page_description, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:url" content="<?php echo htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:image" content="https://guardifypro.ir/screenshots/01-hero-overview.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="اینفوگرافی معرفی افزونه کپچای بومی و امنیت فرم‌های وردپرس گاردفای پرو">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:image" content="https://guardifypro.ir/screenshots/01-hero-overview.png">

    <!-- JSON-LD Structured Data for Search Engines -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "SoftwareApplication",
      "name": "گاردفای پرو (Guardify Pro)",
      "operatingSystem": "WordPress 5.8+, WooCommerce 6.0+, PHP 7.4+",
      "applicationCategory": "SecurityApplication",
      "softwareVersion": "4.00",
      "description": "<?php echo addslashes($page_description); ?>",
      "url": "<?php echo addslashes($canonical_url); ?>",
      "offers": {
        "@type": "Offer",
        "price": "599000",
        "priceCurrency": "IRR",
        "availability": "https://schema.org/InStock"
      }
    }
    </script>

    <!-- Preconnect & Typography Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.1/css/all.min.css">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#4f46e5',
                    }
                }
            }
        };
    </script>

    <!-- Embedded Guardify Demo & Captcha Theme Styles -->
    <link rel="stylesheet" href="/css/captcha-themes.css">

    <style>
        /* =========================================================================
           LOCAL PERSIAN FONT-FACE DECLARATIONS (IRANSansWeb & Vazir)
           ========================================================================= */
        @font-face {
            font-family: 'IRANSansWeb';
            src: url('fonts/IRANSansWeb.woff2') format('woff2');
            font-weight: 400;
            font-style: normal;
            font-display: swap;
        }
        @font-face {
            font-family: 'IRANSansWeb';
            src: url('fonts/IRANSansWeb_Medium.woff2') format('woff2');
            font-weight: 500;
            font-style: normal;
            font-display: swap;
        }
        @font-face {
            font-family: 'IRANSansWeb';
            src: url('fonts/IRANSansWeb_Bold.woff2') format('woff2');
            font-weight: 700;
            font-style: normal;
            font-display: swap;
        }
        @font-face {
            font-family: 'IRANSansWeb';
            src: url('fonts/IRANSansWeb_Black.woff2') format('woff2');
            font-weight: 900;
            font-style: normal;
            font-display: swap;
        }
        @font-face {
            font-family: 'Vazir';
            src: url('fonts/Vazir.woff2') format('woff2');
            font-weight: 400;
            font-style: normal;
            font-display: swap;
        }

        /* =========================================================================
           1. UNIFORM GLOBAL FONT-FAMILY & FLUID SCALABLE TYPE SYSTEM
           ========================================================================= */
        :root {
            --font-persian: 'IRANSansWeb', 'Vazirmatn', 'Vazir', 'IRANSans', system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;

            --type-display: clamp(2rem, 3.8vw + 0.9rem, 3.5rem);
            --type-h1:      clamp(1.45rem, 2.4vw + 0.65rem, 2.2rem);
            --type-h2:      clamp(1.2rem, 1.8vw + 0.5rem, 1.65rem);
            --type-h3:      clamp(1.05rem, 1.2vw + 0.45rem, 1.3rem);
            --type-h4:      clamp(0.95rem, 0.9vw + 0.35rem, 1.1rem);
            --type-lead:    clamp(0.95rem, 0.6vw + 0.45rem, 1.1rem);
            --type-body:    clamp(0.88rem, 0.35vw + 0.5rem, 0.98rem);
            --type-sm:      clamp(0.82rem, 0.25vw + 0.45rem, 0.9rem);
            --type-xs:      0.78rem;
            --type-micro:   0.72rem;
        }

        /* Enforce Uniform Font Family Globally Across Text Elements (Excluding FontAwesome Icons) */
        html, body, div, span:not([class*="fa-"]):not(.fa):not(.fas):not(.far):not(.fab),
        applet, object, iframe,
        h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big,
        cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong,
        sub, sup, tt, var, b, u, center, dl, dt, dd, ol, ul, li, fieldset, form,
        label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article,
        aside, canvas, details, embed, figure, figcaption, footer, header, hgroup,
        menu, nav, output, ruby, section, summary, time, mark, audio, video,
        input, button, select, textarea {
            font-family: var(--font-persian) !important;
            letter-spacing: normal !important;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-rendering: optimizeLegibility;
        }

        /* Strictly Protect FontAwesome Icons & Their ::before / ::after Pseudo-elements */
        i.fa, i.fas, i.far, i.fal, i.fad, i.fab,
        .fa, .fas, .far, .fal, .fad, .fab,
        .fa-solid, .fa-regular, .fa-brands,
        [class*="fa-"], [class^="fa-"],
        i.fa::before, i.fas::before, i.far::before, i.fab::before,
        .fa::before, .fas::before, .far::before, .fal::before, .fad::before, .fab::before,
        .fa-solid::before, .fa-regular::before, .fa-brands::before,
        [class*="fa-"]::before, [class^="fa-"]::before,
        [class*="fa-"]::after, [class^="fa-"]::after {
            font-family: "Font Awesome 6 Free", "Font Awesome 6 Brands", "FontAwesome" !important;
            font-style: normal !important;
            font-variant: normal !important;
            font-weight: 900 !important;
            line-height: 1 !important;
            text-rendering: auto !important;
            -webkit-font-smoothing: antialiased !important;
            display: inline-block !important;
        }

        .fab, .fa-brands, .fab::before, .fa-brands::before {
            font-family: "Font Awesome 6 Brands", "FontAwesome" !important;
            font-weight: 400 !important;
        }

        /* Scalable Modular Type Classes with Balanced Line Heights */
        .type-display {
            font-size: var(--type-display) !important;
            line-height: 1.25 !important;
            font-weight: 900 !important;
        }
        .type-h1 {
            font-size: var(--type-h1) !important;
            line-height: 1.35 !important;
            font-weight: 900 !important;
        }
        .type-h2 {
            font-size: var(--type-h2) !important;
            line-height: 1.4 !important;
            font-weight: 900 !important;
        }
        .type-h3 {
            font-size: var(--type-h3) !important;
            line-height: 1.45 !important;
            font-weight: 800 !important;
        }
        .type-h4 {
            font-size: var(--type-h4) !important;
            line-height: 1.45 !important;
            font-weight: 800 !important;
        }
        .type-lead {
            font-size: var(--type-lead) !important;
            line-height: 1.75 !important;
            font-weight: 600 !important;
        }
        .type-body {
            font-size: var(--type-body) !important;
            line-height: 1.7 !important;
            font-weight: 500 !important;
        }
        .type-sm {
            font-size: var(--type-sm) !important;
            line-height: 1.65 !important;
            font-weight: 600 !important;
        }
        .type-xs {
            font-size: var(--type-xs) !important;
            line-height: 1.5 !important;
            font-weight: 700 !important;
        }
        .type-micro {
            font-size: var(--type-micro) !important;
            line-height: 1.45 !important;
            font-weight: 800 !important;
        }

        /* =========================================================================
           2. ZERO MOTION ARCHITECTURE (STRICTLY NO ANIMATIONS / TRANSITIONS)
           ========================================================================= */
        *, *::before, *::after, *:hover, *:focus, *:active {
            transition: none !important;
            transition-duration: 0s !important;
            animation: none !important;
            animation-duration: 0s !important;
        }

        /* Make Captcha Top Radar Bar Static & Colorful Infographic Accent */
        .guardify-top-radar-beam {
            left: 0 !important;
            width: 100% !important;
            height: 100% !important;
            background: linear-gradient(90deg, #6366f1, #22d3ee, #10b981) !important;
            animation: none !important;
        }

        body {
            direction: rtl;
            text-align: right;
            margin: 0;
            padding: 1.75rem 1rem;
            background-color: #090d1a;
            background-image:
                radial-gradient(circle at 15% 15%, rgba(99, 102, 241, 0.22) 0%, transparent 45%),
                radial-gradient(circle at 85% 35%, rgba(16, 185, 129, 0.16) 0%, transparent 45%),
                radial-gradient(circle at 50% 85%, rgba(139, 92, 246, 0.2) 0%, transparent 50%),
                url("data:image/svg+xml,%3Csvg width='120' height='120' viewBox='0 0 120 120' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' stroke='%23818cf8' stroke-width='1.2' stroke-opacity='0.08'%3E%3Cpath d='M30 14l14 6v13c0 10-6 17-14 21-8-4-14-11-14-21V20l14-6z'/%3E%3Crect x='78' y='24' width='22' height='18' rx='4'/%3E%3Cpath d='M83 24v-5a6 6 0 0 1 12 0v5'/%3E%3Ccircle cx='30' cy='88' r='13'/%3E%3Cpath d='M23 88l5 5 9-9'/%3E%3Cpath d='M89 76l11 6v12l-11 6-11-6V82l11-6z'/%3E%3C/g%3E%3C/svg%3E"),
                linear-gradient(135deg, #090d1a 0%, #17153b 50%, #090d1a 100%);
            background-size: 100% 100%, 100% 100%, 100% 100%, 120px 120px, 100% 100%;
            color: #0f172a;
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* Poster Canvas (Strictly 960px Cohesive Infographic Frame on Desktop, 100% Fluid on Mobile) */
        .poster-container {
            width: 100%;
            max-width: 960px;
            margin: 0 auto;
            padding: 1.75rem;
            background-color: #f8fafc;
            background-image:
                radial-gradient(circle at 10% 8%, rgba(99, 102, 241, 0.09) 0%, transparent 38%),
                radial-gradient(circle at 90% 48%, rgba(16, 185, 129, 0.08) 0%, transparent 40%),
                radial-gradient(circle at 15% 92%, rgba(168, 85, 247, 0.09) 0%, transparent 38%),
                url("data:image/svg+xml,%3Csvg width='144' height='144' viewBox='0 0 144 144' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' stroke='%234f46e5' stroke-width='1.15' stroke-opacity='0.042' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpath d='M36 16l15 6v14c0 11-6.5 18.5-15 22.5-8.5-4-15-11.5-15-22.5V22l15-6z'/%3E%3Cpath d='M31 37l4 4 8-8'/%3E%3Crect x='96' y='26' width='24' height='20' rx='4'/%3E%3Cpath d='M102 26v-5a6 6 0 0 1 12 0v5'/%3E%3Ccircle cx='108' cy='36' r='2'/%3E%3Ccircle cx='36' cy='106' r='16'/%3E%3Cpath d='M25 106h22M36 95a19 19 0 0 1 0 22M36 95a19 19 0 0 0 0 22'/%3E%3Ccircle cx='102' cy='106' r='6'/%3E%3Cpath d='M108 106h14v5h-4v-5'/%3E%3C/g%3E%3C/svg%3E"),
                linear-gradient(180deg, #f8fafc 0%, #f1f5f9 50%, #eef2ff 100%);
            background-size: 100% 100%, 100% 100%, 100% 100%, 144px 144px, 100% 100%;
            box-shadow:
                0 30px 70px -15px rgba(0, 0, 0, 0.65),
                0 0 45px -10px rgba(99, 102, 241, 0.25),
                0 0 0 2px rgba(148, 163, 184, 0.35),
                inset 0 1px 0 rgba(255, 255, 255, 0.9);
            border-radius: 1.75rem;
            position: relative;
            display: flex;
            flex-direction: column;
            gap: 0;
            box-sizing: border-box;
        }

        /* Standardized Infographic Section Container (Compact & Balanced, Zero Ugly Empty Space) */
        .infographic-section {
            width: 100%;
            border-radius: 1.35rem;
            padding: 1.65rem 1.65rem;
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            gap: 1.25rem;
            box-shadow:
                0 12px 28px -8px rgba(15, 23, 42, 0.08),
                inset 0 1px 0 rgba(255, 255, 255, 0.75);
            box-sizing: border-box;
        }

        /* Cohesive Vertical Infographic Connector Between Sections */
        .infographic-connector {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 0;
            position: relative;
            z-index: 10;
        }

        .infographic-connector::before,
        .infographic-connector::after {
            content: "";
            display: block;
            width: 3px;
            height: 10px;
            background: linear-gradient(180deg, #818cf8, #6366f1);
        }

        .connector-pill {
            display: inline-flex;
            align-items: center;
            gap: 0.55rem;
            padding: 0.4rem 1.1rem;
            border-radius: 9999px;
            background:
                radial-gradient(circle at 50% 0%, rgba(129, 140, 248, 0.28), transparent 70%),
                linear-gradient(135deg, rgba(30, 41, 59, 0.95) 0%, rgba(15, 23, 42, 0.98) 100%);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            border: 1.5px solid #6366f1;
            box-shadow:
                0 6px 18px -4px rgba(15, 23, 42, 0.3),
                0 0 15px -3px rgba(99, 102, 241, 0.35),
                inset 0 1px 0 rgba(255, 255, 255, 0.18);
            color: #fef08a;
            font-size: var(--type-xs);
            font-weight: 900;
            text-align: center;
        }

        /* =========================================================================
           RESPONSIVE MEDIA QUERIES FOR 960PX CONTAINER & TOUCH-SCREEN READABILITY
           ========================================================================= */
        @media (max-width: 991px) {
            body {
                padding: 1rem 0.65rem;
            }
            .poster-container {
                width: 100% !important;
                max-width: 100% !important;
                padding: 1.15rem !important;
                border-radius: 1.35rem !important;
            }
            .infographic-section {
                padding: 1.35rem 1.15rem !important;
                gap: 1.1rem !important;
            }
        }

        @media (max-width: 767px) {
            :root {
                --type-display: 1.85rem;
                --type-h1:      1.32rem;
                --type-h2:      1.14rem;
                --type-h3:      1.02rem;
                --type-h4:      0.94rem;
                --type-lead:    0.92rem;
                --type-body:    0.86rem;
                --type-sm:      0.81rem;
                --type-xs:      0.76rem;
                --type-micro:   0.7rem;
            }
            body {
                padding: 0 !important;
            }
            .poster-container {
                width: 100% !important;
                max-width: 100% !important;
                margin: 0 !important;
                padding: 0.75rem !important;
                border-radius: 0 !important;
                box-shadow: none !important;
            }
            .infographic-section {
                padding: 1.1rem 0.9rem !important;
                border-radius: 1.1rem !important;
                gap: 0.95rem !important;
            }
            .connector-pill {
                padding: 0.35rem 0.85rem;
                font-size: 0.74rem;
                max-width: 94%;
            }
        }

        @media (max-width: 480px) {
            :root {
                --type-display: 1.6rem;
                --type-h1:      1.2rem;
                --type-h2:      1.06rem;
                --type-h3:      0.96rem;
                --type-body:    0.84rem;
            }
            .poster-container {
                padding: 0.5rem !important;
            }
            .infographic-section {
                padding: 0.95rem 0.75rem !important;
                gap: 0.85rem !important;
            }
        }

        /* =========================================================================
           3. CIRCULAR AESTHETIC ICON CONTAINERS (BALANCED & CENTERED)
           ========================================================================= */
        .icon-circle-hero {
            width: 4.5rem !important;
            height: 4.5rem !important;
            border-radius: 9999px !important;
            aspect-ratio: 1 / 1 !important;
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            padding: 1rem !important;
            flex-shrink: 0 !important;
        }
        .icon-circle-hero i, .icon-circle-hero svg {
            font-size: 1.95rem !important;
            line-height: 1 !important;
        }

        .icon-circle-xl {
            width: 3.4rem !important;
            height: 3.4rem !important;
            border-radius: 9999px !important;
            aspect-ratio: 1 / 1 !important;
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            padding: 0.75rem !important;
            flex-shrink: 0 !important;
        }
        .icon-circle-xl i, .icon-circle-xl svg {
            font-size: 1.35rem !important;
            line-height: 1 !important;
        }

        .icon-circle-lg {
            width: 3rem !important;
            height: 3rem !important;
            border-radius: 9999px !important;
            aspect-ratio: 1 / 1 !important;
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            padding: 0.65rem !important;
            flex-shrink: 0 !important;
        }
        .icon-circle-lg i, .icon-circle-lg svg {
            font-size: 1.2rem !important;
            line-height: 1 !important;
        }

        .icon-circle-md {
            width: 2.25rem !important;
            height: 2.25rem !important;
            border-radius: 9999px !important;
            aspect-ratio: 1 / 1 !important;
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            padding: 0.45rem !important;
            flex-shrink: 0 !important;
        }
        .icon-circle-md i, .icon-circle-md svg {
            font-size: 0.95rem !important;
            line-height: 1 !important;
        }

        .icon-circle-sm {
            width: 1.75rem !important;
            height: 1.75rem !important;
            border-radius: 9999px !important;
            aspect-ratio: 1 / 1 !important;
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            padding: 0.3rem !important;
            flex-shrink: 0 !important;
        }
        .icon-circle-sm i, .icon-circle-sm svg {
            font-size: 0.78rem !important;
            line-height: 1 !important;
        }

        /* =========================================================================
           4. DEDICATED UNDERLYING SVG BACKGROUND LAYER (STRICTLY Z-INDEX 0, ZERO OVERLAP)
           ========================================================================= */
        .bg-3d-layer {
            position: absolute !important;
            inset: 0 !important;
            z-index: 0 !important;
            pointer-events: none !important;
            user-select: none !important;
            overflow: hidden !important;
        }

        .token-3d-wrapper-right,
        .token-3d-wrapper-left {
            position: absolute !important;
            top: 0.85rem !important;
            width: 52px !important;
            height: 58px !important;
            opacity: 0.16 !important;
            display: none !important;
            z-index: 0 !important;
            pointer-events: none !important;
            user-select: none !important;
        }
        .token-3d-wrapper-right { right: 1rem !important; }
        .token-3d-wrapper-left { left: 1rem !important; }

        .bg-3d-layer-dark .token-3d-wrapper-right,
        .bg-3d-layer-dark .token-3d-wrapper-left {
            opacity: 0.28 !important;
        }

        .token-3d-wrapper-right svg,
        .token-3d-wrapper-left svg {
            width: 100% !important;
            height: 100% !important;
            display: block !important;
        }

        /* Strategic Peripheral Security & WordPress SVG Icons (Strictly Outside Text Zones) */
        .bg-sec-svg-icon {
            position: absolute !important;
            pointer-events: none !important;
            user-select: none !important;
            z-index: 0 !important;
            display: none !important;
        }
        .bg-sec-svg-tl {
            top: 0.65rem !important;
            left: 0.85rem !important;
            width: 64px !important;
            height: 64px !important;
            opacity: 0.055 !important;
        }
        .bg-sec-svg-tr {
            top: 0.65rem !important;
            right: 0.85rem !important;
            width: 64px !important;
            height: 64px !important;
            opacity: 0.055 !important;
        }
        .bg-sec-svg-bl {
            bottom: 0.65rem !important;
            left: 0.85rem !important;
            width: 68px !important;
            height: 68px !important;
            opacity: 0.05 !important;
        }
        .bg-sec-svg-br {
            bottom: 0.65rem !important;
            right: 0.85rem !important;
            width: 68px !important;
            height: 68px !important;
            opacity: 0.05 !important;
        }
        .bg-3d-layer-dark .bg-sec-svg-icon {
            opacity: 0.09 !important;
        }

        @media (min-width: 768px) {
            .token-3d-wrapper-right,
            .token-3d-wrapper-left,
            .bg-sec-svg-icon {
                display: block !important;
            }
        }

        /* =========================================================================
           HIGH-CONTRAST PALETTE FOR LIGHT & DEEP NAVY SURFACES
           ========================================================================= */
        .security-hud-pill,
        .box-neon-kiosk,
        .bg-slate-950,
        .bg-slate-900 {
            color: #f8fafc !important;
        }

        .box-deluxe-indigo p,
        .box-deluxe-emerald p,
        .box-deluxe-amber p,
        .box-deluxe-purple p,
        .box-deluxe-cyan p {
            color: #1e293b !important;
        }

        .box-neon-kiosk .guardify-slider-hint {
            color: #ffffff !important;
            font-weight: 800 !important;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.7) !important;
        }
        .box-neon-kiosk .guardify-math-title {
            color: #ffffff !important;
            font-weight: 900 !important;
        }
        .box-neon-kiosk .guardify-math-desc {
            color: #f1f5f9 !important;
            font-weight: 700 !important;
        }
        .box-neon-kiosk .guardify-math-equation {
            color: #ffffff !important;
            font-weight: 900 !important;
        }
        .box-neon-kiosk .guardify-icon-title {
            color: #f8fafc !important;
            font-weight: 700 !important;
        }
        .box-neon-kiosk .guardify-target-name {
            color: #38bdf8 !important;
            font-weight: 900 !important;
        }

        /* Elevate all Main Content Containers to Z-20 */
        .poster-container > header,
        .poster-container > section,
        .poster-container > footer {
            position: relative;
            isolation: isolate;
        }

        .poster-container h1,
        .poster-container h2,
        .poster-container h3,
        .poster-container h4 {
            display: block !important;
            visibility: visible !important;
            position: relative;
            z-index: 20;
        }

        .relative.z-10,
        .relative.z-20,
        .box-deluxe-indigo,
        .box-deluxe-emerald,
        .box-deluxe-amber,
        .box-deluxe-purple,
        .box-deluxe-cyan,
        .box-deluxe-rose,
        .box-neon-kiosk,
        .security-hud-pill {
            position: relative !important;
            z-index: 20 !important;
        }

        /* Subtle Low-Opacity Watermark Icons Inside Cards (Positioned in Corner Behind Content) */
        .box-watermark-icon {
            position: absolute;
            left: -0.65rem;
            bottom: -0.65rem;
            font-size: 4.6rem;
            opacity: 0.055;
            pointer-events: none;
            user-select: none;
            z-index: 1;
            line-height: 1;
        }

        .box-watermark-icon-dark {
            position: absolute;
            left: -0.65rem;
            bottom: -0.65rem;
            font-size: 4.6rem;
            opacity: 0.075;
            pointer-events: none;
            user-select: none;
            z-index: 1;
            line-height: 1;
            color: #ffffff;
        }

        /* =========================================================================
           5. GLASSMORPHISM & SOFT GLOW LIGHTING GRADIENTS ON MAIN CARDS (STATIC)
           ========================================================================= */
        .box-deluxe-indigo,
        .box-deluxe-emerald,
        .box-deluxe-amber,
        .box-deluxe-purple,
        .box-deluxe-cyan,
        .box-deluxe-rose {
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
        }

        /* Static Top Specular Light Beam on All Deluxe & Kiosk Cards */
        .box-deluxe-indigo::before,
        .box-deluxe-emerald::before,
        .box-deluxe-amber::before,
        .box-deluxe-purple::before,
        .box-deluxe-cyan::before,
        .box-deluxe-rose::before,
        .box-neon-kiosk::before,
        .security-hud-pill::before {
            content: "";
            position: absolute;
            top: 0;
            left: 12%;
            right: 12%;
            height: 2px;
            border-radius: 9999px;
            pointer-events: none;
            z-index: 2;
        }

        .box-deluxe-indigo {
            background:
                radial-gradient(circle at 12% 14%, rgba(99, 102, 241, 0.16) 0%, transparent 48%),
                radial-gradient(circle at 88% 86%, rgba(56, 189, 248, 0.13) 0%, transparent 48%),
                linear-gradient(145deg, rgba(255, 255, 255, 0.92) 0%, rgba(245, 247, 255, 0.86) 55%, rgba(224, 231, 255, 0.88) 100%) !important;
            border: 1.5px solid rgba(165, 180, 252, 0.9) !important;
            box-shadow:
                0 10px 26px -6px rgba(79, 70, 229, 0.15),
                0 0 22px -6px rgba(99, 102, 241, 0.2),
                inset 0 1.5px 0 rgba(255, 255, 255, 0.95),
                inset 0 -1px 0 rgba(165, 180, 252, 0.35) !important;
        }
        .box-deluxe-indigo::before {
            background: linear-gradient(90deg, transparent, rgba(99, 102, 241, 0.65), rgba(56, 189, 248, 0.65), transparent);
        }

        .box-deluxe-emerald {
            background:
                radial-gradient(circle at 12% 14%, rgba(16, 185, 129, 0.16) 0%, transparent 48%),
                radial-gradient(circle at 88% 86%, rgba(45, 212, 191, 0.13) 0%, transparent 48%),
                linear-gradient(145deg, rgba(255, 255, 255, 0.92) 0%, rgba(242, 251, 247, 0.86) 55%, rgba(209, 250, 229, 0.88) 100%) !important;
            border: 1.5px solid rgba(110, 231, 183, 0.9) !important;
            box-shadow:
                0 10px 26px -6px rgba(16, 185, 129, 0.15),
                0 0 22px -6px rgba(16, 185, 129, 0.2),
                inset 0 1.5px 0 rgba(255, 255, 255, 0.95),
                inset 0 -1px 0 rgba(110, 231, 183, 0.35) !important;
        }
        .box-deluxe-emerald::before {
            background: linear-gradient(90deg, transparent, rgba(16, 185, 129, 0.65), rgba(45, 212, 191, 0.65), transparent);
        }

        .box-deluxe-amber {
            background:
                radial-gradient(circle at 12% 14%, rgba(245, 158, 11, 0.17) 0%, transparent 48%),
                radial-gradient(circle at 88% 86%, rgba(251, 191, 36, 0.14) 0%, transparent 48%),
                linear-gradient(145deg, rgba(255, 255, 255, 0.92) 0%, rgba(255, 253, 245, 0.86) 55%, rgba(254, 243, 199, 0.88) 100%) !important;
            border: 1.5px solid rgba(252, 211, 77, 0.92) !important;
            box-shadow:
                0 10px 26px -6px rgba(245, 158, 11, 0.15),
                0 0 22px -6px rgba(245, 158, 11, 0.2),
                inset 0 1.5px 0 rgba(255, 255, 255, 0.95),
                inset 0 -1px 0 rgba(252, 211, 77, 0.35) !important;
        }
        .box-deluxe-amber::before {
            background: linear-gradient(90deg, transparent, rgba(245, 158, 11, 0.65), rgba(251, 146, 60, 0.65), transparent);
        }

        .box-deluxe-purple {
            background:
                radial-gradient(circle at 12% 14%, rgba(168, 85, 247, 0.16) 0%, transparent 48%),
                radial-gradient(circle at 88% 86%, rgba(129, 140, 248, 0.14) 0%, transparent 48%),
                linear-gradient(145deg, rgba(255, 255, 255, 0.92) 0%, rgba(250, 245, 255, 0.86) 55%, rgba(243, 232, 255, 0.88) 100%) !important;
            border: 1.5px solid rgba(216, 180, 254, 0.9) !important;
            box-shadow:
                0 10px 26px -6px rgba(168, 85, 247, 0.15),
                0 0 22px -6px rgba(168, 85, 247, 0.2),
                inset 0 1.5px 0 rgba(255, 255, 255, 0.95),
                inset 0 -1px 0 rgba(216, 180, 254, 0.35) !important;
        }
        .box-deluxe-purple::before {
            background: linear-gradient(90deg, transparent, rgba(168, 85, 247, 0.65), rgba(99, 102, 241, 0.65), transparent);
        }

        .box-deluxe-cyan {
            background:
                radial-gradient(circle at 12% 14%, rgba(6, 182, 212, 0.16) 0%, transparent 48%),
                radial-gradient(circle at 88% 86%, rgba(56, 189, 248, 0.14) 0%, transparent 48%),
                linear-gradient(145deg, rgba(255, 255, 255, 0.92) 0%, rgba(242, 252, 254, 0.86) 55%, rgba(207, 250, 254, 0.88) 100%) !important;
            border: 1.5px solid rgba(103, 232, 249, 0.9) !important;
            box-shadow:
                0 10px 26px -6px rgba(6, 182, 212, 0.15),
                0 0 22px -6px rgba(6, 182, 212, 0.2),
                inset 0 1.5px 0 rgba(255, 255, 255, 0.95),
                inset 0 -1px 0 rgba(103, 232, 249, 0.35) !important;
        }
        .box-deluxe-cyan::before {
            background: linear-gradient(90deg, transparent, rgba(6, 182, 212, 0.65), rgba(56, 189, 248, 0.65), transparent);
        }

        .box-deluxe-rose {
            background:
                radial-gradient(circle at 12% 14%, rgba(244, 63, 94, 0.15) 0%, transparent 48%),
                radial-gradient(circle at 88% 86%, rgba(251, 113, 133, 0.13) 0%, transparent 48%),
                linear-gradient(145deg, rgba(255, 255, 255, 0.92) 0%, rgba(255, 245, 246, 0.86) 55%, rgba(255, 228, 230, 0.88) 100%) !important;
            border: 1.5px solid rgba(253, 164, 175, 0.9) !important;
            box-shadow:
                0 10px 26px -6px rgba(244, 63, 94, 0.15),
                0 0 22px -6px rgba(244, 63, 94, 0.2),
                inset 0 1.5px 0 rgba(255, 255, 255, 0.95),
                inset 0 -1px 0 rgba(253, 164, 175, 0.35) !important;
        }
        .box-deluxe-rose::before {
            background: linear-gradient(90deg, transparent, rgba(244, 63, 94, 0.65), rgba(251, 113, 133, 0.65), transparent);
        }

        /* Jewel-Toned Dark Glassmorphism Kiosk Cards (Section 4 Captchas & HUD) */
        .box-neon-kiosk {
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            background:
                radial-gradient(circle at 14% 18%, rgba(99, 102, 241, 0.22) 0%, transparent 50%),
                linear-gradient(160deg, rgba(19, 28, 56, 0.92) 0%, rgba(11, 17, 36, 0.95) 100%);
            border: 1.5px solid rgba(129, 140, 248, 0.45);
            box-shadow:
                0 14px 28px -8px rgba(0, 0, 0, 0.5),
                0 0 24px -6px rgba(99, 102, 241, 0.25),
                inset 0 1px 1px rgba(255, 255, 255, 0.16);
        }
        .box-neon-kiosk::before {
            background: linear-gradient(90deg, transparent, rgba(129, 140, 248, 0.8), rgba(56, 189, 248, 0.8), transparent);
        }

        .kiosk-emerald {
            background:
                radial-gradient(circle at 12% 18%, rgba(16, 185, 129, 0.28) 0%, transparent 52%),
                radial-gradient(circle at 88% 85%, rgba(6, 182, 212, 0.18) 0%, transparent 50%),
                linear-gradient(155deg, rgba(6, 44, 33, 0.92) 0%, rgba(9, 28, 36, 0.94) 55%, rgba(11, 19, 41, 0.96) 100%) !important;
            border: 1.5px solid rgba(52, 211, 153, 0.55) !important;
            box-shadow:
                0 12px 26px -8px rgba(0, 0, 0, 0.5),
                0 0 22px -6px rgba(16, 185, 129, 0.28),
                inset 0 1px 1px rgba(255, 255, 255, 0.16) !important;
        }
        .kiosk-emerald::before {
            background: linear-gradient(90deg, transparent, rgba(52, 211, 153, 0.85), rgba(45, 212, 191, 0.85), transparent) !important;
        }

        .kiosk-indigo {
            background:
                radial-gradient(circle at 12% 18%, rgba(99, 102, 241, 0.3) 0%, transparent 52%),
                radial-gradient(circle at 88% 85%, rgba(56, 189, 248, 0.2) 0%, transparent 50%),
                linear-gradient(155deg, rgba(28, 25, 71, 0.92) 0%, rgba(18, 23, 51, 0.94) 55%, rgba(11, 19, 41, 0.96) 100%) !important;
            border: 1.5px solid rgba(129, 140, 248, 0.55) !important;
            box-shadow:
                0 12px 26px -8px rgba(0, 0, 0, 0.5),
                0 0 22px -6px rgba(99, 102, 241, 0.28),
                inset 0 1px 1px rgba(255, 255, 255, 0.16) !important;
        }
        .kiosk-indigo::before {
            background: linear-gradient(90deg, transparent, rgba(129, 140, 248, 0.85), rgba(56, 189, 248, 0.85), transparent) !important;
        }

        .kiosk-purple {
            background:
                radial-gradient(circle at 12% 18%, rgba(168, 85, 247, 0.3) 0%, transparent 52%),
                radial-gradient(circle at 88% 85%, rgba(236, 72, 153, 0.18) 0%, transparent 50%),
                linear-gradient(155deg, rgba(43, 16, 59, 0.92) 0%, rgba(24, 17, 48, 0.94) 55%, rgba(11, 19, 41, 0.96) 100%) !important;
            border: 1.5px solid rgba(192, 132, 252, 0.55) !important;
            box-shadow:
                0 12px 26px -8px rgba(0, 0, 0, 0.5),
                0 0 22px -6px rgba(168, 85, 247, 0.28),
                inset 0 1px 1px rgba(255, 255, 255, 0.16) !important;
        }
        .kiosk-purple::before {
            background: linear-gradient(90deg, transparent, rgba(192, 132, 252, 0.85), rgba(236, 72, 153, 0.85), transparent) !important;
        }

        .kiosk-amber {
            background:
                radial-gradient(circle at 12% 18%, rgba(245, 158, 11, 0.28) 0%, transparent 52%),
                radial-gradient(circle at 88% 85%, rgba(251, 191, 36, 0.18) 0%, transparent 50%),
                linear-gradient(155deg, rgba(48, 28, 7, 0.92) 0%, rgba(28, 21, 34, 0.94) 55%, rgba(11, 19, 41, 0.96) 100%) !important;
            border: 1.5px solid rgba(251, 191, 36, 0.55) !important;
            box-shadow:
                0 12px 26px -8px rgba(0, 0, 0, 0.5),
                0 0 22px -6px rgba(245, 158, 11, 0.28),
                inset 0 1px 1px rgba(255, 255, 255, 0.16) !important;
        }
        .kiosk-amber::before {
            background: linear-gradient(90deg, transparent, rgba(251, 191, 36, 0.85), rgba(245, 158, 11, 0.85), transparent) !important;
        }

        .security-hud-pill {
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            background:
                radial-gradient(circle at 15% 15%, rgba(99, 102, 241, 0.24) 0%, transparent 48%),
                radial-gradient(circle at 85% 85%, rgba(16, 185, 129, 0.2) 0%, transparent 48%),
                linear-gradient(160deg, rgba(17, 25, 54, 0.95) 0%, rgba(9, 14, 36, 0.97) 55%, rgba(23, 21, 59, 0.95) 100%) !important;
            border: 1.5px solid rgba(129, 140, 248, 0.5) !important;
            box-shadow:
                0 16px 32px -10px rgba(15, 23, 42, 0.55),
                0 0 28px -8px rgba(99, 102, 241, 0.3),
                inset 0 1px 1px rgba(255, 255, 255, 0.15) !important;
        }
        .security-hud-pill::before {
            background: linear-gradient(90deg, transparent, rgba(52, 211, 153, 0.8), rgba(129, 140, 248, 0.8), transparent);
        }

        /* Section Gradient Backgrounds with Soft Ambient Lighting Glows */
        .sec-info-hero {
            background-color: #eef2ff;
            background-image:
                radial-gradient(circle at 88% 12%, rgba(99, 102, 241, 0.16) 0%, transparent 42%),
                radial-gradient(circle at 12% 88%, rgba(16, 185, 129, 0.12) 0%, transparent 42%),
                radial-gradient(rgba(79, 70, 229, 0.075) 1.25px, transparent 1.25px),
                linear-gradient(135deg, #f5f7ff 0%, #eef2ff 50%, #e0e7ff 100%);
            background-size: 100% 100%, 100% 100%, 24px 24px, 100% 100%;
            border: 2px solid #c7d2fe;
        }
        .sec-info-emerald {
            background-color: #ecfdf5;
            background-image:
                radial-gradient(circle at 88% 14%, rgba(16, 185, 129, 0.16) 0%, transparent 42%),
                radial-gradient(circle at 12% 86%, rgba(6, 182, 212, 0.12) 0%, transparent 42%),
                radial-gradient(rgba(16, 185, 129, 0.075) 1.25px, transparent 1.25px),
                linear-gradient(135deg, #f2fbf7 0%, #ecfdf5 50%, #d1fae5 100%);
            background-size: 100% 100%, 100% 100%, 24px 24px, 100% 100%;
            border: 2px solid #a7f3d0;
        }
        .sec-info-versus {
            background-color: #f8fafc;
            background-image:
                radial-gradient(circle at 85% 20%, rgba(244, 63, 94, 0.12) 0%, transparent 42%),
                radial-gradient(circle at 15% 80%, rgba(16, 185, 129, 0.14) 0%, transparent 42%),
                radial-gradient(rgba(100, 116, 139, 0.075) 1.25px, transparent 1.25px),
                linear-gradient(90deg, #fff5f6 0%, #f8fafc 50%, #f0fdf6 100%);
            background-size: 100% 100%, 100% 100%, 24px 24px, 100% 100%;
            border: 2px solid #cbd5e1;
        }
        .sec-info-cosmic {
            background-color: #0b1026;
            background-image:
                radial-gradient(circle at 85% 15%, rgba(56, 189, 248, 0.2) 0%, transparent 45%),
                radial-gradient(circle at 15% 85%, rgba(168, 85, 247, 0.22) 0%, transparent 45%),
                linear-gradient(to right, rgba(99, 102, 241, 0.06) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(99, 102, 241, 0.06) 1px, transparent 1px),
                linear-gradient(135deg, #0b1026 0%, #17153b 50%, #0f172a 100%);
            background-size: 100% 100%, 100% 100%, 28px 28px, 28px 28px, 100% 100%;
            border: 2px solid #4338ca;
        }
        .sec-info-indigo {
            background-color: #eef2ff;
            background-image:
                radial-gradient(circle at 88% 15%, rgba(99, 102, 241, 0.15) 0%, transparent 42%),
                radial-gradient(circle at 12% 85%, rgba(14, 165, 233, 0.14) 0%, transparent 42%),
                radial-gradient(rgba(99, 102, 241, 0.075) 1.25px, transparent 1.25px),
                linear-gradient(135deg, #f4f7ff 0%, #eef2ff 50%, #e0f2fe 100%);
            background-size: 100% 100%, 100% 100%, 24px 24px, 100% 100%;
            border: 2px solid #bae6fd;
        }
        .sec-info-amber {
            background-color: #fffbeb;
            background-image:
                radial-gradient(circle at 88% 15%, rgba(245, 158, 11, 0.15) 0%, transparent 42%),
                radial-gradient(circle at 12% 85%, rgba(168, 85, 247, 0.12) 0%, transparent 42%),
                radial-gradient(rgba(217, 119, 6, 0.075) 1.25px, transparent 1.25px),
                linear-gradient(135deg, #fffdf5 0%, #fffbeb 50%, #fef3c7 100%);
            background-size: 100% 100%, 100% 100%, 24px 24px, 100% 100%;
            border: 2px solid #fde68a;
        }
        .sec-info-royal {
            background-color: #f3e8ff;
            background-image:
                radial-gradient(circle at 88% 12%, rgba(124, 58, 237, 0.15) 0%, transparent 42%),
                radial-gradient(circle at 12% 88%, rgba(79, 70, 229, 0.14) 0%, transparent 42%),
                radial-gradient(rgba(109, 40, 217, 0.075) 1.25px, transparent 1.25px),
                linear-gradient(135deg, #f6f5ff 0%, #ede9fe 50%, #e0e7ff 100%);
            background-size: 100% 100%, 100% 100%, 24px 24px, 100% 100%;
            border: 2px solid #c4b5fd;
        }
        .sec-info-cyan {
            background-color: #ecfeff;
            background-image:
                radial-gradient(circle at 88% 15%, rgba(6, 182, 212, 0.16) 0%, transparent 42%),
                radial-gradient(circle at 12% 85%, rgba(16, 185, 129, 0.13) 0%, transparent 42%),
                radial-gradient(rgba(8, 145, 178, 0.075) 1.25px, transparent 1.25px),
                linear-gradient(135deg, #f2fcfe 0%, #ecfeff 50%, #e0f2fe 100%);
            background-size: 100% 100%, 100% 100%, 24px 24px, 100% 100%;
            border: 2px solid #a5f3fc;
        }
        .sec-info-purple {
            background-color: #f3e8ff;
            background-image:
                radial-gradient(circle at 88% 15%, rgba(139, 92, 246, 0.15) 0%, transparent 42%),
                radial-gradient(circle at 12% 85%, rgba(99, 102, 241, 0.13) 0%, transparent 42%),
                radial-gradient(rgba(124, 58, 237, 0.075) 1.25px, transparent 1.25px),
                linear-gradient(135deg, #faf7ff 0%, #f3e8ff 50%, #ede9fe 100%);
            background-size: 100% 100%, 100% 100%, 24px 24px, 100% 100%;
            border: 2px solid #ddd6fe;
        }
        .sec-info-finale {
            background-color: #ecfdf5;
            background-image:
                radial-gradient(circle at 88% 15%, rgba(16, 185, 129, 0.16) 0%, transparent 42%),
                radial-gradient(circle at 12% 85%, rgba(245, 158, 11, 0.14) 0%, transparent 42%),
                radial-gradient(rgba(16, 185, 129, 0.075) 1.25px, transparent 1.25px),
                linear-gradient(135deg, #f0fdf6 0%, #eef2ff 50%, #fef9c3 100%);
            background-size: 100% 100%, 100% 100%, 24px 24px, 100% 100%;
            border: 2px solid #a7f3d0;
        }

        /* Infographic Meter Bar */
        .info-meter-track {
            width: 100%;
            height: 7px;
            border-radius: 9999px;
            background: rgba(15, 23, 42, 0.1);
            overflow: hidden;
        }
        .info-meter-fill {
            height: 100%;
            border-radius: 9999px;
        }

        /* Pill Badges */
        .step-badge-pill {
            display: inline-flex;
            align-items: center;
            gap: 0.55rem;
            padding: 0.35rem 0.95rem;
            border-radius: 9999px;
            font-size: var(--type-xs);
            font-weight: 900;
        }
    </style>
</head>
<body>

    <!-- ========================================================================= -->
    <!-- REUSABLE PERFORMANCE-OPTIMIZED SECURITY & WORDPRESS SVG SPRITE            -->
    <!-- ========================================================================= -->
    <svg width="0" height="0" style="position:absolute;width:0;height:0;overflow:hidden;" aria-hidden="true">
        <defs>
            <!-- WordPress Emblem -->
            <symbol id="svg-wp-emblem" viewBox="0 0 64 64">
                <circle cx="32" cy="32" r="28" fill="none" stroke="currentColor" stroke-width="3.5"/>
                <circle cx="32" cy="32" r="23" fill="none" stroke="currentColor" stroke-width="1.8" stroke-dasharray="4 3"/>
                <path d="M13 32c0 8.5 5.2 15.8 12.6 18.8L15.2 22.4C13.8 25.3 13 28.6 13 32zm32.2-1.2c0-3.2-1.1-5.4-2.1-7.1-1.3-2.1-2.5-3.9-2.5-6 0-2.3 1.8-4.5 4.3-4.5.1 0 .2 0 .4.02C41.8 10.6 37.1 9 32 9c-7.8 0-14.7 3.9-18.8 9.8 1.4.04 2.7.07 3.8.07 2.4 0 6.1-.3 6.1-.3 1.2-.07 1.4 1.7.1 1.9 0 0-1.2.15-2.6.22l8.3 24.7 5-15-3.6-9.7c-1.2-.07-2.4-.22-2.4-.22-1.2-.07-1.1-1.97.1-1.9 0 0 3.8.3 6 .3 2.4 0 6.1-.3 6.1-.3 1.2-.07 1.4 1.7.1 1.9 0 0-1.2.15-2.6.22l8.2 24.5 2.3-7.6c1-3.2 1.7-5.6 1.7-7.7zM32.4 34l-6.8 19.8c2 .6 4.1.9 6.4.9 2.6 0 5.1-.4 7.4-1.3-.06-.1-.12-.2-.16-.3L32.4 34zm16.3-11.8c.1.7.15 1.5.15 2.4 0 2.3-.4 5-1.7 8.3l-6.9 20c6.7-3.9 11.2-11.1 11.2-19.4 0-3.9-1-7.6-2.75-10.8z" fill="currentColor"/>
            </symbol>
            <!-- Security Shield Check -->
            <symbol id="svg-shield-check" viewBox="0 0 64 64">
                <path d="M32 6L56 16V33C56 47.5 45.8 56.8 32 60C18.2 56.8 8 47.5 8 33V16L32 6Z" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linejoin="round"/>
                <path d="M23 33L29 39L42 26" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
            </symbol>
            <!-- Cyber Padlock -->
            <symbol id="svg-padlock" viewBox="0 0 64 64">
                <rect x="14" y="28" width="36" height="28" rx="7" fill="none" stroke="currentColor" stroke-width="3.5"/>
                <path d="M22 28V19C22 13.5 26.5 9 32 9C37.5 9 42 13.5 42 19V28" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round"/>
                <circle cx="32" cy="40" r="3.5" fill="currentColor"/>
                <path d="M32 43.5V49" stroke="currentColor" stroke-width="3.5" stroke-linecap="round"/>
            </symbol>
            <!-- Cryptographic Key -->
            <symbol id="svg-crypto-key" viewBox="0 0 64 64">
                <circle cx="22" cy="32" r="12" fill="none" stroke="currentColor" stroke-width="3.5"/>
                <circle cx="22" cy="32" r="4" fill="currentColor"/>
                <path d="M34 32H56M48 32V41M54 32V38" fill="none" stroke="currentColor" stroke-width="3.5" stroke-linecap="round"/>
            </symbol>
            <!-- Local Server Stack -->
            <symbol id="svg-server-stack" viewBox="0 0 64 64">
                <rect x="10" y="10" width="44" height="16" rx="4" fill="none" stroke="currentColor" stroke-width="3.2"/>
                <rect x="10" y="34" width="44" height="16" rx="4" fill="none" stroke="currentColor" stroke-width="3.2"/>
                <circle cx="19" cy="18" r="2.5" fill="currentColor"/>
                <circle cx="26" cy="18" r="2.5" fill="currentColor"/>
                <circle cx="19" cy="42" r="2.5" fill="currentColor"/>
                <circle cx="26" cy="42" r="2.5" fill="currentColor"/>
            </symbol>
        </defs>
    </svg>

    <!-- ========================================================================= -->
    <!-- MAIN POSTER CANVAS (960px Desktop Infographic, 100% Fluid Mobile) -->
    <!-- ========================================================================= -->
    <div class="poster-container">

        <!-- ========================================================================= -->
        <!-- 1. HERO SECTION -->
        <!-- ========================================================================= -->
        <header class="infographic-section sec-info-hero text-center">

            <div class="bg-3d-layer text-indigo-900" aria-hidden="true">
                <div class="token-3d-wrapper-right">
                    <svg width="48" height="54" viewBox="0 0 76 86" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M38 7L68 18V45C68 63 55 77 38 83C21 77 8 45 8 45V18L38 7Z" fill="#090e1f"/>
                        <path d="M38 4L66 15V42C66 59 53 73 38 79C23 73 10 42 10 42V15L38 4Z" fill="url(#navy-g1-s1-top-r)"/>
                        <path d="M38 4L10 15V42C10 42 23 73 38 79V4Z" fill="white" fill-opacity="0.12"/>
                        <circle cx="38" cy="41" r="14" fill="#090e1f" fill-opacity="0.5"/>
                        <path d="M34 41L37 44L44 37" stroke="#60a5fa" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <defs>
                            <linearGradient id="navy-g1-s1-top-r" x1="10" y1="4" x2="66" y2="79" gradientUnits="userSpaceOnUse">
                                <stop offset="0%" stop-color="#2a3e6b"/>
                                <stop offset="50%" stop-color="#162548"/>
                                <stop offset="100%" stop-color="#0a1124"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <div class="token-3d-wrapper-left">
                    <svg width="48" height="54" viewBox="0 0 72 84" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23 36V22C23 14.8 28.8 9 36 9C43.2 9 49 14.8 49 22V36" stroke="#64748b" stroke-width="7" stroke-linecap="round"/>
                        <rect x="11" y="34" width="50" height="44" rx="10" fill="url(#navy-g1-s1-top-l)"/>
                        <circle cx="36" cy="52" r="5" fill="#090e1f"/>
                        <path d="M34.5 54L33 64H39L37.5 54H34.5Z" fill="#090e1f"/>
                        <defs>
                            <linearGradient id="navy-g1-s1-top-l" x1="11" y1="34" x2="61" y2="78" gradientUnits="userSpaceOnUse">
                                <stop offset="0%" stop-color="#2a406e"/>
                                <stop offset="100%" stop-color="#080e1b"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <svg class="bg-sec-svg-icon bg-sec-svg-bl"><use href="#svg-wp-emblem"/></svg>
                <svg class="bg-sec-svg-icon bg-sec-svg-br"><use href="#svg-shield-check"/></svg>
            </div>

            <div class="relative z-10 w-full space-y-4">
                
                <!-- Top Highlights -->
                <div class="flex flex-wrap items-center justify-center gap-2 sm:gap-3">
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-indigo-100 border border-indigo-300 text-indigo-950 type-xs font-black">
                        <span class="icon-circle-sm bg-indigo-600 text-white"><i class="fas fa-check"></i></span>
                        <span>کدنویسی استاندارد وردپرس</span>
                    </span>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-100 border border-emerald-300 text-emerald-950 type-xs font-black">
                        <span class="icon-circle-sm bg-emerald-600 text-white"><i class="fas fa-bolt"></i></span>
                        <span>اجرای آنی روی هاست خودتان</span>
                    </span>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-amber-100 border border-amber-300 text-amber-950 type-xs font-black">
                        <span class="icon-circle-sm bg-amber-500 text-white"><i class="fas fa-shield-halved"></i></span>
                        <span>بدون قطعی در اختلالات شبکه</span>
                    </span>
                </div>

                <!-- Hero Main Card -->
                <div class="p-5 sm:p-7 rounded-3xl box-deluxe-indigo space-y-4 relative overflow-hidden">
                    <i class="fas fa-shield-halved box-watermark-icon text-indigo-950"></i>
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-4 relative z-10">
                        <div class="icon-circle-hero bg-gradient-to-br from-indigo-600 via-purple-600 to-blue-700 text-white shadow-xl border-2 border-indigo-200">
                            <i class="fas fa-shield-halved text-amber-300"></i>
                        </div>
                        <div class="text-center sm:text-right">
                            <h1 class="type-display font-black text-slate-950 tracking-tight leading-none">
                                گاردفای پرو
                            </h1>
                            <div class="flex flex-wrap items-center justify-center sm:justify-start gap-2 mt-2">
                                <span class="px-3.5 py-1 rounded-xl bg-indigo-950 text-amber-300 type-sm font-black tracking-wider uppercase shadow-sm border border-indigo-700">
                                    Guardify Pro v4.00
                                </span>
                                <span class="px-3 py-1 rounded-xl bg-amber-200/90 text-amber-950 type-xs font-black border border-amber-400">
                                    کپچای بومی و امنیت فرم‌های وردپرس و ووکامرس
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="max-w-3xl mx-auto space-y-2 pt-3 border-t border-indigo-300/80 relative z-10">
                        <h2 class="type-h2 text-slate-900">
                            خداحافظی با معطلی مشتریان در تسویه‌حساب و قطعی ریکپچای گوگل
                        </h2>
                        <p class="type-body text-slate-800">
                            اجرای ۱۰۰٪ محلی و مستقل روی سرور خودتان؛ بدون وابستگی به اینترنت بین‌الملل و بدون از دست رفتن حتی یک سفارش خریدار.
                        </p>
                    </div>
                </div>

                <!-- 4 Key Stats Cards (KPI Ribbon) -->
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 sm:gap-4">
                    <div class="p-3.5 sm:p-4 rounded-2xl box-deluxe-emerald text-center space-y-1 relative overflow-hidden">
                        <div class="icon-circle-md bg-emerald-600 text-white mx-auto shadow-sm">
                            <i class="fas fa-feather-pointed"></i>
                        </div>
                        <div class="type-h2 text-emerald-950 font-black">زیر ۱۰ KB</div>
                        <div class="type-xs text-emerald-900 font-bold">بار مصرفی روی لود سایت</div>
                    </div>
                    <div class="p-3.5 sm:p-4 rounded-2xl box-deluxe-cyan text-center space-y-1 relative overflow-hidden">
                        <div class="icon-circle-md bg-cyan-600 text-white mx-auto shadow-sm">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <div class="type-h2 text-cyan-950 font-black">۰.۰۱ ثانیه</div>
                        <div class="type-xs text-cyan-900 font-bold">سرعت بارگذاری محلی</div>
                    </div>
                    <div class="p-3.5 sm:p-4 rounded-2xl box-deluxe-amber text-center space-y-1 relative overflow-hidden">
                        <div class="icon-circle-md bg-amber-500 text-white mx-auto shadow-sm">
                            <i class="fas fa-server"></i>
                        </div>
                        <div class="type-h2 text-amber-950 font-black">۱۰۰٪ مستقل</div>
                        <div class="type-xs text-amber-900 font-bold">بی‌نیاز از سرور خارجی</div>
                    </div>
                    <div class="p-3.5 sm:p-4 rounded-2xl box-deluxe-purple text-center space-y-1 relative overflow-hidden">
                        <div class="icon-circle-md bg-purple-600 text-white mx-auto shadow-sm">
                            <i class="fas fa-shield-halved"></i>
                        </div>
                        <div class="type-h2 text-purple-950 font-black">۴ مدل کپچا</div>
                        <div class="type-xs text-purple-900 font-bold">اسلایدر، ریاضی، آیکون، تله</div>
                    </div>
                </div>

                <!-- LIVE DEFENSE STATUS (HUD) -->
                <div class="security-hud-pill rounded-2xl p-4 sm:p-5 border border-indigo-500/30 text-white relative">
                    <div class="flex flex-wrap items-center justify-between gap-2 pb-3.5 border-b border-slate-700/80 relative z-10">
                        <div class="flex items-center gap-2.5">
                            <span class="w-3 h-3 rounded-full bg-emerald-400"></span>
                            <span class="type-h4 text-emerald-200 flex items-center gap-2 font-black">
                                <i class="fas fa-shield-halved"></i>
                                وضعیت ماژول‌های امنیتی افزونه در سایت شما
                            </span>
                        </div>
                        <span class="type-xs bg-slate-900 px-3 py-1 rounded-full text-amber-200 border border-amber-400/50 font-black">
                            آماده به‌کار و پایدار
                        </span>
                    </div>

                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-4 pt-3.5 relative z-10">
                        <div class="p-3 rounded-xl kiosk-emerald flex items-center gap-3 relative overflow-hidden">
                            <div class="icon-circle-md bg-emerald-500/20 text-emerald-400 border border-emerald-500/30 relative z-10">
                                <i class="fas fa-shield-halved"></i>
                            </div>
                            <div class="relative z-10 text-right">
                                <span class="type-micro text-slate-200 block font-bold">محافظت از فرم‌ها</span>
                                <strong class="type-xs text-emerald-200 block font-black">فعال و آماده</strong>
                            </div>
                        </div>
                        <div class="p-3 rounded-xl kiosk-indigo flex items-center gap-3 relative overflow-hidden">
                            <div class="icon-circle-md bg-cyan-500/20 text-cyan-400 border border-cyan-500/30 relative z-10">
                                <i class="fas fa-robot"></i>
                            </div>
                            <div class="relative z-10 text-right">
                                <span class="type-micro text-slate-200 block font-bold">دفع ربات‌های اسپمر</span>
                                <strong class="type-xs text-cyan-200 block font-black">خودکار و آنی</strong>
                            </div>
                        </div>
                        <div class="p-3 rounded-xl kiosk-amber flex items-center gap-3 relative overflow-hidden">
                            <div class="icon-circle-md bg-amber-500/20 text-amber-400 border border-amber-500/30 relative z-10">
                                <i class="fas fa-user-lock"></i>
                            </div>
                            <div class="relative z-10 text-right">
                                <span class="type-micro text-slate-200 block font-bold">قفل فرم لاگین</span>
                                <strong class="type-xs text-amber-200 block font-black">ضد حدس پسورد</strong>
                            </div>
                        </div>
                        <div class="p-3 rounded-xl kiosk-purple flex items-center gap-3 relative overflow-hidden">
                            <div class="icon-circle-md bg-purple-500/20 text-purple-400 border border-purple-500/30 relative z-10">
                                <i class="fas fa-key"></i>
                            </div>
                            <div class="relative z-10 text-right">
                                <span class="type-micro text-slate-200 block font-bold">تایید هویت کاربر</span>
                                <strong class="type-xs text-purple-200 block font-black">محلی و مستقل</strong>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </header>

        <!-- CONNECTOR 01 -->
        <div class="infographic-connector">
            <div class="connector-pill">
                <span class="icon-circle-sm bg-indigo-950 text-indigo-400"><i class="fas fa-check"></i></span>
                <span>اجرای مستقیم روی وردپرس شما، بدون نیاز به سرورهای واسطه خارجی</span>
            </div>
        </div>

        <!-- ========================================================================= -->
        <!-- 2. FOUR CORE PILLARS (Compact, Zero Empty Space) -->
        <!-- ========================================================================= -->
        <section class="infographic-section sec-info-emerald">

            <div class="bg-3d-layer text-emerald-900" aria-hidden="true">
                <div class="token-3d-wrapper-right">
                    <svg width="48" height="54" viewBox="0 0 76 86" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M38 6L68 22L38 38L8 22L38 6Z" fill="#2a3e6b"/>
                        <path d="M8 22L38 38V74L8 58V22Z" fill="#162548"/>
                        <path d="M68 22L38 38V74L68 58V22Z" fill="#0a1124"/>
                    </svg>
                </div>
                <svg class="bg-sec-svg-icon bg-sec-svg-tl"><use href="#svg-server-stack"/></svg>
                <svg class="bg-sec-svg-icon bg-sec-svg-bl"><use href="#svg-wp-emblem"/></svg>
                <svg class="bg-sec-svg-icon bg-sec-svg-br"><use href="#svg-shield-check"/></svg>
            </div>

            <div class="text-center max-w-3xl mx-auto space-y-2 relative z-10">
                <span class="step-badge-pill bg-emerald-600 text-white shadow-md">
                    <span class="icon-circle-sm bg-white text-emerald-700">۱</span>
                    <span>چهار مزیت کلیدی گاردفای پرو</span>
                </span>
                <h3 class="type-h1 text-slate-900">
                    چرا گاردفای پرو برای سایت‌های ما انتخاب بهتری است؟
                </h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-5 relative z-10">
                
                <!-- Pillar 1 -->
                <div class="p-5 sm:p-6 rounded-2xl box-deluxe-emerald space-y-3 relative overflow-hidden">
                    <i class="fas fa-bolt box-watermark-icon text-emerald-950"></i>
                    <div class="flex items-center justify-between pb-2.5 border-b border-emerald-300/80 relative z-10">
                        <span class="px-3 py-1 rounded-full bg-emerald-600 text-white type-xs font-black flex items-center gap-1.5">
                            <i class="fas fa-bolt"></i>
                            مزیت ۰۱ • لود فوق‌سریع
                        </span>
                        <div class="icon-circle-lg bg-gradient-to-tr from-emerald-600 to-teal-500 text-white shadow-md border-2 border-white">
                            <i class="fas fa-bolt"></i>
                        </div>
                    </div>
                    <h4 class="type-h3 text-slate-950 relative z-10">سایت شما به خاطر کپچا کند نمی‌شود</h4>
                    <p class="type-body text-slate-800 relative z-10">
                        باری که گاردفای پرو روی لود صفحات سایت می‌اندازد بسیار ناچیز (زیر ۱۰ کیلوبایت) است و صفحه بدون حتی ۱ ثانیه معطلی باز می‌شود.
                    </p>
                    <div class="p-2.5 rounded-xl bg-white/85 border border-emerald-300 space-y-1.5 relative z-10">
                        <div class="flex justify-between type-micro text-emerald-950 font-black">
                            <span>بار اضافی روی لود صفحه</span>
                            <span>بسیار سبک (زیر ۱۰ کیلوبایت)</span>
                        </div>
                        <div class="info-meter-track">
                            <div class="info-meter-fill bg-gradient-to-l from-emerald-500 to-teal-400" style="width: 98%;"></div>
                        </div>
                    </div>
                </div>

                <!-- Pillar 2 -->
                <div class="p-5 sm:p-6 rounded-2xl box-deluxe-indigo space-y-3 relative overflow-hidden">
                    <i class="fas fa-server box-watermark-icon text-indigo-950"></i>
                    <div class="flex items-center justify-between pb-2.5 border-b border-indigo-300/80 relative z-10">
                        <span class="px-3 py-1 rounded-full bg-indigo-600 text-white type-xs font-black flex items-center gap-1.5">
                            <i class="fas fa-server"></i>
                            مزیت ۰۲ • کاملاً مستقل
                        </span>
                        <div class="icon-circle-lg bg-gradient-to-tr from-indigo-600 to-blue-500 text-white shadow-md border-2 border-white">
                            <i class="fas fa-server"></i>
                        </div>
                    </div>
                    <h4 class="type-h3 text-slate-950 relative z-10">بی‌نیاز از اینترنت بین‌الملل</h4>
                    <p class="type-body text-slate-800 relative z-10">
                        تمام بررسی‌ها مستقیم روی سرور خودتان انجام می‌شود؛ در زمان اختلال اینترنت خارجی هم ثبت‌نام و خرید بدون مشکل کار می‌کند.
                    </p>
                    <div class="p-2.5 rounded-xl bg-white/85 border border-indigo-300 space-y-1.5 relative z-10">
                        <div class="flex justify-between type-micro text-indigo-950 font-black">
                            <span>استقلال از سرورهای خارجی و تحریم</span>
                            <span>۱۰۰٪ اجرای محلی</span>
                        </div>
                        <div class="info-meter-track">
                            <div class="info-meter-fill bg-gradient-to-l from-indigo-600 to-blue-500" style="width: 100%;"></div>
                        </div>
                    </div>
                </div>

                <!-- Pillar 3 -->
                <div class="p-5 sm:p-6 rounded-2xl box-deluxe-amber space-y-3 relative overflow-hidden">
                    <i class="fas fa-microchip box-watermark-icon text-amber-950"></i>
                    <div class="flex items-center justify-between pb-2.5 border-b border-amber-300/80 relative z-10">
                        <span class="px-3 py-1 rounded-full bg-amber-600 text-white type-xs font-black flex items-center gap-1.5">
                            <i class="fas fa-database"></i>
                            مزیت ۰۳ • تمیز و بهینه
                        </span>
                        <div class="icon-circle-lg bg-gradient-to-tr from-amber-500 to-orange-500 text-white shadow-md border-2 border-white">
                            <i class="fas fa-feather-pointed"></i>
                        </div>
                    </div>
                    <h4 class="type-h3 text-slate-950 relative z-10">دیتابیس سایت را سنگین نمی‌کند</h4>
                    <p class="type-body text-slate-800 relative z-10">
                        بدون ساخت جدول‌های اضافی و بدون انباشت داده‌های موقت کار می‌کند تا دیتابیس وردپرس همیشه مرتب و سریع بماند.
                    </p>
                    <div class="p-2.5 rounded-xl bg-white/85 border border-amber-300 space-y-1.5 relative z-10">
                        <div class="flex justify-between type-micro text-amber-950 font-black">
                            <span>سبکی و سلامت پایگاه‌داده</span>
                            <span>۰ جدول اضافی</span>
                        </div>
                        <div class="info-meter-track">
                            <div class="info-meter-fill bg-gradient-to-l from-amber-500 to-orange-500" style="width: 96%;"></div>
                        </div>
                    </div>
                </div>

                <!-- Pillar 4 -->
                <div class="p-5 sm:p-6 rounded-2xl box-deluxe-purple space-y-3 relative overflow-hidden">
                    <i class="fas fa-shuffle box-watermark-icon text-purple-950"></i>
                    <div class="flex items-center justify-between pb-2.5 border-b border-purple-300/80 relative z-10">
                        <span class="px-3 py-1 rounded-full bg-purple-600 text-white type-xs font-black flex items-center gap-1.5">
                            <i class="fas fa-route"></i>
                            مزیت ۰۴ • سوییچ خودکار
                        </span>
                        <div class="icon-circle-lg bg-gradient-to-tr from-purple-600 to-indigo-500 text-white shadow-md border-2 border-white">
                            <i class="fas fa-route"></i>
                        </div>
                    </div>
                    <h4 class="type-h3 text-slate-950 relative z-10">هیچ خریدی به خاطر قطعی نمی‌سوزد</h4>
                    <p class="type-body text-slate-800 relative z-10">
                        در صورت استفاده از حالت ترکیبی، به محض بروز قطعی یا تاخیر در سرویس خارجی، کپچای محلی خودکار جایگزین می‌شود.
                    </p>
                    <div class="p-2.5 rounded-xl bg-white/85 border border-purple-300 space-y-1.5 relative z-10">
                        <div class="flex justify-between type-micro text-purple-950 font-black">
                            <span>نرخ حفظ سبد خرید در زمان اختلال</span>
                            <span>۱۰۰٪ تضمین‌شده</span>
                        </div>
                        <div class="info-meter-track">
                            <div class="info-meter-fill bg-gradient-to-l from-purple-600 to-indigo-500" style="width: 100%;"></div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- CONNECTOR 02 -->
        <div class="infographic-connector">
            <div class="connector-pill">
                <span class="icon-circle-sm bg-emerald-950 text-emerald-400"><i class="fas fa-scale-balanced"></i></span>
                <span>مقایسه مستقیم تجربه خریدار در سایت</span>
            </div>
        </div>

        <!-- ========================================================================= -->
        <!-- 3. DIRECT COMPARISON: GOOGLE RECAPTCHA VS GUARDIFY PRO -->
        <!-- ========================================================================= -->
        <section class="infographic-section sec-info-versus">

            <div class="bg-3d-layer text-slate-900" aria-hidden="true">
                <div class="token-3d-wrapper-left">
                    <svg width="48" height="54" viewBox="0 0 76 86" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M38 4L66 15V42C66 59 53 73 38 79C23 73 10 42 10 42V15L38 4Z" fill="#1e3056"/>
                        <path d="M38 4L10 15V42C10 42 23 73 38 79V4Z" fill="white" fill-opacity="0.14"/>
                    </svg>
                </div>
                <svg class="bg-sec-svg-icon bg-sec-svg-tr"><use href="#svg-shield-check"/></svg>
                <svg class="bg-sec-svg-icon bg-sec-svg-bl"><use href="#svg-padlock"/></svg>
            </div>

            <div class="text-center max-w-3xl mx-auto space-y-2 relative z-10">
                <span class="step-badge-pill bg-purple-600 text-white shadow-md">
                    <span class="icon-circle-sm bg-white text-purple-700">۲</span>
                    <span>مقایسه مستقیم</span>
                </span>
                <h3 class="type-h1 text-slate-900">
                    تفاوت واقعی تجربه خریدار روی سایت شما
                </h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-5 relative z-10">
                
                <!-- Card 1: Google reCAPTCHA -->
                <div class="p-5 sm:p-6 rounded-2xl box-deluxe-rose flex flex-col justify-between space-y-4 relative overflow-hidden">
                    <i class="fas fa-triangle-exclamation box-watermark-icon text-rose-950"></i>
                    <div class="space-y-3.5 relative z-10">
                        <div class="flex items-center gap-3 pb-3 border-b border-rose-300">
                            <div class="icon-circle-lg bg-rose-600 text-white shadow-sm border-2 border-white">
                                <i class="fas fa-circle-xmark"></i>
                            </div>
                            <div>
                                <h4 class="type-h3 text-rose-950">دردسرهای ریکپچای گوگل</h4>
                                <span class="type-xs text-rose-800 font-bold">وابسته به اینترنت بین‌الملل</span>
                            </div>
                        </div>

                        <ul class="space-y-2.5 type-sm font-bold text-rose-950">
                            <li class="flex items-center gap-2.5">
                                <span class="icon-circle-sm bg-rose-600 text-white"><i class="fas fa-xmark"></i></span>
                                <span>لود نشدن کپچا در زمان اختلال اینترنت و قفل شدن خرید</span>
                            </li>
                            <li class="flex items-center gap-2.5">
                                <span class="icon-circle-sm bg-rose-600 text-white"><i class="fas fa-xmark"></i></span>
                                <span>معماهای خسته‌کننده تصویری که حوصله مشتری را سر می‌برد</span>
                            </li>
                            <li class="flex items-center gap-2.5">
                                <span class="icon-circle-sm bg-rose-600 text-white"><i class="fas fa-xmark"></i></span>
                                <span>اسکریپت‌های سنگین خارجی و کاهش سرعت باز شدن صفحات</span>
                            </li>
                            <li class="flex items-center gap-2.5">
                                <span class="icon-circle-sm bg-rose-600 text-white"><i class="fas fa-xmark"></i></span>
                                <span>ظاهر ثابت و ناهماهنگ با رنگ‌بندی قالب فروشگاهی شما</span>
                            </li>
                        </ul>
                    </div>

                    <div class="p-3 rounded-xl bg-rose-600 text-white text-center font-black type-xs relative z-10 shadow-sm">
                        نتیجه: رها شدن سبدهای خرید آماده پرداخت
                    </div>
                </div>

                <!-- Card 2: Guardify Pro -->
                <div class="p-5 sm:p-6 rounded-2xl box-deluxe-emerald flex flex-col justify-between space-y-4 relative overflow-hidden">
                    <i class="fas fa-shield-halved box-watermark-icon text-emerald-950"></i>
                    <div class="space-y-3.5 relative z-10">
                        <div class="flex items-center gap-3 pb-3 border-b border-emerald-300">
                            <div class="icon-circle-lg bg-emerald-600 text-white shadow-sm border-2 border-white">
                                <i class="fas fa-shield-halved"></i>
                            </div>
                            <div>
                                <h4 class="type-h3 text-emerald-950">راحتی کار با گاردفای پرو</h4>
                                <span class="type-xs text-emerald-800 font-bold">سبک، مستقل و همیشه در دسترس</span>
                            </div>
                        </div>

                        <ul class="space-y-2.5 type-sm font-bold text-emerald-950">
                            <li class="flex items-center gap-2.5">
                                <span class="icon-circle-sm bg-emerald-600 text-white"><i class="fas fa-check"></i></span>
                                <span>اجرای ۱۰۰٪ محلی روی هاست خودتان بدون تحریم و قطعی</span>
                            </li>
                            <li class="flex items-center gap-2.5">
                                <span class="icon-circle-sm bg-emerald-600 text-white"><i class="fas fa-check"></i></span>
                                <span>تایید فوری با کشیدن اسلایدر لمسی یا جمع ساده عددی</span>
                            </li>
                            <li class="flex items-center gap-2.5">
                                <span class="icon-circle-sm bg-emerald-600 text-white"><i class="fas fa-check"></i></span>
                                <span>بار مصرفی زیر ۱۰ کیلوبایت بدون کم‌ترین افت سرعت سایت</span>
                            </li>
                            <li class="flex items-center gap-2.5">
                                <span class="icon-circle-sm bg-emerald-600 text-white"><i class="fas fa-check"></i></span>
                                <span>۳۵+ تم رنگی آماده و شخصی‌سازی کامل صفحه ورود وردپرس</span>
                            </li>
                        </ul>
                    </div>

                    <div class="p-3 rounded-xl bg-emerald-600 text-white text-center font-black type-xs relative z-10 shadow-sm">
                        نتیجه: ثبت کامل ۱۰۰٪ سفارش‌ها در هر شرایط شبکه
                    </div>
                </div>

            </div>
        </section>

        <!-- CONNECTOR 03 -->
        <div class="infographic-connector">
            <div class="connector-pill">
                <span class="icon-circle-sm bg-cyan-950 text-cyan-400"><i class="fas fa-shield-halved"></i></span>
                <span>چهار مدل کپچای سبک و آماده انتخاب در افزونه</span>
            </div>
        </div>

        <!-- ========================================================================= -->
        <!-- 4. CAPTCHA SHOWCASE: ONLY THE 4 CAPTCHA MODELS (NO EXTRA DESCRIPTIONS) -->
        <!-- ========================================================================= -->
        <section class="infographic-section sec-info-cosmic text-white">

            <div class="bg-3d-layer bg-3d-layer-dark text-indigo-300" aria-hidden="true">
                <div class="token-3d-wrapper-right">
                    <svg width="48" height="54" viewBox="0 0 76 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <ellipse cx="38" cy="40" rx="35" ry="12" stroke="url(#navy-orb-ring-s4-top-r)" stroke-width="2.5"/>
                        <circle cx="38" cy="40" r="24" fill="url(#navy-orb-grad-s4-top-r)"/>
                        <circle cx="32" cy="34" r="6" fill="white" fill-opacity="0.2"/>
                        <defs>
                            <radialGradient id="navy-orb-grad-s4-top-r" cx="30%" cy="30%" r="70%">
                                <stop offset="0%" stop-color="#3d5c96"/><stop offset="60%" stop-color="#18284b"/><stop offset="100%" stop-color="#070c18"/>
                            </radialGradient>
                            <linearGradient id="navy-orb-ring-s4-top-r" x1="3" y1="28" x2="73" y2="52" gradientUnits="userSpaceOnUse">
                                <stop offset="0%" stop-color="#60a5fa" stop-opacity="0.85"/><stop offset="100%" stop-color="#1e3a8a" stop-opacity="0.15"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <div class="token-3d-wrapper-left">
                    <svg width="48" height="54" viewBox="0 0 72 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 24V56C6 66 19.4 74 36 74C52.6 74 66 66 66 56V24C66 34 52.6 42 36 42C19.4 42 6 34 6 24Z" fill="url(#navy-cyl-body-s4-top-l)"/>
                        <ellipse cx="36" cy="24" rx="30" ry="16" fill="url(#navy-cyl-top-s4-top-l)"/>
                        <ellipse cx="36" cy="24" rx="26" ry="13" stroke="white" stroke-width="1" stroke-opacity="0.15"/>
                        <circle cx="36" cy="24" r="5.5" fill="#60a5fa" fill-opacity="0.5"/>
                        <defs>
                            <linearGradient id="navy-cyl-body-s4-top-l" x1="6" y1="24" x2="66" y2="74" gradientUnits="userSpaceOnUse">
                                <stop offset="0%" stop-color="#1e3056"/><stop offset="100%" stop-color="#080e1e"/>
                            </linearGradient>
                            <linearGradient id="navy-cyl-top-s4-top-l" x1="6" y1="8" x2="66" y2="40" gradientUnits="userSpaceOnUse">
                                <stop offset="0%" stop-color="#355082"/><stop offset="100%" stop-color="#1b2a4a"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <svg class="bg-sec-svg-icon bg-sec-svg-bl"><use href="#svg-crypto-key"/></svg>
                <svg class="bg-sec-svg-icon bg-sec-svg-br"><use href="#svg-shield-check"/></svg>
            </div>

            <div class="text-center max-w-3xl mx-auto space-y-2 relative z-10">
                <span class="step-badge-pill bg-gradient-to-r from-cyan-500 to-blue-600 text-white shadow-md">
                    <span class="icon-circle-sm bg-white text-blue-700">۳</span>
                    <span>نمایش مستقیم مدل‌های کپچا</span>
                </span>
                <h3 class="type-h1 text-white">
                    چهار مدل کپچای سبک که می‌توانید انتخاب کنید
                </h3>
            </div>

            <!-- 2-Column Grid: Pure Captcha Model Showcase (Zero Descriptions, Zero Extra Padding) -->
            <div class="relative z-10 grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-5 items-stretch">

                <!-- 1. Native Puzzle Slider -->
                <div class="p-4 sm:p-5 rounded-2xl box-neon-kiosk kiosk-emerald flex flex-col justify-center space-y-3 relative overflow-hidden">
                    <div class="flex items-center justify-between relative z-10">
                        <h4 class="type-h4 text-white flex items-center gap-2">
                            <span class="icon-circle-sm bg-emerald-500/30 text-emerald-300"><i class="fas fa-sliders"></i></span>
                            <span>۱. اسلایدر کشیدنی (Puzzle Slider)</span>
                        </h4>
                        <span class="type-micro text-amber-200 font-black bg-slate-900/90 px-2.5 py-1 rounded-full border border-amber-400/50">اسلایدر لمسی</span>
                    </div>

                    <div class="guardify-captcha-container guardify-theme-dark-slate guardify-font-inherit guardify-slider-wrap !my-0 relative z-10" data-captcha-type="slider">
                        <div class="guardify-top-radar-track"><div class="guardify-top-radar-beam"></div></div>
                        <div class="guardify-slider-header">
                            <span class="guardify-slider-title">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display:inline-block;vertical-align:middle;margin-left:4px;color:#6366f1;">
                                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                </svg>
                                حفاظت امنیتی هوشمند
                            </span>
                            <button type="button" class="guardify-refresh-btn guardify-slider-reset" title="تغییر سوال" aria-label="Reset slider">
                                <span>تغییر سوال</span>
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21.5 2v6h-6M21.34 15.57a10 10 0 1 1-.57-8.38l5.67-5.67"/>
                                </svg>
                            </button>
                        </div>
                        <div class="guardify-slider-track" role="slider" aria-label="Drag to verify">
                            <div class="guardify-slider-progress" style="width:0%;"></div>
                            <span class="guardify-slider-hint">دستگیره را به چپ بکشید ←</span>
                            <div class="guardify-slider-thumb" tabindex="0">←</div>
                        </div>
                    </div>
                </div>

                <!-- 2. Dynamic Math Challenge -->
                <div class="p-4 sm:p-5 rounded-2xl box-neon-kiosk kiosk-indigo flex flex-col justify-center space-y-3 relative overflow-hidden">
                    <div class="flex items-center justify-between relative z-10">
                        <h4 class="type-h4 text-white flex items-center gap-2">
                            <span class="icon-circle-sm bg-indigo-500/30 text-indigo-300"><i class="fas fa-calculator"></i></span>
                            <span>۲. چالش جمع ریاضی (Math Challenge)</span>
                        </h4>
                        <span class="type-micro text-amber-200 font-black bg-slate-900/90 px-2.5 py-1 rounded-full border border-amber-400/50">جمع ریاضی</span>
                    </div>

                    <div class="guardify-captcha-container guardify-theme-dark-slate guardify-font-inherit guardify-math-wrap !my-0 relative z-10" data-captcha-type="math">
                        <div class="guardify-top-radar-track"><div class="guardify-top-radar-beam"></div></div>
                        <div class="guardify-math-header">
                            <div class="guardify-math-title-group">
                                <span class="guardify-shield-icon" style="color:#6366f1;font-size:15px;display:inline-flex;align-items:center;">
                                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                                </span>
                                <strong class="guardify-math-title">چالش امنیتی هوشمند:</strong>
                                <span class="guardify-math-desc">پاسخ معادله را بنویسید</span>
                            </div>
                            <button type="button" class="guardify-refresh-btn" title="تغییر سوال" aria-label="Refresh question">
                                <span>تغییر سوال</span>
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21.5 2v6h-6M21.34 15.57a10 10 0 1 1-.57-8.38l5.67-5.67"/>
                                </svg>
                            </button>
                        </div>
                        <div class="guardify-math-card">
                            <div class="guardify-math-actions">
                                <button type="button" class="guardify-verify-btn guardify-math-verify-btn">بررسی</button>
                                <input type="text" name="guardify_captcha_answer" class="guardify-input" required autocomplete="off" placeholder="؟" inputmode="numeric" />
                            </div>
                            <button type="button" class="guardify-math-eq guardify-clickable-eq" title="تغییر سوال">۷ + ۴ = </button>
                        </div>
                    </div>
                </div>

                <!-- 3. Visual Icon Match -->
                <div class="p-4 sm:p-5 rounded-2xl box-neon-kiosk kiosk-purple flex flex-col justify-center space-y-3 relative overflow-hidden">
                    <div class="flex items-center justify-between relative z-10">
                        <h4 class="type-h4 text-white flex items-center gap-2">
                            <span class="icon-circle-sm bg-purple-500/30 text-purple-300"><i class="fas fa-shapes"></i></span>
                            <span>۳. تطبیق آیکون (Icon Match)</span>
                        </h4>
                        <span class="type-micro text-amber-200 font-black bg-slate-900/90 px-2.5 py-1 rounded-full border border-amber-400/50">چالش تصویری</span>
                    </div>

                    <div class="guardify-captcha-container guardify-theme-dark-slate guardify-font-inherit guardify-icon-wrap !my-0 relative z-10" data-captcha-type="icon_match">
                        <div class="guardify-top-radar-track"><div class="guardify-top-radar-beam"></div></div>
                        <div class="guardify-icon-header">
                            <span class="guardify-icon-title">روی آیکون <strong class="guardify-target-name">«کلید دسترسی»</strong> کلیک کنید:</span>
                            <button type="button" class="guardify-refresh-btn guardify-refresh-icon-match" title="تغییر سوال" aria-label="Refresh icons">
                                <span>تغییر سوال</span>
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21.5 2v6h-6M21.34 15.57a10 10 0 1 1-.57-8.38l5.67-5.67"/>
                                </svg>
                            </button>
                        </div>
                        <div class="guardify-icon-grid">
                            <button type="button" class="guardify-icon-btn" title="سپر امنیتی"><span>🛡️</span></button>
                            <button type="button" class="guardify-icon-btn border-2 border-indigo-500 bg-indigo-500/20" title="کلید دسترسی"><span>🔑</span></button>
                            <button type="button" class="guardify-icon-btn" title="ابر"><span>☁️</span></button>
                            <button type="button" class="guardify-icon-btn" title="آتش"><span>🔥</span></button>
                        </div>
                    </div>
                </div>

                <!-- 4. Invisible Honeypot Trap -->
                <div class="p-4 sm:p-5 rounded-2xl box-neon-kiosk kiosk-amber flex flex-col justify-center space-y-3 relative overflow-hidden">
                    <div class="flex items-center justify-between relative z-10">
                        <h4 class="type-h4 text-white flex items-center gap-2">
                            <span class="icon-circle-sm bg-amber-500/30 text-amber-300"><i class="fas fa-eye-slash"></i></span>
                            <span>۴. تله نامرئی (Invisible Honeypot)</span>
                        </h4>
                        <span class="type-micro text-amber-200 font-black bg-slate-900/90 px-2.5 py-1 rounded-full border border-amber-400/50">۱۰۰٪ نامرئی</span>
                    </div>

                    <div class="guardify-captcha-container guardify-theme-dark-slate guardify-font-inherit !my-0 relative z-10">
                        <div class="guardify-top-radar-track"><div class="guardify-top-radar-beam"></div></div>
                        <div class="flex items-center justify-between text-amber-300 type-xs font-bold pb-2 border-b border-slate-700/80">
                            <span>فیلد مخفی تله ضد ربات در کدهای فرم:</span>
                            <span class="bg-emerald-500/20 border border-emerald-500/40 px-2 py-0.5 rounded text-emerald-300 type-micro">فعال در پس‌زمینه</span>
                        </div>
                        <div class="p-3 mt-2.5 bg-slate-950 rounded-xl text-emerald-400 border border-slate-800 text-left type-xs font-bold" dir="ltr">
                            &lt;input type="text" name="guardify_hp_token" class="hidden-trap" tabindex="-1" autocomplete="off" /&gt;
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- CONNECTOR 04 -->
        <div class="infographic-connector">
            <div class="connector-pill">
                <span class="icon-circle-sm bg-indigo-950 text-indigo-400"><i class="fas fa-check"></i></span>
                <span>سازگاری خودکار با فرم‌های اصلی وردپرس و افزونه‌ها</span>
            </div>
        </div>

        <!-- ========================================================================= -->
        <!-- 5. COMPATIBILITY SHOWCASE (Compact & Balanced) -->
        <!-- ========================================================================= -->
        <section class="infographic-section sec-info-indigo">

            <div class="bg-3d-layer text-indigo-900" aria-hidden="true">
                <div class="token-3d-wrapper-right">
                    <svg width="48" height="54" viewBox="0 0 76 86" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M38 6L68 22L38 38L8 22L38 6Z" fill="#2a3e6b"/>
                        <path d="M8 22L38 38V74L8 58V22Z" fill="#162548"/>
                        <path d="M68 22L38 38V74L68 58V22Z" fill="#0a1124"/>
                    </svg>
                </div>
                <svg class="bg-sec-svg-icon bg-sec-svg-tl"><use href="#svg-wp-emblem"/></svg>
                <svg class="bg-sec-svg-icon bg-sec-svg-bl"><use href="#svg-shield-check"/></svg>
            </div>

            <div class="text-center max-w-3xl mx-auto space-y-2 relative z-10">
                <span class="step-badge-pill bg-indigo-600 text-white shadow-md">
                    <span class="icon-circle-sm bg-white text-indigo-700">۴</span>
                    <span>سازگاری خودکار و یکپارچه</span>
                </span>
                <h3 class="type-h1 text-slate-900">
                    یک‌بار فعال کنید، همه فرم‌های سایت محافظت می‌شوند
                </h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-5 relative z-10">
                
                <!-- Card 1 -->
                <div class="p-5 sm:p-6 rounded-2xl box-deluxe-purple flex items-center gap-4 relative overflow-hidden">
                    <i class="fas fa-cart-shopping box-watermark-icon text-purple-950"></i>
                    <div class="icon-circle-xl bg-gradient-to-tr from-purple-600 to-indigo-600 text-white shadow-md border-2 border-white relative z-10">
                        <i class="fas fa-cart-shopping"></i>
                    </div>
                    <div class="space-y-1.5 relative z-10 flex-1">
                        <div class="flex items-center justify-between gap-2">
                            <h4 class="type-h3 text-slate-950">تسویه‌حساب ووکامرس</h4>
                            <span class="type-micro font-black text-white bg-purple-600 px-2.5 py-0.5 rounded-full">WooCommerce</span>
                        </div>
                        <p class="type-body text-slate-800">
                            محافظت از صفحه پرداخت و ثبت سفارش بدون معطلی خریدار در موبایل.
                        </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="p-5 sm:p-6 rounded-2xl box-deluxe-indigo flex items-center gap-4 relative overflow-hidden">
                    <i class="fas fa-mobile-screen-button box-watermark-icon text-indigo-950"></i>
                    <div class="icon-circle-xl bg-gradient-to-tr from-indigo-600 to-blue-600 text-white shadow-md border-2 border-white relative z-10">
                        <i class="fas fa-mobile-screen-button"></i>
                    </div>
                    <div class="space-y-1.5 relative z-10 flex-1">
                        <div class="flex items-center justify-between gap-2">
                            <h4 class="type-h3 text-slate-950">فرم‌های ورود پیامکی (OTP)</h4>
                            <span class="type-micro font-black text-white bg-indigo-600 px-2.5 py-0.5 rounded-full">پنل پیامک</span>
                        </div>
                        <p class="type-body text-slate-800">
                            جلوگیری از ارسال رگباری اس‌ام‌اس توسط ربات‌ها و حفظ شارژ پنل پیامکی.
                        </p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="p-5 sm:p-6 rounded-2xl box-deluxe-emerald flex items-center gap-4 relative overflow-hidden">
                    <i class="fas fa-wand-magic-sparkles box-watermark-icon text-emerald-950"></i>
                    <div class="icon-circle-xl bg-gradient-to-tr from-emerald-600 to-teal-500 text-white shadow-md border-2 border-white relative z-10">
                        <i class="fas fa-wand-magic-sparkles"></i>
                    </div>
                    <div class="space-y-1.5 relative z-10 flex-1">
                        <div class="flex items-center justify-between gap-2">
                            <h4 class="type-h3 text-slate-950">فرم‌ساز المنتور و تماس</h4>
                            <span class="type-micro font-black text-white bg-emerald-600 px-2.5 py-0.5 rounded-full">Elementor</span>
                        </div>
                        <p class="type-body text-slate-800">
                            سازگاری مستقیم با فرم‌های المنتور، گرویتی فرم و فرم تماس ۷.
                        </p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="p-5 sm:p-6 rounded-2xl box-deluxe-amber flex items-center gap-4 relative overflow-hidden">
                    <i class="fas fa-comments box-watermark-icon text-amber-950"></i>
                    <div class="icon-circle-xl bg-gradient-to-tr from-amber-500 to-orange-500 text-white shadow-md border-2 border-white relative z-10">
                        <i class="fas fa-comments"></i>
                    </div>
                    <div class="space-y-1.5 relative z-10 flex-1">
                        <div class="flex items-center justify-between gap-2">
                            <h4 class="type-h3 text-slate-950">دیدگاه‌ها و عضویت وردپرس</h4>
                            <span class="type-micro font-black text-white bg-amber-600 px-2.5 py-0.5 rounded-full">WP Core</span>
                        </div>
                        <p class="type-body text-slate-800">
                            پاکسازی کامل بخش نظرات نوشته‌ها و فرم عضویت از پیام‌های هرزنامه.
                        </p>
                    </div>
                </div>

            </div>
        </section>

        <!-- CONNECTOR 05 -->
        <div class="infographic-connector">
            <div class="connector-pill">
                <span class="icon-circle-sm bg-purple-950 text-purple-400"><i class="fas fa-lock"></i></span>
                <span>چهار سپر امنیتی مکمل برای حفاظت از پیشخوان</span>
            </div>
        </div>

        <!-- ========================================================================= -->
        <!-- 6. SECURITY SHIELDS (Compact & Balanced) -->
        <!-- ========================================================================= -->
        <section class="infographic-section sec-info-amber">

            <div class="bg-3d-layer text-amber-900" aria-hidden="true">
                <div class="token-3d-wrapper-left">
                    <svg width="48" height="54" viewBox="0 0 76 86" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M38 4L66 15V42C66 59 53 73 38 79C23 73 10 42 10 42V15L38 4Z" fill="#1e3056"/>
                        <path d="M38 4L10 15V42C10 42 23 73 38 79V4Z" fill="white" fill-opacity="0.14"/>
                    </svg>
                </div>
                <svg class="bg-sec-svg-icon bg-sec-svg-tr"><use href="#svg-padlock"/></svg>
                <svg class="bg-sec-svg-icon bg-sec-svg-br"><use href="#svg-crypto-key"/></svg>
            </div>

            <div class="text-center max-w-3xl mx-auto space-y-2 relative z-10">
                <span class="step-badge-pill bg-purple-600 text-white shadow-md">
                    <span class="icon-circle-sm bg-white text-purple-700">۵</span>
                    <span>چهار سپر امنیتی پیشرفته</span>
                </span>
                <h3 class="type-h1 text-slate-900">
                    امکانات امنیتی بیشتر، فراتر از یک کپچای ساده
                </h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-5 relative z-10">
                
                <!-- Shield 1 -->
                <div class="p-5 sm:p-6 rounded-2xl box-deluxe-indigo flex items-center gap-4 relative overflow-hidden">
                    <i class="fas fa-lock box-watermark-icon text-indigo-950"></i>
                    <div class="icon-circle-xl bg-indigo-600 text-white shadow-md border-2 border-white relative z-10">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="space-y-1.5 relative z-10 flex-1">
                        <div class="flex items-center justify-between gap-2">
                            <h4 class="type-h3 text-slate-950">سد ضد حدس پسورد (Brute-Force)</h4>
                            <span class="type-micro font-black text-white bg-indigo-600 px-2.5 py-0.5 rounded-full">سپر ۰۱</span>
                        </div>
                        <p class="type-body text-slate-800">
                            قفل خودکار و موقت IP مهاجم پس از چند تلاش ناموفق برای ورود به پیشخوان.
                        </p>
                    </div>
                </div>

                <!-- Shield 2 -->
                <div class="p-5 sm:p-6 rounded-2xl box-deluxe-emerald flex items-center gap-4 relative overflow-hidden">
                    <i class="fas fa-ban box-watermark-icon text-emerald-950"></i>
                    <div class="icon-circle-xl bg-emerald-600 text-white shadow-md border-2 border-white relative z-10">
                        <i class="fas fa-ban"></i>
                    </div>
                    <div class="space-y-1.5 relative z-10 flex-1">
                        <div class="flex items-center justify-between gap-2">
                            <h4 class="type-h3 text-slate-950">انسداد درگاه ناامن XML-RPC</h4>
                            <span class="type-micro font-black text-white bg-emerald-600 px-2.5 py-0.5 rounded-full">سپر ۰۲</span>
                        </div>
                        <p class="type-body text-slate-800">
                            بستن مسیر قدیمی تست رمز هکرها با یک کلیک و جلوگیری از فشار روی هاست.
                        </p>
                    </div>
                </div>

                <!-- Shield 3 -->
                <div class="p-5 sm:p-6 rounded-2xl box-deluxe-amber flex items-center gap-4 relative overflow-hidden">
                    <i class="fas fa-user-secret box-watermark-icon text-amber-950"></i>
                    <div class="icon-circle-xl bg-amber-600 text-white shadow-md border-2 border-white relative z-10">
                        <i class="fas fa-user-secret"></i>
                    </div>
                    <div class="space-y-1.5 relative z-10 flex-1">
                        <div class="flex items-center justify-between gap-2">
                            <h4 class="type-h3 text-slate-950">مخفی‌سازی آدرس صفحه ورود</h4>
                            <span class="type-micro font-black text-white bg-amber-600 px-2.5 py-0.5 rounded-full">سپر ۰۳</span>
                        </div>
                        <p class="type-body text-slate-800">
                            تغییر آدرس پیش‌فرض wp-login.php به یک آدرس اختصاصی دور از دید ربات‌ها.
                        </p>
                    </div>
                </div>

                <!-- Shield 4 -->
                <div class="p-5 sm:p-6 rounded-2xl box-deluxe-purple flex items-center gap-4 relative overflow-hidden">
                    <i class="fas fa-key box-watermark-icon text-purple-950"></i>
                    <div class="icon-circle-xl bg-purple-600 text-white shadow-md border-2 border-white relative z-10">
                        <i class="fas fa-key"></i>
                    </div>
                    <div class="space-y-1.5 relative z-10 flex-1">
                        <div class="flex items-center justify-between gap-2">
                            <h4 class="type-h3 text-slate-950">اعتبارسنجی توکن یک‌بارمصرف</h4>
                            <span class="type-micro font-black text-white bg-purple-600 px-2.5 py-0.5 rounded-full">سپر ۰۴</span>
                        </div>
                        <p class="type-body text-slate-800">
                            بررسی امضای امنیتی هر فرم برای جلوگیری از ارسال درخواست‌های جعلی از بیرون سایت.
                        </p>
                    </div>
                </div>

            </div>
        </section>

        <!-- CONNECTOR 06 -->
        <div class="infographic-connector">
            <div class="connector-pill">
                <span class="icon-circle-sm bg-amber-950 text-amber-400"><i class="fas fa-palette"></i></span>
                <span>شخصی‌سازی ظاهر صفحه ورود وردپرس بدون نیاز به افزونه جانبی</span>
            </div>
        </div>

        <!-- ========================================================================= -->
        <!-- 7. WP LOGIN CUSTOMIZATION (Equal Height, Zero Awkward Empty Space) -->
        <!-- ========================================================================= -->
        <section class="infographic-section sec-info-royal">
            <div class="bg-3d-layer text-purple-900" aria-hidden="true">
                <div class="token-3d-wrapper-right">
                    <svg width="48" height="54" viewBox="0 0 72 84" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23 36V22C23 14.8 28.8 9 36 9C43.2 9 49 14.8 49 22V36" stroke="#64748b" stroke-width="7" stroke-linecap="round"/>
                        <rect x="11" y="34" width="50" height="44" rx="10" fill="#1e3056"/>
                        <circle cx="36" cy="52" r="5" fill="#090e1f"/>
                    </svg>
                </div>
                <svg class="bg-sec-svg-icon bg-sec-svg-tl"><use href="#svg-wp-emblem"/></svg>
                <svg class="bg-sec-svg-icon bg-sec-svg-bl"><use href="#svg-padlock"/></svg>
            </div>

            <div class="text-center max-w-3xl mx-auto space-y-2 relative z-10">
                <span class="step-badge-pill bg-indigo-600 text-white shadow-md">
                    <span class="icon-circle-sm bg-white text-indigo-700">۶</span>
                    <span>استایلر و امنیت صفحه ورود (WP-Login Pro)</span>
                </span>
                <h3 class="type-h1 text-slate-950 font-black">
                    شخصی‌سازی و امنیت <span class="text-indigo-700">صفحه ورود وردپرس</span>
                </h3>
                <p class="type-body text-slate-900 font-bold">
                    طراحی مدرن فرم‌های ورود، عضویت و فراموشی رمز عبور (wp-login.php) با والپیپرهای گرادیانی سبک و سپرهای امنیتی یکپارچه:
                </p>
            </div>

            <div class="w-full relative z-10 space-y-5">
                
                <!-- CARD 1: EXACT CAPABILITIES FROM ADMIN PANEL (guardify-tab-login_styler) -->
                <div class="p-5 sm:p-6 rounded-2xl box-deluxe-indigo space-y-4 relative overflow-hidden">
                    <i class="fas fa-sliders box-watermark-icon text-indigo-950"></i>
                    <div class="flex flex-wrap items-center justify-between gap-2 pb-3 border-b border-indigo-300 relative z-10">
                        <h4 class="type-h3 text-slate-950 flex items-center gap-2.5">
                            <span class="icon-circle-md bg-indigo-600 text-white shadow-sm"><i class="fas fa-wand-magic-sparkles"></i></span>
                            <span>امکانات استایلر صفحه ورود در پنل افزونه</span>
                        </h4>
                        <div class="flex flex-wrap items-center gap-2">
                            <span class="px-3 py-1 rounded-full bg-indigo-600 text-white type-micro font-black">۶ الگوی چیدمان</span>
                            <span class="px-3 py-1 rounded-full bg-purple-600 text-white type-micro font-black">۲۰+ والپیپر CSS</span>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3.5 relative z-10">
                        <!-- Real Feature 1: 6 Layout Architecture Presets -->
                        <div class="p-3.5 rounded-xl bg-white/90 border border-indigo-200 flex items-start gap-3">
                            <span class="icon-circle-md bg-indigo-600 text-white shadow-sm mt-0.5"><i class="fas fa-table-cells-large"></i></span>
                            <div class="space-y-0.5">
                                <strong class="type-sm text-slate-950 block font-black">۶ مدل چینش و ساختار بصری (Architecture Presets)</strong>
                                <p class="type-xs text-slate-700 font-bold">کارت متمرکز وسط، اسپلیت اسکرین (دو تکه)، سایدبار راست، سایدبار چپ، دو کارت معلق لوکس و کارت فشرده مینیمال.</p>
                            </div>
                        </div>

                        <!-- Real Feature 2: 20+ CSS Mesh Gradient Wallpapers & Frosted Glass -->
                        <div class="p-3.5 rounded-xl bg-white/90 border border-indigo-200 flex items-start gap-3">
                            <span class="icon-circle-md bg-purple-600 text-white shadow-sm mt-0.5"><i class="fas fa-palette"></i></span>
                            <div class="space-y-0.5">
                                <strong class="type-sm text-slate-950 block font-black">۲۰+ والپیپر گرادیانت نوری (Mesh Glow) و افکت شیشه‌ای</strong>
                                <p class="type-xs text-slate-700 font-bold">پس‌زمینه‌های نوری کدنویسی‌شده (بدون تصویر سنگین) مانند شفق قطبی، کیهانی نیلی، طلایی ۲۴ عیار، سرمه‌ای شاهانه و بلور مات.</p>
                            </div>
                        </div>

                        <!-- Real Feature 3: Local Fonts & Structural Form/Input/Button Customizer -->
                        <div class="p-3.5 rounded-xl bg-white/90 border border-indigo-200 flex items-start gap-3">
                            <span class="icon-circle-md bg-amber-500 text-white shadow-sm mt-0.5"><i class="fas fa-font"></i></span>
                            <div class="space-y-0.5">
                                <strong class="type-sm text-slate-950 block font-black">فونت‌های محلی آفلاین و شخصی‌سازی کادر، فیلدها و دکمه</strong>
                                <p class="type-xs text-slate-700 font-bold">فونت‌های داخلی ایران‌سنس، ایران‌یکان و وزیر + تنظیم عرض کادر، گردی گوشه‌ها، سایه ۳بعدی، استایل دکمه و آیکون چشم رمز عبور.</p>
                            </div>
                        </div>

                        <!-- Real Feature 4: Hero Banner Texts, Remember Me Tooltip, Footer Links & Hardening -->
                        <div class="p-3.5 rounded-xl bg-white/90 border border-indigo-200 flex items-start gap-3">
                            <span class="icon-circle-md bg-emerald-600 text-white shadow-sm mt-0.5"><i class="fas fa-user-shield"></i></span>
                            <div class="space-y-0.5">
                                <strong class="type-sm text-slate-950 block font-black">مدیریت متون بنر، پاورقی، تولتیپ و سپرهای امنیتی ورود</strong>
                                <p class="type-xs text-slate-700 font-bold">ویرایش تیتر و ۳ ویژگی بنر، تولتیپ هشدار «مرا به خاطر بسپار»، حذف لینک بازگشت/زبان و سپر ضد بروت‌فورس و اسکن نویسندگان.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CARD 2: SINGLE DISPLAY MODE SHOWCASE (FLOATING SPLIT / دو کارت معلق لوکس FROM DEMO) -->
                <div class="rounded-2xl overflow-hidden border-2 border-indigo-500/50 shadow-2xl relative z-20 p-5 sm:p-7" style="background-color: #060814; background-image: radial-gradient(circle at 90% 10%, rgba(236, 72, 153, 0.38) 0%, transparent 55%), radial-gradient(circle at 10% 90%, rgba(56, 189, 248, 0.38) 0%, transparent 55%);">
                    
                    <!-- Top Mode Indicator Bar -->
                    <div class="flex flex-wrap items-center justify-between gap-2 pb-4 mb-5 border-b border-white/10">
                        <div class="flex items-center gap-2">
                            <span class="icon-circle-sm bg-indigo-500/20 text-indigo-300 border border-indigo-500/40"><i class="fas fa-desktop"></i></span>
                            <span class="type-xs text-white font-black">نمونه یکی از ۶ حالت نمایش در افزونه: چیدمان «دو کارت معلق لوکس» (Floating Split)</span>
                        </div>
                        <span class="type-micro bg-emerald-500/20 text-emerald-300 border border-emerald-500/40 px-3 py-1 rounded-full font-black">
                            والپیپر کیهانی نیلی + کپچای هماهنگ با تم ورود
                        </span>
                    </div>

                    <!-- Authentic Floating Split Mode Layout from Demo -->
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 items-center">
                        
                        <!-- Right Column in RTL: Floating Welcome & Security Info Card (5 cols) -->
                        <div class="lg:col-span-5 p-5 sm:p-6 rounded-2xl bg-slate-900/85 border border-white/15 shadow-xl text-right space-y-3.5">
                            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-indigo-500/20 border border-indigo-400/30 text-indigo-300 type-micro font-black">
                                🔒 سامانه ورود امن هوشمند
                            </div>
                            <h4 class="type-h3 text-white font-black">
                                حفاظت پیشرفته و امنیت ۲۴ ساعته
                            </h4>
                            <p class="type-xs text-slate-300 leading-relaxed font-medium">
                                به پرتال امن دسترسی کاربران خوش آمدید. تمامی داده‌ها و نشست‌های ورود رمزنگاری شده و تحت حفاظت سیستم ضد نفوذ است.
                            </p>
                            <div class="pt-3 border-t border-white/10 space-y-2 type-xs text-slate-200 font-bold">
                                <div class="flex items-center gap-2">
                                    <span class="icon-circle-sm bg-emerald-500/20 text-emerald-400"><i class="fas fa-check"></i></span>
                                    <span>محافظت سازمانی و رمزنگاری داده‌ها</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="icon-circle-sm bg-emerald-500/20 text-emerald-400"><i class="fas fa-check"></i></span>
                                    <span>تجربه احراز هویت سریع و روان</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <span class="icon-circle-sm bg-emerald-500/20 text-emerald-400"><i class="fas fa-check"></i></span>
                                    <span>طراحی اختصاصی برای سامانه‌های پیشرفته</span>
                                </div>
                            </div>
                            <div class="pt-2.5 border-t border-white/10 flex items-center gap-2 type-micro text-amber-300 font-bold">
                                <i class="fas fa-shield-halved text-emerald-400"></i>
                                <span>ارتباط شما رمزنگاری شده و ایمن است</span>
                            </div>
                        </div>

                        <!-- Left Column in RTL: Authentic Login Card (7 cols) -->
                        <div class="lg:col-span-7 p-5 sm:p-6 rounded-2xl bg-slate-900/90 border border-white/20 shadow-2xl space-y-3.5">
                            <div class="flex items-center justify-between pb-3 border-b border-slate-800">
                                <div class="flex items-center gap-3">
                                    <div class="icon-circle-lg bg-indigo-500/20 border border-indigo-500/40 text-indigo-400">
                                        <i class="fas fa-shield-halved"></i>
                                    </div>
                                    <div>
                                        <h2 class="type-h4 text-white font-black">ورود به حساب کاربری</h2>
                                        <p class="type-micro text-slate-300 font-bold mt-0.5">لطفاً برای ادامه مشخصات خود را وارد نمایید</p>
                                    </div>
                                </div>
                                <span class="type-micro bg-indigo-500/20 text-indigo-300 border border-indigo-500/30 px-2.5 py-1 rounded-lg font-black">
                                    فونت محلی ایران‌سنس
                                </span>
                            </div>

                            <form name="loginform" id="loginform" class="space-y-3">
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                    <div>
                                        <label for="demo_user_login" class="block type-micro font-bold text-slate-200 mb-1">نام کاربری یا نشانی ایمیل</label>
                                        <input type="text" name="log" id="demo_user_login" class="w-full bg-slate-950/90 border border-slate-700 rounded-xl px-3 py-2 type-xs text-white font-bold" value="admin" readonly />
                                    </div>
                                    <div>
                                        <label for="demo_user_pass" class="block type-micro font-bold text-slate-200 mb-1">رمز عبور</label>
                                        <div class="relative">
                                            <input type="password" name="pwd" id="demo_user_pass" class="w-full bg-slate-950/90 border border-slate-700 rounded-xl px-3 py-2 type-xs text-white font-bold" value="••••••••••" readonly />
                                            <span class="absolute left-3 top-2 text-slate-400"><i class="fas fa-eye text-xs"></i></span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Embedded Captcha Box Inheriting Login Theme -->
                                <div class="guardify-captcha-container guardify-theme-dark-slate guardify-slider-wrap !my-2" data-captcha-type="slider">
                                    <div class="guardify-top-radar-track"><div class="guardify-top-radar-beam"></div></div>
                                    <div class="guardify-slider-header">
                                        <span class="guardify-slider-title">
                                            <i class="fas fa-shield-halved text-indigo-400 ml-1"></i>
                                            حفاظت امنیتی ورود:
                                        </span>
                                        <span class="type-micro text-emerald-400 font-bold">هماهنگ با تم لاگین</span>
                                    </div>
                                    <div class="guardify-slider-track" role="slider">
                                        <div class="guardify-slider-progress" style="width:100%;"></div>
                                        <span class="guardify-slider-hint text-emerald-400 font-bold">تایید شد ✓</span>
                                        <div class="guardify-slider-thumb" style="right:calc(100% - 40px);">✓</div>
                                    </div>
                                </div>

                                <!-- Remember Me with Tooltip Icon + Submit Button -->
                                <div class="flex flex-wrap items-center justify-between gap-2 pt-1">
                                    <div class="flex items-center gap-1.5 type-xs text-slate-200 font-bold">
                                        <input type="checkbox" checked readonly class="accent-indigo-500 w-3.5 h-3.5 rounded" />
                                        <span>مرا به خاطر بسپار</span>
                                        <span class="px-1.5 py-0.5 rounded bg-emerald-500/20 border border-emerald-500/30 text-emerald-300 type-micro" title="جهت امنیت بیشتر، در رایانه‌ها و مکان‌های عمومی تیک این گزینه را نزنید.">ℹ️ تولتیپ امنیتی</span>
                                    </div>
                                    <button type="button" class="px-5 py-2 rounded-xl bg-gradient-to-r from-indigo-600 to-indigo-700 text-white font-black type-xs shadow-lg flex items-center gap-1.5">
                                        <i class="fas fa-key text-amber-300"></i>
                                        <span>ورود به حساب کاربری</span>
                                    </button>
                                </div>

                                <!-- Legal & Security Footer Bar -->
                                <div class="pt-2.5 border-t border-slate-800 flex flex-wrap items-center justify-between gap-2 type-micro text-slate-400 font-bold">
                                    <span class="text-slate-300">🔒 محافظت شده با فناوری هوشمند Guardify Security</span>
                                    <div class="flex items-center gap-2 text-indigo-300">
                                        <span>قوانین و مقررات</span> • <span>حریم خصوصی</span> • <span>پشتیبانی</span>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </section>

        <!-- CONNECTOR 07 -->
        <div class="infographic-connector">
            <div class="connector-pill">
                <span class="icon-circle-sm bg-purple-950 text-purple-400"><i class="fas fa-cart-shopping"></i></span>
                <span>مکانیزم سوییچ خودکار در زمان اختلال شبکه</span>
            </div>
        </div>

        <!-- ========================================================================= -->
        <!-- 8. FAILOVER FLOWCHART (4 Compact Steps) -->
        <!-- ========================================================================= -->
        <section class="infographic-section sec-info-cyan">

            <div class="bg-3d-layer text-cyan-900" aria-hidden="true">
                <div class="token-3d-wrapper-left">
                    <svg width="48" height="54" viewBox="0 0 76 86" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M38 6L68 22L38 38L8 22L38 6Z" fill="#2a3e6b"/>
                        <path d="M8 22L38 38V74L8 58V22Z" fill="#162548"/>
                        <path d="M68 22L38 38V74L68 58V22Z" fill="#0a1124"/>
                    </svg>
                </div>
                <svg class="bg-sec-svg-icon bg-sec-svg-tr"><use href="#svg-server-stack"/></svg>
                <svg class="bg-sec-svg-icon bg-sec-svg-br"><use href="#svg-shield-check"/></svg>
            </div>

            <div class="text-center max-w-3xl mx-auto space-y-2 relative z-10">
                <span class="step-badge-pill bg-cyan-700 text-white shadow-md">
                    <span class="icon-circle-sm bg-white text-cyan-800">۷</span>
                    <span>فلوچارت پایداری در شرایط اضطراری</span>
                </span>
                <h3 class="type-h1 text-slate-900">
                    چطور از سوختن سفارش خریدار جلوگیری می‌شود؟
                </h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-5 relative z-10">
                
                <!-- Step 1 -->
                <div class="p-5 sm:p-6 rounded-2xl box-deluxe-indigo flex items-center gap-4 relative overflow-hidden">
                    <i class="fas fa-satellite-dish box-watermark-icon text-indigo-950"></i>
                    <div class="icon-circle-xl bg-indigo-600 text-white shadow-md border-2 border-white relative z-10 font-black type-h3">
                        ۱
                    </div>
                    <div class="space-y-1 relative z-10 flex-1">
                        <span class="inline-block type-micro font-black text-white bg-indigo-600 px-2.5 py-0.5 rounded-full">گام اول • پایش هوشمند</span>
                        <h4 class="type-h3 text-slate-950">بررسی مداوم وضعیت شبکه</h4>
                        <p class="type-body text-slate-800">
                            افزونه سرعت پاسخ‌دهی سرویس کپچا را در لحظه کنترل می‌کند.
                        </p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="p-5 sm:p-6 rounded-2xl box-deluxe-amber flex items-center gap-4 relative overflow-hidden">
                    <i class="fas fa-shuffle box-watermark-icon text-amber-950"></i>
                    <div class="icon-circle-xl bg-amber-500 text-white shadow-md border-2 border-white relative z-10 font-black type-h3">
                        ۲
                    </div>
                    <div class="space-y-1 relative z-10 flex-1">
                        <span class="inline-block type-micro font-black text-white bg-amber-600 px-2.5 py-0.5 rounded-full">گام دوم • تشخیص آنی</span>
                        <h4 class="type-h3 text-slate-950">تشخیص سریع قطعی یا تاخیر</h4>
                        <p class="type-body text-slate-800">
                            در صورت کندی سرور خارجی، اختلال در کسری از ثانیه شناسایی می‌شود.
                        </p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="p-5 sm:p-6 rounded-2xl box-deluxe-cyan flex items-center gap-4 relative overflow-hidden">
                    <i class="fas fa-microchip box-watermark-icon text-cyan-950"></i>
                    <div class="icon-circle-xl bg-cyan-600 text-white shadow-md border-2 border-white relative z-10 font-black type-h3">
                        ۳
                    </div>
                    <div class="space-y-1 relative z-10 flex-1">
                        <span class="inline-block type-micro font-black text-white bg-cyan-600 px-2.5 py-0.5 rounded-full">گام سوم • جایگزینی خودکار</span>
                        <h4 class="type-h3 text-slate-950">سوییچ خودکار به کپچای محلی</h4>
                        <p class="type-body text-slate-800">
                            بدون نیاز به دخالت مدیر، کپچای محلی بلافاصله جایگزین می‌گردد.
                        </p>
                    </div>
                </div>

                <!-- Step 4 -->
                <div class="p-5 sm:p-6 rounded-2xl box-deluxe-emerald flex items-center gap-4 relative overflow-hidden">
                    <i class="fas fa-circle-check box-watermark-icon text-emerald-950"></i>
                    <div class="icon-circle-xl bg-emerald-600 text-white shadow-md border-2 border-white relative z-10 font-black type-h3">
                        ۴
                    </div>
                    <div class="space-y-1 relative z-10 flex-1">
                        <span class="inline-block type-micro font-black text-white bg-emerald-600 px-2.5 py-0.5 rounded-full">گام چهارم • خرید موفق</span>
                        <h4 class="type-h3 text-slate-950">تکمیل خرید مشتری در درگاه</h4>
                        <p class="type-body text-slate-800">
                            مشتری بدون خطا به درگاه بانکی منتقل شده و سفارش ثبت می‌شود.
                        </p>
                    </div>
                </div>

            </div>
        </section>

        <!-- CONNECTOR 08 -->
        <div class="infographic-connector">
            <div class="connector-pill">
                <span class="icon-circle-sm bg-indigo-950 text-indigo-400"><i class="fas fa-table-list"></i></span>
                <span>جدول مشخصات فنی و قابلیت‌های کلیدی گاردفای پرو</span>
            </div>
        </div>

        <!-- ========================================================================= -->
        <!-- 9. ORDERLY 2-COLUMN FEATURES TABLE -->
        <!-- ========================================================================= -->
        <section class="infographic-section sec-info-purple">

            <div class="bg-3d-layer text-indigo-900" aria-hidden="true">
                <div class="token-3d-wrapper-right">
                    <svg width="48" height="54" viewBox="0 0 76 86" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M38 4L66 15V42C66 59 53 73 38 79C23 73 10 42 10 42V15L38 4Z" fill="#1e3056"/>
                        <path d="M38 4L10 15V42C10 42 23 73 38 79V4Z" fill="white" fill-opacity="0.14"/>
                    </svg>
                </div>
                <svg class="bg-sec-svg-icon bg-sec-svg-tl"><use href="#svg-wp-emblem"/></svg>
                <svg class="bg-sec-svg-icon bg-sec-svg-bl"><use href="#svg-server-stack"/></svg>
            </div>

            <div class="text-center max-w-3xl mx-auto space-y-2 relative z-10">
                <span class="step-badge-pill bg-indigo-600 text-white shadow-md">
                    <span class="icon-circle-sm bg-white text-indigo-700">۸</span>
                    <span>جدول مشخصات و قابلیت‌ها</span>
                </span>
                <h3 class="type-h1 text-slate-900">
                    لیست قابلیت‌های کلیدی افزونه در یک نگاه
                </h3>
            </div>

            <div class="w-full rounded-2xl overflow-hidden border-2 border-indigo-300 shadow-lg bg-white relative z-10">
                <div class="overflow-x-auto">
                    <table class="w-full text-right border-collapse type-sm">
                        <thead>
                            <tr class="bg-gradient-to-r from-indigo-950 via-purple-950 to-slate-950 text-white border-b-2 border-indigo-500">
                                <th class="py-3.5 px-4 sm:px-6 font-black w-[36%] border-l border-indigo-800/70 align-middle">
                                    ویژگی یا قابلیت افزونه
                                </th>
                                <th class="py-3.5 px-4 sm:px-6 font-black text-amber-300 align-middle">
                                    وضعیت و عملکرد در گاردفای پرو
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-indigo-200 font-medium text-slate-900">
                            <tr class="bg-emerald-100/80">
                                <td class="py-3.5 px-4 sm:px-6 font-black text-indigo-950 bg-indigo-100/90 border-l border-indigo-200 align-middle">
                                    نحوه اجرای کپچا
                                </td>
                                <td class="py-3.5 px-4 sm:px-6 font-black text-emerald-950 align-middle">
                                    کاملاً مستقل و محلی روی سرور خودتان (بدون نیاز به سرور خارجی یا قطعی)
                                </td>
                            </tr>
                            <tr class="bg-indigo-50/90">
                                <td class="py-3.5 px-4 sm:px-6 font-black text-indigo-950 bg-indigo-100/60 border-l border-indigo-200 align-middle">
                                    بار مصرفی روی لود سایت
                                </td>
                                <td class="py-3.5 px-4 sm:px-6 font-black text-emerald-900 align-middle">
                                    حجم لود فرانت‌اند زیر ۱۰ کیلوبایت (بدون کم‌ترین فشار یا افت سرعت لود صفحات سایت)
                                </td>
                            </tr>
                            <tr class="bg-purple-100/70">
                                <td class="py-3.5 px-4 sm:px-6 font-black text-indigo-950 bg-indigo-100/90 border-l border-indigo-200 align-middle">
                                    روش‌های تایید هویت کاربر
                                </td>
                                <td class="py-3.5 px-4 sm:px-6 font-bold text-slate-900 align-middle">
                                    اسلایدر لمسی روان، چالش جمع ریاضی، تطبیق آیکون، تله هانی‌پات نامرئی
                                </td>
                            </tr>
                            <tr class="bg-indigo-50/90">
                                <td class="py-3.5 px-4 sm:px-6 font-black text-indigo-950 bg-indigo-100/60 border-l border-indigo-200 align-middle">
                                    پشتیبانی از فروشگاه ووکامرس
                                </td>
                                <td class="py-3.5 px-4 sm:px-6 font-bold text-slate-900 align-middle">
                                    اتصال خودکار به فرم‌های تسویه‌حساب، ورود، عضویت و ثبت سفارش سریع
                                </td>
                            </tr>
                            <tr class="bg-amber-100/70">
                                <td class="py-3.5 px-4 sm:px-6 font-black text-indigo-950 bg-indigo-100/90 border-l border-indigo-200 align-middle">
                                    سازگاری با فرم‌سازها
                                </td>
                                <td class="py-3.5 px-4 sm:px-6 font-bold text-slate-900 align-middle">
                                    هماهنگ با المنتور پرو، فرم تماس ۷، گرویتی‌فرم و ثبت دیدگاه‌ها
                                </td>
                            </tr>
                            <tr class="bg-indigo-50/90">
                                <td class="py-3.5 px-4 sm:px-6 font-black text-indigo-950 bg-indigo-100/60 border-l border-indigo-200 align-middle">
                                    امنیت صفحه ورود پیشخوان
                                </td>
                                <td class="py-3.5 px-4 sm:px-6 font-bold text-slate-900 align-middle">
                                    قفل خودکار ضد حدس پسورد (Brute-Force) و مخفی‌سازی آدرس ورود
                                </td>
                            </tr>
                            <tr class="bg-cyan-100/70">
                                <td class="py-3.5 px-4 sm:px-6 font-black text-indigo-950 bg-indigo-100/90 border-l border-indigo-200 align-middle">
                                    استایلر اختصاصی صفحه ورود
                                </td>
                                <td class="py-3.5 px-4 sm:px-6 font-bold text-slate-900 align-middle">
                                    ۶ الگوی چیدمان مدرن، ۲۰+ والپیپر گرادیانت نوری (CSS)، فونت‌های محلی آفلاین و شخصی‌سازی کادر و فیلدها
                                </td>
                            </tr>
                            <tr class="bg-emerald-100/80">
                                <td class="py-3.5 px-4 sm:px-6 font-black text-indigo-950 bg-indigo-100/60 border-l border-indigo-200 align-middle">
                                    وضعیت پایگاه‌داده (دیتابیس)
                                </td>
                                <td class="py-3.5 px-4 sm:px-6 font-black text-emerald-950 align-middle">
                                    بدون ساختن جدول اضافی و سازگار با افزونه‌های کش (LiteSpeed و WP Rocket)
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- CONNECTOR 09 -->
        <div class="infographic-connector">
            <div class="connector-pill">
                <span class="icon-circle-sm bg-emerald-950 text-emerald-400"><i class="fas fa-heart"></i></span>
                <span>پشتیبانی مستقیم توسط تیم توسعه‌دهنده اصلی افزونه</span>
            </div>
        </div>

        <!-- ========================================================================= -->
        <!-- 10. DEVELOPER SUPPORT & QUALITY GUARANTEE -->
        <!-- ========================================================================= -->
        <footer class="infographic-section sec-info-finale text-center">

            <div class="bg-3d-layer text-emerald-900" aria-hidden="true">
                <div class="token-3d-wrapper-right">
                    <svg width="48" height="54" viewBox="0 0 72 84" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23 36V22C23 14.8 28.8 9 36 9C43.2 9 49 14.8 49 22V36" stroke="url(#navy-lock-shackle-s10-top-r)" stroke-width="7" stroke-linecap="round"/>
                        <rect x="11" y="34" width="50" height="44" rx="10" fill="url(#navy-lock-body-s10-top-r)"/>
                        <circle cx="36" cy="52" r="5" fill="#090e1f"/>
                        <path d="M34.5 54L33 64H39L37.5 54H34.5Z" fill="#090e1f"/>
                        <defs>
                            <linearGradient id="navy-lock-shackle-s10-top-r" x1="23" y1="9" x2="49" y2="36" gradientUnits="userSpaceOnUse">
                                <stop offset="0%" stop-color="#94a3b8"/><stop offset="100%" stop-color="#475569"/>
                            </linearGradient>
                            <linearGradient id="navy-lock-body-s10-top-r" x1="11" y1="34" x2="61" y2="78" gradientUnits="userSpaceOnUse">
                                <stop offset="0%" stop-color="#2a406e"/><stop offset="60%" stop-color="#15223e"/><stop offset="100%" stop-color="#080e1b"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <svg class="bg-sec-svg-icon bg-sec-svg-tl"><use href="#svg-shield-check"/></svg>
                <svg class="bg-sec-svg-icon bg-sec-svg-bl"><use href="#svg-wp-emblem"/></svg>
                <svg class="bg-sec-svg-icon bg-sec-svg-br"><use href="#svg-padlock"/></svg>
            </div>

            <div class="w-full space-y-4 relative z-10">
                <div class="p-5 sm:p-6 rounded-2xl box-deluxe-emerald space-y-2.5 relative overflow-hidden">
                    <i class="fas fa-shield-halved box-watermark-icon text-emerald-950"></i>
                    <span class="step-badge-pill bg-emerald-600 text-white shadow-md relative z-10">
                        <span class="icon-circle-sm bg-white text-emerald-700"><i class="fas fa-check"></i></span>
                        <span>پشتیبانی و همراهی مستقیم</span>
                    </span>
                    <h3 class="type-h1 text-slate-950 relative z-10">
                        خیالتان از بابت پشتیبانی و عملکرد افزونه راحت باشد
                    </h3>
                    <p class="type-body text-slate-800 max-w-3xl mx-auto relative z-10">
                        ما خودمان توسعه‌دهنده همین افزونه هستیم و در تمام مراحل نصب و تنظیمات، مستقیماً از طریق تیکت پاسخگوی سوالات فنی شما خواهیم بود.
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-5 type-sm font-black text-slate-900 text-right">
                    <div class="p-4 sm:p-5 rounded-2xl box-deluxe-indigo flex items-center gap-3.5 relative overflow-hidden">
                        <div class="icon-circle-lg bg-indigo-600 text-white shadow-sm relative z-10 border-2 border-white">
                            <i class="fas fa-headset"></i>
                        </div>
                        <div class="relative z-10">
                            <strong class="type-h4 text-slate-950 block font-black">پاسخگویی سریع به تیکت‌ها</strong>
                            <span class="type-xs text-slate-800 font-bold block mt-0.5">پاسخ فنی مستقیم توسط برنامه‌نویسان افزونه</span>
                        </div>
                    </div>

                    <div class="p-4 sm:p-5 rounded-2xl box-deluxe-emerald flex items-center gap-3.5 relative overflow-hidden">
                        <div class="icon-circle-lg bg-emerald-600 text-white shadow-sm relative z-10 border-2 border-white">
                            <i class="fas fa-arrows-rotate"></i>
                        </div>
                        <div class="relative z-10">
                            <strong class="type-h4 text-slate-950 block font-black">به‌روزرسانی‌های مداوم</strong>
                            <span class="type-xs text-slate-800 font-bold block mt-0.5">هماهنگی همیشگی با نسخه‌های جدید وردپرس و ووکامرس</span>
                        </div>
                    </div>

                    <div class="p-4 sm:p-5 rounded-2xl box-deluxe-purple flex items-center gap-3.5 relative overflow-hidden">
                        <div class="icon-circle-lg bg-purple-600 text-white shadow-sm relative z-10 border-2 border-white">
                            <i class="fas fa-code"></i>
                        </div>
                        <div class="relative z-10">
                            <strong class="type-h4 text-slate-950 block font-black">کدنویسی تمیز و استاندارد</strong>
                            <span class="type-xs text-slate-800 font-bold block mt-0.5">بدون تداخل با قالب‌ها و صفحه‌سازهای وردپرس</span>
                        </div>
                    </div>

                    <div class="p-4 sm:p-5 rounded-2xl box-deluxe-amber flex items-center gap-3.5 relative overflow-hidden">
                        <div class="icon-circle-lg bg-amber-500 text-white shadow-sm relative z-10 border-2 border-white">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <div class="relative z-10">
                            <strong class="type-h4 text-slate-950 block font-black">تضمین کارکرد مطمئن</strong>
                            <span class="type-xs text-slate-800 font-bold block mt-0.5">تست‌شده در سناریوهای پرترافیک فروشگاهی</span>
                        </div>
                    </div>
                </div>

            </div>
        </footer>

    </div>

</body>
</html>
