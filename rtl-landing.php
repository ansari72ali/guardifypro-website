<?php
/**
 * Guardify Pro - Official Landing Page & Technical Presentation (RTL)
 * 100% Native, Offline, Zero-Dependency WordPress Security & CAPTCHA Solution
 */
$page_title = "گاردفای پرو (Guardify Pro) | سامانه کپچای سبک و محافظت از فرم‌های وردپرس";
?>
<!DOCTYPE html>
<html lang="fa-IR" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    
    <!-- Meta description -->
    <meta name="description" content="گاردفای پرو: افزونه کپچای سبک و مستقل وردپرس و ووکامرس بدون وابستگی به سرورهای خارجی. خداحافظی با قطعی و کندی ریکپچای گوگل در صفحه تسویه‌حساب و ورود.">

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
            /* Harmonious Persian Font Family */
            --font-persian: 'IRANSansWeb', 'Vazirmatn', 'Vazir', 'IRANSans', system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;

            /* Modular Fluid Type Scale (Scalable across all viewport widths) */
            --type-display: clamp(2.4rem, 4.5vw + 1rem, 4.25rem);
            --type-h1:      clamp(1.75rem, 3vw + 0.75rem, 2.6rem);
            --type-h2:      clamp(1.35rem, 2.2vw + 0.6rem, 1.95rem);
            --type-h3:      clamp(1.15rem, 1.5vw + 0.5rem, 1.45rem);
            --type-h4:      clamp(1rem, 1vw + 0.4rem, 1.2rem);
            --type-lead:    clamp(1.05rem, 0.8vw + 0.5rem, 1.22rem);
            --type-body:    clamp(0.95rem, 0.4vw + 0.55rem, 1.05rem);
            --type-sm:      clamp(0.85rem, 0.3vw + 0.5rem, 0.95rem);
            --type-xs:      0.8rem;
            --type-micro:   0.725rem;
        }

        /* Enforce Uniform Font Family Globally Across Text Elements (Excluding FontAwesome Icons & Pseudo-elements) */
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

        /* Scalable Modular Type Classes with Professional Line Heights */
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
            line-height: 1.5 !important;
            font-weight: 800 !important;
        }

        .type-lead {
            font-size: var(--type-lead) !important;
            line-height: 1.85 !important;
            font-weight: 500 !important;
        }

        .type-body {
            font-size: var(--type-body) !important;
            line-height: 1.8 !important;
            font-weight: 500 !important;
        }

        .type-sm {
            font-size: var(--type-sm) !important;
            line-height: 1.7 !important;
            font-weight: 600 !important;
        }

        .type-xs {
            font-size: var(--type-xs) !important;
            line-height: 1.55 !important;
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
            padding: 0;
            background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 50%, #0f172a 100%);
            color: #0f172a;
            min-height: 100vh;
            overflow-x: hidden;
        }

        @media (min-width: 640px) {
            body {
                padding: 2.5rem 1.25rem;
            }
        }

        /* Poster Canvas (Strictly 960px Cohesive Infographic Frame) */
        .poster-container {
            width: 100%;
            max-width: 960px;
            margin: 0 auto;
            padding: 1.25rem;
            background: linear-gradient(180deg, #f8fafc 0%, #f1f5f9 50%, #eef2ff 100%);
            box-shadow: 0 25px 60px -12px rgba(0, 0, 0, 0.55), 0 0 0 2px rgba(148, 163, 184, 0.35);
            border-radius: 2rem;
            position: relative;
            display: flex;
            flex-direction: column;
            gap: 0;
        }

        @media (min-width: 640px) {
            .poster-container {
                padding: 2.25rem;
            }
        }

        /* Standardized Infographic Section Container */
        .infographic-section {
            width: 100%;
            border-radius: 1.5rem;
            padding: 1.75rem 1.25rem;
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            gap: 2rem;
            box-shadow: 0 10px 25px -8px rgba(15, 23, 42, 0.08);
        }

        @media (min-width: 640px) {
            .infographic-section {
                padding: 2.5rem 2.25rem;
                gap: 2.25rem;
            }
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
            height: 14px;
            background: linear-gradient(180deg, #818cf8, #6366f1);
        }

        .connector-pill {
            display: inline-flex;
            align-items: center;
            gap: 0.65rem;
            padding: 0.5rem 1.25rem;
            border-radius: 9999px;
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
            border: 1.5px solid #6366f1;
            box-shadow: 0 6px 16px -4px rgba(15, 23, 42, 0.25);
            color: #fef08a;
            font-size: var(--type-xs);
            font-weight: 900;
            text-align: center;
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
           4. DEDICATED UNDERLYING 3D BACKGROUND LAYER (STRICTLY Z-INDEX 0, ZERO OVERLAP)
           ========================================================================= */
        .bg-3d-layer {
            position: absolute !important;
            inset: 0 !important;
            z-index: 0 !important;
            pointer-events: none !important;
            user-select: none !important;
            overflow: hidden !important;
        }

        .sec-empty-motif-right,
        .sec-empty-motif-left,
        .sec-empty-motif-right-dark,
        .sec-empty-motif-left-dark,
        .token-3d-wrapper-right,
        .token-3d-wrapper-left,
        .token-3d-wrapper-right-lower,
        .token-3d-wrapper-left-lower,
        .token-3d-wrapper-right-mid,
        .token-3d-wrapper-left-mid,
        .tech-crosshair-node,
        .tech-grid-cluster {
            z-index: 0 !important;
            pointer-events: none !important;
            user-select: none !important;
        }

        /* 3D Graphic Tokens Positioned Strictly in Top Corner Negative Spaces */
        .token-3d-wrapper-right {
            position: absolute !important;
            right: 1.25rem !important;
            top: 1.15rem !important;
            width: 52px !important;
            height: 58px !important;
            opacity: 0.22 !important;
            display: none !important;
        }

        .token-3d-wrapper-left {
            position: absolute !important;
            left: 1.25rem !important;
            top: 1.15rem !important;
            width: 52px !important;
            height: 58px !important;
            opacity: 0.22 !important;
            display: none !important;
        }

        .bg-3d-layer-dark .token-3d-wrapper-right,
        .bg-3d-layer-dark .token-3d-wrapper-left {
            opacity: 0.34 !important;
        }

        .token-3d-wrapper-right svg,
        .token-3d-wrapper-left svg {
            width: 100% !important;
            height: 100% !important;
            display: block !important;
        }

        /* Only display 3D corner accents on tablet/desktop (>= 768px) where >250px top corner negative space is guaranteed */
        @media (min-width: 768px) {
            .token-3d-wrapper-right,
            .token-3d-wrapper-left {
                display: block !important;
            }
        }

        /* =========================================================================
           ICE WHITE & SOFT GOLD HIGH-CONTRAST PALETTE FOR DEEP NAVY SURFACES
           ========================================================================= */
        .security-hud-pill,
        .box-neon-kiosk {
            color: #f8fafc !important;
        }

        .box-neon-kiosk p,
        .security-hud-pill p {
            color: #f1f5f9 !important;
        }

        .box-deluxe-indigo p,
        .box-deluxe-emerald p,
        .box-deluxe-amber p,
        .box-deluxe-purple p,
        .box-deluxe-cyan p {
            color: #334155 !important;
        }

        .text-gold-soft {
            color: #fef08a !important; /* Soft Warm Gold */
            text-shadow: 0 1px 2px rgba(0,0,0,0.6);
        }

        .text-ice-white {
            color: #f8fafc !important; /* Pure Ice White */
        }

        /* Captcha Widget High-Contrast Overrides on Navy Surfaces */
        .box-neon-kiosk .guardify-slider-hint {
            color: #fef08a !important; /* Soft Gold Hint */
            font-weight: 800 !important;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.8) !important;
        }

        .box-neon-kiosk .guardify-math-title {
            color: #fef3c7 !important; /* Soft Gold Title */
            font-weight: 900 !important;
        }

        .box-neon-kiosk .guardify-math-desc {
            color: #f8fafc !important; /* Ice White */
            font-weight: 700 !important;
        }

        .box-neon-kiosk .guardify-math-equation {
            color: #ffffff !important;
            font-weight: 900 !important;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.9) !important;
        }

        .box-neon-kiosk .guardify-icon-title {
            color: #f8fafc !important; /* Ice White */
            font-weight: 700 !important;
        }

        .box-neon-kiosk .guardify-target-name {
            color: #fef08a !important; /* Soft Gold Target Name */
            font-weight: 900 !important;
        }

        .box-neon-kiosk .guardify-math-input {
            background-color: #070c18 !important;
            border-color: #fef08a !important;
            color: #ffffff !important;
            font-weight: 900 !important;
        }

        /* Elevate all Main Content Containers, Headings, Bento Cards, and Tables to Higher Z-Index (Z-20) */
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
        .max-w-3xl,
        .max-w-4xl,
        .max-w-5xl,
        .max-w-6xl {
            position: relative !important;
            z-index: 20 !important;
        }

        .box-deluxe-indigo,
        .box-deluxe-emerald,
        .box-deluxe-amber,
        .box-deluxe-purple,
        .box-deluxe-cyan,
        .box-neon-kiosk,
        .security-hud-pill {
            position: relative !important;
            z-index: 20 !important;
        }

        /* In-box Watermark Icons */
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

        /* =========================================================================
           HIGH CONTRAST RULES FOR NAVY & DARK SURFACES (WCAG AAA READY)
           ========================================================================= */
        .security-hud-pill,
        .box-neon-kiosk,
        .bg-slate-950,
        .bg-slate-900 {
            color: #f8fafc !important;
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
            text-shadow: 0 1px 4px rgba(0, 0, 0, 0.8) !important;
        }

        .box-neon-kiosk .guardify-icon-title {
            color: #f8fafc !important;
            font-weight: 700 !important;
        }

        .box-neon-kiosk .guardify-target-name {
            color: #38bdf8 !important;
            font-weight: 900 !important;
        }

        .box-neon-kiosk .guardify-math-input {
            background-color: #0f172a !important;
            border-color: #64748b !important;
            color: #ffffff !important;
            font-weight: 900 !important;
        }

        /* =========================================================================
           SUBTLE, COHESIVE INFOGRAPHIC CARDS & SECTION GRADIENT BACKGROUNDS
           ========================================================================= */
        .box-deluxe-indigo {
            background: linear-gradient(145deg, #ffffff 0%, #f5f7ff 55%, #e0e7ff 100%) !important;
            border: 1.5px solid #a5b4fc !important;
            box-shadow: 0 8px 20px -6px rgba(79, 70, 229, 0.12), inset 0 1px 0 rgba(255, 255, 255, 0.9) !important;
        }

        .box-deluxe-emerald {
            background: linear-gradient(145deg, #ffffff 0%, #f2fbf7 55%, #d1fae5 100%) !important;
            border: 1.5px solid #6ee7b7 !important;
            box-shadow: 0 8px 20px -6px rgba(16, 185, 129, 0.12), inset 0 1px 0 rgba(255, 255, 255, 0.9) !important;
        }

        .box-deluxe-amber {
            background: linear-gradient(145deg, #ffffff 0%, #fffdf5 55%, #fef3c7 100%) !important;
            border: 1.5px solid #fcd34d !important;
            box-shadow: 0 8px 20px -6px rgba(245, 158, 11, 0.12), inset 0 1px 0 rgba(255, 255, 255, 0.9) !important;
        }

        .box-deluxe-purple {
            background: linear-gradient(145deg, #ffffff 0%, #faf5ff 55%, #f3e8ff 100%) !important;
            border: 1.5px solid #d8b4fe !important;
            box-shadow: 0 8px 20px -6px rgba(168, 85, 247, 0.12), inset 0 1px 0 rgba(255, 255, 255, 0.9) !important;
        }

        .box-deluxe-cyan {
            background: linear-gradient(145deg, #ffffff 0%, #f2fcfe 55%, #cffafe 100%) !important;
            border: 1.5px solid #67e8f9 !important;
            box-shadow: 0 8px 20px -6px rgba(6, 182, 212, 0.12), inset 0 1px 0 rgba(255, 255, 255, 0.9) !important;
        }

        .box-deluxe-rose {
            background: linear-gradient(145deg, #ffffff 0%, #fff5f6 55%, #ffe4e6 100%) !important;
            border: 1.5px solid #fda4af !important;
            box-shadow: 0 8px 20px -6px rgba(244, 63, 94, 0.12), inset 0 1px 0 rgba(255, 255, 255, 0.9) !important;
        }

        /* Jewel-Toned Dark Infographic Kiosk Cards (Section 4 Captchas) */
        .box-neon-kiosk {
            background: linear-gradient(160deg, #131c38 0%, #0b1124 100%);
            border: 1.5px solid rgba(129, 140, 248, 0.4);
            box-shadow: 0 14px 30px -8px rgba(0, 0, 0, 0.5), inset 0 1px 1px rgba(255, 255, 255, 0.1);
        }

        .kiosk-emerald {
            background: linear-gradient(155deg, #062c21 0%, #091c24 55%, #0b1329 100%) !important;
            border: 1.5px solid rgba(52, 211, 153, 0.5) !important;
        }

        .kiosk-indigo {
            background: linear-gradient(155deg, #1c1947 0%, #121733 55%, #0b1329 100%) !important;
            border: 1.5px solid rgba(129, 140, 248, 0.5) !important;
        }

        .kiosk-purple {
            background: linear-gradient(155deg, #2b103b 0%, #181130 55%, #0b1329 100%) !important;
            border: 1.5px solid rgba(192, 132, 252, 0.5) !important;
        }

        .kiosk-amber {
            background: linear-gradient(155deg, #301c07 0%, #1c1522 55%, #0b1329 100%) !important;
            border: 1.5px solid rgba(251, 191, 36, 0.5) !important;
        }

        .security-hud-pill {
            background: linear-gradient(160deg, #111936 0%, #090e24 55%, #17153b 100%) !important;
            border: 1.5px solid rgba(129, 140, 248, 0.45) !important;
            box-shadow: 0 16px 32px -10px rgba(15, 23, 42, 0.45), inset 0 1px 1px rgba(255, 255, 255, 0.1) !important;
        }

        /* Subtle, Harmonious Section Gradient Backgrounds */
        .sec-info-hero {
            background-color: #eef2ff;
            background-image:
                radial-gradient(rgba(79, 70, 229, 0.08) 1.25px, transparent 1.25px),
                linear-gradient(135deg, #f5f7ff 0%, #eef2ff 50%, #e0e7ff 100%);
            background-size: 24px 24px, 100% 100%;
            border: 2px solid #c7d2fe;
        }

        .sec-info-emerald {
            background-color: #ecfdf5;
            background-image:
                radial-gradient(rgba(16, 185, 129, 0.08) 1.25px, transparent 1.25px),
                linear-gradient(135deg, #f2fbf7 0%, #ecfdf5 50%, #d1fae5 100%);
            background-size: 24px 24px, 100% 100%;
            border: 2px solid #a7f3d0;
        }

        .sec-info-versus {
            background-color: #f8fafc;
            background-image:
                radial-gradient(rgba(100, 116, 139, 0.08) 1.25px, transparent 1.25px),
                linear-gradient(90deg, #fff5f6 0%, #f8fafc 50%, #f0fdf6 100%);
            background-size: 24px 24px, 100% 100%;
            border: 2px solid #cbd5e1;
        }

        .sec-info-cosmic {
            background-color: #0b1026;
            background-image:
                linear-gradient(to right, rgba(99, 102, 241, 0.06) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(99, 102, 241, 0.06) 1px, transparent 1px),
                linear-gradient(135deg, #0b1026 0%, #17153b 50%, #0f172a 100%);
            background-size: 28px 28px, 28px 28px, 100% 100%;
            border: 2px solid #4338ca;
        }

        .sec-info-indigo {
            background-color: #eef2ff;
            background-image:
                radial-gradient(rgba(99, 102, 241, 0.08) 1.25px, transparent 1.25px),
                linear-gradient(135deg, #f4f7ff 0%, #eef2ff 50%, #e0f2fe 100%);
            background-size: 24px 24px, 100% 100%;
            border: 2px solid #bae6fd;
        }

        .sec-info-amber {
            background-color: #fffbeb;
            background-image:
                radial-gradient(rgba(217, 119, 6, 0.08) 1.25px, transparent 1.25px),
                linear-gradient(135deg, #fffdf5 0%, #fffbeb 50%, #fef3c7 100%);
            background-size: 24px 24px, 100% 100%;
            border: 2px solid #fde68a;
        }

        .sec-info-royal {
            background-color: #f3e8ff;
            background-image:
                radial-gradient(rgba(109, 40, 217, 0.08) 1.25px, transparent 1.25px),
                linear-gradient(135deg, #f6f5ff 0%, #ede9fe 50%, #e0e7ff 100%);
            background-size: 24px 24px, 100% 100%;
            border: 2px solid #c4b5fd;
        }

        .sec-info-cyan {
            background-color: #ecfeff;
            background-image:
                radial-gradient(rgba(8, 145, 178, 0.08) 1.25px, transparent 1.25px),
                linear-gradient(135deg, #f2fcfe 0%, #ecfeff 50%, #e0f2fe 100%);
            background-size: 24px 24px, 100% 100%;
            border: 2px solid #a5f3fc;
        }

        .sec-info-purple {
            background-color: #f3e8ff;
            background-image:
                radial-gradient(rgba(124, 58, 237, 0.08) 1.25px, transparent 1.25px),
                linear-gradient(135deg, #faf7ff 0%, #f3e8ff 50%, #ede9fe 100%);
            background-size: 24px 24px, 100% 100%;
            border: 2px solid #ddd6fe;
        }

        .sec-info-finale {
            background-color: #ecfdf5;
            background-image:
                radial-gradient(rgba(16, 185, 129, 0.08) 1.25px, transparent 1.25px),
                linear-gradient(135deg, #f0fdf6 0%, #eef2ff 50%, #fef9c3 100%);
            background-size: 24px 24px, 100% 100%;
            border: 2px solid #a7f3d0;
        }

        /* Infographic Meter Bar */
        .info-meter-track {
            width: 100%;
            height: 8px;
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
            gap: 0.65rem;
            padding: 0.45rem 1.1rem;
            border-radius: 9999px;
            font-size: var(--type-xs);
            font-weight: 900;
        }
    </style>
</head>
<body>

    <!-- ========================================================================= -->
    <!-- MAIN POSTER CANVAS (Clean, Strictly No Elements Behind Boxes, Zero Motion) -->
    <!-- ========================================================================= -->
    <div class="poster-container max-w-[960px] mx-auto relative overflow-hidden shadow-2xl">

        <!-- ========================================================================= -->
        <!-- 1. HERO SECTION (Warm, Sincere, Human Tone & Live Status HUD) -->
        <!-- ========================================================================= -->
        <header class="infographic-section sec-info-hero text-center">

            <!-- Dedicated Underlying 3D Background Layer (Z-Index 0, Top Corner Negative Space Only) -->
            <div class="bg-3d-layer" aria-hidden="true">
                <div class="token-3d-wrapper-right">
                    <svg width="52" height="58" viewBox="0 0 76 86" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                    <svg width="52" height="58" viewBox="0 0 72 84" fill="none" xmlns="http://www.w3.org/2000/svg">
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
            </div>

            <div class="relative z-10 w-full space-y-7">
                
                <!-- Quick Sincere Badges (Colorful Infographic Pills) -->
                <div class="flex flex-wrap items-center justify-center gap-2.5 sm:gap-4 pb-2">
                    <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-indigo-100 border-2 border-indigo-300 text-indigo-950 type-xs shadow-sm font-black">
                        <span class="icon-circle-sm bg-indigo-600 text-white">
                            <i class="fas fa-check"></i>
                        </span>
                        <span>کدنویسی تمیز طبق استاندارد وردپرس</span>
                    </span>
                    <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-emerald-100 border-2 border-emerald-300 text-emerald-950 type-xs shadow-sm font-black">
                        <span class="icon-circle-sm bg-emerald-600 text-white">
                            <i class="fas fa-bolt"></i>
                        </span>
                        <span>لود آنی روی سرور خودتان</span>
                    </span>
                    <span class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-amber-100 border-2 border-amber-300 text-amber-950 type-xs shadow-sm font-black">
                        <span class="icon-circle-sm bg-amber-500 text-white">
                            <i class="fas fa-shield-halved"></i>
                        </span>
                        <span>بدون قطعی در اختلالات اینترنت</span>
                    </span>
                </div>

                <!-- Product Identity Badge -->
                <div class="flex items-center justify-center">
                    <span class="step-badge-pill bg-gradient-to-r from-indigo-600 via-purple-600 to-indigo-700 text-white shadow-xl shadow-indigo-600/30 border border-white/20">
                        <span class="icon-circle-sm bg-white text-indigo-700 shadow-sm">
                            <i class="fas fa-shield-halved"></i>
                        </span>
                        <span>اینفوگرافی معرفی افزونه امنیت فرم‌ها و کپچای مستقل وردپرس • گاردفای پرو</span>
                    </span>
                </div>

                <!-- Brand Title Inside Colorful Infographic Hero Banner Card -->
                <div class="p-7 sm:p-9 rounded-3xl box-deluxe-indigo space-y-5 relative overflow-hidden">
                    <i class="fas fa-shield-halved box-watermark-icon text-indigo-950"></i>
                    <div class="flex flex-col sm:flex-row items-center justify-center gap-4 sm:gap-6 relative z-10">
                        <div class="icon-circle-hero bg-gradient-to-br from-indigo-600 via-purple-600 to-blue-700 text-white shadow-2xl border-2 border-indigo-200 ring-4 ring-indigo-500/20">
                            <i class="fas fa-shield-halved text-amber-300"></i>
                        </div>
                        <div class="text-center sm:text-right">
                            <h1 class="text-5xl sm:text-6xl md:text-7xl font-black text-slate-950 tracking-tight leading-none">
                                گاردفای پرو
                            </h1>
                            <div class="flex flex-wrap items-center justify-center sm:justify-start gap-2.5 mt-3">
                                <span class="px-4 py-1.5 rounded-xl bg-indigo-950 text-amber-300 text-base sm:text-xl font-black tracking-wider uppercase shadow-md border border-indigo-700">
                                    Guardify Pro
                                </span>
                                <span class="px-3.5 py-1.5 rounded-xl bg-amber-200/90 text-amber-950 text-xs sm:text-sm font-black border border-amber-400 shadow-sm">
                                    نسخه ۴.۰۰ • آماده برای وردپرس فارسی و ووکامرس
                                </span>
                            </div>
                        </div>
                    </div>
                    <p class="type-lead text-indigo-950 font-black max-w-2xl mx-auto pt-1 relative z-10">
                        یک کپچای سبک، سریع و بی‌دردسر برای فروشگاه و سایت شما
                    </p>
                    <div class="max-w-3xl mx-auto space-y-3 pt-2 border-t border-indigo-300/80 relative z-10">
                        <h2 class="type-h2 text-slate-900 leading-snug">
                            دیگه نگران معطلی مشتریان در تسویه‌حساب یا قطعی ریکپچای گوگل نباشید!
                        </h2>
                        <p class="type-body text-slate-800 leading-relaxed font-medium">
                            اگر فروشگاه یا سایتی دارید، حتماً دیده‌اید که چقدر اوقات ریکپچای گوگل لود نمی‌شود و خریدار در صفحه پرداخت یا ورود گیر می‌کند. ما گاردفای پرو را دقیقاً برای همین ساختیم؛ تا روی سرور خودتان کاملاً روان و مستقل اجرا شود و هیچ مشتری‌ای را از دست ندهید.
                        </p>
                    </div>
                </div>

                <!-- 4 Colorful Infographic Key Stats Cards (KPI Ribbon) -->
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 sm:gap-5">
                    <div class="p-4 sm:p-5 rounded-2xl box-deluxe-emerald text-center space-y-1.5 relative overflow-hidden">
                        <div class="icon-circle-md bg-emerald-600 text-white mx-auto shadow-sm">
                            <i class="fas fa-feather-pointed"></i>
                        </div>
                        <div class="type-h2 text-emerald-950 font-black">زیر ۱۰ KB</div>
                        <div class="type-xs text-emerald-900 font-bold">بار مصرفی روی لود سایت</div>
                    </div>
                    <div class="p-4 sm:p-5 rounded-2xl box-deluxe-cyan text-center space-y-1.5 relative overflow-hidden">
                        <div class="icon-circle-md bg-cyan-600 text-white mx-auto shadow-sm">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <div class="type-h2 text-cyan-950 font-black">۰.۰۱ ثانیه</div>
                        <div class="type-xs text-cyan-900 font-bold">سرعت بارگذاری محلی</div>
                    </div>
                    <div class="p-4 sm:p-5 rounded-2xl box-deluxe-amber text-center space-y-1.5 relative overflow-hidden">
                        <div class="icon-circle-md bg-amber-500 text-white mx-auto shadow-sm">
                            <i class="fas fa-server"></i>
                        </div>
                        <div class="type-h2 text-amber-950 font-black">۱۰۰٪ مستقل</div>
                        <div class="type-xs text-amber-900 font-bold">بی‌نیاز از سرور خارجی</div>
                    </div>
                    <div class="p-4 sm:p-5 rounded-2xl box-deluxe-purple text-center space-y-1.5 relative overflow-hidden">
                        <div class="icon-circle-md bg-purple-600 text-white mx-auto shadow-sm">
                            <i class="fas fa-shield-halved"></i>
                        </div>
                        <div class="type-h2 text-purple-950 font-black">۴ مدل کپچا</div>
                        <div class="type-xs text-purple-900 font-bold">اسلایدر، ریاضی، آیکون، تله</div>
                    </div>
                </div>

                <!-- 3 Warm Highlights (Colorful Infographic Pills) -->
                <div class="flex flex-wrap items-center justify-center gap-3 sm:gap-4 pt-1 text-slate-900">
                    <div class="flex items-center gap-2.5 bg-purple-100/95 px-4 py-2.5 rounded-2xl shadow-sm border-2 border-purple-300 type-sm font-black text-purple-950">
                        <span class="icon-circle-sm bg-purple-600 text-white">
                            <i class="fas fa-cart-shopping"></i>
                        </span>
                        <span>تکمیل راحت و بی‌دردسر خرید در ووکامرس</span>
                    </div>
                    <div class="flex items-center gap-2.5 bg-amber-100/95 px-4 py-2.5 rounded-2xl shadow-sm border-2 border-amber-300 type-sm font-black text-amber-950">
                        <span class="icon-circle-sm bg-amber-500 text-white">
                            <i class="fas fa-bolt"></i>
                        </span>
                        <span>باز شدن فوری بدون کم‌ترین افت سرعت سایت</span>
                    </div>
                    <div class="flex items-center gap-2.5 bg-emerald-100/95 px-4 py-2.5 rounded-2xl shadow-sm border-2 border-emerald-300 type-sm font-black text-emerald-950">
                        <span class="icon-circle-sm bg-emerald-600 text-white">
                            <i class="fas fa-lock"></i>
                        </span>
                        <span>جلوگیری خودکار از ورودهای مشکوک و هرزنامه‌ها</span>
                    </div>
                </div>

                <!-- LIVE DEFENSE STATUS (HUD) WITH SPACIOUS CIRCULAR ICONS -->
                <div class="pt-4">
                    <div class="security-hud-pill rounded-3xl p-5 sm:p-7 border border-indigo-500/30 text-white relative">
                        <div class="flex flex-wrap items-center justify-between gap-4 pb-5 border-b border-slate-700/80 relative z-10">
                            <div class="flex items-center gap-3">
                                <span class="w-3.5 h-3.5 rounded-full bg-emerald-400"></span>
                                <span class="type-h4 text-emerald-200 flex items-center gap-2 font-black">
                                    <i class="fas fa-shield-halved"></i>
                                    وضعیت ماژول‌های امنیتی افزونه در سایت شما
                                </span>
                            </div>
                            <span class="type-xs bg-slate-800/90 px-3.5 py-1.5 rounded-full text-amber-200 border border-amber-400/50 bg-slate-900 font-black">
                                وضعیت: آماده به‌کار، کاملاً محلی و پایدار
                            </span>
                        </div>

                        <!-- 4 Simple Status Cards -->
                        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8 pt-5 relative z-10">
                            <!-- Metric 1 -->
                            <div class="p-4 rounded-2xl kiosk-emerald flex items-center gap-3.5 relative overflow-hidden">
                                <i class="fas fa-shield-halved box-watermark-icon-dark !text-5xl !-bottom-2 !-left-2 opacity-[0.14]"></i>
                                <div class="icon-circle-lg bg-emerald-500/20 text-emerald-400 border border-emerald-500/30 shadow-sm relative z-10">
                                    <i class="fas fa-shield-halved"></i>
                                </div>
                                <div class="relative z-10 text-right">
                                    <span class="type-micro text-slate-100 block font-bold">محافظت از فرم‌ها</span>
                                    <strong class="type-sm text-emerald-200 block font-black">فعال و آماده</strong>
                                </div>
                            </div>
                            <!-- Metric 2 -->
                            <div class="p-4 rounded-2xl kiosk-indigo flex items-center gap-3.5 relative overflow-hidden">
                                <i class="fas fa-robot box-watermark-icon-dark !text-5xl !-bottom-2 !-left-2 opacity-[0.14]"></i>
                                <div class="icon-circle-lg bg-cyan-500/20 text-cyan-400 border border-cyan-500/30 shadow-sm relative z-10">
                                    <i class="fas fa-robot"></i>
                                </div>
                                <div class="relative z-10 text-right">
                                    <span class="type-micro text-slate-100 block font-bold">دفع ربات‌های اسپمر</span>
                                    <strong class="type-sm text-cyan-200 block font-black">خودکار و آنی</strong>
                                </div>
                            </div>
                            <!-- Metric 3 -->
                            <div class="p-4 rounded-2xl kiosk-amber flex items-center gap-3.5 relative overflow-hidden">
                                <i class="fas fa-user-lock box-watermark-icon-dark !text-5xl !-bottom-2 !-left-2 opacity-[0.14]"></i>
                                <div class="icon-circle-lg bg-amber-500/20 text-amber-400 border border-amber-500/30 shadow-sm relative z-10">
                                    <i class="fas fa-user-lock"></i>
                                </div>
                                <div class="relative z-10 text-right">
                                    <span class="type-micro text-slate-100 block font-bold">قفل فرم لاگین</span>
                                    <strong class="type-sm text-amber-200 block font-black">ضد حدس پسورد</strong>
                                </div>
                            </div>
                            <!-- Metric 4 -->
                            <div class="p-4 rounded-2xl kiosk-purple flex items-center gap-3.5 relative overflow-hidden">
                                <i class="fas fa-key box-watermark-icon-dark !text-5xl !-bottom-2 !-left-2 opacity-[0.14]"></i>
                                <div class="icon-circle-lg bg-purple-500/20 text-purple-400 border border-purple-500/30 shadow-sm relative z-10">
                                    <i class="fas fa-key"></i>
                                </div>
                                <div class="relative z-10 text-right">
                                    <span class="type-micro text-slate-100 block font-bold">تایید هویت کاربر</span>
                                    <strong class="type-sm text-purple-200 block font-black">محلی و مستقل</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </header>

        <!-- ========================================================================= -->
        <!-- SPECIAL DIVIDER 01: INFOGRAPHIC CONNECTOR -->
        <!-- ========================================================================= -->
        <div class="infographic-connector">
            <div class="connector-pill">
                <span class="icon-circle-sm bg-indigo-950 text-indigo-400">
                    <i class="fas fa-check"></i>
                </span>
                <span>اجرای مستقیم روی وردپرس شما، بدون نیاز به سرورهای واسطه خارجی</span>
            </div>
        </div>

        <!-- ========================================================================= -->
        <!-- 2. FOUR CORE PILLARS (Simple & Sincere Developer Explanations) -->
        <!-- ========================================================================= -->
        <section class="infographic-section sec-info-emerald">

            <!-- Dedicated Underlying 3D Background Layer (Z-Index 0, Top Corner Negative Space Only) -->
            <div class="bg-3d-layer" aria-hidden="true">
                <div class="token-3d-wrapper-right">
                    <svg width="52" height="58" viewBox="0 0 76 86" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M38 6L68 22L38 38L8 22L38 6Z" fill="#2a3e6b"/>
                        <path d="M8 22L38 38V74L8 58V22Z" fill="#162548"/>
                        <path d="M68 22L38 38V74L68 58V22Z" fill="#0a1124"/>
                    </svg>
                </div>
            </div>

            <div class="text-center max-w-4xl mx-auto space-y-3 relative z-10">
                <span class="step-badge-pill bg-emerald-600 text-white shadow-lg shadow-emerald-600/30">
                    <span class="icon-circle-sm bg-white text-emerald-700 shadow-sm">۱</span>
                    <span>چهار دلیل کلیدی انتخاب گاردفای پرو</span>
                </span>
                <h3 class="type-h1 text-slate-900 leading-tight">
                    چرا گاردفای پرو برای سایت‌های ما انتخاب بهتری است؟
                </h3>
                <p class="type-lead text-slate-800 leading-relaxed font-medium">
                    وقتی این افزونه را نصب می‌کنید، چند تفاوت اساسی را در راحتی خریداران و آرامش خاطر خودتان احساس خواهید کرد:
                </p>
            </div>

            <!-- 2-Column Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8 relative z-10">
                
                <!-- Pillar 1: Lightning Fast -->
                <div class="p-7 sm:p-9 rounded-3xl box-deluxe-emerald flex flex-col justify-between relative overflow-hidden">
                    <i class="fas fa-bolt box-watermark-icon text-emerald-950"></i>
                    <div class="space-y-4 relative z-10">
                        <div class="flex items-center justify-between pb-3 border-b border-emerald-300/80">
                            <span class="px-3.5 py-1.5 rounded-full bg-emerald-600 text-white type-xs font-black flex items-center gap-2 shadow-sm">
                                <i class="fas fa-bolt"></i>
                                مزیت ۰۱ • لود فوق‌سریع
                            </span>
                            <div class="icon-circle-xl bg-gradient-to-tr from-emerald-600 to-teal-500 text-white shadow-lg border-2 border-white">
                                <i class="fas fa-bolt"></i>
                            </div>
                        </div>
                        <h4 class="type-h3 text-slate-950">سایت شما به خاطر کپچا کند نمی‌شود</h4>
                        <p class="type-body text-slate-800 leading-relaxed font-medium">
                            ریکپچای گوگل فایل‌های سنگینی در مرورگر کاربر دانلود می‌کند و سرعت سایت را پایین می‌آورد؛ اما باری که گاردفای پرو روی لود صفحات سایت می‌اندازد بسیار ناچیز (زیر ۱۰ کیلوبایت) است و کاربر بدون حتی ۱ ثانیه معطلی صفحه را باز می‌کند.
                        </p>
                        <!-- Infographic Meter -->
                        <div class="p-3 rounded-2xl bg-white/80 border border-emerald-300 space-y-1.5">
                            <div class="flex justify-between type-micro text-emerald-950 font-black">
                                <span>بار اضافی روی لود صفحه</span>
                                <span>بسیار سبک (زیر ۱۰ کیلوبایت)</span>
                            </div>
                            <div class="info-meter-track">
                                <div class="info-meter-fill bg-gradient-to-l from-emerald-500 to-teal-400" style="width: 98%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-4 mt-4 border-t border-emerald-300/80 flex items-center justify-between type-sm text-emerald-950 relative z-10 font-black">
                        <span class="flex items-center gap-2">
                            <span class="icon-circle-sm bg-emerald-600 text-white">
                                <i class="fas fa-gauge-high"></i>
                            </span>
                            بدون تاثیر منفی روی سرعت سایت
                        </span>
                        <span class="text-emerald-950 bg-white/90 px-3 py-1 rounded-lg border border-emerald-400">سبک و روان</span>
                    </div>
                </div>

                <!-- Pillar 2: Offline Independence -->
                <div class="p-7 sm:p-9 rounded-3xl box-deluxe-indigo flex flex-col justify-between relative overflow-hidden">
                    <i class="fas fa-server box-watermark-icon text-indigo-950"></i>
                    <div class="space-y-4 relative z-10">
                        <div class="flex items-center justify-between pb-3 border-b border-indigo-300/80">
                            <span class="px-3.5 py-1.5 rounded-full bg-indigo-600 text-white type-xs font-black flex items-center gap-2 shadow-sm">
                                <i class="fas fa-server"></i>
                                مزیت ۰۲ • کاملاً مستقل
                            </span>
                            <div class="icon-circle-xl bg-gradient-to-tr from-indigo-600 to-blue-500 text-white shadow-lg border-2 border-white">
                                <i class="fas fa-server"></i>
                            </div>
                        </div>
                        <h4 class="type-h3 text-slate-950">بی‌نیاز از اینترنت بین‌الملل</h4>
                        <p class="type-body text-slate-800 leading-relaxed font-medium">
                            تمام بررسی‌ها مستقیم روی سرور خودتان انجام می‌شود. یعنی اگر اینترنت خارجی کند شد یا ارتباط با گوگل با مشکل روبرو شد، ثبت‌نام و خرید در سایت شما بدون مشکل کار می‌کند.
                        </p>
                        <!-- Infographic Meter -->
                        <div class="p-3 rounded-2xl bg-white/80 border border-indigo-300 space-y-1.5">
                            <div class="flex justify-between type-micro text-indigo-950 font-black">
                                <span>استقلال از سرورهای خارجی و تحریم</span>
                                <span>۱۰۰٪ اجرای محلی</span>
                            </div>
                            <div class="info-meter-track">
                                <div class="info-meter-fill bg-gradient-to-l from-indigo-600 to-blue-500" style="width: 100%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-4 mt-4 border-t border-indigo-300/80 flex items-center justify-between type-sm text-indigo-950 relative z-10 font-black">
                        <span class="flex items-center gap-2">
                            <span class="icon-circle-sm bg-indigo-600 text-white">
                                <i class="fas fa-shield-halved"></i>
                            </span>
                            پایداری کامل در شرایط مختلف شبکه
                        </span>
                        <span class="text-indigo-950 bg-white/90 px-3 py-1 rounded-lg border border-indigo-400">اجرای محلی</span>
                    </div>
                </div>

                <!-- Pillar 3: Lightweight -->
                <div class="p-7 sm:p-9 rounded-3xl box-deluxe-amber flex flex-col justify-between relative overflow-hidden">
                    <i class="fas fa-microchip box-watermark-icon text-amber-950"></i>
                    <div class="space-y-4 relative z-10">
                        <div class="flex items-center justify-between pb-3 border-b border-amber-300/80">
                            <span class="px-3.5 py-1.5 rounded-full bg-amber-600 text-white type-xs font-black flex items-center gap-2 shadow-sm">
                                <i class="fas fa-database"></i>
                                مزیت ۰۳ • تمیز و بهینه
                            </span>
                            <div class="icon-circle-xl bg-gradient-to-tr from-amber-500 to-orange-500 text-white shadow-lg border-2 border-white">
                                <i class="fas fa-feather-pointed"></i>
                            </div>
                        </div>
                        <h4 class="type-h3 text-slate-950">دیتابیس سایت را سنگین نمی‌کند</h4>
                        <p class="type-body text-slate-800 leading-relaxed font-medium">
                            برخلاف برخی افزونه‌های سنگین که جدول‌های زیادی به دیتابیس اضافه می‌کنند، گاردفای پرو بدون ثبت اطلاعات اضافه کار می‌کند و دیتابیس همیشه مرتب و سریع باقی می‌ماند.
                        </p>
                        <!-- Infographic Meter -->
                        <div class="p-3 rounded-2xl bg-white/80 border border-amber-300 space-y-1.5">
                            <div class="flex justify-between type-micro text-amber-950 font-black">
                                <span>سبکی و سلامت پایگاه‌داده (دیتابیس)</span>
                                <span>۰ جدول اضافی</span>
                            </div>
                            <div class="info-meter-track">
                                <div class="info-meter-fill bg-gradient-to-l from-amber-500 to-orange-500" style="width: 96%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-4 mt-4 border-t border-amber-300/80 flex items-center justify-between type-sm text-amber-950 relative z-10 font-black">
                        <span class="flex items-center gap-2">
                            <span class="icon-circle-sm bg-amber-600 text-white">
                                <i class="fas fa-database"></i>
                            </span>
                            بدون ساختن جدول اضافی در وردپرس
                        </span>
                        <span class="text-amber-950 bg-white/90 px-3 py-1 rounded-lg border border-amber-400">بدون فشار سرور</span>
                    </div>
                </div>

                <!-- Pillar 4: Smart Failover -->
                <div class="p-7 sm:p-9 rounded-3xl box-deluxe-purple flex flex-col justify-between relative overflow-hidden">
                    <i class="fas fa-shuffle box-watermark-icon text-purple-950"></i>
                    <div class="space-y-4 relative z-10">
                        <div class="flex items-center justify-between pb-3 border-b border-purple-300/80">
                            <span class="px-3.5 py-1.5 rounded-full bg-purple-600 text-white type-xs font-black flex items-center gap-2 shadow-sm">
                                <i class="fas fa-route"></i>
                                مزیت ۰۴ • سوییچ خودکار
                            </span>
                            <div class="icon-circle-xl bg-gradient-to-tr from-purple-600 to-indigo-500 text-white shadow-lg border-2 border-white">
                                <i class="fas fa-route"></i>
                            </div>
                        </div>
                        <h4 class="type-h3 text-slate-950">هیچ خریدی به خاطر قطعی نمی‌سوزد</h4>
                        <p class="type-body text-slate-800 leading-relaxed font-medium">
                            حتی اگر بخواهید از سرویس دیگری استفاده کنید، گاردفای پاسخ‌دهی را بررسی می‌کند و اگر قطعی یا تاخیری پیش بیاید، خودش بلافاصله جایگزین می‌شود تا سفارش خریدار ثبت شود.
                        </p>
                        <!-- Infographic Meter -->
                        <div class="p-3 rounded-2xl bg-white/80 border border-purple-300 space-y-1.5">
                            <div class="flex justify-between type-micro text-purple-950 font-black">
                                <span>نرخ حفظ سبد خرید در زمان اختلال</span>
                                <span>۱۰۰٪ تضمین‌شده</span>
                            </div>
                            <div class="info-meter-track">
                                <div class="info-meter-fill bg-gradient-to-l from-purple-600 to-indigo-500" style="width: 100%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-4 mt-4 border-t border-purple-300/80 flex items-center justify-between type-sm text-purple-950 relative z-10 font-black">
                        <span class="flex items-center gap-2">
                            <span class="icon-circle-sm bg-purple-600 text-white">
                                <i class="fas fa-cart-shopping"></i>
                            </span>
                            محافظت از خریداران در صفحه تسویه‌حساب
                        </span>
                        <span class="text-purple-950 bg-white/90 px-3 py-1 rounded-lg border border-purple-400">سوییچ هوشمند</span>
                    </div>
                </div>

            </div>
        </section>

        <!-- ========================================================================= -->
        <!-- SPECIAL DIVIDER 02: INFOGRAPHIC CONNECTOR -->
        <!-- ========================================================================= -->
        <div class="infographic-connector">
            <div class="connector-pill">
                <span class="icon-circle-sm bg-emerald-950 text-emerald-400">
                    <i class="fas fa-scale-balanced"></i>
                </span>
                <span>مقایسه تجربی: تفاوت واقعی رفتار کاربر موقع خرید در سایت</span>
            </div>
        </div>

        <!-- ========================================================================= -->
        <!-- 3. DIRECT COMPARISON: GOOGLE RECAPTCHA VS GUARDIFY PRO -->
        <!-- ========================================================================= -->
        <section class="infographic-section sec-info-versus">

            <!-- Dedicated Underlying 3D Background Layer (Z-Index 0, Top Corner Negative Space Only) -->
            <div class="bg-3d-layer" aria-hidden="true">
                <div class="token-3d-wrapper-left">
                    <svg width="52" height="58" viewBox="0 0 76 86" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M38 4L66 15V42C66 59 53 73 38 79C23 73 10 42 10 42V15L38 4Z" fill="#1e3056"/>
                        <path d="M38 4L10 15V42C10 42 23 73 38 79V4Z" fill="white" fill-opacity="0.14"/>
                    </svg>
                </div>
            </div>

            <div class="text-center max-w-4xl mx-auto space-y-3 relative z-10">
                <span class="step-badge-pill bg-purple-600 text-white shadow-lg shadow-purple-600/30">
                    <span class="icon-circle-sm bg-white text-purple-700 shadow-sm">۲</span>
                    <span>اینفوگرافی مقایسه مستقیم</span>
                </span>
                <h3 class="type-h1 text-slate-900 leading-tight">
                    تفاوت واقعی تجربه خریدار روی سایت شما
                </h3>
                <p class="type-lead text-slate-800 leading-relaxed font-medium">
                    یک مقایسه مستقیم بین استفاده از کپچای سنگین خارجی و راهکار بومی و سبک:
                </p>
            </div>

            <!-- 2-Column Direct Comparison Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8 relative z-10">
                
                <!-- Card 1: Problems with Google reCAPTCHA -->
                <div class="p-8 sm:p-10 rounded-3xl box-deluxe-rose flex flex-col justify-between space-y-6 relative overflow-hidden">
                    <i class="fas fa-triangle-exclamation box-watermark-icon text-rose-950"></i>
                    <div class="space-y-5 relative z-10">
                        <div class="flex items-center justify-between pb-4 border-b border-rose-300">
                            <div class="flex items-center gap-3.5">
                                <div class="icon-circle-lg bg-rose-600 text-white shadow-md border-2 border-white">
                                    <i class="fas fa-circle-xmark"></i>
                                </div>
                                <div>
                                    <h4 class="type-h3 text-rose-950">دردسرهای ریکپچای گوگل</h4>
                                    <span class="type-xs text-rose-800 font-bold">وابستگی به اینترنت بین‌الملل و خطاهای مکرر</span>
                                </div>
                            </div>
                        </div>

                        <ul class="space-y-4 type-sm font-bold text-rose-950">
                            <li class="flex items-start gap-3.5">
                                <div class="icon-circle-md bg-rose-600 text-white shadow-sm">
                                    <i class="fas fa-xmark"></i>
                                </div>
                                <span class="leading-relaxed">لود نشدن کادر کپچا در زمان اختلال اینترنت و بسته شدن راه ورود یا خرید مشتری.</span>
                            </li>
                            <li class="flex items-start gap-3.5">
                                <div class="icon-circle-md bg-rose-600 text-white shadow-sm">
                                    <i class="fas fa-xmark"></i>
                                </div>
                                <span class="leading-relaxed">حل معماهای خسته‌کننده عکس چراغ راهنما یا خط‌کشی که حوصله خریدار را سر می‌برد.</span>
                            </li>
                            <li class="flex items-start gap-3.5">
                                <div class="icon-circle-md bg-rose-600 text-white shadow-sm">
                                    <i class="fas fa-xmark"></i>
                                </div>
                                <span class="leading-relaxed">حجم دانلود سنگین که سرعت باز شدن اولیه صفحات فروشگاه را کند می‌کند.</span>
                            </li>
                            <li class="flex items-start gap-3.5">
                                <div class="icon-circle-md bg-rose-600 text-white shadow-sm">
                                    <i class="fas fa-xmark"></i>
                                </div>
                                <span class="leading-relaxed">ظاهر ثابت و غیرقابل تغییر که با طراحی و رنگ‌بندی سایت شما هماهنگ نمی‌شود.</span>
                            </li>
                        </ul>
                    </div>

                    <div class="p-4 rounded-2xl bg-rose-600 text-white text-center font-black type-sm relative z-10 shadow-md">
                        نتیجه: نارضایتی مشتری و رها شدن سفارش‌های آماده پرداخت
                    </div>
                </div>

                <!-- Card 2: Solutions by Guardify Pro -->
                <div class="p-8 sm:p-10 rounded-3xl box-deluxe-emerald flex flex-col justify-between space-y-6 relative overflow-hidden">
                    <i class="fas fa-shield-halved box-watermark-icon text-emerald-950"></i>
                    <div class="space-y-5 relative z-10">
                        <div class="flex items-center justify-between pb-4 border-b border-emerald-300">
                            <div class="flex items-center gap-3.5">
                                <div class="icon-circle-lg bg-emerald-600 text-white shadow-md border-2 border-white">
                                    <i class="fas fa-shield-halved"></i>
                                </div>
                                <div>
                                    <h4 class="type-h3 text-emerald-950">راحتی کار با گاردفای پرو</h4>
                                    <span class="type-xs text-emerald-800 font-bold">سبک، مستقل، و همیشه در دسترس</span>
                                </div>
                            </div>
                        </div>

                        <ul class="space-y-4 type-sm font-bold text-emerald-950">
                            <li class="flex items-start gap-3.5">
                                <div class="icon-circle-md bg-emerald-600 text-white shadow-sm">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span class="leading-relaxed">کاملاً مستقل روی هاست خودتان بدون نگرانی از تحریم یا قطعی ارتباط با خارج.</span>
                            </li>
                            <li class="flex items-start gap-3.5">
                                <div class="icon-circle-md bg-emerald-600 text-white shadow-sm">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span class="leading-relaxed">تایید فوری با یک کشیدن ساده دست روی صفحه گوشی یا حل یک جمع ساده عددی.</span>
                            </li>
                            <li class="flex items-start gap-3.5">
                                <div class="icon-circle-md bg-emerald-600 text-white shadow-sm">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span class="leading-relaxed">کد بسیار کم‌حجم که هیچ تاخیر یا کندی در لود صفحات سایت به وجود نمی‌آورد.</span>
                            </li>
                            <li class="flex items-start gap-3.5">
                                <div class="icon-circle-md bg-emerald-600 text-white shadow-sm">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span class="leading-relaxed">هماهنگی کامل با صفحه ورود وردپرس و امکان انتخاب رنگ و لوگوی اختصاصی سایت.</span>
                            </li>
                        </ul>
                    </div>

                    <div class="p-4 rounded-2xl bg-emerald-600 text-white text-center font-black type-sm relative z-10 shadow-md">
                        نتیجه: ثبت کامل ۱۰۰٪ سفارش‌ها حتی در سخت‌ترین شرایط شبکه
                    </div>
                </div>

            </div>
        </section>

        <!-- ========================================================================= -->
        <!-- SPECIAL DIVIDER 03: INFOGRAPHIC CONNECTOR -->
        <!-- ========================================================================= -->
        <div class="infographic-connector">
            <div class="connector-pill">
                <span class="icon-circle-sm bg-cyan-950 text-cyan-400">
                    <i class="fas fa-shield-halved"></i>
                </span>
                <span>چهار روش ساده و سریع برای تایید هویت کاربران حقیقی</span>
            </div>
        </div>

        <!-- ========================================================================= -->
        <!-- 4. CAPTCHA SHOWCASE: 4 AUTHENTIC CAPTCHAS IN 2 WIDE COLUMNS -->
        <!-- ========================================================================= -->
        <section class="infographic-section sec-info-cosmic text-white">

            <!-- Dedicated Underlying 3D Background Layer (Z-Index 0, Top Corner Negative Space Only) -->
            <div class="bg-3d-layer bg-3d-layer-dark" aria-hidden="true">
                <div class="token-3d-wrapper-right">
                    <svg width="52" height="58" viewBox="0 0 76 80" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                    <svg width="52" height="58" viewBox="0 0 72 80" fill="none" xmlns="http://www.w3.org/2000/svg">
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
            </div>

            <div class="text-center max-w-4xl mx-auto space-y-3 relative z-10">
                <div class="flex items-center justify-center gap-3">
                    <span class="step-badge-pill bg-gradient-to-r from-cyan-500 to-blue-600 text-white shadow-lg shadow-cyan-500/30">
                        <span class="icon-circle-sm bg-white text-blue-700 shadow-sm">۳</span>
                        <span>روش‌های تایید هویت در افزونه</span>
                    </span>
                    <span class="hidden sm:inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-slate-800 border border-cyan-400/30 text-cyan-300 type-xs font-bold">
                        <span class="icon-circle-sm bg-slate-700 text-cyan-400">
                            <i class="fas fa-sliders"></i>
                        </span>
                        <span>خروجی واقعی افزونه</span>
                    </span>
                </div>
                <h3 class="type-h1 text-white leading-tight">
                    چهار مدل کپچای سبک که می‌توانید انتخاب کنید
                </h3>
                <p class="type-lead text-slate-100 leading-relaxed font-medium">
                    بسته به نوع فرم‌های سایت، می‌توانید هر کدام از این روش‌های ساده و کاربرپسند را با یک کلیک فعال کنید:
                </p>
            </div>

            <!-- 2-Column Wide Grid for the 4 Authentic Captchas -->
            <div class="relative z-10 grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8">

                <!-- 1. Native Puzzle Slider (Exact Markup from Guardify Engine) -->
                <div class="p-7 sm:p-9 rounded-3xl box-neon-kiosk kiosk-emerald flex flex-col justify-between space-y-6 relative overflow-hidden">
                    <i class="fas fa-arrows-left-right box-watermark-icon-dark !text-7xl"></i>
                    <div class="space-y-4 relative z-10">
                        <div class="flex items-center justify-between pb-3 border-b border-slate-700/80">
                            <span class="px-3.5 py-1.5 rounded-full bg-emerald-500/20 text-emerald-300 border border-emerald-500/30 type-xs font-black flex items-center gap-2">
                                <span class="icon-circle-sm bg-emerald-500/30 text-emerald-300">
                                    <i class="fas fa-sliders"></i>
                                </span>
                                محبوب‌ترین مدل برای فروشگاه
                            </span>
                            <span class="type-xs text-amber-200 font-black bg-slate-900/90 px-3 py-1 rounded-full border border-amber-400/50 shadow-md">اسلایدر لمسی</span>
                        </div>
                        <h4 class="type-h3 text-white">۱. اسلایدر کشیدنی روان (Puzzle Slider)</h4>
                        <p class="type-body text-slate-100 leading-relaxed font-medium">
                            کاربر فقط کافیست با انگشت روی موبایل یا ماوس در کامپیوتر دستگیره را بکشد؛ سریع، بدون نیاز به تایپ کردن و کاملاً راحت.
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
                    <div class="pt-4 border-t border-slate-700/80 flex items-center justify-between type-xs text-slate-100 font-bold font-bold relative z-10">
                        <span>💡 بهترین انتخاب برای تسویه‌حساب در موبایل</span>
                        <span class="text-emerald-400">تایید فوری</span>
                    </div>
                </div>

                <!-- 2. Dynamic Math Challenge (Exact Markup from Guardify Engine) -->
                <div class="p-7 sm:p-9 rounded-3xl box-neon-kiosk kiosk-indigo flex flex-col justify-between space-y-6 relative overflow-hidden">
                    <i class="fas fa-calculator box-watermark-icon-dark !text-7xl"></i>
                    <div class="space-y-4 relative z-10">
                        <div class="flex items-center justify-between pb-3 border-b border-slate-700/80">
                            <span class="px-3.5 py-1.5 rounded-full bg-indigo-500/20 text-indigo-300 border border-indigo-500/30 type-xs font-black flex items-center gap-2">
                                <span class="icon-circle-sm bg-indigo-500/30 text-indigo-300">
                                    <i class="fas fa-plus"></i>
                                </span>
                                چالش جمع دو عدد
                            </span>
                            <span class="type-xs text-amber-200 font-black bg-slate-900/90 px-3 py-1 rounded-full border border-amber-400/50 shadow-md">جمع ریاضی</span>
                        </div>
                        <h4 class="type-h3 text-white">۲. چالش جمع ریاضی (Math Challenge)</h4>
                        <p class="type-body text-slate-100 leading-relaxed font-medium">
                            یک جمع ساده بین دو عدد تک‌رقمی؛ ربات‌های اسپمر را متوقف می‌کند و برای کاربران واقعی حل کردنش زیر ۲ ثانیه زمان می‌برد.
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
                    <div class="pt-4 border-t border-slate-700/80 flex items-center justify-between type-xs text-slate-100 font-bold relative z-10">
                        <span>💡 هماهنگ با تمام فرم‌سازهای وردپرس</span>
                        <span class="text-indigo-400">ساده و سرراست</span>
                    </div>
                </div>

                <!-- 3. Visual Icon Match (Exact Markup from Guardify Engine) -->
                <div class="p-7 sm:p-9 rounded-3xl box-neon-kiosk kiosk-purple flex flex-col justify-between space-y-6 relative overflow-hidden">
                    <i class="fas fa-shapes box-watermark-icon-dark !text-7xl"></i>
                    <div class="space-y-4 relative z-10">
                        <div class="flex items-center justify-between pb-3 border-b border-slate-700/80">
                            <span class="px-3.5 py-1.5 rounded-full bg-purple-500/20 text-purple-300 border border-purple-500/30 type-xs font-black flex items-center gap-2">
                                <span class="icon-circle-sm bg-purple-500/30 text-purple-300">
                                    <i class="fas fa-shapes"></i>
                                </span>
                                چالش تصویری آسان
                            </span>
                            <span class="type-xs text-amber-200 font-black bg-slate-900/90 px-3 py-1 rounded-full border border-amber-400/50 shadow-md">تطبیق آیکون</span>
                        </div>
                        <h4 class="type-h3 text-white">۳. انتخاب آیکون مشخص‌شده (Icon Match)</h4>
                        <p class="type-body text-slate-100 leading-relaxed font-medium">
                            یک چالش دیداری جذاب که کاربر کافیست آیکون خواسته‌شده را لمس کند تا بلافاصله تایید شود.
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
                    <div class="pt-4 border-t border-slate-700/80 flex items-center justify-between type-xs text-slate-100 font-bold relative z-10">
                        <span>💡 آیکون هدف را لمس کرده و بررسی را بزنید</span>
                        <span class="text-purple-400">بسیار جذاب</span>
                    </div>
                </div>

                <!-- 4. Invisible Honeypot Trap (Exact Markup from Plugin) -->
                <div class="p-7 sm:p-9 rounded-3xl box-neon-kiosk kiosk-amber flex flex-col justify-between space-y-6 relative overflow-hidden">
                    <i class="fas fa-shield-virus box-watermark-icon-dark !text-7xl"></i>
                    <div class="space-y-4 relative z-10">
                        <div class="flex items-center justify-between pb-3 border-b border-slate-700/80">
                            <span class="px-3.5 py-1.5 rounded-full bg-amber-500/20 text-amber-300 border border-amber-500/30 type-xs font-black flex items-center gap-2">
                                <span class="icon-circle-sm bg-amber-500/30 text-amber-300">
                                    <i class="fas fa-eye-slash"></i>
                                </span>
                                بدون نیاز به هیچ کاری از سمت کاربر
                            </span>
                            <span class="type-xs text-amber-200 font-black bg-slate-900/90 px-3 py-1 rounded-full border border-amber-400/50 shadow-md">تله نامرئی</span>
                        </div>
                        <h4 class="type-h3 text-white">۴. تله نامرئی برای ربات‌ها (Invisible Honeypot)</h4>
                        <p class="type-body text-slate-100 leading-relaxed font-medium">
                            کاربر عادی اصلاً چیزی نمی‌بیند، ولی یک فیلد پنهان وجود دارد که ربات‌ها پرش می‌کنند و سیستم در لحظه مسدودشان می‌کند.
                        </p>

                        <!-- Authentic Honeypot Showcase -->
                        <div class="p-4 rounded-2xl bg-slate-800/80 border border-slate-700/80 my-4 type-xs space-y-3">
                            <div class="flex items-center justify-between text-amber-300 font-bold pb-2 border-b border-slate-700">
                                <span>فیلد مخفی قرارگرفته در فرم‌ها:</span>
                                <span class="bg-amber-500/20 px-2.5 py-0.5 rounded-md text-amber-300 type-micro">محافظت خودکار</span>
                            </div>
                            <div class="p-3 bg-slate-950 rounded-xl text-emerald-400 border border-slate-800 text-left font-bold" dir="ltr">
                                &lt;input type="text" name="guardify_hp_token" class="hidden-trap" tabindex="-1" /&gt;
                            </div>
                            <div class="type-micro text-slate-100 leading-relaxed pt-1 font-medium">
                                ربات‌ها این فیلد مخفی را پر می‌کنند و افزونه بدون اینکه وقت کاربر واقعی را تلف کند، فوراً درخواست آن‌ها را رد می‌کند.
                            </div>
                        </div>

                    </div>
                    <div class="pt-4 border-t border-slate-700/80 flex items-center justify-between type-xs text-slate-100 font-bold font-bold relative z-10">
                        <span>💡 بهترین انتخاب برای فرم‌هایی که می‌خواهید هیچ زحمتی برای کاربر نداشته باشند</span>
                        <span class="text-amber-400">۱۰۰٪ نامرئی</span>
                    </div>
                </div>

            </div>
        </section>

        <!-- ========================================================================= -->
        <!-- SPECIAL DIVIDER 04: INFOGRAPHIC CONNECTOR -->
        <!-- ========================================================================= -->
        <div class="infographic-connector">
            <div class="connector-pill">
                <span class="icon-circle-sm bg-indigo-950 text-indigo-400">
                    <i class="fas fa-check"></i>
                </span>
                <span>سازگاری خودکار با فرم‌های اصلی وردپرس و افزونه‌های معتبر</span>
            </div>
        </div>

        <!-- ========================================================================= -->
        <!-- 5. COMPATIBILITY SHOWCASE (Simple Human Explanations) -->
        <!-- ========================================================================= -->
        <section class="infographic-section sec-info-indigo">

            <!-- Dedicated Underlying 3D Background Layer (Z-Index 0, Top Corner Negative Space Only) -->
            <div class="bg-3d-layer" aria-hidden="true">
                <div class="token-3d-wrapper-right">
                    <svg width="52" height="58" viewBox="0 0 76 86" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M38 6L68 22L38 38L8 22L38 6Z" fill="#2a3e6b"/>
                        <path d="M8 22L38 38V74L8 58V22Z" fill="#162548"/>
                        <path d="M68 22L38 38V74L68 58V22Z" fill="#0a1124"/>
                    </svg>
                </div>
            </div>

            <div class="text-center max-w-4xl mx-auto space-y-3 relative z-10">
                <span class="step-badge-pill bg-indigo-600 text-white shadow-lg shadow-indigo-600/30">
                    <span class="icon-circle-sm bg-white text-indigo-700 shadow-sm">۴</span>
                    <span>سازگاری خودکار و یکپارچه</span>
                </span>
                <h3 class="type-h1 text-slate-900 leading-tight">
                    یک‌بار فعال کنید، همه فرم‌های سایت محافظت می‌شوند
                </h3>
                <p class="type-lead text-slate-800 leading-relaxed font-medium">
                    نیازی به دستکاری کد قالب یا تنظیمات سخت نیست؛ گاردفای پرو خودکار فرم‌های استاندارد وردپرس را شناسایی می‌کند:
                </p>
            </div>

            <!-- 2-Column Wide Grid for Integrations with Spacious Circular Icons -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8 relative z-10">
                
                <!-- Card 1: WooCommerce Checkout -->
                <div class="p-7 sm:p-9 rounded-3xl box-deluxe-purple flex items-start gap-5 relative overflow-hidden">
                    <i class="fas fa-cart-shopping box-watermark-icon text-purple-950"></i>
                    <div class="icon-circle-xl bg-gradient-to-tr from-purple-600 to-indigo-600 text-white shadow-lg border-2 border-white relative z-10">
                        <i class="fas fa-cart-shopping"></i>
                    </div>
                    <div class="space-y-3 relative z-10">
                        <div class="flex items-center justify-between gap-2">
                            <h4 class="type-h3 text-slate-950">فرم تسویه‌حساب ووکامرس</h4>
                            <span class="type-xs font-black text-white bg-purple-600 px-3 py-1 rounded-full shadow-sm">WooCommerce</span>
                        </div>
                        <p class="type-body text-slate-800 leading-relaxed font-medium">
                            محافظت از صفحه پرداخت و ثبت سفارش بدون اینکه خریدار در موبایل معطل شود.
                        </p>
                        <span class="inline-block type-xs font-black text-purple-950 bg-white/80 px-3 py-1 rounded-xl border border-purple-300">✓ تکمیل راحت سفارش خریدار</span>
                    </div>
                </div>

                <!-- Card 2: Mobile Login & OTP -->
                <div class="p-7 sm:p-9 rounded-3xl box-deluxe-indigo flex items-start gap-5 relative overflow-hidden">
                    <i class="fas fa-mobile-screen-button box-watermark-icon text-indigo-950"></i>
                    <div class="icon-circle-xl bg-gradient-to-tr from-indigo-600 to-blue-600 text-white shadow-lg border-2 border-white relative z-10">
                        <i class="fas fa-mobile-screen-button"></i>
                    </div>
                    <div class="space-y-3 relative z-10">
                        <div class="flex items-center justify-between gap-2">
                            <h4 class="type-h3 text-slate-950">فرم‌های ورود و ثبت‌نام با پیامک</h4>
                            <span class="type-xs font-black text-white bg-indigo-600 px-3 py-1 rounded-full shadow-sm">فرم‌های پیامکی</span>
                        </div>
                        <p class="type-body text-slate-800 leading-relaxed font-medium">
                            جلوگیری از ارسال رگباری اس‌ام‌اس توسط ربات‌ها و هدر رفتن شارژ پنل پیامکی شما.
                        </p>
                        <span class="inline-block type-xs font-black text-indigo-950 bg-white/80 px-3 py-1 rounded-xl border border-indigo-300">✓ صرفه‌جویی در هزینه پیامک</span>
                    </div>
                </div>

                <!-- Card 3: Elementor Forms -->
                <div class="p-7 sm:p-9 rounded-3xl box-deluxe-emerald flex items-start gap-5 relative overflow-hidden">
                    <i class="fas fa-wand-magic-sparkles box-watermark-icon text-emerald-950"></i>
                    <div class="icon-circle-xl bg-gradient-to-tr from-emerald-600 to-teal-500 text-white shadow-lg border-2 border-white relative z-10">
                        <i class="fas fa-wand-magic-sparkles"></i>
                    </div>
                    <div class="space-y-3 relative z-10">
                        <div class="flex items-center justify-between gap-2">
                            <h4 class="type-h3 text-slate-950">فرم‌های ساخته‌شده با المنتور</h4>
                            <span class="type-xs font-black text-white bg-emerald-600 px-3 py-1 rounded-full shadow-sm">Elementor</span>
                        </div>
                        <p class="type-body text-slate-800 leading-relaxed font-medium">
                            سازگاری کامل با فرم‌ساز المنتور برای بستن راه پیام‌های تبلیغاتی و اسپم.
                        </p>
                        <span class="inline-block type-xs font-black text-emerald-950 bg-white/80 px-3 py-1 rounded-xl border border-emerald-300">✓ امنیت کامل فرم تماس</span>
                    </div>
                </div>

                <!-- Card 4: Standard WP & Contact Forms -->
                <div class="p-7 sm:p-9 rounded-3xl box-deluxe-amber flex items-start gap-5 relative overflow-hidden">
                    <i class="fas fa-file-lines box-watermark-icon text-amber-950"></i>
                    <div class="icon-circle-xl bg-gradient-to-tr from-amber-500 to-orange-500 text-white shadow-lg border-2 border-white relative z-10">
                        <i class="fas fa-file-lines"></i>
                    </div>
                    <div class="space-y-3 relative z-10">
                        <div class="flex items-center justify-between gap-2">
                            <h4 class="type-h3 text-slate-950">دیدگاه‌ها و فرم‌های تماس وردپرس</h4>
                            <span class="type-xs font-black text-white bg-amber-600 px-3 py-1 rounded-full shadow-sm">دیدگاه‌ها و تماس</span>
                        </div>
                        <p class="type-body text-slate-800 leading-relaxed font-medium">
                            پاکسازی کامل بخش نظرات مقالات و فرم‌های تماس از هرگونه پیام هرزنامه و ربات.
                        </p>
                        <span class="inline-block type-xs font-black text-amber-950 bg-white/80 px-3 py-1 rounded-xl border border-amber-300">✓ بخش نظرات تمیز و واقعی</span>
                    </div>
                </div>

            </div>
        </section>

        <!-- ========================================================================= -->
        <!-- SPECIAL DIVIDER 05: INFOGRAPHIC CONNECTOR -->
        <!-- ========================================================================= -->
        <div class="infographic-connector">
            <div class="connector-pill">
                <span class="icon-circle-sm bg-purple-950 text-purple-400">
                    <i class="fas fa-lock"></i>
                </span>
                <span>امکانات تکمیلی برای بالا بردن امنیت بخش ورود و مدیریت</span>
            </div>
        </div>

        <!-- ========================================================================= -->
        <!-- 6. SECURITY SHIELDS (Simple Human Descriptions) -->
        <!-- ========================================================================= -->
        <section class="infographic-section sec-info-amber">

            <!-- Dedicated Underlying 3D Background Layer (Z-Index 0, Top Corner Negative Space Only) -->
            <div class="bg-3d-layer" aria-hidden="true">
                <div class="token-3d-wrapper-left">
                    <svg width="52" height="58" viewBox="0 0 76 86" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M38 4L66 15V42C66 59 53 73 38 79C23 73 10 42 10 42V15L38 4Z" fill="#1e3056"/>
                        <path d="M38 4L10 15V42C10 42 23 73 38 79V4Z" fill="white" fill-opacity="0.14"/>
                    </svg>
                </div>
            </div>

            <div class="text-center max-w-4xl mx-auto space-y-3 relative z-10">
                <span class="step-badge-pill bg-purple-600 text-white shadow-lg shadow-purple-600/30">
                    <span class="icon-circle-sm bg-white text-purple-700 shadow-sm">۵</span>
                    <span>چهار سپر امنیتی پیشرفته</span>
                </span>
                <h3 class="type-h1 text-slate-900 leading-tight">
                    امکانات امنیتی بیشتر، فراتر از یک کپچای ساده
                </h3>
                <p class="type-lead text-slate-800 leading-relaxed font-medium">
                    گاردفای پرو چند قابلیت کاربردی دیگر هم دارد تا بخش مدیریت و ورود سایت از دسترسی‌های غیرمجاز در امان باشد:
                </p>
            </div>

            <!-- 2-Column Wide Grid for Security Shields -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8 relative z-10">
                
                <!-- Shield 1: Brute-Force Blocker -->
                <div class="p-7 sm:p-9 rounded-3xl box-deluxe-indigo flex items-start gap-5 relative overflow-hidden">
                    <i class="fas fa-lock box-watermark-icon text-indigo-950"></i>
                    <div class="icon-circle-xl bg-indigo-600 text-white shadow-md border-2 border-white relative z-10">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="space-y-3 relative z-10">
                        <span class="inline-block type-micro font-black text-white bg-indigo-600 px-2.5 py-0.5 rounded-full">سپر دفاعی ۰۱</span>
                        <h4 class="type-h3 text-slate-950">سد ضد حدس پسورد (Brute-Force)</h4>
                        <p class="type-body text-slate-800 leading-relaxed font-medium">
                            اگر کسی چند بار رمز اشتباه وارد کند، افزونه دسترسی را موقتاً می‌بندد تا جلوی حملات حدس خودکار پسورد گرفته شود.
                        </p>
                        <span class="inline-block type-xs font-black text-indigo-950 bg-white/80 px-3 py-1 rounded-xl border border-indigo-300">🛡️ قفل خودکار بعد از چند تلاش ناموفق</span>
                    </div>
                </div>

                <!-- Shield 2: XML-RPC Lockdown -->
                <div class="p-7 sm:p-9 rounded-3xl box-deluxe-emerald flex items-start gap-5 relative overflow-hidden">
                    <i class="fas fa-ban box-watermark-icon text-emerald-950"></i>
                    <div class="icon-circle-xl bg-emerald-600 text-white shadow-md border-2 border-white relative z-10">
                        <i class="fas fa-ban"></i>
                    </div>
                    <div class="space-y-3 relative z-10">
                        <span class="inline-block type-micro font-black text-white bg-emerald-600 px-2.5 py-0.5 rounded-full">سپر دفاعی ۰۲</span>
                        <h4 class="type-h3 text-slate-950">بستن درگاه‌های قدیمی و ناامن (XML-RPC)</h4>
                        <p class="type-body text-slate-800 leading-relaxed font-medium">
                            یکی از راه‌های پرکاربرد هکرها برای تست رمز در وردپرس همین مسیر است که با یک کلیک می‌توانید آن را ببندید.
                        </p>
                        <span class="inline-block type-xs font-black text-emerald-950 bg-white/80 px-3 py-1 rounded-xl border border-emerald-300">🛡️ جلوگیری از بار اضافه روی هاست</span>
                    </div>
                </div>

                <!-- Shield 3: Smart Honeypot Trap -->
                <div class="p-7 sm:p-9 rounded-3xl box-deluxe-amber flex items-start gap-5 relative overflow-hidden">
                    <i class="fas fa-eye-slash box-watermark-icon text-amber-950"></i>
                    <div class="icon-circle-xl bg-amber-600 text-white shadow-md border-2 border-white relative z-10">
                        <i class="fas fa-eye-slash"></i>
                    </div>
                    <div class="space-y-3 relative z-10">
                        <span class="inline-block type-micro font-black text-white bg-amber-600 px-2.5 py-0.5 rounded-full">سپر دفاعی ۰۳</span>
                        <h4 class="type-h3 text-slate-950">تله برای فرم‌های دیدگاه‌ها و تماس</h4>
                        <p class="type-body text-slate-800 leading-relaxed font-medium">
                            فیلدهای مخفی که انسان آن‌ها را نمی‌بیند اما ربات‌ها تلاش در پر کردنشان دارند، بلافاصله رد می‌شوند.
                        </p>
                        <span class="inline-block type-xs font-black text-amber-950 bg-white/80 px-3 py-1 rounded-xl border border-amber-300">🛡️ دفع بی‌سر و صدای ربات‌ها</span>
                    </div>
                </div>

                <!-- Shield 4: CSRF & Token Security -->
                <div class="p-7 sm:p-9 rounded-3xl box-deluxe-purple flex items-start gap-5 relative overflow-hidden">
                    <i class="fas fa-key box-watermark-icon text-purple-950"></i>
                    <div class="icon-circle-xl bg-purple-600 text-white shadow-md border-2 border-white relative z-10">
                        <i class="fas fa-key"></i>
                    </div>
                    <div class="space-y-3 relative z-10">
                        <span class="inline-block type-micro font-black text-white bg-purple-600 px-2.5 py-0.5 rounded-full">سپر دفاعی ۰۴</span>
                        <h4 class="type-h3 text-slate-950">جلوگیری از ارسال‌های تقلبی فرم‌ها</h4>
                        <p class="type-body text-slate-800 leading-relaxed font-medium">
                            هر ارسال فرم با یک کد موقت تایید می‌شود تا مطمئن شوید پیام‌ها از صفحه سایت خودتان ارسال شده‌اند.
                        </p>
                        <span class="inline-block type-xs font-black text-purple-950 bg-white/80 px-3 py-1 rounded-xl border border-purple-300">🛡️ بررسی مطمئن درخواست‌ها</span>
                    </div>
                </div>

            </div>
        </section>

        <!-- ========================================================================= -->
        <!-- SPECIAL DIVIDER 06: INFOGRAPHIC CONNECTOR -->
        <!-- ========================================================================= -->
        <div class="infographic-connector">
            <div class="connector-pill">
                <span class="icon-circle-sm bg-amber-950 text-amber-400">
                    <i class="fas fa-palette"></i>
                </span>
                <span>شخصی‌سازی صفحه ورود: تغییر لوگو، رنگ و پس‌زمینه فرم ورود وردپرس</span>
            </div>
        </div>

        <!-- ========================================================================= -->
        <!-- 7. WP LOGIN CUSTOMIZATION (AUTHENTIC WP LOGIN FORM - NO JARGON) -->
        <!-- ========================================================================= -->
        <section class="infographic-section sec-info-royal">
            <!-- Dedicated Underlying 3D Background Layer (Z-Index 0, Top Corner Negative Space Only) -->
            <div class="bg-3d-layer" aria-hidden="true">
                <div class="token-3d-wrapper-right">
                    <svg width="52" height="58" viewBox="0 0 72 84" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23 36V22C23 14.8 28.8 9 36 9C43.2 9 49 14.8 49 22V36" stroke="#64748b" stroke-width="7" stroke-linecap="round"/>
                        <rect x="11" y="34" width="50" height="44" rx="10" fill="#1e3056"/>
                        <circle cx="36" cy="52" r="5" fill="#090e1f"/>
                    </svg>
                </div>
            </div>

            <!-- High-Contrast Infographic Section Header -->
            <div class="text-center max-w-4xl mx-auto space-y-3 relative z-10">
                <span class="step-badge-pill bg-indigo-600 text-white shadow-lg shadow-indigo-600/30">
                    <span class="icon-circle-sm bg-white text-indigo-700 shadow-sm">۶</span>
                    <span>شخصی‌سازی فرم ورود وردپرس</span>
                </span>
                <h3 class="type-h1 text-slate-950 font-black leading-tight">
                    تغییر آسان ظاهر <span class="text-indigo-700">صفحه ورود وردپرس</span>
                </h3>
                <p class="type-lead text-slate-800 leading-relaxed font-medium">
                    صفحه ورود ساده وردپرس (wp-login.php) را بدون نیاز به هیچ افزونه دیگری، متناسب با برند و رنگ سایت خودتان مرتب کنید:
                </p>
            </div>

            <!-- 2-Column Wide Layout -->
            <div class="w-full relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 sm:gap-8 items-center">
                    
                    <!-- CARD 1: CAPABILITIES -->
                    <div class="p-7 sm:p-9 rounded-3xl box-deluxe-indigo space-y-6 relative overflow-hidden">
                        <i class="fas fa-palette box-watermark-icon text-indigo-950"></i>
                        <div class="space-y-4 relative z-10">
                            <span class="px-3.5 py-1.5 rounded-full bg-indigo-600 text-white type-xs font-black flex items-center gap-2 w-fit shadow-sm">
                                <i class="fas fa-palette"></i>
                                تغییر ظاهر لاگین
                            </span>
                            <h4 class="type-h2 text-slate-950">
                                شخصی‌سازی آسان ظاهر صفحه ورود
                            </h4>
                            <p class="type-lead text-slate-800 leading-relaxed font-medium">
                                با تنظیمات این بخش، بدون نیاز به نصب هیچ افزونه جانبی دیگری می‌توانید ظاهر صفحه ورود وردپرس را به سادگی متناسب با رنگ و لوگوی سایت خود تغییر دهید.
                            </p>
                        </div>

                        <ul class="space-y-3.5 type-sm text-slate-900 font-bold relative z-10">
                            <li class="flex items-center gap-3.5">
                                <div class="icon-circle-md bg-indigo-600 text-white shadow-sm">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span>امکان تغییر آسان رنگ دکمه‌ها، فونت و ظاهر فرم متناسب با سایت.</span>
                            </li>
                            <li class="flex items-center gap-3.5">
                                <div class="icon-circle-md bg-indigo-600 text-white shadow-sm">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span>قرار دادن لوگوی سایت شما به جای لوگوی پیش‌فرض وردپرس.</span>
                            </li>
                            <li class="flex items-center gap-3.5">
                                <div class="icon-circle-md bg-indigo-600 text-white shadow-sm">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span>امکان انتخاب عکس پس‌زمینه دلخواه یا رنگ تیره شیک.</span>
                            </li>
                            <li class="flex items-center gap-3.5">
                                <div class="icon-circle-md bg-indigo-600 text-white shadow-sm">
                                    <i class="fas fa-check"></i>
                                </div>
                                <span>قابلیت درج پیام خوش‌آمدگویی یا راهنمایی برای کاربران سایت.</span>
                            </li>
                        </ul>

                        <!-- Infographic Color Swatch Bar -->
                        <div class="p-3.5 rounded-2xl bg-white/90 border border-indigo-300 flex items-center justify-between relative z-10">
                            <span class="type-xs font-black text-indigo-950">رنگ‌بندی‌های آماده پوسته ورود:</span>
                            <div class="flex items-center gap-2">
                                <span class="w-5 h-5 rounded-full bg-indigo-600 border-2 border-white shadow-sm"></span>
                                <span class="w-5 h-5 rounded-full bg-emerald-500 border-2 border-white shadow-sm"></span>
                                <span class="w-5 h-5 rounded-full bg-amber-500 border-2 border-white shadow-sm"></span>
                                <span class="w-5 h-5 rounded-full bg-purple-600 border-2 border-white shadow-sm"></span>
                                <span class="w-5 h-5 rounded-full bg-rose-500 border-2 border-white shadow-sm"></span>
                            </div>
                        </div>
                    </div>

                    <!-- CARD 2: AUTHENTIC WORDPRESS LOGIN FORM (EXACT PLUGIN OUTPUT) -->
                    <div class="rounded-3xl overflow-hidden border border-slate-800 shadow-2xl relative z-20" style="background-color: #060814; background-image: radial-gradient(circle at 90% 10%, rgba(99, 102, 241, 0.35) 0%, transparent 55%), radial-gradient(circle at 10% 90%, rgba(16, 185, 129, 0.25) 0%, transparent 55%); min-height: 560px;">
                        
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
                                <p class="type-xs text-amber-200 font-black">پرتال امن دسترسی اعضای سایت</p>
                            </div>

                            <!-- Login Form matching authentic WP loginform -->
                            <form name="loginform" id="loginform" class="space-y-4">
                                <div>
                                    <label for="demo_user_login" class="block type-xs font-bold text-slate-100 mb-1.5 font-black">نام کاربری یا نشانی ایمیل</label>
                                    <input type="text" name="log" id="demo_user_login" class="w-full bg-slate-900/90 border border-slate-700 rounded-xl px-3.5 py-2.5 type-sm text-white focus:outline-none focus:border-indigo-500 font-bold" value="admin" readonly />
                                </div>
                                <div class="user-pass-wrap relative">
                                    <label for="demo_user_pass" class="block type-xs font-bold text-slate-100 mb-1.5 font-black">رمز عبور</label>
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

                                <div class="flex items-center justify-between type-xs text-slate-100 font-bold pt-1">
                                    <label class="flex items-center gap-2 cursor-pointer">
                                        <input type="checkbox" checked disabled class="accent-indigo-600 rounded" />
                                        <span>مرا به خاطر بسپار</span>
                                    </label>
                                </div>

                                <button type="button" class="w-full py-3 rounded-xl bg-indigo-600 text-white font-black type-sm shadow-lg shadow-indigo-600/30">
                                    ورود به سیستم
                                </button>
                            </form>

                            <div class="mt-5 pt-3 border-t border-slate-800/80 flex items-center justify-between type-xs text-slate-200 font-bold">
                                <span class="text-amber-200">رمز عبور خود را فراموش کرده‌اید؟</span>
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
        <!-- SPECIAL DIVIDER 07: INFOGRAPHIC CONNECTOR -->
        <!-- ========================================================================= -->
        <div class="infographic-connector">
            <div class="connector-pill">
                <span class="icon-circle-sm bg-purple-950 text-purple-400">
                    <i class="fas fa-cart-shopping"></i>
                </span>
                <span>چطور از رها شدن سبد خرید در زمان قطعی اینترنت جلوگیری می‌شود؟</span>
            </div>
        </div>

        <!-- ========================================================================= -->
        <!-- 8. FAILOVER FLOWCHART (Simple 4 Steps in Human Words) -->
        <!-- ========================================================================= -->
        <section class="infographic-section sec-info-cyan">

            <!-- Dedicated Underlying 3D Background Layer (Z-Index 0, Top Corner Negative Space Only) -->
            <div class="bg-3d-layer" aria-hidden="true">
                <div class="token-3d-wrapper-left">
                    <svg width="52" height="58" viewBox="0 0 76 86" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M38 6L68 22L38 38L8 22L38 6Z" fill="#2a3e6b"/>
                        <path d="M8 22L38 38V74L8 58V22Z" fill="#162548"/>
                        <path d="M68 22L38 38V74L68 58V22Z" fill="#0a1124"/>
                    </svg>
                </div>
            </div>

            <div class="text-center max-w-4xl mx-auto space-y-3 relative z-10">
                <span class="step-badge-pill bg-cyan-700 text-white shadow-lg shadow-cyan-700/30">
                    <span class="icon-circle-sm bg-white text-cyan-800 shadow-sm">۷</span>
                    <span>فلوچارت اینفوگرافی پایداری در شرایط اضطراری</span>
                </span>
                <h3 class="type-h1 text-slate-900 leading-tight">
                    چطور از سوختن سفارش خریدار جلوگیری می‌شود؟
                </h3>
                <p class="type-lead text-slate-800 leading-relaxed font-medium">
                    چهار مرحله ساده و خودکار که باعث می‌شود حتی با قطع ناگهانی اینترنت خارجی، خریدار متوقف نشود:
                </p>
            </div>

            <!-- 4 Flowchart Steps (2 Columns) with Spacious Circular Discs -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8 relative z-10">
                
                <!-- Step 1 (Indigo) -->
                <div class="p-7 sm:p-9 rounded-3xl box-deluxe-indigo flex items-start gap-5 relative overflow-hidden">
                    <i class="fas fa-satellite-dish box-watermark-icon text-indigo-950"></i>
                    <div class="icon-circle-xl bg-indigo-600 text-white shadow-md border-2 border-white relative z-10 font-black type-h3">
                        ۱
                    </div>
                    <div class="space-y-3 relative z-10">
                        <span class="inline-block type-micro font-black text-white bg-indigo-600 px-2.5 py-0.5 rounded-full">گام اول • پایش هوشمند</span>
                        <h4 class="type-h3 text-slate-950">بررسی مداوم سرعت و وضعیت شبکه</h4>
                        <p class="type-body text-slate-800 leading-relaxed font-medium">
                            افزونه همیشه سرعت پاسخ‌دهی را چک می‌کند تا از برقراری روان ارتباط مطمئن باشد.
                        </p>
                        <span class="inline-block type-xs font-black text-indigo-950 bg-white/80 px-3 py-1 rounded-xl border border-indigo-300">بررسی مداوم فرم‌ها</span>
                    </div>
                </div>

                <!-- Step 2 (Amber) -->
                <div class="p-7 sm:p-9 rounded-3xl box-deluxe-amber flex items-start gap-5 relative overflow-hidden">
                    <i class="fas fa-shuffle box-watermark-icon text-amber-950"></i>
                    <div class="icon-circle-xl bg-amber-500 text-white shadow-md border-2 border-white relative z-10 font-black type-h3">
                        ۲
                    </div>
                    <div class="space-y-3 relative z-10">
                        <span class="inline-block type-micro font-black text-white bg-amber-600 px-2.5 py-0.5 rounded-full">گام دوم • تشخیص آنی</span>
                        <h4 class="type-h3 text-slate-950">تشخیص سریع هرگونه قطعی یا تاخیر</h4>
                        <p class="type-body text-slate-800 leading-relaxed font-medium">
                            اگر سرور خارجی لود نشود یا تاخیر زیادی داشته باشد، افزونه در لحظه متوجه اختلال می‌شود.
                        </p>
                        <span class="inline-block type-xs font-black text-amber-950 bg-white/80 px-3 py-1 rounded-xl border border-amber-300">تشخیص اختلال زیر ۱ ثانیه</span>
                    </div>
                </div>

                <!-- Step 3 (Cyan) -->
                <div class="p-7 sm:p-9 rounded-3xl box-deluxe-cyan flex items-start gap-5 relative overflow-hidden">
                    <i class="fas fa-microchip box-watermark-icon text-cyan-950"></i>
                    <div class="icon-circle-xl bg-cyan-600 text-white shadow-md border-2 border-white relative z-10 font-black type-h3">
                        ۳
                    </div>
                    <div class="space-y-3 relative z-10">
                        <span class="inline-block type-micro font-black text-white bg-cyan-600 px-2.5 py-0.5 rounded-full">گام سوم • جایگزینی خودکار</span>
                        <h4 class="type-h3 text-slate-950">سوییچ خودکار به کپچای محلی</h4>
                        <p class="type-body text-slate-800 leading-relaxed font-medium">
                            بدون نیاز به کار دستی مدیر سایت، کپچای محلی و سبک فعال می‌شود تا صفحه متوقف نماند.
                        </p>
                        <span class="inline-block type-xs font-black text-cyan-950 bg-white/80 px-3 py-1 rounded-xl border border-cyan-300">سوییچ فوری و بدون دردسر</span>
                    </div>
                </div>

                <!-- Step 4 (Emerald) -->
                <div class="p-7 sm:p-9 rounded-3xl box-deluxe-emerald flex items-start gap-5 relative overflow-hidden">
                    <i class="fas fa-circle-check box-watermark-icon text-emerald-950"></i>
                    <div class="icon-circle-xl bg-emerald-600 text-white shadow-md border-2 border-white relative z-10 font-black type-h3">
                        ۴
                    </div>
                    <div class="space-y-3 relative z-10">
                        <span class="inline-block type-micro font-black text-white bg-emerald-600 px-2.5 py-0.5 rounded-full">گام چهارم • خرید موفق</span>
                        <h4 class="type-h3 text-slate-950">تکمیل موفق خرید مشتری در درگاه</h4>
                        <p class="type-body text-slate-800 leading-relaxed font-medium">
                            کاربر بدون مشاهده صفحه خطا به درگاه بانکی منتقل شده و خریدش با موفقیت ثبت می‌شود.
                        </p>
                        <span class="inline-block type-xs font-black text-emerald-950 bg-white/80 px-3 py-1 rounded-xl border border-emerald-300">حفظ ۱۰۰٪ فروش‌های سایت شما</span>
                    </div>
                </div>

            </div>
        </section>

        <!-- ========================================================================= -->
        <!-- SPECIAL DIVIDER 08: INFOGRAPHIC CONNECTOR -->
        <!-- ========================================================================= -->
        <div class="infographic-connector">
            <div class="connector-pill">
                <span class="icon-circle-sm bg-indigo-950 text-indigo-400">
                    <i class="fas fa-table-list"></i>
                </span>
                <span>جدول ویژگی‌های کامل گاردفای پرو: ساده، منظم و بدون موارد اضافه</span>
            </div>
        </div>

        <!-- ========================================================================= -->
        <!-- 9. ORDERLY 2-COLUMN FEATURES TABLE (COLORFUL INFOGRAPHIC MATRIX) -->
        <!-- ========================================================================= -->
        <section class="infographic-section sec-info-purple">

            <!-- Dedicated Underlying 3D Background Layer (Z-Index 0, Top Corner Negative Space Only) -->
            <div class="bg-3d-layer" aria-hidden="true">
                <div class="token-3d-wrapper-right">
                    <svg width="52" height="58" viewBox="0 0 76 86" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M38 4L66 15V42C66 59 53 73 38 79C23 73 10 42 10 42V15L38 4Z" fill="#1e3056"/>
                        <path d="M38 4L10 15V42C10 42 23 73 38 79V4Z" fill="white" fill-opacity="0.14"/>
                    </svg>
                </div>
            </div>

            <div class="text-center max-w-4xl mx-auto space-y-3 relative z-10">
                <span class="step-badge-pill bg-indigo-600 text-white shadow-lg shadow-indigo-600/30">
                    <span class="icon-circle-sm bg-white text-indigo-700 shadow-sm">۸</span>
                    <span>جدول اینفوگرافی مشخصات و قابلیت‌ها</span>
                </span>
                <h3 class="type-h1 text-slate-900 leading-tight">
                    لیست قابلیت‌های کلیدی افزونه
                </h3>
                <p class="type-lead text-slate-800 leading-relaxed font-medium">
                    خلاصه‌ای از تمام امکانات گاردفای پرو در یک جدول مرتب دو ستونه برای بررسی سریع و خوانایی حداکثری:
                </p>
            </div>

            <!-- ORDERLY 2-COLUMN COLORFUL INFOGRAPHIC TABLE -->
            <div class="w-full rounded-3xl overflow-hidden border-2 border-indigo-300 shadow-xl bg-white relative z-10">
                <div class="overflow-x-auto">
                    <table class="w-full text-right border-collapse table-fixed min-w-[580px] type-sm">
                        <colgroup>
                            <col class="w-[35%] sm:w-[32%]">
                            <col class="w-[65%] sm:w-[68%]">
                        </colgroup>
                        <thead>
                            <tr class="bg-gradient-to-r from-indigo-950 via-purple-950 to-slate-950 text-white border-b-2 border-indigo-500">
                                <th class="py-5 px-6 sm:px-8 font-black text-sm sm:text-base tracking-wide border-l border-indigo-800/70 align-middle">
                                    ویژگی یا قابلیت افزونه
                                </th>
                                <th class="py-5 px-6 sm:px-8 font-black text-sm sm:text-base text-amber-300 align-middle">
                                    وضعیت و عملکرد در گاردفای پرو
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-indigo-200 font-medium text-slate-900">
                            <tr class="bg-emerald-100/80">
                                <td class="py-5 px-6 sm:px-8 font-black text-indigo-950 bg-indigo-100/90 border-l border-indigo-200 align-middle">
                                    نحوه اجرای کپچا
                                </td>
                                <td class="py-5 px-6 sm:px-8 font-black text-emerald-950 leading-relaxed align-middle">
                                    کاملاً مستقل و محلی روی سرور خودتان (بدون نیاز به سرور خارجی یا قطعی)
                                </td>
                            </tr>
                            <tr class="bg-indigo-50/90">
                                <td class="py-5 px-6 sm:px-8 font-black text-indigo-950 bg-indigo-100/60 border-l border-indigo-200 align-middle">
                                    بار مصرفی روی لود سایت
                                </td>
                                <td class="py-5 px-6 sm:px-8 font-black text-emerald-900 leading-relaxed align-middle">
                                    حجم لود فرانت‌اند زیر ۱۰ کیلوبایت (بدون کم‌ترین فشار یا افت سرعت لود صفحات سایت)
                                </td>
                            </tr>
                            <tr class="bg-purple-100/70">
                                <td class="py-5 px-6 sm:px-8 font-black text-indigo-950 bg-indigo-100/90 border-l border-indigo-200 align-middle">
                                    روش‌های تایید هویت کاربر
                                </td>
                                <td class="py-5 px-6 sm:px-8 font-bold text-slate-900 leading-relaxed align-middle">
                                    اسلایدر لمسی روان، چالش جمع ریاضی، تطبیق آیکون، تله هانی‌پات نامرئی
                                </td>
                            </tr>
                            <tr class="bg-indigo-50/90">
                                <td class="py-5 px-6 sm:px-8 font-black text-indigo-950 bg-indigo-100/60 border-l border-indigo-200 align-middle">
                                    پشتیبانی از فروشگاه ووکامرس
                                </td>
                                <td class="py-5 px-6 sm:px-8 font-bold text-slate-900 leading-relaxed align-middle">
                                    اتصال خودکار به فرم‌های تسویه‌حساب، پرداخت و ثبت سفارش سریع
                                </td>
                            </tr>
                            <tr class="bg-amber-100/70">
                                <td class="py-5 px-6 sm:px-8 font-black text-indigo-950 bg-indigo-100/90 border-l border-indigo-200 align-middle">
                                    سازگاری با فرم‌سازها
                                </td>
                                <td class="py-5 px-6 sm:px-8 font-bold text-slate-900 leading-relaxed align-middle">
                                    هماهنگ با المنتور پرو، فرم تماس ۷، گرویتی‌فرم و ثبت دیدگاه‌ها
                                </td>
                            </tr>
                            <tr class="bg-indigo-50/90">
                                <td class="py-5 px-6 sm:px-8 font-black text-indigo-950 bg-indigo-100/60 border-l border-indigo-200 align-middle">
                                    امنیت صفحه ورود پیشخوان
                                </td>
                                <td class="py-5 px-6 sm:px-8 font-bold text-slate-900 leading-relaxed align-middle">
                                    محافظت در برابر حدس پسورد (قفل خودکار بعد از چند تلاش اشتباه)
                                </td>
                            </tr>
                            <tr class="bg-cyan-100/70">
                                <td class="py-5 px-6 sm:px-8 font-black text-indigo-950 bg-indigo-100/90 border-l border-indigo-200 align-middle">
                                    تغییر ظاهر فرم ورود وردپرس
                                </td>
                                <td class="py-5 px-6 sm:px-8 font-bold text-slate-900 leading-relaxed align-middle">
                                    امکان تغییر آسان لوگو، رنگ‌بندی و تصویر پس‌زمینه فرم ورود
                                </td>
                            </tr>
                            <tr class="bg-indigo-50/90">
                                <td class="py-5 px-6 sm:px-8 font-black text-indigo-950 bg-indigo-100/60 border-l border-indigo-200 align-middle">
                                    سیستم سوییچ اضطراری
                                </td>
                                <td class="py-5 px-6 sm:px-8 font-bold text-slate-900 leading-relaxed align-middle">
                                    سوییچ خودکار به اعتبارسنجی محلی در صورت بروز هرگونه اختلال شبکه
                                </td>
                            </tr>
                            <tr class="bg-purple-100/70">
                                <td class="py-5 px-6 sm:px-8 font-black text-indigo-950 bg-indigo-100/90 border-l border-indigo-200 align-middle">
                                    وضعیت پایگاه‌داده (دیتابیس)
                                </td>
                                <td class="py-5 px-6 sm:px-8 font-bold text-slate-900 leading-relaxed align-middle">
                                    بدون ساختن جدول اضافی و بدون انباشت داده‌های موقت
                                </td>
                            </tr>
                            <tr class="bg-emerald-100/80">
                                <td class="py-5 px-6 sm:px-8 font-black text-indigo-950 bg-indigo-100/60 border-l border-indigo-200 align-middle">
                                    پشتیبانی و به‌روزرسانی
                                </td>
                                <td class="py-5 px-6 sm:px-8 font-black text-emerald-950 leading-relaxed align-middle">
                                    پاسخگویی مستقیم توسط تیم توسعه‌دهنده اصلی و تضمین کارکرد
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- ========================================================================= -->
        <!-- SPECIAL DIVIDER 09: INFOGRAPHIC CONNECTOR -->
        <!-- ========================================================================= -->
        <div class="infographic-connector">
            <div class="connector-pill">
                <span class="icon-circle-sm bg-emerald-950 text-emerald-400">
                    <i class="fas fa-heart"></i>
                </span>
                <span>پشتیبانی واقعی و صمیمانه، مستقیماً توسط برنامه‌نویسان اصلی افزونه</span>
            </div>
        </div>

        <!-- ========================================================================= -->
        <!-- 10. SINCERE DEVELOPER SUPPORT & QUALITY GUARANTEE -->
        <!-- ========================================================================= -->
        <footer class="infographic-section sec-info-finale text-center">

            <!-- Dedicated Underlying 3D Background Layer (Z-Index 0, Top Corner Negative Space Only) -->
            <div class="bg-3d-layer" aria-hidden="true">
                <div class="token-3d-wrapper-right">
                    <svg width="52" height="58" viewBox="0 0 72 84" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23 36V22C23 14.8 28.8 9 36 9C43.2 9 49 14.8 49 22V36" stroke="url(#navy-lock-shackle-s10-top-r)" stroke-width="7" stroke-linecap="round"/>
                        <rect x="11" y="34" width="50" height="44" rx="10" fill="url(#navy-lock-body-s10-top-r)"/>
                        <rect x="11" y="34" width="50" height="44" rx="10" stroke="#3d568c" stroke-width="1.5" stroke-opacity="0.4"/>
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
            </div>

            <div class="w-full space-y-8 relative z-10">
                <div class="p-7 sm:p-9 rounded-3xl box-deluxe-emerald space-y-4 relative overflow-hidden">
                    <i class="fas fa-shield-halved box-watermark-icon text-emerald-950"></i>
                    <span class="step-badge-pill bg-emerald-600 text-white shadow-lg shadow-emerald-600/30 relative z-10">
                        <span class="icon-circle-sm bg-white text-emerald-700 shadow-sm">
                            <i class="fas fa-check"></i>
                        </span>
                        <span>پشتیبانی و همراهی مستقیم</span>
                    </span>
                    <h3 class="type-h1 text-slate-950 leading-tight relative z-10">
                        خیالتان از بابت پشتیبانی و عملکرد افزونه راحت باشد
                    </h3>
                    <p class="type-lead text-slate-800 leading-relaxed font-medium max-w-3xl mx-auto relative z-10">
                        ما خودمان توسعه‌دهنده همین افزونه هستیم و خیالمون از بابت کیفیت کدها و کارکردش کاملاً راحته. اگر هر جا نیاز به راهنمایی داشتید یا سوالی درباره تنظیمات پیش آمد، کافیست تیکت بزنید؛ خودمان مستقیماً و با حوصله کنارتان هستیم تا فرم‌های سایت شما همیشه امن و پایدار باشند.
                    </p>
                </div>

                <!-- 2-Column Quality Guarantees with Spacious Circular Icons -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 sm:gap-8 pt-2 type-sm font-black text-slate-900 text-right">
                    
                    <div class="p-7 sm:p-9 rounded-3xl box-deluxe-indigo flex items-center gap-4 relative overflow-hidden">
                        <i class="fas fa-headset box-watermark-icon text-indigo-950"></i>
                        <div class="icon-circle-lg bg-indigo-600 text-white shadow-md relative z-10 border-2 border-white">
                            <i class="fas fa-headset"></i>
                        </div>
                        <div class="relative z-10">
                            <strong class="type-h4 text-slate-950 block font-black">پاسخگویی سریع به تیکت‌ها</strong>
                            <span class="type-xs text-slate-800 font-bold block mt-0.5">پاسخ فنی مستقیم توسط خود توسعه‌دهندگان افزونه.</span>
                        </div>
                    </div>

                    <div class="p-7 sm:p-9 rounded-3xl box-deluxe-emerald flex items-center gap-4 relative overflow-hidden">
                        <i class="fas fa-arrows-rotate box-watermark-icon text-emerald-950"></i>
                        <div class="icon-circle-lg bg-emerald-600 text-white shadow-md relative z-10 border-2 border-white">
                            <i class="fas fa-arrows-rotate"></i>
                        </div>
                        <div class="relative z-10">
                            <strong class="type-h4 text-slate-950 block font-black">به‌روزرسانی‌های مداوم</strong>
                            <span class="type-xs text-slate-800 font-bold block mt-0.5">هماهنگی همیشگی با نسخه‌های جدید وردپرس و ووکامرس.</span>
                        </div>
                    </div>

                    <div class="p-7 sm:p-9 rounded-3xl box-deluxe-purple flex items-center gap-4 relative overflow-hidden">
                        <i class="fas fa-code box-watermark-icon text-purple-950"></i>
                        <div class="icon-circle-lg bg-purple-600 text-white shadow-md relative z-10 border-2 border-white">
                            <i class="fas fa-code"></i>
                        </div>
                        <div class="relative z-10">
                            <strong class="type-h4 text-slate-950 block font-black">کدنویسی تمیز و سبک</strong>
                            <span class="type-xs text-slate-800 font-bold block mt-0.5">طبق استانداردهای وردپرس و بدون تداخل با قالب و افزونه‌ها.</span>
                        </div>
                    </div>

                    <div class="p-7 sm:p-9 rounded-3xl box-deluxe-amber flex items-center gap-4 relative overflow-hidden">
                        <i class="fas fa-certificate box-watermark-icon text-amber-950"></i>
                        <div class="icon-circle-lg bg-amber-500 text-white shadow-md relative z-10 border-2 border-white">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <div class="relative z-10">
                            <strong class="type-h4 text-slate-950 block font-black">تضمین کارکرد مطمئن</strong>
                            <span class="type-xs text-slate-800 font-bold block mt-0.5">تست‌شده در سناریوهای مختلف ورود و تسویه‌حساب فروشگاهی.</span>
                        </div>
                    </div>

                </div>

            </div>
        </footer>

    </div>

</body>
</html>
