<?php
/**
 * Guardify Pro Official Website - High-Performance Landing Page
 * WP Native Offline CAPTCHA Pro & WordPress Security Suite
 * Developed by DevBan | Distributed exclusively on RTL-Theme
 */
$current_page = 'home';
$page_title = 'گاردفای پرو Guardify Pro v4.00 | سامانه کپچای بومی و سپر امنیتی ورود وردپرس';
include __DIR__ . '/header.php';
?>

<main class="flex-grow">

    <!-- ========================================================================= -->
    <!-- 1. HIGH-IMPACT HERO SECTION WITH DUAL LUXURY CAPTCHA SHOWCASE -->
    <!-- ========================================================================= -->
    <section id="hero" class="relative pt-10 pb-16 md:pt-16 md:pb-24 overflow-hidden">
        <!-- Multi-Layered Deep Geometric Background (Absolute Layer) -->
        <div class="absolute inset-0 pointer-events-none overflow-hidden -z-0">
            <div class="absolute inset-0 geo-hex-pattern opacity-70"></div>
            <div class="absolute inset-0 geo-cyber-grid opacity-50"></div>
            <div class="absolute -top-24 -left-24 w-96 h-96 bg-indigo-500/15 rounded-full blur-3xl"></div>
            <div class="absolute -top-24 -right-24 w-96 h-96 bg-emerald-500/12 rounded-full blur-3xl"></div>
            <div class="geo-bracket top-8 right-8 border-t-2 border-r-2 rounded-tr-md"></div>
            <div class="geo-bracket bottom-8 left-8 border-b-2 border-l-2 rounded-bl-md"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
                
                <!-- Left/Right Hero Copy (RTL: right side) -->
                <div class="lg:col-span-7 space-y-6 text-right">
                    
                    <!-- Clean Unboxed Category & Brand Header Indicator -->
                    <div class="flex flex-wrap items-center gap-2 text-xs font-black text-slate-700 dark:text-slate-300">
                        <span class="text-amber-500 flex items-center gap-1.5"><i class="fas fa-crown"></i> انحصاری در راست‌چین</span>
                        <span aria-hidden="true" class="text-slate-400">·</span>
                        <span class="text-indigo-600 dark:text-indigo-400">نسخه ۴.۰۰ تجاری پرو</span>
                        <span aria-hidden="true" class="text-slate-400">·</span>
                        <span class="text-emerald-600 dark:text-emerald-400">۱۰۰٪ آفلاین و ضد تحریم</span>
                    </div>

                    <!-- Main Catchy Title -->
                    <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black text-slate-900 dark:text-white tracking-tight leading-[1.4]">
                        سامانه کپچای <span class="bg-gradient-to-r from-indigo-600 via-purple-600 to-amber-500 dark:from-indigo-400 dark:via-purple-400 dark:to-amber-400 bg-clip-text text-transparent">۱۰۰٪ بومی و آفلاین</span> و سپر امنیت ورود وردپرس
                    </h1>

                    <!-- Hero Subtitle -->
                    <p class="text-slate-600 dark:text-slate-300 text-sm sm:text-base lg:text-lg leading-relaxed max-w-2xl font-medium">
                        پایان قطعی‌های مکرر Google reCAPTCHA و نجات فروشگاه‌های ووکامرسی در زمان اختلال اینترنت بین‌الملل و اینترنت ملی (نت ملی)؛ مجهز به استایلر دو کارت معلق لوکس صفحه لاگین در تم سرمه‌ای شاهانه، بیش از ۳۵ تم متنوع کپچا، سوییچر هوشمند Failover و رادار ضد نفوذ Brute-Force.
                    </p>

                    <!-- Hero Action Buttons -->
                    <div class="flex flex-wrap items-center gap-4 pt-2">
                        <a href="/demo.php" class="px-7 py-4 rounded-2xl bg-indigo-600 hover:bg-indigo-700 dark:bg-gradient-to-r dark:from-indigo-600 dark:via-indigo-500 dark:to-purple-600 text-white font-black text-sm sm:text-base shadow-xl shadow-indigo-600/25 hover:scale-105 transition-all flex items-center gap-2.5">
                            <i class="fas fa-desktop text-amber-300 text-base"></i>
                            <span>شبیه‌ساز زنده افزونه</span>
                        </a>

                        <a href="/rtl-landing.php" class="px-6 py-4 rounded-2xl bg-slate-900 text-white hover:bg-slate-800 dark:bg-slate-800 dark:hover:bg-slate-700 font-black text-sm sm:text-base border border-slate-700 shadow-md hover:scale-105 transition-all flex items-center gap-2">
                            <i class="fas fa-file-image text-amber-400"></i>
                            <span>معرفی محصول (راست‌چین)</span>
                        </a>

                        <a href="https://www.rtl-theme.com" target="_blank" rel="noopener noreferrer" class="px-6 py-4 rounded-2xl bg-gradient-to-r from-emerald-500 via-lime-500 to-emerald-600 hover:from-emerald-400 hover:to-lime-400 text-slate-950 font-black text-sm sm:text-base shadow-lg shadow-emerald-500/20 hover:scale-105 transition-all flex items-center gap-2">
                            <i class="fas fa-crown text-slate-950"></i>
                            <span>خرید اورجینال از راست‌چین</span>
                        </a>
                    </div>

                    <!-- Compatibility Row -->
                    <div class="flex flex-wrap items-center gap-3 pt-4 text-xs font-bold text-slate-600 dark:text-slate-400">
                        <span class="flex items-center gap-1.5"><i class="fab fa-wordpress text-indigo-500"></i> وردپرس ۶.x</span>
                        <span class="flex items-center gap-1.5"><i class="fas fa-cart-shopping text-emerald-500"></i> ووکامرس ۴ الی ۹</span>
                        <span class="flex items-center gap-1.5"><i class="fas fa-mobile-screen text-amber-500"></i> دیجیتس (Digits)</span>
                        <span class="flex items-center gap-1.5"><i class="fas fa-bolt text-purple-500"></i> لایت‌اسپید و راکت</span>
                    </div>

                </div>

                <!-- Right/Left Hero Interactive Live Mockup Card -->
                <div class="lg:col-span-5">
                    <div class="relative">
                        <!-- Glow behind card -->
                        <div class="absolute -inset-1 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-3xl blur-xl opacity-25"></div>
                        
                        <!-- Main Interactive Showcase Card in Royal Navy Theme -->
                        <div class="relative rounded-3xl bg-slate-950 border-2 border-indigo-500/50 p-6 sm:p-7 shadow-2xl space-y-5 text-white">
                            
                            <!-- Card Header -->
                            <div class="flex items-center justify-between pb-4 border-b border-slate-800">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-2xl bg-indigo-500/20 border border-indigo-500/40 flex items-center justify-center text-indigo-400 shadow-lg shadow-indigo-500/20">
                                        <i class="fas fa-shield-halved text-lg"></i>
                                    </div>
                                    <div>
                                        <h3 class="font-black text-sm text-white">پایش زنده گاردفای پرو</h3>
                                        <span class="text-[10px] text-emerald-400 font-mono font-bold">● LOCAL ENGINE: 0.2ms</span>
                                    </div>
                                </div>
                                <span class="text-[11px] bg-emerald-500/20 border border-emerald-500/40 text-emerald-300 px-3 py-1 rounded-xl font-black">
                                    ۱۰۰٪ آفلاین ✓
                                </span>
                            </div>

                            <!-- Live Slider Widget Inside Hero -->
                            <div class="p-4 rounded-2xl bg-slate-900/90 border border-slate-800 space-y-3">
                                <div class="flex items-center justify-between text-xs text-slate-200 font-bold">
                                    <span class="flex items-center gap-1.5">
                                        <i class="fas fa-sliders text-emerald-400"></i>
                                        <span>کپچای کشیدنی اسلایدر هوشمند:</span>
                                    </span>
                                    <span class="text-[10px] text-cyan-300 font-mono">Anti-Jitter FX</span>
                                </div>

                                <!-- Slider Container matching exact boundary geometry -->
                                <div class="guardify-captcha-container guardify-theme-dark-slate guardify-slider-wrap" style="max-width:100%; margin:0; background:#021a12 !important; border:1.5px solid #059669 !important; border-radius:14px; padding:12px;">
                                    <div class="guardify-top-radar-track"><div class="guardify-top-radar-beam" style="background:linear-gradient(90deg,transparent,#10b981,transparent) !important; animation: guardifyRadarScan 2s ease-in-out infinite;"></div></div>
                                    
                                    <div class="guardify-slider-track" id="hero-slider-track" role="slider" aria-label="Drag to verify" style="height:44px;background:#03281c !important;border:1.5px solid #059669 !important;border-radius:9999px;position:relative;display:flex;align-items:center;justify-content:center;overflow:hidden;">
                                        <div class="guardify-slider-progress" id="hero-slider-progress" style="position:absolute;top:0;right:0;bottom:0;width:0%;background:linear-gradient(to left,#059669,#10b981) !important;"></div>
                                        <span class="guardify-slider-hint" id="hero-slider-hint" style="position:relative;z-index:10;font-size:11.5px;font-weight:800;color:#ecfdf5;">دستگیره را به چپ بکشید ←</span>
                                        <div class="guardify-slider-thumb" id="hero-slider-thumb" tabindex="0" style="position:absolute;top:4px;right:4px;width:36px;height:36px;border-radius:9999px;display:flex;align-items:center;justify-content:center;background:#ecfdf5;color:#064e3b;font-weight:900;border:2px solid #10b981;cursor:pointer;z-index:25;">←</div>
                                    </div>
                                </div>

                                <div id="hero-slider-success" class="hidden p-2.5 rounded-xl bg-emerald-500/20 border border-emerald-500/40 text-emerald-300 text-xs font-black text-center flex items-center justify-center gap-2">
                                    <i class="fas fa-check-circle"></i>
                                    <span>احراز هویت بیومتریک تایید شد! تاخیر: ۰.۰۱ ثانیه</span>
                                </div>
                            </div>

                            <!-- Telemetry Telemetry Gauges -->
                            <div class="grid grid-cols-2 gap-2 text-xs font-mono">
                                <div class="p-2.5 rounded-xl bg-slate-900 border border-slate-800 text-slate-300 flex items-center justify-between">
                                    <span class="text-[11px]">PING:</span>
                                    <span class="text-emerald-400 font-bold">0.002s</span>
                                </div>
                                <div class="p-2.5 rounded-xl bg-slate-900 border border-slate-800 text-slate-300 flex items-center justify-between">
                                    <span class="text-[11px]">PAYLOAD:</span>
                                    <span class="text-indigo-400 font-bold">&lt; 15 KB</span>
                                </div>
                            </div>

                            <!-- Quick Action to Demo Studio -->
                            <a href="/demo.php" class="w-full py-3.5 rounded-xl bg-gradient-to-r from-blue-600 via-indigo-600 to-cyan-600 hover:from-blue-500 hover:to-cyan-500 text-white font-black text-xs text-center transition-all flex items-center justify-center gap-2 shadow-lg shadow-indigo-600/30 group">
                                <span>ورود به استودیوی تنظیمات و شبیه‌ساز</span>
                                <i class="fas fa-arrow-left text-[11px] group-hover:-translate-x-1 transition-transform"></i>
                            </a>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 2. FOUR PILLARS OF PERSUASION (TELEMETRY DECK & POWER GAUGES) -->
    <!-- ========================================================================= -->
    <section id="telemetry-deck" class="py-12 md:py-14 bg-slate-100/80 dark:bg-slate-900/60 border-y border-slate-200 dark:border-slate-800 relative overflow-hidden">
        <!-- Deep Geometric Mesh Background Layer -->
        <div class="absolute inset-0 pointer-events-none overflow-hidden -z-0">
            <div class="absolute inset-0 geo-hex-pattern opacity-60"></div>
            <div class="absolute -top-16 right-1/4 w-72 h-72 bg-emerald-500/10 dark:bg-emerald-500/15 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-16 left-1/4 w-72 h-72 bg-indigo-500/10 dark:bg-indigo-500/15 rounded-full blur-3xl"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                
                <!-- Metric Gauge 1: Speed -->
                <div class="p-6 rounded-3xl bg-white dark:bg-slate-900 border border-emerald-300 dark:border-emerald-500/30 shadow-md flex flex-col justify-between space-y-4">
                    <div class="flex items-center justify-between">
                        <span class="text-[10px] font-mono font-black px-2.5 py-0.5 rounded-full bg-emerald-100 dark:bg-emerald-500/20 text-emerald-800 dark:text-emerald-300">
                            CORE LATENCY
                        </span>
                        <div class="w-9 h-9 rounded-xl bg-emerald-600 text-white flex items-center justify-center text-sm shadow-md shadow-emerald-500/25">
                            <i class="fas fa-bolt"></i>
                        </div>
                    </div>
                    <div class="space-y-1 text-right">
                        <div class="flex items-baseline gap-1 justify-start">
                            <span class="text-4xl font-black text-emerald-700 dark:text-emerald-400 tracking-tight">۰.۲</span>
                            <span class="text-base font-black text-emerald-600 dark:text-emerald-400 font-mono">ms</span>
                        </div>
                        <h4 class="text-xs text-slate-900 dark:text-white font-black">پردازش فوق سریع در رم هاست</h4>
                        <p class="text-[11.5px] text-slate-600 dark:text-slate-400 font-medium leading-relaxed">بدون حتی ۱ میلی‌ثانیه معطلی کاربر یا ارسال درخواست به سرورهای خارجی.</p>
                    </div>
                    <div class="pt-2 border-t border-emerald-100 dark:border-slate-800 flex justify-between text-[10px] text-emerald-700 dark:text-emerald-400 font-bold">
                        <span>سرعت لود</span>
                        <span>۹۹.۹٪ بهینه‌تر از گوگل</span>
                    </div>
                </div>

                <!-- Metric Gauge 2: 100% Offline National Net -->
                <div class="p-6 rounded-3xl bg-white dark:bg-slate-900 border border-indigo-300 dark:border-indigo-500/30 shadow-md flex flex-col justify-between space-y-4">
                    <div class="flex items-center justify-between">
                        <span class="text-[10px] font-mono font-black px-2.5 py-0.5 rounded-full bg-indigo-100 dark:bg-indigo-500/20 text-indigo-800 dark:text-indigo-300">
                            ZERO CLOUD PING
                        </span>
                        <div class="w-9 h-9 rounded-xl bg-indigo-600 text-white flex items-center justify-center text-sm shadow-md shadow-indigo-500/25">
                            <i class="fas fa-network-wired"></i>
                        </div>
                    </div>
                    <div class="space-y-1 text-right">
                        <div class="flex items-baseline gap-1 justify-start">
                            <span class="text-4xl font-black text-indigo-700 dark:text-indigo-400 tracking-tight">۱۰۰٪</span>
                            <span class="text-sm font-black text-indigo-600 dark:text-indigo-400">آفلاین</span>
                        </div>
                        <h4 class="text-xs text-slate-900 dark:text-white font-black">پایداری فولادین در نت ملی</h4>
                        <p class="text-[11.5px] text-slate-600 dark:text-slate-400 font-medium leading-relaxed">صفر وابستگی به سرورهای گوگل و کلودفلر؛ ضد تحریم و ضد فیلترینگ تضمینی.</p>
                    </div>
                    <div class="pt-2 border-t border-indigo-100 dark:border-slate-800 flex justify-between text-[10px] text-indigo-700 dark:text-indigo-400 font-bold">
                        <span>پایداری شبکه ملی</span>
                        <span class="font-mono">100% UPTIME</span>
                    </div>
                </div>

                <!-- Metric Gauge 3: Zero Checkout Drop -->
                <div class="p-6 rounded-3xl bg-white dark:bg-slate-900 border border-amber-300 dark:border-amber-500/30 shadow-md flex flex-col justify-between space-y-4">
                    <div class="flex items-center justify-between">
                        <span class="text-[10px] font-mono font-black px-2.5 py-0.5 rounded-full bg-amber-100 dark:bg-amber-500/20 text-amber-900 dark:text-amber-300">
                            SALES SHIELD
                        </span>
                        <div class="w-9 h-9 rounded-xl bg-amber-500 text-slate-950 flex items-center justify-center text-sm shadow-md shadow-amber-500/25">
                            <i class="fas fa-cart-shopping"></i>
                        </div>
                    </div>
                    <div class="space-y-1 text-right">
                        <div class="flex items-baseline gap-1 justify-start">
                            <span class="text-4xl font-black text-amber-700 dark:text-amber-400 tracking-tight">۰٪</span>
                            <span class="text-sm font-black text-amber-600 dark:text-amber-400">ریزش فروش</span>
                        </div>
                        <h4 class="text-xs text-slate-900 dark:text-white font-black">نجات سبد خرید ووکامرس</h4>
                        <p class="text-[11.5px] text-slate-600 dark:text-slate-400 font-medium leading-relaxed">حذف خطای لود نشدن کپچا در تسویه‌حساب و افزایش قطعی نرخ تبدیل سفارشات.</p>
                    </div>
                    <div class="pt-2 border-t border-amber-100 dark:border-slate-800 flex justify-between text-[10px] text-amber-800 dark:text-amber-400 font-bold">
                        <span>تکمیل موفق خرید</span>
                        <span>بدون بن‌بست</span>
                    </div>
                </div>

                <!-- Metric Gauge 4: Lightweight Payload -->
                <div class="p-6 rounded-3xl bg-white dark:bg-slate-900 border border-purple-300 dark:border-purple-500/30 shadow-md flex flex-col justify-between space-y-4">
                    <div class="flex items-center justify-between">
                        <span class="text-[10px] font-mono font-black px-2.5 py-0.5 rounded-full bg-purple-100 dark:bg-purple-500/20 text-purple-900 dark:text-purple-300">
                            MICRO PAYLOAD
                        </span>
                        <div class="w-9 h-9 rounded-xl bg-purple-600 text-white flex items-center justify-center text-sm shadow-md shadow-purple-500/25">
                            <i class="fas fa-feather"></i>
                        </div>
                    </div>
                    <div class="space-y-1 text-right">
                        <div class="flex items-baseline gap-1 justify-start">
                            <span class="text-4xl font-black text-purple-700 dark:text-purple-400 tracking-tight">&lt; ۱۵</span>
                            <span class="text-sm font-black text-purple-600 dark:text-purple-400 font-mono">KB</span>
                        </div>
                        <h4 class="text-xs text-slate-900 dark:text-white font-black">فوق‌العاده سبک و بهینه</h4>
                        <p class="text-[11.5px] text-slate-600 dark:text-slate-400 font-medium leading-relaxed">بیش از ۳۰ برابر سبک‌تر از گوگل با کسب امتیاز ۱۰۰ سبز در گوگل لایت‌هاوس.</p>
                    </div>
                    <div class="pt-2 border-t border-purple-100 dark:border-slate-800 flex justify-between text-[10px] text-purple-800 dark:text-purple-400 font-bold">
                        <span>امتیاز لایت‌هاوس</span>
                        <span class="text-emerald-600 font-mono font-black">100 / 100</span>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 3. CRISIS VS SOLUTION (LIVE DIAGNOSTIC TERMINAL & ARCHITECTURE RESILIENCE) -->
    <!-- ========================================================================= -->
    <section id="crisis-vs-solution" class="py-10 md:py-14 relative overflow-hidden">
        <!-- Deep Multi-Layer Background FX -->
        <div class="absolute inset-0 pointer-events-none overflow-hidden -z-0">
            <div class="absolute inset-0 geo-hex-pattern opacity-50"></div>
            <div class="absolute -top-10 left-10 w-72 h-72 bg-rose-500/12 dark:bg-rose-500/15 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-10 right-10 w-72 h-72 bg-emerald-500/12 dark:bg-emerald-500/15 rounded-full blur-3xl"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
            
            <div class="text-center max-w-3xl mx-auto mb-8 space-y-2.5">
                <span class="text-xs font-black text-amber-700 dark:text-amber-400 bg-amber-50 dark:bg-amber-500/10 border border-amber-200 dark:border-amber-500/30 px-4 py-1 rounded-full inline-block shadow-sm">
                    ⚠️ مقایسه معماری زنده در زمان اختلال اینترنت بین‌الملل و شبکه ملی
                </span>
                <h2 class="text-2xl sm:text-4xl font-black text-slate-900 dark:text-white leading-tight">
                    بحران شکست کپچاهای ابری در برابر پایداری بومی گاردفای پرو
                </h2>
                <p class="text-slate-600 dark:text-slate-300 text-xs sm:text-sm leading-relaxed">
                    مشاهده تفاوت فنی رفتار سایت هنگام استفاده از سرویس‌های خارجی نظیر Google reCAPTCHA در مقایسه با موتور آفلاین Guardify Pro:
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                
                <!-- Crisis Diagnostic Terminal -->
                <div class="p-7 rounded-3xl bg-gradient-to-b from-rose-50/95 to-red-100/70 dark:from-rose-950/40 dark:to-slate-900 border-2 border-rose-300 dark:border-rose-500/40 space-y-5 shadow-xl shadow-rose-500/10 flex flex-col justify-between">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between pb-3 border-b border-rose-200 dark:border-rose-900">
                            <div class="flex items-center gap-3">
                                <div class="w-11 h-11 rounded-2xl bg-gradient-to-tr from-rose-600 to-red-500 text-white flex items-center justify-center text-xl shadow-md shadow-rose-500/30">
                                    <i class="fab fa-google"></i>
                                </div>
                                <div class="text-right">
                                    <h4 class="font-black text-sm text-rose-950 dark:text-white">معماری وابسته: Google reCAPTCHA</h4>
                                    <span class="text-[10px] text-rose-700 dark:text-rose-400 font-mono font-bold">Cloud Dependency Failure</span>
                                </div>
                            </div>
                            <span class="bg-rose-200 dark:bg-rose-900/60 text-rose-900 dark:text-rose-200 text-[11px] font-black px-3 py-1 rounded-xl shadow-sm border border-rose-300 dark:border-rose-700 flex items-center gap-1">
                                <span class="w-2 h-2 rounded-full bg-rose-600 animate-ping"></span>
                                مسدود / قطعی
                            </span>
                        </div>

                        <!-- Live Error Terminal Simulator -->
                        <div class="p-4 rounded-2xl bg-slate-950 border border-slate-800 text-xs space-y-2 text-left font-mono dark-contrast-card" dir="ltr">
                            <div class="flex items-center justify-between text-[10px] pb-1.5 border-b border-slate-800">
                                <span class="text-rose-400 font-bold" style="color:#fb7185 !important;">● CLOUD NETWORK STATUS</span>
                                <span class="text-rose-300 font-bold" style="color:#fda4af !important;">TIMEOUT</span>
                            </div>
                            <div class="text-slate-200 text-[11px] leading-relaxed space-y-1">
                                <p><span class="text-indigo-400" style="color:#a5b4fc !important;">CONNECT</span> <span style="color:#f1f5f9 !important;">google.com:443 ...</span> <span class="text-rose-400 font-bold" style="color:#fb7185 !important;">FAILED</span></p>
                                <p class="text-rose-300 font-black" style="color:#fda4af !important;">ERR_CONNECTION_TIMED_OUT (9999ms)</p>
                                <p class="text-amber-300 text-[10.5px] font-bold" style="color:#fde047 !important;">⚠️ HTTP 504 Gateway Timeout: Script Not Loaded</p>
                                <p class="text-slate-300 text-[10.5px]" style="color:#cbd5e1 !important;">Result: WooCommerce Checkout Form Frozen ❌</p>
                            </div>
                        </div>

                        <ul class="space-y-2.5 text-xs text-rose-950 dark:text-rose-200 leading-relaxed font-medium text-right">
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
                <div class="p-7 rounded-3xl bg-gradient-to-b from-emerald-50/95 to-teal-100/70 dark:from-emerald-950/40 dark:to-slate-900 border-2 border-emerald-300 dark:border-emerald-500/40 space-y-5 shadow-xl shadow-emerald-500/10 flex flex-col justify-between">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between pb-3 border-b border-emerald-200 dark:border-emerald-900">
                            <div class="flex items-center gap-3">
                                <div class="w-11 h-11 rounded-2xl bg-gradient-to-tr from-emerald-600 to-teal-500 text-white flex items-center justify-center text-xl shadow-md shadow-emerald-500/30">
                                    <i class="fas fa-shield-halved"></i>
                                </div>
                                <div class="text-right">
                                    <h4 class="font-black text-sm text-emerald-950 dark:text-white">معماری بومی: گاردفای پرو (Guardify Pro)</h4>
                                    <span class="text-[10px] text-emerald-700 dark:text-emerald-400 font-mono font-bold">100% Native Host Engine</span>
                                </div>
                            </div>
                            <span class="bg-emerald-200 dark:bg-emerald-900/60 text-emerald-900 dark:text-emerald-200 text-[11px] font-black px-3 py-1 rounded-xl shadow-sm border border-emerald-300 dark:border-emerald-700 flex items-center gap-1">
                                <span class="w-2 h-2 rounded-full bg-emerald-600"></span>
                                پایداری ۱۰۰٪
                            </span>
                        </div>

                        <!-- Live Success Terminal Simulator -->
                        <div class="p-4 rounded-2xl bg-slate-950 border border-slate-800 text-xs space-y-2 text-left font-mono dark-contrast-card" dir="ltr">
                            <div class="flex items-center justify-between text-[10px] pb-1.5 border-b border-slate-800">
                                <span class="text-emerald-400 font-bold" style="color:#34d399 !important;">● LOCAL HOST ENGINE</span>
                                <span class="text-emerald-300 font-mono font-bold" style="color:#6ee7b7 !important;">0.2ms</span>
                            </div>
                            <div class="text-slate-200 text-[11px] leading-relaxed space-y-1">
                                <p><span class="text-indigo-400" style="color:#a5b4fc !important;">EXEC</span> <span style="color:#f1f5f9 !important;">/guardify/local-engine.php ...</span> <span class="text-emerald-400 font-bold" style="color:#34d399 !important;">200 OK</span></p>
                                <p class="text-emerald-300 font-black" style="color:#6ee7b7 !important;">LOCAL SESSION VERIFIED (0.2ms)</p>
                                <p class="text-cyan-300 text-[10.5px] font-bold" style="color:#67e8f9 !important;">⚡ Zero External Network Calls • 100% Intranet Proof</p>
                                <p class="text-slate-200 text-[10.5px]" style="color:#f8fafc !important;">Result: Instant Order Completion & Login Verified ✅</p>
                            </div>
                        </div>

                        <ul class="space-y-2.5 text-xs text-emerald-950 dark:text-emerald-200 leading-relaxed font-medium text-right">
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

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 4. VISUAL CAPTCHA TYPES (35+ THEMES & SMART HUMAN INSPECTION FX) -->
    <!-- ========================================================================= -->
    <section id="captcha-modalities" class="py-14 md:py-18 bg-slate-50 dark:bg-slate-900/40 border-b border-slate-200 dark:border-slate-800 relative overflow-hidden">
        <!-- Deep Geometric Background Layer -->
        <div class="absolute inset-0 pointer-events-none overflow-hidden -z-0">
            <div class="absolute inset-0 geo-hex-pattern opacity-50"></div>
            <div class="absolute -top-20 right-10 w-80 h-80 bg-indigo-500/10 dark:bg-indigo-500/15 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-20 left-10 w-80 h-80 bg-purple-500/10 dark:bg-purple-500/15 rounded-full blur-3xl"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
            
            <div class="text-center max-w-3xl mx-auto mb-10 space-y-3">
                <span class="text-xs font-black text-indigo-700 dark:text-indigo-400 bg-indigo-50 dark:bg-indigo-500/10 border border-indigo-200 dark:border-indigo-500/30 px-3.5 py-1.5 rounded-full inline-block">
                    🎨 بیش از ۳۵ تم و استایل آماده برای انواع کپچا
                </span>
                <h2 class="text-2xl sm:text-4xl font-black text-slate-900 dark:text-white leading-tight">
                    تنوع خیره‌کننده رنگ‌ها و ظاهر انواع کپچا در تم‌های مختلف
                </h2>
                <p class="text-slate-600 dark:text-slate-300 text-sm sm:text-base leading-relaxed">
                    گاردفای پرو مجهز به <strong>بیش از ۳۵ تم رنگی و جلوه نوری آماده</strong> است که با یک کلیک با هر نوع قالب منطبق می‌شوند؛ با پایش بیومتریک و تله‌متری بدون نیاز به حل معماهای خسته‌کننده:
                </p>
            </div>

            <!-- Color Palette Swatches -->
            <div class="max-w-5xl mx-auto mb-10 space-y-3 text-xs">
                <div class="flex flex-wrap items-center justify-center gap-2 font-bold">
                    <span class="px-3 py-1.5 rounded-xl bg-blue-950 text-blue-100 border border-blue-700 shadow-sm flex items-center gap-1.5">
                        <span class="w-2.5 h-2.5 rounded-full bg-blue-500"></span> سرمه‌ای شاهانه (Royal Navy)
                    </span>
                    <span class="px-3 py-1.5 rounded-xl bg-emerald-950 text-emerald-100 border border-emerald-700 shadow-sm flex items-center gap-1.5">
                        <span class="w-2.5 h-2.5 rounded-full bg-emerald-400"></span> زمردی نئونی (Cyber Emerald)
                    </span>
                    <span class="px-3 py-1.5 rounded-xl bg-rose-950 text-rose-100 border border-rose-800 shadow-sm flex items-center gap-1.5">
                        <span class="w-2.5 h-2.5 rounded-full bg-rose-500"></span> یاقوت سرخ (Velvet Crimson)
                    </span>
                    <span class="px-3 py-1.5 rounded-xl bg-purple-950 text-purple-100 border border-purple-700 shadow-sm flex items-center gap-1.5">
                        <span class="w-2.5 h-2.5 rounded-full bg-purple-400"></span> کهکشانی (Cosmic Galaxy)
                    </span>
                    <span class="px-3 py-1.5 rounded-xl bg-stone-900 text-yellow-100 border border-yellow-700 shadow-sm flex items-center gap-1.5">
                        <span class="w-2.5 h-2.5 rounded-full bg-yellow-400"></span> طلای ۲۴ عیار (VIP Gold)
                    </span>
                    <span class="px-3 py-1.5 rounded-xl bg-cyan-950 text-cyan-100 border border-cyan-800 shadow-sm flex items-center gap-1.5">
                        <span class="w-2.5 h-2.5 rounded-full bg-cyan-400"></span> یخی قطبی (Nordic Ice)
                    </span>
                </div>
            </div>

            <!-- Grid of 6 Distinct Captcha Showcase Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 text-right">
                
                <!-- Sample 1: Smart Slider -->
                <div class="p-6 rounded-3xl bg-white dark:bg-slate-900 border-2 border-emerald-400 dark:border-emerald-500/40 shadow-lg flex flex-col justify-between space-y-4">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between text-xs pb-3 border-b border-slate-100 dark:border-slate-800">
                            <span class="font-black text-slate-900 dark:text-white flex items-center gap-1.5">
                                <i class="fas fa-sliders text-emerald-600 dark:text-emerald-400 text-sm"></i>
                                ۱. اسلایدر پازلی (تم زمردی)
                            </span>
                            <span class="text-[10px] font-bold text-emerald-700 dark:text-emerald-300 bg-emerald-100 dark:bg-emerald-500/20 px-2 py-0.5 rounded-full">Smart Slider FX</span>
                        </div>

                        <!-- Rendered with Cyber Emerald Theme -->
                        <div class="guardify-captcha-container guardify-theme-dark-slate guardify-slider-wrap poster-captcha-box theme-emerald p-3.5 rounded-2xl" style="background:#021a12 !important; border:1.5px solid #059669 !important;">
                            <div class="flex justify-between items-center text-xs font-bold text-emerald-200 mb-2">
                                <span class="flex items-center gap-1.5"><i class="fa-solid fa-shield-halved text-emerald-400"></i> پایش رفتار انسانی</span>
                                <span class="text-emerald-400 text-[11px] font-black">انسان واقعی ✓</span>
                            </div>
                            <div class="guardify-slider-track relative h-11 rounded-full bg-[#03281c] border border-emerald-600 flex items-center justify-center overflow-hidden mb-2">
                                <div class="absolute top-0 right-0 bottom-0 w-[48%] bg-gradient-to-l from-emerald-600 to-teal-400"></div>
                                <span class="relative z-10 text-xs font-bold text-emerald-100">دستگیره را به چپ بکشید ←</span>
                                <div class="absolute top-1 right-[calc(48%-18px)] w-9 h-9 rounded-full bg-emerald-50 text-emerald-950 font-black flex items-center justify-center border-2 border-emerald-400 shadow-md shadow-emerald-500/50">←</div>
                            </div>
                            <div class="p-2 rounded-xl bg-slate-900/90 border border-emerald-500/30 text-[10px] text-emerald-300 font-mono flex justify-between">
                                <span>TRAJECTORY: NATURAL</span>
                                <span class="text-cyan-300">JITTER: 0.12s</span>
                            </div>
                        </div>
                    </div>
                    <p class="text-[11px] text-slate-600 dark:text-slate-400 leading-relaxed font-medium pt-2 border-t border-slate-100 dark:border-slate-800">
                        <strong>کپچای کشیدنی اسلایدر:</strong> دستگیره دقیق در مرز پیشرفت سبز و فضای خالی، با احراز زیر ۱ ثانیه.
                    </p>
                </div>

                <!-- Sample 2: Math Addition -->
                <div class="p-6 rounded-3xl bg-white dark:bg-slate-900 border-2 border-rose-300 dark:border-rose-500/40 shadow-lg flex flex-col justify-between space-y-4">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between text-xs pb-3 border-b border-slate-100 dark:border-slate-800">
                            <span class="font-black text-slate-900 dark:text-white flex items-center gap-1.5">
                                <i class="fa-solid fa-plus text-rose-600 dark:text-rose-400"></i>
                                ۲. ریاضی: جمع (زرشکی یاقوتی)
                            </span>
                            <span class="text-[10px] font-bold text-rose-700 dark:text-rose-300 bg-rose-100 dark:bg-rose-500/20 px-2 py-0.5 rounded-full">Level 1: Addition</span>
                        </div>

                        <!-- Rendered with Velvet Crimson Theme -->
                        <div class="p-3.5 rounded-2xl" style="background:#23040e !important; border:1.5px solid #e11d48 !important; color:#ffe4e6 !important;">
                            <div class="flex justify-between items-center text-xs font-bold text-rose-200 mb-2">
                                <span class="flex items-center gap-1.5"><i class="fa-solid fa-calculator text-rose-400"></i> چالش جمع ۲ بخشی</span>
                                <span class="text-rose-300 text-[10.5px] cursor-pointer flex items-center gap-1">تغییر <i class="fa-solid fa-arrows-rotate text-[9px]"></i></span>
                            </div>
                            <div class="flex items-center justify-between p-2 rounded-xl bg-[#18030a] border border-rose-500/60 gap-2">
                                <div class="font-mono font-black text-base text-rose-100 bg-[#330715] px-3 py-1 rounded-lg border border-rose-400" dir="ltr">۱۲ + ۷ =</div>
                                <div class="flex items-center gap-1.5">
                                    <input type="text" value="۱۹" readonly class="w-12 h-9 rounded-lg bg-[#290511] text-rose-100 border border-rose-400 text-center font-bold text-sm outline-none" />
                                    <button type="button" class="px-3 h-9 bg-rose-600 text-white rounded-lg text-xs font-black shadow-md">تایید ✓</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="text-[11px] text-slate-600 dark:text-slate-400 leading-relaxed font-medium pt-2 border-t border-slate-100 dark:border-slate-800">
                        <strong>سطح ۱ (جمع ساده):</strong> معادله، ورودی و دکمه تایید همگی در یک خط واحد بدون اعوجاج و شلوغی بصری.
                    </p>
                </div>

                <!-- Sample 3: Math Multiplication -->
                <div class="p-6 rounded-3xl bg-white dark:bg-slate-900 border-2 border-purple-300 dark:border-purple-500/40 shadow-lg flex flex-col justify-between space-y-4">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between text-xs pb-3 border-b border-slate-100 dark:border-slate-800">
                            <span class="font-black text-slate-900 dark:text-white flex items-center gap-1.5">
                                <i class="fa-solid fa-xmark text-purple-600 dark:text-purple-400"></i>
                                ۳. ریاضی: ضرب (بنفش کهکشانی)
                            </span>
                            <span class="text-[10px] font-bold text-purple-700 dark:text-purple-300 bg-purple-100 dark:bg-purple-500/20 px-2 py-0.5 rounded-full">Level 2: Multiply</span>
                        </div>

                        <!-- Rendered with Cosmic Galaxy Theme -->
                        <div class="p-3.5 rounded-2xl" style="background:#110524 !important; border:1.5px solid #a855f7 !important; color:#f3e8ff !important;">
                            <div class="flex justify-between items-center text-xs font-bold text-purple-200 mb-2">
                                <span class="flex items-center gap-1.5"><i class="fa-solid fa-meteor text-purple-400"></i> جدول ضرب امنیتی</span>
                                <span class="text-purple-300 text-[10.5px] cursor-pointer flex items-center gap-1">تغییر <i class="fa-solid fa-arrows-rotate text-[9px]"></i></span>
                            </div>
                            <div class="flex items-center justify-between p-2 rounded-xl bg-[#1d073d] border border-purple-500/60 gap-2">
                                <div class="font-mono font-black text-base text-purple-100 bg-[#240c4a] px-3 py-1 rounded-lg border border-purple-400" dir="ltr">۸ × ۶ =</div>
                                <div class="flex items-center gap-1.5">
                                    <input type="text" value="۴۸" readonly class="w-12 h-9 rounded-lg bg-[#240c4a] text-purple-100 border border-purple-400 text-center font-bold text-sm outline-none" />
                                    <button type="button" class="px-3 h-9 bg-purple-600 text-white rounded-lg text-xs font-black shadow-md">تایید ✓</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="text-[11px] text-slate-600 dark:text-slate-400 leading-relaxed font-medium pt-2 border-t border-slate-100 dark:border-slate-800">
                        <strong>سطح ۲ (ضرب دو عددی):</strong> چالش ضرب استاندارد با کنتراست شفاف و طراحی کهکشانی ارگونومیک.
                    </p>
                </div>

                <!-- Sample 4: 3-Part Expression -->
                <div class="p-6 rounded-3xl bg-white dark:bg-slate-900 border-2 border-amber-300 dark:border-amber-500/40 shadow-lg flex flex-col justify-between space-y-4">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between text-xs pb-3 border-b border-slate-100 dark:border-slate-800">
                            <span class="font-black text-slate-900 dark:text-white flex items-center gap-1.5">
                                <i class="fa-solid fa-cubes-stacked text-amber-600 dark:text-amber-400"></i>
                                ۴. عبارت ۳ بخشی (طلای ۲۴ عیار)
                            </span>
                            <span class="text-[10px] font-bold text-amber-800 dark:text-amber-300 bg-amber-100 dark:bg-amber-500/20 px-2 py-0.5 rounded-full">Level 3: Add/Sub</span>
                        </div>

                        <!-- Rendered with VIP Gold Theme -->
                        <div class="p-3.5 rounded-2xl" style="background:#171307 !important; border:1.5px solid #d97706 !important; color:#fef3c7 !important;">
                            <div class="flex justify-between items-center text-xs font-bold text-amber-200 mb-2">
                                <span class="flex items-center gap-1.5"><i class="fa-solid fa-crown text-amber-400"></i> معادله ترکیبی ۳ عددی</span>
                                <span class="text-amber-300 text-[10.5px] cursor-pointer flex items-center gap-1">تغییر <i class="fa-solid fa-arrows-rotate text-[9px]"></i></span>
                            </div>
                            <div class="flex items-center justify-between p-2 rounded-xl bg-[#241805] border border-amber-500/60 gap-2">
                                <div class="font-mono font-black text-[13px] text-amber-100 bg-[#291e08] px-2.5 py-1 rounded-lg border border-amber-400" dir="ltr">۲۵ + ۱۲ - ۸ =</div>
                                <div class="flex items-center gap-1.5">
                                    <input type="text" value="۲۹" readonly class="w-11 h-9 rounded-lg bg-[#291e08] text-amber-100 border border-amber-400 text-center font-bold text-sm outline-none" />
                                    <button type="button" class="px-2.5 h-9 bg-amber-500 text-slate-950 rounded-lg text-xs font-black shadow-md">تایید ✓</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="text-[11px] text-slate-600 dark:text-slate-400 leading-relaxed font-medium pt-2 border-t border-slate-100 dark:border-slate-800">
                        <strong>سطح ۳ (معادله ۳ بخشی):</strong> ترکیب یک عمل جمع و یک تفریق (بدون ضرب)، کاملاً در یک خط واحد.
                    </p>
                </div>

                <!-- Sample 5: Icon Match -->
                <div class="p-6 rounded-3xl bg-white dark:bg-slate-900 border-2 border-blue-300 dark:border-blue-500/40 shadow-lg flex flex-col justify-between space-y-4">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between text-xs pb-3 border-b border-slate-100 dark:border-slate-800">
                            <span class="font-black text-slate-900 dark:text-white flex items-center gap-1.5">
                                <i class="fa-solid fa-shapes text-blue-600 dark:text-blue-400"></i>
                                ۵. تطبیق آیکون (سرمه‌ای شاهانه)
                            </span>
                            <span class="text-[10px] font-bold text-blue-700 dark:text-blue-300 bg-blue-100 dark:bg-blue-500/20 px-2 py-0.5 rounded-full">Icon Match</span>
                        </div>

                        <!-- Rendered with Royal Navy Theme -->
                        <div class="p-3.5 rounded-2xl" style="background:#071228 !important; border:1.5px solid #2563eb !important; color:#eff6ff !important;">
                            <div class="flex justify-between items-center text-xs font-bold text-blue-200 mb-2">
                                <span class="flex items-center gap-1.5"><i class="fa-solid fa-key text-blue-400"></i> کلیک روی آیکون «کلید»</span>
                                <span class="text-blue-300 text-[10.5px]">SVG Icons</span>
                            </div>
                            <div class="grid grid-cols-4 gap-2 text-center p-2 rounded-xl bg-[#031024] border border-blue-600/60">
                                <div class="p-2 rounded-lg bg-blue-950/60 border border-blue-800 text-slate-400 text-sm"><i class="fas fa-star"></i></div>
                                <div class="p-2 rounded-lg bg-blue-600 border border-blue-400 text-white text-sm shadow-md"><i class="fas fa-key"></i></div>
                                <div class="p-2 rounded-lg bg-blue-950/60 border border-blue-800 text-slate-400 text-sm"><i class="fas fa-heart"></i></div>
                                <div class="p-2 rounded-lg bg-blue-950/60 border border-blue-800 text-slate-400 text-sm"><i class="fas fa-bell"></i></div>
                            </div>
                        </div>
                    </div>
                    <p class="text-[11px] text-slate-600 dark:text-slate-400 leading-relaxed font-medium pt-2 border-t border-slate-100 dark:border-slate-800">
                        <strong>تطبیق آیکون:</strong> انتخاب آیکون مشخص از میان گزینه‌ها بدون نیاز به تایپ کیبورد روی موبایل.
                    </p>
                </div>

                <!-- Sample 6: Smart Honeypot -->
                <div class="p-6 rounded-3xl bg-white dark:bg-slate-900 border-2 border-teal-300 dark:border-teal-500/40 shadow-lg flex flex-col justify-between space-y-4">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between text-xs pb-3 border-b border-slate-100 dark:border-slate-800">
                            <span class="font-black text-slate-900 dark:text-white flex items-center gap-1.5">
                                <i class="fa-solid fa-ghost text-teal-600 dark:text-teal-400"></i>
                                ۶. تله مخفی هانی‌پات (یخی قطبی)
                            </span>
                            <span class="text-[10px] font-bold text-teal-700 dark:text-teal-300 bg-teal-100 dark:bg-teal-500/20 px-2 py-0.5 rounded-full">100% Invisible</span>
                        </div>

                        <!-- Rendered with Nordic Ice Theme -->
                        <div class="p-3.5 rounded-2xl dark-contrast-card" style="background:#081b24 !important; border:1.5px solid #06b6d4 !important; color:#ecfeff !important;">
                            <div class="flex justify-between items-center text-xs font-bold text-cyan-200 mb-2">
                                <span class="flex items-center gap-1.5"><i class="fa-solid fa-shield-virus text-cyan-400" style="color:#22d3ee !important;"></i> <span style="color:#cffafe !important;">پایش خودکار ربات</span></span>
                                <span class="text-emerald-300 text-[11px] font-mono font-bold" style="color:#4ade80 !important;">TRAP ACTIVE</span>
                            </div>
                            <div class="p-2.5 rounded-xl bg-[#041118] border border-cyan-600/50 text-[11px] space-y-1 font-mono text-cyan-300" style="background:#041118 !important;">
                                <div class="flex justify-between"><span style="color:#67e8f9 !important;">HONEYPOT FIELD:</span><span class="text-slate-100 font-bold" style="color:#f1f5f9 !important;">HIDDEN</span></div>
                                <div class="flex justify-between text-emerald-400 font-bold" style="color:#4ade80 !important;"><span style="color:#67e8f9 !important;">BOT DETECTED:</span><span style="color:#4ade80 !important;">AUTO-BLOCKED</span></div>
                            </div>
                        </div>
                    </div>
                    <p class="text-[11px] text-slate-600 dark:text-slate-400 leading-relaxed font-medium pt-2 border-t border-slate-100 dark:border-slate-800">
                        <strong>تله مخفی هانی‌پات:</strong> به دام انداختن ربات‌های اسپمر در فرم‌ها بدون هیچ مزاحمتی برای کاربران عادی.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 5. LOGIN HARDENING & SPECIALIZED DEFENSE SHIELDS (سپرهای امنیتی ورود) -->
    <!-- ========================================================================= -->
    <section id="login-hardening" class="py-10 md:py-14 relative overflow-hidden">
        <!-- Deep Multi-Layer Background Layer -->
        <div class="absolute inset-0 pointer-events-none overflow-hidden -z-0">
            <div class="absolute inset-0 geo-hex-pattern opacity-50"></div>
            <div class="absolute -top-12 right-1/4 w-80 h-80 bg-indigo-500/15 dark:bg-indigo-500/20 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-12 left-1/4 w-80 h-80 bg-rose-500/12 dark:bg-rose-500/15 rounded-full blur-3xl"></div>
            <svg class="cyber-circuit-svg absolute top-6 left-6 w-48 h-48 text-indigo-400" viewBox="0 0 100 100" fill="none">
                <path d="M50 10 L85 25 V50 C85 70 50 90 50 90 C50 90 15 70 15 50 V25 L50 10 Z" stroke="currentColor" stroke-width="1.4" stroke-dasharray="4 3" opacity="0.45" />
                <circle cx="50" cy="50" r="15" stroke="currentColor" stroke-width="1" opacity="0.4" />
            </svg>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
            
            <div class="text-center max-w-3xl mx-auto mb-8 space-y-2.5">
                <span class="text-xs font-black text-indigo-700 dark:text-indigo-400 bg-indigo-50 dark:bg-indigo-500/10 border border-indigo-200 dark:border-indigo-500/30 px-4 py-1 rounded-full inline-block shadow-sm">
                    🛡️ اقدامات و سپرهای امنیتی اختصاصی فرم‌های ورود و عضویت (Login Hardening)
                </span>
                <h2 class="text-2xl sm:text-4xl font-black text-slate-900 dark:text-white leading-tight">
                    کنترل و فعال‌سازی دقیق استانداردهای ضد نفوذ و ضد Brute-Force
                </h2>
                <p class="text-slate-600 dark:text-slate-300 text-xs sm:text-sm leading-relaxed">
                    فعال یا غیرفعال‌سازی دقیق تک‌تک استانداردهای ضد نفوذ، ضد بروت‌فورس (Brute-Force) و جلوگیری از اسکن نام کاربری مدیران:
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 text-right">
                
                <!-- Shield 1: Generic Login Error Messages -->
                <div class="p-6 rounded-3xl bg-white dark:bg-slate-900 border border-indigo-200 dark:border-indigo-500/30 shadow-md space-y-4 flex flex-col justify-between">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between pb-3 border-b border-slate-100 dark:border-slate-800">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-indigo-600 to-blue-500 text-white flex items-center justify-center text-lg shadow-md shadow-indigo-500/20">
                                <i class="fas fa-lock"></i>
                            </div>
                            <span class="text-xs font-black text-emerald-600 dark:text-emerald-400">فعال ✓</span>
                        </div>
                        <h4 class="font-black text-sm text-slate-900 dark:text-white">🔒 پنهان‌سازی خطاهای تفکیکی وردپرس</h4>
                        <span class="text-[10px] text-indigo-600 dark:text-indigo-400 font-mono font-bold block -mt-1">Generic Login Error Messages</span>
                        <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed font-medium">
                            جلوگیری از تشخیص اشتباه بودن «نام کاربری» یا «رمز عبور» برای متوقف کردن حملات شمارش نام کاربری (User Enumeration).
                        </p>
                    </div>
                </div>

                <!-- Shield 2: Anti Author Scan -->
                <div class="p-6 rounded-3xl bg-white dark:bg-slate-900 border border-rose-200 dark:border-rose-500/30 shadow-md space-y-4 flex flex-col justify-between">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between pb-3 border-b border-slate-100 dark:border-slate-800">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-rose-600 to-pink-500 text-white flex items-center justify-center text-lg shadow-md shadow-rose-500/20">
                                <i class="fas fa-user-shield"></i>
                            </div>
                            <span class="text-xs font-black text-emerald-600 dark:text-emerald-400">فعال ✓</span>
                        </div>
                        <h4 class="font-black text-sm text-slate-900 dark:text-white">🛑 مسدودسازی اسکن نام کاربری نویسندگان</h4>
                        <span class="text-[10px] text-rose-600 dark:text-rose-400 font-mono font-bold block -mt-1">Anti Author Scan & REST Lock</span>
                        <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed font-medium">
                            ریدایرکت خودکار <code class="px-1 py-0.5 rounded bg-slate-100 dark:bg-slate-800 font-mono text-[11px]">/?author=1</code> و مسدودسازی دسترسی کاربران مهمان به REST API کاربران.
                        </p>
                    </div>
                </div>

                <!-- Shield 3: Brute-Force Rate Limiting -->
                <div class="p-6 rounded-3xl bg-white dark:bg-slate-900 border border-amber-200 dark:border-amber-500/30 shadow-md space-y-4 flex flex-col justify-between">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between pb-3 border-b border-slate-100 dark:border-slate-800">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-amber-500 to-yellow-400 text-slate-950 flex items-center justify-center text-lg shadow-md shadow-amber-500/20">
                                <i class="fas fa-bolt"></i>
                            </div>
                            <span class="text-xs font-black text-emerald-600 dark:text-emerald-400">فعال ✓</span>
                        </div>
                        <h4 class="font-black text-sm text-slate-900 dark:text-white">⚡ مسدودسازی هوشمند حملات بروت‌فورس</h4>
                        <span class="text-[10px] text-amber-600 dark:text-amber-400 font-mono font-bold block -mt-1">Brute-Force Rate Limiting</span>
                        <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed font-medium">
                            مسدودسازی موقت IP پس از ۳ تلاش ناموفق برای ورود به حساب کاربری به مدت ۳۰ دقیقه.
                        </p>
                    </div>
                </div>

                <!-- Shield 4: Disable XML-RPC -->
                <div class="p-6 rounded-3xl bg-white dark:bg-slate-900 border border-purple-200 dark:border-purple-500/30 shadow-md space-y-4 flex flex-col justify-between">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between pb-3 border-b border-slate-100 dark:border-slate-800">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-purple-600 to-indigo-500 text-white flex items-center justify-center text-lg shadow-md shadow-purple-500/20">
                                <i class="fas fa-ban"></i>
                            </div>
                            <span class="text-xs font-black text-emerald-600 dark:text-emerald-400">فعال ✓</span>
                        </div>
                        <h4 class="font-black text-sm text-slate-900 dark:text-white">🚫 غیرفعال‌سازی پروتکل XML-RPC وردپرس</h4>
                        <span class="text-[10px] text-purple-600 dark:text-purple-400 font-mono font-bold block -mt-1">Disable XML-RPC Protocol</span>
                        <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed font-medium">
                            مسدودسازی کامل نقطه اتصال <code class="px-1 py-0.5 rounded bg-slate-100 dark:bg-slate-800 font-mono text-[11px]">xmlrpc.php</code> که مورد سوء‌استفاده حملات DDoS قرار می‌گیرد.
                        </p>
                    </div>
                </div>

                <!-- Shield 5: Disable Application Passwords -->
                <div class="p-6 rounded-3xl bg-white dark:bg-slate-900 border border-emerald-200 dark:border-emerald-500/30 shadow-md space-y-4 flex flex-col justify-between">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between pb-3 border-b border-slate-100 dark:border-slate-800">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-emerald-600 to-teal-400 text-white flex items-center justify-center text-lg shadow-md shadow-emerald-500/20">
                                <i class="fas fa-key"></i>
                            </div>
                            <span class="text-xs font-black text-emerald-600 dark:text-emerald-400">فعال ✓</span>
                        </div>
                        <h4 class="font-black text-sm text-slate-900 dark:text-white">🔑 غیرفعال‌سازی رمز عبور برنامه‌ها</h4>
                        <span class="text-[10px] text-emerald-600 dark:text-emerald-400 font-mono font-bold block -mt-1">Disable Application Passwords</span>
                        <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed font-medium">
                            جلوگیری از ایجاد توکن‌های دسترسی برنامه توسط کاربران برای بستن راه‌های نفوذ REST API.
                        </p>
                    </div>
                </div>

                <!-- Shield 6: Anti-Clickjacking Headers -->
                <div class="p-6 rounded-3xl bg-white dark:bg-slate-900 border border-cyan-200 dark:border-cyan-500/30 shadow-md space-y-4 flex flex-col justify-between">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between pb-3 border-b border-slate-100 dark:border-slate-800">
                            <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-cyan-600 to-blue-500 text-white flex items-center justify-center text-lg shadow-md shadow-cyan-500/20">
                                <i class="fas fa-shield-halved"></i>
                            </div>
                            <span class="text-xs font-black text-emerald-600 dark:text-emerald-400">فعال ✓</span>
                        </div>
                        <h4 class="font-black text-sm text-slate-900 dark:text-white">🛡️ ارسال هدرهای امنیتی ضد کلیک‌جکینگ</h4>
                        <span class="text-[10px] text-cyan-600 dark:text-cyan-400 font-mono font-bold block -mt-1">Anti-Clickjacking Headers</span>
                        <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed font-medium">
                            تزریق خودکار هدرهای <code class="px-1 py-0.5 rounded bg-slate-100 dark:bg-slate-800 font-mono text-[10.5px]">X-Frame-Options: SAMEORIGIN</code> در صفحه ورود.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 6. WP-LOGIN STYLER (DUAL FLOATING LUXURY CARDS IN ROYAL NAVY THEME) -->
    <!-- ========================================================================= -->
    <section id="login-styler" class="py-10 md:py-14 bg-slate-100/80 dark:bg-slate-900/70 border-y border-slate-200 dark:border-slate-800 relative overflow-hidden">
        <!-- Deep Multi-Layer Background Layer -->
        <div class="absolute inset-0 pointer-events-none overflow-hidden -z-0">
            <div class="absolute inset-0 geo-hex-pattern opacity-50"></div>
            <div class="absolute -top-10 left-10 w-72 h-72 bg-purple-500/15 dark:bg-purple-500/20 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-10 right-10 w-72 h-72 bg-cyan-500/15 dark:bg-cyan-500/20 rounded-full blur-3xl"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                
                <div class="lg:col-span-5 space-y-4 text-right">
                    <span class="text-xs font-black text-purple-700 dark:text-purple-400 bg-purple-50 dark:bg-purple-500/10 border border-purple-200 dark:border-purple-500/30 px-3.5 py-1 rounded-full inline-block shadow-sm">
                        استودیوی استایلر صفحه ورود (WP-Login Styler)
                    </span>
                    <h2 class="text-2xl sm:text-4xl font-black text-slate-900 dark:text-white leading-tight">
                        بازطراحی لوکس صفحه لاگین وردپرس با چیدمان «دو کارت معلق»
                    </h2>
                    <p class="text-slate-600 dark:text-slate-300 text-xs sm:text-sm leading-relaxed font-medium">
                        شبیه‌سازی چیدمان <strong>«دو کارت معلق لوکس»</strong> در تم سرمه‌ای شاهانه (Royal Navy)؛ گاردفای پرو بدون تغییر آدرس رسمی `wp-login.php` و با حفظ کامل کوکی‌ها و نشست‌های معتبر، فرم ورود را به ساختاری فوق‌العاده شیک با گرادیانت‌های غنی، افکت‌های شیشه‌ای و هاله‌های نوری تبدیل می‌کند.
                    </p>

                    <div class="grid grid-cols-2 gap-3 text-xs font-bold text-slate-800 dark:text-slate-200">
                        <div class="p-3 rounded-xl bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 flex items-center gap-2 shadow-sm">
                            <i class="fas fa-check-circle text-emerald-500"></i>
                            <span>۶ مدل چیدمان معماری</span>
                        </div>
                        <div class="p-3 rounded-xl bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 flex items-center gap-2 shadow-sm">
                            <i class="fas fa-check-circle text-emerald-500"></i>
                            <span>۲۵+ والپیپر گرادیانت</span>
                        </div>
                        <div class="p-3 rounded-xl bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 flex items-center gap-2 shadow-sm">
                            <i class="fas fa-check-circle text-emerald-500"></i>
                            <span>افکت گلس‌مورفیسم مات</span>
                        </div>
                        <div class="p-3 rounded-xl bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 flex items-center gap-2 shadow-sm">
                            <i class="fas fa-check-circle text-emerald-500"></i>
                            <span>تله مخفی هانی‌پات</span>
                        </div>
                    </div>

                    <div class="pt-2">
                        <a href="/demo.php?tab=login" class="inline-flex items-center gap-2.5 px-7 py-4 rounded-2xl bg-gradient-to-r from-blue-600 via-indigo-600 to-cyan-600 hover:from-blue-500 hover:to-cyan-500 text-white font-black text-sm shadow-xl shadow-indigo-600/30 hover:scale-105 transition-all">
                            <i class="fas fa-desktop text-amber-300"></i>
                            <span>مشاهده در شبیه‌ساز استودیو</span>
                        </a>
                    </div>
                </div>

                <!-- Dual Floating Cards Browser Mockup -->
                <div class="lg:col-span-7">
                    <div class="rounded-3xl border-2 border-indigo-500/60 shadow-2xl overflow-hidden bg-slate-950 text-white">
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
                            <span class="text-indigo-300 font-black text-[10px] tracking-wide" style="color:#a5b4fc !important;">Royal Navy Theme</span>
                        </div>

                        <!-- Inside Deep Stage with Dual Luxury Cards -->
                        <div class="p-6 sm:p-8 bg-gradient-to-br from-[#050B14] via-[#0A1628] to-[#030712] space-y-4">
                            <div class="p-6 rounded-2xl bg-slate-900/90 border border-blue-500/40 shadow-xl space-y-4">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-xl bg-indigo-600/30 border border-indigo-500/50 flex items-center justify-center text-indigo-400">
                                            <i class="fas fa-shield-halved"></i>
                                        </div>
                                        <div>
                                            <h4 class="font-black text-sm text-white">ورود به پنل مدیریت وردپرس</h4>
                                            <span class="text-[10px] text-slate-400">معماری دو کارت معلق لوکس</span>
                                        </div>
                                    </div>
                                    <span class="text-[10px] text-emerald-400 bg-emerald-500/10 px-2 py-0.5 rounded-md font-bold">SHA-256 HMAC</span>
                                </div>

                                <div class="space-y-2 text-xs text-right">
                                    <input type="text" value="admin" readonly class="w-full bg-slate-950 border border-slate-700 rounded-xl px-3 py-2 text-white font-mono text-xs" />
                                    <input type="password" value="••••••••••••" readonly class="w-full bg-slate-950 border border-slate-700 rounded-xl px-3 py-2 text-white font-mono text-xs" />
                                </div>

                                <!-- Integrated Slider inside Styler Mockup -->
                                <div class="guardify-slider-track relative h-10 rounded-full bg-[#031024] border border-blue-600 flex items-center justify-center overflow-hidden">
                                    <div class="absolute top-0 right-0 bottom-0 w-[45%] bg-gradient-to-l from-blue-600 to-cyan-400"></div>
                                    <span class="relative z-10 text-[11px] font-bold text-blue-100">دستگیره را به چپ بکشید ←</span>
                                    <div class="absolute top-1 right-[calc(45%-16px)] w-8 h-8 rounded-full bg-blue-50 text-blue-950 font-black flex items-center justify-center border border-blue-400">←</div>
                                </div>

                                <button type="button" class="w-full py-3 rounded-xl bg-gradient-to-r from-blue-600 via-indigo-600 to-cyan-600 text-white font-black text-xs shadow-lg">ورود به حساب کاربری</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 7. WOOCOMMERCE & POPULAR FORMS INTEGRATION ECOSYSTEM -->
    <!-- ========================================================================= -->
    <section id="forms-protection" class="py-10 md:py-14 relative overflow-hidden">
        <!-- Multi-Layer Deep Geometric Background (Absolute Layer) -->
        <div class="absolute inset-0 pointer-events-none overflow-hidden -z-0">
            <div class="absolute inset-0 geo-hex-pattern opacity-50"></div>
            <div class="absolute -top-12 left-1/4 w-80 h-80 bg-emerald-500/15 dark:bg-emerald-500/20 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-12 right-1/4 w-80 h-80 bg-indigo-500/15 dark:bg-indigo-500/20 rounded-full blur-3xl"></div>
            
            <!-- Background Tech Circuit Overlay with Glowing Data Nodes -->
            <svg class="cyber-circuit-svg absolute inset-0 w-full h-full text-indigo-500 dark:text-indigo-400" viewBox="0 0 1000 320" fill="none">
                <path d="M50 160 H950 M250 40 V280 M500 20 V300 M750 40 V280" stroke="currentColor" stroke-width="1.5" stroke-dasharray="6 6" opacity="0.4" />
                <circle cx="250" cy="160" r="6" fill="#10b981" />
                <circle cx="500" cy="160" r="6" fill="#6366f1" />
                <circle cx="750" cy="160" r="6" fill="#f59e0b" />
                <path d="M100 80 H200 L230 110 H400" stroke="currentColor" stroke-width="1.2" opacity="0.35" />
                <path d="M600 240 H770 L800 210 H900" stroke="currentColor" stroke-width="1.2" opacity="0.35" />
            </svg>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
            
            <div class="text-center max-w-3xl mx-auto mb-8 space-y-2.5">
                <span class="text-xs font-black text-emerald-700 dark:text-emerald-400 bg-emerald-50 dark:bg-emerald-500/10 border border-emerald-200 dark:border-emerald-500/30 px-4 py-1 rounded-full inline-block shadow-sm">
                    🔌 سازگاری جامع و خودکار با اکوسیستم وردپرس
                </span>
                <h2 class="text-2xl sm:text-4xl font-black text-slate-900 dark:text-white leading-tight">
                    حفاظت خودکار از ووکامرس، دیجیتس و کلیه فرم‌سازهای وردپرس
                </h2>
                <p class="text-slate-600 dark:text-slate-300 text-xs sm:text-sm leading-relaxed">
                    گاردفای پرو بدون نیاز به نوشتن حتی یک خط شورت‌کد یا دستکاری کدهای قالب، با یک کلیک روی تمامی فرم‌های حساس فروشگاه و سایت شما فعال و هماهنگ می‌گردد:
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 text-right">
                
                <!-- 1. WooCommerce -->
                <div class="p-6 rounded-3xl bg-white dark:bg-slate-900 border-2 border-slate-200 dark:border-slate-800 hover:border-purple-500/60 transition-all duration-300 shadow-xl hover:-translate-y-1.5 flex flex-col justify-between space-y-4">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between pb-3 border-b border-slate-100 dark:border-slate-800">
                            <div class="w-12 h-12 rounded-2xl bg-purple-50 dark:bg-purple-500/10 text-purple-600 dark:text-purple-400 flex items-center justify-center text-2xl shadow-md shadow-purple-500/15">
                                <i class="fas fa-cart-shopping"></i>
                            </div>
                            <span class="text-[11px] font-bold text-purple-700 dark:text-purple-300 bg-purple-50 dark:bg-purple-500/20 px-2.5 py-1 rounded-lg">WooCommerce</span>
                        </div>
                        <h3 class="font-black text-base text-slate-900 dark:text-white">فروشگاه ووکامرس</h3>
                        <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed font-medium">
                            حفاظت از تسویه‌حساب (Checkout)، ثبت‌نام مشتری، ورود خریداران و پرداخت بدون ایجاد اصطکاک و افت نرخ تبدیل.
                        </p>
                    </div>
                    <div class="p-2.5 rounded-xl bg-purple-50/70 dark:bg-purple-950/40 border border-purple-200/60 dark:border-purple-800/40 text-[11px] text-purple-800 dark:text-purple-300 font-bold flex items-center gap-1.5">
                        <i class="fas fa-check-circle text-purple-600"></i>
                        <span>Zero Abandoned Checkout</span>
                    </div>
                </div>

                <!-- 2. Digits OTP -->
                <div class="p-6 rounded-3xl bg-white dark:bg-slate-900 border-2 border-slate-200 dark:border-slate-800 hover:border-emerald-500/60 transition-all duration-300 shadow-xl hover:-translate-y-1.5 flex flex-col justify-between space-y-4">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between pb-3 border-b border-slate-100 dark:border-slate-800">
                            <div class="w-12 h-12 rounded-2xl bg-emerald-50 dark:bg-emerald-500/10 text-emerald-600 dark:text-emerald-400 flex items-center justify-center text-2xl shadow-md shadow-emerald-500/15">
                                <i class="fas fa-mobile-screen"></i>
                            </div>
                            <span class="text-[11px] font-bold text-emerald-700 dark:text-emerald-300 bg-emerald-50 dark:bg-emerald-500/20 px-2.5 py-1 rounded-lg">OTP SMS</span>
                        </div>
                        <h3 class="font-black text-base text-slate-900 dark:text-white">افزونه دیجیتس (Digits)</h3>
                        <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed font-medium">
                            جلوگیری از حملات تخلیه شارژ پنل پیامک (SMS Bombing) و ارسال‌های انبوه پیامک OTP در صفحات ورود موبایلی.
                        </p>
                    </div>
                    <div class="p-2.5 rounded-xl bg-emerald-50/70 dark:bg-emerald-950/40 border border-emerald-200/60 dark:border-emerald-800/40 text-[11px] text-emerald-800 dark:text-emerald-300 font-bold flex items-center gap-1.5">
                        <i class="fas fa-shield-check text-emerald-600"></i>
                        <span>حفاظت از هزینه پنل پیامک</span>
                    </div>
                </div>

                <!-- 3. Form Builders -->
                <div class="p-6 rounded-3xl bg-white dark:bg-slate-900 border-2 border-slate-200 dark:border-slate-800 hover:border-indigo-500/60 transition-all duration-300 shadow-xl hover:-translate-y-1.5 flex flex-col justify-between space-y-4">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between pb-3 border-b border-slate-100 dark:border-slate-800">
                            <div class="w-12 h-12 rounded-2xl bg-indigo-50 dark:bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 flex items-center justify-center text-2xl shadow-md shadow-indigo-500/15">
                                <i class="fas fa-cubes"></i>
                            </div>
                            <span class="text-[11px] font-bold text-indigo-700 dark:text-indigo-300 bg-indigo-50 dark:bg-indigo-500/20 px-2.5 py-1 rounded-lg">Form Builders</span>
                        </div>
                        <h3 class="font-black text-base text-slate-900 dark:text-white">المنتور و فرم‌سازها</h3>
                        <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed font-medium">
                            پشتیبانی بی‌نقص از Gravity Forms، Contact Form 7، WPForms، Fluent Forms و ویجت‌های فرم المنتور پرو.
                        </p>
                    </div>
                    <div class="p-2.5 rounded-xl bg-indigo-50/70 dark:bg-indigo-950/40 border border-indigo-200/60 dark:border-indigo-800/40 text-[11px] text-indigo-800 dark:text-indigo-300 font-bold flex items-center gap-1.5">
                        <i class="fas fa-bolt text-indigo-600"></i>
                        <span>شناسایی خودکار هوک‌ها</span>
                    </div>
                </div>

                <!-- 4. Core WordPress -->
                <div class="p-6 rounded-3xl bg-white dark:bg-slate-900 border-2 border-slate-200 dark:border-slate-800 hover:border-amber-500/60 transition-all duration-300 shadow-xl hover:-translate-y-1.5 flex flex-col justify-between space-y-4">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between pb-3 border-b border-slate-100 dark:border-slate-800">
                            <div class="w-12 h-12 rounded-2xl bg-amber-50 dark:bg-amber-500/10 text-amber-600 dark:text-amber-400 flex items-center justify-center text-2xl shadow-md shadow-amber-500/15">
                                <i class="fab fa-wordpress"></i>
                            </div>
                            <span class="text-[11px] font-bold text-amber-700 dark:text-amber-300 bg-amber-50 dark:bg-amber-500/20 px-2.5 py-1 rounded-lg">WP Core</span>
                        </div>
                        <h3 class="font-black text-base text-slate-900 dark:text-white">فرم‌های هسته وردپرس</h3>
                        <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed font-medium">
                            دیدگاه‌های بلاگ (Comments)، فراموشی رمز عبور، ثبت‌نام اعضا و مسدودسازی کامل پروتکل آسیب‌پذیر XML-RPC.
                        </p>
                    </div>
                    <div class="p-2.5 rounded-xl bg-amber-50/70 dark:bg-amber-950/40 border border-amber-200/60 dark:border-amber-800/40 text-[11px] text-amber-800 dark:text-amber-300 font-bold flex items-center gap-1.5">
                        <i class="fas fa-lock text-amber-600"></i>
                        <span>قفل ۱۰۰٪ اسپم کامنت</span>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 8. SECURITY RADAR, FIREWALL ENGINE & LIVE TELEMETRY LOGS -->
    <!-- ========================================================================= -->
    <section id="security-radar" class="py-10 md:py-14 bg-slate-100/80 dark:bg-slate-900/70 border-y border-slate-200 dark:border-slate-800 relative overflow-hidden">
        <!-- Deep Multi-Layer Background FX -->
        <div class="absolute inset-0 pointer-events-none overflow-hidden -z-0">
            <div class="absolute inset-0 geo-hex-pattern opacity-50"></div>
            <div class="absolute -top-12 left-10 w-80 h-80 bg-rose-500/15 dark:bg-rose-500/20 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-12 right-10 w-80 h-80 bg-indigo-500/15 dark:bg-indigo-500/20 rounded-full blur-3xl"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
            
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                
                <div class="lg:col-span-6 space-y-4 text-right">
                    <span class="text-xs font-black text-rose-700 dark:text-rose-400 bg-rose-50 dark:bg-rose-500/10 border border-rose-200 dark:border-rose-500/30 px-4 py-1 rounded-full inline-block shadow-sm">
                        🛡️ رادار هوشمند فایروال و لاگ لحظه‌ای حملات
                    </span>
                    <h2 class="text-2xl sm:text-4xl font-black text-slate-900 dark:text-white leading-tight">
                        کنترل نرخ ارسال، لاگ لحظه‌ای نفوذ و قفل هوشمند IP
                    </h2>
                    <p class="text-slate-600 dark:text-slate-300 text-xs sm:text-sm leading-relaxed">
                        گاردفای پرو مجهز به موتور پایش بیومتریک و فایروال لایه کاربردی است که حملات ربات‌ها را در بدو ورود شناسایی، ثبت و بدون ایجاد کوچک‌ترین تاخیر برای مشتریان واقعی خنثی می‌کند:
                    </p>

                    <div class="space-y-3 text-xs text-slate-600 dark:text-slate-300">
                        <div class="flex items-start gap-3 p-3.5 rounded-2xl bg-white dark:bg-slate-800/90 border border-slate-200 dark:border-slate-700 shadow-sm">
                            <span class="w-8 h-8 rounded-xl bg-indigo-50 dark:bg-indigo-500/20 text-indigo-600 dark:text-indigo-400 flex items-center justify-center font-black text-sm shrink-0">🔒</span>
                            <div>
                                <strong class="text-slate-900 dark:text-white block mb-0.5 text-xs sm:text-sm">قفل هوشمند پس از تلاش‌های ناموفق (Smart Lockout)</strong>
                                <span class="leading-relaxed">تعیین تعداد مجاز تلاش (مثلاً ۳ بار) و مدت زمان مسدودسازی خودکار مهاجمان بدون درگیر کردن منابع پایگاه‌داده.</span>
                            </div>
                        </div>

                        <div class="flex items-start gap-3 p-3.5 rounded-2xl bg-white dark:bg-slate-800/90 border border-slate-200 dark:border-slate-700 shadow-sm">
                            <span class="w-8 h-8 rounded-xl bg-emerald-50 dark:bg-emerald-500/20 text-emerald-600 dark:text-emerald-400 flex items-center justify-center font-black text-sm shrink-0">🏳️</span>
                            <div>
                                <strong class="text-slate-900 dark:text-white block mb-0.5 text-xs sm:text-sm">لیست سفید آی‌پی‌ها و نقش‌های کاربری (Whitelist)</strong>
                                <span class="leading-relaxed">معاف کردن آی‌پی‌های ثابت مدیران، نقش‌های ویژه (Administrator, Shop Manager) یا صفحات اختصاصی.</span>
                            </div>
                        </div>

                        <div class="flex items-start gap-3 p-3.5 rounded-2xl bg-white dark:bg-slate-800/90 border border-slate-200 dark:border-slate-700 shadow-sm">
                            <span class="w-8 h-8 rounded-xl bg-amber-50 dark:bg-amber-500/20 text-amber-600 dark:text-amber-400 flex items-center justify-center font-black text-sm shrink-0">📊</span>
                            <div>
                                <strong class="text-slate-900 dark:text-white block mb-0.5 text-xs sm:text-sm">ثبت لاگ رویدادها با خروجی اکسل و CSV</strong>
                                <span class="leading-relaxed">امکان مشاهده دقیق جزئیات حملات، آی‌پی، نام کاربری هدف، نوع حمله و دانلود خروجی استاندارد گزارشات.</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Live Security Radar Terminal Mockup -->
                <div class="lg:col-span-6">
                    <div class="rounded-3xl bg-slate-950 border-2 border-indigo-500/50 p-6 sm:p-7 shadow-2xl space-y-4 text-white dark-contrast-card">
                        <div class="flex items-center justify-between pb-3 border-b border-slate-800 text-xs">
                            <div class="flex items-center gap-2.5">
                                <span class="w-3 h-3 rounded-full bg-emerald-400 animate-pulse"></span>
                                <span class="font-black text-white text-sm" style="color:#ffffff !important;">رادار زنده لاگ امنیتی (Guardify Firewall)</span>
                            </div>
                            <span class="text-[11px] text-emerald-400 font-mono font-bold bg-emerald-500/10 px-2.5 py-1 rounded-lg border border-emerald-500/20" style="color:#34d399 !important;">100% Client Protected</span>
                        </div>

                        <div class="space-y-2.5 font-mono text-[11px]">
                            <div class="p-3.5 rounded-2xl bg-rose-950/40 border border-rose-500/30 flex items-center justify-between text-rose-300 shadow-sm" style="background:#23040e !important; color:#fda4af !important;">
                                <div class="flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-rose-500"></span>
                                    <span class="font-bold text-rose-200" style="color:#ffe4e6 !important;">[BLOCK] Brute-Force on /wp-login.php</span>
                                </div>
                                <span class="text-rose-400 font-extrabold" style="color:#fb7185 !important;">IP: 185.220.xxx.xx</span>
                            </div>
                            <div class="p-3.5 rounded-2xl bg-amber-950/40 border border-amber-500/30 flex items-center justify-between text-amber-300 shadow-sm" style="background:#1c1304 !important; color:#fcd34d !important;">
                                <div class="flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-amber-400"></span>
                                    <span class="font-bold text-amber-200" style="color:#fef08a !important;">[TRAP] Honeypot Bot on User Register</span>
                                </div>
                                <span class="text-amber-400 font-extrabold" style="color:#facc15 !important;">IP: 91.240.xxx.xx</span>
                            </div>
                            <div class="p-3.5 rounded-2xl bg-emerald-950/40 border border-emerald-500/30 flex items-center justify-between text-emerald-300 shadow-sm" style="background:#021a12 !important; color:#6ee7b7 !important;">
                                <div class="flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                                    <span class="font-bold text-emerald-200" style="color:#a7f3d0 !important;">[ALLOW] Valid Slider Checkout Verify</span>
                                </div>
                                <span class="text-emerald-400 font-extrabold" style="color:#34d399 !important;">IP: 5.127.xxx.xx</span>
                            </div>
                            <div class="p-3.5 rounded-2xl bg-indigo-950/40 border border-indigo-500/30 flex items-center justify-between text-indigo-300 shadow-sm" style="background:#071228 !important; color:#a5b4fc !important;">
                                <div class="flex items-center gap-2">
                                    <span class="w-2 h-2 rounded-full bg-cyan-400"></span>
                                    <span class="font-bold text-indigo-200" style="color:#c7d2fe !important;">[ACTIVE] Failover Switched to Local Shield</span>
                                </div>
                                <span class="text-cyan-400 font-extrabold" style="color:#38bdf8 !important;">Latency: 0.2ms</span>
                            </div>
                        </div>

                        <div class="pt-2 text-center">
                            <a href="/demo.php?tab=admin" class="inline-flex items-center gap-2 text-xs text-indigo-300 hover:text-white font-black transition-all" style="color:#a5b4fc !important;">
                                <span>مشاهده تب لاگ‌ها و فایروال در پیشخوان شبیه‌ساز</span>
                                <i class="fas fa-arrow-left text-[10px]"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 9. PERFORMANCE, CORE WEB VITALS & CHARTS -->
    <!-- ========================================================================= -->
    <section id="performance" class="py-10 md:py-14 relative overflow-hidden">
        <!-- Deep Multi-Layer Background FX -->
        <div class="absolute inset-0 pointer-events-none overflow-hidden -z-0">
            <div class="absolute inset-0 geo-hex-pattern opacity-50"></div>
            <div class="absolute -top-12 right-1/4 w-80 h-80 bg-emerald-500/15 dark:bg-emerald-500/20 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-12 left-1/4 w-80 h-80 bg-cyan-500/15 dark:bg-cyan-500/20 rounded-full blur-3xl"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
            
            <div class="text-center max-w-3xl mx-auto mb-8 space-y-2.5">
                <span class="text-xs font-black text-emerald-700 dark:text-emerald-400 bg-emerald-50 dark:bg-emerald-500/10 border border-emerald-200 dark:border-emerald-500/30 px-4 py-1 rounded-full inline-block shadow-sm">
                    ⚡ بهینه‌سازی لایت‌هاوس و Core Web Vitals
                </span>
                <h2 class="text-2xl sm:text-4xl font-black text-slate-900 dark:text-white leading-tight">
                    تاثیر شگفت‌انگیز روی سرعت لود، رتبه لایت‌هاوس و سئوی سایت
                </h2>
                <p class="text-slate-600 dark:text-slate-300 text-xs sm:text-sm leading-relaxed">
                    بررسی مقایسه‌ای سرعت بارگذاری، حجم فایل‌ها و تاخیر تعاملی میان گاردفای پرو و سایر سرویس‌های سنگین خارجی:
                </p>
            </div>

            <!-- React Chart Container -->
            <div id="traffic-chart-root" class="bg-white dark:bg-slate-900 border-2 border-slate-200 dark:border-slate-800 rounded-3xl p-6 sm:p-8 shadow-xl mb-12"></div>

            <div id="web-vitals-chart-root" class="bg-white dark:bg-slate-900 border-2 border-slate-200 dark:border-slate-800 rounded-3xl p-6 sm:p-8 shadow-xl"></div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 10. TECHNICAL BENCHMARK COMPARISON TABLE (CLEAR GRID & BORDERED BOXES) -->
    <!-- ========================================================================= -->
    <section id="comparison" class="py-10 md:py-14 bg-slate-100/80 dark:bg-slate-900/70 border-y border-slate-200 dark:border-slate-800 relative overflow-hidden">
        <!-- Deep Multi-Layer Background Layer -->
        <div class="absolute inset-0 pointer-events-none overflow-hidden -z-0">
            <div class="absolute inset-0 geo-hex-pattern opacity-50"></div>
            <div class="absolute -top-12 left-1/3 w-96 h-96 bg-indigo-500/15 dark:bg-indigo-500/25 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-12 right-1/3 w-96 h-96 bg-amber-500/15 dark:bg-amber-500/20 rounded-full blur-3xl"></div>

            <!-- High-Contrast Animated Cyber Radar & Benchmark Grid SVG -->
            <svg class="cyber-circuit-svg absolute inset-0 w-full h-full text-indigo-500 dark:text-indigo-400" viewBox="0 0 1000 360" fill="none">
                <circle cx="500" cy="180" r="140" stroke="currentColor" stroke-width="1.5" stroke-dasharray="6 6" opacity="0.45" />
                <circle cx="500" cy="180" r="90" stroke="currentColor" stroke-width="1.2" opacity="0.5" />
                <circle cx="500" cy="180" r="40" stroke="currentColor" stroke-width="1.2" stroke-dasharray="3 3" opacity="0.6" />
                <line x1="150" y1="180" x2="850" y2="180" stroke="currentColor" stroke-width="1.2" stroke-dasharray="4 4" opacity="0.4" />
                <line x1="500" y1="20" x2="500" y2="340" stroke="currentColor" stroke-width="1.2" stroke-dasharray="4 4" opacity="0.4" />
                <polygon points="500,180 620,80 500,40" fill="currentColor" opacity="0.08" />
            </svg>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10 space-y-7">
            
            <div class="text-center max-w-3xl mx-auto space-y-2.5">
                <span class="text-xs font-black text-indigo-700 dark:text-indigo-400 bg-indigo-50 dark:bg-indigo-500/10 border border-indigo-200 dark:border-indigo-500/30 px-4 py-1 rounded-full inline-block shadow-sm">
                    ⚖️ مقایسه فنی، مستند و شفاف
                </span>
                <h2 class="text-2xl sm:text-4xl font-black text-slate-900 dark:text-white leading-tight">
                    جدول مقایسه گاردفای پرو با سایر راهکارها
                </h2>
                <p class="text-slate-600 dark:text-slate-300 text-xs sm:text-sm leading-relaxed font-medium">
                    بررسی جامع و دقیق فاکتورهای کلیدی که برای مدیران وب‌سایت‌ها و فروشگاه‌های ایرانی حیاتی است:
                </p>
            </div>

            <!-- Comparison Table Container with Crisp Grid Border & Shadow -->
            <div class="relative z-10 max-w-6xl mx-auto overflow-hidden rounded-3xl border-2 border-slate-300 dark:border-slate-700 shadow-2xl bg-white dark:bg-slate-900">
                
                <div class="overflow-x-auto">
                    <table class="w-full text-right text-xs text-slate-700 dark:text-slate-200 border-collapse border border-slate-300 dark:border-slate-700">
                        <!-- Table Head with Crisp Grid Borders & Column Hierarchy -->
                        <thead>
                            <tr class="bg-slate-900 text-white font-black text-xs">
                                <th class="p-4 sm:p-5 w-1/3 min-w-[200px] border border-slate-700 text-slate-100">
                                    <div class="flex items-center gap-2">
                                        <i class="fas fa-layer-group text-indigo-400"></i>
                                        <span>ویژگی و فاکتور ارزیابی</span>
                                    </div>
                                </th>
                                <!-- Guardify Pro Highlighted Column -->
                                <th class="p-4 sm:p-5 w-1/4 min-w-[190px] bg-gradient-to-b from-indigo-800 via-indigo-900 to-slate-950 text-white font-black border-2 border-amber-400 shadow-lg relative text-center">
                                    <div class="absolute -top-1 right-1/2 translate-x-1/2 px-3 py-0.5 rounded-b-lg bg-amber-400 text-slate-950 text-[10px] font-black tracking-wide shadow-md flex items-center gap-1">
                                        <i class="fas fa-crown text-[10px]"></i> انتخاب شماره ۱
                                    </div>
                                    <div class="pt-2">
                                        <div class="text-sm sm:text-base font-black text-amber-300 flex items-center justify-center gap-1.5">
                                            <span>گاردفای پرو</span>
                                            <i class="fas fa-shield-check text-emerald-400"></i>
                                        </div>
                                        <span class="text-[10px] text-indigo-200 font-mono block mt-0.5">Guardify Pro</span>
                                    </div>
                                </th>
                                <th class="p-4 sm:p-5 text-center text-slate-200 min-w-[150px] border border-slate-700">
                                    <div class="flex flex-col items-center gap-0.5">
                                        <i class="fab fa-google text-rose-400 text-base mb-1"></i>
                                        <span class="text-white font-bold">Google reCAPTCHA</span>
                                        <span class="text-[10px] text-slate-400">v2 / v3 / Enterprise</span>
                                    </div>
                                </th>
                                <th class="p-4 sm:p-5 text-center text-slate-200 min-w-[150px] border border-slate-700">
                                    <div class="flex flex-col items-center gap-0.5">
                                        <i class="fas fa-cloud text-amber-400 text-base mb-1"></i>
                                        <span class="text-white font-bold">Cloudflare Turnstile</span>
                                        <span class="text-[10px] text-slate-400">سرویس ابری خارجی</span>
                                    </div>
                                </th>
                                <th class="p-4 sm:p-5 text-center text-slate-200 min-w-[140px] border border-slate-700">
                                    <div class="flex flex-col items-center gap-0.5">
                                        <i class="fas fa-puzzle-piece text-purple-400 text-base mb-1"></i>
                                        <span class="text-white font-bold">کپچاهای متفرقه</span>
                                        <span class="text-[10px] text-slate-400">افزونه‌های رایگان ساده</span>
                                    </div>
                                </th>
                            </tr>
                        </thead>

                        <tbody class="text-[12px]">
                            
                            <!-- Row 1: National Net -->
                            <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/60 transition-colors">
                                <td class="p-4 font-bold text-slate-900 dark:text-white border border-slate-200 dark:border-slate-800 bg-slate-50/50 dark:bg-slate-800/30">
                                    <div class="flex items-center gap-2.5">
                                        <div class="w-7 h-7 rounded-lg bg-emerald-100 dark:bg-emerald-500/20 text-emerald-700 dark:text-emerald-400 flex items-center justify-center text-xs shrink-0">
                                            <i class="fas fa-wifi"></i>
                                        </div>
                                        <span>عملکرد در شرایط اختلال اینترنت و نت ملی</span>
                                    </div>
                                </td>
                                <td class="p-4 border-2 border-amber-400/80 bg-emerald-50/60 dark:bg-emerald-950/30 font-black text-emerald-900 dark:text-emerald-300 text-center">
                                    <div class="flex items-center justify-center gap-1.5 text-emerald-800 dark:text-emerald-300">
                                        <i class="fas fa-circle-check text-emerald-600 dark:text-emerald-400 text-sm"></i>
                                        <span>۱۰۰٪ فعال، بومی و بدون قطعی</span>
                                    </div>
                                </td>
                                <td class="p-4 text-center border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900">
                                    <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-lg bg-rose-50 dark:bg-rose-950/50 text-rose-700 dark:text-rose-300 font-black text-[11px] border border-rose-200 dark:border-rose-800/50">
                                        <i class="fas fa-circle-xmark text-rose-600 dark:text-rose-400"></i> قطعی کامل و خطا
                                    </span>
                                </td>
                                <td class="p-4 text-center border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900">
                                    <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-lg bg-rose-50 dark:bg-rose-950/50 text-rose-700 dark:text-rose-300 font-black text-[11px] border border-rose-200 dark:border-rose-800/50">
                                        <i class="fas fa-circle-xmark text-rose-600 dark:text-rose-400"></i> مسدود در شبکه ملی
                                    </span>
                                </td>
                                <td class="p-4 text-center border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900">
                                    <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-lg bg-emerald-50 dark:bg-emerald-950/50 text-emerald-700 dark:text-emerald-300 font-bold text-[11px] border border-emerald-200 dark:border-emerald-800/50">
                                        <i class="fas fa-check text-emerald-600 dark:text-emerald-400"></i> فعال
                                    </span>
                                </td>
                            </tr>

                            <!-- Row 2: Latency -->
                            <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/60 transition-colors">
                                <td class="p-4 font-bold text-slate-900 dark:text-white border border-slate-200 dark:border-slate-800 bg-slate-50/50 dark:bg-slate-800/30">
                                    <div class="flex items-center gap-2.5">
                                        <div class="w-7 h-7 rounded-lg bg-cyan-100 dark:bg-cyan-500/20 text-cyan-700 dark:text-cyan-400 flex items-center justify-center text-xs shrink-0">
                                            <i class="fas fa-bolt"></i>
                                        </div>
                                        <span>سرعت پاسخگویی و احراز هویت (Latency)</span>
                                    </div>
                                </td>
                                <td class="p-4 border-2 border-amber-400/80 bg-emerald-50/60 dark:bg-emerald-950/30 font-black text-emerald-900 dark:text-emerald-300 text-center">
                                    <div class="flex items-center justify-center gap-2 text-emerald-800 dark:text-emerald-300">
                                        <i class="fas fa-bolt text-amber-500"></i>
                                        <span>زیر ۵ میلی‌ثانیه</span>
                                        <span class="px-1.5 py-0.5 rounded bg-emerald-600 text-white font-mono text-[10px]">0.2ms</span>
                                    </div>
                                </td>
                                <td class="p-4 text-center border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900">
                                    <span class="font-mono text-xs text-rose-600 dark:text-rose-400 font-black">&gt; ۸۰۰ms</span>
                                    <span class="block text-[10px] text-slate-500">تاخیر سرور آمریکا</span>
                                </td>
                                <td class="p-4 text-center border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900">
                                    <span class="font-mono text-xs text-amber-700 dark:text-amber-400 font-bold">۳۵۰ تا ۹۰۰ms</span>
                                    <span class="block text-[10px] text-slate-500">سرویس ابری خارجی</span>
                                </td>
                                <td class="p-4 text-center border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900">
                                    <span class="font-mono text-xs text-slate-700 dark:text-slate-300 font-bold">زیر ۳۰ms</span>
                                    <span class="block text-[10px] text-slate-500">کپچای محلی سنتی</span>
                                </td>
                            </tr>

                            <!-- Row 3: Payload -->
                            <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/60 transition-colors">
                                <td class="p-4 font-bold text-slate-900 dark:text-white border border-slate-200 dark:border-slate-800 bg-slate-50/50 dark:bg-slate-800/30">
                                    <div class="flex items-center gap-2.5">
                                        <div class="w-7 h-7 rounded-lg bg-purple-100 dark:bg-purple-500/20 text-purple-700 dark:text-purple-400 flex items-center justify-center text-xs shrink-0">
                                            <i class="fas fa-feather"></i>
                                        </div>
                                        <span>حجم کل اسکریپت بارگذاری شده</span>
                                    </div>
                                </td>
                                <td class="p-4 border-2 border-amber-400/80 bg-emerald-50/60 dark:bg-emerald-950/30 font-black text-emerald-900 dark:text-emerald-300 text-center">
                                    <div class="flex items-center justify-center gap-2 text-indigo-950 dark:text-indigo-200 font-bold">
                                        <i class="fas fa-feather text-indigo-600 dark:text-indigo-400"></i>
                                        <span>کمتر از ۱۵ KB</span>
                                        <span class="px-1.5 py-0.5 rounded bg-indigo-600 text-white font-bold text-[10px]">فوق سبک</span>
                                    </div>
                                </td>
                                <td class="p-4 text-center border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900">
                                    <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded bg-rose-50 dark:bg-rose-950/50 text-rose-700 dark:text-rose-300 font-mono font-bold text-[11px] border border-rose-200 dark:border-rose-800/50">
                                        &gt; ۵۰۰ KB (فوق‌سنگین)
                                    </span>
                                </td>
                                <td class="p-4 text-center border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900">
                                    <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded bg-amber-50 dark:bg-amber-950/50 text-amber-800 dark:text-amber-300 font-mono font-bold text-[11px] border border-amber-200 dark:border-amber-800/50">
                                        حدود ۱۲۰ KB
                                    </span>
                                </td>
                                <td class="p-4 text-center border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900">
                                    <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300 font-mono font-bold text-[11px] border border-slate-200 dark:border-slate-700">
                                        ۸۰ تا ۲۵۰ KB
                                    </span>
                                </td>
                            </tr>

                            <!-- Row 4: WP-Login Styler -->
                            <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/60 transition-colors">
                                <td class="p-4 font-bold text-slate-900 dark:text-white border border-slate-200 dark:border-slate-800 bg-slate-50/50 dark:bg-slate-800/30">
                                    <div class="flex items-center gap-2.5">
                                        <div class="w-7 h-7 rounded-lg bg-indigo-100 dark:bg-indigo-500/20 text-indigo-700 dark:text-indigo-400 flex items-center justify-center text-xs shrink-0">
                                            <i class="fas fa-wand-magic-sparkles"></i>
                                        </div>
                                        <span>استودیوی بازطراحی صفحه لاگین (دو کارت معلق لوکس)</span>
                                    </div>
                                </td>
                                <td class="p-4 border-2 border-amber-400/80 bg-emerald-50/60 dark:bg-emerald-950/30 font-black text-indigo-950 dark:text-indigo-200 text-center">
                                    <div class="flex items-center justify-center gap-1.5 text-indigo-900 dark:text-indigo-300">
                                        <i class="fas fa-check text-emerald-600 dark:text-emerald-400"></i>
                                        <span>۶ مدل چیدمان + ۲۵ والپیپر گرادیانت</span>
                                    </div>
                                </td>
                                <td class="p-4 text-center border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 text-rose-500 font-black text-xs">
                                    <i class="fas fa-times text-rose-500 ml-1"></i> ندارد
                                </td>
                                <td class="p-4 text-center border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 text-rose-500 font-black text-xs">
                                    <i class="fas fa-times text-rose-500 ml-1"></i> ندارد
                                </td>
                                <td class="p-4 text-center border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 text-rose-500 font-black text-xs">
                                    <i class="fas fa-times text-rose-500 ml-1"></i> ندارد
                                </td>
                            </tr>

                            <!-- Row 5: 35+ Color Themes -->
                            <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/60 transition-colors">
                                <td class="p-4 font-bold text-slate-900 dark:text-white border border-slate-200 dark:border-slate-800 bg-slate-50/50 dark:bg-slate-800/30">
                                    <div class="flex items-center gap-2.5">
                                        <div class="w-7 h-7 rounded-lg bg-pink-100 dark:bg-pink-500/20 text-pink-700 dark:text-pink-400 flex items-center justify-center text-xs shrink-0">
                                            <i class="fas fa-palette"></i>
                                        </div>
                                        <span>تنوع تم‌های رنگی و استایل کپچا</span>
                                    </div>
                                </td>
                                <td class="p-4 border-2 border-amber-400/80 bg-emerald-50/60 dark:bg-emerald-950/30 font-black text-amber-950 dark:text-amber-200 text-center">
                                    <div class="flex items-center justify-center gap-2 text-slate-900 dark:text-white">
                                        <i class="fas fa-palette text-pink-600 dark:text-pink-400"></i>
                                        <span>بیش از ۳۵ تم آماده رنگی</span>
                                        <span class="flex gap-1">
                                            <span class="w-2.5 h-2.5 rounded-full bg-rose-500"></span>
                                            <span class="w-2.5 h-2.5 rounded-full bg-amber-500"></span>
                                            <span class="w-2.5 h-2.5 rounded-full bg-blue-600"></span>
                                        </span>
                                    </div>
                                </td>
                                <td class="p-4 text-center border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 text-slate-600 dark:text-slate-400 font-bold">فقط ۲ حالت (لایت / دارک)</td>
                                <td class="p-4 text-center border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 text-slate-600 dark:text-slate-400 font-bold">فقط ۲ حالت</td>
                                <td class="p-4 text-center border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 text-slate-500 dark:text-slate-400 font-bold">بسیار محدود</td>
                            </tr>

                            <!-- Row 6: Smart Human Inspection -->
                            <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/60 transition-colors">
                                <td class="p-4 font-bold text-slate-900 dark:text-white border border-slate-200 dark:border-slate-800 bg-slate-50/50 dark:bg-slate-800/30">
                                    <div class="flex items-center gap-2.5">
                                        <div class="w-7 h-7 rounded-lg bg-amber-100 dark:bg-amber-500/20 text-amber-800 dark:text-amber-400 flex items-center justify-center text-xs shrink-0">
                                            <i class="fas fa-eye"></i>
                                        </div>
                                        <span>پایش بیومتریک رفتار انسانی (Smart Human Inspection FX)</span>
                                    </div>
                                </td>
                                <td class="p-4 border-2 border-amber-400/80 bg-emerald-50/60 dark:bg-emerald-950/30 font-black text-cyan-950 dark:text-cyan-200 text-center">
                                    <div class="flex items-center justify-center gap-1.5 text-cyan-900 dark:text-cyan-300 font-black">
                                        <i class="fas fa-radar text-cyan-600 dark:text-cyan-400"></i>
                                        <span>آنالیز هوشمند ماوس بدون ارسال داده</span>
                                    </div>
                                </td>
                                <td class="p-4 text-center border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 text-slate-600 dark:text-slate-400">وابسته به ارسال داده به گوگل</td>
                                <td class="p-4 text-center border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 text-slate-600 dark:text-slate-400">وابسته به کلودفلر</td>
                                <td class="p-4 text-center border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 text-rose-500 font-black text-xs">
                                    <i class="fas fa-times text-rose-500 ml-1"></i> ندارد
                                </td>
                            </tr>

                            <!-- Row 7: Cache Compatibility -->
                            <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/60 transition-colors">
                                <td class="p-4 font-bold text-slate-900 dark:text-white border border-slate-200 dark:border-slate-800 bg-slate-50/50 dark:bg-slate-800/30">
                                    <div class="flex items-center gap-2.5">
                                        <div class="w-7 h-7 rounded-lg bg-teal-100 dark:bg-teal-500/20 text-teal-800 dark:text-teal-400 flex items-center justify-center text-xs shrink-0">
                                            <i class="fas fa-rocket"></i>
                                        </div>
                                        <span>سازگاری با کشینگ (LiteSpeed, WP Rocket)</span>
                                    </div>
                                </td>
                                <td class="p-4 border-2 border-amber-400/80 bg-emerald-50/60 dark:bg-emerald-950/30 font-black text-emerald-950 dark:text-emerald-200 text-center">
                                    <div class="flex items-center justify-center gap-1.5 text-emerald-900 dark:text-emerald-300">
                                        <i class="fas fa-check-circle text-emerald-600 dark:text-emerald-400"></i>
                                        <span>۱۰۰٪ سازگار (AJAX Dynamic Token)</span>
                                    </div>
                                </td>
                                <td class="p-4 text-center border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 text-amber-700 dark:text-amber-400 font-bold">نیازمند تنظیمات پیچیده</td>
                                <td class="p-4 text-center border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 text-amber-700 dark:text-amber-400 font-bold">نیازمند تنظیمات پیچیده</td>
                                <td class="p-4 text-center border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 text-rose-600 font-bold">
                                    <span class="block text-rose-600 dark:text-rose-400 font-black">✗ خطای مکرر توکن</span>
                                    <span class="text-[10px] text-slate-500">قفل شدن فرم‌ها</span>
                                </td>
                            </tr>

                            <!-- Row 8: Support & Origin -->
                            <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/60 transition-colors">
                                <td class="p-4 font-bold text-slate-900 dark:text-white border border-slate-200 dark:border-slate-800 bg-slate-50/50 dark:bg-slate-800/30">
                                    <div class="flex items-center gap-2.5">
                                        <div class="w-7 h-7 rounded-lg bg-rose-100 dark:bg-rose-500/20 text-rose-700 dark:text-rose-400 flex items-center justify-center text-xs shrink-0">
                                            <i class="fas fa-headset"></i>
                                        </div>
                                        <span>پشتیبانی، به‌روزرسانی و اصالت بومی</span>
                                    </div>
                                </td>
                                <td class="p-4 border-2 border-amber-400/80 bg-emerald-50/60 dark:bg-emerald-950/30 font-black text-indigo-950 dark:text-indigo-200 text-center">
                                    <div class="flex items-center justify-center gap-1.5 text-indigo-900 dark:text-indigo-300">
                                        <i class="fas fa-certificate text-amber-500"></i>
                                        <span>لایسنس رسمی و تیم توسعه DevBan</span>
                                    </div>
                                </td>
                                <td class="p-4 text-center border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 text-rose-500 font-black text-xs">
                                    <i class="fas fa-times text-rose-500 ml-1"></i> بدون پشتیبانی
                                </td>
                                <td class="p-4 text-center border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 text-rose-500 font-black text-xs">
                                    <i class="fas fa-times text-rose-500 ml-1"></i> بدون پشتیبانی
                                </td>
                                <td class="p-4 text-center border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 text-slate-500 dark:text-slate-400 font-bold">ناشناخته و رهاشده</td>
                            </tr>

                            <!-- Row 9: Direct Purchase CTA Row -->
                            <tr class="bg-slate-50/80 dark:bg-slate-800/50 font-bold border-t-2 border-slate-300 dark:border-slate-700">
                                <td class="p-4 text-slate-900 dark:text-white font-black border border-slate-200 dark:border-slate-800">
                                    <div class="flex items-center gap-2.5">
                                        <div class="w-7 h-7 rounded-lg bg-amber-100 dark:bg-amber-500/20 text-amber-700 dark:text-amber-400 flex items-center justify-center text-xs shrink-0">
                                            <i class="fas fa-cart-shopping"></i>
                                        </div>
                                        <span>تهیه لایسنس و پشتیبانی:</span>
                                    </div>
                                </td>
                                <td class="p-4 border-2 border-amber-400 bg-amber-50/80 dark:bg-amber-950/50 text-center">
                                    <a href="https://www.rtl-theme.com" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center gap-2 px-5 py-3 rounded-2xl bg-gradient-to-r from-emerald-500 via-lime-500 to-emerald-600 hover:from-emerald-400 hover:to-lime-400 text-slate-950 font-black text-xs shadow-lg shadow-emerald-500/30 hover:scale-105 transition-all w-full">
                                        <i class="fas fa-crown text-[11px]"></i>
                                        <span>خرید لایسنس از راست‌چین</span>
                                    </a>
                                </td>
                                <td class="p-4 text-center border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 text-slate-400 text-[11px]">سرویس شخص ثالث</td>
                                <td class="p-4 text-center border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 text-slate-400 text-[11px]">سرویس ابری خارجی</td>
                                <td class="p-4 text-center border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 text-slate-400 text-[11px]">فاقد پشتیبانی رسمی</td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                <!-- Bottom Winner Verdict Banner -->
                <div class="p-5 sm:p-7 bg-gradient-to-r from-slate-900 via-indigo-950 to-slate-900 border-t-2 border-slate-400 dark:border-slate-700 text-white flex flex-col sm:flex-row items-center justify-between gap-4">
                    <div class="flex items-center gap-3.5 text-right">
                        <div class="w-12 h-12 rounded-2xl bg-gradient-to-tr from-amber-400 to-yellow-300 text-slate-950 flex items-center justify-center text-2xl shadow-lg shadow-amber-400/30 shrink-0 font-black">
                            🏆
                        </div>
                        <div>
                            <h4 class="font-black text-sm sm:text-base text-amber-300">نتیجه نهایی ارزیابی فنی: گاردفای پرو انتخاب برتر و بی‌رقیب</h4>
                            <p class="text-xs text-slate-300 font-medium">تنها راهکاری که سرعت زیر ۵ms، پایداری ۱۰۰٪ نت ملی، استایلر لوکس و سازگاری کامل کش را یکجا تضمین می‌کند.</p>
                        </div>
                    </div>
                    <div class="px-5 py-2.5 rounded-2xl bg-emerald-500/20 border border-emerald-400/50 text-emerald-300 text-xs font-black shrink-0 flex items-center gap-2 shadow-sm">
                        <i class="fas fa-shield-check text-emerald-400 text-sm"></i>
                        <span>امتیاز فنی: ۱۰۰ / ۱۰۰</span>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 11. STEP-BY-STEP QUICK SETUP GUIDE -->
    <!-- ========================================================================= -->
    <section id="setup-guide" class="py-12 md:py-18 relative overflow-hidden">
        <!-- Deep Geometric Background FX -->
        <div class="absolute inset-0 pointer-events-none overflow-hidden -z-0">
            <div class="absolute inset-0 geo-hex-pattern opacity-50"></div>
            <div class="absolute -top-16 left-1/4 w-80 h-80 bg-indigo-500/10 dark:bg-indigo-500/15 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-16 right-1/4 w-80 h-80 bg-emerald-500/10 dark:bg-emerald-500/15 rounded-full blur-3xl"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
            
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
                <span class="text-xs font-black text-emerald-700 dark:text-emerald-400 bg-emerald-50 dark:bg-emerald-500/10 border border-emerald-200 dark:border-emerald-500/30 px-4 py-1.5 rounded-full inline-block shadow-sm">
                    🚀 راه‌اندازی آسان و بدون پیچیدگی
                </span>
                <h2 class="text-2xl sm:text-4xl font-black text-slate-900 dark:text-white leading-tight">
                    راه‌اندازی فوق‌سریع در ۳ گام (زیر ۶۰ ثانیه)
                </h2>
                <p class="text-slate-600 dark:text-slate-300 text-sm sm:text-base leading-relaxed">
                    بدون نیاز به ثبت‌نام در هیچ سایت خارجی، بدون تحریم و بدون کلیدهای API پیچیده:
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-right">
                
                <div class="p-8 rounded-3xl bg-white dark:bg-slate-900 border-2 border-slate-200 dark:border-slate-800 hover:border-indigo-500/50 transition-all duration-300 space-y-4 shadow-xl hover:-translate-y-1.5">
                    <span class="w-14 h-14 rounded-2xl bg-indigo-50 dark:bg-indigo-500/10 text-indigo-600 dark:text-indigo-400 flex items-center justify-center font-black text-2xl shadow-md">۱</span>
                    <h3 class="font-black text-lg text-slate-900 dark:text-white">نصب و فعال‌سازی</h3>
                    <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed font-medium">
                        فایل فشرده افزونه را از پیشخوان وردپرس بخش افزونه‌ها بارگذاری کرده و دکمه فعال‌سازی را بزنید.
                    </p>
                </div>

                <div class="p-8 rounded-3xl bg-white dark:bg-slate-900 border-2 border-slate-200 dark:border-slate-800 hover:border-amber-500/50 transition-all duration-300 space-y-4 shadow-xl hover:-translate-y-1.5">
                    <span class="w-14 h-14 rounded-2xl bg-amber-50 dark:bg-amber-500/10 text-amber-600 dark:text-amber-400 flex items-center justify-center font-black text-2xl shadow-md">۲</span>
                    <h3 class="font-black text-lg text-slate-900 dark:text-white">انتخاب نوع چالش و فرم‌ها</h3>
                    <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed font-medium">
                        از پنل تنظیمات فارسی، چالش دلخواه (اسلایدر، جمع، آیکون یا هانی‌پات) و فرم‌های مورد نظر را تیک بزنید.
                    </p>
                </div>

                <div class="p-8 rounded-3xl bg-white dark:bg-slate-900 border-2 border-slate-200 dark:border-slate-800 hover:border-emerald-500/50 transition-all duration-300 space-y-4 shadow-xl hover:-translate-y-1.5">
                    <span class="w-14 h-14 rounded-2xl bg-emerald-50 dark:bg-emerald-500/10 text-emerald-600 dark:text-emerald-400 flex items-center justify-center font-black text-2xl shadow-md">۳</span>
                    <h3 class="font-black text-lg text-slate-900 dark:text-white">لذت از امنیت و سرعت</h3>
                    <p class="text-xs text-slate-600 dark:text-slate-400 leading-relaxed font-medium">
                        سایت شما بلافاصله در برابر کلیه حملات ایمن شده و تسویه‌حساب مشتریان بدون حتی یک ثانیه وقفه انجام می‌شود.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 12. FAQ ACCORDION WITH RICH SCHEMA.ORG MICRODATA -->
    <!-- ========================================================================= -->
    <section id="faq" class="py-12 md:py-18 bg-slate-100/70 dark:bg-slate-900/60 border-t border-slate-200 dark:border-slate-800 relative overflow-hidden" itemscope itemtype="https://schema.org/FAQPage">
        <!-- Deep Geometric Background FX -->
        <div class="absolute inset-0 pointer-events-none overflow-hidden -z-0">
            <div class="absolute inset-0 geo-hex-pattern opacity-50"></div>
            <div class="absolute -top-16 right-1/4 w-80 h-80 bg-purple-500/10 dark:bg-purple-500/15 rounded-full blur-3xl"></div>
            <div class="absolute -bottom-16 left-1/4 w-80 h-80 bg-indigo-500/10 dark:bg-indigo-500/15 rounded-full blur-3xl"></div>
        </div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 relative z-10">
            
            <div class="text-center mb-16 space-y-3">
                <span class="text-xs font-black text-indigo-700 dark:text-indigo-400 bg-indigo-50 dark:bg-indigo-500/10 border border-indigo-200 dark:border-indigo-500/30 px-4 py-1.5 rounded-full inline-block shadow-sm">
                    ❓ سوالات پرتکرار
                </span>
                <h2 class="text-2xl sm:text-4xl font-black text-slate-900 dark:text-white leading-tight">
                    پاسخ به پرسش‌های متداول شما درباره گاردفای پرو
                </h2>
                <p class="text-slate-600 dark:text-slate-300 text-xs sm:text-sm font-medium">
                    هر آنچه پیش از خرید باید در مورد امنیت، پایداری و سازگاری بدانید:
                </p>
            </div>

            <div class="space-y-4 text-right">
                
                <div class="p-6 rounded-3xl bg-white dark:bg-slate-900 border-2 border-slate-200 dark:border-slate-800 shadow-md space-y-2" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h3 class="font-black text-sm sm:text-base text-slate-900 dark:text-white flex items-center gap-2" itemprop="name">
                        <i class="fas fa-circle-question text-indigo-500"></i>
                        <span>آیا گاردفای پرو واقعاً بدون اتصال به هیچ سرور خارجی کار می‌کند؟</span>
                    </h3>
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 leading-relaxed font-medium pt-1" itemprop="text">
                            بله، در حالت پیش‌فرض (کپچای بومی)، تمامی محاسبات و اعتبارسنجی‌ها به صورت ۱۰۰٪ محلی و با توابع استاندارد PHP روی هاست شما پردازش می‌شوند و هیچ وابستگی یا ارسالی به خارج از کشور وجود ندارد.
                        </p>
                    </div>
                </div>

                <div class="p-6 rounded-3xl bg-white dark:bg-slate-900 border-2 border-slate-200 dark:border-slate-800 shadow-md space-y-2" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h3 class="font-black text-sm sm:text-base text-slate-900 dark:text-white flex items-center gap-2" itemprop="name">
                        <i class="fas fa-circle-question text-indigo-500"></i>
                        <span>آیا این افزونه باعث کندی سرعت سایت یا افت امتیاز لایت‌هاوس می‌شود؟</span>
                    </h3>
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 leading-relaxed font-medium pt-1" itemprop="text">
                            خیر، حجم کل کدهای گاردفای پرو کمتر از ۱۵ کیلوبایت است و برخلاف Google reCAPTCHA که بیش از ۵۰۰ کیلوبایت حجم دارد، هیچ اثر منفی روی Core Web Vitals و امتیاز لایت‌هاوس سایت شما نخواهد داشت.
                        </p>
                    </div>
                </div>

                <div class="p-6 rounded-3xl bg-white dark:bg-slate-900 border-2 border-slate-200 dark:border-slate-800 shadow-md space-y-2" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h3 class="font-black text-sm sm:text-base text-slate-900 dark:text-white flex items-center gap-2" itemprop="name">
                        <i class="fas fa-circle-question text-indigo-500"></i>
                        <span>آیا با ووکامرس، دیجیتس، افزونه‌های کش و فرم‌سازها سازگار است؟</span>
                    </h3>
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 leading-relaxed font-medium pt-1" itemprop="text">
                            کاملاً. گاردفای پرو دارای توکن پویا (AJAX Nonce) است و با تمام افزونه‌های کشینگ مانند LiteSpeed Cache و WP Rocket بدون هیچ‌گونه تداخل کار می‌کند و با فرم‌های ووکامرس، دیجیتس و المنتور کاملاً یکپارچه است.
                        </p>
                    </div>
                </div>

                <div class="p-6 rounded-3xl bg-white dark:bg-slate-900 border-2 border-slate-200 dark:border-slate-800 shadow-md space-y-2" itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                    <h3 class="font-black text-sm sm:text-base text-slate-900 dark:text-white flex items-center gap-2" itemprop="name">
                        <i class="fas fa-circle-question text-indigo-500"></i>
                        <span>قابلیت سوئیچر هوشمند و Smart Failover چگونه کار می‌کند؟</span>
                    </h3>
                    <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                        <p class="text-xs sm:text-sm text-slate-600 dark:text-slate-300 leading-relaxed font-medium pt-1" itemprop="text">
                            اگر از ارائه‌دهنده‌های ابری مثل کلودفلر یا گوگل استفاده کنید و شبکه جهانی قطع یا کند شود، گاردفای پرو بلافاصله و به صورت خودکار فرم‌ها را به چالش امن بومی سوئیچ می‌کند تا هیچ کاربری با خطا روبرو نشود.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- ========================================================================= -->
    <!-- 13. FINAL HIGH-CONVERSION CTA BANNER -->
    <!-- ========================================================================= -->
    <section id="cta" class="py-12 md:py-18 relative overflow-hidden">
        <!-- Deep Geometric Background FX -->
        <div class="absolute inset-0 pointer-events-none overflow-hidden -z-0">
            <div class="absolute inset-0 geo-hex-pattern opacity-50"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10">
            <div class="relative rounded-3xl bg-gradient-to-r from-indigo-950 via-slate-900 to-purple-950 border-2 border-indigo-500/50 p-8 sm:p-14 text-center overflow-hidden shadow-2xl text-white dark-contrast-card">
                
                <!-- Background decoration -->
                <div class="absolute -top-24 -left-24 w-80 h-80 bg-indigo-500/20 rounded-full blur-3xl pointer-events-none"></div>
                <div class="absolute -bottom-24 -right-24 w-80 h-80 bg-purple-500/20 rounded-full blur-3xl pointer-events-none"></div>

                <div class="relative z-10 max-w-3xl mx-auto space-y-6">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-emerald-500/20 border border-emerald-500/40 text-emerald-300 text-xs font-black shadow-sm" style="color:#6ee7b7 !important;">
                        <i class="fas fa-shield-halved"></i>
                        <span>امنیت ۱۰۰٪ تضمین شده برای وردپرس و ووکامرس</span>
                    </div>

                    <h2 class="text-2xl sm:text-4xl lg:text-5xl font-black text-white leading-tight" style="color:#ffffff !important;">
                        همین حالا سایت وردپرسی خود را به گاردفای پرو مجهز کنید
                    </h2>

                    <p class="text-slate-100 text-xs sm:text-base leading-relaxed font-bold" style="color:#f8fafc !important;">
                        با خرید لایسنس اورجینال از مارکت راست‌چین، از پشتیبانی همیشگی، آپدیت‌های مداوم و امنیت ۱۰۰٪ بومی بهره‌مند شوید.
                    </p>

                    <div class="flex flex-wrap items-center justify-center gap-4 pt-4">
                        <a href="https://www.rtl-theme.com" target="_blank" rel="noopener noreferrer" class="px-8 py-4 rounded-2xl bg-gradient-to-r from-emerald-500 via-lime-500 to-emerald-600 hover:from-emerald-400 hover:to-lime-400 text-slate-950 font-black text-sm sm:text-base shadow-xl shadow-emerald-500/25 hover:scale-105 transition-all flex items-center gap-2.5">
                            <i class="fas fa-crown"></i>
                            <span>تهیه لایسنس انحصاری از راست‌چین</span>
                        </a>

                        <a href="/demo.php" class="cta-demo-btn px-8 py-4 rounded-2xl bg-indigo-600 hover:bg-indigo-500 text-white border border-indigo-400 font-black text-sm sm:text-base shadow-xl shadow-indigo-600/30 hover:scale-105 transition-all flex items-center gap-2.5">
                            <i class="fas fa-desktop text-amber-300"></i>
                            <span>شبیه‌ساز پیشرفته افزونه</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

