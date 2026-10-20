<?php
/**
 * Guardify Pro - User-Friendly & Practical Interactive Panel Guide
 * (راهنمای کاربردی، سناریومحور و تعاملی پنل مدیریت افزونه گاردفای پرو)
 */
$page_title = "راهنمای کاربردی پنل افزونه گاردفای پرو | آموزش گام‌به‌گام و سناریوهای آماده";
$page_description = "راهنمای جامع، کاربردی و تعاملی پنل مدیریت افزونه گاردفای پرو در پیشخوان وردپرس؛ شامل جستجوی سریع گزینه‌ها، سناریوهای آماده کانفیگ ووکامرس و دیجیتس، و تولتیپ هوشمند.";
$current_page = "guide";

include_once __DIR__ . '/header.php';
?>

<!-- Include Plugin Preview & Captcha Styles for Authentic Embedded Panel Rendering -->
<link rel="stylesheet" href="/css/captcha-themes.css">
<link rel="stylesheet" href="/css/login-plugin.css">
<link rel="stylesheet" href="/css/plugin-preview.css">

<style>
    /* Interactive Guide Badge inside Panel Cards & Rows */
    .guide-tooltip-badge {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 4px;
        height: 22px;
        padding: 0 8px;
        border-radius: 9999px;
        background: linear-gradient(135deg, #4f46e5, #6366f1);
        color: #ffffff !important;
        font-size: 10.5px;
        font-weight: 800;
        cursor: pointer;
        margin-right: 8px;
        margin-left: 4px;
        box-shadow: 0 2px 8px rgba(79, 70, 229, 0.3);
        border: 1.5px solid rgba(255, 255, 255, 0.9);
        transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        z-index: 25;
        vertical-align: middle;
        flex-shrink: 0;
        line-height: 1;
    }
    .guide-tooltip-badge:hover,
    .guide-tooltip-badge.active-beacon,
    .guide-tooltip-badge.pinned {
        transform: translateY(-1px) scale(1.06);
        background: linear-gradient(135deg, #f59e0b, #ea580c);
        box-shadow: 0 0 0 4px rgba(245, 158, 11, 0.25), 0 6px 14px rgba(234, 88, 12, 0.45);
    }

    /* Row-level subtle help button */
    .guide-row-help-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background: #e0e7ff;
        color: #4338ca !important;
        font-size: 11px;
        font-weight: 900;
        border: 1px solid #c7d2fe;
        cursor: pointer;
        margin-right: 6px;
        transition: all 0.18s ease;
        vertical-align: middle;
    }
    .guide-row-help-btn:hover,
    .guide-row-help-btn.active-beacon {
        background: #4f46e5;
        color: #ffffff !important;
        border-color: #4f46e5;
        transform: scale(1.15);
        box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.2);
    }

    /* Highlighted target element when inspected or jumped to */
    .guide-target-highlight {
        outline: 2.5px dashed #6366f1 !important;
        outline-offset: 4px !important;
        border-radius: 14px !important;
        transition: outline 0.2s ease, box-shadow 0.2s ease, background-color 0.2s ease;
    }
    .guide-target-spotlight {
        outline: 3px solid #f59e0b !important;
        outline-offset: 4px !important;
        box-shadow: 0 0 0 8px rgba(245, 158, 11, 0.22), 0 12px 30px rgba(15, 23, 42, 0.15) !important;
        background-color: #fffbeb !important;
        border-radius: 14px !important;
        transition: all 0.3s ease;
    }

    /* Floating Smart Tooltip Popover (Polite & Non-Intrusive) */
    #guardify-smart-tooltip {
        position: fixed;
        z-index: 999999;
        width: 360px;
        max-width: calc(100vw - 24px);
        background: #0f172a;
        color: #f8fafc;
        border: 1.5px solid #6366f1;
        border-radius: 18px;
        padding: 16px 18px;
        box-shadow: 0 22px 48px -10px rgba(2, 6, 23, 0.88), 0 0 25px rgba(99, 102, 241, 0.35);
        pointer-events: auto;
        opacity: 0;
        visibility: hidden;
        transform: translateY(6px);
        transition: opacity 0.16s ease, transform 0.16s ease, visibility 0.16s ease;
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
        padding: 7px 13px;
        border-radius: 11px;
        font-size: 12px;
        font-weight: 800;
        cursor: pointer;
        transition: all 0.2s ease;
        border: 1px solid rgba(148, 163, 184, 0.25);
        white-space: nowrap;
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

    /* Scenario Recipe Card */
    .guide-scenario-card {
        transition: all 0.22s cubic-bezier(0.4, 0, 0.2, 1);
        cursor: pointer;
    }
    .guide-scenario-card:hover {
        transform: translateY(-3px);
    }
    .guide-scenario-card.active-scenario {
        border-color: #f59e0b !important;
        box-shadow: 0 0 0 3px rgba(245, 158, 11, 0.25), 0 12px 28px -6px rgba(0, 0, 0, 0.2) !important;
    }
</style>

<!-- ========================================================================= -->
<!-- 1. HERO: PRACTICAL SEARCH, QUICK FILTERS & TOUR CONTROLLER -->
<!-- ========================================================================= -->
<section class="py-8 md:py-10 relative overflow-hidden bg-gradient-to-b from-slate-950 via-indigo-950 to-slate-900 text-white border-b border-slate-800 dark-contrast-card">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
        
        <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-6">
            <div class="space-y-2.5 max-w-3xl">
                <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-indigo-500/20 border border-indigo-400/40 text-indigo-300 text-xs font-black">
                    <i class="fas fa-compass text-amber-300"></i>
                    <span>دستیار تعاملی و راهنمای عملیاتی پیشخوان گاردفای پرو</span>
                </div>
                <h1 class="text-2xl sm:text-4xl font-black tracking-tight leading-tight text-white">
                    راهنمای کاربردی و گام‌به‌گام <span class="text-amber-300">پنل مدیریت افزونه</span>
                </h1>
                <p class="text-slate-300 text-xs sm:text-sm leading-relaxed font-medium">
                    دنبال هر تنظیم یا قابلیتی می‌گردید در کادر زیر جستجو کنید یا یکی از <strong>«سناریوهای آماده کانفیگ»</strong> را انتخاب نمایید تا پنل به صورت خودکار به همان تب رفته، گزینه مورد نظر را هایلایت کند و بهترین تنظیم پیشنهادی را به شما نشان دهد.
                </p>
            </div>

            <!-- Interactive Tour & Helper Controls -->
            <div class="flex flex-wrap items-center gap-2.5 shrink-0">
                <button type="button" onclick="startInteractivePanelTour()" class="px-5 py-3 rounded-2xl bg-gradient-to-r from-amber-500 to-orange-500 hover:from-amber-400 hover:to-orange-400 text-slate-950 font-black text-xs sm:text-sm shadow-xl shadow-amber-500/25 transition-all flex items-center gap-2 cursor-pointer">
                    <i class="fas fa-route text-slate-950"></i>
                    <span>شروع تور گام‌به‌گام (۱۲ تب)</span>
                </button>
                <button type="button" id="toggle-all-beacons-btn" onclick="toggleGuideBeaconsMode()" class="px-4 py-3 rounded-2xl bg-slate-800 hover:bg-slate-700 text-white border border-slate-700 font-bold text-xs sm:text-sm transition-all flex items-center gap-2 cursor-pointer">
                    <i class="fas fa-circle-question text-indigo-400"></i>
                    <span>نمایش نقاط راهنما در پنل</span>
                </button>
            </div>
        </div>

        <!-- Instant Practical Option Search Bar & Quick Problem-Solver Chips -->
        <div class="mt-6 p-4 sm:p-5 rounded-2xl bg-slate-900/90 border border-slate-700/80 shadow-2xl">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-4 items-center">
                <div class="lg:col-span-5 relative">
                    <label for="guide-smart-finder-input" class="block text-[11px] font-black text-amber-300 mb-1.5 flex items-center gap-1.5">
                        <i class="fas fa-magnifying-glass"></i>
                        <span>جستجوی سریع گزینه یا قابلیت در میان ۱۲ تب پنل:</span>
                    </label>
                    <div class="relative">
                        <input
                            type="text"
                            id="guide-smart-finder-input"
                            placeholder="مثلاً: دیجیتس، کش راکت، تغییر آدرس ورود، تسویه‌حساب، شورت‌کد، آی‌پی..."
                            class="w-full pl-9 pr-4 py-2.5 rounded-xl bg-slate-950 border border-slate-700 focus:border-amber-400 text-white text-xs sm:text-sm font-medium outline-none transition-all placeholder:text-slate-500"
                            autocomplete="off"
                        />
                        <button type="button" id="guide-finder-clear" onclick="clearGuideFinder()" style="display:none;" class="absolute left-2.5 top-1/2 -translate-y-1/2 text-slate-400 hover:text-white text-xs cursor-pointer px-1">✕</button>
                    </div>
                </div>

                <!-- Quick Filter Chips -->
                <div class="lg:col-span-7">
                    <div class="text-[11px] font-bold text-slate-400 mb-1.5">پرتکرارترین نیازهای مدیران سایت (کلیک کنید تا در پنل هایلایت شود):</div>
                    <div class="flex flex-wrap items-center gap-1.5">
                        <button type="button" onclick="jumpToPanelSetting('general', '[name=\'guardify_anti_cache_mode\']', 'سازگاری با لایت‌اسپید کش و راکت', 'این گزینه توکن امنیتی کپچا را به صورت پویا (AJAX) رفرش می‌کند تا صفحات کش‌شده هرگز خطای منقضی شدن کپچا ندهند.', '💡 در تمام سایت‌های دارای افزونه کش (WP Rocket / LiteSpeed) حتماً روشن باشد.')" class="px-2.5 py-1.5 rounded-lg bg-slate-800 hover:bg-indigo-600 text-slate-200 hover:text-white border border-slate-700 text-[11px] font-bold transition-all cursor-pointer">
                            🚀 رفع تداخل کش و راکت
                        </button>
                        <button type="button" onclick="jumpToPanelSetting('forms', '[name=\'guardify_woo_checkout\']', 'محافظت از تسویه‌حساب ووکامرس', 'جلوگیری از ثبت سفارش‌های فیک رباتی و تست کارت‌های سرقتی در صفحه Checkout ووکامرس بدون افت سرعت خرید.', '💡 پیشنهاد: به همراه معافیت کاربران لاگین‌شده روشن شود.')" class="px-2.5 py-1.5 rounded-lg bg-slate-800 hover:bg-indigo-600 text-slate-200 hover:text-white border border-slate-700 text-[11px] font-bold transition-all cursor-pointer">
                            🛒 تسویه‌حساب ووکامرس
                        </button>
                        <button type="button" onclick="jumpToPanelSetting('forms', '[name=\'guardify_digits_anti_sms_bombing\']', 'سپر ضد بمباران پیامک دیجیتس (SMS-Bombing)', 'محافظت از پاپ‌آپ و فرم OTP دیجیتس برای جلوگیری از ارسال هزاران پیامک تایید توسط ربات‌ها و سوختن شارژ پنل پیامکی.', '💡 برای تمام سایت‌های دارای ورود پیامکی دیجیتس ضروری است.')" class="px-2.5 py-1.5 rounded-lg bg-slate-800 hover:bg-indigo-600 text-slate-200 hover:text-white border border-slate-700 text-[11px] font-bold transition-all cursor-pointer">
                            📱 ضد بمباران پیامک دیجیتس
                        </button>
                        <button type="button" onclick="jumpToPanelSetting('login_styler', '[name=\'guardify_sec_login_rate_limit\']', 'سپر ضد Brute-Force و محدودیت تلاش ورود', 'مسدودسازی خودکار IP مهاجم پس از ۵ بار وارد کردن رمز اشتباه و بستن پورت‌های نفوذ xmlrpc.php و اسکن نام کاربری.', '💡 حد مجاز را روی ۵ تلاش و زمان قفل را روی ۱۵ تا ۳۰ دقیقه بگذارید.')" class="px-2.5 py-1.5 rounded-lg bg-slate-800 hover:bg-indigo-600 text-slate-200 hover:text-white border border-slate-700 text-[11px] font-bold transition-all cursor-pointer">
                            🔒 محدودیت تلاش ورود
                        </button>
                        <button type="button" onclick="jumpToPanelSetting('online', '[name=\'guardify_fallback_to_offline\']', 'سوییچ خودکار در قطعی اینترنت (Failover)', 'در صورت استفاده از کپچای گوگل یا کلودفلر، هنگام اختلال اینترنت بین‌الملل به صورت خودکار به کپچای آفلاین بومی سوییچ می‌کند.', '💡 تایم‌اوت را روی ۲.۵ ثانیه (استاندارد) قرار دهید.')" class="px-2.5 py-1.5 rounded-lg bg-slate-800 hover:bg-indigo-600 text-slate-200 hover:text-white border border-slate-700 text-[11px] font-bold transition-all cursor-pointer">
                            🌐 سوییچر قطعی اینترنت
                        </button>
                        <button type="button" onclick="jumpToPanelSetting('docs', '#guardify-tab-docs', 'شورت‌کد [guardify_captcha] و کدهای PHP', 'نحوه قرار دادن کپچا در فرم‌های سفارشی، المنتور، فرم تماس ۷ و قالب‌های اختصاصی با یک شورت‌کد ساده.', '💡 شورت‌کد [guardify_captcha] را قبل از دکمه ارسال فرم قرار دهید.')" class="px-2.5 py-1.5 rounded-lg bg-slate-800 hover:bg-indigo-600 text-slate-200 hover:text-white border border-slate-700 text-[11px] font-bold transition-all cursor-pointer">
                            💻 شورت‌کد و کد PHP
                        </button>
                    </div>
                </div>
            </div>

            <!-- Live Search Results Dropdown Grid -->
            <div id="guide-finder-results" style="display:none;" class="mt-4 pt-3 border-t border-slate-800 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-2.5"></div>
        </div>

        <!-- Quick 12-Tab Switcher Bar -->
        <div class="mt-5 pt-4 border-t border-slate-800/80">
            <div class="flex flex-wrap items-center justify-between gap-2 mb-2.5">
                <span class="text-[11px] font-black text-indigo-300 flex items-center gap-1.5">
                    <i class="fas fa-layer-group text-amber-400"></i>
                    <span>مرور مستقیم ۱۲ تب پنل افزونه (با کلیدهای جهت‌نمای کیبورد <kbd class="px-1.5 py-0.5 rounded bg-slate-800 text-amber-300 font-mono text-[10px]">←</kbd> <kbd class="px-1.5 py-0.5 rounded bg-slate-800 text-amber-300 font-mono text-[10px]">→</kbd> نیز می‌توانید بین تب‌ها حرکت کنید):</span>
                </span>
                <span id="tour-step-counter" class="text-[11px] font-mono font-bold text-amber-300 bg-amber-500/15 px-2.5 py-0.5 rounded-lg border border-amber-500/30">
                    گام ۱ از ۱۲: پیشخوان و خلاصه وضعیت
                </span>
            </div>
            <div class="flex flex-wrap items-center gap-1.5" id="guide-quick-tabs-bar">
                <button type="button" class="guide-tab-pill active" data-guide-tab="dashboard" onclick="selectGuideTabWithTooltip('dashboard', false)">📍 ۱. پیشخوان</button>
                <button type="button" class="guide-tab-pill" data-guide-tab="general" onclick="selectGuideTabWithTooltip('general', false)">⚡ ۲. چالش اصلی و کش</button>
                <button type="button" class="guide-tab-pill" data-guide-tab="login_styler" onclick="selectGuideTabWithTooltip('login_styler', false)">🔑 ۳. طراحی ورود (WP-Login)</button>
                <button type="button" class="guide-tab-pill" data-guide-tab="themes" onclick="selectGuideTabWithTooltip('themes', false)">🎨 ۴. ۳۵+ تم رنگی</button>
                <button type="button" class="guide-tab-pill" data-guide-tab="forms" onclick="selectGuideTabWithTooltip('forms', false)">🧩 ۵. فرم‌ها و ووکامرس</button>
                <button type="button" class="guide-tab-pill" data-guide-tab="security" onclick="selectGuideTabWithTooltip('security', false)">🔒 ۶. امنیت و هانی‌پات</button>
                <button type="button" class="guide-tab-pill" data-guide-tab="whitelist" onclick="selectGuideTabWithTooltip('whitelist', false)">🏳️ ۷. لیست سفید</button>
                <button type="button" class="guide-tab-pill" data-guide-tab="online" onclick="selectGuideTabWithTooltip('online', false)">🌐 ۸. سوییچر Failover</button>
                <button type="button" class="guide-tab-pill" data-guide-tab="statistics" onclick="selectGuideTabWithTooltip('statistics', false)">📊 ۹. آمار و نمودارها</button>
                <button type="button" class="guide-tab-pill" data-guide-tab="logs" onclick="selectGuideTabWithTooltip('logs', false)">🚨 ۱۰. رادار و لاگ‌ها</button>
                <button type="button" class="guide-tab-pill" data-guide-tab="docs" onclick="selectGuideTabWithTooltip('docs', false)">💡 ۱۱. شورت‌کد و هوک‌ها</button>
                <button type="button" class="guide-tab-pill" data-guide-tab="config" onclick="selectGuideTabWithTooltip('config', false)">⚙️ ۱۲. بکاپ و درون‌ریزی</button>
            </div>
        </div>
    </div>
