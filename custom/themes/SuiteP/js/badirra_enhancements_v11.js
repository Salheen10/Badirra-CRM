/**
 * Badirra CRM — Theme & UI Enhancements (Tabler UI Edition)
 */
(function () {
  'use strict';

  // ── Loading Screen ────────────────────────────────────────────────────
  function initLoader() {
    if (document.getElementById('badirra-loader')) return;
    var existingLogo = document.querySelector('img[alt="Badirra CRM"], .company-logo img, .companylogo img');
    var logoSrc = existingLogo ? existingLogo.src : 'themes/default/images/company_logo.png';
    
    var loader = document.createElement('div');
    loader.id = 'badirra-loader';
    loader.style.cssText = 'position:fixed;inset:0;z-index:99999;display:flex;flex-direction:column;align-items:center;justify-content:center;background:var(--tblr-bg-surface);transition:opacity 0.4s ease;';
    loader.innerHTML =
      '<img src="' + logoSrc + '" style="max-height:48px;margin-bottom:20px;" alt="Badirra CRM">' +
      '<div class="spinner-border text-primary" role="status"></div>';
    if (document.body) document.body.insertBefore(loader, document.body.firstChild);

    function hide() {
      var el = document.getElementById('badirra-loader');
      if (el) {
        el.style.opacity = '0';
        el.style.pointerEvents = 'none';
        setTimeout(function () { if (el.parentNode) el.parentNode.removeChild(el); }, 500);
      }
    }
    if (document.readyState === 'complete') { setTimeout(hide, 200); }
    else { window.addEventListener('load', function () { setTimeout(hide, 200); }); }
    setTimeout(hide, 3000); // Max 3 seconds
  }

  // ── Favicon Handled By Backend ────────────────────────────────────────

  // ── Branding Fix ──────────────────────────────────────────────────────
  function fixBranding() {
    var t = document.querySelector('title');
    if (t) t.textContent = t.textContent.replace(/SuiteCRM/gi, 'Badirra CRM').replace(/SugarCRM/gi, 'Badirra CRM');

    var els = document.querySelectorAll('#copyrightbuttons a, .footer_left a, .p_login_bottom a');
    for (var i = 0; i < els.length; i++) {
      els[i].textContent = els[i].textContent.replace(/SuiteCRM/gi, 'Badirra CRM').replace(/SugarCRM/gi, 'Badirra CRM');
    }
  }

  // ── Dark Mode State Management ────────────────────────────────────────
  window.toggleBadirraDarkMode = function(e) {
    if (e) {
      e.preventDefault();
      e.stopPropagation();
    }
    var currentlyDark = document.documentElement.getAttribute('data-theme') === 'dark';
    var newDark = !currentlyDark;
    localStorage.setItem('badirra_dark_mode', newDark ? '1' : '0');
    
    if (newDark) {
      document.documentElement.setAttribute('data-theme', 'dark');
    } else {
      document.documentElement.removeAttribute('data-theme');
    }
    
    // Update the UI labels
    var labels = document.querySelectorAll('.dark-mode-state');
    for (var i = 0; i < labels.length; i++) {
      labels[i].textContent = newDark ? 'On' : 'Off';
    }
  };

  function initDarkMode() {
    var isDark = localStorage.getItem('badirra_dark_mode') === '1';
    if (isDark) {
      document.documentElement.setAttribute('data-theme', 'dark');
    } else {
      document.documentElement.removeAttribute('data-theme');
    }
    var labels = document.querySelectorAll('.dark-mode-state');
    for (var i = 0; i < labels.length; i++) {
      labels[i].textContent = isDark ? 'On' : 'Off';
    }

    // Cross-tab syncing
    window.addEventListener('storage', function(e) {
      if (e.key === 'badirra_dark_mode') {
        var newDark = e.newValue === '1';
        if (newDark) {
          document.documentElement.setAttribute('data-theme', 'dark');
        } else {
          document.documentElement.removeAttribute('data-theme');
        }
        var lbls = document.querySelectorAll('.dark-mode-state');
        for (var j = 0; j < lbls.length; j++) {
          lbls[j].textContent = newDark ? 'On' : 'Off';
        }
      }
    });

    // Brute-force enforcer for AJAX UI resets
    setInterval(function() {
      if (localStorage.getItem('badirra_dark_mode') === '1') {
        if (document.documentElement.getAttribute('data-theme') !== 'dark') {
          document.documentElement.setAttribute('data-theme', 'dark');
        }
      }
    }, 500);
  }

  function loadEnterpriseApp() {
    if (!document.getElementById('ent-react-script')) {
      var script = document.createElement('script');
      script.type = 'module';
      script.id = 'ent-react-script';
      script.src = 'custom/themes/SuiteP/dist/assets/main.js?v=' + new Date().getTime();
      document.body.appendChild(script);
    }
    if (!document.getElementById('ent-react-css')) {
      var link = document.createElement('link');
      link.rel = 'stylesheet';
      link.id = 'ent-react-css';
      link.href = 'custom/themes/SuiteP/dist/assets/main.css?v=' + new Date().getTime();
      document.head.appendChild(link);

      // CRITICAL FIX: Tailwind v4 generates `.collapse{visibility:collapse}`
      // which destroys Bootstrap's `.collapse` class used by all SuiteCRM panels.
      // We inject an override AFTER main.css to guarantee it wins the cascade.
      var fixStyle = document.createElement('style');
      fixStyle.id = 'ent-tailwind-collapse-fix';
      fixStyle.textContent =
        '.collapse { visibility: visible !important; }' +
        '.panel-collapse.collapse:not(.in) { display: none !important; visibility: visible !important; }' +
        '.panel-collapse.collapse.in { display: block !important; visibility: visible !important; }' +
        '.tab-pane.panel-collapse { visibility: visible !important; }';
      document.head.appendChild(fixStyle);
    }
    
    // Waffle Icon is now handled entirely via CSS replacing the native Home icon
    // This prevents layout breakage in the SuiteCRM navbar calculation
  }

  function unloadEnterpriseApp() {
    // Hide Waffle Icon
    var waffleBtn = document.getElementById('ent-waffle-btn');
    if (waffleBtn) waffleBtn.style.display = 'none';

    // We don't remove the CSS/JS to avoid React unmounting issues unless we want to do a hard reload.
    // Instead, we just trigger a page reload to guarantee a clean state when turning Enterprise Mode off.
    window.location.reload();
  }

  window.toggleEnterpriseMode = function(e) {
    if (e) {
      e.preventDefault();
      e.stopPropagation();
    }
    var isEnterprise = document.documentElement.getAttribute('data-enterprise') === 'true';
    var newEnterprise = !isEnterprise;
    localStorage.setItem('badirra_enterprise_mode', newEnterprise ? '1' : '0');
    
    if (newEnterprise) {
      // Force redirect to Home Page so they instantly see the Grid
      window.location.href = 'index.php?module=Home&action=index';
    } else {
      // Force reload to cleanly remove Enterprise Mode CSS/JS
      window.location.reload();
    }
  };

  function initEnterpriseMode() {
    var stored = localStorage.getItem('badirra_enterprise_mode');
    // Default to true (On) if never set before
    var isEnterprise = stored === null ? true : stored === '1';
    
    // Auto-save the default state so it's consistent
    if (stored === null) {
      localStorage.setItem('badirra_enterprise_mode', '1');
    }

    var isHome = window.location.search === '' || 
                 (window.location.search.indexOf('module=Home') !== -1 && window.location.search.indexOf('action=EditView') === -1);

    if (isEnterprise && isHome) {
      document.documentElement.setAttribute('data-enterprise', 'true');
      loadEnterpriseApp();
    } else {
      document.documentElement.removeAttribute('data-enterprise');
    }
    
    var labels = document.querySelectorAll('.enterprise-mode-state');
    for (var i = 0; i < labels.length; i++) {
      labels[i].textContent = isEnterprise ? 'On' : 'Off';
    }
  }


  function onReady(fn) {
    if (document.readyState !== 'loading') fn();
    else document.addEventListener('DOMContentLoaded', fn);
  }

  // Prevent flash: Force theme attribute immediately before DOM loaded
  if (localStorage.getItem('badirra_dark_mode') === '1') {
      document.documentElement.setAttribute('data-theme', 'dark');
  }
  var storedEntMode = localStorage.getItem('badirra_enterprise_mode');
  var isHomeNow = window.location.search === '' || 
                  (window.location.search.indexOf('module=Home') !== -1 && window.location.search.indexOf('action=EditView') === -1);
  if ((storedEntMode === '1' || storedEntMode === null) && isHomeNow) {
      document.documentElement.setAttribute('data-enterprise', 'true');
  }

  onReady(function () {
    initDarkMode();
    initEnterpriseMode();
    initLoader();
    fixBranding();
  });

})();
