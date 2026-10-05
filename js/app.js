// Guardify Pro Core Application Scripts

// Universal Theme Management with Cookie Persistence & System Preference
function setCookie(name, value, days) {
    let expires = "";
    if (days) {
        let date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/; SameSite=Lax";
}

function getCookie(name) {
    let nameEQ = name + "=";
    let ca = document.cookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return decodeURIComponent(c.substring(nameEQ.length, c.length));
    }
    return null;
}

function getActiveThemePreference() {
    // 1. Read from Cookie (primary source as specified by user)
    const cookieTheme = getCookie('guardify_theme') || getCookie('user-theme');
    if (cookieTheme === 'dark' || cookieTheme === 'light') {
        return cookieTheme;
    }

    // 2. Read from LocalStorage fallback
    try {
        const localTheme = localStorage.getItem('guardify_theme');
        if (localTheme === 'dark' || localTheme === 'light') {
            return localTheme;
        }
    } catch(e) {}

    // 3. Detect from user's operating system preference
    if (window.matchMedia && window.matchMedia('(prefers-color-scheme: light)').matches) {
        return 'light';
    }
    return 'dark';
}

function updateTheme(mode, persist = true) {
    const isDark = mode === 'dark';
    if (isDark) {
        document.documentElement.classList.remove('light');
        document.documentElement.classList.add('dark');
        if (document.body) {
            document.body.classList.remove('light');
            document.body.classList.add('dark');
        }
    } else {
        document.documentElement.classList.remove('dark');
        document.documentElement.classList.add('light');
        if (document.body) {
            document.body.classList.remove('dark');
            document.body.classList.add('light');
        }
    }

    if (persist) {
        // Save to cookie (active for 1 year across all subpaths)
        setCookie('guardify_theme', mode, 365);
        setCookie('user-theme', mode, 365);
        try {
            localStorage.setItem('guardify_theme', mode);
        } catch(e) {}
    }
}

// Initialize theme (handled by universal GuardifyTheme if present)
if (!window.GuardifyTheme) {
    const currentActiveTheme = getActiveThemePreference();
    updateTheme(currentActiveTheme, false);

    // Bind theme toggle button
    const themeButton = document.getElementById('theme-toggle');
    if (themeButton) {
        themeButton.addEventListener('click', () => {
            const isCurrentDark = document.documentElement.classList.contains('dark') || (document.body && document.body.classList.contains('dark'));
            const nextTheme = isCurrentDark ? 'light' : 'dark';
            updateTheme(nextTheme, true);
        });
    }

    // Dynamic response to OS color scheme changes if user hasn't set explicit cookie
    if (window.matchMedia) {
        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
            const hasExplicitCookie = getCookie('guardify_theme') || getCookie('user-theme');
            if (!hasExplicitCookie) {
                updateTheme(e.matches ? 'dark' : 'light', false);
            }
        });
    }
}

// Mobile Menu Toggle
const mobileMenuBtn = document.getElementById('mobile-menu-btn');
const mobileMenu = document.getElementById('mobile-menu');

if (mobileMenuBtn && mobileMenu) {
    mobileMenuBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
        const icon = mobileMenuBtn.querySelector('i');
        if (icon) {
            icon.classList.toggle('fa-bars');
            icon.classList.toggle('fa-times');
        }
    });

    document.querySelectorAll('.mobile-link').forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.add('hidden');
            const icon = mobileMenuBtn.querySelector('i');
            if (icon) {
                icon.classList.add('fa-bars');
                icon.classList.remove('fa-times');
            }
        });
    });
}

// Navigation Dropdown Handler for Touch & Click Support
const navDropdownBtn = document.getElementById('nav-dropdown-btn');
const navDropdownMenu = document.getElementById('nav-dropdown-menu');

if (navDropdownBtn && navDropdownMenu) {
    navDropdownBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        const isOpen = !navDropdownMenu.classList.contains('invisible');
        if (isOpen) {
            navDropdownMenu.classList.add('opacity-0', 'invisible');
            navDropdownMenu.classList.remove('opacity-100', 'visible');
        } else {
            navDropdownMenu.classList.remove('opacity-0', 'invisible');
            navDropdownMenu.classList.add('opacity-100', 'visible');
        }
    });

    document.addEventListener('click', (e) => {
        if (!navDropdownMenu.contains(e.target) && !navDropdownBtn.contains(e.target)) {
            navDropdownMenu.classList.add('opacity-0', 'invisible');
            navDropdownMenu.classList.remove('opacity-100', 'visible');
        }
    });

    navDropdownMenu.querySelectorAll('a').forEach(a => {
        a.addEventListener('click', () => {
            navDropdownMenu.classList.add('opacity-0', 'invisible');
            navDropdownMenu.classList.remove('opacity-100', 'visible');
        });
    });
}

// Dynamic Element Reveal on Scroll
const scrollReveal = (entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('revealed');
            observer.unobserve(entry.target);
        }
    });
};

const globalObserver = new IntersectionObserver(scrollReveal, {
    threshold: 0.01,
    rootMargin: '200px 0px 200px 0px'
});

const revealElements = document.querySelectorAll('.reveal, .reveal-left, .reveal-right');
revealElements.forEach(el => globalObserver.observe(el));

// Safety fallback to ensure full visibility on mobile or delayed observers
const forceRevealAll = () => {
    revealElements.forEach(el => el.classList.add('revealed'));
};

if (window.innerWidth <= 768) {
    forceRevealAll();
}
setTimeout(forceRevealAll, 500);
window.addEventListener('load', forceRevealAll);

// Swiper Sliders Integration
if (typeof Swiper !== 'undefined') {
    new Swiper('.environment-swiper', {
        loop: true,
        autoHeight: false,
        spaceBetween: 24,
        pagination: { el: '.swiper-pagination', clickable: true },
        navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
        breakpoints: {
            640: { slidesPerView: 1.2, spaceBetween: 20 },
            768: { slidesPerView: 1.8, spaceBetween: 24 },
            1024: { slidesPerView: 2.2, spaceBetween: 28 }
        }
    });

    new Swiper('.testimonial-swiper', {
        slidesPerView: 1,
        spaceBetween: 30,
        pagination: { el: '.swiper-pagination', clickable: true },
        breakpoints: {
            768: { slidesPerView: 2 },
            1024: { slidesPerView: 2 }
        }
    });
}

// GLightbox Init
if (typeof GLightbox !== 'undefined') {
    GLightbox({ selector: '.glightbox' });
}

// Accordion Logic
document.querySelectorAll('.accordion-header').forEach(header => {
    header.addEventListener('click', () => {
        const item = header.parentElement;
        const isActive = item.classList.contains('active');
        
        // Close all other items
        document.querySelectorAll('.accordion-item').forEach(otherItem => {
            otherItem.classList.remove('active');
        });

        // Toggle current item
        if (!isActive) {
            item.classList.add('active');
        }
    });
});

// Canonical Tag Auto-sync
const canonicalEl = document.getElementById('canonical-link');
if (canonicalEl) {
    canonicalEl.href = window.location.origin + window.location.pathname;
}