</section>

<!-- ========================================================================= -->
<!-- 2. PRACTICAL READY-MADE SCENARIOS (سناریوهای کاربردی کانفیگ ۱-کلیکی) -->
<!-- ========================================================================= -->
<section class="py-6 bg-slate-100 dark:bg-slate-950 border-b border-slate-200 dark:border-slate-800/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 mb-4">
            <div class="flex items-center gap-2">
                <span class="w-2.5 h-2.5 rounded-full bg-emerald-500 animate-pulse"></span>
                <h2 class="text-sm sm:text-base font-black text-slate-900 dark:text-white">
                    سناریوهای کاربردی و کانفیگ‌های آماده (بر اساس نوع سایت شما)
                </h2>
            </div>
            <span class="text-xs text-slate-500 dark:text-slate-400 font-medium">
                با کلیک روی هر کارت، راهنمای عملیاتی و گزینه مربوطه در پنل پایین برایتان باز و هایلایت می‌شود:
            </span>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-3.5">
            <!-- Scenario 1: WooCommerce -->
            <div onclick="applyPracticalScenario('woo_golden', this)" class="guide-scenario-card p-4 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200/90 dark:border-slate-800 shadow-sm flex flex-col justify-between gap-3">
                <div>
                    <div class="flex items-center justify-between gap-2 mb-2">
                        <span class="text-xs font-black px-2.5 py-0.5 rounded-lg bg-emerald-500/10 text-emerald-600 dark:text-emerald-400 border border-emerald-500/20">🛒 سناریوی ۱ · فروشگاهی</span>
                        <span class="text-[11px] font-bold text-slate-400">تب ۵ و ۲</span>
                    </div>
                    <h3 class="text-xs sm:text-sm font-black text-slate-900 dark:text-white mb-1">کانفیگ طلایی فروشگاه ووکامرس</h3>
                    <p class="text-[11.5px] text-slate-600 dark:text-slate-400 leading-relaxed">
                        محافظت از تسویه‌حساب و ثبت‌نام مشتریان بدون ایجاد مزاحمت برای خریداران واقعی و سازگار با کش.
                    </p>
                </div>
                <div class="pt-2 border-t border-slate-100 dark:border-slate-800/80 flex items-center justify-between text-[11px] font-black text-indigo-600 dark:text-indigo-400">
                    <span>مشاهده تنظیمات در پنل</span>
                    <i class="fas fa-arrow-left text-[10px]"></i>
                </div>
            </div>

            <!-- Scenario 2: Digits & OTP -->
            <div onclick="applyPracticalScenario('digits_otp', this)" class="guide-scenario-card p-4 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200/90 dark:border-slate-800 shadow-sm flex flex-col justify-between gap-3">
                <div>
                    <div class="flex items-center justify-between gap-2 mb-2">
                        <span class="text-xs font-black px-2.5 py-0.5 rounded-lg bg-amber-500/10 text-amber-600 dark:text-amber-400 border border-amber-500/20">📱 سناریوی ۲ · پیامکی</span>
                        <span class="text-[11px] font-bold text-slate-400">تب ۵</span>
                    </div>
                    <h3 class="text-xs sm:text-sm font-black text-slate-900 dark:text-white mb-1">محافظت از دیجیتس و پنل پیامک</h3>
                    <p class="text-[11.5px] text-slate-600 dark:text-slate-400 leading-relaxed">
                        جلوگیری از حملات SMS-Bombing و اتمام شارژ پنل پیامکی در پاپ‌آپ‌های ورود و عضویت موبایلی Digits.
                    </p>
                </div>
                <div class="pt-2 border-t border-slate-100 dark:border-slate-800/80 flex items-center justify-between text-[11px] font-black text-indigo-600 dark:text-indigo-400">
                    <span>مشاهده تنظیمات در پنل</span>
                    <i class="fas fa-arrow-left text-[10px]"></i>
                </div>
            </div>

            <!-- Scenario 3: Login Security & Styler -->
            <div onclick="applyPracticalScenario('login_shield', this)" class="guide-scenario-card p-4 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200/90 dark:border-slate-800 shadow-sm flex flex-col justify-between gap-3">
                <div>
                    <div class="flex items-center justify-between gap-2 mb-2">
                        <span class="text-xs font-black px-2.5 py-0.5 rounded-lg bg-rose-500/10 text-rose-600 dark:text-rose-400 border border-rose-500/20">🛡️ سناریوی ۳ · امنیت ورود</span>
                        <span class="text-[11px] font-bold text-slate-400">تب ۳ و ۶</span>
                    </div>
                    <h3 class="text-xs sm:text-sm font-black text-slate-900 dark:text-white mb-1">ضد Brute-Force و زیباسازی ورود</h3>
                    <p class="text-[11.5px] text-slate-600 dark:text-slate-400 leading-relaxed">
                        قفل خودکار آی‌پی پس از ۵ خطا، بستن XML-RPC، تله هانی‌پات و مدرن‌سازی ظاهر wp-login.php.
                    </p>
                </div>
                <div class="pt-2 border-t border-slate-100 dark:border-slate-800/80 flex items-center justify-between text-[11px] font-black text-indigo-600 dark:text-indigo-400">
                    <span>مشاهده تنظیمات در پنل</span>
                    <i class="fas fa-arrow-left text-[10px]"></i>
                </div>
            </div>

            <!-- Scenario 4: Cache & National Internet Failover -->
            <div onclick="applyPracticalScenario('cache_failover', this)" class="guide-scenario-card p-4 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200/90 dark:border-slate-800 shadow-sm flex flex-col justify-between gap-3">
                <div>
                    <div class="flex items-center justify-between gap-2 mb-2">
                        <span class="text-xs font-black px-2.5 py-0.5 rounded-lg bg-cyan-500/10 text-cyan-600 dark:text-cyan-400 border border-cyan-500/20">⚡ سناریوی ۴ · سرعت و پایداری</span>
                        <span class="text-[11px] font-bold text-slate-400">تب ۲ و ۸</span>
                    </div>
                    <h3 class="text-xs sm:text-sm font-black text-slate-900 dark:text-white mb-1">سازگاری با کش و اینترنت ملی</h3>
                    <p class="text-[11.5px] text-slate-600 dark:text-slate-400 leading-relaxed">
                        تنظیم توکن پویا برای لایت‌اسپید کش / WP Rocket و سوییچ خودکار به کپچای آفلاین در زمان اختلال شبکه.
                    </p>
                </div>
                <div class="pt-2 border-t border-slate-100 dark:border-slate-800/80 flex items-center justify-between text-[11px] font-black text-indigo-600 dark:text-indigo-400">
                    <span>مشاهده تنظیمات در پنل</span>
                    <i class="fas fa-arrow-left text-[10px]"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========================================================================= -->
