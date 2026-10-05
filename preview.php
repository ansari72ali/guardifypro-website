<?php
/**
 * Guardify Pro Interactive Studio & Live Captcha Lab
 * Unified with header.php and footer.php
 */
$page_title = "آزمایشگاه زنده و پیش‌نمایش کپچا و استودیوی ورود وردپرس | گاردفای پرو Guardify Pro v4.00";
$current_page = "preview";
include __DIR__ . "/header.php";
?>

<main class="flex-grow max-w-7xl w-full mx-auto px-4 sm:px-6 py-8 md:py-12">
        
        <!-- Header & Breadcrumb -->
        <div class="text-center max-w-4xl mx-auto mb-10 md:mb-14">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-indigo-500/10 border border-indigo-500/30 text-xs font-black text-indigo-400 mb-4 tracking-wide shadow-sm">
                <i class="fas fa-flask-vial text-indigo-400"></i>
                <span>آزمایشگاه زنده و پیش‌نمایش اختصاصی • Guardify Interactive Studio</span>
            </div>
            
            <h1 class="text-3xl md:text-5xl font-black mb-4 text-readable tracking-tight">
                آزمایشگاه تست چالش‌های امنیتی و <span class="text-amber-400">استودیوی ورود وردپرس</span>
            </h1>
            
            <p class="text-muted text-sm md:text-base leading-relaxed max-w-2xl mx-auto">
                تمامی چالش‌های کپچای آفلاین (اسلایدر، ریاضی، تطبیق آیکون، هانی‌پات) و ۶ چیدمان اختصاصی WP-Login Pro را بدون کاهش سرعت صفحه اصلی، در محیط اختصاصی و ایزوله شبیه‌سازی کنید.
            </p>

            <!-- Important Disclaimer Banner (Polished, Professional & High-Contrast in Light & Dark Mode) -->
            <div id="preview-disclaimer-banner" class="mt-6 p-5 md:p-6 rounded-3xl bg-amber-50 dark:bg-slate-900/90 border-2 border-amber-400 dark:border-amber-500/40 text-xs md:text-sm leading-relaxed max-w-3xl mx-auto shadow-xl relative overflow-hidden text-right transition-all">
                <div class="flex items-start gap-3.5">
                    <div class="disclaimer-icon w-10 h-10 rounded-2xl bg-amber-100 dark:bg-amber-500/20 border border-amber-300 dark:border-amber-500/40 flex items-center justify-center text-amber-600 dark:text-amber-400 text-lg shrink-0 mt-0.5 shadow-md">
                        <i class="fas fa-circle-exclamation"></i>
                    </div>
                    <div class="space-y-2">
                        <div class="flex items-center gap-2">
                            <span class="disclaimer-badge px-2.5 py-0.5 rounded-full bg-amber-100 dark:bg-amber-500/20 text-amber-900 dark:text-amber-300 text-[11px] font-black border border-amber-300 dark:border-amber-500/30">یادداشت فنی و سلب مسئولیت</span>
                            <span class="disclaimer-sub text-[11px] text-amber-800 dark:text-amber-400 font-bold">• محیط شبیه‌ساز ایزوله</span>
                        </div>
                        <p class="disclaimer-text text-xs md:text-sm text-slate-800 dark:text-slate-200 leading-relaxed font-medium">
                            <strong class="disclaimer-strong text-amber-900 dark:text-amber-300 font-black">توجه مهم:</strong> این صفحه صرفاً یک محیط پیش‌نمایش در قالب HTML و کلاینت‌ساید است و ممکن است به لحاظ استایل‌ها یا رفتار المان‌ها، با نسخه نهایی افزونه تفاوت‌های جزئی داشته باشد. عملکرد صحیح، صددرصدی و مکانیزم‌های کامل امنیتی و اعتبارسنجی سمت سرور، منحصراً در بستر سایت وردپرس پس از نصب مستقیم افزونه گاردفای پرو قابل مشاهده و بهره‌برداری می‌باشد.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Comprehensive 3 Core Security Pillars Live Monitoring Panel -->
            <div class="dark-contrast-card mt-12 bg-slate-950/90 border-2 border-indigo-500/40 rounded-[2.5rem] p-6 md:p-10 shadow-2xl relative overflow-hidden backdrop-blur-xl">
                <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-4 mb-8 pb-6 border-b border-slate-800">
                    <div>
                        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-indigo-500/15 border border-indigo-500/30 text-indigo-400 text-xs font-black mb-2 shadow-sm">
                            <i class="fas fa-shield-halved"></i>
                            <span>معماری امنیتی ۳ لایه فعال در تمامی فرم‌ها</span>
                        </div>
                        <h3 class="text-xl md:text-2xl font-black text-white">
                            مانیتورینگ زنده: <span class="text-amber-400">تله نامرئی هانی‌پات</span> • <span class="text-emerald-400">تله‌متری رفتاری</span> • <span class="text-indigo-400">ضد حملات بازپخش</span>
                        </h3>
                        <p class="text-xs md:text-sm text-slate-300 mt-1 leading-relaxed">
                            این ۳ لایه امنیتی به طور همزمان و کاملاً محلی (Offline) بدون حتی ۱ میلی‌ثانیه تاخیر خارجی، در تمامی فرم‌های ورودی، ثبت‌نام و ووکامرس فعال هستند.
                        </p>
                    </div>

                    <div class="flex items-center gap-2 px-3 py-1.5 rounded-xl bg-emerald-500/15 border border-emerald-500/30 text-emerald-400 text-xs font-bold shrink-0">
                        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
                        <span>موتور امنیتی فعال و آماده</span>
                    </div>
                </div>

                <!-- 3 Pillars Live Cards Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    
                    <!-- Pillar 1: Invisible Honeypot Trap -->
                    <div class="p-6 rounded-3xl bg-slate-900/90 border-2 border-amber-500/30 hover:border-amber-400/80 transition-all flex flex-col justify-between shadow-lg relative group">
                        <div class="absolute top-0 left-0 w-24 h-24 bg-amber-500/10 rounded-full blur-2xl pointer-events-none"></div>
                        <div>
                            <div class="flex items-center justify-between gap-2 mb-4 pb-3 border-b border-slate-800">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-amber-500/15 text-amber-400 text-[11px] font-black border border-amber-500/20">
                                    <i class="fas fa-user-secret"></i>
                                    <span>لایه ۱: تله نامرئی هانی‌پات</span>
                                </span>
                                <span class="text-[10px] font-mono px-2 py-0.5 rounded bg-amber-500/10 text-amber-300 font-bold">Honeypot Trap</span>
                            </div>

                            <div class="flex items-center gap-3 mb-3">
                                <div class="w-12 h-12 rounded-2xl bg-amber-500/20 border border-amber-500/40 flex items-center justify-center text-amber-400 text-xl shrink-0 shadow-md">
                                    <i class="fas fa-spider"></i>
                                </div>
                                <div class="text-right">
                                    <h4 class="text-base font-black text-white">تله شکار ربات‌های اسپمر</h4>
                                    <span class="text-[11px] text-amber-400 font-mono font-bold">Invisible Fake Field</span>
                                </div>
                            </div>

                            <p class="text-xs text-slate-300 leading-relaxed mb-4 font-normal">
                                فیلدهای کاذب نامرئی که با CSS از دید انسان پنهان است؛ ربات‌های خودکار این فیلد را به صورت برنامه‌ریزی‌شده پر می‌کنند و فوراً در تله گرفتار و رد می‌شوند.
                            </p>

                            <!-- Interactive Simulated Field Preview -->
                            <div class="p-3 rounded-2xl bg-slate-950/80 border border-amber-500/20 mb-4 text-[11px] space-y-2">
                                <div class="flex items-center justify-between text-slate-400">
                                    <span>فیلد تله در کدهای HTML:</span>
                                    <span class="text-amber-400 font-mono font-bold">hidden="true"</span>
                                </div>
                                <div class="p-2 rounded-lg bg-slate-900 border border-slate-800 font-mono text-[10px] text-amber-300/90 overflow-x-auto text-left dir-ltr">
                                    &lt;input name="guardify_hp_token" value="" class="opacity-0 absolute -z-50" /&gt;
                                </div>
                                <div id="honeypotSimulationStatus" class="p-2 rounded-xl bg-slate-900/90 text-slate-300 text-[10px] flex items-center gap-2">
                                    <i class="fas fa-shield text-amber-400"></i>
                                    <span>وضعیت: فیلد خالی است (کاربر عادی بدون دخالت)</span>
                                </div>
                            </div>
                        </div>

                        <button type="button" id="testHoneypotTriggerBtn" class="w-full py-2.5 px-4 rounded-xl bg-amber-500/20 hover:bg-amber-500/30 text-amber-300 border border-amber-500/40 font-bold text-xs flex items-center justify-center gap-2 cursor-pointer transition-all">
                            <i class="fas fa-robot"></i>
                            <span>تست شبیه‌سازی نفوذ ربات به تله</span>
                        </button>
                    </div>

                    <!-- Pillar 2: Smart Behavioral Telemetry -->
                    <div class="p-6 rounded-3xl bg-slate-900/90 border-2 border-emerald-500/30 hover:border-emerald-400/80 transition-all flex flex-col justify-between shadow-lg relative group">
                        <div class="absolute top-0 left-0 w-24 h-24 bg-emerald-500/10 rounded-full blur-2xl pointer-events-none"></div>
                        <div>
                            <div class="flex items-center justify-between gap-2 mb-4 pb-3 border-b border-slate-800">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-500/15 text-emerald-400 text-[11px] font-black border border-emerald-500/20">
                                    <i class="fas fa-fingerprint"></i>
                                    <span>لایه ۲: تله‌متری رفتاری</span>
                                </span>
                                <span class="text-[10px] font-mono px-2 py-0.5 rounded bg-emerald-500/10 text-emerald-300 font-bold">Behavioral AI</span>
                            </div>

                            <div class="flex items-center gap-3 mb-3">
                                <div class="w-12 h-12 rounded-2xl bg-emerald-500/20 border border-emerald-500/40 flex items-center justify-center text-emerald-400 text-xl shrink-0 shadow-md">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                                <div class="text-right">
                                    <h4 class="text-base font-black text-white">ارزیابی الگوهای تعامل انسان</h4>
                                    <span class="text-[11px] text-emerald-400 font-mono font-bold">Telemetry Live Gauges</span>
                                </div>
                            </div>

                            <p class="text-xs text-slate-300 leading-relaxed mb-4 font-normal">
                                اندازه‌گیری بلادرنگ شتاب موس، تاخیر لمس و تعامل کیبورد جهت تشخیص فوق‌سریع انسان واقعی و مسدودسازی آنی اسکریپت‌های Headless بدون کپچای مزاحم.
                            </p>

                            <!-- Live Telemetry Monitor Gauges -->
                            <div class="p-3 rounded-2xl bg-slate-950/80 border border-emerald-500/20 mb-4 text-[11px] space-y-2.5">
                                <div class="flex items-center justify-between">
                                    <span class="text-slate-400">شاخص اطمینان انسانی (Confidence):</span>
                                    <span id="telemetryConfidenceScore" class="font-mono text-emerald-400 font-black">۹۹.۸٪ (انسان)</span>
                                </div>
                                <div class="w-full bg-slate-800 h-1.5 rounded-full overflow-hidden">
                                    <div id="telemetryConfidenceBar" class="bg-gradient-to-r from-emerald-500 to-teal-400 h-full w-[99.8%] transition-all duration-300"></div>
                                </div>
                                <div class="grid grid-cols-2 gap-2 pt-1 text-[10px]">
                                    <div class="p-1.5 rounded-lg bg-slate-900 border border-slate-800 text-slate-300">
                                        <span class="text-slate-500 block">رویدادهای ثبت‌شده:</span>
                                        <span id="telemetryMoveCount" class="font-mono text-emerald-300 font-bold">۱۲۴ رویداد</span>
                                    </div>
                                    <div class="p-1.5 rounded-lg bg-slate-900 border border-slate-800 text-slate-300">
                                        <span class="text-slate-500 block">سرعت تعامل:</span>
                                        <span id="telemetrySpeed" class="font-mono text-emerald-300 font-bold">طبیعی (انسان)</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="p-2.5 rounded-xl bg-emerald-500/10 text-emerald-300 text-xs font-bold text-center border border-emerald-500/20 flex items-center justify-center gap-1.5">
                            <i class="fas fa-bolt text-emerald-400"></i>
                            <span>تله‌متری ۱۰۰٪ روی کلاینت با صفر تاخیر</span>
                        </div>
                    </div>

                    <!-- Pillar 3: Anti-Replay Attack Guard -->
                    <div class="p-6 rounded-3xl bg-slate-900/90 border-2 border-indigo-500/30 hover:border-indigo-400/80 transition-all flex flex-col justify-between shadow-lg relative group">
                        <div class="absolute top-0 left-0 w-24 h-24 bg-indigo-500/10 rounded-full blur-2xl pointer-events-none"></div>
                        <div>
                            <div class="flex items-center justify-between gap-2 mb-4 pb-3 border-b border-slate-800">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-indigo-500/15 text-indigo-400 text-[11px] font-black border border-indigo-500/20">
                                    <i class="fas fa-shield-virus"></i>
                                    <span>لایه ۳: ضد حملات بازپخش</span>
                                </span>
                                <span class="text-[10px] font-mono px-2 py-0.5 rounded bg-indigo-500/10 text-indigo-300 font-bold">HMAC-SHA256</span>
                            </div>

                            <div class="flex items-center gap-3 mb-3">
                                <div class="w-12 h-12 rounded-2xl bg-indigo-500/20 border border-indigo-500/40 flex items-center justify-center text-indigo-400 text-xl shrink-0 shadow-md">
                                    <i class="fas fa-key"></i>
                                </div>
                                <div class="text-right">
                                    <h4 class="text-base font-black text-white">سپر ضد سرقت و ارسال مجدد فرم</h4>
                                    <span class="text-[11px] text-indigo-400 font-mono font-bold">Anti-Replay Token Guard</span>
                                </div>
                            </div>

                            <p class="text-xs text-slate-300 leading-relaxed mb-4 font-normal">
                                تولید توکن‌های امضاشده رمزی یک‌بار مصرف HMAC با عمر محدود ۳۰۰ ثانیه؛ پس از اولین اعتبارسنجی توکن فوراً باطل می‌شود و حملات بات‌نت‌های تکراری دفع می‌گردد.
                            </p>

                            <!-- Live HMAC Token Viewer -->
                            <div class="p-3 rounded-2xl bg-slate-950/80 border border-indigo-500/20 mb-4 text-[11px] space-y-2">
                                <div class="flex items-center justify-between text-slate-400">
                                    <span>توکن کریپتوگرافیک فعال:</span>
                                    <span id="tokenStatusBadge" class="text-emerald-400 font-mono font-bold">Active / Nonce Valid</span>
                                </div>
                                <div class="p-2 rounded-lg bg-slate-900 border border-slate-800 font-mono text-[10px] text-indigo-300 break-all text-left dir-ltr flex items-center justify-between gap-2">
                                    <span id="liveHmacTokenValue">e7c3b91a0f8d42ae887b2190c4fa...</span>
                                    <button type="button" id="copyTokenBtn" class="shrink-0 text-slate-400 hover:text-white" title="کپی توکن">
                                        <i class="fas fa-copy"></i>
                                    </button>
                                </div>
                                <div class="flex items-center justify-between text-[10px] text-slate-400">
                                    <span>انقضا: ۳۰۰ ثانیه</span>
                                    <span class="text-indigo-400">ابطال قطعی پس از ۱ سابمیت</span>
                                </div>
                            </div>
                        </div>

                        <button type="button" id="generateNewHmacBtn" class="w-full py-2.5 px-4 rounded-xl bg-indigo-600/30 hover:bg-indigo-600/40 text-indigo-300 border border-indigo-500/40 font-bold text-xs flex items-center justify-center gap-2 cursor-pointer transition-all">
                            <i class="fas fa-sync-alt"></i>
                            <span>تولید مجدد توکن جدید HMAC</span>
                        </button>
                    </div>

                </div>
            </div>
        </div>

        <!-- Master Switcher Tabs: Captcha Lab vs WP-Login Styler -->
        <div class="flex items-center justify-center gap-3 mb-10 flex-wrap">
            <button type="button" class="studio-main-tab active px-6 py-3.5 rounded-2xl text-xs sm:text-sm font-black transition-all bg-indigo-600 text-white shadow-xl shadow-indigo-600/30 flex items-center gap-2.5 cursor-pointer" data-target="captcha-lab">
                <i class="fas fa-shield-virus text-base"></i>
                <span>۱. آزمایشگاه چالش‌های کپچا (Captcha Lab)</span>
            </button>
            <button type="button" class="studio-main-tab px-6 py-3.5 rounded-2xl text-xs sm:text-sm font-black transition-all bg-slate-900/80 text-slate-400 border border-slate-800 hover:border-amber-500/50 hover:text-amber-300 flex items-center gap-2.5 cursor-pointer" data-target="login-styler">
                <i class="fas fa-palette text-amber-400 text-base"></i>
                <span>۲. استودیوی سفارشی‌ساز فرم ورود (WP-Login Styler)</span>
            </button>
        </div>

        <!-- ====================================================================
             SECTION 1: CAPTCHA PLAYGROUND (Interactive Sandbox)
             ==================================================================== -->
        <div id="captcha-lab-section" class="transition-all duration-300">
            <div class="grid lg:grid-cols-5 gap-8">
                
                <!-- Sidebar Controls: Model Selectors & Tech Specs -->
                <div class="lg:col-span-2 space-y-6">
                    
                    <!-- Select Captcha Model -->
                    <div class="form-card p-6 rounded-3xl bg-[var(--card-current)] border border-[var(--border-current)] shadow-xl">
                        <h3 class="font-black mb-4 text-readable flex items-center gap-2 text-sm">
                            <i class="fas fa-microchip text-indigo-500"></i>
                            <span>انتخاب مدل کپچای امنیتی</span>
                        </h3>
                        <div class="grid gap-2.5">
                            <button class="captcha-model-btn active p-3 rounded-2xl font-black text-xs text-right transition-all bg-indigo-600 text-white shadow-md flex items-center justify-between cursor-pointer" data-model="slider">
                                <span class="flex items-center gap-2">
                                    <span class="text-base">↔️</span>
                                    <span>اسلایدر کشیدنی (Slider Captcha)</span>
                                </span>
                                <span class="text-[10px] px-2 py-0.5 rounded bg-black/20 font-mono">Drag</span>
                            </button>

                            <button class="captcha-model-btn p-3 rounded-2xl font-black text-xs text-right transition-all bg-slate-900/80 text-slate-300 border border-slate-800 hover:border-indigo-500 flex items-center justify-between cursor-pointer" data-model="math">
                                <span class="flex items-center gap-2">
                                    <span class="text-base">🔢</span>
                                    <span>محاسبه هوشمند ریاضی (Math Captcha)</span>
                                </span>
                                <span class="text-[10px] px-2 py-0.5 rounded bg-black/20 font-mono">Numbers</span>
                            </button>

                            <button class="captcha-model-btn p-3 rounded-2xl font-black text-xs text-right transition-all bg-slate-900/80 text-slate-300 border border-slate-800 hover:border-indigo-500 flex items-center justify-between cursor-pointer" data-model="icon_match">
                                <span class="flex items-center gap-2">
                                    <span class="text-base">🎯</span>
                                    <span>تطبیق آیکون ۳ بعدی (Icon Matching)</span>
                                </span>
                                <span class="text-[10px] px-2 py-0.5 rounded bg-black/20 font-mono">Visual 3D</span>
                            </button>

                            <button class="captcha-model-btn p-3 rounded-2xl font-black text-xs text-right transition-all bg-slate-900/80 text-slate-300 border border-slate-800 hover:border-indigo-500 flex items-center justify-between cursor-pointer" data-model="invisible_honeypot">
                                <span class="flex items-center gap-2">
                                    <span class="text-base">👁️‍🗨️</span>
                                    <span>سپر نامرئی و تله هانی‌پات (Honeypot)</span>
                                </span>
                                <span class="text-[10px] px-2 py-0.5 rounded bg-black/20 font-mono">Silent</span>
                            </button>
                        </div>
                    </div>

                    <!-- Technical Specs Card -->
                    <div class="form-card p-6 rounded-3xl bg-[var(--card-current)] border border-[var(--border-current)] shadow-xl">
                        <h3 class="font-black mb-3 text-readable flex items-center gap-2 text-sm">
                            <i class="fas fa-bolt text-amber-400"></i>
                            <span>مشخصات فنی و امنیتی</span>
                        </h3>
                        <p class="text-xs text-muted mb-4 font-medium">مکانیزم‌های ضد نفوذ فعال در هر چالش احراز هویت:</p>
                        <ul class="text-xs text-readable space-y-3">
                            <li class="p-2.5 rounded-xl bg-slate-900/50 border border-slate-800/80 space-y-1">
                                <strong class="text-emerald-400 flex items-center gap-2 font-bold">
                                    <i class="fas fa-check-circle"></i>
                                    <span>قفل صددرصدی فرم:</span>
                                </strong>
                                <p class="text-muted leading-relaxed font-normal text-[11px]">دکمه ارسال تا لحظه تکمیل موفقیت‌آمیز چالش کاملاً غیرفعال و محافظت‌شده است.</p>
                            </li>
                            <li class="p-2.5 rounded-xl bg-slate-900/50 border border-slate-800/80 space-y-1">
                                <strong class="text-indigo-400 flex items-center gap-2 font-bold">
                                    <i class="fas fa-check-circle"></i>
                                    <span>تله‌متری رفتاری و ارزیابی هوشمند:</span>
                                </strong>
                                <p class="text-muted leading-relaxed font-normal text-[11px]">سنجش سرعت درگ، الگوهای حرکتی موس و ابطال توکن جهت دفع حملات بازپخش.</p>
                            </li>
                            <li class="p-2.5 rounded-xl bg-slate-900/50 border border-slate-800/80 space-y-1">
                                <strong class="text-amber-400 flex items-center gap-2 font-bold">
                                    <i class="fas fa-check-circle"></i>
                                    <span>صدای چایم موفقیت (Web Audio API):</span>
                                </strong>
                                <p class="text-muted leading-relaxed font-normal text-[11px]">تولید آنی موج صوتی سینوسی جهت بازخورد لذت‌بخش به کاربر بدون فایل صوتی سنگین.</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Main Interactive Playground Area -->
                <div class="lg:col-span-3">
                    <div class="form-card p-6 md:p-8 rounded-3xl bg-[var(--card-current)] border border-[var(--border-current)] shadow-2xl h-full flex flex-col justify-between">
                        <div>
                            <!-- Playground Header & Context Switcher Tabs -->
                            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-6 pb-5 border-b border-[var(--border-current)]">
                                <div>
                                    <div class="flex items-center gap-2 mb-1">
                                        <div class="w-2.5 h-2.5 rounded-full bg-emerald-400 animate-pulse"></div>
                                        <h2 class="text-lg font-black text-readable">شبیه‌ساز زنده فرم محافظت‌شده</h2>
                                    </div>
                                    <p class="text-xs text-muted font-medium">نوع فرم مقصد را انتخاب کرده و رفتار ضد اسپم را آزمایش نمایید.</p>
                                </div>

                                <!-- Form Context Selector -->
                                <div class="flex items-center p-1 rounded-xl bg-slate-900 border border-slate-800 text-xs">
                                    <button type="button" class="demo-mode-tab active px-3 py-1.5 rounded-lg font-bold transition-all bg-indigo-600 text-white flex items-center gap-1.5 cursor-pointer" data-form-type="checkout">
                                        <i class="fas fa-shopping-cart text-xs"></i>
                                        <span>ووکامرس</span>
                                    </button>
                                    <button type="button" class="demo-mode-tab px-3 py-1.5 rounded-lg font-bold text-slate-400 hover:text-white transition-all flex items-center gap-1.5 cursor-pointer" data-form-type="register">
                                        <i class="fas fa-user-plus text-xs"></i>
                                        <span>عضویت</span>
                                    </button>
                                    <button type="button" class="demo-mode-tab px-3 py-1.5 rounded-lg font-bold text-slate-400 hover:text-white transition-all flex items-center gap-1.5 cursor-pointer" data-form-type="login">
                                        <i class="fas fa-arrow-right-to-bracket text-xs"></i>
                                        <span>ورود</span>
                                    </button>
                                </div>
                            </div>

                            <!-- Interactive Dynamic Form Inputs -->
                            <form id="guardifyDemoForm" onsubmit="return false;" class="space-y-4">
                                <div id="demoFormFields" class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <!-- Dynamic fields rendered via preview-studio.js -->
                                </div>

                                <!-- Security Assurance Badge -->
                                <div class="flex items-center justify-between p-3 rounded-xl bg-indigo-500/10 border border-indigo-500/20 text-[11px] text-indigo-300 font-bold">
                                    <div class="flex items-center gap-2">
                                        <i class="fas fa-shield-halved text-indigo-400"></i>
                                        <span>سپر فعال: توکن یک‌بار مصرف HMAC + حفاظت ۱۰۰٪ آفلاین</span>
                                    </div>
                                    <span class="text-[10px] px-2 py-0.5 rounded-md bg-indigo-500/20 text-indigo-300 font-mono">0ms Latency</span>
                                </div>

                                <!-- CAPTCHA MOUNT POINT -->
                                <div class="pt-2">
                                    <div class="text-[11px] font-black text-readable mb-2 flex items-center justify-between">
                                        <span>چالش احراز هویت انسانی:</span>
                                        <span class="text-[10px] text-muted font-normal">جهت باز شدن دکمه ارسال باید چالش را تکمیل کنید</span>
                                    </div>
                                    <div id="captchaContainerWrapper">
                                        <!-- Interactive Captcha rendered here -->
                                    </div>
                                </div>

                                <!-- Action Buttons -->
                                <div class="pt-2 flex flex-col sm:flex-row items-center gap-3">
                                    <button id="demoSubmitBtn" class="demo-submit-btn flex-grow bg-slate-800 text-slate-400 px-6 py-3.5 rounded-xl font-black text-xs cursor-not-allowed opacity-80" disabled>
                                        <i class="fas fa-lock ml-2"></i>
                                        <span>ارسال امن اطلاعات (قفل شده)</span>
                                    </button>
                                    <button type="button" id="demoResetBtn" class="px-5 py-3.5 rounded-xl border border-[var(--border-current)] bg-[var(--card-current)] hover:border-indigo-500 text-readable text-xs font-bold flex items-center gap-2 transition-all cursor-pointer">
                                        <i class="fas fa-rotate-right text-indigo-400"></i>
                                        <span>تست مجدد</span>
                                    </button>
                                </div>
                            </form>
                        </div>

                        <!-- Live Telemetry Submission Feedback Modal/Card -->
                        <div id="demoSubmissionResult" class="hidden mt-6">
                            <div class="demo-success-card p-5 rounded-2xl bg-emerald-500/10 border border-emerald-500/30 shadow-lg">
                                <div class="flex items-start gap-4">
                                    <div class="w-12 h-12 rounded-2xl bg-emerald-500 text-white flex items-center justify-center text-xl shrink-0 shadow-lg shadow-emerald-500/30">
                                        <i class="fas fa-check-double"></i>
                                    </div>
                                    <div class="flex-grow text-right">
                                        <div class="flex items-center justify-between mb-1">
                                            <h5 class="text-base font-black text-emerald-400">فرم با موفقیت اعتبارسنجی و ثبت گردید!</h5>
                                            <span class="text-[10px] font-mono font-bold px-2 py-0.5 rounded bg-emerald-500/20 text-emerald-400">HTTP 200 OK</span>
                                        </div>
                                        <p class="text-xs text-muted leading-relaxed mb-3 font-medium">
                                            چالش کپچا با موتور داخلی ارزیابی شد، رفتار کلاینت به عنوان انسان تایید گردید و توکن یک‌بار مصرف HMAC جهت جلوگیری از بازپخش ابطال شد.
                                        </p>
                                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-2 text-[10px] font-bold">
                                            <div class="p-2 rounded-xl bg-slate-900 border border-slate-800 text-readable">
                                                <div class="text-muted">زمان راستی‌آزمایی:</div>
                                                <div class="text-emerald-400 font-mono font-black mt-0.5">۶۸ میلی‌ثانیه</div>
                                            </div>
                                            <div class="p-2 rounded-xl bg-slate-900 border border-slate-800 text-readable">
                                                <div class="text-muted">نوع کپچا:</div>
                                                <div class="text-indigo-400 font-black mt-0.5">۱۰۰٪ آفلاین و محلی</div>
                                            </div>
                                            <div class="p-2 rounded-xl bg-slate-900 border border-slate-800 text-readable">
                                                <div class="text-muted">امتیاز انسانیت:</div>
                                                <div class="text-emerald-400 font-mono font-black mt-0.5">۱.۰ (انسان قطعی)</div>
                                            </div>
                                            <div class="p-2 rounded-xl bg-slate-900 border border-slate-800 text-readable">
                                                <div class="text-muted">وابستگی خارجی:</div>
                                                <div class="text-emerald-400 font-black mt-0.5">صفر (Zero External API)</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!-- ====================================================================
             SECTION 2: WP-LOGIN PRO STYLER STUDIO (6 Layouts + Wallpapers)
             ==================================================================== -->
        <div id="login-styler-section" class="hidden transition-all duration-300">
            
            <div class="bg-slate-950/90 border-2 border-indigo-500/30 rounded-[3rem] p-6 md:p-10 shadow-2xl overflow-hidden backdrop-blur-2xl">
                
                <!-- Showcase Header & Controls -->
                <div class="flex flex-col lg:flex-row items-center justify-between gap-6 pb-6 border-b border-slate-800">
                    <div class="flex items-center gap-3 text-right">
                        <div class="w-12 h-12 rounded-2xl bg-gradient-to-tr from-amber-500 via-indigo-600 to-cyan-500 p-0.5 shadow-lg shrink-0">
                            <div class="w-full h-full bg-slate-950 rounded-[14px] flex items-center justify-center text-2xl">
                                🎨
                            </div>
                        </div>
                        <div>
                            <h2 class="font-black text-white text-xl flex items-center gap-2">
                                <span>استودیوی سفارشی‌ساز ورود (WP-Login Styler Studio)</span>
                                <span class="text-amber-400 font-mono text-xs bg-amber-500/10 px-2.5 py-0.5 rounded-full border border-amber-500/20 font-bold">۶ چیدمان زنده</span>
                            </h2>
                            <p class="text-xs text-slate-400 mt-1">تغییر چیدمان، پس‌زمینه‌ها، کپچای تعبیه شده و شبیه‌سازی ورود وردپرس در لحظه</p>
                        </div>
                    </div>

                    <!-- Viewport Sizing Switcher (Desktop, Tablet, Mobile) -->
                    <div class="flex items-center gap-2 bg-slate-900 p-1.5 rounded-2xl border border-slate-800">
                        <span class="text-[11px] font-bold text-slate-400 pr-2">نمایشگر:</span>
                        <button onclick="window.switchViewport('desktop')" id="vp-desktop" class="viewport-btn px-3 py-1.5 rounded-xl text-xs font-bold bg-indigo-600 text-white transition-all cursor-pointer flex items-center gap-1.5" title="نمایش دسکتاپ">
                            <i class="fas fa-desktop"></i>
                            <span class="hidden sm:inline">دسکتاپ</span>
                        </button>
                        <button onclick="window.switchViewport('tablet')" id="vp-tablet" class="viewport-btn px-3 py-1.5 rounded-xl text-xs font-bold text-slate-400 hover:text-white transition-all cursor-pointer flex items-center gap-1.5" title="نمایش تبلت">
                            <i class="fas fa-tablet-screen-button"></i>
                            <span class="hidden sm:inline">تبلت</span>
                        </button>
                        <button onclick="window.switchViewport('mobile')" id="vp-mobile" class="viewport-btn px-3 py-1.5 rounded-xl text-xs font-bold text-slate-400 hover:text-white transition-all cursor-pointer flex items-center gap-1.5" title="نمایش موبایل">
                            <i class="fas fa-mobile-screen-button"></i>
                            <span class="hidden sm:inline">موبایل</span>
                        </button>
                    </div>
                </div>

                <!-- 6 Exact Layout Selector Buttons -->
                <div class="py-4 border-b border-slate-800 flex flex-wrap items-center justify-between gap-3">
                    <div class="text-xs font-bold text-slate-300">چیدمان قالب ورود:</div>
                    <div class="flex items-center gap-1.5 bg-slate-900/90 p-2 rounded-2xl border border-slate-800 flex-wrap justify-center">
                        <button onclick="window.switchLayout('split_screen')" id="btn-split_screen" class="layout-btn-showcase active px-3 py-1.5 rounded-xl text-xs font-bold transition-all bg-amber-500 text-slate-950 shadow-md cursor-pointer">
                            🖼️ اسپلیت دو ستونه (Split)
                        </button>
                        <button onclick="window.switchLayout('centered_card')" id="btn-centered_card" class="layout-btn-showcase px-3 py-1.5 rounded-xl text-xs font-bold text-slate-300 hover:bg-slate-800 transition-all cursor-pointer">
                            🎯 کارت متمرکز شیشه‌ای
                        </button>
                        <button onclick="window.switchLayout('sidebar_right')" id="btn-sidebar_right" class="layout-btn-showcase px-3 py-1.5 rounded-xl text-xs font-bold text-slate-300 hover:bg-slate-800 transition-all cursor-pointer">
                            ➡️ سایدبار راست
                        </button>
                        <button onclick="window.switchLayout('sidebar_left')" id="btn-sidebar_left" class="layout-btn-showcase px-3 py-1.5 rounded-xl text-xs font-bold text-slate-300 hover:bg-slate-800 transition-all cursor-pointer">
                            ⬅️ سایدبار چپ
                        </button>
                        <button onclick="window.switchLayout('floating_split')" id="btn-floating_split" class="layout-btn-showcase px-3 py-1.5 rounded-xl text-xs font-bold text-slate-300 hover:bg-slate-800 transition-all cursor-pointer">
                            💎 کارت شناور دوتکه
                        </button>
                        <button onclick="window.switchLayout('minimal_compact')" id="btn-minimal_compact" class="layout-btn-showcase px-3 py-1.5 rounded-xl text-xs font-bold text-slate-300 hover:bg-slate-800 transition-all cursor-pointer">
                            ⚡ مینیمال فشرده
                        </button>
                    </div>
                </div>

                <!-- Sub-Controls: Wallpapers & Embedded Captchas -->
                <div class="py-4 border-b border-slate-800/80 flex flex-wrap items-center justify-between gap-4 text-xs">
                    <!-- Wallpaper Selector -->
                    <div class="flex items-center gap-2 flex-wrap">
                        <span class="text-slate-300 font-bold">🎨 تم والپیپر:</span>
                        <button onclick="window.switchWallpaper('theme_adaptive')" id="wp-theme_adaptive" class="wp-btn-showcase px-3 py-1.5 rounded-xl font-bold text-[11px] bg-indigo-600/30 text-indigo-300 border border-indigo-500/40 ring-2 ring-amber-400 cursor-pointer">
                            هماهنگ با تم
                        </button>
                        <button onclick="window.switchWallpaper('cyberpunk_dark')" id="wp-cyberpunk_dark" class="wp-btn-showcase px-3 py-1.5 rounded-xl font-bold text-[11px] bg-pink-500/20 text-pink-300 border border-pink-500/30 cursor-pointer">
                            🔮 سایبرپانک
                        </button>
                        <button onclick="window.switchWallpaper('obsidian_gold')" id="wp-obsidian_gold" class="wp-btn-showcase px-3 py-1.5 rounded-xl font-bold text-[11px] bg-amber-500/20 text-amber-300 border border-amber-500/30 cursor-pointer">
                            ⚜️ ابسیدین طلایی
                        </button>
                        <button onclick="window.switchWallpaper('royal_purple')" id="wp-royal_purple" class="wp-btn-showcase px-3 py-1.5 rounded-xl font-bold text-[11px] bg-purple-500/20 text-purple-300 border border-purple-500/30 cursor-pointer">
                            🎆 بنفش سلطنتی
                        </button>
                        <button onclick="window.switchWallpaper('minimal_studio')" id="wp-minimal_studio" class="wp-btn-showcase px-3 py-1.5 rounded-xl font-bold text-[11px] bg-slate-200 text-slate-900 border border-slate-300 cursor-pointer">
                            🔲 استودیو روشن
                        </button>
                    </div>

                    <!-- Captcha Challenge Selector in Login Form -->
                    <div class="flex items-center gap-2 flex-wrap">
                        <span class="text-slate-300 font-bold">🛡️ ویجت کپچای ورود:</span>
                        <button onclick="window.switchCaptcha('slider')" id="cap-slider" class="cap-btn-showcase active px-2.5 py-1.5 rounded-lg font-bold text-[11px] bg-amber-500 text-slate-950 shadow-md cursor-pointer">
                            ↔️ اسلایدر
                        </button>
                        <button onclick="window.switchCaptcha('math')" id="cap-math" class="cap-btn-showcase px-2.5 py-1.5 rounded-lg font-bold text-[11px] bg-slate-800 text-slate-300 border border-slate-700 cursor-pointer">
                            🔢 ریاضی
                        </button>
                        <button onclick="window.switchCaptcha('icon')" id="cap-icon" class="cap-btn-showcase px-2.5 py-1.5 rounded-lg font-bold text-[11px] bg-slate-800 text-slate-300 border border-slate-700 cursor-pointer">
                            👁️ تطبیق آیکون
                        </button>
                    </div>
                </div>

                <!-- Viewport Responsive Frame Wrapper -->
                <div id="stage-viewport-frame" class="studio-viewport-wrapper mt-6 w-full overflow-hidden transition-all duration-300">
                    <!-- Live Stage Display Canvas -->
                    <div id="showcase-canvas-container" class="bg-preset-theme_adaptive p-4 sm:p-8 md:p-12 rounded-[2.5rem] border border-slate-800/80 shadow-2xl relative overflow-hidden transition-all duration-300 min-h-[580px] flex items-center justify-center">
                        <div id="layout-stage" class="w-full transition-all duration-300">
                            <!-- Dynamic Layout HTML injected here via JS -->
                        </div>
                    </div>
                </div>

                <!-- Live Stage Disclaimer Banner (High-Contrast & Readable) -->
                <div id="stage-disclaimer-banner" class="mt-6 p-4 md:p-5 rounded-2xl bg-amber-50 dark:bg-slate-900/90 border border-amber-300 dark:border-amber-500/40 text-xs leading-relaxed font-bold text-right flex items-start gap-3.5 shadow-md transition-all">
                    <span class="text-amber-600 dark:text-amber-400 text-lg shrink-0 mt-0.5"><i class="fas fa-circle-info"></i></span>
                    <div class="space-y-1">
                        <div class="text-amber-900 dark:text-amber-300 font-black">یادداشت پیش‌نمایش چیدمان‌ها (HTML Preview):</div>
                        <p class="text-[11px] md:text-xs text-slate-800 dark:text-slate-300 font-normal leading-relaxed">
                            این بخش جهت تست اولیه استایل‌ها و ترکیب چیدمان در قالب HTML پیاده‌سازی شده است و امکان دارد با محیط اختصاصی قالب وردپرس شما تفاوت‌های جزئی داشته باشد. پردازش امنیتی و استقرار پایدار تنها در هسته وردپرس پس از نصب افزونه گاردفای پرو فعال می‌گردد.
                        </p>
                    </div>
                </div>

                <!-- Studio Telemetry Info Bar -->
                <div class="mt-6 flex flex-col sm:flex-row items-center justify-between gap-4 p-4 rounded-2xl bg-slate-900/90 border border-slate-800 text-xs">
                    <div class="flex items-center gap-2 text-slate-400">
                        <i class="fas fa-sliders text-amber-400"></i>
                        <span id="activePresetInfo" class="font-mono text-amber-300 font-bold">چیدمان: split_screen | تم: theme_adaptive | چالش: slider</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="text-emerald-400 flex items-center gap-1.5">
                            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
                            <span>خروجی آماده ادغام در وردپرس</span>
                        </span>
                    </div>
                </div>

            </div>
        </div>

    </main>

<?php include __DIR__ . "/footer.php"; ?>