// // Interactive Live Captcha Demo with Multi-Form Simulation
(function($) {
    if (!$) return;

    const normalize = (s) => String(s).replace(/[۰-۹]/g, d => '۰۱۲۳۴۵۶۷۸۹'.indexOf(d)).replace(/[٠-٩]/g, d => '٠١٢٣٤٥٦٧٨٩'.indexOf(d));

    const GuardifyVars = {
        texts: {
            challenge_title: 'چالش امنیتی:',
            protection_label: 'حفاظت هوشمند',
            slider_drag: 'بکشید',
            slider_hint: '← دستگیره را تا انتها بکشید',
            refresh_title: 'سوال جدید',
            placeholder: '؟',
            verify_btn: 'بررسی چالش',
            verified_success: 'هویت شما تایید شد'
        }
    };

    let currentType = 'slider';
    let currentFormType = 'checkout';

    function playChime(freq = 587.33, freq2 = 880) {
        try {
            const ctx = new (window.AudioContext || window.webkitAudioContext)();
            const osc = ctx.createOscillator();
            const gain = ctx.createGain();
            osc.type = 'sine';
            osc.frequency.setValueAtTime(freq, ctx.currentTime);
            osc.frequency.exponentialRampToValueAtTime(freq2, ctx.currentTime + 0.1);
            gain.gain.setValueAtTime(0.12, ctx.currentTime);
            gain.gain.exponentialRampToValueAtTime(0.001, ctx.currentTime + 0.35);
            osc.connect(gain);
            gain.connect(ctx.destination);
            osc.start();
            osc.stop(ctx.currentTime + 0.35);
        } catch(e) {}
    }

    // Dynamic Form Template Renderer
    function renderFormFields(formType) {
        if (!$('#demoFormFields').length) return;
        currentFormType = formType;
        const $container = $('#demoFormFields').empty();
        $('#demoSubmissionResult').slideUp(200);

        let fieldsHtml = '';
        if (formType === 'checkout') {
            fieldsHtml = `
                <div class="space-y-1.5">
                    <label class="text-[11px] font-black uppercase text-slate-700 dark:text-slate-300 flex items-center gap-1.5">
                        <i class="fas fa-user text-indigo-500 text-xs"></i>
                        <span>نام و نام خانوادگی خریدار</span>
                    </label>
                    <input type="text" class="input-field" value="علی رضایی" placeholder="نام خود را وارد کنید">
                </div>
                <div class="space-y-1.5">
                    <label class="text-[11px] font-black uppercase text-slate-700 dark:text-slate-300 flex items-center gap-1.5">
                        <i class="fas fa-phone text-emerald-500 text-xs"></i>
                        <span>شماره موبایل جهت پیامک</span>
                    </label>
                    <input type="tel" dir="ltr" class="input-field text-left" value="09123456789" placeholder="09xxxxxxxxx">
                </div>
                <div class="space-y-1.5">
                    <label class="text-[11px] font-black uppercase text-slate-700 dark:text-slate-300 flex items-center gap-1.5">
                        <i class="fas fa-box text-purple-500 text-xs"></i>
                        <span>محصول سفارشی</span>
                    </label>
                    <input type="text" class="input-field bg-slate-100 dark:bg-slate-900/60 cursor-not-allowed" value="لایسنس نامحدود گاردفای پرو" readonly>
                </div>
                <div class="space-y-1.5">
                    <label class="text-[11px] font-black uppercase text-slate-700 dark:text-slate-300 flex items-center gap-1.5">
                        <i class="fas fa-credit-card text-blue-500 text-xs"></i>
                        <span>مبلغ قابل پرداخت</span>
                    </label>
                    <input type="text" dir="ltr" class="input-field text-left font-black text-emerald-500 dark:text-emerald-400 bg-slate-100 dark:bg-slate-900/60 cursor-not-allowed" value="۴۹۰,۰۰۰ تومان" readonly>
                </div>
            `;
        } else if (formType === 'register') {
            fieldsHtml = `
                <div class="space-y-1.5">
                    <label class="text-[11px] font-black uppercase text-slate-700 dark:text-slate-300 flex items-center gap-1.5">
                        <i class="fas fa-user-tag text-indigo-500 text-xs"></i>
                        <span>نام کاربری جدید</span>
                    </label>
                    <input type="text" dir="ltr" class="input-field text-left" value="GuardifyUser" placeholder="Username">
                </div>
                <div class="space-y-1.5">
                    <label class="text-[11px] font-black uppercase text-slate-700 dark:text-slate-300 flex items-center gap-1.5">
                        <i class="fas fa-envelope text-indigo-500 text-xs"></i>
                        <span>آدرس ایمیل</span>
                    </label>
                    <input type="email" dir="ltr" class="input-field text-left" value="user@domain.ir" placeholder="Email Address">
                </div>
                <div class="space-y-1.5 md:col-span-2">
                    <label class="text-[11px] font-black uppercase text-slate-700 dark:text-slate-300 flex items-center gap-1.5">
                        <i class="fas fa-key text-amber-500 text-xs"></i>
                        <span>کلمه عبور امن</span>
                    </label>
                    <div class="input-field-wrapper">
                        <input type="password" id="demoPasswordInput" class="input-field" value="GuardifySecure2026!">
                        <button type="button" class="pw-toggle-btn" id="toggleDemoPw">
                            <i class="fas fa-eye text-xs"></i>
                        </button>
                    </div>
                </div>
            `;
        } else if (formType === 'login') {
            fieldsHtml = `
                <div class="space-y-1.5">
                    <label class="text-[11px] font-black uppercase text-slate-700 dark:text-slate-300 flex items-center gap-1.5">
                        <i class="fas fa-user-shield text-indigo-500 text-xs"></i>
                        <span>نام کاربری یا ایمیل</span>
                    </label>
                    <input type="text" dir="ltr" class="input-field text-left" value="admin@guardifypro.ir">
                </div>
                <div class="space-y-1.5">
                    <label class="text-[11px] font-black uppercase text-slate-700 dark:text-slate-300 flex items-center gap-1.5">
                        <i class="fas fa-lock text-rose-500 text-xs"></i>
                        <span>کلمه عبور مدیریت</span>
                    </label>
                    <div class="input-field-wrapper">
                        <input type="password" id="demoPasswordInput" class="input-field" value="••••••••••••">
                        <button type="button" class="pw-toggle-btn" id="toggleDemoPw">
                            <i class="fas fa-eye text-xs"></i>
                        </button>
                    </div>
                </div>
            `;
        }

        $container.html(fieldsHtml);
    }

    function startInspection($container) {
        if ($container.hasClass('guardify-verified') || $container.hasClass('guardify-verifying')) return;
        
        $container.addClass('guardify-verifying');
        const $inspectBox = $('<div class="guardify-inspect-box"><div class="flex items-center justify-between mb-2"><span class="text-[10px] font-black">ارزیابی پارامترهای تله‌متری و سلامت مرورگر...</span><span class="inspect-pct text-[10px] text-indigo-500 font-bold">۰٪</span></div><div class="guardify-inspect-bar-track"><div class="guardify-inspect-bar-fill"></div></div><div class="space-y-1"><div class="guardify-check-item item-1 active"><i class="fas fa-circle-notch fa-spin"></i><span>بررسی محیط کلاینت و عدم حضور اسکریپت ربات</span></div><div class="guardify-check-item item-2"><span>سنجش تله‌متری رفتاری و سرعت تعامل کاربر</span></div><div class="guardify-check-item item-3"><span>اعتبارسنجی توکن یک‌بار مصرف HMAC Anti-Replay</span></div></div></div>');
        $container.append($inspectBox);

        let progress = 0;
        const interval = setInterval(() => {
            progress += 3;
            if (progress > 100) progress = 100;
            $inspectBox.find('.guardify-inspect-bar-fill').css('width', progress + '%');
            $inspectBox.find('.inspect-pct').text(progress + '٪');
            
            if(progress >= 33) $inspectBox.find('.item-1').addClass('done').html('<i class="fas fa-check"></i><span>محیط کاربری و مرورگر تایید شد</span>');
            if(progress >= 66) $inspectBox.find('.item-2').addClass('done').html('<i class="fas fa-check"></i><span>رفتار انسانی تایید شد (Zero Latency)</span>');
            if(progress >= 95) $inspectBox.find('.item-3').addClass('done').html('<i class="fas fa-check"></i><span>توکن رمزنگاری HMAC تولید شد</span>');
            
            if(progress >= 100) {
                clearInterval(interval);
                playChime(587.33, 880);
                $container.removeClass('guardify-verifying').addClass('guardify-verified');
                $inspectBox.fadeOut(200, function() {
                    $(this).replaceWith('<div class="guardify-verified-badge-card"><div class="guardify-verified-icon"><i class="fas fa-check"></i></div><div class="text-right"><div class="text-xs font-black text-emerald-500 dark:text-emerald-400">' + GuardifyVars.texts.verified_success + '</div><div class="text-[10px] text-muted">امنیت فرم توسط گاردفای پرو تضمین شد (آماده ارسال)</div></div></div>');
                    $('#demoSubmitBtn')
                        .prop('disabled', false)
                        .html('<i class="fas fa-paper-plane"></i><span>ارسال امن فرم (آماده ارسال)</span>')
                        .removeClass('bg-slate-800')
                        .addClass('bg-emerald-600 hover:bg-emerald-500 shadow-emerald-500/40 animate-pulse');
                });
            }
        }, 22);
    }

    function renderWidget(type) {
        if (!$('#captchaContainerWrapper').length) return;
        currentType = type;
        const $wrapper = $('#captchaContainerWrapper').empty();
        $('#demoSubmitBtn')
            .prop('disabled', true)
            .html('<i class="fas fa-lock"></i><span>ارسال امن اطلاعات (قفل شده)</span>')
            .removeClass('bg-emerald-600 hover:bg-emerald-500 animate-pulse');
        $('#demoSubmissionResult').slideUp(200);
        
        let html = '';
        if(type === 'math') {
            const n1 = Math.floor(Math.random() * 8) + 2;
            const n2 = Math.floor(Math.random() * 7) + 2;
            const toPersian = (n) => String(n).replace(/\d/g, d => '۰۱۲۳۴۵۶۷۸۹'[d]);
            html = `
                <div class="guardify-captcha-container" data-ans="${n1+n2}">
                    <div class="guardify-top-radar-track"><div class="guardify-top-radar-beam"></div></div>
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-xs font-black">${GuardifyVars.texts.challenge_title} جمع دو عدد زیر را وارد کنید</span>
                        <button type="button" class="text-xs text-indigo-400 hover:text-indigo-300 refresh-btn flex items-center gap-1">
                            <i class="fas fa-rotate"></i>
                            <span>${GuardifyVars.texts.refresh_title}</span>
                        </button>
                    </div>
                    <div class="guardify-math-row">
                        <div class="guardify-math-eq">${toPersian(n1)} + ${toPersian(n2)} = ؟</div>
                        <div class="flex gap-2 items-center flex-grow justify-end">
                            <input type="text" class="guardify-input" placeholder="؟" maxlength="2" inputmode="numeric">
                            <button type="button" class="guardify-verify-btn">${GuardifyVars.texts.verify_btn}</button>
                        </div>
                    </div>
                </div>`;
        } else if(type === 'slider') {
            html = `
                <div class="guardify-captcha-container">
                    <div class="guardify-top-radar-track"><div class="guardify-top-radar-beam"></div></div>
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-xs font-black">${GuardifyVars.texts.protection_label}: اعتبارسنجی حرکتی</span>
                    </div>
                    <div class="guardify-slider-track">
                        <div class="guardify-slider-progress" style="width:0%"></div>
                        <span class="text-xs font-bold text-slate-500 dark:text-slate-400 select-none">${GuardifyVars.texts.slider_hint}</span>
                        <div class="guardify-slider-thumb">
                            <i class="fas fa-arrow-left text-indigo-600 text-xs"></i>
                        </div>
                    </div>
                </div>`;
        } else if(type === 'icon_match') {
            html = `
                <div class="guardify-captcha-container" data-target="shield">
                    <div class="guardify-top-radar-track"><div class="guardify-top-radar-beam"></div></div>
                    <div class="text-xs font-black mb-3">
                        جهت تایید انسانی، روی آیکون <span class="text-indigo-500 dark:text-indigo-400 font-extrabold">«سپر امنیتی»</span> کلیک کرده و سپس دکمه بررسی را بزنید:
                    </div>
                    <div class="guardify-icon-grid">
                        <button type="button" class="guardify-icon-btn" data-id="key" title="کلید">🔑</button>
                        <button type="button" class="guardify-icon-btn" data-id="shield" title="سپر">🛡️</button>
                        <button type="button" class="guardify-icon-btn" data-id="star" title="ستاره">⭐</button>
                        <button type="button" class="guardify-icon-btn" data-id="gem" title="الماس">💎</button>
                    </div>
                    <button type="button" class="guardify-verify-btn w-full mt-3">${GuardifyVars.texts.verify_btn}</button>
                </div>`;
        } else if(type === 'invisible_honeypot') {
            html = `
                <div class="guardify-captcha-container">
                    <div class="guardify-top-radar-track"><div class="guardify-top-radar-beam"></div></div>
                    <div class="flex flex-col sm:flex-row items-center justify-between gap-3 p-3 bg-indigo-500/10 rounded-xl border border-indigo-500/20">
                        <div class="flex items-center gap-3">
                            <i class="fas fa-shield-virus text-indigo-500 text-xl"></i>
                            <div class="text-xs font-bold leading-tight">
                                سپر هوشمند نامرئی و تله هانی‌پات فعال است.<br>
                                <span class="text-muted text-[11px] font-normal">کاربران عادی هیچ زحمتی نمی‌کشند؛ ربات‌ها به صورت پس‌زمینه شکار می‌شوند.</span>
                            </div>
                        </div>
                        <button type="button" class="btn-primary text-white text-xs px-4 py-2 rounded-xl shrink-0 font-bold" id="runScan">
                            <i class="fas fa-bolt text-amber-300 ml-1"></i>
                            شبیه‌سازی اسکن
                        </button>
                    </div>
                </div>`;
        }
        
        $wrapper.append(html);
        if (type === 'math') {
            $wrapper.find('input').focus();
        }
    }

    // Verify click handler
    $(document).on('click', '.guardify-verify-btn', function() {
        const $container = $(this).closest('.guardify-captcha-container');
        if(currentType === 'math') {
            const val = normalize($container.find('input').val().trim());
            if(val == $container.data('ans')) {
                startInspection($container);
            } else {
                $container.addClass('shake');
                $container.find('input').val('').focus();
                setTimeout(() => $container.removeClass('shake'), 500);
            }
        } else if(currentType === 'icon_match') {
            if($container.find('.guardify-icon-btn.selected').data('id') === 'shield') {
                startInspection($container);
            } else {
                $container.addClass('shake');
                setTimeout(() => $container.removeClass('shake'), 500);
            }
        }
    });

    // Enter key support for math captcha
    $(document).on('keypress', '.guardify-input', function(e) {
        if (e.which === 13) {
            e.preventDefault();
            $(this).closest('.guardify-captcha-container').find('.guardify-verify-btn').click();
        }
    });

    // Icon select handler
    $(document).on('click', '.guardify-icon-btn', function() {
        $(this).addClass('selected').siblings().removeClass('selected');
    });

    // Invisible scan handler
    $(document).on('click', '#runScan', function() {
        startInspection($(this).closest('.guardify-captcha-container'));
    });

    // Slider Drag Logic
    $(document).on('mousedown touchstart', '.guardify-slider-thumb', function(e) {
        const $thumb = $(this);
        const $track = $thumb.parent();
        const $progress = $track.find('.guardify-slider-progress');
        const startX = e.type === 'touchstart' ? e.touches[0].clientX : e.clientX;
        const max = $track.width() - $thumb.width() - 8;

        $(document).on('mousemove.slider touchmove.slider', function(ev) {
            const curX = ev.type === 'touchmove' ? ev.touches[0].clientX : ev.clientX;
            let diff = startX - curX; // RTL drag to left
            if(diff < 0) diff = 0;
            if(diff > max) diff = max;
            $thumb.css('transform', `translateX(${-diff}px)`);
            $progress.css('width', (diff/max*100) + '%');
            
            if(diff >= max * 0.92) {
                $(document).off('.slider');
                startInspection($track.closest('.guardify-captcha-container'));
            }
        });
        
        $(document).on('mouseup.slider touchend.slider', function() {
            $(document).off('.slider');
            if(!$track.closest('.guardify-captcha-container').hasClass('guardify-verifying') && !$track.closest('.guardify-captcha-container').hasClass('guardify-verified')) {
                $thumb.css('transform', 'translateX(0)');
                $progress.css('width', '0%');
            }
        });
    });

    // Refresh button
    $(document).on('click', '.refresh-btn', function() {
        renderWidget(currentType);
    });

    // Model tabs click
    $('.nav-btn').on('click', function() {
        $(this).addClass('active').siblings().removeClass('active');
        renderWidget($(this).data('model'));
    });

    // Context form tabs click (WooCommerce / Register / Login)
    $(document).on('click', '.demo-mode-tab', function() {
        $(this).addClass('active').siblings().removeClass('active');
        renderFormFields($(this).data('form-type'));
    });

    // Password visibility toggle
    $(document).on('click', '#toggleDemoPw', function() {
        const $input = $('#demoPasswordInput');
        const $icon = $(this).find('i');
        if ($input.attr('type') === 'password') {
            $input.attr('type', 'text');
            $icon.removeClass('fa-eye').addClass('fa-eye-slash');
        } else {
            $input.attr('type', 'password');
            $icon.removeClass('fa-eye-slash').addClass('fa-eye');
        }
    });

    // Submit button handler (Simulate secure submission)
    $(document).on('click', '#demoSubmitBtn', function() {
        const $btn = $(this);
        if ($btn.prop('disabled')) return;

        $btn.prop('disabled', true).html('<i class="fas fa-circle-notch fa-spin"></i><span>در حال ارسال و ثبت امن...</span>');

        setTimeout(() => {
            playChime(659.25, 987.77);
            $btn.html('<i class="fas fa-check"></i><span>ارسال شد!</span>');
            $('#demoSubmissionResult').slideDown(350);
        }, 350);
    });

    // WP-Login Pro Customizer & Live Preview Simulator Engine
    let currentPreviewForm = 'login';
    let currentPreviewLayout = 'centered';

    function renderWPLoginPreviewFields(formType) {
        if (!$('#preview-form-fields-container').length) return;
        currentPreviewForm = formType;
        const $container = $('#preview-form-fields-container').empty();
        $('#preview-feedback-alert').addClass('hidden').removeClass('bg-rose-500/20 text-rose-300 bg-emerald-500/20 text-emerald-300 border border-rose-500/30 border-emerald-500/30');

        if (formType === 'login') {
            $('#preview-form-title').text('ورود به حساب کاربری');
            $('#preview-form-desc').text('جهت دسترسی به پنل مدیریت، اطلاعات خود را وارد کنید.');
            $('#preview-submit-btn-text').text('ورود امن به سیستم');
            if (!$('#hide-remember-me').is(':checked')) {
                $('#preview-remember-container').removeClass('hidden');
            }

            $container.html(`
                <div class="space-y-1">
                    <label class="text-[11px] font-bold text-slate-300">نام کاربری یا آدرس ایمیل</label>
                    <input type="text" id="preview-user-input" value="admin" dir="ltr" class="w-full px-3 py-2 text-xs rounded-xl bg-slate-900/80 border border-slate-700 text-white font-mono">
                </div>
                <div class="space-y-1">
                    <label class="text-[11px] font-bold text-slate-300">کلمه عبور</label>
                    <input type="password" id="preview-pass-input" value="••••••••" dir="ltr" class="w-full px-3 py-2 text-xs rounded-xl bg-slate-900/80 border border-slate-700 text-white font-mono">
                </div>
            `);
        } else if (formType === 'register') {
            $('#preview-form-title').text('ثبت‌نام کاربر جدید');
            $('#preview-form-desc').text('برای ایجاد حساب کاربری، مشخصات خود را تکمیل فرمایید.');
            $('#preview-submit-btn-text').text('تکمیل ثبت‌نام و ساخت حساب');
            $('#preview-remember-container').addClass('hidden');

            $container.html(`
                <div class="space-y-1">
                    <label class="text-[11px] font-bold text-slate-300">نام کاربری انتخابی</label>
                    <input type="text" id="preview-user-input" value="new_user" dir="ltr" class="w-full px-3 py-2 text-xs rounded-xl bg-slate-900/80 border border-slate-700 text-white font-mono">
                </div>
                <div class="space-y-1">
                    <label class="text-[11px] font-bold text-slate-300">آدرس ایمیل معتبر</label>
                    <input type="email" id="preview-email-input" value="user@example.ir" dir="ltr" class="w-full px-3 py-2 text-xs rounded-xl bg-slate-900/80 border border-slate-700 text-white font-mono">
                </div>
                <div class="space-y-1">
                    <label class="text-[11px] font-bold text-slate-300">کلمه عبور امن</label>
                    <input type="password" id="preview-pass-input" value="Pass123456!" dir="ltr" class="w-full px-3 py-2 text-xs rounded-xl bg-slate-900/80 border border-slate-700 text-white font-mono">
                </div>
            `);
        } else if (formType === 'lostpassword') {
            $('#preview-form-title').text('بازیابی کلمه عبور');
            $('#preview-form-desc').text('نام کاربری یا ایمیل خود را وارد کنید تا لینک بازنشانی ارسال شود.');
            $('#preview-submit-btn-text').text('ارسال لینک بازنشانی رمز');
            $('#preview-remember-container').addClass('hidden');

            $container.html(`
                <div class="space-y-1">
                    <label class="text-[11px] font-bold text-slate-300">نام کاربری یا ایمیل ثبت‌شده</label>
                    <input type="text" id="preview-user-input" value="admin@guardifypro.ir" dir="ltr" class="w-full px-3 py-2 text-xs rounded-xl bg-slate-900/80 border border-slate-700 text-white font-mono">
                </div>
            `);
        }
    }

    function renderWPLoginPreviewLayout(layout) {
        if (!$('#preview-layout-wrapper').length) return;
        currentPreviewLayout = layout;
        const $wrapper = $('#preview-layout-wrapper').empty();

        const badge = $('#hero-badge-input').val() || '🛡️ پورتال امن مدیریت';
        const title = $('#hero-title-input').val() || 'سیستم ورود و شناسایی هوشمند گاردفای';
        const subtitle = $('#hero-subtitle-input').val() || 'به پرتال امن دسترسی کاربران خوش آمدید. تمامی داده‌ها و نشست‌های ورود رمزنگاری شده است.';
        const f1 = $('#hero-f1-input').val() || '⚡ توکن‌های HMAC Anti-Replay یک‌بار مصرف';
        const f2 = $('#hero-f2-input').val() || '🔒 رمزنگاری ۲۵۶ بیتی نشست‌های فعال';
        const f3 = $('#hero-f3-input').val() || '🛡️ سپر ضد حمله Brute-Force و Bot-Scan';
        const footerNote = $('#hero-footer-input').val() || '🔐 تمامی فعالیت‌ها لاگ شده و تحت نظارت دیوار آتشین قرار دارند.';

        const $mainCard = $('#preview-main-card');

        if (layout === 'centered') {
            $wrapper.attr('class', 'w-full flex items-center justify-center p-4 transition-all duration-500');
            $mainCard.removeClass('max-w-xs max-w-sm max-w-md max-w-lg border-none shadow-none').addClass('max-w-md');
            $wrapper.append($mainCard);
        } else if (layout === 'split') {
            $wrapper.attr('class', 'w-full grid grid-cols-1 md:grid-cols-2 gap-8 items-center p-4 transition-all duration-500');
            $mainCard.removeClass('max-w-xs max-w-sm max-w-md max-w-lg').addClass('w-full');

            const $heroSide = $(`
                <div class="text-white space-y-4 text-right p-4 rounded-2xl bg-slate-900/40 backdrop-blur-md border border-slate-700/50">
                    <span class="inline-block px-3 py-1 rounded-full bg-amber-500/20 text-amber-400 text-[11px] font-black border border-amber-500/30">${badge}</span>
                    <h3 class="text-xl md:text-2xl font-black leading-snug">${title}</h3>
                    <p class="text-xs text-slate-300 leading-relaxed">${subtitle}</p>
                    <ul class="space-y-2 text-xs text-slate-200 pt-2 border-t border-slate-700/50">
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-amber-400"></i><span>${f1}</span></li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-amber-400"></i><span>${f2}</span></li>
                        <li class="flex items-center gap-2"><i class="fas fa-check-circle text-amber-400"></i><span>${f3}</span></li>
                    </ul>
                    <div class="text-[10px] text-amber-300/80 pt-2 font-mono">${footerNote}</div>
                </div>
            `);

            $wrapper.append($heroSide).append($mainCard);
        } else if (layout === 'sidebar-right') {
            $wrapper.attr('class', 'w-full flex justify-end p-4 transition-all duration-500');
            $mainCard.removeClass('max-w-xs max-w-sm max-w-md max-w-lg').addClass('max-w-md');
            $wrapper.append($mainCard);
        } else if (layout === 'sidebar-left') {
            $wrapper.attr('class', 'w-full flex justify-start p-4 transition-all duration-500');
            $mainCard.removeClass('max-w-xs max-w-sm max-w-md max-w-lg').addClass('max-w-md');
            $wrapper.append($mainCard);
        } else if (layout === 'two-cards') {
            $wrapper.attr('class', 'w-full grid grid-cols-1 md:grid-cols-12 gap-6 items-center p-4 transition-all duration-500');
            $mainCard.removeClass('max-w-xs max-w-sm max-w-md max-w-lg').addClass('md:col-span-7 w-full');

            const $sideInfoCard = $(`
                <div class="md:col-span-5 text-white p-6 rounded-2xl bg-gradient-to-br from-amber-500/20 to-indigo-600/20 border border-amber-500/30 backdrop-blur-xl shadow-2xl space-y-3">
                    <div class="w-10 h-10 rounded-xl bg-amber-500/30 flex items-center justify-center text-amber-300 text-lg">
                        <i class="fas fa-shield-cat"></i>
                    </div>
                    <h4 class="font-black text-base">${badge}</h4>
                    <p class="text-xs text-slate-200 leading-relaxed">${subtitle}</p>
                    <div class="p-3 rounded-xl bg-slate-900/60 border border-amber-500/20 text-[11px] space-y-1">
                        <div class="font-bold text-amber-400">وضعیت محافظت لاگین:</div>
                        <div class="text-emerald-400 flex items-center gap-1.5"><i class="fas fa-check"></i><span>سپر هوشمند Guardify Active</span></div>
                    </div>
                </div>
            `);

            $wrapper.append($mainCard).append($sideInfoCard);
        } else if (layout === 'minimal') {
            $wrapper.attr('class', 'w-full flex items-center justify-center p-4 transition-all duration-500');
            $mainCard.removeClass('max-w-xs max-w-sm max-w-md max-w-lg').addClass('max-w-sm shadow-none');
            $wrapper.append($mainCard);
        }
    }

    // Event listeners for WP-Login Customizer
    $(document).on('click', '.preview-mode-tab', function() {
        $('.preview-mode-tab').removeClass('active bg-amber-500 text-slate-950 font-black').addClass('text-slate-300');
        $(this).addClass('active bg-amber-500 text-slate-950 font-black').removeClass('text-slate-300');
        renderWPLoginPreviewFields($(this).data('form'));
    });

    $(document).on('click', '.login-layout-btn', function() {
        $('.login-layout-btn').removeClass('active');
        $(this).addClass('active');
        const layout = $(this).data('layout');
        $('#active-layout-label').text($(this).find('span').text());
        renderWPLoginPreviewLayout(layout);
    });

    $(document).on('change', '#wplogin-theme-select', function() {
        const theme = $(this).val();
        $('#login-preview-viewport').attr('class', 'login-preview-viewport ' + theme + ' shadow-2xl relative');
        $('#active-theme-label').text($(this).find('option:selected').text().split(' ')[1] || 'Theme');
    });

    $(document).on('input', '#glass-blur-range', function() {
        const blurVal = $(this).val();
        $('#preview-main-card').css('backdrop-filter', `blur(${blurVal}px)`);
    });

    $(document).on('change', '#ambient-glow-toggle', function() {
        if ($(this).is(':checked')) {
            $('#ambient-glow-1, #ambient-glow-2').removeClass('hidden');
        } else {
            $('#ambient-glow-1, #ambient-glow-2').addClass('hidden');
        }
    });

    $(document).on('change', '#wplogin-font-select', function() {
        const fontName = $(this).val();
        $('#preview-main-card').css('font-family', `'${fontName}', sans-serif`);
    });

    // Hero Text Inputs Sync
    $(document).on('input', '#hero-badge-input, #hero-title-input, #hero-subtitle-input, #hero-f1-input, #hero-f2-input, #hero-f3-input, #hero-footer-input', function() {
        if (currentPreviewLayout === 'split' || currentPreviewLayout === 'two-cards') {
            renderWPLoginPreviewLayout(currentPreviewLayout);
        }
    });

    // Remember Me & Links Controls
    $(document).on('change', '#hide-remember-me', function() {
        if ($(this).is(':checked')) {
            $('#preview-remember-container').addClass('hidden');
        } else {
            if (currentPreviewForm === 'login') $('#preview-remember-container').removeClass('hidden');
        }
    });

    $(document).on('change', '#show-remember-tooltip', function() {
        if ($(this).is(':checked')) {
            $('#preview-remember-tooltip-icon').removeClass('hidden');
        } else {
            $('#preview-remember-tooltip-icon').addClass('hidden');
        }
    });

    $(document).on('input', '#tooltip-text-input', function() {
        $('#preview-remember-tooltip-box').text($(this).val());
    });

    $(document).on('change', '#hide-back-link', function() {
        if ($(this).is(':checked')) {
            $('#preview-back-home-link').addClass('hidden');
        } else {
            $('#preview-back-home-link').removeClass('hidden');
        }
    });

    $(document).on('change', '#show-privacy-bar', function() {
        if ($(this).is(':checked')) {
            $('#preview-privacy-bar').removeClass('hidden');
        } else {
            $('#preview-privacy-bar').addClass('hidden');
        }
    });

    $(document).on('change', '#hide-guardify-mark', function() {
        if ($(this).is(':checked')) {
            $('#preview-guardify-mark').addClass('hidden');
        } else {
            $('#preview-guardify-mark').removeClass('hidden');
        }
    });

    $(document).on('input', '#custom-footer-text', function() {
        $('#preview-custom-footer-text').text($(this).val());
    });

    $(document).on('input', '#custom-login-slug', function() {
        const val = $(this).val() || 'wp-login.php';
        $('#active-slug-demo').text('/' + val);
    });

    // Master Switch Toggle
    $(document).on('change', '#wplogin-master-switch', function() {
        if ($(this).is(':checked')) {
            $('#preview-main-card').removeClass('opacity-40 grayscale');
            $('#preview-feedback-alert').addClass('hidden');
        } else {
            $('#preview-main-card').addClass('opacity-40 grayscale');
            $('#preview-feedback-alert').removeClass('hidden bg-emerald-500/20 text-emerald-300 border-emerald-500/30').addClass('bg-amber-500/20 text-amber-300 border border-amber-500/30').html('<i class="fas fa-triangle-exclamation"></i> طراحی اختصاصی غیرفعال است (فرم لاگین دیفالت وردپرس لود می‌شود).');
        }
    });

    // Submit Simulation on Preview Card
    $(document).on('click', '#preview-submit-btn', function() {
        const $alert = $('#preview-feedback-alert');
        const captchaVal = $('#preview-captcha-input').val().trim();
        const isGenericErrors = $('#hardening-generic-errors').is(':checked');

        if (captchaVal !== '12') {
            $alert.removeClass('hidden bg-emerald-500/20 text-emerald-300 border-emerald-500/30').addClass('bg-rose-500/20 text-rose-300 border border-rose-500/30').html('<i class="fas fa-xmark"></i> چالش امنیتی نادرست است. لطفاً مجدداً سعی نمایید.');
            playChime(300, 200);
            return;
        }

        if (isGenericErrors) {
            $alert.removeClass('hidden bg-emerald-500/20 text-emerald-300 border-emerald-500/30').addClass('bg-rose-500/20 text-rose-300 border border-rose-500/30').html('<i class="fas fa-user-slash"></i> <strong>خطای امنیتی گاردفای:</strong> اطلاعات ورود وارد شده نامعتبر است (Generic Security Error).');
            playChime(400, 300);
        } else {
            $alert.removeClass('hidden bg-rose-500/20 text-rose-300 border-rose-500/30').addClass('bg-emerald-500/20 text-emerald-300 border-emerald-500/30').html('<i class="fas fa-shield-check"></i> درخواست معتبر؛ ورود به داشبورد وردپرس با موفقیت تایید شد.');
            playChime(600, 900);
        }
    });

    // Reset button handler
    $(document).on('click', '#demoResetBtn', function() {
        renderWidget(currentType);
    });

    // Initial render
    $(document).ready(function() {
        renderFormFields('checkout');
        renderWidget('slider');
        renderWPLoginPreviewFields('login');
        renderWPLoginPreviewLayout('centered');
    });
})(window.jQuery);