<!-- 3. EMBEDDED LIVE WORDPRESS ADMIN PANEL WITH SMART ASSISTANT DOCK -->
<!-- ========================================================================= -->
<section id="embedded-panel-stage" class="py-6 md:py-8 relative bg-slate-100 dark:bg-slate-950">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 space-y-5">

        <!-- Upgraded Contextual Tab Assistant & Option Highlighter Dock -->
        <div id="guide-active-dock" class="p-4 sm:p-6 rounded-3xl bg-slate-900 border-2 border-indigo-500/70 text-white shadow-2xl space-y-4 dark-contrast-card">
            <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-4">
                <div class="flex items-start gap-3.5">
                    <div class="w-12 h-12 rounded-2xl bg-indigo-600 text-white flex items-center justify-center text-xl font-black shrink-0 shadow-lg shadow-indigo-600/30" id="dock-icon">
                        📍
                    </div>
                    <div class="space-y-1.5">
                        <div class="flex flex-wrap items-center gap-2">
                            <span class="text-[11px] font-black px-2.5 py-0.5 rounded-md bg-amber-500/20 text-amber-300 border border-amber-500/40" id="dock-badge">گام ۱ از ۱۲ · تب پیشخوان</span>
                            <h2 class="text-sm sm:text-lg font-black text-white" id="dock-title">پیشخوان و خلاصه وضعیت امنیتی سایت</h2>
                        </div>
                        <p class="text-xs sm:text-[13px] text-slate-300 leading-relaxed font-medium" id="dock-desc">
                            نمای کلی سلامت امنیتی سایت، امتیاز کانفیگ فعلی از ۱۰۰٪ در ۵ حوزه حفاظتی و دسترسی سریع به ماژول‌های اصلی.
                        </p>
                    </div>
                </div>

                <!-- Step Progress & Prev/Next Controls -->
                <div class="flex items-center gap-2 shrink-0 self-end lg:self-center">
                    <button type="button" onclick="prevGuideTourStep()" class="px-3.5 py-2.5 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-200 border border-slate-700 text-xs font-bold cursor-pointer flex items-center gap-1.5 transition-all">
                        <i class="fas fa-arrow-right text-[10px]"></i>
                        <span>تب قبلی</span>
                    </button>
                    <button type="button" onclick="nextGuideTourStep()" class="px-4 py-2.5 rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white text-xs font-black cursor-pointer flex items-center gap-1.5 shadow-md transition-all">
                        <span>تب بعدی</span>
                        <i class="fas fa-arrow-left text-[10px]"></i>
                    </button>
                </div>
            </div>

            <!-- Actionable Sub-bar: Best Practice Tip + Quick Jump to Specific Settings inside this Tab -->
            <div class="pt-3.5 border-t border-slate-800 flex flex-col lg:flex-row items-start lg:items-center justify-between gap-3">
                <div class="flex items-center gap-2 px-3 py-1.5 rounded-xl bg-emerald-500/10 border border-emerald-500/30 text-emerald-300 text-xs font-bold" id="dock-tip">
                    💡 پیشنهاد طلایی: با کلیک روی هر کدام از ۵ کارت امتیاز امنیتی در پیشخوان، مستقیماً به تب تقویت همان بخش منتقل می‌شوید.
                </div>

                <div class="flex flex-wrap items-center gap-1.5" id="dock-hotspots-container">
                    <span class="text-[11px] font-black text-slate-400 ml-1">پرش به بخش‌های مهم این تب:</span>
                    <!-- Populated dynamically by JS for each tab -->
                </div>
            </div>
        </div>

        <!-- Authentic WordPress Shell Wrapper -->
        <div id="pane-master-admin" class="rounded-3xl overflow-hidden border-2 border-slate-300 dark:border-slate-700 shadow-2xl bg-[#f0f0f1] text-[#3c434a]">
            
            <!-- WordPress Top Admin Bar -->
            <div id="wpadminbar" style="background:#1d2327; color:#f0f0f1; min-height:38px; display:flex; align-items:center; justify-content:space-between; flex-wrap:wrap; gap:8px; padding:6px 14px; font-size:12px;" dir="rtl">
                <div style="display:flex; align-items:center; gap:12px;">
                    <span style="font-weight:bold; color:#fff;"><i class="fab fa-wordpress"></i> پیشخوان وردپرس</span>
                    <span style="color:#a7aaad;">|</span>
                    <span style="color:#f0f0f1;">محیط شبیه‌ساز و راهنمای زنده گاردفای پرو v4.00</span>
                </div>
                <div style="font-size:11px; color:#fbbf24; font-weight:bold; display:flex; align-items:center; gap:6px;">
                    <span>💡 روی دکمه‌های «؟ راهنما» کنار هر بخش کلیک کنید یا ماوس را نگه دارید تا توضیح کامل باز شود</span>
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

