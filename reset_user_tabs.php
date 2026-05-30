<?php
/**
 * SuiteEstate — Reset User Preferences for Tabs
 */
if (!defined('sugarEntry')) define('sugarEntry', true);
$suiteRoot = dirname(__FILE__);
if (file_exists($suiteRoot . '/include/entryPoint.php')) {
    chdir($suiteRoot);
    require_once('include/entryPoint.php');
}

global $db;
// Reset the user preferences for tabs for all users
// This forces SuiteCRM to rebuild the user's tab list from the global settings
$query = "UPDATE user_preferences SET deleted = 1 WHERE category = 'global' AND (contents LIKE '%display_tabs%' OR contents LIKE '%hide_tabs%')";
$db->query($query);

// Also remove from session cache
if (isset($_SESSION)) {
    foreach ($_SESSION as $key => $val) {
        if (strpos($key, 'display_tabs') !== false || strpos($key, 'hide_tabs') !== false) {
            unset($_SESSION[$key]);
        }
    }
}

// Clear all sugar cache
if (function_exists('sugar_cache_reset_full')) {
    sugar_cache_reset_full();
}

// Rebuild GroupRegistry just in case
require_once('ModuleInstall/ModuleInstaller.php');
$mi = new ModuleInstaller();
$mi->silent = true;
$mi->rebuild_extensions();
$mi->rebuild_languages(array('en_us', 'ar_AR'));


echo "<html><body style='background:#1a1a2e;color:#00ff88;font-family:sans-serif;padding:40px;'>
<h2>✅ User Preferences Reset!</h2>
<p>Forced the system to reload global tabs. Please refresh your SuiteCRM page.</p>
</body></html>";
