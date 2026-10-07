/**
 * Guardify Pro Interactive 3-Tab Live Demo Studio (v4.00 Pro)
 * 100% Authentic Replica matching extracted guardify-captcha-pro plugin
 * Client-side only with 0 persistence and 0 user blocking.
 */

// Web Audio API Synthesizer for high-tech security sound effects
const AudioSynth = {
    ctx: null,
    init: function() {
        if (!this.ctx) {
            const AudioContext = window.AudioContext || window.webkitAudioContext;
            if (AudioContext) {
                this.ctx = new AudioContext();
            }
        }
    },
    playTone: function(freq, type, duration, delay) {
        try {
            this.init();
            if (!this.ctx) return;
            const osc = this.ctx.createOscillator();
            const gain = this.ctx.createGain();
            osc.type = type || 'sine';
            osc.frequency.setValueAtTime(freq, this.ctx.currentTime + (delay || 0));
            gain.gain.setValueAtTime(0.08, this.ctx.currentTime + (delay || 0));
            gain.gain.exponentialRampToValueAtTime(0.001, this.ctx.currentTime + (delay || 0) + duration);
            osc.connect(gain);
            gain.connect(this.ctx.destination);
            osc.start(this.ctx.currentTime + (delay || 0));
            osc.stop(this.ctx.currentTime + (delay || 0) + duration);
        } catch(e) {}
    },
    playSuccess: function() {
        this.playTone(523.25, 'sine', 0.12, 0);     // C5
        this.playTone(659.25, 'sine', 0.14, 0.08);  // E5
        this.playTone(783.99, 'sine', 0.22, 0.16);  // G5
    },
    playScan: function() {
        this.playTone(880, 'triangle', 0.05, 0);
        this.playTone(1174.66, 'triangle', 0.07, 0.05);
    },
    playError: function() {
        this.playTone(220, 'sawtooth', 0.12, 0);
        this.playTone(180, 'sawtooth', 0.15, 0.06);
    },
    playClick: function() {
        this.playTone(440, 'sine', 0.04, 0);
    }
};

// Global Studio State
let currentMasterTab = 'captcha';
let currentAdminTab = 'dashboard';
let currentLoginLayout = 'centered_card';
let currentLoginWallpaper = 'cyberpunk';
let currentLoginCaptchaType = 'slider';
let currentActiveTheme = 'dark-slate';
let mathLabAnswer = 11;
let mathLoginAnswer = 9;
let currentLabTargetIcon = 'shield';
let currentLoginTargetIcon = 'key';
let humanInteractionsCount = 24;

// Icon Dictionary with clear names and icons
const ICON_DICTIONARY = [
    { id: 'shield', name: 'سپر امنیتی', icon: '🛡️', title: 'سپر ضد نفوذ' },
    { id: 'key', name: 'کلید دسترسی', icon: '🔑', title: 'کلید رمزنگاری' },
    { id: 'cloud', name: 'ابر شبکه', icon: '☁️', title: 'رایانش ابری' },
    { id: 'fire', name: 'شعله آتش', icon: '🔥', title: 'فایروال فعال' },
    { id: 'star', name: 'ستاره طلایی', icon: '⭐', title: 'امتیاز امنیت' },
    { id: 'diamond', name: 'الماس بلورین', icon: '💎', title: 'الگوریتم VIP' },
    { id: 'rocket', name: 'موشک سرعت', icon: '🚀', title: 'سرعت لود ۰ms' },
    { id: 'lock', name: 'قفل محافظ', icon: '🔒', title: 'حفاظت ورود' }
];

// Track telemetry silently
document.addEventListener('mousemove', function() {
    humanInteractionsCount++;
    const countEl = document.getElementById('login-telemetry-count');
    if (countEl && countEl.dataset.verified !== 'true') {
        countEl.textContent = `طبیعی (${humanInteractionsCount} رویداد ماوس - ۱۰۰٪ انسان)`;
    }
}, { passive: true });

document.addEventListener('keydown', function() {
    humanInteractionsCount += 2;
}, { passive: true });

// =========================================================================
// MASTER TAB SWITCHER (Captcha Lab vs WP-Login Simulator vs WP-Admin Panel)
// =========================================================================
function switchMasterTab(tabId) {
    if (!tabId) return;
    currentMasterTab = tabId;
    AudioSynth.playClick();

    // 1. Update Master Nav Buttons
    document.querySelectorAll('.demo-master-tab-btn').forEach(btn => {
        if (btn.getAttribute('data-master-tab') === tabId) {
            btn.classList.add('active');
        } else {
            btn.classList.remove('active');
        }
    });

    // 2. Switch Pane Visibility
    document.querySelectorAll('.demo-master-pane').forEach(pane => {
        if (pane.id === 'pane-master-' + tabId) {
            pane.style.display = 'block';
            pane.classList.add('animate-fadeIn');
        } else {
            pane.style.display = 'none';
            pane.classList.remove('animate-fadeIn');
        }
    });

    // 3. Sync URL state without page reload
    if (window.history && window.history.replaceState) {
        const url = new URL(window.location);
        url.searchParams.set('tab', tabId);
        window.history.replaceState({ masterTab: tabId }, '', url.toString());
    }

    // 4. Special Tab handling
    if (tabId === 'admin') {
        const activeSubTab = currentAdminTab || 'dashboard';
        guardifySwitchTab(activeSubTab, false);
    } else if (tabId === 'login') {
        setLoginLayoutMode(currentLoginLayout);
    }

    window.scrollTo({ top: 0, behavior: 'smooth' });
}
window.switchMasterTab = switchMasterTab;

// =========================================================================
// SMART HUMAN INSPECTION FX (سپر ارزیابی هوشمند رفتار انسانی)
// =========================================================================
function triggerSmartHumanInspectionFX(containerEl, onComplete) {
    if (!containerEl) return;
    const $container = (typeof jQuery !== 'undefined' ? jQuery(containerEl) : null);
    
    // Check if already verifying or verified
    if (containerEl.dataset.isVerifying === 'true' || containerEl.dataset.isVerified === 'true') {
        return;
    }
    containerEl.dataset.isVerifying = 'true';

    // Play inspection radar scan audio
    AudioSynth.playScan();

    // Remove any previous inspection box or verified badge
    const oldInspect = containerEl.querySelector('.guardify-inspect-box');
    if (oldInspect) oldInspect.remove();
    const oldBadge = containerEl.querySelector('.guardify-verified-box');
    if (oldBadge) oldBadge.remove();

    // Create high-tech inspection box matching class-captcha-engine.php and captcha-frontend.js
    const inspectBox = document.createElement('div');
    inspectBox.className = 'guardify-inspect-box animate-fadeIn';
    inspectBox.innerHTML = `
        <div class="guardify-inspect-header">
            <div class="guardify-inspect-radar-ring">
                <span class="guardify-radar-beam"></span>
            </div>
            <div class="guardify-inspect-info">
                <div class="guardify-inspect-title">سیستم هوشمند ارزیابی امنیتی گاردفای پرو</div>
                <div class="guardify-inspect-subtitle">بررسی الگوهای رفتاری و پارامترهای ضد ربات...</div>
            </div>
            <div class="guardify-inspect-percent font-mono">۰٪</div>
        </div>
        <div class="guardify-inspect-bar-track">
            <div class="guardify-inspect-bar-fill" style="width: 0%; transition: width 0.25s ease-out;"></div>
        </div>
        <div class="guardify-checklist">
            <div class="guardify-check-item item-1 active">
                <span class="guardify-check-bullet">◌</span>
                <span class="guardify-check-label">ارزیابی یکپارچگی مرورگر و سلامت کلاینت</span>
            </div>
            <div class="guardify-check-item item-2">
                <span class="guardify-check-bullet">◌</span>
                <span class="guardify-check-label">سنجش تله‌متری رفتاری و سرعت تعامل انسانی</span>
            </div>
            <div class="guardify-check-item item-3">
                <span class="guardify-check-bullet">◌</span>
                <span class="guardify-check-label">اعتبارسنجی نرخ توکن و عدم تکرار (Anti-Replay)</span>
            </div>
            <div class="guardify-check-item item-4">
                <span class="guardify-check-bullet">◌</span>
                <span class="guardify-check-label">تطبیق امضای رمزنگاری‌شده و احراز هویت نهایی</span>
            </div>
        </div>
    `;

    containerEl.appendChild(inspectBox);

    const fillEl = inspectBox.querySelector('.guardify-inspect-bar-fill');
    const percentEl = inspectBox.querySelector('.guardify-inspect-percent');
    const item1 = inspectBox.querySelector('.item-1');
    const item2 = inspectBox.querySelector('.item-2');
    const item3 = inspectBox.querySelector('.item-3');
    const item4 = inspectBox.querySelector('.item-4');

    const toPersianDigits = (num) => String(num).replace(/\d/g, d => '۰۱۲۳۴۵۶۷۸۹'[d]) + '٪';

    // Step 1: 0% -> 25% (Browser Integrity)
    setTimeout(() => {
        if (fillEl) fillEl.style.width = '25%';
        if (percentEl) percentEl.textContent = toPersianDigits(25);
        if (item1) {
            item1.classList.remove('active');
            item1.classList.add('done');
            item1.querySelector('.guardify-check-bullet').textContent = '✓';
        }
        if (item2) item2.classList.add('active');
        AudioSynth.playTone(620, 'sine', 0.04);
    }, 350);

    // Step 2: 25% -> 55% (Telemetry & Behavioral)
    setTimeout(() => {
        if (fillEl) fillEl.style.width = '55%';
        if (percentEl) percentEl.textContent = toPersianDigits(55);
        if (item2) {
            item2.classList.remove('active');
            item2.classList.add('done');
            item2.querySelector('.guardify-check-bullet').textContent = '✓';
        }
        if (item3) item3.classList.add('active');
        AudioSynth.playTone(740, 'sine', 0.04);
    }, 750);

    // Step 3: 55% -> 85% (Anti-Replay Token Rate)
    setTimeout(() => {
        if (fillEl) fillEl.style.width = '85%';
        if (percentEl) percentEl.textContent = toPersianDigits(85);
        if (item3) {
            item3.classList.remove('active');
            item3.classList.add('done');
            item3.querySelector('.guardify-check-bullet').textContent = '✓';
        }
        if (item4) item4.classList.add('active');
        AudioSynth.playTone(880, 'sine', 0.05);
    }, 1150);

    // Step 4: 85% -> 100% (Cryptographic Signature Verification)
    setTimeout(() => {
        if (fillEl) fillEl.style.width = '100%';
        if (percentEl) percentEl.textContent = toPersianDigits(100);
        if (item4) {
            item4.classList.remove('active');
            item4.classList.add('done');
            item4.querySelector('.guardify-check-bullet').textContent = '✓';
        }

        AudioSynth.playSuccess();

        // Transition from Inspection Drawer to Success Verified Box
        setTimeout(() => {
            inspectBox.style.transition = 'opacity 0.25s ease-out';
            inspectBox.style.opacity = '0';

            setTimeout(() => {
                inspectBox.remove();
                containerEl.dataset.isVerifying = 'false';
                containerEl.dataset.isVerified = 'true';

                const verifiedBadge = document.createElement('div');
                verifiedBadge.className = 'guardify-verified-box animate-fadeIn';
                verifiedBadge.style.cssText = 'margin-top:12px; padding:12px 16px; border-radius:14px; background:rgba(16,185,129,0.12); border:1px solid rgba(16,185,129,0.35); color:#10b981; display:flex; align-items:center; justify-content:space-between; gap:10px; direction:rtl; text-align:right; box-shadow:0 4px 18px rgba(16,185,129,0.15);';
                verifiedBadge.innerHTML = `
                    <div style="display:flex; align-items:center; gap:10px;">
                        <div style="width:28px; height:28px; border-radius:50%; background:#10b981; color:#0f172a; display:flex; align-items:center; justify-content:center; font-weight:900; font-size:14px; shrink:0;">✓</div>
                        <div>
                            <div style="font-weight:900; font-size:12px; color:#ffffff;">تایید شد؛ هویت کاربر با موفقیت احراز گردید</div>
                            <div style="font-size:10px; color:#a7f3d0; margin-top:2px;">پایش رفتار انسانی ۱۰۰٪ طبیعی • بدون تاخیر سرور</div>
                        </div>
                    </div>
                    <span style="font-size:10px; font-family:monospace; background:rgba(16,185,129,0.2); color:#6ee7b7; padding:3px 8px; border-radius:6px; font-weight:800; border:1px solid rgba(16,185,129,0.3); white-space:nowrap;">Smart FX OK</span>
                `;
                containerEl.appendChild(verifiedBadge);

                // Update Telemetry log
                triggerLiveTelemetry('پایش هوشمند رفتار', 'انسان ۱۰۰٪ تایید شد', '100%');

                // Call Completion Callback (unlock submit buttons etc.)
                if (typeof onComplete === 'function') {
                    onComplete();
                }
            }, 250);
        }, 350);
    }, 1500);
}
window.triggerSmartHumanInspectionFX = triggerSmartHumanInspectionFX;