// Register Service Worker for Caching and Instant Offline Loading
if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
        navigator.serviceWorker.register('/sw.js').catch(() => {});
    });
}

/* ==========================================================================
   EXACT GUARDIFY PRO PLUGIN WP-LOGIN STYLER SHOWCASE ENGINE (zipGenerator.ts)
   ========================================================================== */
window.currentLayout = 'split_screen';
window.currentWallpaper = 'theme_adaptive';
window.currentCaptcha = 'slider';

window.captchaTemplates = {
    math: `
        <div class="guardify-captcha-container">
            <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:8px;font-size:12px;">
                <span style="font-weight:700;color:#fbbf24;display:flex;align-items:center;gap:4px;">
                    <span>🔢 چالش هوشمند ریاضی:</span>
                </span>
                <span style="font-size:11px;color:#94a3b8;cursor:pointer;display:inline-flex;align-items:center;gap:3px;" onclick="window.refreshMathQuestion(this)">🔄 سوال جدید</span>
            </div>
            <div style="display:flex;align-items:center;gap:8px;">
                <div style="background:rgba(15,23,42,0.9);border:1px solid rgba(255,255,255,0.18);padding:6px 14px;border-radius:10px;font-weight:900;color:#fbbf24;font-family:monospace;font-size:15px;" class="math-expr">
                    ۹ + ۴ = ؟
                </div>
                <input type="number" placeholder="پاسخ..." class="guardify-input" style="height:38px;padding:0 10px;text-align:center;font-weight:700;max-width:100px;" />
                <button type="button" onclick="alert('تست پیش‌نمایش: پاسخ کپچای ریاضی تایید گردید! ✅')" style="height:38px;padding:0 14px;background:#f59e0b;color:#0f172a;border:none;border-radius:10px;font-size:12px;font-weight:800;cursor:pointer;transition:transform 0.15s;">
                    بررسی
                </button>
            </div>
        </div>
    `,
    slider: `
        <div class="guardify-captcha-container">
            <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:8px;font-size:12px;">
                <span style="font-weight:700;color:#fbbf24;display:flex;align-items:center;gap:4px;">
                    <span>↔️ اسلایدر امنیتی ضد ربات:</span>
                </span>
                <span style="font-size:11px;color:#94a3b8;">Drag to Verify</span>
            </div>
            <div style="position:relative;background:rgba(15,23,42,0.8);border:1px solid rgba(255,255,255,0.15);height:40px;border-radius:12px;display:flex;align-items:center;padding:0 10px;overflow:hidden;">
                <div class="guardify-slider-progress" style="position:absolute;left:0;top:0;bottom:0;background:rgba(245,158,11,0.25);width:0%;"></div>
                <div style="position:relative;z-index:10;font-size:11px;color:#cbd5e1;pointer-events:none;margin:0 auto;">دستگیره را به سمت چپ بکشید ➔</div>
                <input type="range" min="0" max="100" value="0" oninput="var p=this.previousElementSibling.previousElementSibling; if(p) p.style.width=this.value+'%'; if(this.value>=95) alert('تست پیش‌نمایش: اسلایدر کشیدنی تایید شد! ✅')" style="width:100%;opacity:0;cursor:pointer;position:absolute;inset:0;z-index:30;" />
            </div>
        </div>
    `,
    icon: `
        <div class="guardify-captcha-container">
            <div style="font-size:12px;font-weight:700;color:#fbbf24;margin-bottom:8px;display:flex;align-items:center;justify-content:space-between;">
                <span>👁️ روی آیکون <strong style="color:#ffffff;background:rgba(255,255,255,0.1);padding:2px 8px;border-radius:6px;">«کلید 🔑»</strong> کلیک کنید:</span>
            </div>
            <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:8px;">
                <button type="button" onclick="alert('آیکون اشتباه انتخاب شد! ❌')" style="background:rgba(15,23,42,0.8);border:1px solid rgba(255,255,255,0.15);padding:8px;border-radius:10px;font-size:20px;cursor:pointer;transition:all 0.2s;">🛡️</button>
                <button type="button" onclick="alert('تست پیش‌نمایش: آیکون کلید به درستی تایید شد! ✅')" style="background:rgba(15,23,42,0.8);border:1px solid rgba(255,255,255,0.15);padding:8px;border-radius:10px;font-size:20px;cursor:pointer;transition:all 0.2s;">🔑</button>
                <button type="button" onclick="alert('آیکون اشتباه انتخاب شد! ❌')" style="background:rgba(15,23,42,0.8);border:1px solid rgba(255,255,255,0.15);padding:8px;border-radius:10px;font-size:20px;cursor:pointer;transition:all 0.2s;">⚡</button>
                <button type="button" onclick="alert('آیکون اشتباه انتخاب شد! ❌')" style="background:rgba(15,23,42,0.8);border:1px solid rgba(255,255,255,0.15);padding:8px;border-radius:10px;font-size:20px;cursor:pointer;transition:all 0.2s;">🔒</button>
            </div>
        </div>
    `
};

