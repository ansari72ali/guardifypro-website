<?php
/**
 * Guardify Pro - Official Plugin User Manual & Interactive Panel Guide
 * (دفترچه راهنمای جامع و دستورالعمل پیکربندی افزونه گاردفای پرو)
 */
$page_title = "دفترچه راهنمای جامع افزونه گاردفای پرو | Guardify Pro Plugin Manual";
$page_description = "دستورالعمل کامل پیکربندی، تنظیمات پیشخوان وردپرس، سخت‌سازی لاگین، سوییچر Failover، فایروال و حفاظت ووکامرس در افزونه گاردفای پرو.";
$current_page = "guide";

include_once __DIR__ . '/header.php';
?>

<!-- Include Plugin Preview & Captcha Styles for Authentic Embedded Panel Rendering -->
<link rel="stylesheet" href="/css/captcha-themes.css">
<link rel="stylesheet" href="/css/login-plugin.css">
<link rel="stylesheet" href="/css/plugin-preview.css">

<!-- ========================================================================= -->
<!-- OFFICIAL MANUAL HERO BANNER -->
<!-- ========================================================================= -->
<section class="py-12 md:py-16 relative overflow-hidden bg-gradient-to-b from-slate-950 via-indigo-950 to-slate-950 text-white border-b border-slate-800">
    <div class="absolute inset-0 pointer-events-none overflow-hidden opacity-30">
        <div class="absolute inset-0 geo-hex-pattern"></div>
        <div class="absolute -top-24 right-1/4 w-96 h-96 bg-indigo-500/20 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-24 left-1/4 w-96 h-96 bg-purple-500/20 rounded-full blur-3xl"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 relative z-10 text-center space-y-5">
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-indigo-500/20 border border-indigo-400/40 text-indigo-300 text-xs font-black shadow-md">
            <i class="fas fa-book-bookmark text-amber-300"></i>
            <span>دفترچه راهنمای رسمی و مستندات کاربری گاردفای پرو</span>
        </div>

        <h1 class="text-3xl sm:text-5xl font-black tracking-tight leading-tight max-w-4xl mx-auto text-white">
            دستورالعمل جامع پیکربندی و <span class="bg-gradient-to-r from-indigo-400 via-purple-300 to-amber-300 bg-clip-text text-transparent">راهنمای کاربری پنل افزونه</span> گاردفای پرو
        </h1>

        <p class="text-slate-300 text-xs sm:text-base leading-relaxed max-w-3xl mx-auto font-medium">
            این راهنما به عنوان مرجع کاربری افزونه گاردفای پرو ارائه شده است. در ادامه، تمام فصل‌ها، تنظیمات پیشخوان وردپرس، مانیتورینگ فایروال و قابلیت‌های عملیاتی افزونه به صورت مفصل تشریح شده‌اند.
        </p>

        <!-- Quick Jump Buttons -->
        <div class="flex flex-wrap items-center justify-center gap-3 pt-3">
            <a href="#manual-chapters" class="px-6 py-3.5 rounded-2xl bg-indigo-600 hover:bg-indigo-500 text-white font-black text-xs sm:text-sm shadow-xl shadow-indigo-600/30 transition-all flex items-center gap-2">
                <i class="fas fa-book-open text-amber-300"></i>
                <span>مطالعه فصل‌های راهنما</span>
            </a>
            <a href="#embedded-panel-stage" class="px-6 py-3.5 rounded-2xl bg-slate-800 hover:bg-slate-700 text-slate-200 font-bold text-xs sm:text-sm border border-slate-700 transition-all flex items-center gap-2">
                <i class="fas fa-gauge-high text-indigo-400"></i>
                <span>مشاهده و تست مستقیم پنل مدیریت</span>
            </a>
        </div>
    </div>
</section>


