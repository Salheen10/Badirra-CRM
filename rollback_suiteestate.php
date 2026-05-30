<?php
/**
 * SuiteEstate — Rollback Script
 * This script completely removes all SuiteEstate modules, custom fields, and extensions.
 */
if (!defined('sugarEntry')) define('sugarEntry', true);

$suiteRoot = dirname(__FILE__);
if (file_exists($suiteRoot . '/include/entryPoint.php')) {
    chdir($suiteRoot);
    require_once('include/entryPoint.php');
}

echo "<html><body style='background:#1a1a2e;color:#e0e0e0;font-family:sans-serif;padding:40px;'>";
echo "<h1 style='color:#ff4444;'>🗑️ SuiteEstate Rollback</h1>";

global $sugar_config, $current_user, $log;
$db = DBManagerFactory::getInstance();
$outputLog = "";

// ── 1. Drop Database Tables ──
$tables = array(
    'se_properties', 'se_leadfeed', 'se_requirements', 'se_valuations',
    'se_marketreports', 'se_savedsearches', 'se_viewings', 'se_offers',
    'se_deals', 'se_commissions', 'se_dripplans', 'se_webpages',
    'se_leadforms', 'se_assignmentrules'
);

foreach ($tables as $tbl) {
    if ($db->tableExists($tbl)) {
        $db->query("DROP TABLE $tbl");
        $outputLog .= "<div><span style='color:#ff4444;'>[DB]</span> Dropped table: $tbl</div>";
    }
}

// ── 2. Remove Custom Fields from leads_cstm ──
if ($db->tableExists('leads_cstm')) {
    $custom_fields = array(
        'lead_type_c', 'budget_range_c', 'preferred_area_c', 'preferred_property_type_c',
        'preferred_bedrooms_c', 'buying_timeline_c', 'lead_temperature_c', 'lead_score_c',
        'pre_approved_c', 'financing_status_c', 'last_property_viewed_c', 'properties_viewed_count_c',
        'email_consent_c', 'sms_consent_c', 'whatsapp_consent_c', 'call_consent_c', 'idx_source_page_c'
    );
    
    $cols = $db->get_columns('leads_cstm');
    foreach ($custom_fields as $cf) {
        if (isset($cols[$cf])) {
            $db->query("ALTER TABLE leads_cstm DROP COLUMN $cf");
            $outputLog .= "<div><span style='color:#ff4444;'>[DB]</span> Dropped field: $cf from leads_cstm</div>";
        }
    }
}

// ── 3. Delete Files and Directories ──
function deleteDir($dirPath) {
    if (!is_dir($dirPath)) {
        return;
    }
    if (substr($dirPath, strlen($dirPath) - 1, 1) != '/') {
        $dirPath .= '/';
    }
    $files = glob($dirPath . '*', GLOB_MARK);
    foreach ($files as $file) {
        if (is_dir($file)) {
            deleteDir($file);
        } else {
            unlink($file);
        }
    }
    rmdir($dirPath);
}

$modules = array(
    'SE_Properties', 'SE_LeadFeed', 'SE_Requirements', 'SE_Valuations',
    'SE_MarketReports', 'SE_SavedSearches', 'SE_Viewings', 'SE_Offers',
    'SE_Deals', 'SE_Commissions', 'SE_DripPlans', 'SE_WebPages',
    'SE_LeadForms', 'SE_AssignmentRules'
);

foreach ($modules as $modName) {
    $modDir = $suiteRoot . '/modules/' . $modName;
    if (is_dir($modDir)) {
        deleteDir($modDir);
        $outputLog .= "<div><span style='color:#ffaa00;'>[FILE]</span> Deleted module folder: $modName</div>";
    }
}

$filesToDelete = array(
    '/custom/Extension/application/Ext/Include/SuiteEstate.php',
    '/custom/Extension/application/Ext/Language/en_us.SuiteEstate_Modules.php',
    '/custom/Extension/application/Ext/Language/ar_AR.SuiteEstate_Modules.php',
    '/custom/Extension/application/Ext/GroupRegistry/SuiteEstate.php',
    '/custom/Extension/application/Ext/Language/en_us.SuiteEstateGroup.php',
    '/custom/Extension/application/Ext/Language/ar_AR.SuiteEstateGroup.php',
    '/custom/Extension/modules/Leads/Ext/Vardefs/SuiteEstate_Leads.php',
    '/custom/Extension/modules/Leads/Ext/Language/en_us.SuiteEstate_Leads.php',
    '/custom/Extension/modules/Leads/Ext/Language/ar_AR.SuiteEstate_Leads.php',
    '/custom/Extension/application/Ext/Language/en_us.SuiteEstate.php',
    '/custom/Extension/application/Ext/Language/ar_AR.SuiteEstate.php',
);

foreach ($filesToDelete as $f) {
    if (file_exists($suiteRoot . $f)) {
        unlink($suiteRoot . $f);
        $outputLog .= "<div><span style='color:#ffaa00;'>[FILE]</span> Deleted: $f</div>";
    }
}

echo "<div style='background:#16213e;padding:15px;border-radius:8px;margin-bottom:20px;font-family:monospace;'>" . $outputLog . "</div>";

// ── 4. Rebuild Extensions ──
echo "<div><strong>Rebuilding Extensions...</strong></div>";
require_once('ModuleInstall/ModuleInstaller.php');
$mi = new ModuleInstaller();
$mi->silent = true;
$mi->rebuild_extensions();
$mi->rebuild_languages($sugar_config['languages']);
echo "<div><span style='color:#00ff88;'>✓ Extensions rebuilt.</span></div>";

// ── 5. Clean Caches ──
if (function_exists('sugar_cache_reset_full')) {
    sugar_cache_reset_full();
}
echo "<div><span style='color:#00ff88;'>✓ Cache cleared.</span></div>";

echo "<h2 style='color:#00ff88;margin-top:30px;'>✅ Rollback Complete!</h2>";
echo "<p>All Real Estate modules and customizations have been permanently removed.</p>";
echo "</body></html>";
