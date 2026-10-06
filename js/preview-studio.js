
    window.showPreviewToast = function(msg) {
        var old = document.getElementById('preview-toast');
        if (old) old.remove();
        var t = document.createElement('div');
        t.id = 'preview-toast';
        t.style.cssText = 'position:fixed;bottom:24px;left:24px;background:#0f172a;color:#fff;padding:12px 20px;border-radius:14px;border:1px solid #10b981;box-shadow:0 10px 25px rgba(0,0,0,0.5);font-size:13px;font-weight:800;z-index:99999;direction:rtl;';
        t.innerHTML = msg;
        document.body.appendChild(t);
        setTimeout(function() { if (t) t.remove(); }, 2500);
    };
    /**
 * Guardify Pro v4.00 - Dedicated Interactive Preview & Styler Studio Engine
 * Developed by DevBan
 */
(function() {
    'use strict';

    // Persian number normalization
    const toPersian = (n) => String(n).replace(/\d/g, d => '۰۱۲۳۴۵۶۷۸۹'[d]);
    const normalize = (s) => String(s).replace(/[۰-۹]/g, d => '۰۱۲۳۴۵۶۷۸۹'.indexOf(d)).replace(/[٠-٩]/g, d => '٠١٢٣٤٥٦٧٨٩'.indexOf(d));

    // Audio Chime Generator using Web Audio API
    function playChime(freq = 587.33, freq2 = 880) {
        try {
            const AudioContext = window.AudioContext || window.webkitAudioContext;
            if (!AudioContext) return;
            const ctx = new AudioContext();
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

    /* ==========================================================================
       SECTION 1: CAPTCHA PLAYGROUND ENGINE
       ========================================================================== */
    let currentCaptchaModel = 'slider';
    let currentFormContext = 'checkout';

    function renderFormFields(formType) {
        currentFormContext = formType;
        const container = document.getElementById('demoFormFields');
        const resultAlert = document.getElementById('demoSubmissionResult');
        if (resultAlert) resultAlert.classList.add('hidden');

        if (!container) return;

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
                        <span>محصول دانلودی</span>
                    </label>
                    <input type="text" class="input-field bg-slate-100 dark:bg-slate-900/60 cursor-not-allowed" value="لایسنس نامحدود گاردفای پرو" readonly>
                </div>
                <div class="space-y-1.5">
                    <label class="text-[11px] font-black uppercase text-slate-700 dark:text-slate-300 flex items-center gap-1.5">
                        <i class="fas fa-credit-card text-blue-500 text-xs"></i>
                        <span>مبلغ تسویه‌حساب</span>
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
                        <span>آدرس ایمیل کاربر</span>
                    </label>
                    <input type="email" dir="ltr" class="input-field text-left" value="user@domain.ir" placeholder="Email Address">
                </div>
                <div class="space-y-1.5 md:col-span-2">
                    <label class="text-[11px] font-black uppercase text-slate-700 dark:text-slate-300 flex items-center gap-1.5">
                        <i class="fas fa-key text-amber-500 text-xs"></i>
                        <span>کلمه عبور امن</span>
                    </label>
                    <div class="input-field-wrapper relative">
                        <input type="password" id="demoPasswordInput" class="input-field w-full" value="GuardifySecure2026!">
                        <button type="button" class="pw-toggle-btn absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 hover:text-white" id="toggleDemoPw">
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
                        <span>نام کاربری یا ایمیل مدیریت</span>
                    </label>
                    <input type="text" dir="ltr" class="input-field text-left" value="admin@guardifypro.ir">
                </div>
                <div class="space-y-1.5">
                    <label class="text-[11px] font-black uppercase text-slate-700 dark:text-slate-300 flex items-center gap-1.5">
                        <i class="fas fa-lock text-rose-500 text-xs"></i>
                        <span>کلمه عبور ورود</span>
                    </label>
                    <div class="input-field-wrapper relative">
                        <input type="password" id="demoPasswordInput" class="input-field w-full" value="••••••••••••">
                        <button type="button" class="pw-toggle-btn absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 hover:text-white" id="toggleDemoPw">
                            <i class="fas fa-eye text-xs"></i>
                        </button>
                    </div>
                </div>
            `;
        }

        container.innerHTML = fieldsHtml;
    }

    function startInspection(containerEl) {
        if (!containerEl || containerEl.classList.contains('guardify-verified') || containerEl.classList.contains('guardify-verifying')) return;

        containerEl.classList.add('guardify-verifying');
        const inspectBox = document.createElement('div');
        inspectBox.className = 'guardify-inspect-box mt-3 p-3 rounded-xl bg-slate-900/90 border border-indigo-500/30 text-right';
        inspectBox.innerHTML = `
            <div class="flex items-center justify-between mb-2">
                <span class="text-[10px] font-black text-slate-200">سنجش پارامترهای تله‌متری و اعتبارسنجی کلاینت...</span>
                <span class="inspect-pct text-[10px] text-indigo-400 font-bold font-mono">۰٪</span>
            </div>
            <div class="guardify-inspect-bar-track w-full h-1.5 bg-slate-800 rounded-full overflow-hidden mb-2">
                <div class="guardify-inspect-bar-fill h-full bg-gradient-to-r from-indigo-500 to-emerald-400 w-0 transition-all duration-75"></div>
            </div>
            <div class="space-y-1 text-[10px]">
                <div class="guardify-check-item item-1 flex items-center gap-1.5 text-slate-300 active">
                    <i class="fas fa-circle-notch fa-spin text-indigo-400 text-xs"></i>
                    <span>بررسی محیط کلاینت و سلامت سشن</span>
                </div>
                <div class="guardify-check-item item-2 flex items-center gap-1.5 text-slate-500">
                    <i class="fas fa-clock text-xs"></i>
                    <span>سنجش تله‌متری رفتاری و سرعت تعامل کاربر</span>
                </div>
                <div class="guardify-check-item item-3 flex items-center gap-1.5 text-slate-500">
                    <i class="fas fa-key text-xs"></i>
                    <span>اعتبارسنجی توکن یک‌بار مصرف HMAC Anti-Replay</span>
                </div>
            </div>
        `;
        containerEl.appendChild(inspectBox);

        const fill = inspectBox.querySelector('.guardify-inspect-bar-fill');
        const pct = inspectBox.querySelector('.inspect-pct');
        const itm1 = inspectBox.querySelector('.item-1');
        const itm2 = inspectBox.querySelector('.item-2');
        const itm3 = inspectBox.querySelector('.item-3');

        let progress = 0;
        const interval = setInterval(() => {
            progress += 3;
            if (progress > 100) progress = 100;
            if (fill) fill.style.width = progress + '%';
            if (pct) pct.textContent = toPersian(progress) + '٪';

            if (progress >= 33 && itm1) {
                itm1.className = 'guardify-check-item item-1 flex items-center gap-1.5 text-emerald-400 font-bold';
                itm1.innerHTML = '<i class="fas fa-check text-xs"></i><span>محیط کاربری و مرورگر تایید شد</span>';
                if (itm2) itm2.className = 'guardify-check-item item-2 flex items-center gap-1.5 text-slate-300 font-bold';
            }
            if (progress >= 66 && itm2) {
                itm2.className = 'guardify-check-item item-2 flex items-center gap-1.5 text-emerald-400 font-bold';
                itm2.innerHTML = '<i class="fas fa-check text-xs"></i><span>رفتار انسانی تایید شد (0ms Latency)</span>';
                if (itm3) itm3.className = 'guardify-check-item item-3 flex items-center gap-1.5 text-slate-300 font-bold';
            }
            if (progress >= 95 && itm3) {
                itm3.className = 'guardify-check-item item-3 flex items-center gap-1.5 text-emerald-400 font-bold';
                itm3.innerHTML = '<i class="fas fa-check text-xs"></i><span>توکن رمزنگاری HMAC تولید شد</span>';
            }

            if (progress >= 100) {
                clearInterval(interval);
                playChime(587.33, 880);
                containerEl.classList.remove('guardify-verifying');
                containerEl.classList.add('guardify-verified');

                setTimeout(() => {
                    inspectBox.innerHTML = `
                        <div class="flex items-center gap-2 p-2 rounded-xl bg-emerald-500/20 border border-emerald-500/40 text-emerald-400">
                            <i class="fas fa-check-circle text-base"></i>
                            <div class="text-right">
                                <div class="text-xs font-black">هویت انسانی شما با موفقیت تایید شد ✅</div>
                                <div class="text-[10px] text-emerald-300/80">فرم جهت ارسال امن بازگشایی گردید.</div>
                            </div>
                        </div>
                    `;

                    const submitBtn = document.getElementById('demoSubmitBtn');
                    if (submitBtn) {
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = '<i class="fas fa-paper-plane ml-2"></i><span>ارسال امن اطلاعات (آماده ارسال)</span>';
                        submitBtn.className = 'demo-submit-btn flex-grow bg-emerald-600 hover:bg-emerald-500 text-white px-6 py-3.5 rounded-xl font-black text-xs shadow-lg shadow-emerald-600/30 cursor-pointer transition-all animate-pulse';
                    }
                }, 200);
            }
        }, 22);
    }

    function renderWidget(type) {
        currentCaptchaModel = type;
        const wrapper = document.getElementById('captchaContainerWrapper');
        const submitBtn = document.getElementById('demoSubmitBtn');
        const resultAlert = document.getElementById('demoSubmissionResult');

        if (submitBtn) {
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="fas fa-lock ml-2"></i><span>ارسال امن اطلاعات (قفل شده)</span>';
            submitBtn.className = 'demo-submit-btn flex-grow bg-slate-800 text-slate-400 px-6 py-3.5 rounded-xl font-black text-xs cursor-not-allowed opacity-80';
        }
        if (resultAlert) resultAlert.classList.add('hidden');

        if (!wrapper) return;
        wrapper.innerHTML = '';

        let html = '';
        if (type === 'math') {
            const n1 = Math.floor(Math.random() * 8) + 2;
            const n2 = Math.floor(Math.random() * 7) + 2;
            html = `
                <div class="guardify-captcha-container" data-ans="${n1 + n2}">
                    <div class="guardify-top-radar-track"><div class="guardify-top-radar-beam"></div></div>
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-xs font-black text-readable">چالش امنیتی: جمع دو عدد زیر را وارد کنید</span>
                        <button type="button" id="refreshMathBtn" class="text-xs text-indigo-400 hover:text-indigo-300 flex items-center gap-1 cursor-pointer">
                            <i class="fas fa-rotate"></i>
                            <span>سوال جدید</span>
                        </button>
                    </div>
                    <div class="guardify-math-row flex items-center gap-3">
                        <div class="guardify-math-eq px-4 py-2 rounded-xl bg-slate-900 border border-slate-700 text-amber-400 font-mono font-black text-base">
                            ${toPersian(n1)} + ${toPersian(n2)} = ؟
                        </div>
                        <div class="flex gap-2 items-center flex-grow justify-end">
                            <input type="text" id="mathInput" class="guardify-input w-20 px-3 py-2 text-center rounded-xl bg-slate-900 border border-slate-700 text-readable font-bold" placeholder="؟" maxlength="2" inputmode="numeric">
                            <button type="button" id="verifyMathBtn" class="guardify-verify-btn px-4 py-2 rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white font-black text-xs cursor-pointer shadow-md">بررسی چالش</button>
                        </div>
                    </div>
                </div>
            `;
        } else if (type === 'slider') {
            html = `
                <div class="guardify-captcha-container">
                    <div class="guardify-top-radar-track"><div class="guardify-top-radar-beam"></div></div>
                    <div class="flex justify-between items-center mb-2">
                        <span class="text-xs font-black text-readable">حفاظت هوشمند: اعتبارسنجی حرکتی</span>
                        <span class="text-[10px] text-muted">Drag to Verify</span>
                    </div>
                    <div class="guardify-slider-track relative h-11 bg-slate-900/90 rounded-xl border border-slate-800 flex items-center px-2 overflow-hidden select-none" id="sliderTrack">
                        <div class="guardify-slider-progress absolute left-0 top-0 bottom-0 bg-indigo-500/20 w-0 transition-all pointer-events-none" id="sliderProgress"></div>
                        <span class="text-xs font-bold text-slate-400 select-none mx-auto pointer-events-none z-10">← دستگیره را تا انتها بکشید</span>
                        <div class="guardify-slider-thumb absolute right-1 w-9 h-9 rounded-lg bg-indigo-600 text-white flex items-center justify-center cursor-grab active:cursor-grabbing shadow-lg z-20 transition-transform" id="sliderThumb">
                            <i class="fas fa-arrow-left text-xs"></i>
                        </div>
                    </div>
                </div>
            `;
        } else if (type === 'icon_match') {
            html = `
                <div class="guardify-captcha-container" data-target="shield">
                    <div class="guardify-top-radar-track"><div class="guardify-top-radar-beam"></div></div>
                    <div class="text-xs font-black mb-3 text-readable">
                        جهت تایید انسانی، روی آیکون <span class="text-indigo-400 font-extrabold bg-indigo-500/10 px-2 py-0.5 rounded-md border border-indigo-500/20">«سپر امنیتی 🛡️»</span> کلیک کنید:
                    </div>
                    <div class="grid grid-cols-4 gap-2.5 mb-3" id="iconGrid">
                        <button type="button" class="icon-match-btn p-3 rounded-xl bg-slate-900/80 border border-slate-700 hover:border-indigo-500 text-2xl cursor-pointer transition-all flex items-center justify-center" data-id="key" title="کلید">🔑</button>
                        <button type="button" class="icon-match-btn p-3 rounded-xl bg-slate-900/80 border border-slate-700 hover:border-indigo-500 text-2xl cursor-pointer transition-all flex items-center justify-center" data-id="shield" title="سپر">🛡️</button>
                        <button type="button" class="icon-match-btn p-3 rounded-xl bg-slate-900/80 border border-slate-700 hover:border-indigo-500 text-2xl cursor-pointer transition-all flex items-center justify-center" data-id="star" title="ستاره">⭐</button>
                        <button type="button" class="icon-match-btn p-3 rounded-xl bg-slate-900/80 border border-slate-700 hover:border-indigo-500 text-2xl cursor-pointer transition-all flex items-center justify-center" data-id="gem" title="الماس">💎</button>
                    </div>
                    <button type="button" id="verifyIconBtn" class="guardify-verify-btn w-full py-2.5 rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white font-black text-xs cursor-pointer shadow-md">بررسی چالش</button>
                </div>
            `;
        } else if (type === 'invisible_honeypot') {
            html = `
                <div class="guardify-captcha-container">
                    <div class="guardify-top-radar-track"><div class="guardify-top-radar-beam"></div></div>
                    <div class="flex flex-col sm:flex-row items-center justify-between gap-3 p-3.5 bg-indigo-500/10 rounded-2xl border border-indigo-500/20 text-right">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-indigo-500/20 flex items-center justify-center text-indigo-400 text-lg shrink-0">
                                <i class="fas fa-shield-virus"></i>
                            </div>
                            <div class="text-xs leading-relaxed">
                                <div class="font-black text-indigo-300">سپر هوشمند نامرئی و تله هانی‌پات فعال است</div>
                                <div class="text-muted text-[11px] font-normal">کاربران واقعی نیاز به هیچ تعاملی ندارند؛ ربات‌ها به طور نامرئی در تله گرفتار می‌شوند.</div>
                            </div>
                        </div>
                        <button type="button" id="runScanBtn" class="px-4 py-2 rounded-xl bg-indigo-600 hover:bg-indigo-500 text-white text-xs font-black shrink-0 flex items-center gap-1.5 shadow-md cursor-pointer">
                            <i class="fas fa-bolt text-amber-300"></i>
                            <span>شبیه‌سازی اسکن</span>
                        </button>
                    </div>
                </div>
            `;
        }

        wrapper.innerHTML = html;
        bindWidgetEvents(type);
    }

    function bindWidgetEvents(type) {
        const container = document.querySelector('.guardify-captcha-container');
        if (!container) return;

        if (type === 'math') {
            const mathInput = document.getElementById('mathInput');
            const verifyBtn = document.getElementById('verifyMathBtn');
            const refreshBtn = document.getElementById('refreshMathBtn');

            if (refreshBtn) refreshBtn.onclick = () => renderWidget('math');

            const checkMath = () => {
                if (!mathInput) return;
                const val = normalize(mathInput.value.trim());
                if (val == container.getAttribute('data-ans')) {
                    startInspection(container);
                } else {
                    container.classList.add('shake');
                    mathInput.value = '';
                    mathInput.focus();
                    setTimeout(() => container.classList.remove('shake'), 500);
                }
            };

            if (verifyBtn) verifyBtn.onclick = checkMath;
            if (mathInput) {
                mathInput.onkeypress = (e) => {
                    if (e.key === 'Enter') {
                        e.preventDefault();
                        checkMath();
                    }
                };
                mathInput.focus();
            }
        } else if (type === 'icon_match') {
            let selectedIcon = null;
            const iconBtns = document.querySelectorAll('.icon-match-btn');
            iconBtns.forEach(btn => {
                btn.onclick = () => {
                    iconBtns.forEach(b => {
                        b.classList.remove('bg-indigo-600', 'text-white', 'border-indigo-400');
                        b.classList.add('bg-slate-900/80', 'border-slate-700');
                    });
                    btn.classList.add('bg-indigo-600', 'text-white', 'border-indigo-400');
                    btn.classList.remove('bg-slate-900/80', 'border-slate-700');
                    selectedIcon = btn.getAttribute('data-id');
                };
            });

            const verifyBtn = document.getElementById('verifyIconBtn');
            if (verifyBtn) {
                verifyBtn.onclick = () => {
                    if (selectedIcon === 'shield') {
                        startInspection(container);
                    } else {
                        container.classList.add('shake');
                        setTimeout(() => container.classList.remove('shake'), 500);
                    }
                };
            }
        } else if (type === 'invisible_honeypot') {
            const scanBtn = document.getElementById('runScanBtn');
            if (scanBtn) {
                scanBtn.onclick = () => startInspection(container);
            }
        } else if (type === 'slider') {
            const thumb = document.getElementById('sliderThumb');
            const track = document.getElementById('sliderTrack');
            const progress = document.getElementById('sliderProgress');

            if (thumb && track) {
                let isDragging = false;
                let startX = 0;
                let maxDrag = 0;

                const onStart = (e) => {
                    if (container.classList.contains('guardify-verified') || container.classList.contains('guardify-verifying')) return;
                    isDragging = true;
                    startX = e.type.includes('touch') ? e.touches[0].clientX : e.clientX;
                    maxDrag = track.clientWidth - thumb.clientWidth - 8;
                };

                const onMove = (e) => {
                    if (!isDragging) return;
                    const clientX = e.type.includes('touch') ? e.touches[0].clientX : e.clientX;
                    // RTL track: pulling to the left (decreasing clientX)
                    const deltaX = startX - clientX;
                    let currentPos = Math.max(0, Math.min(deltaX, maxDrag));

                    thumb.style.transform = `translateX(-${currentPos}px)`;
                    if (progress) {
                        const pct = (currentPos / maxDrag) * 100;
                        progress.style.width = pct + '%';
                    }

                    if (currentPos >= maxDrag * 0.94) {
                        isDragging = false;
                        startInspection(container);
                    }
                };

                const onEnd = () => {
                    if (!isDragging) return;
                    isDragging = false;
                    if (!container.classList.contains('guardify-verifying') && !container.classList.contains('guardify-verified')) {
                        thumb.style.transform = 'translateX(0)';
                        if (progress) progress.style.width = '0%';
                    }
                };

                thumb.addEventListener('mousedown', onStart);
                thumb.addEventListener('touchstart', onStart, { passive: true });
                window.addEventListener('mousemove', onMove);
                window.addEventListener('touchmove', onMove, { passive: true });
                window.addEventListener('mouseup', onEnd);
                window.addEventListener('touchend', onEnd);
            }
        }
    }

    /* ==========================================================================
       SECTION 2: WP-LOGIN PRO STYLER STUDIO ENGINE
       ========================================================================== */
    window.currentLayout = 'split_screen';
    window.currentWallpaper = 'theme_adaptive';
    window.currentCaptcha = 'slider';
    window.currentViewport = 'desktop';

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
                    <button type="button" onclick="window.showPreviewToast('✓ پاسخ کپچای ریاضی تایید گردید!')" style="height:38px;padding:0 14px;background:#f59e0b;color:#0f172a;border:none;border-radius:10px;font-size:12px;font-weight:800;cursor:pointer;transition:transform 0.15s;">
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
                    <input type="range" min="0" max="100" value="0" oninput="var p=this.previousElementSibling.previousElementSibling; if(p) p.style.width=this.value+'%'; if(this.value>=95) window.showPreviewToast('✓ اسلایدر پازلی با موفقیت تایید شد!')" style="width:100%;opacity:0;cursor:pointer;position:absolute;inset:0;z-index:30;" />
                </div>
            </div>
        `,
        icon: `
            <div class="guardify-captcha-container">
                <div style="font-size:12px;font-weight:700;color:#fbbf24;margin-bottom:8px;display:flex;align-items:center;justify-content:space-between;">
                    <span>👁️ روی آیکون <strong style="color:#ffffff;background:rgba(255,255,255,0.1);padding:2px 8px;border-radius:6px;">«کلید 🔑»</strong> کلیک کنید:</span>
                </div>
                <div style="display:grid;grid-template-columns:repeat(4,1fr);gap:8px;">
                    <button type="button" onclick="window.showPreviewToast('✗ آیکون اشتباه انتخاب شد! لطفاً مجدداً دقت فرمایید.')" style="background:rgba(15,23,42,0.8);border:1px solid rgba(255,255,255,0.15);padding:8px;border-radius:10px;font-size:20px;cursor:pointer;transition:all 0.2s;">🛡️</button>
                    <button type="button" onclick="window.showPreviewToast('✓ آیکون کلید به درستی تایید شد!')" style="background:rgba(15,23,42,0.8);border:1px solid rgba(255,255,255,0.15);padding:8px;border-radius:10px;font-size:20px;cursor:pointer;transition:all 0.2s;">🔑</button>
                    <button type="button" onclick="window.showPreviewToast('✗ آیکون اشتباه انتخاب شد! لطفاً مجدداً دقت فرمایید.')" style="background:rgba(15,23,42,0.8);border:1px solid rgba(255,255,255,0.15);padding:8px;border-radius:10px;font-size:20px;cursor:pointer;transition:all 0.2s;">⚡</button>
                    <button type="button" onclick="window.showPreviewToast('✗ آیکون اشتباه انتخاب شد! لطفاً مجدداً دقت فرمایید.')" style="background:rgba(15,23,42,0.8);border:1px solid rgba(255,255,255,0.15);padding:8px;border-radius:10px;font-size:20px;cursor:pointer;transition:all 0.2s;">🔒</button>
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
                    <p class="guardify-card-subtitle">جهت دسترسی به پنل وردپرس، اطلاعات خود را وارد کنید.</p>
                </div>

                <form onsubmit="event.preventDefault(); window.showPreviewToast('✓ فرم ورود با موفقیت ارسال گردید (پیش‌نمایش)');">
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

        // Update active code info badge
        const badgeEl = document.getElementById('activePresetInfo');
        if (badgeEl) {
            badgeEl.textContent = `چیدمان: ${window.currentLayout} | تم: ${window.currentWallpaper} | چالش: ${window.currentCaptcha}`;
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
            showcaseContainer.className = showcaseContainer.className
                .replace(/bg-preset-\w+/g, '')
                .trim() + ' bg-preset-' + wpKey;
        }

        document.querySelectorAll('.wp-btn-showcase').forEach(btn => {
            btn.classList.remove('ring-2', 'ring-amber-400');
        });
        const activeBtn = document.getElementById('wp-' + wpKey);
        if (activeBtn) {
            activeBtn.classList.add('ring-2', 'ring-amber-400');
        }

        window.renderStage();
    };

    window.switchCaptcha = function(typeKey) {
        window.currentCaptcha = typeKey;
        document.querySelectorAll('.cap-btn-showcase').forEach(btn => {
            btn.className = 'cap-btn-showcase px-2.5 py-1.5 rounded-lg font-bold text-[11px] bg-slate-800 text-slate-300 border border-slate-700 cursor-pointer';
        });
        const activeBtn = document.getElementById('cap-' + typeKey);
        if (activeBtn) {
            activeBtn.className = 'cap-btn-showcase active px-2.5 py-1.5 rounded-lg font-bold text-[11px] bg-amber-500 text-slate-950 shadow-md cursor-pointer';
        }
        window.renderStage();
    };

    window.switchViewport = function(mode) {
        window.currentViewport = mode;
        const frame = document.getElementById('stage-viewport-frame');
        document.querySelectorAll('.viewport-btn').forEach(btn => {
            btn.classList.remove('bg-indigo-600', 'text-white');
            btn.classList.add('text-slate-400');
        });

        const activeBtn = document.getElementById('vp-' + mode);
        if (activeBtn) {
            activeBtn.classList.add('bg-indigo-600', 'text-white');
            activeBtn.classList.remove('text-slate-400');
        }

        if (!frame) return;
        if (mode === 'desktop') {
            frame.style.maxWidth = '100%';
            frame.style.border = 'none';
            frame.style.borderRadius = '2.5rem';
        } else if (mode === 'tablet') {
            frame.style.maxWidth = '768px';
            frame.style.border = '3px solid rgba(99, 102, 241, 0.3)';
            frame.style.borderRadius = '2rem';
        } else if (mode === 'mobile') {
            frame.style.maxWidth = '390px';
            frame.style.border = '4px solid rgba(99, 102, 241, 0.5)';
            frame.style.borderRadius = '2.5rem';
        }
    };

    window.refreshMathQuestion = function(el) {
        const mathBox = el.closest('.guardify-captcha-container').querySelector('.math-expr');
        if (mathBox) {
            const a = Math.floor(Math.random() * 9) + 1;
            const b = Math.floor(Math.random() * 9) + 1;
            mathBox.textContent = `${toPersian(a)} + ${toPersian(b)} = ؟`;
        }
    };

    window.togglePasswordVis = function() {
        const input = document.getElementById('pwd-field-showcase');
        if (input) {
            input.type = input.type === 'password' ? 'text' : 'password';
        }
    };

    /* ==========================================================================
       SECTION 3: TAB SWITCHER & GENERAL UI BINDINGS
       ========================================================================== */
    function initStudioTabs() {
        const tabs = document.querySelectorAll('.studio-main-tab');
        const sections = {
            'captcha-lab': document.getElementById('captcha-lab-section'),
            'login-styler': document.getElementById('login-styler-section')
        };

        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                const target = tab.getAttribute('data-target');
                tabs.forEach(t => {
                    t.classList.remove('active', 'bg-indigo-600', 'text-white');
                    t.classList.add('bg-slate-900/80', 'text-slate-400');
                });
                tab.classList.add('active', 'bg-indigo-600', 'text-white');
                tab.classList.remove('bg-slate-900/80', 'text-slate-400');

                Object.keys(sections).forEach(key => {
                    if (sections[key]) {
                        if (key === target) {
                            sections[key].classList.remove('hidden');
                        } else {
                            sections[key].classList.add('hidden');
                        }
                    }
                });

                if (target === 'login-styler') {
                    window.renderStage();
                }
            });
        });

        // Check URL hash for direct tab linking
        if (window.location.hash === '#login-styler') {
            const loginTab = document.querySelector('.studio-main-tab[data-target="login-styler"]');
            if (loginTab) loginTab.click();
        } else if (window.location.hash === '#captcha-lab') {
            const capTab = document.querySelector('.studio-main-tab[data-target="captcha-lab"]');
            if (capTab) capTab.click();
        }
    }

    function initCaptchaNavButtons() {
        const modelBtns = document.querySelectorAll('.captcha-model-btn');
        modelBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                modelBtns.forEach(b => {
                    b.classList.remove('active', 'bg-indigo-600', 'text-white');
                    b.classList.add('bg-slate-900/80', 'text-slate-300');
                });
                btn.classList.add('active', 'bg-indigo-600', 'text-white');
                btn.classList.remove('bg-slate-900/80', 'text-slate-300');
                renderWidget(btn.getAttribute('data-model'));
            });
        });

        const contextTabs = document.querySelectorAll('.demo-mode-tab');
        contextTabs.forEach(tab => {
            tab.addEventListener('click', () => {
                contextTabs.forEach(t => {
                    t.classList.remove('active', 'bg-indigo-600', 'text-white');
                    t.classList.add('text-slate-400');
                });
                tab.classList.add('active', 'bg-indigo-600', 'text-white');
                tab.classList.remove('text-slate-400');
                renderFormFields(tab.getAttribute('data-form-type'));
            });
        });

        const resetBtn = document.getElementById('demoResetBtn');
        if (resetBtn) {
            resetBtn.onclick = () => renderWidget(currentCaptchaModel);
        }

        const submitBtn = document.getElementById('demoSubmitBtn');
        if (submitBtn) {
            submitBtn.onclick = () => {
                if (submitBtn.disabled) return;
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<i class="fas fa-circle-notch fa-spin ml-2"></i><span>در حال ارسال و ثبت امن...</span>';
                setTimeout(() => {
                    playChime(659.25, 987.77);
                    submitBtn.innerHTML = '<i class="fas fa-check ml-2"></i><span>ارسال شد!</span>';
                    const resBox = document.getElementById('demoSubmissionResult');
                    if (resBox) resBox.classList.remove('hidden');
                }, 350);
            };
        }

        // Toggle password button in form
        document.addEventListener('click', (e) => {
            const btn = e.target.closest('#toggleDemoPw');
            if (btn) {
                const pwdInput = document.getElementById('demoPasswordInput');
                const icon = btn.querySelector('i');
                if (pwdInput) {
                    if (pwdInput.type === 'password') {
                        pwdInput.type = 'text';
                        if (icon) icon.className = 'fas fa-eye-slash text-xs';
                    } else {
                        pwdInput.type = 'password';
                        if (icon) icon.className = 'fas fa-eye text-xs';
                    }
                }
            }
        });
    }

    // Live 3 Core Security Pillars Monitor Interactions
    function initSecurityPillarsLiveMonitor() {
        // 1. Honeypot Trap Simulation
        const testHpBtn = document.getElementById('testHoneypotTriggerBtn');
        const hpStatus = document.getElementById('honeypotSimulationStatus');
        if (testHpBtn && hpStatus) {
            testHpBtn.addEventListener('click', () => {
                testHpBtn.disabled = true;
                hpStatus.className = 'p-2.5 rounded-xl bg-rose-500/20 text-rose-300 text-[10px] border border-rose-500/40 font-bold flex items-center gap-2 animate-bounce';
                hpStatus.innerHTML = '<i class="fas fa-ban text-rose-400"></i><span>⚠️ ربات اسپمر شناسایی شد! فیلد تله مقداردهی گردید => فرم با کد ۴۰۳ در نطفه خفه شد.</span>';
                playChime(300, 200);

                setTimeout(() => {
                    hpStatus.className = 'p-2 rounded-xl bg-slate-900/90 text-slate-300 text-[10px] flex items-center gap-2 transition-all';
                    hpStatus.innerHTML = '<i class="fas fa-shield text-amber-400"></i><span>وضعیت: فیلد خالی است (کاربر عادی بدون دخالت)</span>';
                    testHpBtn.disabled = false;
                }, 4000);
            });
        }

        // 2. Live Behavioral Telemetry Tracking
        let moveCount = 124;
        let lastMove = Date.now();
        const moveEl = document.getElementById('telemetryMoveCount');
        const speedEl = document.getElementById('telemetrySpeed');
        const confEl = document.getElementById('telemetryConfidenceScore');
        const confBar = document.getElementById('telemetryConfidenceBar');

        const onUserActivity = () => {
            moveCount++;
            if (moveEl && moveCount % 4 === 0) {
                moveEl.textContent = toPersian(moveCount) + ' رویداد تعامل';
                const now = Date.now();
                const delta = now - lastMove;
                lastMove = now;
                if (speedEl) {
                    speedEl.textContent = delta < 30 ? 'فوق‌سریع (طبیعی)' : 'حرکت نرم و انسانی';
                }
                if (confEl && confBar) {
                    const score = (99.6 + (Math.random() * 0.3)).toFixed(1);
                    confEl.textContent = toPersian(score) + '٪ (انسان قطعی)';
                }
            }
        };
        window.addEventListener('mousemove', onUserActivity, { passive: true });
        window.addEventListener('touchmove', onUserActivity, { passive: true });

        // 3. Anti-Replay HMAC Token Generator
        const genBtn = document.getElementById('generateNewHmacBtn');
        const tokenVal = document.getElementById('liveHmacTokenValue');
        const tokenBadge = document.getElementById('tokenStatusBadge');
        const copyBtn = document.getElementById('copyTokenBtn');

        const generateHmac = () => {
            const chars = '0123456789abcdef';
            let hash = 'hmac_';
            for (let i = 0; i < 32; i++) {
                hash += chars[Math.floor(Math.random() * chars.length)];
            }
            if (tokenVal) tokenVal.textContent = hash;
            if (tokenBadge) {
                tokenBadge.textContent = 'Nonce Valid (منقضی در ۳۰۰ ثانیه)';
                tokenBadge.className = 'text-emerald-400 font-mono font-bold animate-pulse';
                setTimeout(() => {
                    tokenBadge.className = 'text-emerald-400 font-mono font-bold';
                }, 1000);
            }
            playChime(659.25, 880);
        };

        if (genBtn) genBtn.addEventListener('click', generateHmac);
        if (copyBtn && tokenVal) {
            copyBtn.addEventListener('click', () => {
                navigator.clipboard.writeText(tokenVal.textContent).then(() => {
                    copyBtn.innerHTML = '<i class="fas fa-check text-emerald-400"></i>';
                    setTimeout(() => copyBtn.innerHTML = '<i class="fas fa-copy"></i>', 2000);
                });
            });
        }
    }

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
        // 1. Read from Cookie (primary source as requested)
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

        // 3. Fallback to System Preference
        if (window.matchMedia && window.matchMedia('(prefers-color-scheme: light)').matches) {
            return 'light';
        }
        return 'dark';
    }

    function applyStudioTheme(mode, persist = true) {
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
            setCookie('guardify_theme', mode, 365);
            setCookie('user-theme', mode, 365);
            try {
                localStorage.setItem('guardify_theme', mode);
            } catch(e) {}
        }
    }

    function initThemeToggle() {
        if (window.GuardifyTheme) {
            // Managed universally by /js/theme-manager.js
            return;
        }
        const currentTheme = getActiveThemePreference();
        applyStudioTheme(currentTheme, false);

        const toggleBtn = document.getElementById('theme-toggle');
        if (toggleBtn) {
            toggleBtn.addEventListener('click', () => {
                const isCurrentDark = document.documentElement.classList.contains('dark') || (document.body && document.body.classList.contains('dark'));
                const nextTheme = isCurrentDark ? 'light' : 'dark';
                applyStudioTheme(nextTheme, true);
            });
        }

        if (window.matchMedia) {
            window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
                const hasExplicitCookie = getCookie('guardify_theme') || getCookie('user-theme');
                if (!hasExplicitCookie) {
                    applyStudioTheme(e.matches ? 'dark' : 'light', false);
                }
            });
        }
    }

    // DOM Ready initialization
    document.addEventListener('DOMContentLoaded', () => {
        initThemeToggle();
        initStudioTabs();
        initCaptchaNavButtons();
        initSecurityPillarsLiveMonitor();
        renderFormFields('checkout');
        renderWidget('slider');
        window.renderStage();
    });

})();
