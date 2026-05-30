<?php
/**
 * SuiteEstate — Post-Install Fixer
 * Creates all missing Menu.php, views, and action files for each SE_ module.
 * Run from browser: http://localhost/fix_suiteestate.php
 */
if (!defined('sugarEntry')) define('sugarEntry', true);

$suiteRoot = dirname(__FILE__);
if (file_exists($suiteRoot . '/include/entryPoint.php')) {
    chdir($suiteRoot);
    require_once('include/entryPoint.php');
}

set_time_limit(300);
error_reporting(E_ALL);

echo "<html><head><title>SuiteEstate Fixer</title>
<style>
body{font-family:'Segoe UI',sans-serif;background:#1a1a2e;color:#e0e0e0;padding:40px;}
.ok{color:#00ff88;}.err{color:#ff4444;}
.step{background:#16213e;border-radius:8px;padding:12px;margin:8px 0;border-left:4px solid #00d4ff;}
h1{color:#00d4ff;}
</style></head><body>";
echo "<h1>🔧 SuiteEstate — Module Fixer</h1>";

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

foreach ($modules as $modName => $label) {
    $modDir = $suiteRoot . '/modules/' . $modName;
    if (!is_dir($modDir)) {
        echo "<div class='step'><span class='err'>✗</span> Module directory missing: $modName</div>";
        continue;
    }

    // ── 1. Menu.php ──
    $menuFile = $modDir . '/Menu.php';
    if (!file_exists($menuFile)) {
        $menuContent = <<<PHP
<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

global \$mod_strings, \$app_strings;

if (ACLController::checkAccess('$modName', 'edit', true)) {
    \$module_menu[] = array(
        "index.php?module=$modName&action=EditView",
        \$mod_strings['LBL_MODULE_NAME'],
        "Create",
        '$modName'
    );
}
if (ACLController::checkAccess('$modName', 'list', true)) {
    \$module_menu[] = array(
        "index.php?module=$modName&action=index",
        \$mod_strings['LBL_MODULE_NAME'],
        '$modName',
        '$modName'
    );
}
PHP;
        file_put_contents($menuFile, $menuContent);
    }

    // ── 2. views/ directory ──
    $viewDir = $modDir . '/views';
    if (!is_dir($viewDir)) mkdir($viewDir, 0777, true);

    // view.list.php
    $viewListFile = $viewDir . '/view.list.php';
    if (!file_exists($viewListFile)) {
        $viewContent = <<<PHP
<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
require_once('include/MVC/View/views/view.list.php');
class {$modName}ViewList extends ViewList {
    public function __construct() {
        parent::__construct();
    }
}
PHP;
        file_put_contents($viewListFile, $viewContent);
    }

    // view.detail.php
    $viewDetailFile = $viewDir . '/view.detail.php';
    if (!file_exists($viewDetailFile)) {
        $viewContent = <<<PHP
<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
require_once('include/MVC/View/views/view.detail.php');
class {$modName}ViewDetail extends ViewDetail {
    public function __construct() {
        parent::__construct();
    }
}
PHP;
        file_put_contents($viewDetailFile, $viewContent);
    }

    // view.edit.php
    $viewEditFile = $viewDir . '/view.edit.php';
    if (!file_exists($viewEditFile)) {
        $viewContent = <<<PHP
<?php
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
require_once('include/MVC/View/views/view.edit.php');
class {$modName}ViewEdit extends ViewEdit {
    public function __construct() {
        parent::__construct();
    }
}
PHP;
        file_put_contents($viewEditFile, $viewContent);
    }

    // ── 3. metadata/detailviewdefs.php ──
    $metaDir = $modDir . '/metadata';
    if (!is_dir($metaDir)) mkdir($metaDir, 0777, true);

    $detailFile = $metaDir . '/detailviewdefs.php';
    if (!file_exists($detailFile)) {
        // Read vardefs to build panels automatically
        $vardefsFile = $modDir . '/vardefs.php';
        $fieldNames = array('name');
        if (file_exists($vardefsFile)) {
            $dictionary = array();
            include($vardefsFile);
            if (isset($dictionary[$modName]['fields'])) {
                foreach ($dictionary[$modName]['fields'] as $fName => $fDef) {
                    if ($fName !== 'name' && !in_array($fName, array('id','date_entered','date_modified','modified_user_id','created_by','deleted','description'))) {
                        $fieldNames[] = $fName;
                    }
                }
            }
        }

        // Build panels (3 columns, pairs of 2)
        $rows = array();
        $chunk = array_chunk($fieldNames, 2);
        foreach ($chunk as $pair) {
            $row = array();
            foreach ($pair as $f) {
                $row[] = $f;
            }
            if (count($row) === 1) $row[] = '';
            $rows[] = $row;
        }

        $panelCode = "array(\n";
        foreach ($rows as $r) {
            $panelCode .= "                array('{$r[0]}', '{$r[1]}'),\n";
        }
        $panelCode .= "            )";

        $detailContent = <<<PHP
<?php
\$viewdefs['$modName'] = array(
    'DetailView' => array(
        'templateMeta' => array(
            'maxColumns' => '2',
            'widths' => array(
                array('label' => '10', 'field' => '30'),
                array('label' => '10', 'field' => '30'),
            ),
        ),
        'panels' => array(
            'default' => $panelCode,
        ),
    ),
);
PHP;
        file_put_contents($detailFile, $detailContent);
    }

    // ── 4. metadata/editviewdefs.php ──
    $editFile = $metaDir . '/editviewdefs.php';
    if (!file_exists($editFile)) {
        // Reuse the same layout
        $detailContent = file_get_contents($detailFile);
        $editContent = str_replace("'DetailView'", "'EditView'", $detailContent);
        file_put_contents($editFile, $editContent);
    }

    // ── 5. Add missing language strings ──
    $langDir = $modDir . '/language';
    if (is_dir($langDir)) {
        $enFile = $langDir . '/en_us.lang.php';
        if (file_exists($enFile)) {
            $content = file_get_contents($enFile);
            $additions = '';
            if (strpos($content, 'LBL_LIST_FORM_TITLE') === false) {
                $additions .= "\$mod_strings['LBL_LIST_FORM_TITLE'] = '$label List';\n";
            }
            if (strpos($content, 'LBL_SEARCH_FORM_TITLE') === false) {
                $additions .= "\$mod_strings['LBL_SEARCH_FORM_TITLE'] = 'Search $label';\n";
            }
            if (strpos($content, 'LBL_NEW_FORM_TITLE') === false) {
                $additions .= "\$mod_strings['LBL_NEW_FORM_TITLE'] = 'New $label';\n";
            }
            if (strpos($content, 'LBL_ASSIGNED_TO_NAME') === false) {
                $additions .= "\$mod_strings['LBL_ASSIGNED_TO_NAME'] = 'Assigned To';\n";
                $additions .= "\$mod_strings['LBL_ASSIGNED_TO_ID'] = 'Assigned To (ID)';\n";
                $additions .= "\$mod_strings['LBL_DATE_ENTERED'] = 'Date Created';\n";
                $additions .= "\$mod_strings['LBL_DATE_MODIFIED'] = 'Date Modified';\n";
                $additions .= "\$mod_strings['LBL_MODIFIED_BY'] = 'Modified By';\n";
                $additions .= "\$mod_strings['LBL_CREATED_BY'] = 'Created By';\n";
                $additions .= "\$mod_strings['LBL_DELETED'] = 'Deleted';\n";
                $additions .= "\$mod_strings['LBL_DESCRIPTION'] = 'Description';\n";
                $additions .= "\$mod_strings['LBL_ID'] = 'ID';\n";
            }
            if (!empty($additions)) {
                // Insert before the closing );
                $content = str_replace(");\n", $additions . ");\n", $content);
                file_put_contents($enFile, $content);
            }
        }
    }

    echo "<div class='step'><span class='ok'>✓</span> Fixed <strong>$modName</strong> ($label) — Menu, Views, Detail/Edit layouts, language strings.</div>";
}

// ── 6. Add modules to displayed tabs ──
echo "<div class='step'><strong>Step 2:</strong> Adding modules to displayed tabs...</div>";

// Read current tabs from the database
global $db;
$currentUser = $GLOBALS['current_user'];
if ($currentUser && $currentUser->id) {
    // Get system tab list
    require_once('modules/MySettings/TabController.php');
    $tabs = new TabController();
    $currentTabs = $tabs->get_system_tabs();
    
    $added = array();
    foreach ($modules as $modName => $label) {
        if (!isset($currentTabs[$modName])) {
            $currentTabs[$modName] = $modName;
            $added[] = $modName;
        }
    }
    
    if (!empty($added)) {
        $tabs->set_system_tabs($currentTabs);
        echo "<div class='step'><span class='ok'>✓</span> Added " . count($added) . " modules to system tabs: " . implode(', ', $added) . "</div>";
    } else {
        echo "<div class='step'><span class='ok'>✓</span> All modules already in system tabs.</div>";
    }
}

// ── 7. Clear all cache ──
echo "<div class='step'><strong>Step 3:</strong> Clearing all caches...</div>";

$cachePaths = array(
    $suiteRoot . '/cache/modules',
    $suiteRoot . '/cache/themes',
    $suiteRoot . '/cache/smarty/templates_c',
);
foreach ($cachePaths as $cp) {
    if (is_dir($cp)) {
        $iter = new RecursiveDirectoryIterator($cp, RecursiveDirectoryIterator::SKIP_DOTS);
        $files = new RecursiveIteratorIterator($iter, RecursiveIteratorIterator::CHILD_FIRST);
        foreach ($files as $f) {
            if ($f->isFile()) @unlink($f->getRealPath());
        }
    }
}
echo "<div class='step'><span class='ok'>✓</span> Cache cleared.</div>";

// ── Done ──
echo "<div class='step' style='border-left-color:#00ff88;background:#0a2a1a;'>";
echo "<h2 style='color:#00ff88;margin:0;'>🎉 All Modules Fixed!</h2>";
echo "<p><strong>Next step:</strong> Do another <strong>Quick Repair and Rebuild</strong> then reload SuiteCRM. The modules should now appear in the top navigation bar.</p>";
echo "<p><a href='index.php?module=Administration&action=DiagnosticRun' style='color:#00d4ff;'>→ Go to Admin Panel</a></p>";
echo "</div>";

echo "</body></html>";
