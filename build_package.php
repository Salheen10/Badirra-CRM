<?php
// Script to generate the SuiteEstate Growth CRM Free Package
// Run this from the SuiteCRM root directory via CLI

$packageName = 'SuiteEstate_Growth_CRM_Free';
$buildDir = __DIR__ . '/build_' . $packageName;

if (is_dir($buildDir)) {
    // recursively delete old build dir
    $iterator = new RecursiveDirectoryIterator($buildDir, RecursiveDirectoryIterator::SKIP_DOTS);
    $files = new RecursiveIteratorIterator($iterator, RecursiveIteratorIterator::CHILD_FIRST);
    foreach($files as $file) {
        if ($file->isDir()){
            rmdir($file->getRealPath());
        } else {
            unlink($file->getRealPath());
        }
    }
    rmdir($buildDir);
}
mkdir($buildDir, 0777, true);

// -----------------------------------------------------------------------------
// MODULE SCHEMAS
// -----------------------------------------------------------------------------
$modules = [
    'SE_Properties' => [
        'name' => 'Properties',
        'table' => 'se_properties',
        'icon' => 'Building',
        'fields' => [
            'property_code' => ['type' => 'varchar', 'len' => 100, 'label' => 'LBL_PROPERTY_CODE', 'ar' => 'كود العقار'],
            'listing_title' => ['type' => 'varchar', 'len' => 255, 'label' => 'LBL_LISTING_TITLE', 'ar' => 'عنوان الإعلان'],
            'property_type' => ['type' => 'enum', 'options' => 'se_property_type_dom', 'label' => 'LBL_PROPERTY_TYPE', 'ar' => 'نوع العقار'],
            'property_subtype' => ['type' => 'enum', 'options' => 'se_property_subtype_dom', 'label' => 'LBL_PROPERTY_SUBTYPE', 'ar' => 'النوع الفرعي'],
            'listing_type' => ['type' => 'enum', 'options' => 'se_listing_type_dom', 'label' => 'LBL_LISTING_TYPE', 'ar' => 'نوع الإعلان'],
            'listing_status' => ['type' => 'enum', 'options' => 'se_listing_status_dom', 'label' => 'LBL_LISTING_STATUS', 'ar' => 'حالة الإعلان'],
            'public_remarks' => ['type' => 'text', 'label' => 'LBL_PUBLIC_REMARKS', 'ar' => 'ملاحظات عامة'],
            'private_remarks' => ['type' => 'text', 'label' => 'LBL_PRIVATE_REMARKS', 'ar' => 'ملاحظات خاصة'],
            
            // Location
            'country' => ['type' => 'varchar', 'len' => 100, 'label' => 'LBL_COUNTRY', 'ar' => 'الدولة'],
            'city' => ['type' => 'varchar', 'len' => 100, 'label' => 'LBL_CITY', 'ar' => 'المدينة'],
            'area' => ['type' => 'varchar', 'len' => 100, 'label' => 'LBL_AREA', 'ar' => 'المنطقة'],
            'community' => ['type' => 'varchar', 'len' => 100, 'label' => 'LBL_COMMUNITY', 'ar' => 'المجمع السكني'],
            'full_address' => ['type' => 'varchar', 'len' => 255, 'label' => 'LBL_FULL_ADDRESS', 'ar' => 'العنوان بالكامل'],
            'latitude' => ['type' => 'varchar', 'len' => 50, 'label' => 'LBL_LATITUDE', 'ar' => 'خط العرض'],
            'longitude' => ['type' => 'varchar', 'len' => 50, 'label' => 'LBL_LONGITUDE', 'ar' => 'خط الطول'],
            
            // Specifications
            'bedrooms' => ['type' => 'int', 'len' => 11, 'label' => 'LBL_BEDROOMS', 'ar' => 'غرف النوم'],
            'bathrooms' => ['type' => 'int', 'len' => 11, 'label' => 'LBL_BATHROOMS', 'ar' => 'الحمامات'],
            'parking_spaces' => ['type' => 'int', 'len' => 11, 'label' => 'LBL_PARKING_SPACES', 'ar' => 'مواقف السيارات'],
            'built_up_area' => ['type' => 'float', 'len' => '11,2', 'label' => 'LBL_BUILT_UP_AREA', 'ar' => 'مساحة البناء'],
            'plot_area' => ['type' => 'float', 'len' => '11,2', 'label' => 'LBL_PLOT_AREA', 'ar' => 'مساحة الأرض'],
            'size_unit' => ['type' => 'enum', 'options' => 'se_size_unit_dom', 'label' => 'LBL_SIZE_UNIT', 'ar' => 'وحدة القياس'],
            
            // Pricing
            'sale_price' => ['type' => 'currency', 'label' => 'LBL_SALE_PRICE', 'ar' => 'سعر البيع'],
            'rent_price' => ['type' => 'currency', 'label' => 'LBL_RENT_PRICE', 'ar' => 'سعر الإيجار'],
            'price_per_sqft' => ['type' => 'currency', 'label' => 'LBL_PRICE_PER_SQFT', 'ar' => 'السعر للقدم'],
            'currency_id' => ['type' => 'id', 'label' => 'LBL_CURRENCY', 'ar' => 'العملة'],
            
            // MLS
            'is_mls_listing' => ['type' => 'bool', 'default' => '0', 'label' => 'LBL_IS_MLS_LISTING', 'ar' => 'إعلان MLS'],
            'mls_listing_id' => ['type' => 'varchar', 'len' => 100, 'label' => 'LBL_MLS_LISTING_ID', 'ar' => 'رقم MLS'],
            'mls_source' => ['type' => 'varchar', 'len' => 100, 'label' => 'LBL_MLS_SOURCE', 'ar' => 'مصدر MLS'],
            'mls_sync_status' => ['type' => 'varchar', 'len' => 50, 'label' => 'LBL_MLS_SYNC_STATUS', 'ar' => 'حالة مزامنة MLS'],
            'idx_publish_allowed' => ['type' => 'bool', 'default' => '1', 'label' => 'LBL_IDX_PUBLISH_ALLOWED', 'ar' => 'مسموح بالنشر في IDX'],
            
            // Media
            'main_image' => ['type' => 'varchar', 'len' => 255, 'label' => 'LBL_MAIN_IMAGE', 'ar' => 'الصورة الرئيسية'],
            'virtual_tour_url' => ['type' => 'varchar', 'len' => 255, 'label' => 'LBL_VIRTUAL_TOUR_URL', 'ar' => 'رابط الجولة الافتراضية'],
        ]
    ],
    'SE_LeadFeed' => [
        'name' => 'Lead Feed',
        'table' => 'se_leadfeed',
        'icon' => 'Feed',
        'fields' => [
            'score' => ['type' => 'int', 'len' => 11, 'label' => 'LBL_SCORE', 'ar' => 'التقييم'],
            'priority' => ['type' => 'enum', 'options' => 'se_priority_dom', 'label' => 'LBL_PRIORITY', 'ar' => 'الأولوية'],
            'trigger_reason' => ['type' => 'varchar', 'len' => 255, 'label' => 'LBL_TRIGGER_REASON', 'ar' => 'سبب التنبيه'],
            'suggested_action' => ['type' => 'varchar', 'len' => 255, 'label' => 'LBL_SUGGESTED_ACTION', 'ar' => 'الإجراء المقترح'],
            'status' => ['type' => 'enum', 'options' => 'se_feed_status_dom', 'label' => 'LBL_STATUS', 'ar' => 'الحالة'],
        ]
    ],
    'SE_Requirements' => [
        'name' => 'Requirements',
        'table' => 'se_requirements',
        'icon' => 'List',
        'fields' => [
            'requirement_type' => ['type' => 'enum', 'options' => 'se_req_type_dom', 'label' => 'LBL_REQUIREMENT_TYPE', 'ar' => 'نوع الطلب'],
            'property_type' => ['type' => 'enum', 'options' => 'se_property_type_dom', 'label' => 'LBL_PROPERTY_TYPE', 'ar' => 'نوع العقار'],
            'preferred_area' => ['type' => 'varchar', 'len' => 255, 'label' => 'LBL_PREFERRED_AREA', 'ar' => 'المنطقة المفضلة'],
            'min_budget' => ['type' => 'currency', 'label' => 'LBL_MIN_BUDGET', 'ar' => 'الميزانية كحد أدنى'],
            'max_budget' => ['type' => 'currency', 'label' => 'LBL_MAX_BUDGET', 'ar' => 'الميزانية كحد أقصى'],
            'min_bedrooms' => ['type' => 'int', 'len' => 11, 'label' => 'LBL_MIN_BEDROOMS', 'ar' => 'غرف النوم كحد أدنى'],
        ]
    ],
    'SE_Valuations' => [
        'name' => 'Valuations',
        'table' => 'se_valuations',
        'icon' => 'Chart',
        'fields' => [
            'property_address' => ['type' => 'varchar', 'len' => 255, 'label' => 'LBL_PROPERTY_ADDRESS', 'ar' => 'عنوان العقار'],
            'estimated_value' => ['type' => 'currency', 'label' => 'LBL_ESTIMATED_VALUE', 'ar' => 'القيمة التقديرية'],
            'valuation_status' => ['type' => 'enum', 'options' => 'se_val_status_dom', 'label' => 'LBL_VALUATION_STATUS', 'ar' => 'حالة التقييم'],
            'reason_for_selling' => ['type' => 'varchar', 'len' => 255, 'label' => 'LBL_REASON_FOR_SELLING', 'ar' => 'سبب البيع'],
        ]
    ],
    'SE_MarketReports' => [
        'name' => 'Market Reports',
        'table' => 'se_marketreports',
        'icon' => 'Report',
        'fields' => [
            'city' => ['type' => 'varchar', 'len' => 100, 'label' => 'LBL_CITY', 'ar' => 'المدينة'],
            'area' => ['type' => 'varchar', 'len' => 100, 'label' => 'LBL_AREA', 'ar' => 'المنطقة'],
            'average_price' => ['type' => 'currency', 'label' => 'LBL_AVERAGE_PRICE', 'ar' => 'متوسط السعر'],
            'active_listings' => ['type' => 'int', 'len' => 11, 'label' => 'LBL_ACTIVE_LISTINGS', 'ar' => 'العقارات المعروضة'],
            'market_trend' => ['type' => 'varchar', 'len' => 50, 'label' => 'LBL_MARKET_TREND', 'ar' => 'اتجاه السوق'],
        ]
    ],
    'SE_Viewings' => [
        'name' => 'Viewings',
        'table' => 'se_viewings',
        'icon' => 'Eye',
        'fields' => [
            'viewing_date' => ['type' => 'datetime', 'label' => 'LBL_VIEWING_DATE', 'ar' => 'تاريخ المعاينة'],
            'viewing_type' => ['type' => 'enum', 'options' => 'se_viewing_type_dom', 'label' => 'LBL_VIEWING_TYPE', 'ar' => 'نوع المعاينة'],
            'viewing_status' => ['type' => 'enum', 'options' => 'se_viewing_status_dom', 'label' => 'LBL_VIEWING_STATUS', 'ar' => 'حالة المعاينة'],
            'client_feedback' => ['type' => 'text', 'label' => 'LBL_CLIENT_FEEDBACK', 'ar' => 'تعليق العميل'],
        ]
    ],
    'SE_Offers' => [
        'name' => 'Offers',
        'table' => 'se_offers',
        'icon' => 'Tag',
        'fields' => [
            'offer_amount' => ['type' => 'currency', 'label' => 'LBL_OFFER_AMOUNT', 'ar' => 'قيمة العرض'],
            'offer_status' => ['type' => 'enum', 'options' => 'se_offer_status_dom', 'label' => 'LBL_OFFER_STATUS', 'ar' => 'حالة العرض'],
            'expected_closing_date' => ['type' => 'date', 'label' => 'LBL_EXPECTED_CLOSING_DATE', 'ar' => 'تاريخ الإغلاق المتوقع'],
        ]
    ],
    'SE_Deals' => [
        'name' => 'Deals',
        'table' => 'se_deals',
        'icon' => 'Handshake',
        'fields' => [
            'deal_value' => ['type' => 'currency', 'label' => 'LBL_DEAL_VALUE', 'ar' => 'قيمة الصفقة'],
            'deal_stage' => ['type' => 'enum', 'options' => 'se_deal_stage_dom', 'label' => 'LBL_DEAL_STAGE', 'ar' => 'مرحلة الصفقة'],
            'closing_date' => ['type' => 'date', 'label' => 'LBL_CLOSING_DATE', 'ar' => 'تاريخ الإغلاق'],
        ]
    ],
    'SE_Commissions' => [
        'name' => 'Commissions',
        'table' => 'se_commissions',
        'icon' => 'Money',
        'fields' => [
            'gross_commission' => ['type' => 'currency', 'label' => 'LBL_GROSS_COMMISSION', 'ar' => 'إجمالي العمولة'],
            'company_share' => ['type' => 'currency', 'label' => 'LBL_COMPANY_SHARE', 'ar' => 'حصة الشركة'],
            'agent_share' => ['type' => 'currency', 'label' => 'LBL_AGENT_SHARE', 'ar' => 'حصة الوكيل'],
            'payment_status' => ['type' => 'enum', 'options' => 'se_payment_status_dom', 'label' => 'LBL_PAYMENT_STATUS', 'ar' => 'حالة الدفع'],
        ]
    ],
    'SE_DripPlans' => [
        'name' => 'Drip Plans',
        'table' => 'se_dripplans',
        'icon' => 'Automation',
        'fields' => [
            'trigger_event' => ['type' => 'varchar', 'len' => 100, 'label' => 'LBL_TRIGGER_EVENT', 'ar' => 'حدث البدء'],
            'active' => ['type' => 'bool', 'default' => '1', 'label' => 'LBL_ACTIVE', 'ar' => 'نشط'],
        ]
    ],
    'SE_WebPages' => [
        'name' => 'Web Pages',
        'table' => 'se_webpages',
        'icon' => 'Web',
        'fields' => [
            'page_type' => ['type' => 'enum', 'options' => 'se_page_type_dom', 'label' => 'LBL_PAGE_TYPE', 'ar' => 'نوع الصفحة'],
            'url_slug' => ['type' => 'varchar', 'len' => 255, 'label' => 'LBL_URL_SLUG', 'ar' => 'الرابط'],
            'published' => ['type' => 'bool', 'default' => '1', 'label' => 'LBL_PUBLISHED', 'ar' => 'منشور'],
        ]
    ],
    'SE_LeadForms' => [
        'name' => 'Lead Forms',
        'table' => 'se_leadforms',
        'icon' => 'Form',
        'fields' => [
            'form_type' => ['type' => 'varchar', 'len' => 100, 'label' => 'LBL_FORM_TYPE', 'ar' => 'نوع النموذج'],
            'source_page' => ['type' => 'varchar', 'len' => 255, 'label' => 'LBL_SOURCE_PAGE', 'ar' => 'صفحة المصدر'],
        ]
    ],
    'SE_AssignmentRules' => [
        'name' => 'Assignment Rules',
        'table' => 'se_assignmentrules',
        'icon' => 'Rule',
        'fields' => [
            'rule_type' => ['type' => 'enum', 'options' => 'se_rule_type_dom', 'label' => 'LBL_RULE_TYPE', 'ar' => 'نوع القاعدة'],
            'active' => ['type' => 'bool', 'default' => '1', 'label' => 'LBL_ACTIVE', 'ar' => 'نشط'],
        ]
    ],
];