// =========================================================================
// SECTION 1: CAPTCHA SHOWCASE LAB
// =========================================================================
function initCaptchaShowcase() {
    initPuzzleSlider();
    initMathChallenge();
    initLabIconMatching();
    initHoneypotSimulation();
    initSmartHumanInspectionButton();
}

// 1. Puzzle Slider Logic in Lab
function initPuzzleSlider() {
    const sliderContainer = document.getElementById('demo-slider-widget');
    if (!sliderContainer) return;

    const track = sliderContainer.querySelector('.guardify-slider-track');
    const thumb = sliderContainer.querySelector('.guardify-slider-thumb');
    const fill = sliderContainer.querySelector('.guardify-slider-progress, .guardify-slider-track-fill');
    const hint = sliderContainer.querySelector('.guardify-slider-hint');
    const resetBtn = sliderContainer.querySelector('.guardify-slider-reset');

    if (!track || !thumb) return;

    let isDragging = false;
    let startX = 0;
    let maxDistance = 0;
    let isVerified = false;

    function getTrackMax() {
        return track.offsetWidth - thumb.offsetWidth - 6;
    }

    function onStart(e) {
        if (isVerified) return;
        AudioSynth.init();
        isDragging = true;
        startX = (e.touches ? e.touches[0].clientX : e.clientX);
        maxDistance = getTrackMax();
        thumb.style.transition = 'none';
        if (fill) fill.style.transition = 'none';
        document.addEventListener('mousemove', onMove);
        document.addEventListener('touchmove', onMove, { passive: false });
        document.addEventListener('mouseup', onEnd);
        document.addEventListener('touchend', onEnd);
    }

    function onMove(e) {
        if (!isDragging || isVerified) return;
        if (e.cancelable) e.preventDefault();
        const clientX = (e.touches ? e.touches[0].clientX : e.clientX);
        // RTL slider: sliding from right to left
        let delta = startX - clientX;
        if (delta < 0) delta = 0;
        if (delta > maxDistance) delta = maxDistance;

        thumb.style.transform = `translateX(-${delta}px)`;
        if (fill) fill.style.width = `${delta + thumb.offsetWidth / 2}px`;

        if (delta >= maxDistance * 0.88) {
            completeSlider();
        }
    }

    function onEnd() {
        if (!isDragging) return;
        isDragging = false;
        document.removeEventListener('mousemove', onMove);
        document.removeEventListener('touchmove', onMove);
        document.removeEventListener('mouseup', onEnd);
        document.removeEventListener('touchend', onEnd);

        if (!isVerified) {
            thumb.style.transition = 'transform 0.3s cubic-bezier(0.4, 0, 0.2, 1)';
            if (fill) fill.style.transition = 'width 0.3s cubic-bezier(0.4, 0, 0.2, 1)';
            thumb.style.transform = 'translateX(0px)';
            if (fill) fill.style.width = '0px';
        }
    }

    function completeSlider() {
        if (isVerified) return;
        isVerified = true;
        isDragging = false;
        thumb.style.transform = `translateX(-${maxDistance}px)`;
        thumb.style.background = '#10b981';
        if (fill) fill.style.width = '100%';
        if (hint) hint.innerHTML = '<span style="color:#10b981;font-weight:800;">تایید شد ✓</span>';

        triggerSmartHumanInspectionFX(sliderContainer, function() {
            triggerLiveTelemetry('اسلایدر پازلی', 'انسان تایید شد', '100%');
        });
    }

    thumb.addEventListener('mousedown', onStart);
    thumb.addEventListener('touchstart', onStart, { passive: false });

    if (resetBtn) {
        resetBtn.addEventListener('click', function(e) {
            e.preventDefault();
            isVerified = false;
            sliderContainer.dataset.isVerified = 'false';
            sliderContainer.dataset.isVerifying = 'false';
            thumb.style.transition = 'transform 0.3s cubic-bezier(0.4, 0, 0.2, 1)';
            thumb.style.background = '';
            if (fill) fill.style.transition = 'width 0.3s cubic-bezier(0.4, 0, 0.2, 1)';
            thumb.style.transform = 'translateX(0px)';
            if (fill) fill.style.width = '0px';
            if (hint) hint.innerHTML = 'دستگیره را به چپ بکشید ←';
            const oldInspect = sliderContainer.querySelector('.guardify-inspect-box');
            if (oldInspect) oldInspect.remove();
            const oldBadge = sliderContainer.querySelector('.guardify-verified-box');
            if (oldBadge) oldBadge.remove();
            AudioSynth.playClick();
        });
    }
}

// 2. Math Challenge Logic in Lab
function initMathChallenge() {
    const mathContainer = document.querySelector('[data-captcha-type="math"]');
    const mathInput = document.getElementById('demo-math-input');
    const mathEq = document.getElementById('demo-math-equation');
    const mathStatus = document.getElementById('demo-math-status');
    const verifyBtn = document.querySelector('.guardify-math-verify-btn');

    function generateMath() {
        const num1 = Math.floor(Math.random() * 8) + 2;
        const num2 = Math.floor(Math.random() * 8) + 1;
        mathLabAnswer = num1 + num2;
        if (mathEq) mathEq.textContent = `${num1} + ${num2} = `;
        if (mathInput) {
            mathInput.value = '';
            mathInput.style.borderColor = '';
            mathInput.disabled = false;
        }
        if (mathStatus) {
            mathStatus.textContent = 'لطفاً حاصل‌جمع را وارد کنید';
            mathStatus.className = 'text-xs text-slate-400 font-semibold mt-2 text-right';
        }
        if (mathContainer) {
            mathContainer.dataset.isVerified = 'false';
            mathContainer.dataset.isVerifying = 'false';
            const oldInspect = mathContainer.querySelector('.guardify-inspect-box');
            if (oldInspect) oldInspect.remove();
            const oldBadge = mathContainer.querySelector('.guardify-verified-box');
            if (oldBadge) oldBadge.remove();
        }
    }

    function checkAnswer() {
        if (!mathInput) return;
        const val = parseInt(mathInput.value.trim(), 10);
        if (val === mathLabAnswer) {
            mathInput.style.borderColor = '#10b981';
            if (mathStatus) {
                mathStatus.innerHTML = '<span style="color:#10b981;font-weight:800;">✓ پاسخ کاملاً صحیح است</span>';
            }
            triggerSmartHumanInspectionFX(mathContainer, function() {
                triggerLiveTelemetry('آزمون ریاضی', 'پاسخ صحیح', '100%');
            });
        } else {
            mathInput.style.borderColor = '#ef4444';
            mathInput.classList.add('guardify-shake-error');
            setTimeout(() => mathInput.classList.remove('guardify-shake-error'), 400);
            AudioSynth.playError();
            if (mathStatus) {
                mathStatus.innerHTML = '<span style="color:#ef4444;font-weight:700;">✗ پاسخ نادرست است؛ لطفاً مجدداً محاسبه نمایید</span>';
            }
        }
    }

    if (mathEq) {
        mathEq.addEventListener('click', function(e) {
            e.preventDefault();
            AudioSynth.playClick();
            generateMath();
        });
    }

    if (verifyBtn) {
        verifyBtn.addEventListener('click', checkAnswer);
    }

    if (mathInput) {
        mathInput.addEventListener('input', function() {
            const val = parseInt(this.value.trim(), 10);
            if (val === mathLabAnswer) {
                checkAnswer();
            }
        });
        mathInput.addEventListener('keydown', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                checkAnswer();
            }
        });
    }

    generateMath();
}