<!-- ========================================================================= -->
<!-- CHAPTERS OF THE OFFICIAL MANUAL -->
<!-- ========================================================================= -->
<section id="manual-chapters" class="py-12 md:py-16 relative bg-slate-50 dark:bg-slate-950">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 space-y-12">

        <div class="text-center max-w-3xl mx-auto space-y-2">
            <span class="text-xs font-black text-indigo-600 dark:text-indigo-400 uppercase tracking-widest bg-indigo-50 dark:bg-indigo-500/10 px-3.5 py-1 rounded-full inline-block border border-indigo-200 dark:border-indigo-800">
                دستورالعمل‌های عملیاتی
            </span>
            <h2 class="text-2xl sm:text-4xl font-black text-slate-900 dark:text-white">
                راهنمای فصل‌به‌فصل تنظیمات افزونه
            </h2>
            <p class="text-slate-600 dark:text-slate-400 text-xs sm:text-sm">
                توضیح کامل کاربرد تمامی گزینه‌ها، فیلدها و ابزارهای موجود در پیشخوان وردپرس
            </p>
        </div>


        <!-- CHAPTER 1: GENERAL SETTINGS & LICENSE -->
        <div class="p-6 sm:p-8 rounded-3xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-xl space-y-6">
            <div class="flex items-center gap-3 pb-4 border-b border-slate-200 dark:border-slate-800">
                <div class="w-10 h-10 rounded-2xl bg-indigo-600 text-white flex items-center justify-center text-lg font-black shadow-md">
                    ۱
                </div>
                <div>
                    <h3 class="text-lg sm:text-xl font-black text-slate-900 dark:text-white">فصل اول: تنظیمات اصلی، فعال‌سازی لایسنس و کشینگ</h3>
                    <span class="text-xs text-slate-500 dark:text-slate-400 font-bold">پیکربندی پایه و راه‌اندازی اولیه موتور امنیتی</span>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="space-y-4">
                    <div class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200 dark:border-slate-700/80 space-y-2">
                        <strong class="text-slate-900 dark:text-white text-xs sm:text-sm font-black flex items-center gap-2">
                            <i class="fas fa-key text-amber-500"></i>
                            ۱. فیلد کلید لایسنس (License Key)
                        </strong>
                        <p class="text-slate-600 dark:text-slate-400 text-xs leading-relaxed font-medium">
                            جهت دریافت به‌روزرسانی‌های خودکار از پیشخوان وردپرس و فعال‌سازی لایسنس رسمی، کد لایسنس خریداری‌شده را در این بخش وارد کرده و دکمه اعتبارسنجی را کلیک کنید.
                        </p>
                    </div>

                    <div class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200 dark:border-slate-700/80 space-y-2">
                        <strong class="text-slate-900 dark:text-white text-xs sm:text-sm font-black flex items-center gap-2">
                            <i class="fas fa-toggle-on text-emerald-500"></i>
                            ۲. وضعیت عمومی افزونه (Enable Plugin Engine)
                        </strong>
                        <p class="text-slate-600 dark:text-slate-400 text-xs leading-relaxed font-medium">
                            سوییچ اصلی فعال/غیرفعال‌سازی موتور گاردفای پرو. در صورت غیرفعال کردن، تمامی چالش‌های کپچا و سخت‌سازی‌های ورود متوقف می‌شوند.
                        </p>
                    </div>
                </div>

                <div class="space-y-4">
                    <div class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200 dark:border-slate-700/80 space-y-2">
                        <strong class="text-slate-900 dark:text-white text-xs sm:text-sm font-black flex items-center gap-2">
                            <i class="fas fa-server text-indigo-500"></i>
                            ۳. حالت کاری (Working Mode: Native vs Failover)
                        </strong>
                        <p class="text-slate-600 dark:text-slate-400 text-xs leading-relaxed font-medium">
                            <strong>حالت بومی (Native Only):</strong> پردازش ۱۰۰٪ محلی بدون هیچ وابسته به خارج.<br>
                            <strong>حالت ترکیبی (Failover Hybrid):</strong> استفاده اولیه از گوگل ری‌کپچا و سوییچ خودکار به بومی در صورت قطعی یا تاخیر شبکه.
                        </p>
                    </div>

                    <div class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200 dark:border-slate-700/80 space-y-2">
                        <strong class="text-slate-900 dark:text-white text-xs sm:text-sm font-black flex items-center gap-2">
                            <i class="fas fa-bolt text-amber-500"></i>
                            ۴. تنظیمات کشینگ (LiteSpeed & WP Rocket Bypass)
                        </strong>
                        <p class="text-slate-600 dark:text-slate-400 text-xs leading-relaxed font-medium">
                            فعال‌سازی این گزینه باعث تولید توکن‌های پویا از طریق AJAX می‌شود تا صفحه حاوی کپچا توسط افزونه‌های کشینگ مانند لایت‌اسپید کش یا راکت استاتیک نشده و خطای انقضای توکن رخ ندهد.
                        </p>
                    </div>
                </div>
            </div>

            <!-- PRO TIP CALLOUT -->
            <div class="p-4 rounded-2xl bg-indigo-50 dark:bg-indigo-950/60 border border-indigo-200 dark:border-indigo-800 text-xs space-y-1.5">
                <strong class="text-indigo-950 dark:text-indigo-300 font-black flex items-center gap-2 text-sm">
                    <i class="fas fa-lightbulb text-amber-500"></i>
                    توصیه پیکربندی بهینه:
                </strong>
                <p class="text-slate-700 dark:text-slate-300 leading-relaxed font-medium">
                    اگر سرور شما در داخل کشور (دیتاسنترهای داخلی) میزبانی می‌شود، حالت کاری را روی <strong>«۱۰۰٪ بومی و آفلاین (Native Engine)»</strong> قرار دهید تا سرعت لود فرم‌ها به حداکثر ممکن (زیر ۰.۵ ثانیه) برسد.
                </p>
            </div>
        </div>


        <!-- CHAPTER 2: CAPTCHA MODALITIES CONFIGURATION -->
        <div class="p-6 sm:p-8 rounded-3xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-xl space-y-6">
            <div class="flex items-center gap-3 pb-4 border-b border-slate-200 dark:border-slate-800">
                <div class="w-10 h-10 rounded-2xl bg-purple-600 text-white flex items-center justify-center text-lg font-black shadow-md">
                    ۲
                </div>
                <div>
                    <h3 class="text-lg sm:text-xl font-black text-slate-900 dark:text-white">فصل دوم: مدیریت ماژول‌ها و چالش‌های کپچا</h3>
                    <span class="text-xs text-slate-500 dark:text-slate-400 font-bold">تعیین نوع چالش انسان‌سنجی برای فرم‌های مختلف سایت</span>
                </div>
            </div>

            <div class="space-y-4">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200 dark:border-slate-700/80 space-y-2">
                        <strong class="text-slate-900 dark:text-white text-xs sm:text-sm font-black block">
                            چالش اسلایدر پازلی (Puzzle Slider)
                        </strong>
                        <p class="text-slate-600 dark:text-slate-400 text-xs leading-relaxed font-medium">
                            کاربر دستگیره را به سمت چپ می‌کشد تا پازل تکمیل شود. این ماژول بهترین گزینه برای فرم ورود کاربران و ثبت سفارش ووکامرس است.
                        </p>
                    </div>

                    <div class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200 dark:border-slate-700/80 space-y-2">
                        <strong class="text-slate-900 dark:text-white text-xs sm:text-sm font-black block">
                            چالش ریاضی (Math Calculations)
                        </strong>
                        <p class="text-slate-600 dark:text-slate-400 text-xs leading-relaxed font-medium">
                            تولید سوالات جمع و تفریق یا ضرب دو عددی. شما می‌توانید درجه سختی سوالات (ساده، متوسط یا ترکیبی) را در تنظیمات تعیین کنید.
                        </p>
                    </div>

                    <div class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200 dark:border-slate-700/80 space-y-2">
                        <strong class="text-slate-900 dark:text-white text-xs sm:text-sm font-black block">
                            تله مخفی هانی‌پات (Invisible Honeypot)
                        </strong>
                        <p class="text-slate-600 dark:text-slate-400 text-xs leading-relaxed font-medium">
                            ایجاد فیلد مخفی در HTML که انسان‌ها نمی‌بینند ولی ربات‌های اسپمر آن را پر می‌کنند. به محض پر شدن، ورود ربات مسدود می‌شود.
                        </p>
                    </div>
                </div>

                <div class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200 dark:border-slate-700/80 space-y-2">
                    <strong class="text-slate-900 dark:text-white text-xs sm:text-sm font-black flex items-center gap-2">
                        <i class="fas fa-list-check text-purple-500"></i>
                        نقشه‌برداری چالش‌ها به فرم‌ها (Form-to-Captcha Mapping)
                    </strong>
                    <p class="text-slate-600 dark:text-slate-400 text-xs leading-relaxed font-medium">
                        در این بخش از پنل، مشخص می‌کنید که کدام فرم از کدام چالش استفاده کند. به عنوان مثال: فرم ورود (`wp-login.php`) ➔ اسلایدر پازلی | فرم دیدگاه‌ها ➔ تله هانی‌پات | فرم تسویه‌حساب ووکامرس ➔ اسلایدر پازلی.
                    </p>
                </div>
            </div>
        </div>


        <!-- CHAPTER 3: WP-LOGIN HARDENING -->
        <div class="p-6 sm:p-8 rounded-3xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-xl space-y-6">
            <div class="flex items-center gap-3 pb-4 border-b border-slate-200 dark:border-slate-800">
                <div class="w-10 h-10 rounded-2xl bg-rose-600 text-white flex items-center justify-center text-lg font-black shadow-md">
                    ۳
                </div>
                <div>
                    <h3 class="text-lg sm:text-xl font-black text-slate-900 dark:text-white">فصل سوم: سخت‌سازی و ایمن‌سازی صفحه ورود (WP-Login Hardening)</h3>
                    <span class="text-xs text-slate-500 dark:text-slate-400 font-bold">جلوگیری از حملات Brute-Force و مخفی‌سازی آدرس لاگین</span>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200 dark:border-slate-700/80 space-y-2">
                    <strong class="text-slate-900 dark:text-white text-xs sm:text-sm font-black flex items-center gap-2">
                        <i class="fas fa-shield-virus text-rose-500"></i>
                        ۱. محدودسازی تلاش‌های ناموفق ورود (Anti-Brute-Force Limit)
                    </strong>
                    <p class="text-slate-600 dark:text-slate-400 text-xs leading-relaxed font-medium">
                        تعیین تعداد مجاز وارد کردن رمز اشتباه (مثلاً ۳ یا ۵ بار). پس از عبور از این حد، آی‌پی کاربر به صورت خودکار به مدت زمان مشخص شده (مثلاً ۲۴ ساعت) مسدود می‌گردد.
                    </p>
                </div>

                <div class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200 dark:border-slate-700/80 space-y-2">
                    <strong class="text-slate-900 dark:text-white text-xs sm:text-sm font-black flex items-center gap-2">
                        <i class="fas fa-user-secret text-indigo-500"></i>
                        ۲. تغییر آدرس لاگین وردپرس (Hide Login Slug)
                    </strong>
                    <p class="text-slate-600 dark:text-slate-400 text-xs leading-relaxed font-medium">
                        آدرس پیش‌فرض `wp-login.php` و `wp-admin` را غیرفعال کرده و یک نام مستعار اختصاصی (مانند `my-private-entrance`) تعیین کنید تا هکرها نتوانند صفحه ورود شما را اسکن کنند.
                    </p>
                </div>
            </div>
        </div>


        <!-- CHAPTER 4: FAILOVER SWITCH & NETWORK MONITORING -->
        <div class="p-6 sm:p-8 rounded-3xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-xl space-y-6">
            <div class="flex items-center gap-3 pb-4 border-b border-slate-200 dark:border-slate-800">
                <div class="w-10 h-10 rounded-2xl bg-amber-500 text-white flex items-center justify-center text-lg font-black shadow-md">
                    ۴
                </div>
                <div>
                    <h3 class="text-lg sm:text-xl font-black text-slate-900 dark:text-white">فصل چهارم: تنظیمات سوییچر Failover و پایش شبکه</h3>
                    <span class="text-xs text-slate-500 dark:text-slate-400 font-bold">پایش لحظه‌ای پینگ سرویس‌های خارجی و سوییچ خودکار به بومی</span>
                </div>
            </div>

            <div class="space-y-4">
                <div class="p-4 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200 dark:border-slate-700/80 space-y-2">
                    <strong class="text-slate-900 dark:text-white text-xs sm:text-sm font-black flex items-center gap-2">
                        <i class="fas fa-gauge text-amber-500"></i>
                        حد آستانه تاخیر پاسخگویی (Latency Threshold)
                    </strong>
                    <p class="text-slate-600 dark:text-slate-400 text-xs leading-relaxed font-medium">
                        تعیین حداکثر زمان انتظار برای لود اسکریپت گوگل ری‌کپچا (بر حسب میلی‌ثانیه، مثلاً ۲۰۰ms). اگر پاسخگویی گوگل بیشتر از این حد زمان ببرد یا کلاً قطعی رخ دهد، موتور Failover در ۰.۲ میلی‌ثانیه کپچای بومی را جایگزین می‌کند.
                    </p>
                </div>
            </div>
        </div>


        <!-- CHAPTER 5: FIREWALL RADAR & LOGS -->
        <div class="p-6 sm:p-8 rounded-3xl bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 shadow-xl space-y-6">
            <div class="flex items-center gap-3 pb-4 border-b border-slate-200 dark:border-slate-800">
                <div class="w-10 h-10 rounded-2xl bg-emerald-600 text-white flex items-center justify-center text-lg font-black shadow-md">
                    ۵
                </div>
                <div>
                    <h3 class="text-lg sm:text-xl font-black text-slate-900 dark:text-white">فصل پنجم: فایروال زنده، رادار رویدادها و دریافت گزارشات</h3>
                    <span class="text-xs text-slate-500 dark:text-slate-400 font-bold">پایش رویدادها، تحلیل حملات و دریافت خروجی اکسل/CSV</span>
                </div>
            </div>

            <div class="space-y-4">
                <p class="text-slate-600 dark:text-slate-300 text-xs sm:text-sm leading-relaxed font-medium">
                    جدول لاگ‌های امنیتی تمام جزئیات پردازش‌ها را ثبت می‌کند:
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs">
                    <div class="p-3.5 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200 dark:border-slate-700/80">
                        <strong class="text-rose-600 dark:text-rose-400 font-black block mb-1">[BLOCK]</strong>
                        <span class="text-slate-600 dark:text-slate-400 font-medium">حملات بروت فورس مسدود شده بر روی فرم ورود.</span>
                    </div>
                    <div class="p-3.5 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200 dark:border-slate-700/80">
                        <strong class="text-amber-600 dark:text-amber-400 font-black block mb-1">[TRAP]</strong>
                        <span class="text-slate-600 dark:text-slate-400 font-medium">ربات‌های اسپمر شناسایی‌شده در تله مخفی هانی‌پات.</span>
                    </div>
                    <div class="p-3.5 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200 dark:border-slate-700/80">
                        <strong class="text-emerald-600 dark:text-emerald-400 font-black block mb-1">[ALLOW]</strong>
                        <span class="text-slate-600 dark:text-slate-400 font-medium">ورودها و تسویه‌حساب‌های موفق کاربران واقعی.</span>
                    </div>
                    <div class="p-3.5 rounded-2xl bg-slate-50 dark:bg-slate-800/60 border border-slate-200 dark:border-slate-700/80">
                        <strong class="text-indigo-600 dark:text-indigo-400 font-black block mb-1">[ACTIVE]</strong>
                        <span class="text-slate-600 dark:text-slate-400 font-medium">عملیات سوییچر Failover و زمان تاخیر پاسخگویی.</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<!-- ========================================================================= -->
