<?php
/**
 * Guardify Pro Universal Footer Component
 * Shared across index.php, demo.php, preview.php, and guide.php
 */
if (!isset($current_page)) {
    $current_page = "home";
}
?>
    <!-- Unified High-Tech Modern Footer -->
    <footer class="mt-auto pt-16 pb-24 lg:pb-12 bg-slate-950 border-t border-slate-800 text-slate-400">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            
            <!-- Top Footer Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 pb-12 border-b border-slate-800/80 text-right">
                
                <!-- Col 1 & 2: Brand & About -->
                <div class="lg:col-span-2 space-y-4">
                    <a href="<?php echo $current_page === 'home' ? '#hero' : '/'; ?>" class="flex items-center gap-3 group cursor-pointer" aria-label="گاردفای پرو">
                        <div class="bg-gradient-to-tr from-indigo-600 to-indigo-500 w-11 h-11 rounded-2xl flex items-center justify-center shadow-lg shadow-indigo-600/30">
                            <i class="fas fa-shield-halved text-white text-lg"></i>
                        </div>
                        <div>
                            <span class="text-xl font-black text-white block group-hover:text-indigo-400 transition-colors">گاردفای <span class="text-indigo-400">پرو</span></span>
                            <span class="text-[11px] text-slate-400 font-bold block">کپچای بومی و سپر امنیتی ورود وردپرس · DevBan</span>
                        </div>
                    </a>
                    
                    <p class="text-xs text-slate-400 leading-relaxed max-w-sm font-medium">
                        گاردفای پرو (Guardify Pro v4.00) سامانه کپچای ۱۰۰٪ بومی و آفلاین وردپرس است؛ با بار مصرفی زیر ۱۰ کیلوبایت روی لود صفحات سایت، بدون وابستگی به سرورهای خارجی و کاملاً پایدار در شرایط اختلال اینترنت بین‌الملل و اینترنت ملی.
                    </p>

                    <!-- Clean Unboxed Tech Compatibility Line -->
                    <div class="flex flex-wrap items-center gap-2 pt-1 text-[11px] font-bold text-slate-300">
                        <span>وردپرس ۵ و ۶+</span>
                        <span aria-hidden="true" class="text-slate-600">·</span>
                        <span>ووکامرس ۴ الی ۹+</span>
                        <span aria-hidden="true" class="text-slate-600">·</span>
                        <span>PHP 7.4 - 8.3+</span>
                        <span aria-hidden="true" class="text-slate-600">·</span>
                        <span>LiteSpeed &amp; WP Rocket</span>
                    </div>
                </div>

                <!-- Col 3: Features & Modalities -->
                <div>
                    <h3 class="text-xs font-black text-white tracking-wider mb-4">امکانات و چالش‌های امنیتی</h3>
                    <ul class="space-y-2.5 text-xs font-medium">
                        <li><a href="/#captcha-modalities" class="hover:text-indigo-400 transition-colors">اسلایدر پازلی هوشمند</a></li>
                        <li><a href="/#captcha-modalities" class="hover:text-indigo-400 transition-colors">چالش‌های ریاضی ۳ سطحی</a></li>
                        <li><a href="/#captcha-modalities" class="hover:text-indigo-400 transition-colors">تطبیق آیکون بصری</a></li>
                        <li><a href="/#captcha-modalities" class="hover:text-indigo-400 transition-colors">تله مخفی هانی‌پات نامرئی</a></li>
                        <li><a href="/#login-styler" class="hover:text-indigo-400 transition-colors">استودیوی طراحی WP-Login</a></li>
                        <li><a href="/#forms-protection" class="hover:text-indigo-400 transition-colors">محافظت ووکامرس و دیجیتس</a></li>
                    </ul>
                </div>

                <!-- Col 4: Demo Simulator & Guides -->
                <div>
                    <h3 class="text-xs font-black text-white tracking-wider mb-4">شبیه‌ساز و مستندات</h3>
                    <ul class="space-y-2.5 text-xs font-medium">
                        <li>
                            <a href="/demo.php" class="text-amber-300 font-bold hover:text-amber-200 transition-colors flex items-center gap-1.5">
                                <i class="fas fa-desktop text-[10px]"></i>
                                <span>شبیه‌ساز زنده افزونه</span>
                            </a>
                        </li>
                        <li>
                            <a href="/guide.php" class="text-indigo-400 font-bold hover:text-indigo-300 transition-colors flex items-center gap-1.5">
                                <i class="fas fa-graduation-cap text-[10px]"></i>
                                <span>آموزش جامع پنل و تنظیمات</span>
                            </a>
                        </li>
                        <li><a href="/demo.php?tab=captcha" class="hover:text-indigo-400 transition-colors">آزمایشگاه ۳۵+ تم کپچا</a></li>
                        <li><a href="/demo.php?tab=login" class="hover:text-indigo-400 transition-colors">پیش‌نمایش صفحه ورود وردپرس</a></li>
                        <li><a href="/demo.php?tab=admin" class="hover:text-indigo-400 transition-colors">پیشخوان مدیریت (WP-Admin)</a></li>
                        <li><a href="/rtl-landing.php" class="hover:text-emerald-400 transition-colors">پوستر اینفوگرافیک معرفی</a></li>
                    </ul>
                </div>

                <!-- Col 5: Quick Access & Purchase -->
                <div>
                    <h3 class="text-xs font-black text-white tracking-wider mb-4">ارزیابی و خرید</h3>
                    <ul class="space-y-2.5 text-xs font-medium">
                        <li><a href="/#why-guardify" class="hover:text-indigo-400 transition-colors">مقایسه پایداری در نت ملی</a></li>
                        <li><a href="/#performance" class="hover:text-indigo-400 transition-colors">آمار سرعت و لایت‌هاوس</a></li>
                        <li><a href="/#comparison" class="hover:text-indigo-400 transition-colors">جدول مقایسه با ریکپچا</a></li>
                        <li><a href="/#faq" class="hover:text-indigo-400 transition-colors">سوالات متداول پیش از خرید</a></li>
                        <li class="pt-2">
                            <a href="https://www.rtl-theme.com" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 bg-gradient-to-r from-emerald-500 to-teal-500 text-slate-950 font-black px-4 py-2.5 rounded-xl text-xs shadow-md shadow-emerald-500/20 hover:from-emerald-400 hover:to-teal-400 transition-all">
                                <i class="fas fa-bag-shopping"></i>
                                <span>خرید لایسنس از راست‌چین</span>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>

            <!-- Bottom Copyright -->
            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500">
                <div class="flex items-center gap-2">
                    <span>© ۲۰۲۶ گاردفای پرو (Guardify Pro v4.00) · توسعه توسط تیم نرم‌افزاری DevBan.</span>
                </div>
                <div class="flex items-center gap-4 text-[11px]">
                    <span>عرضه رسمی در مارکت راست‌چین (RTL-Theme)</span>
                    <a href="#main-content" class="text-indigo-400 hover:text-indigo-300 transition-colors flex items-center gap-1 font-bold">
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
            <span>شبیه‌ساز</span>
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