window.getFormHTML = function() {
    return `
        <div class="guardify-login-card-preview">
            <div class="guardify-card-header">
                <div class="guardify-shield-icon">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                </div>
                <h2 class="guardify-card-title">ورود به حساب کاربری</h2>
                <p class="guardify-card-subtitle">جهت دسترسی به حساب، مشخصات خود را وارد کنید.</p>
            </div>

            <form onsubmit="event.preventDefault(); alert('فرم با موفقیت ارسال شد!');">
                <div class="guardify-field-group">
                    <label>نام کاربری یا آدرس ایمیل:</label>
                    <input type="text" value="admin_demo" class="guardify-input" />
                </div>

                <div class="guardify-field-group">
                    <label>رمز عبور:</label>
                    <div class="guardify-pwd-wrap">
                        <input type="password" value="Password@123" id="pwd-field-showcase" class="guardify-input" />
                        <button type="button" onclick="window.togglePasswordVis()" class="guardify-eye-toggle" title="نمایش/مخفی‌سازی رمز">
                            👁️
                        </button>
                    </div>
                </div>

                ${window.captchaTemplates[window.currentCaptcha]}

                <div class="guardify-remember-row">
                    <label class="guardify-checkbox-label">
                        <input type="checkbox" checked class="guardify-checkbox" />
                        <span>مرا به خاطر بسپار</span>
                        <span class="guardify-remember-tooltip-wrap">
                            ℹ️
                            <span class="guardify-remember-tooltip-content">
                                جهت امنیت بیشتر، در رایانه‌های عمومی این گزینه را تیک نزنید.
                            </span>
                        </span>
                    </label>
                    <a href="#" style="color:#fbbf24;text-decoration:none;font-weight:600;">رمز عبور را فراموش کرده‌اید؟</a>
                </div>

                <button type="submit" class="guardify-submit-btn">
                    ورود به سامانه ➔
                </button>
            </form>

            <div class="guardify-login-footer-wrap">
                <div class="guardify-security-badge-pill">
                    🛡️ <span>محافظت شده با فناوری هوشمند Guardify Security</span>
                </div>
                <div class="guardify-login-legal-bar">
                    <a href="#">قوانین و مقررات</a>
                    <span>·</span>
                    <a href="#">حریم خصوصی</a>
                    <span>·</span>
                    <a href="#">پشتیبانی</a>
                </div>
            </div>
        </div>
    `;
};

