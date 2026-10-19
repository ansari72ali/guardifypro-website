<?php
/**
 * Guardify Pro - Official Landing Page & Technical Presentation (RTL)
 * 100% Native, Offline, Zero-Dependency WordPress Security & CAPTCHA Solution
 */
$page_title = "گاردفای پرو (Guardify Pro) | سامانه کپچای مستقل و بازطراحی مدرن ورود وردپرس";
?>
<!DOCTYPE html>
<html lang="fa-IR" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    
    <!-- Meta description -->
    <meta name="description" content="گاردفای پرو: سریع‌ترین سامانه کپچای بومی و مستقل برای وردپرس و ووکامرس بدون وابستگی به سرورهای خارجی با پشتیبانی از اسلایدر، آزمون ریاضی و تطبیق آیکون.">

    <!-- Preconnect & Typography Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
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

    <!-- Main Website Style -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- Embedded Guardify Demo & Captcha Theme Styles -->
    <link rel="stylesheet" href="/css/captcha-themes.css">
    <link rel="stylesheet" href="/css/login-plugin.css">

    <style>
        /* =========================================================================
           1. UNIFORM GLOBAL FONT-FAMILY & MODULAR TYPE SCALE SYSTEM
           ========================================================================= */
        :root {
            /* Harmonious Persian Font Family */
            --font-persian: 'Vazirmatn', 'IRANSansWeb', 'IRANSans', system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            
            /* Modular Type Scale (1.25 Major Third with balanced line heights) */
            --type-display: clamp(2.25rem, 5vw, 3.5rem);   /* 36px - 56px */
            --type-h1:      clamp(1.85rem, 4vw, 2.75rem);   /* 30px - 44px */
            --type-h2:      clamp(1.4rem, 3vw, 2rem);       /* 22px - 32px */
            --type-h3:      clamp(1.2rem, 2.5vw, 1.45rem);  /* 19px - 23px */
            --type-h4:      clamp(1.05rem, 2vw, 1.25rem);   /* 17px - 20px */
            --type-lead:    clamp(1rem, 2vw, 1.15rem);      /* 16px - 18.5px */
            --type-body:    0.95rem;                        /* 15.2px */
            --type-sm:      0.875rem;                       /* 14px */
            --type-xs:      0.75rem;                        /* 12px */
            --type-micro:   0.6875rem;                      /* 11px */
        }

        /* Enforce Uniform Font Family Globally Across 100% of Elements */
        *, *::before, *::after,
        html, body, div, span, applet, object, iframe,
        h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big,
        cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong,
        sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form,
        label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article,
        aside, canvas, details, embed, figure, figcaption, footer, header, hgroup,
        menu, nav, output, ruby, section, summary, time, mark, audio, video,
        input, button, select, textarea {
            font-family: var(--font-persian) !important;
            letter-spacing: normal !important;
        }

        /* Protect FontAwesome Icons */
        .fa, .fas, .far, .fal, .fad, .fab, .fa-solid, .fa-regular, .fa-brands, [class*="fa-"], [class^="fa-"] {
            font-family: "Font Awesome 6 Free", "Font Awesome 6 Brands", "FontAwesome" !important;
            font-style: normal !important;
            font-variant: normal !important;
            font-weight: 900 !important;
            line-height: 1 !important;
        }

        /* Modular Type Scale Classes */
        .type-display {
            font-size: var(--type-display) !important;
            line-height: 1.15 !important;
            font-weight: 900 !important;
        }

        .type-h1 {
            font-size: var(--type-h1) !important;
            line-height: 1.25 !important;
            font-weight: 900 !important;
        }

        .type-h2 {
            font-size: var(--type-h2) !important;
            line-height: 1.35 !important;
            font-weight: 900 !important;
        }

        .type-h3 {
            font-size: var(--type-h3) !important;
            line-height: 1.35 !important;
            font-weight: 800 !important;
        }

        .type-h4 {
            font-size: var(--type-h4) !important;
            line-height: 1.4 !important;
            font-weight: 800 !important;
        }

        .type-lead {
            font-size: var(--type-lead) !important;
            line-height: 1.8 !important;
            font-weight: 500 !important;
        }

        .type-body {
            font-size: var(--type-body) !important;
            line-height: 1.75 !important;
            font-weight: 500 !important;
        }

        .type-sm {
            font-size: var(--type-sm) !important;
            line-height: 1.6 !important;
            font-weight: 600 !important;
        }

        .type-xs {
            font-size: var(--type-xs) !important;
            line-height: 1.5 !important;
            font-weight: 700 !important;
        }

        .type-micro {
            font-size: var(--type-micro) !important;
            line-height: 1.4 !important;
            font-weight: 800 !important;
        }

        /* =========================================================================
           2. ZERO MOTION ARCHITECTURE (STRICTLY NO ANIMATIONS / TRANSITIONS)
           ========================================================================= */
        *, *::before, *::after {
            transition: none !important;
            animation: none !important;
            transform: none !important;
        }

        body {
            background-color: #070913;
            color: #0f172a;
            direction: rtl;
            text-align: right;
            margin: 0;
            padding: 1.5rem 0.75rem;
            min-height: 100vh;
        }

        @media (min-width: 640px) {
            body {
                padding: 2.5rem 1.25rem;
            }
        }

        /* Poster Canvas */
        .poster-container {
            max-width: 1240px;
            margin: 0 auto;
            background: #ffffff;
            box-shadow: 0 25px 60px -15px rgba(0, 0, 0, 0.7);
            position: relative;
        }

        /* =========================================================================
           3. CIRCULAR AESTHETIC ICON CONTAINERS (SPACIOUS, AIRY & CENTERED)
           ========================================================================= */
        .icon-circle-hero {
            width: 5.25rem !important;
            height: 5.25rem !important;
            border-radius: 9999px !important;
            aspect-ratio: 1 / 1 !important;
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            padding: 1.15rem !important;
            flex-shrink: 0 !important;
        }
        .icon-circle-hero i, .icon-circle-hero svg {
            font-size: 2.25rem !important;
            line-height: 1 !important;
        }

        .icon-circle-xl {
            width: 4rem !important;
            height: 4rem !important;
            border-radius: 9999px !important;
            aspect-ratio: 1 / 1 !important;
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            padding: 0.95rem !important;
            flex-shrink: 0 !important;
        }
        .icon-circle-xl i, .icon-circle-xl svg {
            font-size: 1.6rem !important;
            line-height: 1 !important;
        }

        .icon-circle-lg {
            width: 3.35rem !important;
            height: 3.35rem !important;
            border-radius: 9999px !important;
            aspect-ratio: 1 / 1 !important;
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            padding: 0.8rem !important;
            flex-shrink: 0 !important;
        }
        .icon-circle-lg i, .icon-circle-lg svg {
            font-size: 1.35rem !important;
            line-height: 1 !important;
        }

        .icon-circle-md {
            width: 2.5rem !important;
            height: 2.5rem !important;
            border-radius: 9999px !important;
            aspect-ratio: 1 / 1 !important;
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            padding: 0.55rem !important;
            flex-shrink: 0 !important;
        }
        .icon-circle-md i, .icon-circle-md svg {
            font-size: 1.05rem !important;
            line-height: 1 !important;
        }

        .icon-circle-sm {
            width: 2rem !important;
            height: 2rem !important;
            border-radius: 9999px !important;
            aspect-ratio: 1 / 1 !important;
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
            padding: 0.35rem !important;
            flex-shrink: 0 !important;
        }
        .icon-circle-sm i, .icon-circle-sm svg {
            font-size: 0.85rem !important;
            line-height: 1 !important;
        }

        /* =========================================================================
           4. IN-BOX WATERMARK ICONS (STATIC, ELEGANT, NON-BLOCKING)
           ========================================================================= */
        .box-watermark-icon {
            position: absolute;
            left: -1rem;
            bottom: -1rem;
            font-size: 6.5rem;
            opacity: 0.12;
            pointer-events: none;
            user-select: none;
            z-index: 1;
            line-height: 1;
        }

        .box-watermark-icon-dark {
            position: absolute;
            left: -1rem;
            bottom: -1rem;
            font-size: 6.5rem;
            opacity: 0.14;
            pointer-events: none;
            user-select: none;
            z-index: 1;
            line-height: 1;
            color: #ffffff;
        }

        /* Deluxe Bento Box Cards */
        .box-deluxe-indigo {
            background: linear-gradient(145deg, #ffffff 0%, #f5f7ff 100%);
            border: 2px solid #e0e7ff;
            box-shadow: 0 10px 25px -5px rgba(79, 70, 229, 0.08);
        }

        .box-deluxe-emerald {
            background: linear-gradient(145deg, #ffffff 0%, #f0fdf4 100%);
            border: 2px solid #dcfce7;
            box-shadow: 0 10px 25px -5px rgba(16, 185, 129, 0.08);
        }

        .box-deluxe-amber {
            background: linear-gradient(145deg, #ffffff 0%, #fffbeb 100%);
            border: 2px solid #fef3c7;
            box-shadow: 0 10px 25px -5px rgba(245, 158, 11, 0.08);
        }

        .box-deluxe-purple {
            background: linear-gradient(145deg, #ffffff 0%, #faf5ff 100%);
            border: 2px solid #f3e8ff;
            box-shadow: 0 10px 25px -5px rgba(168, 85, 247, 0.08);
        }

        .box-deluxe-cyan {
            background: linear-gradient(145deg, #ffffff 0%, #ecfeff 100%);
            border: 2px solid #cffafe;
            box-shadow: 0 10px 25px -5px rgba(6, 182, 212, 0.08);
        }

        .box-neon-kiosk {
            background: linear-gradient(160deg, #0d1224 0%, #080c1a 100%);
            border: 1px solid rgba(99, 102, 241, 0.25);
            box-shadow: 0 15px 35px -5px rgba(0, 0, 0, 0.5);
        }

        .security-hud-pill {
            background: #090e23;
            box-shadow: 0 15px 35px -10px rgba(0, 0, 0, 0.6);
        }

        /* Pill Badges */
        .step-badge-pill {
            display: inline-flex;
            align-items: center;
            gap: 0.65rem;
            padding: 0.45rem 1.1rem;
            border-radius: 9999px;
            font-size: var(--type-xs);
            font-weight: 900;
        }

        /* Clean Rich Backgrounds */
        .bg-tech-grid {
            background-color: #fafbfd;
            background-image: 
                linear-gradient(to right, rgba(99, 102, 241, 0.04) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(99, 102, 241, 0.04) 1px, transparent 1px);
            background-size: 32px 32px;
        }

        .bg-mesh-radial-1 {
            background-color: #ffffff;
            background-image: 
                radial-gradient(circle at 100% 0%, rgba(99, 102, 241, 0.08) 0%, transparent 40%),
                radial-gradient(circle at 0% 100%, rgba(16, 185, 129, 0.06) 0%, transparent 40%);
        }

        .bg-mesh-radial-2 {
            background-color: #ffffff;
            background-image: 
                radial-gradient(circle at 0% 0%, rgba(168, 85, 247, 0.08) 0%, transparent 40%),
                radial-gradient(circle at 100% 100%, rgba(245, 158, 11, 0.06) 0%, transparent 40%);
        }

        /* =========================================================================
           5. DECORATIVE SECURITY MOTIFS IN EMPTY SECTION SPACES (NON-INTRUSIVE)
           ========================================================================= */
        .sec-empty-motif-right {
            position: absolute;
            right: 1.5rem;
            top: 2.25rem;
            font-size: 6rem;
            line-height: 1;
            pointer-events: none;
            user-select: none;
            z-index: 2;
            opacity: 0.22;
        }

        .sec-empty-motif-left {
            position: absolute;
            left: 1.5rem;
            top: 2.25rem;
            font-size: 6rem;
            line-height: 1;
            pointer-events: none;
            user-select: none;
            z-index: 2;
            opacity: 0.22;
        }

        .sec-empty-motif-right-dark {
            position: absolute;
            right: 1.5rem;
            top: 2.25rem;
            font-size: 6rem;
            line-height: 1;
            pointer-events: none;
            user-select: none;
            z-index: 2;
            opacity: 0.24;
            color: #818cf8;
        }

        .sec-empty-motif-left-dark {
            position: absolute;
            left: 1.5rem;
            top: 2.25rem;
            font-size: 6rem;
            line-height: 1;
            pointer-events: none;
            user-select: none;
            z-index: 2;
            opacity: 0.24;
            color: #34d399;
        }

        /* 3D Graphic Tokens & Tech Elements in Empty Margins */
        .token-3d-wrapper-right {
            position: absolute;
            right: 2rem;
            top: 6.5rem;
            pointer-events: none;
            user-select: none;
            z-index: 3;
            display: none;
        }

        .token-3d-wrapper-left {
            position: absolute;
            left: 2rem;
            top: 6.5rem;
            pointer-events: none;
            user-select: none;
            z-index: 3;
            display: none;
        }

        @media (min-width: 1024px) {
            .token-3d-wrapper-right, .token-3d-wrapper-left {
                display: block;
            }
        }

        /* Simple Tech Crosshair and Node Accents */
        .tech-crosshair-node {
            position: absolute;
            width: 1.5rem;
            height: 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6366f1;
            opacity: 0.35;
            font-size: 0.85rem;
            font-weight: 900;
            pointer-events: none;
            user-select: none;
            z-index: 2;
        }

        .tech-grid-cluster {
            position: absolute;
            width: 60px;
            height: 60px;
            background-image: radial-gradient(circle, #6366f1 1.5px, transparent 1.5px);
            background-size: 12px 12px;
            opacity: 0.25;
            pointer-events: none;
            user-select: none;
            z-index: 2;
        }

        @media (min-width: 1024px) {
            .sec-empty-motif-right, .sec-empty-motif-left {
                font-size: 6.5rem;
                top: 2.75rem;
            }
            .sec-empty-motif-right {
                right: 3rem;
            }
            .sec-empty-motif-left {
                left: 3rem;
            }
            .sec-empty-motif-right-dark, .sec-empty-motif-left-dark {
                font-size: 6.5rem;
                top: 2.75rem;
            }
            .sec-empty-motif-right-dark {
                right: 3rem;
            }
            .sec-empty-motif-left-dark {
                left: 3rem;
            }
        }

    </style>
</head>
<body>

    <!-- ========================================================================= -->
    <!-- MAIN POSTER CANVAS (Clean, Strictly No Elements Behind Boxes, Zero Motion) -->
    <!-- ========================================================================= -->
    <div class="poster-container rounded-3xl sm:rounded-[44px] overflow-hidden shadow-2xl relative">

        <!-- ========================================================================= -->
        <!-- 1. HERO SECTION (Modular Hierarchy & Spacious Circular Icon Aesthetic) -->
        <!-- ========================================================================= -->
        <header class="p-8 sm:p-14 lg:p-18 bg-gradient-to-b from-indigo-100/90 via-purple-50/50 to-slate-50 text-center relative overflow-hidden">
            <!-- Decorative Security Background Motifs in Empty Margins -->
            <i class="fas fa-shield-halved sec-empty-motif-right text-indigo-950"></i>
            <i class="fas fa-lock sec-empty-motif-left text-purple-950"></i>
            
            <!-- Dedicated Watermark in Header -->
            <div class="box-watermark-icon text-indigo-950 opacity-[0.05] !left-auto !right-8 !bottom-8 !text-9xl">
                <i class="fas fa-shield-halved"></i>
            </div>

            <div class="relative z-10 max-w-5xl mx-auto space-y-7">
                
                <!-- SECURITY HIGHLIGHT BADGES WITH CIRCULAR ICONS -->
                <div class="flex flex-wrap items-center justify-center gap-2.5 sm:gap-4 pb-2">
                    <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/95 border border-indigo-200 text-indigo-800 type-xs shadow-sm">
                        <span class="icon-circle-sm bg-indigo-50 text-indigo-600">
                            <i class="fas fa-shield-cat"></i>
                        </span>
                        <span>استاندارد امنیت هسته وردپرس</span>
                    </span>
                    <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/95 border border-emerald-200 text-emerald-800 type-xs shadow-sm">
                        <span class="icon-circle-sm bg-emerald-50 text-emerald-600">
                            <i class="fas fa-bolt"></i>
                        </span>
                        <span>پردازش مستقل سمت سرور</span>
                    </span>
                    <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/95 border border-amber-200 text-amber-800 type-xs shadow-sm">
                        <span class="icon-circle-sm bg-amber-50 text-amber-600">
                            <i class="fas fa-plug-circle-check"></i>
                        </span>
                        <span>۱۰۰٪ مستقل از شبکه بین‌الملل</span>
                    </span>
                    <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/95 border border-cyan-200 text-cyan-800 type-xs shadow-sm">
                        <span class="icon-circle-sm bg-cyan-50 text-cyan-600">
                            <i class="fas fa-server"></i>
                        </span>
                        <span>سازگاری کامل با سرورهای ایرانی</span>
                    </span>
                </div>

                <!-- Product Identity Badge -->
                <div class="flex items-center justify-center">
                    <span class="step-badge-pill bg-gradient-to-r from-indigo-600 via-purple-600 to-indigo-700 text-white shadow-xl shadow-indigo-600/30 border border-white/20">
                        <span class="icon-circle-sm bg-white text-indigo-700 shadow-sm">🛡️</span>
                        <span>افزونه امنیت فرم‌ها و کپچای مستقل وردپرس • گاردفای پرو</span>
                    </span>
                </div>

                <!-- Brand Title with Hero Circular Icon -->
                <div class="flex items-center justify-center gap-5 sm:gap-6 pt-1">
                    <div class="icon-circle-hero bg-gradient-to-tr from-indigo-600 via-indigo-700 to-purple-600 text-white shadow-2xl border-2 border-indigo-200">
                        <i class="fas fa-shield-halved"></i>
                    </div>
                    <div class="text-right">
                        <h1 class="type-display text-slate-900 tracking-tight">
                            گاردفای پرو <span class="text-indigo-600">Guardify Pro</span>
                        </h1>
                        <p class="type-lead text-slate-600 font-bold mt-1">
                            سپر بومی امنیت فرم‌های وردپرس و ووکامرس با قابلیت تغییر ظاهر صفحه ورود
                        </p>
                    </div>
                </div>

                <!-- Main Pitch -->
                <div class="max-w-3xl mx-auto space-y-4 pt-2">
                    <h2 class="type-h2 text-slate-800 leading-snug">
                        دیگه نگران معطلی مشتریان در صفحه پرداخت یا خرابی ریکپچای گوگل نباشید!
                    </h2>
                    <p class="type-lead text-slate-600 leading-relaxed">
                        این افزونه مستقیم روی وردپرس خودتان اجرا می‌شود؛ بدون حتی یک ثانیه قطعی ناشی از فیلترینگ یا اینترنت بین‌الملل، بسیار چابک و با ظاهر فوق‌العاده مدرن.
                    </p>
                </div>

                <!-- Quick Tech Highlights with Circular Icons -->
                <div class="flex flex-wrap items-center justify-center gap-3 sm:gap-6 pt-3 text-slate-700">
                    <div class="flex items-center gap-2.5 bg-white/95 px-4 py-2.5 rounded-2xl shadow-sm border border-slate-200 type-sm font-bold">
                        <span class="icon-circle-sm bg-purple-100 text-purple-600">
                            <i class="fas fa-cart-shopping"></i>
                        </span>
                        <span>تضمین تکمیل ۱۰۰٪ سبد خرید ووکامرس</span>
                    </div>
                    <div class="flex items-center gap-2.5 bg-white/95 px-4 py-2.5 rounded-2xl shadow-sm border border-slate-200 type-sm font-bold">
                        <span class="icon-circle-sm bg-amber-100 text-amber-500">
                            <i class="fas fa-bolt"></i>
                        </span>
                        <span>لود آنی در کمتر از ۰.۰۵ ثانیه</span>
                    </div>
                    <div class="flex items-center gap-2.5 bg-white/95 px-4 py-2.5 rounded-2xl shadow-sm border border-slate-200 type-sm font-bold">
                        <span class="icon-circle-sm bg-emerald-100 text-emerald-600">
                            <i class="fas fa-lock"></i>
                        </span>
                        <span>دفاع هوشمند در برابر حملات جستجوی پسورد</span>
                    </div>
                </div>

                <!-- LIVE DEFENSE OPERATIONS DASHBOARD (HUD) WITH SPACIOUS CIRCULAR ICONS -->
                <div class="pt-6">
                    <div class="security-hud-pill rounded-3xl p-5 sm:p-7 border border-indigo-500/30 text-white relative">
                        <div class="flex flex-wrap items-center justify-between gap-4 pb-5 border-b border-slate-700/80 relative z-10">
                            <div class="flex items-center gap-3">
                                <span class="w-3.5 h-3.5 rounded-full bg-emerald-400"></span>
                                <span class="type-h4 text-emerald-300 flex items-center gap-2 font-bold">
                                    <i class="fas fa-shield-virus"></i>
                                    سامانه پایش امنیت و کارکرد زنده کپچا
                                </span>
                            </div>
                            <span class="type-xs bg-slate-800/90 px-3.5 py-1.5 rounded-full text-indigo-300 border border-slate-700 font-bold">
                                وضعیت سیستم: فعال و پایدار در هسته وردپرس
                            </span>
                        </div>

                        <!-- 4 Metric Cards with Spacious Circular Icons -->
                        <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-4 pt-5 relative z-10">
                            <!-- Metric 1 -->
                            <div class="p-4 rounded-2xl bg-slate-900/90 border border-emerald-500/30 flex items-center gap-3.5 relative overflow-hidden">
                                <i class="fas fa-shield-check box-watermark-icon-dark !text-5xl !-bottom-2 !-left-2 opacity-[0.08]"></i>
                                <div class="icon-circle-lg bg-emerald-500/20 text-emerald-400 border border-emerald-500/30 shadow-sm relative z-10">
                                    <i class="fas fa-shield-check"></i>
                                </div>
                                <div class="relative z-10 text-right">
                                    <span class="type-micro text-slate-400 block font-normal">دیوار آتش فرم‌ها</span>
                                    <strong class="type-sm text-emerald-300 block font-black">فعال و پایش مداوم</strong>
                                </div>
                            </div>
                            <!-- Metric 2 -->
                            <div class="p-4 rounded-2xl bg-slate-900/90 border border-cyan-500/30 flex items-center gap-3.5 relative overflow-hidden">
                                <i class="fas fa-robot box-watermark-icon-dark !text-5xl !-bottom-2 !-left-2 opacity-[0.08]"></i>
                                <div class="icon-circle-lg bg-cyan-500/20 text-cyan-400 border border-cyan-500/30 shadow-sm relative z-10">
                                    <i class="fas fa-robot"></i>
                                </div>
                                <div class="relative z-10 text-right">
                                    <span class="type-micro text-slate-400 block font-normal">مهار ربات‌های اسپمر</span>
                                    <strong class="type-sm text-cyan-300 block font-black">۹۹.۸٪ دفع خودکار</strong>
                                </div>
                            </div>
                            <!-- Metric 3 -->
                            <div class="p-4 rounded-2xl bg-slate-900/90 border border-amber-500/30 flex items-center gap-3.5 relative overflow-hidden">
                                <i class="fas fa-user-lock box-watermark-icon-dark !text-5xl !-bottom-2 !-left-2 opacity-[0.08]"></i>
                                <div class="icon-circle-lg bg-amber-500/20 text-amber-400 border border-amber-500/30 shadow-sm relative z-10">
                                    <i class="fas fa-user-lock"></i>
                                </div>
                                <div class="relative z-10 text-right">
                                    <span class="type-micro text-slate-400 block font-normal">سپر حملات بروت‌فورس</span>
                                    <strong class="type-sm text-amber-300 block font-black">قفل هوشمند لاگین</strong>
                                </div>
                            </div>
                            <!-- Metric 4 -->
                            <div class="p-4 rounded-2xl bg-slate-900/90 border border-purple-500/30 flex items-center gap-3.5 relative overflow-hidden">
                                <i class="fas fa-key box-watermark-icon-dark !text-5xl !-bottom-2 !-left-2 opacity-[0.08]"></i>
                                <div class="icon-circle-lg bg-purple-500/20 text-purple-400 border border-purple-500/30 shadow-sm relative z-10">
                                    <i class="fas fa-key"></i>
                                </div>
                                <div class="relative z-10 text-right">
                                    <span class="type-micro text-slate-400 block font-normal">اعتبارسنجی آفلاین</span>
                                    <strong class="type-sm text-purple-300 block font-black">نشست‌های امن محلی</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </header>

        <!-- ========================================================================= -->
        <!-- SPECIAL DIVIDER 01: HARDWARE CRYPTOGRAPHIC BUS IN EMPTY SPACE -->
        <!-- ========================================================================= -->
        <div class="py-5 px-6 sm:px-12 bg-slate-950 border-y-2 border-indigo-500/40 shadow-inner relative z-10">
            <div class="max-w-4xl mx-auto flex items-center justify-between gap-4">
                <div class="flex-1 h-0.5 bg-gradient-to-r from-transparent via-indigo-500 to-indigo-400"></div>
                <div class="flex items-center gap-2.5 px-4 py-2 rounded-full bg-slate-900 border border-indigo-400/50 shadow-md text-indigo-300 type-sm font-bold">
                    <span class="icon-circle-sm bg-indigo-950 text-indigo-400">
                        <i class="fas fa-microchip"></i>
                    </span>
                    <span>هسته پردازش محلی PHP بدون هیچ‌گونه وابستگی خارجی</span>
                </div>
                <div class="flex-1 h-0.5 bg-gradient-to-l from-transparent via-indigo-500 to-indigo-400"></div>
            </div>
        </div>

        <!-- ========================================================================= -->
        <!-- 2. FOUR CORE PILLARS OF EXCELLENCE (Circular Icons & Modular Typography) -->
        <!-- ========================================================================= -->
        <section class="p-8 sm:p-14 lg:p-18 bg-tech-grid space-y-12 relative overflow-hidden">
            <!-- Decorative Security Background Motifs in Empty Margins -->
            <i class="fas fa-shield-cat sec-empty-motif-right text-indigo-900"></i>
            <i class="fas fa-fingerprint sec-empty-motif-left text-emerald-900"></i>
<div class="token-3d-wrapper-right">
        <svg width="68" height="78" viewBox="0 0 72 82" fill="none" class="drop-shadow-[0_15px_25px_rgba(5, 150, 105, 0.45)]">
          <path d="M36 7L64 17V42C64 59 52 72 36 78C20 72 8 42 8 42V17L36 7Z" fill="#064e3b"/>
          <path d="M36 4L62 14V39C62 55 50 68 36 74C22 68 10 39 10 39V14L36 4Z" fill="url(#grad-emerald)"/>
          <path d="M36 4L10 14V39C10 39 22 68 36 74V4Z" fill="white" fill-opacity="0.25"/>
          <circle cx="36" cy="38" r="14" fill="white" fill-opacity="0.2"/>
          <path d="M36 29C33 29 30.5 31.5 30.5 34.5V38H29C27.9 38 27 38.9 27 40V48C27 49.1 27.9 50 29 50H43C44.1 50 45 49.1 45 48V40C45 38.9 44.1 38 43 38H41.5V34.5C41.5 31.5 39 29 36 29ZM36 31.5C37.7 31.5 39 32.8 39 34.5V38H33V34.5C33 32.8 34.3 31.5 36 31.5Z" fill="white"/>
          <defs>
            <linearGradient id="grad-emerald" x1="0" y1="0" x2="72" y2="82" gradientUnits="userSpaceOnUse">
              <stop stop-color="#34d399"/>
              <stop offset="0.6" stop-color="#059669"/>
              <stop offset="1" stop-color="#064e3b"/>
            </linearGradient>
          </defs>
        </svg>
    </div>
<div class="token-3d-wrapper-left">
        <svg width="62" height="69" viewBox="0 0 64 72" fill="none" class="drop-shadow-[0_15px_25px_rgba(6, 182, 212, 0.4)]">
          <polygon points="32,4 60,19 32,34 4,19" fill="#67e8f9"/>
          <polygon points="4,19 32,34 32,66 4,51" fill="#06b6d4"/>
          <polygon points="32,34 60,19 60,51 32,66" fill="#0e7490"/>
          <path d="M15 36C15 34 16.5 32.5 18.5 32.5C20.5 32.5 22 34 22 36V38H23C23.6 38 24 38.4 24 39V45C24 45.6 23.6 46 23 46H14C13.4 46 13 45.6 13 45V39C13 38.4 13.4 38 14 38H15V36ZM16.5 36H20.5V38H16.5V36Z" fill="white" fill-opacity="0.9"/>
          <path d="M42 42L46 46L54 36" stroke="white" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round" stroke-opacity="0.95"/>
        </svg>
    </div>
            <div class="tech-crosshair-node top-10 right-14">+</div>
            <div class="tech-crosshair-node top-10 left-14">+</div>
            <div class="tech-grid-cluster top-28 right-10"></div>
            <div class="text-center max-w-4xl mx-auto space-y-3 relative z-10">
                <span class="step-badge-pill bg-indigo-600 text-white shadow-lg shadow-indigo-600/30">
                    <span class="icon-circle-sm bg-white text-indigo-700 shadow-sm">۱</span>
                    <span>چهار مزیت کلیدی افزونه</span>
                </span>
                <h3 class="type-h1 text-slate-900 leading-tight">
                    چرا مدیران حرفه‌ای سایت‌ها گاردفای پرو را انتخاب می‌کنند؟
                </h3>
                <p class="type-lead text-slate-600 leading-relaxed">
                    این چهار ویژگی زیرساختی باعث می‌شود سایت شما بدون حتی ۱ ثانیه افت سرعت یا قطعی، بالاترین نرخ تبدیل را ثبت کند:
                </p>
            </div>

            <!-- 2-Column Grid with Spacious Circular Icons & Watermarks -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-7 lg:gap-8 relative z-10">
                
                <!-- Pillar 1: Lightning Fast -->
                <div class="p-8 sm:p-10 rounded-3xl box-deluxe-emerald flex flex-col justify-between relative overflow-hidden">
                    <i class="fas fa-bolt box-watermark-icon text-emerald-950"></i>
                    <div class="h-1.5 w-full bg-gradient-to-r from-emerald-500 to-teal-400 rounded-t-3xl -mt-8 -mx-8 sm:-mt-10 sm:-mx-10 mb-6 relative z-10"></div>
                    <div class="space-y-4 relative z-10">
                        <div class="flex items-center justify-between pb-3 border-b border-emerald-100">
                            <span class="px-3.5 py-1.5 rounded-full bg-emerald-100 text-emerald-800 type-xs font-black flex items-center gap-2">
                                <span class="w-2.5 h-2.5 rounded-full bg-emerald-500"></span>
                                سرعت خیره‌کننده
                            </span>
                            <div class="icon-circle-xl bg-gradient-to-tr from-emerald-600 to-teal-400 text-white shadow-lg shadow-emerald-500/30 border-2 border-emerald-200">
                                <i class="fas fa-bolt"></i>
                            </div>
                        </div>
                        <h4 class="type-h3 text-slate-900">بدون معطلی و تأخیر در لود صفحات</h4>
                        <p class="type-body text-slate-700 leading-relaxed">
                            ریکپچای گوگل معمولاً بین ۴۰۰ تا ۸۰۰ کیلوبایت اسکریپت خارجی لود می‌کنه و سرعت سایت رو پایین میاره. گاردفای پرو با کمتر از ۱۰ کیلوبایت کد سبک اجرا شده و هیچ افت سرعتی در لود سایت ایجاد نمی‌کنه.
                        </p>
                    </div>
                    <div class="pt-5 border-t border-emerald-100 flex items-center justify-between type-sm text-emerald-900 relative z-10 font-bold">
                        <span class="flex items-center gap-2">
                            <span class="icon-circle-sm bg-emerald-100 text-emerald-700">
                                <i class="fas fa-gauge-high"></i>
                            </span>
                            زمان بارگذاری زیر ۰.۰۵ ثانیه
                        </span>
                        <span class="text-emerald-700 bg-emerald-50 px-3 py-1 rounded-lg border border-emerald-200">بدون معطلی</span>
                    </div>
                </div>

                <!-- Pillar 2: Offline Independence -->
                <div class="p-8 sm:p-10 rounded-3xl box-deluxe-indigo flex flex-col justify-between relative overflow-hidden">
                    <i class="fas fa-cloud-slash box-watermark-icon text-indigo-950"></i>
                    <div class="h-1.5 w-full bg-gradient-to-r from-indigo-500 to-blue-500 rounded-t-3xl -mt-8 -mx-8 sm:-mt-10 sm:-mx-10 mb-6 relative z-10"></div>
                    <div class="space-y-4 relative z-10">
                        <div class="flex items-center justify-between pb-3 border-b border-indigo-100">
                            <span class="px-3.5 py-1.5 rounded-full bg-indigo-100 text-indigo-800 type-xs font-black flex items-center gap-2">
                                <span class="w-2.5 h-2.5 rounded-full bg-indigo-500"></span>
                                بدون وابستگی
                            </span>
                            <div class="icon-circle-xl bg-gradient-to-tr from-indigo-600 to-blue-500 text-white shadow-lg shadow-indigo-500/30 border-2 border-indigo-200">
                                <i class="fas fa-server"></i>
                            </div>
                        </div>
                        <h4 class="type-h3 text-slate-900">استقلال کامل از سرورهای خارجی</h4>
                        <p class="type-body text-slate-700 leading-relaxed">
                            همه محاسبات روی سرور خودتان انجام می‌شود. یعنی حتی اگر اینترنت بین‌الملل با اختلال مواجه شود، ثبت‌نام، ورود و تسویه‌حساب در فروشگاه شما بدون لحظه‌ای توقف کار می‌کند.
                        </p>
                    </div>
                    <div class="pt-5 border-t border-indigo-100 flex items-center justify-between type-sm text-indigo-900 relative z-10 font-bold">
                        <span class="flex items-center gap-2">
                            <span class="icon-circle-sm bg-indigo-100 text-indigo-700">
                                <i class="fas fa-shield-halved"></i>
                            </span>
                            تضمین ۱۰۰٪ پایداری در ایران
                        </span>
                        <span class="text-indigo-700 bg-indigo-50 px-3 py-1 rounded-lg border border-indigo-200">میزبانی محلی</span>
                    </div>
                </div>

                <!-- Pillar 3: Lightweight -->
                <div class="p-8 sm:p-10 rounded-3xl box-deluxe-amber flex flex-col justify-between relative overflow-hidden">
                    <i class="fas fa-microchip box-watermark-icon text-amber-950"></i>
                    <div class="h-1.5 w-full bg-gradient-to-r from-amber-500 to-orange-500 rounded-t-3xl -mt-8 -mx-8 sm:-mt-10 sm:-mx-10 mb-6 relative z-10"></div>
                    <div class="space-y-4 relative z-10">
                        <div class="flex items-center justify-between pb-3 border-b border-amber-100">
                            <span class="px-3.5 py-1.5 rounded-full bg-amber-100 text-amber-800 type-xs font-black flex items-center gap-2">
                                <span class="w-2.5 h-2.5 rounded-full bg-amber-500"></span>
                                فوق‌العاده سبک
                            </span>
                            <div class="icon-circle-xl bg-gradient-to-tr from-amber-500 to-orange-500 text-white shadow-lg shadow-amber-500/30 border-2 border-amber-200">
                                <i class="fas fa-feather-pointed"></i>
                            </div>
                        </div>
                        <h4 class="type-h3 text-slate-900">مصرف بسیار کم حافظه رم و دیتابیس</h4>
                        <p class="type-body text-slate-700 leading-relaxed">
                            برخلاف افزونه‌های سنگین که هزاران سطر جدول بی‌مصرف به دیتابیس اضافه می‌کنند، گاردفای پرو بدون انباشت داده‌های موقت کار می‌کند و دیتابیس وردپرس همیشه چابک می‌ماند.
                        </p>
                    </div>
                    <div class="pt-5 border-t border-amber-100 flex items-center justify-between type-sm text-amber-900 relative z-10 font-bold">
                        <span class="flex items-center gap-2">
                            <span class="icon-circle-sm bg-amber-100 text-amber-700">
                                <i class="fas fa-database"></i>
                            </span>
                            بدون ساختن جدول‌های اضافی
                        </span>
                        <span class="text-amber-700 bg-amber-50 px-3 py-1 rounded-lg border border-amber-200">بدون سنگینی</span>
                    </div>
                </div>

                <!-- Pillar 4: Smart Failover -->
                <div class="p-8 sm:p-10 rounded-3xl box-deluxe-purple flex flex-col justify-between relative overflow-hidden">
                    <i class="fas fa-shuffle box-watermark-icon text-purple-950"></i>
                    <div class="h-1.5 w-full bg-gradient-to-r from-purple-500 to-indigo-500 rounded-t-3xl -mt-8 -mx-8 sm:-mt-10 sm:-mx-10 mb-6 relative z-10"></div>
                    <div class="space-y-4 relative z-10">
                        <div class="flex items-center justify-between pb-3 border-b border-purple-100">
                            <span class="px-3.5 py-1.5 rounded-full bg-purple-100 text-purple-800 type-xs font-black flex items-center gap-2">
                                <span class="w-2.5 h-2.5 rounded-full bg-purple-500"></span>
                                سوییچ اضطراری
                            </span>
                            <div class="icon-circle-xl bg-gradient-to-tr from-purple-600 to-indigo-500 text-white shadow-lg shadow-purple-500/30 border-2 border-purple-200">
                                <i class="fas fa-route"></i>
                            </div>
                        </div>
                        <h4 class="type-h3 text-slate-900">سوئیچ خودکار؛ هیچ سفارشی از دست نمی‌رود</h4>
                        <p class="type-body text-slate-700 leading-relaxed">
                            حتی اگر بخواهید از سرویس‌های خارجی استفاده کنید، سیستم گاردفای پیوسته پاسخ‌دهی را پایش می‌کند و در صورت کوچک‌ترین اختلال، بلافاصله به حالت محلی سوییچ می‌کند تا ثبت سفارش مسدود نشود.
                        </p>
                    </div>
                    <div class="pt-5 border-t border-purple-100 flex items-center justify-between type-sm text-purple-900 relative z-10 font-bold">
                        <span class="flex items-center gap-2">
                            <span class="icon-circle-sm bg-purple-100 text-purple-700">
                                <i class="fas fa-cart-check"></i>
                            </span>
                            حفاظت ۱۰۰٪ از سبد خریدهای باز
                        </span>
                        <span class="text-purple-700 bg-purple-50 px-3 py-1 rounded-lg border border-purple-200">سوییچ فعال</span>
                    </div>
                </div>

            </div>
        </section>

        <!-- ========================================================================= -->
        <!-- SPECIAL DIVIDER 02: HIGHWAY DATA BUS IN EMPTY SPACE -->
        <!-- ========================================================================= -->
        <div class="py-5 px-6 sm:px-12 bg-slate-950 border-y-2 border-emerald-500/40 shadow-inner relative z-10">
            <div class="max-w-4xl mx-auto flex items-center justify-between gap-4">
                <div class="flex-1 h-0.5 bg-gradient-to-r from-transparent via-emerald-500 to-teal-400"></div>
                <div class="flex items-center gap-2.5 px-4 py-2 rounded-full bg-slate-900 border border-emerald-400/50 shadow-md text-emerald-300 type-sm font-bold">
                    <span class="icon-circle-sm bg-emerald-950 text-emerald-400">
                        <i class="fas fa-scale-balanced"></i>
                    </span>
                    <span>مقایسه تجربی: چرا اکثر سایت‌های فروشگاهی از ریکپچای گوگل عبور کردند؟</span>
                </div>
                <div class="flex-1 h-0.5 bg-gradient-to-l from-transparent via-emerald-500 to-teal-400"></div>
            </div>
        </div>

        <!-- ========================================================================= -->
        <!-- 3. DIRECT COMPARISON: GOOGLE RECAPTCHA VS GUARDIFY PRO (Circular Aesthetics) -->
        <!-- ========================================================================= -->
        <section class="p-8 sm:p-14 lg:p-18 bg-mesh-radial-1 space-y-12 relative overflow-hidden">
            <!-- Decorative Security Background Motifs in Empty Margins -->
            <i class="fas fa-scale-balanced sec-empty-motif-right text-purple-900"></i>
            <i class="fas fa-shield-halved sec-empty-motif-left text-emerald-900"></i>
<div class="token-3d-wrapper-right">
        <svg width="68" height="78" viewBox="0 0 72 82" fill="none" class="drop-shadow-[0_15px_25px_rgba(147, 51, 234, 0.45)]">
          <path d="M36 7L64 17V42C64 59 52 72 36 78C20 72 8 42 8 42V17L36 7Z" fill="#581c87"/>
          <path d="M36 4L62 14V39C62 55 50 68 36 74C22 68 10 39 10 39V14L36 4Z" fill="url(#grad-purple)"/>
          <path d="M36 4L10 14V39C10 39 22 68 36 74V4Z" fill="white" fill-opacity="0.25"/>
          <circle cx="36" cy="38" r="14" fill="white" fill-opacity="0.2"/>
          <path d="M36 29C33 29 30.5 31.5 30.5 34.5V38H29C27.9 38 27 38.9 27 40V48C27 49.1 27.9 50 29 50H43C44.1 50 45 49.1 45 48V40C45 38.9 44.1 38 43 38H41.5V34.5C41.5 31.5 39 29 36 29ZM36 31.5C37.7 31.5 39 32.8 39 34.5V38H33V34.5C33 32.8 34.3 31.5 36 31.5Z" fill="white"/>
          <defs>
            <linearGradient id="grad-purple" x1="0" y1="0" x2="72" y2="82" gradientUnits="userSpaceOnUse">
              <stop stop-color="#c084fc"/>
              <stop offset="0.6" stop-color="#9333ea"/>
              <stop offset="1" stop-color="#581c87"/>
            </linearGradient>
          </defs>
        </svg>
    </div>
<div class="token-3d-wrapper-left">
        <svg width="62" height="69" viewBox="0 0 64 72" fill="none" class="drop-shadow-[0_15px_25px_rgba(16, 185, 129, 0.4)]">
          <polygon points="32,4 60,19 32,34 4,19" fill="#6ee7b7"/>
          <polygon points="4,19 32,34 32,66 4,51" fill="#10b981"/>
          <polygon points="32,34 60,19 60,51 32,66" fill="#047857"/>
          <path d="M15 36C15 34 16.5 32.5 18.5 32.5C20.5 32.5 22 34 22 36V38H23C23.6 38 24 38.4 24 39V45C24 45.6 23.6 46 23 46H14C13.4 46 13 45.6 13 45V39C13 38.4 13.4 38 14 38H15V36ZM16.5 36H20.5V38H16.5V36Z" fill="white" fill-opacity="0.9"/>
          <path d="M42 42L46 46L54 36" stroke="white" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round" stroke-opacity="0.95"/>
        </svg>
    </div>
            <div class="tech-crosshair-node top-10 right-14">+</div>
            <div class="tech-crosshair-node top-10 left-14">+</div>
            <div class="text-center max-w-4xl mx-auto space-y-3 relative z-10">
                <span class="step-badge-pill bg-purple-600 text-white shadow-lg shadow-purple-600/30">
                    <span class="icon-circle-sm bg-white text-purple-700 shadow-sm">۲</span>
                    <span>مقایسه دقیق عملکرد</span>
                </span>
                <h3 class="type-h1 text-slate-900 leading-tight">
                    تفاوت واقعی تجربه خریدار روی سایت
                </h3>
                <p class="type-lead text-slate-600 leading-relaxed">
                    ببینید چگونه یک انتخاب فنی مناسب مانع از رها شدن سبد خرید توسط خریداران فروشگاه می‌شود:
                </p>
            </div>

            <!-- 2-Column Direct Comparison Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-10 relative z-10">
                
                <!-- Card 1: Problems with Google reCAPTCHA -->
                <div class="p-8 sm:p-10 rounded-3xl bg-rose-50/80 border-2 border-rose-300 shadow-xl flex flex-col justify-between space-y-6 relative overflow-hidden">
                    <i class="fas fa-triangle-exclamation box-watermark-icon text-rose-950"></i>
                    <div class="space-y-5 relative z-10">
                        <div class="flex items-center justify-between pb-4 border-b border-rose-200">
                            <div class="flex items-center gap-3.5">
                                <div class="icon-circle-lg bg-rose-600 text-white shadow-md border-2 border-rose-200">
                                    <i class="fas fa-circle-xmark"></i>
                                </div>
                                <div>
                                    <h4 class="type-h3 text-rose-950">مشکلات رایج Google reCAPTCHA</h4>
                                    <span class="type-xs text-rose-700 font-bold">وابستگی آسیب‌پذیر به شبکه خارجی</span>
                                </div>
                            </div>
                        </div>

                        <ul class="space-y-4 type-sm font-bold text-rose-950">
                            <li class="flex items-start gap-3.5">
                                <div class="icon-circle-md bg-rose-200/90 text-rose-700">
                                    <i class="fas fa-xmark"></i>
                                </div>
                                <span class="leading-relaxed">لود نشدن کادر کپچا در شرایط اختلال اینترنت بین‌الملل و از دست رفتن ثبت‌نام و خرید مشتری.</span>
                            </li>
                            <li class="flex items-start gap-3.5">
                                <div class="icon-circle-md bg-rose-200/90 text-rose-700">
                                    <i class="fas fa-xmark"></i>
                                </div>
                                <span class="leading-relaxed">حل معماهای خسته‌کننده تشخیص چراغ راهنما یا خط‌کشی که نرخ تبدیل فروشگاه را شدیداً افت می‌دهد.</span>
                            </li>
                            <li class="flex items-start gap-3.5">
                                <div class="icon-circle-md bg-rose-200/90 text-rose-700">
                                    <i class="fas fa-xmark"></i>
                                </div>
                                <span class="leading-relaxed">حجم بالای فایل‌های دانلودی (بیش از ۵۰۰ کیلوبایت) که سرعت باز شدن اولیه صفحات را کند می‌کند.</span>
                            </li>
                            <li class="flex items-start gap-3.5">
                                <div class="icon-circle-md bg-rose-200/90 text-rose-700">
                                    <i class="fas fa-xmark"></i>
                                </div>
                                <span class="leading-relaxed">عدم امکان بازطراحی و هماهنگ کردن ظاهر فرم کپچا با تم و برند اختصاصی سایت.</span>
                            </li>
                        </ul>
                    </div>

                    <div class="p-4 rounded-2xl bg-rose-200/70 border border-rose-300 text-center font-black text-rose-950 type-sm relative z-10">
                        نتیجه: نارضایتی مشتری و رها شدن سفارش‌های آماده پرداخت
                    </div>
                </div>

                <!-- Card 2: Solutions by Guardify Pro -->
                <div class="p-8 sm:p-10 rounded-3xl bg-emerald-50/80 border-2 border-emerald-400 shadow-xl flex flex-col justify-between space-y-6 relative overflow-hidden">
                    <i class="fas fa-shield-check box-watermark-icon text-emerald-950"></i>
                    <div class="space-y-5 relative z-10">
                        <div class="flex items-center justify-between pb-4 border-b border-emerald-200">
                            <div class="flex items-center gap-3.5">
                                <div class="icon-circle-lg bg-emerald-600 text-white shadow-md border-2 border-emerald-200">
                                    <i class="fas fa-shield-halved"></i>
                                </div>
                                <div>
                                    <h4 class="type-h3 text-emerald-950">راهکار مطمئن گاردفای پرو</h4>
                                    <span class="type-xs text-emerald-700 font-bold">کاملاً مستقل، بومی و بدون قطعی</span>
                                </div>
                            </div>
                        </div>

                        <ul class="space-y-4 type-sm font-bold text-emerald-950">
                            <li class="flex items-start gap-3.5">
                                <div class="icon-circle-md bg-emerald-200/90 text-emerald-700">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span class="leading-relaxed">۱۰۰٪ آفلاین؛ اجرای مستقل روی هاست بدون نیاز به ارتباط با سرورهای خارجی یا تحریم‌ها.</span>
                            </li>
                            <li class="flex items-start gap-3.5">
                                <div class="icon-circle-md bg-emerald-200/90 text-emerald-700">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span class="leading-relaxed">یک حرکت ساده دست روی صفحه موبایل (اسلایدر لمسی روان) یا یک جمع ریاضی فوری.</span>
                            </li>
                            <li class="flex items-start gap-3.5">
                                <div class="icon-circle-md bg-emerald-200/90 text-emerald-700">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span class="leading-relaxed">کد فوق‌العاده سبک و بهینه (زیر ۱۰ کیلوبایت) بدون ایجاد کندی در ابزارهای تست سرعت.</span>
                            </li>
                            <li class="flex items-start gap-3.5">
                                <div class="icon-circle-md bg-emerald-200/90 text-emerald-700">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span class="leading-relaxed">هماهنگی کامل با صفحه ورود وردپرس و قابلیت شخصی‌سازی فونت، رنگ و استایل با برند شما.</span>
                            </li>
                        </ul>
                    </div>

                    <div class="p-4 rounded-2xl bg-emerald-200/70 border border-emerald-300 text-center font-black text-emerald-950 type-sm relative z-10">
                        نتیجه: ثبت کامل ۱۰۰٪ سفارش‌ها حتی در سخت‌ترین شرایط شبکه
                    </div>
                </div>

            </div>
        </section>

        <!-- ========================================================================= -->
        <!-- SPECIAL DIVIDER 03: NATURAL TECH DIVIDER IN EMPTY SPACE -->
        <!-- ========================================================================= -->
        <div class="py-5 px-6 sm:px-12 bg-slate-950 border-y-2 border-indigo-500/40 shadow-inner relative z-10">
            <div class="max-w-4xl mx-auto flex items-center justify-between gap-4">
                <div class="flex-1 h-0.5 bg-gradient-to-r from-transparent via-cyan-500 to-indigo-500"></div>
                <div class="flex items-center gap-2.5 px-4 py-2 rounded-full bg-slate-900 border border-cyan-400/50 shadow-md text-cyan-300 type-sm font-bold">
                    <span class="icon-circle-sm bg-cyan-950 text-cyan-400">
                        <i class="fas fa-shield-halved"></i>
                    </span>
                    <span>انواع روش‌های تایید هویت کاربر: از اسلایدر حرکتی تا چالش جمع ریاضی</span>
                </div>
                <div class="flex-1 h-0.5 bg-gradient-to-l from-transparent via-cyan-500 to-indigo-500"></div>
            </div>
        </div>

        <!-- ========================================================================= -->
        <!-- 4. CAPTCHA SHOWCASE: 4 AUTHENTIC CAPTCHAS IN 2 WIDE COLUMNS -->
        <!-- ========================================================================= -->
        <section class="p-8 sm:p-14 lg:p-18 bg-gradient-to-b from-slate-950 via-slate-900 to-slate-950 space-y-12 text-white relative overflow-hidden">
            <div class="text-center max-w-4xl mx-auto space-y-3 relative z-10">
                <div class="flex items-center justify-center gap-3">
                    <span class="step-badge-pill bg-gradient-to-r from-cyan-500 to-blue-600 text-white shadow-lg shadow-cyan-500/30">
                        <span class="icon-circle-sm bg-white text-blue-700 shadow-sm">۳</span>
                        <span>انواع روش‌های تایید هویت کاربر</span>
                    </span>
                    <span class="hidden sm:inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-slate-800 border border-cyan-400/30 text-cyan-300 type-xs font-bold">
                        <span class="icon-circle-sm bg-slate-700 text-cyan-400">
                            <i class="fas fa-sliders"></i>
                        </span>
                        <span>خروجی دقیق هسته افزونه</span>
                    </span>
                </div>
                <h3 class="type-h1 text-white leading-tight">
                    چهار روش مدرن برای تشخیص کاربر واقعی از ربات
                </h3>
                <p class="type-lead text-slate-300 leading-relaxed">
                    مدیر سایت بر اساس نیاز و سلیقه، می‌تواند هر کدام از این روش‌های سبک و سریع را برای فرم‌های دلخواه فعال کند:
                </p>
            </div>

            <!-- 2-Column Wide Grid for the 4 Authentic Captchas -->
            <div class="relative z-10 grid grid-cols-1 md:grid-cols-2 gap-7 lg:gap-8">

                <!-- 1. Native Puzzle Slider (Exact Markup from Guardify Engine) -->
                <div class="p-7 sm:p-9 rounded-3xl box-neon-kiosk border border-emerald-500/40 flex flex-col justify-between space-y-6 relative overflow-hidden">
                    <i class="fas fa-arrows-left-right box-watermark-icon-dark !text-7xl"></i>
                    <div class="space-y-4 relative z-10">
                        <div class="flex items-center justify-between pb-3 border-b border-slate-700/80">
                            <span class="px-3.5 py-1.5 rounded-full bg-emerald-500/20 text-emerald-300 border border-emerald-500/30 type-xs font-black flex items-center gap-2">
                                <span class="icon-circle-sm bg-emerald-500/30 text-emerald-300">
                                    <i class="fas fa-sliders"></i>
                                </span>
                                محبوب‌ترین مدل ووکامرس
                            </span>
                            <span class="type-xs text-slate-400 font-bold">اسلایدر حرکتی</span>
                        </div>
                        <h4 class="type-h3 text-white">۱. اسلایدر پازلی بومی (Puzzle Slider)</h4>
                        <p class="type-body text-slate-300 leading-relaxed">
                            کاربر تنها با یک حرکت ساده دستگیره به سمت چپ هویت خود را تایید می‌کند؛ بدون نیاز به تایپ عدد یا حل معماهای تصویری چندمرحله‌ای.
                        </p>

                        <!-- Live Interactive Slider Widget matching exact plugin output -->
                        <div class="guardify-captcha-container guardify-theme-dark-slate guardify-font-inherit guardify-slider-wrap my-4" data-captcha-type="slider">
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
                    <div class="pt-4 border-t border-slate-700/80 flex items-center justify-between type-xs text-slate-300 font-bold relative z-10">
                        <span>💡 مناسب برای صفحات تسویه‌حساب موبایل</span>
                        <span class="text-emerald-400">تایید در کسری از ثانیه</span>
                    </div>
                </div>

                <!-- 2. Dynamic Math Challenge (Exact Markup from Guardify Engine) -->
                <div class="p-7 sm:p-9 rounded-3xl box-neon-kiosk border border-indigo-500/40 flex flex-col justify-between space-y-6 relative overflow-hidden">
                    <i class="fas fa-calculator box-watermark-icon-dark !text-7xl"></i>
                    <div class="space-y-4 relative z-10">
                        <div class="flex items-center justify-between pb-3 border-b border-slate-700/80">
                            <span class="px-3.5 py-1.5 rounded-full bg-indigo-500/20 text-indigo-300 border border-indigo-500/30 type-xs font-black flex items-center gap-2">
                                <span class="icon-circle-sm bg-indigo-500/30 text-indigo-300">
                                    <i class="fas fa-plus"></i>
                                </span>
                                چالش استاندارد جمع
                            </span>
                            <span class="type-xs text-slate-400 font-bold">جمع ریاضی</span>
                        </div>
                        <h4 class="type-h3 text-white">۲. چالش جمع ریاضی (Math Challenge)</h4>
                        <p class="type-body text-slate-300 leading-relaxed">
                            یک محاسبه ساده جمع بین دو عدد تک‌رقمی که مانع اسپم‌های رباتیک شده و برای انسان فوق‌العاده سریع و سرراست است.
                        </p>

                        <!-- Live Math Widget matching exact plugin output -->
                        <div class="guardify-captcha-container guardify-theme-dark-slate guardify-font-inherit guardify-math-wrap my-4" data-captcha-type="math">
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
                    <div class="pt-4 border-t border-slate-700/80 flex items-center justify-between type-xs text-slate-300 font-bold relative z-10">
                        <span>💡 سازگار با تمامی افزونه‌های فرم‌ساز وردپرس</span>
                        <span class="text-indigo-400">محاسبه در کسری از ثانیه</span>
                    </div>
                </div>

                <!-- 3. Visual Icon Match (Exact Markup from Guardify Engine) -->
                <div class="p-7 sm:p-9 rounded-3xl box-neon-kiosk border border-purple-500/40 flex flex-col justify-between space-y-6 relative overflow-hidden">
                    <i class="fas fa-shapes box-watermark-icon-dark !text-7xl"></i>
                    <div class="space-y-4 relative z-10">
                        <div class="flex items-center justify-between pb-3 border-b border-slate-700/80">
                            <span class="px-3.5 py-1.5 rounded-full bg-purple-500/20 text-purple-300 border border-purple-500/30 type-xs font-black flex items-center gap-2">
                                <span class="icon-circle-sm bg-purple-500/30 text-purple-300">
                                    <i class="fas fa-shapes"></i>
                                </span>
                                چالش بصری مدرن
                            </span>
                            <span class="type-xs text-slate-400 font-bold">تطبیق آیکون</span>
                        </div>
                        <h4 class="type-h3 text-white">۳. تطبیق آیکون بصری (Icon Match)</h4>
                        <p class="type-body text-slate-300 leading-relaxed">
                            یک چالش دیداری جذاب و راحت که کاربر با لمس یا کلیک روی آیکون اعلام‌شده، درجا تایید هویت می‌شود.
                        </p>

                        <!-- Live Icon Match Widget matching exact plugin output -->
                        <div class="guardify-captcha-container guardify-theme-dark-slate guardify-font-inherit guardify-icon-wrap my-4" data-captcha-type="icon_match">
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
                            <!-- Real plugin icon buttons grid -->
                            <div class="guardify-icon-grid">
                                <button type="button" class="guardify-icon-btn" title="سپر امنیتی"><span>🛡️</span></button>
                                <button type="button" class="guardify-icon-btn border-2 border-indigo-500 bg-indigo-500/20" title="کلید دسترسی"><span>🔑</span></button>
                                <button type="button" class="guardify-icon-btn" title="ابر"><span>☁️</span></button>
                                <button type="button" class="guardify-icon-btn" title="آتش"><span>🔥</span></button>
                            </div>
                            <div class="guardify-icon-actions mt-3">
                                <button type="button" class="guardify-verify-btn guardify-icon-verify-btn">بررسی و تأیید</button>
                            </div>
                        </div>

                    </div>
                    <div class="pt-4 border-t border-slate-700/80 flex items-center justify-between type-xs text-slate-300 font-bold relative z-10">
                        <span>💡 آیکون هدف را لمس کرده و دکمه بررسی را بزنید</span>
                        <span class="text-purple-400">بسیار سرگرم‌کننده</span>
                    </div>
                </div>

                <!-- 4. Invisible Honeypot Trap (Exact Markup from Plugin) -->
                <div class="p-7 sm:p-9 rounded-3xl box-neon-kiosk border border-amber-500/40 flex flex-col justify-between space-y-6 relative overflow-hidden">
                    <i class="fas fa-shield-virus box-watermark-icon-dark !text-7xl"></i>
                    <div class="space-y-4 relative z-10">
                        <div class="flex items-center justify-between pb-3 border-b border-slate-700/80">
                            <span class="px-3.5 py-1.5 rounded-full bg-amber-500/20 text-amber-300 border border-amber-500/30 type-xs font-black flex items-center gap-2">
                                <span class="icon-circle-sm bg-amber-500/30 text-amber-300">
                                    <i class="fas fa-eye-slash"></i>
                                </span>
                                صفر مزاحمت برای کاربر
                            </span>
                            <span class="type-xs text-slate-400 font-bold">تله نامرئی</span>
                        </div>
                        <h4 class="type-h3 text-white">۴. تله نامرئی هانی‌پات (Invisible Honeypot)</h4>
                        <p class="type-body text-slate-300 leading-relaxed">
                            کاربر واقعی اصلاً چیزی نمی‌بیند و معطل نمی‌شود، اما فیلد نامرئی برای ربات‌ها فعال است و هر اسکریپت خودکار در لحظه مسدود می‌گردد.
                        </p>

                        <!-- Authentic Honeypot Showcase -->
                        <div class="p-4 rounded-2xl bg-slate-800/80 border border-slate-700/80 my-4 type-xs space-y-3">
                            <div class="flex items-center justify-between text-amber-300 font-bold pb-2 border-b border-slate-700">
                                <span>فیلد محافظتی پنهان در هسته فرم‌های وردپرس:</span>
                                <span class="bg-amber-500/20 px-2.5 py-0.5 rounded-md text-amber-300 type-micro">محافظت خودکار</span>
                            </div>
                            <div class="p-3 bg-slate-950 rounded-xl text-emerald-400 border border-slate-800 text-left font-bold" dir="ltr">
                                &lt;input type="text" name="guardify_hp_token" class="hidden-trap" tabindex="-1" /&gt;
                            </div>
                            <div class="type-micro text-slate-300 leading-relaxed pt-1">
                                ربات‌ها بدون آگاهی این فیلد مخفی را پر می‌کنند و سیستم گاردفای با اعتبارسنجی سمت سرور، فوراً درخواست آن‌ها را بدون درگیر کردن کاربر رد می‌کند.
                            </div>
                        </div>

                    </div>
                    <div class="pt-4 border-t border-slate-700/80 flex items-center justify-between type-xs text-slate-300 font-bold relative z-10">
                        <span>💡 بهترین انتخاب برای فرم‌های بدون اصطکاک</span>
                        <span class="text-amber-400">۱۰۰٪ نامرئی برای خریدار</span>
                    </div>
                </div>

            </div>
        </section>

        <!-- ========================================================================= -->
        <!-- SPECIAL DIVIDER 04: COMPATIBILITY BUS IN EMPTY SPACE -->
        <!-- ========================================================================= -->
        <div class="py-5 px-6 sm:px-12 bg-slate-950 border-y-2 border-indigo-500/40 shadow-inner relative z-10">
            <div class="max-w-4xl mx-auto flex items-center justify-between gap-4">
                <div class="flex-1 h-0.5 bg-gradient-to-r from-transparent via-indigo-500 to-purple-500"></div>
                <div class="flex items-center gap-2.5 px-4 py-2 rounded-full bg-slate-900 border border-indigo-400/50 shadow-md text-indigo-300 type-sm font-bold">
                    <span class="icon-circle-sm bg-indigo-950 text-indigo-400">
                        <i class="fas fa-puzzle-piece"></i>
                    </span>
                    <span>سازگاری پیش‌فرض: اتصال اتوماتیک به فرم‌سازها و صفحات استاندارد وردپرس</span>
                </div>
                <div class="flex-1 h-0.5 bg-gradient-to-l from-transparent via-indigo-500 to-purple-500"></div>
            </div>
        </div>

        <!-- ========================================================================= -->
        <!-- 5. COMPATIBILITY SHOWCASE (Spacious Circular Icon Discs) -->
        <!-- ========================================================================= -->
        <section class="p-8 sm:p-14 lg:p-18 bg-tech-grid space-y-12 relative overflow-hidden">
            <!-- Decorative Security Background Motifs in Empty Margins -->
            <i class="fas fa-puzzle-piece sec-empty-motif-right text-indigo-900"></i>
            <i class="fas fa-shield-check sec-empty-motif-left text-emerald-900"></i>
<div class="token-3d-wrapper-right">
        <svg width="68" height="78" viewBox="0 0 72 82" fill="none" class="drop-shadow-[0_15px_25px_rgba(217, 119, 6, 0.45)]">
          <path d="M36 7L64 17V42C64 59 52 72 36 78C20 72 8 42 8 42V17L36 7Z" fill="#78350f"/>
          <path d="M36 4L62 14V39C62 55 50 68 36 74C22 68 10 39 10 39V14L36 4Z" fill="url(#grad-amber)"/>
          <path d="M36 4L10 14V39C10 39 22 68 36 74V4Z" fill="white" fill-opacity="0.25"/>
          <circle cx="36" cy="38" r="14" fill="white" fill-opacity="0.2"/>
          <path d="M36 29C33 29 30.5 31.5 30.5 34.5V38H29C27.9 38 27 38.9 27 40V48C27 49.1 27.9 50 29 50H43C44.1 50 45 49.1 45 48V40C45 38.9 44.1 38 43 38H41.5V34.5C41.5 31.5 39 29 36 29ZM36 31.5C37.7 31.5 39 32.8 39 34.5V38H33V34.5C33 32.8 34.3 31.5 36 31.5Z" fill="white"/>
          <defs>
            <linearGradient id="grad-amber" x1="0" y1="0" x2="72" y2="82" gradientUnits="userSpaceOnUse">
              <stop stop-color="#fbbf24"/>
              <stop offset="0.6" stop-color="#d97706"/>
              <stop offset="1" stop-color="#78350f"/>
            </linearGradient>
          </defs>
        </svg>
    </div>
<div class="token-3d-wrapper-left">
        <svg width="62" height="69" viewBox="0 0 64 72" fill="none" class="drop-shadow-[0_15px_25px_rgba(168, 85, 247, 0.4)]">
          <polygon points="32,4 60,19 32,34 4,19" fill="#d8b4fe"/>
          <polygon points="4,19 32,34 32,66 4,51" fill="#a855f7"/>
          <polygon points="32,34 60,19 60,51 32,66" fill="#7e22ce"/>
          <path d="M15 36C15 34 16.5 32.5 18.5 32.5C20.5 32.5 22 34 22 36V38H23C23.6 38 24 38.4 24 39V45C24 45.6 23.6 46 23 46H14C13.4 46 13 45.6 13 45V39C13 38.4 13.4 38 14 38H15V36ZM16.5 36H20.5V38H16.5V36Z" fill="white" fill-opacity="0.9"/>
          <path d="M42 42L46 46L54 36" stroke="white" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round" stroke-opacity="0.95"/>
        </svg>
    </div>
            <div class="tech-crosshair-node top-10 right-14">+</div>
            <div class="tech-crosshair-node top-10 left-14">+</div>
            <div class="text-center max-w-4xl mx-auto space-y-3 relative z-10">
                <span class="step-badge-pill bg-indigo-600 text-white shadow-lg shadow-indigo-600/30">
                    <span class="icon-circle-sm bg-white text-indigo-700 shadow-sm">۴</span>
                    <span>سازگاری بی‌دردسر</span>
                </span>
                <h3 class="type-h1 text-slate-900 leading-tight">
                    یک‌بار فعال کنید، همه فرم‌های سایت ایمن می‌شوند
                </h3>
                <p class="type-lead text-slate-600 leading-relaxed">
                    بدون نیاز به کدنویسی یا تنظیمات پیچیده، گاردفای پرو خودکار فرم‌های معتبر وردپرس را شناسایی و پوشش می‌دهد:
                </p>
            </div>

            <!-- 2-Column Wide Grid for Integrations with Spacious Circular Icons -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-7 lg:gap-8 relative z-10">
                
                <!-- Card 1: WooCommerce Checkout -->
                <div class="p-8 sm:p-10 rounded-3xl box-deluxe-purple flex items-start gap-5 relative overflow-hidden">
                    <i class="fas fa-cart-shopping box-watermark-icon text-purple-950"></i>
                    <div class="icon-circle-xl bg-gradient-to-tr from-purple-600 to-indigo-600 text-white shadow-lg shadow-purple-500/30 border-2 border-purple-200 relative z-10">
                        <i class="fas fa-cart-shopping"></i>
                    </div>
                    <div class="space-y-3 relative z-10">
                        <div class="flex items-center justify-between">
                            <h4 class="type-h3 text-slate-900">تسویه‌حساب ووکامرس</h4>
                            <span class="type-xs font-bold text-purple-700 bg-purple-100 px-3 py-1 rounded-full">WooCommerce</span>
                        </div>
                        <p class="type-body text-slate-700 leading-relaxed">
                            محافظت از فرم پرداخت، ثبت سفارش و ثبت‌نام سریع ووکامرس در موبایل بدون معطل کردن خریدار.
                        </p>
                        <span class="inline-block type-xs font-black text-purple-800">حفاظت کامل از درگاه بانکی</span>
                    </div>
                </div>

                <!-- Card 2: Mobile Login & OTP -->
                <div class="p-8 sm:p-10 rounded-3xl box-deluxe-indigo flex items-start gap-5 relative overflow-hidden">
                    <i class="fas fa-mobile-screen-button box-watermark-icon text-indigo-950"></i>
                    <div class="icon-circle-xl bg-gradient-to-tr from-indigo-600 to-blue-600 text-white shadow-lg shadow-indigo-500/30 border-2 border-indigo-200 relative z-10">
                        <i class="fas fa-mobile-screen-button"></i>
                    </div>
                    <div class="space-y-3 relative z-10">
                        <div class="flex items-center justify-between">
                            <h4 class="type-h3 text-slate-900">فرم‌های ورود و ثبت‌نام پیامکی</h4>
                            <span class="type-xs font-bold text-indigo-700 bg-indigo-100 px-3 py-1 rounded-full">OTP Forms</span>
                        </div>
                        <p class="type-body text-slate-700 leading-relaxed">
                            جلوگیری از ارسال رگباری اس‌ام‌اس توسط ربات‌ها و هدر رفتن شارژ پنل پیامک سایت.
                        </p>
                        <span class="inline-block type-xs font-black text-indigo-800">کاهش هزینه‌های پیامکی</span>
                    </div>
                </div>

                <!-- Card 3: Elementor Forms -->
                <div class="p-8 sm:p-10 rounded-3xl box-deluxe-emerald flex items-start gap-5 relative overflow-hidden">
                    <i class="fas fa-wand-magic-sparkles box-watermark-icon text-emerald-950"></i>
                    <div class="icon-circle-xl bg-gradient-to-tr from-emerald-600 to-teal-500 text-white shadow-lg shadow-emerald-500/30 border-2 border-emerald-200 relative z-10">
                        <i class="fas fa-wand-magic-sparkles"></i>
                    </div>
                    <div class="space-y-3 relative z-10">
                        <div class="flex items-center justify-between">
                            <h4 class="type-h3 text-slate-900">فرم‌های المنتور پرو</h4>
                            <span class="type-xs font-bold text-emerald-700 bg-emerald-100 px-3 py-1 rounded-full">Elementor</span>
                        </div>
                        <p class="type-body text-slate-700 leading-relaxed">
                            سازگاری بومی با المان فرم سازنده المنتور جهت جلوگیری از ارسال پیام‌های تبلیغاتی اسپمرها.
                        </p>
                        <span class="inline-block type-xs font-black text-emerald-800">تزریق خودکار فیلد امنیتی</span>
                    </div>
                </div>

                <!-- Card 4: Standard WP & Contact Forms -->
                <div class="p-8 sm:p-10 rounded-3xl box-deluxe-amber flex items-start gap-5 relative overflow-hidden">
                    <i class="fas fa-file-lines box-watermark-icon text-amber-950"></i>
                    <div class="icon-circle-xl bg-gradient-to-tr from-amber-500 to-orange-500 text-white shadow-lg shadow-amber-500/30 border-2 border-amber-200 relative z-10">
                        <i class="fas fa-file-lines"></i>
                    </div>
                    <div class="space-y-3 relative z-10">
                        <div class="flex items-center justify-between">
                            <h4 class="type-h3 text-slate-900">دیدگاه‌ها و فرم‌های تماس</h4>
                            <span class="type-xs font-bold text-amber-700 bg-amber-100 px-3 py-1 rounded-full">Contact & Comments</span>
                        </div>
                        <p class="type-body text-slate-700 leading-relaxed">
                            پاکسازی ۱۰۰٪ بخش نظرات وردپرس، فرم‌های تماس با ما و فرم‌های ثبت اطلاعات از هرزنامه‌ها.
                        </p>
                        <span class="inline-block type-xs font-black text-amber-800">صندوق پیام تمیز و اسپم‌زدایی‌شده</span>
                    </div>
                </div>

            </div>
        </section>

        <!-- ========================================================================= -->
        <!-- SPECIAL DIVIDER 05: SECURITY SHIELDS BUS IN EMPTY SPACE -->
        <!-- ========================================================================= -->
        <div class="py-5 px-6 sm:px-12 bg-slate-950 border-y-2 border-indigo-500/40 shadow-inner relative z-10">
            <div class="max-w-4xl mx-auto flex items-center justify-between gap-4">
                <div class="flex-1 h-0.5 bg-gradient-to-r from-transparent via-indigo-500 to-purple-500"></div>
                <div class="flex items-center gap-2.5 px-4 py-2 rounded-full bg-slate-900 border border-purple-400/50 shadow-md text-purple-300 type-sm font-bold">
                    <span class="icon-circle-sm bg-purple-950 text-purple-400">
                        <i class="fas fa-user-shield"></i>
                    </span>
                    <span>سپرهای امنیتی: چهار لایه حفاظتی هوشمند برای پیشخوان وردپرس</span>
                </div>
                <div class="flex-1 h-0.5 bg-gradient-to-l from-transparent via-indigo-500 to-purple-500"></div>
            </div>
        </div>

        <!-- ========================================================================= -->
        <!-- 6. SECURITY SHIELDS: 4 DEFENSIVE LAYERS (Spacious Circular Icons) -->
        <!-- ========================================================================= -->
        <section class="p-8 sm:p-14 lg:p-18 bg-mesh-radial-1 space-y-12 relative overflow-hidden">
            <!-- Decorative Security Background Motifs in Empty Margins -->
            <i class="fas fa-user-shield sec-empty-motif-right text-purple-800"></i>
            <i class="fas fa-key sec-empty-motif-left text-amber-800"></i>
<div class="token-3d-wrapper-right">
        <svg width="68" height="78" viewBox="0 0 72 82" fill="none" class="drop-shadow-[0_15px_25px_rgba(147, 51, 234, 0.45)]">
          <path d="M36 7L64 17V42C64 59 52 72 36 78C20 72 8 42 8 42V17L36 7Z" fill="#581c87"/>
          <path d="M36 4L62 14V39C62 55 50 68 36 74C22 68 10 39 10 39V14L36 4Z" fill="url(#grad-purple)"/>
          <path d="M36 4L10 14V39C10 39 22 68 36 74V4Z" fill="white" fill-opacity="0.25"/>
          <circle cx="36" cy="38" r="14" fill="white" fill-opacity="0.2"/>
          <path d="M36 29C33 29 30.5 31.5 30.5 34.5V38H29C27.9 38 27 38.9 27 40V48C27 49.1 27.9 50 29 50H43C44.1 50 45 49.1 45 48V40C45 38.9 44.1 38 43 38H41.5V34.5C41.5 31.5 39 29 36 29ZM36 31.5C37.7 31.5 39 32.8 39 34.5V38H33V34.5C33 32.8 34.3 31.5 36 31.5Z" fill="white"/>
          <defs>
            <linearGradient id="grad-purple" x1="0" y1="0" x2="72" y2="82" gradientUnits="userSpaceOnUse">
              <stop stop-color="#c084fc"/>
              <stop offset="0.6" stop-color="#9333ea"/>
              <stop offset="1" stop-color="#581c87"/>
            </linearGradient>
          </defs>
        </svg>
    </div>
<div class="token-3d-wrapper-left">
        <svg width="62" height="69" viewBox="0 0 64 72" fill="none" class="drop-shadow-[0_15px_25px_rgba(245, 158, 11, 0.4)]">
          <polygon points="32,4 60,19 32,34 4,19" fill="#fde68a"/>
          <polygon points="4,19 32,34 32,66 4,51" fill="#f59e0b"/>
          <polygon points="32,34 60,19 60,51 32,66" fill="#b45309"/>
          <path d="M15 36C15 34 16.5 32.5 18.5 32.5C20.5 32.5 22 34 22 36V38H23C23.6 38 24 38.4 24 39V45C24 45.6 23.6 46 23 46H14C13.4 46 13 45.6 13 45V39C13 38.4 13.4 38 14 38H15V36ZM16.5 36H20.5V38H16.5V36Z" fill="white" fill-opacity="0.9"/>
          <path d="M42 42L46 46L54 36" stroke="white" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round" stroke-opacity="0.95"/>
        </svg>
    </div>
            <div class="tech-crosshair-node top-10 right-14">+</div>
            <div class="tech-crosshair-node top-10 left-14">+</div>
            <div class="tech-grid-cluster top-28 right-10"></div>
            <div class="text-center max-w-4xl mx-auto space-y-3 relative z-10">
                <span class="step-badge-pill bg-purple-600 text-white shadow-lg shadow-purple-600/30">
                    <span class="icon-circle-sm bg-white text-purple-700 shadow-sm">۵</span>
                    <span>لایه‌های دفاعی هوشمند</span>
                </span>
                <h3 class="type-h1 text-slate-900 leading-tight">
                    امنیت فراتر از یک کپچای ساده
                </h3>
                <p class="type-lead text-slate-600 leading-relaxed">
                    گاردفای پرو علاوه بر کپچا، مجهز به ماژول‌های امنیتی اختصاصی برای سخت‌سازی هسته وردپرس است:
                </p>
            </div>

            <!-- 2-Column Wide Grid for Security Shields with Circular Icons -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-7 lg:gap-8 relative z-10">
                
                <!-- Shield 1: Brute-Force Blocker -->
                <div class="p-8 sm:p-10 rounded-3xl box-deluxe-indigo flex items-start gap-5 relative overflow-hidden">
                    <i class="fas fa-lock box-watermark-icon text-indigo-950"></i>
                    <div class="icon-circle-xl bg-indigo-600 text-white shadow-md border-2 border-indigo-200 relative z-10">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="space-y-3 relative z-10">
                        <h4 class="type-h3 text-slate-900">سد ضد حملات حدس پسورد (Brute-Force)</h4>
                        <p class="type-body text-slate-700 leading-relaxed">
                            اگر شخصی یا رباتی چند بار رمز عبور اشتباه وارد کند، آی‌پی به طور خودکار مسدود و فرم لاگین موقتاً قفل می‌شود تا امنیت سایت حفظ گردد.
                        </p>
                        <span class="inline-block type-xs font-black text-indigo-800">قفل خودکار پس از ۵ تلاش ناموفق</span>
                    </div>
                </div>

                <!-- Shield 2: XML-RPC Lockdown -->
                <div class="p-8 sm:p-10 rounded-3xl box-deluxe-emerald flex items-start gap-5 relative overflow-hidden">
                    <i class="fas fa-ban box-watermark-icon text-emerald-950"></i>
                    <div class="icon-circle-xl bg-emerald-600 text-white shadow-md border-2 border-emerald-200 relative z-10">
                        <i class="fas fa-ban"></i>
                    </div>
                    <div class="space-y-3 relative z-10">
                        <h4 class="type-h3 text-slate-900">مسدودسازی آسیب‌پذیری‌های XML-RPC</h4>
                        <p class="type-body text-slate-700 leading-relaxed">
                            یکی از رایج‌ترین مسیرهای حمله به وردپرس درگاه XML-RPC است که گاردفای پرو امکان بستن ایمن آن را با یک کلیک فراهم می‌سازد.
                        </p>
                        <span class="inline-block type-xs font-black text-emerald-800">کاهش بار پردازنده هاست</span>
                    </div>
                </div>

                <!-- Shield 3: Smart Honeypot Trap -->
                <div class="p-8 sm:p-10 rounded-3xl box-deluxe-amber flex items-start gap-5 relative overflow-hidden">
                    <i class="fas fa-eye-slash box-watermark-icon text-amber-950"></i>
                    <div class="icon-circle-xl bg-amber-600 text-white shadow-md border-2 border-amber-200 relative z-10">
                        <i class="fas fa-eye-slash"></i>
                    </div>
                    <div class="space-y-3 relative z-10">
                        <h4 class="type-h3 text-slate-900">تله فیلدهای نامرئی (Honeypot Trap)</h4>
                        <p class="type-body text-slate-700 leading-relaxed">
                            فیلدهایی که برای چشم انسان کاملاً مخفی هستند اما ربات‌های اسپمر سعی در پر کردن آنها دارند، بلافاصله شناسایی و مسدود می‌شوند.
                        </p>
                        <span class="inline-block type-xs font-black text-amber-800">مهار خاموش خزنده‌ها</span>
                    </div>
                </div>

                <!-- Shield 4: CSRF & Token Security -->
                <div class="p-8 sm:p-10 rounded-3xl box-deluxe-purple flex items-start gap-5 relative overflow-hidden">
                    <i class="fas fa-key box-watermark-icon text-purple-950"></i>
                    <div class="icon-circle-xl bg-purple-600 text-white shadow-md border-2 border-purple-200 relative z-10">
                        <i class="fas fa-key"></i>
                    </div>
                    <div class="space-y-3 relative z-10">
                        <h4 class="type-h3 text-slate-900">توکن‌های رمزنگاری اختصاصی فرم‌ها</h4>
                        <p class="type-body text-slate-700 leading-relaxed">
                            هر ارسال فرم توسط توکن‌های رمزنگاری شده یک‌بارمصرف امن اعتبارسنجی می‌شود تا از ارسال درخواست‌های تکراری و جعلی جلوگیری شود.
                        </p>
                        <span class="inline-block type-xs font-black text-purple-800">تایید سمت سرور بدون نشست‌های کاذب</span>
                    </div>
                </div>

            </div>
        </section>

        <!-- ========================================================================= -->
        <!-- SPECIAL DIVIDER 06: DESIGN STUDIO BUS IN EMPTY SPACE -->
        <!-- ========================================================================= -->
        <div class="py-5 px-6 sm:px-12 bg-slate-950 border-y-2 border-indigo-500/40 shadow-inner relative z-10">
            <div class="max-w-4xl mx-auto flex items-center justify-between gap-4">
                <div class="flex-1 h-0.5 bg-gradient-to-r from-transparent via-amber-500 to-indigo-500"></div>
                <div class="flex items-center gap-2.5 px-4 py-2 rounded-full bg-slate-900 border border-amber-400/50 shadow-md text-amber-300 type-sm font-bold">
                    <span class="icon-circle-sm bg-amber-950 text-amber-400">
                        <i class="fas fa-paintbrush"></i>
                    </span>
                    <span>شخصی‌سازی صفحه ورود: تغییر لوگو، رنگ و پس‌زمینه فرم ورود وردپرس</span>
                </div>
                <div class="flex-1 h-0.5 bg-gradient-to-l from-transparent via-amber-500 to-indigo-500"></div>
            </div>
        </div>

        <!-- ========================================================================= -->
        <!-- 7. WP LOGIN STUDIO (AUTHENTIC WP LOGIN OUTPUT - NO INVENTED ELEMENTS) -->
        <!-- ========================================================================= -->
        <section class="p-8 sm:p-14 lg:p-18 bg-tech-grid space-y-12 relative overflow-hidden">
            <!-- Decorative Security Background Motifs in Empty Margins -->
            <i class="fas fa-door-closed sec-empty-motif-right text-indigo-800"></i>
            <i class="fas fa-paintbrush sec-empty-motif-left text-amber-800"></i>
<div class="token-3d-wrapper-right">
        <svg width="68" height="78" viewBox="0 0 72 82" fill="none" class="drop-shadow-[0_15px_25px_rgba(79, 70, 229, 0.45)]">
          <path d="M36 7L64 17V42C64 59 52 72 36 78C20 72 8 42 8 42V17L36 7Z" fill="#312e81"/>
          <path d="M36 4L62 14V39C62 55 50 68 36 74C22 68 10 39 10 39V14L36 4Z" fill="url(#grad-indigo)"/>
          <path d="M36 4L10 14V39C10 39 22 68 36 74V4Z" fill="white" fill-opacity="0.25"/>
          <circle cx="36" cy="38" r="14" fill="white" fill-opacity="0.2"/>
          <path d="M36 29C33 29 30.5 31.5 30.5 34.5V38H29C27.9 38 27 38.9 27 40V48C27 49.1 27.9 50 29 50H43C44.1 50 45 49.1 45 48V40C45 38.9 44.1 38 43 38H41.5V34.5C41.5 31.5 39 29 36 29ZM36 31.5C37.7 31.5 39 32.8 39 34.5V38H33V34.5C33 32.8 34.3 31.5 36 31.5Z" fill="white"/>
          <defs>
            <linearGradient id="grad-indigo" x1="0" y1="0" x2="72" y2="82" gradientUnits="userSpaceOnUse">
              <stop stop-color="#818cf8"/>
              <stop offset="0.6" stop-color="#4f46e5"/>
              <stop offset="1" stop-color="#312e81"/>
            </linearGradient>
          </defs>
        </svg>
    </div>
<div class="token-3d-wrapper-left">
        <svg width="62" height="69" viewBox="0 0 64 72" fill="none" class="drop-shadow-[0_15px_25px_rgba(6, 182, 212, 0.4)]">
          <polygon points="32,4 60,19 32,34 4,19" fill="#67e8f9"/>
          <polygon points="4,19 32,34 32,66 4,51" fill="#06b6d4"/>
          <polygon points="32,34 60,19 60,51 32,66" fill="#0e7490"/>
          <path d="M15 36C15 34 16.5 32.5 18.5 32.5C20.5 32.5 22 34 22 36V38H23C23.6 38 24 38.4 24 39V45C24 45.6 23.6 46 23 46H14C13.4 46 13 45.6 13 45V39C13 38.4 13.4 38 14 38H15V36ZM16.5 36H20.5V38H16.5V36Z" fill="white" fill-opacity="0.9"/>
          <path d="M42 42L46 46L54 36" stroke="white" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round" stroke-opacity="0.95"/>
        </svg>
    </div>
            <div class="tech-crosshair-node top-10 right-14">+</div>
            <div class="tech-crosshair-node top-10 left-14">+</div>
            <div class="text-center max-w-4xl mx-auto space-y-3 relative z-10">
                <span class="step-badge-pill bg-indigo-600 text-white shadow-lg shadow-indigo-600/30">
                    <span class="icon-circle-sm bg-white text-indigo-700 shadow-sm">۶</span>
                    <span>شخصی‌سازی فرم ورود وردپرس</span>
                </span>
                <h3 class="type-h1 text-slate-900 leading-tight">
                    شخصی‌سازی صفحه ورود وردپرس با ظاهر اختصاصی برند شما
                </h3>
                <p class="type-lead text-slate-600 leading-relaxed">
                    صفحه ورود ساده و قدیمی وردپرس (wp-login.php) را بدون نیاز به هیچ افزونه جانبی سنگین به فرمی شیک، مدرن و هماهنگ با فروشگاه تبدیل کنید:
                </p>
            </div>

            <!-- 2-Column Wide Layout: Features + Authentic WordPress Login Form -->
            <div class="max-w-6xl mx-auto relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 items-center">
                    
                    <!-- CARD 1: CAPABILITIES -->
                    <div class="p-8 sm:p-10 rounded-3xl box-deluxe-indigo space-y-6 relative overflow-hidden">
                        <i class="fas fa-palette box-watermark-icon text-indigo-950"></i>
                        <div class="space-y-4 relative z-10">
                            <span class="px-3.5 py-1.5 rounded-full bg-indigo-100 text-indigo-800 type-xs font-black flex items-center gap-2 w-fit">
                                <span class="icon-circle-sm bg-indigo-200 text-indigo-700">
                                    <i class="fas fa-palette"></i>
                                </span>
                                بازطراحی هویت بصری ورود
                            </span>
                            <h4 class="type-h2 text-slate-900">
                                شخصی‌سازی آسان ظاهر صفحه ورود
                            </h4>
                            <p class="type-lead text-slate-700 leading-relaxed">
                                با تنظیمات این بخش، بدون نیاز به نصب هیچ افزونه جانبی دیگری می‌توانید ظاهر صفحه ورود وردپرس (wp-login.php) را به سادگی متناسب با رنگ و لوگوی سایت خود تغییر دهید.
                            </p>
                        </div>

                        <ul class="space-y-3.5 type-sm text-slate-800 font-bold relative z-10">
                            <li class="flex items-center gap-3.5">
                                <div class="icon-circle-md bg-indigo-100 text-indigo-600">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span>امکان انتخاب رنگ، فونت و ظاهر اختصاصی متناسب با قالب سایت شما.</span>
                            </li>
                            <li class="flex items-center gap-3.5">
                                <div class="icon-circle-md bg-indigo-100 text-indigo-600">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span>قراردادن لوگوی شفاف اختصاصی با سایز قابل تنظیم و اتصال به آدرس اصلی سایت.</span>
                            </li>
                            <li class="flex items-center gap-3.5">
                                <div class="icon-circle-md bg-indigo-100 text-indigo-600">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span>امکان قرار دادن تصویر پس‌زمینه اختصاصی یا گرادینت شیک.</span>
                            </li>
                            <li class="flex items-center gap-3.5">
                                <div class="icon-circle-md bg-indigo-100 text-indigo-600">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span>پشتیبانی کامل از پیام‌های اختصاصی راهنما برای کاربران و مشتریان.</span>
                            </li>
                        </ul>
                    </div>

                    <!-- CARD 2: AUTHENTIC WORDPRESS LOGIN FORM (EXACT PLUGIN OUTPUT) -->
                    <div class="rounded-3xl overflow-hidden border border-slate-800 shadow-2xl relative" style="background-color: #060814; background-image: radial-gradient(circle at 90% 10%, rgba(99, 102, 241, 0.35) 0%, transparent 55%), radial-gradient(circle at 10% 90%, rgba(16, 185, 129, 0.25) 0%, transparent 55%), #060814); min-height: 560px;">
                        
                        <!-- Form Wrapped Box matching exact WP output -->
                        <div class="p-8 sm:p-10 max-w-md mx-auto relative z-10">
                            
                            <!-- Header with Circular Shield -->
                            <div class="text-center space-y-2 mb-6">
                                <div class="icon-circle-lg mx-auto bg-indigo-600 text-white shadow-lg shadow-indigo-600/30 border-2 border-indigo-400">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                                    </svg>
                                </div>
                                <h2 class="type-h3 text-white">ورود به حساب کاربری</h2>
                                <p class="type-xs text-slate-400 font-bold">پرتال امن دسترسی اعضای سایت</p>
                            </div>

                            <!-- Login Form matching authentic WP loginform -->
                            <form name="loginform" id="loginform" class="space-y-4">
                                <div>
                                    <label for="demo_user_login" class="block type-xs font-bold text-slate-200 mb-1.5">نام کاربری یا نشانی ایمیل</label>
                                    <input type="text" name="log" id="demo_user_login" class="w-full bg-slate-900/90 border border-slate-700 rounded-xl px-3.5 py-2.5 type-sm text-white focus:outline-none focus:border-indigo-500 font-bold" value="admin" readonly />
                                </div>
                                <div class="user-pass-wrap relative">
                                    <label for="demo_user_pass" class="block type-xs font-bold text-slate-200 mb-1.5">رمز عبور</label>
                                    <div class="relative">
                                        <input type="password" name="pwd" id="demo_user_pass" class="w-full bg-slate-900/90 border border-slate-700 rounded-xl px-3.5 py-2.5 type-sm text-white focus:outline-none focus:border-indigo-500 font-bold" value="••••••••••••" readonly />
                                    </div>
                                </div>

                                <!-- REAL GUARDIFY SLIDER CAPTCHA CONTAINER INSIDE LOGIN FORM -->
                                <div class="guardify-captcha-container guardify-theme-dark-slate guardify-slider-wrap my-3" data-captcha-type="slider">
                                    <div class="guardify-top-radar-track"><div class="guardify-top-radar-beam"></div></div>
                                    <div class="guardify-slider-header">
                                        <span class="guardify-slider-title">
                                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display:inline-block;vertical-align:middle;margin-left:4px;color:#6366f1;">
                                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                            </svg>
                                            حفاظت امنیتی ورود
                                        </span>
                                    </div>
                                    <div class="guardify-slider-track" role="slider">
                                        <div class="guardify-slider-progress" style="width:100%;"></div>
                                        <span class="guardify-slider-hint text-emerald-400 font-bold">هویت تأیید شد ✓</span>
                                        <div class="guardify-slider-thumb" style="right:calc(100% - 44px);">✓</div>
                                    </div>
                                </div>

                                <div class="flex items-center justify-between type-xs text-slate-300 pt-1">
                                    <label class="flex items-center gap-2 cursor-pointer">
                                        <input type="checkbox" checked disabled class="accent-indigo-600 rounded" />
                                        <span>مرا به خاطر بسپار</span>
                                    </label>
                                </div>

                                <button type="button" class="w-full py-3 rounded-xl bg-indigo-600 text-white font-black type-sm shadow-lg shadow-indigo-600/30">
                                    ورود به سیستم
                                </button>
                            </form>

                            <div class="mt-5 pt-3 border-t border-slate-800/80 flex items-center justify-between type-xs text-slate-400">
                                <a href="#" class="hover:text-indigo-400">رمز عبور خود را فراموش کرده‌اید؟</a>
                                <span class="flex items-center gap-1.5 type-micro text-emerald-400 font-bold">
                                    <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                                    گاردفای پرو فعال
                                </span>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ========================================================================= -->
        <!-- SPECIAL DIVIDER 07: FAILOVER SCENARIO BUS IN EMPTY SPACE -->
        <!-- ========================================================================= -->
        <div class="py-5 px-6 sm:px-12 bg-slate-950 border-y-2 border-indigo-500/40 shadow-inner relative z-10">
            <div class="max-w-4xl mx-auto flex items-center justify-between gap-4">
                <div class="flex-1 h-0.5 bg-gradient-to-r from-transparent via-purple-500 to-indigo-500"></div>
                <div class="flex items-center gap-2.5 px-4 py-2 rounded-full bg-slate-900 border border-purple-400/50 shadow-md text-purple-300 type-sm font-bold">
                    <span class="icon-circle-sm bg-purple-950 text-purple-400">
                        <i class="fas fa-network-wired"></i>
                    </span>
                    <span>سناریوی اضطراری: فلوچارت نجات خرید مشتری در زمان قطعی سراسری</span>
                </div>
                <div class="flex-1 h-0.5 bg-gradient-to-l from-transparent via-purple-500 to-indigo-500"></div>
            </div>
        </div>

        <!-- ========================================================================= -->
        <!-- 8. FAILOVER FLOWCHART (Spacious Circular Step Number Discs) -->
        <!-- ========================================================================= -->
        <section class="p-8 sm:p-14 lg:p-18 bg-mesh-radial-2 space-y-12 relative overflow-hidden">
            <!-- Decorative Security Background Motifs in Empty Margins -->
            <i class="fas fa-satellite-dish sec-empty-motif-right text-indigo-700"></i>
            <i class="fas fa-network-wired sec-empty-motif-left text-purple-700"></i>
<div class="token-3d-wrapper-right">
        <svg width="68" height="78" viewBox="0 0 72 82" fill="none" class="drop-shadow-[0_15px_25px_rgba(5, 150, 105, 0.45)]">
          <path d="M36 7L64 17V42C64 59 52 72 36 78C20 72 8 42 8 42V17L36 7Z" fill="#064e3b"/>
          <path d="M36 4L62 14V39C62 55 50 68 36 74C22 68 10 39 10 39V14L36 4Z" fill="url(#grad-emerald)"/>
          <path d="M36 4L10 14V39C10 39 22 68 36 74V4Z" fill="white" fill-opacity="0.25"/>
          <circle cx="36" cy="38" r="14" fill="white" fill-opacity="0.2"/>
          <path d="M36 29C33 29 30.5 31.5 30.5 34.5V38H29C27.9 38 27 38.9 27 40V48C27 49.1 27.9 50 29 50H43C44.1 50 45 49.1 45 48V40C45 38.9 44.1 38 43 38H41.5V34.5C41.5 31.5 39 29 36 29ZM36 31.5C37.7 31.5 39 32.8 39 34.5V38H33V34.5C33 32.8 34.3 31.5 36 31.5Z" fill="white"/>
          <defs>
            <linearGradient id="grad-emerald" x1="0" y1="0" x2="72" y2="82" gradientUnits="userSpaceOnUse">
              <stop stop-color="#34d399"/>
              <stop offset="0.6" stop-color="#059669"/>
              <stop offset="1" stop-color="#064e3b"/>
            </linearGradient>
          </defs>
        </svg>
    </div>
<div class="token-3d-wrapper-left">
        <svg width="62" height="69" viewBox="0 0 64 72" fill="none" class="drop-shadow-[0_15px_25px_rgba(99, 102, 241, 0.4)]">
          <polygon points="32,4 60,19 32,34 4,19" fill="#a5b4fc"/>
          <polygon points="4,19 32,34 32,66 4,51" fill="#6366f1"/>
          <polygon points="32,34 60,19 60,51 32,66" fill="#4338ca"/>
          <path d="M15 36C15 34 16.5 32.5 18.5 32.5C20.5 32.5 22 34 22 36V38H23C23.6 38 24 38.4 24 39V45C24 45.6 23.6 46 23 46H14C13.4 46 13 45.6 13 45V39C13 38.4 13.4 38 14 38H15V36ZM16.5 36H20.5V38H16.5V36Z" fill="white" fill-opacity="0.9"/>
          <path d="M42 42L46 46L54 36" stroke="white" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round" stroke-opacity="0.95"/>
        </svg>
    </div>
            <div class="tech-crosshair-node top-10 right-14">+</div>
            <div class="tech-crosshair-node top-10 left-14">+</div>
            <div class="tech-grid-cluster top-28 left-10"></div>
            <div class="text-center max-w-4xl mx-auto space-y-3 relative z-10">
                <span class="step-badge-pill bg-indigo-600 text-white shadow-lg shadow-indigo-600/30">
                    <span class="icon-circle-sm bg-white text-indigo-700 shadow-sm">۷</span>
                    <span>پایداری صددرصدی تسویه‌حساب</span>
                </span>
                <h3 class="type-h1 text-slate-900 leading-tight">
                    سیستم چگونه مانع از دست رفتن مشتری در زمان اختلال می‌شود؟
                </h3>
                <p class="type-lead text-slate-600 leading-relaxed">
                    چهار مرحله خودکار و آنی که تضمین می‌کند هیچ خریداری با خطای بارگذاری کپچا یا مسدود شدن پرداخت روبرو نشود:
                </p>
            </div>

            <!-- 4 Flowchart Steps (2 Columns) with Spacious Circular Discs -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-7 lg:gap-8 relative z-10">
                
                <!-- Step 1 (Indigo) -->
                <div class="p-8 sm:p-10 rounded-3xl box-deluxe-indigo flex items-start gap-5 relative overflow-hidden">
                    <i class="fas fa-satellite-dish box-watermark-icon text-indigo-950"></i>
                    <div class="icon-circle-xl bg-indigo-600 text-white shadow-md border-2 border-indigo-200 relative z-10 font-black type-h3">
                        ۱
                    </div>
                    <div class="space-y-3 relative z-10">
                        <h4 class="type-h3 text-slate-900">پایش مداوم پاسخ‌دهی سرور</h4>
                        <p class="type-body text-slate-700 leading-relaxed">
                            در صورتی که سرویس خارجی برای بررسی ریکپچا فعال باشد، افزونه پیوسته سرعت و پاسخ سرور را رصد می‌کند.
                        </p>
                        <span class="inline-block type-xs font-black text-indigo-800">پایش بی‌وقفه درگاه</span>
                    </div>
                </div>

                <!-- Step 2 (Amber) -->
                <div class="p-8 sm:p-10 rounded-3xl box-deluxe-amber flex items-start gap-5 relative overflow-hidden">
                    <i class="fas fa-shuffle box-watermark-icon text-amber-950"></i>
                    <div class="icon-circle-xl bg-amber-500 text-white shadow-md border-2 border-amber-200 relative z-10 font-black type-h3">
                        ۲
                    </div>
                    <div class="space-y-3 relative z-10">
                        <h4 class="type-h3 text-slate-900">تشخیص آنی اختلال یا قطعی</h4>
                        <p class="type-body text-slate-700 leading-relaxed">
                            اگر ریکپچای خارجی بیش از ۸۰۰ میلی‌ثانیه تاخیر داشته باشد یا لود نشود، سامانه فیلترینگ یا قطعی را درجا شناسایی می‌کند.
                        </p>
                        <span class="inline-block type-xs font-black text-amber-800">تشخیص خطای شبکه زیر ۱ ثانیه</span>
                    </div>
                </div>

                <!-- Step 3 (Cyan) -->
                <div class="p-8 sm:p-10 rounded-3xl box-deluxe-cyan flex items-start gap-5 relative overflow-hidden">
                    <i class="fas fa-microchip box-watermark-icon text-cyan-950"></i>
                    <div class="icon-circle-xl bg-cyan-600 text-white shadow-md border-2 border-cyan-200 relative z-10 font-black type-h3">
                        ۳
                    </div>
                    <div class="space-y-3 relative z-10">
                        <h4 class="type-h3 text-slate-900">سوییچ خودکار به اعتبارسنجی محلی</h4>
                        <p class="type-body text-slate-700 leading-relaxed">
                            بدون نیاز به دخالت مدیر سایت، ماژول اسلایدر یا آزمون بومی روی صفحه فعال شده و توکن امنیتی صادر می‌گردد.
                        </p>
                        <span class="inline-block type-xs font-black text-cyan-800">سوییچ خودکار و فوری</span>
                    </div>
                </div>

                <!-- Step 4 (Emerald) -->
                <div class="p-8 sm:p-10 rounded-3xl box-deluxe-emerald flex items-start gap-5 relative overflow-hidden">
                    <i class="fas fa-circle-check box-watermark-icon text-emerald-950"></i>
                    <div class="icon-circle-xl bg-emerald-600 text-white shadow-md border-2 border-emerald-200 relative z-10 font-black type-h3">
                        ۴
                    </div>
                    <div class="space-y-3 relative z-10">
                        <h4 class="type-h3 text-slate-900">تکمیل موفق خرید و انتقال به درگاه</h4>
                        <p class="type-body text-slate-700 leading-relaxed">
                            کاربر بدون هیچ معطلی یا صفحه خطایی به درگاه پرداخت هدایت شده و سفارش با موفقیت ثبت می‌گردد.
                        </p>
                        <span class="inline-block type-xs font-black text-emerald-800">حفظ ۱۰۰٪ درآمد فروشگاه</span>
                    </div>
                </div>

            </div>
        </section>

        <!-- ========================================================================= -->
        <!-- SPECIAL DIVIDER 08: BENCHMARK MATRIX BUS IN EMPTY SPACE -->
        <!-- ========================================================================= -->
        <div class="py-5 px-6 sm:px-12 bg-slate-950 border-y-2 border-indigo-500/40 shadow-inner relative z-10">
            <div class="max-w-4xl mx-auto flex items-center justify-between gap-4">
                <div class="flex-1 h-0.5 bg-gradient-to-r from-transparent via-indigo-500 to-indigo-400"></div>
                <div class="flex items-center gap-2.5 px-4 py-2 rounded-full bg-slate-900 border border-indigo-400/50 shadow-md text-indigo-300 type-sm font-bold">
                    <span class="icon-circle-sm bg-indigo-950 text-indigo-400">
                        <i class="fas fa-table-list"></i>
                    </span>
                    <span>جدول مشخصات: مقایسه فنی و عملکردی در یک نگاه</span>
                </div>
                <div class="flex-1 h-0.5 bg-gradient-to-l from-transparent via-indigo-500 to-indigo-400"></div>
            </div>
        </div>

        <!-- ========================================================================= -->
        <!-- 9. BENCHMARK COMPARISON MATRIX (Modular Type Scale Table) -->
        <!-- ========================================================================= -->
        <section class="p-8 sm:p-14 lg:p-18 bg-tech-grid space-y-12 relative overflow-hidden">
            <!-- Decorative Security Background Motifs in Empty Margins -->
            <i class="fas fa-server sec-empty-motif-right text-slate-800"></i>
            <i class="fas fa-shield-check sec-empty-motif-left text-emerald-800"></i>
<div class="token-3d-wrapper-right">
        <svg width="68" height="78" viewBox="0 0 72 82" fill="none" class="drop-shadow-[0_15px_25px_rgba(79, 70, 229, 0.45)]">
          <path d="M36 7L64 17V42C64 59 52 72 36 78C20 72 8 42 8 42V17L36 7Z" fill="#312e81"/>
          <path d="M36 4L62 14V39C62 55 50 68 36 74C22 68 10 39 10 39V14L36 4Z" fill="url(#grad-indigo)"/>
          <path d="M36 4L10 14V39C10 39 22 68 36 74V4Z" fill="white" fill-opacity="0.25"/>
          <circle cx="36" cy="38" r="14" fill="white" fill-opacity="0.2"/>
          <path d="M36 29C33 29 30.5 31.5 30.5 34.5V38H29C27.9 38 27 38.9 27 40V48C27 49.1 27.9 50 29 50H43C44.1 50 45 49.1 45 48V40C45 38.9 44.1 38 43 38H41.5V34.5C41.5 31.5 39 29 36 29ZM36 31.5C37.7 31.5 39 32.8 39 34.5V38H33V34.5C33 32.8 34.3 31.5 36 31.5Z" fill="white"/>
          <defs>
            <linearGradient id="grad-indigo" x1="0" y1="0" x2="72" y2="82" gradientUnits="userSpaceOnUse">
              <stop stop-color="#818cf8"/>
              <stop offset="0.6" stop-color="#4f46e5"/>
              <stop offset="1" stop-color="#312e81"/>
            </linearGradient>
          </defs>
        </svg>
    </div>
<div class="token-3d-wrapper-left">
        <svg width="62" height="69" viewBox="0 0 64 72" fill="none" class="drop-shadow-[0_15px_25px_rgba(16, 185, 129, 0.4)]">
          <polygon points="32,4 60,19 32,34 4,19" fill="#6ee7b7"/>
          <polygon points="4,19 32,34 32,66 4,51" fill="#10b981"/>
          <polygon points="32,34 60,19 60,51 32,66" fill="#047857"/>
          <path d="M15 36C15 34 16.5 32.5 18.5 32.5C20.5 32.5 22 34 22 36V38H23C23.6 38 24 38.4 24 39V45C24 45.6 23.6 46 23 46H14C13.4 46 13 45.6 13 45V39C13 38.4 13.4 38 14 38H15V36ZM16.5 36H20.5V38H16.5V36Z" fill="white" fill-opacity="0.9"/>
          <path d="M42 42L46 46L54 36" stroke="white" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round" stroke-opacity="0.95"/>
        </svg>
    </div>
            <div class="tech-crosshair-node top-10 right-14">+</div>
            <div class="tech-crosshair-node top-10 left-14">+</div>
            <div class="text-center max-w-4xl mx-auto space-y-3 relative z-10">
                <span class="step-badge-pill bg-indigo-600 text-white shadow-lg shadow-indigo-600/30">
                    <span class="icon-circle-sm bg-white text-indigo-700 shadow-sm">۸</span>
                    <span>مشخصات فنی و کارایی</span>
                </span>
                <h3 class="type-h1 text-slate-900 leading-tight">
                    بررسی ویژگی‌ها در یک نگاه
                </h3>
                <p class="type-lead text-slate-600 leading-relaxed">
                    تمام معیارهایی که برای انتخاب بهترین سیستم امنیتی سایت نیاز دارید:
                </p>
            </div>

            <!-- Comparison Table Container with Watermark -->
            <div class="max-w-4xl mx-auto rounded-3xl overflow-hidden border-2 border-slate-300 shadow-xl bg-white relative z-10">
                <i class="fas fa-server box-watermark-icon text-indigo-950"></i>
                <div class="overflow-x-auto relative z-10">
                    <table class="w-full text-right border-collapse type-sm">
                        <thead>
                            <tr class="bg-slate-900 text-white">
                                <th class="p-4 sm:p-5 font-black">قابلیت و ویژگی</th>
                                <th class="p-4 sm:p-5 font-black text-center text-emerald-400">گاردفای پرو (Guardify)</th>
                                <th class="p-4 sm:p-5 font-black text-center text-rose-300">گوگل ریکپچا (reCAPTCHA)</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-200 font-bold text-slate-800">
                            <tr class="hover:bg-slate-50">
                                <td class="p-4 sm:p-5">پایداری در اختلالات اینترنت بین‌الملل</td>
                                <td class="p-4 sm:p-5 text-center text-emerald-600 font-black">۱۰۰٪ پایدار (کاملا مستقل)</td>
                                <td class="p-4 sm:p-5 text-center text-rose-600">بسیار آسیب‌پذیر و وابسته</td>
                            </tr>
                            <tr class="hover:bg-slate-50">
                                <td class="p-4 sm:p-5">حجم دانلود کدهای جاوااسکریپت</td>
                                <td class="p-4 sm:p-5 text-center text-emerald-600 font-black">زیر ۱۰ کیلوبایت</td>
                                <td class="p-4 sm:p-5 text-center text-rose-600">بیش از ۴۰۰ کیلوبایت</td>
                            </tr>
                            <tr class="hover:bg-slate-50">
                                <td class="p-4 sm:p-5">سهولت تایید برای خریدار در موبایل</td>
                                <td class="p-4 sm:p-5 text-center text-emerald-600 font-black">یک لمس ساده یا اسلایدر</td>
                                <td class="p-4 sm:p-5 text-center text-rose-600">معماهای تصویری چندمرحله‌ای</td>
                            </tr>
                            <tr class="hover:bg-slate-50">
                                <td class="p-4 sm:p-5">شخصی‌سازی و تغییر ظاهر صفحه ورود وردپرس</td>
                                <td class="p-4 sm:p-5 text-center text-emerald-600 font-black">دارد (شخصی‌سازی کامل)</td>
                                <td class="p-4 sm:p-5 text-center text-rose-600">ندارد (نیاز به افزونه دیگر)</td>
                            </tr>
                            <tr class="hover:bg-slate-50">
                                <td class="p-4 sm:p-5">سیستم سوییچ اضطراری (Failover)</td>
                                <td class="p-4 sm:p-5 text-center text-emerald-600 font-black">هوشمند و خودکار</td>
                                <td class="p-4 sm:p-5 text-center text-rose-600">ندارد</td>
                            </tr>
                            <tr class="hover:bg-slate-50">
                                <td class="p-4 sm:p-5">سپر ضد حملات جستجوی پسورد (Brute Force)</td>
                                <td class="p-4 sm:p-5 text-center text-emerald-600 font-black">دارد (قفل هوشمند)</td>
                                <td class="p-4 sm:p-5 text-center text-rose-600">ندارد</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- ========================================================================= -->
        <!-- SPECIAL DIVIDER 09: GUARANTEE BUS IN EMPTY SPACE -->
        <!-- ========================================================================= -->
        <div class="py-5 px-6 sm:px-12 bg-slate-950 border-y-2 border-emerald-500/40 shadow-inner relative z-10">
            <div class="max-w-4xl mx-auto flex items-center justify-between gap-4">
                <div class="flex-1 h-0.5 bg-gradient-to-r from-transparent via-emerald-500 to-teal-400"></div>
                <div class="flex items-center gap-2.5 px-4 py-2 rounded-full bg-slate-900 border border-emerald-400/50 shadow-md text-emerald-300 type-sm font-bold">
                    <span class="icon-circle-sm bg-emerald-950 text-emerald-400">
                        <i class="fas fa-award"></i>
                    </span>
                    <span>ضمانت کیفیت، پایداری مداوم و به‌روزرسانی‌های همیشگی</span>
                </div>
                <div class="flex-1 h-0.5 bg-gradient-to-l from-transparent via-emerald-500 to-teal-400"></div>
            </div>
        </div>

        <!-- ========================================================================= -->
        <!-- 10. DEDICATED PLUGIN SUPPORT & QUALITY GUARANTEE (Spacious Circular Icons) -->
        <!-- ========================================================================= -->
        <footer class="p-8 sm:p-14 lg:p-18 bg-gradient-to-b from-slate-50 to-indigo-100/70 border-t border-slate-200 text-center relative overflow-hidden">
            <!-- Decorative Security Background Motifs in Empty Margins -->
            <i class="fas fa-award sec-empty-motif-right text-emerald-800"></i>
            <i class="fas fa-certificate sec-empty-motif-left text-indigo-800"></i>
<div class="token-3d-wrapper-right">
        <svg width="68" height="78" viewBox="0 0 72 82" fill="none" class="drop-shadow-[0_15px_25px_rgba(5, 150, 105, 0.45)]">
          <path d="M36 7L64 17V42C64 59 52 72 36 78C20 72 8 42 8 42V17L36 7Z" fill="#064e3b"/>
          <path d="M36 4L62 14V39C62 55 50 68 36 74C22 68 10 39 10 39V14L36 4Z" fill="url(#grad-emerald)"/>
          <path d="M36 4L10 14V39C10 39 22 68 36 74V4Z" fill="white" fill-opacity="0.25"/>
          <circle cx="36" cy="38" r="14" fill="white" fill-opacity="0.2"/>
          <path d="M36 29C33 29 30.5 31.5 30.5 34.5V38H29C27.9 38 27 38.9 27 40V48C27 49.1 27.9 50 29 50H43C44.1 50 45 49.1 45 48V40C45 38.9 44.1 38 43 38H41.5V34.5C41.5 31.5 39 29 36 29ZM36 31.5C37.7 31.5 39 32.8 39 34.5V38H33V34.5C33 32.8 34.3 31.5 36 31.5Z" fill="white"/>
          <defs>
            <linearGradient id="grad-emerald" x1="0" y1="0" x2="72" y2="82" gradientUnits="userSpaceOnUse">
              <stop stop-color="#34d399"/>
              <stop offset="0.6" stop-color="#059669"/>
              <stop offset="1" stop-color="#064e3b"/>
            </linearGradient>
          </defs>
        </svg>
    </div>
<div class="token-3d-wrapper-left">
        <svg width="62" height="69" viewBox="0 0 64 72" fill="none" class="drop-shadow-[0_15px_25px_rgba(245, 158, 11, 0.4)]">
          <polygon points="32,4 60,19 32,34 4,19" fill="#fde68a"/>
          <polygon points="4,19 32,34 32,66 4,51" fill="#f59e0b"/>
          <polygon points="32,34 60,19 60,51 32,66" fill="#b45309"/>
          <path d="M15 36C15 34 16.5 32.5 18.5 32.5C20.5 32.5 22 34 22 36V38H23C23.6 38 24 38.4 24 39V45C24 45.6 23.6 46 23 46H14C13.4 46 13 45.6 13 45V39C13 38.4 13.4 38 14 38H15V36ZM16.5 36H20.5V38H16.5V36Z" fill="white" fill-opacity="0.9"/>
          <path d="M42 42L46 46L54 36" stroke="white" stroke-width="2.8" stroke-linecap="round" stroke-linejoin="round" stroke-opacity="0.95"/>
        </svg>
    </div>
            <div class="tech-crosshair-node top-10 right-14">+</div>
            <div class="tech-crosshair-node top-10 left-14">+</div>
            <i class="fas fa-shield-halved box-watermark-icon text-indigo-950 !opacity-[0.04]"></i>

            <div class="max-w-4xl mx-auto space-y-8 relative z-10">
                <div class="space-y-4">
                    <span class="step-badge-pill bg-emerald-600 text-white shadow-lg shadow-emerald-600/30">
                        <span class="icon-circle-sm bg-white text-emerald-700 shadow-sm">✓</span>
                        <span>پشتیبانی فنی و تضمین رضایت</span>
                    </span>
                    <h3 class="type-h1 text-slate-900 leading-tight">
                        پشتیبانی مستقیم و متعهدانه توسط تیم توسعه افزونه
                    </h3>
                    <p class="type-lead text-slate-700 leading-relaxed max-w-3xl mx-auto">
                        ما به عنوان تیم توسعه گاردفای پرو، کلیه کدهای این افزونه را مطابق با جدیدترین استانداردهای هسته وردپرس توسعه داده‌ایم و پشتیبانی مستقیم و فنی عملکرد این افزونه را با افتخار بر عهده داریم تا خیالتان از پایداری و امنیت فرم‌های سایت کاملاً آسوده باشد.
                    </p>
                </div>

                <!-- 2-Column Quality Guarantees with Spacious Circular Icons -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 pt-3 type-sm font-black text-slate-800 text-right">
                    
                    <div class="p-6 rounded-3xl box-deluxe-indigo flex items-center gap-4 relative overflow-hidden">
                        <i class="fas fa-headset box-watermark-icon text-indigo-950"></i>
                        <div class="icon-circle-lg bg-indigo-100 text-indigo-600 shadow-sm relative z-10 border-2 border-indigo-200">
                            <i class="fas fa-headset"></i>
                        </div>
                        <div class="relative z-10">
                            <strong class="type-h4 text-slate-900 block font-black">پاسخگویی سریع به تیکت‌های افزونه</strong>
                            <span class="type-xs text-slate-500 font-bold block mt-0.5">پاسخ فنی مستقیم توسط توسعه‌دهندگان اصلی افزونه.</span>
                        </div>
                    </div>

                    <div class="p-6 rounded-3xl box-deluxe-emerald flex items-center gap-4 relative overflow-hidden">
                        <i class="fas fa-arrows-rotate box-watermark-icon text-emerald-950"></i>
                        <div class="icon-circle-lg bg-emerald-100 text-emerald-600 shadow-sm relative z-10 border-2 border-emerald-200">
                            <i class="fas fa-arrows-rotate"></i>
                        </div>
                        <div class="relative z-10">
                            <strong class="type-h4 text-slate-900 block font-black">آپدیت‌های منظم و هماهنگ</strong>
                            <span class="type-xs text-slate-500 font-bold block mt-0.5">تضمین سازگاری مداوم با نسخه‌های جدید وردپرس و ووکامرس.</span>
                        </div>
                    </div>

                    <div class="p-6 rounded-3xl box-deluxe-purple flex items-center gap-4 relative overflow-hidden">
                        <i class="fas fa-code box-watermark-icon text-purple-950"></i>
                        <div class="icon-circle-lg bg-purple-100 text-purple-600 shadow-sm relative z-10 border-2 border-purple-200">
                            <i class="fas fa-code"></i>
                        </div>
                        <div class="relative z-10">
                            <strong class="type-h4 text-slate-900 block font-black">کدنویسی استاندارد و بدون تداخل</strong>
                            <span class="type-xs text-slate-500 font-bold block mt-0.5">رعایت دقیق استانداردهای وردپرس جهت جلوگیری از تداخل با افزونه‌ها.</span>
                        </div>
                    </div>

                    <div class="p-6 rounded-3xl box-deluxe-amber flex items-center gap-4 relative overflow-hidden">
                        <i class="fas fa-certificate box-watermark-icon text-amber-950"></i>
                        <div class="icon-circle-lg bg-amber-100 text-amber-600 shadow-sm relative z-10 border-2 border-amber-200">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <div class="relative z-10">
                            <strong class="type-h4 text-slate-900 block font-black">تضمین پایداری و عملکرد افزونه</strong>
                            <span class="type-xs text-slate-500 font-bold block mt-0.5">تست مداوم سناریوهای تایید هویت و حفاظت از فرم‌ها.</span>
                        </div>
                    </div>

                </div>

                <div class="pt-7 border-t border-slate-200 type-sm text-slate-600 font-bold">
                    © ۲۰۲۶ گاردفای پرو (Guardify Pro) | طراحی و توسعه یافته با افتخار برای اکوسیستم وردپرس | کلیه حقوق محفوظ است.
                </div>
            </div>
        </footer>

    </div>

</body>
</html>