// 3. Visual Icon Match Logic in Lab (Guaranteed target presence)
function initLabIconMatching() {
    const iconContainer = document.querySelector('[data-captcha-type="icon_match"]');
    if (!iconContainer) return;

    renderLabIconChallenge();

    const refreshBtn = iconContainer.querySelector('.guardify-refresh-icon-match');
    if (refreshBtn) {
        refreshBtn.addEventListener('click', function(e) {
            e.preventDefault();
            AudioSynth.playClick();
            renderLabIconChallenge();
        });
    }

    const verifyBtn = iconContainer.querySelector('.guardify-icon-verify-btn');
    if (verifyBtn) {
        verifyBtn.addEventListener('click', function() {
            const selectedBtn = iconContainer.querySelector('.guardify-icon-btn.selected');
            const statusEl = document.getElementById('demo-icon-status');
            if (!selectedBtn) {
                AudioSynth.playError();
                if (statusEl) statusEl.innerHTML = '<span style="color:#ef4444;font-weight:700;">لطفاً ابتدا یکی از آیکون‌ها را انتخاب فرمایید</span>';
                return;
            }
            const chosenId = selectedBtn.getAttribute('data-icon-type');
            if (chosenId === currentLabTargetIcon) {
                if (statusEl) statusEl.innerHTML = '<span style="color:#10b981;font-weight:800;">✓ آیکون صحیح انتخاب گردید!</span>';
                triggerSmartHumanInspectionFX(iconContainer, function() {
                    triggerLiveTelemetry('تطبیق آیکون', 'تطبیق موفق', '100%');
                });
            } else {
                AudioSynth.playError();
                selectedBtn.classList.add('ring-2', 'ring-rose-500', 'bg-rose-500/20');
                if (statusEl) statusEl.innerHTML = '<span style="color:#ef4444;font-weight:700;">✗ آیکون اشتباه است؛ لطفاً دوباره دقت فرمایید</span>';
            }
        });
    }
}

function renderLabIconChallenge() {
    const iconContainer = document.querySelector('[data-captcha-type="icon_match"]');
    if (!iconContainer) return;

    // Reset status & cleanup previous verification boxes
    iconContainer.dataset.isVerified = 'false';
    iconContainer.dataset.isVerifying = 'false';
    const oldInspect = iconContainer.querySelector('.guardify-inspect-box');
    if (oldInspect) oldInspect.remove();
    const oldBadge = iconContainer.querySelector('.guardify-verified-box');
    if (oldBadge) oldBadge.remove();

    const targetLabel = document.getElementById('demo-icon-target-label');
    const iconGrid = iconContainer.querySelector('.guardify-icon-grid');
    const iconStatus = document.getElementById('demo-icon-status');

    // Shuffle and pick 4 distinct icons from the dictionary
    const shuffled = [...ICON_DICTIONARY].sort(() => 0.5 - Math.random());
    const choices = shuffled.slice(0, 4);

    // Pick 1 of the 4 choices as target -> 100% GUARANTEED TO BE IN THE GRID!
    const targetItem = choices[Math.floor(Math.random() * choices.length)];
    currentLabTargetIcon = targetItem.id;

    if (targetLabel) {
        targetLabel.innerHTML = `روی آیکون <strong class="guardify-target-name text-indigo-400 font-black">«${targetItem.name}» (${targetItem.icon})</strong> کلیک کنید:`;
    }
    if (iconStatus) {
        iconStatus.textContent = 'یک گزینه را لمس کنید و دکمه بررسی را بزنید';
    }

    if (iconGrid) {
        iconGrid.innerHTML = choices.map(item => `
            <button type="button" class="guardify-icon-btn demo-icon-card cursor-pointer transition-all" data-icon-type="${item.id}" title="${item.title}">
                <span style="font-size: 24px;">${item.icon}</span>
            </button>
        `).join('');

        iconGrid.querySelectorAll('.demo-icon-card').forEach(btn => {
            btn.addEventListener('click', function() {
                iconGrid.querySelectorAll('.demo-icon-card').forEach(b => {
                    b.classList.remove('selected', 'ring-2', 'ring-indigo-500', 'bg-indigo-500/20', 'ring-rose-500', 'bg-rose-500/20');
                });
                this.classList.add('selected', 'ring-2', 'ring-indigo-500', 'bg-indigo-500/20');
                AudioSynth.playClick();

                const chosenId = this.getAttribute('data-icon-type');
                if (chosenId === currentLabTargetIcon) {
                    if (iconStatus) iconStatus.innerHTML = '<span style="color:#10b981;font-weight:800;">✓ آیکون صحیح انتخاب گردید!</span>';
                    triggerSmartHumanInspectionFX(iconContainer, function() {
                        triggerLiveTelemetry('تطبیق آیکون', 'تطبیق موفق', '100%');
                    });
                } else {
                    this.classList.add('ring-rose-500', 'bg-rose-500/20');
                    AudioSynth.playError();
                    if (iconStatus) iconStatus.innerHTML = `<span style="color:#ef4444;font-weight:700;">✗ نادرست است؛ لطفاً روی آیکون «${targetItem.name}» کلیک کنید.</span>`;
                }
            });
        });
    }
}

// 4. Honeypot Trap Simulation in Lab
function initHoneypotSimulation() {
    const honeypotInput = document.getElementById('demo-honeypot-bot-input');
    const honeypotStatus = document.getElementById('demo-honeypot-alert');
    if (!honeypotInput || !honeypotStatus) return;

    honeypotInput.addEventListener('input', function() {
        if (this.value.trim().length > 0) {
            honeypotStatus.style.display = 'block';
            honeypotStatus.innerHTML = `
                <div style="background:#fee2e2; border:1px solid #f87171; color:#991b1b; padding:12px; border-radius:12px; font-size:12px; font-weight:800; display:flex; align-items:center; gap:8px;">
                    <span>🚨</span>
                    <span>تله هانی‌پات فعال شد! ربات خودکار فیلد مخفی را پر کرد؛ درخواست مسدود گردید.</span>
                </div>
            `;
            AudioSynth.playError();
            triggerLiveTelemetry('هانی‌پات', 'ربات شناسایی شد', 'مسدود');
        } else {
            honeypotStatus.style.display = 'none';
        }
    });
}

// 5. Smart Human Inspection Button in Header Banner
function initSmartHumanInspectionButton() {
    const runBtn = document.getElementById('demo-run-inspection-btn');
    if (!runBtn) return;

    runBtn.addEventListener('click', function() {
        runInspectionAnimation();
    });
}

function runInspectionAnimation() {
    AudioSynth.playScan();
    const radarBeam = document.querySelector('.guardify-top-radar-beam');
    const steps = [
        document.getElementById('inspect-step-mouse'),
        document.getElementById('inspect-step-keys'),
        document.getElementById('inspect-step-ua'),
        document.getElementById('inspect-step-crypto')
    ];

    if (radarBeam) {
        radarBeam.style.animation = 'none';
        void radarBeam.offsetWidth;
        radarBeam.style.animation = 'guardifyRadarScan 1s ease-in-out infinite';
    }

    steps.forEach(s => {
        if (s) {
            s.querySelector('.inspect-status').innerHTML = '<span class="text-amber-400">در حال پایش...</span>';
            s.classList.remove('border-emerald-500/40', 'bg-emerald-500/10');
        }
    });

    setTimeout(() => {
        if (steps[0]) {
            steps[0].querySelector('.inspect-status').innerHTML = '<span class="text-emerald-400 font-bold">✓ طبیعی (Curve OK)</span>';
            steps[0].classList.add('border-emerald-500/40', 'bg-emerald-500/10');
            AudioSynth.playTone(600, 'sine', 0.05);
        }
    }, 350);

    setTimeout(() => {
        if (steps[1]) {
            steps[1].querySelector('.inspect-status').innerHTML = '<span class="text-emerald-400 font-bold">✓ مکث‌های انسانی</span>';
            steps[1].classList.add('border-emerald-500/40', 'bg-emerald-500/10');
            AudioSynth.playTone(700, 'sine', 0.05);
        }
    }, 700);

    setTimeout(() => {
        if (steps[2]) {
            steps[2].querySelector('.inspect-status').innerHTML = '<span class="text-emerald-400 font-bold">✓ امضای واقعی مرورگر</span>';
            steps[2].classList.add('border-emerald-500/40', 'bg-emerald-500/10');
            AudioSynth.playTone(800, 'sine', 0.05);
        }
    }, 1050);

    setTimeout(() => {
        if (steps[3]) {
            const hmac = 'gpro_' + Math.random().toString(36).substring(2, 10);
            steps[3].querySelector('.inspect-status').innerHTML = `<span class="text-emerald-400 font-bold font-mono">✓ HMAC: ${hmac}</span>`;
            steps[3].classList.add('border-emerald-500/40', 'bg-emerald-500/10');
            AudioSynth.playSuccess();
            triggerLiveTelemetry('پایش بیومتریک', 'تایید نهایی رفتار انسانی', '100%');
        }
    }, 1400);
}

function triggerLiveTelemetry(type, outcome, confidence) {
    const feed = document.getElementById('demo-telemetry-feed');
    if (!feed) return;
    const item = document.createElement('div');
    item.className = 'flex items-center justify-between text-xs py-1.5 border-b border-slate-700/50 animate-fadeIn';
    item.innerHTML = `
        <span class="text-slate-300 font-semibold">${type}</span>
        <span class="text-emerald-400 font-bold">${outcome}</span>
        <span class="text-[10px] text-slate-500 font-mono">${confidence} · ${new Date().toLocaleTimeString('fa-IR')}</span>
    `;
    feed.insertBefore(item, feed.firstChild);
    while (feed.children.length > 5) {
        feed.removeChild(feed.lastChild);
    }
}

// Dynamic Theme Swatcher for Captcha Widgets
function applyCaptchaThemeToWidgets(themeClass) {
    AudioSynth.playClick();
    currentActiveTheme = themeClass;
    const widgets = document.querySelectorAll('.guardify-captcha-container');
    widgets.forEach(w => {
        const classes = Array.from(w.classList);
        classes.forEach(c => {
            if (c.startsWith('guardify-theme-')) {
                w.classList.remove(c);
            }
        });
        w.classList.add('guardify-theme-' + themeClass);
    });

    document.querySelectorAll('.captcha-theme-pill').forEach(pill => {
        if (pill.getAttribute('data-theme-key') === themeClass) {
            pill.classList.add('ring-2', 'ring-indigo-500', 'bg-indigo-600', 'text-white');
            pill.classList.remove('bg-slate-800', 'text-slate-300');
        } else {
            pill.classList.remove('ring-2', 'ring-indigo-500', 'bg-indigo-600', 'text-white');
            pill.classList.add('bg-slate-800', 'text-slate-300');
        }
    });

    showAdminToast(`تم کپچا با موفقیت روی «${themeClass}» تنظیم شد.`);
}
window.applyCaptchaThemeToWidgets = applyCaptchaThemeToWidgets;