// Leads Extension Fields
$leadsExtFields = [
    'lead_type_c' => ['type' => 'enum', 'options' => 'se_lead_type_dom', 'label' => 'LBL_LEAD_TYPE', 'ar' => 'نوع العميل المحتمل'],
    'idx_source_page_c' => ['type' => 'varchar', 'len' => 255, 'label' => 'LBL_IDX_SOURCE_PAGE', 'ar' => 'صفحة المصدر IDX'],
    'budget_range_c' => ['type' => 'varchar', 'len' => 100, 'label' => 'LBL_BUDGET_RANGE', 'ar' => 'نطاق الميزانية'],
    'preferred_area_c' => ['type' => 'varchar', 'len' => 100, 'label' => 'LBL_PREFERRED_AREA', 'ar' => 'المنطقة المفضلة'],
    'lead_temperature_c' => ['type' => 'enum', 'options' => 'se_lead_temp_dom', 'label' => 'LBL_LEAD_TEMPERATURE', 'ar' => 'حالة العميل (حرارة)'],
    'lead_score_c' => ['type' => 'int', 'len' => 11, 'label' => 'LBL_LEAD_SCORE', 'ar' => 'نقاط العميل'],
];

// Helper functions for code generation
function renderManifest($packageName) {
    return "<?php
\$manifest = array (
  'acceptable_sugar_versions' => array (
    'exact_matches' => array (),
    'regex_matches' => array ('^7\\\\.', '^8\\\\.'),
  ),
  'acceptable_sugar_flavors' => array ('CE', 'PRO', 'CORP', 'ENT', 'ULT'),
  'readme' => 'README.md',
  'key' => 'SE',
  'author' => 'Badirra CRM',
  'description' => 'SuiteEstate Growth CRM Free - A powerful Real Estate Engine',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => '$packageName',
  'published_date' => '" . date('Y-m-d H:i:s') . "',
  'type' => 'module',
  'version' => '1.0.0',
  'remove_tables' => 'prompt',
);
";
}

