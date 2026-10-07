<?php
/**
 * Guardify Pro Interactive 3-Tab Live Showcase & Full WordPress Environment Simulator
 * 100% Authentic Replica matching extracted guardify-captcha-pro plugin
 * Client-side only with 0 database persistence and 0 user blocking.
 */
$page_title = "شبیه ساز افزونه گاردفای پرو | پیش‌نمایش تعاملی";
?>
<!DOCTYPE html>
<html lang="fa-IR" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>

    <!-- Tailwind CSS CDN -->
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
                        mono: ['Courier New', 'monospace']
                    }
                }
            }
        };
    </script>

    <!-- jQuery for Full Compatibility with WordPress & Guardify Plugin Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- Icon Suite & Styles -->
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Main Style (with local IRANSans @font-face suite and cache busting) -->
    <link rel="stylesheet" href="/css/style.css?v=4.50">
    <link rel="stylesheet" href="/css/captcha-themes.css">
    <link rel="stylesheet" href="/css/login-plugin.css">
    <link rel="stylesheet" href="/css/plugin-preview.css">

    <!-- Universal Theme Manager Script -->
    <script src="/js/theme-manager.js?v=4.30"></script>

    <style>
        .demo-master-tab-btn {
            padding: 8px 18px;
            border-radius: 12px;
            font-size: 13px;
            font-weight: 800;
            cursor: pointer;
            transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
        }
        .dark .demo-master-tab-btn {
            border: 1px solid rgba(255, 255, 255, 0.1);
            background: rgba(30, 41, 59, 0.7);
            color: #94a3b8;
        }
        .dark .demo-master-tab-btn:hover {
            color: #fff;
            background: rgba(255, 255, 255, 0.1);
        }
        .light .demo-master-tab-btn {
            border: 1px solid #e2e8f0;
            background: #ffffff;
            color: #475569;
        }
        .light .demo-master-tab-btn:hover {
            color: #0f172a;
            background: #f1f5f9;
        }
        .demo-master-tab-btn.active {
            background: #6366f1 !important;
            color: #ffffff !important;
            border-color: #6366f1 !important;
            box-shadow: 0 4px 14px rgba(99, 102, 241, 0.35);
        }
        .animate-fadeIn {
            animation: fadeIn 0.25s ease-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(6px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body class="bg-slate-50 dark:bg-slate-950 text-slate-900 dark:text-slate-100 min-h-screen flex flex-col font-sans selection:bg-indigo-500 selection:text-white transition-colors duration-300">

    <!-- ========================================================================= -->
    <!-- MASTER TOP STUDIO NAVIGATION BAR -->
    <!-- ========================================================================= -->
    <header class="sticky top-0 z-[99999] bg-white/95 dark:bg-slate-900/95 backdrop-blur-xl border-b border-slate-200 dark:border-slate-800 shadow-md px-4 py-3 transition-colors">
        <div class="max-w-7xl mx-auto flex flex-wrap items-center justify-between gap-4">
            
            <!-- Left Branding -->
            <div class="flex items-center gap-3">
                <a href="/" class="flex items-center gap-2.5 text-slate-900 dark:text-white hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">
                    <div class="w-9 h-9 rounded-xl bg-indigo-600 flex items-center justify-center shadow-lg shadow-indigo-600/30 text-white">
                        <i class="fas fa-shield-halved text-white text-base"></i>
                    </div>
                    <div>
                        <span class="font-black text-sm block leading-tight">گاردفای <span class="text-indigo-500 dark:text-indigo-400">پرو</span></span>
                        <span class="text-[10px] text-slate-500 dark:text-slate-400 font-semibold block">شبیه ساز افزونه v4.00 Pro</span>
                    </div>
                </a>
                <span class="hidden sm:inline-block text-xs bg-amber-500/15 border border-amber-500/30 text-amber-700 dark:text-amber-400 px-2.5 py-1 rounded-lg font-bold">
                    شبیه ساز افزونه
                </span>
            </div>

            <!-- Master 3 Tabs Selector -->
            <div class="flex items-center gap-2 bg-slate-100 dark:bg-slate-800/80 p-1.5 rounded-2xl border border-slate-200 dark:border-slate-700/60 shadow-inner">
                
                <!-- Tab 1 Button -->
                <button type="button" 
                        class="demo-master-tab-btn active px-4 py-2 rounded-xl text-xs sm:text-sm font-black flex items-center gap-2" 
                        data-master-tab="captcha" 
                        onclick="switchMasterTab('captcha')">
                    <i class="fas fa-puzzle-piece text-indigo-500 dark:text-indigo-400"></i>
                    <span>۱. نمایش کپچاها و پایش هوشمند</span>
                </button>

                <!-- Tab 2 Button -->
                <button type="button" 
                        class="demo-master-tab-btn px-4 py-2 rounded-xl text-xs sm:text-sm font-black flex items-center gap-2" 
                        data-master-tab="login" 
                        onclick="switchMasterTab('login')">
                    <i class="fas fa-key text-amber-500 dark:text-amber-400"></i>
                    <span>۲. فرم ورود وردپرس (WP-Login)</span>
                </button>

                <!-- Tab 3 Button -->
                <button type="button" 
                        class="demo-master-tab-btn px-4 py-2 rounded-xl text-xs sm:text-sm font-black flex items-center gap-2" 
                        data-master-tab="admin" 
                        onclick="switchMasterTab('admin')">
                    <i class="fas fa-sliders text-emerald-500 dark:text-emerald-400"></i>
                    <span>۳. پنل مدیریت افزونه (WP-Admin)</span>
                </button>
            </div>

            <!-- Action Buttons: Theme Toggle & Return to Site -->
            <div class="flex items-center gap-2">
                <!-- Theme Toggle Button -->
                <button id="theme-toggle" class="theme-toggle cursor-pointer" aria-label="تغییر حالت شب و روز" title="تغییر حالت شب و روز">
                    <i class="fas fa-moon dark:hidden text-indigo-600"></i>
                    <i class="fas fa-sun hidden dark:block text-amber-400"></i>
                </button>

                <a href="/" class="text-xs text-slate-700 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-white px-3 py-2 rounded-xl transition-colors font-bold flex items-center gap-1.5 border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800">
                    <i class="fas fa-arrow-right text-[10px]"></i>
                    <span>بازگشت به سایت</span>
                </a>
            </div>
        </div>
    </header>


    <!-- ========================================================================= -->
    <!-- MASTER TAB 1: CAPTCHA SHOWCASE -->
    <!-- ========================================================================= -->
    <main id="pane-master-captcha" class="demo-master-pane flex-1 max-w-7xl mx-auto w-full p-4 sm:p-6 lg:p-8 animate-fadeIn">
        
        <!-- Interactive Demo Notice Box (Tab 1) -->
        <div class="mb-6 p-4 sm:p-5 rounded-2xl bg-amber-50 dark:bg-amber-500/10 border border-amber-200 dark:border-amber-500/30 text-amber-900 dark:text-amber-200 text-xs sm:text-sm leading-relaxed flex items-start gap-3.5 shadow-lg backdrop-blur-md">
            <div class="w-8 h-8 rounded-xl bg-amber-100 dark:bg-amber-500/20 border border-amber-200 dark:border-amber-500/40 flex items-center justify-center text-amber-700 dark:text-amber-400 shrink-0 mt-0.5 shadow-inner">
                <i class="fas fa-circle-info text-base"></i>
            </div>
            <div class="space-y-1">
                <div class="flex items-center gap-2">
                    <span class="font-black text-amber-900 dark:text-amber-300 text-sm sm:text-base">اطلاعیه پیش‌نمایش زنده:</span>
                    <span class="text-[10px] bg-amber-100 dark:bg-amber-400/20 text-amber-800 dark:text-amber-300 font-extrabold px-2 py-0.5 rounded-md border border-amber-200 dark:border-amber-400/30">محیط نمایشی (Demo Only)</span>
                </div>
                <p class="text-amber-900/90 dark:text-amber-100/90 text-xs sm:text-[13px] leading-relaxed">
                    این صفحه صرفاً یک پیش‌نمایش تعاملی و نمایشی از امکانات و چالش‌های کپچای بومی است؛ عملکرد و حتی ساختار نمایش افزونه ممکن است با توجه به اختلاف زمان طراحی دمو با نسخه نهایی منتشر شده دارای تفاوت‌های جزئی باشد و هیچ داده‌ای در سرور ذخیره یا ارسال نمی‌شود.
                </p>
            </div>
        </div>

        <!-- Header Banner -->
        <div class="mb-8 bg-gradient-to-l from-indigo-50 dark:from-indigo-950/60 via-slate-100 dark:via-slate-900 to-white dark:to-slate-900 p-6 sm:p-8 rounded-3xl border border-slate-200 dark:border-indigo-900/40 shadow-xl relative overflow-hidden">
            <div class="absolute -left-10 -bottom-10 w-64 h-64 bg-indigo-500/10 rounded-full blur-3xl pointer-events-none"></div>
            <div class="relative z-10 flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
                <div>
                    <h1 class="text-2xl sm:text-3xl font-black text-slate-900 dark:text-white tracking-tight">
                        آزمایشگاه انواع کپچای بومی گاردفای پرو
                    </h1>
                </div>
            </div>
        </div>

        <!-- 4 Captcha Modalities Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">

            <!-- 1. Native Puzzle Slider (Exact Markup from Guardify Engine) -->
            <div class="bg-white dark:bg-slate-900/90 border border-slate-200 dark:border-slate-800 rounded-3xl p-6 shadow-xl flex flex-col justify-between text-slate-900 dark:text-white">
                <div>
                    <div class="flex items-center justify-between mb-4 pb-3 border-b border-slate-100 dark:border-slate-800">
                        <div class="flex items-center gap-3">
                            <span class="w-10 h-10 rounded-xl bg-indigo-50 dark:bg-indigo-500/10 border border-indigo-200 dark:border-indigo-500/30 flex items-center justify-center text-indigo-600 dark:text-indigo-400 font-bold text-lg">۱</span>
                            <div>
                                <h3 class="font-black text-base text-slate-900 dark:text-white">اسلایدر پازلی بومی (Puzzle Slider)</h3>
                                <span class="text-xs text-slate-500 dark:text-slate-400">خروجی واقعی تابع render_widget('slider')</span>
                            </div>
                        </div>
                        <span class="text-[11px] bg-indigo-50 dark:bg-indigo-500/10 text-indigo-700 dark:text-indigo-400 px-2.5 py-1 rounded-lg font-bold">بومی و سریع</span>
                    </div>

                    <!-- Live Interactive Slider Widget matching exact plugin output -->
                    <div id="demo-slider-widget" class="guardify-captcha-container guardify-theme-dark-slate guardify-font-inherit guardify-slider-wrap my-4" data-captcha-type="slider">
                        <div class="guardify-top-radar-track"><div class="guardify-top-radar-beam" style="animation: guardifyRadarScan 2s ease-in-out infinite;"></div></div>
                        
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

                        <!-- Real plugin slider track -->
                        <div class="guardify-slider-track" id="guardify-slider-track" role="slider" aria-label="Drag to verify">
                            <div class="guardify-slider-progress" id="guardify-slider-progress" style="width:0%;"></div>
                            <span class="guardify-slider-hint" id="guardify-slider-hint">دستگیره را به چپ بکشید ←</span>
                            <div class="guardify-slider-thumb" id="guardify-slider-thumb" tabindex="0">←</div>
                        </div>

                        <!-- Success message badge -->
                        <div class="guardify-verified-badge hidden mt-3 p-2.5 rounded-xl bg-emerald-500/15 border border-emerald-500/30 text-emerald-600 dark:text-emerald-400 text-xs font-bold items-center justify-center gap-2">
                            <i class="fas fa-check-circle"></i>
                            <span>تایید شد؛ هویت کاربر با موفقیت احراز گردید</span>
                        </div>
                    </div>
                </div>

                <div class="mt-4 pt-3 border-t border-slate-100 dark:border-slate-800/80 flex items-center justify-between text-xs text-slate-500 dark:text-slate-400">
                    <span>💡 دستگیره اسلایدر را با ماوس یا لمس به سمت چپ بکشید.</span>
                    <span class="text-emerald-600 dark:text-emerald-400 font-bold">۰ تأخیر در لود</span>
                </div>
            </div>

            <!-- 2. Dynamic Math Challenge (Exact Markup from Guardify Engine) -->
            <div class="bg-white dark:bg-slate-900/90 border border-slate-200 dark:border-slate-800 rounded-3xl p-6 shadow-xl flex flex-col justify-between text-slate-900 dark:text-white">
                <div>
                    <div class="flex items-center justify-between mb-4 pb-3 border-b border-slate-100 dark:border-slate-800">
                        <div class="flex items-center gap-3">
                            <span class="w-10 h-10 rounded-xl bg-amber-50 dark:bg-amber-500/10 border border-amber-200 dark:border-amber-500/30 flex items-center justify-center text-amber-600 dark:text-amber-400 font-bold text-lg">۲</span>
                            <div>
                                <h3 class="font-black text-base text-slate-900 dark:text-white">آزمون جمع ریاضی (Math Challenge)</h3>
                                <span class="text-xs text-slate-500 dark:text-slate-400">خروجی واقعی تابع render_widget('math')</span>
                            </div>
                        </div>
                        <span class="text-[11px] bg-amber-50 dark:bg-amber-500/10 text-amber-700 dark:text-amber-400 px-2.5 py-1 rounded-lg font-bold">سازگار با کَش</span>
                    </div>

                    <!-- Live Math Widget matching exact plugin output -->
                    <div class="guardify-captcha-container guardify-theme-dark-slate guardify-font-inherit guardify-math-wrap my-4" data-captcha-type="math">
                        <div class="guardify-top-radar-track"><div class="guardify-top-radar-beam" style="animation: guardifyRadarScan 2s ease-in-out infinite;"></div></div>

                        <div class="guardify-math-header">
                            <div class="guardify-math-title-group">
                                <span class="guardify-shield-icon" style="color:#6366f1;font-size:15px;display:inline-flex;align-items:center;">
                                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                                </span> 
                                <strong class="guardify-math-title">چالش امنیتی هوشمند:</strong> 
                                <span class="guardify-math-desc">پاسخ معادله را بنویسید</span>
                            </div>
                            <button type="button" id="demo-math-refresh" class="guardify-refresh-btn" title="تغییر سوال" aria-label="Refresh question">
                                <span>تغییر سوال</span> 
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21.5 2v6h-6M21.34 15.57a10 10 0 1 1-.57-8.38l5.67-5.67"/>
                                </svg>
                            </button>
                        </div>

                        <div class="guardify-math-card">
                            <div class="guardify-math-actions">
                                <button type="button" class="guardify-verify-btn guardify-math-verify-btn">بررسی</button>
                                <input type="text" id="demo-math-input" name="guardify_captcha_answer" class="guardify-input" required autocomplete="off" placeholder="؟" inputmode="numeric" />
                            </div>
                            <button type="button" id="demo-math-equation" class="guardify-math-eq guardify-clickable-eq" title="تغییر سوال">۷ + ۴ = </button>
                        </div>

                        <div id="demo-math-status" class="text-xs text-slate-600 dark:text-slate-400 font-semibold mt-2 text-right">
                            لطفاً حاصل‌جمع را وارد کنید
                        </div>
                    </div>
                </div>

                <div class="mt-4 pt-3 border-t border-slate-100 dark:border-slate-800/80 flex items-center justify-between text-xs text-slate-500 dark:text-slate-400">
                    <span>💡 عدد صحیح را تایپ کنید تا بلافاصله اعتبارسنجی شود.</span>
                    <span class="text-amber-600 dark:text-amber-400 font-bold">ضد حمله Brute-Force</span>
                </div>
            </div>

            <!-- 3. Visual Icon Match (Exact Markup from Guardify Engine) -->
            <div class="bg-white dark:bg-slate-900/90 border border-slate-200 dark:border-slate-800 rounded-3xl p-6 shadow-xl flex flex-col justify-between text-slate-900 dark:text-white">
                <div>
                    <div class="flex items-center justify-between mb-4 pb-3 border-b border-slate-100 dark:border-slate-800">
                        <div class="flex items-center gap-3">
                            <span class="w-10 h-10 rounded-xl bg-purple-50 dark:bg-purple-500/10 border border-purple-200 dark:border-purple-500/30 flex items-center justify-center text-purple-600 dark:text-purple-400 font-bold text-lg">۳</span>
                            <div>
                                <h3 class="font-black text-base text-slate-900 dark:text-white">تطبیق آیکون بصری (Icon Match)</h3>
                                <span class="text-xs text-slate-500 dark:text-slate-400">خروجی واقعی تابع render_widget('icon_match')</span>
                            </div>
                        </div>
                        <span class="text-[11px] bg-purple-50 dark:bg-purple-500/10 text-purple-700 dark:text-purple-400 px-2.5 py-1 rounded-lg font-bold">بصری جذاب</span>
                    </div>

                    <!-- Live Icon Match Widget matching exact plugin output -->
                    <div class="guardify-captcha-container guardify-theme-dark-slate guardify-font-inherit guardify-icon-wrap my-4" data-captcha-type="icon_match">
                        <div class="guardify-top-radar-track"><div class="guardify-top-radar-beam" style="animation: guardifyRadarScan 2s ease-in-out infinite;"></div></div>

                        <div class="guardify-icon-header">
                            <span id="demo-icon-target-label" class="guardify-icon-title">روی آیکون <strong class="guardify-target-name">«کلید دسترسی»</strong> کلیک کنید:</span>
                            <button type="button" class="guardify-refresh-btn guardify-refresh-icon-match" title="تغییر سوال" aria-label="Refresh icons">
                                <span>تغییر سوال</span> 
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21.5 2v6h-6M21.34 15.57a10 10 0 1 1-.57-8.38l5.67-5.67"/>
                                </svg>
                            </button>
                        </div>

                        <!-- Real plugin icon buttons grid -->
                        <div class="guardify-icon-grid">
                            <button type="button" class="guardify-icon-btn demo-icon-card" data-icon-type="shield" title="سپر امنیتی"><span>🛡️</span></button>
                            <button type="button" class="guardify-icon-btn demo-icon-card" data-icon-type="key" title="کلید دسترسی"><span>🔑</span></button>
                            <button type="button" class="guardify-icon-btn demo-icon-card" data-icon-type="cloud" title="ابر"><span>☁️</span></button>
                            <button type="button" class="guardify-icon-btn demo-icon-card" data-icon-type="fire" title="آتش"><span>🔥</span></button>
                        </div>

                        <div class="guardify-icon-actions mt-3">
                            <button type="button" class="guardify-verify-btn guardify-icon-verify-btn">بررسی</button>
                        </div>

                        <div id="demo-icon-status" class="text-xs text-slate-600 dark:text-slate-400 font-semibold mt-2 text-right">
                            یک گزینه را انتخاب نمایید
                        </div>
                    </div>
                </div>

                <div class="mt-4 pt-3 border-t border-slate-100 dark:border-slate-800/80 flex items-center justify-between text-xs text-slate-500 dark:text-slate-400">
                    <span>💡 آیکون هدف را لمس کرده و بررسی را بزنید.</span>
                    <span class="text-purple-600 dark:text-purple-400 font-bold">رمزنگاری یک‌بار مصرف</span>
                </div>
            </div>

            <!-- 4. Invisible Honeypot Trap (Exact Markup from Plugin) -->
            <div class="bg-white dark:bg-slate-900/90 border border-slate-200 dark:border-slate-800 rounded-3xl p-6 shadow-xl flex flex-col justify-between text-slate-900 dark:text-white">
                <div>
                    <div class="flex items-center justify-between mb-4 pb-3 border-b border-slate-100 dark:border-slate-800">
                        <div class="flex items-center gap-3">
                            <span class="w-10 h-10 rounded-xl bg-rose-50 dark:bg-rose-500/10 border border-rose-200 dark:border-rose-500/30 flex items-center justify-center text-rose-600 dark:text-rose-400 font-bold text-lg">۴</span>
                            <div>
                                <h3 class="font-black text-base text-slate-900 dark:text-white">تله نامرئی هانی‌پات (Honeypot Trap)</h3>
                                <span class="text-xs text-slate-500 dark:text-slate-400">خروجی واقعی تله guardify_hp_token</span>
                            </div>
                        </div>
                        <span class="text-[11px] bg-rose-50 dark:bg-rose-500/10 text-rose-700 dark:text-rose-400 px-2.5 py-1 rounded-lg font-bold">سکوت کامل</span>
                    </div>

                    <!-- Live Honeypot Widget -->
                    <div class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-800/50 border border-slate-200 dark:border-slate-700/60 my-4 text-xs space-y-3">
                        <p class="text-slate-700 dark:text-slate-300 leading-relaxed">
                            در کد منبع فرم‌های وردپرس، این تله با ساختار زیر قرار می‌گیرد و انسان هرگز آن را نمی‌بیند، اما خزنده‌ها و ربات‌ها آن را پر می‌کنند:
                        </p>

                        <div class="p-3 bg-slate-900 rounded-xl font-mono text-[11px] text-slate-300 border border-slate-800 overflow-x-auto text-left" dir="ltr">
                            &lt;label for="guardify_hp_token"&gt;Leave this field blank&lt;/label&gt;<br>
                            &lt;input type="text" name="guardify_hp_token" id="guardify_hp_token" tabindex="-1" autocomplete="off" value="" /&gt;
                        </div>

                        <div class="space-y-1.5 pt-2">
                            <label class="block text-slate-700 dark:text-slate-400 font-bold">تست شبیه‌ساز رفتار ربات (در صورت تایپ، بلافاصله اخطار بلاک ظاهر می‌شود):</label>
                            <input type="text" id="demo-honeypot-bot-input" placeholder="اینجا مقداری تایپ کنید تا رفتار ربات شبیه‌سازی شود..." class="w-full bg-white dark:bg-slate-950 border border-rose-300 dark:border-rose-500/40 rounded-xl py-2 px-3 text-slate-900 dark:text-white focus:outline-none focus:border-rose-500" />
                        </div>

                        <div id="demo-honeypot-alert" class="hidden"></div>
                    </div>
                </div>

                <div class="mt-4 pt-3 border-t border-slate-100 dark:border-slate-800/80 flex items-center justify-between text-xs text-slate-500 dark:text-slate-400">
                    <span>💡 دفع بیش از ۸۵٪ اسپم‌های ربات‌های اتوماتیک در سکوت مطلق.</span>
                    <span class="text-rose-600 dark:text-rose-400 font-bold">مسدودسازی لحظه‌ای IP</span>
                </div>
            </div>

        </div>

    </main>


    <!-- ========================================================================= -->
    <!-- MASTER TAB 2: WP LOGIN SIMULATOR (WORDPRESS LOGIN ARCHITECTURE) -->
    <!-- ========================================================================= -->
    <main id="pane-master-login" class="demo-master-pane flex-1 w-full p-4 sm:p-6 lg:p-8 animate-fadeIn" style="display:none;">
        
        <div class="max-w-7xl mx-auto mb-6">
            <!-- Interactive Demo Notice Box (Tab 2) -->
            <div class="mb-5 p-4 sm:p-5 rounded-2xl bg-amber-50 dark:bg-amber-500/10 border border-amber-200 dark:border-amber-500/30 text-amber-900 dark:text-amber-200 text-xs sm:text-sm leading-relaxed flex items-start gap-3.5 shadow-lg backdrop-blur-md">
                <div class="w-8 h-8 rounded-xl bg-amber-100 dark:bg-amber-500/20 border border-amber-200 dark:border-amber-500/40 flex items-center justify-center text-amber-700 dark:text-amber-400 shrink-0 mt-0.5 shadow-inner">
                    <i class="fas fa-circle-info text-base"></i>
                </div>
                <div class="space-y-1">
                    <div class="flex items-center gap-2">
                        <span class="font-black text-amber-900 dark:text-amber-300 text-sm sm:text-base">اطلاعیه پیش‌نمایش شبیه‌ساز ورود:</span>
                        <span class="text-[10px] bg-amber-100 dark:bg-amber-400/20 text-amber-800 dark:text-amber-300 font-extrabold px-2 py-0.5 rounded-md border border-amber-200 dark:border-amber-400/30">محیط نمایشی (Demo Only)</span>
                    </div>
                    <p class="text-amber-900/90 dark:text-amber-100/90 text-xs sm:text-[13px] leading-relaxed">
                        این بخش صرفاً جهت پیش‌نمایش بصری مدل‌های چیدمان (Architecture Presets) و ساختار فرم ورود طراحی شده است؛ با توجه به اختلاف زمان طراحی دمو با نسخه نهایی منتشر شده، عملکرد و حتی ساختار نمایش افزونه ممکن است دارای تفاوت جزئی باشد و هیچ اطلاعاتی ذخیره یا ارسال نمی‌گردد.
                    </p>
                </div>
            </div>

            <!-- Login Customizer Toolbar (Architecture Presets Only) -->
            <div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-2xl p-4 sm:p-5 shadow-xl space-y-4 text-slate-900 dark:text-white">
                
                <!-- Layout Mode Preset Selectors -->
                <div>
                    <div class="text-xs font-black text-slate-800 dark:text-slate-300 flex items-center gap-2 mb-3">
                        <i class="fas fa-table-cells-large text-indigo-600 dark:text-indigo-400"></i>
                        <span>انتخاب مدل چینش و ساختار بصری فرم ورود (Architecture Presets):</span>
                    </div>

                    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-2">
                        <button type="button" class="login-layout-btn active p-2.5 rounded-xl border border-indigo-600 bg-indigo-50 dark:bg-indigo-950/60 text-indigo-700 dark:text-indigo-300 text-xs font-bold text-center transition-all cursor-pointer shadow-sm" data-layout="centered_card" onclick="setLoginLayoutMode('centered_card')">
                            <span class="block text-base mb-1">🎯</span>
                            <span>کارت متمرکز وسط</span>
                        </button>
                        <button type="button" class="login-layout-btn p-2.5 rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 hover:border-indigo-400 text-slate-700 dark:text-slate-300 text-xs font-bold text-center transition-all cursor-pointer" data-layout="split_screen" onclick="setLoginLayoutMode('split_screen')">
                            <span class="block text-base mb-1">🌗</span>
                            <span>اسپلیت اسکرین</span>
                        </button>
                        <button type="button" class="login-layout-btn p-2.5 rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 hover:border-indigo-400 text-slate-700 dark:text-slate-300 text-xs font-bold text-center transition-all cursor-pointer" data-layout="sidebar_right" onclick="setLoginLayoutMode('sidebar_right')">
                            <span class="block text-base mb-1">📑</span>
                            <span>سایدبار راست</span>
                        </button>
                        <button type="button" class="login-layout-btn p-2.5 rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 hover:border-indigo-400 text-slate-700 dark:text-slate-300 text-xs font-bold text-center transition-all cursor-pointer" data-layout="sidebar_left" onclick="setLoginLayoutMode('sidebar_left')">
                            <span class="block text-base mb-1">🗂️</span>
                            <span>سایدبار چپ</span>
                        </button>
                        <button type="button" class="login-layout-btn p-2.5 rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 hover:border-indigo-400 text-slate-700 dark:text-slate-300 text-xs font-bold text-center transition-all cursor-pointer" data-layout="floating_split" onclick="setLoginLayoutMode('floating_split')">
                            <span class="block text-base mb-1">✨</span>
                            <span>دو کارت معلق</span>
                        </button>
                        <button type="button" class="login-layout-btn p-2.5 rounded-xl border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800 hover:border-indigo-400 text-slate-700 dark:text-slate-300 text-xs font-bold text-center transition-all cursor-pointer" data-layout="minimal_compact" onclick="setLoginLayoutMode('minimal_compact')">
                            <span class="block text-base mb-1">🕊️</span>
                            <span>کارت مینیمال</span>
                        </button>
                    </div>
                </div>

            </div>
        </div>

        <!-- Embedded Interactive WordPress Login Simulator Frame -->
        <div class="max-w-7xl mx-auto flex justify-center">
            <div id="demo-login-viewport-frame" class="w-full transition-all duration-300 rounded-3xl overflow-hidden border border-slate-800 shadow-2xl">
                
                <div id="demo-login-stage" 
                     class="guardify-login-styled guardify-modern-auth-v2 guardify-layout-centered_card"
                     style="background-color: #060814; background-image: radial-gradient(circle at 90% 10%, rgba(236, 72, 153, 0.5) 0%, transparent 55%), radial-gradient(circle at 10% 90%, rgba(56, 189, 248, 0.48) 0%, transparent 55%), #060814); min-height: 720px;">
                    
                    <!-- Form Wrapped Box matching exact WP output -->
                    <div id="login" class="guardify-layout-wrapped">
                        
                        <!-- Header -->
                        <div class="guardify-card-header">
                            <div class="guardify-shield-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                                </svg>
                            </div>
                            <h2 class="guardify-card-title">ورود به حساب کاربری</h2>
                            <p class="guardify-card-subtitle">پرتال امن دسترسی اعضای مدیریت</p>
                        </div>

                        <!-- Login Form -->
                        <form name="loginform" id="loginform" onsubmit="event.preventDefault(); showAdminToast('تست ورود انجام شد (شبیه‌ساز)');">
                            <p class="mb-4">
                                <label for="demo_user_login" class="block text-xs font-bold text-slate-200 mb-1.5">نام کاربری یا نشانی ایمیل</label>
                                <input type="text" name="log" id="demo_user_login" class="w-full bg-slate-900/90 border border-slate-700 rounded-xl px-3.5 py-2.5 text-sm text-white focus:outline-none focus:border-indigo-500" value="admin" placeholder="name@example.com" required />
                            </p>

                            <div class="user-pass-wrap mb-4 relative">
                                <label for="demo_user_pass" class="block text-xs font-bold text-slate-200 mb-1.5">رمز عبور</label>
                                <div class="relative">
                                    <input type="password" name="pwd" id="demo_user_pass" class="w-full bg-slate-900/90 border border-slate-700 rounded-xl px-3.5 py-2.5 text-sm text-white focus:outline-none focus:border-indigo-500" value="••••••••••••" placeholder="رمز عبور شما" required />
                                    <button type="button" class="absolute left-3 top-3 text-slate-400 hover:text-white" onclick="togglePasswordVisibility('demo_user_pass', this)">
                                        <i class="fas fa-eye text-xs"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Embedded Captcha inside Login Form -->
                            <div class="my-4">
                                <div class="guardify-captcha-container guardify-theme-dark-slate guardify-slider-wrap" style="max-width:100%;">
                                    <div class="guardify-top-radar-track">
                                        <div class="guardify-top-radar-beam" style="animation: guardifyRadarScan 2s ease-in-out infinite;"></div>
                                    </div>
                                    <div class="guardify-slider-header">
                                        <span class="guardify-slider-title">
                                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg> 
                                            حفاظت امنیتی ورود:
                                        </span>
                                        <span class="text-[10px] text-emerald-400 bg-emerald-500/10 px-2 py-0.5 rounded-md font-bold">فعال</span>
                                    </div>
                                    
                                    <div class="guardify-slider-track" id="login-slider-track" role="slider" aria-label="Drag to verify">
                                        <div class="guardify-slider-progress" id="login-slider-progress" style="width:0%;"></div>
                                        <span class="guardify-slider-hint" id="login-slider-hint">دستگیره را به چپ بکشید ←</span>
                                        <div class="guardify-slider-thumb" id="login-slider-thumb" tabindex="0">←</div>
                                    </div>
                                </div>
                            </div>

                            <p class="forgetmenot flex items-center gap-2 mb-4 text-xs text-slate-300">
                                <input name="rememberme" type="checkbox" id="demo_rememberme" value="forever" checked class="accent-indigo-500 w-4 h-4 rounded" />
                                <label for="demo_rememberme" class="cursor-pointer">مرا به خاطر بسپار</label>
                            </p>

                            <p class="submit">
                                <button type="submit" name="wp-submit" id="demo-wp-submit" class="w-full bg-gradient-to-r from-indigo-600 to-indigo-700 hover:from-indigo-500 hover:to-indigo-600 text-white py-3 rounded-xl font-bold text-sm shadow-lg shadow-indigo-600/30 flex items-center justify-center gap-2 transition-all cursor-pointer">
                                    <i class="fas fa-key"></i>
                                    <span>ورود به حساب کاربری</span>
                                </button>
                            </p>

                            <div class="guardify-login-footer-wrap mt-4">
                                <div class="guardify-security-badge-pill">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                    </svg>
                                    <span>محافظت شده با فناوری هوشمند Guardify Security</span>
                                </div>
                                <div class="guardify-login-legal-bar mt-2">
                                    <a href="#">قوانین و مقررات</a> • <a href="#">حریم خصوصی</a> • <a href="#">پشتیبانی</a>
                                </div>
                            </div>
                        </form>

                        <p id="nav" class="text-center text-xs mt-4 text-slate-400">
                            <a href="#" class="hover:text-indigo-400 transition-colors">رمز عبور خود را فراموش کرده‌اید؟</a>
                        </p>
                        <p id="backtoblog" class="text-center text-xs mt-2 text-slate-500">
                            <a href="/demo.php" class="hover:text-slate-300 transition-colors">&larr; بازگشت به استودیو</a>
                        </p>
                    </div>

                </div>

            </div>
        </div>

    </main>


    <!-- ========================================================================= -->
    <!-- MASTER TAB 3: AUTHENTIC WORDPRESS ADMIN PANEL SIMULATION (WP 6.x RTL) -->
    <!-- ========================================================================= -->
    <main id="pane-master-admin" class="demo-master-pane flex-1 w-full animate-fadeIn" style="display:none; background:#f0f0f1;">
        
        <!-- Authentic WordPress Top Admin Bar (#wpadminbar) -->
        <div id="wpadminbar">
            <!-- Right items (RTL) -->
            <div style="display:flex; align-items:center; gap:4px;">
                <a href="#" title="وردپرس" style="font-size:16px;"><i class="fab fa-wordpress"></i></a>
                <a href="#" class="wp-admin-bar-item-bold">
                    <i class="fas fa-house-chimney text-xs"></i>
                    <span>گاردفای پرو | پیش‌نمایش زنده</span>
                </a>
                <a href="#"><i class="fas fa-rotate text-xs"></i> <span>۰</span></a>
                <a href="#"><i class="fas fa-comment text-xs"></i> <span>۳</span></a>
                <a href="#"><i class="fas fa-plus text-xs"></i> <span>تازه</span></a>
            </div>

            <!-- Left items (RTL: Admin profile) -->
            <div style="display:flex; align-items:center; gap:8px;">
                <span style="font-size:11px; color:#c3c4c7;">سلام، مدیر سایت</span>
                <div style="width:22px; height:22px; border-radius:50%; background:#6366f1; display:flex; align-items:center; justify-content:center; color:#fff; font-size:11px; font-weight:bold;">م</div>
            </div>
        </div>

        <!-- WordPress 2-Column Shell Container -->
        <div class="wp-simulation-container">
            
            <!-- Left Column: WordPress Main Menu (#adminmenumain) -->
            <nav id="adminmenumain" aria-label="منوی اصلی وردپرس">
                <a href="#" class="wp-menu-item">
                    <i class="fas fa-gauge-high wp-menu-icon"></i>
                    <span class="wp-menu-text">پیشخوان</span>
                </a>
                
                <div class="wp-menu-separator"></div>

                <a href="#" class="wp-menu-item">
                    <i class="fas fa-thumbtack wp-menu-icon"></i>
                    <span class="wp-menu-text">نوشته‌ها</span>
                </a>
                <a href="#" class="wp-menu-item">
                    <i class="fas fa-photo-film wp-menu-icon"></i>
                    <span class="wp-menu-text">رسانه</span>
                </a>
                <a href="#" class="wp-menu-item">
                    <i class="fas fa-file wp-menu-icon"></i>
                    <span class="wp-menu-text">برگه‌ها</span>
                </a>
                <a href="#" class="wp-menu-item">
                    <i class="fas fa-comments wp-menu-icon"></i>
                    <span class="wp-menu-text">دیدگاه‌ها</span>
                    <span class="wp-menu-badge">۳</span>
                </a>

                <div class="wp-menu-separator"></div>

                <a href="#" class="wp-menu-item">
                    <i class="fas fa-cart-shopping wp-menu-icon"></i>
                    <span class="wp-menu-text">ووکامرس</span>
                </a>

                <!-- Guardify Pro Active Menu Item -->
                <a href="#" class="wp-menu-item guardify-pro-active">
                    <i class="fas fa-shield-halved wp-menu-icon" style="color:#fbbf24;"></i>
                    <span class="wp-menu-text">گاردفای پرو</span>
                    <span style="font-size:9px; background:#fbbf24; color:#000; padding:1px 5px; border-radius:6px; font-weight:800;">فعال</span>
                </a>

                <a href="#" class="wp-menu-item">
                    <i class="fas fa-puzzle-piece wp-menu-icon"></i>
                    <span class="wp-menu-text">افزونه‌ها</span>
                </a>
                <a href="#" class="wp-menu-item">
                    <i class="fas fa-users wp-menu-icon"></i>
                    <span class="wp-menu-text">کاربران</span>
                </a>
                <a href="#" class="wp-menu-item">
                    <i class="fas fa-wrench wp-menu-icon"></i>
                    <span class="wp-menu-text">ابزارها</span>
                </a>
                <a href="#" class="wp-menu-item">
                    <i class="fas fa-gear wp-menu-icon"></i>
                    <span class="wp-menu-text">تنظیمات</span>
                </a>
            </nav>

            <!-- Main WordPress Content Area (#wpbody-content) -->
            <div id="wpbody-content">
                <!-- Interactive Demo Notice Box (Tab 3) -->
                <div style="margin: 18px 20px 0 20px; padding: 14px 18px; border-radius: 12px; background: #fffbe6; border: 1px solid #ffe58f; color: #78350f; font-size: 13px; line-height: 1.6; display: flex; align-items: flex-start; gap: 14px; box-shadow: 0 2px 8px rgba(0,0,0,0.03);">
                    <div style="width: 28px; height: 28px; border-radius: 8px; background: #fef3c7; border: 1px solid #fde68a; display: flex; align-items: center; justify-content: center; font-size: 15px; color: #d97706; flex-shrink: 0; margin-top: 2px;">
                        ℹ️
                    </div>
                    <div style="flex: 1;">
                        <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 4px;">
                            <strong style="color: #92400e; font-size: 13.5px; font-weight: 800;">اطلاعیه پیش‌نمایش پنل مدیریت وردپرس (WP-Admin):</strong>
                            <span style="font-size: 10.5px; background: #fef3c7; color: #b45309; border: 1px solid #fde68a; padding: 1px 7px; border-radius: 6px; font-weight: 700;">صرفاً محیط نمایشی</span>
                        </div>
                        <p style="margin: 0; color: #78350f; font-size: 12.5px; line-height: 1.65;">
                            کلیه تب‌ها و گزینه‌های این پنل صرفاً جهت مشاهده و بررسی رابط کاربری هستند؛ هیچ داده‌ای ذخیره نشده و اطلاعاتی به جایی ارسال نمی‌گردد. همچنین با توجه به تفاوت زمان طراحی دمو با نسخه نهایی منتشر شده، ممکن است عملکرد و ظاهر افزونه دارای اختلاف جزئی باشد.
                        </p>
                    </div>
                </div>

                <!-- EXACT REAL OUTPUT EXTRACTED DIRECTLY FROM PLUGIN RUNNING IN WORDPRESS -->
                <?php include __DIR__ . '/admin-panel-markup.html'; ?>
            </div>

        </div>

    </main>

    <!-- Include Interactive Demo Scripts -->
    <script src="/js/demo-studio.js"></script>

</body>
</html>
