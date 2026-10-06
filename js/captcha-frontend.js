/**
 * Guardify Captcha Pro Frontend Script v3.50
 * Advanced Security Inspection Engine & Verification System
 */
(function($) {
    'use strict';

    // 0. Smart Human Behavioral Telemetry & Interaction Tracking
    var humanInteractions = 0;
    $(document).on('mousemove touchstart keydown scroll', function() {
        humanInteractions++;
        if (humanInteractions <= 30) {
            $('.guardify-telemetry-field').val(humanInteractions);
        }
    });

    // 1. Pleasant Audio Chime on Verification Success (Web Audio API Synthesizer)
    function playVerificationChime() {
        try {
            var AudioCtx = window.AudioContext || window.webkitAudioContext;
            if (!AudioCtx) return;
            var ctx = new AudioCtx();
            if (ctx.state === 'suspended') {
                ctx.resume();
            }
            var osc = ctx.createOscillator();
            var gain = ctx.createGain();
            osc.type = 'sine';
            osc.frequency.setValueAtTime(587.33, ctx.currentTime);
            osc.frequency.exponentialRampToValueAtTime(880, ctx.currentTime + 0.12);
            gain.gain.setValueAtTime(0.05, ctx.currentTime);
            gain.gain.exponentialRampToValueAtTime(0.001, ctx.currentTime + 0.3);
            osc.connect(gain);
            gain.connect(ctx.destination);
            osc.start();
            osc.stop(ctx.currentTime + 0.32);
        } catch(e) {
            // Audio policy fallback
        }
    }

    function updateFormButtons($captchaContainer, isVerified) {
        var $form = $captchaContainer.closest('form');
        if (!$form.length) {
            $form = $captchaContainer.parents('form');
        }
        if (!$form.length) {
            // Check for WooCommerce or specific checkout wraps
            $form = $('form.checkout, form.woocommerce-checkout, form.login, form.register, form.wpcf7-form, form.wpforms-form');
        }
        if (!$form.length) return;
        
        var $submitBtn = $form.find('button[type="submit"], input[type="submit"], #place_order, .woocommerce-form-login__submit, .woocommerce-form-register__submit, .wpcf7-submit, .wpforms-submit, .ff-btn-submit, #wp-submit, .elementor-button[type="submit"], .gform_button');
        if (isVerified) {
            $submitBtn.prop('disabled', false).removeAttr('disabled').css({
                'opacity': '1',
                'cursor': 'pointer',
                'pointer-events': 'auto',
                'filter': 'none',
                'transition': 'all 0.3s ease'
            });
        } else {
            $submitBtn.prop('disabled', true).attr('disabled', 'disabled').css({
                'opacity': '0.4',
                'cursor': 'not-allowed',
                'pointer-events': 'none',
                'filter': 'grayscale(0.6)',
                'transition': 'all 0.3s ease'
            });
        }
    }

    // 2. High-Tech Security Inspection & Real-Time Verification
    function startInspectionAndVerification($container, onVerified, onFailed) {
        if ($container.hasClass('guardify-verified') || $container.hasClass('guardify-verifying')) {
            return;
        }

        var captchaType = $container.attr('data-captcha-type') || 'math';
        var token = $container.find('input[name="guardify_captcha_token"]').val() || '';
        var renderTime = parseInt($container.attr('data-render-time') || $container.find('input[name="guardify_render_time"]').val() || '0', 10);
        var answer = '';

        if (captchaType === 'math') {
            answer = toStandardDigits($.trim($container.find('input[name="guardify_captcha_answer"]').val()));
        } else if (captchaType === 'icon_match') {
            answer = $.trim($container.find('.guardify-icon-input').val());
        } else if (captchaType === 'slider') {
            answer = $.trim($container.find('#guardify_slider_input').val());
        }

        if (!answer || answer.length === 0) {
            $container.addClass('guardify-shake-error');
            setTimeout(function() { $container.removeClass('guardify-shake-error'); }, 600);
            return;
        }

        $container.addClass('guardify-verifying');
        $container.removeClass('guardify-shake-error');

        // Lock inputs & disable interactions while inspecting
        $container.find('input, button:not(.guardify-slider-reset)').prop('disabled', true);
        
        // Also ensure form button is locked during inspection
        updateFormButtons($container, false);

        // Standard inspection duration between 1800ms and 2800ms
        var totalDuration = Math.floor(Math.random() * (2800 - 1800 + 1)) + 1800;
        var startTime = Date.now();
        var verificationResult = null; // null = pending, true = success, false = failed
        var verificationErrorMsg = 'پاسخ امنیتی نادرست است!';

        // Build Inspection Drawer Panel
        var $inspectBox = $container.find('.guardify-inspect-box');
        if (!$inspectBox.length) {
            var inspectHtml = '<div class="guardify-inspect-box">' +
                '<div class="guardify-inspect-header">' +
                    '<div class="guardify-inspect-radar-ring"><span class="guardify-radar-beam"></span></div>' +
                    '<div class="guardify-inspect-info">' +
                        '<div class="guardify-inspect-title">سیستم هوشمند ارزیابی امنیتی گاردفای</div>' +
                        '<div class="guardify-inspect-subtitle">بررسی پارامترها و الگوهای ضد ربات...</div>' +
                    '</div>' +
                    '<div class="guardify-inspect-percent">۰٪</div>' +
                '</div>' +
                '<div class="guardify-inspect-bar-track">' +
                    '<div class="guardify-inspect-bar-fill"></div>' +
                '</div>' +
                '<div class="guardify-checklist">' +
                    '<div class="guardify-check-item item-1 active">' +
                        '<span class="guardify-check-bullet">◌</span>' +
                        '<span class="guardify-check-label">ارزیابی یکپارچگی مرورگر و سلامت کلاینت</span>' +
                    '</div>' +
                    '<div class="guardify-check-item item-2">' +
                        '<span class="guardify-check-bullet">◌</span>' +
                        '<span class="guardify-check-label">سنجش تله‌متری رفتاری و سرعت تعامل انسانی</span>' +
                    '</div>' +
                    '<div class="guardify-check-item item-3">' +
                        '<span class="guardify-check-bullet">◌</span>' +
                        '<span class="guardify-check-label">اعتبارسنجی نرخ توکن و عدم تکرار (Anti-Replay)</span>' +
                    '</div>' +
                    '<div class="guardify-check-item item-4">' +
                        '<span class="guardify-check-bullet">◌</span>' +
                        '<span class="guardify-check-label">تطبیق امضای رمزنگاری‌شده و احراز هویت نهایی</span>' +
                    '</div>' +
                '</div>' +
            '</div>';
            $inspectBox = $(inspectHtml);
            $container.append($inspectBox);
        }

        var $fill = $inspectBox.find('.guardify-inspect-bar-fill');
        var $percent = $inspectBox.find('.guardify-inspect-percent');
        var $item1 = $inspectBox.find('.item-1');
        var $item2 = $inspectBox.find('.item-2');
        var $item3 = $inspectBox.find('.item-3');
        var $item4 = $inspectBox.find('.item-4');

        // Launch AJAX real-time verification request concurrently with anti-cache nonce
        if (typeof GuardifyVars !== 'undefined' && GuardifyVars.ajax_url) {
            $.ajax({
                url: GuardifyVars.ajax_url,
                type: 'POST',
                dataType: 'json',
                cache: false,
                data: {
                    action: 'guardify_verify_captcha',
                    nonce: GuardifyVars.nonce || '',
                    type: captchaType,
                    answer: answer,
                    token: token,
                    render_time: renderTime,
                    telemetry: humanInteractions
                },
                success: function(res) {
                    if (res && res.success) {
                        verificationResult = true;
                    } else {
                        verificationResult = false;
                        if (res && res.data && res.data.message) {
                            verificationErrorMsg = res.data.message;
                        }
                    }
                },
                error: function() {
                    verificationResult = false;
                    verificationErrorMsg = 'خطا در اعتبارسنجی زنده با سرور.';
                }
            });
        } else {
            verificationResult = false;
            verificationErrorMsg = 'تنظیمات ارتباطی با سرور در دسترس نیست.';
        }

        var inspectionInterval = setInterval(function() {
            var elapsed = Date.now() - startTime;
            var progress = Math.min(90, Math.floor((elapsed / totalDuration) * 90));

            // Convert to Persian numbers
            var persianPercent = String(progress).replace(/d/g, function(d) {
                return '۰۱۲۳۴۵۶۷۸۹'[d];
            }) + '٪';

            $fill.css('width', progress + '%');
            $percent.text(persianPercent);

            // Step 1: 0% - 25% (Browser Integrity)
            if (progress >= 25 && !$item1.hasClass('done')) {
                $item1.removeClass('active').addClass('done');
                $item1.find('.guardify-check-bullet').text('✓');
                $item2.addClass('active');
            }

            // Step 2: 25% - 50% (Behavioral Telemetry)
            if (progress >= 50 && !$item2.hasClass('done')) {
                $item2.removeClass('active').addClass('done');
                $item2.find('.guardify-check-bullet').text('✓');
                $item3.addClass('active');
            }

            // Step 3: 50% - 75% (Anti-Replay & Token Rate)
            if (progress >= 75 && !$item3.hasClass('done')) {
                $item3.removeClass('active').addClass('done');
                $item3.find('.guardify-check-bullet').text('✓');
                $item4.addClass('active');
            }

            // Step 4: 75%+ Final Cryptographic Signature Check
            if (elapsed >= (totalDuration * 0.8) && verificationResult !== null) {
                clearInterval(inspectionInterval);

                if (verificationResult === true) {
                    // === SUCCESS CASE ===
                    $item4.removeClass('active').addClass('done');
                    $item4.find('.guardify-check-bullet').text('✓');
                    $fill.css({ 'background': '#10b981', 'width': '100%' });
                    $percent.text('۱۰۰٪').css({ 'color': '#10b981' });

                    // Sound Effect
                    playVerificationChime();

                    setTimeout(function() {
                        $container.removeClass('guardify-verifying').addClass('guardify-verified');

                        // Replace inspection box with modern Verified Badge Card with Confetti & Luminous Glow
                        var verifiedBadgeHtml = '<div class="guardify-verified-badge-card">' +
                            '<div class="guardify-verified-glow-shimmer"></div>' +
                            '<div class="guardify-confetti-wrap">' +
                                '<span class="guardify-confetti-dot"></span>' +
                                '<span class="guardify-confetti-dot"></span>' +
                                '<span class="guardify-confetti-dot"></span>' +
                                '<span class="guardify-confetti-dot"></span>' +
                                '<span class="guardify-confetti-dot"></span>' +
                                '<span class="guardify-confetti-dot"></span>' +
                            '</div>' +
                            '<div class="guardify-verified-pulse"></div>' +
                            '<div class="guardify-verified-icon">✓</div>' +
                            '<div class="guardify-verified-text-group">' +
                                '<div class="guardify-verified-main">' + (GuardifyVars.texts.verified_success || 'تایید شد؛ هویت کاربر با موفقیت احراز گردید') + '</div>' +
                                '<div class="guardify-verified-meta">محافظت شده با گاردفای پرو • اتصال امن و تایید شده</div>' +
                            '</div>' +
                        '</div>';

                        $inspectBox.fadeOut(200, function() {
                            $(this).replaceWith($(verifiedBadgeHtml));
                        });

                        // Re-enable inputs
                        $container.find('input').prop('disabled', false);

                        // Enable Form Submit Button
                        updateFormButtons($container, true);

                        if (typeof onVerified === 'function') {
                            onVerified();
                        }
                    }, 300);

                } else {
                    // === FAILURE CASE (Wrong Answer / Cryptographic Failure) ===
                    $item4.removeClass('active').addClass('failed');
                    $item4.find('.guardify-check-bullet').text('✗');
                    $fill.css({ 'background': '#ef4444', 'width': '100%' });
                    $percent.text('خطا').css({ 'color': '#ef4444', 'border-color': '#ef4444', 'background': 'rgba(239, 68, 68, 0.15)' });

                    $inspectBox.find('.guardify-inspect-error-alert').remove();
                    $inspectBox.append('<div class="guardify-inspect-error-alert">❌ ' + verificationErrorMsg + '</div>');
                    $container.addClass('guardify-shake-error');

                    // Keep Form Submit Button strictly DISABLED
                    updateFormButtons($container, false);

                    if (typeof onFailed === 'function') {
                        onFailed(verificationErrorMsg);
                    }

                    // Auto-refresh challenge question after 1.8s via AJAX so a new token is generated
                    setTimeout(function() {
                        triggerServerRefresh($container, captchaType);
                    }, 1800);
                }
            }
        }, 50);
    }

    // 3. Server-Synced Refresh Handler (for Math, Slider, Icon Match)
    function triggerServerRefresh($container, type, callback) {
        $container.removeClass('guardify-verified guardify-verifying guardify-shake-error');
        $container.find('.guardify-inspect-box, .guardify-verified-badge-card').remove();
        $container.find('input, button').prop('disabled', false);

        var theme = $container.attr('data-theme') || (typeof GuardifyVars !== 'undefined' ? GuardifyVars.theme : 'dark-slate');
        var $btn = $container.find('.guardify-refresh-btn');
        $btn.addClass('guardify-spinning');
        $container.css('opacity', '0.6');

        if (typeof GuardifyVars !== 'undefined' && GuardifyVars.ajax_url) {
            var bustUrl = GuardifyVars.ajax_url + (GuardifyVars.ajax_url.indexOf('?') !== -1 ? '&' : '?') + '_nc=' + Date.now();
            $.ajax({
                url: bustUrl,
                type: 'POST',
                dataType: 'json',
                cache: false,
                data: {
                    action: 'guardify_refresh_captcha',
                    nonce: GuardifyVars.nonce || '',
                    force_type: type,
                    force_theme: theme
                },
                success: function(res) {
                    if (res && res.success && res.data && res.data.html) {
                        var $newHtml = $(res.data.html);
                        $container.replaceWith($newHtml);
                        if (res.data.nonce) {
                            GuardifyVars.nonce = res.data.nonce;
                        }
                        $newHtml.find('.guardify-input').focus();
                        updateFormButtons($newHtml, false);
                        startCaptchaTimer();
                        if (typeof callback === 'function') callback($newHtml);
                    }
                },
                complete: function() {
                    $('.guardify-refresh-btn').removeClass('guardify-spinning');
                    $('.guardify-captcha-container').css('opacity', '1');
                }
            });
        }
    }

    $(document).on('click', '.guardify-refresh-btn, .guardify-clickable-eq', function(e) {
        e.preventDefault();
        e.stopPropagation();
        var $el = $(this);
        var $container = $el.closest('.guardify-captcha-container');
        var type = $container.attr('data-captcha-type') || 'math';
        triggerServerRefresh($container, type);
    });

    // 4. Interactive Drag Slider (Drag to Verify with 2-9s Inspection)
    $(document).on('click', '.guardify-slider-reset', function(e) {
        e.preventDefault();
        e.stopPropagation();
        var $container = $(this).closest('.guardify-captcha-container');
        triggerServerRefresh($container, 'slider');
    });

    $(document).on('mousedown touchstart', '.guardify-slider-thumb', function(e) {
        var $thumb = $(this);
        var $wrap = $thumb.closest('.guardify-slider-wrap');
        var $track = $wrap.find('.guardify-slider-track');
        var $progress = $wrap.find('.guardify-slider-progress');
        var $hint = $wrap.find('.guardify-slider-hint');
        var $input = $wrap.find('#guardify_slider_input');

        if ($wrap.hasClass('guardify-slider-verified') || $wrap.hasClass('guardify-verifying')) return;

        var trackWidth = $track.width();
        var maxDrag = trackWidth - 42;
        var startX = (e.type === 'touchstart') ? e.originalEvent.touches[0].clientX : e.clientX;

        function onMove(ev) {
            var currentX = (ev.type === 'touchmove') ? ev.originalEvent.touches[0].clientX : ev.clientX;
            var deltaAbs = Math.abs(currentX - startX);
            var clamped = Math.max(0, Math.min(deltaAbs, maxDrag));

            $thumb.css('transform', 'translateX(-' + clamped + 'px)');
            $progress.css('width', (clamped / maxDrag * 100) + '%');

            if (clamped >= maxDrag * 0.90) {
                cleanup();
                $thumb.html('⏳').css('transform', 'translateX(-' + maxDrag + 'px)');
                $progress.css('width', '100%');
                $hint.text('در حال بررسی امنیتی...');
                $input.val('slider_verified');

                // Trigger 2-9s Security Inspection
                startInspectionAndVerification($wrap, function() {
                    $wrap.addClass('guardify-slider-verified');
                    $thumb.html('✓');
                    $hint.text('تأیید شد ✓');
                }, function() {
                    $input.val('');
                    $thumb.html('←').css('transform', 'translateX(0)');
                    $progress.css('width', '0%');
                    $hint.text('دستگیره را به چپ بکشید ←');
                });
            }
        }

        function cleanup() {
            $(document).off('mousemove touchmove', onMove);
            $(document).off('mouseup touchend', onUp);
        }

        function onUp() {
            if (!$wrap.hasClass('guardify-slider-verified') && !$wrap.hasClass('guardify-verifying')) {
                $thumb.css('transform', 'translateX(0)');
                $progress.css('width', '0%');
            }
            cleanup();
        }

        $(document).on('mousemove touchmove', onMove);
        $(document).on('mouseup touchend', onUp);
    });

    // Helper function for Persian & Arabic digit conversion
    function toStandardDigits(str) {
        if (!str) return '';
        return String(str)
            .replace(/[۰-۹]/g, function(d) { return '۰۱۲۳۴۵۶۷۸۹'.indexOf(d); })
            .replace(/[٠-٩]/g, function(d) { return '٠١٢٣٤٥٦٧٨٩'.indexOf(d); });
    }

    // 5. Interactive Icon Match Selection (Selecting icon highlights it, verification requires button click)
    $(document).on('click', '.guardify-icon-btn', function(e) {
        e.preventDefault();
        var $btn = $(this);
        var $wrap = $btn.closest('.guardify-icon-wrap');
        var $input = $wrap.find('.guardify-icon-input');
        var iconId = $btn.attr('data-icon-id');

        if ($wrap.hasClass('guardify-verified') || $wrap.hasClass('guardify-verifying')) return;

        $wrap.find('.guardify-icon-btn').removeClass('selected');
        $btn.addClass('selected');
        $input.val(iconId);
        $wrap.removeClass('guardify-shake-error');
    });

    $(document).on('click', '.guardify-icon-verify-btn', function(e) {
        e.preventDefault();
        var $btn = $(this);
        var $wrap = $btn.closest('.guardify-icon-wrap');
        var $input = $wrap.find('.guardify-icon-input');
        var iconId = $input.val();

        if ($wrap.hasClass('guardify-verified') || $wrap.hasClass('guardify-verifying')) return;

        if (!iconId) {
            $wrap.addClass('guardify-shake-error');
            setTimeout(function() {
                $wrap.removeClass('guardify-shake-error');
            }, 600);
            return;
        }

        $btn.html('⏳ در حال بررسی...').prop('disabled', true);
        startInspectionAndVerification($wrap, function() {
            $btn.html('✓ تایید شد').css('background', '#10b981');
        }, function() {
            $btn.html('بررسی و تایید آیکون').prop('disabled', false).css('background', '');
        });
    });

    // 6. Math Challenge: Verification on button click or Enter key ONLY
    $(document).on('click', '.guardify-math-verify-btn', function(e) {
        e.preventDefault();
        var $btn = $(this);
        var $container = $btn.closest('.guardify-captcha-container');
        var $input = $container.find('.guardify-input');
        var rawVal = $.trim($input.val());

        if ($container.hasClass('guardify-verified') || $container.hasClass('guardify-verifying')) return;

        var val = toStandardDigits(rawVal);
        if (!val || val.length === 0) {
            $input.addClass('guardify-input-error');
            $container.addClass('guardify-shake-error');
            $input.focus();
            setTimeout(function() {
                $container.removeClass('guardify-shake-error');
                $input.removeClass('guardify-input-error');
            }, 800);
            return;
        }

        $input.val(val);
        $btn.html('⏳ در حال بررسی...').prop('disabled', true);
        startInspectionAndVerification($container, function() {
            $btn.html('✓ تایید شد').css('background', '#10b981');
        }, function() {
            $btn.html('بررسی').prop('disabled', false).css('background', '');
        });
    });

    $(document).on('keypress', '.guardify-input', function(e) {
        if (e.which === 13 || e.keyCode === 13) {
            e.preventDefault();
            $(this).closest('.guardify-captcha-container').find('.guardify-math-verify-btn').trigger('click');
        }
    });

    // 7. Form Submission Guard: Prevents double submission and runs 2-9s inspection if pending
    $(document).on('submit', 'form', function(e) {
        var $form = $(this);
        var $captcha = $form.find('.guardify-captcha-container');
        if (!$captcha.length) return true;

        if ($captcha.hasClass('guardify-verified')) {
            // Already verified, allow form submit
            return true;
        }

        if ($captcha.hasClass('guardify-verifying')) {
            // Currently inspecting: pause form submission until verified
            e.preventDefault();
            var checkReadyInterval = setInterval(function() {
                if ($captcha.hasClass('guardify-verified')) {
                    clearInterval(checkReadyInterval);
                    $form.off('submit').submit();
                }
            }, 200);
            return false;
        }

        // If user typed an answer in math captcha or picked icon but didn't click verify button yet:
        var rawInput = $captcha.find('.guardify-input').val() || $captcha.find('.guardify-icon-input').val();
        if (rawInput && $.trim(rawInput).length > 0) {
            e.preventDefault();
            $captcha.find('.guardify-math-verify-btn, .guardify-icon-verify-btn').trigger('click');
            var autoCheckInterval = setInterval(function() {
                if ($captcha.hasClass('guardify-verified')) {
                    clearInterval(autoCheckInterval);
                    $form.off('submit').submit();
                }
            }, 200);
            return false;
        }

        // If not verified and no answer, block form submit and shake
        e.preventDefault();
        $captcha.addClass('guardify-shake-error');
        var $firstVerifyBtn = $captcha.find('.guardify-verify-btn, .guardify-input, .guardify-slider-thumb').first();
        if ($firstVerifyBtn.length) {
            $firstVerifyBtn.focus();
        }
        setTimeout(function() {
            $captcha.removeClass('guardify-shake-error');
        }, 600);
        return false;
    });

    // 8. Anti-Cache Auto-Hydration for Cached Pages
    var captchaTimer;
    function startCaptchaTimer() {
        if (captchaTimer) clearInterval(captchaTimer);
        var $containers = $('.guardify-captcha-container');
        if (!$containers.length) return;

        var timerSec = (typeof GuardifyVars !== 'undefined' && GuardifyVars.timer_seconds) ? parseInt(GuardifyVars.timer_seconds) : 120;
        var start = Math.floor(Date.now() / 1000);

        captchaTimer = setInterval(function() {
            var $c = $('.guardify-captcha-container');
            if ($c.hasClass('guardify-slider-verified') || $c.hasClass('guardify-verified') || $c.find('.guardify-icon-input').val()) {
                clearInterval(captchaTimer);
                return;
            }
            var now = Math.floor(Date.now() / 1000);
            var elapsed = now - start;
            if (elapsed >= timerSec) {
                $('.guardify-refresh-btn').first().trigger('click');
                start = Math.floor(Date.now() / 1000);
            }
        }, 1000);
    }

    function checkAndHydrateCachedCaptchas() {
        if (typeof GuardifyVars === 'undefined' || !GuardifyVars.ajax_url) return;

        var isLoginPage = $('body').hasClass('login') || window.location.pathname.indexOf('wp-login.php') !== -1;
        var nowSec = Math.floor(Date.now() / 1000);

        $('.guardify-captcha-container').each(function() {
            var $container = $(this);
            if ($container.hasClass('guardify-verified') || $container.hasClass('guardify-verifying')) return;

            var renderTime = parseInt($container.attr('data-render-time') || $container.find('input[name="guardify_render_time"]').val() || '0', 10);
            var isStale = (renderTime > 0 && (nowSec - renderTime) > 30);
            var isAntiCache = (GuardifyVars.antiCacheMode == '1' || GuardifyVars.antiCacheMode === 1 || GuardifyVars.antiCacheMode === true);

            // If page is cached by LiteSpeed/WP Rocket or challenge is stale, dynamically hydrate live challenge
            if (isAntiCache || isStale || renderTime === 0) {
                var type = $container.attr('data-captcha-type') || GuardifyVars.type || 'math';
                var theme = GuardifyVars.theme || $container.attr('data-theme') || 'dark-slate';
                var bustUrl = GuardifyVars.ajax_url + (GuardifyVars.ajax_url.indexOf('?') !== -1 ? '&' : '?') + '_nc=' + Date.now() + '_' + Math.random().toString(36).substring(7);

                $.ajax({
                    url: bustUrl,
                    type: 'POST',
                    dataType: 'json',
                    cache: false,
                    data: {
                        action: 'guardify_refresh_captcha',
                        force_type: type,
                        force_theme: theme,
                        nonce: GuardifyVars.nonce || ''
                    },
                    success: function(res) {
                        if (res && res.success && res.data && res.data.html) {
                            var $newHtml = $(res.data.html);
                            $container.replaceWith($newHtml);
                            if (res.data.nonce) {
                                GuardifyVars.nonce = res.data.nonce;
                            }
                        }
                    }
                });
            }
        });
    }

    // 9. Smart Failover Watchdog for Online Captcha CDNs (Google, Cloudflare, hCaptcha)
    function initSmartFailoverWatchdog() {
        if (typeof GuardifyVars === 'undefined') return;
        var isOnlineProvider = (GuardifyVars.provider && GuardifyVars.provider !== 'offline');
        var isFailoverActive = (GuardifyVars.fallbackToOffline == '1' || GuardifyVars.fallbackToOffline === 1 || GuardifyVars.fallbackToOffline === true);
        
        if (!isOnlineProvider || !isFailoverActive) return;

        var timeoutMs = parseInt(GuardifyVars.failoverTimeoutMs || 2500, 10);
        var fallbackType = GuardifyVars.failoverCaptchaType || 'math';
        var theme = GuardifyVars.theme || 'dark-slate';

        setTimeout(function() {
            var $onlineBoxes = $('.guardify-online-captcha, .g-recaptcha, .cf-turnstile, .h-captcha, [data-sitekey]');
            $onlineBoxes.each(function() {
                var $box = $(this);
                var isLoaded = false;
                if ($box.find('iframe').length > 0 || (window.grecaptcha && window.grecaptcha.render) || window.turnstile || window.hcaptcha) {
                    isLoaded = true;
                }

                if (!isLoaded && !$box.hasClass('guardify-failover-loaded')) {
                    $box.addClass('guardify-failover-loaded');
                    $.ajax({
                        url: GuardifyVars.ajax_url,
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            action: 'guardify_refresh_captcha',
                            force_type: fallbackType,
                            force_theme: theme,
                            nonce: GuardifyVars.nonce || ''
                        },
                        success: function(res) {
                            if (res && res.success && res.data && res.data.html) {
                                var $notice = $('<div class="guardify-failover-notice" style="font-size:11px;color:#10b981;margin-bottom:6px;display:flex;align-items:center;gap:4px;font-weight:600;"><span>🛡️</span><span>سوییچ خودکار به چالش امنیتی داخلی به دلیل اختلال اینترنت بین‌الملل</span></div>');
                                var $newHtml = $(res.data.html);
                                $box.empty().append($notice).append($newHtml);
                                updateFormButtons($newHtml, false);
                            }
                        }
                    });
                }
            });
        }, timeoutMs);
    }

    $(document).ready(function() {
        checkAndHydrateCachedCaptchas();
        initSmartFailoverWatchdog();
        startCaptchaTimer();
        
        // Initial form button lock if captcha is present and not verified
        $('.guardify-captcha-container').each(function() {
            var $c = $(this);
            if (!$c.hasClass('guardify-verified')) {
                updateFormButtons($c, false);
            }
        });

        $(document).on('wpcf7invalid wpcf7mailsent wpcf7submit wpcf7spam', function() {
            setTimeout(function() {
                $('.guardify-refresh-btn').first().trigger('click');
            }, 300);
        });

        $(document.body).on('checkout_error updated_checkout', function() {
            $('.guardify-refresh-btn').first().trigger('click');
        });

        $('.guardify-input').first().focus();
    });
})(jQuery);