function generateBeanClass($moduleName, $tableName) {
    return "<?php
class $moduleName extends Basic {
    public \$new_schema = true;
    public \$module_dir = '$moduleName';
    public \$object_name = '$moduleName';
    public \$table_name = '$tableName';
    public \$importable = true;
    public \$disable_row_level_security = true; // Use ACL
    
    public function __construct() {
        parent::__construct();
    }
}
";
}

function generateVardefs($moduleName, $tableName, $fields) {
    $vardefFields = "
    'fields' => array(
        'name' => array(
            'name' => 'name',
            'vname' => 'LBL_NAME',
            'type' => 'name',
            'link' => true,
            'dbType' => 'varchar',
            'len' => 255,
            'unified_search' => true,
            'full_text_search' => array('boost' => 3),
            'required' => true,
            'importable' => 'required',
            'duplicate_merge' => 'enabled',
            'merge_filter' => 'selected',
        ),";
    
    foreach ($fields as $fieldName => $def) {
        $type = $def['type'];
        $len = isset($def['len']) ? "'len' => '" . $def['len'] . "'," : "";
        $options = isset($def['options']) ? "'options' => '" . $def['options'] . "'," : "";
        $default = isset($def['default']) ? "'default' => '" . $def['default'] . "'," : "";
        
        $vardefFields .= "
        '$fieldName' => array(
            'name' => '$fieldName',
            'vname' => '{$def['label']}',
            'type' => '$type',
            $len
            $options
            $default
            'importable' => 'true',
            'duplicate_merge' => 'enabled',
            'merge_filter' => 'disabled',
        ),";
    }
    
    $vardefFields .= "
    ),";

    return "<?php
\$dictionary['$moduleName'] = array(
    'table' => '$tableName',
    'audited' => true,
    'duplicate_merge' => true,
    $vardefFields
    'indices' => array(
        array('name' => 'idx_{$tableName}_name', 'type' => 'index', 'fields' => array('name')),
    ),
);
VardefManager::createVardef('$moduleName', '$moduleName', array('basic', 'assignable', 'security_groups'));
";
}

