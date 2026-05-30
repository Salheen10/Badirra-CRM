<?php
/**
 * SuiteEstate — Register Application Labels
 */
if (!defined('sugarEntry')) define('sugarEntry', true);
$suiteRoot = dirname(__FILE__);
if (file_exists($suiteRoot . '/include/entryPoint.php')) {
    chdir($suiteRoot);
    require_once('include/entryPoint.php');
}

$modules = array(
    'SE_Properties' => 'Properties',
    'SE_LeadFeed' => 'Lead Feed',
    'SE_Requirements' => 'Buyer Requirements',
    'SE_Valuations' => 'Valuations',
    'SE_MarketReports' => 'Market Reports',
    'SE_SavedSearches' => 'Saved Searches',
    'SE_Viewings' => 'Viewings',
    'SE_Offers' => 'Offers',
    'SE_Deals' => 'Deals',
    'SE_Commissions' => 'Commissions',
    'SE_DripPlans' => 'Drip Plans',
    'SE_WebPages' => 'Web Pages',
    'SE_LeadForms' => 'Lead Forms',
    'SE_AssignmentRules' => 'Assignment Rules',
);

$langDir = $suiteRoot . '/custom/Extension/application/Ext/Language';
if (!is_dir($langDir)) mkdir($langDir, 0777, true);

$enFile = $langDir . '/en_us.SuiteEstate_Modules.php';
$arFile = $langDir . '/ar_AR.SuiteEstate_Modules.php';

$enCode = "<?php\n// SuiteEstate Module Labels\n";
$arCode = "<?php\n// SuiteEstate Module Labels\n";

foreach ($modules as $modName => $label) {
    $enCode .= "\$app_list_strings['moduleList']['$modName'] = '$label';\n";
    $arCode .= "\$app_list_strings['moduleList']['$modName'] = '$label';\n";
}

file_put_contents($enFile, $enCode);
file_put_contents($arFile, $arCode);

// Rebuild Extensions & Languages
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
<h2>✅ Module Labels Registered!</h2>
<p>The system now knows what to name the modules in the navigation bar.</p>
</body></html>";