// =========================================================================
// SECTION 2: WORDPRESS LOGIN SIMULATOR (6 REAL ARCHITECTURE LAYOUTS)
// =========================================================================
function setLoginLayoutMode(mode) {
    AudioSynth.playClick();
    currentLoginLayout = mode;
    const loginStage = document.getElementById('demo-login-stage');
    if (!loginStage) return;

    // 1. Update toolbar button active states
    document.querySelectorAll('.login-layout-btn').forEach(btn => {
        if (btn.getAttribute('data-layout') === mode) {
            btn.classList.add('active', 'border-indigo-500', 'bg-indigo-50/10', 'text-white');
            btn.classList.remove('border-slate-700', 'bg-slate-800', 'text-slate-300');
        } else {
            btn.classList.remove('active', 'border-indigo-500', 'bg-indigo-50/10', 'text-white');
            btn.classList.add('border-slate-700', 'bg-slate-800', 'text-slate-300');
        }
    });

    // 2. Clear old layout classes
    const layoutClasses = [
        'guardify-layout-centered_card',
        'guardify-layout-split_screen',
        'guardify-layout-sidebar_right',
        'guardify-layout-sidebar_left',
        'guardify-layout-floating_split',
        'guardify-layout-minimal_compact'
    ];
    layoutClasses.forEach(c => loginStage.classList.remove(c));
    loginStage.classList.add('guardify-layout-' + mode);

    // 3. Render HTML matching class-login-customizer.php
    renderLoginStageDom(mode);
}
window.setLoginLayoutMode = setLoginLayoutMode;

function getLoginFormCardHtml() {
    return `
        <div id="login" class="guardify-layout-wrapped w-full max-w-[420px] mx-auto p-6 sm:p-8 rounded-3xl bg-slate-900/85 border border-white/20 backdrop-blur-2xl shadow-2xl transition-all">
            <!-- Header with Shield Logo -->
            <div class="guardify-card-header text-center mb-5 flex flex-col items-center">
                <div class="guardify-shield-icon w-12 h-12 rounded-2xl bg-indigo-500/20 border border-indigo-500/40 text-indigo-400 flex items-center justify-center mb-2.5 shadow-lg shadow-indigo-500/20">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                    </svg>
                </div>
                <h2 class="guardify-card-title text-xl font-black text-white m-0">ورود به حساب کاربری</h2>
                <p class="guardify-card-subtitle text-xs text-slate-400 mt-1">پرتال امن دسترسی اعضای مدیریت وردپرس</p>
            </div>

            <!-- Login Form -->
            <form name="loginform" id="loginform" onsubmit="handleDemoLoginSubmit(event);">
                <!-- User input -->
                <p class="mb-3.5">
                    <label for="login_user" class="block text-xs font-bold text-slate-200 mb-1.5">نام کاربری یا نشانی ایمیل</label>
                    <input type="text" name="log" id="login_user" class="w-full bg-slate-950/80 border border-slate-700 focus:border-indigo-500 rounded-xl px-3.5 py-2.5 text-sm text-white focus:outline-none transition-colors" value="admin" placeholder="name@example.com" required />
                </p>

                <!-- Pass input -->
                <div class="user-pass-wrap mb-3.5 relative">
                    <label for="login_pass" class="block text-xs font-bold text-slate-200 mb-1.5">رمز عبور</label>
                    <div class="relative">
                        <input type="password" name="pwd" id="login_pass" class="w-full bg-slate-950/80 border border-slate-700 focus:border-indigo-500 rounded-xl px-3.5 py-2.5 text-sm text-white focus:outline-none transition-colors" value="••••••••••••" placeholder="رمز عبور شما" required />
                        <button type="button" class="absolute left-3 top-3 text-slate-400 hover:text-white" onclick="togglePasswordVisibility('login_pass', this)">
                            <i class="fas fa-eye text-xs"></i>
                        </button>
                    </div>
                </div>

                <!-- Captcha Modality Switcher in Login Form -->
                <div class="pt-2 pb-1 border-t border-slate-800/80 flex items-center justify-between text-xs">
                    <span class="text-[11px] font-bold text-slate-300">نوع چالش کپچا:</span>
                    <div class="inline-flex p-0.5 rounded-lg bg-slate-950 border border-slate-800">
                        <button type="button" class="login-captcha-type-btn px-2.5 py-1 rounded text-[10px] font-bold transition-all ${currentLoginCaptchaType === 'slider' ? 'bg-indigo-600 text-white' : 'text-slate-400 hover:text-white'}" onclick="switchLoginCaptchaType('slider')">اسلایدر</button>
                        <button type="button" class="login-captcha-type-btn px-2.5 py-1 rounded text-[10px] font-bold transition-all ${currentLoginCaptchaType === 'math' ? 'bg-indigo-600 text-white' : 'text-slate-400 hover:text-white'}" onclick="switchLoginCaptchaType('math')">ریاضی</button>
                        <button type="button" class="login-captcha-type-btn px-2.5 py-1 rounded text-[10px] font-bold transition-all ${currentLoginCaptchaType === 'icon' ? 'bg-indigo-600 text-white' : 'text-slate-400 hover:text-white'}" onclick="switchLoginCaptchaType('icon')">آیکون</button>
                    </div>
                </div>

                <!-- Active Interactive Captcha Widget Container -->
                <div id="login-captcha-widget-host" class="my-3">
                    ${getLoginActiveCaptchaWidgetHtml()}
                </div>

                <!-- Live Biometric Telemetry Indicator -->
                <div class="p-2 rounded-xl bg-slate-950/70 border border-indigo-500/20 mb-3.5 flex items-center justify-between text-[11px]">
                    <div class="flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
                        <span class="text-slate-300 font-bold">پایش رفتار انسانی:</span>
                        <span class="text-emerald-400 font-bold" id="login-telemetry-count">طبیعی (${humanInteractionsCount} رویداد - ۱۰۰٪ انسان)</span>
                    </div>
                    <span class="text-[9px] font-mono bg-cyan-500/10 text-cyan-400 px-1.5 py-0.5 rounded border border-cyan-500/20 font-bold">Smart FX</span>
                </div>

                <!-- Remember Me -->
                <p class="forgetmenot flex items-center gap-2 mb-4 text-xs text-slate-300">
                    <input name="rememberme" type="checkbox" id="login_rememberme" value="forever" checked class="accent-indigo-500 w-4 h-4 rounded cursor-pointer" />
                    <label for="login_rememberme" class="cursor-pointer">مرا به خاطر بسپار</label>
                </p>

                <!-- Submit Button -->
                <p class="submit">
                    <button type="submit" name="wp-submit" id="login-submit-btn" class="w-full bg-gradient-to-r from-emerald-600 to-teal-600 hover:from-emerald-500 hover:to-teal-500 text-white py-3 rounded-xl font-black text-sm shadow-lg shadow-emerald-600/30 flex items-center justify-center gap-2 transition-all cursor-pointer">
                        <i class="fas fa-lock"></i>
                        <span>ورود به سامانه</span>
                    </button>
                </p>

                <!-- Legal / Footer -->
                <div class="guardify-login-footer-wrap mt-4 text-center">
                    <div class="guardify-security-badge-pill inline-flex items-center gap-1.5 text-[11px] text-slate-400">
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                        </svg>
                        <span>محافظت شده با فناوری هوشمند Guardify Security</span>
                    </div>
                    <div class="guardify-login-legal-bar mt-2 text-[11px] text-slate-400">
                        <a href="#" class="text-indigo-400 hover:underline">قوانین و مقررات</a> • <a href="#" class="text-indigo-400 hover:underline">حریم خصوصی</a> • <a href="#" class="text-indigo-400 hover:underline">پشتیبانی</a>
                    </div>
                </div>
            </form>

            <p id="nav" class="text-center text-xs mt-4 text-slate-400">
                <a href="#" class="hover:text-indigo-400 transition-colors">رمز عبور خود را فراموش کرده‌اید؟</a>
            </p>
            <p id="backtoblog" class="text-center text-xs mt-2 text-slate-500">
                <a href="/demo.php" class="hover:text-slate-300 transition-colors">&larr; بازگشت به استودیو</a>
            </p>
        </div>
    `;
}

function getLoginActiveCaptchaWidgetHtml() {
    if (currentLoginCaptchaType === 'math') {
        const num1 = Math.floor(Math.random() * 8) + 2;
        const num2 = Math.floor(Math.random() * 8) + 1;
        mathLoginAnswer = num1 + num2;
        return `
            <div id="login-math-widget" class="guardify-captcha-container guardify-theme-${currentActiveTheme} guardify-font-inherit" data-captcha-type="math" style="margin:0 !important; max-width:100% !important;">
                <div class="guardify-top-radar-track"><div class="guardify-top-radar-beam" style="animation: guardifyRadarScan 2s ease-in-out infinite;"></div></div>
                <div class="guardify-math-card">
                    <div class="guardify-math-actions">
                        <button type="button" class="guardify-verify-btn login-math-check-btn" onclick="checkLoginMathAnswer()">بررسی</button>
                        <input type="text" id="login-math-input" class="guardify-input" required autocomplete="off" placeholder="؟" inputmode="numeric" oninput="onLoginMathInput(this)" />
                    </div>
                    <button type="button" class="guardify-math-eq guardify-clickable-eq" onclick="refreshLoginMath(this)">${num1} + ${num2} = </button>
                </div>
                <div id="login-math-status" class="text-xs text-slate-400 font-semibold mt-2 text-right">حاصل‌جمع را بنویسید</div>
            </div>
        `;
    } else if (currentLoginCaptchaType === 'icon') {
        const shuffled = [...ICON_DICTIONARY].sort(() => 0.5 - Math.random());
        const choices = shuffled.slice(0, 4);
        const target = choices[Math.floor(Math.random() * choices.length)];
        currentLoginTargetIcon = target.id;
        return `
            <div id="login-icon-widget" class="guardify-captcha-container guardify-theme-${currentActiveTheme} guardify-font-inherit guardify-icon-wrap" data-captcha-type="icon_match" style="margin:0 !important; max-width:100% !important;">
                <div class="guardify-top-radar-track"><div class="guardify-top-radar-beam" style="animation: guardifyRadarScan 2s ease-in-out infinite;"></div></div>
                <div class="guardify-icon-header">
                    <span id="login-icon-target-label" class="guardify-icon-title">روی <strong class="guardify-target-name text-indigo-400 font-black">«${target.name}» (${target.icon})</strong> کلیک کنید:</span>
                    <button type="button" class="guardify-refresh-btn" onclick="refreshLoginIconChallenge()">
                        <span>تغییر سوال</span>
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21.5 2v6h-6M21.34 15.57a10 10 0 1 1-.57-8.38l5.67-5.67"/>
                        </svg>
                    </button>
                </div>
                <div class="guardify-icon-grid my-2">
                    ${choices.map(c => `
                        <button type="button" class="guardify-icon-btn login-icon-btn" data-icon-type="${c.id}" onclick="selectLoginIcon(this, '${c.id}')" title="${c.title}">
                            <span style="font-size: 22px;">${c.icon}</span>
                        </button>
                    `).join('')}
                </div>
                <div id="login-icon-status" class="text-xs text-slate-400 font-semibold mt-1 text-right">یک گزینه را لمس کنید</div>
            </div>
        `;
    } else {
        // Default Slider
        return `
            <div id="login-slider-widget" class="guardify-captcha-container guardify-theme-${currentActiveTheme} guardify-font-inherit guardify-slider-wrap" data-captcha-type="slider" style="margin:0 !important; max-width:100% !important;">
                <div class="guardify-top-radar-track"><div class="guardify-top-radar-beam" style="animation: guardifyRadarScan 2s ease-in-out infinite;"></div></div>
                <div class="guardify-slider-header">
                    <span class="guardify-slider-title">
                        <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="display:inline-block;vertical-align:middle;margin-left:4px;color:#6366f1;">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                        </svg> 
                        سپر امنیتی ورود:
                    </span>
                    <button type="button" class="guardify-refresh-btn" onclick="resetLoginSlider()">
                        <span>تغییر سوال</span>
                        <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21.5 2v6h-6M21.34 15.57a10 10 0 1 1-.57-8.38l5.67-5.67"/>
                        </svg>
                    </button>
                </div>
                <div class="guardify-slider-track" id="embedded-login-slider-track" role="slider" aria-label="Drag to verify">
                    <div class="guardify-slider-progress" id="embedded-login-slider-progress" style="width:0%;"></div>
                    <span class="guardify-slider-hint" id="embedded-login-slider-hint">دستگیره را به چپ بکشید ←</span>
                    <div class="guardify-slider-thumb" id="embedded-login-slider-thumb" tabindex="0">←</div>
                </div>
            </div>
        `;
    }
}