// Generate the directories and files
$installdefs = "<?php\n\$installdefs = array(\n  'id' => '$packageName',\n  'beans' => array(\n";
$copyDefs = "  'copy' => array(\n";
$langDefs = "  'language' => array(\n";
$customFields = "  'custom_fields' => array(\n";

$srcDir = $buildDir . '/src';
mkdir($srcDir, 0777, true);
$modulesDir = $srcDir . '/modules';
mkdir($modulesDir, 0777, true);

// Create modules
foreach ($modules as $modName => $def) {
    $modLower = strtolower($modName);
    $dir = $modulesDir . '/' . $modName;
    mkdir($dir, 0777, true);
    
    // Bean
    file_put_contents($dir . '/' . $modName . '.php', generateBeanClass($modName, $def['table']));
    // Vardefs
    file_put_contents($dir . '/vardefs.php', generateVardefs($modName, $def['table'], $def['fields']));
    
    // Language files
    $langDir = $dir . '/language';
    mkdir($langDir, 0777, true);
    
    // EN
    $enStrings = "<?php\n\$mod_strings = array(\n  'LBL_MODULE_NAME' => '{$def['name']}',\n  'LBL_MODULE_TITLE' => '{$def['name']}',\n";
    foreach ($def['fields'] as $k => $f) {
        $enStrings .= "  '{$f['label']}' => '" . ucwords(str_replace('_', ' ', $k)) . "',\n";
    }
    $enStrings .= ");\n";
    file_put_contents($langDir . '/en_us.lang.php', $enStrings);
    
    // AR
    $arStrings = "<?php\n\$mod_strings = array(\n  'LBL_MODULE_NAME' => '{$def['name']}',\n  'LBL_MODULE_TITLE' => '{$def['name']}',\n";
    foreach ($def['fields'] as $k => $f) {
        $arStrings .= "  '{$f['label']}' => '{$f['ar']}',\n";
    }
    $arStrings .= ");\n";
    file_put_contents($langDir . '/ar_AR.lang.php', $arStrings);
    
    // Installdefs appending
    $installdefs .= "    array('module' => '$modName', 'class' => '$modName', 'path' => 'modules/$modName/$modName.php', 'tab' => true, 'is_CRM' => true),\n";
    $copyDefs .= "    array('from' => '<basepath>/src/modules/$modName', 'to' => 'modules/$modName'),\n";
}