window.renderStage = function() {
    const stage = document.getElementById('layout-stage');
    if (!stage) return;
    const formCard = window.getFormHTML();

    if (window.currentLayout === 'split_screen') {
        stage.innerHTML = `
            <div class="guardify-split-container">
                <div class="guardify-split-banner">
                    <div style="display:flex;align-items:center;gap:12px;">
                        <div class="guardify-preview-brand-icon" style="width:40px;height:40px;border-radius:12px;background:rgba(255,255,255,0.12);display:flex;align-items:center;justify-content:center;color:#fbbf24;font-size:20px;">🛡️</div>
                        <span class="guardify-preview-brand-title">وب‌سایت نمونه گاردفای</span>
                    </div>

                    <div style="margin:auto 0;max-width:440px;">
                        <div class="guardify-preview-tag-badge">
                            🚀 هویت بصری مدرن و سفارشی
                        </div>
                        <h1 class="guardify-preview-main-heading">
                            سیستم جامع امنیت و ورود وردپرس
                        </h1>
                        <p class="guardify-preview-main-desc">
                            محافظت کامل در برابر حملات Brute-Force، تله‌های هانی‌پات نامرئی و چالش‌های بدون قطعی با ظاهر شیک.
                        </p>
                    </div>
                </div>

                <div class="guardify-split-form-wrap">
                    ${formCard}
                </div>
            </div>
        `;
    } else if (window.currentLayout === 'sidebar_right') {
        stage.innerHTML = `
            <div class="guardify-sidebar-stage">
                <div class="guardify-sidebar-form-col">
                    ${formCard}
                </div>
                <div class="guardify-sidebar-hero-col">
                    <div style="max-width:440px;">
                        <div style="font-size:48px;margin-bottom:16px;">🏰</div>
                        <h2 class="guardify-preview-sidebar-heading">سایدبار راست تمام‌قد</h2>
                        <p class="guardify-preview-sidebar-desc">فرم ورود ثابت در سمت راست و فضای برندینگ در سمت چپ</p>
                        <div class="guardify-preview-tag-badge">
                            پورتال سازمانی و مدیریت
                        </div>
                    </div>
                </div>
            </div>
        `;
    } else if (window.currentLayout === 'sidebar_left') {
        stage.innerHTML = `
            <div class="guardify-sidebar-stage" style="flex-direction:row-reverse;">
                <div class="guardify-sidebar-form-col" style="border-right:1px solid rgba(255,255,255,0.1);border-left:none;">
                    ${formCard}
                </div>
                <div class="guardify-sidebar-hero-col">
                    <div style="max-width:440px;">
                        <div style="font-size:48px;margin-bottom:16px;">⚡</div>
                        <h2 class="guardify-preview-sidebar-heading">سایدبار چپ تمام‌قد</h2>
                        <p class="guardify-preview-sidebar-desc">فرم ورود در سمت چپ و هیرو بنر در سمت راست</p>
                    </div>
                </div>
            </div>
        `;
    } else if (window.currentLayout === 'floating_split') {
        stage.innerHTML = `
            <div class="guardify-floating-wrapper">
                <div class="guardify-floating-info-card">
                    <div>
                        <div style="width:48px;height:48px;border-radius:16px;background:rgba(245,158,11,0.15);border:1px solid rgba(245,158,11,0.3);display:flex;align-items:center;justify-content:center;color:#fbbf24;font-size:24px;margin-bottom:18px;">
                            💎
                        </div>
                        <h3 class="guardify-preview-floating-heading">کارت شناور دوتکه</h3>
                        <p class="guardify-preview-floating-desc">
                            قاب شناور مجلل با دو ستون معلق روی زمینه بلورین
                        </p>
                    </div>
                    <div class="guardify-preview-floating-feats">
                        <span>✔ والپیپرهای پویا</span>
                        <span>✔ تطبیق هوشمند رنگ‌ها</span>
                    </div>
                </div>
                <div class="guardify-floating-form-wrap" style="flex:1;width:100%;">
                    ${formCard}
                </div>
            </div>
        `;
    } else if (window.currentLayout === 'minimal_compact') {
        stage.innerHTML = `
            <div style="max-width:380px;margin:0 auto;">
                ${formCard}
            </div>
        `;
    } else {
        // centered_card
        stage.innerHTML = `
            <div style="max-width:440px;margin:0 auto;">
                ${formCard}
            </div>
        `;
    }
};