function renderLoginStageDom(mode) {
    const loginStage = document.getElementById('demo-login-stage');
    if (!loginStage) return;

    const formCardHtml = getLoginFormCardHtml();

    if (mode === 'split_screen') {
        loginStage.innerHTML = `
            <div class="guardify-split-container w-full min-h-[680px] flex flex-col md:flex-row items-stretch rounded-3xl overflow-hidden animate-fadeIn">
                <!-- Left/Main Corporate Hero Banner -->
                <div class="guardify-split-banner flex-1 p-8 sm:p-12 flex flex-col justify-between border-b md:border-b-0 md:border-l border-white/10" style="background: linear-gradient(135deg, rgba(15, 23, 42, 0.96) 0%, rgba(30, 27, 75, 0.94) 60%, rgba(49, 46, 129, 0.90) 100%);">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-indigo-500/20 border border-indigo-500/40 flex items-center justify-center text-indigo-400 shadow-md">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                        </div>
                        <span class="font-black text-lg text-white">سامانه ورود هوشمند گاردفای پرو</span>
                    </div>

                    <div class="my-auto max-w-md py-6">
                        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-indigo-500/10 border border-indigo-500/25 text-indigo-400 text-xs font-bold mb-4 shadow-sm">
                            🔒 سپر ۲ لایه ضد بروت‌فورس فعال است
                        </div>
                        <h2 class="text-2xl sm:text-3xl font-black text-white leading-tight mb-3">
                            حفاظت پیشرفته و مدیریت یکپارچه پرتال وردپرس
                        </h2>
                        <p class="text-sm text-slate-300 leading-relaxed">
                            به پرتال امن دسترسی کاربران خوش‌آمدید. تمامی درخواست‌ها رمزنگاری‌شده و تحت نظارت سیستم ارزیابی رفتار انسانی گاردفای پرو پردازش می‌گردد.
                        </p>
                    </div>

                    <div class="flex flex-wrap items-center gap-6 text-xs text-slate-400 border-t border-white/10 pt-4">
                        <span class="flex items-center gap-1.5"><i class="fas fa-shield-halved text-emerald-400"></i> اعتبارسنجی آفلاین</span>
                        <span class="flex items-center gap-1.5"><i class="fas fa-satellite-dish text-cyan-400"></i> پایش بیومتریک ماوس</span>
                    </div>
                </div>

                <!-- Right Form Wrapper -->
                <div class="guardify-split-form-wrap flex-1 max-w-xl flex items-center justify-center p-6 sm:p-10 bg-slate-900/60 backdrop-blur-2xl">
                    ${formCardHtml}
                </div>
            </div>
        `;
    } else if (mode === 'sidebar_right') {
        loginStage.innerHTML = `
            <div class="guardify-sidebar-stage w-full min-h-[680px] flex flex-col lg:flex-row items-stretch rounded-3xl overflow-hidden animate-fadeIn">
                <!-- Right Side: Form Column (in RTL, first) -->
                <div class="guardify-sidebar-form-col w-full lg:w-[460px] p-6 sm:p-10 bg-slate-900/85 border-b lg:border-b-0 lg:border-l border-white/10 flex items-center justify-center">
                    ${formCardHtml}
                </div>
                <!-- Left Side: Hero Column -->
                <div class="guardify-sidebar-hero-col flex-1 p-8 sm:p-12 flex flex-col justify-center items-center text-center bg-gradient-to-br from-slate-950/80 to-indigo-950/40">
                    <div class="w-16 h-16 rounded-2xl bg-indigo-500/10 border border-indigo-500/30 flex items-center justify-center text-indigo-400 mb-6 shadow-xl">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    </div>
                    <h2 class="text-2xl sm:text-3xl font-black text-white mb-3">پرتال ورود با چیدمان سایدبار راست</h2>
                    <p class="text-sm text-slate-300 max-w-md leading-relaxed mb-6">
                        طراحی مدرن و سازگار با پرتال‌های کاربری وردپرس که امکان مشاهده اطلاعیه‌ها را در کنار فرم ورود فراهم می‌سازد.
                    </p>
                    <div class="inline-flex gap-2 text-xs font-bold text-amber-400 bg-amber-500/10 border border-amber-500/20 px-4 py-2 rounded-full">
                        ✨ سایدبار اختصاصی فرم متصل به سمت راست فعال است
                    </div>
                </div>
            </div>
        `;
    } else if (mode === 'sidebar_left') {
        loginStage.innerHTML = `
            <div class="guardify-sidebar-stage w-full min-h-[680px] flex flex-col lg:flex-row-reverse items-stretch rounded-3xl overflow-hidden animate-fadeIn">
                <!-- Left Side: Form Column -->
                <div class="guardify-sidebar-form-col w-full lg:w-[460px] p-6 sm:p-10 bg-slate-900/85 border-b lg:border-b-0 lg:border-r border-white/10 flex items-center justify-center">
                    ${formCardHtml}
                </div>
                <!-- Right Side: Hero Column -->
                <div class="guardify-sidebar-hero-col flex-1 p-8 sm:p-12 flex flex-col justify-center items-center text-center bg-gradient-to-bl from-slate-950/80 to-indigo-950/40">
                    <div class="w-16 h-16 rounded-2xl bg-indigo-500/10 border border-indigo-500/30 flex items-center justify-center text-indigo-400 mb-6 shadow-xl">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    </div>
                    <h2 class="text-2xl sm:text-3xl font-black text-white mb-3">پرتال ورود با چیدمان سایدبار چپ</h2>
                    <p class="text-sm text-slate-300 max-w-md leading-relaxed mb-6">
                        سایدبار چپ کلاسیک به سبک سیستم‌های سازمانی، همراه با پنل اعلان‌ها و سپر ضد حمله.
                    </p>
                    <div class="inline-flex gap-2 text-xs font-bold text-indigo-400 bg-indigo-500/10 border border-indigo-500/20 px-4 py-2 rounded-full">
                        ✨ سایدبار اختصاصی متصل به سمت چپ فعال است
                    </div>
                </div>
            </div>
        `;
    } else if (mode === 'floating_split') {
        loginStage.innerHTML = `
            <div class="guardify-floating-wrapper w-full min-h-[680px] p-6 sm:p-10 flex flex-col lg:flex-row items-center justify-center gap-8 animate-fadeIn">
                <!-- Info Card -->
                <div class="guardify-floating-info-card w-full max-w-[360px] p-7 rounded-3xl bg-slate-900/80 border border-white/15 backdrop-blur-xl shadow-2xl text-right">
                    <div class="w-12 h-12 rounded-2xl bg-indigo-500/20 border border-indigo-500/40 text-indigo-400 flex items-center justify-center mb-4 shadow-md">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    </div>
                    <h3 class="text-xl font-black text-white mb-2">سامانه ورود دو تکه شناور</h3>
                    <p class="text-xs text-slate-300 leading-relaxed mb-4">
                        مدل مدرن کارت‌های معلق با سایه سه‌بعدی و بلور شیشه‌ای که زیبایی بصری ورود سایت را چند برابر می‌کند.
                    </p>
                    <div class="pt-4 border-t border-white/10 space-y-2 text-xs text-slate-400 font-bold">
                        <div class="flex items-center gap-2"><i class="fas fa-check text-emerald-400"></i> اعتبارسنجی ۱۰۰٪ محلی</div>
                        <div class="flex items-center gap-2"><i class="fas fa-check text-emerald-400"></i> مجهز به تله مخفی هانی‌پات</div>
                    </div>
                </div>
                <!-- Main Login Card -->
                ${formCardHtml}
            </div>
        `;
    } else if (mode === 'minimal_compact') {
        loginStage.innerHTML = `
            <div class="w-full min-h-[680px] p-6 sm:p-10 flex items-center justify-center animate-fadeIn">
                <div class="w-full max-w-[380px]">
                    ${formCardHtml}
                </div>
            </div>
        `;
    } else {
        // Default Centered Card
        loginStage.innerHTML = `
            <div class="w-full min-h-[680px] p-6 sm:p-10 flex items-center justify-center animate-fadeIn">
                ${formCardHtml}
            </div>
        `;
    }

    // Attach interactive handlers to the newly rendered login captcha
    attachLoginCaptchaHandlers();

    // Immediately apply current login colors & theme to newly rendered DOM
    applyLoginStylesToStage();
}