<!-- ========================================================================= -->
<!-- 4. QUICK 3-MINUTE SETUP CHECKLIST & DEVELOPER SHORTCODE CHEAT-SHEET -->
<!-- ========================================================================= -->
<section class="py-12 bg-white dark:bg-slate-900 border-t border-slate-200 dark:border-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 space-y-10">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            
            <!-- Left 7 Cols: 4-Step Setup Checklist after Installing -->
            <div class="lg:col-span-7 p-6 sm:p-7 rounded-3xl bg-slate-50 dark:bg-slate-950 border border-slate-200 dark:border-slate-800 space-y-5">
                <div class="flex items-center justify-between gap-3">
                    <div>
                        <span class="text-xs font-black text-indigo-600 dark:text-indigo-400">چک‌لیست عملیاتی پس از نصب</span>
                        <h3 class="text-lg sm:text-xl font-black text-slate-900 dark:text-white mt-0.5">
                            راه‌اندازی کامل افزونه در ۴ گام (کمتر از ۳ دقیقه)
                        </h3>
                    </div>
                    <span class="px-3 py-1 rounded-xl bg-emerald-500/10 text-emerald-600 dark:text-emerald-400 border border-emerald-500/20 text-xs font-black">
                        امتیاز امنیتی ۱۰۰٪
                    </span>
                </div>

                <div class="space-y-3">
                    <!-- Step 1 -->
                    <div class="p-4 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200/80 dark:border-slate-800 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3">
                        <div class="flex items-start gap-3">
                            <span class="w-7 h-7 rounded-xl bg-indigo-600 text-white font-black text-xs flex items-center justify-center shrink-0 mt-0.5">۱</span>
                            <div>
                                <h4 class="text-xs sm:text-sm font-black text-slate-900 dark:text-white">انتخاب الگوریتم چالش بومی و روشن کردن ضد کش AJAX</h4>
                                <p class="text-[11.5px] text-slate-600 dark:text-slate-400 mt-0.5 leading-relaxed">
                                    در تب <strong>«چالش اصلی و سختی»</strong>، ارائه‌دهنده را روی «کپچای آفلاین بومی» قرار داده و تیک «مکانیزم ضد کش (Anti-Cache)» را روشن بگذارید.
                                </p>
                            </div>
                        </div>
                        <button type="button" onclick="jumpToPanelSetting('general', '[name=\'guardify_anti_cache_mode\']', 'گام ۱: فعال‌سازی کپچای بومی و ضد کش', 'ارائه‌دهنده آفلاین بومی را انتخاب کرده و سوییچ Anti-Cache را روشن نگه دارید.', '💡 تضمین عملکرد بدون خطا در صفحات کش‌شده')" class="px-3 py-1.5 rounded-xl bg-indigo-50 dark:bg-indigo-950/60 hover:bg-indigo-600 text-indigo-600 dark:text-indigo-300 hover:text-white text-[11px] font-black transition-all shrink-0 cursor-pointer">
                            نمایش در پنل ➔
                        </button>
                    </div>

                    <!-- Step 2 -->
                    <div class="p-4 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200/80 dark:border-slate-800 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3">
                        <div class="flex items-start gap-3">
                            <span class="w-7 h-7 rounded-xl bg-indigo-600 text-white font-black text-xs flex items-center justify-center shrink-0 mt-0.5">۲</span>
                            <div>
                                <h4 class="text-xs sm:text-sm font-black text-slate-900 dark:text-white">تیک زدن فرم‌های مورد نظر (ووکامرس، دیجیتس، ورود وردپرس)</h4>
                                <p class="text-[11.5px] text-slate-600 dark:text-slate-400 mt-0.5 leading-relaxed">
                                    به تب <strong>«فرم‌ها و ووکامرس»</strong> بروید و فقط فرم‌هایی که در سایت دارید (مثلاً ورود، تسویه‌حساب ووکامرس و پاپ‌آپ دیجیتس) را فعال کنید.
                                </p>
                            </div>
                        </div>
                        <button type="button" onclick="jumpToPanelSetting('forms', '[name=\'guardify_woo_checkout\']', 'گام ۲: انتخاب فرم‌های تحت محافظت', 'فرم‌های فعال سایت خود را تیک بزنید و دکمه ذخیره تنظیمات ماژول‌ها را کلیک کنید.', '💡 نیازی به تیک زدن افزونه‌هایی که روی سایت نصب ندارید نیست.')" class="px-3 py-1.5 rounded-xl bg-indigo-50 dark:bg-indigo-950/60 hover:bg-indigo-600 text-indigo-600 dark:text-indigo-300 hover:text-white text-[11px] font-black transition-all shrink-0 cursor-pointer">
                            نمایش در پنل ➔
                        </button>
                    </div>

                    <!-- Step 3 -->
                    <div class="p-4 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200/80 dark:border-slate-800 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3">
                        <div class="flex items-start gap-3">
                            <span class="w-7 h-7 rounded-xl bg-indigo-600 text-white font-black text-xs flex items-center justify-center shrink-0 mt-0.5">۳</span>
                            <div>
                                <h4 class="text-xs sm:text-sm font-black text-slate-900 dark:text-white">فعال‌سازی تله هانی‌پات و محدودیت تلاش ناموفق (Rate Limit)</h4>
                                <p class="text-[11.5px] text-slate-600 dark:text-slate-400 mt-0.5 leading-relaxed">
                                    در تب <strong>«امنیت و هانی‌پات»</strong>، تله مخفی هانی‌پات، مسدودسازی خودکار مهاجمان و استثنای مدیران لاگین‌شده را فعال نگه دارید.
                                </p>
                            </div>
                        </div>
                        <button type="button" onclick="jumpToPanelSetting('security', '[name=\'guardify_enable_honeypot\']', 'گام ۳: فعال‌سازی هانی‌پات و ضد Brute-Force', 'تله مخفی هانی‌پات بیش از ۸۵٪ ربات‌های اسپمر را قبل از تعامل با فرم مسدود می‌سازد.', '💡 گزینه استثنا کردن مدیران لاگین‌شده را هم روشن بگذارید.')" class="px-3 py-1.5 rounded-xl bg-indigo-50 dark:bg-indigo-950/60 hover:bg-indigo-600 text-indigo-600 dark:text-indigo-300 hover:text-white text-[11px] font-black transition-all shrink-0 cursor-pointer">
                            نمایش در پنل ➔
                        </button>
                    </div>

                    <!-- Step 4 -->
                    <div class="p-4 rounded-2xl bg-white dark:bg-slate-900 border border-slate-200/80 dark:border-slate-800 flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3">
                        <div class="flex items-start gap-3">
                            <span class="w-7 h-7 rounded-xl bg-indigo-600 text-white font-black text-xs flex items-center justify-center shrink-0 mt-0.5">۴</span>
                            <div>
                                <h4 class="text-xs sm:text-sm font-black text-slate-900 dark:text-white">انتخاب تم رنگی هماهنگ با قالب سایت</h4>
                                <p class="text-[11.5px] text-slate-600 dark:text-slate-400 mt-0.5 leading-relaxed">
                                    از تب <strong>«ظاهر و تم‌های کپچا»</strong> پوسته روشن، تیره یا شیشه‌ای متناسب با رنگ سازمانی سایت خود را با یک کلیک انتخاب کنید.
                                </p>
                            </div>
                        </div>
                        <button type="button" onclick="jumpToPanelSetting('themes', '.guardify-theme-grid', 'گام ۴: انتخاب تم گرافیکی ویجت', 'با یک کلیک روی هر کارت، پیش‌نمایش و رنگ‌بندی ویجت با قالب سایت شما ست می‌شود.', '💡 فونت ویجت به صورت خودکار از قالب فارسی سایت شما ارث‌بری می‌کند.')" class="px-3 py-1.5 rounded-xl bg-indigo-50 dark:bg-indigo-950/60 hover:bg-indigo-600 text-indigo-600 dark:text-indigo-300 hover:text-white text-[11px] font-black transition-all shrink-0 cursor-pointer">
                            نمایش در پنل ➔
                        </button>
                    </div>
                </div>
            </div>

            <!-- Right 5 Cols: Copyable Shortcodes & Quick Snippets Box -->
            <div class="lg:col-span-5 p-6 sm:p-7 rounded-3xl bg-slate-900 text-white border border-slate-800 space-y-4 dark-contrast-card">
                <div class="flex items-center justify-between gap-2">
                    <span class="text-xs font-black px-2.5 py-1 rounded-lg bg-amber-500/20 text-amber-300 border border-amber-500/30">
                        💻 جعبه ابزار سریع شورت‌کدها
                    </span>
                    <button type="button" onclick="selectGuideTabWithTooltip('docs', true)" class="text-xs font-bold text-indigo-400 hover:text-indigo-300 cursor-pointer">
                        مشاهده مستندات کامل در تب ۱۱ ➔
                    </button>
                </div>
                <h3 class="text-base sm:text-lg font-black text-white">
                    کپی یک‌کلیکی شورت‌کد برای فرم‌های دلخواه
                </h3>
                <p class="text-xs text-slate-300 leading-relaxed">
                    اگر فرم سفارشی در المنتور، گوتنبرگ، پاپ‌آپ یا قالب خود دارید، کدهای زیر را با یک کلیک کپی و قبل از دکمه ارسال فرم قرار دهید:
                </p>

                <div class="space-y-3 pt-1">
                    <div class="p-3 rounded-2xl bg-slate-950 border border-slate-800 flex items-center justify-between gap-2">
                        <div>
                            <div class="text-[11px] font-bold text-slate-400 mb-0.5">۱. شورت‌کد استاندارد (پیروی از تنظیمات پنل):</div>
                            <code class="text-xs font-mono text-amber-300" dir="ltr">[guardify_captcha]</code>
                        </div>
                        <button type="button" onclick="copyGuideCode('[guardify_captcha]', this)" class="px-3 py-1.5 rounded-xl bg-slate-800 hover:bg-indigo-600 text-white text-[11px] font-bold transition-all cursor-pointer shrink-0">
                            کپی کد
                        </button>
                    </div>

                    <div class="p-3 rounded-2xl bg-slate-950 border border-slate-800 flex items-center justify-between gap-2">
                        <div>
                            <div class="text-[11px] font-bold text-slate-400 mb-0.5">۲. شورت‌کد با تعیین مستقیم نوع چالش و تم:</div>
                            <code class="text-xs font-mono text-emerald-300" dir="ltr">[guardify_captcha type="slider" theme="clean-light"]</code>
                        </div>
                        <button type="button" onclick="copyGuideCode('[guardify_captcha type=&quot;slider&quot; theme=&quot;clean-light&quot;]', this)" class="px-3 py-1.5 rounded-xl bg-slate-800 hover:bg-indigo-600 text-white text-[11px] font-bold transition-all cursor-pointer shrink-0">
                            کپی کد
                        </button>
                    </div>

                    <div class="p-3 rounded-2xl bg-slate-950 border border-slate-800 flex items-center justify-between gap-2">
                        <div>
                            <div class="text-[11px] font-bold text-slate-400 mb-0.5">۳. تگ اختصاصی درون فرم تماس ۷ (CF7):</div>
                            <code class="text-xs font-mono text-cyan-300" dir="ltr">[guardify_captcha guardify_captcha-123]</code>
                        </div>
                        <button type="button" onclick="copyGuideCode('[guardify_captcha guardify_captcha-123]', this)" class="px-3 py-1.5 rounded-xl bg-slate-800 hover:bg-indigo-600 text-white text-[11px] font-bold transition-all cursor-pointer shrink-0">
                            کپی کد
                        </button>
                    </div>

                    <div class="p-3 rounded-2xl bg-slate-950 border border-slate-800 flex items-center justify-between gap-2">
                        <div>
                            <div class="text-[11px] font-bold text-slate-400 mb-0.5">۴. تابع PHP رندر مستقیم در فایل‌های قالب:</div>
                            <code class="text-xs font-mono text-purple-300" dir="ltr">&lt;?php echo guardify_render_captcha(); ?&gt;</code>
                        </div>
                        <button type="button" onclick="copyGuideCode('&lt;?php if (function_exists(&quot;guardify_render_captcha&quot;)) { echo guardify_render_captcha(); } ?&gt;', this)" class="px-3 py-1.5 rounded-xl bg-slate-800 hover:bg-indigo-600 text-white text-[11px] font-bold transition-all cursor-pointer shrink-0">
                            کپی کد
                        </button>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- Floating Smart Tooltip Element (Polite & Pin-Capable) -->
<div id="guardify-smart-tooltip" role="tooltip" aria-hidden="true">
    <div style="display:flex; align-items:center; justify-content:space-between; gap:8px; margin-bottom:8px; padding-bottom:8px; border-bottom:1px solid rgba(148,163,184,0.2);">
        <div style="display:flex; align-items:center; gap:6px; flex-wrap:wrap;">
            <span id="tooltip-pop-badge" style="background:#4f46e5; color:#fff; font-size:10px; font-weight:900; padding:2px 8px; border-radius:999px;">راهنمای گزینه</span>
            <strong id="tooltip-pop-title" style="font-size:13px; font-weight:900; color:#ffffff;">عنوان بخش</strong>
        </div>
        <button type="button" onclick="hideSmartTooltip(true)" style="background:rgba(255,255,255,0.08); border:none; color:#cbd5e1; cursor:pointer; font-size:12px; width:24px; height:24px; border-radius:8px; display:inline-flex; align-items:center; justify-content:center;" aria-label="بستن تولتیپ">✕</button>
    </div>
    <p id="tooltip-pop-body" style="font-size:12px; line-height:1.75; color:#cbd5e1; margin:0 0 10px 0; font-weight:500;">
        توضیحات کامل این گزینه...
    </p>
    <div id="tooltip-pop-tip-wrap" style="background:rgba(16, 185, 129, 0.14); border:1px solid rgba(16, 185, 129, 0.38); border-radius:10px; padding:8px 10px; font-size:11px; color:#6ee7b7; font-weight:700; line-height:1.6;">
        <span id="tooltip-pop-tip">💡 پیشنهاد بهترین تنظیم...</span>
    </div>
</div>

<!-- Include Interactive Scripts for Panel Tabs -->
<script src="/js/demo-studio.js"></script>

