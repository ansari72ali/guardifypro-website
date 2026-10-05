/**
 * Guardify Pro Universal Theme Manager
 * Guarantees 100% synchronization of Dark / Light modes across all pages,
 * tabs, and sessions using unified Cookie, LocalStorage, and OS scheme fallbacks.
 */
(function() {
    'use strict';

    function setCookie(name, value, days) {
        var expires = "";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + encodeURIComponent(value || "") + expires + "; path=/; SameSite=Lax";
    }

    function getCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) === ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) === 0) return decodeURIComponent(c.substring(nameEQ.length, c.length));
        }
        return null;
    }

    function getSystemTheme() {
        if (window.matchMedia && window.matchMedia('(prefers-color-scheme: light)').matches) {
            return 'light';
        }
        return 'dark';
    }

    function getStoredTheme() {
        // 1. Primary: Unified Cookie (shared across index, preview, and subpaths)
        var cookieVal = getCookie('guardify_theme') || getCookie('user-theme');
        if (cookieVal === 'light' || cookieVal === 'dark') {
            return cookieVal;
        }

        // 2. Secondary: LocalStorage
        try {
            var localVal = localStorage.getItem('guardify_theme');
            if (localVal === 'light' || localVal === 'dark') {
                return localVal;
            }
        } catch(e) {}

        // 3. Default: User Operating System preference
        return getSystemTheme();
    }

    function applyTheme(mode, persist) {
        if (persist === undefined) persist = true;
        var isDark = mode === 'dark';

        if (isDark) {
            document.documentElement.classList.remove('light');
            document.documentElement.classList.add('dark');
            document.documentElement.setAttribute('data-theme', 'dark');
            if (document.body) {
                document.body.classList.remove('light');
                document.body.classList.add('dark');
            }
        } else {
            document.documentElement.classList.remove('dark');
            document.documentElement.classList.add('light');
            document.documentElement.setAttribute('data-theme', 'light');
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

        // Dispatch global event for interactive canvas/charts to update
        try {
            window.dispatchEvent(new CustomEvent('guardifyThemeChanged', { detail: { theme: mode } }));
        } catch(e) {}
    }

    function toggleTheme() {
        var currentIsDark = document.documentElement.classList.contains('dark') || 
                            (document.body && document.body.classList.contains('dark'));
        var nextMode = currentIsDark ? 'light' : 'dark';
        applyTheme(nextMode, true);
    }

    // Expose global API
    window.GuardifyTheme = {
        getTheme: getStoredTheme,
        setTheme: applyTheme,
        toggle: toggleTheme,
        getCookie: getCookie,
        setCookie: setCookie
    };

    // Apply active theme immediately
    var initialTheme = getStoredTheme();
    applyTheme(initialTheme, false);

    // Setup event listeners once DOM is interactive
    function initListeners() {
        // Bind all theme-toggle buttons across header, mobile drawer, or preview
        var buttons = document.querySelectorAll('#theme-toggle, .theme-toggle');
        buttons.forEach(function(btn) {
            btn.removeEventListener('click', toggleTheme);
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                toggleTheme();
            });
        });

        // Listen for OS scheme change dynamically if user hasn't set explicit cookie
        if (window.matchMedia) {
            window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', function(e) {
                var hasCookie = getCookie('guardify_theme') || getCookie('user-theme');
                if (!hasCookie) {
                    applyTheme(e.matches ? 'dark' : 'light', false);
                }
            });
        }

        // Cross-tab synchronization via storage event
        window.addEventListener('storage', function(e) {
            if (e.key === 'guardify_theme' && (e.newValue === 'light' || e.newValue === 'dark')) {
                applyTheme(e.newValue, false);
            }
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initListeners);
    } else {
        initListeners();
    }
})();