function attachLoginCaptchaHandlers() {
    if (currentLoginCaptchaType === 'slider') {
        const track = document.getElementById('embedded-login-slider-track');
        const thumb = document.getElementById('embedded-login-slider-thumb');
        const progress = document.getElementById('embedded-login-slider-progress');
        const hint = document.getElementById('embedded-login-slider-hint');
        const container = document.getElementById('login-slider-widget');
        if (!track || !thumb || !container) return;

        let isDragging = false;
        let startX = 0;
        let verified = false;

        function onStart(e) {
            if (verified) return;
            AudioSynth.init();
            isDragging = true;
            startX = (e.touches ? e.touches[0].clientX : e.clientX);
            thumb.style.transition = 'none';
            if (progress) progress.style.transition = 'none';
            document.addEventListener('mousemove', onMove);
            document.addEventListener('touchmove', onMove, { passive: false });
            document.addEventListener('mouseup', onEnd);
            document.addEventListener('touchend', onEnd);
        }

        function onMove(e) {
            if (!isDragging || verified) return;
            if (e.cancelable) e.preventDefault();
            const clientX = (e.touches ? e.touches[0].clientX : e.clientX);
            const max = track.offsetWidth - thumb.offsetWidth - 6;
            let delta = startX - clientX;
            if (delta < 0) delta = 0;
            if (delta > max) delta = max;

            thumb.style.transform = `translateX(-${delta}px)`;
            if (progress) progress.style.width = (delta + thumb.offsetWidth / 2) + 'px';

            if (delta >= max * 0.88) {
                verified = true;
                isDragging = false;
                thumb.style.transform = `translateX(-${max}px)`;
                thumb.style.background = '#10b981';
                if (progress) progress.style.width = '100%';
                if (hint) hint.innerHTML = '<span style="color:#10b981;font-weight:800;">تایید شد ✓</span>';

                triggerSmartHumanInspectionFX(container, function() {
                    const submitBtn = document.getElementById('login-submit-btn');
                    if (submitBtn) {
                        submitBtn.classList.add('ring-4', 'ring-emerald-500/50');
                    }
                });
            }
        }

        function onEnd() {
            if (!isDragging) return;
            isDragging = false;
            document.removeEventListener('mousemove', onMove);
            document.removeEventListener('touchmove', onMove);
            document.removeEventListener('mouseup', onEnd);
            document.removeEventListener('touchend', onEnd);

            if (!verified) {
                thumb.style.transition = 'transform 0.25s ease-out';
                if (progress) progress.style.transition = 'width 0.25s ease-out';
                thumb.style.transform = 'translateX(0px)';
                if (progress) progress.style.width = '0px';
            }
        }

        thumb.addEventListener('mousedown', onStart);
        thumb.addEventListener('touchstart', onStart, { passive: false });
    }
}

function switchLoginCaptchaType(type) {
    AudioSynth.playClick();
    currentLoginCaptchaType = type;
    const host = document.getElementById('login-captcha-widget-host');
    if (host) {
        host.innerHTML = getLoginActiveCaptchaWidgetHtml();
        attachLoginCaptchaHandlers();
        applyLoginStylesToStage();
    }
    // Update button states
    document.querySelectorAll('.login-captcha-type-btn').forEach(btn => {
        if (btn.textContent.includes(type === 'slider' ? 'اسلایدر' : type === 'math' ? 'ریاضی' : 'آیکون')) {
            btn.className = 'login-captcha-type-btn px-2.5 py-1 rounded text-[10px] font-bold transition-all bg-indigo-600 text-white';
        } else {
            btn.className = 'login-captcha-type-btn px-2.5 py-1 rounded text-[10px] font-bold transition-all text-slate-400 hover:text-white';
        }
    });
}
window.switchLoginCaptchaType = switchLoginCaptchaType;

function resetLoginSlider() {
    AudioSynth.playClick();
    const host = document.getElementById('login-captcha-widget-host');
    if (host) {
        host.innerHTML = getLoginActiveCaptchaWidgetHtml();
        attachLoginCaptchaHandlers();
        applyLoginStylesToStage();
    }
}
window.resetLoginSlider = resetLoginSlider;

function onLoginMathInput(input) {
    const val = parseInt(input.value.trim(), 10);
    if (val === mathLoginAnswer) {
        checkLoginMathAnswer();
    }
}
window.onLoginMathInput = onLoginMathInput;

function checkLoginMathAnswer() {
    const input = document.getElementById('login-math-input');
    const status = document.getElementById('login-math-status');
    const container = document.getElementById('login-math-widget');
    if (!input || !container) return;

    const val = parseInt(input.value.trim(), 10);
    if (val === mathLoginAnswer) {
        input.style.borderColor = '#10b981';
        if (status) status.innerHTML = '<span style="color:#10b981;font-weight:800;">✓ پاسخ کاملاً صحیح است</span>';
        triggerSmartHumanInspectionFX(container, function() {
            const submitBtn = document.getElementById('login-submit-btn');
            if (submitBtn) submitBtn.classList.add('ring-4', 'ring-emerald-500/50');
        });
    } else {
        AudioSynth.playError();
        input.style.borderColor = '#ef4444';
        input.classList.add('guardify-shake-error');
        setTimeout(() => input.classList.remove('guardify-shake-error'), 400);
        if (status) status.innerHTML = '<span style="color:#ef4444;font-weight:700;">✗ پاسخ نادرست است؛ مجدداً حساب کنید</span>';
    }
}
window.checkLoginMathAnswer = checkLoginMathAnswer;

function refreshLoginMath(btn) {
    AudioSynth.playClick();
    const num1 = Math.floor(Math.random() * 8) + 2;
    const num2 = Math.floor(Math.random() * 8) + 1;
    mathLoginAnswer = num1 + num2;
    if (btn) btn.textContent = `${num1} + ${num2} = `;
    const input = document.getElementById('login-math-input');
    if (input) {
        input.value = '';
        input.style.borderColor = '';
    }
    const status = document.getElementById('login-math-status');
    if (status) status.textContent = 'حاصل‌جمع را بنویسید';
    const container = document.getElementById('login-math-widget');
    if (container) {
        container.dataset.isVerified = 'false';
        container.dataset.isVerifying = 'false';
        const oldInspect = container.querySelector('.guardify-inspect-box');
        if (oldInspect) oldInspect.remove();
        const oldBadge = container.querySelector('.guardify-verified-box');
        if (oldBadge) oldBadge.remove();
    }
}
window.refreshLoginMath = refreshLoginMath;

function selectLoginIcon(btn, iconId) {
    const container = document.getElementById('login-icon-widget');
    const status = document.getElementById('login-icon-status');
    if (!container || !btn) return;

    container.querySelectorAll('.login-icon-btn').forEach(b => {
        b.classList.remove('selected', 'ring-2', 'ring-indigo-500', 'bg-indigo-500/20', 'ring-rose-500', 'bg-rose-500/20');
    });

    btn.classList.add('selected', 'ring-2', 'ring-indigo-500', 'bg-indigo-500/20');
    AudioSynth.playClick();

    if (iconId === currentLoginTargetIcon) {
        if (status) status.innerHTML = '<span style="color:#10b981;font-weight:800;">✓ آیکون صحیح انتخاب گردید!</span>';
        triggerSmartHumanInspectionFX(container, function() {
            const submitBtn = document.getElementById('login-submit-btn');
            if (submitBtn) submitBtn.classList.add('ring-4', 'ring-emerald-500/50');
        });
    } else {
        AudioSynth.playError();
        btn.classList.add('ring-rose-500', 'bg-rose-500/20');
        if (status) status.innerHTML = '<span style="color:#ef4444;font-weight:700;">✗ آیکون اشتباه است؛ لطفاً دوباره دقت فرمایید</span>';
    }
}
window.selectLoginIcon = selectLoginIcon;

function refreshLoginIconChallenge() {
    AudioSynth.playClick();
    const host = document.getElementById('login-captcha-widget-host');
    if (host) {
        host.innerHTML = getLoginActiveCaptchaWidgetHtml();
    }
}
window.refreshLoginIconChallenge = refreshLoginIconChallenge;

function handleDemoLoginSubmit(e) {
    e.preventDefault();
    AudioSynth.playSuccess();
    showAdminToast('تست اعتبارسنجی ورود با موفقیت انجام شد (حالت شبیه‌ساز زنده)');
}
window.handleDemoLoginSubmit = handleDemoLoginSubmit;

// =========================================================================
// Dynamic Live Login Color & Theme Engine (Real-Time Synchronous)
// =========================================================================
let currentLoginColors = {
    accent: '#6366f1',
    cardBg: '#0f172a',
    text: '#ffffff',
    themeName: 'indigo'
};

function applyLoginStylesToStage() {
    const stage = document.getElementById('demo-login-stage');
    if (!stage) return;

    const accent = currentLoginColors.accent;
    const cardBg = currentLoginColors.cardBg;
    const textColor = currentLoginColors.text;

    // Apply CSS Variables to the Stage & Document & Login Box
    stage.style.setProperty('--guardify-accent', accent);
    stage.style.setProperty('--guardify-accent-glow', `${accent}44`);
    stage.style.setProperty('--guardify-card-bg', cardBg);
    stage.style.setProperty('--guardify-text', textColor);
    document.documentElement.style.setProperty('--guardify-accent', accent);

    const loginBox = stage.querySelector('#login') || stage.querySelector('.guardify-layout-wrapped');
    if (loginBox) {
        loginBox.style.setProperty('--guardify-accent', accent);
        loginBox.style.setProperty('--guardify-card-bg', cardBg);
        loginBox.style.setProperty('--guardify-text', textColor);
        loginBox.style.boxShadow = `0 25px 60px -15px rgba(0,0,0,0.75), 0 0 35px ${accent}33, inset 0 1px 1px 0 rgba(255,255,255,0.25)`;
        loginBox.style.borderColor = `${accent}40`;
        if (cardBg) {
            loginBox.style.backgroundColor = cardBg;
        }
    }

    // Submit button styling (handles all possible IDs and classes)
    const submitBtn = stage.querySelector('#login-submit-btn') || 
                      stage.querySelector('#demo-wp-submit') || 
                      stage.querySelector('#wp-submit') || 
                      stage.querySelector('.guardify-submit-btn') || 
                      stage.querySelector('button[type="submit"]') || 
                      stage.querySelector('.wp-core-ui #wp-submit');
    if (submitBtn) {
        submitBtn.style.background = `linear-gradient(135deg, ${accent}, ${adjustColorBrightness(accent, -25)})`;
        submitBtn.style.boxShadow = `0 4px 18px ${accent}50, inset 0 1px 0 rgba(255,255,255,0.35)`;
        submitBtn.style.color = '#ffffff';
        submitBtn.style.borderColor = 'transparent';
    }

    // Shield icon & headers
    const shieldIcon = stage.querySelector('.guardify-shield-icon');
    if (shieldIcon) {
        shieldIcon.style.color = accent;
        shieldIcon.style.background = `${accent}20`;
        shieldIcon.style.borderColor = `${accent}40`;
        shieldIcon.style.boxShadow = `0 4px 16px ${accent}30`;
    }

    // Captcha elements inside login
    const progress = stage.querySelector('#login-slider-progress') || stage.querySelector('#embedded-login-slider-progress') || stage.querySelector('.guardify-slider-progress');
    if (progress) {
        progress.style.background = `linear-gradient(to left, ${accent}, ${accent}88)`;
    }
    const thumb = stage.querySelector('#login-slider-thumb') || stage.querySelector('#embedded-login-slider-thumb') || stage.querySelector('.guardify-slider-thumb');
    if (thumb) {
        thumb.style.background = accent;
        thumb.style.boxShadow = `0 4px 14px ${accent}55`;
    }
    const radarBeam = stage.querySelector('.guardify-top-radar-beam');
    if (radarBeam) {
        radarBeam.style.background = `linear-gradient(90deg, transparent, ${accent}, transparent)`;
    }

    // Math check button inside login
    const mathBtn = stage.querySelector('.guardify-math-action-btn') || stage.querySelector('button[onclick*="checkLoginMathAnswer"]');
    if (mathBtn) {
        mathBtn.style.background = accent;
    }

    // Update color picker values if present
    const accentPicker = document.getElementById('demo-custom-accent-picker');
    if (accentPicker && accentPicker.value.toLowerCase() !== accent.toLowerCase()) {
        accentPicker.value = accent.length === 7 ? accent : '#6366f1';
    }
}