window.switchLayout = function(layoutKey) {
    window.currentLayout = layoutKey;

    document.querySelectorAll('.layout-btn-showcase').forEach(btn => {
        btn.className = 'layout-btn-showcase px-3 py-1.5 rounded-xl text-xs font-bold text-slate-300 hover:bg-slate-800 transition-all cursor-pointer';
    });
    const activeBtn = document.getElementById('btn-' + layoutKey);
    if (activeBtn) {
        activeBtn.className = 'layout-btn-showcase active px-3 py-1.5 rounded-xl text-xs font-bold transition-all bg-amber-500 text-slate-950 shadow-md cursor-pointer';
    }

    window.renderStage();
};

window.switchWallpaper = function(wpKey) {
    window.currentWallpaper = wpKey;
    const showcaseContainer = document.getElementById('showcase-canvas-container');
    if (showcaseContainer) {
        showcaseContainer.className = `bg-preset-${wpKey} p-6 md:p-12 rounded-[2.5rem] border border-slate-800/80 shadow-2xl relative overflow-hidden transition-all duration-300 min-h-[580px] flex items-center justify-center`;
    }
};

window.switchCaptcha = function(typeKey) {
    window.currentCaptcha = typeKey;
    document.querySelectorAll('.cap-btn-showcase').forEach(btn => {
        btn.className = 'cap-btn-showcase px-2.5 py-1 rounded-lg font-bold text-[11px] bg-slate-800 text-slate-300 border border-slate-700 cursor-pointer';
    });
    const activeBtn = document.getElementById('cap-' + typeKey);
    if (activeBtn) {
        activeBtn.className = 'cap-btn-showcase active px-2.5 py-1 rounded-lg font-bold text-[11px] bg-amber-500 text-slate-950 shadow-md cursor-pointer';
    }
    window.renderStage();
};

