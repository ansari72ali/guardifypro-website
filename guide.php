<?php
/**
 * Guardify Pro - Interactive Plugin Panel Guide with Smart Tooltips & Step-by-Step Tour
 * (راهنمای تعاملی پنل افزونه گاردفای پرو با سیستم تولتیپ هوشمند روی تمام تب‌ها و گزینه‌ها)
 */
$page_title = "راهنمای پنل افزونه گاردفای پرو (تولتیپ تعاملی) | Guardify Pro Panel Guide";
$page_description = "راهنمای تصویری و تعاملی پنل مدیریت افزونه گاردفای پرو در پیشخوان وردپرس؛ با نگه داشتن ماوس یا کلیک روی هر بخش، توضیحات کامل آن گزینه را در قالب تولتیپ هوشمند مشاهده کنید.";
$current_page = "guide";

include_once __DIR__ . '/header.php';
?>

<!-- Include Plugin Preview & Captcha Styles for Authentic Embedded Panel Rendering -->
<link rel="stylesheet" href="/css/captcha-themes.css">
<link rel="stylesheet" href="/css/login-plugin.css">
<link rel="stylesheet" href="/css/plugin-preview.css">

<style>
    /* Interactive Guide Tooltip System */
    .guide-tooltip-badge {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 22px;
        height: 22px;
        border-radius: 9999px;
        background: linear-gradient(135deg, #4f46e5, #7c3aed);
        color: #ffffff !important;
        font-size: 11px;
        font-weight: 900;
        cursor: pointer;
        margin-right: 6px;
        margin-left: 4px;
        box-shadow: 0 3px 10px rgba(79, 70, 229, 0.45);
        border: 2px solid #ffffff;
        transition: transform 0.2s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 0.2s ease;
        position: relative;
        z-index: 30;
        vertical-align: middle;
        flex-shrink: 0;
    }
    .guide-tooltip-badge:hover,
    .guide-tooltip-badge.active-beacon {
        transform: scale(1.22);
        background: linear-gradient(135deg, #f59e0b, #ea580c);
        box-shadow: 0 0 0 5px rgba(245, 158, 11, 0.25), 0 6px 16px rgba(234, 88, 12, 0.5);
    }

    /* Highlighted target element when hovered or during tour */
    .guide-target-highlight {
        outline: 2.5px dashed #6366f1 !important;
        outline-offset: 4px !important;
        position: relative;
        transition: outline 0.2s ease, box-shadow 0.2s ease;
    }
    .guide-target-tour-active {
        outline: 3px solid #f59e0b !important;
        outline-offset: 5px !important;
        box-shadow: 0 0 0 8px rgba(245, 158, 11, 0.2), 0 12px 32px rgba(0, 0, 0, 0.25) !important;
        border-radius: 14px;
    }

    /* Floating Smart Tooltip Popover */
    #guardify-smart-tooltip {
        position: fixed;
        z-index: 999999;
        width: 340px;
        max-width: calc(100vw - 24px);
        background: #0f172a;
        color: #f8fafc;
        border: 1.5px solid #6366f1;
        border-radius: 18px;
        padding: 16px 18px;
        box-shadow: 0 22px 48px -10px rgba(2, 6, 23, 0.85), 0 0 25px rgba(99, 102, 241, 0.35);
        pointer-events: auto;
        opacity: 0;
        visibility: hidden;
        transform: translateY(6px);
        transition: opacity 0.18s ease, transform 0.18s ease, visibility 0.18s ease;
        direction: rtl;
        text-align: right;
    }
    #guardify-smart-tooltip.visible {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }
    #guardify-smart-tooltip * {
        color: inherit;
    }

    /* Quick Tab Guide Pill Buttons */
    .guide-tab-pill {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        padding: 8px 14px;
        border-radius: 12px;
        font-size: 12px;
        font-weight: 800;
        cursor: pointer;
        transition: all 0.2s ease;
        border: 1px solid rgba(148, 163, 184, 0.25);
    }
    .dark .guide-tab-pill {
        background: #1e293b;
        color: #e2e8f0;
        border-color: #334155;
    }
    .light .guide-tab-pill {
        background: #ffffff;
        color: #1e293b;
        border-color: #cbd5e1;
    }
    .guide-tab-pill:hover,
    .guide-tab-pill.active {
        background: #4f46e5 !important;
        color: #ffffff !important;
        border-color: #4f46e5 !important;
        box-shadow: 0 6px 16px rgba(79, 70, 229, 0.3);
    }
</style>

