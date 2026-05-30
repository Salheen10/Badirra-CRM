<?php
/**
 * SuiteEstate — Create Menu Group
 */
if (!defined('sugarEntry')) define('sugarEntry', true);

$suiteRoot = dirname(__FILE__);
if (file_exists($suiteRoot . '/include/entryPoint.php')) {
    chdir($suiteRoot);
    require_once('include/entryPoint.php');
}

$modules = array(
    'SE_Properties',
    'SE_LeadFeed',
    'SE_Requirements',
    'SE_Valuations',
    'SE_MarketReports',
    'SE_SavedSearches',
    'SE_Viewings',
    'SE_Offers',
    'SE_Deals',
    'SE_Commissions',
    'SE_DripPlans',
    'SE_WebPages',
    'SE_LeadForms',
    'SE_AssignmentRules'
);

// Add to GroupRegistry
$groupDir = $suiteRoot . '/custom/Extension/application/Ext/GroupRegistry';
if (!is_dir($groupDir)) mkdir($groupDir, 0777, true);

$groupCode = "<?php\n// SuiteEstate Module Group\n";
$groupCode .= "\$extension_module_menu['Real Estate'] = array(\n";
foreach ($modules as $mod) {
    $groupCode .= "    '$mod',\n";
}
// Also include Leads and Contacts in Real Estate
$groupCode .= "    'Leads',\n";
$groupCode .= "    'Contacts',\n";
$groupCode .= ");\n";

file_put_contents($groupDir . '/SuiteEstate.php', $groupCode);

// Add Language strings for the group
$langDir = $suiteRoot . '/custom/Extension/application/Ext/Language';
if (!is_dir($langDir)) mkdir($langDir, 0777, true);

$enLang = "<?php\n\$app_strings['LBL_GROUPTAB2_REAL_ESTATE'] = 'Real Estate';\n";
file_put_contents($langDir . '/en_us.SuiteEstateGroup.php', $enLang);

$arLang = "<?php\n\$app_strings['LBL_GROUPTAB2_REAL_ESTATE'] = 'العقارات';\n";
file_put_contents($langDir . '/ar_AR.SuiteEstateGroup.php', $arLang);

// Rebuild Extensions
require_once('ModuleInstall/ModuleInstaller.php');
$mi = new ModuleInstaller();
$mi->silent = true;
$mi->rebuild_extensions();
$mi->rebuild_languages(array('en_us', 'ar_AR'));

// Clear Cache
if (function_exists('sugar_cache_reset_full')) {
    sugar_cache_reset_full();
}

echo "<html><body style='background:#1a1a2e;color:#00ff88;font-family:sans-serif;padding:40px;'>
<h2>✅ Real Estate Menu Group Created!</h2>
<p>All modules are now grouped under <strong>Real Estate / العقارات</strong>.</p>
</body></html>";
