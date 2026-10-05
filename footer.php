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
    <footer class="mt-auto py-12 md:py-16 bg-slate-950 border-t border-slate-900 text-slate-400">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <a href="<?php echo $current_page === 'home' ? '#hero' : '/'; ?>" class="inline-block group cursor-pointer transition-transform duration-300 hover:scale-105" aria-label="رفتن به بالای صفحه">
                <div class="bg-gradient-to-tr from-indigo-600 to-indigo-500 w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-2xl shadow-indigo-600/40 group-hover:shadow-indigo-500/60 transition-all">
                    <i class="fas fa-shield-halved text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-black text-white mb-2 group-hover:text-indigo-400 transition-colors">گاردفای پرو Guardify Pro v4.00</h3>
            </a>
            <p class="text-slate-400 text-sm max-w-xl mx-auto leading-relaxed mb-8 font-bold">توسعه توسط DevBan | کپچای آفلاین و سپر امنیتی ورود وردپرس</p>

            <div class="flex flex-wrap items-center justify-center gap-6 text-xs text-slate-300 font-bold mb-10">
                <a href="/#why-guardify" class="hover:text-indigo-400 transition-colors">چرا گاردفای؟</a>
                <a href="/#providers" class="hover:text-indigo-400 transition-colors">ارائه‌دهندگان و تنظیمات</a>
                <a href="/#comparison" class="hover:text-indigo-400 transition-colors">مقایسه با رقبا</a>
                <a href="/preview.php" class="text-indigo-400 hover:text-indigo-300 transition-colors font-black">آزمایشگاه زنده (پیش‌نمایش)</a>
                <a href="/preview.php#login-styler" class="text-amber-400 hover:text-amber-300 transition-colors font-bold">استودیوی ورود وردپرس</a>
                <a href="/#features" class="hover:text-indigo-400 transition-colors">امکانات امنیتی</a>
                <a href="/#performance" class="hover:text-emerald-400 transition-colors">سرعت و Core Web Vitals</a>
                <a href="/#security-guide" class="hover:text-indigo-400 transition-colors">راهنمای جامع امنیت</a>
                <a href="https://www.rtl-theme.com" target="_blank" rel="noopener noreferrer" class="hover:text-emerald-400 text-emerald-400 font-bold transition-colors">تهیه لایسنس راست‌چین</a>
                <a href="/#faq" class="hover:text-indigo-400 transition-colors">سوالات متداول</a>
            </div>

            <div class="text-xs text-slate-500 uppercase tracking-widest flex flex-col items-center gap-2 pt-8 border-t border-slate-900 font-medium">
                <span>© ۲۰۲۶ Guardify Pro v4.00 by DevBan (guardifypro.ir). All Rights Reserved.</span>
                <span class="text-[11px] text-slate-600">انتشار و پشتیبانی انحصاری در مارکت راست‌چین (RTL-Theme)</span>
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