<!-- ========================================================================= -->
<!-- INTERACTIVE PANEL GUIDE HERO & TOUR CONTROLLER -->
<!-- ========================================================================= -->
<section class="py-8 md:py-10 relative overflow-hidden bg-gradient-to-b from-slate-950 via-indigo-950 to-slate-900 text-white border-b border-slate-800 dark-contrast-card">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
        <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-6">
            <div class="space-y-2.5 max-w-3xl">
                <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-indigo-500/20 border border-indigo-400/40 text-indigo-300 text-xs font-black">
                    <i class="fas fa-circle-question text-amber-300"></i>
                    <span>راهنمای تعاملی پنل افزونه با تولتیپ هوشمند</span>
                </div>
                <h1 class="text-2xl sm:text-4xl font-black tracking-tight leading-tight text-white">
                    راهنمای جامع پنل مدیریت <span class="text-amber-300">گاردفای پرو</span> به صورت تولتیپ
                </h1>
                <p class="text-slate-300 text-xs sm:text-sm leading-relaxed font-medium">
                    نشانگر ماوس را روی آیکون‌های راهنمای <span class="inline-flex items-center justify-center w-5 h-5 rounded-full bg-indigo-600 text-white text-[10px] font-black mx-0.5">؟</span> کنار هر گزینه ببرید یا روی تب‌ها و بخش‌های پنل کلیک کنید تا توضیح کامل، کاربرد فنی و بهترین پیشنهاد تنظیم هر بخش در کادر تولتیپ نمایش داده شود.
                </p>
            </div>

            <!-- Interactive Tour Controls -->
            <div class="flex flex-wrap items-center gap-2.5 shrink-0">
                <button type="button" onclick="startInteractivePanelTour()" class="px-5 py-3 rounded-2xl bg-gradient-to-r from-amber-500 to-orange-500 hover:from-amber-400 hover:to-orange-400 text-slate-950 font-black text-xs sm:text-sm shadow-xl shadow-amber-500/25 transition-all flex items-center gap-2 cursor-pointer">
                    <i class="fas fa-route text-slate-950"></i>
                    <span>شروع تور گام‌به‌گام پنل (۱۲ بخش)</span>
                </button>
                <button type="button" id="toggle-all-beacons-btn" onclick="toggleGuideBeaconsMode()" class="px-4 py-3 rounded-2xl bg-slate-800 hover:bg-slate-700 text-white border border-slate-700 font-bold text-xs sm:text-sm transition-all flex items-center gap-2 cursor-pointer">
                    <i class="fas fa-bullseye text-indigo-400"></i>
                    <span>برجسته‌سازی نقاط راهنما</span>
                </button>
            </div>
        </div>

        <!-- Quick Tab Jumpers with Instant Tooltip Summary -->
        <div class="mt-6 pt-5 border-t border-slate-800/80">
            <div class="flex items-center justify-between gap-2 mb-2.5">
                <span class="text-[11px] font-black text-indigo-300 flex items-center gap-1.5">
                    <i class="fas fa-layer-group text-amber-400"></i>
                    <span>پرش سریع به ۱۲ تب پنل افزونه همراه با تولتیپ راهنمای همان بخش:</span>
                </span>
                <span id="tour-step-counter" class="text-[11px] font-mono font-bold text-amber-300 bg-amber-500/15 px-2.5 py-0.5 rounded-lg border border-amber-500/30">
                    گام ۱ از ۱۲: پیشخوان و خلاصه وضعیت
                </span>
            </div>
            <div class="flex flex-wrap items-center gap-1.5" id="guide-quick-tabs-bar">
                <button type="button" class="guide-tab-pill active" data-guide-tab="dashboard" onclick="selectGuideTabWithTooltip('dashboard')">📍 ۱. پیشخوان</button>
                <button type="button" class="guide-tab-pill" data-guide-tab="general" onclick="selectGuideTabWithTooltip('general')">⚡ ۲. چالش اصلی و کش</button>
                <button type="button" class="guide-tab-pill" data-guide-tab="login_styler" onclick="selectGuideTabWithTooltip('login_styler')">🔑 ۳. طراحی ورود (WP-Login)</button>
                <button type="button" class="guide-tab-pill" data-guide-tab="themes" onclick="selectGuideTabWithTooltip('themes')">🎨 ۴. ۳۵+ تم رنگی</button>
                <button type="button" class="guide-tab-pill" data-guide-tab="forms" onclick="selectGuideTabWithTooltip('forms')">🧩 ۵. فرم‌ها و ووکامرس</button>
                <button type="button" class="guide-tab-pill" data-guide-tab="security" onclick="selectGuideTabWithTooltip('security')">🔒 ۶. امنیت و هانی‌پات</button>
                <button type="button" class="guide-tab-pill" data-guide-tab="whitelist" onclick="selectGuideTabWithTooltip('whitelist')">🏳️ ۷. لیست سفید</button>
                <button type="button" class="guide-tab-pill" data-guide-tab="online" onclick="selectGuideTabWithTooltip('online')">🌐 ۸. سوییچر Failover</button>
                <button type="button" class="guide-tab-pill" data-guide-tab="statistics" onclick="selectGuideTabWithTooltip('statistics')">📊 ۹. آمار و نمودارها</button>
                <button type="button" class="guide-tab-pill" data-guide-tab="logs" onclick="selectGuideTabWithTooltip('logs')">🚨 ۱۰. رادار و لاگ‌ها</button>
                <button type="button" class="guide-tab-pill" data-guide-tab="docs" onclick="selectGuideTabWithTooltip('docs')">💡 ۱۱. شورت‌کد و هوک‌ها</button>
                <button type="button" class="guide-tab-pill" data-guide-tab="config" onclick="selectGuideTabWithTooltip('config')">⚙️ ۱۲. بکاپ و درون‌ریزی</button>
            </div>
        </div>
    </div>
</section>