<!-- Interactive Practical Guide, Search & Polite Tooltip Engine -->
<script>
(function() {
    // 1. Rich Knowledge Base for all 12 Tabs + Quick Action Hotspots inside each tab
    const TabGuides = {
        'dashboard': {
            step: 1,
            icon: '📍',
            badge: 'گام ۱ از ۱۲ · تب پیشخوان',
            title: 'پیشخوان و خلاصه وضعیت امنیتی سایت',
            desc: 'نمای کلی سلامت امنیتی سایت، امتیاز کل از ۱۰۰٪ به تفکیک ۵ حوزه حفاظتی و کارت‌های وضعیت سریع چالش کپچا، صفحه ورود و هانی‌پات.',
            tip: '💡 پیشنهاد طلایی: روی هر کدام از ۵ کارت امتیاز امنیتی کلیک کنید تا مستقیماً به تب تقویت همان بخش منتقل شوید.',
            hotspots: [
                { label: '📊 ارزیابی ۵ بخش امنیتی', selector: '#guardify-tab-dashboard .guardify-card:nth-of-type(2)', tip: 'مشاهده تفکیک امتیاز امنیتی سایت از ۱۰۰٪' },
                { label: '⚡ وضعیت چالش کپچا', selector: '#guardify-tab-dashboard .guardify-card:nth-of-type(3)', tip: 'مشاهده الگوریتم فعال و درجه سختی' }
            ]
        },
        'general': {
            step: 2,
            icon: '⚡',
            badge: 'گام ۲ از ۱۲ · تب چالش اصلی و کش',
            title: 'انتخاب الگوریتم چالش کپچا و سازگاری با کش',
            desc: 'در این بخش نوع ارائه‌دهنده (آفلاین بومی یا ابری)، الگوریتم چالش (اسلایدر، ریاضی، آیکون)، درجه سختی و توکن ضد کش AJAX را تنظیم می‌کنید.',
            tip: '💡 پیشنهاد طلایی: در سایت‌های فروشگاهی، ارائه‌دهنده را روی «آفلاین بومی» و گزینه «مکانیزم ضد کش (Anti-Cache)» را روشن بگذارید.',
            hotspots: [
                { label: '🛡️ انتخاب ارائه‌دهنده کپچا', selector: '[name="guardify_provider"]', tip: 'انتخاب بین کپچای ۱۰۰٪ آفلاین بومی یا سرویس‌های کلودفلر/گوگل' },
                { label: '🚀 مکانیزم ضد کش (LiteSpeed/Rocket)', selector: '[name="guardify_anti_cache_mode"]', tip: 'جلوگیری از کش شدن توکن کپچا در افزونه‌های کش' }
            ]
        },
        'login_styler': {
            step: 3,
            icon: '🔑',
            badge: 'گام ۳ از ۱۲ · تب طراحی ورود (WP-Login)',
            title: 'استودیوی بازطراحی صفحه ورود و امنیت لاگین',
            desc: 'ظاهر قدیمی wp-login.php را بدون افزونه جانبی با ۲۵+ والپیپر مدرن، فونت محلی (ایران‌سنس/وزیر)، شخصی‌سازی فیلدها و ۶ سپر امنیتی ضد Brute-Force جایگزین کنید.',
            tip: '💡 پیشنهاد طلایی: در انتهای همین تب، «مسدودسازی هوشمند بروت‌فورس» و «غیرفعال‌سازی XML-RPC» را حتماً روشن کنید.',
            hotspots: [
                { label: '🌌 گالری ۲۵+ والپیپر پس‌زمینه', selector: '.guardify-bg-card', tip: 'پس‌زمینه‌های CSS خالص بدون افت سرعت صفحه ورود' },
                { label: '🔤 انتخاب فونت فارسی محلی', selector: '[name="guardify_login_font_family"]', tip: 'فونت‌های آفلاین ایران‌سنس، ایران‌یکان و وزیر' },
                { label: '🎛️ استایل کادر و دکمه ورود', selector: '[name="guardify_login_button_style"]', tip: 'تنظیم گردی گوشه‌ها، سایه و استایل دکمه ورود' },
                { label: '🛡️ سپر ضد Brute-Force و XML-RPC', selector: '[name="guardify_sec_login_rate_limit"]', tip: 'محدودیت تلاش ناموفق ورود و بستن پورت‌های نفوذ' }
            ]
        },
        'themes': {
            step: 4,
            icon: '🎨',
            badge: 'گام ۴ از ۱۲ · تب ظاهر و تم‌ها',
            title: 'انتخاب از میان ۳۵+ تم رنگی و پوسته ویجت',
            desc: 'پوسته ظاهری ویجت کپچا را متناسب با قالب سایت خود (روشن مینیمال، اسلیت تاریک، طلایی لوکس، شیشه‌ای سایبرپانک، زمردی و...) با یک کلیک انتخاب کنید.',
            tip: '💡 پیشنهاد طلایی: برای قالب‌های فروشگاهی روشن، تم «روشن و مینیمال» یا «نسیم آسمانی» بهترین هماهنگی بصری را ایجاد می‌کند.',
            hotspots: [
                { label: '🎨 گالری تم‌های آماده ویجت', selector: '.guardify-theme-grid', tip: 'کلیک روی هر کارت بلافاصله ظاهر ویجت کپچا را تغییر می‌دهد' }
            ]
        },
        'forms': {
            step: 5,
            icon: '🧩',
            badge: 'گام ۵ از ۱۲ · تب فرم‌ها و ووکامرس',
            title: 'اتصال یک‌کلیکی به ووکامرس، دیجیتس، LMS و فرم‌سازها',
            desc: 'مشخص کنید کدام فرم‌های سایت (ورود و ثبت‌نام وردپرس، تسویه‌حساب ووکامرس، پاپ‌آپ پیامکی دیجیتس، دکان، لرن‌دش، المنتور و CF7) محافظت شوند.',
            tip: '💡 پیشنهاد طلایی: اگر از افزونه Digits استفاده می‌کنید، گزینه «سپر ضد ارسال پیامک انبوه (Anti SMS-Bombing)» را حتماً روشن کنید.',
            hotspots: [
                { label: '🔑 فرم‌های اصلی وردپرس', selector: '[name="guardify_wp_login"]', tip: 'محافظت از ورود، ثبت‌نام، فراموشی رمز و دیدگاه‌ها' },
                { label: '🛒 تسویه‌حساب و فرم‌های ووکامرس', selector: '[name="guardify_woo_checkout"]', tip: 'جلوگیری از سفارشات فیک و تست کارت در صفحه Checkout' },
                { label: '📝 المنتور، CF7 و گراویتی فرمز', selector: '[name="guardify_cf7"]', tip: 'تزریق خودکار کپچا به فرم‌سازهای محبوب' },
                { label: '📱 دیجیتس و ضد SMS-Bombing', selector: '[name="guardify_digits_anti_sms_bombing"]', tip: 'محافظت از پنل پیامکی در برابر بمباران SMS ربات‌ها' }
            ]
        },
        'security': {
            step: 6,
            icon: '🔒',
            badge: 'گام ۶ از ۱۲ · تب امنیت و هانی‌پات',
            title: 'لایه‌های امنیتی ضد اسپم، تله هانی‌پات و مدیریت IP',
            desc: 'تنظیم تله نامرئی هانی‌پات، حداقل زمان تکمیل فرم توسط انسان (Velocity Check)، محافظت در برابر حملات Replay، مسدودسازی خودکار مهاجمان و لیست سیاه IP.',
            tip: '💡 پیشنهاد طلایی: «استثنا کردن مدیران و کاربران وارد شده» را روشن بگذارید تا کاربران لاگین‌شده بدون چالش تکراری کار کنند.',
            hotspots: [
                { label: '🍯 تله مخفی هانی‌پات', selector: '[name="guardify_enable_honeypot"]', tip: 'دفع نامرئی بیش از ۸۵٪ ربات‌های اسپمر' },
                { label: '⏱️ حداقل زمان تکمیل فرم (Velocity)', selector: '[name="guardify_min_fill_time"]', tip: 'مسدودسازی فرم‌هایی که زیر ۲ ثانیه توسط اسکریپت پر می‌شوند' },
                { label: '🚫 مسدودسازی خودکار مهاجمان', selector: '[name="guardify_enable_auto_ban"]', tip: 'افزودن خودکار آی‌پی‌های مهاجم به لیست سیاه' },
                { label: '👤 معافیت کاربران لاگین‌شده', selector: '[name="guardify_bypass_logged_in"]', tip: 'عدم نمایش کپچا برای مدیران و کاربران وارد شده' }
            ]
        },
        'whitelist': {
            step: 7,
            icon: '🏳️',
            badge: 'گام ۷ از ۱۲ · تب لیست سفید',
            title: 'مدیریت لیست سفید (Whitelist) و معافیت‌های هوشمند',
            desc: 'آی‌پی‌های ثابت مدیران، شناسه‌های کاربری (User ID)، نقش‌های کاربری خاص (مثل مدیر فروشگاه) یا آدرس‌های URL خاص را از نمایش کپچا معاف کنید.',
            tip: '💡 پیشنهاد طلایی: نقش‌های administrator,editor,shop_manager به صورت پیش‌فرض معاف هستند تا مدیریت سایت سریع‌تر باشد.',
            hotspots: [
                { label: '🌐 لیست سفید آی‌پی‌ها', selector: '[name="guardify_whitelist_ips"]', tip: 'وارد کردن آی‌پی‌های مورد اعتماد (هر خط یک IP)' },
                { label: '👥 نقش‌های کاربری معاف', selector: '[name="guardify_whitelist_roles"]', tip: 'معاف کردن مدیران و ویرایشگران از حل کپچا' }
            ]
        },
        'online': {
            step: 8,
            icon: '🌐',
            badge: 'گام ۸ از ۱۲ · تب سوییچر Failover',
            title: 'کپچاهای ابری (گوگل/کلودفلر) و سوییچر هوشمند قطعی اینترنت',
            desc: 'تنظیم کلیدهای Google reCAPTCHA v2/v3، Cloudflare Turnstile و hCaptcha به همراه تستر زنده پینگ و سوییچ خودکار به کپچای آفلاین در زمان اختلال اینترنت.',
            tip: '💡 پیشنهاد طلایی: اگر از کپچای گوگل یا کلودفلر استفاده می‌کنید، «سپر سوئیچ اضطراری به کپچای آفلاین» را حتماً روشن نگه دارید.',
            hotspots: [
                { label: '☁️ کلیدهای Cloudflare Turnstile', selector: '[name="guardify_turnstile_site_key"]', tip: 'تنظیم Site Key و Secret Key کلودفلر' },
                { label: '📡 سنجش زنده دسترسی‌پذیری (Probe)', selector: '#guardify-admin-probe-btn', tip: 'تست پینگ و در دسترس بودن سرورهای گوگل و کلودفلر' },
                { label: '🛡️ سوییچ خودکار به کپچای آفلاین', selector: '[name="guardify_fallback_to_offline"]', tip: 'جایگزینی خودکار کپچای بومی در زمان قطعی اینترنت بین‌الملل' }
            ]
        },
        'statistics': {
            step: 9,
            icon: '📊',
            badge: 'گام ۹ از ۱۲ · تب آمار و گزارشات',
            title: 'نمودارهای تحلیلی و گزارشات گرافیکی دفع حملات',
            desc: 'مشاهده نمودار روند فعالیت‌های مشکوک (۷ روز تا ۱ سال)، توزیع متدهای اسپم، آمار سیستم‌عامل‌ها و مرورگرهای مهاجمان و وضعیت سلامت دیتابیس.',
            tip: '💡 پیشنهاد طلایی: با تغییر فیلتر زمانی نمودار می‌توانید روزها و ساعات اوج حملات ربات‌ها به سایت را شناسایی کنید.',
            hotspots: [
                { label: '📈 نمودار روند فعالیت‌های مشکوک', selector: '#trendPeriod', tip: 'پایش زمانی حملات دفع‌شده به صورت خطی یا ستونی' },
                { label: '🛡️ وضعیت سلامت و یکپارچگی سیستم', selector: '#guardify-tab-statistics .guardify-card:last-of-type', tip: 'بررسی سلامت هسته و حجم جدول لاگ‌ها' }
            ]
        },
        'logs': {
            step: 10,
            icon: '🚨',
            badge: 'گام ۱۰ از ۱۲ · تب لاگ رویدادها',
            title: 'رادار زنده فایروال، جدول لاگ‌ها و خروجی اکسل/CSV',
            desc: 'مشاهده جزئیات دقیق هر رویداد امنیتی ثبت‌شده، دانلود خروجی CSV برای تحلیل در اکسل و پاکسازی یک‌کلیکی لاگ‌ها.',
            tip: '💡 پیشنهاد طلایی: در تب امنیت می‌توانید حذف خودکار لاگ‌های قدیمی‌تر از ۳۰ روز را تنظیم کنید تا دیتابیس همیشه سبک بماند.',
            hotspots: [
                { label: '📥 دانلود خروجی CSV و پاکسازی', selector: '#guardify-tab-logs .guardify-card', tip: 'مدیریت رویدادهای ثبت‌شده و خروجی اکسل' }
            ]
        },
        'docs': {
            step: 11,
            icon: '💡',
            badge: 'گام ۱۱ از ۱۲ · تب راهنما و شورت‌کد',
            title: 'مستندات داخل پنل، شورت‌کد [guardify_captcha] و کدهای PHP',
            desc: 'راهنمای کامل استفاده از شورت‌کدها در المنتور و فرم تماس ۷، به همراه نمونه کدهای آماده PHP برای اتصال به فرم‌های اختصاصی قالب و هوک‌های ووکامرس.',
            tip: '💡 پیشنهاد طلایی: از بخش «روش ۲» در این تب می‌توانید شورت‌کدها را با پارامترهای دلخواه تم و نوع چالش کپی کنید.',
            hotspots: [
                { label: '🌟 دانشنامه ۱۲ قابلیت افزونه', selector: '#guardify-tab-docs .guardify-card:nth-of-type(2)', tip: 'مرور کلیه قابلیت‌های امنیتی گاردفای پرو' },
                { label: '💻 کدهای ادغام PHP و شورت‌کدها', selector: '#guardify-tab-docs .guardify-card:nth-of-type(3)', tip: 'قطعه کدهای آماده برای برنامه‌نویسان و طراحان سایت' }
            ]
        },
        'config': {
            step: 12,
            icon: '⚙️',
            badge: 'گام ۱۲ از ۱۲ · تب پیکربندی و پشتیبان',
            title: 'برون‌بری (Export) و درون‌ریزی (Import) تنظیمات JSON',
            desc: 'از تمام تنظیمات، رنگ‌بندی‌ها و قوانین امنیتی خود فایل پشتیبان JSON بگیرید یا تنظیمات آماده خود را با یک کلیک در سایت‌های دیگر درون‌ریزی (Import) کنید.',
            tip: '💡 پیشنهاد طلایی: اگر برای مشتریان سایت طراحی می‌کنید، کانفیگ استاندارد خود را یک‌بار Export گرفته و روی تمام پروژه‌ها Import کنید.',
            hotspots: [
                { label: '📤 برون‌بری و دانلود فایل JSON', selector: '#guardify-tab-config .guardify-card', tip: 'تهیه نسخه پشتیبان از کلیه تنظیمات افزونه' }
            ]
        }
    };

    // 2. Searchable Directory of Practical Settings across all 12 Tabs
    const SearchableSettingsIndex = [
        { tab: 'general', keywords: 'فعال سازی سراسری خاموش روشن master switch', title: 'فعال‌سازی سراسری افزونه (Master Switch)', selector: '[name="guardify_active"]', desc: 'روشن یا خاموش کردن کل سیستم کپچا در تمامی فرم‌های سایت با یک کلیک.', tip: '💡 برای فعال بودن محافظت باید روشن باشد.' },
        { tab: 'general', keywords: 'ارائه دهنده آفلاین بومی گوگل کلودفلر provider offline recaptcha turnstile', title: 'ارائه‌دهنده فعال کپچا (آفلاین بومی / ابری)', selector: '[name="guardify_provider"]', desc: 'انتخاب بین موتور ۱۰۰٪ آفلاین بومی (بدون نیاز به اینترنت خارج) یا سرویس‌های گوگل و کلودفلر.', tip: '💡 پیشنهاد: کپچای آفلاین بومی.' },
        { tab: 'general', keywords: 'کش راکت لایت اسپید خطای انقضا توکن پویا cache litespeed wp rocket ajax nonce', title: 'مکانیزم ضد کش (Anti-Cache Token Refresh)', selector: '[name="guardify_anti_cache_mode"]', desc: 'تولید پویای توکن اعتبارسنجی برای جلوگیری از کش شدن کپچا در LiteSpeed Cache و WP Rocket.', tip: '💡 در سایت‌های دارای افزونه کش حتماً روشن بگذارید.' },
        { tab: 'login_styler', keywords: 'والپیپر پس زمینه صفحه ورود لاگین گرادیانت شیشه ای wallpaper background login', title: 'گالری ۲۵+ والپیپر و افکت شیشه‌ای صفحه ورود', selector: '[name="guardify_login_frosted_glass"]', desc: 'تغییر پس‌زمینه wp-login.php با کدهای CSS خالص و افکت مات شیشه‌ای (Backdrop Blur).', tip: '💡 بدون اضافه کردن حتی ۱ کیلوبایت تصویر سنگین.' },
        { tab: 'login_styler', keywords: 'فونت فارسی ایران سنس وزیر یکان تایپوگرافی ورود font iransans vazir', title: 'انتخاب فونت محلی فرم ورود (ایران‌سنس / وزیر / یکان)', selector: '[name="guardify_login_font_family"]', desc: 'تنظیم فونت ۱۰۰٪ آفلاین برای صفحه ورود وردپرس یا پیروی خودکار از فونت قالب سایت.', tip: '💡 گزینه پیروی از فونت قالب یا ایران‌سنس پیشنهاد می‌شود.' },
        { tab: 'login_styler', keywords: 'استایل دکمه ورود فیلد کادر سایه گردی گوشه input button border radius', title: 'شخصی‌سازی ابعاد کادر، فیلدها و دکمه ورود', selector: '[name="guardify_login_button_style"]', desc: 'تنظیم عرض کادر فرم، گردی گوشه‌ها، سایه سه‌بعدی و متن دکمه ورود.', tip: '💡 استایل گرادیانت براق ۳بعدی ظاهری مدرن ایجاد می‌کند.' },
        { tab: 'login_styler', keywords: 'بروت فورس محدودیت تلاش ورود بلاک آی پی رمز اشتباه brute force rate limit xmlrpc author scan', title: 'سپر ضد Brute-Force، بستن XML-RPC و ضد اسکن نام کاربری', selector: '[name="guardify_sec_login_rate_limit"]', desc: 'مسدودسازی موقت IP پس از ۵ تلاش ناموفق، بستن xmlrpc.php و جلوگیری از لو رفتن نام کاربری مدیران.', tip: '💡 هر سه کلید امنیتی این بخش را روشن کنید.' },
        { tab: 'themes', keywords: 'تم پوسته رنگ ظاهر ویجت تاریک روشن طلایی شیشه ای theme dark light style', title: 'گالری ۳۵+ تم و پوسته گرافیکی ویجت کپچا', selector: '.guardify-theme-grid', desc: 'انتخاب رنگ‌بندی و استایل ظاهری ویجت کپچا هماهنگ با قالب فروشگاهی یا شرکتی شما.', tip: '💡 با کلیک روی هر کارت، تم بلافاصله اعمال می‌شود.' },
        { tab: 'forms', keywords: 'ووکامرس تسویه حساب سبد خرید سفارش فیک تست کارت woocommerce checkout register login', title: 'محافظت از صفحه تسویه‌حساب و فرم‌های ووکامرس', selector: '[name="guardify_woo_checkout"]', desc: 'جلوگیری از ثبت سفارشات رباتی و تست کارت‌های سرقتی در صفحه Checkout و حساب کاربری من.', tip: '💡 بهترین راهکار برای جلوگیری از سفارش‌های اسپم ووکامرس.' },
        { tab: 'forms', keywords: 'دیجیتس پیامک بمباران اس ام اس موبایل پاپ آپ digits otp sms bombing mobile', title: 'محافظت از دیجیتس و سپر ضد بمباران پیامک (Anti SMS-Bombing)', selector: '[name="guardify_digits_anti_sms_bombing"]', desc: 'محافظت از فرم‌های OTP دیجیتس برای جلوگیری از خالی شدن شارژ پنل پیامکی توسط ربات‌ها.', tip: '💡 در سایت‌های دارای ورود پیامکی حتماً فعال شود.' },
        { tab: 'forms', keywords: 'فرم تماس ۷ المنتور گراویتی فرمز دکان لرن دش cf7 elementor gravity forms dokan lms', title: 'اتصال به فرم‌سازها (المنتور، CF7، گراویتی) و دکان/LMS', selector: '[name="guardify_cf7"]', desc: 'فعال‌سازی یک‌کلیکی کپچا روی فرم‌های المنتور پرو، فرم تماس ۷، دکان و سامانه‌های آموزشی.', tip: '💡 بدون نیاز به کدنویسی، فقط تیک فرم مورد نظر را بزنید.' },
        { tab: 'security', keywords: 'هانی پات تله مخفی نامرئی سرعت پر کردن فرم honeypot velocity time replay', title: 'تله مخفی هانی‌پات و سنجش سرعت تکمیل فرم (Velocity Check)', selector: '[name="guardify_enable_honeypot"]', desc: 'شناسایی و مسدودسازی ربات‌هایی که فیلد مخفی را پر می‌کنند یا فرم را زیر ۲ ثانیه ارسال می‌نمایند.', tip: '💡 بیش از ۸۵٪ ربات‌ها را بدون مزاحمت برای انسان دفع می‌کند.' },
        { tab: 'security', keywords: 'لیست سیاه بلاک آی پی معافیت مدیران لاگین شده blacklist ip auto ban logged in', title: 'مسدودسازی خودکار مهاجمان، لیست سیاه IP و معافیت لاگین‌شده‌ها', selector: '[name="guardify_bypass_logged_in"]', desc: 'معاف کردن مدیران و مشتریان لاگین‌شده از دیدن کپچا و مدیریت لیست سیاه آی‌پی‌ها.', tip: '💡 معافیت کاربران لاگین‌شده تجربه کاربری را عالی می‌کند.' },
        { tab: 'whitelist', keywords: 'لیست سفید استثنا آی پی نقش کاربری مدیر whitelist ip role user id', title: 'لیست سفید آی‌پی‌ها، شناسه‌ها و نقش‌های کاربری معاف', selector: '[name="guardify_whitelist_ips"]', desc: 'معاف کردن آی‌پی ثابت شرکت، مدیران کل یا مدیران فروشگاه از چالش کپچا.', tip: '💡 هر آی‌پی را در یک خط مجزا وارد کنید.' },
        { tab: 'online', keywords: 'قطعی اینترنت ملی سوییچر هوشمند کلودفلر گوگل پینگ failover turnstile recaptcha offline fallback', title: 'سوییچر خودکار به کپچای آفلاین در زمان اختلال اینترنت (Smart Failover)', selector: '[name="guardify_fallback_to_offline"]', desc: 'پایش زنده سرورهای گوگل و کلودفلر و سوییچ خودکار به کپچای بومی در زمان قطعی اینترنت بین‌الملل.', tip: '💡 تایم‌اوت را روی ۲.۵ ثانیه بگذارید.' },
        { tab: 'statistics', keywords: 'آمار نمودار گزارش حملات سیستم عامل مرورگر chart statistics analytics', title: 'نمودارهای تحلیلی حملات دفع‌شده و آمار مرورگر/سیستم‌عامل', selector: '#trendPeriod', desc: 'مشاهده گرافیکی تعداد حملات مسدودشده در بازه‌های زمانی ۷ روزه تا ۱ ساله.', tip: '💡 بدون تحمیل بار اضافی به دیتابیس وردپرس.' },
        { tab: 'logs', keywords: 'لاگ رویداد اکسل خروجی پاکسازی جدول دیتابیس logs csv export clear', title: 'رادار رویدادهای امنیتی، خروجی CSV و پاکسازی لاگ‌ها', selector: '#guardify-tab-logs .guardify-card', desc: 'مشاهده لیست آخرین حملات دفع‌شده با قابلیت دانلود فایل CSV و پاکسازی دستی.', tip: '💡 نگهداری خودکار لاگ‌ها به صورت پیش‌فرض ۳۰ روز است.' },
        { tab: 'docs', keywords: 'شورت کد کد کوتاه برنامه نویس هوک تابع shortcode php hook function api', title: 'شورت‌کد [guardify_captcha] و توابع PHP توسعه‌دهندگان', selector: '#guardify-tab-docs .guardify-card:nth-of-type(3)', desc: 'کدهای آماده برای قرار دادن کپچا در فرم‌های سفارشی HTML/PHP و هوک‌های ووکامرس.', tip: '💡 با یک شورت‌کد ساده به هر فرمی متصل شوید.' },
        { tab: 'config', keywords: 'بکاپ پشتیبان درون ریزی برون بری انتقال تنظیمات json export import backup', title: 'برون‌بری (Export) و درون‌ریزی (Import) تنظیمات JSON', selector: '#guardify-tab-config .guardify-card', desc: 'تهیه فایل پشتیبان از کلیه تنظیمات افزونه برای انتقال سریع به سایر سایت‌های وردپرسی.', tip: '💡 انتقال کامل تنظیمات در کمتر از ۵ ثانیه.' }
    ];

    const tabOrder = Object.keys(TabGuides);
    let currentTourIdx = 0;
    let isTooltipPinned = false;
    let activeTargetEl = null;
    let activeSpotEl = null;

    const tooltipEl = document.getElementById('guardify-smart-tooltip');
    const popBadge = document.getElementById('tooltip-pop-badge');
    const popTitle = document.getElementById('tooltip-pop-title');
    const popBody = document.getElementById('tooltip-pop-body');
    const popTip = document.getElementById('tooltip-pop-tip');

    function positionTooltipNear(targetEl) {
        if (!tooltipEl || !targetEl) return;
        const rect = targetEl.getBoundingClientRect();
        const ttWidth = Math.min(360, window.innerWidth - 24);
        const ttHeight = tooltipEl.offsetHeight || 185;
        const padding = 14;

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

    window.showSmartTooltip = function(targetEl, data, pinIt) {
        if (!tooltipEl || !data || !targetEl) return;
        if (activeTargetEl && activeTargetEl !== targetEl) {
            activeTargetEl.classList.remove('guide-target-highlight');
        }
        activeTargetEl = targetEl;
        targetEl.classList.add('guide-target-highlight');
        if (pinIt) isTooltipPinned = true;

        popBadge.textContent = data.badge || 'راهنمای گزینه پنل';
        popTitle.textContent = data.title || 'توضیحات بخش';
        popBody.textContent = data.body || data.desc || '';
        popTip.textContent = data.tip || '💡 پس از تغییر وضعیت، دکمه ذخیره تغییرات را بزنید.';

        tooltipEl.classList.add('visible');
        tooltipEl.setAttribute('aria-hidden', 'false');
        positionTooltipNear(targetEl);
    };

    window.hideSmartTooltip = function(forceUnpin) {
        if (!tooltipEl) return;
        if (isTooltipPinned && !forceUnpin) return;
        isTooltipPinned = false;
        tooltipEl.classList.remove('visible');
        tooltipEl.setAttribute('aria-hidden', 'true');
        if (activeTargetEl) {
            activeTargetEl.classList.remove('guide-target-highlight');
            activeTargetEl = null;
        }
    };

    // Update the Contextual Assistant Dock & Render Clickable Option Hotspots
    function updateDockBanner(tabSlug) {
        const info = TabGuides[tabSlug] || TabGuides['dashboard'];
        const iconEl = document.getElementById('dock-icon');
        const badgeEl = document.getElementById('dock-badge');
        const titleEl = document.getElementById('dock-title');
        const descEl = document.getElementById('dock-desc');
        const tipEl = document.getElementById('dock-tip');
        const counterEl = document.getElementById('tour-step-counter');
        const hotspotsContainer = document.getElementById('dock-hotspots-container');

        if (iconEl) iconEl.textContent = info.icon;
        if (badgeEl) badgeEl.textContent = info.badge;
        if (titleEl) titleEl.textContent = info.title;
        if (descEl) descEl.textContent = info.desc;
        if (tipEl) tipEl.textContent = info.tip;
        if (counterEl) counterEl.textContent = `گام ${info.step} از ۱۲: ${info.title}`;

        // Render clickable hotspot pills for the active tab
        if (hotspotsContainer) {
            const buttonsHtml = (info.hotspots || []).map((h, idx) => `
                <button type="button" onclick="highlightTabHotspot('${tabSlug}', ${idx})" class="px-2.5 py-1 rounded-lg bg-slate-800 hover:bg-amber-500 text-slate-200 hover:text-slate-950 border border-slate-700 hover:border-amber-400 text-[11px] font-bold transition-all cursor-pointer flex items-center gap-1">
                    <span>${h.label}</span>
                </button>
            `).join('');
            hotspotsContainer.innerHTML = `<span class="text-[11px] font-black text-slate-400 ml-1">پرش به بخش‌های مهم این تب:</span>` + buttonsHtml;
        }

        document.querySelectorAll('.guide-tab-pill').forEach(btn => {
            if (btn.getAttribute('data-guide-tab') === tabSlug) {
                btn.classList.add('active');
            } else {
                btn.classList.remove('active');
            }
        });
    }

    // Highlight a specific hotspot inside the active tab
    window.highlightTabHotspot = function(tabSlug, hotspotIdx) {
        const info = TabGuides[tabSlug];
        if (!info || !info.hotspots || !info.hotspots[hotspotIdx]) return;
        const h = info.hotspots[hotspotIdx];
        window.jumpToPanelSetting(tabSlug, h.selector, h.label, info.desc, '💡 ' + h.tip);
    };

    // Jump directly to a setting inside any tab, scroll to it, spotlight it, and show explanation
    window.jumpToPanelSetting = function(tabSlug, selector, title, desc, tip) {
        const idx = tabOrder.indexOf(tabSlug);
        if (idx !== -1) currentTourIdx = idx;

        if (typeof window.guardifySwitchTab === 'function') {
            window.guardifySwitchTab(tabSlug, false);
        }
        updateDockBanner(tabSlug);

        setTimeout(() => {
            const pane = document.getElementById('guardify-tab-' + tabSlug);
            let target = selector ? document.querySelector(selector) : null;
            if (target && (target.tagName === 'INPUT' || target.tagName === 'SELECT' || target.tagName === 'TEXTAREA')) {
                target = target.closest('.guardify-switch-row, .guardify-form-group, .guardify-card') || target;
            }
            if (!target && pane) {
                target = pane.querySelector('.guardify-card') || pane;
            }

            if (activeSpotEl) {
                activeSpotEl.classList.remove('guide-target-spotlight');
            }

            if (target) {
                activeSpotEl = target;
                target.classList.add('guide-target-spotlight');
                target.scrollIntoView({ behavior: 'smooth', block: 'center' });

                window.showSmartTooltip(target, {
                    badge: TabGuides[tabSlug] ? TabGuides[tabSlug].badge : 'راهنمای تنظیمات',
                    title: title,
                    body: desc,
                    tip: tip
                }, true);

                setTimeout(() => {
                    target.classList.remove('guide-target-spotlight');
                }, 4500);
            }
        }, 120);
    };

    // Apply 1-Click Practical Scenarios
    window.applyPracticalScenario = function(scenarioKey, cardEl) {
        document.querySelectorAll('.guide-scenario-card').forEach(c => c.classList.remove('active-scenario'));
        if (cardEl) cardEl.classList.add('active-scenario');

        if (scenarioKey === 'woo_golden') {
            const chkCheckout = document.querySelector('[name="guardify_woo_checkout"]');
            const chkReg = document.querySelector('[name="guardify_woo_register"]');
            const chkLogin = document.querySelector('[name="guardify_woo_login"]');
            if (chkCheckout) chkCheckout.checked = true;
            if (chkReg) chkReg.checked = true;
            if (chkLogin) chkLogin.checked = true;

            window.jumpToPanelSetting(
                'forms',
                '[name="guardify_woo_checkout"]',
                '🛒 سناریوی ۱: کانفیگ طلایی فروشگاه ووکامرس فعال شد',
                'تیک محافظت از «صفحه تسویه‌حساب (Checkout)»، «فرم ثبت‌نام» و «ورود حساب کاربری ووکامرس» روشن شد. مشتریان لاگین‌شده از چالش معاف هستند تا خرید بدون هیچ مانعی انجام شود.',
                '💡 پیشنهاد: در تب چالش اصلی نیز گزینه Anti-Cache را روشن نگه دارید.'
            );
        } else if (scenarioKey === 'digits_otp') {
            const dLogin = document.querySelector('[name="guardify_digits_login"]');
            const dReg = document.querySelector('[name="guardify_digits_register"]');
            const dBomb = document.querySelector('[name="guardify_digits_anti_sms_bombing"]');
            if (dLogin) dLogin.checked = true;
            if (dReg) dReg.checked = true;
            if (dBomb) dBomb.checked = true;

            window.jumpToPanelSetting(
                'forms',
                '[name="guardify_digits_anti_sms_bombing"]',
                '📱 سناریوی ۲: سپر محافظت از دیجیتس و ضد بمباران پیامک',
                'گزینه‌های محافظت از پاپ‌آپ ورود و ثبت‌نام Digits و «سپر ضد ارسال پیامک انبوه (Anti SMS-Bombing)» فعال شدند تا ربات‌ها نتوانند اعتبار پنل پیامکی شما را خالی کنند.',
                '💡 سازگار با تمامی فرم‌ها و مودال‌های AJAX افزونه دیجیتس.'
            );
        } else if (scenarioKey === 'login_shield') {
            const rLimit = document.querySelector('[name="guardify_sec_login_rate_limit"]');
            const xmlrpc = document.querySelector('[name="guardify_sec_disable_xmlrpc"]');
            const authorScan = document.querySelector('[name="guardify_sec_block_author_scan"]');
            if (rLimit) rLimit.checked = true;
            if (xmlrpc) xmlrpc.checked = true;
            if (authorScan) authorScan.checked = true;

            window.jumpToPanelSetting(
                'login_styler',
                '[name="guardify_sec_login_rate_limit"]',
                '🛡️ سناریوی ۳: سپر ضد Brute-Force و ایمن‌سازی ورود',
                'محدودیت ۵ تلاش ناموفق ورود، بستن پروتکل XML-RPC و مسدودسازی اسکن نام کاربری مدیران (/?author=1) در تب طراحی و امنیت ورود فعال گردید.',
                '💡 در بالای همین تب می‌توانید والپیپر و فونت فارسی صفحه ورود را نیز انتخاب کنید.'
            );
        } else if (scenarioKey === 'cache_failover') {
            const failover = document.querySelector('[name="guardify_fallback_to_offline"]');
            if (failover) failover.checked = true;

            window.jumpToPanelSetting(
                'online',
                '[name="guardify_fallback_to_offline"]',
                '⚡ سناریوی ۴: پایداری در کش و سوییچر قطعی اینترنت بین‌الملل',
                'سپر «سوئیچ خودکار به کپچای آفلاین (Smart Failover)» روشن شد. در صورت قطعی یا کندی سرورهای گوگل و کلودفلر، افزونه ظرف ۲.۵ ثانیه به کپچای بومی آفلاین سوییچ می‌کند.',
                '💡 همچنین می‌توانید با دکمه «سنجش زنده دسترسی‌پذیری» پینگ سرورهای ابری را تست کنید.'
            );
        }
    };

    // Switch Tab cleanly (Only opens floating tooltip if explicitly requested via showTip=true)
    window.selectGuideTabWithTooltip = function(tabSlug, showTip) {
        const idx = tabOrder.indexOf(tabSlug);
        if (idx !== -1) currentTourIdx = idx;

        hideSmartTooltip(true);

        if (typeof window.guardifySwitchTab === 'function') {
            window.guardifySwitchTab(tabSlug, false);
        }
        updateDockBanner(tabSlug);

        if (showTip) {
            const info = TabGuides[tabSlug];
            const activePane = document.getElementById('guardify-tab-' + tabSlug);
            const targetCard = activePane ? (activePane.querySelector('.guardify-card') || activePane) : null;
            if (targetCard && info) {
                window.showSmartTooltip(targetCard, {
                    badge: info.badge,
                    title: info.title,
                    body: info.desc,
                    tip: info.tip
                }, false);
            }
        }
    };

    window.nextGuideTourStep = function() {
        currentTourIdx = (currentTourIdx + 1) % tabOrder.length;
        window.selectGuideTabWithTooltip(tabOrder[currentTourIdx], false);
        const dock = document.getElementById('guide-active-dock');
        if (dock) dock.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    };

    window.prevGuideTourStep = function() {
        currentTourIdx = (currentTourIdx - 1 + tabOrder.length) % tabOrder.length;
        window.selectGuideTabWithTooltip(tabOrder[currentTourIdx], false);
        const dock = document.getElementById('guide-active-dock');
        if (dock) dock.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    };

    window.startInteractivePanelTour = function() {
        currentTourIdx = 0;
        const stage = document.getElementById('embedded-panel-stage');
        if (stage) stage.scrollIntoView({ behavior: 'smooth', block: 'start' });
        setTimeout(() => {
            window.selectGuideTabWithTooltip(tabOrder[0], true);
        }, 350);
    };

    window.toggleGuideBeaconsMode = function() {
        const badges = document.querySelectorAll('.guide-tooltip-badge, .guide-row-help-btn');
        badges.forEach(b => b.classList.toggle('active-beacon'));
        const activePane = document.getElementById('guardify-tab-' + tabOrder[currentTourIdx]);
        const firstBadge = activePane ? activePane.querySelector('.guide-tooltip-badge') : badges[0];
        if (firstBadge) {
            firstBadge.scrollIntoView({ behavior: 'smooth', block: 'center' });
            firstBadge.click();
        }
    };

    // Copy shortcode helper
    window.copyGuideCode = function(codeStr, btnEl) {
        if (navigator.clipboard && navigator.clipboard.writeText) {
            navigator.clipboard.writeText(codeStr);
        }
        const origText = btnEl.textContent;
        btnEl.textContent = '✓ کپی شد!';
        btnEl.classList.add('bg-emerald-600');
        if (typeof window.showAdminToast === 'function') {
            window.showAdminToast('کد مورد نظر با موفقیت در کلیپ‌بورد کپی شد.');
        }
        setTimeout(() => {
            btnEl.textContent = origText;
            btnEl.classList.remove('bg-emerald-600');
        }, 2000);
    };

    // Instant Search Finder Logic
    function initGuideSmartFinder() {
        const input = document.getElementById('guide-smart-finder-input');
        const resultsBox = document.getElementById('guide-finder-results');
        const clearBtn = document.getElementById('guide-finder-clear');
        if (!input || !resultsBox) return;

        input.addEventListener('input', function() {
            const q = this.value.trim().toLowerCase();
            if (clearBtn) clearBtn.style.display = q.length > 0 ? 'block' : 'none';

            if (q.length < 2) {
                resultsBox.style.display = 'none';
                resultsBox.innerHTML = '';
                return;
            }

            const matches = SearchableSettingsIndex.filter(item =>
                item.title.toLowerCase().includes(q) ||
                item.desc.toLowerCase().includes(q) ||
                item.keywords.toLowerCase().includes(q)
            );

            resultsBox.style.display = 'grid';
            if (matches.length === 0) {
                resultsBox.innerHTML = `
                    <div class="col-span-full p-3 rounded-xl bg-slate-950 border border-slate-800 text-slate-400 text-xs text-center">
                        گزینه‌ای با عبارت «${this.value}» یافت نشد. نام تب یا کلمات کلیدی مانند «ووکامرس»، «کش»، «دیجیتس» یا «ورود» را امتحان کنید.
                    </div>
                `;
                return;
            }

            resultsBox.innerHTML = matches.map((m, idx) => {
                const tabMeta = TabGuides[m.tab] || TabGuides['dashboard'];
                return `
                    <div class="p-3.5 rounded-xl bg-slate-950 hover:bg-slate-800/90 border border-slate-800 hover:border-indigo-500/60 transition-all flex flex-col justify-between gap-2.5 cursor-pointer"
                         onclick="triggerFinderResult(${SearchableSettingsIndex.indexOf(m)})">
                        <div>
                            <div class="flex items-center justify-between gap-2 mb-1">
                                <span class="text-[10px] font-black px-2 py-0.5 rounded bg-indigo-500/20 text-indigo-300 border border-indigo-500/30">${tabMeta.icon} ${tabMeta.badge}</span>
                                <span class="text-[10px] font-bold text-amber-400">مشاهده در پنل ➔</span>
                            </div>
                            <h4 class="text-xs font-black text-white">${m.title}</h4>
                            <p class="text-[11px] text-slate-400 mt-1 leading-relaxed">${m.desc}</p>
                        </div>
                    </div>
                `;
            }).join('');
        });
    }

    window.triggerFinderResult = function(index) {
        const m = SearchableSettingsIndex[index];
        if (!m) return;
        const stage = document.getElementById('embedded-panel-stage');
        if (stage) stage.scrollIntoView({ behavior: 'smooth', block: 'start' });
        window.jumpToPanelSetting(m.tab, m.selector, m.title, m.desc, m.tip);
    };

    window.clearGuideFinder = function() {
        const input = document.getElementById('guide-smart-finder-input');
        const resultsBox = document.getElementById('guide-finder-results');
        const clearBtn = document.getElementById('guide-finder-clear');
        if (input) input.value = '';
        if (resultsBox) {
            resultsBox.style.display = 'none';
            resultsBox.innerHTML = '';
        }
        if (clearBtn) clearBtn.style.display = 'none';
    };

    // DOM Ready: Attach polite '?' badges to cards & actual setting rows (.guardify-switch-row / .guardify-form-group)
    document.addEventListener('DOMContentLoaded', function() {
        initGuideSmartFinder();
        updateDockBanner('dashboard');

        // 1. Sidebar Links: Sync Assistant Dock on Click (No annoying hover popup blocking navigation!)
        document.querySelectorAll('.guardify-sidebar-link').forEach(link => {
            const tabSlug = link.getAttribute('data-tab');
            if (!tabSlug || !TabGuides[tabSlug]) return;

            link.addEventListener('click', function() {
                const idx = tabOrder.indexOf(tabSlug);
                if (idx !== -1) currentTourIdx = idx;
                hideSmartTooltip(true);
                updateDockBanner(tabSlug);
            });
        });

        // 2. Attach '؟ راهنما' Badges to every .guardify-card-title inside the embedded panel
        document.querySelectorAll('#pane-master-admin .guardify-card-title').forEach(titleEl => {
            const rawText = (titleEl.textContent || '').trim();
            const parentPane = titleEl.closest('.guardify-tab-pane');
            const tabSlug = parentPane ? parentPane.id.replace('guardify-tab-', '') : 'dashboard';
            const tabInfo = TabGuides[tabSlug] || TabGuides['dashboard'];

            const matchedInfo = {
                badge: tabInfo.badge,
                title: rawText.split('\n')[0].trim() || tabInfo.title,
                body: `این بخش در تب «${tabInfo.title}» قرار دارد. ${tabInfo.desc}`,
                tip: tabInfo.tip
            };

            const badge = document.createElement('button');
            badge.type = 'button';
            badge.className = 'guide-tooltip-badge';
            badge.setAttribute('aria-label', 'مشاهده راهنمای این بخش');
            badge.innerHTML = '<span>؟</span><span>راهنما</span>';

            badge.addEventListener('mouseenter', function(e) {
                e.stopPropagation();
                if (!isTooltipPinned) {
                    const cardBox = titleEl.closest('.guardify-card') || titleEl;
                    window.showSmartTooltip(cardBox, matchedInfo, false);
                }
            });
            badge.addEventListener('mouseleave', function() {
                if (!isTooltipPinned) {
                    window.hideSmartTooltip(false);
                }
            });
            badge.addEventListener('click', function(e) {
                e.stopPropagation();
                const cardBox = titleEl.closest('.guardify-card') || titleEl;
                window.showSmartTooltip(cardBox, matchedInfo, true);
            });

            titleEl.appendChild(badge);
        });

        // 3. Attach subtle '?' help triggers to actual setting rows (.guardify-switch-row & .guardify-form-group)
        document.querySelectorAll('#pane-master-admin .guardify-switch-row, #pane-master-admin .guardify-form-group').forEach(row => {
            const labelEl = row.querySelector('.guardify-switch-label, label');
            const descEl = row.querySelector('.guardify-switch-desc, .desc');
            if (!labelEl) return;

            const labelText = labelEl.textContent.trim();
            const descText = descEl ? descEl.textContent.trim() : 'با تغییر وضعیت این گزینه و ذخیره فرم، این قابلیت بلافاصله روی فرم‌های هدف سایت اعمال می‌شود.';
            const parentPane = row.closest('.guardify-tab-pane');
            const tabSlug = parentPane ? parentPane.id.replace('guardify-tab-', '') : 'dashboard';
            const tabInfo = TabGuides[tabSlug] || TabGuides['dashboard'];

            const helpBtn = document.createElement('button');
            helpBtn.type = 'button';
            helpBtn.className = 'guide-row-help-btn';
            helpBtn.textContent = '؟';
            helpBtn.title = 'مشاهده توضیح این گزینه';

            const rowTipData = {
                badge: `راهنمای گزینه · ${tabInfo.icon}`,
                title: labelText,
                body: descText,
                tip: tabInfo.tip
            };

            helpBtn.addEventListener('mouseenter', function(e) {
                e.stopPropagation();
                if (!isTooltipPinned) {
                    window.showSmartTooltip(row, rowTipData, false);
                }
            });
            helpBtn.addEventListener('mouseleave', function() {
                if (!isTooltipPinned) {
                    window.hideSmartTooltip(false);
                }
            });
            helpBtn.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                window.showSmartTooltip(row, rowTipData, true);
            });

            labelEl.appendChild(helpBtn);
        });

        // 4. Close pinned tooltip when clicking outside or pressing Escape
        document.addEventListener('click', function(e) {
            if (isTooltipPinned && tooltipEl && !tooltipEl.contains(e.target) && !e.target.closest('.guide-tooltip-badge') && !e.target.closest('.guide-row-help-btn')) {
                window.hideSmartTooltip(true);
            }
        });

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                window.hideSmartTooltip(true);
            } else if (document.activeElement && ['INPUT', 'TEXTAREA', 'SELECT'].includes(document.activeElement.tagName)) {
                return;
            } else if (e.key === 'ArrowLeft') {
                window.nextGuideTourStep();
            } else if (e.key === 'ArrowRight') {
                window.prevGuideTourStep();
            }
        });

        // 5. Reposition tooltip smoothly on scroll/resize
        window.addEventListener('scroll', function() {
            if (activeTargetEl && tooltipEl && tooltipEl.classList.contains('visible')) {
                positionTooltipNear(activeTargetEl);
            }
        }, { passive: true });
    });
})();
</script>

<?php include_once __DIR__ . '/footer.php'; ?>
