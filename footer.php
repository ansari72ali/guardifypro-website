<?php
/**
 * Guardify Pro Universal Footer Component
 * Shared across index.php, demo.php, preview.php, and guide.php
 */
if (!isset($current_page)) {
    $current_page = "home";
}
?>
    <!-- Unified High-Tech Modern Footer with Clear Visual Hierarchy -->
    <footer class="relative mt-auto pt-16 pb-24 lg:pb-12 bg-slate-100 dark:bg-[#050811] border-t border-slate-200/90 dark:border-slate-800/90 text-slate-600 dark:text-slate-300 overflow-hidden">
        
        <!-- Subtle Top Luminous Accent Line & Ambient Glow -->
        <div class="absolute top-0 inset-x-0 h-[2px] bg-gradient-to-r from-transparent via-indigo-500/60 to-transparent pointer-events-none" aria-hidden="true"></div>
        <div class="absolute -top-24 right-1/4 w-96 h-48 bg-indigo-500/10 dark:bg-indigo-500/10 rounded-full blur-3xl pointer-events-none" aria-hidden="true"></div>
        <div class="absolute -bottom-24 left-1/4 w-96 h-48 bg-emerald-500/10 dark:bg-emerald-500/10 rounded-full blur-3xl pointer-events-none" aria-hidden="true"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6">
            
            <!-- Top Footer Grid (12-Column Responsive Architecture for Optimal Hierarchy) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-8 lg:gap-10 pb-12 border-b border-slate-200/90 dark:border-slate-800/80 text-right">
                
                <!-- Col 1 (4 Cols on Desktop): Brand Identity, Summary & Ecosystem Badges -->
                <div class="lg:col-span-4 space-y-5">
                    <div class="flex items-start justify-between gap-3">
                        <a href="<?php echo $current_page === 'home' ? '#hero' : '/'; ?>" class="flex items-center gap-3.5 group cursor-pointer" aria-label="گاردفای پرو">
                            <div class="bg-gradient-to-tr from-indigo-600 to-indigo-500 w-12 h-12 rounded-2xl flex items-center justify-center shadow-lg shadow-indigo-600/30 shrink-0">
                                <i class="fas fa-shield-halved text-white text-xl"></i>
                            </div>
                            <div>
                                <div class="flex items-center gap-2">
                                    <span class="text-xl font-black text-slate-900 dark:text-white group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition-colors">
                                        گاردفای <span class="text-indigo-600 dark:text-indigo-400">پرو</span>
                                    </span>
                                    <span class="px-2 py-0.5 rounded-md bg-indigo-500/15 border border-indigo-500/30 text-indigo-700 dark:text-indigo-300 text-[10px] font-black">
                                        v4.00 Pro
                                    </span>
                                </div>
                                <span class="text-xs text-slate-500 dark:text-slate-400 font-bold block mt-0.5">
                                    سامانه کپچای بومی و سپر امنیتی ورود وردپرس
                                </span>
                            </div>
                        </a>
                    </div>
                    
                    <p class="text-xs sm:text-[13px] text-slate-600 dark:text-slate-300 leading-7 font-medium text-justify sm:text-right">
                        گاردفای پرو (Guardify Pro) افزونه کپچای ۱۰۰٪ بومی و آفلاین وردپرس و ووکامرس است؛ با بار مصرفی زیر ۱۰ کیلوبایت روی لود فرانت‌اند سایت، بدون وابستگی به سرورهای خارجی و کاملاً پایدار در شرایط اینترنت ملی.
                    </p>

                    <!-- Structured Tech Compatibility Pills -->
                    <div class="space-y-2 pt-1">
                        <span class="text-[11px] font-black text-slate-800 dark:text-slate-200 flex items-center gap-1.5">
                            <i class="fas fa-microchip text-indigo-500 text-xs"></i>
                            <span>استانداردهای فنی و سازگاری:</span>
                        </span>
                        <div class="flex flex-wrap items-center gap-1.5 text-[11px] font-bold">
                            <span class="px-2.5 py-1 rounded-lg bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-700 dark:text-slate-300">
                                وردپرس ۵ و ۶+
                            </span>
                            <span class="px-2.5 py-1 rounded-lg bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-700 dark:text-slate-300">
                                ووکامرس ۴ الی ۹+
                            </span>
                            <span class="px-2.5 py-1 rounded-lg bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-700 dark:text-slate-300 font-mono">
                                PHP 7.4 - 8.3+
                            </span>
                            <span class="px-2.5 py-1 rounded-lg bg-emerald-500/10 border border-emerald-500/25 text-emerald-800 dark:text-emerald-300">
                                سازگار با لایت‌اسپید و راکت
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Col 2 (3 Cols on Desktop): Quick Access to Page Sections -->
                <div class="lg:col-span-3">
                    <div class="flex items-center gap-2 pb-3 mb-4 border-b border-slate-200/90 dark:border-slate-800/90">
                        <span class="w-2 h-2 rounded-full bg-indigo-500"></span>
                        <h3 class="text-sm font-black text-slate-900 dark:text-white tracking-tight m-0">
                            دسترسی سریع به بخش‌ها
                        </h3>
                    </div>
                    <ul class="space-y-2.5 text-xs sm:text-[13px] font-semibold">
                        <li>
                            <a href="/#why-guardify" class="group flex items-center justify-between py-1 text-slate-600 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">
                                <span class="flex items-center gap-2">
                                    <i class="fas fa-angle-left text-[10px] text-indigo-500 group-hover:-translate-x-0.5 transition-transform"></i>
                                    <span>مقایسه پایداری در اینترنت ملی</span>
                                </span>
                                <span class="text-[10px] font-bold px-1.5 py-0.5 rounded bg-emerald-500/10 text-emerald-600 dark:text-emerald-400">۱۰۰٪ آفلاین</span>
                            </a>
                        </li>
                        <li>
                            <a href="/#captcha-modalities" class="group flex items-center gap-2 py-1 text-slate-600 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">
                                <i class="fas fa-angle-left text-[10px] text-indigo-500 group-hover:-translate-x-0.5 transition-transform"></i>
                                <span>۶ نوع چالش کپچا و ۳۵+ تم رنگی</span>
                            </a>
                        </li>
                        <li>
                            <a href="/#login-styler" class="group flex items-center gap-2 py-1 text-slate-600 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">
                                <i class="fas fa-angle-left text-[10px] text-indigo-500 group-hover:-translate-x-0.5 transition-transform"></i>
                                <span>استودیوی طراحی صفحه ورود (WP-Login)</span>
                            </a>
                        </li>
                        <li>
                            <a href="/#forms-protection" class="group flex items-center gap-2 py-1 text-slate-600 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">
                                <i class="fas fa-angle-left text-[10px] text-indigo-500 group-hover:-translate-x-0.5 transition-transform"></i>
                                <span>محافظت از ووکامرس، دیجیتس و فرم‌ها</span>
                            </a>
                        </li>
                        <li>
                            <a href="/#comparison" class="group flex items-center gap-2 py-1 text-slate-600 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">
                                <i class="fas fa-angle-left text-[10px] text-indigo-500 group-hover:-translate-x-0.5 transition-transform"></i>
                                <span>جدول مقایسه فنی با ریکپچا و کلودفلر</span>
                            </a>
                        </li>
                        <li>
                            <a href="/#faq" class="group flex items-center gap-2 py-1 text-slate-600 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">
                                <i class="fas fa-angle-left text-[10px] text-indigo-500 group-hover:-translate-x-0.5 transition-transform"></i>
                                <span>سوالات متداول پیش از خرید</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Col 3 (3 Cols on Desktop): Interactive Demo & Documentation -->
                <div class="lg:col-span-3">
                    <div class="flex items-center gap-2 pb-3 mb-4 border-b border-slate-200/90 dark:border-slate-800/90">
                        <span class="w-2 h-2 rounded-full bg-amber-500"></span>
                        <h3 class="text-sm font-black text-slate-900 dark:text-white tracking-tight m-0">
                            پیش‌نمایش زنده و مستندات
                        </h3>
                    </div>

                    <!-- Featured Quick Links (Elevated Visual Hierarchy) -->
                    <div class="space-y-2 mb-3">
                        <a href="/demo.php" class="flex items-center justify-between p-2.5 rounded-xl bg-white dark:bg-slate-900/90 border border-indigo-500/30 hover:border-indigo-500 shadow-sm transition-all group">
                            <span class="flex items-center gap-2.5">
                                <span class="w-7 h-7 rounded-lg bg-indigo-600 text-white flex items-center justify-center text-xs shrink-0">
                                    <i class="fas fa-desktop text-amber-300"></i>
                                </span>
                                <span>
                                    <strong class="block text-xs font-black text-slate-900 dark:text-white group-hover:text-indigo-600 dark:group-hover:text-indigo-400">دموی تعاملی افزونه</strong>
                                    <span class="block text-[10px] text-slate-500 dark:text-slate-400 font-medium">تست زنده چالش‌ها و پیشخوان</span>
                                </span>
                            </span>
                            <i class="fas fa-arrow-left text-xs text-indigo-500 group-hover:-translate-x-0.5 transition-transform"></i>
                        </a>

                        <a href="/guide.php" class="flex items-center justify-between p-2.5 rounded-xl bg-white dark:bg-slate-900/90 border border-slate-200 dark:border-slate-800 hover:border-indigo-500/50 shadow-sm transition-all group">
                            <span class="flex items-center gap-2.5">
                                <span class="w-7 h-7 rounded-lg bg-purple-500/15 text-purple-600 dark:text-purple-400 flex items-center justify-center text-xs shrink-0">
                                    <i class="fas fa-book-open"></i>
                                </span>
                                <span>
                                    <strong class="block text-xs font-black text-slate-900 dark:text-white group-hover:text-indigo-600 dark:group-hover:text-indigo-400">راهنمای جامع تنظیمات</strong>
                                    <span class="block text-[10px] text-slate-500 dark:text-slate-400 font-medium">آموزش تب‌به‌تب پنل مدیریت</span>
                                </span>
                            </span>
                            <i class="fas fa-arrow-left text-xs text-slate-400 group-hover:text-indigo-500 group-hover:-translate-x-0.5 transition-transform"></i>
                        </a>
                    </div>

                    <!-- Secondary Demo Sub-Links -->
                    <ul class="space-y-2 text-xs font-semibold pt-1">
                        <li>
                            <a href="/demo.php?tab=captcha" class="group flex items-center gap-2 py-0.5 text-slate-600 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">
                                <i class="fas fa-swatchbook text-[11px] text-amber-500 w-4 text-center"></i>
                                <span>آزمایشگاه ۳۵+ تم رنگی کپچا</span>
                            </a>
                        </li>
                        <li>
                            <a href="/demo.php?tab=login" class="group flex items-center gap-2 py-0.5 text-slate-600 dark:text-slate-300 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">
                                <i class="fas fa-wand-magic-sparkles text-[11px] text-purple-500 w-4 text-center"></i>
                                <span>شبیه‌ساز استایلر صفحه ورود</span>
                            </a>
                        </li>
                        <li>
                            <a href="/rtl-landing.php" class="group flex items-center gap-2 py-0.5 text-slate-600 dark:text-slate-300 hover:text-emerald-600 dark:hover:text-emerald-400 transition-colors">
                                <i class="fas fa-file-shield text-[11px] text-emerald-500 w-4 text-center"></i>
                                <span>پوستر اینفوگرافیک معرفی محصول</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Col 4 (2 Cols on Desktop): Direct License & Guarantee Card -->
                <div class="lg:col-span-2">
                    <div class="flex items-center gap-2 pb-3 mb-4 border-b border-slate-200/90 dark:border-slate-800/90">
                        <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                        <h3 class="text-sm font-black text-slate-900 dark:text-white tracking-tight m-0">
                            دریافت نسخه اورجینال
                        </h3>
                    </div>

                    <div class="p-3.5 rounded-2xl bg-white dark:bg-slate-900/90 border border-emerald-500/30 space-y-3 shadow-sm">
                        <div class="space-y-1.5 text-[11px] font-bold text-slate-700 dark:text-slate-300">
                            <div class="flex items-center gap-1.5">
                                <i class="fas fa-circle-check text-emerald-500 text-xs"></i>
                                <span>پشتیبانی مستقیم DevBan</span>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <i class="fas fa-circle-check text-emerald-500 text-xs"></i>
                                <span>آپدیت رایگان مادام‌العمر</span>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <i class="fas fa-circle-check text-emerald-500 text-xs"></i>
                                <span>نصب در کمتر از ۶۰ ثانیه</span>
                            </div>
                        </div>

                        <a href="https://www.rtl-theme.com" target="_blank" rel="noopener noreferrer" class="w-full inline-flex items-center justify-center gap-2 bg-gradient-to-r from-emerald-500 to-teal-500 hover:from-emerald-400 hover:to-teal-400 text-slate-950 font-black px-3 py-2.5 rounded-xl text-xs shadow-md shadow-emerald-500/20 transition-all">
                            <i class="fas fa-bag-shopping text-slate-950"></i>
                            <span>خرید از راست‌چین</span>
                        </a>
                    </div>
                </div>

            </div>

            <!-- Bottom Copyright & Back to Top Bar -->
            <div class="pt-7 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs font-bold text-slate-600 dark:text-slate-400">
                <div class="flex flex-wrap items-center justify-center sm:justify-start gap-2 text-center sm:text-right">
                    <span class="text-slate-800 dark:text-slate-200 font-black">© ۲۰۲۶ گاردفای پرو (Guardify Pro v4.00)</span>
                    <span class="hidden sm:inline text-slate-400">·</span>
                    <span>طراحی و توسعه تخصصی توسط تیم نرم‌افزاری <strong class="text-indigo-600 dark:text-indigo-400 font-black">DevBan</strong></span>
                </div>
                <div class="flex items-center gap-3 text-[11px]">
                    <span class="px-2.5 py-1 rounded-lg bg-slate-200/80 dark:bg-slate-900 border border-slate-300/80 dark:border-slate-800 text-slate-700 dark:text-slate-300 font-bold">
                        عرضه رسمی در مارکت راست‌چین
                    </span>
                    <a href="#main-content" class="px-3 py-1 rounded-lg bg-indigo-500/10 hover:bg-indigo-500/20 border border-indigo-500/25 text-indigo-700 dark:text-indigo-300 transition-colors flex items-center gap-1.5 font-black">
                        <span>بازگشت به بالا</span>
                        <i class="fas fa-arrow-up text-[10px]"></i>
                    </a>
                </div>
            </div>

        </div>
    </footer>

    <!-- Mobile App-Like Bottom Quick Navigation Bar (Under 15% Viewport Height Cap) -->
    <nav class="lg:hidden fixed bottom-0 inset-x-0 z-40 h-14 bg-white/95 dark:bg-slate-950/95 backdrop-blur-xl border-t border-slate-200 dark:border-slate-800 px-2 flex items-center justify-around text-[10px] font-bold text-slate-600 dark:text-slate-400 shadow-2xl" aria-label="دسترسی سریع موبایل">
        <a href="/#hero" class="flex flex-col items-center justify-center gap-1 py-1 px-2 text-indigo-600 dark:text-indigo-400">
            <i class="fas fa-house text-sm"></i>
            <span>صفحه اصلی</span>
        </a>
        <a href="/#captcha-modalities" class="flex flex-col items-center justify-center gap-1 py-1 px-2 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">
            <i class="fas fa-sliders text-sm"></i>
            <span>چالش‌ها</span>
        </a>
        <a href="/demo.php" class="flex flex-col items-center justify-center gap-1 py-1 px-3 rounded-xl bg-indigo-600 text-white font-black shadow-md shadow-indigo-600/30">
            <i class="fas fa-desktop text-xs text-amber-300"></i>
            <span>دموی افزونه</span>
        </a>
        <a href="/#faq" class="flex flex-col items-center justify-center gap-1 py-1 px-2 hover:text-indigo-600 dark:hover:text-indigo-400 transition-colors">
            <i class="fas fa-circle-question text-sm"></i>
            <span>سوالات</span>
        </a>
        <a href="https://www.rtl-theme.com" target="_blank" rel="noopener noreferrer" class="flex flex-col items-center justify-center gap-1 py-1 px-2 text-emerald-600 dark:text-emerald-400 font-black">
            <i class="fas fa-bag-shopping text-sm"></i>
            <span>خرید</span>
        </a>
    </nav>

    <!-- Mobile Drawer & Navigation Toggle Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var mobileMenu = document.getElementById('mobile-menu');
            if (mobileMenu) {
                var mobileLinks = mobileMenu.querySelectorAll('a');
                mobileLinks.forEach(function(link) {
                    link.addEventListener('click', function() {
                        mobileMenu.classList.add('hidden');
                    });
                });
            }
        });
    </script>

    <!-- External Vendor Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
    
    <?php if ($current_page === 'home'): ?>
    <!-- React & Babel for Dynamic Live Charts in Landing Page -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://unpkg.com/react@18/umd/react.production.min.js"></script>
    <script src="https://unpkg.com/react-dom@18/umd/react-dom.production.min.js"></script>
    <script src="https://unpkg.com/prop-types@15.8.1/prop-types.min.js"></script>
    <script src="https://unpkg.com/recharts@2.12.7/umd/Recharts.js"></script>
    <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
    
    <script type="text/babel" src="/js/chart.js?v=4.40"></script>
    <script src="/js/app.js?v=4.40"></script>
    <?php elseif ($current_page === 'preview'): ?>
    <!-- Dedicated Interactive Studio JavaScript Engine -->
    <script src="/js/preview-studio.js?v=4.30"></script>
    <?php endif; ?>
</body>
</html>