// Add Leads extension custom fields
foreach ($leadsExtFields as $fieldName => $def) {
    $type = $def['type'];
    $len = isset($def['len']) ? $def['len'] : 255;
    $options = isset($def['options']) ? "'ext4' => '{$def['options']}'," : "";
    $customFields .= "    array('module' => 'Leads', 'name' => '$fieldName', 'vname' => '{$def['label']}', 'type' => '$type', 'len' => $len, $options 'required' => false),\n";
    
    // Lang defs for Leads
    $langDefs .= "    array('from' => '<basepath>/src/language/Leads/en_us.lang.php', 'to_module' => 'Leads', 'language' => 'en_us'),\n";
    $langDefs .= "    array('from' => '<basepath>/src/language/Leads/ar_AR.lang.php', 'to_module' => 'Leads', 'language' => 'ar_AR'),\n";
}

// Write Leads Lang files
mkdir($srcDir . '/language/Leads', 0777, true);
$enLeads = "<?php\n";
$arLeads = "<?php\n";
foreach ($leadsExtFields as $k => $f) {
    $enLeads .= "\$mod_strings['{$f['label']}'] = '" . ucwords(str_replace('_c', '', str_replace('_', ' ', $k))) . "';\n";
    $arLeads .= "\$mod_strings['{$f['label']}'] = '{$f['ar']}';\n";
}
file_put_contents($srcDir . '/language/Leads/en_us.lang.php', $enLeads);
file_put_contents($srcDir . '/language/Leads/ar_AR.lang.php', $arLeads);