<!-- ========================================================================= -->
<!-- EMBEDDED LIVE WORDPRESS ADMIN PANEL WITH INTERACTIVE TOOLTIPS -->
<!-- ========================================================================= -->
<section id="embedded-panel-stage" class="py-8 md:py-10 relative bg-slate-100 dark:bg-slate-950">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 space-y-5">

        <!-- Contextual Active Tab Explanation Banner (Dynamic Tooltip Dock) -->
        <div id="guide-active-dock" class="p-4 sm:p-5 rounded-2xl bg-slate-900 border-2 border-indigo-500/60 text-white shadow-xl flex flex-col md:flex-row items-start md:items-center justify-between gap-4 dark-contrast-card">
            <div class="flex items-start gap-3.5">
                <div class="w-11 h-11 rounded-2xl bg-indigo-600 text-white flex items-center justify-center text-lg font-black shrink-0 shadow-lg shadow-indigo-600/30" id="dock-icon">
                    📍
                </div>
                <div class="space-y-1">
                    <div class="flex flex-wrap items-center gap-2">
                        <span class="text-[11px] font-black px-2.5 py-0.5 rounded-md bg-amber-500/20 text-amber-300 border border-amber-500/40" id="dock-badge">راهنمای فعال تب پیشخوان</span>
                        <h2 class="text-sm sm:text-base font-black text-white" id="dock-title">پیشخوان و خلاصه وضعیت امنیتی سایت</h2>
                    </div>
                    <p class="text-xs sm:text-[13px] text-slate-300 leading-relaxed font-medium" id="dock-desc">
                        در این تب، نمره سلامت امنیتی سایت (Security Score)، آمار کل حملات دفع‌شده، وضعیت فعال بودن کش AJAX و پیش‌نمایش زنده ویجت کپچای انتخابی را در یک نگاه مشاهده و تست می‌کنید.
                    </p>
                </div>
            </div>
            <div class="flex items-center gap-2 shrink-0 self-end md:self-center">
                <button type="button" onclick="prevGuideTourStep()" class="px-3.5 py-2 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-200 border border-slate-700 text-xs font-bold cursor-pointer flex items-center gap-1.5">
                    <i class="fas fa-arrow-right text-[10px]"></i>
                    <span>تب قبلی</span>
                </button>
                <button type="button" onclick="nextGuideTourStep()" class="px-4 py-2 rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white text-xs font-black cursor-pointer flex items-center gap-1.5 shadow-md">
                    <span>تب بعدی</span>
                    <i class="fas fa-arrow-left text-[10px]"></i>
                </button>
            </div>
        </div>

        <!-- Authentic WordPress Shell Wrapper -->
        <div id="pane-master-admin" class="rounded-3xl overflow-hidden border-2 border-slate-300 dark:border-slate-700 shadow-2xl bg-[#f0f0f1] text-[#3c434a]">
            
            <!-- WordPress Top Admin Bar -->
            <div id="wpadminbar" style="background:#1d2327; color:#f0f0f1; height:36px; display:flex; align-items:center; justify-content:space-between; padding:0 14px; font-size:12px;" dir="rtl">
                <div style="display:flex; align-items:center; gap:12px;">
                    <span style="font-weight:bold; color:#fff;"><i class="fab fa-wordpress"></i> پیشخوان وردپرس</span>
                    <span style="color:#a7aaad;">|</span>
                    <span style="color:#f0f0f1;">راهنمای تعاملی پنل گاردفای پرو v4.00</span>
                </div>
                <div style="font-size:11px; color:#fbbf24; font-weight:bold;">
                    💡 ماوس را روی علامت‌های «؟» ببرید تا تولتیپ راهنما باز شود
                </div>
            </div>

            <!-- WordPress Body Layout -->
            <div class="wp-simulation-container" style="display:flex; min-height:640px;">
                
                <!-- Left Sidebar Menu -->
                <nav id="adminmenumain" class="hidden md:block" style="width:160px; background:#1d2327; color:#f0f0f1; padding:12px 0; font-size:12px; flex-shrink:0;" dir="rtl">
                    <div style="padding:8px 12px; color:#a7aaad; font-weight:bold; font-size:11px;">منوی پیشخوان</div>
                    <div style="padding:10px 12px; background:#2c3338; color:#fff; font-weight:bold; border-right:4px solid #72aee6; display:flex; align-items:center; gap:8px;">
                        <i class="fas fa-shield-halved text-amber-400"></i>
                        <span>گاردفای پرو</span>
                    </div>
                    <div style="padding:8px 12px; color:#a7aaad;"><i class="fas fa-gauge text-xs"></i> پیشخوان</div>
                    <div style="padding:8px 12px; color:#a7aaad;"><i class="fas fa-cart-shopping text-xs"></i> ووکامرس</div>
                    <div style="padding:8px 12px; color:#a7aaad;"><i class="fas fa-gear text-xs"></i> تنظیمات</div>
                </nav>

                <!-- Main Content Body -->
                <div id="wpbody-content" style="flex:1; padding:20px; background:#f0f0f1; overflow-x:auto;">
                    
                    <!-- Include Exact Plugin Admin Panel Markup -->
                    <?php include __DIR__ . '/admin-panel-markup.html'; ?>

                </div>
            </div>

        </div>

    </div>
</section>

