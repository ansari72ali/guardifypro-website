<?php
/**
 * Guardify Pro Official Website - Ultra-Visual, Ambient Glow & Icon-Rich Landing Page
 * WP Native Offline CAPTCHA Pro & WordPress Security Suite
 * Developed by DevBan | Distributed exclusively on RTL-Theme
 */
$current_page = 'home';
$page_title = 'گاردفای پرو (Guardify Pro v4.00) | افزونه کپچای بومی، آفلاین و امنیت ورود وردپرس';
$page_description = 'افزونه گاردفای پرو (Guardify Pro)؛ سامانه کپچای ۱۰۰٪ بومی و آفلاین وردپرس و ووکامرس با پایداری کامل در اینترنت ملی، بار مصرفی زیر ۱۰ کیلوبایت روی لود سایت، ۳۵+ تم آماده و استایلر صفحه ورود.';
include __DIR__ . '/header.php';
?>

<!-- Custom Ambient Glows, Luminous Surfaces & Background Icon Art Styles -->
<style>
    /* Ensure global background layers in header.php never clip at 75% width on mobile */
    .background-elements,
    .background-elements > * {
        width: 100% !important;
        max-width: 100% !important;
        max-height: 100% !important;
    }

    /* Clean Hero Full-Bleed Ambient Backdrop (Works seamlessly on Mobile & Desktop) */
    .hero-ambient-backdrop {
        background:
            radial-gradient(circle at 82% 18%, rgba(99, 102, 241, 0.20) 0%, transparent 48%),
            radial-gradient(circle at 18% 82%, rgba(16, 185, 129, 0.16) 0%, transparent 48%),
            radial-gradient(circle at 50% 45%, rgba(168, 85, 247, 0.12) 0%, transparent 55%);
    }
    html.dark .hero-ambient-backdrop {
        background:
            radial-gradient(circle at 82% 18%, rgba(99, 102, 241, 0.28) 0%, transparent 50%),
            radial-gradient(circle at 18% 82%, rgba(16, 185, 129, 0.22) 0%, transparent 50%),
            radial-gradient(circle at 50% 45%, rgba(168, 85, 247, 0.18) 0%, transparent 58%);
    }

    /* Ambient Luminous Orbs & Grid Backdrops */
    .ambient-grid-pattern {
        background-image: 
            radial-gradient(rgba(99, 102, 241, 0.12) 1px, transparent 1px),
            linear-gradient(to right, rgba(148, 163, 184, 0.05) 1px, transparent 1px),
            linear-gradient(to bottom, rgba(148, 163, 184, 0.05) 1px, transparent 1px);
        background-size: 24px 24px, 48px 48px, 48px 48px;
    }

    /* Explicit Section Background Decoration Container & Ambient Orbs */
    .sec-bg-layer {
        position: absolute;
        inset: 0;
        pointer-events: none;
        user-select: none;
        overflow: hidden;
        z-index: 0;
    }
    .sec-glow-orb {
        position: absolute;
        border-radius: 9999px;
        filter: blur(90px);
        pointer-events: none;
        opacity: 0.55;
    }
    html.dark .sec-glow-orb {
        opacity: 0.7;
    }
    .orb-tr-indigo { top: -3rem; right: -3rem; width: 22rem; height: 22rem; background: radial-gradient(circle, rgba(99, 102, 241, 0.26) 0%, transparent 70%); }
    .orb-bl-emerald { bottom: -3rem; left: -3rem; width: 22rem; height: 22rem; background: radial-gradient(circle, rgba(16, 185, 129, 0.22) 0%, transparent 70%); }
    .orb-tl-purple { top: -3rem; left: -3rem; width: 22rem; height: 22rem; background: radial-gradient(circle, rgba(168, 85, 247, 0.24) 0%, transparent 70%); }
    .orb-br-rose { bottom: -3rem; right: -3rem; width: 22rem; height: 22rem; background: radial-gradient(circle, rgba(244, 63, 94, 0.20) 0%, transparent 70%); }
    .orb-center-cyan { top: 18%; left: 28%; width: 24rem; height: 24rem; background: radial-gradient(circle, rgba(6, 182, 212, 0.20) 0%, transparent 70%); }

    /* Vibrant & Clear Card Watermark Background Icons */
    .card-bg-icon {
        position: absolute !important;
        left: -0.6rem !important;
        bottom: -0.6rem !important;
        top: auto !important;
        right: auto !important;
        font-size: 6.2rem !important;
        line-height: 1 !important;
        opacity: 0.16 !important;
        pointer-events: none !important;
        user-select: none !important;
        z-index: 0 !important;
        transform: rotate(-12deg) !important;
        transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1), opacity 0.4s ease !important;
    }
    html.dark .card-bg-icon {
        opacity: 0.22 !important;
    }
    .glow-card.glow-indigo .card-bg-icon {
        color: #4f46e5 !important;
        filter: drop-shadow(0 6px 16px rgba(79, 70, 229, 0.28));
    }
    html.dark .glow-card.glow-indigo .card-bg-icon {
        color: #818cf8 !important;
        filter: drop-shadow(0 0 18px rgba(129, 140, 248, 0.4));
    }
    .glow-card.glow-emerald .card-bg-icon {
        color: #059669 !important;
        filter: drop-shadow(0 6px 16px rgba(16, 185, 129, 0.28));
    }
    html.dark .glow-card.glow-emerald .card-bg-icon {
        color: #34d399 !important;
        filter: drop-shadow(0 0 18px rgba(52, 211, 153, 0.4));
    }
    .glow-card.glow-rose .card-bg-icon {
        color: #e11d48 !important;
        filter: drop-shadow(0 6px 16px rgba(244, 63, 94, 0.28));
    }
    html.dark .glow-card.glow-rose .card-bg-icon {
        color: #fb7185 !important;
        filter: drop-shadow(0 0 18px rgba(251, 113, 133, 0.4));
    }
    .glow-card.glow-purple .card-bg-icon {
        color: #7c3aed !important;
        filter: drop-shadow(0 6px 16px rgba(168, 85, 247, 0.28));
    }
    html.dark .glow-card.glow-purple .card-bg-icon {
        color: #c084fc !important;
        filter: drop-shadow(0 0 18px rgba(192, 132, 252, 0.4));
    }
    .glow-card.glow-amber .card-bg-icon {
        color: #d97706 !important;
        filter: drop-shadow(0 6px 16px rgba(245, 158, 11, 0.28));
    }
    html.dark .glow-card.glow-amber .card-bg-icon {
        color: #fbbf24 !important;
        filter: drop-shadow(0 0 18px rgba(251, 191, 36, 0.4));
    }
    .glow-card.glow-cyan .card-bg-icon {
        color: #0891b2 !important;
        filter: drop-shadow(0 6px 16px rgba(6, 182, 212, 0.28));
    }
    html.dark .glow-card.glow-cyan .card-bg-icon {
        color: #22d3ee !important;
        filter: drop-shadow(0 0 18px rgba(34, 211, 238, 0.4));
    }
    .glow-card:hover .card-bg-icon {
        transform: rotate(-4deg) scale(1.1) !important;
        opacity: 0.24 !important;
    }
    html.dark .glow-card:hover .card-bg-icon {
        opacity: 0.32 !important;
    }

    /* Section Background Floating Icon Art (Clear, Vibrant & Positioned at Outer Corners) */
    .sec-floating-icon {
        position: absolute !important;
        pointer-events: none !important;
        user-select: none !important;
        z-index: 0 !important;
        line-height: 1 !important;
        font-size: 5.5rem !important;
        opacity: 0.11 !important;
        display: block !important;
    }
    html.dark .sec-floating-icon {
        opacity: 0.16 !important;
    }
    @media (min-width: 1024px) {
        .sec-floating-icon {
            font-size: 9.5rem !important;
            opacity: 0.13 !important;
        }
        html.dark .sec-floating-icon {
            opacity: 0.19 !important;
        }
    }
    .sec-icon-tr { top: 1.25rem !important; right: 1rem !important; left: auto !important; bottom: auto !important; transform: rotate(-12deg) !important; }
    .sec-icon-tl { top: 1.25rem !important; left: 1rem !important; right: auto !important; bottom: auto !important; transform: rotate(12deg) !important; }
    .sec-icon-br { bottom: 1.25rem !important; right: 1rem !important; left: auto !important; top: auto !important; transform: rotate(10deg) !important; }
    .sec-icon-bl { bottom: 1.25rem !important; left: 1rem !important; right: auto !important; top: auto !important; transform: rotate(-10deg) !important; }

    .sec-icon-indigo { color: #4f46e5 !important; filter: drop-shadow(0 8px 22px rgba(79, 70, 229, 0.25)); }
    html.dark .sec-icon-indigo { color: #818cf8 !important; filter: drop-shadow(0 0 26px rgba(129, 140, 248, 0.35)); }
    .sec-icon-emerald { color: #059669 !important; filter: drop-shadow(0 8px 22px rgba(16, 185, 129, 0.25)); }
    html.dark .sec-icon-emerald { color: #34d399 !important; filter: drop-shadow(0 0 26px rgba(52, 211, 153, 0.35)); }
    .sec-icon-purple { color: #7c3aed !important; filter: drop-shadow(0 8px 22px rgba(168, 85, 247, 0.25)); }
    html.dark .sec-icon-purple { color: #c084fc !important; filter: drop-shadow(0 0 26px rgba(192, 132, 252, 0.35)); }
    .sec-icon-rose { color: #e11d48 !important; filter: drop-shadow(0 8px 22px rgba(244, 63, 94, 0.25)); }
    html.dark .sec-icon-rose { color: #fb7185 !important; filter: drop-shadow(0 0 26px rgba(251, 113, 133, 0.35)); }
    .sec-icon-amber { color: #d97706 !important; filter: drop-shadow(0 8px 22px rgba(245, 158, 11, 0.25)); }
    html.dark .sec-icon-amber { color: #fbbf24 !important; filter: drop-shadow(0 0 26px rgba(251, 191, 36, 0.35)); }
    .sec-icon-cyan { color: #0891b2 !important; filter: drop-shadow(0 8px 22px rgba(6, 182, 212, 0.25)); }
    html.dark .sec-icon-cyan { color: #22d3ee !important; filter: drop-shadow(0 0 26px rgba(34, 211, 238, 0.35)); }

    /* Luminous Multi-Color Glow Cards */
    .glow-card {
        position: relative;
        overflow: hidden;
        isolation: isolate;
        transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.3s ease, border-color 0.3s ease;
    }
    .glow-card:hover {
        transform: translateY(-4px);
    }

    .glow-indigo {
        box-shadow: 0 14px 35px -10px rgba(79, 70, 229, 0.14), inset 0 1px 0 0 rgba(255, 255, 255, 0.6);
    }
    html.dark .glow-indigo {
        box-shadow: 0 18px 45px -12px rgba(99, 102, 241, 0.25), inset 0 1px 0 0 rgba(255, 255, 255, 0.08);
    }
    .glow-indigo:hover {
        box-shadow: 0 22px 50px -12px rgba(79, 70, 229, 0.28), 0 0 25px -5px rgba(99, 102, 241, 0.22);
    }

    .glow-emerald {
        box-shadow: 0 14px 35px -10px rgba(16, 185, 129, 0.14), inset 0 1px 0 0 rgba(255, 255, 255, 0.6);
    }
    html.dark .glow-emerald {
        box-shadow: 0 18px 45px -12px rgba(16, 185, 129, 0.24), inset 0 1px 0 0 rgba(255, 255, 255, 0.08);
    }
    .glow-emerald:hover {
        box-shadow: 0 22px 50px -12px rgba(16, 185, 129, 0.28), 0 0 25px -5px rgba(16, 185, 129, 0.22);
    }

    .glow-amber {
        box-shadow: 0 14px 35px -10px rgba(245, 158, 11, 0.14), inset 0 1px 0 0 rgba(255, 255, 255, 0.6);
    }
    html.dark .glow-amber {
        box-shadow: 0 18px 45px -12px rgba(245, 158, 11, 0.22), inset 0 1px 0 0 rgba(255, 255, 255, 0.08);
    }
    .glow-amber:hover {
        box-shadow: 0 22px 50px -12px rgba(245, 158, 11, 0.28), 0 0 25px -5px rgba(245, 158, 11, 0.22);
    }

    .glow-purple {
        box-shadow: 0 14px 35px -10px rgba(168, 85, 247, 0.14), inset 0 1px 0 0 rgba(255, 255, 255, 0.6);
    }
    html.dark .glow-purple {
        box-shadow: 0 18px 45px -12px rgba(168, 85, 247, 0.24), inset 0 1px 0 0 rgba(255, 255, 255, 0.08);
    }
    .glow-purple:hover {
        box-shadow: 0 22px 50px -12px rgba(168, 85, 247, 0.28), 0 0 25px -5px rgba(168, 85, 247, 0.22);
    }

    .glow-rose {
        box-shadow: 0 14px 35px -10px rgba(244, 63, 94, 0.14), inset 0 1px 0 0 rgba(255, 255, 255, 0.6);
    }
    html.dark .glow-rose {
        box-shadow: 0 18px 45px -12px rgba(244, 63, 94, 0.24), inset 0 1px 0 0 rgba(255, 255, 255, 0.08);
    }
    .glow-rose:hover {
        box-shadow: 0 22px 50px -12px rgba(244, 63, 94, 0.28), 0 0 25px -5px rgba(244, 63, 94, 0.22);
    }

    .glow-cyan {
        box-shadow: 0 14px 35px -10px rgba(6, 182, 212, 0.14), inset 0 1px 0 0 rgba(255, 255, 255, 0.6);
    }
    html.dark .glow-cyan {
        box-shadow: 0 18px 45px -12px rgba(6, 182, 212, 0.24), inset 0 1px 0 0 rgba(255, 255, 255, 0.08);
    }
    .glow-cyan:hover {
        box-shadow: 0 22px 50px -12px rgba(6, 182, 212, 0.28), 0 0 25px -5px rgba(6, 182, 212, 0.22);
    }

    /* Top Light Beam on Cards */
    .card-top-beam {
        position: absolute;
        top: 0;
        right: 12%;
        left: 12%;
        height: 2px;
        border-radius: 9999px;
        opacity: 0.85;
        pointer-events: none;
        z-index: 2;
    }

    /* Corner Radial Spotlight inside Cards */
    .card-corner-glow {
        position: absolute;
        top: -3.5rem;
        right: -3.5rem;
        width: 9rem;
        height: 9rem;
        border-radius: 9999px;
        filter: blur(28px);
        opacity: 0.22;
        pointer-events: none;
        z-index: 0;
    }
    html.dark .card-corner-glow {
        opacity: 0.3;
    }

    /* 3D Glowing Icon Orb */
    .icon-orb {
        position: relative;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        box-shadow: 0 8px 20px -4px rgba(0, 0, 0, 0.18), inset 0 1px 1px rgba(255, 255, 255, 0.4);
    }

    /* Hero Action Buttons: Strictly Single Row on Mobile & Desktop */
    .hero-action-row {
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 0.65rem;
        align-items: center;
    }
    .hero-action-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        white-space: nowrap;
        text-align: center;
    }
    @media (max-width: 639px) {
        .hero-action-btn {
            padding: 0.85rem 0.45rem !important;
            font-size: 0.75rem !important;
            border-radius: 0.9rem !important;
        }
    }
    @media (min-width: 640px) {
        .hero-action-row {
            display: flex;
            flex-wrap: wrap;
            gap: 0.9rem;
        }
    }
</style>

<main id="main-content" class="flex-grow pb-16 lg:pb-0">

    <!-- ========================================================================= -->
    <!-- 1. HERO SECTION + INTERACTIVE 4-IN-1 LIVE CAPTCHA PLAYGROUND -->
    <!-- ========================================================================= -->
    <section id="hero" aria-labelledby="hero-heading" class="relative pt-8 pb-16 md:pt-14 md:pb-24 overflow-hidden hero-ambient-backdrop">
        
        <!-- Multi-Layered Ambient Light Beams & Background Icons (No mobile clipping) -->
        <div class="sec-bg-layer" aria-hidden="true">
            <div class="sec-glow-orb orb-tr-indigo"></div>
            <div class="sec-glow-orb orb-bl-emerald"></div>
            <i class="fas fa-shield-halved sec-floating-icon sec-icon-tr sec-icon-indigo"></i>
            <i class="fas fa-fingerprint sec-floating-icon sec-icon-bl sec-icon-emerald"></i>
            <i class="fas fa-lock sec-floating-icon sec-icon-tl sec-icon-purple"></i>
            <i class="fas fa-server sec-floating-icon sec-icon-br sec-icon-cyan"></i>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10 space-y-12">
            
            <!-- 2-Column Balanced Hero Split -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-stretch">
                
                <!-- Right Column: Value Proposition & Clear User-Friendly Copy -->
                <div class="lg:col-span-7 flex flex-col justify-center space-y-6 text-right">
                    
                    <!-- Clean Unboxed Editorial Metadata Line -->
                    <div class="flex flex-wrap items-center gap-2 text-xs font-bold text-slate-600 dark:text-slate-300">
                        <span class="text-indigo-600 dark:text-indigo-400 font-black flex items-center gap-1.5">
                            <i class="fas fa-bolt text-amber-500"></i>
                            <span>گاردفای پرو نسخه ۴.۰۰ تجاری</span>
                        </span>
                        <span aria-hidden="true" class="text-slate-400">·</span>
                        <span class="text-emerald-600 dark:text-emerald-400 font-black">اجرای ۱۰۰٪ بومی و آفلاین روی هاست</span>
                        <span aria-hidden="true" class="text-slate-400">·</span>
                        <span class="text-amber-600 dark:text-amber-400 font-black">بار مصرفی زیر ۱۰ KB روی لود سایت</span>
                    </div>

                    <!-- Primary SEO H1 Headline -->
                    <h1 id="hero-heading" class="text-3xl sm:text-4xl lg:text-5xl xl:text-[3.35rem] font-black text-slate-900 dark:text-white tracking-tight leading-[1.35]" style="text-wrap: balance;">
                        کپچای <span class="bg-gradient-to-l from-indigo-600 via-purple-600 to-emerald-500 dark:from-indigo-400 dark:via-purple-400 dark:to-emerald-400 bg-clip-text text-transparent drop-shadow-sm">۱۰۰٪ بومی و آفلاین</span> و سپر امنیتی ورود وردپرس
                    </h1>

                    <!-- User-Friendly Lead Paragraph -->
                    <p class="text-slate-600 dark:text-slate-300 text-sm sm:text-base lg:text-[17px] leading-relaxed max-w-2xl font-medium">
                        پایان قطعی‌های مکرر Google reCAPTCHA و نجات تسویه‌حساب فروشگاه‌های ووکامرس در زمان اختلال اینترنت بین‌الملل و اینترنت ملی؛ با <strong>بار مصرفی زیر ۱۰ کیلوبایت روی لود صفحات سایت</strong>، بیش از ۳۵ تم رنگی، ۶ نوع چالش مدرن و استودیوی بازطراحی اختصاصی صفحه ورود (<code class="px-1.5 py-0.5 rounded bg-indigo-500/10 dark:bg-indigo-500/20 text-indigo-600 dark:text-indigo-300 font-mono text-xs border border-indigo-500/20">wp-login.php</code>).
                    </p>

                    <!-- Action Buttons (Single Row on Mobile & Desktop, 'مشاهده ۳۵+ تم' Removed) -->
                    <div class="hero-action-row pt-1">
                        <a href="/demo.php" class="hero-action-btn px-6 sm:px-7 py-4 rounded-2xl bg-gradient-to-r from-indigo-600 via-indigo-600 to-purple-600 hover:from-indigo-500 hover:to-purple-500 text-white font-black text-sm sm:text-base shadow-xl shadow-indigo-600/35 transition-all border border-indigo-400/30">
                            <i class="fas fa-desktop text-amber-300"></i>
                            <span>ورود به دموی افزونه</span>
                        </a>

                        <a href="https://www.rtl-theme.com" target="_blank" rel="noopener noreferrer" class="hero-action-btn px-6 py-4 rounded-2xl bg-gradient-to-r from-emerald-500 via-teal-500 to-emerald-600 hover:from-emerald-400 hover:to-teal-400 text-slate-950 font-black text-sm sm:text-base shadow-xl shadow-emerald-500/30 transition-all border border-emerald-300/40">
                            <i class="fas fa-bag-shopping text-slate-950"></i>
                            <span>خرید اورجینال از راست‌چین</span>
                        </a>
                    </div>

                    <!-- Clear Ecosystem Compatibility Strip -->
                    <div class="pt-3 border-t border-slate-200/80 dark:border-slate-800/80 flex flex-wrap items-center gap-2 text-xs font-bold text-slate-700 dark:text-slate-300">
                        <span class="text-slate-900 dark:text-white font-black flex items-center gap-1.5 ml-1">
                            <i class="fas fa-plug-circle-check text-emerald-500"></i>
                            <span>سازگاری ۱۰۰٪ با:</span>
                        </span>
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-indigo-500/10 border border-indigo-500/25 text-indigo-800 dark:text-indigo-300">
                            <i class="fab fa-wordpress text-indigo-500 text-sm"></i>
                            <span>سازگار با وردپرس ۵ و ۶+</span>
                        </span>
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-emerald-500/10 border border-emerald-500/25 text-emerald-800 dark:text-emerald-300">
                            <i class="fas fa-cart-shopping text-emerald-500 text-sm"></i>
                            <span>سازگار با ووکامرس</span>
                        </span>
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-amber-500/10 border border-amber-500/25 text-amber-800 dark:text-amber-300">
                            <i class="fas fa-mobile-screen text-amber-500 text-sm"></i>
                            <span>سازگار با دیجیتس (Digits OTP)</span>
                        </span>
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg bg-purple-500/10 border border-purple-500/25 text-purple-800 dark:text-purple-300">
                            <i class="fas fa-bolt text-purple-500 text-sm"></i>
                            <span>سازگار با کش لایت‌اسپید و راکت</span>
                        </span>
                    </div>

                </div>

                <!-- Left Column: Interactive 4-in-1 Live Captcha Playground Card -->
                <div class="lg:col-span-5 flex flex-col">
                    <div class="relative h-full flex flex-col justify-between rounded-3xl bg-slate-950 border-2 border-indigo-500/60 p-5 sm:p-6 shadow-[0_25px_70px_-15px_rgba(79,70,229,0.45)] space-y-4 text-white dark-contrast-card overflow-hidden">
                        
                        <!-- Card Ambient Glow & Watermark Icon -->
                        <div class="card-top-beam bg-gradient-to-r from-transparent via-indigo-400 to-transparent"></div>
                        <div class="absolute -top-16 -left-16 w-44 h-44 bg-indigo-500/25 rounded-full blur-3xl pointer-events-none"></div>
                        <div class="absolute -bottom-16 -right-16 w-44 h-44 bg-emerald-500/20 rounded-full blur-3xl pointer-events-none"></div>
                        <i class="fas fa-shield-halved card-bg-icon text-indigo-400"></i>

                        <!-- Top Playground Header -->
                        <div class="relative z-10 flex items-center justify-between pb-3.5 border-b border-slate-800">
                            <div class="flex items-center gap-3">
                                <div class="w-11 h-11 rounded-2xl bg-gradient-to-br from-indigo-500 to-purple-600 text-white flex items-center justify-center shrink-0 icon-orb">
                                    <i class="fas fa-shield-halved text-lg text-amber-300"></i>
                                </div>
                                <div>
                                    <h2 class="font-black text-sm text-white">تست زنده چالش‌های گاردفای پرو</h2>
                                    <span class="text-[11px] text-slate-400 font-medium block">نوع کپچا را انتخاب و همین‌جا امتحان کنید:</span>
                                </div>
                            </div>
                            <span class="text-[11px] text-emerald-400 font-bold whitespace-nowrap shrink-0">
                                ۱۰۰٪ آفلاین ✓
                            </span>
                        </div>

                        <!-- Interactive Challenge Mode Selector Tabs -->
                        <div class="relative z-10 grid grid-cols-4 gap-1.5 p-1.5 bg-slate-900/95 rounded-2xl border border-slate-800" role="tablist" aria-label="انتخاب نوع چالش کپچا">
                            <button type="button" onclick="switchHeroCaptchaTab('slider')" id="hero-tab-slider" role="tab" aria-selected="true" class="hero-captcha-tab py-2 px-2 rounded-xl text-[11px] font-black transition-all bg-indigo-600 text-white shadow-sm whitespace-nowrap truncate cursor-pointer">
                                اسلایدر
                            </button>
                            <button type="button" onclick="switchHeroCaptchaTab('math')" id="hero-tab-math" role="tab" aria-selected="false" class="hero-captcha-tab py-2 px-2 rounded-xl text-[11px] font-bold transition-all text-slate-300 hover:text-white whitespace-nowrap truncate cursor-pointer">
                                ریاضی
                            </button>
                            <button type="button" onclick="switchHeroCaptchaTab('icon')" id="hero-tab-icon" role="tab" aria-selected="false" class="hero-captcha-tab py-2 px-2 rounded-xl text-[11px] font-bold transition-all text-slate-300 hover:text-white whitespace-nowrap truncate cursor-pointer">
                                آیکون
                            </button>
                            <button type="button" onclick="switchHeroCaptchaTab('honeypot')" id="hero-tab-honeypot" role="tab" aria-selected="false" class="hero-captcha-tab py-2 px-2 rounded-xl text-[11px] font-bold transition-all text-slate-300 hover:text-white whitespace-nowrap truncate cursor-pointer">
                                هانی‌پات
                            </button>
                        </div>

                        <!-- Panel 1: Smart Slider Challenge -->
                        <div id="hero-panel-slider" class="relative z-10 hero-captcha-panel p-4 rounded-2xl bg-slate-900/95 border border-slate-800 space-y-3">
                            <div class="flex items-center justify-between text-xs text-slate-200 font-bold">
                                <span class="flex items-center gap-1.5">
                                    <i class="fas fa-sliders text-emerald-400"></i>
                                    <span>اسلایدر پازلی هوشمند (بدون معما)</span>
                                </span>
                                <button type="button" onclick="resetHeroSlider()" class="text-[11px] text-emerald-400 hover:text-emerald-300 font-bold flex items-center gap-1 cursor-pointer">
                                    <i class="fas fa-rotate-right text-[10px]"></i>
                                    <span>ریست</span>
                                </button>
                            </div>

                            <div class="guardify-captcha-container guardify-theme-dark-slate guardify-slider-wrap" style="max-width:100%; margin:0; background:#021a12 !important; border:1.5px solid #059669 !important; border-radius:14px; padding:12px;">
                                <div class="guardify-slider-track" id="hero-slider-track" role="slider" aria-label="دستگیره را به سمت چپ بکشید" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" style="height:44px;background:#03281c !important;border:1.5px solid #059669 !important;border-radius:9999px;position:relative;display:flex;align-items:center;justify-content:center;overflow:hidden;user-select:none;">
                                    <div class="guardify-slider-progress" id="hero-slider-progress" style="position:absolute;top:0;right:0;bottom:0;width:0%;background:linear-gradient(to left,#059669,#10b981) !important;"></div>
                                    <span class="guardify-slider-hint" id="hero-slider-hint" style="position:relative;z-index:10;font-size:11.5px;font-weight:800;color:#ecfdf5;pointer-events:none;">دستگیره را به سمت چپ بکشید ←</span>
                                    <div class="guardify-slider-thumb" id="hero-slider-thumb" tabindex="0" style="position:absolute;top:4px;right:4px;width:36px;height:36px;border-radius:9999px;display:flex;align-items:center;justify-content:center;background:#ecfdf5;color:#064e3b;font-weight:900;border:2px solid #10b981;cursor:grab;z-index:25;">←</div>
                                </div>
                            </div>

                            <div id="hero-slider-success" class="hidden p-2.5 rounded-xl bg-emerald-500/20 border border-emerald-500/40 text-emerald-300 text-xs font-black text-center flex items-center justify-center gap-2">
                                <i class="fas fa-circle-check"></i>
                                <span>تایید شد! احراز هویت در ۰.۰۱ ثانیه بدون سرور خارجی</span>
                            </div>
                        </div>

                        <!-- Panel 2: Interactive Math Challenge -->
                        <div id="hero-panel-math" class="relative z-10 hero-captcha-panel hidden p-4 rounded-2xl bg-slate-900/95 border border-slate-800 space-y-3">
                            <div class="flex items-center justify-between text-xs text-slate-200 font-bold">
                                <span class="flex items-center gap-1.5">
                                    <i class="fas fa-calculator text-rose-400"></i>
                                    <span>چالش ریاضی یک‌خطی (پشتیبانی عدد فارسی/انگلیسی)</span>
                                </span>
                                <button type="button" onclick="generateHeroMath()" class="text-[11px] text-rose-400 hover:text-rose-300 font-bold flex items-center gap-1 cursor-pointer">
                                    <i class="fas fa-arrows-rotate text-[10px]"></i>
                                    <span>سوال جدید</span>
                                </button>
                            </div>

                            <div class="p-3 rounded-xl bg-[#18030a] border border-rose-500/60 flex items-center justify-between gap-2">
                                <div id="hero-math-equation" class="font-mono font-black text-base text-rose-100 bg-[#330715] px-3.5 py-1.5 rounded-lg border border-rose-400/70 select-none" dir="ltr">
                                    ۱۲ + ۷ =
                                </div>
                                <div class="flex items-center gap-2">
                                    <input id="hero-math-input" type="text" inputmode="numeric" placeholder="؟" aria-label="پاسخ معادله ریاضی" class="w-16 h-10 rounded-lg bg-[#290511] text-rose-100 border border-rose-400 text-center font-black text-sm outline-none focus:ring-2 focus:ring-rose-400" />
                                    <button type="button" onclick="verifyHeroMath()" class="px-4 h-10 bg-rose-600 hover:bg-rose-500 text-white rounded-lg text-xs font-black shadow-md cursor-pointer transition-colors">
                                        بررسی ✓
                                    </button>
                                </div>
                            </div>

                            <div id="hero-math-feedback" class="text-xs font-bold text-center text-slate-400">
                                عدد ۱۹ را وارد کرده و دکمه «بررسی» را بزنید.
                            </div>
                        </div>

                        <!-- Panel 3: Interactive Icon Match Challenge -->
                        <div id="hero-panel-icon" class="relative z-10 hero-captcha-panel hidden p-4 rounded-2xl bg-slate-900/95 border border-slate-800 space-y-3">
                            <div class="flex items-center justify-between text-xs text-slate-200 font-bold">
                                <span class="flex items-center gap-1.5">
                                    <i class="fas fa-shapes text-cyan-400"></i>
                                    <span>لطفاً روی آیکون <strong id="hero-icon-target-label" class="text-amber-300 underline">«کلید»</strong> کلیک کنید:</span>
                                </span>
                                <button type="button" onclick="shuffleHeroIcons()" class="text-[11px] text-cyan-400 hover:text-cyan-300 font-bold flex items-center gap-1 cursor-pointer">
                                    <i class="fas fa-shuffle text-[10px]"></i>
                                    <span>چالش جدید</span>
                                </button>
                            </div>

                            <div id="hero-icon-grid" class="grid grid-cols-4 gap-2.5 text-center p-2.5 rounded-xl bg-[#031024] border border-blue-600/60">
                                <button type="button" onclick="checkHeroIcon('star', this)" aria-label="ستاره" class="hero-icon-btn p-3 rounded-xl bg-blue-950/70 hover:bg-blue-900 border border-blue-800 text-slate-300 text-base transition-all cursor-pointer">
                                    <i class="fas fa-star"></i>
                                </button>
                                <button type="button" onclick="checkHeroIcon('key', this)" aria-label="کلید" class="hero-icon-btn p-3 rounded-xl bg-blue-950/70 hover:bg-blue-900 border border-blue-800 text-slate-300 text-base transition-all cursor-pointer">
                                    <i class="fas fa-key"></i>
                                </button>
                                <button type="button" onclick="checkHeroIcon('heart', this)" aria-label="قلب" class="hero-icon-btn p-3 rounded-xl bg-blue-950/70 hover:bg-blue-900 border border-blue-800 text-slate-300 text-base transition-all cursor-pointer">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <button type="button" onclick="checkHeroIcon('bell', this)" aria-label="زنگوله" class="hero-icon-btn p-3 rounded-xl bg-blue-950/70 hover:bg-blue-900 border border-blue-800 text-slate-300 text-base transition-all cursor-pointer">
                                    <i class="fas fa-bell"></i>
                                </button>
                            </div>

                            <div id="hero-icon-feedback" class="text-xs font-bold text-center text-slate-400">
                                بدون نیاز به تایپ کیبورد؛ ایده‌آل برای خریداران موبایلی.
                            </div>
                        </div>

                        <!-- Panel 4: Invisible Honeypot Simulation -->
                        <div id="hero-panel-honeypot" class="relative z-10 hero-captcha-panel hidden p-4 rounded-2xl bg-slate-900/95 border border-slate-800 space-y-3">
                            <div class="flex items-center justify-between text-xs text-slate-200 font-bold">
                                <span class="flex items-center gap-1.5">
                                    <i class="fas fa-user-secret text-teal-400"></i>
                                    <span>پیش‌نمایش تله مخفی هانی‌پات (۱۰۰٪ نامرئی)</span>
                                </span>
                                <span class="text-[11px] text-teal-400 font-mono">Zero Friction</span>
                            </div>

                            <div class="grid grid-cols-2 gap-2">
                                <button type="button" onclick="simulateHoneypot('human')" id="hp-btn-human" class="p-2.5 rounded-xl bg-emerald-600 text-white text-xs font-black flex items-center justify-center gap-1.5 cursor-pointer">
                                    <i class="fas fa-user-check"></i>
                                    <span>ورود کاربر واقعی</span>
                                </button>
                                <button type="button" onclick="simulateHoneypot('bot')" id="hp-btn-bot" class="p-2.5 rounded-xl bg-slate-800 hover:bg-rose-950 text-slate-300 border border-slate-700 text-xs font-bold flex items-center justify-center gap-1.5 cursor-pointer">
                                    <i class="fas fa-robot"></i>
                                    <span>حمله ربات اسپمر</span>
                                </button>
                            </div>

                            <div id="hp-simulation-result" class="p-3 rounded-xl bg-[#041118] border border-teal-500/40 text-xs text-emerald-300 font-bold leading-relaxed text-right">
                                ✓ کاربر واقعی فیلد مخفی را نمی‌بیند و بدون حل هیچ چالشی در ۰.۰۱ ثانیه وارد سایت می‌شود.
                            </div>
                        </div>

                        <!-- Bottom Quick Benchmark & Simulator Link -->
                        <div class="relative z-10 space-y-3 pt-1">
                            <div class="grid grid-cols-2 gap-2.5 text-xs">
                                <div class="p-2.5 rounded-xl bg-slate-900/90 border border-slate-800 text-slate-300 flex items-center justify-between">
                                    <span class="text-[11px] font-bold">بار روی لود سایت:</span>
                                    <span class="text-emerald-400 font-black tabular-nums">زیر ۱۰ KB</span>
                                </div>
                                <div class="p-2.5 rounded-xl bg-slate-900/90 border border-slate-800 text-slate-300 flex items-center justify-between">
                                    <span class="text-[11px] font-bold">زمان پاسخ محلی:</span>
                                    <span class="text-indigo-400 font-mono font-bold tabular-nums">0.2 ms</span>
                                </div>
                            </div>

                            <a href="/demo.php" class="w-full py-3.5 rounded-xl bg-gradient-to-r from-indigo-600 via-blue-600 to-cyan-600 hover:from-indigo-500 hover:to-cyan-500 text-white font-black text-xs text-center transition-all flex items-center justify-center gap-2 shadow-lg shadow-indigo-600/30 group">
                                <span>مشاهده کامل پیشخوان مدیریت و ۳۵+ تم در دموی افزونه</span>
                                <i class="fas fa-arrow-left text-[11px] group-hover:-translate-x-1 transition-transform"></i>
                            </a>
                        </div>

                    </div>
                </div>

            </div>

            <!-- Full-Width 4-Column Quantitative KPI Strip with Luminous Glows & Watermark Icons -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 pt-2">
                
                <!-- KPI 1: Lightweight Load Footprint -->
                <div class="glow-card glow-emerald p-6 rounded-3xl bg-gradient-to-br from-white via-white to-emerald-50/70 dark:from-slate-900 dark:via-slate-900 dark:to-emerald-950/35 border border-emerald-300/80 dark:border-emerald-500/30 flex flex-col justify-between space-y-3">
                    <div class="card-top-beam bg-gradient-to-r from-transparent via-emerald-500 to-transparent"></div>
                    <div class="card-corner-glow bg-emerald-500"></div>
                    <i class="fas fa-feather-pointed card-bg-icon text-emerald-600 dark:text-emerald-400"></i>
                    <div class="relative z-10 flex items-center justify-between">
                        <span class="text-xs font-black text-emerald-700 dark:text-emerald-400">بار مصرفی روی لود سایت</span>
                        <div class="w-11 h-11 rounded-2xl bg-gradient-to-br from-emerald-500 to-teal-600 text-white flex items-center justify-center text-base icon-orb">
                            <i class="fas fa-feather-pointed"></i>
                        </div>
                    </div>
                    <div class="relative z-10 space-y-1 text-right">
                        <div class="text-3xl font-black text-slate-900 dark:text-white tracking-tight tabular-nums">
                            زیر ۱۰ <span class="text-lg font-mono text-emerald-600 dark:text-emerald-400">KB</span>
                        </div>
                        <p class="text-xs text-slate-600 dark:text-slate-300 font-medium leading-relaxed">
                            حجم کدهای لودشده در فرانت‌اند صفحات سایت فوق‌العاده ناچیز است و هیچ افت سرعتی ایجاد نمی‌کند.
                        </p>
                    </div>
                </div>

                <!-- KPI 2: Local Processing Latency -->
                <div class="glow-card glow-indigo p-6 rounded-3xl bg-gradient-to-br from-white via-white to-indigo-50/70 dark:from-slate-900 dark:via-slate-900 dark:to-indigo-950/35 border border-indigo-300/80 dark:border-indigo-500/30 flex flex-col justify-between space-y-3">
                    <div class="card-top-beam bg-gradient-to-r from-transparent via-indigo-500 to-transparent"></div>
                    <div class="card-corner-glow bg-indigo-500"></div>
                    <i class="fas fa-bolt card-bg-icon text-indigo-600 dark:text-indigo-400"></i>
                    <div class="relative z-10 flex items-center justify-between">
                        <span class="text-xs font-black text-indigo-700 dark:text-indigo-400">سرعت پردازش در هاست</span>
                        <div class="w-11 h-11 rounded-2xl bg-gradient-to-br from-indigo-500 to-blue-600 text-white flex items-center justify-center text-base icon-orb">
                            <i class="fas fa-bolt"></i>
                        </div>
                    </div>
                    <div class="relative z-10 space-y-1 text-right">
                        <div class="text-3xl font-black text-slate-900 dark:text-white tracking-tight tabular-nums">
                            ۰.۲ <span class="text-lg font-mono text-indigo-600 dark:text-indigo-400">ms</span>
                        </div>
                        <p class="text-xs text-slate-600 dark:text-slate-300 font-medium leading-relaxed">
                            اعتبارسنجی آنی در رم سرور خودتان بدون ارسال درخواست به سرورهای خارجی گوگل یا کلودفلر.
                        </p>
                    </div>
                </div>

                <!-- KPI 3: National Intranet Uptime -->
                <div class="glow-card glow-amber p-6 rounded-3xl bg-gradient-to-br from-white via-white to-amber-50/70 dark:from-slate-900 dark:via-slate-900 dark:to-amber-950/35 border border-amber-300/80 dark:border-amber-500/30 flex flex-col justify-between space-y-3">
                    <div class="card-top-beam bg-gradient-to-r from-transparent via-amber-500 to-transparent"></div>
                    <div class="card-corner-glow bg-amber-500"></div>
                    <i class="fas fa-server card-bg-icon text-amber-600 dark:text-amber-400"></i>
                    <div class="relative z-10 flex items-center justify-between">
                        <span class="text-xs font-black text-amber-700 dark:text-amber-400">پایداری در اینترنت ملی</span>
                        <div class="w-11 h-11 rounded-2xl bg-gradient-to-br from-amber-500 to-orange-500 text-white flex items-center justify-center text-base icon-orb">
                            <i class="fas fa-server"></i>
                        </div>
                    </div>
                    <div class="relative z-10 space-y-1 text-right">
                        <div class="text-3xl font-black text-slate-900 dark:text-white tracking-tight tabular-nums">
                            ۱۰۰٪ <span class="text-base font-bold text-amber-600 dark:text-amber-400">بدون قطعی</span>
                        </div>
                        <p class="text-xs text-slate-600 dark:text-slate-300 font-medium leading-relaxed">
                            تضمین ثبت موفق سفارشات ووکامرس حتی در زمان قطعی کامل ترافیک بین‌الملل و تحریم‌ها.
                        </p>
                    </div>
                </div>

                <!-- KPI 4: Visual Customization -->
                <div class="glow-card glow-purple p-6 rounded-3xl bg-gradient-to-br from-white via-white to-purple-50/70 dark:from-slate-900 dark:via-slate-900 dark:to-purple-950/35 border border-purple-300/80 dark:border-purple-500/30 flex flex-col justify-between space-y-3">
                    <div class="card-top-beam bg-gradient-to-r from-transparent via-purple-500 to-transparent"></div>
                    <div class="card-corner-glow bg-purple-500"></div>
                    <i class="fas fa-palette card-bg-icon text-purple-600 dark:text-purple-400"></i>
                    <div class="relative z-10 flex items-center justify-between">
                        <span class="text-xs font-black text-purple-700 dark:text-purple-400">تنوع ظاهری و استایلر</span>
                        <div class="w-11 h-11 rounded-2xl bg-gradient-to-br from-purple-500 to-fuchsia-600 text-white flex items-center justify-center text-base icon-orb">
                            <i class="fas fa-palette"></i>
                        </div>
                    </div>
                    <div class="relative z-10 space-y-1 text-right">
                        <div class="text-3xl font-black text-slate-900 dark:text-white tracking-tight tabular-nums">
                            +۳۵ <span class="text-base font-bold text-purple-600 dark:text-purple-400">تم آماده</span>
                        </div>
                        <p class="text-xs text-slate-600 dark:text-slate-300 font-medium leading-relaxed">
                            هماهنگی کامل با هر قالب فروشگاهی و شرکتی به همراه استودیوی طراحی صفحه ورود وردپرس.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 2. WHY GUARDIFY PRO? (CLOUD CRISIS VS. NATIVE SOLUTION) -->
    <!-- ========================================================================= -->
    <section id="why-guardify" aria-labelledby="why-heading" class="py-16 md:py-22 bg-slate-100/85 dark:bg-slate-900/70 border-y border-slate-200 dark:border-slate-800 relative overflow-hidden">
        <!-- Ambient Orbs & Section Icons -->
        <div class="sec-bg-layer" aria-hidden="true">
            <div class="sec-glow-orb orb-br-rose"></div>
            <div class="sec-glow-orb orb-bl-emerald"></div>
            <i class="fas fa-scale-balanced sec-floating-icon sec-icon-tl sec-icon-indigo"></i>
            <i class="fas fa-network-wired sec-floating-icon sec-icon-br sec-icon-emerald"></i>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10 space-y-10">
            
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto space-y-3">
                <div class="text-xs font-black text-indigo-600 dark:text-indigo-400 flex items-center justify-center gap-2">
                    <i class="fas fa-scale-balanced"></i>
                    <span>۰۱. مقایسه معماری فنی در دنیای واقعی</span>
                </div>
                <h2 id="why-heading" class="text-2xl sm:text-4xl font-black text-slate-900 dark:text-white leading-tight" style="text-wrap: balance;">
                    چرا جایگزینی کپچاهای خارجی با موتور بومی گاردفای پرو ضروری است؟
                </h2>
                <p class="text-slate-600 dark:text-slate-300 text-xs sm:text-base leading-relaxed font-medium">
                    رفتار فرم‌های ورود و تسویه‌حساب فروشگاه ووکامرس را در دو معماری «وابسته به سرور خارجی» و «موتور بومی گاردفای پرو» مقایسه کنید:
                </p>
            </div>

            <!-- Interactive Scenario Switcher -->
            <div class="flex justify-center">
                <div class="inline-flex flex-wrap items-center justify-center gap-2 p-1.5 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-md">
                    <button type="button" onclick="setCrisisScenario('intranet')" id="scenario-btn-intranet" class="px-4 py-2.5 rounded-xl text-xs font-black transition-all bg-indigo-600 text-white shadow-sm cursor-pointer">
                        <i class="fas fa-triangle-exclamation ml-1.5 text-amber-300"></i>
                        شرایط اختلال اینترنت بین‌الملل و نت ملی
                    </button>
                    <button type="button" onclick="setCrisisScenario('normal')" id="scenario-btn-normal" class="px-4 py-2.5 rounded-xl text-xs font-bold transition-all text-slate-600 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white cursor-pointer">
                        <i class="fas fa-gauge-high ml-1.5 text-emerald-500"></i>
                        مقایسه سرعت و تجربه کاربری در شرایط عادی
                    </button>
                </div>
            </div>

            <!-- 2-Column Comparison Cards -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-stretch">
                
                <!-- Card 1: Cloud Captchas (Problem) -->
                <article class="glow-card glow-rose p-6 sm:p-8 rounded-3xl bg-gradient-to-br from-white via-white to-rose-50/50 dark:from-slate-900 dark:via-slate-900 dark:to-rose-950/30 border-2 border-rose-300 dark:border-rose-500/45 flex flex-col justify-between space-y-6">
                    <div class="card-top-beam bg-gradient-to-r from-transparent via-rose-500 to-transparent"></div>
                    <div class="card-corner-glow bg-rose-500"></div>
                    <i class="fas fa-cloud-bolt card-bg-icon"></i>

                    <div class="relative z-10 space-y-5">
                        <div class="flex items-center justify-between pb-4 border-b border-rose-100 dark:border-slate-800">
                            <div class="flex items-center gap-3.5">
                                <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-rose-500 to-red-600 text-white flex items-center justify-center text-xl shrink-0 icon-orb">
                                    <i class="fab fa-google"></i>
                                </div>
                                <div class="text-right">
                                    <h3 class="font-black text-base text-slate-900 dark:text-white">سرویس‌های ابری خارجی (Google / Cloudflare)</h3>
                                    <span class="text-xs text-rose-600 dark:text-rose-400 font-bold">وابسته به اینترنت بین‌الملل و سرورهای خارج از کشور</span>
                                </div>
                            </div>
                            <span id="crisis-badge-cloud" class="text-xs font-black text-rose-700 dark:text-rose-300 shrink-0">
                                خطای عدم بارگذاری ✗
                            </span>
                        </div>

                        <!-- Diagnostic Console -->
                        <div class="p-4 rounded-2xl bg-slate-950 border border-rose-500/30 text-xs space-y-2 text-left font-mono dark-contrast-card shadow-inner" dir="ltr">
                            <div class="flex items-center justify-between text-[11px] pb-1.5 border-b border-slate-800">
                                <span class="text-rose-400 font-bold" style="color:#fb7185 !important;">EXTERNAL API REQUEST</span>
                                <span id="crisis-term-status" class="text-rose-300 font-bold" style="color:#fda4af !important;">ERR_TIMED_OUT</span>
                            </div>
                            <div id="crisis-term-body" class="text-slate-200 text-[11px] leading-relaxed space-y-1">
                                <p><span class="text-indigo-400" style="color:#a5b4fc !important;">GET</span> <span style="color:#f1f5f9 !important;">https://www.google.com/recaptcha/api.js</span></p>
                                <p class="text-rose-300 font-bold" style="color:#fda4af !important;">✗ Connection Timed Out after 15,000ms (Blocked / Filtered)</p>
                                <p class="text-amber-300 text-[10.5px]" style="color:#fde047 !important;">⚠ WooCommerce Checkout Submit Locked — Customer Abandoned Cart</p>
                            </div>
                        </div>

                        <ul class="space-y-3 text-xs sm:text-sm text-slate-700 dark:text-slate-300 leading-relaxed font-medium text-right">
                            <li class="flex items-start gap-2.5">
                                <i class="fas fa-circle-xmark text-rose-600 mt-1 shrink-0"></i>
                                <span><strong class="text-slate-900 dark:text-white">قفل شدن صفحه تسویه‌حساب ووکامرس:</strong> در زمان اختلال ارتباط بین‌الملل یا روشن بودن VPN کاربر، کپچا لود نشده و مشتری قادر به پرداخت نیست.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fas fa-circle-xmark text-rose-600 mt-1 shrink-0"></i>
                                <span><strong class="text-slate-900 dark:text-white">معماهای تصویری کلافه‌کننده:</strong> انتخاب چراغ راهنمایی و گذرگاه عابر پیاده که باعث خستگی خریدار موبایلی و ترک سبد خرید می‌شود.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fas fa-circle-xmark text-rose-600 mt-1 shrink-0"></i>
                                <span><strong class="text-slate-900 dark:text-white">بار اضافی بیش از ۵۰۰ کیلوبایت:</strong> دانلود اسکریپت‌های سنگین خارجی که سرعت باز شدن صفحات و امتیاز سئوی سایت را به شدت کاهش می‌دهد.</span>
                            </li>
                        </ul>
                    </div>

                    <div class="relative z-10 pt-4 border-t border-rose-100 dark:border-slate-800 flex items-center justify-between text-xs font-black text-rose-600 dark:text-rose-400">
                        <span>نتیجه برای کسب‌وکار:</span>
                        <span>کاهش نرخ تبدیل و از دست رفتن مشتری</span>
                    </div>
                </article>

                <!-- Card 2: Guardify Pro Native Engine (Solution) -->
                <article class="glow-card glow-emerald p-6 sm:p-8 rounded-3xl bg-gradient-to-br from-white via-white to-emerald-50/50 dark:from-slate-900 dark:via-slate-900 dark:to-emerald-950/30 border-2 border-emerald-500/65 flex flex-col justify-between space-y-6">
                    <div class="card-top-beam bg-gradient-to-r from-transparent via-emerald-400 to-transparent"></div>
                    <div class="card-corner-glow bg-emerald-500"></div>
                    <i class="fas fa-shield-halved card-bg-icon text-emerald-600 dark:text-emerald-400"></i>

                    <div class="relative z-10 space-y-5">
                        <div class="flex items-center justify-between pb-4 border-b border-emerald-100 dark:border-slate-800">
                            <div class="flex items-center gap-3.5">
                                <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-emerald-500 to-teal-600 text-white flex items-center justify-center text-xl shrink-0 icon-orb">
                                    <i class="fas fa-shield-halved"></i>
                                </div>
                                <div class="text-right">
                                    <h3 class="font-black text-base text-slate-900 dark:text-white">معماری بومی گاردفای پرو (Guardify Pro)</h3>
                                    <span class="text-xs text-emerald-600 dark:text-emerald-400 font-bold">اجرای ۱۰۰٪ مستقل در داخل هاست شما بدون وابستگی خارجی</span>
                                </div>
                            </div>
                            <span class="text-xs font-black text-emerald-700 dark:text-emerald-300 shrink-0">
                                پایداری ۱۰۰٪ ✓
                            </span>
                        </div>

                        <!-- Diagnostic Console -->
                        <div class="p-4 rounded-2xl bg-slate-950 border border-emerald-500/30 text-xs space-y-2 text-left font-mono dark-contrast-card shadow-inner" dir="ltr">
                            <div class="flex items-center justify-between text-[11px] pb-1.5 border-b border-slate-800">
                                <span class="text-emerald-400 font-bold" style="color:#34d399 !important;">NATIVE PHP ENGINE</span>
                                <span class="text-emerald-300 font-bold" style="color:#6ee7b7 !important;">200 OK (0.2ms)</span>
                            </div>
                            <div id="solution-term-body" class="text-slate-200 text-[11px] leading-relaxed space-y-1">
                                <p><span class="text-indigo-400" style="color:#a5b4fc !important;">LOCAL</span> <span style="color:#f1f5f9 !important;">/wp-content/plugins/guardify-pro/verify.php</span></p>
                                <p class="text-emerald-300 font-bold" style="color:#6ee7b7 !important;">✓ Verified Locally via SHA-256 HMAC Token in 0.2ms</p>
                                <p class="text-cyan-300 text-[10.5px]" style="color:#67e8f9 !important;">⚡ Footprint &lt; 10 KB • WooCommerce Order Completed Smoothly</p>
                            </div>
                        </div>

                        <ul class="space-y-3 text-xs sm:text-sm text-slate-700 dark:text-slate-300 leading-relaxed font-medium text-right">
                            <li class="flex items-start gap-2.5">
                                <i class="fas fa-circle-check text-emerald-600 mt-1 shrink-0"></i>
                                <span><strong class="text-slate-900 dark:text-white">بدون حتی یک ثانیه قطعی در اینترنت ملی:</strong> تمام فایل‌ها، فونت‌ها و منطق امنیتی مستقیماً از روی هاست خودتان فراخوانی می‌شوند.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fas fa-circle-check text-emerald-600 mt-1 shrink-0"></i>
                                <span><strong class="text-slate-900 dark:text-white">تجربه کاربری دلنشین و سریع:</strong> تایید هویت با کشیدن نرم اسلایدر، جمع ساده یک‌خطی یا لمس آیکون در کمتر از ۱ ثانیه.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i class="fas fa-circle-check text-emerald-600 mt-1 shrink-0"></i>
                                <span><strong class="text-slate-900 dark:text-white">بار مصرفی زیر ۱۰ کیلوبایت روی لود سایت:</strong> حفظ امتیاز ۱۰۰ گوگل لایت‌هاوس و سازگاری کامل با کش لایت‌اسپید و راکت.</span>
                            </li>
                        </ul>
                    </div>

                    <div class="relative z-10 pt-4 border-t border-emerald-100 dark:border-slate-800 flex items-center justify-between text-xs font-black text-emerald-600 dark:text-emerald-400">
                        <span>نتیجه برای کسب‌وکار:</span>
                        <span>امنیت حداکثری + افزایش قطعی فروش</span>
                    </div>
                </article>

            </div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 3. 6 CAPTCHA MODALITIES & 35+ READY COLOR THEMES -->
    <!-- ========================================================================= -->
    <section id="captcha-modalities" aria-labelledby="modalities-heading" class="py-16 md:py-22 relative overflow-hidden ambient-grid-pattern">
        <!-- Ambient Orbs & Background Icons -->
        <div class="sec-bg-layer" aria-hidden="true">
            <div class="sec-glow-orb orb-tl-purple"></div>
            <div class="sec-glow-orb orb-tr-indigo"></div>
            <i class="fas fa-shapes sec-floating-icon sec-icon-tl sec-icon-purple"></i>
            <i class="fas fa-sliders sec-floating-icon sec-icon-br sec-icon-indigo"></i>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10 space-y-10">
            
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto space-y-3">
                <div class="text-xs font-black text-indigo-600 dark:text-indigo-400 flex items-center justify-center gap-2">
                    <i class="fas fa-wand-magic-sparkles"></i>
                    <span>۰۲. تنوع بی‌نظیر چالش‌ها و رنگ‌بندی</span>
                </div>
                <h2 id="modalities-heading" class="text-2xl sm:text-4xl font-black text-slate-900 dark:text-white leading-tight" style="text-wrap: balance;">
                    ۶ نوع چالش امنیتی هوشمند با بیش از ۳۵ تم رنگی آماده
                </h2>
                <p class="text-slate-600 dark:text-slate-300 text-xs sm:text-base leading-relaxed font-medium">
                    متناسب با سلیقه کاربران و رنگ‌بندی برندتان، از میان ۶ روش احراز هویت بومی و ده‌ها تم نوری آماده انتخاب کنید:
                </p>
            </div>

            <!-- Interactive Theme Filter Bar -->
            <div class="flex flex-wrap items-center justify-center gap-2 text-xs">
                <button type="button" onclick="filterModalityCards('all', this)" class="modality-filter-btn px-4 py-2.5 rounded-xl bg-indigo-600 text-white font-black shadow-md shadow-indigo-600/25 transition-all cursor-pointer">
                    همه ۶ چالش بومی
                </button>
                <button type="button" onclick="filterModalityCards('interactive', this)" class="modality-filter-btn px-4 py-2.5 rounded-xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-700 dark:text-slate-300 font-bold hover:border-indigo-500 transition-all cursor-pointer">
                    چالش‌های لمسی بدون تایپ (موبایل‌فرندلی)
                </button>
                <button type="button" onclick="filterModalityCards('math', this)" class="modality-filter-btn px-4 py-2.5 rounded-xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-700 dark:text-slate-300 font-bold hover:border-indigo-500 transition-all cursor-pointer">
                    چالش‌های ریاضی یک‌خطی (۳ سطح)
                </button>
                <button type="button" onclick="filterModalityCards('invisible', this)" class="modality-filter-btn px-4 py-2.5 rounded-xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-700 dark:text-slate-300 font-bold hover:border-indigo-500 transition-all cursor-pointer">
                    حالت ۱۰۰٪ نامرئی
                </button>
            </div>

            <!-- Grid of 6 Distinct Captcha Showcase Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 text-right">
                
                <!-- Modality 1: Smart Slider -->
                <article data-category="interactive" class="modality-card glow-card glow-emerald p-6 rounded-3xl bg-gradient-to-br from-white via-white to-emerald-50/50 dark:from-slate-900 dark:via-slate-900 dark:to-emerald-950/30 border border-emerald-300/80 dark:border-emerald-500/35 flex flex-col justify-between space-y-4">
                    <div class="card-top-beam bg-gradient-to-r from-transparent via-emerald-500 to-transparent"></div>
                    <div class="card-corner-glow bg-emerald-500"></div>
                    <i class="fas fa-sliders card-bg-icon text-emerald-600 dark:text-emerald-400"></i>
                    <div class="relative z-10 space-y-3.5">
                        <div class="flex items-center justify-between text-xs pb-3 border-b border-slate-100 dark:border-slate-800">
                            <h3 class="font-black text-sm text-slate-900 dark:text-white flex items-center gap-2.5">
                                <span class="w-8 h-8 rounded-xl bg-gradient-to-br from-emerald-500 to-teal-600 text-white flex items-center justify-center shadow-sm"><i class="fas fa-sliders"></i></span>
                                <span>۱. اسلایدر پازلی هوشمند</span>
                            </h3>
                            <span class="text-[11px] font-black text-emerald-700 dark:text-emerald-400">تم زمردی نئونی</span>
                        </div>

                        <div class="p-3.5 rounded-2xl shadow-lg" style="background:#021a12 !important; border:1.5px solid #059669 !important;">
                            <div class="flex justify-between items-center text-xs font-bold text-emerald-200 mb-2">
                                <span class="flex items-center gap-1.5"><i class="fa-solid fa-shield-halved text-emerald-400"></i> پایش رفتار حرکتی دست</span>
                                <span class="text-emerald-400 text-[11px] font-black">انسان واقعی ✓</span>
                            </div>
                            <div class="relative h-11 rounded-full bg-[#03281c] border border-emerald-600 flex items-center justify-center overflow-hidden mb-2">
                                <div class="absolute top-0 right-0 bottom-0 w-[48%] bg-gradient-to-l from-emerald-600 to-teal-400"></div>
                                <span class="relative z-10 text-xs font-bold text-emerald-100">دستگیره را به چپ بکشید ←</span>
                                <div class="absolute top-1 right-[calc(48%-18px)] w-9 h-9 rounded-full bg-emerald-50 text-emerald-950 font-black flex items-center justify-center border-2 border-emerald-400 shadow-md">←</div>
                            </div>
                            <div class="p-2 rounded-xl bg-slate-900/90 border border-emerald-500/30 text-[10px] text-emerald-300 font-mono flex justify-between">
                                <span>TRAJECTORY: NATURAL</span>
                                <span class="text-cyan-300">TIME: 0.4s</span>
                            </div>
                        </div>
                    </div>
                    <p class="relative z-10 text-xs text-slate-600 dark:text-slate-300 leading-relaxed font-medium pt-2 border-t border-slate-100 dark:border-slate-800">
                        محبوب‌ترین گزینه برای صفحه تسویه‌حساب ووکامرس؛ تایید هویت تنها با کشیدن انگشت روی موبایل یا ماوس در دسکتاپ.
                    </p>
                </article>

                <!-- Modality 2: Math Addition -->
                <article data-category="math" class="modality-card glow-card glow-rose p-6 rounded-3xl bg-gradient-to-br from-white via-white to-rose-50/50 dark:from-slate-900 dark:via-slate-900 dark:to-rose-950/30 border border-rose-300/80 dark:border-rose-500/35 flex flex-col justify-between space-y-4">
                    <div class="card-top-beam bg-gradient-to-r from-transparent via-rose-500 to-transparent"></div>
                    <div class="card-corner-glow bg-rose-500"></div>
                    <i class="fas fa-calculator card-bg-icon text-rose-600 dark:text-rose-400"></i>
                    <div class="relative z-10 space-y-3.5">
                        <div class="flex items-center justify-between text-xs pb-3 border-b border-slate-100 dark:border-slate-800">
                            <h3 class="font-black text-sm text-slate-900 dark:text-white flex items-center gap-2.5">
                                <span class="w-8 h-8 rounded-xl bg-gradient-to-br from-rose-500 to-pink-600 text-white flex items-center justify-center shadow-sm"><i class="fa-solid fa-plus"></i></span>
                                <span>۲. چالش ریاضی: جمع ساده</span>
                            </h3>
                            <span class="text-[11px] font-black text-rose-700 dark:text-rose-400">تم یاقوت سرخ</span>
                        </div>

                        <div class="p-3.5 rounded-2xl shadow-lg" style="background:#23040e !important; border:1.5px solid #e11d48 !important; color:#ffe4e6 !important;">
                            <div class="flex justify-between items-center text-xs font-bold text-rose-200 mb-2">
                                <span class="flex items-center gap-1.5"><i class="fa-solid fa-calculator text-rose-400"></i> سطح ۱: جمع دو عددی</span>
                                <span class="text-rose-300 text-[10.5px] flex items-center gap-1">سوال جدید <i class="fa-solid fa-arrows-rotate text-[9px]"></i></span>
                            </div>
                            <div class="flex items-center justify-between p-2 rounded-xl bg-[#18030a] border border-rose-500/60 gap-2">
                                <div class="font-mono font-black text-base text-rose-100 bg-[#330715] px-3 py-1 rounded-lg border border-rose-400" dir="ltr">۱۲ + ۷ =</div>
                                <div class="flex items-center gap-1.5">
                                    <input type="text" value="۱۹" readonly aria-label="نمونه پاسخ جمع" class="w-12 h-9 rounded-lg bg-[#290511] text-rose-100 border border-rose-400 text-center font-bold text-sm outline-none" />
                                    <button type="button" class="px-3 h-9 bg-rose-600 text-white rounded-lg text-xs font-black">تایید ✓</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="relative z-10 text-xs text-slate-600 dark:text-slate-300 leading-relaxed font-medium pt-2 border-t border-slate-100 dark:border-slate-800">
                        نمایش معادله، کادر پاسخ و دکمه تایید در یک خط منظم؛ با تبدیل خودکار اعداد فارسی و انگلیسی کیبورد کاربر.
                    </p>
                </article>

                <!-- Modality 3: Math Multiplication -->
                <article data-category="math" class="modality-card glow-card glow-purple p-6 rounded-3xl bg-gradient-to-br from-white via-white to-purple-50/50 dark:from-slate-900 dark:via-slate-900 dark:to-purple-950/30 border border-purple-300/80 dark:border-purple-500/35 flex flex-col justify-between space-y-4">
                    <div class="card-top-beam bg-gradient-to-r from-transparent via-purple-500 to-transparent"></div>
                    <div class="card-corner-glow bg-purple-500"></div>
                    <i class="fas fa-superscript card-bg-icon text-purple-600 dark:text-purple-400"></i>
                    <div class="relative z-10 space-y-3.5">
                        <div class="flex items-center justify-between text-xs pb-3 border-b border-slate-100 dark:border-slate-800">
                            <h3 class="font-black text-sm text-slate-900 dark:text-white flex items-center gap-2.5">
                                <span class="w-8 h-8 rounded-xl bg-gradient-to-br from-purple-500 to-indigo-600 text-white flex items-center justify-center shadow-sm"><i class="fa-solid fa-xmark"></i></span>
                                <span>۳. چالش ریاضی: ضرب امنیتی</span>
                            </h3>
                            <span class="text-[11px] font-black text-purple-700 dark:text-purple-400">تم بنفش کهکشانی</span>
                        </div>

                        <div class="p-3.5 rounded-2xl shadow-lg" style="background:#110524 !important; border:1.5px solid #a855f7 !important; color:#f3e8ff !important;">
                            <div class="flex justify-between items-center text-xs font-bold text-purple-200 mb-2">
                                <span class="flex items-center gap-1.5"><i class="fa-solid fa-shield-halved text-purple-400"></i> سطح ۲: ضرب استاندارد</span>
                                <span class="text-purple-300 text-[10.5px] flex items-center gap-1">سوال جدید <i class="fa-solid fa-arrows-rotate text-[9px]"></i></span>
                            </div>
                            <div class="flex items-center justify-between p-2 rounded-xl bg-[#1d073d] border border-purple-500/60 gap-2">
                                <div class="font-mono font-black text-base text-purple-100 bg-[#240c4a] px-3 py-1 rounded-lg border border-purple-400" dir="ltr">۸ × ۶ =</div>
                                <div class="flex items-center gap-1.5">
                                    <input type="text" value="۴۸" readonly aria-label="نمونه پاسخ ضرب" class="w-12 h-9 rounded-lg bg-[#240c4a] text-purple-100 border border-purple-400 text-center font-bold text-sm outline-none" />
                                    <button type="button" class="px-3 h-9 bg-purple-600 text-white rounded-lg text-xs font-black">تایید ✓</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="relative z-10 text-xs text-slate-600 dark:text-slate-300 leading-relaxed font-medium pt-2 border-t border-slate-100 dark:border-slate-800">
                        سطح امنیتی بالاتر برای فرم‌های حساس مانند ورود مدیران و فراموشی رمز عبور با خوانایی فوق‌العاده.
                    </p>
                </article>

                <!-- Modality 4: 3-Part Expression -->
                <article data-category="math" class="modality-card glow-card glow-amber p-6 rounded-3xl bg-gradient-to-br from-white via-white to-amber-50/50 dark:from-slate-900 dark:via-slate-900 dark:to-amber-950/30 border border-amber-300/80 dark:border-amber-500/35 flex flex-col justify-between space-y-4">
                    <div class="card-top-beam bg-gradient-to-r from-transparent via-amber-500 to-transparent"></div>
                    <div class="card-corner-glow bg-amber-500"></div>
                    <i class="fas fa-cubes-stacked card-bg-icon text-amber-600 dark:text-amber-400"></i>
                    <div class="relative z-10 space-y-3.5">
                        <div class="flex items-center justify-between text-xs pb-3 border-b border-slate-100 dark:border-slate-800">
                            <h3 class="font-black text-sm text-slate-900 dark:text-white flex items-center gap-2.5">
                                <span class="w-8 h-8 rounded-xl bg-gradient-to-br from-amber-500 to-orange-500 text-white flex items-center justify-center shadow-sm"><i class="fa-solid fa-cubes-stacked"></i></span>
                                <span>۴. معادله ترکیبی ۳ بخشی</span>
                            </h3>
                            <span class="text-[11px] font-black text-amber-700 dark:text-amber-400">تم طلای ۲۴ عیار</span>
                        </div>

                        <div class="p-3.5 rounded-2xl shadow-lg" style="background:#171307 !important; border:1.5px solid #d97706 !important; color:#fef3c7 !important;">
                            <div class="flex justify-between items-center text-xs font-bold text-amber-200 mb-2">
                                <span class="flex items-center gap-1.5"><i class="fa-solid fa-crown text-amber-400"></i> سطح ۳: ترکیب جمع و تفریق</span>
                                <span class="text-amber-300 text-[10.5px] flex items-center gap-1">سوال جدید <i class="fa-solid fa-arrows-rotate text-[9px]"></i></span>
                            </div>
                            <div class="flex items-center justify-between p-2 rounded-xl bg-[#241805] border border-amber-500/60 gap-2">
                                <div class="font-mono font-black text-[13px] text-amber-100 bg-[#291e08] px-2.5 py-1 rounded-lg border border-amber-400" dir="ltr">۲۵ + ۱۲ - ۸ =</div>
                                <div class="flex items-center gap-1.5">
                                    <input type="text" value="۲۹" readonly aria-label="نمونه پاسخ معادله سه بخشی" class="w-11 h-9 rounded-lg bg-[#291e08] text-amber-100 border border-amber-400 text-center font-bold text-sm outline-none" />
                                    <button type="button" class="px-2.5 h-9 bg-amber-500 text-slate-950 rounded-lg text-xs font-black">تایید ✓</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="relative z-10 text-xs text-slate-600 dark:text-slate-300 leading-relaxed font-medium pt-2 border-t border-slate-100 dark:border-slate-800">
                        مقاوم در برابر اسکریپت‌های OCR و ربات‌های حل معادله، با حفظ سادگی محاسبه ذهنی برای کاربر واقعی.
                    </p>
                </article>

                <!-- Modality 5: Icon Match -->
                <article data-category="interactive" class="modality-card glow-card glow-indigo p-6 rounded-3xl bg-gradient-to-br from-white via-white to-indigo-50/50 dark:from-slate-900 dark:via-slate-900 dark:to-indigo-950/30 border border-indigo-300/80 dark:border-indigo-500/35 flex flex-col justify-between space-y-4">
                    <div class="card-top-beam bg-gradient-to-r from-transparent via-indigo-500 to-transparent"></div>
                    <div class="card-corner-glow bg-indigo-500"></div>
                    <i class="fas fa-shapes card-bg-icon text-indigo-600 dark:text-indigo-400"></i>
                    <div class="relative z-10 space-y-3.5">
                        <div class="flex items-center justify-between text-xs pb-3 border-b border-slate-100 dark:border-slate-800">
                            <h3 class="font-black text-sm text-slate-900 dark:text-white flex items-center gap-2.5">
                                <span class="w-8 h-8 rounded-xl bg-gradient-to-br from-blue-600 to-indigo-600 text-white flex items-center justify-center shadow-sm"><i class="fa-solid fa-shapes"></i></span>
                                <span>۵. تطبیق آیکون بصری</span>
                            </h3>
                            <span class="text-[11px] font-black text-blue-700 dark:text-blue-400">تم سرمه‌ای شاهانه</span>
                        </div>

                        <div class="p-3.5 rounded-2xl shadow-lg" style="background:#071228 !important; border:1.5px solid #2563eb !important; color:#eff6ff !important;">
                            <div class="flex justify-between items-center text-xs font-bold text-blue-200 mb-2">
                                <span class="flex items-center gap-1.5"><i class="fa-solid fa-key text-blue-400"></i> روی آیکون «کلید» بزنید</span>
                                <span class="text-blue-300 text-[10.5px]">SVG Native</span>
                            </div>
                            <div class="grid grid-cols-4 gap-2 text-center p-2 rounded-xl bg-[#031024] border border-blue-600/60">
                                <div class="p-2 rounded-lg bg-blue-950/60 border border-blue-800 text-slate-400 text-sm"><i class="fas fa-star"></i></div>
                                <div class="p-2 rounded-lg bg-blue-600 border border-blue-400 text-white text-sm shadow-md"><i class="fas fa-key"></i></div>
                                <div class="p-2 rounded-lg bg-blue-950/60 border border-blue-800 text-slate-400 text-sm"><i class="fas fa-heart"></i></div>
                                <div class="p-2 rounded-lg bg-blue-950/60 border border-blue-800 text-slate-400 text-sm"><i class="fas fa-bell"></i></div>
                            </div>
                        </div>
                    </div>
                    <p class="relative z-10 text-xs text-slate-600 dark:text-slate-300 leading-relaxed font-medium pt-2 border-t border-slate-100 dark:border-slate-800">
                        انتخاب آیکون هدف با یک لمس ساده بدون نیاز به باز شدن کیبورد گوشی؛ عالی برای فرم‌های پیامکی دیجیتس.
                    </p>
                </article>

                <!-- Modality 6: Smart Honeypot -->
                <article data-category="invisible" class="modality-card glow-card glow-cyan p-6 rounded-3xl bg-gradient-to-br from-white via-white to-cyan-50/50 dark:from-slate-900 dark:via-slate-900 dark:to-cyan-950/30 border border-cyan-300/80 dark:border-cyan-500/35 flex flex-col justify-between space-y-4">
                    <div class="card-top-beam bg-gradient-to-r from-transparent via-cyan-500 to-transparent"></div>
                    <div class="card-corner-glow bg-cyan-500"></div>
                    <i class="fas fa-user-secret card-bg-icon text-cyan-600 dark:text-cyan-400"></i>
                    <div class="relative z-10 space-y-3.5">
                        <div class="flex items-center justify-between text-xs pb-3 border-b border-slate-100 dark:border-slate-800">
                            <h3 class="font-black text-sm text-slate-900 dark:text-white flex items-center gap-2.5">
                                <span class="w-8 h-8 rounded-xl bg-gradient-to-br from-teal-500 to-cyan-600 text-white flex items-center justify-center shadow-sm"><i class="fa-solid fa-user-secret"></i></span>
                                <span>۶. تله مخفی هانی‌پات</span>
                            </h3>
                            <span class="text-[11px] font-black text-teal-700 dark:text-teal-400">تم یخی قطبی</span>
                        </div>

                        <div class="p-3.5 rounded-2xl dark-contrast-card shadow-lg" style="background:#081b24 !important; border:1.5px solid #06b6d4 !important; color:#ecfeff !important;">
                            <div class="flex justify-between items-center text-xs font-bold text-cyan-200 mb-2">
                                <span class="flex items-center gap-1.5"><i class="fa-solid fa-shield-virus text-cyan-400" style="color:#22d3ee !important;"></i> <span style="color:#cffafe !important;">پایش نامرئی ربات</span></span>
                                <span class="text-emerald-300 text-[11px] font-mono font-bold" style="color:#4ade80 !important;">ZERO-CLICK</span>
                            </div>
                            <div class="p-2.5 rounded-xl bg-[#041118] border border-cyan-600/50 text-[11px] space-y-1 font-mono text-cyan-300" style="background:#041118 !important;">
                                <div class="flex justify-between"><span style="color:#67e8f9 !important;">HUMAN FRICTION:</span><span class="text-slate-100 font-bold" style="color:#f1f5f9 !important;">0% (INVISIBLE)</span></div>
                                <div class="flex justify-between text-emerald-400 font-bold" style="color:#4ade80 !important;"><span style="color:#67e8f9 !important;">BOT TRAP:</span><span style="color:#4ade80 !important;">ACTIVE &amp; ARMED</span></div>
                            </div>
                        </div>
                    </div>
                    <p class="relative z-10 text-xs text-slate-600 dark:text-slate-300 leading-relaxed font-medium pt-2 border-t border-slate-100 dark:border-slate-800">
                        دام نامرئی در کدهای فرم که فقط ربات‌های اسپمر آن را پر می‌کنند؛ بدون هیچ نمایشی برای مشتریان واقعی شما.
                    </p>
                </article>

            </div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 4. INTERACTIVE WP-LOGIN STYLER STUDIO PREVIEW -->
    <!-- ========================================================================= -->
    <section id="login-styler" aria-labelledby="styler-heading" class="py-16 md:py-22 bg-slate-100/85 dark:bg-slate-900/75 border-y border-slate-200 dark:border-slate-800 relative overflow-hidden">
        <!-- Ambient Orbs & Background Icons -->
        <div class="sec-bg-layer" aria-hidden="true">
            <div class="sec-glow-orb orb-tr-indigo"></div>
            <div class="sec-glow-orb orb-tl-purple"></div>
            <i class="fas fa-palette sec-floating-icon sec-icon-tr sec-icon-indigo"></i>
            <i class="fas fa-fingerprint sec-floating-icon sec-icon-bl sec-icon-purple"></i>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                
                <!-- Right Column: Styler Controls & Features -->
                <div class="lg:col-span-5 space-y-5 text-right">
                    <div class="text-xs font-black text-purple-600 dark:text-purple-400 flex items-center gap-2">
                        <i class="fas fa-paintbrush"></i>
                        <span>۰۳. استودیوی اختصاصی طراحی صفحه ورود (WP-Login Styler)</span>
                    </div>
                    <h2 id="styler-heading" class="text-2xl sm:text-4xl font-black text-slate-900 dark:text-white leading-tight" style="text-wrap: balance;">
                        تغییر آسان ظاهر صفحه ورود وردپرس بدون نیاز به افزونه جانبی
                    </h2>
                    <p class="text-slate-600 dark:text-slate-300 text-xs sm:text-sm leading-relaxed font-medium">
                        صفحه خشک و پیش‌فرض <code class="px-1.5 py-0.5 rounded bg-white dark:bg-slate-800 text-indigo-600 dark:text-indigo-400 font-mono text-xs border border-slate-200 dark:border-slate-700">wp-login.php</code> را تنها با چند کلیک به یک درگاه ورود مدرن و هماهنگ با رنگ برند خود تبدیل کنید؛ همراه با ۶ مدل چیدمان آماده، والپیپرهای گرادیانت نوری و فونت‌های فارسی آفلاین.
                    </p>

                    <!-- Interactive Live Theme Switcher for WP-Login Mockup -->
                    <div class="glow-card glow-indigo p-4 rounded-2xl bg-white dark:bg-slate-900 border border-indigo-200 dark:border-indigo-500/30 space-y-3">
                        <div class="card-top-beam bg-gradient-to-r from-transparent via-indigo-500 to-transparent"></div>
                        <div class="relative z-10 text-xs font-black text-slate-900 dark:text-white flex items-center justify-between">
                            <span>انتخاب تم زنده پیش‌نمایش صفحه ورود:</span>
                            <span id="login-preview-theme-label" class="text-indigo-600 dark:text-indigo-400 font-mono text-[11px]">Royal Navy</span>
                        </div>
                        <div class="relative z-10 grid grid-cols-2 sm:grid-cols-4 gap-2">
                            <button type="button" onclick="changeLoginMockupTheme('navy')" class="login-theme-btn p-2 rounded-xl bg-slate-900 text-white border-2 border-indigo-500 text-[11px] font-black flex items-center justify-center gap-1.5 cursor-pointer">
                                <span class="w-2.5 h-2.5 rounded-full bg-indigo-500"></span>
                                <span>سرمه‌ای</span>
                            </button>
                            <button type="button" onclick="changeLoginMockupTheme('emerald')" class="login-theme-btn p-2 rounded-xl bg-emerald-950 text-emerald-100 border border-emerald-700 text-[11px] font-bold flex items-center justify-center gap-1.5 cursor-pointer">
                                <span class="w-2.5 h-2.5 rounded-full bg-emerald-400"></span>
                                <span>زمردی</span>
                            </button>
                            <button type="button" onclick="changeLoginMockupTheme('purple')" class="login-theme-btn p-2 rounded-xl bg-purple-950 text-purple-100 border border-purple-700 text-[11px] font-bold flex items-center justify-center gap-1.5 cursor-pointer">
                                <span class="w-2.5 h-2.5 rounded-full bg-purple-400"></span>
                                <span>کهکشانی</span>
                            </button>
                            <button type="button" onclick="changeLoginMockupTheme('amber')" class="login-theme-btn p-2 rounded-xl bg-stone-900 text-amber-100 border border-amber-700 text-[11px] font-bold flex items-center justify-center gap-1.5 cursor-pointer">
                                <span class="w-2.5 h-2.5 rounded-full bg-amber-400"></span>
                                <span>طلایی</span>
                            </button>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-3 text-xs font-bold text-slate-800 dark:text-slate-200">
                        <div class="p-3 rounded-xl bg-white dark:bg-slate-800/90 border border-slate-200 dark:border-slate-700 flex items-center gap-2 shadow-sm">
                            <i class="fas fa-table-cells-large text-indigo-500"></i>
                            <span>۶ مدل چیدمان آماده</span>
                        </div>
                        <div class="p-3 rounded-xl bg-white dark:bg-slate-800/90 border border-slate-200 dark:border-slate-700 flex items-center gap-2 shadow-sm">
                            <i class="fas fa-palette text-purple-500"></i>
                            <span>۲۰+ والپیپر گرادیانت نوری</span>
                        </div>
                        <div class="p-3 rounded-xl bg-white dark:bg-slate-800/90 border border-slate-200 dark:border-slate-700 flex items-center gap-2 shadow-sm">
                            <i class="fas fa-font text-amber-500"></i>
                            <span>فونت‌های فارسی آفلاین</span>
                        </div>
                        <div class="p-3 rounded-xl bg-white dark:bg-slate-800/90 border border-slate-200 dark:border-slate-700 flex items-center gap-2 shadow-sm">
                            <i class="fas fa-user-shield text-emerald-500"></i>
                            <span>سپر ضد بروت‌فورس ورود</span>
                        </div>
                    </div>

                    <div class="pt-1">
                        <a href="/demo.php?tab=login" class="inline-flex items-center gap-2.5 px-6 py-3.5 rounded-2xl bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-500 hover:to-purple-500 text-white font-black text-xs sm:text-sm shadow-xl shadow-indigo-600/30 transition-all">
                            <i class="fas fa-desktop text-amber-300"></i>
                            <span>طراحی زنده صفحه ورود در دموی افزونه</span>
                        </a>
                    </div>
                </div>

                <!-- Left Column: Interactive Browser Mockup of WP-Login -->
                <div class="lg:col-span-7">
                    <div id="login-mockup-frame" class="rounded-3xl border-2 border-indigo-500/60 shadow-[0_25px_70px_-15px_rgba(99,102,241,0.4)] overflow-hidden bg-slate-950 text-white transition-all duration-300 relative">
                        <div class="card-top-beam bg-gradient-to-r from-transparent via-indigo-400 to-transparent"></div>
                        <!-- Browser Header Bar -->
                        <div class="px-5 py-3 bg-slate-900 border-b border-slate-800 flex items-center justify-between text-xs dark-contrast-card">
                            <div class="flex items-center gap-1.5">
                                <span class="w-3 h-3 rounded-full bg-rose-500"></span>
                                <span class="w-3 h-3 rounded-full bg-amber-400"></span>
                                <span class="w-3 h-3 rounded-full bg-emerald-400"></span>
                            </div>
                            <div class="px-4 py-1 rounded-lg bg-slate-950 border border-slate-800 text-[11px] font-mono text-slate-300" dir="ltr" style="color:#cbd5e1 !important;">
                                https://yoursite.ir/wp-login.php
                            </div>
                            <span id="login-mockup-badge" class="text-indigo-300 font-black text-[10px] tracking-wide" style="color:#a5b4fc !important;">Royal Navy Theme</span>
                        </div>

                        <!-- Inside Deep Stage -->
                        <div id="login-mockup-canvas" class="p-6 sm:p-8 bg-gradient-to-br from-[#050B14] via-[#0A1628] to-[#030712] space-y-4 transition-colors duration-300 relative overflow-hidden">
                            <div class="absolute -top-12 -right-12 w-40 h-40 bg-indigo-500/20 rounded-full blur-2xl pointer-events-none"></div>
                            <div class="absolute -bottom-12 -left-12 w-40 h-40 bg-emerald-500/15 rounded-full blur-2xl pointer-events-none"></div>
                            <div id="login-mockup-card" class="relative z-10 p-6 rounded-2xl bg-slate-900/90 border border-blue-500/40 shadow-2xl space-y-4 max-w-md mx-auto">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-3">
                                        <div id="login-mockup-icon" class="w-10 h-10 rounded-xl bg-indigo-600/30 border border-indigo-500/50 flex items-center justify-center text-indigo-400">
                                            <i class="fas fa-shield-halved"></i>
                                        </div>
                                        <div>
                                            <h3 class="font-black text-sm text-white">ورود به حساب کاربری سایت</h3>
                                            <span class="text-[10px] text-slate-400">محافظت‌شده با کپچای بومی گاردفای پرو</span>
                                        </div>
                                    </div>
                                    <span class="text-[10px] text-emerald-400 font-mono font-bold">SHA-256</span>
                                </div>

                                <div class="space-y-2.5 text-xs text-right">
                                    <div>
                                        <label for="mockup-user-input" class="block text-[11px] text-slate-300 font-bold mb-1">نام کاربری یا ایمیل</label>
                                        <input id="mockup-user-input" type="text" value="admin@yoursite.ir" readonly class="w-full bg-slate-950 border border-slate-700 rounded-xl px-3.5 py-2.5 text-white font-mono text-xs" />
                                    </div>
                                    <div>
                                        <label for="mockup-pass-input" class="block text-[11px] text-slate-300 font-bold mb-1">رمز عبور</label>
                                        <input id="mockup-pass-input" type="password" value="••••••••••••" readonly class="w-full bg-slate-950 border border-slate-700 rounded-xl px-3.5 py-2.5 text-white font-mono text-xs" />
                                    </div>
                                </div>

                                <!-- Integrated Slider inside Styler Mockup -->
                                <div class="relative h-10 rounded-full bg-[#031024] border border-blue-500/70 flex items-center justify-center overflow-hidden">
                                    <div id="login-mockup-slider-bar" class="absolute top-0 right-0 bottom-0 w-full bg-gradient-to-l from-emerald-600 to-teal-500 opacity-90"></div>
                                    <span class="relative z-10 text-[11px] font-black text-white">هویت انسانی شما تایید شد ✓</span>
                                </div>

                                <button id="login-mockup-submit" type="button" class="w-full py-3 rounded-xl bg-gradient-to-r from-blue-600 via-indigo-600 to-cyan-600 text-white font-black text-xs shadow-lg">
                                    ورود امن به پیشخوان وردپرس
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 5. WOOCOMMERCE, DIGITS & POPULAR FORMS ECOSYSTEM -->
    <!-- ========================================================================= -->
    <section id="forms-protection" aria-labelledby="forms-heading" class="py-16 md:py-22 relative overflow-hidden ambient-grid-pattern">
        <!-- Ambient Orbs & Background Icons -->
        <div class="sec-bg-layer" aria-hidden="true">
            <div class="sec-glow-orb orb-bl-emerald"></div>
            <div class="sec-glow-orb orb-tr-indigo"></div>
            <i class="fas fa-cart-shopping sec-floating-icon sec-icon-tr sec-icon-purple"></i>
            <i class="fas fa-mobile-screen-button sec-floating-icon sec-icon-bl sec-icon-emerald"></i>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10 space-y-10">
            
            <div class="text-center max-w-3xl mx-auto space-y-3">
                <div class="text-xs font-black text-emerald-600 dark:text-emerald-400 flex items-center justify-center gap-2">
                    <i class="fas fa-plug-circle-check"></i>
                    <span>۰۴. یکپارچگی کامل با افزونه‌های محبوب وردپرس</span>
                </div>
                <h2 id="forms-heading" class="text-2xl sm:text-4xl font-black text-slate-900 dark:text-white leading-tight" style="text-wrap: balance;">
                    حفاظت یک‌کلیکی از ووکامرس، دیجیتس، المنتور و فرم‌سازها
                </h2>
                <p class="text-slate-600 dark:text-slate-300 text-xs sm:text-base leading-relaxed font-medium">
                    بدون نیاز به کدنویسی یا دستکاری قالب؛ کافیست در پیشخوان افزونه، تیک فرم‌های مورد نظرتان را فعال کنید:
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 text-right">
                
                <!-- 1. WooCommerce -->
                <article class="glow-card glow-purple p-6 rounded-3xl bg-gradient-to-br from-white via-white to-purple-50/60 dark:from-slate-900 dark:via-slate-900 dark:to-purple-950/35 border border-purple-300/80 dark:border-purple-500/35 flex flex-col justify-between space-y-4">
                    <div class="card-top-beam bg-gradient-to-r from-transparent via-purple-500 to-transparent"></div>
                    <div class="card-corner-glow bg-purple-500"></div>
                    <i class="fas fa-cart-shopping card-bg-icon text-purple-600 dark:text-purple-400"></i>
                    <div class="relative z-10 space-y-3">
                        <div class="flex items-center justify-between pb-3 border-b border-slate-100 dark:border-slate-800">
                            <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-purple-500 to-indigo-600 text-white flex items-center justify-center text-xl icon-orb">
                                <i class="fas fa-cart-shopping"></i>
                            </div>
                            <span class="text-xs font-black text-purple-600 dark:text-purple-400">WooCommerce</span>
                        </div>
                        <h3 class="font-black text-base text-slate-900 dark:text-white">فروشگاه ووکامرس</h3>
                        <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed font-medium">
                            محافظت از صفحه تسویه‌حساب (Checkout)، ورود و ثبت‌نام خریداران و فرم پیگیری سفارش بدون ایجاد اصطکاک در خرید.
                        </p>
                    </div>
                    <div class="relative z-10 pt-3 border-t border-slate-100 dark:border-slate-800 text-[11px] text-purple-700 dark:text-purple-300 font-bold flex items-center gap-1.5">
                        <i class="fas fa-circle-check text-purple-600"></i>
                        <span>جلوگیری از سفارشات فیک و رباتیک</span>
                    </div>
                </article>

                <!-- 2. Digits OTP -->
                <article class="glow-card glow-emerald p-6 rounded-3xl bg-gradient-to-br from-white via-white to-emerald-50/60 dark:from-slate-900 dark:via-slate-900 dark:to-emerald-950/35 border border-emerald-300/80 dark:border-emerald-500/35 flex flex-col justify-between space-y-4">
                    <div class="card-top-beam bg-gradient-to-r from-transparent via-emerald-500 to-transparent"></div>
                    <div class="card-corner-glow bg-emerald-500"></div>
                    <i class="fas fa-mobile-screen card-bg-icon text-emerald-600 dark:text-emerald-400"></i>
                    <div class="relative z-10 space-y-3">
                        <div class="flex items-center justify-between pb-3 border-b border-slate-100 dark:border-slate-800">
                            <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-emerald-500 to-teal-600 text-white flex items-center justify-center text-xl icon-orb">
                                <i class="fas fa-mobile-screen"></i>
                            </div>
                            <span class="text-xs font-black text-emerald-600 dark:text-emerald-400">Digits SMS OTP</span>
                        </div>
                        <h3 class="font-black text-base text-slate-900 dark:text-white">ورود پیامکی دیجیتس</h3>
                        <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed font-medium">
                            توقف کامل حملات SMS Bombing و جلوگیری از خالی شدن شارژ پنل پیامک در فرم‌های ورود و عضویت موبایلی.
                        </p>
                    </div>
                    <div class="relative z-10 pt-3 border-t border-slate-100 dark:border-slate-800 text-[11px] text-emerald-700 dark:text-emerald-300 font-bold flex items-center gap-1.5">
                        <i class="fas fa-circle-check text-emerald-600"></i>
                        <span>حفاظت ۱۰۰٪ از اعتبار پنل پیامک</span>
                    </div>
                </article>

                <!-- 3. Form Builders -->
                <article class="glow-card glow-indigo p-6 rounded-3xl bg-gradient-to-br from-white via-white to-indigo-50/60 dark:from-slate-900 dark:via-slate-900 dark:to-indigo-950/35 border border-indigo-300/80 dark:border-indigo-500/35 flex flex-col justify-between space-y-4">
                    <div class="card-top-beam bg-gradient-to-r from-transparent via-indigo-500 to-transparent"></div>
                    <div class="card-corner-glow bg-indigo-500"></div>
                    <i class="fas fa-cubes card-bg-icon text-indigo-600 dark:text-indigo-400"></i>
                    <div class="relative z-10 space-y-3">
                        <div class="flex items-center justify-between pb-3 border-b border-slate-100 dark:border-slate-800">
                            <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-indigo-500 to-blue-600 text-white flex items-center justify-center text-xl icon-orb">
                                <i class="fas fa-cubes"></i>
                            </div>
                            <span class="text-xs font-black text-indigo-600 dark:text-indigo-400">Form Builders</span>
                        </div>
                        <h3 class="font-black text-base text-slate-900 dark:text-white">المنتور و فرم‌سازها</h3>
                        <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed font-medium">
                            هماهنگی کامل با فرم‌های Elementor Pro، گرویتی فرمز (Gravity Forms)، فرم تماس ۷ (CF7)، WPForms و فلوئنت فرمز.
                        </p>
                    </div>
                    <div class="relative z-10 pt-3 border-t border-slate-100 dark:border-slate-800 text-[11px] text-indigo-700 dark:text-indigo-300 font-bold flex items-center gap-1.5">
                        <i class="fas fa-circle-check text-indigo-600"></i>
                        <span>پشتیبانی از فرم‌های ایجکسی (AJAX)</span>
                    </div>
                </article>

                <!-- 4. Core WordPress & Caching -->
                <article class="glow-card glow-amber p-6 rounded-3xl bg-gradient-to-br from-white via-white to-amber-50/60 dark:from-slate-900 dark:via-slate-900 dark:to-amber-950/35 border border-amber-300/80 dark:border-amber-500/35 flex flex-col justify-between space-y-4">
                    <div class="card-top-beam bg-gradient-to-r from-transparent via-amber-500 to-transparent"></div>
                    <div class="card-corner-glow bg-amber-500"></div>
                    <i class="fas fa-rocket card-bg-icon text-amber-600 dark:text-amber-400"></i>
                    <div class="relative z-10 space-y-3">
                        <div class="flex items-center justify-between pb-3 border-b border-slate-100 dark:border-slate-800">
                            <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-amber-500 to-orange-500 text-white flex items-center justify-center text-xl icon-orb">
                                <i class="fas fa-rocket"></i>
                            </div>
                            <span class="text-xs font-black text-amber-600 dark:text-amber-400">Cache Friendly</span>
                        </div>
                        <h3 class="font-black text-base text-slate-900 dark:text-white">سازگار با کش و هسته وردپرس</h3>
                        <p class="text-xs text-slate-600 dark:text-slate-300 leading-relaxed font-medium">
                            محافظت از دیدگاه‌ها و ورود وردپرس با فناوری توکن پویا (AJAX Nonce)؛ بدون خطای کش در LiteSpeed و WP Rocket.
                        </p>
                    </div>
                    <div class="relative z-10 pt-3 border-t border-slate-100 dark:border-slate-800 text-[11px] text-amber-700 dark:text-amber-400 font-bold flex items-center gap-1.5">
                        <i class="fas fa-circle-check text-amber-500"></i>
                        <span>بدون انقضای توکن در صفحات کش‌شده</span>
                    </div>
                </article>

            </div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 6. LOGIN HARDENING SHIELDS & INTERACTIVE FIREWALL RADAR -->
    <!-- ========================================================================= -->
    <section id="login-hardening" aria-labelledby="hardening-heading" class="py-16 md:py-22 bg-slate-100/85 dark:bg-slate-900/75 border-y border-slate-200 dark:border-slate-800 relative overflow-hidden">
        <!-- Ambient Orbs & Background Icons -->
        <div class="sec-bg-layer" aria-hidden="true">
            <div class="sec-glow-orb orb-tr-indigo"></div>
            <div class="sec-glow-orb orb-br-rose"></div>
            <i class="fas fa-user-shield sec-floating-icon sec-icon-tl sec-icon-indigo"></i>
            <i class="fas fa-shield-virus sec-floating-icon sec-icon-br sec-icon-emerald"></i>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10 space-y-12">
            
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto space-y-3">
                <div class="text-xs font-black text-indigo-600 dark:text-indigo-400 flex items-center justify-center gap-2">
                    <i class="fas fa-shield-halved"></i>
                    <span>۰۵. سپرهای امنیتی چندلایه و فایروال هوشمند</span>
                </div>
                <h2 id="hardening-heading" class="text-2xl sm:text-4xl font-black text-slate-900 dark:text-white leading-tight" style="text-wrap: balance;">
                    ۶ سپر دفاعی اختصاصی برای قفل کردن راه‌های نفوذ به وردپرس
                </h2>
                <p class="text-slate-600 dark:text-slate-300 text-xs sm:text-base leading-relaxed font-medium">
                    علاوه بر کپچای بومی، گاردفای پرو شما را از نصب افزونه‌های سنگین امنیتی بی‌نیاز می‌کند:
                </p>
            </div>

            <!-- 6 Login Hardening Shields Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 text-right">
                
                <!-- Shield 1 -->
                <div class="glow-card glow-indigo p-6 rounded-3xl bg-gradient-to-br from-white via-white to-indigo-50/50 dark:from-slate-900 dark:via-slate-900 dark:to-indigo-950/30 border border-indigo-300/80 dark:border-indigo-500/35 space-y-3">
                    <div class="card-top-beam bg-gradient-to-r from-transparent via-indigo-500 to-transparent"></div>
                    <div class="card-corner-glow bg-indigo-500"></div>
                    <i class="fas fa-lock card-bg-icon text-indigo-600 dark:text-indigo-400"></i>
                    <div class="relative z-10 flex items-center justify-between pb-3 border-b border-slate-100 dark:border-slate-800">
                        <div class="w-11 h-11 rounded-2xl bg-gradient-to-br from-indigo-500 to-blue-600 text-white flex items-center justify-center text-base icon-orb">
                            <i class="fas fa-lock"></i>
                        </div>
                        <span class="text-xs font-black text-emerald-600 dark:text-emerald-400">سپر ۰۱ · فعال ✓</span>
                    </div>
                    <h3 class="relative z-10 font-black text-sm text-slate-900 dark:text-white">پنهان‌سازی خطاهای تفکیکی ورود</h3>
                    <p class="relative z-10 text-xs text-slate-600 dark:text-slate-300 leading-relaxed font-medium">
                        جلوگیری از لو رفتن وجود یا عدم وجود «نام کاربری» در پیام‌های خطای وردپرس برای خنثی‌سازی حملات User Enumeration.
                    </p>
                </div>

                <!-- Shield 2 -->
                <div class="glow-card glow-rose p-6 rounded-3xl bg-gradient-to-br from-white via-white to-rose-50/50 dark:from-slate-900 dark:via-slate-900 dark:to-rose-950/30 border border-rose-300/80 dark:border-rose-500/35 space-y-3">
                    <div class="card-top-beam bg-gradient-to-r from-transparent via-rose-500 to-transparent"></div>
                    <div class="card-corner-glow bg-rose-500"></div>
                    <i class="fas fa-user-shield card-bg-icon text-rose-600 dark:text-rose-400"></i>
                    <div class="relative z-10 flex items-center justify-between pb-3 border-b border-slate-100 dark:border-slate-800">
                        <div class="w-11 h-11 rounded-2xl bg-gradient-to-br from-rose-500 to-red-600 text-white flex items-center justify-center text-base icon-orb">
                            <i class="fas fa-user-shield"></i>
                        </div>
                        <span class="text-xs font-black text-emerald-600 dark:text-emerald-400">سپر ۰۲ · فعال ✓</span>
                    </div>
                    <h3 class="relative z-10 font-black text-sm text-slate-900 dark:text-white">مسدودسازی اسکن نام کاربری مدیران</h3>
                    <p class="relative z-10 text-xs text-slate-600 dark:text-slate-300 leading-relaxed font-medium">
                        بستن آدرس‌های <code class="px-1 py-0.5 rounded bg-slate-100 dark:bg-slate-800 font-mono text-[11px]">/?author=1</code> و محدودسازی دسترسی غیرمجاز به لیست کاربران در REST API وردپرس.
                    </p>
                </div>

                <!-- Shield 3 -->
                <div class="glow-card glow-amber p-6 rounded-3xl bg-gradient-to-br from-white via-white to-amber-50/50 dark:from-slate-900 dark:via-slate-900 dark:to-amber-950/30 border border-amber-300/80 dark:border-amber-500/35 space-y-3">
                    <div class="card-top-beam bg-gradient-to-r from-transparent via-amber-500 to-transparent"></div>
                    <div class="card-corner-glow bg-amber-500"></div>
                    <i class="fas fa-bolt card-bg-icon text-amber-600 dark:text-amber-400"></i>
                    <div class="relative z-10 flex items-center justify-between pb-3 border-b border-slate-100 dark:border-slate-800">
                        <div class="w-11 h-11 rounded-2xl bg-gradient-to-br from-amber-500 to-orange-500 text-white flex items-center justify-center text-base icon-orb">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <span class="text-xs font-black text-emerald-600 dark:text-emerald-400">سپر ۰۳ · فعال ✓</span>
                    </div>
                    <h3 class="relative z-10 font-black text-sm text-slate-900 dark:text-white">قفل هوشمند ضد حملات Brute-Force</h3>
                    <p class="relative z-10 text-xs text-slate-600 dark:text-slate-300 leading-relaxed font-medium">
                        مسدودسازی موقت و خودکار IP مهاجم پس از تعداد مشخصی تلاش ناموفق (مثلاً ۳ بار) بدون فشار به دیتابیس سایت.
                    </p>
                </div>

                <!-- Shield 4 -->
                <div class="glow-card glow-purple p-6 rounded-3xl bg-gradient-to-br from-white via-white to-purple-50/50 dark:from-slate-900 dark:via-slate-900 dark:to-purple-950/30 border border-purple-300/80 dark:border-purple-500/35 space-y-3">
                    <div class="card-top-beam bg-gradient-to-r from-transparent via-purple-500 to-transparent"></div>
                    <div class="card-corner-glow bg-purple-500"></div>
                    <i class="fas fa-ban card-bg-icon text-purple-600 dark:text-purple-400"></i>
                    <div class="relative z-10 flex items-center justify-between pb-3 border-b border-slate-100 dark:border-slate-800">
                        <div class="w-11 h-11 rounded-2xl bg-gradient-to-br from-purple-500 to-fuchsia-600 text-white flex items-center justify-center text-base icon-orb">
                            <i class="fas fa-ban"></i>
                        </div>
                        <span class="text-xs font-black text-emerald-600 dark:text-emerald-400">سپر ۰۴ · فعال ✓</span>
                    </div>
                    <h3 class="relative z-10 font-black text-sm text-slate-900 dark:text-white">غیرفعال‌سازی کامل پروتکل XML-RPC</h3>
                    <p class="relative z-10 text-xs text-slate-600 dark:text-slate-300 leading-relaxed font-medium">
                        بستن درگاه آسیب‌پذیر <code class="px-1 py-0.5 rounded bg-slate-100 dark:bg-slate-800 font-mono text-[11px]">xmlrpc.php</code> که منشأ اصلی حملات حدس رمز عبور انبوه و مصرف منابع سرور است.
                    </p>
                </div>

                <!-- Shield 5 -->
                <div class="glow-card glow-emerald p-6 rounded-3xl bg-gradient-to-br from-white via-white to-emerald-50/50 dark:from-slate-900 dark:via-slate-900 dark:to-emerald-950/30 border border-emerald-300/80 dark:border-emerald-500/35 space-y-3">
                    <div class="card-top-beam bg-gradient-to-r from-transparent via-emerald-500 to-transparent"></div>
                    <div class="card-corner-glow bg-emerald-500"></div>
                    <i class="fas fa-key card-bg-icon text-emerald-600 dark:text-emerald-400"></i>
                    <div class="relative z-10 flex items-center justify-between pb-3 border-b border-slate-100 dark:border-slate-800">
                        <div class="w-11 h-11 rounded-2xl bg-gradient-to-br from-emerald-500 to-teal-600 text-white flex items-center justify-center text-base icon-orb">
                            <i class="fas fa-key"></i>
                        </div>
                        <span class="text-xs font-black text-emerald-600 dark:text-emerald-400">سپر ۰۵ · فعال ✓</span>
                    </div>
                    <h3 class="relative z-10 font-black text-sm text-slate-900 dark:text-white">غیرفعال‌سازی رمز عبور برنامه‌ها</h3>
                    <p class="relative z-10 text-xs text-slate-600 dark:text-slate-300 leading-relaxed font-medium">
                        جلوگیری از ساخت توکن‌های Application Passwords برای جلوگیری از دور زدن صفحه ورود توسط بدافزارها.
                    </p>
                </div>

                <!-- Shield 6 -->
                <div class="glow-card glow-cyan p-6 rounded-3xl bg-gradient-to-br from-white via-white to-cyan-50/50 dark:from-slate-900 dark:via-slate-900 dark:to-cyan-950/30 border border-cyan-300/80 dark:border-cyan-500/35 space-y-3">
                    <div class="card-top-beam bg-gradient-to-r from-transparent via-cyan-500 to-transparent"></div>
                    <div class="card-corner-glow bg-cyan-500"></div>
                    <i class="fas fa-shield-halved card-bg-icon text-cyan-600 dark:text-cyan-400"></i>
                    <div class="relative z-10 flex items-center justify-between pb-3 border-b border-slate-100 dark:border-slate-800">
                        <div class="w-11 h-11 rounded-2xl bg-gradient-to-br from-cyan-500 to-blue-600 text-white flex items-center justify-center text-base icon-orb">
                            <i class="fas fa-shield-halved"></i>
                        </div>
                        <span class="text-xs font-black text-emerald-600 dark:text-emerald-400">سپر ۰۶ · فعال ✓</span>
                    </div>
                    <h3 class="relative z-10 font-black text-sm text-slate-900 dark:text-white">هدرهای امنیتی ضد Clickjacking</h3>
                    <p class="relative z-10 text-xs text-slate-600 dark:text-slate-300 leading-relaxed font-medium">
                        ارسال خودکار هدر <code class="px-1 py-0.5 rounded bg-slate-100 dark:bg-slate-800 font-mono text-[10.5px]">X-Frame-Options: SAMEORIGIN</code> برای جلوگیری از بارگذاری فرم ورود در آیفریم‌های فیشینگ.
                    </p>
                </div>

            </div>

            <!-- Interactive Live Firewall Log Radar -->
            <div id="security-radar" class="relative overflow-hidden rounded-3xl bg-slate-950 border-2 border-indigo-500/50 p-6 sm:p-8 shadow-[0_25px_70px_-15px_rgba(79,70,229,0.4)] text-white dark-contrast-card">
                <div class="card-top-beam bg-gradient-to-r from-transparent via-indigo-400 to-transparent"></div>
                <i class="fas fa-shield-virus card-bg-icon text-indigo-400"></i>
                <div class="relative z-10 flex flex-col sm:flex-row sm:items-center justify-between gap-4 pb-5 border-b border-slate-800">
                    <div class="space-y-1 text-right">
                        <h3 class="font-black text-base sm:text-lg text-white flex items-center gap-2">
                            <i class="fas fa-shield-virus text-indigo-400"></i>
                            <span>گزارش زنده رویدادهای فایروال و لاگ امنیتی (با خروجی CSV / Excel)</span>
                        </h3>
                        <p class="text-xs text-slate-400">امکان معاف کردن IP مدیران (Whitelist) و بررسی دقیق جزئیات هر رویداد در پیشخوان وردپرس</p>
                    </div>
                    <div class="flex flex-wrap items-center gap-1.5">
                        <button type="button" onclick="filterFirewallLogs('all', this)" class="fw-filter-btn px-3 py-1.5 rounded-xl bg-indigo-600 text-white text-xs font-black cursor-pointer">همه رویدادها</button>
                        <button type="button" onclick="filterFirewallLogs('blocked', this)" class="fw-filter-btn px-3 py-1.5 rounded-xl bg-slate-900 text-slate-300 border border-slate-800 text-xs font-bold cursor-pointer">حملات دفع‌شده</button>
                        <button type="button" onclick="filterFirewallLogs('verified', this)" class="fw-filter-btn px-3 py-1.5 rounded-xl bg-slate-900 text-slate-300 border border-slate-800 text-xs font-bold cursor-pointer">عبورهای مجاز</button>
                    </div>
                </div>

                <div class="relative z-10 grid grid-cols-1 md:grid-cols-2 gap-3 pt-5 font-mono text-xs">
                    <div data-log-type="blocked" class="fw-log-item p-3.5 rounded-2xl bg-rose-950/40 border border-rose-500/30 flex items-center justify-between text-rose-200" style="background:#23040e !important;">
                        <span class="font-bold">[BLOCK] Brute-Force on /wp-login.php</span>
                        <span class="text-rose-400 font-bold tabular-nums">IP: 185.220.xxx.xx</span>
                    </div>
                    <div data-log-type="blocked" class="fw-log-item p-3.5 rounded-2xl bg-amber-950/40 border border-amber-500/30 flex items-center justify-between text-amber-200" style="background:#1c1304 !important;">
                        <span class="font-bold">[TRAP] Honeypot Bot on Digits Register</span>
                        <span class="text-amber-400 font-bold tabular-nums">IP: 91.240.xxx.xx</span>
                    </div>
                    <div data-log-type="verified" class="fw-log-item p-3.5 rounded-2xl bg-emerald-950/40 border border-emerald-500/30 flex items-center justify-between text-emerald-200" style="background:#021a12 !important;">
                        <span class="font-bold">[ALLOW] WooCommerce Checkout Verified</span>
                        <span class="text-emerald-400 font-bold tabular-nums">0.2ms • Slider</span>
                    </div>
                    <div data-log-type="verified" class="fw-log-item p-3.5 rounded-2xl bg-indigo-950/40 border border-indigo-500/30 flex items-center justify-between text-indigo-200" style="background:#071228 !important;">
                        <span class="font-bold">[ACTIVE] Smart Failover Local Shield</span>
                        <span class="text-cyan-400 font-bold tabular-nums">100% Uptime</span>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 7. PERFORMANCE, CORE WEB VITALS & INTERACTIVE CHARTS -->
    <!-- ========================================================================= -->
    <section id="performance" aria-labelledby="performance-heading" class="py-16 md:py-22 relative overflow-hidden ambient-grid-pattern">
        <!-- Ambient Orbs & Background Icons -->
        <div class="sec-bg-layer" aria-hidden="true">
            <div class="sec-glow-orb orb-bl-emerald"></div>
            <div class="sec-glow-orb orb-tr-indigo"></div>
            <i class="fas fa-gauge-high sec-floating-icon sec-icon-tr sec-icon-emerald"></i>
            <i class="fas fa-chart-line sec-floating-icon sec-icon-bl sec-icon-indigo"></i>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10 space-y-10">
            
            <div class="text-center max-w-3xl mx-auto space-y-3">
                <div class="text-xs font-black text-emerald-600 dark:text-emerald-400 flex items-center justify-center gap-2">
                    <i class="fas fa-gauge-high"></i>
                    <span>۰۶. مهندسی‌شده برای بالاترین سرعت و سئو (Core Web Vitals)</span>
                </div>
                <h2 id="performance-heading" class="text-2xl sm:text-4xl font-black text-slate-900 dark:text-white leading-tight" style="text-wrap: balance;">
                    چرا گاردفای پرو با بار مصرفی زیر ۱۰ کیلوبایت هیچ افت سرعتی ایجاد نمی‌کند؟
                </h2>
                <p class="text-slate-600 dark:text-slate-300 text-xs sm:text-base leading-relaxed font-medium">
                    در حالی که افزونه‌های دیگر صدها کیلوبایت فایل جاوااسکریپت روی تمام صفحات سایت بارگذاری می‌کنند، بار مصرفی گاردفای پرو روی لود فرانت‌اند صفحات سایت زیر ۱۰ کیلوبایت است:
                </p>
            </div>

            <!-- Instant Visual Benchmark Bars (Zero-Latency Proof) -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="glow-card glow-emerald p-6 rounded-3xl bg-gradient-to-br from-white via-white to-emerald-50/50 dark:from-slate-900 dark:via-slate-900 dark:to-emerald-950/30 border border-emerald-300/80 dark:border-emerald-500/35 space-y-4">
                    <div class="card-top-beam bg-gradient-to-r from-transparent via-emerald-500 to-transparent"></div>
                    <i class="fas fa-feather-pointed card-bg-icon text-emerald-600 dark:text-emerald-400"></i>
                    <div class="relative z-10 flex items-center justify-between text-xs font-black">
                        <span class="text-slate-900 dark:text-white flex items-center gap-2">
                            <i class="fas fa-feather-pointed text-emerald-500"></i>
                            <span>مقایسه بار مصرفی روی لود صفحه (Frontend Payload)</span>
                        </span>
                        <span class="text-emerald-600 dark:text-emerald-400">۵۰ برابر سبک‌تر</span>
                    </div>
                    <div class="relative z-10 space-y-3 text-xs">
                        <div class="space-y-1">
                            <div class="flex justify-between font-bold text-emerald-700 dark:text-emerald-400">
                                <span>گاردفای پرو (Guardify Pro)</span>
                                <span class="tabular-nums font-black">زیر ۱۰ KB (فوق‌سبک)</span>
                            </div>
                            <div class="w-full h-3 rounded-full bg-slate-100 dark:bg-slate-800 overflow-hidden">
                                <div class="h-full rounded-full bg-gradient-to-r from-emerald-500 to-teal-400" style="width: 4%;"></div>
                            </div>
                        </div>
                        <div class="space-y-1">
                            <div class="flex justify-between font-bold text-rose-600 dark:text-rose-400">
                                <span>گوگل ریکپچا (Google reCAPTCHA v2/v3)</span>
                                <span class="tabular-nums font-black">&gt; ۵۲۰ KB (سنگین)</span>
                            </div>
                            <div class="w-full h-3 rounded-full bg-slate-100 dark:bg-slate-800 overflow-hidden">
                                <div class="h-full rounded-full bg-gradient-to-r from-rose-500 to-red-500" style="width: 94%;"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="glow-card glow-indigo p-6 rounded-3xl bg-gradient-to-br from-white via-white to-indigo-50/50 dark:from-slate-900 dark:via-slate-900 dark:to-indigo-950/30 border border-indigo-300/80 dark:border-indigo-500/35 space-y-4">
                    <div class="card-top-beam bg-gradient-to-r from-transparent via-indigo-500 to-transparent"></div>
                    <i class="fas fa-gauge-high card-bg-icon text-indigo-600 dark:text-indigo-400"></i>
                    <div class="relative z-10 flex items-center justify-between text-xs font-black">
                        <span class="text-slate-900 dark:text-white flex items-center gap-2">
                            <i class="fas fa-gauge-high text-indigo-500"></i>
                            <span>امتیاز عملکرد Google PageSpeed Insights</span>
                        </span>
                        <span class="text-indigo-600 dark:text-indigo-400">حفظ رتبه سبز سئو</span>
                    </div>
                    <div class="relative z-10 space-y-3 text-xs">
                        <div class="space-y-1">
                            <div class="flex justify-between font-bold text-emerald-700 dark:text-emerald-400">
                                <span>صفحه ورود و پرداخت با گاردفای پرو</span>
                                <span class="tabular-nums font-black">۹۹ / ۱۰۰ (سبز کامل)</span>
                            </div>
                            <div class="w-full h-3 rounded-full bg-slate-100 dark:bg-slate-800 overflow-hidden">
                                <div class="h-full rounded-full bg-gradient-to-r from-emerald-500 to-teal-400" style="width: 99%;"></div>
                            </div>
                        </div>
                        <div class="space-y-1">
                            <div class="flex justify-between font-bold text-amber-600 dark:text-amber-400">
                                <span>صفحه دارای اسکریپت‌های کپچای خارجی</span>
                                <span class="tabular-nums font-black">۶۲ / ۱۰۰ (افت محسوس TBT)</span>
                            </div>
                            <div class="w-full h-3 rounded-full bg-slate-100 dark:bg-slate-800 overflow-hidden">
                                <div class="h-full rounded-full bg-gradient-to-r from-amber-500 to-orange-500" style="width: 62%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Interactive Recharts Containers -->
            <div id="traffic-chart-root" class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-3xl p-6 sm:p-8 shadow-lg"></div>
            <div id="web-vitals-chart-root" class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-3xl p-6 sm:p-8 shadow-lg"></div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 8. COMPREHENSIVE TECHNICAL COMPARISON TABLE -->
    <!-- ========================================================================= -->
    <section id="comparison" aria-labelledby="comparison-heading" class="py-16 md:py-22 bg-slate-100/85 dark:bg-slate-900/75 border-y border-slate-200 dark:border-slate-800 relative overflow-hidden">
        <!-- Ambient Orbs & Background Icons -->
        <div class="sec-bg-layer" aria-hidden="true">
            <div class="sec-glow-orb orb-tr-indigo"></div>
            <i class="fas fa-table-list sec-floating-icon sec-icon-tl sec-icon-indigo"></i>
            <i class="fas fa-database sec-floating-icon sec-icon-br sec-icon-emerald"></i>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10 space-y-8">
            
            <div class="text-center max-w-3xl mx-auto space-y-3">
                <div class="text-xs font-black text-indigo-600 dark:text-indigo-400 flex items-center justify-center gap-2">
                    <i class="fas fa-table-list"></i>
                    <span>۰۷. جدول مقایسه شفاف و فنی</span>
                </div>
                <h2 id="comparison-heading" class="text-2xl sm:text-4xl font-black text-slate-900 dark:text-white leading-tight" style="text-wrap: balance;">
                    مقایسه گاردفای پرو با سایر سرویس‌های کپچا
                </h2>
                <p class="text-slate-600 dark:text-slate-300 text-xs sm:text-base leading-relaxed font-medium">
                    بررسی دقیق معیارهایی که مستقیماً روی امنیت، سرعت لود و نرخ فروش سایت شما اثر می‌گذارند:
                </p>
            </div>

            <!-- Mobile Swipe Hint -->
            <div class="md:hidden text-center text-[11px] font-bold text-slate-500 dark:text-slate-400 flex items-center justify-center gap-1.5">
                <i class="fas fa-arrows-left-right text-indigo-500"></i>
                <span>برای مشاهده کامل جدول در موبایل، به چپ و راست بکشید</span>
            </div>

            <!-- Comparison Table Container -->
            <div class="relative z-10 max-w-6xl mx-auto overflow-hidden rounded-3xl border-2 border-indigo-500/30 dark:border-indigo-500/40 shadow-2xl bg-white dark:bg-slate-900">
                <div class="overflow-x-auto">
                    <table class="w-full text-right text-xs text-slate-700 dark:text-slate-200 border-collapse">
                        <thead>
                            <tr class="bg-slate-900 text-white font-black text-xs">
                                <th class="p-4 sm:p-5 w-1/3 min-w-[190px] border-b border-l border-slate-700 text-slate-100">
                                    شاخص ارزیابی فنی
                                </th>
                                <th class="p-4 sm:p-5 w-1/4 min-w-[190px] bg-indigo-950 text-amber-300 font-black border-b-2 border-x-2 border-amber-400 text-center">
                                    <div class="text-sm sm:text-base font-black text-amber-300 flex items-center justify-center gap-1.5">
                                        <i class="fas fa-shield-halved text-emerald-400"></i>
                                        <span>گاردفای پرو (Guardify Pro)</span>
                                    </div>
                                    <span class="text-[10px] text-indigo-200 font-normal block mt-0.5">پیشنهاد ویژه سایت‌های ایرانی</span>
                                </th>
                                <th class="p-4 sm:p-5 text-center text-slate-200 min-w-[145px] border-b border-l border-slate-700">
                                    <span class="text-white font-bold block">Google reCAPTCHA</span>
                                    <span class="text-[10px] text-slate-400 font-normal">سرویس ابری گوگل</span>
                                </th>
                                <th class="p-4 sm:p-5 text-center text-slate-200 min-w-[145px] border-b border-l border-slate-700">
                                    <span class="text-white font-bold block">Cloudflare Turnstile</span>
                                    <span class="text-[10px] text-slate-400 font-normal">سرویس ابری کلودفلر</span>
                                </th>
                                <th class="p-4 sm:p-5 text-center text-slate-200 min-w-[135px] border-b border-slate-700">
                                    <span class="text-white font-bold block">کپچاهای متفرقه</span>
                                    <span class="text-[10px] text-slate-400 font-normal">افزونه‌های رایگان قدیمی</span>
                                </th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-slate-200 dark:divide-slate-800 text-xs">
                            <!-- Row 1 -->
                            <tr class="hover:bg-slate-50/80 dark:hover:bg-slate-800/50 transition-colors">
                                <td class="p-4 font-bold text-slate-900 dark:text-white border-l border-slate-200 dark:border-slate-800">
                                    پایداری در اینترنت ملی و اختلال بین‌الملل
                                </td>
                                <td class="p-4 border-x-2 border-amber-400/80 bg-emerald-50/50 dark:bg-emerald-950/25 font-black text-emerald-800 dark:text-emerald-300 text-center">
                                    <i class="fas fa-circle-check text-emerald-600 ml-1"></i> ۱۰۰٪ فعال و بدون قطعی
                                </td>
                                <td class="p-4 text-center border-l border-slate-200 dark:border-slate-800 text-rose-600 dark:text-rose-400 font-bold">
                                    ✗ قطعی کامل و قفل فرم
                                </td>
                                <td class="p-4 text-center border-l border-slate-200 dark:border-slate-800 text-rose-600 dark:text-rose-400 font-bold">
                                    ✗ مسدود در شبکه ملی
                                </td>
                                <td class="p-4 text-center text-emerald-700 dark:text-emerald-400 font-bold">
                                    ✓ فعال
                                </td>
                            </tr>

                            <!-- Row 2 -->
                            <tr class="hover:bg-slate-50/80 dark:hover:bg-slate-800/50 transition-colors">
                                <td class="p-4 font-bold text-slate-900 dark:text-white border-l border-slate-200 dark:border-slate-800">
                                    بار مصرفی روی لود صفحات سایت (فرانت‌اند)
                                </td>
                                <td class="p-4 border-x-2 border-amber-400/80 bg-emerald-50/50 dark:bg-emerald-950/25 font-black text-emerald-800 dark:text-emerald-300 text-center tabular-nums">
                                    زیر ۱۰ KB (بدون افت سرعت لود)
                                </td>
                                <td class="p-4 text-center border-l border-slate-200 dark:border-slate-800 text-rose-600 dark:text-rose-400 font-bold tabular-nums">
                                    بیش از ۵۰۰ KB (فوق‌سنگین)
                                </td>
                                <td class="p-4 text-center border-l border-slate-200 dark:border-slate-800 text-amber-600 dark:text-amber-400 font-bold tabular-nums">
                                    حدود ۱۲۰ KB
                                </td>
                                <td class="p-4 text-center text-slate-600 dark:text-slate-400 font-bold tabular-nums">
                                    ۸۰ تا ۲۵۰ KB
                                </td>
                            </tr>

                            <!-- Row 3 -->
                            <tr class="hover:bg-slate-50/80 dark:hover:bg-slate-800/50 transition-colors">
                                <td class="p-4 font-bold text-slate-900 dark:text-white border-l border-slate-200 dark:border-slate-800">
                                    سرعت پاسخگویی و اعتبارسنجی (Latency)
                                </td>
                                <td class="p-4 border-x-2 border-amber-400/80 bg-emerald-50/50 dark:bg-emerald-950/25 font-black text-emerald-800 dark:text-emerald-300 text-center tabular-nums">
                                    ۰.۲ میلی‌ثانیه (در رم سرور)
                                </td>
                                <td class="p-4 text-center border-l border-slate-200 dark:border-slate-800 text-rose-600 dark:text-rose-400 font-bold tabular-nums">
                                    &gt; ۸۰۰ میلی‌ثانیه
                                </td>
                                <td class="p-4 text-center border-l border-slate-200 dark:border-slate-800 text-amber-600 dark:text-amber-400 font-bold tabular-nums">
                                    ۳۵۰ تا ۹۰۰ میلی‌ثانیه
                                </td>
                                <td class="p-4 text-center text-slate-600 dark:text-slate-400 font-bold tabular-nums">
                                    زیر ۳۰ میلی‌ثانیه
                                </td>
                            </tr>

                            <!-- Row 4 -->
                            <tr class="hover:bg-slate-50/80 dark:hover:bg-slate-800/50 transition-colors">
                                <td class="p-4 font-bold text-slate-900 dark:text-white border-l border-slate-200 dark:border-slate-800">
                                    استودیوی بازطراحی صفحه ورود (WP-Login Styler)
                                </td>
                                <td class="p-4 border-x-2 border-amber-400/80 bg-emerald-50/50 dark:bg-emerald-950/25 font-black text-indigo-900 dark:text-indigo-300 text-center">
                                    ✓ ۶ مدل چیدمان + ۲۰+ والپیپر نوری
                                </td>
                                <td class="p-4 text-center border-l border-slate-200 dark:border-slate-800 text-rose-500 font-bold">
                                    ✗ ندارد
                                </td>
                                <td class="p-4 text-center border-l border-slate-200 dark:border-slate-800 text-rose-500 font-bold">
                                    ✗ ندارد
                                </td>
                                <td class="p-4 text-center text-rose-500 font-bold">
                                    ✗ ندارد
                                </td>
                            </tr>

                            <!-- Row 5 -->
                            <tr class="hover:bg-slate-50/80 dark:hover:bg-slate-800/50 transition-colors">
                                <td class="p-4 font-bold text-slate-900 dark:text-white border-l border-slate-200 dark:border-slate-800">
                                    تنوع تم‌های رنگی و استایل کپچا
                                </td>
                                <td class="p-4 border-x-2 border-amber-400/80 bg-emerald-50/50 dark:bg-emerald-950/25 font-black text-slate-900 dark:text-white text-center">
                                    ✓ بیش از ۳۵ تم آماده رنگی
                                </td>
                                <td class="p-4 text-center border-l border-slate-200 dark:border-slate-800 text-slate-500 font-medium">
                                    فقط ۲ حالت (تیره / روشن)
                                </td>
                                <td class="p-4 text-center border-l border-slate-200 dark:border-slate-800 text-slate-500 font-medium">
                                    فقط ۲ حالت
                                </td>
                                <td class="p-4 text-center text-slate-500 font-medium">
                                    ساده و بدون تم
                                </td>
                            </tr>

                            <!-- Row 6 -->
                            <tr class="hover:bg-slate-50/80 dark:hover:bg-slate-800/50 transition-colors">
                                <td class="p-4 font-bold text-slate-900 dark:text-white border-l border-slate-200 dark:border-slate-800">
                                    سازگاری با افزونه‌های کش (LiteSpeed &amp; Rocket)
                                </td>
                                <td class="p-4 border-x-2 border-amber-400/80 bg-emerald-50/50 dark:bg-emerald-950/25 font-black text-emerald-800 dark:text-emerald-300 text-center">
                                    ✓ ۱۰۰٪ سازگار (AJAX Nonce)
                                </td>
                                <td class="p-4 text-center border-l border-slate-200 dark:border-slate-800 text-amber-600 font-medium">
                                    نیازمند استثنا کردن اسکریپت
                                </td>
                                <td class="p-4 text-center border-l border-slate-200 dark:border-slate-800 text-amber-600 font-medium">
                                    نیازمند تنظیمات دستی
                                </td>
                                <td class="p-4 text-center text-rose-600 font-bold">
                                    ✗ خطای مکرر انقضای سشن
                                </td>
                            </tr>

                            <!-- Row 7: Database Architecture -->
                            <tr class="hover:bg-slate-50/80 dark:hover:bg-slate-800/50 transition-colors">
                                <td class="p-4 font-bold text-slate-900 dark:text-white border-l border-slate-200 dark:border-slate-800">
                                    وضعیت پایگاه‌داده (دیتابیس) و نگهداری لاگ
                                </td>
                                <td class="p-4 border-x-2 border-amber-400/80 bg-emerald-50/50 dark:bg-emerald-950/25 font-black text-emerald-800 dark:text-emerald-300 text-center">
                                    ✓ جدول اختصاصی و بهینه برای لاگ‌های امنیتی و تنظیمات
                                </td>
                                <td class="p-4 text-center border-l border-slate-200 dark:border-slate-800 text-slate-500 font-medium">
                                    فاقد ثبت لاگ در دیتابیس
                                </td>
                                <td class="p-4 text-center border-l border-slate-200 dark:border-slate-800 text-slate-500 font-medium">
                                    فاقد ثبت لاگ در دیتابیس
                                </td>
                                <td class="p-4 text-center text-rose-600 font-bold">
                                    ✗ سنگین کردن جدول wp_options
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 9. 3-STEP QUICK SETUP GUIDE (HOWTO) -->
    <!-- ========================================================================= -->
    <section id="setup-guide" aria-labelledby="setup-heading" class="py-16 md:py-22 relative overflow-hidden ambient-grid-pattern">
        <!-- Ambient Orbs & Background Icons -->
        <div class="sec-bg-layer" aria-hidden="true">
            <div class="sec-glow-orb orb-center-cyan"></div>
            <i class="fas fa-wand-magic-sparkles sec-floating-icon sec-icon-tr sec-icon-indigo"></i>
            <i class="fas fa-circle-check sec-floating-icon sec-icon-bl sec-icon-emerald"></i>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10 space-y-10">
            
            <div class="text-center max-w-3xl mx-auto space-y-3">
                <div class="text-xs font-black text-emerald-600 dark:text-emerald-400 flex items-center justify-center gap-2">
                    <i class="fas fa-bolt"></i>
                    <span>۰۸. نصب و راه‌اندازی در کمتر از ۶۰ ثانیه</span>
                </div>
                <h2 id="setup-heading" class="text-2xl sm:text-4xl font-black text-slate-900 dark:text-white leading-tight" style="text-wrap: balance;">
                    راه‌اندازی آسان در ۳ گام بدون نیاز به کلید API خارجی
                </h2>
                <p class="text-slate-600 dark:text-slate-300 text-xs sm:text-base leading-relaxed font-medium">
                    برخلاف افزونه‌های وابسته به گوگل که نیازمند ثبت دامنه و دریافت کلیدهای پیچیده هستند، گاردفای پرو بلافاصله پس از نصب آماده به کار است:
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-right">
                
                <div class="glow-card glow-indigo p-7 rounded-3xl bg-gradient-to-br from-white via-white to-indigo-50/50 dark:from-slate-900 dark:via-slate-900 dark:to-indigo-950/35 border border-indigo-300/80 dark:border-indigo-500/35 space-y-4">
                    <div class="card-top-beam bg-gradient-to-r from-transparent via-indigo-500 to-transparent"></div>
                    <div class="card-corner-glow bg-indigo-500"></div>
                    <i class="fas fa-cloud-arrow-up card-bg-icon text-indigo-600 dark:text-indigo-400"></i>
                    <div class="relative z-10 flex items-center justify-between">
                        <span class="w-12 h-12 rounded-2xl bg-gradient-to-br from-indigo-500 to-blue-600 text-white flex items-center justify-center font-black text-xl icon-orb">۱</span>
                        <span class="text-xs font-black text-indigo-600 dark:text-indigo-400">گام اول · ۱۰ ثانیه</span>
                    </div>
                    <h3 class="relative z-10 font-black text-base sm:text-lg text-slate-900 dark:text-white">نصب و فعال‌سازی در پیشخوان</h3>
                    <p class="relative z-10 text-xs sm:text-sm text-slate-600 dark:text-slate-300 leading-relaxed font-medium">
                        فایل افزونه را از بخش «افزونه‌ها ← افزودن» در پیشخوان وردپرس بارگذاری و فعال نمایید.
                    </p>
                </div>

                <div class="glow-card glow-amber p-7 rounded-3xl bg-gradient-to-br from-white via-white to-amber-50/50 dark:from-slate-900 dark:via-slate-900 dark:to-amber-950/35 border border-amber-300/80 dark:border-amber-500/35 space-y-4">
                    <div class="card-top-beam bg-gradient-to-r from-transparent via-amber-500 to-transparent"></div>
                    <div class="card-corner-glow bg-amber-500"></div>
                    <i class="fas fa-palette card-bg-icon text-amber-600 dark:text-amber-400"></i>
                    <div class="relative z-10 flex items-center justify-between">
                        <span class="w-12 h-12 rounded-2xl bg-gradient-to-br from-amber-500 to-orange-500 text-white flex items-center justify-center font-black text-xl icon-orb">۲</span>
                        <span class="text-xs font-black text-amber-600 dark:text-amber-400">گام دوم · ۳۰ ثانیه</span>
                    </div>
                    <h3 class="relative z-10 font-black text-base sm:text-lg text-slate-900 dark:text-white">انتخاب نوع چالش و تم رنگی</h3>
                    <p class="relative z-10 text-xs sm:text-sm text-slate-600 dark:text-slate-300 leading-relaxed font-medium">
                        از پنل تنظیمات فارسی، چالش دلخواه (اسلایدر، ریاضی، آیکون یا هانی‌پات) و تم هماهنگ با قالب خود را برگزینید.
                    </p>
                </div>

                <div class="glow-card glow-emerald p-7 rounded-3xl bg-gradient-to-br from-white via-white to-emerald-50/50 dark:from-slate-900 dark:via-slate-900 dark:to-emerald-950/35 border border-emerald-300/80 dark:border-emerald-500/35 space-y-4">
                    <div class="card-top-beam bg-gradient-to-r from-transparent via-emerald-500 to-transparent"></div>
                    <div class="card-corner-glow bg-emerald-500"></div>
                    <i class="fas fa-shield-check card-bg-icon text-emerald-600 dark:text-emerald-400"></i>
                    <div class="relative z-10 flex items-center justify-between">
                        <span class="w-12 h-12 rounded-2xl bg-gradient-to-br from-emerald-500 to-teal-600 text-white flex items-center justify-center font-black text-xl icon-orb">۳</span>
                        <span class="text-xs font-black text-emerald-600 dark:text-emerald-400">گام سوم · ۲۰ ثانیه</span>
                    </div>
                    <h3 class="relative z-10 font-black text-base sm:text-lg text-slate-900 dark:text-white">تیک زدن فرم‌های هدف</h3>
                    <p class="relative z-10 text-xs sm:text-sm text-slate-600 dark:text-slate-300 leading-relaxed font-medium">
                        تیک حفاظت از ووکامرس، دیجیتس، ورود وردپرس یا فرم‌سازها را فعال کنید تا سایت شما بلافاصله ایمن شود.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 10. INTERACTIVE CATEGORIZED FAQ ACCORDION WITH SCHEMA.ORG MICRODATA -->
    <!-- ========================================================================= -->
    <section id="faq" aria-labelledby="faq-heading" class="py-16 md:py-22 bg-slate-100/80 dark:bg-slate-900/70 border-t border-slate-200 dark:border-slate-800 relative overflow-hidden" itemscope itemtype="https://schema.org/FAQPage">
        <!-- Ambient Orbs & Background Icons -->
        <div class="sec-bg-layer" aria-hidden="true">
            <div class="sec-glow-orb orb-tr-indigo"></div>
            <div class="sec-glow-orb orb-bl-emerald"></div>
            <i class="fas fa-circle-question sec-floating-icon sec-icon-tr sec-icon-indigo"></i>
            <i class="fas fa-comments sec-floating-icon sec-icon-bl sec-icon-emerald"></i>
        </div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 relative z-10 space-y-8">
            
            <div class="text-center space-y-3">
                <div class="text-xs font-black text-indigo-600 dark:text-indigo-400 flex items-center justify-center gap-2">
                    <i class="fas fa-circle-question"></i>
                    <span>۰۹. پاسخ شفاف به سوالات شما پیش از خرید</span>
                </div>
                <h2 id="faq-heading" class="text-2xl sm:text-4xl font-black text-slate-900 dark:text-white leading-tight" style="text-wrap: balance;">
                    سوالات متداول درباره افزونه گاردفای پرو
                </h2>
                <p class="text-slate-600 dark:text-slate-300 text-xs sm:text-base font-medium">
                    روی هر سوال کلیک کنید تا پاسخ کامل فنی آن را مشاهده نمایید:
                </p>
            </div>

            <!-- FAQ Category Filter Buttons -->
            <div class="flex flex-wrap items-center justify-center gap-2 text-xs">
                <button type="button" onclick="filterFaqItems('all', this)" class="faq-filter-btn px-4 py-2 rounded-xl bg-indigo-600 text-white font-black cursor-pointer transition-all">همه پرسش‌ها</button>
                <button type="button" onclick="filterFaqItems('speed', this)" class="faq-filter-btn px-4 py-2 rounded-xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-700 dark:text-slate-300 font-bold cursor-pointer transition-all">سرعت و بار مصرفی</button>
                <button type="button" onclick="filterFaqItems('intranet', this)" class="faq-filter-btn px-4 py-2 rounded-xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-700 dark:text-slate-300 font-bold cursor-pointer transition-all">اینترنت ملی و پایداری</button>
                <button type="button" onclick="filterFaqItems('compat', this)" class="faq-filter-btn px-4 py-2 rounded-xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-700 dark:text-slate-300 font-bold cursor-pointer transition-all">ووکامرس و سازگاری</button>
            </div>

            <!-- Interactive Accordion List -->
            <div class="space-y-3.5 text-right" id="faq-accordion-list">
                
                <!-- FAQ 1 -->
                <div data-faq-cat="speed" class="faq-item glow-card glow-emerald rounded-2xl bg-white dark:bg-slate-900 border border-emerald-300/70 dark:border-emerald-500/30 shadow-sm overflow-hidden" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <i class="fas fa-feather-pointed card-bg-icon"></i>
                    <button type="button" onclick="toggleFaqAccordion(this)" aria-expanded="true" class="relative z-10 w-full p-5 sm:p-6 text-right flex items-center justify-between gap-4 cursor-pointer hover:bg-slate-50/70 dark:hover:bg-slate-800/40 transition-colors">
                        <h3 class="font-black text-sm sm:text-base text-slate-900 dark:text-white flex items-center gap-2.5" itemprop="name">
                            <i class="fas fa-feather-pointed text-emerald-500 shrink-0"></i>
                            <span>آیا گاردفای پرو باعث کندی سرعت سایت یا افت امتیاز لایت‌هاوس می‌شود؟</span>
                        </h3>
                        <i class="fas fa-chevron-up text-indigo-500 text-xs transition-transform duration-200 faq-chevron"></i>
                    </button>
                    <div class="faq-answer relative z-10 px-5 pb-5 sm:px-6 sm:pb-6 border-t border-slate-100 dark:border-slate-800/80 pt-3" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 leading-relaxed font-medium" itemprop="text">
                            مطلقاً خیر. هرچند خود افزونه شامل امکانات گسترده‌ای در بخش مدیریت است، اما <strong>باری که روی لود فرانت‌اند صفحات سایت شما می‌اندازد زیر ۱۰ کیلوبایت است</strong>. برخلاف Google reCAPTCHA که بیش از ۵۰۰ کیلوبایت اسکریپت خارجی دانلود می‌کند، گاردفای پرو هیچ اثر منفی روی Core Web Vitals و سرعت باز شدن سایت ندارد.
                        </p>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div data-faq-cat="intranet" class="faq-item glow-card glow-indigo rounded-2xl bg-white dark:bg-slate-900 border border-indigo-300/70 dark:border-indigo-500/30 shadow-sm overflow-hidden" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <i class="fas fa-server card-bg-icon"></i>
                    <button type="button" onclick="toggleFaqAccordion(this)" aria-expanded="false" class="relative z-10 w-full p-5 sm:p-6 text-right flex items-center justify-between gap-4 cursor-pointer hover:bg-slate-50/70 dark:hover:bg-slate-800/40 transition-colors">
                        <h3 class="font-black text-sm sm:text-base text-slate-900 dark:text-white flex items-center gap-2.5" itemprop="name">
                            <i class="fas fa-server text-indigo-500 shrink-0"></i>
                            <span>آیا گاردفای پرو واقعاً بدون اتصال به هیچ سرور خارجی و در اینترنت ملی کار می‌کند؟</span>
                        </h3>
                        <i class="fas fa-chevron-down text-slate-400 text-xs transition-transform duration-200 faq-chevron"></i>
                    </button>
                    <div class="faq-answer relative z-10 hidden px-5 pb-5 sm:px-6 sm:pb-6 border-t border-slate-100 dark:border-slate-800/80 pt-3" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 leading-relaxed font-medium" itemprop="text">
                            بله، ۱۰۰٪. در حالت موتور بومی، تمامی مراحل تولید چالش، بررسی رفتار کاربر و تایید توکن امنیتی مستقیماً با توابع استاندارد PHP روی هاست خودتان انجام می‌شود و حتی در صورت قطع کامل اینترنت بین‌الملل، تسویه‌حساب مشتریان بدون یک ثانیه توقف انجام می‌گیرد.
                        </p>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div data-faq-cat="compat" class="faq-item glow-card glow-purple rounded-2xl bg-white dark:bg-slate-900 border border-purple-300/70 dark:border-purple-500/30 shadow-sm overflow-hidden" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <i class="fas fa-cart-shopping card-bg-icon"></i>
                    <button type="button" onclick="toggleFaqAccordion(this)" aria-expanded="false" class="relative z-10 w-full p-5 sm:p-6 text-right flex items-center justify-between gap-4 cursor-pointer hover:bg-slate-50/70 dark:hover:bg-slate-800/40 transition-colors">
                        <h3 class="font-black text-sm sm:text-base text-slate-900 dark:text-white flex items-center gap-2.5" itemprop="name">
                            <i class="fas fa-cart-shopping text-purple-500 shrink-0"></i>
                            <span>آیا با ووکامرس، پنل پیامکی دیجیتس (Digits) و افزونه‌های کش سازگار است؟</span>
                        </h3>
                        <i class="fas fa-chevron-down text-slate-400 text-xs transition-transform duration-200 faq-chevron"></i>
                    </button>
                    <div class="faq-answer relative z-10 hidden px-5 pb-5 sm:px-6 sm:pb-6 border-t border-slate-100 dark:border-slate-800/80 pt-3" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 leading-relaxed font-medium" itemprop="text">
                            کاملاً. گاردفای پرو به صورت پیش‌فرض با فرم‌های ورود، عضویت و تسویه‌حساب ووکامرس، فرم‌های پیامکی دیجیتس، المنتور پرو و گرویتی فرمز یکپارچه است و به لطف توکن پویا (AJAX Nonce)، هیچ‌گونه تداخلی با LiteSpeed Cache و WP Rocket ندارد.
                        </p>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div data-faq-cat="compat" class="faq-item glow-card glow-amber rounded-2xl bg-white dark:bg-slate-900 border border-amber-300/70 dark:border-amber-500/30 shadow-sm overflow-hidden" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <i class="fas fa-paintbrush card-bg-icon"></i>
                    <button type="button" onclick="toggleFaqAccordion(this)" aria-expanded="false" class="relative z-10 w-full p-5 sm:p-6 text-right flex items-center justify-between gap-4 cursor-pointer hover:bg-slate-50/70 dark:hover:bg-slate-800/40 transition-colors">
                        <h3 class="font-black text-sm sm:text-base text-slate-900 dark:text-white flex items-center gap-2.5" itemprop="name">
                            <i class="fas fa-paintbrush text-amber-500 shrink-0"></i>
                            <span>آیا استایلر صفحه ورود وردپرس باعث اختلال در افزونه‌های امنیتی یا کوکی‌ها می‌شود؟</span>
                        </h3>
                        <i class="fas fa-chevron-down text-slate-400 text-xs transition-transform duration-200 faq-chevron"></i>
                    </button>
                    <div class="faq-answer relative z-10 hidden px-5 pb-5 sm:px-6 sm:pb-6 border-t border-slate-100 dark:border-slate-800/80 pt-3" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 leading-relaxed font-medium" itemprop="text">
                            خیر، استایلر گاردفای پرو با استفاده از هوک‌های استاندارد هسته وردپرس (`login_enqueue_scripts`) ظاهر صفحه `wp-login.php` را نوسازی می‌کند؛ بنابراین تمامی کوکی‌ها، نشست‌ها و افزونه‌های دو مرحله‌ای کاملاً پایدار و استاندارد باقی می‌مانند.
                        </p>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div data-faq-cat="intranet" class="faq-item glow-card glow-cyan rounded-2xl bg-white dark:bg-slate-900 border border-cyan-300/70 dark:border-cyan-500/30 shadow-sm overflow-hidden" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <i class="fas fa-arrows-split-up-and-left card-bg-icon"></i>
                    <button type="button" onclick="toggleFaqAccordion(this)" aria-expanded="false" class="relative z-10 w-full p-5 sm:p-6 text-right flex items-center justify-between gap-4 cursor-pointer hover:bg-slate-50/70 dark:hover:bg-slate-800/40 transition-colors">
                        <h3 class="font-black text-sm sm:text-base text-slate-900 dark:text-white flex items-center gap-2.5" itemprop="name">
                            <i class="fas fa-arrows-split-up-and-left text-cyan-500 shrink-0"></i>
                            <span>قابلیت سوییچر هوشمند (Smart Failover) چگونه کار می‌کند؟</span>
                        </h3>
                        <i class="fas fa-chevron-down text-slate-400 text-xs transition-transform duration-200 faq-chevron"></i>
                    </button>
                    <div class="faq-answer relative z-10 hidden px-5 pb-5 sm:px-6 sm:pb-6 border-t border-slate-100 dark:border-slate-800/80 pt-3" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 leading-relaxed font-medium" itemprop="text">
                            اگر تمایل داشته باشید در روزهای عادی از کلودفلر یا گوگل استفاده کنید، سیستم پایشگر گاردفای پرو در پس‌زمینه وضعیت ارتباط سرور را بررسی کرده و به محض بروز اختلال در اینترنت بین‌الملل، فرم‌ها را به صورت خودکار به کپچای بومی سوییچ می‌کند.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 11. FINAL HIGH-CONVERSION CTA BANNER -->
    <!-- ========================================================================= -->
    <section id="cta" aria-labelledby="cta-heading" class="py-14 md:py-20 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
            <div class="relative rounded-3xl bg-gradient-to-r from-indigo-950 via-slate-900 to-purple-950 border-2 border-indigo-500/60 p-8 sm:p-14 text-center overflow-hidden shadow-[0_25px_75px_-15px_rgba(79,70,229,0.5)] text-white dark-contrast-card">
                
                <!-- CTA Ambient Glows & Watermark Icons -->
                <div class="card-top-beam bg-gradient-to-r from-transparent via-emerald-400 to-transparent"></div>
                <div class="sec-bg-layer" aria-hidden="true">
                    <div class="sec-glow-orb orb-tr-indigo"></div>
                    <div class="sec-glow-orb orb-bl-emerald"></div>
                    <i class="fas fa-shield-halved sec-floating-icon sec-icon-tr sec-icon-indigo"></i>
                    <i class="fas fa-rocket sec-floating-icon sec-icon-bl sec-icon-emerald"></i>
                </div>

                <div class="relative z-10 max-w-3xl mx-auto space-y-6">
                    <div class="text-xs font-black text-emerald-300" style="color:#6ee7b7 !important;">
                        پشتیبانی تخصصی DevBan · آپدیت همیشگی · بار مصرفی زیر ۱۰ کیلوبایت روی لود سایت
                    </div>

                    <h2 id="cta-heading" class="text-2xl sm:text-4xl lg:text-5xl font-black text-white leading-tight" style="color:#ffffff !important; text-wrap: balance;">
                        همین حالا امنیت و سرعت فرم‌های وردپرس خود را تضمین کنید
                    </h2>

                    <p class="text-slate-100 text-xs sm:text-base leading-relaxed font-medium max-w-2xl mx-auto" style="color:#f8fafc !important;">
                        پیش از خرید می‌توانید تمامی امکانات، ۳۵+ تم رنگی، استایلر صفحه ورود و پیشخوان مدیریت افزونه را به صورت زنده در دموی افزونه امتحان کنید.
                    </p>

                    <div class="flex flex-wrap items-center justify-center gap-4 pt-2">
                        <a href="https://www.rtl-theme.com" target="_blank" rel="noopener noreferrer" class="px-8 py-4 rounded-2xl bg-gradient-to-r from-emerald-500 via-teal-500 to-emerald-600 hover:from-emerald-400 hover:to-teal-400 text-slate-950 font-black text-sm sm:text-base shadow-xl shadow-emerald-500/30 transition-all flex items-center gap-2.5">
                            <i class="fas fa-bag-shopping"></i>
                            <span>خرید لایسنس اورجینال از راست‌چین</span>
                        </a>

                        <a href="/demo.php" class="px-8 py-4 rounded-2xl bg-indigo-600 hover:bg-indigo-500 text-white border border-indigo-400 font-black text-sm sm:text-base shadow-xl shadow-indigo-600/35 transition-all flex items-center gap-2.5">
                            <i class="fas fa-desktop text-amber-300"></i>
                            <span>ورود به دموی افزونه</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

<!-- Interactive Landing Page Scripts (4-in-1 Hero Playground, Scenario Switcher, Login Styler & FAQ Accordion) -->
<script>
// Normalize Persian/Arabic digits to English for math input
function toEnglishDigits(str) {
    return String(str)
        .replace(/[۰-۹]/g, function(d) { return '۰۱۲۳۴۵۶۷۸۹'.indexOf(d); })
        .replace(/[٠-٩]/g, function(d) { return '٠١٢٣٤٥٦٧٨٩'.indexOf(d); })
        .trim();
}
function toPersianDigits(num) {
    var persian = ['۰','۱','۲','۳','۴','۵','۶','۷','۸','۹'];
    return String(num).replace(/[0-9]/g, function(d) { return persian[+d]; });
}

// 1. Hero 4-in-1 Captcha Playground Tab Switcher
function switchHeroCaptchaTab(mode) {
    var modes = ['slider', 'math', 'icon', 'honeypot'];
    modes.forEach(function(m) {
        var tab = document.getElementById('hero-tab-' + m);
        var panel = document.getElementById('hero-panel-' + m);
        if (tab && panel) {
            if (m === mode) {
                tab.className = 'hero-captcha-tab py-2 px-2 rounded-xl text-[11px] font-black transition-all bg-indigo-600 text-white shadow-sm whitespace-nowrap truncate cursor-pointer';
                tab.setAttribute('aria-selected', 'true');
                panel.classList.remove('hidden');
            } else {
                tab.className = 'hero-captcha-tab py-2 px-2 rounded-xl text-[11px] font-bold transition-all text-slate-300 hover:text-white whitespace-nowrap truncate cursor-pointer';
                tab.setAttribute('aria-selected', 'false');
                panel.classList.add('hidden');
            }
        }
    });
}

// 2. Hero Smart Slider Reset & Drag
var heroSliderMaxDrag = 0;
function resetHeroSlider() {
    var thumb = document.getElementById('hero-slider-thumb');
    var progress = document.getElementById('hero-slider-progress');
    var hint = document.getElementById('hero-slider-hint');
    var success = document.getElementById('hero-slider-success');
    if (thumb && progress) {
        thumb.style.transition = 'right 0.25s ease';
        progress.style.transition = 'width 0.25s ease';
        thumb.style.right = '4px';
        thumb.textContent = '←';
        progress.style.width = '0%';
    }
    if (hint) hint.textContent = 'دستگیره را به سمت چپ بکشید ←';
    if (success) success.classList.add('hidden');
}

// 3. Hero Interactive Math Challenge
var currentHeroMathAnswer = 19;
function generateHeroMath() {
    var a = Math.floor(Math.random() * 14) + 5;
    var b = Math.floor(Math.random() * 9) + 3;
    currentHeroMathAnswer = a + b;
    var eq = document.getElementById('hero-math-equation');
    var inp = document.getElementById('hero-math-input');
    var fb = document.getElementById('hero-math-feedback');
    if (eq) eq.textContent = toPersianDigits(a) + ' + ' + toPersianDigits(b) + ' =';
    if (inp) inp.value = '';
    if (fb) {
        fb.className = 'text-xs font-bold text-center text-slate-400';
        fb.textContent = 'پاسخ معادله بالا را وارد کرده و دکمه «بررسی» را بزنید.';
    }
}
function verifyHeroMath() {
    var inp = document.getElementById('hero-math-input');
    var fb = document.getElementById('hero-math-feedback');
    if (!inp || !fb) return;
    var val = parseInt(toEnglishDigits(inp.value), 10);
    if (val === currentHeroMathAnswer) {
        fb.className = 'p-2 rounded-xl bg-emerald-500/20 border border-emerald-500/40 text-emerald-300 text-xs font-black text-center';
        fb.innerHTML = '<i class="fas fa-circle-check ml-1"></i> پاسخ صحیح است! هویت شما در ۰.۰۱ ثانیه تایید شد.';
    } else {
        fb.className = 'p-2 rounded-xl bg-rose-500/20 border border-rose-500/40 text-rose-300 text-xs font-bold text-center';
        fb.innerHTML = '<i class="fas fa-circle-exclamation ml-1"></i> پاسخ نادرست است؛ عدد ' + toPersianDigits(currentHeroMathAnswer) + ' صحیح می‌باشد.';
    }
}

// 4. Hero Interactive Icon Challenge
var heroTargetIcon = 'key';
var heroIconsPool = [
    { id: 'key', label: '«کلید»', icon: 'fa-key' },
    { id: 'star', label: '«ستاره»', icon: 'fa-star' },
    { id: 'heart', label: '«قلب»', icon: 'fa-heart' },
    { id: 'bell', label: '«زنگوله»', icon: 'fa-bell' }
];
function shuffleHeroIcons() {
    var pick = heroIconsPool[Math.floor(Math.random() * heroIconsPool.length)];
    heroTargetIcon = pick.id;
    var lbl = document.getElementById('hero-icon-target-label');
    var fb = document.getElementById('hero-icon-feedback');
    if (lbl) lbl.textContent = pick.label;
    if (fb) {
        fb.className = 'text-xs font-bold text-center text-slate-400';
        fb.textContent = 'روی آیکون ' + pick.label + ' در کادر بالا کلیک کنید.';
    }
    document.querySelectorAll('.hero-icon-btn').forEach(function(btn) {
        btn.className = 'hero-icon-btn p-3 rounded-xl bg-blue-950/70 hover:bg-blue-900 border border-blue-800 text-slate-300 text-base transition-all cursor-pointer';
    });
}
function checkHeroIcon(selectedId, btnEl) {
    var fb = document.getElementById('hero-icon-feedback');
    document.querySelectorAll('.hero-icon-btn').forEach(function(btn) {
        btn.className = 'hero-icon-btn p-3 rounded-xl bg-blue-950/70 hover:bg-blue-900 border border-blue-800 text-slate-300 text-base transition-all cursor-pointer';
    });
    if (selectedId === heroTargetIcon) {
        if (btnEl) btnEl.className = 'hero-icon-btn p-3 rounded-xl bg-emerald-600 border border-emerald-400 text-white text-base shadow-md cursor-pointer';
        if (fb) {
            fb.className = 'p-2 rounded-xl bg-emerald-500/20 border border-emerald-500/40 text-emerald-300 text-xs font-black text-center';
            fb.innerHTML = '<i class="fas fa-circle-check ml-1"></i> آیکون درست انتخاب شد! تایید هویت آنی انجام گردید.';
        }
    } else {
        if (btnEl) btnEl.className = 'hero-icon-btn p-3 rounded-xl bg-rose-600 border border-rose-400 text-white text-base cursor-pointer';
        if (fb) {
            fb.className = 'p-2 rounded-xl bg-rose-500/20 border border-rose-500/40 text-rose-300 text-xs font-bold text-center';
            fb.innerHTML = '<i class="fas fa-circle-xmark ml-1"></i> آیکون اشتباه است؛ لطفاً آیکون خواسته شده را انتخاب کنید.';
        }
    }
}

// 5. Hero Honeypot Simulator
function simulateHoneypot(actor) {
    var res = document.getElementById('hp-simulation-result');
    var btnHuman = document.getElementById('hp-btn-human');
    var btnBot = document.getElementById('hp-btn-bot');
    if (!res) return;
    if (actor === 'human') {
        if (btnHuman) btnHuman.className = 'p-2.5 rounded-xl bg-emerald-600 text-white text-xs font-black flex items-center justify-center gap-1.5 cursor-pointer';
        if (btnBot) btnBot.className = 'p-2.5 rounded-xl bg-slate-800 text-slate-300 border border-slate-700 text-xs font-bold flex items-center justify-center gap-1.5 cursor-pointer';
        res.className = 'p-3 rounded-xl bg-[#041118] border border-teal-500/40 text-xs text-emerald-300 font-bold leading-relaxed text-right';
        res.textContent = '✓ کاربر واقعی فیلد مخفی را نمی‌بیند و بدون حل هیچ چالشی در ۰.۰۱ ثانیه وارد سایت می‌شود.';
    } else {
        if (btnBot) btnBot.className = 'p-2.5 rounded-xl bg-rose-600 text-white text-xs font-black flex items-center justify-center gap-1.5 cursor-pointer';
        if (btnHuman) btnHuman.className = 'p-2.5 rounded-xl bg-slate-800 text-slate-300 border border-slate-700 text-xs font-bold flex items-center justify-center gap-1.5 cursor-pointer';
        res.className = 'p-3 rounded-xl bg-rose-950/60 border border-rose-500/50 text-xs text-rose-200 font-bold leading-relaxed text-right';
        res.textContent = '🛡️ ربات اسپمر فیلد مخفی هانی‌پات را به صورت خودکار پر کرد و در ۰.۱ میلی‌ثانیه مسدود شد!';
    }
}

// 6. Crisis vs. Solution Scenario Switcher
function setCrisisScenario(mode) {
    var btnIntra = document.getElementById('scenario-btn-intranet');
    var btnNorm = document.getElementById('scenario-btn-normal');
    var badgeCloud = document.getElementById('crisis-badge-cloud');
    var termStatus = document.getElementById('crisis-term-status');
    var termBody = document.getElementById('crisis-term-body');

    if (mode === 'intranet') {
        if (btnIntra) btnIntra.className = 'px-4 py-2.5 rounded-xl text-xs font-black transition-all bg-indigo-600 text-white shadow-sm cursor-pointer';
        if (btnNorm) btnNorm.className = 'px-4 py-2.5 rounded-xl text-xs font-bold transition-all text-slate-600 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white cursor-pointer';
        if (badgeCloud) badgeCloud.textContent = 'خطای عدم بارگذاری ✗';
        if (termStatus) termStatus.textContent = 'ERR_TIMED_OUT';
        if (termBody) {
            termBody.innerHTML = '<p><span class="text-indigo-400" style="color:#a5b4fc !important;">GET</span> <span style="color:#f1f5f9 !important;">https://www.google.com/recaptcha/api.js</span></p><p class="text-rose-300 font-bold" style="color:#fda4af !important;">✗ Connection Timed Out after 15,000ms (Blocked / Filtered)</p><p class="text-amber-300 text-[10.5px]" style="color:#fde047 !important;">⚠ WooCommerce Checkout Submit Locked — Customer Abandoned Cart</p>';
        }
    } else {
        if (btnNorm) btnNorm.className = 'px-4 py-2.5 rounded-xl text-xs font-black transition-all bg-indigo-600 text-white shadow-sm cursor-pointer';
        if (btnIntra) btnIntra.className = 'px-4 py-2.5 rounded-xl text-xs font-bold transition-all text-slate-600 dark:text-slate-300 hover:text-slate-900 dark:hover:text-white cursor-pointer';
        if (badgeCloud) badgeCloud.textContent = 'سنگین (> ۵۰۰ KB) ⚠';
        if (termStatus) termStatus.textContent = 'SLOW (940ms)';
        if (termBody) {
            termBody.innerHTML = '<p><span class="text-indigo-400" style="color:#a5b4fc !important;">LOAD</span> <span style="color:#f1f5f9 !important;">recaptcha__fa.js (520 KB) + 9 External Requests</span></p><p class="text-amber-300 font-bold" style="color:#fde047 !important;">⚠ Main Thread Blocked for 490ms • Visual Image Puzzle Triggered</p><p class="text-rose-300 text-[10.5px]" style="color:#fda4af !important;">Result: PageSpeed Score Dropped &amp; High User Friction</p>';
        }
    }
}

// 7. Filter Modality Cards
function filterModalityCards(category, btnEl) {
    document.querySelectorAll('.modality-filter-btn').forEach(function(b) {
        b.className = 'modality-filter-btn px-4 py-2.5 rounded-xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-700 dark:text-slate-300 font-bold hover:border-indigo-500 transition-all cursor-pointer';
    });
    if (btnEl) {
        btnEl.className = 'modality-filter-btn px-4 py-2.5 rounded-xl bg-indigo-600 text-white font-black shadow-md shadow-indigo-600/25 transition-all cursor-pointer';
    }
    document.querySelectorAll('.modality-card').forEach(function(card) {
        if (category === 'all' || card.getAttribute('data-category') === category) {
            card.classList.remove('hidden');
        } else {
            card.classList.add('hidden');
        }
    });
}

// 8. Interactive WP-Login Styler Preset Switcher
function changeLoginMockupTheme(theme) {
    var canvas = document.getElementById('login-mockup-canvas');
    var card = document.getElementById('login-mockup-card');
    var badge = document.getElementById('login-mockup-badge');
    var label = document.getElementById('login-preview-theme-label');
    var submit = document.getElementById('login-mockup-submit');

    var themes = {
        navy: {
            name: 'Royal Navy Theme',
            canvas: 'p-6 sm:p-8 bg-gradient-to-br from-[#050B14] via-[#0A1628] to-[#030712] space-y-4 transition-colors duration-300 relative overflow-hidden',
            card: 'relative z-10 p-6 rounded-2xl bg-slate-900/90 border border-blue-500/40 shadow-2xl space-y-4 max-w-md mx-auto',
            submit: 'w-full py-3 rounded-xl bg-gradient-to-r from-blue-600 via-indigo-600 to-cyan-600 text-white font-black text-xs shadow-lg'
        },
        emerald: {
            name: 'Cyber Emerald Theme',
            canvas: 'p-6 sm:p-8 bg-gradient-to-br from-[#02140e] via-[#04261c] to-[#010d09] space-y-4 transition-colors duration-300 relative overflow-hidden',
            card: 'relative z-10 p-6 rounded-2xl bg-[#031d15]/95 border border-emerald-500/50 shadow-2xl space-y-4 max-w-md mx-auto',
            submit: 'w-full py-3 rounded-xl bg-gradient-to-r from-emerald-600 via-teal-500 to-emerald-500 text-slate-950 font-black text-xs shadow-lg'
        },
        purple: {
            name: 'Cosmic Galaxy Theme',
            canvas: 'p-6 sm:p-8 bg-gradient-to-br from-[#0d041c] via-[#1a0936] to-[#070210] space-y-4 transition-colors duration-300 relative overflow-hidden',
            card: 'relative z-10 p-6 rounded-2xl bg-[#14072b]/95 border border-purple-500/50 shadow-2xl space-y-4 max-w-md mx-auto',
            submit: 'w-full py-3 rounded-xl bg-gradient-to-r from-purple-600 via-fuchsia-600 to-indigo-600 text-white font-black text-xs shadow-lg'
        },
        amber: {
            name: 'VIP Gold Theme',
            canvas: 'p-6 sm:p-8 bg-gradient-to-br from-[#140f04] via-[#241a06] to-[#0a0702] space-y-4 transition-colors duration-300 relative overflow-hidden',
            card: 'relative z-10 p-6 rounded-2xl bg-[#1c1506]/95 border border-amber-500/50 shadow-2xl space-y-4 max-w-md mx-auto',
            submit: 'w-full py-3 rounded-xl bg-gradient-to-r from-amber-500 via-yellow-500 to-amber-600 text-slate-950 font-black text-xs shadow-lg'
        }
    };

    var t = themes[theme] || themes.navy;
    if (canvas) canvas.className = t.canvas;
    if (card) card.className = t.card;
    if (badge) badge.textContent = t.name;
    if (label) label.textContent = t.name;
    if (submit) submit.className = t.submit;
}

// 9. Firewall Log Filter
function filterFirewallLogs(type, btnEl) {
    document.querySelectorAll('.fw-filter-btn').forEach(function(b) {
        b.className = 'fw-filter-btn px-3 py-1.5 rounded-xl bg-slate-900 text-slate-300 border border-slate-800 text-xs font-bold cursor-pointer';
    });
    if (btnEl) {
        btnEl.className = 'fw-filter-btn px-3 py-1.5 rounded-xl bg-indigo-600 text-white text-xs font-black cursor-pointer';
    }
    document.querySelectorAll('.fw-log-item').forEach(function(item) {
        if (type === 'all' || item.getAttribute('data-log-type') === type) {
            item.classList.remove('hidden');
        } else {
            item.classList.add('hidden');
        }
    });
}

// 10. Interactive FAQ Accordion & Category Filter
function toggleFaqAccordion(btnEl) {
    var item = btnEl.closest('.faq-item');
    if (!item) return;
    var answer = item.querySelector('.faq-answer');
    var chevron = item.querySelector('.faq-chevron');
    var isOpen = !answer.classList.contains('hidden');

    if (isOpen) {
        answer.classList.add('hidden');
        btnEl.setAttribute('aria-expanded', 'false');
        if (chevron) chevron.className = 'fas fa-chevron-down text-slate-400 text-xs transition-transform duration-200 faq-chevron';
    } else {
        answer.classList.remove('hidden');
        btnEl.setAttribute('aria-expanded', 'true');
        if (chevron) chevron.className = 'fas fa-chevron-up text-indigo-500 text-xs transition-transform duration-200 faq-chevron';
    }
}

function filterFaqItems(cat, btnEl) {
    document.querySelectorAll('.faq-filter-btn').forEach(function(b) {
        b.className = 'faq-filter-btn px-4 py-2 rounded-xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-700 dark:text-slate-300 font-bold cursor-pointer transition-all';
    });
    if (btnEl) {
        btnEl.className = 'faq-filter-btn px-4 py-2 rounded-xl bg-indigo-600 text-white font-black cursor-pointer transition-all';
    }
    document.querySelectorAll('.faq-item').forEach(function(item) {
        if (cat === 'all' || item.getAttribute('data-faq-cat') === cat) {
            item.classList.remove('hidden');
        } else {
            item.classList.add('hidden');
        }
    });
}

// Initialize Hero Slider Drag on DOMContentLoaded
document.addEventListener('DOMContentLoaded', function() {
    var thumb = document.getElementById('hero-slider-thumb');
    var track = document.getElementById('hero-slider-track');
    var progress = document.getElementById('hero-slider-progress');
    var hint = document.getElementById('hero-slider-hint');
    var success = document.getElementById('hero-slider-success');
    
    if (thumb && track && progress) {
        var isDragging = false;
        var startX = 0;

        function updateMaxDrag() {
            heroSliderMaxDrag = Math.max(0, track.clientWidth - thumb.clientWidth - 8);
        }
        updateMaxDrag();
        window.addEventListener('resize', updateMaxDrag);

        function onStart(e) {
            updateMaxDrag();
            isDragging = true;
            startX = (e.clientX || (e.touches && e.touches[0].clientX));
            thumb.style.transition = 'none';
            progress.style.transition = 'none';
        }

        function onMove(e) {
            if (!isDragging) return;
            var clientX = (e.clientX || (e.touches && e.touches[0].clientX));
            var delta = startX - clientX;
            if (delta < 0) delta = 0;
            if (delta > heroSliderMaxDrag) delta = heroSliderMaxDrag;

            var percent = heroSliderMaxDrag > 0 ? (delta / heroSliderMaxDrag) * 100 : 0;
            thumb.style.right = (delta + 4) + 'px';
            progress.style.width = percent + '%';
            track.setAttribute('aria-valuenow', Math.round(percent));

            if (percent > 88) {
                isDragging = false;
                thumb.style.right = (heroSliderMaxDrag + 4) + 'px';
                thumb.textContent = '✓';
                progress.style.width = '100%';
                if (hint) hint.textContent = 'احراز هویت انجام شد ✓';
                if (success) success.classList.remove('hidden');
            }
        }

        function onEnd() {
            if (!isDragging) return;
            isDragging = false;
            resetHeroSlider();
        }

        thumb.addEventListener('mousedown', onStart);
        window.addEventListener('mousemove', onMove);
        window.addEventListener('mouseup', onEnd);
        thumb.addEventListener('touchstart', onStart, { passive: true });
        window.addEventListener('touchmove', onMove, { passive: true });
        window.addEventListener('touchend', onEnd);
    }

    // Allow pressing Enter in the Hero Math Input
    var mathInput = document.getElementById('hero-math-input');
    if (mathInput) {
        mathInput.addEventListener('keydown', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                verifyHeroMath();
            }
        });
    }
});
</script>

<?php include __DIR__ . '/footer.php'; ?>