function adjustColorBrightness(hex, percent) {
    if (!hex || hex[0] !== '#') return hex;
    let num = parseInt(hex.slice(1), 16);
    let r = (num >> 16) + percent;
    let b = ((num >> 8) & 0x00FF) + percent;
    let g = (num & 0x0000FF) + percent;
    return "#" + (0x1000000 + (r < 255 ? (r < 1 ? 0 : r) : 255) * 0x10000 + (b < 255 ? (b < 1 ? 0 : b) : 255) * 0x100 + (g < 255 ? (g < 1 ? 0 : g) : 255)).toString(16).slice(1);
}

function setLoginAccentColor(colorHex, themeName, btnEl) {
    AudioSynth.playClick();
    currentLoginColors.accent = colorHex;
    currentLoginColors.themeName = themeName || 'custom';

    document.querySelectorAll('.login-color-btn').forEach(b => {
        b.classList.remove('active', 'ring-2', 'ring-indigo-400', 'ring-emerald-400', 'ring-amber-400', 'ring-rose-400', 'ring-cyan-400', 'ring-purple-400', 'ring-pink-400');
    });

    if (btnEl) {
        btnEl.classList.add('active', 'ring-2', 'ring-indigo-400');
    }

    applyLoginStylesToStage();
}
window.setLoginAccentColor = setLoginAccentColor;

function setLoginCustomLiveColor(type, value) {
    if (type === 'accent') {
        currentLoginColors.accent = value;
    } else if (type === 'card') {
        currentLoginColors.cardBg = value;
    } else if (type === 'text') {
        currentLoginColors.text = value;
    }
    applyLoginStylesToStage();
}
window.setLoginCustomLiveColor = setLoginCustomLiveColor;

function setLoginWallpaper(wallpaperKey, cssGradient) {
    AudioSynth.playClick();
    currentLoginWallpaper = wallpaperKey;
    const loginStage = document.getElementById('demo-login-stage');
    if (!loginStage) return;

    loginStage.style.backgroundImage = cssGradient;

    document.querySelectorAll('.login-wallpaper-btn').forEach(btn => {
        if (btn.getAttribute('data-wp-key') === wallpaperKey) {
            btn.classList.add('ring-2', 'ring-indigo-400');
        } else {
            btn.classList.remove('ring-2', 'ring-indigo-400');
        }
    });
}
window.setLoginWallpaper = setLoginWallpaper;

function setLoginViewport(device) {
    AudioSynth.playClick();
    const frame = document.getElementById('demo-login-viewport-frame');
    if (!frame) return;

    if (device === 'mobile') {
        frame.style.maxWidth = '420px';
    } else if (device === 'tablet') {
        frame.style.maxWidth = '768px';
    } else {
        frame.style.maxWidth = '100%';
    }

    document.querySelectorAll('.login-viewport-btn').forEach(btn => {
        if (btn.getAttribute('data-device') === device) {
            btn.classList.add('bg-indigo-600', 'text-white');
            btn.classList.remove('bg-slate-800', 'text-slate-400');
        } else {
            btn.classList.remove('bg-indigo-600', 'text-white');
            btn.classList.add('bg-slate-800', 'text-slate-400');
        }
    });
}
window.setLoginViewport = setLoginViewport;

function togglePasswordVisibility(inputId, btnEl) {
    const input = document.getElementById(inputId);
    if (!input) return;
    AudioSynth.playClick();
    if (input.type === 'password') {
        input.type = 'text';
        btnEl.innerHTML = '<i class="fas fa-eye-slash text-xs text-slate-400"></i>';
    } else {
        input.type = 'password';
        btnEl.innerHTML = '<i class="fas fa-eye text-xs text-slate-400"></i>';
    }
}
window.togglePasswordVisibility = togglePasswordVisibility;

// =========================================================================
// SECTION 3: WORDPRESS ADMIN PANEL SIMULATION (12 TABS & SEARCH)
// =========================================================================
const AdminMeta = {
    'dashboard': { icon: '📍', label: 'پیشخوان و خلاصه', title: 'خلاصه وضعیت جامع امنیت، امتیاز سلامت و پیش‌نمایش زنده' },
    'general': { icon: '⚡', label: 'چالش اصلی و سختی', title: 'تنظیم الگوریتم چالش کپچا، درجه سختی و سازگاری با کش' },
    'login_styler': { icon: '🔑', label: 'طراحی ورود (WP-Login)', title: 'سفارشی‌سازی فرم ورود، والپیپرهای اختصاصی و قفل هوشمند' },
    'themes': { icon: '🎨', label: 'ظاهر و تم‌های کپچا', title: 'انتخاب از میان ۲۵+ تم لوکس و تنظیم رنگ‌ها و استایل ویجت' },
    'forms': { icon: '🧩', label: 'فرم‌ها و ووکامرس', title: 'محافظت از ووکامرس، دیجیتس، فرم تماس ۷، المنتور و ثبت‌نام' },
    'security': { icon: '🔒', label: 'امنیت و هانی‌پات', title: 'تله مخفی هانی‌پات، کنترل سرعت ارسال، محدودیت و بلاک IP' },
    'whitelist': { icon: '🏳️', label: 'لیست سفید و استثناها', title: 'معافیت آی‌پی‌ها، نقش‌های کاربری و آدرس‌های دلخواه از کپچا' },
    'online': { icon: '🌐', label: 'کپچاهای آنلاین', title: 'تنظیمات Cloudflare Turnstile، Google reCAPTCHA و Smart Failover' },
    'statistics': { icon: '📊', label: 'آمار و گزارشات', title: 'تحلیل گرافیکی و نمودارهای دفع حملات به تفکیک روش‌ها و زمان' },
    'logs': { icon: '🚨', label: 'لاگ رویدادها', title: 'رادار رویدادهای مشکوک، دانلود خروجی CSV و مدیریت لیست سیاه' },
    'docs': { icon: '💡', label: 'راهنما و مستندات', title: 'راهنمای جامع، کدهای شورت‌کد [guardify_captcha] و هوک‌های PHP' },
    'config': { icon: '⚙️', label: 'پیکربندی و پشتیبان', title: 'درون‌ریزی و برون‌بری فایل تنظیمات JSON جهت انتقال و بکاپ' }
};