<!-- EMBEDDED LIVE WORDPRESS ADMIN PANEL STAGE -->
<!-- ========================================================================= -->
<section id="embedded-panel-stage" class="py-12 md:py-16 relative bg-slate-900 border-t border-b border-slate-800 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 space-y-6">

        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 pb-4 border-b border-slate-800">
            <div>
                <span class="text-xs font-black text-indigo-400 uppercase tracking-widest block">نمای واقعی پیشخوان وردپرس</span>
                <h2 class="text-xl sm:text-3xl font-black text-white">
                    پنل تعاملی مدیریت گاردفای پرو (WP-Admin Shell)
                </h2>
            </div>
            <span class="px-3.5 py-1.5 rounded-xl bg-emerald-500/20 border border-emerald-500/40 text-emerald-300 text-xs font-black">
                <i class="fas fa-check-circle text-emerald-400"></i>
                آماده بررسی و تست گزینه‌ها
            </span>
        </div>

        <p class="text-xs sm:text-sm text-slate-300 leading-relaxed font-medium">
            در این بخش، خروجی کامل و واقعی پنل مدیریت گاردفای پرو در پیشخوان وردپرس (مطابق با ساختار استخراج‌شده از افزونه) قرار داده شده است. شما می‌توانید تب‌ها و گزینه‌های مختلف را لمس و بررسی کنید:
        </p>

        <!-- Authentic WordPress Shell Wrapper -->
        <div id="pane-master-admin" class="rounded-3xl overflow-hidden border-2 border-slate-700 shadow-2xl bg-[#f0f0f1] text-[#3c434a]">
            
            <!-- WordPress Top Admin Bar Bar -->
            <div id="wpadminbar" style="background:#1d2327; color:#f0f0f1; height:32px; display:flex; align-items:center; justify-content:space-between; px-3; padding:0 12px; font-size:12px;" dir="rtl">
                <div style="display:flex; align-items:center; gap:12px;">
                    <span style="font-weight:bold; color:#fff;"><i class="fab fa-wordpress"></i> پیشخوان وردپرس</span>
                    <span style="color:#a7aaad;">|</span>
                    <span style="color:#f0f0f1;">گاردفای پرو v4.00</span>
                </div>
                <div style="font-size:11px; color:#a7aaad;">
                    مدیر سیستم (Admin)
                </div>
            </div>

            <!-- WordPress Body Layout -->
            <div class="wp-simulation-container" style="display:flex; min-h-[600px];">
                
                <!-- Left Sidebar Menu -->
                <nav id="adminmenumain" style="width:160px; background:#1d2327; color:#f0f0f1; padding:12px 0; font-size:12px; shrink-0;" dir="rtl">
                    <div style="padding:8px 12px; color:#a7aaad; font-weight:bold; font-size:11px;">منوی اصلی</div>
                    <div style="padding:10px 12px; background:#2c3338; color:#fff; font-weight:bold; border-right:4px solid #72aee6; display:flex; items-center; gap:8px;">
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

<!-- Include Interactive Scripts for Panel Tabs -->
<script src="/js/demo-studio.js"></script>

<?php include_once __DIR__ . '/footer.php'; ?>
