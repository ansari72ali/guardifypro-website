<?php
/**
 * Guardify Pro (گاردفای پرو) - پوستر معرفی و لندینگ پیج رسمی در مارکت راست‌چین
 * نسخه کاملاً لایت‌مود (Light Theme)، طراحی بصری فوق‌العاده جذاب،
 * چیدمان «دو کارت معلق لوکس» در تم سرمه‌ای شاهانه به همراه افکت‌های رنگی و گرادیانتی،
 * افکت‌های نوری ارگونومیک ضد خستگی چشم (Anti-Eye-Strain Ergonomic FX)،
 * نمایش اختصاصی 👁️ پایش و بازرسی رفتار انسانی هوشمند (Smart Human Inspection FX)،
 * تنوع رنگی کپچاها و تاکید ویژه بر بیش از ۳۵ تم و استایل آماده،
 * و پوشش کامل قطعی اینترنت بین‌الملل و شبکه ملی اطلاعات (نت ملی).
 * بدون هیچ‌گونه لینک خارجی یا فرم ثبت‌نام واقعی (صرفاً بصری جهت درج عکس در مارکت راست‌چین).
 */
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>گاردفای پرو | پوستر معرفی و لندینگ رسمی در راست‌چین</title>
    
    <!-- Meta tags for Rastchin Marketplace Preview -->
    <meta name="robots" content="noindex, nofollow">
    <meta name="description" content="پوستر گرافیکی و معرفی جامع ویژگی‌های افزونه امنیتی گاردفای پرو در مارکت راست‌چین">

    <!-- Fonts & Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- Tailwind CSS CDN for Crisp Rendering -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50: '#eef2ff',
                            100: '#e0e7ff',
                            500: '#6366f1',
                            600: '#4f46e5',
                            700: '#4338ca',
                            900: '#312e81'
                        }
                    }
                }
            }
        }
    </script>

    <!-- Main Website Style (with full IRANSans @font-face suite) -->
    <link rel="stylesheet" href="/css/style.css">
    <!-- Embedded Guardify Demo & Captcha Theme Styles -->
    <link rel="stylesheet" href="/css/captcha-themes.css">

    <style>
        /* Force IRANSans across all elements on this page */
        html, body, *, input, button, select, textarea, div, span, p, h1, h2, h3, h4, h5, h6 {
            font-family: 'IRANSans', 'IRANSansWeb', 'IRANYekan', sans-serif !important;
        }

        /* Vibrant Ergonomic Dynamic Colored Background (Anti-Monotony FX) */
        body {
            background-color: #0b1120;
            background-image: 
                radial-gradient(circle at 10% 12%, rgba(79, 70, 229, 0.22) 0%, transparent 45%),
                radial-gradient(circle at 90% 20%, rgba(219, 39, 119, 0.20) 0%, transparent 45%),
                radial-gradient(circle at 15% 55%, rgba(16, 185, 129, 0.18) 0%, transparent 45%),
                radial-gradient(circle at 85% 65%, rgba(245, 158, 11, 0.20) 0%, transparent 48%),
                radial-gradient(circle at 50% 35%, rgba(6, 182, 212, 0.16) 0%, transparent 50%),
                radial-gradient(circle at 50% 85%, rgba(147, 51, 234, 0.22) 0%, transparent 55%),
                linear-gradient(180deg, #f8fafc 0%, #e2e8f0 100%);
            background-attachment: fixed;
            color: #0f172a;
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
        }

        /* Tech Micro-Grid Background Overlay */
        .bg-tech-grid {
            background-image: 
                radial-gradient(circle, rgba(99, 102, 241, 0.10) 1px, transparent 1px),
                linear-gradient(to right, rgba(226, 232, 240, 0.45) 1px, transparent 1px),
                linear-gradient(to bottom, rgba(226, 232, 240, 0.45) 1px, transparent 1px);
            background-size: 20px 20px, 40px 40px, 40px 40px;
        }

        .bg-mesh-radial-1 {
            background-image: 
                radial-gradient(circle at 10% 20%, rgba(99, 102, 241, 0.12) 0%, transparent 45%),
                radial-gradient(circle at 90% 80%, rgba(16, 185, 129, 0.12) 0%, transparent 45%),
                linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
        }

        .bg-mesh-radial-2 {
            background-image: 
                radial-gradient(circle at 80% 20%, rgba(245, 158, 11, 0.12) 0%, transparent 45%),
                radial-gradient(circle at 20% 80%, rgba(168, 85, 247, 0.12) 0%, transparent 45%),
                linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
        }

        .bg-mesh-radial-3 {
            background-image: 
                radial-gradient(circle at 50% 0%, rgba(6, 182, 212, 0.15) 0%, transparent 50%),
                radial-gradient(circle at 10% 90%, rgba(244, 63, 94, 0.12) 0%, transparent 45%),
                linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
        }

        /* Glowing Border Card Presets */
        .card-glow-indigo {
            background: linear-gradient(135deg, #ffffff 0%, #f8faff 100%);
            border: 1.5px solid rgba(99, 102, 241, 0.28);
            box-shadow: 0 10px 30px -5px rgba(99, 102, 241, 0.10), 0 2px 6px rgba(15, 23, 42, 0.04);
            transition: all 0.3s ease;
        }
        .card-glow-indigo:hover {
            border-color: rgba(99, 102, 241, 0.55);
            box-shadow: 0 16px 36px -6px rgba(99, 102, 241, 0.18);
            transform: translateY(-2px);
        }

        .card-glow-emerald {
            background: linear-gradient(135deg, #ffffff 0%, #f0fdf4 100%);
            border: 1.5px solid rgba(16, 185, 129, 0.28);
            box-shadow: 0 10px 30px -5px rgba(16, 185, 129, 0.10), 0 2px 6px rgba(15, 23, 42, 0.04);
            transition: all 0.3s ease;
        }
        .card-glow-emerald:hover {
            border-color: rgba(16, 185, 129, 0.55);
            box-shadow: 0 16px 36px -6px rgba(16, 185, 129, 0.18);
            transform: translateY(-2px);
        }

        .card-glow-amber {
            background: linear-gradient(135deg, #ffffff 0%, #fffdf5 100%);
            border: 1.5px solid rgba(245, 158, 11, 0.28);
            box-shadow: 0 10px 30px -5px rgba(245, 158, 11, 0.10), 0 2px 6px rgba(15, 23, 42, 0.04);
            transition: all 0.3s ease;
        }
        .card-glow-amber:hover {
            border-color: rgba(245, 158, 11, 0.55);
            box-shadow: 0 16px 36px -6px rgba(245, 158, 11, 0.18);
            transform: translateY(-2px);
        }

        .card-glow-purple {
            background: linear-gradient(135deg, #ffffff 0%, #faf5ff 100%);
            border: 1.5px solid rgba(168, 85, 247, 0.28);
            box-shadow: 0 10px 30px -5px rgba(168, 85, 247, 0.10), 0 2px 6px rgba(15, 23, 42, 0.04);
            transition: all 0.3s ease;
        }
        .card-glow-purple:hover {
            border-color: rgba(168, 85, 247, 0.55);
            box-shadow: 0 16px 36px -6px rgba(168, 85, 247, 0.18);
            transform: translateY(-2px);
        }

        .card-glow-rose {
            background: linear-gradient(135deg, #ffffff 0%, #fff1f2 100%);
            border: 1.5px solid rgba(244, 63, 94, 0.28);
            box-shadow: 0 10px 30px -5px rgba(244, 63, 94, 0.10), 0 2px 6px rgba(15, 23, 42, 0.04);
            transition: all 0.3s ease;
        }
        .card-glow-rose:hover {
            border-color: rgba(244, 63, 94, 0.55);
            box-shadow: 0 16px 36px -6px rgba(244, 63, 94, 0.18);
            transform: translateY(-2px);
        }

        .card-glow-cyan {
            background: linear-gradient(135deg, #ffffff 0%, #ecfeff 100%);
            border: 1.5px solid rgba(6, 182, 212, 0.28);
            box-shadow: 0 10px 30px -5px rgba(6, 182, 212, 0.10), 0 2px 6px rgba(15, 23, 42, 0.04);
            transition: all 0.3s ease;
        }
        .card-glow-cyan:hover {
            border-color: rgba(6, 182, 212, 0.55);
            box-shadow: 0 16px 36px -6px rgba(6, 182, 212, 0.18);
            transform: translateY(-2px);
        }

        /* Modern UI Switch Controls */
        .wp-toggle-switch {
            width: 46px;
            height: 24px;
            background: #10b981;
            border-radius: 9999px;
            position: relative;
            box-shadow: inset 0 2px 4px rgba(0,0,0,0.1), 0 0 12px rgba(16, 185, 129, 0.35);
            display: inline-flex;
            align-items: center;
            padding: 2px;
            transition: all 0.3s ease;
        }
        .wp-toggle-switch .switch-dot {
            width: 20px;
            height: 20px;
            background: #ffffff;
            border-radius: 9999px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.25);
            transform: translateX(-22px);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .wp-toggle-switch-off {
            background: #cbd5e1;
            box-shadow: inset 0 2px 4px rgba(0,0,0,0.1);
        }
        .wp-toggle-switch-off .switch-dot {
            transform: translateX(0);
        }

        /* Tech Diagnostic Terminal */
        .tech-terminal {
            background: #090d16;
            border: 1px solid #1e293b;
            border-radius: 18px;
            box-shadow: 0 20px 40px -10px rgba(0,0,0,0.5), inset 0 1px 0 rgba(255,255,255,0.1);
            font-family: monospace;
            color: #94a3b8;
        }

        /* Circuit Connection Line */
        .circuit-step-badge {
            width: 38px;
            height: 38px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 900;
            box-shadow: 0 4px 14px rgba(0,0,0,0.15);
        }

        .poster-container {
            max-width: 1260px;
            margin: 0 auto;
            background: #ffffff;
            border: 1px solid #cbd5e1;
            box-shadow: 0 25px 80px -10px rgba(15, 23, 42, 0.18), 0 0 50px rgba(99, 102, 241, 0.15);
            position: relative;
        }

        /* Slider Thumb EXACT Boundary Positioning - Border between Green/Progress and Empty Track */
        .poster-slider-thumb-boundary {
            position: absolute !important;
            top: 4px !important;
            width: 36px !important;
            height: 36px !important;
            border-radius: 9999px !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            font-size: 14px !important;
            font-weight: 900 !important;
            z-index: 25 !important;
            cursor: pointer !important;
            transition: all 0.2s ease !important;
            /* When progress has width W%, thumb right is calc(W% - 18px), perfectly halved on the frontier */
        }

        /* Vibrant Themed Captcha Boxes */
        .poster-captcha-box.theme-crimson {
            background: #23040e !important;
            border: 1.5px solid #e11d48 !important;
            color: #ffe4e6 !important;
            box-shadow: 0 8px 24px rgba(225, 29, 72, 0.25) !important;
        }

        .poster-captcha-box.theme-galaxy {
            background: #110524 !important;
            border: 1.5px solid #a855f7 !important;
            color: #f3e8ff !important;
            box-shadow: 0 8px 24px rgba(168, 85, 247, 0.25) !important;
        }

        .poster-captcha-box.theme-emerald {
            background: #021a12 !important;
            border: 1.5px solid #059669 !important;
            color: #ecfdf5 !important;
            box-shadow: 0 8px 24px rgba(5, 150, 105, 0.25) !important;
        }

        .poster-captcha-box.theme-gold {
            background: #171307 !important;
            border: 1.5px solid #d97706 !important;
            color: #fef3c7 !important;
            box-shadow: 0 8px 24px rgba(217, 119, 6, 0.25) !important;
        }

        .poster-captcha-box.theme-amber {
            background: #fffbeb !important;
            border: 1.5px solid #f59e0b !important;
            color: #78350f !important;
        }

        .poster-captcha-box.theme-navy {
            background: #071228 !important;
            border: 1.5px solid #2563eb !important;
            color: #eff6ff !important;
            box-shadow: 0 8px 24px rgba(37, 99, 235, 0.25) !important;
        }

        /* Ergonomic Ambient Lighting Orbs for Anti-Glare and Eye Strain Prevention */
        .ambient-glow-orb {
            position: absolute;
            border-radius: 9999px;
            filter: blur(80px);
            pointer-events: none;
            z-index: 0;
            opacity: 0.55;
            transition: all 0.5s ease;
        }

        .eye-comfort-gradient {
            background: linear-gradient(135deg, rgba(238, 242, 255, 0.6) 0%, rgba(240, 253, 250, 0.6) 50%, rgba(254, 243, 199, 0.4) 100%);
        }

        .badge-clean-emerald {
            background: #ecfdf5;
            border: 1px solid #a7f3d0;
            color: #065f46;
        }

        .badge-clean-indigo {
            background: #eef2ff;
            border: 1px solid #c7d2fe;
            color: #3730a3;
        }

        .badge-clean-amber {
            background: #fffbeb;
            border: 1px solid #fde68a;
            color: #92400e;
        }

        .badge-clean-purple {
            background: #faf5ff;
            border: 1px solid #e9d5ff;
            color: #6b21a8;
        }

        .badge-clean-rose {
            background: #fff1f2;
            border: 1px solid #fecdd3;
            color: #9f1239;
        }

        .badge-clean-cyan {
            background: #ecfeff;
            border: 1px solid #a5f3fc;
            color: #155e75;
        }

        .clean-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            box-shadow: 0 4px 18px -2px rgba(15, 23, 42, 0.05);
            transition: all 0.25s ease;
        }

        .clean-card:hover {
            box-shadow: 0 10px 28px -4px rgba(15, 23, 42, 0.09);
            border-color: #cbd5e1;
        }

        .sub-box {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
        }

        .section-alt {
            background: #f8fafc;
            border-top: 1px solid #e2e8f0;
            border-bottom: 1px solid #e2e8f0;
        }

        /* Demo-exact Captcha Container Adaptations for Poster Showcase */
        .poster-captcha-box {
            background: #ffffff !important;
            border: 1px solid #cbd5e1 !important;
            box-shadow: 0 4px 12px rgba(15, 23, 42, 0.06) !important;
            border-radius: 14px !important;
            padding: 14px !important;
            width: 100% !important;
            margin: 0 !important;
        }

        .poster-captcha-box.theme-slate {
            background: #0f172a !important;
            border-color: #334155 !important;
            color: #f8fafc !important;
        }

        .poster-captcha-box.theme-navy {
            background: #0b132b !important;
            border-color: #2563eb !important;
            color: #f8fafc !important;
        }

        .poster-captcha-box.theme-indigo {
            background: #08071a !important;
            border-color: #4f46e5 !important;
            color: #f8fafc !important;
        }

        .poster-captcha-box.theme-amber {
            background: #fffbeb !important;
            border-color: #fcd34d !important;
            color: #78350f !important;
        }

        .poster-captcha-box.theme-emerald {
            background: #021a12 !important;
            border-color: #059669 !important;
            color: #ecfdf5 !important;
        }

        .poster-captcha-box.theme-crimson {
            background: #1c050d !important;
            border-color: #e11d48 !important;
            color: #fff1f2 !important;
        }

        .poster-captcha-box.theme-gold {
            background: #141003 !important;
            border-color: #d97706 !important;
            color: #fef3c7 !important;
        }

        .poster-captcha-box.theme-cyan {
            background: #041c2c !important;
            border-color: #0891b2 !important;
            color: #cffafe !important;
        }

        .poster-captcha-box.theme-amethyst {
            background: #190933 !important;
            border-color: #9333ea !important;
            color: #f3e8ff !important;
        }

        /* ========================================================================= */
        /* ROYAL NAVY STAGE & DUAL FLOATING LUXURY CARDS */
        /* ========================================================================= */
        .royal-navy-stage {
            background-color: #070e20;
            background-image: 
                radial-gradient(circle at 12% 18%, rgba(29, 78, 216, 0.55) 0%, transparent 48%),
                radial-gradient(circle at 88% 82%, rgba(99, 102, 241, 0.50) 0%, transparent 50%),
                radial-gradient(circle at 50% 50%, rgba(14, 165, 233, 0.28) 0%, transparent 55%),
                radial-gradient(circle at 82% 16%, rgba(236, 72, 153, 0.22) 0%, transparent 40%),
                radial-gradient(circle at 20% 80%, rgba(16, 185, 129, 0.20) 0%, transparent 42%),
                #070e20;
            position: relative;
        }

        /* Luxury Floating Cards Elevation & Luminous Perimeter */
        .floating-luxury-card-1 {
            background: linear-gradient(155deg, rgba(15, 23, 42, 0.94) 0%, rgba(17, 30, 68, 0.95) 55%, rgba(8, 14, 30, 0.97) 100%) !important;
            border: 1.5px solid rgba(129, 140, 248, 0.40) !important;
            box-shadow: 0 30px 65px -15px rgba(2, 6, 23, 0.90), 0 0 40px rgba(99, 102, 241, 0.30), inset 0 1px 1px rgba(255, 255, 255, 0.15) !important;
            backdrop-filter: blur(24px) !important;
            transform: translateY(-6px);
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .floating-luxury-card-1:hover {
            transform: translateY(-10px);
            box-shadow: 0 35px 75px -15px rgba(2, 6, 23, 0.95), 0 0 55px rgba(99, 102, 241, 0.45), inset 0 1px 1px rgba(255, 255, 255, 0.25) !important;
            border-color: rgba(165, 180, 252, 0.6) !important;
        }

        .floating-luxury-card-2 {
            background: linear-gradient(155deg, rgba(15, 23, 42, 0.95) 0%, rgba(13, 27, 62, 0.96) 50%, rgba(8, 14, 30, 0.98) 100%) !important;
            border: 1.5px solid rgba(96, 165, 250, 0.45) !important;
            box-shadow: 0 30px 65px -15px rgba(2, 6, 23, 0.90), 0 0 45px rgba(59, 130, 246, 0.32), inset 0 1px 1px rgba(255, 255, 255, 0.15) !important;
            backdrop-filter: blur(24px) !important;
            transform: translateY(-4px);
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .floating-luxury-card-2:hover {
            transform: translateY(-8px);
            box-shadow: 0 35px 75px -15px rgba(2, 6, 23, 0.95), 0 0 60px rgba(59, 130, 246, 0.48), inset 0 1px 1px rgba(255, 255, 255, 0.25) !important;
            border-color: rgba(147, 197, 253, 0.65) !important;
        }

        /* Subtle Animated Radar Sweep */
        @keyframes guardifyRadarSweepFast {
            0% { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
        }

        .radar-sweep-beam {
            animation: guardifyRadarSweepFast 2.2s cubic-bezier(0.4, 0, 0.2, 1) infinite;
        }

        @keyframes pulseGlowSlow {
            0%, 100% { opacity: 0.4; transform: scale(1); }
            50% { opacity: 0.7; transform: scale(1.05); }
        }

        .glow-pulse {
            animation: pulseGlowSlow 4s ease-in-out infinite;
        }
    </style>
</head>
<body class="py-6 px-3 sm:px-6">

    <!-- Main Self-Contained Poster Wrapper (Perfect for Screenshotting & Product Description Presentation) -->
    <div class="poster-container rounded-3xl overflow-hidden shadow-2xl relative">

        <!-- Ergonomic Ambient Lighting Orbs for Anti-Glare and Eye Comfort Across Page -->
        <div class="ambient-glow-orb bg-indigo-500/10 w-96 h-96 -top-20 -left-20"></div>
        <div class="ambient-glow-orb bg-emerald-500/10 w-96 h-96 top-1/4 -right-20"></div>
        <div class="ambient-glow-orb bg-amber-500/10 w-96 h-96 top-2/4 -left-20"></div>
        <div class="ambient-glow-orb bg-cyan-500/10 w-96 h-96 top-3/4 -right-20"></div>

        <!-- ========================================================================= -->
        <!-- 1. PRODUCT BRANDING TOP HEADER (LIGHT MODE - OFFICIAL RASTCHIN POSTER) -->
        <!-- ========================================================================= -->
        <header class="p-8 sm:p-14 bg-gradient-to-b from-indigo-50/90 via-white to-slate-50 border-b border-slate-200 text-center relative overflow-hidden">
            <!-- Subtle Ergonomic Ambient Background Accents -->
            <div class="absolute -top-24 -left-24 w-80 h-80 bg-indigo-500/10 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute -top-24 -right-24 w-80 h-80 bg-emerald-500/10 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-amber-500/5 rounded-full blur-3xl pointer-events-none"></div>

            <div class="relative z-10 max-w-4xl mx-auto space-y-6">
                
                <!-- Category & Exclusive Distribution Badge -->
                <div class="flex flex-wrap items-center justify-center gap-3">
                    <span class="badge-clean-emerald px-4 py-1.5 rounded-full text-xs font-black flex items-center gap-2 shadow-sm">
                        <i class="fas fa-crown text-amber-500"></i>
                        <span>عرضه رسمی و انحصاری در مارکت راست‌چین (RTL-Theme)</span>
                    </span>
                    <span class="badge-clean-indigo px-4 py-1.5 rounded-full text-xs font-black flex items-center gap-2 shadow-sm">
                        <i class="fas fa-shield-halved text-indigo-600"></i>
                        <span>نسخه تجاری ۴.۰۰ پرو (Guardify Pro v4.00)</span>
                    </span>
                    <span class="badge-clean-amber px-4 py-1.5 rounded-full text-xs font-black flex items-center gap-2 shadow-sm">
                        <i class="fas fa-star text-amber-500"></i>
                        <span>امتیاز ۵.۰ از ۵ • رضایت ۱۰۰٪ خریداران راست‌چین</span>
                    </span>
                </div>

                <!-- Eye-Comfort Ergonomic Visual Badge -->
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-cyan-50 border border-cyan-200 text-cyan-900 text-xs font-bold shadow-sm">
                    <i class="fas fa-eye text-cyan-600"></i>
                    <span>طراحی ارگونومیک با افکت‌های نوری ضد خستگی چشم (Anti-Eye-Strain FX) و کنتراست بهینه</span>
                </div>

                <!-- Product Master Brand Name -->
                <div class="flex items-center justify-center gap-4">
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-tr from-indigo-600 to-indigo-500 flex items-center justify-center shadow-lg shadow-indigo-500/30 text-white text-3xl">
                        <i class="fas fa-shield-halved"></i>
                    </div>
                    <div class="text-right">
                        <h1 class="text-3xl sm:text-5xl font-black text-slate-900 tracking-tight">
                            گاردفای <span class="bg-gradient-to-r from-indigo-600 via-purple-600 to-amber-600 bg-clip-text text-transparent">پرو</span>
                        </h1>
                        <span class="text-xs sm:text-sm text-indigo-700 font-bold tracking-wider">Guardify Pro • Native Offline Captcha & WP-Login Styler</span>
                    </div>
                </div>

                <!-- Catchy Persuasive Headline -->
                <h2 class="text-xl sm:text-3xl font-black text-slate-900 leading-snug">
                    سامانه کپچای ۱۰۰٪ بومی، کاملاً آفلاین و استودیوی بازطراحی لوکس صفحه ورود وردپرس
                </h2>

                <p class="text-slate-700 text-xs sm:text-base leading-relaxed max-w-3xl mx-auto font-medium">
                    پایان قطعی‌های مکرر Google reCAPTCHA و نجات فروشگاه‌های ووکامرسی در زمان اختلال اینترنت بین‌الملل و اینترنت ملی (نت ملی)؛ با استایلر دو کارت معلق لوکس صفحه لاگین در تم سرمه‌ای شاهانه، بیش از ۳۵ تم متنوع کپچا، سوییچر هوشمند Failover و رادار ضد نفوذ Brute-Force.
                </p>

                <!-- Technical Compatibility Badges -->
                <div class="flex flex-wrap items-center justify-center gap-2.5 pt-2 text-xs font-bold">
                    <span class="px-3.5 py-1.5 rounded-xl bg-white border border-slate-200 text-slate-800 shadow-sm flex items-center gap-1.5">
                        <i class="fab fa-wordpress text-indigo-600"></i> سازگار با وردپرس ۶.x
                    </span>
                    <span class="px-3.5 py-1.5 rounded-xl bg-white border border-slate-200 text-slate-800 shadow-sm flex items-center gap-1.5">
                        <i class="fas fa-cart-shopping text-emerald-600"></i> ووکامرس ۴ الی ۹
                    </span>
                    <span class="px-3.5 py-1.5 rounded-xl bg-white border border-slate-200 text-slate-800 shadow-sm flex items-center gap-1.5">
                        <i class="fas fa-mobile-screen text-amber-600"></i> افزونه دیجیتس (Digits)
                    </span>
                    <span class="px-3.5 py-1.5 rounded-xl bg-white border border-slate-200 text-slate-800 shadow-sm flex items-center gap-1.5">
                        <i class="fas fa-bolt text-amber-500"></i> لایت‌اسپید کش و راکت
                    </span>
                    <span class="px-3.5 py-1.5 rounded-xl bg-white border border-slate-200 text-slate-800 shadow-sm flex items-center gap-1.5">
                        <i class="fab fa-php text-purple-600"></i> PHP 7.4 تا 8.3+
                    </span>
                </div>

            </div>
        </header>

        <!-- ========================================================================= -->
        <!-- 2. FOUR PILLARS OF PERSUASION (INNOVATIVE TELEMETRY DECK & POWER GAUGES) -->
        <!-- ========================================================================= -->
        <section class="p-8 sm:p-12 bg-tech-grid border-b border-slate-200 relative overflow-hidden">
            <!-- Glowing Background Mesh Orbs -->
            <div class="absolute -top-10 -left-10 w-72 h-72 bg-indigo-500/15 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute -bottom-10 -right-10 w-72 h-72 bg-emerald-500/15 rounded-full blur-3xl pointer-events-none"></div>

            <div class="relative z-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                
                <!-- Metric Gauge 1: Speed -->
                <div class="p-6 rounded-3xl card-glow-emerald relative overflow-hidden flex flex-col justify-between space-y-4">
                    <div class="flex items-center justify-between">
                        <span class="text-[10px] font-mono font-black px-2 py-0.5 rounded-full bg-emerald-100 text-emerald-800 border border-emerald-300">
                            CORE LATENCY
                        </span>
                        <div class="w-9 h-9 rounded-xl bg-emerald-600 text-white flex items-center justify-center text-sm shadow-md shadow-emerald-500/25">
                            <i class="fas fa-bolt"></i>
                        </div>
                    </div>
                    <div class="space-y-1">
                        <div class="flex items-baseline gap-1">
                            <span class="text-4xl font-black text-emerald-800 tracking-tight">۰.۲</span>
                            <span class="text-base font-black text-emerald-600 font-mono">ms</span>
                        </div>
                        <h4 class="text-xs text-slate-900 font-black">پردازش فوق سریع در رم هاست</h4>
                        <p class="text-[11.5px] text-slate-600 font-medium leading-relaxed">بدون حتی ۱ میلی‌ثانیه معطلی کاربر یا ارسال درخواست به سرورهای خارجی.</p>
                    </div>
                    <!-- Mini visual telemetry bar -->
                    <div class="pt-2 border-t border-emerald-100">
                        <div class="flex justify-between text-[10px] text-emerald-800 font-bold mb-1">
                            <span>سرعت لود</span>
                            <span>۹۹.۹٪ بهینه‌تر از گوگل</span>
                        </div>
                        <div class="w-full h-1.5 rounded-full bg-emerald-100 overflow-hidden">
                            <div class="h-full bg-gradient-to-l from-emerald-600 to-teal-400 w-[98%] rounded-full"></div>
                        </div>
                    </div>
                </div>

                <!-- Metric Gauge 2: 100% Offline National Net -->
                <div class="p-6 rounded-3xl card-glow-indigo relative overflow-hidden flex flex-col justify-between space-y-4">
                    <div class="flex items-center justify-between">
                        <span class="text-[10px] font-mono font-black px-2 py-0.5 rounded-full bg-indigo-100 text-indigo-800 border border-indigo-300">
                            ZERO CLOUD PING
                        </span>
                        <div class="w-9 h-9 rounded-xl bg-indigo-600 text-white flex items-center justify-center text-sm shadow-md shadow-indigo-500/25">
                            <i class="fas fa-network-wired"></i>
                        </div>
                    </div>
                    <div class="space-y-1">
                        <div class="flex items-baseline gap-1">
                            <span class="text-4xl font-black text-indigo-800 tracking-tight">۱۰۰٪</span>
                            <span class="text-sm font-black text-indigo-600">آفلاین</span>
                        </div>
                        <h4 class="text-xs text-slate-900 font-black">پایداری فولادین در نت ملی</h4>
                        <p class="text-[11.5px] text-slate-600 font-medium leading-relaxed">صفر وابستگی به سرورهای گوگل و کلودفلر؛ ضد تحریم و ضد فیلترینگ تضمینی.</p>
                    </div>
                    <!-- Mini visual telemetry bar -->
                    <div class="pt-2 border-t border-indigo-100">
                        <div class="flex justify-between text-[10px] text-indigo-800 font-bold mb-1">
                            <span>پایداری شبکه ملی</span>
                            <span class="text-indigo-600 font-mono">100% UPTIME</span>
                        </div>
                        <div class="w-full h-1.5 rounded-full bg-indigo-100 overflow-hidden">
                            <div class="h-full bg-gradient-to-l from-indigo-600 to-blue-400 w-full rounded-full"></div>
                        </div>
                    </div>
                </div>

                <!-- Metric Gauge 3: Zero Checkout Drop -->
                <div class="p-6 rounded-3xl card-glow-amber relative overflow-hidden flex flex-col justify-between space-y-4">
                    <div class="flex items-center justify-between">
                        <span class="text-[10px] font-mono font-black px-2 py-0.5 rounded-full bg-amber-100 text-amber-900 border border-amber-300">
                            SALES SHIELD
                        </span>
                        <div class="w-9 h-9 rounded-xl bg-amber-500 text-slate-950 flex items-center justify-center text-sm shadow-md shadow-amber-500/25">
                            <i class="fas fa-cart-shopping"></i>
                        </div>
                    </div>
                    <div class="space-y-1">
                        <div class="flex items-baseline gap-1">
                            <span class="text-4xl font-black text-amber-800 tracking-tight">۰٪</span>
                            <span class="text-sm font-black text-amber-600">ریزش فروش</span>
                        </div>
                        <h4 class="text-xs text-slate-900 font-black">نجات سبد خرید ووکامرس</h4>
                        <p class="text-[11.5px] text-slate-600 font-medium leading-relaxed">حذف خطای لود نشدن کپچا در تسویه‌حساب و افزایش قطعی نرخ تبدیل سفارشات.</p>
                    </div>
                    <!-- Mini visual telemetry bar -->
                    <div class="pt-2 border-t border-amber-100">
                        <div class="flex justify-between text-[10px] text-amber-800 font-bold mb-1">
                            <span>تکمیل موفق خرید</span>
                            <span>بدون بن‌بست</span>
                        </div>
                        <div class="w-full h-1.5 rounded-full bg-amber-100 overflow-hidden">
                            <div class="h-full bg-gradient-to-l from-amber-500 to-yellow-400 w-full rounded-full"></div>
                        </div>
                    </div>
                </div>

                <!-- Metric Gauge 4: Lightweight Payload -->
                <div class="p-6 rounded-3xl card-glow-purple relative overflow-hidden flex flex-col justify-between space-y-4">
                    <div class="flex items-center justify-between">
                        <span class="text-[10px] font-mono font-black px-2 py-0.5 rounded-full bg-purple-100 text-purple-900 border border-purple-300">
                            MICRO PAYLOAD
                        </span>
                        <div class="w-9 h-9 rounded-xl bg-purple-600 text-white flex items-center justify-center text-sm shadow-md shadow-purple-500/25">
                            <i class="fas fa-feather"></i>
                        </div>
                    </div>
                    <div class="space-y-1">
                        <div class="flex items-baseline gap-1">
                            <span class="text-4xl font-black text-purple-800 tracking-tight">&lt; ۱۵</span>
                            <span class="text-sm font-black text-purple-600 font-mono">KB</span>
                        </div>
                        <h4 class="text-xs text-slate-900 font-black">فوق‌العاده سبک و بهینه</h4>
                        <p class="text-[11.5px] text-slate-600 font-medium leading-relaxed">بیش از ۳۰ برابر سبک‌تر از گوگل با کسب امتیاز ۱۰۰ سبز در گوگل لایت‌هاوس.</p>
                    </div>
                    <!-- Mini visual telemetry bar -->
                    <div class="pt-2 border-t border-purple-100">
                        <div class="flex justify-between text-[10px] text-purple-800 font-bold mb-1">
                            <span>امتیاز لایت‌هاوس</span>
                            <span class="text-emerald-600 font-mono font-black">100 / 100</span>
                        </div>
                        <div class="w-full h-1.5 rounded-full bg-purple-100 overflow-hidden">
                            <div class="h-full bg-gradient-to-l from-purple-600 to-pink-500 w-full rounded-full"></div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- ========================================================================= -->
        <!-- 3. CRISIS VS SOLUTION (LIVE DIAGNOSTIC TERMINAL & ARCHITECTURE RESILIENCE) -->
        <!-- ========================================================================= -->
        <section class="p-8 sm:p-14 bg-mesh-radial-2 border-b border-slate-200 space-y-10 relative overflow-hidden">
            <!-- Anti-Eye-Strain Ambient Glow Behind Section -->
            <div class="absolute -top-24 -left-24 w-96 h-96 bg-indigo-500/12 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute -bottom-24 -right-24 w-96 h-96 bg-emerald-500/12 rounded-full blur-3xl pointer-events-none"></div>

            <div class="text-center max-w-3xl mx-auto space-y-3 relative z-10">
                <span class="badge-clean-amber px-4 py-1.5 rounded-full text-xs font-black inline-block shadow-sm">
                    ⚠️ مقایسه معماری زنده در زمان اختلال اینترنت بین‌الملل و شبکه ملی
                </span>
                <h3 class="text-2xl sm:text-3xl font-black text-slate-900">
                    بحران شکست کپچاهای ابری در برابر پایداری بومی گاردفای پرو
                </h3>
                <p class="text-slate-700 text-xs sm:text-sm leading-relaxed font-medium">
                    مشاهده تفاوت فنی رفتار سایت هنگام استفاده از سرویس‌های خارجی نظیر Google reCAPTCHA در مقایسه با موتور آفلاین Guardify Pro:
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 relative z-10">
                
                <!-- Crisis Diagnostic Terminal -->
                <div class="p-7 rounded-3xl bg-gradient-to-b from-rose-50/95 to-red-100/70 border-2 border-rose-300 space-y-5 shadow-xl shadow-rose-500/10 relative overflow-hidden flex flex-col justify-between">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between pb-3 border-b border-rose-200">
                            <div class="flex items-center gap-3">
                                <div class="w-11 h-11 rounded-2xl bg-gradient-to-tr from-rose-600 to-red-500 text-white flex items-center justify-center text-xl shadow-md shadow-rose-500/30">
                                    <i class="fab fa-google"></i>
                                </div>
                                <div>
                                    <h4 class="font-black text-sm text-rose-950">معماری وابسته: Google reCAPTCHA</h4>
                                    <span class="text-[10px] text-rose-700 font-mono font-bold">Cloud Dependency Failure</span>
                                </div>
                            </div>
                            <span class="bg-rose-200 text-rose-900 text-[11px] font-black px-3 py-1 rounded-xl shadow-sm border border-rose-300 flex items-center gap-1">
                                <span class="w-2 h-2 rounded-full bg-rose-600 animate-ping"></span>
                                مسدود / قطعی
                            </span>
                        </div>

                        <!-- Live Error Terminal Simulator -->
                        <div class="tech-terminal p-4 text-xs space-y-2 text-left" dir="ltr">
                            <div class="flex items-center justify-between text-[10px] text-slate-500 pb-1.5 border-b border-slate-800">
                                <span class="text-rose-400 font-bold">● CLOUD NETWORK STATUS</span>
                                <span class="text-slate-400">TIMEOUT</span>
                            </div>
                            <div class="text-slate-400 text-[11px] font-mono leading-relaxed space-y-1">
                                <p><span class="text-indigo-400">CONNECT</span> google.com:443 ... <span class="text-rose-400 font-bold">FAILED</span></p>
                                <p class="text-rose-400 font-black">ERR_CONNECTION_TIMED_OUT (9999ms)</p>
                                <p class="text-amber-400 text-[10.5px]">⚠️ HTTP 504 Gateway Timeout: Script Not Loaded</p>
                                <p class="text-slate-500 text-[10.5px]">Result: WooCommerce Checkout Form Frozen ❌</p>
                            </div>
                        </div>

                        <ul class="space-y-2.5 text-xs text-rose-950 leading-relaxed font-medium">
                            <li class="flex items-start gap-2">
                                <i class="fas fa-circle-xmark text-rose-600 mt-0.5 shrink-0 text-sm"></i>
                                <span><strong>قفل شدن دکمه ثبت سفارش:</strong> لود نشدن اسکریپت در زمان نت ملی و سوختن سبدهای خرید.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fas fa-circle-xmark text-rose-600 mt-0.5 shrink-0 text-sm"></i>
                                <span><strong>چالش‌های تصویری کلافه‌کننده:</strong> حل معماهای اتوبوس و چراغ راهنما که نرخ تبدیل را نابود می‌کند.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fas fa-circle-xmark text-rose-600 mt-0.5 shrink-0 text-sm"></i>
                                <span><strong>سنگینی شدید (> ۵۰۰ KB):</strong> ارسال ده‌ها پکت ردیابی به خارج و کندی باز شدن سایت.</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Solution Diagnostic Terminal -->
                <div class="p-7 rounded-3xl bg-gradient-to-b from-emerald-50/95 to-teal-100/70 border-2 border-emerald-300 space-y-5 shadow-xl shadow-emerald-500/10 relative overflow-hidden flex flex-col justify-between">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between pb-3 border-b border-emerald-200">
                            <div class="flex items-center gap-3">
                                <div class="w-11 h-11 rounded-2xl bg-gradient-to-tr from-emerald-600 to-teal-500 text-white flex items-center justify-center text-xl shadow-md shadow-emerald-500/30">
                                    <i class="fas fa-shield-halved"></i>
                                </div>
                                <div>
                                    <h4 class="font-black text-sm text-emerald-950">معماری بومی: گاردفای پرو (Guardify Pro)</h4>
                                    <span class="text-[10px] text-emerald-700 font-mono font-bold">100% Native Host Engine</span>
                                </div>
                            </div>
                            <span class="bg-emerald-200 text-emerald-900 text-[11px] font-black px-3 py-1 rounded-xl shadow-sm border border-emerald-300 flex items-center gap-1">
                                <span class="w-2 h-2 rounded-full bg-emerald-600"></span>
                                پایداری ۱۰۰٪
                            </span>
                        </div>

                        <!-- Live Success Terminal Simulator -->
                        <div class="tech-terminal p-4 text-xs space-y-2 text-left" dir="ltr">
                            <div class="flex items-center justify-between text-[10px] text-slate-500 pb-1.5 border-b border-slate-800">
                                <span class="text-emerald-400 font-bold">● LOCAL HOST ENGINE</span>
                                <span class="text-emerald-400 font-mono">0.2ms</span>
                            </div>
                            <div class="text-slate-400 text-[11px] font-mono leading-relaxed space-y-1">
                                <p><span class="text-indigo-400">EXEC</span> /guardify/local-engine.php ... <span class="text-emerald-400 font-bold">200 OK</span></p>
                                <p class="text-emerald-400 font-black">LOCAL SESSION VERIFIED (0.2ms)</p>
                                <p class="text-cyan-400 text-[10.5px]">⚡ Zero External Network Calls • 100% Intranet Proof</p>
                                <p class="text-slate-300 text-[10.5px]">Result: Instant Order Completion & Login Verified ✅</p>
                            </div>
                        </div>

                        <ul class="space-y-2.5 text-xs text-emerald-950 leading-relaxed font-medium">
                            <li class="flex items-start gap-2">
                                <i class="fas fa-circle-check text-emerald-600 mt-0.5 shrink-0 text-sm"></i>
                                <span><strong>پایداری تضمینی در اینترنت ملی:</strong> تمام پردازش‌ها در هاست شما انجام شده و هیچ خطایی رخ نمی‌دهد.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fas fa-circle-check text-emerald-600 mt-0.5 shrink-0 text-sm"></i>
                                <span><strong>احراز هویت ارگونومیک و سریع:</strong> اسلایدر پازلی شیک، جمع‌های یک‌خطی ساده و بدون فریب چشم.</span>
                            </li>
                            <li class="flex items-start gap-2">
                                <i class="fas fa-circle-check text-emerald-600 mt-0.5 shrink-0 text-sm"></i>
                                <span><strong>فوق‌العاده کم‌حجم (&lt; ۱۵ KB):</strong> سازگار با افزونه‌های کشینگ لایت‌اسپید و راکت بدون باگ توکن.</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

        </section>

        <!-- ========================================================================= -->
        <!-- 4. VISUAL CAPTCHA TYPES (35+ THEMES & SMART HUMAN INSPECTION FX) -->
        <!-- ========================================================================= -->
        <section class="p-8 sm:p-14 bg-tech-grid border-b border-slate-200 space-y-10 relative overflow-hidden">
            <!-- Subtle Eye-Relief Ambient Light Flare -->
            <div class="absolute -top-24 right-1/4 w-96 h-96 bg-indigo-500/10 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute -bottom-24 left-1/4 w-96 h-96 bg-cyan-500/10 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-amber-500/8 rounded-full blur-3xl pointer-events-none"></div>
            
            <div class="text-center max-w-3xl mx-auto space-y-3 relative z-10">
                <span class="badge-clean-indigo px-4 py-1.5 rounded-full text-xs font-black inline-block shadow-sm">
                    🎨 بیش از ۳۵ تم و استایل آماده برای انواع کپچا (35+ Color Themes & Styles)
                </span>
                <h3 class="text-2xl sm:text-3xl font-black text-slate-900">
                    تنوع خیره‌کننده رنگ‌ها و ظاهر انواع کپچا در تم‌های مختلف
                </h3>
                <p class="text-slate-700 text-xs sm:text-sm font-medium leading-relaxed">
                    گاردفای پرو مجهز به <strong>بیش از ۳۵ تم رنگی و جلوه نوری آماده</strong> است که با یک کلیک با هر نوع قالب (شرکتی، فروشگاهی، دارک‌مود، لایت و نئونی) منطبق می‌شوند؛ با پایش بیومتریک و تله‌متری بدون نیاز به حل معماهای خسته‌کننده:
                </p>
            </div>

            <!-- Colorful Palette Chips Emphasizing 35+ Themes with Vivid Swatches -->
            <div class="relative z-10 max-w-5xl mx-auto space-y-3">
                <div class="flex items-center justify-between text-xs px-2 font-bold text-slate-700">
                    <span class="flex items-center gap-1.5">
                        <i class="fas fa-palette text-indigo-600"></i>
                        نمونه‌هایی از پالت‌های آماده در ۳۵+ تم افزونه:
                    </span>
                    <span class="badge-clean-emerald px-3 py-1 rounded-full text-[11px] font-black">
                        ✓ پشتیبانی از انتخاب رنگ دلخواه HEX در پنل وردپرس
                    </span>
                </div>

                <div class="flex flex-wrap items-center justify-center gap-2 pb-2 text-xs font-bold">
                    <span class="px-3 py-1.5 rounded-xl bg-blue-950 text-blue-100 border border-blue-700 shadow-sm flex items-center gap-1.5">
                        <span class="w-3 h-3 rounded-full bg-blue-500 ring-2 ring-blue-300"></span> سرمه‌ای شاهانه (Royal Navy)
                    </span>
                    <span class="px-3 py-1.5 rounded-xl bg-slate-900 text-white border border-slate-700 shadow-sm flex items-center gap-1.5">
                        <span class="w-3 h-3 rounded-full bg-slate-400 ring-2 ring-slate-500"></span> دارک اسلیت متالیک
                    </span>
                    <span class="px-3 py-1.5 rounded-xl bg-emerald-950 text-emerald-100 border border-emerald-700 shadow-sm flex items-center gap-1.5">
                        <span class="w-3 h-3 rounded-full bg-emerald-400 ring-2 ring-emerald-300"></span> زمردی نئونی (Cyber Emerald)
                    </span>
                    <span class="px-3 py-1.5 rounded-xl bg-amber-50 text-amber-950 border border-amber-300 shadow-sm flex items-center gap-1.5">
                        <span class="w-3 h-3 rounded-full bg-amber-500 ring-2 ring-amber-300"></span> کهربایی و طلایی لوکس
                    </span>
                    <span class="px-3 py-1.5 rounded-xl bg-rose-950 text-rose-100 border border-rose-800 shadow-sm flex items-center gap-1.5">
                        <span class="w-3 h-3 rounded-full bg-rose-500 ring-2 ring-rose-300"></span> یاقوت سرخ آتشین
                    </span>
                    <span class="px-3 py-1.5 rounded-xl bg-cyan-950 text-cyan-100 border border-cyan-800 shadow-sm flex items-center gap-1.5">
                        <span class="w-3 h-3 rounded-full bg-cyan-400 ring-2 ring-cyan-300"></span> یخی بلورین قطبی (Nordic Ice)
                    </span>
                    <span class="px-3 py-1.5 rounded-xl bg-purple-950 text-purple-100 border border-purple-700 shadow-sm flex items-center gap-1.5">
                        <span class="w-3 h-3 rounded-full bg-purple-400 ring-2 ring-purple-300"></span> بنفش آمتیست کهکشانی
                    </span>
                    <span class="px-3 py-1.5 rounded-xl bg-stone-900 text-yellow-100 border border-yellow-700 shadow-sm flex items-center gap-1.5">
                        <span class="w-3 h-3 rounded-full bg-yellow-400 ring-2 ring-yellow-200"></span> طلای ۲۴ عیار خالص (VIP)
                    </span>
                    <span class="px-3 py-1.5 rounded-xl bg-slate-100 text-slate-800 border border-slate-300 shadow-sm flex items-center gap-1.5">
                        <span class="w-3 h-3 rounded-full bg-indigo-600 ring-2 ring-indigo-300"></span> پلاتینیوم لایت سازمانی
                    </span>
                    <span class="px-3 py-1.5 rounded-xl bg-pink-950 text-pink-100 border border-pink-700 shadow-sm flex items-center gap-1.5">
                        <span class="w-3 h-3 rounded-full bg-pink-400 ring-2 ring-pink-300"></span> رز گلد اشرافی (Rose Gold)
                    </span>
                </div>
            </div>

            <!-- Grid of 6 Distinct Captcha Showcase Cards (1 Slider + 3 Math Levels + 1 Icon + 1 Word) -->
            <div class="relative z-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <!-- Sample 1: 1. Smart Slider Captcha in Cyber Emerald Theme with Smart Human Inspection FX -->
                <div class="p-6 rounded-3xl sub-box space-y-4 clean-card flex flex-col justify-between border-2 border-emerald-400 shadow-md relative overflow-hidden">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between text-xs pb-3 border-b border-slate-200">
                            <span class="font-black text-slate-900 flex items-center gap-1.5">
                                <i class="fas fa-sliders text-emerald-600 text-sm"></i>
                                ۱. کپچای کشیدنی اسلایدر (تم زمردی نئون)
                            </span>
                            <span class="badge-clean-emerald px-2.5 py-0.5 rounded-full text-[10px] font-black">Smart Slider FX</span>
                        </div>

                        <!-- Rendered with Cyber Emerald Theme + Smart Inspection FX -->
                        <div class="guardify-captcha-container guardify-theme-dark-slate guardify-font-inherit guardify-slider-wrap poster-captcha-box theme-emerald">
                            <div class="guardify-top-radar-track"><div class="guardify-top-radar-beam" style="background:linear-gradient(90deg,transparent,#10b981,transparent) !important; animation: guardifyRadarScan 2s ease-in-out infinite;"></div></div>
                            
                            <div class="guardify-slider-header" style="color:#d1fae5;display:flex;justify-content:space-between;align-items:center;font-size:12px;font-weight:700;margin-bottom:8px;">
                                <span class="guardify-slider-title" style="display:flex;align-items:center;gap:5px;">
                                    <i class="fas fa-shield-halved text-emerald-400"></i>
                                    👁️ پایش و بازرسی رفتار انسانی:
                                </span>
                                <span style="font-size:11px;color:#34d399;font-weight:900;" class="flex items-center gap-1">
                                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                                    انسان واقعی ✓
                                </span>
                            </div>

                            <!-- Slider Track with thumb placed EXACTLY on the boundary between green progress and empty space -->
                            <div class="guardify-slider-track mb-2.5" style="height:44px;background:#03281c !important;border:1.5px solid #059669 !important;border-radius:9999px;position:relative;display:flex;align-items:center;justify-content:center;overflow:hidden;">
                                <div class="guardify-slider-progress" style="position:absolute !important;top:0 !important;right:0 !important;bottom:0 !important;width:48% !important;background:linear-gradient(to left,#059669,#10b981) !important;"></div>
                                <span class="guardify-slider-hint" style="position:relative;z-index:10;font-size:11.5px;font-weight:800;color:#ecfdf5;">دستگیره را به چپ بکشید ←</span>
                                <!-- Thumb placed precisely on the boundary between green progress (48%) and empty space -->
                                <div class="poster-slider-thumb-boundary" style="right:calc(48% - 18px) !important;background:#ecfdf5 !important;color:#064e3b !important;border:2px solid #10b981 !important;box-shadow:0 0 16px rgba(16,185,129,0.7) !important;">←</div>
                            </div>

                            <!-- Live Telemetry Badges -->
                            <div class="p-2.5 rounded-xl bg-slate-900/95 border border-emerald-500/40 text-right space-y-1.5 text-[10px] text-slate-300">
                                <div class="flex items-center justify-between text-emerald-400 font-bold">
                                    <span>آنالیز انحنای طبیعی ماوس (Trajectory OK)</span>
                                    <span class="font-mono">تایید بیومتریک</span>
                                </div>
                                <div class="flex items-center justify-between text-cyan-300 font-bold">
                                    <span>سنجش ریزلرزش دست (Micro-Jitter)</span>
                                    <span class="font-mono">۰.۱۴ ثانیه</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-2 border-t border-slate-100 text-[11px] text-slate-600 leading-relaxed font-medium">
                        <strong>کپچای کشیدنی اسلایدر هوشمند:</strong> دستگیره در مرز بین رنگ سبز و فضای خالی، با احراز فوق‌سریع کمتر از ۱ ثانیه.
                    </div>
                </div>

                <!-- Sample 2: Math Level 1 (Addition) in Velvet Crimson / Ruby Theme (Single Line Box) -->
                <div class="p-6 rounded-3xl sub-box space-y-4 clean-card flex flex-col justify-between border-2 border-rose-400/80 shadow-md">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between text-xs pb-3 border-b border-slate-200">
                            <span class="font-black text-slate-900 flex items-center gap-1.5">
                                <i class="fas fa-plus text-rose-600"></i>
                                ۲. ریاضی سطح ۱: جمع (تم زرشکی یاقوتی)
                            </span>
                            <span class="badge-clean-rose px-2.5 py-0.5 rounded-full text-[10px] font-black">Level 1: Addition</span>
                        </div>

                        <!-- Rendered with Velvet Crimson Theme -->
                        <div class="guardify-captcha-container guardify-theme-dark-slate guardify-font-inherit guardify-math-wrap poster-captcha-box theme-crimson">
                            <div class="guardify-top-radar-track"><div class="guardify-top-radar-beam" style="background:linear-gradient(90deg,transparent,#f43f5e,transparent) !important; animation: guardifyRadarScan 2s ease-in-out infinite;"></div></div>
                            <div class="guardify-math-header" style="color:#ffe4e6;display:flex;justify-content:space-between;align-items:center;font-size:12px;font-weight:700;margin-bottom:8px;">
                                <span class="guardify-math-title" style="display:flex;align-items:center;gap:4px;">
                                    <i class="fas fa-calculator text-rose-400"></i>
                                    چالش جمع ۲ بخشی:
                                </span>
                                <button type="button" class="guardify-refresh-btn" style="font-size:10.5px;color:#fecdd3;display:flex;align-items:center;gap:3px;background:none;border:none;cursor:pointer;">
                                    <span>تغییر سوال</span>
                                    <i class="fas fa-arrows-rotate text-[10px]"></i>
                                </button>
                            </div>
                            <!-- Single Line Unified Horizontal Box for Equation, Input & Button -->
                            <div class="guardify-math-card" style="display:flex !important; flex-direction:row !important; align-items:center !important; justify-content:space-between !important; background:#18030a !important; border:1.5px solid #e11d48 !important; border-radius:14px !important; padding:8px 12px !important; gap:8px !important; box-shadow:inset 0 1px 3px rgba(0,0,0,0.5) !important;">
                                <div class="guardify-math-eq" style="font-weight:900 !important; font-size:17px !important; color:#ffe4e6 !important; background:#330715 !important; border:1px solid #f43f5e !important; border-radius:10px !important; padding:6px 14px !important; direction:ltr !important; font-family:monospace !important; letter-spacing:1px !important; flex-shrink:0 !important; margin:0 !important;">
                                    ۱۲ + ۷ = 
                                </div>
                                <div class="guardify-math-actions" style="display:flex !important; flex-direction:row !important; align-items:center !important; gap:6px !important; margin:0 !important;">
                                    <input type="text" class="guardify-input" value="۱۹" readonly style="width:58px !important; height:36px !important; border-radius:10px !important; background:#290511 !important; color:#ffe4e6 !important; border:1px solid #f43f5e !important; text-align:center !important; font-weight:800 !important; font-size:14px !important; outline:none !important;" />
                                    <button type="button" class="guardify-verify-btn" style="padding:0 14px !important; height:36px !important; background:linear-gradient(to left, #e11d48, #f43f5e) !important; color:#ffffff !important; border-radius:10px !important; font-size:11px !important; font-weight:800 !important; border:none !important; cursor:pointer !important; box-shadow:0 0 10px rgba(244,63,94,0.4) !important;">تایید ✓</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-2 border-t border-slate-100 text-[11px] text-slate-600 leading-relaxed font-medium">
                        <strong>سطح ۱ (جمع ساده دو رقمی):</strong> اعداد معادله و کادر پاسخ در یک خط واحد افقی درون همان باکس؛ بدون نویز آزاردهنده.
                    </div>
                </div>

                <!-- Sample 3: Math Level 2 (Multiplication) in Cosmic Galaxy / Amethyst Theme (Single Line Box) -->
                <div class="p-6 rounded-3xl sub-box space-y-4 clean-card flex flex-col justify-between border-2 border-purple-400/80 shadow-md">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between text-xs pb-3 border-b border-slate-200">
                            <span class="font-black text-slate-900 flex items-center gap-1.5">
                                <i class="fas fa-xmark text-purple-600"></i>
                                ۳. ریاضی سطح ۲: ضرب (تم بنفش کهکشانی)
                            </span>
                            <span class="badge-clean-purple px-2.5 py-0.5 rounded-full text-[10px] font-black">Level 2: Multiply</span>
                        </div>

                        <!-- Rendered with Cosmic Galaxy Theme -->
                        <div class="guardify-captcha-container guardify-theme-dark-slate guardify-font-inherit guardify-math-wrap poster-captcha-box theme-galaxy">
                            <div class="guardify-top-radar-track"><div class="guardify-top-radar-beam" style="background:linear-gradient(90deg,transparent,#c084fc,transparent) !important; animation: guardifyRadarScan 2s ease-in-out infinite;"></div></div>
                            <div class="guardify-math-header" style="color:#f3e8ff;display:flex;justify-content:space-between;align-items:center;font-size:12px;font-weight:700;margin-bottom:8px;">
                                <span class="guardify-math-title" style="display:flex;align-items:center;gap:4px;">
                                    <i class="fas fa-meteor text-purple-400"></i>
                                    چالش جدول ضرب امنیتی:
                                </span>
                                <button type="button" class="guardify-refresh-btn" style="font-size:10.5px;color:#e9d5ff;display:flex;align-items:center;gap:3px;background:none;border:none;cursor:pointer;">
                                    <span>تغییر سوال</span>
                                    <i class="fas fa-arrows-rotate text-[10px]"></i>
                                </button>
                            </div>
                            <!-- Single Line Unified Horizontal Box for Equation, Input & Button -->
                            <div class="guardify-math-card" style="display:flex !important; flex-direction:row !important; align-items:center !important; justify-content:space-between !important; background:#110524 !important; border:1.5px solid #a855f7 !important; border-radius:14px !important; padding:8px 12px !important; gap:8px !important; box-shadow:inset 0 1px 3px rgba(0,0,0,0.5) !important;">
                                <div class="guardify-math-eq" style="font-weight:900 !important; font-size:17px !important; color:#f3e8ff !important; background:#240c4a !important; border:1px solid #c084fc !important; border-radius:10px !important; padding:6px 14px !important; direction:ltr !important; font-family:monospace !important; letter-spacing:1px !important; flex-shrink:0 !important; margin:0 !important;">
                                    ۸ × ۶ = 
                                </div>
                                <div class="guardify-math-actions" style="display:flex !important; flex-direction:row !important; align-items:center !important; gap:6px !important; margin:0 !important;">
                                    <input type="text" class="guardify-input" value="۴۸" readonly style="width:58px !important; height:36px !important; border-radius:10px !important; background:#1d073d !important; color:#f3e8ff !important; border:1px solid #c084fc !important; text-align:center !important; font-weight:800 !important; font-size:14px !important; outline:none !important;" />
                                    <button type="button" class="guardify-verify-btn" style="padding:0 14px !important; height:36px !important; background:linear-gradient(to left, #9333ea, #c084fc) !important; color:#ffffff !important; border-radius:10px !important; font-size:11px !important; font-weight:800 !important; border:none !important; cursor:pointer !important; box-shadow:0 0 10px rgba(168,85,247,0.4) !important;">تایید ✓</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-2 border-t border-slate-100 text-[11px] text-slate-600 leading-relaxed font-medium">
                        <strong>سطح ۲ (ضرب دو عددی):</strong> چالش ضرب استاندارد با طراحی کهکشانی ارگونومیک، کاملاً هم‌راستا در یک خط باکس.
                    </div>
                </div>

                <!-- Sample 4: Math Level 3 (3-Part Expression: Addition + Subtraction ONLY, NO Multiply) -->
                <div class="p-6 rounded-3xl sub-box space-y-4 clean-card flex flex-col justify-between border-2 border-amber-400/80 shadow-md">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between text-xs pb-3 border-b border-slate-200">
                            <span class="font-black text-slate-800 flex items-center gap-1.5">
                                <i class="fas fa-cubes-stacked text-amber-600"></i>
                                ۴. ریاضی سطح ۳: عبارت ۳ بخشی (تم طلای ۲۴ عیار)
                            </span>
                            <span class="badge-clean-amber px-2 py-0.5 rounded text-[10px] font-bold">Level 3: Add + Subtract</span>
                        </div>

                        <!-- Rendered with Pure 24K Gold VIP Theme -->
                        <div class="guardify-captcha-container guardify-theme-dark-slate guardify-font-inherit guardify-math-wrap poster-captcha-box theme-gold">
                            <div class="guardify-top-radar-track"><div class="guardify-top-radar-beam" style="background:linear-gradient(90deg,transparent,#eab308,transparent) !important;"></div></div>
                            <div class="guardify-math-header" style="color:#fde047;display:flex;justify-content:space-between;align-items:center;font-size:12px;font-weight:700;margin-bottom:8px;">
                                <span class="guardify-math-title" style="display:flex;align-items:center;gap:4px;">
                                    <i class="fas fa-crown text-amber-400"></i>
                                    معادله ۳ بخشی (جمع و تفریق):
                                </span>
                                <button type="button" class="guardify-refresh-btn" style="font-size:10.5px;color:#fef08a;display:flex;align-items:center;gap:3px;background:none;border:none;cursor:pointer;">
                                    <span>تغییر سوال</span>
                                    <i class="fas fa-arrows-rotate text-[10px]"></i>
                                </button>
                            </div>
                            <!-- Single Line Unified Horizontal Box for 3-Part Equation, Input & Button -->
                            <div class="guardify-math-card" style="display:flex !important; flex-direction:row !important; align-items:center !important; justify-content:space-between !important; background:#171307 !important; border:1.5px solid #d97706 !important; border-radius:14px !important; padding:8px 12px !important; gap:8px !important; box-shadow:inset 0 1px 3px rgba(0,0,0,0.5) !important;">
                                <div class="guardify-math-eq" style="font-weight:900 !important; font-size:16px !important; color:#fde047 !important; background:#291e08 !important; border:1px solid #eab308 !important; border-radius:10px !important; padding:6px 12px !important; direction:ltr !important; font-family:monospace !important; letter-spacing:0.5px !important; flex-shrink:0 !important; margin:0 !important;">
                                    ۲۵ + ۱۲ - ۸ = 
                                </div>
                                <div class="guardify-math-actions" style="display:flex !important; flex-direction:row !important; align-items:center !important; gap:6px !important; margin:0 !important;">
                                    <input type="text" class="guardify-input" value="۲۹" readonly style="width:55px !important; height:36px !important; border-radius:10px !important; background:#241805 !important; color:#fde047 !important; border:1px solid #eab308 !important; text-align:center !important; font-weight:800 !important; font-size:14px !important; outline:none !important;" />
                                    <button type="button" class="guardify-verify-btn" style="padding:0 12px !important; height:36px !important; background:linear-gradient(to left, #d97706, #eab308) !important; color:#1c1917 !important; border-radius:10px !important; font-size:11px !important; font-weight:900 !important; border:none !important; cursor:pointer !important; box-shadow:0 0 10px rgba(234,179,8,0.4) !important;">تایید ✓</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-2 border-t border-slate-100 text-[11px] text-slate-600 leading-relaxed font-medium">
                        <strong>سطح ۳ (معادله ۳ بخشی ترکیبی جمع و تفریق):</strong> شامل یک عمل جمع و یک تفریق (بدون ضرب)، کاملاً در یک خط واحد.
                    </div>
                </div>

                <!-- Sample 5: Icon Match in Royal Navy Theme -->
                <div class="p-6 rounded-3xl sub-box space-y-4 clean-card flex flex-col justify-between border-2 border-blue-400/60 shadow-md">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between text-xs pb-3 border-b border-slate-200">
                            <span class="font-black text-slate-800 flex items-center gap-1.5">
                                <i class="fas fa-icons text-blue-600"></i>
                                ۵. تطبیق آیکون و نماد (تم سرمه‌ای شاهانه)
                            </span>
                            <span class="badge-clean-indigo px-2 py-0.5 rounded text-[10px] font-bold">Royal Navy</span>
                        </div>

                        <!-- Rendered with Royal Navy Theme -->
                        <div class="guardify-captcha-container guardify-theme-dark-slate guardify-font-inherit guardify-icon-wrap poster-captcha-box theme-navy">
                            <div class="guardify-top-radar-track"><div class="guardify-top-radar-beam" style="background:linear-gradient(90deg,transparent,#38bdf8,transparent) !important;"></div></div>
                            <div class="guardify-icon-header" style="display:flex;justify-content:space-between;align-items:center;font-size:11.5px;color:#cbd5e1;margin-bottom:8px;">
                                <span class="guardify-icon-title">روی آیکون <strong class="guardify-target-name text-amber-300">«کلید دسترسی»</strong> کلیک کنید:</span>
                                <button type="button" class="guardify-refresh-btn" style="font-size:10.5px;color:#94a3b8;display:flex;align-items:center;gap:3px;background:none;border:none;cursor:pointer;">
                                    <span>تغییر</span>
                                    <i class="fas fa-arrows-rotate text-[10px]"></i>
                                </button>
                            </div>
                            <div class="guardify-icon-grid" style="display:grid;grid-template-columns:repeat(4,1fr);gap:6px;">
                                <button type="button" class="guardify-icon-btn" style="height:44px;border-radius:10px;background:#0d2149;border:1px solid #1d4ed8;display:flex;align-items:center;justify-content:center;font-size:18px;"><span>🛡️</span></button>
                                <button type="button" class="guardify-icon-btn active" style="height:44px;border-radius:10px;background:#1e40af;border:2px solid #38bdf8;display:flex;align-items:center;justify-content:center;font-size:18px;box-shadow:0 0 12px rgba(56,189,248,0.5);"><span>🔑</span></button>
                                <button type="button" class="guardify-icon-btn" style="height:44px;border-radius:10px;background:#0d2149;border:1px solid #1d4ed8;display:flex;align-items:center;justify-content:center;font-size:18px;"><span>☁️</span></button>
                                <button type="button" class="guardify-icon-btn" style="height:44px;border-radius:10px;background:#0d2149;border:1px solid #1d4ed8;display:flex;align-items:center;justify-content:center;font-size:18px;"><span>🔥</span></button>
                            </div>
                            <div class="mt-2.5">
                                <button type="button" class="guardify-verify-btn w-full" style="height:32px;background:#2563eb;color:#ffffff;border-radius:8px;font-size:11px;font-weight:700;">بررسی و احراز</button>
                            </div>
                        </div>
                    </div>
                    <div class="pt-2 border-t border-slate-100 text-[11px] text-slate-600 leading-relaxed font-medium">
                        احراز هویت لمسی با یک تپ با وکتورهای شفاف؛ بدون نیاز به باز کردن کیبورد مجازی در موبایل.
                    </div>
                </div>

                <!-- Sample 6: Slider in Minimal Clean Light Theme (Light Mode Slider Captcha) -->
                <div class="p-6 rounded-3xl sub-box space-y-4 clean-card flex flex-col justify-between border-2 border-indigo-300 shadow-md">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between text-xs pb-3 border-b border-slate-200">
                            <span class="font-black text-slate-800 flex items-center gap-1.5">
                                <i class="fas fa-sliders text-indigo-600"></i>
                                ۶. اسلایدر کشیدنی (تم لایت و مینیمال سازمانی)
                            </span>
                            <span class="badge-clean-indigo px-2.5 py-0.5 rounded text-[10px] font-bold">Clean Light Theme</span>
                        </div>

                        <!-- Rendered with Clean Light Minimal Theme -->
                        <div class="guardify-captcha-container guardify-theme-clean-light guardify-font-inherit guardify-slider-wrap poster-captcha-box" style="background:#ffffff !important; border:1.5px solid #6366f1 !important; color:#1e1b4b !important; box-shadow:0 8px 24px rgba(99,102,241,0.15) !important;">
                            <div class="guardify-top-radar-track"><div class="guardify-top-radar-beam" style="background:linear-gradient(90deg,transparent,#6366f1,transparent) !important; animation: guardifyRadarScan 2s ease-in-out infinite;"></div></div>
                            <div class="guardify-slider-header" style="color:#312e81;display:flex;justify-content:space-between;align-items:center;font-size:12px;font-weight:700;margin-bottom:8px;">
                                <span class="guardify-slider-title" style="display:flex;align-items:center;gap:5px;">
                                    <i class="fas fa-shield-halved text-indigo-600"></i>
                                    چالش امنیتی تم لایت:
                                </span>
                                <span style="font-size:11px;color:#4f46e5;font-weight:900;" class="flex items-center gap-1">
                                    <span class="w-2 h-2 rounded-full bg-indigo-500 animate-pulse"></span>
                                    احراز سریع ✓
                                </span>
                            </div>
                            <!-- Slider Track with thumb placed precisely on the boundary between blue progress and white track -->
                            <div class="guardify-slider-track mb-2.5" style="height:44px;background:#f1f5f9 !important;border:1.5px solid #cbd5e1 !important;border-radius:9999px;position:relative;display:flex;align-items:center;justify-content:center;overflow:hidden;">
                                <div class="guardify-slider-progress" style="position:absolute !important;top:0 !important;right:0 !important;bottom:0 !important;width:45% !important;background:linear-gradient(to left,#4f46e5,#6366f1) !important;"></div>
                                <span class="guardify-slider-hint" style="position:relative;z-index:10;font-size:11.5px;font-weight:800;color:#334155;">دستگیره را به چپ بکشید ←</span>
                                <div class="poster-slider-thumb-boundary" style="right:calc(45% - 18px) !important;background:#ffffff !important;color:#4338ca !important;border:2px solid #6366f1 !important;box-shadow:0 2px 12px rgba(99,102,241,0.45) !important;">←</div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-2 border-t border-slate-100 text-[11px] text-slate-600 leading-relaxed font-medium">
                        <strong>کپچای کشیدنی تم لایت (Clean Light):</strong> ظاهر مینیمال، روشن و سازمانی؛ هماهنگ با قالب‌های اداری، آموزشی و فروشگاهی روشن.
                    </div>
                </div>

            </div>

        </section>

        <!-- ========================================================================= -->
        <!-- 5. COMPLETE FORM COVERAGE MATRIX (WORDPRESS ECOSYSTEM INTEGRATION HUB) -->
        <!-- ========================================================================= -->
        <section class="p-8 sm:p-14 bg-mesh-radial-3 border-b border-slate-200 space-y-10 relative overflow-hidden">
            <!-- Subtle Eye-Relief Ambient Light Flare -->
            <div class="absolute -top-24 left-1/4 w-96 h-96 bg-emerald-500/12 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute -bottom-24 right-1/4 w-96 h-96 bg-indigo-500/10 rounded-full blur-3xl pointer-events-none"></div>

            <div class="text-center max-w-3xl mx-auto space-y-3 relative z-10">
                <span class="badge-clean-emerald px-4 py-1.5 rounded-full text-xs font-black inline-block shadow-sm">
                    پوشش جامع و ۱۰۰ درصدی تمام فرم‌های استاندارد وردپرس
                </span>
                <h3 class="text-2xl sm:text-3xl font-black text-slate-900">
                    اکوسیستم سازگاری هوشمند با تمام فرم‌ها و پلاگین‌های وردپرس
                </h3>
                <p class="text-slate-700 text-xs sm:text-sm font-medium">
                    بدون نیاز به کدنویسی یا شورت‌کد؛ تنها با فشردن کلید فعال‌سازی در پنل مدیریت:
                </p>
            </div>

            <!-- Grouped Ecosystem Grid with WordPress Style Toggle Switches -->
            <div class="relative z-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 text-right">
                
                <!-- Group 1: E-Commerce -->
                <div class="p-5 rounded-3xl card-glow-indigo space-y-3.5 flex flex-col justify-between">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between pb-2.5 border-b border-indigo-100">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-indigo-600 to-blue-500 text-white flex items-center justify-center text-lg shadow-md shadow-indigo-500/20">
                                <i class="fas fa-cart-shopping"></i>
                            </div>
                            <div class="wp-toggle-switch">
                                <span class="switch-dot"></span>
                            </div>
                        </div>
                        <div>
                            <strong class="text-xs text-slate-900 block font-black mb-1">فروشگاه ووکامرس (WooCommerce)</strong>
                            <span class="text-[10px] text-indigo-700 font-mono font-bold">Checkout & My Account</span>
                        </div>
                        <p class="text-[11.5px] text-slate-600 font-medium leading-relaxed">
                            محافظت کامل از صفحه تسویه‌حساب نهایی، ثبت‌نام و ورود مشتریان بدون افت سرعت خرید.
                        </p>
                    </div>
                    <div class="text-[10.5px] text-emerald-700 font-bold bg-emerald-50 px-2.5 py-1 rounded-lg border border-emerald-200 flex items-center gap-1.5">
                        <i class="fas fa-check-circle text-emerald-600"></i>
                        <span>هماهنگ با درگاه‌های بانکی شاپرک</span>
                    </div>
                </div>

                <!-- Group 2: Digits & SMS Auth -->
                <div class="p-5 rounded-3xl card-glow-emerald space-y-3.5 flex flex-col justify-between">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between pb-2.5 border-b border-emerald-100">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-emerald-600 to-teal-400 text-white flex items-center justify-center text-lg shadow-md shadow-emerald-500/20">
                                <i class="fas fa-mobile-screen"></i>
                            </div>
                            <div class="wp-toggle-switch">
                                <span class="switch-dot"></span>
                            </div>
                        </div>
                        <div>
                            <strong class="text-xs text-slate-900 block font-black mb-1">ورود پیامکی دیجیتس (Digits)</strong>
                            <span class="text-[10px] text-emerald-700 font-mono font-bold">OTP & Phone Login</span>
                        </div>
                        <p class="text-[11.5px] text-slate-600 font-medium leading-relaxed">
                            جلوگیری از حملات اسپم پیامکی (SMS Bombing) و حفظ بودجه شارژ پنل پیامک سایت.
                        </p>
                    </div>
                    <div class="text-[10.5px] text-emerald-700 font-bold bg-emerald-50 px-2.5 py-1 rounded-lg border border-emerald-200 flex items-center gap-1.5">
                        <i class="fas fa-shield-check text-emerald-600"></i>
                        <span>سپر اختصاصی مصرف پنل پیامک</span>
                    </div>
                </div>

                <!-- Group 3: Form Builders -->
                <div class="p-5 rounded-3xl card-glow-purple space-y-3.5 flex flex-col justify-between">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between pb-2.5 border-b border-purple-100">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-purple-600 to-indigo-500 text-white flex items-center justify-center text-lg shadow-md shadow-purple-500/20">
                                <i class="fas fa-cubes"></i>
                            </div>
                            <div class="wp-toggle-switch">
                                <span class="switch-dot"></span>
                            </div>
                        </div>
                        <div>
                            <strong class="text-xs text-slate-900 block font-black mb-1">گرویتی فرمز و المنتور پرو</strong>
                            <span class="text-[10px] text-purple-700 font-mono font-bold">Gravity, Elementor & Fluent</span>
                        </div>
                        <p class="text-[11.5px] text-slate-600 font-medium leading-relaxed">
                            تزریق خودکار فیلد کپچا به تمام فرم‌های لندینگ‌پیج، استخدام، مشاوره و جذب لید.
                        </p>
                    </div>
                    <div class="text-[10.5px] text-purple-700 font-bold bg-purple-50 px-2.5 py-1 rounded-lg border border-purple-200 flex items-center gap-1.5">
                        <i class="fas fa-bolt text-purple-600"></i>
                        <span>پشتیبانی از Contact Form 7</span>
                    </div>
                </div>

                <!-- Group 4: Native WP & Comments -->
                <div class="p-5 rounded-3xl card-glow-amber space-y-3.5 flex flex-col justify-between">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between pb-2.5 border-b border-amber-100">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-amber-500 to-yellow-400 text-slate-950 flex items-center justify-center text-lg shadow-md shadow-amber-500/20">
                                <i class="fas fa-comments"></i>
                            </div>
                            <div class="wp-toggle-switch">
                                <span class="switch-dot"></span>
                            </div>
                        </div>
                        <div>
                            <strong class="text-xs text-slate-900 block font-black mb-1">فرم ورود، عضویت و نظرات وردپرس</strong>
                            <span class="text-[10px] text-amber-800 font-mono font-bold">wp-login & Comments</span>
                        </div>
                        <p class="text-[11.5px] text-slate-600 font-medium leading-relaxed">
                            مسدودسازی ۱۰۰٪ ربات‌های ارسال نظر تبلیغاتی و محافظت از پرتال مدیریت.
                        </p>
                    </div>
                    <div class="text-[10.5px] text-amber-800 font-bold bg-amber-50 px-2.5 py-1 rounded-lg border border-amber-200 flex items-center gap-1.5">
                        <i class="fas fa-lock text-amber-600"></i>
                        <span>حذف نظرات فیک و اسپم</span>
                    </div>
                </div>

            </div>

        </section>

        <!-- ========================================================================= -->
        <!-- 6. LOGIN HARDENING & SPECIALIZED DEFENSE SHIELDS (اقدامات و سپرهای امنیتی اختصاصی فرم‌های ورود) -->
        <!-- ========================================================================= -->
        <section class="p-8 sm:p-14 bg-mesh-radial-1 border-b border-slate-200 space-y-10 relative overflow-hidden">
            <!-- Subtle Eye-Comfort Glow -->
            <div class="absolute -top-20 right-1/4 w-96 h-96 bg-indigo-500/12 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute -bottom-20 left-1/4 w-96 h-96 bg-emerald-500/12 rounded-full blur-3xl pointer-events-none"></div>

            <div class="text-center max-w-3xl mx-auto space-y-3 relative z-10">
                <span class="badge-clean-indigo px-4 py-1.5 rounded-full text-xs font-black inline-block shadow-sm">
                    🛡️ اقدامات و سپرهای امنیتی اختصاصی فرم‌های ورود و عضویت (Login Hardening)
                </span>
                <h3 class="text-2xl sm:text-3xl font-black text-slate-900">
                    کنترل و فعال‌سازی دقیق استانداردهای ضد نفوذ و ضد Brute-Force
                </h3>
                <p class="text-slate-700 text-xs sm:text-sm font-medium leading-relaxed">
                    فعال یا غیرفعال‌سازی دقیق تک‌تک استانداردهای ضد نفوذ، ضد بروت‌فورس (Brute-Force) و جلوگیری از اسکن نام کاربری مدیران:
                </p>
            </div>

            <!-- Grid of 7 Login Hardening Shields with WordPress Switches -->
            <div class="relative z-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 text-right">
                
                <!-- Shield 1: Generic Login Error Messages -->
                <div class="p-6 rounded-3xl card-glow-indigo space-y-4 flex flex-col justify-between">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between pb-3 border-b border-indigo-100">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-indigo-600 to-blue-500 text-white flex items-center justify-center text-lg shadow-md shadow-indigo-500/20">
                                <i class="fas fa-lock"></i>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-[11px] text-emerald-700 font-bold">فعال</span>
                                <div class="wp-toggle-switch">
                                    <span class="switch-dot"></span>
                                </div>
                            </div>
                        </div>
                        <h4 class="font-black text-sm text-slate-900">
                            🔒 پنهان‌سازی خطاهای تفکیکی وردپرس
                        </h4>
                        <span class="text-[10px] text-indigo-700 font-mono font-bold block -mt-1">Generic Login Error Messages</span>
                        <p class="text-xs text-slate-600 leading-relaxed font-medium">
                            جلوگیری از تشخیص اشتباه بودن «نام کاربری» یا «رمز عبور» برای متوقف کردن حملات شمارش نام کاربری (User Enumeration).
                        </p>

                        <!-- Error Message Preview -->
                        <div class="p-2.5 rounded-xl bg-slate-50 border border-slate-200 text-[11px] text-slate-700 font-medium">
                            <span class="text-indigo-600 font-bold block mb-0.5">پیام یکپارچه امنیتی:</span>
                            «اطلاعات ورود نامعتبر است. لطفاً دوباره تلاش کنید.»
                        </div>
                    </div>
                    <div class="pt-3 border-t border-slate-100 text-[11px] text-slate-500 font-bold flex items-center gap-1.5">
                        <i class="fas fa-check-double text-emerald-600"></i>
                        <span>محافظت در برابر حدس اطلاعات هویتی</span>
                    </div>
                </div>

                <!-- Shield 2: Anti Author Scan -->
                <div class="p-6 rounded-3xl card-glow-rose space-y-4 flex flex-col justify-between">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between pb-3 border-b border-rose-100">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-rose-600 to-pink-500 text-white flex items-center justify-center text-lg shadow-md shadow-rose-500/20">
                                <i class="fas fa-user-shield"></i>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-[11px] text-emerald-700 font-bold">فعال</span>
                                <div class="wp-toggle-switch">
                                    <span class="switch-dot"></span>
                                </div>
                            </div>
                        </div>
                        <h4 class="font-black text-sm text-slate-900">
                            🛑 مسدودسازی اسکن نام کاربری نویسندگان و مدیران
                        </h4>
                        <span class="text-[10px] text-rose-700 font-mono font-bold block -mt-1">Anti Author Scan & REST Lock</span>
                        <p class="text-xs text-slate-600 leading-relaxed font-medium">
                            ریدایرکت خودکار <code class="px-1.5 py-0.5 rounded bg-slate-100 text-rose-700 text-[11px] font-mono">/?author=1</code> و مسدودسازی دسترسی کاربران مهمان به REST API آدرس <code class="px-1.5 py-0.5 rounded bg-slate-100 text-rose-700 text-[11px] font-mono">/wp/v2/users</code>.
                        </p>

                        <div class="p-2.5 rounded-xl bg-rose-50 border border-rose-200 text-[11px] text-rose-900 font-mono flex items-center justify-between" dir="ltr">
                            <span>/?author=1</span>
                            <span class="text-rose-600 font-bold">➔ 404 Not Found</span>
                        </div>
                    </div>
                    <div class="pt-3 border-t border-slate-100 text-[11px] text-slate-500 font-bold flex items-center gap-1.5">
                        <i class="fas fa-shield text-rose-600"></i>
                        <span>مخفی‌سازی کامل نام کاربری مدیر ارشد</span>
                    </div>
                </div>

                <!-- Shield 3: Brute-Force Rate Limiting with Visual Controls -->
                <div class="p-6 rounded-3xl card-glow-amber space-y-4 flex flex-col justify-between lg:col-span-1">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between pb-3 border-b border-amber-100">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-amber-500 to-yellow-400 text-slate-950 flex items-center justify-center text-lg shadow-md shadow-amber-500/20">
                                <i class="fas fa-bolt"></i>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-[11px] text-emerald-700 font-bold">فعال</span>
                                <div class="wp-toggle-switch">
                                    <span class="switch-dot"></span>
                                </div>
                            </div>
                        </div>
                        <h4 class="font-black text-sm text-slate-900">
                            ⚡ مسدودسازی هوشمند حملات بروت‌فورس
                        </h4>
                        <span class="text-[10px] text-amber-800 font-mono font-bold block -mt-1">Brute-Force Rate Limiting</span>
                        <p class="text-xs text-slate-600 leading-relaxed font-medium">
                            مسدودسازی موقت IP پس از تعداد مشخص تلاش ناموفق برای ورود به حساب کاربری.
                        </p>

                        <!-- Visual Rate Limit Controls -->
                        <div class="pt-1 space-y-2 text-[11px]">
                            <div class="p-2.5 rounded-xl bg-amber-50 border border-amber-200 flex items-center justify-between">
                                <span class="text-slate-700 font-bold">حداکثر دفعات تلاش مجاز قبل از بلاک:</span>
                                <span class="px-2.5 py-0.5 rounded-md bg-amber-200 text-amber-950 font-black font-mono text-xs">۳ بار</span>
                            </div>
                            <div class="p-2.5 rounded-xl bg-amber-50 border border-amber-200 flex items-center justify-between">
                                <span class="text-slate-700 font-bold">مدت زمان تعلیق و مسدودسازی IP:</span>
                                <span class="px-2.5 py-0.5 rounded-md bg-amber-200 text-amber-950 font-black font-mono text-xs">۳۰ دقیقه</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Shield 4: Disable XML-RPC -->
                <div class="p-6 rounded-3xl card-glow-purple space-y-4 flex flex-col justify-between">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between pb-3 border-b border-purple-100">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-purple-600 to-indigo-500 text-white flex items-center justify-center text-lg shadow-md shadow-purple-500/20">
                                <i class="fas fa-ban"></i>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-[11px] text-emerald-700 font-bold">فعال</span>
                                <div class="wp-toggle-switch">
                                    <span class="switch-dot"></span>
                                </div>
                            </div>
                        </div>
                        <h4 class="font-black text-sm text-slate-900">
                            🚫 غیرفعال‌سازی پروتکل XML-RPC وردپرس
                        </h4>
                        <span class="text-[10px] text-purple-700 font-mono font-bold block -mt-1">Disable XML-RPC Protocol</span>
                        <p class="text-xs text-slate-600 leading-relaxed font-medium">
                            مسدودسازی نقطه اتصال <code class="px-1.5 py-0.5 rounded bg-slate-100 text-purple-700 text-[11px] font-mono">xmlrpc.php</code> که اغلب مورد سوءاستفاده حملات سنگین DDoS و Brute-Force تقویتی قرار می‌گیرد.
                        </p>
                    </div>
                    <div class="pt-3 border-t border-slate-100 text-[11px] text-slate-500 font-bold flex items-center gap-1.5">
                        <i class="fas fa-shield-virus text-purple-600"></i>
                        <span>حذف آسیب‌پذیری سرور و کاهش بار CPU</span>
                    </div>
                </div>

                <!-- Shield 5: Disable Application Passwords -->
                <div class="p-6 rounded-3xl card-glow-emerald space-y-4 flex flex-col justify-between">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between pb-3 border-b border-emerald-100">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-emerald-600 to-teal-400 text-white flex items-center justify-center text-lg shadow-md shadow-emerald-500/20">
                                <i class="fas fa-key"></i>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-[11px] text-emerald-700 font-bold">فعال</span>
                                <div class="wp-toggle-switch">
                                    <span class="switch-dot"></span>
                                </div>
                            </div>
                        </div>
                        <h4 class="font-black text-sm text-slate-900">
                            🔑 غیرفعال‌سازی رمز عبور برنامه‌ها
                        </h4>
                        <span class="text-[10px] text-emerald-700 font-mono font-bold block -mt-1">Disable Application Passwords</span>
                        <p class="text-xs text-slate-600 leading-relaxed font-medium">
                            جلوگیری از ایجاد توکن‌های دسترسی برنامه توسط کاربران در صورت عدم نیاز برای بستن راه‌های نفوذ REST API.
                        </p>
                    </div>
                    <div class="pt-3 border-t border-slate-100 text-[11px] text-slate-500 font-bold flex items-center gap-1.5">
                        <i class="fas fa-fingerprint text-emerald-600"></i>
                        <span>ایمن‌سازی کامل نشست‌های دسترسی وردپرس</span>
                    </div>
                </div>

                <!-- Shield 6: Anti-Clickjacking Headers -->
                <div class="p-6 rounded-3xl card-glow-cyan space-y-4 flex flex-col justify-between">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between pb-3 border-b border-cyan-100">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-cyan-600 to-blue-500 text-white flex items-center justify-center text-lg shadow-md shadow-cyan-500/20">
                                <i class="fas fa-shield-halved"></i>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-[11px] text-emerald-700 font-bold">فعال</span>
                                <div class="wp-toggle-switch">
                                    <span class="switch-dot"></span>
                                </div>
                            </div>
                        </div>
                        <h4 class="font-black text-sm text-slate-900">
                            🛡️ ارسال هدرهای امنیتی ضد کلیک‌جکینگ
                        </h4>
                        <span class="text-[10px] text-cyan-700 font-mono font-bold block -mt-1">Anti-Clickjacking Headers</span>
                        <p class="text-xs text-slate-600 leading-relaxed font-medium">
                            تزریق خودکار هدرهای امنیتی <code class="px-1.5 py-0.5 rounded bg-slate-100 text-cyan-700 text-[10.5px] font-mono">X-Frame-Options: SAMEORIGIN</code> و <code class="px-1.5 py-0.5 rounded bg-slate-100 text-cyan-700 text-[10.5px] font-mono">X-Content-Type-Options: nosniff</code> در صفحه لاگین.
                        </p>
                    </div>
                    <div class="pt-3 border-t border-slate-100 text-[11px] text-slate-500 font-bold flex items-center gap-1.5">
                        <i class="fas fa-window-restore text-cyan-600"></i>
                        <span>مسدودسازی بارگذاری در آی‌فریم‌های مخرب</span>
                    </div>
                </div>

                <!-- Shield 7: Disable Email Login (Enforce Username) -->
                <div class="p-6 rounded-3xl card-glow-indigo space-y-4 flex flex-col justify-between md:col-span-2 lg:col-span-3">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between pb-3 border-b border-indigo-100">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-indigo-600 to-purple-500 text-white flex items-center justify-center text-lg shadow-md shadow-indigo-500/20">
                                    <i class="fas fa-envelope-circle-check"></i>
                                </div>
                                <div>
                                    <h4 class="font-black text-sm text-slate-900">
                                        🔒 غیرفعال‌سازی ورود با ایمیل (اجبار به نام کاربری)
                                    </h4>
                                    <span class="text-[10px] text-indigo-700 font-mono font-bold">Disable Email Login • Enforce Username Only</span>
                                </div>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-[11px] text-emerald-700 font-bold">فعال</span>
                                <div class="wp-toggle-switch">
                                    <span class="switch-dot"></span>
                                </div>
                            </div>
                        </div>
                        <p class="text-xs text-slate-600 leading-relaxed font-medium">
                            اجبار کاربران و مدیران به وارد کردن تنها «نام کاربری» به جای ایمیل، جهت جلوگیری از حدس زدن ایمیل‌های سازمانی و حملات فیشینگ و مهندسی اجتماعی.
                        </p>
                    </div>
                </div>

            </div>

            <!-- Supporting Security Highlights (Whitelist & Logs without mentioning shamsi date) -->
            <div class="relative z-10 grid grid-cols-1 md:grid-cols-2 gap-6 text-right pt-2">
                <div class="p-6 rounded-3xl card-glow-indigo flex items-center gap-4">
                    <div class="w-13 h-13 rounded-2xl bg-gradient-to-tr from-indigo-600 to-blue-500 text-white flex items-center justify-center text-2xl shrink-0 shadow-md shadow-indigo-500/25">
                        <i class="fas fa-list-check"></i>
                    </div>
                    <div>
                        <h4 class="font-black text-sm text-slate-900 mb-1">لیست سفید آی‌پی مدیران (IP Whitelist)</h4>
                        <p class="text-xs text-slate-600 leading-relaxed font-medium">
                            امکان تعریف آی‌پی ثابت شرکت یا منزل جهت دور زدن تست کپچا برای سرعت بیشتر تیم مدیریت با امنیت کامل.
                        </p>
                    </div>
                </div>

                <div class="p-6 rounded-3xl card-glow-emerald flex items-center gap-4">
                    <div class="w-13 h-13 rounded-2xl bg-gradient-to-tr from-emerald-600 to-teal-400 text-white flex items-center justify-center text-2xl shrink-0 shadow-md shadow-emerald-500/25">
                        <i class="fas fa-clipboard-check"></i>
                    </div>
                    <div>
                        <h4 class="font-black text-sm text-slate-900 mb-1">لاگ هوشمند وقایع و گزارش حملات امنیتی</h4>
                        <p class="text-xs text-slate-600 leading-relaxed font-medium">
                            ثبت دقیق نام کاربری مورد حمله، زمان دقیق رخداد، آی‌پی مسدودشده و امکان خروجی اکسل/CSV در تب گزارش‌ها.
                        </p>
                    </div>
                </div>
            </div>

        </section>

        <!-- ========================================================================= -->
        <!-- 7. WP-LOGIN STYLER: DUAL FLOATING LUXURY CARDS IN ROYAL NAVY THEME -->
        <!-- ========================================================================= -->
        <section class="p-8 sm:p-14 bg-white border-b border-slate-200 space-y-10 relative overflow-hidden">
            <!-- Subtle Eye-Comfort Glow Behind Login Showcase -->
            <div class="absolute -top-20 left-1/3 w-96 h-96 bg-blue-500/8 rounded-full blur-3xl pointer-events-none"></div>

            <div class="text-center max-w-3xl mx-auto space-y-3 relative z-10">
                <span class="badge-clean-purple px-4 py-1.5 rounded-full text-xs font-black inline-block shadow-sm">
                    استودیوی استایلر صفحه ورود (WP-Login Styler)
                </span>
                <h3 class="text-2xl sm:text-3xl font-black text-slate-900">
                    شبیه‌سازی چیدمان «دو کارت معلق لوکس» در تم سرمه‌ای شاهانه (Royal Navy)
                </h3>
                <p class="text-slate-700 text-xs sm:text-sm font-medium leading-relaxed">
                    گاردفای پرو بدون تغییر آدرس رسمی صفحه لاگین (`wp-login.php`) و با حفظ کامل کوکی‌ها و نشست‌های معتبر وردپرس، فرم ورود را به ساختار فوق‌العاده شیک <strong>دو کارت معلق لوکس (Floating Dual-Card Split)</strong> با گرادیانت‌های غنی سرمه‌ای، افکت‌های شیشه‌ای مات و هاله‌های نوری ضد خستگی چشم ارتقا می‌دهد:
                </p>
            </div>

            <!-- Architecture Presets Selector Ribbon -->
            <div class="relative z-10 max-w-4xl mx-auto bg-slate-50 border border-slate-200 rounded-3xl p-5 shadow-sm space-y-3">
                <div class="flex items-center justify-between pb-2 border-b border-slate-200 text-xs">
                    <span class="font-black text-slate-800 flex items-center gap-2">
                        <i class="fas fa-table-cells-large text-indigo-600"></i>
                        انتخاب چیدمان فعال در این پیش‌نمایش:
                    </span>
                    <span class="badge-clean-indigo px-3 py-1 rounded-full font-bold">چیدمان فعال: دو کارت معلق لوکس ✨</span>
                </div>

                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-2 text-center text-xs">
                    <div class="p-2.5 rounded-xl bg-white border border-slate-200 text-slate-600 font-bold">
                        <div class="text-lg mb-0.5">🎯</div>
                        <span>کارت متمرکز</span>
                    </div>
                    <div class="p-2.5 rounded-xl bg-white border border-slate-200 text-slate-600 font-bold">
                        <div class="text-lg mb-0.5">🌗</div>
                        <span>اسپلیت اسکرین</span>
                    </div>
                    <div class="p-2.5 rounded-xl bg-white border border-slate-200 text-slate-600 font-bold">
                        <div class="text-lg mb-0.5">📑</div>
                        <span>سایدبار راست</span>
                    </div>
                    <div class="p-2.5 rounded-xl bg-white border border-slate-200 text-slate-600 font-bold">
                        <div class="text-lg mb-0.5">🗂️</div>
                        <span>سایدبار چپ</span>
                    </div>
                    <div class="p-2.5 rounded-xl bg-indigo-50 border-2 border-indigo-600 text-indigo-700 font-black shadow-sm">
                        <div class="text-lg mb-0.5">✨</div>
                        <span>دو کارت معلق لوکس</span>
                    </div>
                    <div class="p-2.5 rounded-xl bg-white border border-slate-200 text-slate-600 font-bold">
                        <div class="text-lg mb-0.5">🕊️</div>
                        <span>کارت مینیمال</span>
                    </div>
                </div>
            </div>

            <!-- Realistic Browser Frame with TWO LUXURY FLOATING CARDS (Royal Navy Theme) -->
            <div class="relative z-10 max-w-5xl mx-auto rounded-3xl border-2 border-indigo-400 shadow-2xl overflow-hidden bg-slate-900">
                
                <!-- Browser Header Bar -->
                <div class="px-5 py-3.5 bg-slate-950 border-b border-indigo-950 flex items-center justify-between">
                    <div class="flex items-center gap-2">
                        <span class="w-3 h-3 rounded-full bg-rose-500"></span>
                        <span class="w-3 h-3 rounded-full bg-amber-400"></span>
                        <span class="w-3 h-3 rounded-full bg-emerald-400"></span>
                    </div>
                    <div class="px-5 py-1 rounded-xl bg-slate-900 border border-slate-800 text-[11px] font-mono text-slate-300 flex items-center gap-2 shadow-inner" dir="ltr">
                        <i class="fas fa-lock text-emerald-400 text-[10px]"></i>
                        <span>https://yoursite.ir/wp-login.php</span>
                    </div>
                    <div class="text-[11px] text-indigo-300 font-bold flex items-center gap-1.5">
                        <i class="fas fa-gem text-amber-400"></i>
                        <span>تم سرمه‌ای شاهانه (Royal Navy)</span>
                    </div>
                </div>

                <!-- Deep Royal Navy Stage containing TWO LUXURY FLOATING CARDS -->
                <div class="royal-navy-stage p-6 sm:p-12 relative overflow-hidden">
                    
                    <!-- Atmospheric Lighting Flares & Color Mesh in Navy Background -->
                    <div class="absolute -top-20 -right-20 w-80 h-80 bg-blue-600/30 rounded-full blur-3xl pointer-events-none glow-pulse"></div>
                    <div class="absolute -bottom-20 -left-20 w-80 h-80 bg-indigo-600/35 rounded-full blur-3xl pointer-events-none glow-pulse"></div>
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-cyan-500/15 rounded-full blur-3xl pointer-events-none"></div>

                    <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                        
                        <!-- ================= CARD 1: FLOATING BRAND HERO CARD (Exact Demo Floating Split Info Card) ================= -->
                        <div class="lg:col-span-5 rounded-3xl floating-luxury-card-1 p-7 sm:p-8 text-white space-y-6 flex flex-col justify-between">
                            <div class="space-y-4">
                                
                                <div class="flex items-center justify-between">
                                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-indigo-950/90 border border-indigo-400/40 text-indigo-300 text-xs font-bold shadow-sm">
                                        <i class="fas fa-lock text-cyan-400"></i>
                                        <span>سامانه ورود هوشمند گاردفای پرو</span>
                                    </div>
                                    <span class="text-[10px] text-cyan-300 font-mono font-bold">SHA-256 HMAC</span>
                                </div>

                                <div class="w-14 h-14 rounded-2xl bg-gradient-to-tr from-blue-600 via-indigo-600 to-cyan-500 text-white flex items-center justify-center text-2xl shadow-xl shadow-indigo-600/40 border border-cyan-400/30">
                                    <i class="fas fa-shield-halved"></i>
                                </div>

                                <h3 class="text-2xl font-black text-white leading-tight">
                                    سامانه ورود دو تکه شناور (Floating Split)
                                </h3>

                                <p class="text-xs sm:text-[13px] text-slate-300 leading-relaxed font-medium">
                                    مدل مدرن کارت‌های معلق با سایه سه‌بعدی و بلور شیشه‌ای که زیبایی بصری ورود سایت را چند برابر می‌کند؛ بدون تغییر آدرس رسمی `wp-login.php` و با حفظ کامل کوکی‌ها و نشست‌های وردپرس.
                                </p>

                                <!-- Demo Feature Bullets (The 3 forbidden phrases are completely removed) -->
                                <div class="pt-4 border-t border-white/10 space-y-2.5 text-xs text-slate-300 font-bold">
                                    <div class="flex items-center gap-2.5">
                                        <i class="fas fa-check-circle text-emerald-400 text-sm"></i>
                                        <span>اعتبارسنجی ۱۰۰٪ محلی و بدون وابستگی به کلود</span>
                                    </div>
                                    <div class="flex items-center gap-2.5">
                                        <i class="fas fa-check-circle text-emerald-400 text-sm"></i>
                                        <span>مجهز به تله مخفی هانی‌پات (Honeypot)</span>
                                    </div>
                                    <div class="flex items-center gap-2.5">
                                        <i class="fas fa-check-circle text-emerald-400 text-sm"></i>
                                        <span>سازگاری کامل با کوکی‌ها و نشست‌های امن وردپرس</span>
                                    </div>
                                    <div class="flex items-center gap-2.5">
                                        <i class="fas fa-check-circle text-emerald-400 text-sm"></i>
                                        <span>پشتیبانی از ۶ مدل چیدمان معماری و ۲۵+ والپیپر گرادیانت</span>
                                    </div>
                                </div>
                            </div>

                            <div class="pt-4 border-t border-slate-800 text-[11px] text-slate-400 flex items-center justify-between">
                                <span class="flex items-center gap-2">
                                    <i class="fas fa-circle-check text-emerald-400"></i>
                                    <span>ارتباط رمزنگاری‌شده محلی (SSL / TLS Active)</span>
                                </span>
                                <span class="text-indigo-400 font-bold text-[10px]">کارت معلق ۱</span>
                            </div>
                        </div>

                        <!-- ================= CARD 2: FLOATING LOGIN FORM CARD (Exact Demo WP-Login Card) ================= -->
                        <div class="lg:col-span-7 rounded-3xl floating-luxury-card-2 p-7 sm:p-9 text-white">
                            
                            <div id="login" class="guardify-layout-wrapped w-full text-right">
                                
                                <!-- Header with Shield Logo matching Demo -->
                                <div class="guardify-card-header text-center mb-5 flex flex-col items-center">
                                    <div class="guardify-shield-icon w-12 h-12 rounded-2xl bg-indigo-500/20 border border-indigo-500/40 text-indigo-400 flex items-center justify-center mb-2.5 shadow-lg shadow-indigo-500/20">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                                        </svg>
                                    </div>
                                    <h2 class="guardify-card-title text-xl font-black text-white m-0">ورود به حساب کاربری</h2>
                                    <p class="guardify-card-subtitle text-xs text-slate-400 mt-1">پرتال امن دسترسی اعضای مدیریت وردپرس</p>
                                </div>

                                <!-- Form Fields matching Demo -->
                                <form name="loginform" id="loginform" onsubmit="event.preventDefault();">
                                    <!-- User input -->
                                    <p class="mb-3.5">
                                        <label for="login_user" class="block text-xs font-bold text-slate-200 mb-1.5">نام کاربری یا نشانی ایمیل</label>
                                        <input type="text" name="log" id="login_user" class="w-full bg-slate-950/80 border border-slate-700 focus:border-indigo-500 rounded-xl px-3.5 py-2.5 text-sm text-white focus:outline-none transition-colors" value="admin" placeholder="name@example.com" readonly />
                                    </p>

                                    <!-- Pass input -->
                                    <div class="user-pass-wrap mb-3.5 relative">
                                        <label for="login_pass" class="block text-xs font-bold text-slate-200 mb-1.5">رمز عبور</label>
                                        <div class="relative">
                                            <input type="password" name="pwd" id="login_pass" class="w-full bg-slate-950/80 border border-slate-700 focus:border-indigo-500 rounded-xl px-3.5 py-2.5 text-sm text-white focus:outline-none transition-colors" value="••••••••••••" placeholder="رمز عبور شما" readonly />
                                            <span class="absolute left-3 top-3 text-slate-400">
                                                <i class="fas fa-eye text-xs"></i>
                                            </span>
                                        </div>
                                    </div>

                                    <!-- Captcha Modality Switcher in Login Form matching Demo -->
                                    <div class="pt-2 pb-1 border-t border-slate-800/80 flex items-center justify-between text-xs">
                                        <span class="text-[11px] font-bold text-slate-300">نوع چالش کپچا:</span>
                                        <div class="inline-flex p-0.5 rounded-lg bg-slate-950 border border-slate-800">
                                            <span class="px-2.5 py-1 rounded text-[10px] font-bold bg-indigo-600 text-white">اسلایدر</span>
                                            <span class="px-2.5 py-1 rounded text-[10px] font-bold text-slate-400">ریاضی</span>
                                            <span class="px-2.5 py-1 rounded text-[10px] font-bold text-slate-400">آیکون</span>
                                        </div>
                                    </div>

                                    <!-- Embedded Captcha inside Login Form matching Demo (thumb exactly on boundary) -->
                                    <div class="my-3">
                                        <div class="guardify-captcha-container guardify-theme-dark-slate guardify-slider-wrap" style="max-width:100% !important; margin:0 !important; background:#071228 !important; border:1.5px solid #2563eb !important; border-radius:14px; padding:12px;">
                                            <div class="guardify-top-radar-track">
                                                <div class="guardify-top-radar-beam" style="background:linear-gradient(90deg,transparent,#38bdf8,transparent) !important; animation: guardifyRadarScan 2s ease-in-out infinite;"></div>
                                            </div>
                                            <div class="guardify-slider-header" style="display:flex;justify-content:space-between;align-items:center;font-size:12px;margin-bottom:8px;color:#93c5fd;">
                                                <span class="guardify-slider-title" style="display:flex;align-items:center;gap:4px;">
                                                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg> 
                                                    حفاظت امنیتی ورود:
                                                </span>
                                                <span class="text-[10px] text-emerald-400 bg-emerald-500/10 px-2 py-0.5 rounded-md font-bold">فعال</span>
                                            </div>
                                            
                                            <div class="guardify-slider-track" style="height:44px;background:#031024 !important;border:1.5px solid #1d4ed8 !important;border-radius:9999px;position:relative;display:flex;align-items:center;justify-content:center;overflow:hidden;">
                                                <div class="guardify-slider-progress" style="position:absolute !important;top:0 !important;right:0 !important;bottom:0 !important;width:45% !important;background:linear-gradient(to left,#1d4ed8,#38bdf8) !important;"></div>
                                                <span class="guardify-slider-hint" style="position:relative;z-index:10;font-size:11.5px;font-weight:800;color:#bfdbfe;">دستگیره را به چپ بکشید ←</span>
                                                <!-- Thumb placed precisely on the boundary between blue progress and empty space -->
                                                <div class="poster-slider-thumb-boundary" style="right:calc(45% - 18px) !important;background:#eff6ff !important;color:#1e40af !important;border:2px solid #38bdf8 !important;box-shadow:0 0 16px rgba(56,189,248,0.7) !important;">←</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Remember Me matching Demo -->
                                    <p class="forgetmenot flex items-center gap-2 mb-4 text-xs text-slate-300">
                                        <input name="rememberme" type="checkbox" id="login_rememberme" value="forever" checked class="accent-indigo-500 w-4 h-4 rounded cursor-pointer" />
                                        <label for="login_rememberme" class="cursor-pointer">مرا به خاطر بسپار</label>
                                    </p>

                                    <!-- Submit Button matching Demo -->
                                    <p class="submit">
                                        <button type="button" class="w-full bg-gradient-to-r from-blue-600 via-indigo-600 to-cyan-600 hover:from-blue-500 hover:to-cyan-500 text-white py-3.5 rounded-xl font-black text-sm shadow-xl shadow-indigo-600/40 flex items-center justify-center gap-2 transition-all cursor-pointer border border-cyan-400/30">
                                            <i class="fas fa-key text-xs"></i>
                                            <span>ورود به حساب کاربری</span>
                                        </button>
                                    </p>

                                    <!-- Legal / Footer matching Demo -->
                                    <div class="guardify-login-footer-wrap mt-4 text-center">
                                        <div class="guardify-security-badge-pill inline-flex items-center gap-1.5 text-[11px] text-slate-400">
                                            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                            </svg>
                                            <span>محافظت شده با فناوری هوشمند Guardify Security</span>
                                        </div>
                                        <div class="guardify-login-legal-bar mt-2 text-[11px] text-slate-400">
                                            <span class="text-indigo-400">قوانین و مقررات</span> • <span class="text-indigo-400">حریم خصوصی</span> • <span class="text-indigo-400">پشتیبانی</span>
                                        </div>
                                    </div>
                                </form>

                                <p id="nav" class="text-center text-xs mt-4 text-slate-400">
                                    <span class="text-indigo-400 hover:underline cursor-pointer">رمز عبور خود را فراموش کرده‌اید؟</span>
                                </p>
                                <p id="backtoblog" class="text-center text-xs mt-2 text-slate-500">
                                    <span class="text-slate-400 cursor-pointer">&larr; بازگشت به سایت</span>
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!-- ========================================================================= -->
        <!-- 8. SMART PROVIDER SWITCHER & FAILOVER ENGINE (CIRCUIT FLOW DIAGRAM) -->
        <!-- ========================================================================= -->
        <section class="p-8 sm:p-14 bg-mesh-radial-2 border-b border-slate-200 space-y-10 relative overflow-hidden">
            <!-- Subtle Eye-Comfort Glow -->
            <div class="absolute -top-20 right-1/4 w-96 h-96 bg-amber-500/12 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute -bottom-20 left-1/4 w-96 h-96 bg-emerald-500/10 rounded-full blur-3xl pointer-events-none"></div>

            <div class="text-center max-w-3xl mx-auto space-y-3 relative z-10">
                <span class="badge-clean-amber px-4 py-1.5 rounded-full text-xs font-black inline-block shadow-sm">
                    ⚡ فناوری انحصاری Smart Failover Engine
                </span>
                <h3 class="text-2xl sm:text-4xl font-black text-slate-900 leading-tight">
                    سوییچر هوشمند: بیمه ۱۰۰٪ فروشگاه در برابر اختلالات شبکه
                </h3>
                <p class="text-slate-700 text-xs sm:text-sm leading-relaxed font-medium">
                    اگر در شرایط عادی از سرویس‌های کلود استفاده می‌کنید، سوییچر هوشمند Guardify Pro وضعیت شبکه را پایش کرده و در صورت قطعی اینترنت بین‌الملل، بدون وقفه به موتور بومی سوئیچ می‌کند:
                </p>
            </div>

            <!-- Visual Circuit Flowchart Diagram -->
            <div class="relative z-10 max-w-5xl mx-auto bg-slate-950 border-2 border-indigo-900/60 rounded-3xl p-6 sm:p-10 text-white shadow-2xl space-y-8 overflow-hidden">
                <div class="absolute -top-16 -right-16 w-60 h-60 bg-indigo-600/20 rounded-full blur-3xl pointer-events-none"></div>
                <div class="absolute -bottom-16 -left-16 w-60 h-60 bg-emerald-600/20 rounded-full blur-3xl pointer-events-none"></div>

                <div class="flex items-center justify-between pb-4 border-b border-slate-800 text-xs">
                    <span class="font-mono text-cyan-400 font-bold flex items-center gap-2">
                        <span class="w-2.5 h-2.5 rounded-full bg-emerald-400 animate-pulse"></span>
                        FAILOVER CIRCUIT MONITOR ACTIVE
                    </span>
                    <span class="text-slate-400 font-mono text-[11px]">RESPONSE: &lt; 100ms</span>
                </div>

                <!-- 4 Step Circuit Pathway -->
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4 relative">
                    
                    <!-- Step 1 Node -->
                    <div class="p-5 rounded-2xl bg-slate-900/90 border border-slate-700 space-y-3 relative">
                        <div class="flex items-center justify-between">
                            <span class="circuit-step-badge bg-indigo-600 text-white text-xs font-mono">01</span>
                            <i class="fas fa-user-check text-indigo-400 text-lg"></i>
                        </div>
                        <h4 class="font-black text-sm text-white">ورود کاربر به فرم</h4>
                        <p class="text-xs text-slate-400 leading-relaxed">
                            کاربر وارد صفحه تسویه‌حساب یا فرم ورود می‌شود و درخواست لود چالش ارسال می‌گردد.
                        </p>
                    </div>

                    <!-- Step 2 Node -->
                    <div class="p-5 rounded-2xl bg-slate-900/90 border border-slate-700 space-y-3 relative">
                        <div class="flex items-center justify-between">
                            <span class="circuit-step-badge bg-amber-600 text-white text-xs font-mono">02</span>
                            <i class="fas fa-tower-broadcast text-amber-400 text-lg"></i>
                        </div>
                        <h4 class="font-black text-sm text-white">پایش وضعیت اتصال</h4>
                        <p class="text-xs text-slate-400 leading-relaxed">
                            پینگ اتصال خارجی سنجیده می‌شود؛ اگر پاسخگو نبود بلافاصله رله قطع می‌شود.
                        </p>
                    </div>

                    <!-- Step 3 Node -->
                    <div class="p-5 rounded-2xl bg-slate-900/90 border border-cyan-500/50 space-y-3 relative shadow-lg shadow-cyan-500/10">
                        <div class="flex items-center justify-between">
                            <span class="circuit-step-badge bg-cyan-600 text-white text-xs font-mono">03</span>
                            <i class="fas fa-shuffle text-cyan-400 text-lg"></i>
                        </div>
                        <h4 class="font-black text-sm text-white">سوئیچ در ۰.۱ ثانیه</h4>
                        <p class="text-xs text-slate-400 leading-relaxed">
                            موتور محلی هاست فوراً فعال شده و کپچای اسلایدر یا ریاضی بومی نمایش داده می‌شود.
                        </p>
                    </div>

                    <!-- Step 4 Node -->
                    <div class="p-5 rounded-2xl bg-emerald-950/80 border border-emerald-500 space-y-3 relative shadow-lg shadow-emerald-500/20">
                        <div class="flex items-center justify-between">
                            <span class="circuit-step-badge bg-emerald-600 text-white text-xs font-mono">04</span>
                            <i class="fas fa-check-circle text-emerald-400 text-lg"></i>
                        </div>
                        <h4 class="font-black text-sm text-emerald-300">ثبت ۱۰۰٪ سفارش</h4>
                        <p class="text-xs text-emerald-200/80 leading-relaxed">
                            مشتری بدون خطا احراز هویت شده و خرید خود را با موفقیت تکمیل می‌کند.
                        </p>
                    </div>

                </div>

                <!-- Bottom Telemetry Banner -->
                <div class="pt-3 border-t border-slate-800 flex flex-wrap items-center justify-between gap-3 text-xs text-slate-300 font-bold">
                    <span class="flex items-center gap-2">
                        <i class="fas fa-shield text-emerald-400"></i>
                        امکان تعریف رفتار جداگانه برای فرم‌های ووکامرس، دیجیتس و ورود مدیریت
                    </span>
                    <span class="px-3 py-1 rounded-full bg-emerald-500/20 text-emerald-300 border border-emerald-500/40 text-[11px]">
                        بدون سوختن حتی ۱ تراکنش مالی
                    </span>
                </div>
            </div>

        </section>

        <!-- ========================================================================= -->
        <!-- 9. REAL CUSTOMIZATION CAPABILITIES (STUDIO THEME WORKBENCH) -->
        <!-- ========================================================================= -->
        <section class="p-8 sm:p-14 bg-tech-grid border-b border-slate-200 space-y-10 relative overflow-hidden">
            <!-- Subtle Eye-Comfort Glow -->
            <div class="absolute -top-24 left-1/3 w-96 h-96 bg-purple-500/10 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute -bottom-24 right-1/4 w-96 h-96 bg-cyan-500/10 rounded-full blur-3xl pointer-events-none"></div>

            <div class="text-center max-w-3xl mx-auto space-y-3 relative z-10">
                <span class="badge-clean-indigo px-4 py-1.5 rounded-full text-xs font-black inline-block shadow-sm">
                    🎨 استودیوی شخصی‌سازی زنده و بصری
                </span>
                <h3 class="text-2xl sm:text-3xl font-black text-slate-900">
                    میز کار شخصی‌سازی زنده (Live Customizer Workbench)
                </h3>
                <p class="text-slate-700 text-xs sm:text-sm font-medium">
                    تمام جزئیات بصری صفحه ورود و چالش‌های کپچا در پنل تنظیمات با پیش‌نمایش زنده قابل تنظیم هستند:
                </p>
            </div>

            <!-- Workbench Interactive UI Preview Matrix -->
            <div class="relative z-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <!-- 1. Color Palette Customizer -->
                <div class="p-6 rounded-3xl card-glow-indigo space-y-4">
                    <div class="flex items-center justify-between">
                        <div class="w-11 h-11 rounded-xl bg-gradient-to-tr from-blue-600 to-indigo-500 text-white flex items-center justify-center text-lg shadow-md shadow-blue-500/25">
                            <i class="fas fa-palette"></i>
                        </div>
                        <span class="text-[11px] font-bold text-indigo-700 bg-indigo-50 px-2.5 py-1 rounded-lg border border-indigo-200">۳۵+ تم آماده</span>
                    </div>
                    <h4 class="font-black text-sm text-slate-900">پالت‌های رنگی و والپیپرهای گرادیانت CSS</h4>
                    <p class="text-xs text-slate-600 leading-relaxed font-medium">
                        انتخاب تم‌های زرشکی، کهکشانی، طلای ۲۴ عیار، سایبر امرالد، سرمه‌ای شاهانه و درج بک‌گراند اختصاصی.
                    </p>
                    <div class="pt-2 flex items-center gap-2">
                        <span class="w-6 h-6 rounded-full bg-rose-600 shadow-sm border border-white"></span>
                        <span class="w-6 h-6 rounded-full bg-purple-600 shadow-sm border border-white"></span>
                        <span class="w-6 h-6 rounded-full bg-amber-500 shadow-sm border border-white"></span>
                        <span class="w-6 h-6 rounded-full bg-emerald-600 shadow-sm border border-white"></span>
                        <span class="w-6 h-6 rounded-full bg-blue-900 shadow-sm border border-white"></span>
                        <span class="w-6 h-6 rounded-full bg-slate-900 shadow-sm border border-white"></span>
                    </div>
                </div>

                <!-- 2. Form Geometry & Radius Slider -->
                <div class="p-6 rounded-3xl card-glow-amber space-y-4">
                    <div class="flex items-center justify-between">
                        <div class="w-11 h-11 rounded-xl bg-gradient-to-tr from-amber-500 to-yellow-400 text-slate-950 flex items-center justify-center text-lg shadow-md shadow-amber-500/25">
                            <i class="fas fa-sliders"></i>
                        </div>
                        <span class="text-[11px] font-bold text-amber-800 bg-amber-50 px-2.5 py-1 rounded-lg border border-amber-200">تنظیم دقیق ابعاد</span>
                    </div>
                    <h4 class="font-black text-sm text-slate-900">کنترل ابعاد کادر، گوشه‌ها و دکمه ورود</h4>
                    <p class="text-xs text-slate-600 leading-relaxed font-medium">
                        تنظیم عرض فرم (۳۴۰ تا ۶۰۰ پیکسل)، گردی گوشه‌ها (0px تا 36px) و استایل دکمه ورود (نئونی، براق).
                    </p>
                    <div class="space-y-1.5 pt-1 text-[11px] text-slate-700 font-bold">
                        <div class="flex justify-between"><span>عرض فرم لاگین:</span><span class="font-mono text-amber-800">460px</span></div>
                        <div class="w-full h-2 bg-amber-100 rounded-full overflow-hidden"><div class="w-[65%] h-full bg-amber-500 rounded-full"></div></div>
                    </div>
                </div>

                <!-- 3. Glassmorphism & Backdrop Blur -->
                <div class="p-6 rounded-3xl card-glow-cyan space-y-4">
                    <div class="flex items-center justify-between">
                        <div class="w-11 h-11 rounded-xl bg-gradient-to-tr from-cyan-600 to-blue-500 text-white flex items-center justify-center text-lg shadow-md shadow-cyan-500/25">
                            <i class="fas fa-wand-magic-sparkles"></i>
                        </div>
                        <span class="text-[11px] font-bold text-cyan-800 bg-cyan-50 px-2.5 py-1 rounded-lg border border-cyan-200">افکت گلس‌مورفیسم</span>
                    </div>
                    <h4 class="font-black text-sm text-slate-900">تاری شیشه‌ای و نورپردازی ضد خستگی</h4>
                    <p class="text-xs text-slate-600 leading-relaxed font-medium">
                        تاری شیشه‌ای پس‌زمینه (Backdrop Blur تا 30px) و تنظیم شفافیت کارت‌ها با نورهای ارگونومیک ملایم.
                    </p>
                    <div class="space-y-1.5 pt-1 text-[11px] text-slate-700 font-bold">
                        <div class="flex justify-between"><span>میزان تاری (Blur):</span><span class="font-mono text-cyan-800">20px Blur</span></div>
                        <div class="w-full h-2 bg-cyan-100 rounded-full overflow-hidden"><div class="w-[75%] h-full bg-cyan-600 rounded-full"></div></div>
                    </div>
                </div>

                <!-- 4. Typography Font Switcher -->
                <div class="p-6 rounded-3xl card-glow-emerald space-y-4">
                    <div class="flex items-center justify-between">
                        <div class="w-11 h-11 rounded-xl bg-gradient-to-tr from-emerald-600 to-teal-400 text-white flex items-center justify-center text-lg shadow-md shadow-emerald-500/25">
                            <i class="fas fa-font"></i>
                        </div>
                        <span class="text-[11px] font-bold text-emerald-800 bg-emerald-50 px-2.5 py-1 rounded-lg border border-emerald-200">فونت بومی</span>
                    </div>
                    <h4 class="font-black text-sm text-slate-900">فونت‌های محلی ایران‌سنس، ایران‌یکان و وزیر</h4>
                    <p class="text-xs text-slate-600 leading-relaxed font-medium">
                        لود مستقیم فایل فونت بدون وابستگی به اینترنت و هماهنگی ۱۰۰٪ با تایپوگرافی قالب سایت.
                    </p>
                    <div class="flex gap-2 pt-1">
                        <span class="px-2.5 py-1 rounded-lg bg-emerald-600 text-white text-[11px] font-bold">ایران‌سنس ✓</span>
                        <span class="px-2.5 py-1 rounded-lg bg-slate-100 text-slate-700 text-[11px] font-bold">ایران‌یکان</span>
                        <span class="px-2.5 py-1 rounded-lg bg-slate-100 text-slate-700 text-[11px] font-bold">وزیرمتن</span>
                    </div>
                </div>

                <!-- 5. 6 Architecture Layouts -->
                <div class="p-6 rounded-3xl card-glow-purple space-y-4">
                    <div class="flex items-center justify-between">
                        <div class="w-11 h-11 rounded-xl bg-gradient-to-tr from-purple-600 to-indigo-500 text-white flex items-center justify-center text-lg shadow-md shadow-purple-500/25">
                            <i class="fas fa-table-cells-large"></i>
                        </div>
                        <span class="text-[11px] font-bold text-purple-800 bg-purple-50 px-2.5 py-1 rounded-lg border border-purple-200">۶ مدل چیدمان</span>
                    </div>
                    <h4 class="font-black text-sm text-slate-900">تغییر معماری صفحه لاگین با ۱ کلیک</h4>
                    <p class="text-xs text-slate-600 leading-relaxed font-medium">
                        پشتیبانی از چیدمان دو کارت معلق لوکس، اسپلیت اسکرین، سایدبار راست، سایدبار چپ و کارت مینیمال.
                    </p>
                    <div class="p-2.5 rounded-xl bg-purple-50 border border-purple-200 text-[11px] text-purple-900 font-bold flex items-center gap-1.5">
                        <i class="fas fa-check-circle text-purple-600"></i>
                        <span>چیدمان پیش‌فرض: دو کارت معلق لوکس ✨</span>
                    </div>
                </div>

                <!-- 6. Audio FX & Biometric Scan -->
                <div class="p-6 rounded-3xl card-glow-rose space-y-4">
                    <div class="flex items-center justify-between">
                        <div class="w-11 h-11 rounded-xl bg-gradient-to-tr from-rose-600 to-pink-500 text-white flex items-center justify-center text-lg shadow-md shadow-rose-500/25">
                            <i class="fas fa-volume-high"></i>
                        </div>
                        <span class="text-[11px] font-bold text-rose-800 bg-rose-50 px-2.5 py-1 rounded-lg border border-rose-200">صدا و رادار</span>
                    </div>
                    <h4 class="font-black text-sm text-slate-900">افکت صوتی سینت‌سایزر و نوار رادار</h4>
                    <p class="text-xs text-slate-600 leading-relaxed font-medium">
                        پخش صدای تایید ملایم با Web Audio API بومی و خط اسکن راداری متحرک در بالای کادر کپچا.
                    </p>
                    <div class="p-2.5 rounded-xl bg-rose-50 border border-rose-200 text-[11px] text-rose-900 font-bold flex items-center gap-1.5">
                        <i class="fas fa-wave-square text-rose-600"></i>
                        <span>Web Audio Synth • صدای تایید ملایم</span>
                    </div>
                </div>

            </div>

        </section>

        <!-- ========================================================================= -->
        <!-- 10. TECHNICAL BENCHMARK COMPARISON TABLE -->
        <!-- ========================================================================= -->
        <section class="p-8 sm:p-14 bg-tech-grid border-b border-slate-200 space-y-10 relative overflow-hidden">
            <!-- Subtle Eye-Comfort Glow -->
            <div class="absolute -top-24 left-1/4 w-96 h-96 bg-indigo-500/10 rounded-full blur-3xl pointer-events-none"></div>

            <div class="text-center max-w-3xl mx-auto space-y-3 relative z-10">
                <span class="badge-clean-indigo px-4 py-1.5 rounded-full text-xs font-black inline-block shadow-sm">
                    مقایسه فنی و مستند
                </span>
                <h3 class="text-2xl sm:text-3xl font-black text-slate-900">
                    جدول مقایسه گاردفای پرو با سایر راهکارها
                </h3>
                <p class="text-slate-700 text-xs sm:text-sm font-medium">
                    بررسی معیارهای کلیدی که خریداران حرفه‌ای راست‌چین به آن اهمیت می‌دهند:
                </p>
            </div>

            <!-- Comparison Table with High-Contrast Highlights -->
            <div class="relative z-10 overflow-x-auto rounded-3xl border-2 border-indigo-200 shadow-2xl bg-white/95">
                <table class="w-full text-right text-xs text-slate-700">
                    <thead class="bg-slate-900 text-white font-black text-xs border-b border-slate-800">
                        <tr>
                            <th class="p-4.5">ویژگی / فاکتور ارزیابی</th>
                            <th class="p-4.5 bg-gradient-to-r from-indigo-700 to-blue-700 text-white font-black border-x border-indigo-500">گاردفای پرو (Guardify Pro)</th>
                            <th class="p-4.5 text-slate-300">Google reCAPTCHA v2/v3</th>
                            <th class="p-4.5 text-slate-300">Cloudflare Turnstile</th>
                            <th class="p-4.5 text-slate-300">کپچاهای متفرقه ساده</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-200">
                        <tr class="hover:bg-slate-50/80">
                            <td class="p-4 font-bold text-slate-900">عملکرد در زمان اینترنت ملی (نت ملی)</td>
                            <td class="p-4 text-emerald-700 font-black bg-indigo-50/60">✓ ۱۰۰٪ فعال و پایدار</td>
                            <td class="p-4 text-rose-600 font-bold">✗ قطعی کامل و خطا</td>
                            <td class="p-4 text-rose-600 font-bold">✗ مسدود شدن در نت ملی</td>
                            <td class="p-4 text-emerald-700">✓ فعال</td>
                        </tr>
                        <tr class="hover:bg-slate-50/80">
                            <td class="p-4 font-bold text-slate-900">سرعت احراز هویت (Latency)</td>
                            <td class="p-4 text-emerald-700 font-black bg-indigo-50/60">&lt; ۵ میلی‌ثانیه</td>
                            <td class="p-4 text-rose-600 font-bold">&gt; ۸۰۰ میلی‌ثانیه</td>
                            <td class="p-4 text-amber-600">۳۵۰ تا ۹۰۰ میلی‌ثانیه</td>
                            <td class="p-4 text-emerald-700">زیر ۳۰ میلی‌ثانیه</td>
                        </tr>
                        <tr class="hover:bg-slate-50/80">
                            <td class="p-4 font-bold text-slate-900">حجم کل اسکریپت بارگذاری شده</td>
                            <td class="p-4 text-emerald-700 font-black bg-indigo-50/60">&lt; ۱۵ کیلوبایت</td>
                            <td class="p-4 text-rose-600 font-bold">&gt; ۵۰۰ کیلوبایت</td>
                            <td class="p-4 text-amber-600">حدود ۱۲۰ کیلوبایت</td>
                            <td class="p-4 text-amber-600">۸۰ تا ۲۵۰ کیلوبایت</td>
                        </tr>
                        <tr class="hover:bg-slate-50/80">
                            <td class="p-4 font-bold text-slate-900">استودیوی بازطراحی صفحه لاگین (دو کارت معلق لوکس)</td>
                            <td class="p-4 text-emerald-700 font-black bg-indigo-50/60">✓ ۶ چیدمان + ۲۵ والپیپر گرادیانت</td>
                            <td class="p-4 text-rose-600 font-bold">✗ ندارد</td>
                            <td class="p-4 text-rose-600 font-bold">✗ ندارد</td>
                            <td class="p-4 text-rose-600 font-bold">✗ ندارد</td>
                        </tr>
                        <tr class="hover:bg-slate-50/80">
                            <td class="p-4 font-bold text-slate-900">تنوع تم‌های رنگی کپچا</td>
                            <td class="p-4 text-emerald-700 font-black bg-indigo-50/60">✓ بیش از ۳۵ تم و استایل آماده</td>
                            <td class="p-4 text-rose-600 font-bold">فقط ۲ حالت لایت و دارک</td>
                            <td class="p-4 text-rose-600 font-bold">فقط ۲ حالت</td>
                            <td class="p-4 text-slate-500">محدود</td>
                        </tr>
                        <tr class="hover:bg-slate-50/80">
                            <td class="p-4 font-bold text-slate-900">پایش بیومتریک و تله‌متری (Smart Human FX)</td>
                            <td class="p-4 text-emerald-700 font-black bg-indigo-50/60">✓ آنالیز حرکت ماوس بدون کلود</td>
                            <td class="p-4 text-slate-600">نیاز به ارتباط دائمی با گوگل</td>
                            <td class="p-4 text-slate-600">وابسته به کلودفلر</td>
                            <td class="p-4 text-rose-600 font-bold">✗ ندارد</td>
                        </tr>
                        <tr class="hover:bg-slate-50/80">
                            <td class="p-4 font-bold text-slate-900">سازگاری با افزونه‌های کش (LiteSpeed, Rocket)</td>
                            <td class="p-4 text-emerald-700 font-black bg-indigo-50/60">✓ ۱۰۰٪ سازگار (AJAX Token)</td>
                            <td class="p-4 text-amber-600 font-bold">نیاز به کانفیگ پیچیده</td>
                            <td class="p-4 text-amber-600 font-bold">نیاز به کانفیگ پیچیده</td>
                            <td class="p-4 text-rose-600 font-bold">✗ خطای مکرر توکن</td>
                        </tr>
                        <tr class="hover:bg-slate-50/80">
                            <td class="p-4 font-bold text-slate-900">پشتیبانی و اصالت کاملاً بومی</td>
                            <td class="p-4 text-emerald-700 font-black bg-indigo-50/60">✓ تیم توسعه DevBan</td>
                            <td class="p-4 text-rose-600 font-bold">✗ ندارد</td>
                            <td class="p-4 text-rose-600 font-bold">✗ ندارد</td>
                            <td class="p-4 text-slate-500">ناشناخته</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </section>

        <!-- ========================================================================= -->
        <!-- 11. RTL-THEME TRUST & GUARANTEE FOOTER POSTER -->
        <!-- ========================================================================= -->
        <footer class="p-8 sm:p-14 bg-gradient-to-t from-indigo-100/90 via-slate-50 to-white text-center space-y-6 relative overflow-hidden">
            <!-- Subtle Eye-Comfort Glow -->
            <div class="absolute -bottom-20 left-1/3 w-96 h-96 bg-emerald-500/12 rounded-full blur-3xl pointer-events-none"></div>
            <div class="absolute -top-20 right-1/4 w-80 h-80 bg-indigo-500/10 rounded-full blur-3xl pointer-events-none"></div>

            <div class="relative z-10 max-w-3xl mx-auto space-y-5">
                <div class="w-16 h-16 mx-auto rounded-2xl bg-gradient-to-tr from-emerald-600 to-teal-500 text-white flex items-center justify-center text-3xl shadow-lg shadow-emerald-500/30">
                    <i class="fas fa-crown"></i>
                </div>

                <h3 class="text-2xl sm:text-4xl font-black text-slate-900">
                    امنیت و فروش بدون وقفه سایت وردپرسی خود را تضمین کنید
                </h3>

                <p class="text-slate-700 text-xs sm:text-base leading-relaxed font-medium">
                    با تهیه لایسنس اورجینال از مارکت راست‌چین، از ۶ ماه پشتیبانی تخصصی رایگان، آپدیت‌های مداوم و سازگاری کامل با تمامی استانداردهای وب ایران بهره‌مند شوید.
                </p>

                <!-- Quality Guarantees Icons in Light Theme -->
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 pt-4 text-xs font-bold text-slate-800">
                    <div class="p-4 rounded-2xl card-glow-indigo">
                        <i class="fas fa-headset text-indigo-600 text-xl block mb-1.5"></i>
                        <span>پشتیبانی سریع راست‌چین</span>
                    </div>
                    <div class="p-4 rounded-2xl card-glow-emerald">
                        <i class="fas fa-arrows-rotate text-emerald-600 text-xl block mb-1.5"></i>
                        <span>آپدیت‌های مداوم</span>
                    </div>
                    <div class="p-4 rounded-2xl card-glow-purple">
                        <i class="fas fa-code text-purple-600 text-xl block mb-1.5"></i>
                        <span>کدنویسی تمیز و استاندارد</span>
                    </div>
                    <div class="p-4 rounded-2xl card-glow-amber">
                        <i class="fas fa-certificate text-amber-600 text-xl block mb-1.5"></i>
                        <span>تضمین اصالت محصول</span>
                    </div>
                </div>

                <div class="pt-6 border-t border-slate-200 text-xs text-slate-500 font-medium">
                    © ۲۰۲۶ گاردفای پرو (Guardify Pro) | طراحی و توسعه توسط تیم DevBan | انتشار انحصاری در مارکت راست‌چین
                </div>
            </div>

        </footer>

    </div>

</body>
</html>