<!-- Floating Smart Tooltip Element -->
<div id="guardify-smart-tooltip" role="tooltip" aria-hidden="true">
    <div style="display:flex; align-items:center; justify-content:space-between; gap:8px; margin-bottom:8px; padding-bottom:8px; border-bottom:1px solid rgba(148,163,184,0.2);">
        <div style="display:flex; align-items:center; gap:6px;">
            <span id="tooltip-pop-badge" style="background:#4f46e5; color:#fff; font-size:10px; font-weight:900; padding:2px 8px; border-radius:999px;">راهنمای گزینه</span>
            <strong id="tooltip-pop-title" style="font-size:13px; font-weight:900; color:#ffffff;">عنوان بخش</strong>
        </div>
        <button type="button" onclick="hideSmartTooltip()" style="background:transparent; border:none; color:#94a3b8; cursor:pointer; font-size:13px; padding:2px 4px;" aria-label="بستن تولتیپ">✕</button>
    </div>
    <p id="tooltip-pop-body" style="font-size:12px; line-height:1.75; color:#cbd5e1; margin:0 0 10px 0; font-weight:500;">
        توضیحات کامل این گزینه...
    </p>
    <div id="tooltip-pop-tip-wrap" style="background:rgba(16, 185, 129, 0.12); border:1px solid rgba(16, 185, 129, 0.35); border-radius:10px; padding:7px 10px; font-size:11px; color:#6ee7b7; font-weight:700;">
        <span id="tooltip-pop-tip">💡 پیشنهاد بهترین تنظیم...</span>
    </div>
</div>

<!-- Include Interactive Scripts for Panel Tabs -->
<script src="/js/demo-studio.js"></script>