window.refreshMathQuestion = function(el) {
    const mathBox = el.closest('.guardify-captcha-container').querySelector('.math-expr');
    if (mathBox) {
        const n1 = Math.floor(Math.random() * 9) + 1;
        const n2 = Math.floor(Math.random() * 9) + 1;
        mathBox.textContent = `${n1} + ${n2} = ؟`;
    }
};

window.togglePasswordVis = function() {
    const input = document.getElementById('pwd-field-showcase');
    if (input) {
        input.type = input.type === 'password' ? 'text' : 'password';
    }
};

if (document.readyState === 'complete' || document.readyState === 'interactive') {
    setTimeout(window.renderStage, 0);
} else {
    document.addEventListener('DOMContentLoaded', window.renderStage);
}

// Atmospheric Cyber Visual Effects & Interactive Mouse Spotlight System
(function initAtmosphericVisualFX() {
    let ticking = false;
    let lastX = window.innerWidth / 2;
    let lastY = window.innerHeight / 2;

    window.addEventListener('pointermove', (e) => {
        lastX = e.clientX;
        lastY = e.clientY;
        if (!ticking) {
            requestAnimationFrame(() => {
                document.documentElement.style.setProperty('--mouse-x', `${lastX}px`);
                document.documentElement.style.setProperty('--mouse-y', `${lastY}px`);
                ticking = false;
            });
            ticking = true;
        }
    }, { passive: true });

    const updateCardSpotlight = (card, e) => {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        card.style.setProperty('--card-x', `${x}px`);
        card.style.setProperty('--card-y', `${y}px`);
    };

    document.addEventListener('pointermove', (e) => {
        const targetCard = e.target.closest('.spotlight-card, .feature-card, .stat-card');
        if (targetCard) {
            updateCardSpotlight(targetCard, e);
        }
    }, { passive: true });

    const canvas = document.getElementById('cyber-particles-canvas');
    if (!canvas) return;
    const ctx = canvas.getContext('2d');
    if (!ctx) return;

    let width = 0;
    let height = 0;
    let particles = [];
    let animationFrameId = null;
    let isPageVisible = !document.hidden;

    const resizeCanvas = () => {
        width = canvas.width = window.innerWidth;
        height = canvas.height = window.innerHeight;
    };

    const createParticles = () => {
        particles = [];
        const count = Math.min(Math.floor((width * height) / 36000), 42);
        const isDark = document.body.classList.contains('dark') || document.documentElement.classList.contains('dark');
        const darkColors = [
            'rgba(99, 102, 241, ', // Indigo
            'rgba(6, 182, 212, ',  // Cyan
            'rgba(168, 85, 247, ', // Violet
            'rgba(16, 185, 129, '  // Emerald
        ];
        const lightColors = [
            'rgba(79, 70, 229, ',  // Deep Indigo
            'rgba(2, 132, 199, ',  // Sky Blue
            'rgba(147, 51, 234, ', // Royal Violet
            'rgba(5, 150, 105, ',  // Emerald Green
            'rgba(217, 119, 6, '   // Warm Amber
        ];
        const colors = isDark ? darkColors : lightColors;

        for (let i = 0; i < count; i++) {
            particles.push({
                x: Math.random() * width,
                y: Math.random() * height,
                vx: (Math.random() - 0.5) * 0.45,
                vy: (Math.random() - 0.5) * 0.45,
                radius: Math.random() * 2.5 + 1.2,
                colorBase: colors[Math.floor(Math.random() * colors.length)],
                alpha: isDark ? (Math.random() * 0.4 + 0.2) : (Math.random() * 0.45 + 0.35)
            });
        }
    };

    const drawParticles = () => {
        if (!isPageVisible) return;
        ctx.clearRect(0, 0, width, height);

        const isDark = document.body.classList.contains('dark') || document.documentElement.classList.contains('dark');
        const lineAlphaScale = isDark ? 0.12 : 0.16;
        const lineStrokeColor = isDark ? '99, 102, 241' : '79, 70, 229';

        for (let i = 0; i < particles.length; i++) {
            for (let j = i + 1; j < particles.length; j++) {
                const dx = particles[i].x - particles[j].x;
                const dy = particles[i].y - particles[j].y;
                const dist = Math.sqrt(dx * dx + dy * dy);

                if (dist < 135) {
                    const alpha = (1 - dist / 135) * lineAlphaScale;
                    ctx.beginPath();
                    ctx.moveTo(particles[i].x, particles[i].y);
                    ctx.lineTo(particles[j].x, particles[j].y);
                    ctx.strokeStyle = `rgba(${lineStrokeColor}, ${alpha})`;
                    ctx.lineWidth = isDark ? 0.75 : 0.9;
                    ctx.stroke();
                }
            }
        }

        for (let i = 0; i < particles.length; i++) {
            const p = particles[i];
            p.x += p.vx;
            p.y += p.vy;

            if (p.x < 0) p.x = width;
            if (p.x > width) p.x = 0;
            if (p.y < 0) p.y = height;
            if (p.y > height) p.y = 0;

            ctx.beginPath();
            ctx.arc(p.x, p.y, p.radius, 0, Math.PI * 2);
            ctx.fillStyle = `${p.colorBase}${isDark ? p.alpha : p.alpha * 0.5})`;
            ctx.shadowBlur = 6;
            ctx.shadowColor = p.colorBase + '0.4)';
            ctx.fill();
            ctx.shadowBlur = 0;
        }

        animationFrameId = requestAnimationFrame(drawParticles);
    };

    window.addEventListener('resize', () => {
        resizeCanvas();
        createParticles();
    }, { passive: true });

    document.addEventListener('visibilitychange', () => {
        isPageVisible = !document.hidden;
        if (isPageVisible) {
            cancelAnimationFrame(animationFrameId);
            drawParticles();
        } else {
            cancelAnimationFrame(animationFrameId);
        }
    });

    resizeCanvas();
    createParticles();
    drawParticles();
})();