$installdefs .= "  ),\n";
$copyDefs .= "  ),\n";
$langDefs .= "  ),\n";
$customFields .= "  ),\n";
$installdefs .= $copyDefs . $langDefs . $customFields . ");\n";

file_put_contents($buildDir . '/manifest.php', renderManifest($packageName));
file_put_contents($buildDir . '/installdefs.php', $installdefs);

// Write README
$readme = "
# SuiteEstate Growth CRM Free
A powerful real estate package for Badirra CRM.

## Installation
1. Go to Admin -> Module Loader.
2. Upload this ZIP file.
3. Click Install.
4. Go to Admin -> Repair and run 'Quick Repair and Rebuild'.
5. Go to Admin -> Studio to add the new Leads fields to your layouts.
";
file_put_contents($buildDir . '/README.md', $readme);

// Create ZIP
$zipFile = __DIR__ . "/{$packageName}.zip";
if (file_exists($zipFile)) unlink($zipFile);

$zip = new ZipArchive();
if ($zip->open($zipFile, ZipArchive::CREATE | ZipArchive::OVERWRITE) === TRUE) {
    $files = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($buildDir),
        RecursiveIteratorIterator::LEAVES_ONLY
    );

    foreach ($files as $name => $file) {
        if (!$file->isDir()) {
            $filePath = $file->getRealPath();
            $relativePath = substr($filePath, strlen(realpath($buildDir)) + 1);
            $zip->addFile($filePath, $relativePath);
        }
    }
    $zip->close();
    echo "ZIP Package successfully created at $zipFile\n";
} else {
    echo "Failed to create ZIP package.\n";
}

?>