<!-- Interactive Tooltip & Guided Tour Engine for Plugin Panel -->
<script>
(function() {
    // 1. Comprehensive Tooltip Knowledge Base for the 12 Tabs & All Key Settings Cards
    const TabGuides = {
        'dashboard': {
            step: 1,
            icon: '📍',
            badge: 'گام ۱ از ۱۲ · تب پیشخوان',
            title: 'پیشخوان و خلاصه وضعیت امنیتی',
            desc: 'نمای کلی سلامت امنیتی سایت، تعداد حملات دفع‌شده، اسکنر خودکار آسیب‌پذیری و پیش‌نمایش زنده ویجت کپچای فعال سایت.',
            tip: '💡 پیشنهاد: پس از نصب افزونه، یک‌بار دکمه «اسکن امنیتی خودکار» را در این تب بزنید تا تمام فرم‌های سایت بررسی شوند.'
        },
        'general': {
            step: 2,
            icon: '⚡',
            badge: 'گام ۲ از ۱۲ · تب چالش اصلی',
            title: 'انتخاب الگوریتم چالش کپچا و سازگاری کش',
            desc: 'در این بخش نوع چالش پیش‌فرض (اسلایدر پازلی، معادله ریاضی، تطبیق آیکون یا هانی‌پات نامرئی)، درجه سختی و توکن پویا (AJAX Nonce) برای سازگاری با لایت‌اسپید کش و راکت را تنظیم می‌کنید.',
            tip: '💡 پیشنهاد: برای فروشگاه‌های ووکامرس، چالش «اسلایدر پازلی» یا «هانی‌پات نامرئی» به همراه فعال بودن گزینه AJAX کش بهترین نرخ تبدیل را دارد.'
        },
        'login_styler': {
            step: 3,
            icon: '🔑',
            badge: 'گام ۳ از ۱۲ · تب طراحی ورود',
            title: 'استودیوی بازطراحی صفحه ورود (WP-Login Styler)',
            desc: 'ظاهر قدیمی wp-login.php را بدون افزونه جانبی به ۶ چیدمان مدرن (کارت متمرکز، اسپلیت اسکرین، سایدبار و...) با ۲۵+ والپیپر، لوگوی اختصاصی و رنگ‌بندی برند خود تغییر دهید.',
            tip: '💡 پیشنهاد: چیدمان «اسپلیت اسکرین (Split Screen)» یا «کارت متمرکز» همراه با لوگوی سایت، ظاهری کاملاً اختصاصی به پنل ورود می‌دهد.'
        },
        'themes': {
            step: 4,
            icon: '🎨',
            badge: 'گام ۴ از ۱۲ · تب ظاهر و تم‌ها',
            title: 'انتخاب از میان ۳۵+ تم رنگی و سفارشی‌سازی ظاهر کپچا',
            desc: 'پوسته ظاهری ویجت کپچا را متناسب با قالب سایت خود (دیجی‌کالا، فلت‌سام، وودمارت، دارک‌مود، گلس‌مورفیسم و...) انتخاب کنید یا رنگ، شعاع انحنا و فونت را سفارشی نمایید.',
            tip: '💡 پیشنهاد: حالت «تشخیص خودکار دارک‌مود (Auto Dark/Light)» را فعال کنید تا ویجت کپچا با قالب سایت هماهنگ شود.'
        },
        'forms': {
            step: 5,
            icon: '🧩',
            badge: 'گام ۵ از ۱۲ · تب فرم‌ها و ووکامرس',
            title: 'اتصال یک‌کلیکی به ووکامرس، دیجیتس و فرم‌سازها',
            desc: 'مشخص کنید کدام فرم‌های سایت (ورود و ثبت‌نام وردپرس، تسویه‌حساب ووکامرس، پاپ‌آپ پیامکی دیجیتس، المنتور، فرم تماس ۷ و گراویتی فرمز) محافظت شوند.',
            tip: '💡 پیشنهاد: می‌توانید برای هر فرم چالش متفاوتی تعیین کنید (مثلاً هانی‌پات برای دیدگاه‌ها و اسلایدر برای ورود و تسویه‌حساب).'
        },
        'security': {
            step: 6,
            icon: '🔒',
            badge: 'گام ۶ از ۱۲ · تب امنیت و هانی‌پات',
            title: '۶ سپر امنیتی ورود، مخفی‌سازی wp-login و ضد Brute-Force',
            desc: 'تنظیم محدودیت تعداد تلاش ناموفق ورود، تغییر آدرس پیش‌فرض wp-login.php، بستن XML-RPC، تله نامرئی هانی‌پات و تحلیل رفتاری سرعت پر شدن فرم.',
            tip: '💡 پیشنهاد: حد مجاز خطای ورود را روی ۵ مرتبه و زمان مسدودسازی موقت را روی ۳۰ دقیقه قرار دهید.'
        },
        'whitelist': {
            step: 7,
            icon: '🏳️',
            badge: 'گام ۷ از ۱۲ · تب لیست سفید',
            title: 'مدیریت لیست سفید (Whitelist) و معافیت‌های هوشمند',
            desc: 'آی‌پی‌های ثابت مدیران، نقش‌های کاربری خاص (مثلاً مدیر کل یا مشتریان VIP) یا صفحات خاص را از نمایش چالش کپچا معاف کنید.',
            tip: '💡 پیشنهاد: گزینه «معافیت کاربران لاگین‌شده» را فعال نگه دارید تا خریداران ثبت‌نام‌شده بدون چالش تکراری خرید کنند.'
        },
        'online': {
            step: 8,
            icon: '🌐',
            badge: 'گام ۸ از ۱۲ · تب سوییچر Failover',
            title: 'کپچاهای آنلاین و سوییچر هوشمند قطعی اینترنت (Smart Failover)',
            desc: 'اگر از Google reCAPTCHA یا Cloudflare Turnstile استفاده می‌کنید، با فعال کردن سوییچر هوشمند، در زمان قطعی اینترنت بین‌الملل یا کندی شبکه، افزونه در ۰.۲ میلی‌ثانیه به کپچای بومی سوییچ می‌کند.',
            tip: '💡 پیشنهاد: روی هاست‌های ایران، حالت «۱۰۰٪ بومی آفلاین» سریع‌ترین عملکرد (زیر ۱۰ کیلوبایت بار صفحه) را فراهم می‌کند.'
        },
        'statistics': {
            step: 9,
            icon: '📊',
            badge: 'گام ۹ از ۱۲ · تب آمار و گزارشات',
            title: 'نمودارهای تحلیلی و گزارشات گرافیکی دفع حملات',
            desc: 'مشاهده نمودار تفکیکی حملات مسدودشده بر اساس روز، نوع چالش کپچا و فرم‌های هدف بدون تحمیل بار اضافی به دیتابیس وردپرس.',
            tip: '💡 پیشنهاد: از این بخش می‌توانید ساعت‌های اوج حملات ربات‌ها به فرم ورود یا تسویه‌حساب را شناسایی کنید.'
        },
        'logs': {
            step: 10,
            icon: '🚨',
            badge: 'گام ۱۰ از ۱۲ · تب لاگ رویدادها',
            title: 'رادار زنده فایروال، جدول لاگ‌ها و خروجی اکسل/CSV',
            desc: 'مشاهده جزئیات دقیق هر رویداد امنیتی شامل آی‌پی، نام فرم، علت مسدودسازی (Brute-Force یا تله هانی‌پات)، امکان آزادسازی یک‌کلیکی IP و دانلود فایل CSV.',
            tip: '💡 پیشنهاد: پاک‌سازی خودکار لاگ‌های قدیمی‌تر از ۳۰ روز را فعال کنید تا جدول دیتابیس همیشه سبک بماند.'
        },
        'docs': {
            step: 11,
            icon: '💡',
            badge: 'گام ۱۱ از ۱۲ · تب راهنما و شورت‌کد',
            title: 'شورت‌کد اختصاصی [guardify_captcha] و هوک‌های توسعه‌دهندگان',
            desc: 'کد کوتاه آماده برای قرار دادن کپچا در هر فرم دلخواه یا قالب سفارشی به همراه فیلترها و اکشن‌های PHP برای برنامه‌نویسان.',
            tip: '💡 پیشنهاد: با کپی کردن شورت‌کد [guardify_captcha] می‌توانید در کمتر از ۱۰ ثانیه کپچا را به هر فرم HTML دلخواه اضافه کنید.'
        },
        'config': {
            step: 12,
            icon: '⚙️',
            badge: 'گام ۱۲ از ۱۲ · تب پیکربندی و بکاپ',
            title: 'برون‌بری (Export) و درون‌ریزی (Import) تنظیمات JSON',
            desc: 'از تمام تنظیمات، رنگ‌بندی‌ها و قوانین امنیتی خود فایل پشتیبان JSON بگیرید و با یک کلیک به سایت‌های دیگر خود منتقل کنید.',
            tip: '💡 پیشنهاد: اگر چندین سایت وردپرسی مدیریت می‌کنید، تنظیمات بهینه خود را یک‌بار ذخیره کرده و در سایر سایت‌ها Import کنید.'
        }
    };

    const tabOrder = Object.keys(TabGuides);
    let currentTourIdx = 0;

    // 2. Detailed Card-Level Tooltip Dictionary (Matches card titles inside admin-panel-markup.html)
    const CardTooltips = [
        {
            match: 'وضعیت کلی سپر امنیتی',
            title: 'وضعیت کلی سپر امنیتی و سلامت سایت',
            body: 'این کارت نشان‌دهنده فعال بودن هسته بومی گاردفای پرو، امتیاز امنیتی کانفیگ فعلی شما از ۱۰۰ و تعداد کل ربات‌های مهارشده است.',
            tip: '💡 با روشن کردن هانی‌پات و محدودیت تلاش ورود، امتیاز امنیتی به ۱۰۰٪ می‌رسد.'
        },
        {
            match: 'تست و پیش‌نمایش زنده کپچا',
            title: 'پیش‌نمایش زنده ویجت در پیشخوان',
            body: 'هر تغییری که در نوع چالش یا رنگ‌بندی اعمال کنید، بلافاصله در این باکس قابل مشاهده و تست تعاملی است؛ بدون نیاز به باز کردن صفحه جدید.',
            tip: '💡 با دکمه‌های پریست می‌توانید چالش‌های مختلف را در لحظه آزمایش کنید.'
        },
        {
            match: 'انتخاب نوع چالش و الگوریتم کپچا',
            title: 'انتخاب الگوریتم اصلی کپچا',
            body: 'مشخص می‌کند به صورت پیش‌فرض کدامیک از چالش‌های بومی (اسلایدر پازلی، ریاضی، تشخیص آیکون یا هانی‌پات نامرئی) به کاربران نمایش داده شود.',
            tip: '💡 چالش اسلایدر پازلی هم در موبایل و هم دسکتاپ بالاترین محبوبیت کاربری را دارد.'
        },
        {
            match: 'سازگاری با افزونه‌های کش',
            title: 'فناوری توکن پویا (AJAX Cache Bypass)',
            body: 'از کش شدن توکن امنیتی توسط LiteSpeed Cache، WP Rocket و Cloudflare جلوگیری می‌کند تا کاربران هرگز با خطای «کپچا منقضی شده است» روبرو نشوند.',
            tip: '💡 در سایت‌های دارای افزونه کش، حتماً این سوییچ را روشن بگذارید.'
        },
        {
            match: 'معماری و چیدمان صفحه ورود',
            title: '۶ چیدمان مدرن برای صفحه ورود (WP-Login)',
            body: 'ساختار صفحه ورود وردپرس را بین ۶ حالت کارت متمرکز، اسپلیت اسکرین دوتایی، سایدبار راست/چپ، کارت معلق یا مینیمال تغییر می‌دهد.',
            tip: '💡 تمام چیدمان‌ها ۱۰۰٪ واکنش‌گرا و سازگار با موبایل هستند.'
        },
        {
            match: 'کتابخانه والپیپرها و پس‌زمینه',
            title: 'والپیپرهای CSS خالص بدون افت سرعت',
            body: 'بیش از ۲۵ پس‌زمینه گرادیانت و مش نوری که با کدهای CSS خالص رندر می‌شوند و حتی ۱ کیلوبایت تصویر سنگین به صفحه ورود اضافه نمی‌کنند.',
            tip: '💡 همچنین می‌توانید تصویر دلخواه یا لوگوی برند خود را بارگذاری نمایید.'
        },
        {
            match: 'گالری پوسته‌های آماده کپچا',
            title: 'گالری ۳۵+ تم رنگی آماده',
            body: 'شامل پوسته‌های هماهنگ با قالب‌های محبوب ایرانی (دیجی‌کالا، وودمارت، فلت‌سام، آسترا) و استایل‌های شیشه‌ای (Glassmorphism) و نئونی.',
            tip: '💡 با یک کلیک روی هر کارت، رنگ‌بندی ویجت کپچا بلافاصله تغییر می‌کند.'
        },
        {
            match: 'فرم‌های هسته وردپرس',
            title: 'محافظت از فرم‌های پیش‌فرض وردپرس',
            body: 'فعال‌سازی کپچا روی فرم ورود (wp-login.php)، فرم عضویت، فرم فراموشی رمز عبور و بخش ارسال دیدگاه‌های نوشته‌ها.',
            tip: '💡 محافظت از فرم فراموشی رمز عبور مانع ارسال ایمیل‌های اسپم انبوه می‌شود.'
        },
        {
            match: 'فروشگاه‌ساز ووکامرس',
            title: 'سپر اختصاصی فروشگاه ووکامرس (WooCommerce)',
            body: 'محافظت هوشمند از فرم تسویه‌حساب (Checkout)، فرم ورود و ثبت‌نام حساب کاربری من (My Account) و جلوگیری از ثبت سفارش‌های فیک رباتی.',
            tip: '💡 در زمان اینترنت ملی، این بخش بدون هیچ تاخیری سفارش‌های مشتریان را ثبت می‌کند.'
        },
        {
            match: 'تله نامرئی هانی‌پات',
            title: 'تله مخفی هانی‌پات و تحلیل رفتاری',
            body: 'یک فیلد مخفی نامرئی در کدهای فرم ایجاد می‌کند که کاربران واقعی آن را نمی‌بینند، اما ربات‌های اسپمر به محض پر کردن آن شناسایی و مسدود می‌شوند.',
            tip: '💡 این لایه بیش از ۸۵٪ ربات‌های خودکار را بدون هیچ مزاحمتی برای انسان دفع می‌کند.'
        },
        {
            match: 'محدودیت تلاش ورود',
            title: 'فایروال ضد Brute-Force و مخفی‌سازی آدرس ورود',
            body: 'تعداد دفعات مجاز وارد کردن رمز اشتباه را محدود کرده و آی‌پی مهاجم را به صورت موقت یا دائم مسدود می‌سازد. همچنین امکان تغییر آدرس wp-login.php را فراهم می‌کند.',
            tip: '💡 تغییر اسلاگ ورود، حملات بات‌نت‌ها به wp-login.php را تا ۹۹٪ کاهش می‌دهد.'
        },
        {
            match: 'سوییچر هوشمند',
            title: 'سوییچر خودکار Failover در زمان اختلال اینترنت',
            body: 'پینگ و در دسترس بودن سرورهای گوگل و کلودفلر را پایش می‌کند؛ در صورت قطعی یا کندی، فوراً کپچای بومی آفلاین را جایگزین می‌نماید.',
            tip: '💡 حد آستانه تایم‌اوت را روی ۲۰۰۰ میلی‌ثانیه (۲ ثانیه) تنظیم کنید.'
        }
    ];

    const tooltipEl = document.getElementById('guardify-smart-tooltip');
    const popBadge = document.getElementById('tooltip-pop-badge');
    const popTitle = document.getElementById('tooltip-pop-title');
    const popBody = document.getElementById('tooltip-pop-body');
    const popTip = document.getElementById('tooltip-pop-tip');
    let activeTargetEl = null;

    function positionTooltipNear(targetEl) {
        if (!tooltipEl || !targetEl) return;
        const rect = targetEl.getBoundingClientRect();
        const ttWidth = 340;
        const ttHeight = tooltipEl.offsetHeight || 190;
        const padding = 12;

        let top = rect.bottom + 10;
        if (top + ttHeight > window.innerHeight - padding) {
            top = Math.max(padding, rect.top - ttHeight - 10);
        }

        let left = rect.right - ttWidth;
        if (left < padding) left = padding;
        if (left + ttWidth > window.innerWidth - padding) {
            left = window.innerWidth - ttWidth - padding;
        }

        tooltipEl.style.top = `${top}px`;
        tooltipEl.style.left = `${left}px`;
    }

    window.showSmartTooltip = function(targetEl, data) {
        if (!tooltipEl || !data) return;
        if (activeTargetEl && activeTargetEl !== targetEl) {
            activeTargetEl.classList.remove('guide-target-highlight');
        }
        activeTargetEl = targetEl;
        targetEl.classList.add('guide-target-highlight');

        popBadge.textContent = data.badge || 'راهنمای گزینه پنل';
        popTitle.textContent = data.title || 'توضیحات بخش';
        popBody.textContent = data.body || data.desc || '';
        popTip.textContent = data.tip || '💡 این گزینه به صورت بلادرنگ در هسته افزونه اعمال می‌شود.';

        tooltipEl.classList.add('visible');
        tooltipEl.setAttribute('aria-hidden', 'false');
        positionTooltipNear(targetEl);
    };

    window.hideSmartTooltip = function() {
        if (!tooltipEl) return;
        tooltipEl.classList.remove('visible');
        tooltipEl.setAttribute('aria-hidden', 'true');
        if (activeTargetEl) {
            activeTargetEl.classList.remove('guide-target-highlight');
            activeTargetEl = null;
        }
    };

    function updateDockBanner(tabSlug) {
        const info = TabGuides[tabSlug] || TabGuides['dashboard'];
        const iconEl = document.getElementById('dock-icon');
        const badgeEl = document.getElementById('dock-badge');
        const titleEl = document.getElementById('dock-title');
        const descEl = document.getElementById('dock-desc');
        const counterEl = document.getElementById('tour-step-counter');

        if (iconEl) iconEl.textContent = info.icon;
        if (badgeEl) badgeEl.textContent = info.badge;
        if (titleEl) titleEl.textContent = info.title;
        if (descEl) descEl.textContent = info.desc + ' — ' + info.tip;
        if (counterEl) counterEl.textContent = `گام ${info.step} از ۱۲: ${info.title}`;

        document.querySelectorAll('.guide-tab-pill').forEach(btn => {
            if (btn.getAttribute('data-guide-tab') === tabSlug) {
                btn.classList.add('active');
            } else {
                btn.classList.remove('active');
            }
        });
    }

    // 3. Switch Tab & Display Smart Tooltip on the Active Sidebar Item / First Card
    window.selectGuideTabWithTooltip = function(tabSlug) {
        const idx = tabOrder.indexOf(tabSlug);
        if (idx !== -1) currentTourIdx = idx;

        if (typeof window.guardifySwitchTab === 'function') {
            window.guardifySwitchTab(tabSlug, false);
        }
        updateDockBanner(tabSlug);

        // Find active pane and show tooltip on its header or sidebar link
        const info = TabGuides[tabSlug];
        const activePane = document.getElementById('guardify-tab-' + tabSlug);
        const targetCard = activePane ? (activePane.querySelector('.guardify-card') || activePane) : document.querySelector(`.guardify-sidebar-link[data-tab="${tabSlug}"]`);
        if (targetCard && info) {
            window.showSmartTooltip(targetCard, {
                badge: info.badge,
                title: info.title,
                body: info.desc,
                tip: info.tip
            });
        }
    };

    window.nextGuideTourStep = function() {
        currentTourIdx = (currentTourIdx + 1) % tabOrder.length;
        window.selectGuideTabWithTooltip(tabOrder[currentTourIdx]);
    };

    window.prevGuideTourStep = function() {
        currentTourIdx = (currentTourIdx - 1 + tabOrder.length) % tabOrder.length;
        window.selectGuideTabWithTooltip(tabOrder[currentTourIdx]);
    };

    window.startInteractivePanelTour = function() {
        currentTourIdx = 0;
        const stage = document.getElementById('embedded-panel-stage');
        if (stage) stage.scrollIntoView({ behavior: 'smooth', block: 'start' });
        setTimeout(() => {
            window.selectGuideTabWithTooltip(tabOrder[0]);
        }, 350);
    };

    window.toggleGuideBeaconsMode = function() {
        const badges = document.querySelectorAll('.guide-tooltip-badge');
        badges.forEach(b => b.classList.toggle('active-beacon'));
        if (badges.length > 0) {
            badges[0].scrollIntoView({ behavior: 'smooth', block: 'center' });
            badges[0].click();
        }
    };

    // 4. Inject Interactive '?' Tooltip Beacons into Sidebar Tabs & Panel Cards on DOM Ready
    document.addEventListener('DOMContentLoaded', function() {
        // Attach tooltips to all 12 Sidebar Links inside the embedded panel
        document.querySelectorAll('.guardify-sidebar-link').forEach(link => {
            const tabSlug = link.getAttribute('data-tab');
            const info = TabGuides[tabSlug];
            if (!info) return;

            link.addEventListener('mouseenter', function() {
                window.showSmartTooltip(link, {
                    badge: info.badge,
                    title: info.title,
                    body: info.desc,
                    tip: info.tip
                });
            });
            link.addEventListener('click', function() {
                const idx = tabOrder.indexOf(tabSlug);
                if (idx !== -1) currentTourIdx = idx;
                updateDockBanner(tabSlug);
            });
        });

        // Attach '?' Tooltip Badges to every .guardify-card-title inside admin-panel-markup.html
        document.querySelectorAll('#pane-master-admin .guardify-card-title').forEach((titleEl, index) => {
            const rawText = (titleEl.textContent || '').trim();
            let matchedInfo = CardTooltips.find(item => rawText.includes(item.match));

            if (!matchedInfo) {
                // Fallback contextual explanation based on parent tab
                const parentPane = titleEl.closest('.guardify-tab-pane');
                const tabSlug = parentPane ? parentPane.id.replace('guardify-tab-', '') : 'dashboard';
                const tabInfo = TabGuides[tabSlug] || TabGuides['dashboard'];
                matchedInfo = {
                    badge: `راهنمای بخش (${tabInfo.icon})`,
                    title: rawText || tabInfo.title,
                    body: `در این کادر می‌توانید تنظیمات مربوط به «${rawText}» را به صورت زنده تغییر دهید. تمامی تغییرات بلافاصله در هسته افزونه ذخیره و اعمال می‌شوند.`,
                    tip: tabInfo.tip
                };
            }

            const badge = document.createElement('button');
            badge.type = 'button';
            badge.className = 'guide-tooltip-badge';
            badge.setAttribute('aria-label', 'مشاهده راهنمای این بخش');
            badge.textContent = '؟';

            const showCardTip = function(e) {
                e.stopPropagation();
                const cardBox = titleEl.closest('.guardify-card') || titleEl;
                window.showSmartTooltip(cardBox, matchedInfo);
            };

            badge.addEventListener('mouseenter', showCardTip);
            badge.addEventListener('click', showCardTip);
            titleEl.appendChild(badge);
        });

        // Also attach tooltips to individual setting rows (.guardify-field-row or labels)
        document.querySelectorAll('#pane-master-admin .guardify-toggle-row, #pane-master-admin .guardify-setting-item').forEach(row => {
            row.addEventListener('mouseenter', function() {
                const label = row.querySelector('strong, label, h4');
                const desc = row.querySelector('p, span.description, small');
                if (label && desc) {
                    window.showSmartTooltip(row, {
                        badge: 'راهنمای گزینه تنظیمات',
                        title: label.textContent.trim(),
                        body: desc.textContent.trim(),
                        tip: '💡 با تغییر وضعیت این کلید و زدن دکمه ذخیره، تنظیمات بلافاصله در سایت فعال می‌شود.'
                    });
                }
            });
        });

        // Reposition tooltip on scroll/resize
        window.addEventListener('scroll', function() {
            if (activeTargetEl && tooltipEl.classList.contains('visible')) {
                positionTooltipNear(activeTargetEl);
            }
        }, { passive: true });
    });
})();
</script>

<?php include_once __DIR__ . '/footer.php'; ?>