<!-- Interactive Hero Slider, Switcher & Parallax Depth Scripts -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // 1. Hero Slider Interactive Drag
    var thumb = document.getElementById('hero-slider-thumb');
    var track = document.getElementById('hero-slider-track');
    var progress = document.getElementById('hero-slider-progress');
    var hint = document.getElementById('hero-slider-hint');
    var success = document.getElementById('hero-slider-success');
    
    if (thumb && track && progress) {
        var isDragging = false;
        var startX = 0;
        var maxDrag = 0;

        function updateMaxDrag() {
            maxDrag = track.clientWidth - thumb.clientWidth;
        }
        updateMaxDrag();
        window.addEventListener('resize', updateMaxDrag);

        function onStart(e) {
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
            if (delta > maxDrag) delta = maxDrag;

            var percent = (delta / maxDrag) * 100;
            thumb.style.right = delta + 'px';
            progress.style.width = percent + '%';

            if (percent > 88) {
                isDragging = false;
                onSuccess();
            }
        }

        function onEnd() {
            if (!isDragging) return;
            isDragging = false;
            thumb.style.transition = 'right 0.3s ease';
            progress.style.transition = 'width 0.3s ease';
            thumb.style.right = '0px';
            progress.style.width = '0%';
        }

        function onSuccess() {
            thumb.style.right = maxDrag + 'px';
            progress.style.width = '100%';
            if (hint) hint.textContent = 'احراز هویت انجام شد ✓';
            if (success) success.classList.remove('hidden');
        }

        thumb.addEventListener('mousedown', onStart);
        window.addEventListener('mousemove', onMove);
        window.addEventListener('mouseup', onEnd);
        thumb.addEventListener('touchstart', onStart, { passive: true });
        window.addEventListener('touchmove', onMove, { passive: true });
        window.addEventListener('touchend', onEnd);
    }

    // 2. Hardware-Accelerated Smooth Parallax Depth Engine
    var parallaxElements = document.querySelectorAll('.cyber-circuit-svg, [class*="blur-3xl"], [class*="blur-2xl"]');
    if (parallaxElements.length > 0 && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        var mouseX = 0, mouseY = 0;
        var currentX = 0, currentY = 0;
        var rafId = null;

        window.addEventListener('mousemove', function(e) {
            mouseX = (e.clientX / window.innerWidth - 0.5) * 2;
            mouseY = (e.clientY / window.innerHeight - 0.5) * 2;
            if (!rafId) {
                rafId = requestAnimationFrame(animateParallax);
            }
        }, { passive: true });

        function animateParallax() {
            currentX += (mouseX - currentX) * 0.05;
            currentY += (mouseY - currentY) * 0.05;

            for (var i = 0; i < parallaxElements.length; i++) {
                var el = parallaxElements[i];
                var depth = (i % 3 === 0) ? 14 : ((i % 3 === 1) ? 22 : 8);
                var moveX = currentX * depth;
                var moveY = currentY * depth;
                el.style.transform = 'translate3d(' + moveX + 'px, ' + moveY + 'px, 0)';
            }

            if (Math.abs(mouseX - currentX) > 0.001 || Math.abs(mouseY - currentY) > 0.001) {
                rafId = requestAnimationFrame(animateParallax);
            } else {
                rafId = null;
            }
        }
    }
});
</script>

<?php include __DIR__ . '/footer.php'; ?>

