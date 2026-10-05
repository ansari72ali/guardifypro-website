<?php
/**
 * Guardify Pro Main Landing Page
 * Unified with header.php and footer.php
 */
$page_title = "گاردفای پرو Guardify Pro v4.00 | کپچای بومی و سپر ضد نفوذ ورود وردپرس";
$current_page = "home";
include __DIR__ . "/header.php";
?>

<!-- Hero Section -->
    <header id="hero" class="relative pt-32 pb-16 md:pt-36 md:pb-20 overflow-hidden hero-gradient">
        <!-- Ambient Decorative Cyber Nodes in Hero -->
        <div class="absolute top-28 left-8 lg:left-16 pointer-events-none floating opacity-40 hidden sm:block">
            <div class="flex items-center gap-2 px-3.5 py-1.5 rounded-2xl bg-indigo-500/10 border border-indigo-500/20 backdrop-blur-md text-[11px] font-mono text-indigo-300">
                <i class="fas fa-shield-virus text-indigo-400"></i>
                <span>Anti-Spam Shield</span>
            </div>
        </div>
        <div class="absolute bottom-12 right-12 pointer-events-none floating-reverse opacity-40 hidden lg:block">
            <div class="flex items-center gap-2 px-3.5 py-1.5 rounded-2xl bg-emerald-500/10 border border-emerald-500/20 backdrop-blur-md text-[11px] font-mono text-emerald-300">
                <i class="fas fa-key text-emerald-400"></i>
                <span>HMAC Encrypted</span>
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center relative z-10">
            <div class="text-right order-2 lg:order-1 reveal-right">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-indigo-500/10 border border-indigo-500/25 text-xs font-bold text-indigo-400 mb-6 tracking-wide shimmer-badge">
                    <i class="fas fa-shield-halved text-sm"></i>
                    <span>توسعه اختصاصی دِوبان (DevBan)</span>
                    <span class="text-slate-600">·</span>
                    <span class="text-emerald-400 font-mono">Guardify Pro v4.00</span>
                </div>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black leading-[1.25] mb-6 text-readable tracking-tight">
                    کپچای بومی وردپرس و <strong class="bg-gradient-to-r from-indigo-400 via-indigo-300 to-purple-300 bg-clip-text text-transparent">سپر ضد نفوذ ورود</strong>
                </h1>
                <p class="text-muted text-base md:text-lg max-w-xl ml-auto leading-relaxed mb-8 font-normal">
                    دیگر نگران قطعی گوگل ریکپچا و ریزش سبد خرید ووکامرس در زمان اختلال اینترنت نباشید. گاردفای پرو چالش‌های امنیتی (اسلایدر، ریاضی و آیکون) را مستقیماً روی سرور شما و با سرعت میلی‌ثانیه‌ای اجرا می‌کند؛ بدون حتی یک بایت وابستگی خارجی.
                </p>

                <!-- Clean Trust Points -->
                <div class="flex flex-wrap items-center gap-x-5 gap-y-2 text-xs text-readable mb-8 font-medium">
                    <div class="flex items-center gap-2">
                        <i class="fas fa-check-circle text-emerald-400"></i>
                        <span>اجرای ۱۰۰٪ محلی بدون خروج داده</span>
                    </div>
                    <span class="text-slate-600 hidden sm:inline">·</span>
                    <div class="flex items-center gap-2">
                        <i class="fas fa-check-circle text-emerald-400"></i>
                        <span>سازگار با ووکامرس، دکان و المنتور</span>
                    </div>
                    <span class="text-slate-600 hidden sm:inline">·</span>
                    <div class="flex items-center gap-2">
                        <i class="fas fa-check-circle text-emerald-400"></i>
                        <span>۰ میلی‌ثانیه تاخیر خارجی</span>
                    </div>
                </div>

                <div class="flex flex-wrap items-center justify-start gap-4">
                    <a href="/preview.php" class="btn-primary text-white px-8 py-4 rounded-2xl text-sm font-black shadow-xl shadow-indigo-600/30 flex items-center gap-3 group shimmer-badge">
                        <span>ورود به آزمایشگاه زنده و تست چالش‌ها</span>
                        <i class="fas fa-arrow-left group-hover:-translate-x-1.5 transition-transform"></i>
                    </a>
                    <a href="#comparison" class="flex items-center gap-2.5 px-6 py-4 rounded-2xl bg-[var(--card-current)] border border-[var(--border-current)] hover:border-indigo-500/50 text-readable font-bold text-xs backdrop-blur-md shadow-sm transition-all">
                        <i class="fas fa-scale-balanced text-indigo-400"></i>
                        <span>مقایسه فنی با رقبا</span>
                    </a>
                </div>
            </div>

            <!-- Hero Mockup Window -->
            <div class="relative order-1 lg:order-2 reveal-left">
                <div class="floating relative z-10 group">
                    <div class="absolute -inset-10 bg-indigo-500/15 blur-[120px] rounded-full"></div>
                    <div class="relative bg-slate-900/95 dark:bg-[#0c1322] border border-indigo-500/30 rounded-[2.5rem] shadow-2xl overflow-hidden backdrop-blur-2xl">
                        <!-- Browser Window Header -->
                        <div class="px-6 py-4 bg-slate-950/80 border-b border-slate-800/80 flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <div class="w-3 h-3 rounded-full bg-rose-500/80"></div>
                                <div class="w-3 h-3 rounded-full bg-amber-500/80"></div>
                                <div class="w-3 h-3 rounded-full bg-emerald-500/80"></div>
                            </div>
                            <div class="flex items-center gap-2 px-4 py-1 rounded-full bg-slate-900 border border-slate-800 text-[11px] text-slate-400 font-mono" dir="ltr">
                                <i class="fas fa-lock text-emerald-400 text-[9px]"></i>
                                <span>https://yoursite.ir/guardify-security</span>
                            </div>
                            <div class="text-[10px] text-emerald-400 font-bold flex items-center gap-1.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-ping"></span>
                                <span>Online</span>
                            </div>
                        </div>
                        <div class="p-3">
                            <img src="/img/Guardify-Captcha-Pro_result.webp" onerror="this.onerror=null;this.src='https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&w=1000&q=80'" alt="پنل اختصاصی افزونه امنیتی و کپچای آفلاین گاردفای پرو وردپرس" fetchpriority="high" decoding="async" class="w-full h-auto rounded-[2rem] grayscale-[0.2] group-hover:grayscale-0 transition-all duration-700">
                        </div>
                    </div>
                </div>
                <div class="absolute -top-8 -right-8 bg-gradient-to-tr from-indigo-600 to-indigo-500 w-20 h-20 rounded-3xl shadow-xl shadow-indigo-600/40 flex items-center justify-center z-20 animate-spin-slow">
                    <i class="fas fa-microchip text-white text-3xl"></i>
                </div>
            </div>
        </div>
    </header>

    <!-- Cyber Laser Beam Divider -->
    <div class="cyber-beam-divider"></div>

    <!-- Main Content Area for Semantic SEO -->
    <main id="main-content">

    <!-- Statistics & Effectiveness Section -->
    <section id="traffic-stats" class="py-16 md:py-20 relative overflow-hidden reveal">
        <div class="absolute inset-0 pattern-dots"></div>

        <!-- Cyber Radar Rings in Background -->
        <div class="absolute -top-24 -left-24 w-96 h-96 pointer-events-none flex items-center justify-center opacity-30">
            <div class="radar-ring w-64 h-64"></div>
            <div class="radar-ring w-64 h-64"></div>
            <div class="radar-ring w-64 h-64"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="text-center mb-10">
                <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-indigo-500/10 border border-indigo-500/25 text-[11px] font-bold mb-3 text-indigo-400">
                    <i class="fas fa-chart-line text-xs"></i>
                    <span>آمارهای تحلیلی امنیت وب</span>
                </div>
                <h2 class="text-3xl md:text-5xl font-black mb-3 text-readable tracking-tight">آمار حملات ربات‌ها و اثربخشی <span class="text-indigo-400">گاردفای پرو</span></h2>
                <p class="text-muted text-base md:text-lg max-w-3xl mx-auto leading-relaxed">نزدیک به نیمی از ترافیک ارسالی به فرم‌های ثبت‌نام، ورود و سبد خرید وردپرس را بات‌های مخرب تشکیل می‌دهند. گاردفای این بار سنگین را پیش از رسیدن به دیتابیس مهار می‌کند.</p>
            </div>

            <!-- Metric Highlight Badges with Spotlight Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-10 max-w-5xl mx-auto">
                <div class="stat-card spotlight-card p-6 rounded-3xl flex items-center gap-4 text-right">
                    <div class="w-14 h-14 rounded-2xl bg-rose-500/10 text-rose-500 flex items-center justify-center text-2xl shrink-0">
                        <i class="fas fa-robot"></i>
                    </div>
                    <div>
                        <div class="text-2xl font-black text-rose-500 font-mono" dir="ltr">۴۹.۶٪</div>
                        <div class="text-xs text-muted font-bold">سهم بات‌های مخرب از ترافیک وب (گزارش Imperva)</div>
                    </div>
                </div>

                <div class="stat-card spotlight-card p-6 rounded-3xl flex items-center gap-4 text-right">
                    <div class="w-14 h-14 rounded-2xl bg-emerald-500/10 text-emerald-400 flex items-center justify-center text-2xl shrink-0">
                        <i class="fas fa-shield-check"></i>
                    </div>
                    <div>
                        <div class="text-2xl font-black text-emerald-400 font-mono" dir="ltr">۹۹.۴٪</div>
                        <div class="text-xs text-muted font-bold">دفع موفق درخواست‌های اسپم و مخرب</div>
                    </div>
                </div>

                <div class="stat-card spotlight-card p-6 rounded-3xl flex items-center gap-4 text-right">
                    <div class="w-14 h-14 rounded-2xl bg-indigo-500/10 text-indigo-400 flex items-center justify-center text-2xl shrink-0">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <div>
                        <div class="text-2xl font-black text-indigo-400 font-mono" dir="ltr">۰ ms</div>
                        <div class="text-xs text-muted font-bold">تاخیر پردازش محلی چالش‌ها</div>
                    </div>
                </div>
            </div>
            
            <div id="traffic-chart-root" class="w-full bg-[var(--card-current)] border border-[var(--border-current)] p-6 md:p-10 rounded-[3rem] shadow-2xl backdrop-blur-xl min-h-[500px] flex items-center justify-center">
                <div class="text-indigo-500 flex flex-col items-center gap-4">
                    <i class="fas fa-chart-line text-4xl animate-pulse"></i>
                    <span class="text-sm font-bold">در حال بارگذاری تحلیل‌های آماری...</span>
                </div>
            </div>

            <!-- Authentic Citation Footnote -->
            <div class="mt-4 text-center text-xs text-slate-500 dark:text-slate-400 font-medium flex items-center justify-center gap-2">
                <i class="fas fa-info-circle text-indigo-400"></i>
                <span>برگرفته از گزارش جهانی تهدیدات وب Imperva Bad Bot Report و هشدارهای امنیتی وردپرس</span>
            </div>
        </div>
    </section>

    <!-- Cyber Laser Beam Divider -->
    <div class="cyber-beam-divider"></div>

    <!-- Why Guardify Section -->
    <section id="why-guardify" class="py-16 md:py-20 bg-[var(--section-bg-alt)] relative overflow-hidden reveal">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
                <div class="text-right">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-indigo-500/10 border border-indigo-500/25 text-[11px] font-bold mb-3 text-indigo-400">
                        <span>مزیت رقابتی در شرایط واقعی</span>
                    </div>
                    <h2 class="text-3xl md:text-5xl font-black mb-4 leading-tight text-readable">چرا فروشگاه‌های اینترنتی، <strong class="text-indigo-400">کپچای بومی</strong> را انتخاب می‌کنند؟</h2>
                    <p class="text-muted text-base md:text-lg mb-8 leading-relaxed font-normal">هنگامی که اینترنت دچار اختلال، تحریم یا کندی می‌شود، خریداران واقعی پشت درگاه پرداخت معطل می‌مانند. گاردفای پرو طراحی شده تا نرخ خرید و ثبت‌نام سایت شما حتی برای یک لحظه متوقف نشود.</p>
                    
                    <div class="space-y-6">
                        <div class="flex gap-5 items-start p-6 rounded-3xl bg-[var(--card-current)] border border-[var(--border-current)] hover:border-indigo-500/50 transition-all group spotlight-card">
                            <div class="w-14 h-14 rounded-2xl bg-indigo-500/15 flex items-center justify-center text-indigo-400 shrink-0 group-hover:scale-110 transition-transform shadow-md">
                                <i class="fas fa-server text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-black mb-2 text-readable">اجرای ۱۰۰٪ محلی و مستقل از اینترنت بین‌الملل</h3>
                                <p class="text-muted text-sm leading-relaxed">تمام چالش‌ها (اسلایدر، ریاضی و آیکون) توسط هسته افزونه روی هاست خودتان ارزیابی می‌شوند. هیچ نیازی به اتصال به سرورهای گوگل یا کلودفلر وجود ندارد؛ بنابراین فیلترینگ یا تحریم هیچ اثری بر فرم‌های شما نخواهد داشت.</p>
                            </div>
                        </div>

                        <div class="flex gap-5 items-start p-6 rounded-3xl bg-[var(--card-current)] border border-[var(--border-current)] hover:border-emerald-500/50 transition-all group spotlight-card">
                            <div class="w-14 h-14 rounded-2xl bg-emerald-500/15 flex items-center justify-center text-emerald-400 shrink-0 group-hover:scale-110 transition-transform shadow-md">
                                <i class="fas fa-bolt text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-black mb-2 text-readable">حفظ حداکثر سرعت تسویه‌حساب در ووکامرس</h3>
                                <p class="text-muted text-sm leading-relaxed">با حذف اسکریپت‌های حجیم و کدهای سنگین خارجی، زمان لود صفحه تسویه‌حساب کاهش یافته و کاربران واقعی با یک اشاره ساده هویت خود را تایید می‌کنند؛ بدون اینکه با خطاهای اتصال آزاردهنده مواجه شوند.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative reveal-left">
                    <div class="absolute -inset-10 bg-indigo-500/15 blur-[120px] rounded-full"></div>
                    <div class="relative bg-[var(--card-current)] p-8 rounded-[3.5rem] border border-[var(--border-current)] shadow-2xl overflow-hidden backdrop-blur-2xl">
                        <img src="/img/Security-Settings_result.webp" onerror="this.onerror=null;this.src='https://images.unsplash.com/photo-1550751827-4bd374c3f58b?auto=format&fit=crop&w=1000&q=80'" alt="تنظیمات امنیتی و کپچای بومی گاردفای پرو وردپرس" loading="lazy" decoding="async" class="rounded-[2.5rem] opacity-90 hover:opacity-100 transition-opacity duration-700">
                        <div class="mt-6 flex items-center justify-between p-4 rounded-2xl bg-[var(--card-inner)] border border-[var(--border-current)]">
                            <div class="flex items-center gap-3">
                                <div class="w-3 h-3 rounded-full bg-emerald-400 animate-pulse"></div>
                                <span class="text-xs font-bold text-readable">موتور حفاظتی آفلاین فعال</span>
                            </div>
                            <span class="text-[11px] font-mono text-indigo-400 font-bold">100% Local Uptime</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cyber Laser Beam Divider -->
    <div class="cyber-beam-divider"></div>

    <!-- Supported Providers & Smart Hybrid Failover Section -->
    <section id="providers" class="py-16 md:py-20 relative overflow-hidden reveal">
        <div class="absolute inset-0 pattern-grid"></div>
        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-10 md:mb-12">
                <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-indigo-500/10 border border-indigo-500/25 text-[11px] font-bold mb-3 text-indigo-400">
                    <i class="fas fa-network-wired text-xs"></i>
                    <span>معماری چندگانه و هیبریدی (Multi-Provider)</span>
                </div>
                <h2 class="text-3xl md:text-5xl font-black mb-3 text-readable tracking-tight">
                    پشتیبانی از <span class="text-indigo-400">ارائه‌دهندگان جهانی</span> + سوئیچ هوشمند Failover
                </h2>
                <p class="text-muted text-base md:text-lg max-w-3xl mx-auto leading-relaxed">
                    علاوه بر کپچای بومی، می‌توانید از سرویس‌های آنلاین مانند گوگل و کلودفلر هم استفاده کنید. به لطف فناوری <strong class="text-readable">Smart Failover</strong>، با کوچک‌ترین اختلال شبکه، کپچای آفلاین فوراً فعال می‌شود تا خرید کاربر متوقف نشود.
                </p>
            </div>

            <!-- Smart Failover Showcase Banner -->
            <div class="mb-10 md:mb-12 p-1 rounded-[3rem] bg-gradient-to-r from-emerald-500/30 via-indigo-500/30 to-purple-500/30 shadow-2xl">
                <div class="bg-[var(--card-current)] border border-[var(--border-current)] p-8 md:p-12 rounded-[2.8rem] backdrop-blur-2xl text-right">
                    <div class="flex flex-col lg:flex-row items-center justify-between gap-8">
                        <div class="space-y-3 lg:max-w-2xl">
                            <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-emerald-500/20 text-emerald-400 text-xs font-extrabold border border-emerald-500/30">
                                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
                                <span>فناوری اختصاصی Smart Failover</span>
                            </div>
                            <h3 class="text-2xl md:text-3xl font-black text-readable">
                                سوئیچ خودکار به کپچای آفلاین در زمان اختلال اینترنت بین‌الملل
                            </h3>
                            <p class="text-muted text-sm md:text-base leading-relaxed font-normal">
                                اگر ارتباط سرور یا کاربر شما با گوگل، کلودفلر یا اچ‌کپچا به دلیل اختلالات شبکه، فیلترینگ یا تحریم قطع شود، فرم‌های سایت شما هرگز قفل نشده و فوراً <strong class="text-emerald-400">کپچای آفلاین بومی</strong> جایگزین می‌شود.
                            </p>
                        </div>

                        <!-- Interactive Visual Pipeline -->
                        <div class="w-full lg:w-auto flex flex-col sm:flex-row items-center justify-center gap-3 text-xs font-bold shrink-0">
                            <div class="p-4 rounded-2xl bg-[var(--card-inner)] border border-[var(--border-current)] text-center min-w-[130px] shadow-md">
                                <i class="fab fa-google text-amber-400 text-lg mb-1 block"></i>
                                <span class="text-readable">سرویس‌های آنلاین</span>
                                <div class="text-[10px] text-muted mt-0.5">Google / Cloudflare</div>
                            </div>
                            <div class="flex items-center justify-center text-indigo-400 text-base font-black px-1">
                                <i class="fas fa-arrow-left hidden sm:block"></i>
                                <i class="fas fa-arrow-down sm:hidden"></i>
                            </div>
                            <div class="p-4 rounded-2xl bg-indigo-600/30 border border-indigo-500/50 text-center min-w-[130px] shadow-md">
                                <i class="fas fa-bolt text-indigo-400 text-lg mb-1 block animate-pulse"></i>
                                <span class="text-indigo-200">پایش هوشمند</span>
                                <div class="text-[10px] text-indigo-300 mt-0.5">تشخیص آنی قطعی</div>
                            </div>
                            <div class="flex items-center justify-center text-emerald-400 text-base font-black px-1">
                                <i class="fas fa-arrow-left hidden sm:block"></i>
                                <i class="fas fa-arrow-down sm:hidden"></i>
                            </div>
                            <div class="p-4 rounded-2xl bg-emerald-600/30 border border-emerald-500/50 text-center min-w-[130px] shadow-md">
                                <i class="fas fa-shield-halved text-emerald-400 text-lg mb-1 block"></i>
                                <span class="text-emerald-200">کپچای آفلاین بومی</span>
                                <div class="text-[10px] text-emerald-300 mt-0.5">جایگزینی آنی (0ms)</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Providers Grid (4 Cards) -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Provider 1: Google reCAPTCHA v2 -->
                <div class="spotlight-card p-8 rounded-[2.5rem] bg-[var(--card-current)] border border-[var(--border-current)] hover:border-indigo-500 transition-all duration-300 shadow-xl flex flex-col justify-between group backdrop-blur-xl">
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex items-center gap-3">
                                <div class="w-14 h-14 rounded-2xl bg-blue-500/10 text-blue-500 flex items-center justify-center text-2xl shadow-md shrink-0 group-hover:scale-110 transition-transform">
                                    <i class="fab fa-google"></i>
                                </div>
                                <div>
                                    <span class="text-[10px] font-black px-2.5 py-0.5 rounded-full bg-blue-500/10 text-blue-500 border border-blue-500/20">تیک‌دار و نامرئی</span>
                                    <h4 class="text-xl font-black text-readable mt-1">Google reCAPTCHA v2</h4>
                                </div>
                            </div>
                            <a href="https://www.google.com/recaptcha/admin" target="_blank" rel="noopener noreferrer" class="text-xs font-bold text-indigo-500 hover:text-indigo-400 flex items-center gap-1.5 transition-colors">
                                <span>🔗 دریافت کلید v2</span>
                            </a>
                        </div>

                        <p class="text-sm text-muted leading-relaxed mb-4 font-normal">
                            این نسخه شامل باکس <strong class="text-readable">"I'm not a robot"</strong> یا حالت نامرئی v2 است.
                        </p>

                        <div class="p-4 rounded-2xl bg-[var(--card-inner)] border border-[var(--border-current)] text-xs text-muted mb-6 leading-relaxed">
                            <span class="font-bold text-amber-500">💡 راهنما:</span> وارد پنل گوگل شوید، دامنه خود را ثبت کنید و نوع را روی v2 قرار دهید.
                        </div>
                    </div>

                    <div class="pt-5 border-t border-[var(--border-current)] space-y-2">
                        <div class="text-[11px] font-black text-indigo-400 uppercase tracking-wider mb-2">تنظیمات قابل پیکربندی در پنل:</div>
                        <div class="grid grid-cols-2 gap-2 text-xs font-bold">
                            <div class="p-2.5 rounded-xl bg-[var(--card-inner)] text-readable border border-[var(--border-current)] flex items-center gap-2">
                                <i class="fas fa-key text-indigo-400 text-xs"></i>
                                <span>Site Key (v2):</span>
                            </div>
                            <div class="p-2.5 rounded-xl bg-[var(--card-inner)] text-readable border border-[var(--border-current)] flex items-center gap-2">
                                <i class="fas fa-lock text-indigo-400 text-xs"></i>
                                <span>Secret Key (v2):</span>
                            </div>
                            <div class="p-2.5 rounded-xl bg-[var(--card-inner)] text-readable border border-[var(--border-current)] flex items-center gap-2">
                                <i class="fas fa-language text-indigo-400 text-xs"></i>
                                <span>زبان نمایش (Language):</span>
                            </div>
                            <div class="p-2.5 rounded-xl bg-[var(--card-inner)] text-readable border border-[var(--border-current)] flex items-center gap-2">
                                <i class="fas fa-palette text-indigo-400 text-xs"></i>
                                <span>تم ظاهری (Theme):</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Provider 2: Google reCAPTCHA v3 -->
                <div class="spotlight-card p-8 rounded-[2.5rem] bg-[var(--card-current)] border border-[var(--border-current)] hover:border-indigo-500 transition-all duration-300 shadow-xl flex flex-col justify-between group backdrop-blur-xl">
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex items-center gap-3">
                                <div class="w-14 h-14 rounded-2xl bg-indigo-500/10 text-indigo-500 flex items-center justify-center text-2xl shadow-md shrink-0 group-hover:scale-110 transition-transform">
                                    <i class="fas fa-shield-halved"></i>
                                </div>
                                <div>
                                    <span class="text-[10px] font-black px-2.5 py-0.5 rounded-full bg-indigo-500/10 text-indigo-500 border border-indigo-500/20">نامرئی و امتیازی</span>
                                    <h4 class="text-xl font-black text-readable mt-1">🛡️ تنظیمات Google reCAPTCHA v3</h4>
                                </div>
                            </div>
                            <a href="https://www.google.com/recaptcha/admin" target="_blank" rel="noopener noreferrer" class="text-xs font-bold text-indigo-500 hover:text-indigo-400 flex items-center gap-1.5 transition-colors">
                                <span>🔗 دریافت کلید v3</span>
                            </a>
                        </div>

                        <p class="text-sm text-muted leading-relaxed mb-4 font-normal">
                            این نسخه بدون تعامل کاربر و بر اساس آنالیز رفتار کاربری (<strong class="text-readable">Score-based</strong>) کار می‌کند.
                        </p>

                        <div class="p-4 rounded-2xl bg-[var(--card-inner)] border border-[var(--border-current)] text-xs text-muted mb-6 leading-relaxed">
                            <span class="font-bold text-amber-500">💡 راهنما:</span> مشابه v2، در پنل گوگل نوع را روی reCAPTCHA v3 تنظیم کنید.
                        </div>
                    </div>

                    <div class="pt-5 border-t border-[var(--border-current)] space-y-2">
                        <div class="text-[11px] font-black text-indigo-400 uppercase tracking-wider mb-2">تنظیمات قابل پیکربندی در پنل:</div>
                        <div class="grid grid-cols-2 gap-2 text-xs font-bold">
                            <div class="p-2.5 rounded-xl bg-[var(--card-inner)] text-readable border border-[var(--border-current)] flex items-center gap-2">
                                <i class="fas fa-key text-indigo-400 text-xs"></i>
                                <span>Site Key (v3):</span>
                            </div>
                            <div class="p-2.5 rounded-xl bg-[var(--card-inner)] text-readable border border-[var(--border-current)] flex items-center gap-2">
                                <i class="fas fa-lock text-indigo-400 text-xs"></i>
                                <span>Secret Key (v3):</span>
                            </div>
                            <div class="p-2.5 rounded-xl bg-[var(--card-inner)] text-readable border border-[var(--border-current)] flex items-center gap-2">
                                <i class="fas fa-language text-indigo-400 text-xs"></i>
                                <span>زبان داخلی (Language):</span>
                            </div>
                            <div class="p-2.5 rounded-xl bg-[var(--card-inner)] text-readable border border-[var(--border-current)] flex items-center gap-2">
                                <i class="fas fa-sliders text-indigo-400 text-xs"></i>
                                <span>Score Threshold: ۰.۵</span>
                            </div>
                            <div class="p-2 rounded-xl bg-[var(--card-inner)] text-indigo-400 border border-indigo-500/30 text-[11px] col-span-2">
                                <span class="font-bold">آستانه حساسیت (Score Threshold):</span> امتیاز زیر این مقدار به عنوان ربات شناسایی می‌شود (پیش‌فرض ۰.۵).
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Provider 3: Cloudflare Turnstile -->
                <div class="spotlight-card p-8 rounded-[2.5rem] bg-[var(--card-current)] border border-[var(--border-current)] hover:border-indigo-500 transition-all duration-300 shadow-xl flex flex-col justify-between group backdrop-blur-xl">
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex items-center gap-3">
                                <div class="w-14 h-14 rounded-2xl bg-amber-500/10 text-amber-500 flex items-center justify-center text-2xl shadow-md shrink-0 group-hover:scale-110 transition-transform">
                                    <i class="fas fa-cloud"></i>
                                </div>
                                <div>
                                    <span class="text-[10px] font-black px-2.5 py-0.5 rounded-full bg-amber-500/10 text-amber-500 border border-amber-500/20">سریع و مدرن</span>
                                    <h4 class="text-xl font-black text-readable mt-1">☁️ تنظیمات Cloudflare Turnstile</h4>
                                </div>
                            </div>
                            <a href="https://dash.cloudflare.com" target="_blank" rel="noopener noreferrer" class="text-xs font-bold text-indigo-500 hover:text-indigo-400 flex items-center gap-1.5 transition-colors">
                                <span>🔗 دریافت کلید Turnstile</span>
                            </a>
                        </div>

                        <p class="text-sm text-muted leading-relaxed mb-4 font-normal">
                            راهکار بدون اصطکاک و پیشرفته کلودفلر با حفظ کامل حریم خصوصی کاربران و سرعت لود فوق‌العاده.
                        </p>

                        <div class="p-4 rounded-2xl bg-[var(--card-inner)] border border-[var(--border-current)] text-xs text-muted mb-6 leading-relaxed">
                            <span class="font-bold text-amber-500">💡 راهنما:</span> در پنل کلودفلر به بخش Turnstile رفته و یک سایت جدید برای دامنه خود تعریف کنید.
                        </div>
                    </div>

                    <div class="pt-5 border-t border-[var(--border-current)] space-y-2">
                        <div class="text-[11px] font-black text-indigo-400 uppercase tracking-wider mb-2">تنظیمات قابل پیکربندی در پنل:</div>
                        <div class="grid grid-cols-2 gap-2 text-xs font-bold">
                            <div class="p-2.5 rounded-xl bg-[var(--card-inner)] text-readable border border-[var(--border-current)] flex items-center gap-2">
                                <i class="fas fa-key text-indigo-400 text-xs"></i>
                                <span>Site Key:</span>
                            </div>
                            <div class="p-2.5 rounded-xl bg-[var(--card-inner)] text-readable border border-[var(--border-current)] flex items-center gap-2">
                                <i class="fas fa-lock text-indigo-400 text-xs"></i>
                                <span>Secret Key:</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Provider 4: hCaptcha -->
                <div class="spotlight-card p-8 rounded-[2.5rem] bg-[var(--card-current)] border border-[var(--border-current)] hover:border-indigo-500 transition-all duration-300 shadow-xl flex flex-col justify-between group backdrop-blur-xl">
                    <div>
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex items-center gap-3">
                                <div class="w-14 h-14 rounded-2xl bg-purple-500/10 text-purple-500 flex items-center justify-center text-2xl shadow-md shrink-0 group-hover:scale-110 transition-transform">
                                    <i class="fas fa-fingerprint"></i>
                                </div>
                                <div>
                                    <span class="text-[10px] font-black px-2.5 py-0.5 rounded-full bg-purple-500/10 text-purple-500 border border-purple-500/20">امنیت بالا</span>
                                    <h4 class="text-xl font-black text-readable mt-1">🟣 اچ‌کپچا hCaptcha</h4>
                                </div>
                            </div>
                            <a href="https://www.hcaptcha.com" target="_blank" rel="noopener noreferrer" class="text-xs font-bold text-indigo-500 hover:text-indigo-400 flex items-center gap-1.5 transition-colors">
                                <span>🔗 دریافت کلید hCaptcha</span>
                            </a>
                        </div>

                        <p class="text-sm text-muted leading-relaxed mb-4 font-normal">
                            سرویس آنتی‌بات تخصصی با محافظت در برابر بات‌های پیچیده و حفظ حریم خصوصی کاربران.
                        </p>

                        <div class="p-4 rounded-2xl bg-[var(--card-inner)] border border-[var(--border-current)] text-xs text-muted mb-6 leading-relaxed">
                            <span class="font-bold text-amber-500">💡 راهنما:</span> در سایت hCaptcha ثبت‌نام کرده و از بخش کلاینت، Site Key و از بخش تنظیمات حساب، Secret Key را دریافت کنید.
                        </div>
                    </div>

                    <div class="pt-5 border-t border-[var(--border-current)] space-y-2">
                        <div class="text-[11px] font-black text-indigo-400 uppercase tracking-wider mb-2">تنظیمات قابل پیکربندی در پنل:</div>
                        <div class="grid grid-cols-2 gap-2 text-xs font-bold">
                            <div class="p-2.5 rounded-xl bg-[var(--card-inner)] text-readable border border-[var(--border-current)] flex items-center gap-2">
                                <i class="fas fa-key text-indigo-400 text-xs"></i>
                                <span>Site Key:</span>
                            </div>
                            <div class="p-2.5 rounded-xl bg-[var(--card-inner)] text-readable border border-[var(--border-current)] flex items-center gap-2">
                                <i class="fas fa-lock text-indigo-400 text-xs"></i>
                                <span>Secret Key:</span>
                            </div>
                            <div class="p-2.5 rounded-xl bg-[var(--card-inner)] text-readable border border-[var(--border-current)] flex items-center gap-2">
                                <i class="fas fa-brush text-indigo-400 text-xs"></i>
                                <span>پوسته و تم hCaptcha:</span>
                            </div>
                            <div class="p-2.5 rounded-xl bg-[var(--card-inner)] text-readable border border-[var(--border-current)] flex items-center gap-2">
                                <i class="fas fa-expand text-indigo-400 text-xs"></i>
                                <span>اندازه ویجت hCaptcha:</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cyber Laser Beam Divider -->
    <div class="cyber-beam-divider"></div>

    <!-- Comparison Table Section -->
    <section id="comparison" class="py-16 md:py-20 relative overflow-hidden reveal">
        <div class="absolute inset-0 pattern-grid"></div>
        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="text-center mb-10 md:mb-12">
                <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-indigo-500/10 border border-indigo-500/25 text-[11px] font-bold mb-3 text-indigo-400">
                    <span>جدول مقایسه فنی و عملکردی</span>
                </div>
                <h2 class="text-3xl md:text-5xl font-black mb-3 text-readable tracking-tight">مقایسه فنی: <span class="text-indigo-400">گاردفای پرو</span> در برابر کپچاهای خارجی</h2>
                <p class="text-muted text-base md:text-lg max-w-2xl mx-auto">چرا مدیران فروشگاه‌های ووکامرس برای حفظ پایداری خرید و سرعت تسویه‌حساب به یک راهکار بومی و بدون واسطه متکی می‌شوند؟</p>
            </div>

            <div class="overflow-x-auto">
                <div class="min-w-[800px] p-1.5 rounded-[3rem] bg-gradient-to-br from-indigo-500/30 via-transparent to-purple-500/20 border border-indigo-500/30 shadow-2xl">
                    <table class="comparison-table text-right rounded-[2.8rem] overflow-hidden bg-[var(--card-current)]">
                        <thead>
                            <tr>
                                <th class="rounded-tr-[2.5rem] text-right py-6 px-8 text-base">ویژگی و پارامتر فنی</th>
                                <th class="comparison-col-highlight text-center py-6 px-8 text-base text-indigo-400">
                                    <div class="inline-flex items-center gap-2">
                                        <i class="fas fa-shield-halved text-indigo-500"></i>
                                        <span>Guardify Pro (بومی)</span>
                                    </div>
                                </th>
                                <th class="rounded-tl-[2.5rem] competitor-header text-center py-6 px-8 text-base font-extrabold text-readable">کپچاهای آنلاین خارجی (reCAPTCHA / hCaptcha)</th>
                            </tr>
                        </thead>
                        <tbody class="text-readable text-sm font-medium">
                            <tr>
                                <td class="font-bold py-5 px-8">پایداری در شبکه ملی و شرایط اختلال</td>
                                <td class="comparison-col-highlight text-center">
                                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-500/15 text-emerald-500 font-bold text-xs">
                                        <i class="fas fa-check-circle"></i>
                                        <span>۱۰۰٪ پایدار و بدون وقفه</span>
                                    </span>
                                </td>
                                <td class="text-center competitor-col">
                                    <span class="competitor-badge-danger">
                                        <i class="fas fa-times-circle"></i>
                                        <span>از کار افتادن و خطای اتصال</span>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="font-bold py-5 px-8">سرعت بارگذاری اولیه و TTFB</td>
                                <td class="comparison-col-highlight text-center text-emerald-500 font-bold">
                                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-emerald-500/15 text-emerald-500 font-bold text-xs">
                                        <i class="fas fa-bolt"></i>
                                        <span>آنی و بدون ریکوئست خارجی (0ms)</span>
                                    </span>
                                </td>
                                <td class="text-center competitor-col font-semibold">
                                    <span class="inline-flex items-center gap-1.5 text-readable">
                                        <i class="fas fa-hourglass-half text-amber-500 text-xs"></i>
                                        <span>همراه با تاخیر ۵۰۰ تا ۲۰۰۰ میلی‌ثانیه</span>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="font-bold py-5 px-8">قابلیت کارکرد آفلاین و محلی</td>
                                <td class="comparison-col-highlight text-center text-emerald-500 font-black text-base">
                                    <i class="fas fa-check-circle text-emerald-500 text-lg"></i>
                                </td>
                                <td class="text-center competitor-col">
                                    <div class="inline-flex items-center justify-center w-7 h-7 rounded-full bg-rose-500/15 text-rose-500 text-sm">
                                        <i class="fas fa-times"></i>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="font-bold py-5 px-8">حریم خصوصی و عدم ارسال داده به خارج</td>
                                <td class="comparison-col-highlight text-center">
                                    <span class="inline-flex items-center gap-1 px-3 py-1 rounded-full bg-indigo-500/15 text-indigo-400 font-bold text-xs">
                                        <i class="fas fa-user-shield"></i>
                                        <span>حفظ کامل اطلاعات کاربران</span>
                                    </span>
                                </td>
                                <td class="text-center competitor-col font-semibold">
                                    <span class="inline-flex items-center gap-1.5 text-readable">
                                        <i class="fas fa-cloud-arrow-up text-rose-400 text-xs"></i>
                                        <span>ارسال داده به سرورهای خارجی</span>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="font-bold py-5 px-8">تنوع مدل‌ها (ریاضی، اسلایدر، آیکون، هانی‌پات)</td>
                                <td class="comparison-col-highlight text-center text-emerald-500 font-bold">
                                    <span>۴ مدل متنوع با قابلیت تغییر پویا</span>
                                </td>
                                <td class="text-center competitor-col font-semibold">
                                    <span class="inline-flex items-center gap-1.5 text-readable">
                                        <i class="fas fa-images text-indigo-400 text-xs"></i>
                                        <span>تک‌مدلی و محدود به تصاویر پیچیده</span>
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Cyber Laser Beam Divider -->
    <div class="cyber-beam-divider"></div>

    <!-- Interactive Preview Hub & Studio Referral Section (Lightweight & High-Performance) -->
    <section id="preview" class="py-16 md:py-24 bg-[var(--section-bg-alt)] border-y border-[var(--border-current)] relative overflow-hidden reveal">
        <div class="absolute inset-0 pattern-grid opacity-10"></div>
        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-12 md:mb-16">
                <div class="demo-badge mb-4">
                    <span>🔬</span>
                    <span>آزمایشگاه زنده و استودیوی مستقل گاردفای</span>
                </div>
                <h2 class="text-3xl md:text-5xl font-black mb-4 text-readable tracking-tight">
                    پیش‌نمایش زنده چالش‌های کپچا و <span class="text-indigo-400">استودیوی ورود وردپرس</span>
                </h2>
                <p class="text-muted text-base md:text-lg max-w-3xl mx-auto leading-relaxed">
                    جهت افزایش چشمگیر سرعت بارگذاری صفحه اصلی و ارتقای امتیاز Core Web Vitals، محیط‌های شبیه‌ساز زنده به صفحه اختصاصی منتقل شده‌اند. برای تست آنلاین چالش‌ها و ۶ چیدمان قالب ورود وارد آزمایشگاه شوید.
                </p>
            </div>

            <!-- Two Interactive Feature Cards (Side-by-Side Showcase) -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">
                
                <!-- Teaser Card 1: Captcha Playground -->
                <div class="p-8 md:p-10 rounded-[2.5rem] bg-gradient-to-br from-white via-indigo-50/40 to-slate-50 dark:from-[var(--card-current)] dark:to-[var(--card-current)] border-2 border-indigo-300 dark:border-indigo-500/30 hover:border-indigo-500 dark:hover:border-indigo-400 shadow-2xl transition-all duration-300 flex flex-col justify-between group relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-32 h-32 bg-indigo-500/10 rounded-full blur-3xl pointer-events-none"></div>
                    
                    <div>
                        <div class="flex items-center justify-between mb-6 pb-4 border-b border-[var(--border-current)]">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 rounded-2xl bg-indigo-500/20 border border-indigo-500/40 flex items-center justify-center text-indigo-500 dark:text-indigo-400 text-2xl shadow-lg">
                                    <i class="fas fa-microchip"></i>
                                </div>
                                <div class="text-right">
                                    <h3 class="text-xl font-black text-readable">آزمایشگاه چالش‌های کپچا</h3>
                                    <p class="text-xs text-indigo-600 dark:text-indigo-400 font-bold mt-0.5">Captcha Interactive Lab</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 rounded-full bg-indigo-100 dark:bg-indigo-500/20 text-indigo-800 dark:text-indigo-300 border border-indigo-200 dark:border-transparent text-xs font-mono font-bold">۴ مدل چالش</span>
                        </div>

                        <p class="text-muted text-xs md:text-sm leading-relaxed mb-6 font-medium">
                            تست زنده اسلایدر کشیدنی، محاسبه ریاضی، تطبیق آیکون ۳ بعدی و سپر نامرئی با اعتبارسنجی ۱۰۰٪ آفلاین، بدون قطعی در زمان اختلال اینترنت بین‌الملل.
                        </p>

                        <!-- 3 Core Security Pillars + Challenge Models Badges -->
                        <div class="mb-4">
                            <div class="text-[11px] font-black text-indigo-700 dark:text-indigo-400 mb-2 flex items-center gap-1.5">
                                <i class="fas fa-shield-halved text-xs"></i>
                                <span>معماری امنیتی ۳ لایه (همیشه فعال):</span>
                            </div>
                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-2 text-xs font-bold mb-3">
                                <div class="p-2.5 rounded-xl bg-amber-50 border border-amber-200 text-amber-900 dark:bg-amber-500/10 dark:border-amber-500/30 dark:text-amber-300 flex items-center gap-2 font-bold shadow-xs">
                                    <span class="text-sm">🍯</span>
                                    <span>تله نامرئی هانی‌پات</span>
                                </div>
                                <div class="p-2.5 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-900 dark:bg-emerald-500/10 dark:border-emerald-500/30 dark:text-emerald-300 flex items-center gap-2 font-bold shadow-xs">
                                    <span class="text-sm">⚡</span>
                                    <span>تله‌متری رفتاری</span>
                                </div>
                                <div class="p-2.5 rounded-xl bg-indigo-50 border border-indigo-200 text-indigo-950 dark:bg-indigo-500/10 dark:border-indigo-500/30 dark:text-indigo-300 flex items-center gap-2 font-bold shadow-xs">
                                    <span class="text-sm">🛡️</span>
                                    <span>ضد حملات بازپخش</span>
                                </div>
                            </div>
                        </div>

                        <!-- Visual Challenge Models Pills -->
                        <div class="grid grid-cols-2 gap-2 mb-6 text-xs font-bold">
                            <div class="p-2.5 rounded-xl bg-indigo-50/90 border border-indigo-200/80 text-slate-800 dark:bg-slate-900/60 dark:border-slate-800 dark:text-slate-200 flex items-center gap-2 font-bold shadow-xs">
                                <span class="text-sm">↔️</span>
                                <span>اسلایدر کشیدنی ضد ربات</span>
                            </div>
                            <div class="p-2.5 rounded-xl bg-indigo-50/90 border border-indigo-200/80 text-slate-800 dark:bg-slate-900/60 dark:border-slate-800 dark:text-slate-200 flex items-center gap-2 font-bold shadow-xs">
                                <span class="text-sm">🔢</span>
                                <span>محاسبه هوشمند ریاضی</span>
                            </div>
                            <div class="p-2.5 rounded-xl bg-indigo-50/90 border border-indigo-200/80 text-slate-800 dark:bg-slate-900/60 dark:border-slate-800 dark:text-slate-200 flex items-center gap-2 font-bold shadow-xs">
                                <span class="text-sm">🎯</span>
                                <span>تطبیق آیکون ۳ بعدی</span>
                            </div>
                            <div class="p-2.5 rounded-xl bg-indigo-50/90 border border-indigo-200/80 text-slate-800 dark:bg-slate-900/60 dark:border-slate-800 dark:text-slate-200 flex items-center gap-2 font-bold shadow-xs">
                                <span class="text-sm">👁️‍🗨️</span>
                                <span>سپر نامرئی و بدون تعامل</span>
                            </div>
                        </div>

                        <!-- Highlights Banner -->
                        <div class="p-3.5 rounded-2xl bg-emerald-50 dark:bg-emerald-500/10 border border-emerald-200 dark:border-emerald-500/20 text-emerald-900 dark:text-emerald-400 text-xs font-bold flex items-center justify-between mb-6 shadow-xs">
                            <span class="flex items-center gap-2">
                                <i class="fas fa-check-circle text-emerald-600 dark:text-emerald-400"></i>
                                <span>توکن یک‌بار مصرف HMAC + تله‌متری صفر ثانیه‌ای کلاینت</span>
                            </span>
                            <span class="font-mono text-[11px] bg-emerald-200/70 dark:bg-emerald-500/20 text-emerald-950 dark:text-emerald-300 px-2 py-0.5 rounded font-black">0ms Latency</span>
                        </div>
                    </div>

                    <a href="/preview.php#captcha-lab" class="w-full py-4 px-6 rounded-2xl bg-indigo-600 hover:bg-indigo-500 text-white font-black text-xs md:text-sm text-center shadow-xl shadow-indigo-600/30 flex items-center justify-center gap-2 group-hover:scale-[1.01] transition-all cursor-pointer">
                        <span>ورود به آزمایشگاه و تست زنده چالش‌ها</span>
                        <i class="fas fa-arrow-left group-hover:-translate-x-1.5 transition-transform"></i>
                    </a>
                </div>

                <!-- Teaser Card 2: WP-Login Styler Studio -->
                <div class="p-8 md:p-10 rounded-[2.5rem] bg-gradient-to-br from-white via-amber-50/40 to-slate-50 dark:from-[var(--card-current)] dark:to-[var(--card-current)] border-2 border-amber-300 dark:border-amber-500/30 hover:border-amber-500 dark:hover:border-amber-400 shadow-2xl transition-all duration-300 flex flex-col justify-between group relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-amber-500/10 rounded-full blur-3xl pointer-events-none"></div>

                    <div>
                        <div class="flex items-center justify-between mb-6 pb-4 border-b border-[var(--border-current)]">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 rounded-2xl bg-amber-500/20 border border-amber-500/40 flex items-center justify-center text-amber-500 dark:text-amber-400 text-2xl shadow-lg">
                                    <i class="fas fa-palette"></i>
                                </div>
                                <div class="text-right">
                                    <h3 class="text-xl font-black text-readable">استودیوی سفارشی‌ساز ورود</h3>
                                    <p class="text-xs text-amber-600 dark:text-amber-400 font-bold mt-0.5">WP-Login Pro Styler Studio</p>
                                </div>
                            </div>
                            <span class="px-3 py-1 rounded-full bg-amber-100 dark:bg-amber-500/20 text-amber-900 dark:text-amber-300 border border-amber-200 dark:border-transparent text-xs font-mono font-bold">۶ چیدمان زنده</span>
                        </div>

                        <p class="text-muted text-xs md:text-sm leading-relaxed mb-6 font-medium">
                            شخصی‌سازی زنده ظاهر فرم ورود وردپرس، تغییر چیدمان (اسپلیت، سایدبار، کارت شیشه‌ای)، انتخاب والپیپرهای مدرن و تعبیه کپچای امنیتی در فرم.
                        </p>

                        <!-- Visual Layout Options Pills -->
                        <div class="grid grid-cols-2 gap-2.5 mb-6 text-xs font-bold">
                            <div class="p-3 rounded-xl bg-amber-50/90 border border-amber-200/80 text-slate-800 dark:bg-slate-900/60 dark:border-slate-800 dark:text-slate-200 flex items-center gap-2 font-bold shadow-xs">
                                <span class="text-base">🖼️</span>
                                <span>اسپلیت دو ستونه (Split)</span>
                            </div>
                            <div class="p-3 rounded-xl bg-amber-50/90 border border-amber-200/80 text-slate-800 dark:bg-slate-900/60 dark:border-slate-800 dark:text-slate-200 flex items-center gap-2 font-bold shadow-xs">
                                <span class="text-base">🎯</span>
                                <span>کارت شیشه‌ای متمرکز</span>
                            </div>
                            <div class="p-3 rounded-xl bg-amber-50/90 border border-amber-200/80 text-slate-800 dark:bg-slate-900/60 dark:border-slate-800 dark:text-slate-200 flex items-center gap-2 font-bold shadow-xs">
                                <span class="text-base">➡️</span>
                                <span>سایدبار راست و چپ</span>
                            </div>
                            <div class="p-3 rounded-xl bg-amber-50/90 border border-amber-200/80 text-slate-800 dark:bg-slate-900/60 dark:border-slate-800 dark:text-slate-200 flex items-center gap-2 font-bold shadow-xs">
                                <span class="text-base">💎</span>
                                <span>کارت شناور دوتکه مجلل</span>
                            </div>
                        </div>

                        <!-- Wallpaper & Viewport Badge -->
                        <div class="p-3.5 rounded-2xl bg-amber-50 dark:bg-amber-500/10 border border-amber-200 dark:border-amber-500/20 text-amber-900 dark:text-amber-300 text-xs font-bold flex items-center justify-between mb-6 shadow-xs">
                            <span class="flex items-center gap-2">
                                <i class="fas fa-shield-halved text-amber-600 dark:text-amber-400"></i>
                                <span>۵ تم والپیپر + تست ابعاد در موبایل و تبلت</span>
                            </span>
                            <span class="font-mono text-[11px] bg-amber-200/70 dark:bg-amber-500/20 text-amber-950 dark:text-amber-300 px-2 py-0.5 rounded font-black">Responsive</span>
                        </div>
                    </div>

                    <a href="/preview.php#login-styler" class="w-full py-4 px-6 rounded-2xl bg-gradient-to-r from-amber-500 via-amber-600 to-amber-500 hover:from-amber-400 hover:to-amber-500 text-slate-950 font-black text-xs md:text-sm text-center shadow-xl shadow-amber-500/30 flex items-center justify-center gap-2 group-hover:scale-[1.01] transition-all cursor-pointer">
                        <span>ورود به استودیو و شخصی‌سازی فرم ورود</span>
                        <i class="fas fa-arrow-left group-hover:-translate-x-1.5 transition-transform"></i>
                    </a>
                </div>

            </div>

            <!-- Master Highlight Referral Banner (Prominent & High-Converting) -->
            <div id="studio-referral-banner" class="p-8 md:p-12 rounded-[2.5rem] md:rounded-[3rem] text-center relative overflow-hidden transition-all duration-300 shadow-2xl bg-gradient-to-br from-white via-indigo-50/90 to-purple-50/80 border-2 border-indigo-400/50 dark:from-slate-950 dark:via-indigo-950 dark:to-slate-950 dark:border-indigo-500/50">
                <div class="studio-glow-1 absolute -top-24 -right-24 w-72 h-72 rounded-full blur-3xl pointer-events-none bg-indigo-500/15 dark:bg-indigo-500/25"></div>
                <div class="studio-glow-2 absolute -bottom-24 -left-24 w-72 h-72 rounded-full blur-3xl pointer-events-none bg-purple-500/15 dark:bg-purple-500/25"></div>

                <div class="relative z-10 max-w-3xl mx-auto space-y-6">
                    <div class="studio-badge inline-flex items-center gap-2 px-4 py-2 rounded-full text-xs font-black shadow-sm transition-colors bg-indigo-100/90 text-indigo-950 border border-indigo-300 dark:bg-indigo-500/20 dark:text-indigo-200 dark:border-indigo-500/40">
                        <i class="fas fa-rocket text-indigo-600 dark:text-indigo-400"></i>
                        <span class="font-extrabold text-indigo-950 dark:text-indigo-200">انتقال به آزمایشگاه اختصاصی و استودیوی مستقل</span>
                    </div>

                    <h3 class="studio-title text-2xl md:text-4xl font-black leading-snug tracking-tight text-slate-900 dark:text-white transition-colors">
                        محیط زنده و پرسرعت برای تست تمامی قابلیت‌های گاردفای پرو
                    </h3>

                    <p class="studio-desc text-sm md:text-base leading-relaxed font-medium text-slate-700 dark:text-slate-300 max-w-2xl mx-auto transition-colors">
                        برای جلوگیری از بارگذاری اسکریپت‌های سنگین در صفحه اصلی و تجربه سریع‌تر کاربران، کلیه تعاملات زنده فرم‌های ووکامرس، ثبت‌نام، ورود، محاسبه ریاضی، درگ اسلایدر و تغییر چیدمان‌ها در صفحه اختصاصی استودیو بهینه‌سازی شده‌اند.
                    </p>

                    <div class="pt-2 flex flex-col sm:flex-row items-center justify-center gap-4">
                        <a href="/preview.php" class="studio-btn-primary w-full sm:w-auto px-8 py-4 rounded-2xl font-black text-sm flex items-center justify-center gap-3 transition-all hover:scale-105 cursor-pointer bg-gradient-to-r from-indigo-600 via-indigo-600 to-purple-600 hover:from-indigo-500 hover:to-purple-500 text-white shadow-xl shadow-indigo-600/30">
                            <i class="fas fa-flask-vial text-white"></i>
                            <span class="text-white">ورود به آزمایشگاه زنده (Live Demo Studio)</span>
                            <i class="fas fa-arrow-left text-white"></i>
                        </a>
                        <a href="/preview.php#login-styler" class="studio-btn-secondary w-full sm:w-auto px-8 py-4 rounded-2xl font-bold text-sm flex items-center justify-center gap-2 transition-all hover:scale-105 cursor-pointer bg-amber-50 hover:bg-amber-100 text-amber-950 border-2 border-amber-500 shadow-lg shadow-amber-500/20 dark:bg-slate-900 dark:hover:bg-slate-800 dark:text-amber-300 dark:border-amber-500/50">
                            <i class="fas fa-palette text-amber-600 dark:text-amber-400"></i>
                            <span class="text-amber-950 dark:text-amber-300">استودیوی فرم ورود (WP-Login Styler)</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Cyber Laser Beam Divider -->
    <div class="cyber-beam-divider"></div>

    <!-- Guardify Modern Login UI & Security Shields (WP-Login Pro) -->
    <section id="wp-login-pro" class="py-16 md:py-24 bg-[var(--bg-current)] relative overflow-hidden reveal">
        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-12 md:mb-16">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-rose-500/10 border border-rose-500/30 text-xs font-black mb-4 text-rose-400 uppercase tracking-widest shadow-sm">
                    <i class="fas fa-shield-virus text-rose-500"></i>
                    <span>معرفی امکانات WP-Login Pro • گاردفای پرو v4.00 (DevBan)</span>
                </div>
                <h2 class="text-3xl md:text-5xl font-black mb-4 text-readable">
                    سپر امنیتی ورود + <span class="text-amber-400">والپیپرهای گرادیانی مدرن</span>
                </h2>
                <p class="text-muted text-base md:text-lg max-w-3xl mx-auto leading-relaxed">
                    شخصی‌سازی کامل ظاهر فرم‌های ورود/عضویت/بازیابی کلمه عبور، افکت‌های نوری پس‌زمینه بدون تصویر سنگین و اعمال سپرهای امنیتی ضد نفوذ وردپرس.
                </p>

                <!-- Disclaimer Banner for Login Form -->
                <div class="mt-6 bg-indigo-500/10 border border-indigo-500/20 rounded-2xl p-4 max-w-3xl mx-auto text-xs leading-relaxed text-indigo-400 font-bold">
                    <span class="text-amber-500">📌 توجه:</span> این صفحه صرفاً پیش‌نمایش رابط کاربری در قالب یک فایل HTML مستقل است و در پیش‌نمایش مقداری اختلاف نمایش با افزونه وجود دارد. تمامی اعتبارسنجی‌های امنیتی، رمزنگاری هش‌های HMAC، تله‌های هانی‌پات و سنجش نرخ درخواست در هسته افزونه وردپرس و محیط عملیاتی اجرا می‌شوند.
                </div>
            </div>

            <!-- Top Highlight Banner: Core Security Shields (BOLD & PROMINENT) -->
            <div class="login-hardening-banner p-8 md:p-10 rounded-[2.5rem] bg-gradient-to-br from-rose-950/40 via-slate-900/90 to-slate-950 border-2 border-rose-500/40 shadow-2xl backdrop-blur-2xl mb-12 relative overflow-hidden">
                <div class="absolute -top-24 -left-24 w-72 h-72 bg-rose-500/20 rounded-full blur-3xl pointer-events-none"></div>
                
                <div class="flex items-center gap-3 mb-6 pb-4 border-b border-rose-500/30 login-hardening-header">
                    <div class="w-12 h-12 rounded-2xl bg-rose-500/20 border border-rose-500/40 flex items-center justify-center text-rose-400 text-2xl shadow-lg login-hardening-icon">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <div>
                        <h3 class="text-xl md:text-2xl font-black text-white flex items-center gap-2 login-hardening-title">
                            <span>🛡️ سپرهای امنیتی اختصاصی فرم‌های ورود (Login Hardening Shields)</span>
                        </h3>
                        <p class="text-xs text-rose-300 font-bold mt-1 login-hardening-subtitle">استانداردهای ضد نفوذ، ضد بروت‌فورس (Brute-Force) و جلوگیری از اسکن نام کاربری</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    
                    <!-- Security Feature 1 -->
                    <div class="login-hardening-card p-6 rounded-2xl bg-slate-900/80 border border-rose-500/30 shadow-lg space-y-3 relative group hover:border-rose-400 transition-all">
                        <div class="flex items-center justify-between">
                            <span class="w-8 h-8 rounded-xl bg-rose-500/20 text-rose-400 font-black flex items-center justify-center text-sm card-num">۱</span>
                            <span class="px-2.5 py-1 rounded-lg bg-rose-500/20 text-rose-300 text-[10px] font-black font-mono card-badge">Anti-Brute Force</span>
                        </div>
                        <h4 class="text-base font-black text-rose-400 leading-snug card-title">🔒 پنهان‌سازی خطاهای تفکیکی وردپرس (Generic Login Error Messages)</h4>
                        <p class="text-xs text-slate-200 leading-relaxed card-desc">
                            <strong>جلوگیری قطعی از تشخیص اشتباه بودن نام کاربری یا کلمه عبور؛</strong> پیام خطای ورودی به صورت عمومی صادر شده تا مهاجمین و ربات‌های خودکار نتوانند وجود داشتن اکانت‌های مدیریتی را تشخیص دهند.
                        </p>
                    </div>

                    <!-- Security Feature 2 -->
                    <div class="login-hardening-card p-6 rounded-2xl bg-slate-900/80 border border-rose-500/30 shadow-lg space-y-3 relative group hover:border-rose-400 transition-all">
                        <div class="flex items-center justify-between">
                            <span class="w-8 h-8 rounded-xl bg-rose-500/20 text-rose-400 font-black flex items-center justify-center text-sm card-num">۲</span>
                            <span class="px-2.5 py-1 rounded-lg bg-rose-500/20 text-rose-300 text-[10px] font-black font-mono card-badge">User Enumeration</span>
                        </div>
                        <h4 class="text-base font-black text-rose-400 leading-snug card-title">👤 غیرفعال‌سازی اسکن نام کاربری (User Enumeration Guard)</h4>
                        <p class="text-xs text-slate-200 leading-relaxed card-desc">
                            <strong>مسدودسازی کامل کوئری‌های author و اسکن ربات‌ها؛</strong> مانع از شناسایی نام کاربری مدیران اصلی وردپرس از طریق پارامترهای URL یا درخواست‌های رباتیک می‌شود.
                        </p>
                    </div>

                    <!-- Security Feature 3 -->
                    <div class="login-hardening-card p-6 rounded-2xl bg-slate-900/80 border border-rose-500/30 shadow-lg space-y-3 relative group hover:border-rose-400 transition-all">
                        <div class="flex items-center justify-between">
                            <span class="w-8 h-8 rounded-xl bg-rose-500/20 text-rose-400 font-black flex items-center justify-center text-sm card-num">۳</span>
                            <span class="px-2.5 py-1 rounded-lg bg-rose-500/20 text-rose-300 text-[10px] font-black font-mono card-badge">XML-RPC Shield</span>
                        </div>
                        <h4 class="text-base font-black text-rose-400 leading-snug card-title">⚡ مسدودسازی کامل XML-RPC (Disable XML-RPC Attacks)</h4>
                        <p class="text-xs text-slate-200 leading-relaxed card-desc">
                            <strong>غیرفعال‌سازی متد سیستماتیک xmlrpc.php؛</strong> خنثی‌سازی حملات آمپلی‌فای شده و تست هزاران پسورد در ثانیه از طریق فایل XML-RPC.
                        </p>
                    </div>

                    <!-- Security Feature 4 -->
                    <div class="login-hardening-card p-6 rounded-2xl bg-slate-900/80 border border-rose-500/30 shadow-lg space-y-3 relative group hover:border-rose-400 transition-all">
                        <div class="flex items-center justify-between">
                            <span class="w-8 h-8 rounded-xl bg-rose-500/20 text-rose-400 font-black flex items-center justify-center text-sm card-num">۴</span>
                            <span class="px-2.5 py-1 rounded-lg bg-rose-500/20 text-rose-300 text-[10px] font-black font-mono card-badge">REST API Lock</span>
                        </div>
                        <h4 class="text-base font-black text-rose-400 leading-snug card-title">🚫 قفل کردن REST API برای کاربران ناشناس</h4>
                        <p class="text-xs text-slate-200 leading-relaxed card-desc">
                            <strong>محدودسازی دسترسی متدهای حساس endpoint کاربران؛</strong> جلوگیری از استخراج لیست کارمندان و مدیران از طریق REST API بدون احراز هویت.
                        </p>
                    </div>

                    <!-- Security Feature 5 -->
                    <div class="login-hardening-card p-6 rounded-2xl bg-slate-900/80 border border-rose-500/30 shadow-lg space-y-3 relative group hover:border-rose-400 transition-all">
                        <div class="flex items-center justify-between">
                            <span class="w-8 h-8 rounded-xl bg-rose-500/20 text-rose-400 font-black flex items-center justify-center text-sm card-num">۵</span>
                            <span class="px-2.5 py-1 rounded-lg bg-rose-500/20 text-rose-300 text-[10px] font-black font-mono card-badge">Custom Login Slug</span>
                        </div>
                        <h4 class="text-base font-black text-rose-400 leading-snug card-title">🔀 آدرس اختصاصی صفحه ورود (Custom Login Slug Alias)</h4>
                        <p class="text-xs text-slate-200 leading-relaxed card-desc">
                            <strong>تغییر آدرس wp-login.php به اسلاگ دلخواه (مانند my-secret-gate)؛</strong> مسدودسازی تمام درخواست‌های مستقیم به `wp-login.php` و صادر کردن خطای HTTP 404 یا دایرکت امن.
                        </p>
                    </div>

                    <!-- Security Feature 6 -->
                    <div class="login-hardening-card p-6 rounded-2xl bg-slate-900/80 border border-rose-500/30 shadow-lg space-y-3 relative group hover:border-rose-400 transition-all">
                        <div class="flex items-center justify-between">
                            <span class="w-8 h-8 rounded-xl bg-rose-500/20 text-rose-400 font-black flex items-center justify-center text-sm card-num">۶</span>
                            <span class="px-2.5 py-1 rounded-lg bg-rose-500/20 text-rose-300 text-[10px] font-black font-mono card-badge">Rate Limiting</span>
                        </div>
                        <h4 class="text-base font-black text-rose-400 leading-snug card-title">🛑 سیستم هوشمند محدودسازی تلاش‌های ناموفق و مسدودی IP</h4>
                        <p class="text-xs text-slate-200 leading-relaxed card-desc">
                            <strong>تعریف حداکثر ۵ تلاش ناموفق مجاز و مسدودی اتوماتیک ۳۰ دقیقه‌ای؛</strong> همراه با توکن‌های یک‌بار مصرف HMAC Anti-Replay جهت خنثی‌سازی حملات تکرار.
                        </p>
                    </div>

                </div>
            </div>

            <!-- WP-Login Styler Studio Referral Showcase Banner (Lightweight & High-Impact) -->
            <div id="login-styler-live-showcase" class="mb-16 bg-slate-950/90 border-2 border-amber-500/30 rounded-[3rem] p-6 md:p-10 shadow-2xl overflow-hidden backdrop-blur-2xl relative">
                <div class="absolute -top-24 -left-24 w-72 h-72 bg-amber-500/10 rounded-full blur-3xl pointer-events-none"></div>

                <div class="flex flex-col lg:flex-row items-center justify-between gap-6 pb-6 border-b border-slate-800 relative z-10">
                    <div class="flex items-center gap-3 text-right">
                        <div class="w-12 h-12 rounded-2xl bg-gradient-to-tr from-amber-500 via-indigo-600 to-cyan-500 p-0.5 shadow-lg shrink-0">
                            <div class="w-full h-full bg-slate-950 rounded-[14px] flex items-center justify-center text-2xl">
                                🎨
                            </div>
                        </div>
                        <div>
                            <h3 class="font-black text-white text-xl flex items-center gap-2">
                                <span>استودیوی سفارشی‌ساز ورود (WP-Login Styler Studio)</span>
                                <span class="text-amber-400 font-mono text-xs bg-amber-500/10 px-2.5 py-0.5 rounded-full border border-amber-500/20 font-bold">۶ چیدمان زنده</span>
                            </h3>
                            <p class="text-xs text-slate-400 mt-1">تست زنده ۶ قالب ورود وردپرس، تم‌های والپیپر و ویجت‌های کپچا در صفحه اختصاصی استودیو</p>
                        </div>
                    </div>

                    <a href="/preview.php#login-styler" class="px-6 py-3.5 rounded-2xl bg-gradient-to-r from-amber-500 via-amber-600 to-amber-500 hover:from-amber-400 hover:to-amber-500 text-slate-950 font-black text-xs shadow-xl shadow-amber-500/30 flex items-center gap-2 transition-all hover:scale-105 cursor-pointer">
                        <i class="fas fa-palette"></i>
                        <span>ورود به استودیوی تست ۶ قالب ورود</span>
                        <i class="fas fa-arrow-left"></i>
                    </a>
                </div>

                <!-- Showcase Preview Grid (Visual Teasers of 6 Layouts) -->
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3 py-6 relative z-10">
                    <a href="/preview.php#login-styler" class="layout-teaser-card p-3.5 rounded-2xl bg-slate-900/80 border border-slate-800 hover:border-amber-500/50 hover:bg-slate-900 transition-all text-center group cursor-pointer">
                        <div class="text-2xl mb-1.5 group-hover:scale-110 transition-transform">🖼️</div>
                        <div class="layout-teaser-title text-xs font-black text-white">اسپلیت دو ستونه</div>
                        <div class="layout-teaser-subtitle text-[10px] text-muted mt-0.5 font-mono">Split Screen</div>
                    </a>
                    <a href="/preview.php#login-styler" class="layout-teaser-card p-3.5 rounded-2xl bg-slate-900/80 border border-slate-800 hover:border-amber-500/50 hover:bg-slate-900 transition-all text-center group cursor-pointer">
                        <div class="text-2xl mb-1.5 group-hover:scale-110 transition-transform">🎯</div>
                        <div class="layout-teaser-title text-xs font-black text-white">کارت شیشه‌ای</div>
                        <div class="layout-teaser-subtitle text-[10px] text-muted mt-0.5 font-mono">Centered Glass</div>
                    </a>
                    <a href="/preview.php#login-styler" class="layout-teaser-card p-3.5 rounded-2xl bg-slate-900/80 border border-slate-800 hover:border-amber-500/50 hover:bg-slate-900 transition-all text-center group cursor-pointer">
                        <div class="text-2xl mb-1.5 group-hover:scale-110 transition-transform">➡️</div>
                        <div class="layout-teaser-title text-xs font-black text-white">سایدبار راست</div>
                        <div class="layout-teaser-subtitle text-[10px] text-muted mt-0.5 font-mono">Right Sidebar</div>
                    </a>
                    <a href="/preview.php#login-styler" class="layout-teaser-card p-3.5 rounded-2xl bg-slate-900/80 border border-slate-800 hover:border-amber-500/50 hover:bg-slate-900 transition-all text-center group cursor-pointer">
                        <div class="text-2xl mb-1.5 group-hover:scale-110 transition-transform">⬅️</div>
                        <div class="layout-teaser-title text-xs font-black text-white">سایدبار چپ</div>
                        <div class="layout-teaser-subtitle text-[10px] text-muted mt-0.5 font-mono">Left Sidebar</div>
                    </a>
                    <a href="/preview.php#login-styler" class="layout-teaser-card p-3.5 rounded-2xl bg-slate-900/80 border border-slate-800 hover:border-amber-500/50 hover:bg-slate-900 transition-all text-center group cursor-pointer">
                        <div class="text-2xl mb-1.5 group-hover:scale-110 transition-transform">💎</div>
                        <div class="layout-teaser-title text-xs font-black text-white">کارت شناور دوتکه</div>
                        <div class="layout-teaser-subtitle text-[10px] text-muted mt-0.5 font-mono">Floating Split</div>
                    </a>
                    <a href="/preview.php#login-styler" class="layout-teaser-card p-3.5 rounded-2xl bg-slate-900/80 border border-slate-800 hover:border-amber-500/50 hover:bg-slate-900 transition-all text-center group cursor-pointer">
                        <div class="text-2xl mb-1.5 group-hover:scale-110 transition-transform">⚡</div>
                        <div class="layout-teaser-title text-xs font-black text-white">مینیمال فشرده</div>
                        <div class="layout-teaser-subtitle text-[10px] text-muted mt-0.5 font-mono">Compact Minimal</div>
                    </a>
                </div>

                <!-- Footer Bar with Direct Studio Link -->
                <div class="pt-4 border-t border-slate-800/80 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs relative z-10">
                    <div class="flex items-center gap-2 text-slate-300">
                        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
                        <span>آماده تغییرات آنی والپیپر (سایبرپانک، ابسیدین، استودیو) و تست در ابعاد موبایل</span>
                    </div>
                    <a href="/preview.php#login-styler" class="text-amber-400 hover:text-amber-300 font-black flex items-center gap-1.5 transition-colors">
                        <span>ورود به استودیو جهت تست تعاملی</span>
                        <i class="fas fa-arrow-left"></i>
                    </a>
                </div>
            </div>

            <!-- Features Overview Grid: Layouts, Wallpapers, Local Fonts, Remember Me & Customization -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Feature Group 1: Layout Architecture -->
                <div class="bg-[var(--card-current)] border border-[var(--border-current)] rounded-[2.5rem] p-8 shadow-2xl space-y-5">
                    <div class="flex items-center gap-3 pb-4 border-b border-[var(--border-current)]">
                        <div class="w-10 h-10 rounded-xl bg-amber-500/20 border border-amber-500/30 flex items-center justify-center text-amber-400 text-lg">
                            <i class="fas fa-shapes"></i>
                        </div>
                        <div>
                            <h3 class="font-black text-readable text-lg">📐 ساختار بصری و چیدمان‌ها</h3>
                            <span class="text-xs text-muted">۶ مدل چیدمان حرفه‌ای صفحه ورود</span>
                        </div>
                    </div>
                    <div class="space-y-3 text-xs">
                        <div class="p-3 rounded-xl bg-[var(--card-inner)] border border-[var(--border-current)] flex items-center gap-3">
                            <span class="text-lg">🎯</span>
                            <div>
                                <strong class="text-readable font-black block">کارت متمرکز وسط</strong>
                                <span class="text-muted">کارت شیشه‌ای مدرن در مرکز صفحه</span>
                            </div>
                        </div>
                        <div class="p-3 rounded-xl bg-[var(--card-inner)] border border-[var(--border-current)] flex items-center gap-3">
                            <span class="text-lg">🌗</span>
                            <div>
                                <strong class="text-readable font-black block">اسپلیت اسکرین (دو تکه)</strong>
                                <span class="text-muted">پنل ورود در یک سو + بنر خوش‌آمدگویی</span>
                            </div>
                        </div>
                        <div class="p-3 rounded-xl bg-[var(--card-inner)] border border-[var(--border-current)] flex items-center gap-3">
                            <span class="text-lg">📑</span>
                            <div>
                                <strong class="text-readable font-black block">سایدبار راست / چپ</strong>
                                <span class="text-muted">فرم شناور متصل به سمت راست یا چپ</span>
                            </div>
                        </div>
                        <div class="p-3 rounded-xl bg-[var(--card-inner)] border border-[var(--border-current)] flex items-center gap-3">
                            <span class="text-lg">✨</span>
                            <div>
                                <strong class="text-readable font-black block">دو کارت معلق لوکس</strong>
                                <span class="text-muted">فرم ورود در کنار کارت نمادین امنیتی</span>
                            </div>
                        </div>
                        <div class="p-3 rounded-xl bg-[var(--card-inner)] border border-[var(--border-current)] flex items-center gap-3">
                            <span class="text-lg">🕊️</span>
                            <div>
                                <strong class="text-readable font-black block">کارت فشرده مینیمال</strong>
                                <span class="text-muted">ساختار سبک و جمع‌وجور بدون حاشیه اضافی</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Feature Group 2: Wallpapers & Mesh Glow Presets -->
                <div class="bg-[var(--card-current)] border border-[var(--border-current)] rounded-[2.5rem] p-8 shadow-2xl space-y-5">
                    <div class="flex items-center gap-3 pb-4 border-b border-[var(--border-current)]">
                        <div class="w-10 h-10 rounded-xl bg-indigo-500/20 border border-indigo-500/30 flex items-center justify-center text-indigo-400 text-lg">
                            <i class="fas fa-palette"></i>
                        </div>
                        <div>
                            <h3 class="font-black text-readable text-lg">🌌 والپیپرها و جلوه‌های Mesh Glow</h3>
                            <span class="text-xs text-muted">بیش از ۳۵ تم پویا، گرادیانت و افکت نوری</span>
                        </div>
                    </div>
                    <p class="text-xs text-muted leading-relaxed">
                        انتخاب تم رنگی و جلوه‌های نوری محیطی متحرک (Mesh Glow) با سرعت لود آنی بدون تصویر سنگین:
                    </p>
                    <div class="grid grid-cols-2 gap-2 text-[11px]">
                        <span class="p-2 rounded-lg bg-[var(--card-inner)] border border-[var(--border-current)] text-readable font-bold flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-emerald-400"></span> Aurora Neon</span>
                        <span class="p-2 rounded-lg bg-[var(--card-inner)] border border-[var(--border-current)] text-readable font-bold flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-amber-400"></span> مشکی ابسیدین و طلا</span>
                        <span class="p-2 rounded-lg bg-[var(--card-inner)] border border-[var(--border-current)] text-readable font-bold flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-pink-400"></span> سایبرپانک صورتی/آبی</span>
                        <span class="p-2 rounded-lg bg-[var(--card-inner)] border border-[var(--border-current)] text-readable font-bold flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-rose-500"></span> زرشکی مخملی</span>
                        <span class="p-2 rounded-lg bg-[var(--card-inner)] border border-[var(--border-current)] text-readable font-bold flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-blue-500"></span> سرمه‌ای شاهانه</span>
                        <span class="p-2 rounded-lg bg-[var(--card-inner)] border border-[var(--border-current)] text-readable font-bold flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-yellow-400"></span> طلای ۲۴ عیار خالص</span>
                        <span class="p-2 rounded-lg bg-[var(--card-inner)] border border-[var(--border-current)] text-readable font-bold flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-sky-400"></span> یخی بلورین قطبی</span>
                        <span class="p-2 rounded-lg bg-[var(--card-inner)] border border-[var(--border-current)] text-readable font-bold flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-slate-300"></span> متال پلاتینیوم و استیل</span>
                    </div>
                </div>

                <!-- Feature Group 3: Local Fonts & Text Customization -->
                <div class="bg-[var(--card-current)] border border-[var(--border-current)] rounded-[2.5rem] p-8 shadow-2xl space-y-5">
                    <div class="flex items-center gap-3 pb-4 border-b border-[var(--border-current)]">
                        <div class="w-10 h-10 rounded-xl bg-emerald-500/20 border border-emerald-500/30 flex items-center justify-center text-emerald-400 text-lg">
                            <i class="fas fa-font"></i>
                        </div>
                        <div>
                            <h3 class="font-black text-readable text-lg">🔤 تایپوگرافی بومی و ویرایشگر متون</h3>
                            <span class="text-xs text-muted">۱۰۰٪ آفلاین و بدون وابستگی به گوگل</span>
                        </div>
                    </div>
                    <div class="space-y-3 text-xs">
                        <div class="p-3 rounded-xl bg-[var(--card-inner)] border border-[var(--border-current)]">
                            <strong class="text-readable font-black block mb-1">فونت‌های محلی قرار داده شده در افزونه:</strong>
                            <p class="text-muted">استفاده مستقیم از تایپوفس‌های محلی و بومی قرار داده شده در افزونه بدون هیچ فراخوانی به سرورهای خارجی و ۱۰۰٪ آفلاین.</p>
                        </div>
                        <div class="p-3 rounded-xl bg-[var(--card-inner)] border border-[var(--border-current)]">
                            <strong class="text-readable font-black block mb-1">ویرایش متون بنر خوش‌آمدگویی (Hero Section):</strong>
                            <p class="text-muted">ویرایش کامل متن نشان، تیتر اصلی، زیرتیتر توضیحی، ۳ ویژگی اختصاصی و متن نوار امنیتی پایین بنر.</p>
                        </div>
                        <div class="p-3 rounded-xl bg-[var(--card-inner)] border border-[var(--border-current)]">
                            <strong class="text-readable font-black block mb-1">ارث‌بری اختصاصی تم کپچا:</strong>
                            <p class="text-muted">کپچای فرم‌های ورود به صورت یکپارچه از تم صفحه لاگین ارث‌بری می‌کنند.</p>
                        </div>
                    </div>
                </div>

                <!-- Feature Group 4: Remember Me & Links Controls -->
                <div class="bg-[var(--card-current)] border border-[var(--border-current)] rounded-[2.5rem] p-8 shadow-2xl space-y-5 lg:col-span-3">
                    <div class="flex items-center gap-3 pb-4 border-b border-[var(--border-current)]">
                        <div class="w-10 h-10 rounded-xl bg-purple-500/20 border border-purple-500/30 flex items-center justify-center text-purple-400 text-lg">
                            <i class="fas fa-link"></i>
                        </div>
                        <div>
                            <h3 class="font-black text-readable text-lg">🛡️ مدیریت «مرا به خاطر بسپار»، تول‌تیپ و پیوندهای پاورقی</h3>
                            <span class="text-xs text-muted">مدیریت کامل لینک‌ها، نشان‌ها و پاورقی صفحه ورود</span>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 text-xs">
                        <div class="p-4 rounded-2xl bg-[var(--card-inner)] border border-[var(--border-current)] space-y-2">
                            <strong class="text-readable font-black flex items-center gap-2"><i class="fas fa-eye-slash text-rose-400"></i><span>حذف «مرا به خاطر بسپار»</span></strong>
                            <p class="text-muted text-[11px] leading-relaxed">امکان مخفی‌سازی و غیرفعال‌سازی گزینه ذخیره نشست جهت افزایش امنیت در سیستم‌های عمومی.</p>
                        </div>

                        <div class="p-4 rounded-2xl bg-[var(--card-inner)] border border-[var(--border-current)] space-y-2">
                            <strong class="text-readable font-black flex items-center gap-2"><i class="fas fa-circle-info text-amber-400"></i><span>تول‌تیپ راهنمای امنیتی</span></strong>
                            <p class="text-muted text-[11px] leading-relaxed">نمایش باکس راهنمایی هنگام قرارگیری ماوس با متن هشدار سفارشی.</p>
                        </div>

                        <div class="p-4 rounded-2xl bg-[var(--card-inner)] border border-[var(--border-current)] space-y-2">
                            <strong class="text-readable font-black flex items-center gap-2"><i class="fas fa-house-slash text-indigo-400"></i><span>حذف لینک بازگشت به سایت</span></strong>
                            <p class="text-muted text-[11px] leading-relaxed">مخفی‌سازی کامل پیوند «→ رفتن به صفحه اصلی» در زیر فرم ورود جهت ساختار مینیمال.</p>
                        </div>

                        <div class="p-4 rounded-2xl bg-[var(--card-inner)] border border-[var(--border-current)] space-y-2">
                            <strong class="text-readable font-black flex items-center gap-2"><i class="fas fa-globe-slash text-emerald-400"></i><span>حذف انتخابگر زبان وردپرس</span></strong>
                            <p class="text-muted text-[11px] leading-relaxed">حذف دراپ‌داون زبان وردپرس و مدیریت نوار قوانین، حریم خصوصی و پشتیبانی.</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Login Form Screenshots & Visual Showcase Gallery -->
            <div class="mt-12 bg-[var(--card-current)] border border-[var(--border-current)] rounded-[2.5rem] p-8 md:p-10 shadow-2xl space-y-6">
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 pb-6 border-b border-[var(--border-current)]">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 rounded-2xl bg-amber-500/20 border border-amber-500/30 flex items-center justify-center text-amber-400 text-2xl shadow-lg">
                            <i class="fas fa-images"></i>
                        </div>
                        <div>
                            <h3 class="text-xl md:text-2xl font-black text-readable">🖼️ گالری تصاویر و نمونه‌قالب‌های صفحه ورود (WP-Login Pro)</h3>
                            <p class="text-xs text-muted mt-1">پیش‌نمایش طراحی‌های مدرن شیشه‌ای، والپیپرهای گرادیانی و ساختارهای بصری لاگین</p>
                        </div>
                    </div>
                    <span class="px-3 py-1.5 rounded-full bg-amber-500/10 border border-amber-500/30 text-amber-400 text-xs font-black self-start md:self-auto flex items-center gap-1.5">
                        <i class="fas fa-expand text-xs"></i> <span>برای بزرگنمایی روی تصاویر کلیک کنید</span>
                    </span>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    
                    <!-- Gallery Item 1: Centered Card + Aurora Neon -->
                    <div class="screenshot-card group relative overflow-hidden rounded-2xl border border-[var(--border-current)] bg-[var(--card-inner)] transition-all duration-300 hover:border-amber-500">
                        <div class="relative aspect-video overflow-hidden">
                            <a href="/img/Guardify-Captcha-Pro_result.webp" class="glightbox block" data-gallery="wplogin-gallery" data-title="کارت متمرکز وسط + والپیپر Aurora Neon">
                                <img src="/img/Guardify-Captcha-Pro_result.webp" alt="طراحی کارت متمرکز وسط صفحه ورود با والپیپر شفق قطبی نئونی" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <div class="absolute inset-0 bg-amber-600/30 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                    <div class="w-10 h-10 rounded-full bg-slate-900/90 text-amber-400 flex items-center justify-center text-base shadow-xl">
                                        <i class="fas fa-magnifying-glass-plus"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="p-4 text-right">
                            <span class="text-[10px] font-black px-2 py-0.5 rounded bg-amber-500/20 text-amber-400 inline-block mb-1">🎯 کارت متمرکز وسط</span>
                            <h4 class="text-sm font-black text-readable">والپیپر Aurora Neon</h4>
                            <p class="text-[11px] text-muted mt-1 leading-relaxed">چیدمان متوازن مرکزی همراه با چالش امنیتی.</p>
                        </div>
                    </div>

                    <!-- Gallery Item 2: Split Screen + Welcome Banner -->
                    <div class="screenshot-card group relative overflow-hidden rounded-2xl border border-[var(--border-current)] bg-[var(--card-inner)] transition-all duration-300 hover:border-amber-500">
                        <div class="relative aspect-video overflow-hidden">
                            <a href="/img/Themes_result.webp" class="glightbox block" data-gallery="wplogin-gallery" data-title="چیدمان اسپلیت اسکرین + بنر خوش‌آمدگویی">
                                <img src="/img/Themes_result.webp" alt="چیدمان اسپلیت اسکرین فرم لاگین با بنر معرفی و کادر ورود" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <div class="absolute inset-0 bg-amber-600/30 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                    <div class="w-10 h-10 rounded-full bg-slate-900/90 text-amber-400 flex items-center justify-center text-base shadow-xl">
                                        <i class="fas fa-magnifying-glass-plus"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="p-4 text-right">
                            <span class="text-[10px] font-black px-2 py-0.5 rounded bg-indigo-500/20 text-indigo-400 inline-block mb-1">🌗 اسپلیت اسکرین</span>
                            <h4 class="text-sm font-black text-readable">پنل دو تکه + بنر معرفی اختصاصی</h4>
                            <p class="text-[11px] text-muted mt-1 leading-relaxed">نمایش بنر خوش‌آمدگویی و ویژگی‌ها در یک سو و فرم ورود در سوی دیگر.</p>
                        </div>
                    </div>

                    <!-- Gallery Item 3: Security Settings & Hardening -->
                    <div class="screenshot-card group relative overflow-hidden rounded-2xl border border-[var(--border-current)] bg-[var(--card-inner)] transition-all duration-300 hover:border-amber-500">
                        <div class="relative aspect-video overflow-hidden">
                            <a href="/img/Security-Settings_result.webp" class="glightbox block" data-gallery="wplogin-gallery" data-title="تنظیمات سپرهای امنیتی لاگین">
                                <img src="/img/Security-Settings_result.webp" alt="پیشخوان تنظیمات سپرهای امنیتی و ورود اختصاصی" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <div class="absolute inset-0 bg-amber-600/30 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                    <div class="w-10 h-10 rounded-full bg-slate-900/90 text-amber-400 flex items-center justify-center text-base shadow-xl">
                                        <i class="fas fa-magnifying-glass-plus"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="p-4 text-right">
                            <span class="text-[10px] font-black px-2 py-0.5 rounded bg-rose-500/20 text-rose-400 inline-block mb-1">🛡️ سپرهای امنیتی ورود</span>
                            <h4 class="text-sm font-black text-readable">کنترل آدرس اختصاصی و خطاهای عمومی</h4>
                            <p class="text-[11px] text-muted mt-1 leading-relaxed">تنظیم اسلاگ ورود اختصاصی و فعال‌سازی خطاهای تفکیکی غیرقابل تشخیص.</p>
                        </div>
                    </div>

                    <!-- Gallery Item 4: Realtime Logs & Multi Layouts -->
                    <div class="screenshot-card group relative overflow-hidden rounded-2xl border border-[var(--border-current)] bg-[var(--card-inner)] transition-all duration-300 hover:border-amber-500">
                        <div class="relative aspect-video overflow-hidden">
                            <a href="/img/Logs_result.webp" class="glightbox block" data-gallery="wplogin-gallery" data-title="لاگ زنده نشست‌ها و تلاش‌های لاگین">
                                <img src="/img/Logs_result.webp" alt="مانیتورینگ زنده نشست‌های ورود و پایش IPهای مسدود شده" loading="lazy" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                                <div class="absolute inset-0 bg-amber-600/30 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                    <div class="w-10 h-10 rounded-full bg-slate-900/90 text-amber-400 flex items-center justify-center text-base shadow-xl">
                                        <i class="fas fa-magnifying-glass-plus"></i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="p-4 text-right">
                            <span class="text-[10px] font-black px-2 py-0.5 rounded bg-emerald-500/20 text-emerald-400 inline-block mb-1">📊 لاگ‌های امنیتی</span>
                            <h4 class="text-sm font-black text-readable">پایش لحظه‌ای نشست‌ها و مسدودی IP</h4>
                            <p class="text-[11px] text-muted mt-1 leading-relaxed">ثبت دقیق تلاش‌های ورود نا‌موفق و مسدودی خودکار مهاجمان.</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- Cyber Laser Beam Divider -->
    <div class="cyber-beam-divider"></div>

    <!-- Plugin Environment Slider -->
    <section id="environment" class="py-16 md:py-20 bg-[var(--section-bg-alt)] border-y border-[var(--border-current)] relative overflow-hidden reveal">
        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="text-center mb-10 md:mb-12">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-indigo-500/10 border border-indigo-500/25 text-xs font-black mb-4 text-indigo-400 uppercase tracking-widest shadow-sm">
                    <i class="fas fa-desktop"></i>
                    <span>تصاویر پنل مدیریت اختصاصی و مانیتورینگ زنده</span>
                </div>
                <h2 class="text-3xl md:text-5xl font-black mb-3 text-readable">
                    نگاهی به <span class="text-indigo-500">پنل تنظیمات اختصاصی</span> و محیط افزونه
                </h2>
                <p class="text-muted text-base md:text-lg max-w-2xl mx-auto">
                    سادگی در عین قدرت؛ پایش لحظه‌ای سلامت شبکه، مدیریت سوئیچر هوشمند و کنترل رفتارهای امنیتی.
                </p>
            </div>
            
            <div class="swiper environment-swiper">
                <div class="swiper-wrapper">
                    <!-- Slide 1: Smart Captcha Switcher & Failover Dashboard -->
                    <div class="swiper-slide">
                        <div class="screenshot-card group">
                            <div class="relative overflow-hidden">
                                <a href="/img/Smart-Captcha-Failover_result.webp" class="glightbox block">
                                    <img src="/img/Smart-Captcha-Failover_result.webp" onerror="this.onerror=null;this.src='https://images.unsplash.com/photo-1581291518633-83b4ebd1d83e?auto=format&fit=crop&w=1200&q=80'" alt="پنل هوشمند نظارت و سیستم سوییچر خودکار کپچا (Smart Failover) گاردفای پرو" loading="lazy" decoding="async" class="w-full aspect-video object-cover group-hover:scale-105 transition-transform duration-500">
                                    <div class="absolute inset-0 bg-indigo-600/20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                        <div class="w-12 h-12 rounded-full bg-slate-900/90 text-white flex items-center justify-center text-lg shadow-xl">
                                            <i class="fas fa-magnifying-glass-plus"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="screenshot-card-body text-right">
                                <div>
                                    <div class="flex items-center gap-2 mb-3">
                                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-lg bg-indigo-500/15 border border-indigo-500/30 text-indigo-400 text-xs font-black">
                                            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
                                            سوییچر هوشمند کپچا
                                        </span>
                                        <span class="text-xs text-indigo-300 font-bold">داشبورد زنده پایش شبکه</span>
                                    </div>
                                    <h4 class="text-xl font-black mb-3 text-readable">پنل هوشمند نظارت و سوییچر خودکار</h4>
                                    <p class="text-muted text-sm leading-relaxed font-normal mb-5">
                                        پایش بلادرنگ سلامت شبکه و ارائه‌دهندگان خارجی؛ در زمان اختلال اینترنت بین‌الملل، سوییچر هوشمند در کمتر از ۱ میلی‌ثانیه چالش‌ها را به کپچای آفلاین بومی منتقل کرده و پس از رفع اختلال، خودکار (Failback) بازمی‌گردد.
                                    </p>
                                </div>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5 pt-4 border-t border-[var(--border-current)]">
                                    <div class="p-2.5 rounded-xl bg-[var(--card-inner)] border border-[var(--border-current)] flex items-center gap-2 text-xs font-bold text-readable">
                                        <i class="fas fa-bolt text-indigo-400 text-sm"></i>
                                        <span>سوئیچ آنی (0ms) در زمان قطعی اینترنت</span>
                                    </div>
                                    <div class="p-2.5 rounded-xl bg-[var(--card-inner)] border border-[var(--border-current)] flex items-center gap-2 text-xs font-bold text-readable">
                                        <i class="fas fa-rotate text-emerald-400 text-sm"></i>
                                        <span>بازگشت خودکار (Smart Failback)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2: 3D Icon Matching Interactive Captcha -->
                    <div class="swiper-slide">
                        <div class="screenshot-card group">
                            <div class="relative overflow-hidden">
                                <a href="/img/Icon-Captcha_result.svg" class="glightbox block" data-gallery="env-gallery" data-title="چالش تصویری تطبیق آیکون ۳ بعدی (Icon Captcha) گاردفای پرو">
                                    <img src="/img/Icon-Captcha_result.svg" alt="چالش تعاملی تطبیق آیکون ۳ بعدی بومی افزونه گاردفای پرو" loading="lazy" decoding="async" class="w-full aspect-video object-cover group-hover:scale-105 transition-transform duration-500">
                                    <div class="absolute inset-0 bg-indigo-600/20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                        <div class="w-12 h-12 rounded-full bg-slate-900/90 text-white flex items-center justify-center text-lg shadow-xl">
                                            <i class="fas fa-magnifying-glass-plus"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="screenshot-card-body text-right">
                                <div>
                                    <div class="flex items-center gap-2 mb-3">
                                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-lg bg-amber-500/15 border border-amber-500/30 text-amber-400 text-xs font-black">
                                            چالش تصویری
                                        </span>
                                        <span class="text-xs text-amber-300 font-bold">کپچای تعاملی تطبیق آیکون</span>
                                    </div>
                                    <h4 class="text-xl font-black mb-3 text-readable">چالش بصری و تعاملی تطبیق آیکون ۳ بعدی</h4>
                                    <p class="text-muted text-sm leading-relaxed font-normal mb-5">
                                        تجربه کاربری فوق‌العاده با آیکون‌های سه‌بعدی جذاب؛ احراز هویت سریع کاربران انسانی تنها با یک کلیک روی آیکون اعلام‌شده (مانند کلید دسترسی) و خنثی‌سازی ۱۰۰٪ اسکریپت‌ها و ربات‌های نفوذ به صورت کاملاً بومی و آفلاین.
                                    </p>
                                </div>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5 pt-4 border-t border-[var(--border-current)]">
                                    <div class="p-2.5 rounded-xl bg-[var(--card-inner)] border border-[var(--border-current)] flex items-center gap-2 text-xs font-bold text-readable">
                                        <i class="fas fa-shapes text-amber-400 text-sm"></i>
                                        <span>طراحی ۳ بعدی مدرن و روان</span>
                                    </div>
                                    <div class="p-2.5 rounded-xl bg-[var(--card-inner)] border border-[var(--border-current)] flex items-center gap-2 text-xs font-bold text-readable">
                                        <i class="fas fa-shield-check text-emerald-400 text-sm"></i>
                                        <span>تغییر آنی سوال و بدون افت سرعت</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3: Themes & Customization -->
                    <div class="swiper-slide">
                        <div class="screenshot-card group">
                            <div class="relative overflow-hidden">
                                <a href="/img/Themes_result.webp" class="glightbox block">
                                    <img src="/img/Themes_result.webp" onerror="this.onerror=null;this.src='https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=1200&q=80'" alt="تنظیمات پیشرفته شخصی‌سازی فرم‌ها، تم‌ها و قوانین امنیتی افزونه گاردفای پرو" loading="lazy" decoding="async" class="w-full aspect-video object-cover group-hover:scale-105 transition-transform duration-500">
                                    <div class="absolute inset-0 bg-indigo-600/20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                        <div class="w-12 h-12 rounded-full bg-slate-900/90 text-white flex items-center justify-center text-lg shadow-xl">
                                            <i class="fas fa-magnifying-glass-plus"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="screenshot-card-body text-right">
                                <div>
                                    <div class="flex items-center gap-2 mb-3">
                                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-lg bg-indigo-500/15 border border-indigo-500/30 text-indigo-400 text-xs font-black">
                                            پوسته و چیدمان
                                        </span>
                                        <span class="text-xs text-indigo-300 font-bold">شخصی‌سازی نامحدود</span>
                                    </div>
                                    <h4 class="text-xl font-black mb-3 text-readable">تنظیمات پیشرفته تم و ظاهر فرم‌ها</h4>
                                    <p class="text-muted text-sm leading-relaxed font-normal mb-5">
                                        هماهنگی کامل با پالت رنگی سازمانی، فونت‌های فارسی استاندارد و تم دارک/لایت قالب وردپرس، به همراه قابلیت تنظیم تاخیر و رفتارهای بصری اختصاصی برای فرم‌های هر برگه سایت.
                                    </p>
                                </div>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5 pt-4 border-t border-[var(--border-current)]">
                                    <div class="p-2.5 rounded-xl bg-[var(--card-inner)] border border-[var(--border-current)] flex items-center gap-2 text-xs font-bold text-readable">
                                        <i class="fas fa-palette text-indigo-400 text-sm"></i>
                                        <span>سازگاری با دارک‌مود و لایت‌مود</span>
                                    </div>
                                    <div class="p-2.5 rounded-xl bg-[var(--card-inner)] border border-[var(--border-current)] flex items-center gap-2 text-xs font-bold text-readable">
                                        <i class="fas fa-font text-emerald-400 text-sm"></i>
                                        <span>پشتیبانی از فونت‌های استاندارد فارسی</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 4: Logs & Telemetry -->
                    <div class="swiper-slide">
                        <div class="screenshot-card group">
                            <div class="relative overflow-hidden">
                                <a href="/img/Logs_result.webp" class="glightbox block">
                                    <img src="/img/Logs_result.webp" onerror="this.onerror=null;this.src='https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1200&q=80'" alt="گزارش‌های تفصیلی رویدادها، لاگ IPها و تحلیل ترافیک هرزنامه‌ها در گاردفای" loading="lazy" decoding="async" class="w-full aspect-video object-cover group-hover:scale-105 transition-transform duration-500">
                                    <div class="absolute inset-0 bg-indigo-600/20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                        <div class="w-12 h-12 rounded-full bg-slate-900/90 text-white flex items-center justify-center text-lg shadow-xl">
                                            <i class="fas fa-magnifying-glass-plus"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="screenshot-card-body text-right">
                                <div>
                                    <div class="flex items-center gap-2 mb-3">
                                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-lg bg-indigo-500/15 border border-indigo-500/30 text-indigo-400 text-xs font-black">
                                            گزارش ترافیک
                                        </span>
                                        <span class="text-xs text-indigo-300 font-bold">لاگ و مانیتورینگ جامع</span>
                                    </div>
                                    <h4 class="text-xl font-black mb-3 text-readable">گزارش‌های تفصیلی رویدادها و دفع حملات</h4>
                                    <p class="text-muted text-sm leading-relaxed font-normal mb-5">
                                        آنالیز دقیق IPها، الگوهای رفتاری ربات‌ها و لاگ ثبت‌نام‌ها و دیدگاه‌های مسدودشده با امکان جستجو، فیلتر بازه زمانی و خروجی مستقیم فایل اکسل و CSV برای ممیزی امنیتی.
                                    </p>
                                </div>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5 pt-4 border-t border-[var(--border-current)]">
                                    <div class="p-2.5 rounded-xl bg-[var(--card-inner)] border border-[var(--border-current)] flex items-center gap-2 text-xs font-bold text-readable">
                                        <i class="fas fa-file-csv text-indigo-400 text-sm"></i>
                                        <span>خروجی گرفتن از لاگ تهدیدات و IPها</span>
                                    </div>
                                    <div class="p-2.5 rounded-xl bg-[var(--card-inner)] border border-[var(--border-current)] flex items-center gap-2 text-xs font-bold text-readable">
                                        <i class="fas fa-clock text-emerald-400 text-sm"></i>
                                        <span>ثبت میلی‌ثانیه‌ای رویدادهای امنیتی</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 5: Security Settings & Policies -->
                    <div class="swiper-slide">
                        <div class="screenshot-card group">
                            <div class="relative overflow-hidden">
                                <a href="/img/Security-Settings_result.webp" class="glightbox block">
                                    <img src="/img/Security-Settings_result.webp" onerror="this.onerror=null;this.src='https://images.unsplash.com/photo-1563986768609-322da13575f3?auto=format&fit=crop&w=1200&q=80'" alt="تنظیمات امنیتی، فایروال و قوانین حفاظتی گاردفای پرو" loading="lazy" decoding="async" class="w-full aspect-video object-cover group-hover:scale-105 transition-transform duration-500">
                                    <div class="absolute inset-0 bg-indigo-600/20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                        <div class="w-12 h-12 rounded-full bg-slate-900/90 text-white flex items-center justify-center text-lg shadow-xl">
                                            <i class="fas fa-magnifying-glass-plus"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="screenshot-card-body text-right">
                                <div>
                                    <div class="flex items-center gap-2 mb-3">
                                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-lg bg-indigo-500/15 border border-indigo-500/30 text-indigo-400 text-xs font-black">
                                            قوانین فایروال
                                        </span>
                                        <span class="text-xs text-indigo-300 font-bold">پیکربندی امنیتی</span>
                                    </div>
                                    <h4 class="text-xl font-black mb-3 text-readable">تنظیمات پیشرفته فایروال و رفتار فرم‌ها</h4>
                                    <p class="text-muted text-sm leading-relaxed font-normal mb-5">
                                        مدیریت جامع سطح امنیت، تنظیم آستانه حساسیت شناسایی رفتارهای ربات، فعال‌سازی سپر ضد بازپخش HMAC، لیست سفید IPهای مدیریت و تعیین زمان انقضای توکن‌های یک‌بار مصرف.
                                    </p>
                                </div>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-2.5 pt-4 border-t border-[var(--border-current)]">
                                    <div class="p-2.5 rounded-xl bg-[var(--card-inner)] border border-[var(--border-current)] flex items-center gap-2 text-xs font-bold text-readable">
                                        <i class="fas fa-shield-halved text-indigo-400 text-sm"></i>
                                        <span>سپر HMAC ضد حملات بازپخش</span>
                                    </div>
                                    <div class="p-2.5 rounded-xl bg-[var(--card-inner)] border border-[var(--border-current)] flex items-center gap-2 text-xs font-bold text-readable">
                                        <i class="fas fa-user-lock text-emerald-400 text-sm"></i>
                                        <span>لیست سفید IP و نقش‌های کاربری</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next !hidden md:!flex"></div>
                <div class="swiper-button-prev !hidden md:!flex"></div>
            </div>
        </div>
    </section>

    <!-- Cyber Laser Beam Divider -->
    <div class="cyber-beam-divider"></div>

    <!-- High-Impact Feature Checklist -->
    <section id="features" class="py-16 md:py-20 relative overflow-hidden reveal">
        <div class="absolute inset-0 pattern-grid"></div>
        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="text-center mb-10 md:mb-12">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-indigo-500/15 border border-indigo-500/30 text-xs font-black mb-4 text-indigo-400 uppercase tracking-widest shadow-sm">
                    <i class="fas fa-shield-halved"></i>
                    <span>معماری امنیتی ۳ لایه</span>
                </div>
                <h2 class="text-3xl md:text-5xl font-black mb-3 text-readable tracking-tight">چک‌لیست <span class="text-indigo-500">قدرت امنیتی</span> گاردفای</h2>
                <p class="text-muted text-base md:text-lg max-w-2xl mx-auto">قابلیت‌های فنی پیشرفته‌ای که گاردفای پرو را به قدرتمندترین آنتی‌اسپم وردپرس تبدیل می‌کند.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 (Right in RTL): Dynamic Honey-Pot -->
                <div class="spotlight-card relative flex flex-col justify-between p-8 rounded-[2.5rem] bg-[var(--card-current)] border-2 border-amber-500/30 hover:border-amber-400 transition-all duration-400 group shadow-lg hover:shadow-[0_20px_45px_-10px_rgba(245,158,11,0.25)] backdrop-blur-xl">
                    <div>
                        <!-- Clean Visible Top Header Badge (No Clipping) -->
                        <div class="flex items-center justify-between gap-3 mb-6 pb-4 border-b border-[var(--border-current)]">
                            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-amber-500/15 border border-amber-500/30 text-amber-400 text-xs font-black shadow-sm">
                                <i class="fas fa-user-secret text-xs"></i>
                                <span>لایه ۱: تله نامرئی هانی‌پات</span>
                            </div>
                            <span class="text-[10px] font-mono px-2 py-0.5 rounded bg-amber-500/10 text-amber-400 font-bold border border-amber-500/20">Zero Friction</span>
                        </div>

                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-14 h-14 rounded-2xl bg-gradient-to-tr from-amber-600 to-amber-500 text-white flex items-center justify-center shadow-lg shadow-amber-500/40 group-hover:scale-105 transition-transform duration-300 shrink-0">
                                <i class="fas fa-user-secret text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl md:text-2xl font-black text-readable group-hover:text-amber-400 transition-colors">
                                    تله نامرئی هانی‌پات
                                </h3>
                                <span class="text-xs text-amber-400 font-mono font-bold">Dynamic Honey-Pot Guard</span>
                            </div>
                        </div>

                        <p class="text-sm text-muted leading-relaxed font-normal mb-6">
                            فیلدهای نامرئی و متغیر که بدون ایجاد هیچ‌گونه مزاحمتی برای کاربران واقعی، ربات‌های اسپمر خودکار را در تله‌های امنیتی گرفتار و در لحظه مسدود می‌کند.
                        </p>
                    </div>

                    <div class="pt-5 border-t border-[var(--border-current)] flex flex-wrap gap-2 text-[11px] font-bold">
                        <span class="px-3 py-1.5 rounded-xl bg-[var(--card-inner)] text-amber-400 border border-amber-500/30 flex items-center gap-1.5">
                            <i class="fas fa-check text-[10px]"></i>
                            <span>فیلدهای متغیر پویا</span>
                        </span>
                        <span class="px-3 py-1.5 rounded-xl bg-[var(--card-inner)] text-readable border border-[var(--border-current)]">
                            مسدودسازی بی‌صدا
                        </span>
                    </div>
                </div>

                <!-- Card 2 (Center in RTL): Behavioral Telemetry -->
                <div class="spotlight-card relative flex flex-col justify-between p-8 rounded-[2.5rem] bg-[var(--card-current)] border-2 border-emerald-500/30 hover:border-emerald-400 transition-all duration-400 group shadow-lg hover:shadow-[0_20px_45px_-10px_rgba(16,185,129,0.25)] backdrop-blur-xl">
                    <div>
                        <!-- Clean Visible Top Header Badge (No Clipping) -->
                        <div class="flex items-center justify-between gap-3 mb-6 pb-4 border-b border-[var(--border-current)]">
                            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-500/15 border border-emerald-500/30 text-emerald-400 text-xs font-black shadow-sm">
                                <i class="fas fa-fingerprint text-xs"></i>
                                <span>لایه ۲: تله‌متری رفتاری</span>
                            </div>
                            <span class="text-[10px] font-mono px-2 py-0.5 rounded bg-emerald-500/10 text-emerald-400 font-bold border border-emerald-500/20">0ms Latency</span>
                        </div>

                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-14 h-14 rounded-2xl bg-gradient-to-tr from-emerald-600 to-emerald-500 text-white flex items-center justify-center shadow-lg shadow-emerald-500/40 group-hover:scale-105 transition-transform duration-300 shrink-0">
                                <i class="fas fa-fingerprint text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl md:text-2xl font-black text-readable group-hover:text-emerald-400 transition-colors">
                                    تله‌متری رفتاری هوشمند
                                </h3>
                                <span class="text-xs text-emerald-400 font-mono font-bold">Behavioral Telemetry</span>
                            </div>
                        </div>

                        <p class="text-sm text-muted leading-relaxed font-normal mb-6">
                            آنالیز هوشمند الگوهای رفتاری، سرعت تعامل و حرکات طبیعی کاربر برای تفکیک دقیق و فوق‌سریع انسان از ربات‌ها و اسکریپت‌های Headless.
                        </p>
                    </div>

                    <div class="pt-5 border-t border-[var(--border-current)] flex flex-wrap gap-2 text-[11px] font-bold">
                        <span class="px-3 py-1.5 rounded-xl bg-[var(--card-inner)] text-emerald-400 border border-emerald-500/30 flex items-center gap-1.5">
                            <i class="fas fa-check text-[10px]"></i>
                            <span>سنجش سرعت تعامل</span>
                        </span>
                        <span class="px-3 py-1.5 rounded-xl bg-[var(--card-inner)] text-readable border border-[var(--border-current)]">
                            ردیابی ربات‌های خودکار
                        </span>
                    </div>
                </div>

                <!-- Card 3 (Left in RTL): Replay Attack Guard -->
                <div class="spotlight-card relative flex flex-col justify-between p-8 rounded-[2.5rem] bg-[var(--card-current)] border-2 border-indigo-500/30 hover:border-indigo-400 transition-all duration-400 group shadow-lg hover:shadow-[0_20px_45px_-10px_rgba(99,102,241,0.25)] backdrop-blur-xl">
                    <div>
                        <!-- Clean Visible Top Header Badge (No Clipping) -->
                        <div class="flex items-center justify-between gap-3 mb-6 pb-4 border-b border-[var(--border-current)]">
                            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-indigo-500/15 border border-indigo-500/30 text-indigo-400 text-xs font-black shadow-sm">
                                <i class="fas fa-shield-virus text-xs"></i>
                                <span>لایه ۳: ضد حملات بازپخش</span>
                            </div>
                            <span class="text-[10px] font-mono px-2 py-0.5 rounded bg-indigo-500/10 text-indigo-400 font-bold border border-indigo-500/20">HMAC-SHA256</span>
                        </div>

                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-14 h-14 rounded-2xl bg-gradient-to-tr from-indigo-600 to-indigo-500 text-white flex items-center justify-center shadow-lg shadow-indigo-500/40 group-hover:scale-105 transition-transform duration-300 shrink-0">
                                <i class="fas fa-shield-halved text-2xl"></i>
                            </div>
                            <div>
                                <h3 class="text-xl md:text-2xl font-black text-readable group-hover:text-indigo-400 transition-colors">
                                    سپر ضد حملات بازپخش
                                </h3>
                                <span class="text-xs text-indigo-400 font-mono font-bold">Replay Attack Guard</span>
                            </div>
                        </div>

                        <p class="text-sm text-muted leading-relaxed font-normal mb-6">
                            محافظت تمام‌عیار در برابر حملات بازپخش با استفاده از توکن‌های رمزنگاری‌شده یک‌بار مصرف HMAC و ابطال خودکار پس از پردازش اولیه فرم.
                        </p>
                    </div>

                    <div class="pt-5 border-t border-[var(--border-current)] flex flex-wrap gap-2 text-[11px] font-bold">
                        <span class="px-3 py-1.5 rounded-xl bg-[var(--card-inner)] text-indigo-400 border border-indigo-500/30 flex items-center gap-1.5">
                            <i class="fas fa-check text-[10px]"></i>
                            <span>توکن یک‌بار مصرف HMAC</span>
                        </span>
                        <span class="px-3 py-1.5 rounded-xl bg-[var(--card-inner)] text-readable border border-[var(--border-current)]">
                            ابطال آنی پس از ثبت
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Comprehensive SEO Security Guide Section -->
    <article id="security-guide" class="py-16 md:py-20 bg-[var(--section-bg-alt)] border-y border-[var(--border-current)] relative overflow-hidden reveal">
        <div class="absolute inset-0 pattern-grid opacity-10"></div>
        <div class="max-w-5xl mx-auto px-6 relative z-10">
            <!-- Article Header -->
            <header class="text-center mb-10 md:mb-12">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-indigo-500/10 border border-indigo-500/25 text-xs font-black mb-4 text-indigo-400 uppercase tracking-widest shadow-sm">
                    <i class="fas fa-book-open"></i>
                    <span>راهنمای تخصصی و مستندات امنیتی</span>
                </div>
                <h2 class="text-3xl md:text-5xl font-black mb-4 text-readable leading-tight">
                    راهنمای جامع <span class="text-indigo-500">افزایش امنیت وردپرس</span>: چرا استفاده از <span class="text-indigo-400">کپچای آفلاین</span> یک ضرورت حیاتی است؟
                </h2>
                <div class="flex flex-wrap items-center justify-center gap-4 text-xs text-muted font-bold">
                    <span class="flex items-center gap-1.5"><i class="fas fa-user-pen text-indigo-400"></i> نگارش توسط تیم امنیت گاردفای</span>
                    <span class="text-slate-400 dark:text-slate-600">•</span>
                    <span class="flex items-center gap-1.5"><i class="fas fa-clock text-indigo-400"></i> زمان مطالعه: ۶ دقیقه</span>
                    <span class="text-slate-400 dark:text-slate-600">•</span>
                    <span class="flex items-center gap-1.5 text-emerald-500"><i class="fas fa-shield-check"></i> بررسی شده با استانداردهای OWASP</span>
                </div>
            </header>

            <!-- Article Body -->
            <div class="space-y-12 text-readable leading-relaxed text-sm md:text-base font-normal">
                
                <!-- Chapter 1 -->
                <section class="p-8 md:p-10 rounded-[2.5rem] bg-[var(--card-current)] border border-[var(--border-current)] shadow-lg backdrop-blur-xl">
                    <h3 class="text-xl md:text-2xl font-black text-readable mb-4 flex items-center gap-3">
                        <span class="w-8 h-8 rounded-xl bg-indigo-500/15 text-indigo-400 flex items-center justify-center text-sm font-black shrink-0">۱</span>
                        <span>ریشه‌یابی بحران: چرا فرم‌های وردپرس نخستین هدف حملات سایبری هستند؟</span>
                    </h3>
                    <p class="text-muted leading-relaxed mb-4">
                        وردپرس به عنوان محبوب‌ترین سیستم مدیریت محتوا در دنیا، روزانه هدف میلیون‌ها حمله خودکار قرار می‌گیرد. ربات‌های مخرب (Bad Bots) با اسکن مداوم صفحات، به دنبال فرم‌های بدون محافظت نظیر <strong>فرم لاگین مدیریت (wp-login.php)</strong>، <strong>صفحات عضویت کاربران</strong>، <strong>دیدگاه‌های مقالات</strong> و به ویژه <strong>فرم تسویه‌حساب ووکامرس (Checkout)</strong> هستند.
                    </p>
                    <p class="text-muted leading-relaxed">
                        هدف اصلی این حملات عموماً اجرای <em>حملات Brute Force</em> برای حدس کلمه عبور مدیران، ارسال هرزنامه‌های تبلیغاتی انبوه، تزریق اسکریپت‌های مخرب (XSS) و تست کارت‌های بانکی سرقتی (Card Testing) است. بدون یک لایه دفاعی مستحکم، منابع سرور هاستینگ شما درگیر پردازش ریکوئست‌های جعلی شده و سرعت سایت به شدت افت خواهد کرد.
                    </p>
                </section>

                <!-- Chapter 2 -->
                <section class="p-8 md:p-10 rounded-[2.5rem] bg-[var(--card-current)] border border-[var(--border-current)] shadow-lg backdrop-blur-xl">
                    <h3 class="text-xl md:text-2xl font-black text-readable mb-4 flex items-center gap-3">
                        <span class="w-8 h-8 rounded-xl bg-indigo-500/15 text-indigo-400 flex items-center justify-center text-sm font-black shrink-0">۲</span>
                        <span>کپچا (CAPTCHA) چیست و چگونه انسان را از ربات تفکیک می‌کند؟</span>
                    </h3>
                    <p class="text-muted leading-relaxed mb-4">
                        واژه <strong>کپچا</strong> مخفف عبارت <em>Completely Automated Public Turing test to tell Computers and Humans Apart</em> است؛ به معنای آزمون کاملاً خودکار عمومی تورینگ برای تفکیک انسان از رایانه. هدف اصلی یک کپچای ایده‌آل این است که برای کاربر انسانی ساده و سریع باشد، اما برای اسکریپت‌ها و بات‌های هوش مصنوعی ناممکن یا بسیار هزینه‌بر باشد.
                    </p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 my-6 text-xs md:text-sm">
                        <div class="chapter2-card chapter2-card-rose shadow-sm transition-all hover:shadow-md">
                            <h4 class="font-black mb-2.5 flex items-center gap-2 text-sm md:text-base">
                                <i class="fas fa-times-circle"></i>
                                <span>معایب کپچاهای سنتی تصویری</span>
                            </h4>
                            <p class="leading-relaxed font-semibold">
                                تصاویر درهم‌ریخته و متون کج که خواندنشان برای کاربران واقعی آزاردهنده است و امروزه توسط ابزارهای ساده OCR به راحتی شکسته می‌شوند.
                            </p>
                        </div>
                        <div class="chapter2-card chapter2-card-emerald shadow-sm transition-all hover:shadow-md">
                            <h4 class="font-black mb-2.5 flex items-center gap-2 text-sm md:text-base">
                                <i class="fas fa-check-circle"></i>
                                <span>نسل مدرن کپچاها</span>
                            </h4>
                            <p class="leading-relaxed font-semibold">
                                چالش‌های ریاضی پویا، اسلایدر کشیدنی، تطبیق آیکون و سپرهای هانی‌پات که تجربه کاربری فوق‌العاده و مقاومت سایبری حداکثری ارائه می‌دهند.
                            </p>
                        </div>
                    </div>
                </section>

                <!-- Chapter 3 -->
                <section class="p-8 md:p-10 rounded-[2.5rem] bg-[var(--card-current)] border border-[var(--border-current)] shadow-lg backdrop-blur-xl">
                    <h3 class="text-xl md:text-2xl font-black text-readable mb-4 flex items-center gap-3">
                        <span class="w-8 h-8 rounded-xl bg-indigo-500/15 text-indigo-600 dark:text-indigo-400 flex items-center justify-center text-sm font-black shrink-0">۳</span>
                        <span>چالش بزرگ وب‌سایت‌های ایرانی: چرا کپچاهای خارجی (گوگل و کلودفلر) کافی نیستند؟</span>
                    </h3>
                    <p class="text-muted leading-relaxed mb-6 font-normal">
                        سرویس‌های آنلاین مانند <strong>Google reCAPTCHA</strong> و <strong>Cloudflare Turnstile</strong> راهکارهای معتبری در سطح جهان هستند، اما در بستر شبکه ایران با ۳ چالش اساسی و بحرانی مواجهند:
                    </p>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
                        <div class="challenge-card challenge-card-amber shadow-sm flex flex-col justify-between transition-all hover:shadow-md">
                            <div>
                                <div class="w-10 h-10 rounded-xl bg-amber-500/20 text-amber-500 dark:text-amber-400 flex items-center justify-center mb-3 text-lg shrink-0">
                                    <i class="fas fa-lock"></i>
                                </div>
                                <h4 class="font-extrabold text-sm md:text-base mb-2">
                                    قفل شدن فرم‌ها در اختلال اینترنت
                                </h4>
                                <p class="text-xs md:text-sm leading-relaxed font-normal">
                                    به محض قطعی یا کندی ارتباط سرور یا کاربر با دامنه‌های گوگل، اسکریپت لود نشده و ارسال فرم‌های سایت مسدود می‌شود.
                                </p>
                            </div>
                        </div>

                        <div class="challenge-card challenge-card-rose shadow-sm flex flex-col justify-between transition-all hover:shadow-md">
                            <div>
                                <div class="w-10 h-10 rounded-xl bg-rose-500/20 text-rose-500 dark:text-rose-400 flex items-center justify-center mb-3 text-lg shrink-0">
                                    <i class="fas fa-gauge-simple-high"></i>
                                </div>
                                <h4 class="font-extrabold text-sm md:text-base mb-2">
                                    افت شدید سرعت لود صفحات (TTFB)
                                </h4>
                                <p class="text-xs md:text-sm leading-relaxed font-normal">
                                    دانلود فایل‌های جاوااسکریپت خارجی و ارسال ریکوئست‌های اعتبارسنجی فرامرزی تا ۲۰۰۰ میلی‌ثانیه به زمان پاسخگویی اضافه می‌کند.
                                </p>
                            </div>
                        </div>

                        <div class="challenge-card challenge-card-indigo shadow-sm flex flex-col justify-between transition-all hover:shadow-md">
                            <div>
                                <div class="w-10 h-10 rounded-xl bg-indigo-500/20 text-indigo-500 dark:text-indigo-400 flex items-center justify-center mb-3 text-lg shrink-0">
                                    <i class="fas fa-user-shield"></i>
                                </div>
                                <h4 class="font-extrabold text-sm md:text-base mb-2">
                                    نگرانی‌های حریم خصوصی و امنیت
                                </h4>
                                <p class="text-xs md:text-sm leading-relaxed font-normal">
                                    ارسال ترافیک و هدرهای کاربران داخلی به سرورهای خارجی در برخی پروژه‌ها، سازمان‌ها و نهادها منع قانونی دارد.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Highlight Callout -->
                    <div class="p-6 rounded-2xl challenge-callout-box shadow-lg">
                        <div class="flex items-center gap-3 mb-2 font-black callout-title text-base md:text-lg">
                            <div class="w-8 h-8 rounded-xl bg-emerald-500/20 text-emerald-600 dark:text-emerald-400 flex items-center justify-center shrink-0">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                            <span>راهکار پایدار: کپچای آفلاین با قابلیت Smart Failover</span>
                        </div>
                        <p class="text-xs md:text-sm leading-relaxed font-normal mt-2">
                            کپچای آفلاین <strong>گاردفای پرو</strong> تمامی پردازش‌ها و اعتبارسنجی‌ها را روی هسته داخلی وب‌سرور شما (بدون حتی یک بایت ارتباط با خارج) انجام می‌دهد. همچنین قابلیت سوئیچ هوشمند به شما اجازه می‌دهد از گوگل استفاده کنید اما در لحظه بروز هرگونه اختلال، سیستم بلافاصله و با تاخیر 0ms روی موتور محلی سوئیچ کند.
                        </p>
                    </div>
                </section>

                <!-- Chapter 4 -->
                <section class="p-8 md:p-10 rounded-[2.5rem] bg-[var(--card-current)] border border-[var(--border-current)] shadow-lg backdrop-blur-xl">
                    <h3 class="text-xl md:text-2xl font-black text-readable mb-4 flex items-center gap-3">
                        <span class="w-8 h-8 rounded-xl bg-indigo-500/15 text-indigo-600 dark:text-indigo-400 flex items-center justify-center text-sm font-black shrink-0">۴</span>
                        <span>تکنیک‌های حیاتی برای تضمین امنیت فرم لاگین و فروشگاه‌های ووکامرس</span>
                    </h3>
                    <p class="text-muted leading-relaxed mb-6 font-normal">
                        برای دستیابی به حداکثر امنیت در وردپرس، صرفاً قراردادن یک جعبه کپچا کافی نیست؛ یک معماری دفاعی چندلایه باید المان‌های زیر را به کار بگیرد:
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs md:text-sm mb-6">
                        <div class="p-5 rounded-2xl tech-card-item space-y-2 shadow-sm transition-all hover:shadow-md">
                            <div class="font-black card-header-title flex items-center gap-2 text-sm md:text-base">
                                <i class="fas fa-key text-indigo-500"></i>
                                <span>توکن‌های یک‌بار مصرف HMAC (ضد Replay Attack)</span>
                            </div>
                            <p class="leading-relaxed font-normal">تولید توکن‌های امضاشده با کلید مخفی و انقضای زمانی دقیق، مانع از این می‌شود که هکر پاسخ معتبر یک کپچا را ضبط و بارها ارسال کند.</p>
                        </div>
                        <div class="p-5 rounded-2xl tech-card-item space-y-2 shadow-sm transition-all hover:shadow-md">
                            <div class="font-black card-header-title flex items-center gap-2 text-sm md:text-base">
                                <i class="fas fa-user-secret text-amber-500"></i>
                                <span>تله نامرئی هانی‌پات (Dynamic Honey-Pot)</span>
                            </div>
                            <p class="leading-relaxed font-normal">فیلدهای فرمی که با CSS از دید انسان پنهانند اما ربات‌ها حریصانه آن‌ها را پر می‌کنند. به محض پر شدن این فیلد، درخواست بلافاصله رد می‌شود.</p>
                        </div>
                        <div class="p-5 rounded-2xl tech-card-item space-y-2 shadow-sm transition-all hover:shadow-md">
                            <div class="font-black card-header-title flex items-center gap-2 text-sm md:text-base">
                                <i class="fas fa-stopwatch text-emerald-500"></i>
                                <span>سنجش زمان تعامل (Behavioral Telemetry)</span>
                            </div>
                            <p class="leading-relaxed font-normal">ربات‌ها فرم را در کسری از ثانیه ارسال می‌کنند، در حالی که انسان حداقل چند ثانیه برای تایپ و حل چالش زمان می‌گذارد.</p>
                        </div>
                        <div class="p-5 rounded-2xl tech-card-item space-y-2 shadow-sm transition-all hover:shadow-md">
                            <div class="font-black card-header-title flex items-center gap-2 text-sm md:text-base">
                                <i class="fas fa-cart-shopping text-purple-500"></i>
                                <span>محافظت اختصاصی از فرم تسویه‌حساب</span>
                            </div>
                            <p class="leading-relaxed font-normal">جلوگیری از ایجاد سفارش‌های فیک و مسدود شدن درگاه‌های بانکی به دلیل تراکنش‌های ناموفق مکرر ربات‌ها.</p>
                        </div>
                    </div>
                </section>

                <!-- Chapter 5: Actionable Checklist -->
                <section class="p-8 md:p-10 rounded-[2.5rem] bg-gradient-to-br from-indigo-900/20 via-[var(--card-current)] to-emerald-900/20 border border-indigo-500/30 shadow-xl backdrop-blur-xl">
                    <h3 class="text-xl md:text-2xl font-black text-readable mb-4 flex items-center gap-3">
                        <span class="w-8 h-8 rounded-xl bg-emerald-500/20 text-emerald-400 flex items-center justify-center text-sm font-black shrink-0">۵</span>
                        <span>چک‌لیست ۵ مرحله‌ای افزایش امنیت وردپرس برای وب‌مسترهای حرفه‌ای</span>
                    </h3>
                    <p class="text-muted leading-relaxed mb-6">
                        توصیه می‌کنیم همین امروز این ۵ گام اساسی را برای ارتقای امنیت وب‌سایت خود به کار ببندید:
                    </p>
                    <ol class="space-y-4 text-xs md:text-sm text-readable">
                        <li class="chapter5-step-item">
                            <span class="w-6 h-6 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center text-xs font-bold shrink-0 mt-0.5">۱</span>
                            <div>
                                <strong class="text-readable">فعال‌سازی کپچای آفلاین روی تمامی فرم‌های حساس:</strong>
                                <span class="step-desc block mt-0.5">فرم‌های لاگین، فراموشی رمز، ثبت‌نام، ووکامرس و فرم‌سازها را تحت پوشش قرار دهید.</span>
                            </div>
                        </li>
                        <li class="chapter5-step-item">
                            <span class="w-6 h-6 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center text-xs font-bold shrink-0 mt-0.5">۲</span>
                            <div>
                                <strong class="text-readable">محدودسازی نرخ تلاش برای ورود (Rate Limiting):</strong>
                                <span class="step-desc block mt-0.5">از قفل شدن IP پس از ۳ تا ۵ تلاش ناموفق اطمینان حاصل کنید.</span>
                            </div>
                        </li>
                        <li class="chapter5-step-item">
                            <span class="w-6 h-6 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center text-xs font-bold shrink-0 mt-0.5">۳</span>
                            <div>
                                <strong class="text-readable">استفاده از نام‌های کاربری غیراستاندارد:</strong>
                                <span class="step-desc block mt-0.5">نام کاربری پیش‌فرض مانند admin یا نام دامنه را هرگز برای حساب‌های مدیر کل استفاده نکنید.</span>
                            </div>
                        </li>
                        <li class="chapter5-step-item">
                            <span class="w-6 h-6 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center text-xs font-bold shrink-0 mt-0.5">۴</span>
                            <div>
                                <strong class="text-readable">به‌روزرسانی مداوم هسته PHP و وردپرس:</strong>
                                <span class="step-desc block mt-0.5">همواره از آخرین نسخه‌های پایدار PHP 8.x و هسته وردپرس استفاده نمایید.</span>
                            </div>
                        </li>
                        <li class="chapter5-step-item">
                            <span class="w-6 h-6 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center text-xs font-bold shrink-0 mt-0.5">۵</span>
                            <div>
                                <strong class="text-readable">پایش مداوم لاگ‌های امنیتی:</strong>
                                <span class="step-desc block mt-0.5">گزارش ترافیک مسدودشده را به صورت هفتگی بررسی کنید تا الگوهای مشکوک را شناسایی نمایید.</span>
                            </div>
                        </li>
                    </ol>
                </section>

                <!-- Article Call to Action Box (Guaranteed High Contrast in Light & Dark Mode) -->
                <div id="article-cta-box" class="dark-contrast-card p-8 md:p-12 rounded-[3rem] bg-gradient-to-r from-indigo-600 via-indigo-700 to-purple-700 text-white text-center shadow-2xl space-y-6 relative overflow-hidden border-2 border-indigo-400/40">
                    <div class="w-16 h-16 rounded-2xl bg-white/20 border border-white/30 flex items-center justify-center mx-auto text-3xl shadow-lg">
                        <i class="fas fa-shield-halved text-amber-300"></i>
                    </div>
                    <h3 class="text-2xl md:text-3xl font-black text-white tracking-tight">
                        امنیت کامل وردپرس با گاردفای پرو در کمتر از ۲ دقیقه
                    </h3>
                    <p class="text-indigo-100 text-sm md:text-base max-w-2xl mx-auto leading-relaxed font-normal">
                        دیگر نگران قطعی کپچا یا هرزنامه‌های میلیونی نباشید. با تهیه نسخه پرو، یک لایسنس دائمی و بدون انقضا همراه با پشتیبانی فنی دریافت کنید.
                    </p>
                    <div class="pt-2">
                        <a href="#pricing" class="inline-flex items-center gap-3 px-10 py-4.5 rounded-2xl bg-white text-indigo-700 font-black text-base hover:bg-indigo-50 shadow-xl transition-all hover:scale-105 cursor-pointer">
                            <span>خرید لایسنس گاردفای پرو</span>
                            <i class="fas fa-arrow-left"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </article>

    <!-- Testimonials Section -->
    <section id="testimonials" class="py-16 md:py-20 relative overflow-hidden reveal">
        <div class="ui-pattern opacity-[0.03]"></div>
        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="text-center mb-10 md:mb-12">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-emerald-500/10 border border-emerald-500/25 text-emerald-500 text-xs font-black mb-4 uppercase tracking-widest shadow-sm">
                    <i class="fas fa-badge-check"></i>
                    <span>دیدگاه خریداران تایید شده</span>
                </div>
                <h2 class="text-3xl md:text-5xl font-black mb-3 text-readable">تجربه کاربران <span class="text-indigo-500">گاردفای پرو</span></h2>
                <p class="text-muted text-base md:text-lg max-w-2xl mx-auto">نظرات وب‌مسترها و توسعه‌دهندگانی که امنیت فرم‌ها و فروشگاه‌های خود را به گاردفای سپرده‌اند.</p>
            </div>

            <div class="swiper testimonial-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="flex items-center justify-between mb-6">
                                <div class="flex items-center gap-1 text-amber-400 text-sm">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="px-3 py-1 rounded-full bg-emerald-500/15 text-emerald-500 text-[10px] font-bold">خرید تایید شده</span>
                            </div>
                            <p class="text-readable text-lg leading-relaxed mb-8 italic">
                                "مشکل اسپم دیدگاه‌ها و ثبت‌نام‌های جعلی سایت من که روزانه به صدها مورد می‌رسید، با نصب گاردفای در کمتر از چند دقیقه به صفر رسید و هیچ کندی در فرآیند خرید ایجاد نکرد."
                            </p>
                            <div class="flex items-center gap-4 pt-4 border-t border-[var(--border-current)]">
                                <div class="w-12 h-12 rounded-full bg-gradient-to-tr from-indigo-600 to-indigo-400 text-white flex items-center justify-center font-black text-lg shadow-md">
                                    ع
                                </div>
                                <div class="text-right">
                                    <h4 class="font-black text-readable text-base">علی رضایی</h4>
                                    <p class="text-xs text-muted font-normal">مدیر فروشگاه آنلاین دیجیتال</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-card">
                            <div class="flex items-center justify-between mb-6">
                                <div class="flex items-center gap-1 text-amber-400 text-sm">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="px-3 py-1 rounded-full bg-emerald-500/15 text-emerald-500 text-[10px] font-bold">توسعه‌دهنده ارشد</span>
                            </div>
                            <p class="text-readable text-lg leading-relaxed mb-8 italic">
                                "قابلیت کارکرد ۱۰۰٪ آفلاین گاردفای واقعاً یک مزیت حیاتی در پروژه‌های دولتی و شرکتی است. در زمان اختلال اینترنت بین‌الملل، هیچ تداخلی در فرم‌های تماس ایجاد نمی‌شود."
                            </p>
                            <div class="flex items-center gap-4 pt-4 border-t border-[var(--border-current)]">
                                <div class="w-12 h-12 rounded-full bg-gradient-to-tr from-emerald-600 to-emerald-400 text-white flex items-center justify-center font-black text-lg shadow-md">
                                    س
                                </div>
                                <div class="text-right">
                                    <h4 class="font-black text-readable text-base">سارا محمدی</h4>
                                    <p class="text-xs text-muted font-normal">توسعه‌دهنده ارشد وردپرس و لاراول</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <!-- Web Vitals & Page Load Performance Benchmark Section -->
    <section id="performance" class="py-16 md:py-24 bg-[var(--section-bg-alt)] border-y border-[var(--border-current)] relative overflow-hidden reveal">
        <div class="absolute inset-0 pattern-grid opacity-15"></div>
        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <!-- Header -->
            <div class="text-center mb-12 md:mb-16">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-emerald-500/15 border border-emerald-500/30 text-xs font-black mb-4 text-emerald-500 uppercase tracking-widest shadow-sm">
                    <i class="fas fa-gauge-high"></i>
                    <span>سنجش عملکرد و سئو فنی (Core Web Vitals)</span>
                </div>
                <h2 class="text-3xl md:text-5xl font-black mb-4 text-readable tracking-tight">
                    کاهش ۹۷٪ حجم صفحات و جهش امتیاز <span class="text-indigo-500">Core Web Vitals</span>
                </h2>
                <p class="text-muted text-base md:text-lg max-w-3xl mx-auto leading-relaxed font-normal">
                    کپچاهای ابری خارجی با بارگذاری فایل‌های سنگین جاوااسکریپت و درخواست‌های بین‌المللی، امتیاز سرعت سایت شما در گوگل را نابود می‌کنند. در ادامه، مقایسه واقعی بنچمارک‌های سرعت سایت قبل و بعد از نصب گاردفای پرو را مشاهده کنید:
                </p>
            </div>

            <!-- Key Metric Cards (KPI Grid) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                <!-- KPI 1 -->
                <div class="p-6 rounded-[2rem] bg-[var(--card-current)] border border-[var(--border-current)] shadow-lg backdrop-blur-xl relative overflow-hidden group hover:border-emerald-500 transition-all duration-300">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 rounded-2xl bg-emerald-500/15 text-emerald-600 dark:text-emerald-400 flex items-center justify-center text-xl shrink-0 group-hover:scale-110 transition-transform">
                            <i class="fas fa-file-zipper"></i>
                        </div>
                        <span class="text-[11px] font-black px-2.5 py-1 rounded-full bg-emerald-500/15 dark:bg-emerald-500/25 text-emerald-700 dark:text-emerald-300 border border-emerald-500/30">۹۷٪ کاهش حجم</span>
                    </div>
                    <div class="text-xs font-black text-readable mb-1">حجم کل کدهای کپچا</div>
                    <div class="flex items-baseline gap-2 mb-2">
                        <span class="text-3xl font-black text-emerald-600 dark:text-emerald-400">۱۸ KB</span>
                        <span class="text-xs text-rose-500 dark:text-rose-400 line-through font-bold">۶۸۰ KB گوگل</span>
                    </div>
                    <p class="text-xs text-muted leading-relaxed font-normal">حذف صدها کیلوبایت کدهای تودرتوی خارجی و فشرده‌سازی حداکثری هسته داخلی.</p>
                </div>

                <!-- KPI 2 -->
                <div class="p-6 rounded-[2rem] bg-[var(--card-current)] border border-[var(--border-current)] shadow-lg backdrop-blur-xl relative overflow-hidden group hover:border-indigo-500 transition-all duration-300">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 rounded-2xl bg-indigo-500/15 text-indigo-600 dark:text-indigo-400 flex items-center justify-center text-xl shrink-0 group-hover:scale-110 transition-transform">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <span class="text-[11px] font-black px-2.5 py-1 rounded-full bg-indigo-500/15 dark:bg-indigo-500/25 text-indigo-700 dark:text-indigo-300 border border-indigo-500/30">۷۷٪ سریع‌تر</span>
                    </div>
                    <div class="text-xs font-black text-readable mb-1">زمان بزرگ‌ترین محتوا (LCP)</div>
                    <div class="flex items-baseline gap-2 mb-2">
                        <span class="text-3xl font-black text-indigo-600 dark:text-indigo-400">۰.۸۵s</span>
                        <span class="text-xs text-rose-500 dark:text-rose-400 line-through font-bold">۳.۸s قبل</span>
                    </div>
                    <p class="text-xs text-muted leading-relaxed font-normal">رسیدن به ناحیه سبز (Good) شاخص حیاتی LCP در سرچ کنسول گوگل.</p>
                </div>

                <!-- KPI 3 -->
                <div class="p-6 rounded-[2rem] bg-[var(--card-current)] border border-[var(--border-current)] shadow-lg backdrop-blur-xl relative overflow-hidden group hover:border-amber-500 transition-all duration-300">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 rounded-2xl bg-amber-500/15 text-amber-600 dark:text-amber-400 flex items-center justify-center text-xl shrink-0 group-hover:scale-110 transition-transform">
                            <i class="fas fa-hand-pointer"></i>
                        </div>
                        <span class="text-[11px] font-black px-2.5 py-1 rounded-full bg-amber-500/15 dark:bg-amber-500/25 text-amber-700 dark:text-amber-300 border border-amber-500/30">۹۵٪ روان‌تر</span>
                    </div>
                    <div class="text-xs font-black text-readable mb-1">تاخیر پاسخگویی فرم (INP)</div>
                    <div class="flex items-baseline gap-2 mb-2">
                        <span class="text-3xl font-black text-amber-600 dark:text-amber-400">۱۴ ms</span>
                        <span class="text-xs text-rose-500 dark:text-rose-400 line-through font-bold">۲۸۰ ms قبل</span>
                    </div>
                    <p class="text-xs text-muted leading-relaxed font-normal">رفع کامل قفل موقت مرورگر هنگام تایپ یا ارسال فرم‌ها توسط کاربر.</p>
                </div>

                <!-- KPI 4 -->
                <div class="p-6 rounded-[2rem] bg-[var(--card-current)] border border-[var(--border-current)] shadow-lg backdrop-blur-xl relative overflow-hidden group hover:border-purple-500 transition-all duration-300">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 rounded-2xl bg-purple-500/15 text-purple-600 dark:text-purple-400 flex items-center justify-center text-xl shrink-0 group-hover:scale-110 transition-transform">
                            <i class="fas fa-medal"></i>
                        </div>
                        <span class="text-[11px] font-black px-2.5 py-1 rounded-full bg-purple-500/15 dark:bg-purple-500/25 text-purple-700 dark:text-purple-300 border border-purple-500/30">+۳۶ نمره سئو</span>
                    </div>
                    <div class="text-xs font-black text-readable mb-1">امتیاز کل Google PageSpeed</div>
                    <div class="flex items-baseline gap-2 mb-2">
                        <span class="text-3xl font-black text-purple-600 dark:text-purple-400">۹۸</span>
                        <span class="text-xs text-rose-500 dark:text-rose-400 line-through font-bold">۶۲ قبل</span>
                    </div>
                    <p class="text-xs text-muted leading-relaxed font-normal">ارتقای رتبه سئو تکنیکال و افزایش نرخ تبدیل خرید در ووکامرس.</p>
                </div>
            </div>

            <!-- Visual Bar Chart Comparison Board -->
            <div class="p-8 md:p-12 rounded-[3.5rem] bg-[var(--card-current)] border border-[var(--border-current)] shadow-2xl relative">
                <div class="flex flex-col md:flex-row items-center justify-between gap-4 mb-8">
                    <div>
                        <h3 class="text-xl md:text-2xl font-black text-readable flex items-center gap-3">
                            <i class="fas fa-chart-column text-indigo-500"></i>
                            <span>نمودار مقایسه ستونی عملکرد: گاردفای پرو در برابر کپچاهای آنلاین خارجی</span>
                        </h3>
                        <p class="text-xs md:text-sm text-muted mt-1 font-medium">بررسی داده‌های حاصل از بنچمارک Lighthouse و WebPageTest روی سرورهای واقعی</p>
                    </div>
                    <div class="flex items-center gap-4 text-xs font-bold">
                        <div class="flex items-center gap-2">
                            <span class="w-3.5 h-3.5 rounded-md bg-emerald-500 shadow-sm"></span>
                            <span class="text-readable">گاردفای پرو (آفلاین بومی)</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-3.5 h-3.5 rounded-md bg-rose-500 shadow-sm"></span>
                            <span class="text-readable">کپچای آنلاین خارجی (reCAPTCHA)</span>
                        </div>
                    </div>
                </div>

                <!-- Recharts Interactive Mount Container with Fallback HTML/CSS bar visualization -->
                <div id="web-vitals-chart-root">
                    <div class="space-y-6 pt-4">
                        <div class="space-y-2">
                            <div class="flex justify-between text-xs font-bold">
                                <span class="text-slate-900 dark:text-slate-100 font-extrabold">حجم کل اسکریپت کپچا (دانلود اولیه مرورگر)</span>
                                <span class="text-emerald-600 dark:text-emerald-400 font-bold">گاردفای پرو: ۱۸ KB | گوگل: ۶۸۰ KB (۹۷٪ سبک‌تر)</span>
                            </div>
                            <div class="h-6 w-full bg-slate-200 dark:bg-slate-800 rounded-full overflow-hidden flex border border-slate-300 dark:border-slate-700">
                                <div class="bg-emerald-500 h-full rounded-r-full text-white text-[10px] font-black flex items-center justify-center px-2" style="width: 3%">۱۸KB</div>
                                <div class="bg-rose-500/90 h-full rounded-l-full text-white text-[10px] font-black flex items-center justify-center px-2" style="width: 97%">۶۸۰KB گوگل</div>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div class="flex justify-between text-xs font-bold">
                                <span class="text-slate-900 dark:text-slate-100 font-extrabold">شاخص LCP (بزرگ‌ترین المان محتوایی صفحه)</span>
                                <span class="text-indigo-600 dark:text-indigo-400 font-bold">گاردفای پرو: ۰.۸۵ ثانیه | گوگل: ۳.۸ ثانیه (۷۷٪ سریع‌تر)</span>
                            </div>
                            <div class="h-6 w-full bg-slate-200 dark:bg-slate-800 rounded-full overflow-hidden flex border border-slate-300 dark:border-slate-700">
                                <div class="bg-emerald-500 h-full rounded-r-full text-white text-[10px] font-black flex items-center justify-center px-2" style="width: 22%">۰.۸۵s</div>
                                <div class="bg-rose-500/90 h-full rounded-l-full text-white text-[10px] font-black flex items-center justify-center px-2" style="width: 78%">۳.۸s</div>
                            </div>
                        </div>
                        <div class="space-y-2">
                            <div class="flex justify-between text-xs font-bold">
                                <span class="text-slate-900 dark:text-slate-100 font-extrabold">امتیاز کل Google PageSpeed Lighthouse</span>
                                <span class="text-purple-600 dark:text-purple-400 font-bold">گاردفای پرو: ۹۸ از ۱۰۰ | گوگل: ۶۲ از ۱۰۰ (+۳۶ امتیاز سئو)</span>
                            </div>
                            <div class="h-6 w-full bg-slate-200 dark:bg-slate-800 rounded-full overflow-hidden flex border border-slate-300 dark:border-slate-700">
                                <div class="bg-emerald-500 h-full rounded-full text-white text-[10px] font-black flex items-center justify-center px-2" style="width: 98%">۹۸</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section with Integrated Rastchin Exclusive Sale -->
    <section id="pricing" class="py-16 md:py-20 pricing-section relative reveal">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-10 md:mb-12">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-emerald-500/15 border border-emerald-500/35 text-xs font-black mb-4 text-emerald-400 uppercase tracking-widest shadow-sm">
                    <i class="fas fa-crown text-emerald-400"></i>
                    <span>فروش انحصاری در راست‌چین (RTL-Theme)</span>
                </div>
                <h2 class="text-3xl md:text-5xl font-black mb-3 text-readable">
                    تهیه لایسنس و دریافت نسخه <span class="bg-gradient-to-r from-emerald-400 via-lime-400 to-emerald-300 bg-clip-text text-transparent">گاردفای پرو v4.00</span>
                </h2>
                <p class="text-muted text-base md:text-lg max-w-2xl mx-auto">
                    این افزونه به صورت انحصاری فقط در وب‌سایت <strong>راست‌چین (RTL-Theme)</strong> با پشتیبانی مستقیم DevBan عرضه می‌شود.
                </p>
            </div>
            
            <div class="max-w-5xl mx-auto">
                <div class="feature-card p-1 rounded-[3.5rem] overflow-hidden group shadow-2xl border-2 border-emerald-500/40">
                    <div class="bg-gradient-to-br from-emerald-950/30 via-[var(--card-current)] to-green-950/30 p-8 md:p-14 rounded-[3.3rem] flex flex-col lg:flex-row items-center gap-10">
                        <div class="lg:w-3/5 text-right">
                            <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-emerald-500/20 text-emerald-700 dark:text-emerald-300 border border-emerald-500/30 text-xs font-black mb-4">
                                <i class="fas fa-certificate"></i>
                                <span>فروش انحصاری در راست‌چین (RTL-Theme)</span>
                            </div>
                            <h3 class="text-2xl md:text-3xl font-black mb-4 text-readable">پکیج اورجینال گاردفای پرو</h3>
                            <p class="text-muted text-sm leading-relaxed font-normal mb-6">
                                تمامی خدمات پشتیبانی، فایل‌های آپدیت و کد لایسنس به صورت کاملاً رسمی و انحصاری از طریق پنل کاربری شما در راست‌چین ارائه می‌شود.
                            </p>

                            <ul class="space-y-3.5 text-sm font-bold">
                                <li class="flex items-center gap-3 text-readable">
                                    <div class="w-6 h-6 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center text-xs shrink-0">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <span>لایسنس مادام‌العمر و بدون انقضا با پشتیبانی کامل</span>
                                </li>
                                <li class="flex items-center gap-3 text-readable">
                                    <div class="w-6 h-6 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center text-xs shrink-0">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <span>۶ ماه پشتیبانی اختصاصی و مستقیم تیم DevBan در راست‌چین</span>
                                </li>
                                <li class="flex items-center gap-3 text-readable">
                                    <div class="w-6 h-6 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center text-xs shrink-0">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <span>دسترسی کامل به تمامی امکانات (کپچای آفلاین، WP-Login Pro، سوئیچر)</span>
                                </li>
                                <li class="flex items-center gap-3 text-readable">
                                    <div class="w-6 h-6 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center text-xs shrink-0">
                                        <i class="fas fa-check"></i>
                                    </div>
                                    <span>دانلود مستقیم و آنی آخرین فایل‌ها و آپدیت‌ها از پنل خریداران راست‌چین</span>
                                </li>
                            </ul>
                        </div>

                        <div class="lg:w-2/5 w-full">
                            <div class="bg-gradient-to-tr from-emerald-600 via-emerald-500 to-lime-500 p-8 md:p-10 rounded-[2.5rem] text-center shadow-2xl shadow-emerald-500/30 text-slate-950">
                                <div class="w-16 h-16 rounded-2xl bg-slate-950/20 text-slate-950 flex items-center justify-center mx-auto mb-4 text-3xl font-black">
                                    <i class="fas fa-store"></i>
                                </div>
                                <div class="text-xs uppercase font-black tracking-widest text-slate-950 mb-1">RTL-Theme.com</div>
                                <div class="text-2xl md:text-3xl font-black mb-2 text-slate-950">خرید از راست‌چین</div>
                                <p class="text-xs text-slate-950 font-extrabold mb-6">تضمین اصالت کدها و لایسنس رسمی</p>
                                
                                <a href="https://www.rtl-theme.com" target="_blank" rel="noopener noreferrer" class="block w-full py-4 rounded-2xl bg-slate-950 hover:bg-slate-900 text-emerald-400 font-black text-base transition-all shadow-xl hover:scale-105">
                                    <i class="fas fa-crown ml-2"></i> خرید انحصاری از راست‌چین
                                </a>
                                <p class="text-[10px] text-slate-950 font-bold mt-3">تحویل آنی فایل و کد لایسنس بلافاصله پس از خرید</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-16 md:py-20 relative overflow-hidden reveal">
        <div class="absolute inset-0 pattern-grid"></div>
        <div class="max-w-4xl mx-auto px-6 relative z-10">
            <div class="text-center mb-10 md:mb-12">
                <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-indigo-500/10 border border-indigo-500/25 text-xs font-black mb-4 text-indigo-400 uppercase tracking-widest shadow-sm">
                    <i class="fas fa-circle-question"></i>
                    <span>مرکز راهنمایی و پاسخ‌ها</span>
                </div>
                <h2 class="text-3xl md:text-5xl font-black mb-3 text-readable">سوالات <span class="text-indigo-500">متداول</span></h2>
                <p class="text-muted text-base md:text-lg max-w-2xl mx-auto">پاسخ به پرتکرارترین پرسش‌های کاربران درباره نصب، سازگاری و عملکرد گاردفای پرو</p>
            </div>

            <div class="space-y-4">
                <div class="accordion-item p-6 rounded-3xl bg-[var(--card-current)] border border-[var(--border-current)] transition-all">
                    <div class="accordion-header py-0">
                        <h4 class="text-lg font-black text-readable flex items-center gap-3">
                            <i class="fas fa-shopping-cart text-indigo-500 text-sm"></i>
                            <span>آیا گاردفای با ووکامرس، دکان و فرم‌سازها کاملاً سازگار است؟</span>
                        </h4>
                        <i class="fas fa-chevron-down accordion-icon text-muted group-hover:text-indigo-500"></i>
                    </div>
                    <div class="accordion-content">
                        <p class="text-sm text-muted leading-relaxed pt-4 font-normal">بله، گاردفای پرو به صورت خودکار و بدون نیاز به حتی یک خط کدنویسی با فرم ورود، عضویت و تسویه‌حساب ووکامرس، پنل فروشندگان دکان (Dokan)، و تمامی فرم‌سازهای استاندارد وردپرس (Gravity Forms, WPForms, Contact Form 7, Elementor Forms) سازگار است.</p>
                    </div>
                </div>

                <div class="accordion-item p-6 rounded-3xl bg-[var(--card-current)] border border-[var(--border-current)] transition-all">
                    <div class="accordion-header py-0">
                        <h4 class="text-lg font-black text-readable flex items-center gap-3">
                            <i class="fas fa-wifi text-indigo-500 text-sm"></i>
                            <span>حالت آفلاین (موتور محلی) چگونه عمل می‌کند و چه مزیتی دارد؟</span>
                        </h4>
                        <i class="fas fa-chevron-down accordion-icon text-muted group-hover:text-indigo-500"></i>
                    </div>
                    <div class="accordion-content">
                        <p class="text-sm text-muted leading-relaxed pt-4 font-normal">گاردفای دارای یک موتور مستقل در هسته PHP و جاوااسکریپت افزونه است که کلیه چالش‌های امنیتی (ریاضی، اسلایدر، آیکون، هانی‌پات) را بدون ارسال هیچ درخواستی به سرورهای خارجی (نظیر گوگل یا کلودفلر) تولید و ارزیابی می‌کند. این قابلیت پایداری ۱۰۰٪ فرم‌ها را در زمان اختلال اینترنت بین‌الملل، فیلترینگ یا تحریم‌های فنی تضمین می‌نماید.</p>
                    </div>
                </div>

                <div class="accordion-item p-6 rounded-3xl bg-[var(--card-current)] border border-[var(--border-current)] transition-all">
                    <div class="accordion-header py-0">
                        <h4 class="text-lg font-black text-readable flex items-center gap-3">
                            <i class="fas fa-bolt text-indigo-500 text-sm"></i>
                            <span>سیستم سوئیچ هوشمند (Smart Failover) چگونه کار می‌کند؟</span>
                        </h4>
                        <i class="fas fa-chevron-down accordion-icon text-muted group-hover:text-indigo-500"></i>
                    </div>
                    <div class="accordion-content">
                        <p class="text-sm text-muted leading-relaxed pt-4 font-normal">فناوری Smart Failover به شما اجازه می‌دهد از سرویس‌های آنلاین بین‌المللی نظیر Google reCAPTCHA v2/v3 یا Cloudflare Turnstile استفاده کنید، اما در صورت بروز هرگونه اختلال، کندی شبکه یا عدم پاسخگویی سرور خارجی، سیستم به صورت کاملاً خودکار و با تاخیر ۰ میلی‌ثانیه چالش را روی موتور محلی و آفلاین سوئیچ می‌کند تا ارسال فرم‌های سایت هرگز مسدود نشود.</p>
                    </div>
                </div>

                <div class="accordion-item p-6 rounded-3xl bg-[var(--card-current)] border border-[var(--border-current)] transition-all">
                    <div class="accordion-header py-0">
                        <h4 class="text-lg font-black text-readable flex items-center gap-3">
                            <i class="fas fa-shield-virus text-indigo-500 text-sm"></i>
                            <span>سیستم محافظت در برابر حملات بازپخش (Replay Attack Guard) چگونه مانع هکرها می‌شود؟</span>
                        </h4>
                        <i class="fas fa-chevron-down accordion-icon text-muted group-hover:text-indigo-500"></i>
                    </div>
                    <div class="accordion-content">
                        <p class="text-sm text-muted leading-relaxed pt-4 font-normal">گاردفای پرو برای هر درخواست و بارگذاری فرم، یک توکن رمزنگاری‌شده یک‌بار مصرف مبتنی بر HMAC-SHA256 با انقضای زمانی معین تولید می‌کند. به محض اعتبارسنجی اولیه، توکن فوراً باطل می‌شود؛ در نتیجه هیچ مهاجمی نمی‌تواند با ضبط پاسخ کپچای معتبر، آن را مجدداً برای حملات Brute Force یا ارسال اسپم استفاده کند.</p>
                    </div>
                </div>

                <div class="accordion-item p-6 rounded-3xl bg-[var(--card-current)] border border-[var(--border-current)] transition-all">
                    <div class="accordion-header py-0">
                        <h4 class="text-lg font-black text-readable flex items-center gap-3">
                            <i class="fas fa-gauge-high text-indigo-500 text-sm"></i>
                            <span>آیا استفاده از گاردفای پرو سرعت سایت را کاهش می‌دهد؟</span>
                        </h4>
                        <i class="fas fa-chevron-down accordion-icon text-muted group-hover:text-indigo-500"></i>
                    </div>
                    <div class="accordion-content">
                        <p class="text-sm text-muted leading-relaxed pt-4 font-normal">خیر، برعکس! به دلیل حذف اسکریپت‌های سنگین چندصد کیلوبایتی گوگل و عدم وجود درخواست‌های خارجی کند، گاردفای سرعت لود فرم‌های سایت را تا ۴۰٪ افزایش داده و امتیاز Core Web Vitals را بهبود می‌بخشد.</p>
                    </div>
                </div>

                <div class="accordion-item p-6 rounded-3xl bg-[var(--card-current)] border border-[var(--border-current)] transition-all">
                    <div class="accordion-header py-0">
                        <h4 class="text-lg font-black text-readable flex items-center gap-3">
                            <i class="fas fa-key text-indigo-500 text-sm"></i>
                            <span>آیا برای استفاده از گاردفای به ثبت کلید API یا پرداخت اشتراک ماهانه نیاز است؟</span>
                        </h4>
                        <i class="fas fa-chevron-down accordion-icon text-muted group-hover:text-indigo-500"></i>
                    </div>
                    <div class="accordion-content">
                        <p class="text-sm text-muted leading-relaxed pt-4 font-normal">خیر، برای استفاده از موتور محلی گاردفای هیچ نیازی به ثبت‌نام در سرویس‌های خارجی یا دریافت API Key نیست و افزونه بلافاصله پس از نصب فعال است. همچنین لایسنس نسخه پرو دائمی و بدون انقضا با آپدیت‌های دائمی ارائه می‌شود.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </main>

<?php include __DIR__ . "/footer.php"; ?>
