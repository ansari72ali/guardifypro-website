<?php
/**
 * Guardify Pro Universal Footer Component
 * Shared across index.php and preview.php
 */
if (!isset($current_page)) {
    $current_page = "home";
}
?>
    <!-- Unified High-Tech Modern Footer -->
    <footer class="mt-auto pt-16 pb-12 bg-slate-950 border-t border-slate-800 text-slate-400">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            
            <!-- Top Footer Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 pb-12 border-b border-slate-800/80">
                
                <!-- Col 1 & 2: Brand & About -->
                <div class="lg:col-span-2 space-y-4">
                    <a href="<?php echo $current_page === 'home' ? '#hero' : '/'; ?>" class="flex items-center gap-3 group cursor-pointer" aria-label="گاردفای پرو">
                        <div class="bg-gradient-to-tr from-indigo-600 to-indigo-500 w-12 h-12 rounded-2xl flex items-center justify-center shadow-lg shadow-indigo-600/30 group-hover:scale-105 transition-transform">
                            <i class="fas fa-shield-halved text-white text-xl"></i>
                        </div>
                        <div>
                            <span class="text-xl font-black text-white block group-hover:text-indigo-400 transition-colors">گاردفای <span class="text-indigo-400">پرو</span></span>
                            <span class="text-[11px] text-slate-400 font-bold block">کپچای بومی و سپر امنیتی ورود وردپرس · DevBan</span>
                        </div>
                    </a>
                    
                    <p class="text-xs text-slate-400 leading-relaxed max-w-sm">
                        گاردفای پرو قدرتمندترین راهکار بومی ضد اسپم و امنیت فرم‌های ورود و ثبت‌نام وردپرس است؛ بدون اتکا به سرورهای خارجی، بدون کاهش سرعت تسویه‌حساب ووکامرس و کاملاً پایدار در شرایط اختلال اینترنت بین‌الملل.
                    </p>

                    <!-- WordPress & Tech Badges -->
                    <div class="flex flex-wrap gap-2 pt-2">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl bg-slate-900 border border-slate-700/80 text-[11px] font-bold text-slate-200 shadow-sm">
                            <i class="fab fa-wordpress text-indigo-400"></i> وردپرس ۶.x
                        </span>
                        <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl bg-slate-900 border border-slate-700/80 text-[11px] font-bold text-slate-200 shadow-sm">
                            <i class="fas fa-cart-shopping text-emerald-400"></i> ووکامرس ۴ الی ۹
                        </span>
                        <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl bg-slate-900 border border-slate-700/80 text-[11px] font-bold text-slate-200 shadow-sm">
                            <i class="fab fa-php text-purple-400"></i> PHP 7.4 - 8.3+
                        </span>
                        <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl bg-slate-900 border border-slate-700/80 text-[11px] font-bold text-slate-200 shadow-sm">
                            <i class="fas fa-bolt text-amber-400"></i> سازگار با لایت‌اسپید
                        </span>
                    </div>
                </div>

                <!-- Col 3: Features & Modalities -->
                <div>
                    <h4 class="text-xs font-black text-white uppercase tracking-wider mb-4 border-r-2 border-indigo-500 pr-2">امکانات و چالش‌ها</h4>
                    <ul class="space-y-2.5 text-xs">
                        <li><a href="/#captcha-modalities" class="hover:text-indigo-400 transition-colors">اسلایدر پازلی بومی</a></li>
                        <li><a href="/#captcha-modalities" class="hover:text-indigo-400 transition-colors">جمع و تفریق ریاضی</a></li>
                        <li><a href="/#captcha-modalities" class="hover:text-indigo-400 transition-colors">تطبیق آیکون بصری</a></li>
                        <li><a href="/#captcha-modalities" class="hover:text-indigo-400 transition-colors">تله مخفی هانی‌پات</a></li>
                        <li><a href="/#login-styler" class="hover:text-indigo-400 transition-colors">استودیوی طراحی WP-Login</a></li>
                        <li><a href="/#forms-protection" class="hover:text-indigo-400 transition-colors">محافظت ووکامرس و فرم‌ها</a></li>
                    </ul>
                </div>

                <!-- Col 4: Demo Simulator & Links -->
                <div>
                    <h4 class="text-xs font-black text-white uppercase tracking-wider mb-4 border-r-2 border-amber-500 pr-2">شبیه‌ساز افزونه</h4>
                    <ul class="space-y-2.5 text-xs">
                        <li>
                            <a href="/demo.php" class="text-amber-300 font-bold hover:text-amber-200 transition-colors flex items-center gap-1.5">
                                <i class="fas fa-desktop text-[10px]"></i>
                                <span>شبیه‌ساز افزونه</span>
                            </a>
                        </li>
                        <li><a href="/demo.php?tab=captcha" class="hover:text-indigo-400 transition-colors">۱. آزمایشگاه انواع کپچا</a></li>
                        <li><a href="/demo.php?tab=login" class="hover:text-indigo-400 transition-colors">۲. فرم ورود وردپرس</a></li>
                        <li><a href="/demo.php?tab=admin" class="hover:text-indigo-400 transition-colors">۳. پنل مدیریت (WP-Admin)</a></li>
                        <li><a href="/#performance" class="hover:text-emerald-400 transition-colors">آمار و امتیاز لایت‌هاوس</a></li>
                        <li><a href="/#comparison" class="hover:text-indigo-400 transition-colors">جدول مقایسه با رقبا</a></li>
                    </ul>
                </div>

                <!-- Col 5: Security & Support -->
                <div>
                    <h4 class="text-xs font-black text-white uppercase tracking-wider mb-4 border-r-2 border-emerald-500 pr-2">امنیت و خرید</h4>
                    <ul class="space-y-2.5 text-xs">
                        <li><a href="/#security-guide" class="hover:text-indigo-400 transition-colors">راهنمای جامع امنیت</a></li>
                        <li><a href="/#providers" class="hover:text-indigo-400 transition-colors">ارائه‌دهندگان و Failover</a></li>
                        <li><a href="/#faq" class="hover:text-indigo-400 transition-colors">سوالات پرتکرار</a></li>
                        <li class="pt-2">
                            <a href="https://www.rtl-theme.com" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 bg-gradient-to-r from-emerald-500 to-teal-600 text-slate-950 font-black px-3.5 py-2 rounded-xl text-xs shadow-md shadow-emerald-500/20 hover:scale-105 transition-all">
                                <i class="fas fa-crown"></i>
                                <span>خرید لایسنس راست‌چین</span>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>

            <!-- Bottom Copyright -->
            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500">
                <div class="flex items-center gap-2">
                    <span>© ۲۰۲۶ گاردفای پرو (Guardify Pro v4.00) توسط تیم DevBan.</span>
                </div>
                <div class="flex items-center gap-4 text-[11px]">
                    <span>انتشار و پشتیبانی انحصاری در مارکت راست‌چین (RTL-Theme)</span>
                    <a href="#hero" class="text-indigo-400 hover:text-indigo-300 transition-colors flex items-center gap-1 font-bold">
                        <span>بازگشت به بالا</span>
                        <i class="fas fa-arrow-up text-[10px]"></i>
                    </a>
                </div>
            </div>

        </div>
    </footer>

    <!-- Mobile Drawer & Navigation Toggle Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var mobileBtn = document.getElementById('mobile-menu-btn');
            var mobileMenu = document.getElementById('mobile-menu');
            if (mobileBtn && mobileMenu) {
                mobileBtn.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                });
                var mobileLinks = mobileMenu.querySelectorAll('a');
                mobileLinks.forEach(function(link) {
                    link.addEventListener('click', function() {
                        mobileMenu.classList.add('hidden');
                    });
                });
            }

            // Dropdown bridge handling for touch devices
            var navDropdownWrapper = document.getElementById('nav-dropdown-wrapper');
            var navDropdownBtn = document.getElementById('nav-dropdown-btn');
            var navDropdownMenu = document.getElementById('nav-dropdown-menu');
            if (navDropdownBtn && navDropdownMenu) {
                navDropdownBtn.addEventListener('click', function(e) {
                    e.stopPropagation();
                    navDropdownMenu.classList.toggle('opacity-0');
                    navDropdownMenu.classList.toggle('invisible');
                });
                document.addEventListener('click', function(e) {
                    if (navDropdownWrapper && !navDropdownWrapper.contains(e.target)) {
                        navDropdownMenu.classList.add('opacity-0');
                        navDropdownMenu.classList.add('invisible');
                    }
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
    
    <script type="text/babel" src="/js/chart.js?v=4.30"></script>
    <script src="/js/app.js?v=4.30"></script>
    <?php elseif ($current_page === 'preview'): ?>
    <!-- Dedicated Interactive Studio JavaScript Engine -->
    <script src="/js/preview-studio.js?v=4.30"></script>
    <?php endif; ?>
</body>
</html>