function guardifySwitchTab(tabSlug, scrollToTop) {
    if (!tabSlug) return;
    currentAdminTab = tabSlug;
    AudioSynth.playClick();

    // 1. Update active state on sidebar links
    document.querySelectorAll('.guardify-sidebar-link').forEach(link => {
        if (link.getAttribute('data-tab') === tabSlug) {
            link.classList.add('active');
        } else {
            link.classList.remove('active');
        }
    });

    // 2. Update Breadcrumb Banner
    const meta = AdminMeta[tabSlug] || AdminMeta['dashboard'];
    const bcIcon = document.getElementById('guardify-breadcrumb-icon');
    const bcCurrent = document.getElementById('guardify-breadcrumb-current') || document.getElementById('guardify-breadcrumb-active-label');
    const bcTitle = document.getElementById('guardify-breadcrumb-title') || document.getElementById('guardify-breadcrumb-active-title');

    if (bcIcon) bcIcon.textContent = meta.icon;
    if (bcCurrent) bcCurrent.textContent = meta.label;
    if (bcTitle) bcTitle.textContent = meta.title;

    // 3. Switch Tab Panes in DOM
    document.querySelectorAll('.guardify-tab-pane').forEach(pane => {
        if (pane.id === 'guardify-tab-' + tabSlug) {
            pane.style.display = 'block';
        } else {
            pane.style.display = 'none';
        }
    });

    // 4. Update hidden current_tab input
    const currInput = document.getElementById('guardify-current-tab-input');
    if (currInput) currInput.value = tabSlug;

    // 5. Trigger resize for Chart.js in statistics tab
    if (tabSlug === 'statistics') {
        window.dispatchEvent(new Event('resize'));
    }

    // 6. Smooth scroll to top of settings container if requested
    if (scrollToTop !== false) {
        const wrap = document.querySelector('.guardify-admin-wrap');
        if (wrap) {
            wrap.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    }
}
window.guardifySwitchTab = guardifySwitchTab;

window.guardifySubmitMainForm = function() {
    AudioSynth.playSuccess();
    showAdminToast('تنظیمات گاردفای پرو با موفقیت ذخیره شد (حالت شبیه‌ساز زنده)');
};

// Live Search Finder in Admin Panel (Ctrl+K)
function initAdminSearch() {
    const input = document.getElementById('guardify-live-search') || document.getElementById('guardify-search-input');
    const resultsContainer = document.getElementById('guardify-search-results');
    if (!input || !resultsContainer) return;

    input.addEventListener('input', function() {
        const query = this.value.trim().toLowerCase();
        if (query.length < 2) {
            resultsContainer.style.display = 'none';
            return;
        }

        const matchTabs = [];
        for (const [slug, data] of Object.entries(AdminMeta)) {
            if (data.label.toLowerCase().includes(query) || data.title.toLowerCase().includes(query)) {
                matchTabs.push({ slug, ...data });
            }
        }

        if (matchTabs.length > 0) {
            resultsContainer.style.display = 'block';
            resultsContainer.innerHTML = matchTabs.map(m => `
                <div class="guardify-search-item" style="padding:10px 14px; border-bottom:1px solid #334155; cursor:pointer; font-size:12px; transition:background 0.2s;" onclick="guardifySwitchTab('${m.slug}', true); document.getElementById('guardify-search-results').style.display='none';">
                    <span style="font-size:14px; margin-left:6px;">${m.icon}</span>
                    <strong style="color:#fbbf24;">${m.label}</strong>: 
                    <span style="color:#94a3b8; font-size:11px;">${m.title}</span>
                </div>
            `).join('');
        } else {
            resultsContainer.style.display = 'block';
            resultsContainer.innerHTML = '<div style="padding:10px; color:#94a3b8; font-size:12px;">موردی یافت نشد.</div>';
        }
    });

    document.addEventListener('keydown', function(e) {
        if ((e.ctrlKey || e.metaKey) && e.key === 'k') {
            e.preventDefault();
            switchMasterTab('admin');
            setTimeout(() => {
                input.focus();
                input.select();
            }, 100);
        }
    });

    document.addEventListener('click', function(e) {
        if (!e.target.closest('#guardify-live-search') && !e.target.closest('#guardify-search-results')) {
            resultsContainer.style.display = 'none';
        }
    });
}

function showAdminToast(msg) {
    AudioSynth.playSuccess();
    const existingToast = document.getElementById('guardify-toast');
    if (existingToast) existingToast.remove();

    const toast = document.createElement('div');
    toast.id = 'guardify-toast';
    toast.style.cssText = 'position:fixed; bottom:24px; left:24px; background:#0f172a; color:#fff; padding:12px 20px; border-radius:14px; border:1px solid #34d399; font-size:13px; font-weight:800; display:flex; align-items:center; gap:8px; box-shadow:0 10px 30px rgba(0,0,0,0.5); z-index:999999; animation:guardifyFadeIn 0.3s; direction:rtl; text-align:right;';
    toast.innerHTML = `<span style="color:#34d399; font-size:16px;">✓</span><span>${msg || 'تنظیمات با موفقیت ذخیره شد (حالت پیش‌نمایش)'}</span>`;
    document.body.appendChild(toast);

    setTimeout(() => {
        toast.remove();
    }, 2800);
}
window.showAdminToast = showAdminToast;

// =========================================================================
// ADMIN PANEL INTERACTIVE HANDLERS (Simulated Actions)
// =========================================================================
function selectGuardifyLayout(layout, el) {
    AudioSynth.playClick();
    if (el) {
        document.querySelectorAll('.guardify-layout-card').forEach(c => {
            c.style.borderColor = '#e2e8f0';
            c.style.background = '#ffffff';
        });
        const card = el.querySelector('.guardify-layout-card');
        if (card) {
            card.style.borderColor = '#6366f1';
            card.style.background = '#f5f3ff';
        }
        const radio = el.querySelector('input[type="radio"]');
        if (radio) radio.checked = true;
    }
    setLoginLayoutMode(layout);
    showAdminToast(`چیدمان فرم ورود روی «${layout}» تنظیم شد.`);
}
window.selectGuardifyLayout = selectGuardifyLayout;

function selectGuardifyWallpaper(wpKey, el) {
    AudioSynth.playClick();
    if (el) {
        document.querySelectorAll('.guardify-bg-card').forEach(c => {
            c.style.borderColor = '#e2e8f0';
            c.style.background = '#ffffff';
        });
        const card = el.querySelector('.guardify-bg-card');
        if (card) {
            card.style.borderColor = '#6366f1';
            card.style.background = '#f5f3ff';
        }
        const radio = el.querySelector('input[type="radio"]');
        if (radio) radio.checked = true;
    }
    const wpMap = {
        'cyberpunk_dark': 'radial-gradient(circle at 90% 10%, rgba(236, 72, 153, 0.5) 0%, transparent 55%), radial-gradient(circle at 10% 90%, rgba(56, 189, 248, 0.48) 0%, transparent 55%), #060814',
        'aurora_mesh': 'radial-gradient(at 0% 0%, rgba(16, 185, 129, 0.45) 0px, transparent 55%), radial-gradient(at 100% 100%, rgba(99, 102, 241, 0.45) 0px, transparent 55%), #070d18',
        'obsidian_gold': 'radial-gradient(circle at 85% 15%, rgba(234, 179, 8, 0.65) 0%, transparent 60%), radial-gradient(circle at 15% 85%, rgba(202, 138, 4, 0.65) 0%, transparent 60%), #120d02',
        'minimal_studio': 'radial-gradient(circle at 0% 0%, #e2e8f0 0%, transparent 55%), #f1f5f9',
        'royal_purple': 'radial-gradient(circle at 75% 25%, #8b5cf6 0%, transparent 60%), #0f0728',
        'cyber_teal': 'radial-gradient(circle at 20% 20%, #14b8a6 0%, transparent 60%), #042f2e',
        'rose_luxury': 'radial-gradient(circle at 80% 20%, #f43f5e 0%, transparent 60%), #1f0b14',
        'arctic_frost': 'radial-gradient(circle at 30% 20%, #38bdf8 0%, transparent 60%), #071526'
    };
    const grad = wpMap[wpKey] || 'radial-gradient(circle at 50% 50%, rgba(99, 102, 241, 0.3) 0%, transparent 70%), #090d16';
    setLoginWallpaper(wpKey, grad);
    showAdminToast(`والپیپر پس‌زمینه به «${wpKey}» تغییر یافت.`);
}
window.selectGuardifyWallpaper = selectGuardifyWallpaper;

function guardifySelectTheme(themeKey, el) {
    AudioSynth.playClick();
    if (el) {
        document.querySelectorAll('.guardify-theme-badge').forEach(b => b.classList.remove('active', 'ring-2', 'ring-indigo-500'));
        el.classList.add('active', 'ring-2', 'ring-indigo-500');
    }
    applyCaptchaThemeToWidgets(themeKey);
    showAdminToast(`پوسته کپچا روی «${themeKey}» فعال شد.`);
}
window.guardifySelectTheme = guardifySelectTheme;

function runGuardifyAutomatedSecurityScan() {
    AudioSynth.playClick();
    showAdminToast('اسکن امنیتی خودکار آغاز شد... تمام فرم‌ها و روت‌ها امن هستند.');
}
window.runGuardifyAutomatedSecurityScan = runGuardifyAutomatedSecurityScan;

function runGuardifyCodeAudit() {
    AudioSynth.playClick();
    showAdminToast('بررسی کدهای افزونه انجام شد: بدون هیچ‌گونه باگ یا آسیب‌پذیری تزریق کد.');
}
window.runGuardifyCodeAudit = runGuardifyCodeAudit;

function downloadGuardifyScanReport() {
    AudioSynth.playSuccess();
    showAdminToast('گزارش جامع امنیتی Guardify با موفقیت آماده شد (دانلود خودکار).');
}
window.downloadGuardifyScanReport = downloadGuardifyScanReport;

function loadGuardifySimulatorPreset(preset) {
    AudioSynth.playClick();
    showAdminToast(`پریست شبیه‌ساز روی «${preset}» تنظیم شد.`);
}
window.loadGuardifySimulatorPreset = loadGuardifySimulatorPreset;

function simulateGuardifySubmission(type) {
    if (type === 'valid') {
        AudioSynth.playSuccess();
        showAdminToast('تست ارسال فرم: کپچا معتبر بود و فرم با موفقیت ثبت شد.');
    } else {
        AudioSynth.playError();
        showAdminToast('تست ارسال فرم: خطای کپچا! ورود ربات مسدود گردید.');
    }
}
window.simulateGuardifySubmission = simulateGuardifySubmission;

// =========================================================================
// DOM READY INITIALIZATION
// =========================================================================
document.addEventListener('DOMContentLoaded', function() {
    // 1. Initialize Captcha Lab
    initCaptchaShowcase();

    // 2. Initialize Login Styler Stage
    setLoginLayoutMode(currentLoginLayout);

    // 3. Initialize Admin Panel Search & Tabs
    initAdminSearch();

    // 4. Intercept clicks on links pointing to tabs inside the Admin Panel
    document.addEventListener('click', function(e) {
        const link = e.target.closest('.guardify-sidebar-link');
        if (link) {
            e.preventDefault();
            const tab = link.getAttribute('data-tab');
            if (tab) {
                guardifySwitchTab(tab, true);
            }
            return;
        }

        const a = e.target.closest('a');
        if (a) {
            const href = a.getAttribute('href') || '';
            if (href.includes('guardify-captcha') && href.includes('tab=')) {
                const match = href.match(/tab=([a-zA-Z0-9_-]+)/);
                if (match && match[1]) {
                    e.preventDefault();
                    switchMasterTab('admin');
                    guardifySwitchTab(match[1], true);
                }
            }
        }

        // Intercept file input clicks to prevent system file explorer dialog in demo mode
        const fileInput = e.target.closest('input[type="file"]');
        if (fileInput) {
            e.preventDefault();
            e.stopPropagation();
            showAdminToast('پیش‌نمایش نمایشی: انتخاب و بارگذاری فایل در محیط دمو غیرفعال است (مختص نسخه اصلی).');
            return false;
        }
    });

    // Intercept form submissions inside demo panes to guarantee 0 data submission / 0 reload
    document.addEventListener('submit', function(e) {
        if (e.target.closest('#pane-master-admin') || e.target.closest('#guardify-main-form')) {
            e.preventDefault();
            e.stopPropagation();
            showAdminToast('پیش‌نمایش نمایشی: تمامی گزینه‌ها صرفاً جهت بررسی رابط کاربری هستند و هیچ داده‌ای ارسال یا ذخیره نمی‌شود.');
            return false;
        }
    });

    // 5. Check URL parameters and Hash on load for instant navigation
    const urlParams = new URLSearchParams(window.location.search);
    const tabParam = urlParams.get('tab');
    const pageParam = urlParams.get('page');
    const hash = window.location.hash;

    if (tabParam === 'admin' || pageParam === 'guardify-captcha' || hash === '#admin') {
        switchMasterTab('admin');
        const subTab = urlParams.get('tab');
        if (subTab && AdminMeta[subTab]) {
            guardifySwitchTab(subTab, false);
        }
    } else if (tabParam === 'login' || hash === '#login') {
        switchMasterTab('login');
    } else if (tabParam === 'captcha' || hash === '#captcha') {
        switchMasterTab('captcha');
    }
});
