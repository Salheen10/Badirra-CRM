<?php
/**
 * SuiteEstate Growth CRM Free — Direct Installer
 * Bypasses Module Loader entirely. Run from browser:
 *   http://localhost/index.php?entryPoint=install_suiteestate
 * Or directly: http://localhost/install_suiteestate.php
 */

// Bootstrap SuiteCRM
if (!defined('sugarEntry')) define('sugarEntry', true);

// Try to load SuiteCRM environment
$suiteRoot = dirname(__FILE__);
if (file_exists($suiteRoot . '/include/entryPoint.php')) {
    chdir($suiteRoot);
    require_once('include/entryPoint.php');
}

set_time_limit(300);
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<html><head><title>SuiteEstate Installer</title>
<style>
body { font-family: 'Segoe UI', sans-serif; background: #1a1a2e; color: #e0e0e0; padding: 40px; }
.container { max-width: 900px; margin: 0 auto; }
h1 { color: #00d4ff; border-bottom: 2px solid #00d4ff; padding-bottom: 10px; }
.ok { color: #00ff88; font-weight: bold; }
.err { color: #ff4444; font-weight: bold; }
.warn { color: #ffaa00; }
.step { background: #16213e; border-radius: 8px; padding: 15px; margin: 10px 0; border-left: 4px solid #00d4ff; }
pre { background: #0f3460; padding: 10px; border-radius: 5px; overflow-x: auto; font-size: 12px; }
</style></head><body><div class='container'>";
echo "<h1>🏠 SuiteEstate Growth CRM Free — Direct Installer</h1>";

// ─── Module Definitions ──────────────────────────────────────────────────────
$modules = array(
    'SE_Properties' => array(
        'label' => 'Properties',
        'label_ar' => 'العقارات',
        'table' => 'se_properties',
        'fields' => array(
            // Basic Listing
            'property_code' => array('type'=>'varchar','len'=>100,'vname'=>'LBL_PROPERTY_CODE','label_en'=>'Property Code','label_ar'=>'كود العقار'),
            'listing_title' => array('type'=>'varchar','len'=>255,'vname'=>'LBL_LISTING_TITLE','label_en'=>'Listing Title','label_ar'=>'عنوان الإعلان'),
            'listing_slug' => array('type'=>'varchar','len'=>255,'vname'=>'LBL_LISTING_SLUG','label_en'=>'Listing Slug','label_ar'=>'الرابط المختصر'),
            'property_type' => array('type'=>'enum','options'=>'se_property_type_dom','vname'=>'LBL_PROPERTY_TYPE','label_en'=>'Property Type','label_ar'=>'نوع العقار'),
            'property_subtype' => array('type'=>'enum','options'=>'se_property_subtype_dom','vname'=>'LBL_PROPERTY_SUBTYPE','label_en'=>'Property Subtype','label_ar'=>'النوع الفرعي'),
            'listing_type' => array('type'=>'enum','options'=>'se_listing_type_dom','vname'=>'LBL_LISTING_TYPE','label_en'=>'Listing Type','label_ar'=>'نوع الإعلان'),
            'listing_status' => array('type'=>'enum','options'=>'se_listing_status_dom','vname'=>'LBL_LISTING_STATUS','label_en'=>'Listing Status','label_ar'=>'حالة الإعلان','default'=>'Draft'),
            'internal_status' => array('type'=>'enum','options'=>'se_internal_status_dom','vname'=>'LBL_INTERNAL_STATUS','label_en'=>'Internal Status','label_ar'=>'الحالة الداخلية'),
            'public_visibility' => array('type'=>'bool','vname'=>'LBL_PUBLIC_VISIBILITY','label_en'=>'Public Visibility','label_ar'=>'مرئي للعامة','default'=>1),
            'featured_listing' => array('type'=>'bool','vname'=>'LBL_FEATURED_LISTING','label_en'=>'Featured','label_ar'=>'إعلان مميز','default'=>0),
            'exclusive_listing' => array('type'=>'bool','vname'=>'LBL_EXCLUSIVE_LISTING','label_en'=>'Exclusive','label_ar'=>'إعلان حصري','default'=>0),
            'hot_listing' => array('type'=>'bool','vname'=>'LBL_HOT_LISTING','label_en'=>'Hot Listing','label_ar'=>'إعلان ساخن','default'=>0),
            'price_reduced' => array('type'=>'bool','vname'=>'LBL_PRICE_REDUCED','label_en'=>'Price Reduced','label_ar'=>'تخفيض سعري','default'=>0),
            'public_remarks' => array('type'=>'text','vname'=>'LBL_PUBLIC_REMARKS','label_en'=>'Public Remarks','label_ar'=>'ملاحظات عامة'),
            'private_remarks' => array('type'=>'text','vname'=>'LBL_PRIVATE_REMARKS','label_en'=>'Private Remarks','label_ar'=>'ملاحظات خاصة'),
            'agent_notes' => array('type'=>'text','vname'=>'LBL_AGENT_NOTES','label_en'=>'Agent Notes','label_ar'=>'ملاحظات الوكيل'),
            // Location
            'country' => array('type'=>'varchar','len'=>100,'vname'=>'LBL_COUNTRY','label_en'=>'Country','label_ar'=>'الدولة'),
            'state_region' => array('type'=>'varchar','len'=>100,'vname'=>'LBL_STATE_REGION','label_en'=>'State / Region','label_ar'=>'المحافظة'),
            'city' => array('type'=>'varchar','len'=>100,'vname'=>'LBL_CITY','label_en'=>'City','label_ar'=>'المدينة'),
            'district_area' => array('type'=>'varchar','len'=>100,'vname'=>'LBL_DISTRICT_AREA','label_en'=>'District / Area','label_ar'=>'الحي / المنطقة'),
            'community' => array('type'=>'varchar','len'=>100,'vname'=>'LBL_COMMUNITY','label_en'=>'Community','label_ar'=>'المجمع السكني'),
            'sub_community' => array('type'=>'varchar','len'=>100,'vname'=>'LBL_SUB_COMMUNITY','label_en'=>'Sub Community','label_ar'=>'المجمع الفرعي'),
            'street_name' => array('type'=>'varchar','len'=>150,'vname'=>'LBL_STREET_NAME','label_en'=>'Street Name','label_ar'=>'اسم الشارع'),
            'building_name' => array('type'=>'varchar','len'=>150,'vname'=>'LBL_BUILDING_NAME','label_en'=>'Building Name','label_ar'=>'اسم المبنى'),
            'floor_number' => array('type'=>'varchar','len'=>20,'vname'=>'LBL_FLOOR_NUMBER','label_en'=>'Floor Number','label_ar'=>'رقم الطابق'),
            'unit_number' => array('type'=>'varchar','len'=>50,'vname'=>'LBL_UNIT_NUMBER','label_en'=>'Unit Number','label_ar'=>'رقم الوحدة'),
            'postal_code' => array('type'=>'varchar','len'=>20,'vname'=>'LBL_POSTAL_CODE','label_en'=>'Postal Code','label_ar'=>'الرمز البريدي'),
            'full_address' => array('type'=>'varchar','len'=>500,'vname'=>'LBL_FULL_ADDRESS','label_en'=>'Full Address','label_ar'=>'العنوان بالكامل'),
            'latitude' => array('type'=>'varchar','len'=>50,'vname'=>'LBL_LATITUDE','label_en'=>'Latitude','label_ar'=>'خط العرض'),
            'longitude' => array('type'=>'varchar','len'=>50,'vname'=>'LBL_LONGITUDE','label_en'=>'Longitude','label_ar'=>'خط الطول'),
            'nearby_landmarks' => array('type'=>'text','vname'=>'LBL_NEARBY_LANDMARKS','label_en'=>'Nearby Landmarks','label_ar'=>'معالم قريبة'),
            // Specifications
            'bedrooms' => array('type'=>'int','len'=>11,'vname'=>'LBL_BEDROOMS','label_en'=>'Bedrooms','label_ar'=>'غرف النوم'),
            'bathrooms' => array('type'=>'int','len'=>11,'vname'=>'LBL_BATHROOMS','label_en'=>'Bathrooms','label_ar'=>'الحمامات'),
            'half_bathrooms' => array('type'=>'int','len'=>11,'vname'=>'LBL_HALF_BATHROOMS','label_en'=>'Half Bathrooms','label_ar'=>'نصف حمام'),
            'parking_spaces' => array('type'=>'int','len'=>11,'vname'=>'LBL_PARKING_SPACES','label_en'=>'Parking Spaces','label_ar'=>'مواقف السيارات'),
            'built_up_area' => array('type'=>'decimal','len'=>'12,2','vname'=>'LBL_BUILT_UP_AREA','label_en'=>'Built-up Area','label_ar'=>'مساحة البناء'),
            'plot_area' => array('type'=>'decimal','len'=>'12,2','vname'=>'LBL_PLOT_AREA','label_en'=>'Plot Area','label_ar'=>'مساحة الأرض'),
            'living_area' => array('type'=>'decimal','len'=>'12,2','vname'=>'LBL_LIVING_AREA','label_en'=>'Living Area','label_ar'=>'مساحة المعيشة'),
            'size_unit' => array('type'=>'enum','options'=>'se_size_unit_dom','vname'=>'LBL_SIZE_UNIT','label_en'=>'Size Unit','label_ar'=>'وحدة القياس','default'=>'sqm'),
            'year_built' => array('type'=>'varchar','len'=>4,'vname'=>'LBL_YEAR_BUILT','label_en'=>'Year Built','label_ar'=>'سنة البناء'),
            'total_floors' => array('type'=>'int','len'=>11,'vname'=>'LBL_TOTAL_FLOORS','label_en'=>'Total Floors','label_ar'=>'عدد الطوابق'),
            'furnishing_status' => array('type'=>'enum','options'=>'se_furnishing_dom','vname'=>'LBL_FURNISHING_STATUS','label_en'=>'Furnishing','label_ar'=>'التأثيث'),
            'completion_status' => array('type'=>'enum','options'=>'se_completion_dom','vname'=>'LBL_COMPLETION_STATUS','label_en'=>'Completion Status','label_ar'=>'حالة الإنجاز'),
            'property_view' => array('type'=>'varchar','len'=>100,'vname'=>'LBL_PROPERTY_VIEW','label_en'=>'Property View','label_ar'=>'إطلالة العقار'),
            'amenities' => array('type'=>'text','vname'=>'LBL_AMENITIES','label_en'=>'Amenities','label_ar'=>'المرافق'),
            'pets_allowed' => array('type'=>'bool','vname'=>'LBL_PETS_ALLOWED','label_en'=>'Pets Allowed','label_ar'=>'حيوانات أليفة مسموحة','default'=>0),
            'pool' => array('type'=>'bool','vname'=>'LBL_POOL','label_en'=>'Pool','label_ar'=>'مسبح','default'=>0),
            'gym' => array('type'=>'bool','vname'=>'LBL_GYM','label_en'=>'Gym','label_ar'=>'صالة رياضية','default'=>0),
            'elevator' => array('type'=>'bool','vname'=>'LBL_ELEVATOR','label_en'=>'Elevator','label_ar'=>'مصعد','default'=>0),
            'security' => array('type'=>'bool','vname'=>'LBL_SECURITY','label_en'=>'Security','label_ar'=>'أمن وحراسة','default'=>0),
            // Pricing
            'sale_price' => array('type'=>'currency','vname'=>'LBL_SALE_PRICE','label_en'=>'Sale Price','label_ar'=>'سعر البيع'),
            'rent_price' => array('type'=>'currency','vname'=>'LBL_RENT_PRICE','label_en'=>'Rent Price','label_ar'=>'سعر الإيجار'),
            'original_price' => array('type'=>'currency','vname'=>'LBL_ORIGINAL_PRICE','label_en'=>'Original Price','label_ar'=>'السعر الأصلي'),
            'price_per_sqft' => array('type'=>'currency','vname'=>'LBL_PRICE_PER_SQFT','label_en'=>'Price / Sqft','label_ar'=>'السعر للقدم'),
            'price_per_sqm' => array('type'=>'currency','vname'=>'LBL_PRICE_PER_SQM','label_en'=>'Price / Sqm','label_ar'=>'السعر للمتر'),
            'service_charges' => array('type'=>'currency','vname'=>'LBL_SERVICE_CHARGES','label_en'=>'Service Charges','label_ar'=>'رسوم الخدمة'),
            'commission_pct' => array('type'=>'decimal','len'=>'5,2','vname'=>'LBL_COMMISSION_PCT','label_en'=>'Commission %','label_ar'=>'نسبة العمولة'),
            'is_negotiable' => array('type'=>'bool','vname'=>'LBL_IS_NEGOTIABLE','label_en'=>'Negotiable','label_ar'=>'قابل للتفاوض','default'=>1),
            'payment_plan' => array('type'=>'text','vname'=>'LBL_PAYMENT_PLAN','label_en'=>'Payment Plan','label_ar'=>'خطة الدفع'),
            // Ownership
            'ownership_type' => array('type'=>'enum','options'=>'se_ownership_type_dom','vname'=>'LBL_OWNERSHIP_TYPE','label_en'=>'Ownership Type','label_ar'=>'نوع الملكية'),
            'title_deed_number' => array('type'=>'varchar','len'=>100,'vname'=>'LBL_TITLE_DEED','label_en'=>'Title Deed Number','label_ar'=>'رقم صك الملكية'),
            'developer_name' => array('type'=>'varchar','len'=>150,'vname'=>'LBL_DEVELOPER_NAME','label_en'=>'Developer','label_ar'=>'المطور العقاري'),
            'project_name' => array('type'=>'varchar','len'=>150,'vname'=>'LBL_PROJECT_NAME','label_en'=>'Project Name','label_ar'=>'اسم المشروع'),
            // MLS / IDX
            'is_mls_listing' => array('type'=>'bool','vname'=>'LBL_IS_MLS','label_en'=>'MLS Listing','label_ar'=>'إعلان MLS','default'=>0),
            'mls_listing_id' => array('type'=>'varchar','len'=>100,'vname'=>'LBL_MLS_LISTING_ID','label_en'=>'MLS Listing ID','label_ar'=>'رقم إعلان MLS'),
            'mls_number' => array('type'=>'varchar','len'=>50,'vname'=>'LBL_MLS_NUMBER','label_en'=>'MLS Number','label_ar'=>'رقم MLS'),
            'mls_source' => array('type'=>'varchar','len'=>100,'vname'=>'LBL_MLS_SOURCE','label_en'=>'MLS Source','label_ar'=>'مصدر MLS'),
            'mls_board' => array('type'=>'varchar','len'=>100,'vname'=>'LBL_MLS_BOARD','label_en'=>'MLS Board','label_ar'=>'هيئة MLS'),
            'mls_standard_status' => array('type'=>'varchar','len'=>50,'vname'=>'LBL_MLS_STD_STATUS','label_en'=>'MLS Standard Status','label_ar'=>'حالة MLS القياسية'),
            'mls_list_price' => array('type'=>'currency','vname'=>'LBL_MLS_LIST_PRICE','label_en'=>'MLS List Price','label_ar'=>'سعر إعلان MLS'),
            'mls_close_price' => array('type'=>'currency','vname'=>'LBL_MLS_CLOSE_PRICE','label_en'=>'MLS Close Price','label_ar'=>'سعر إغلاق MLS'),
            'mls_listing_date' => array('type'=>'date','vname'=>'LBL_MLS_LISTING_DATE','label_en'=>'MLS Listing Date','label_ar'=>'تاريخ إعلان MLS'),
            'mls_expiration_date' => array('type'=>'date','vname'=>'LBL_MLS_EXP_DATE','label_en'=>'MLS Expiration Date','label_ar'=>'تاريخ انتهاء MLS'),
            'mls_days_on_market' => array('type'=>'int','len'=>11,'vname'=>'LBL_MLS_DOM','label_en'=>'Days On Market','label_ar'=>'أيام في السوق'),
            'mls_listing_agent' => array('type'=>'varchar','len'=>150,'vname'=>'LBL_MLS_AGENT','label_en'=>'MLS Listing Agent','label_ar'=>'وكيل إعلان MLS'),
            'mls_listing_office' => array('type'=>'varchar','len'=>150,'vname'=>'LBL_MLS_OFFICE','label_en'=>'MLS Listing Office','label_ar'=>'مكتب إعلان MLS'),
            'mls_feed_type' => array('type'=>'enum','options'=>'se_mls_feed_type_dom','vname'=>'LBL_MLS_FEED_TYPE','label_en'=>'MLS Feed Type','label_ar'=>'نوع تغذية MLS'),
            'mls_sync_status' => array('type'=>'enum','options'=>'se_mls_sync_status_dom','vname'=>'LBL_MLS_SYNC_STATUS','label_en'=>'MLS Sync Status','label_ar'=>'حالة مزامنة MLS','default'=>'Not Synced'),
            'mls_last_sync' => array('type'=>'datetime','vname'=>'LBL_MLS_LAST_SYNC','label_en'=>'Last MLS Sync','label_ar'=>'آخر مزامنة MLS'),
            'mls_data_lock' => array('type'=>'bool','vname'=>'LBL_MLS_DATA_LOCK','label_en'=>'MLS Data Lock','label_ar'=>'قفل بيانات MLS','default'=>0),
            'idx_publish_allowed' => array('type'=>'bool','vname'=>'LBL_IDX_PUBLISH','label_en'=>'IDX Publish Allowed','label_ar'=>'مسموح بالنشر في IDX','default'=>1),
            'idx_compliance_notes' => array('type'=>'text','vname'=>'LBL_IDX_NOTES','label_en'=>'IDX Compliance Notes','label_ar'=>'ملاحظات امتثال IDX'),
            // Media
            'main_image' => array('type'=>'varchar','len'=>255,'vname'=>'LBL_MAIN_IMAGE','label_en'=>'Main Image','label_ar'=>'الصورة الرئيسية'),
            'virtual_tour_url' => array('type'=>'url','len'=>255,'vname'=>'LBL_VIRTUAL_TOUR','label_en'=>'Virtual Tour URL','label_ar'=>'رابط الجولة الافتراضية'),
            'video_url' => array('type'=>'url','len'=>255,'vname'=>'LBL_VIDEO_URL','label_en'=>'Video URL','label_ar'=>'رابط الفيديو'),
            'seo_title' => array('type'=>'varchar','len'=>255,'vname'=>'LBL_SEO_TITLE','label_en'=>'SEO Title','label_ar'=>'عنوان SEO'),
            'seo_description' => array('type'=>'text','vname'=>'LBL_SEO_DESC','label_en'=>'SEO Description','label_ar'=>'وصف SEO'),
        ),
    ),
    'SE_LeadFeed' => array(
        'label' => 'Lead Feed',
        'label_ar' => 'تغذية العملاء',
        'table' => 'se_leadfeed',
        'fields' => array(
            'score' => array('type'=>'int','len'=>11,'vname'=>'LBL_SCORE','label_en'=>'Score','label_ar'=>'النقاط'),
            'priority' => array('type'=>'enum','options'=>'se_priority_dom','vname'=>'LBL_PRIORITY','label_en'=>'Priority','label_ar'=>'الأولوية'),
            'trigger_reason' => array('type'=>'varchar','len'=>255,'vname'=>'LBL_TRIGGER_REASON','label_en'=>'Trigger Reason','label_ar'=>'سبب التنبيه'),
            'suggested_action' => array('type'=>'varchar','len'=>255,'vname'=>'LBL_SUGGESTED_ACTION','label_en'=>'Suggested Action','label_ar'=>'الإجراء المقترح'),
            'last_activity' => array('type'=>'datetime','vname'=>'LBL_LAST_ACTIVITY','label_en'=>'Last Activity','label_ar'=>'آخر نشاط'),
            'due_date' => array('type'=>'date','vname'=>'LBL_DUE_DATE','label_en'=>'Due Date','label_ar'=>'تاريخ الاستحقاق'),
            'status' => array('type'=>'enum','options'=>'se_feed_status_dom','vname'=>'LBL_STATUS','label_en'=>'Status','label_ar'=>'الحالة','default'=>'New'),
            'snooze_until' => array('type'=>'date','vname'=>'LBL_SNOOZE_UNTIL','label_en'=>'Snooze Until','label_ar'=>'تأجيل حتى'),
        ),
    ),
    'SE_Requirements' => array(
        'label' => 'Buyer Requirements',
        'label_ar' => 'متطلبات المشتري',
        'table' => 'se_requirements',
        'fields' => array(
            'requirement_type' => array('type'=>'enum','options'=>'se_req_type_dom','vname'=>'LBL_REQ_TYPE','label_en'=>'Requirement Type','label_ar'=>'نوع الطلب'),
            'property_type' => array('type'=>'enum','options'=>'se_property_type_dom','vname'=>'LBL_PROPERTY_TYPE','label_en'=>'Property Type','label_ar'=>'نوع العقار'),
            'preferred_country' => array('type'=>'varchar','len'=>100,'vname'=>'LBL_PREF_COUNTRY','label_en'=>'Preferred Country','label_ar'=>'الدولة المفضلة'),
            'preferred_city' => array('type'=>'varchar','len'=>100,'vname'=>'LBL_PREF_CITY','label_en'=>'Preferred City','label_ar'=>'المدينة المفضلة'),
            'preferred_area' => array('type'=>'varchar','len'=>100,'vname'=>'LBL_PREF_AREA','label_en'=>'Preferred Area','label_ar'=>'المنطقة المفضلة'),
            'min_budget' => array('type'=>'currency','vname'=>'LBL_MIN_BUDGET','label_en'=>'Min Budget','label_ar'=>'الحد الأدنى للميزانية'),
            'max_budget' => array('type'=>'currency','vname'=>'LBL_MAX_BUDGET','label_en'=>'Max Budget','label_ar'=>'الحد الأقصى للميزانية'),
            'min_bedrooms' => array('type'=>'int','len'=>11,'vname'=>'LBL_MIN_BEDS','label_en'=>'Min Bedrooms','label_ar'=>'غرف النوم كحد أدنى'),
            'max_bedrooms' => array('type'=>'int','len'=>11,'vname'=>'LBL_MAX_BEDS','label_en'=>'Max Bedrooms','label_ar'=>'غرف النوم كحد أقصى'),
            'min_size' => array('type'=>'decimal','len'=>'12,2','vname'=>'LBL_MIN_SIZE','label_en'=>'Min Size','label_ar'=>'المساحة كحد أدنى'),
            'max_size' => array('type'=>'decimal','len'=>'12,2','vname'=>'LBL_MAX_SIZE','label_en'=>'Max Size','label_ar'=>'المساحة كحد أقصى'),
            'move_in_date' => array('type'=>'date','vname'=>'LBL_MOVE_IN_DATE','label_en'=>'Move-in Date','label_ar'=>'تاريخ الانتقال'),
            'financing_status' => array('type'=>'enum','options'=>'se_financing_dom','vname'=>'LBL_FINANCING','label_en'=>'Financing Status','label_ar'=>'حالة التمويل'),
            'pre_approved' => array('type'=>'bool','vname'=>'LBL_PRE_APPROVED','label_en'=>'Pre-Approved','label_ar'=>'موافقة مبدئية','default'=>0),
            'approved_amount' => array('type'=>'currency','vname'=>'LBL_APPROVED_AMT','label_en'=>'Approved Amount','label_ar'=>'المبلغ المعتمد'),
            'must_have_features' => array('type'=>'text','vname'=>'LBL_MUST_HAVE','label_en'=>'Must-Have Features','label_ar'=>'ميزات أساسية'),
            'requirement_status' => array('type'=>'enum','options'=>'se_req_status_dom','vname'=>'LBL_REQ_STATUS','label_en'=>'Status','label_ar'=>'الحالة','default'=>'Active'),
            'match_score' => array('type'=>'int','len'=>11,'vname'=>'LBL_MATCH_SCORE','label_en'=>'Match Score','label_ar'=>'نسبة التطابق'),
        ),
    ),
    'SE_Valuations' => array(
        'label' => 'Valuations',
        'label_ar' => 'تقييم العقارات',
        'table' => 'se_valuations',
        'fields' => array(
            'property_address' => array('type'=>'varchar','len'=>500,'vname'=>'LBL_PROP_ADDRESS','label_en'=>'Property Address','label_ar'=>'عنوان العقار'),
            'property_type' => array('type'=>'enum','options'=>'se_property_type_dom','vname'=>'LBL_PROPERTY_TYPE','label_en'=>'Property Type','label_ar'=>'نوع العقار'),
            'bedrooms' => array('type'=>'int','len'=>11,'vname'=>'LBL_BEDROOMS','label_en'=>'Bedrooms','label_ar'=>'غرف النوم'),
            'bathrooms' => array('type'=>'int','len'=>11,'vname'=>'LBL_BATHROOMS','label_en'=>'Bathrooms','label_ar'=>'الحمامات'),
            'area_size' => array('type'=>'decimal','len'=>'12,2','vname'=>'LBL_AREA_SIZE','label_en'=>'Area Size','label_ar'=>'المساحة'),
            'year_built' => array('type'=>'varchar','len'=>4,'vname'=>'LBL_YEAR_BUILT','label_en'=>'Year Built','label_ar'=>'سنة البناء'),
            'estimated_value' => array('type'=>'currency','vname'=>'LBL_EST_VALUE','label_en'=>'Estimated Value','label_ar'=>'القيمة التقديرية'),
            'low_estimate' => array('type'=>'currency','vname'=>'LBL_LOW_EST','label_en'=>'Low Estimate','label_ar'=>'أقل تقدير'),
            'high_estimate' => array('type'=>'currency','vname'=>'LBL_HIGH_EST','label_en'=>'High Estimate','label_ar'=>'أعلى تقدير'),
            'valuation_source' => array('type'=>'varchar','len'=>100,'vname'=>'LBL_VAL_SOURCE','label_en'=>'Valuation Source','label_ar'=>'مصدر التقييم'),
            'seller_timeline' => array('type'=>'varchar','len'=>100,'vname'=>'LBL_SELLER_TIMELINE','label_en'=>'Seller Timeline','label_ar'=>'الجدول الزمني للبائع'),
            'reason_for_selling' => array('type'=>'varchar','len'=>255,'vname'=>'LBL_REASON_SELLING','label_en'=>'Reason for Selling','label_ar'=>'سبب البيع'),
            'desired_price' => array('type'=>'currency','vname'=>'LBL_DESIRED_PRICE','label_en'=>'Desired Selling Price','label_ar'=>'السعر المطلوب'),
            'valuation_status' => array('type'=>'enum','options'=>'se_val_status_dom','vname'=>'LBL_VAL_STATUS','label_en'=>'Valuation Status','label_ar'=>'حالة التقييم','default'=>'New'),
            'followup_date' => array('type'=>'date','vname'=>'LBL_FOLLOWUP_DATE','label_en'=>'Follow-up Date','label_ar'=>'تاريخ المتابعة'),
            'valuation_disclaimer' => array('type'=>'text','vname'=>'LBL_DISCLAIMER','label_en'=>'Disclaimer','label_ar'=>'إخلاء المسؤولية'),
            'confidence_level' => array('type'=>'enum','options'=>'se_confidence_dom','vname'=>'LBL_CONFIDENCE','label_en'=>'Confidence Level','label_ar'=>'مستوى الثقة'),
        ),
    ),
    'SE_MarketReports' => array(
        'label' => 'Market Reports',
        'label_ar' => 'تقارير السوق',
        'table' => 'se_marketreports',
        'fields' => array(
            'country' => array('type'=>'varchar','len'=>100,'vname'=>'LBL_COUNTRY','label_en'=>'Country','label_ar'=>'الدولة'),
            'city' => array('type'=>'varchar','len'=>100,'vname'=>'LBL_CITY','label_en'=>'City','label_ar'=>'المدينة'),
            'area' => array('type'=>'varchar','len'=>100,'vname'=>'LBL_AREA','label_en'=>'Area','label_ar'=>'المنطقة'),
            'property_type' => array('type'=>'enum','options'=>'se_property_type_dom','vname'=>'LBL_PROPERTY_TYPE','label_en'=>'Property Type','label_ar'=>'نوع العقار'),
            'report_period' => array('type'=>'varchar','len'=>50,'vname'=>'LBL_REPORT_PERIOD','label_en'=>'Report Period','label_ar'=>'فترة التقرير'),
            'average_price' => array('type'=>'currency','vname'=>'LBL_AVG_PRICE','label_en'=>'Average Price','label_ar'=>'متوسط السعر'),
            'median_price' => array('type'=>'currency','vname'=>'LBL_MEDIAN_PRICE','label_en'=>'Median Price','label_ar'=>'السعر الوسطي'),
            'avg_price_sqft' => array('type'=>'currency','vname'=>'LBL_AVG_SQFT','label_en'=>'Avg Price/Sqft','label_ar'=>'متوسط سعر القدم'),
            'avg_days_on_market' => array('type'=>'int','len'=>11,'vname'=>'LBL_AVG_DOM','label_en'=>'Avg Days on Market','label_ar'=>'متوسط أيام العرض'),
            'active_listings' => array('type'=>'int','len'=>11,'vname'=>'LBL_ACTIVE_LISTINGS','label_en'=>'Active Listings','label_ar'=>'عقارات معروضة'),
            'sold_listings' => array('type'=>'int','len'=>11,'vname'=>'LBL_SOLD_LISTINGS','label_en'=>'Sold Listings','label_ar'=>'عقارات مباعة'),
            'market_trend' => array('type'=>'enum','options'=>'se_market_trend_dom','vname'=>'LBL_MARKET_TREND','label_en'=>'Market Trend','label_ar'=>'اتجاه السوق'),
            'report_summary' => array('type'=>'text','vname'=>'LBL_REPORT_SUMMARY','label_en'=>'Report Summary','label_ar'=>'ملخص التقرير'),
            'report_status' => array('type'=>'enum','options'=>'se_report_status_dom','vname'=>'LBL_REPORT_STATUS','label_en'=>'Status','label_ar'=>'الحالة','default'=>'Draft'),
        ),
    ),
    'SE_SavedSearches' => array(
        'label' => 'Saved Searches',
        'label_ar' => 'البحث المحفوظ',
        'table' => 'se_savedsearches',
        'fields' => array(
            'search_type' => array('type'=>'varchar','len'=>50,'vname'=>'LBL_SEARCH_TYPE','label_en'=>'Search Type','label_ar'=>'نوع البحث'),
            'property_type' => array('type'=>'enum','options'=>'se_property_type_dom','vname'=>'LBL_PROPERTY_TYPE','label_en'=>'Property Type','label_ar'=>'نوع العقار'),
            'city' => array('type'=>'varchar','len'=>100,'vname'=>'LBL_CITY','label_en'=>'City','label_ar'=>'المدينة'),
            'area' => array('type'=>'varchar','len'=>100,'vname'=>'LBL_AREA','label_en'=>'Area','label_ar'=>'المنطقة'),
            'min_price' => array('type'=>'currency','vname'=>'LBL_MIN_PRICE','label_en'=>'Min Price','label_ar'=>'أقل سعر'),
            'max_price' => array('type'=>'currency','vname'=>'LBL_MAX_PRICE','label_en'=>'Max Price','label_ar'=>'أعلى سعر'),
            'bedrooms' => array('type'=>'int','len'=>11,'vname'=>'LBL_BEDROOMS','label_en'=>'Bedrooms','label_ar'=>'غرف النوم'),
            'alert_frequency' => array('type'=>'enum','options'=>'se_alert_freq_dom','vname'=>'LBL_ALERT_FREQ','label_en'=>'Alert Frequency','label_ar'=>'تكرار التنبيه','default'=>'Daily'),
            'last_alert_sent' => array('type'=>'datetime','vname'=>'LBL_LAST_ALERT','label_en'=>'Last Alert Sent','label_ar'=>'آخر تنبيه'),
            'alert_status' => array('type'=>'enum','options'=>'se_alert_status_dom','vname'=>'LBL_ALERT_STATUS','label_en'=>'Alert Status','label_ar'=>'حالة التنبيه','default'=>'Active'),
            'matching_count' => array('type'=>'int','len'=>11,'vname'=>'LBL_MATCHING_COUNT','label_en'=>'Matching Listings','label_ar'=>'عقارات مطابقة'),
        ),
    ),
    'SE_Viewings' => array(
        'label' => 'Viewings',
        'label_ar' => 'المعاينات',
        'table' => 'se_viewings',
        'fields' => array(
            'viewing_date' => array('type'=>'datetime','vname'=>'LBL_VIEWING_DATE','label_en'=>'Viewing Date & Time','label_ar'=>'تاريخ المعاينة'),
            'viewing_type' => array('type'=>'enum','options'=>'se_viewing_type_dom','vname'=>'LBL_VIEWING_TYPE','label_en'=>'Viewing Type','label_ar'=>'نوع المعاينة'),
            'viewing_status' => array('type'=>'enum','options'=>'se_viewing_status_dom','vname'=>'LBL_VIEWING_STATUS','label_en'=>'Status','label_ar'=>'الحالة','default'=>'Requested'),
            'client_feedback' => array('type'=>'text','vname'=>'LBL_CLIENT_FEEDBACK','label_en'=>'Client Feedback','label_ar'=>'تعليق العميل'),
            'agent_notes' => array('type'=>'text','vname'=>'LBL_AGENT_NOTES','label_en'=>'Agent Notes','label_ar'=>'ملاحظات الوكيل'),
            'owner_confirmation' => array('type'=>'enum','options'=>'se_confirmation_dom','vname'=>'LBL_OWNER_CONFIRM','label_en'=>'Owner Confirmation','label_ar'=>'تأكيد المالك'),
            'followup_required' => array('type'=>'bool','vname'=>'LBL_FOLLOWUP_REQ','label_en'=>'Follow-up Required','label_ar'=>'متابعة مطلوبة','default'=>1),
            'followup_date' => array('type'=>'date','vname'=>'LBL_FOLLOWUP_DATE','label_en'=>'Follow-up Date','label_ar'=>'تاريخ المتابعة'),
            'outcome' => array('type'=>'varchar','len'=>100,'vname'=>'LBL_OUTCOME','label_en'=>'Outcome','label_ar'=>'النتيجة'),
            'virtual_link' => array('type'=>'url','len'=>255,'vname'=>'LBL_VIRTUAL_LINK','label_en'=>'Virtual Meeting Link','label_ar'=>'رابط الاجتماع'),
        ),
    ),
    'SE_Offers' => array(
        'label' => 'Offers',
        'label_ar' => 'العروض',
        'table' => 'se_offers',
        'fields' => array(
            'offer_type' => array('type'=>'enum','options'=>'se_offer_type_dom','vname'=>'LBL_OFFER_TYPE','label_en'=>'Offer Type','label_ar'=>'نوع العرض'),
            'offer_amount' => array('type'=>'currency','vname'=>'LBL_OFFER_AMOUNT','label_en'=>'Offer Amount','label_ar'=>'قيمة العرض'),
            'deposit_amount' => array('type'=>'currency','vname'=>'LBL_DEPOSIT','label_en'=>'Deposit','label_ar'=>'العربون'),
            'expected_closing' => array('type'=>'date','vname'=>'LBL_EXP_CLOSING','label_en'=>'Expected Closing','label_ar'=>'تاريخ الإغلاق المتوقع'),
            'offer_status' => array('type'=>'enum','options'=>'se_offer_status_dom','vname'=>'LBL_OFFER_STATUS','label_en'=>'Status','label_ar'=>'الحالة','default'=>'New'),
            'counter_offer' => array('type'=>'currency','vname'=>'LBL_COUNTER_OFFER','label_en'=>'Counter Offer','label_ar'=>'العرض المضاد'),
            'final_amount' => array('type'=>'currency','vname'=>'LBL_FINAL_AMOUNT','label_en'=>'Final Agreed Amount','label_ar'=>'المبلغ النهائي'),
            'rejection_reason' => array('type'=>'varchar','len'=>255,'vname'=>'LBL_REJECTION','label_en'=>'Rejection Reason','label_ar'=>'سبب الرفض'),
            'negotiation_notes' => array('type'=>'text','vname'=>'LBL_NEG_NOTES','label_en'=>'Negotiation Notes','label_ar'=>'ملاحظات التفاوض'),
        ),
    ),
    'SE_Deals' => array(
        'label' => 'Deals',
        'label_ar' => 'الصفقات',
        'table' => 'se_deals',
        'fields' => array(
            'deal_type' => array('type'=>'enum','options'=>'se_deal_type_dom','vname'=>'LBL_DEAL_TYPE','label_en'=>'Deal Type','label_ar'=>'نوع الصفقة'),
            'deal_value' => array('type'=>'currency','vname'=>'LBL_DEAL_VALUE','label_en'=>'Deal Value','label_ar'=>'قيمة الصفقة'),
            'contract_date' => array('type'=>'date','vname'=>'LBL_CONTRACT_DATE','label_en'=>'Contract Date','label_ar'=>'تاريخ العقد'),
            'closing_date' => array('type'=>'date','vname'=>'LBL_CLOSING_DATE','label_en'=>'Closing Date','label_ar'=>'تاريخ الإغلاق'),
            'deal_stage' => array('type'=>'enum','options'=>'se_deal_stage_dom','vname'=>'LBL_DEAL_STAGE','label_en'=>'Deal Stage','label_ar'=>'مرحلة الصفقة','default'=>'New'),
            'payment_status' => array('type'=>'enum','options'=>'se_payment_status_dom','vname'=>'LBL_PAY_STATUS','label_en'=>'Payment Status','label_ar'=>'حالة الدفع'),
            'legal_notes' => array('type'=>'text','vname'=>'LBL_LEGAL_NOTES','label_en'=>'Legal Notes','label_ar'=>'ملاحظات قانونية'),
            'finance_notes' => array('type'=>'text','vname'=>'LBL_FINANCE_NOTES','label_en'=>'Finance Notes','label_ar'=>'ملاحظات مالية'),
        ),
    ),
    'SE_Commissions' => array(
        'label' => 'Commissions',
        'label_ar' => 'العمولات',
        'table' => 'se_commissions',
        'fields' => array(
            'commission_type' => array('type'=>'enum','options'=>'se_commission_type_dom','vname'=>'LBL_COMM_TYPE','label_en'=>'Commission Type','label_ar'=>'نوع العمولة'),
            'gross_commission' => array('type'=>'currency','vname'=>'LBL_GROSS_COMM','label_en'=>'Gross Commission','label_ar'=>'إجمالي العمولة'),
            'company_share' => array('type'=>'currency','vname'=>'LBL_COMPANY_SHARE','label_en'=>'Company Share','label_ar'=>'حصة الشركة'),
            'agent_share' => array('type'=>'currency','vname'=>'LBL_AGENT_SHARE','label_en'=>'Agent Share','label_ar'=>'حصة الوكيل'),
            'team_leader_share' => array('type'=>'currency','vname'=>'LBL_TL_SHARE','label_en'=>'Team Leader Share','label_ar'=>'حصة قائد الفريق'),
            'external_broker_share' => array('type'=>'currency','vname'=>'LBL_EXT_BROKER','label_en'=>'External Broker Share','label_ar'=>'حصة الوسيط الخارجي'),
            'payment_status' => array('type'=>'enum','options'=>'se_payment_status_dom','vname'=>'LBL_PAY_STATUS','label_en'=>'Payment Status','label_ar'=>'حالة الدفع','default'=>'Unpaid'),
            'paid_amount' => array('type'=>'currency','vname'=>'LBL_PAID_AMT','label_en'=>'Paid Amount','label_ar'=>'المبلغ المدفوع'),
            'remaining_amount' => array('type'=>'currency','vname'=>'LBL_REMAINING','label_en'=>'Remaining','label_ar'=>'المتبقي'),
            'due_date' => array('type'=>'date','vname'=>'LBL_DUE_DATE','label_en'=>'Due Date','label_ar'=>'تاريخ الاستحقاق'),
            'paid_date' => array('type'=>'date','vname'=>'LBL_PAID_DATE','label_en'=>'Paid Date','label_ar'=>'تاريخ الدفع'),
        ),
    ),
    'SE_DripPlans' => array(
        'label' => 'Drip Plans',
        'label_ar' => 'خطط المتابعة',
        'table' => 'se_dripplans',
        'fields' => array(
            'lead_type' => array('type'=>'enum','options'=>'se_lead_type_dom','vname'=>'LBL_LEAD_TYPE','label_en'=>'Lead Type','label_ar'=>'نوع العميل'),
            'trigger_event' => array('type'=>'varchar','len'=>100,'vname'=>'LBL_TRIGGER_EVENT','label_en'=>'Trigger Event','label_ar'=>'حدث البدء'),
            'step_number' => array('type'=>'int','len'=>11,'vname'=>'LBL_STEP_NUMBER','label_en'=>'Step Number','label_ar'=>'رقم الخطوة'),
            'delay_days' => array('type'=>'int','len'=>11,'vname'=>'LBL_DELAY_DAYS','label_en'=>'Delay Days','label_ar'=>'أيام التأخير'),
            'channel' => array('type'=>'enum','options'=>'se_channel_dom','vname'=>'LBL_CHANNEL','label_en'=>'Channel','label_ar'=>'القناة'),
            'message_template' => array('type'=>'text','vname'=>'LBL_MSG_TEMPLATE','label_en'=>'Message Template','label_ar'=>'قالب الرسالة'),
            'active' => array('type'=>'bool','vname'=>'LBL_ACTIVE','label_en'=>'Active','label_ar'=>'نشط','default'=>1),
            'stop_condition' => array('type'=>'varchar','len'=>255,'vname'=>'LBL_STOP_CONDITION','label_en'=>'Stop Condition','label_ar'=>'شرط التوقف'),
        ),
    ),
    'SE_WebPages' => array(
        'label' => 'Web Pages',
        'label_ar' => 'صفحات الويب',
        'table' => 'se_webpages',
        'fields' => array(
            'page_type' => array('type'=>'enum','options'=>'se_page_type_dom','vname'=>'LBL_PAGE_TYPE','label_en'=>'Page Type','label_ar'=>'نوع الصفحة'),
            'url_slug' => array('type'=>'varchar','len'=>255,'vname'=>'LBL_URL_SLUG','label_en'=>'URL Slug','label_ar'=>'الرابط'),
            'seo_title' => array('type'=>'varchar','len'=>255,'vname'=>'LBL_SEO_TITLE','label_en'=>'SEO Title','label_ar'=>'عنوان SEO'),
            'seo_description' => array('type'=>'text','vname'=>'LBL_SEO_DESC','label_en'=>'SEO Description','label_ar'=>'وصف SEO'),
            'lead_capture_enabled' => array('type'=>'bool','vname'=>'LBL_LEAD_CAPTURE','label_en'=>'Lead Capture Enabled','label_ar'=>'تفعيل التقاط العملاء','default'=>1),
            'published' => array('type'=>'bool','vname'=>'LBL_PUBLISHED','label_en'=>'Published','label_ar'=>'منشور','default'=>0),
            'public_url' => array('type'=>'url','len'=>500,'vname'=>'LBL_PUBLIC_URL','label_en'=>'Public URL','label_ar'=>'الرابط العام'),
        ),
    ),
    'SE_LeadForms' => array(
        'label' => 'Lead Forms',
        'label_ar' => 'نماذج العملاء',
        'table' => 'se_leadforms',
        'fields' => array(
            'form_type' => array('type'=>'enum','options'=>'se_form_type_dom','vname'=>'LBL_FORM_TYPE','label_en'=>'Form Type','label_ar'=>'نوع النموذج'),
            'source_page' => array('type'=>'varchar','len'=>255,'vname'=>'LBL_SOURCE_PAGE','label_en'=>'Source Page','label_ar'=>'صفحة المصدر'),
            'source_url' => array('type'=>'url','len'=>500,'vname'=>'LBL_SOURCE_URL','label_en'=>'Source URL','label_ar'=>'رابط المصدر'),
            'auto_create_lead' => array('type'=>'bool','vname'=>'LBL_AUTO_CREATE_LEAD','label_en'=>'Auto Create Lead','label_ar'=>'إنشاء عميل تلقائياً','default'=>1),
            'default_lead_type' => array('type'=>'enum','options'=>'se_lead_type_dom','vname'=>'LBL_DEFAULT_LEAD_TYPE','label_en'=>'Default Lead Type','label_ar'=>'نوع العميل الافتراضي'),
            'active' => array('type'=>'bool','vname'=>'LBL_ACTIVE','label_en'=>'Active','label_ar'=>'نشط','default'=>1),
        ),
    ),
    'SE_AssignmentRules' => array(
        'label' => 'Assignment Rules',
        'label_ar' => 'قواعد التوزيع',
        'table' => 'se_assignmentrules',
        'fields' => array(
            'rule_type' => array('type'=>'enum','options'=>'se_rule_type_dom','vname'=>'LBL_RULE_TYPE','label_en'=>'Rule Type','label_ar'=>'نوع القاعدة'),
            'applies_to_city' => array('type'=>'varchar','len'=>100,'vname'=>'LBL_APPLIES_CITY','label_en'=>'Applies to City','label_ar'=>'تنطبق على المدينة'),
            'applies_to_area' => array('type'=>'varchar','len'=>100,'vname'=>'LBL_APPLIES_AREA','label_en'=>'Applies to Area','label_ar'=>'تنطبق على المنطقة'),
            'applies_to_source' => array('type'=>'varchar','len'=>100,'vname'=>'LBL_APPLIES_SOURCE','label_en'=>'Applies to Source','label_ar'=>'تنطبق على المصدر'),
            'agent_pool' => array('type'=>'text','vname'=>'LBL_AGENT_POOL','label_en'=>'Agent Pool','label_ar'=>'مجموعة الوكلاء'),
            'weight' => array('type'=>'int','len'=>11,'vname'=>'LBL_WEIGHT','label_en'=>'Weight','label_ar'=>'الوزن'),
            'priority' => array('type'=>'int','len'=>11,'vname'=>'LBL_PRIORITY','label_en'=>'Priority','label_ar'=>'الأولوية'),
            'active' => array('type'=>'bool','vname'=>'LBL_ACTIVE','label_en'=>'Active','label_ar'=>'نشط','default'=>1),
        ),
    ),
);

// ─── Dropdown Definitions ────────────────────────────────────────────────────
$dropdowns = array(
    'se_property_type_dom' => array('Residential'=>'Residential','Residential Income'=>'Residential Income','Commercial'=>'Commercial','Land'=>'Land','Rental'=>'Rental','Mixed Use'=>'Mixed Use','Business Opportunity'=>'Business Opportunity','Other'=>'Other'),
    'se_property_subtype_dom' => array('Single Family'=>'Single Family','Condo'=>'Condominium','Townhouse'=>'Townhouse','Villa'=>'Villa','Duplex'=>'Duplex','Apartment'=>'Apartment','Penthouse'=>'Penthouse','Studio'=>'Studio','Office'=>'Office','Retail'=>'Retail','Warehouse'=>'Warehouse','Land Lot'=>'Land Lot','Farm'=>'Farm','Hotel Apartment'=>'Hotel Apartment','Other'=>'Other'),
    'se_listing_type_dom' => array('Sale'=>'Sale','Rent'=>'Rent','Lease'=>'Lease','Short Term Rent'=>'Short Term Rent','Long Term Rent'=>'Long Term Rent','Off Plan'=>'Off Plan','Resale'=>'Resale','Investment'=>'Investment','Auction'=>'Auction'),
    'se_listing_status_dom' => array('Draft'=>'Draft','Coming Soon'=>'Coming Soon','Active'=>'Active','Available'=>'Available','Under Offer'=>'Under Offer','Pending'=>'Pending','Reserved'=>'Reserved','Sold'=>'Sold','Rented'=>'Rented','Withdrawn'=>'Withdrawn','Expired'=>'Expired','Cancelled'=>'Cancelled','Inactive'=>'Inactive'),
    'se_internal_status_dom' => array('New'=>'New','In Review'=>'In Review','Approved'=>'Approved','Published'=>'Published','On Hold'=>'On Hold','Archived'=>'Archived'),
    'se_size_unit_dom' => array('sqft'=>'Sq Ft','sqm'=>'Sq M'),
    'se_furnishing_dom' => array('Furnished'=>'Furnished','Semi-Furnished'=>'Semi-Furnished','Unfurnished'=>'Unfurnished'),
    'se_completion_dom' => array('Ready'=>'Ready','Under Construction'=>'Under Construction','Off Plan'=>'Off Plan'),
    'se_ownership_type_dom' => array('Freehold'=>'Freehold','Leasehold'=>'Leasehold','Commonhold'=>'Commonhold','Other'=>'Other'),
    'se_mls_feed_type_dom' => array('Manual'=>'Manual','RETS'=>'RETS','RESO Web API'=>'RESO Web API','IDX Provider'=>'IDX Provider','CSV Import'=>'CSV Import'),
    'se_mls_sync_status_dom' => array('Not Synced'=>'Not Synced','Pending'=>'Pending','Synced'=>'Synced','Failed'=>'Failed','Disabled'=>'Disabled'),
    'se_priority_dom' => array('Critical'=>'Critical','High'=>'High','Medium'=>'Medium','Low'=>'Low'),
    'se_feed_status_dom' => array('New'=>'New','In Progress'=>'In Progress','Contacted'=>'Contacted','Snoozed'=>'Snoozed','Closed'=>'Closed'),
    'se_req_type_dom' => array('Buy'=>'Buy','Rent'=>'Rent','Lease'=>'Lease','Invest'=>'Invest'),
    'se_req_status_dom' => array('Active'=>'Active','Matched'=>'Matched','On Hold'=>'On Hold','Closed'=>'Closed'),
    'se_financing_dom' => array('Cash'=>'Cash','Mortgage'=>'Mortgage','Pre-Approved'=>'Pre-Approved','Not Started'=>'Not Started'),
    'se_val_status_dom' => array('New'=>'New','In Review'=>'In Review','CMA Prepared'=>'CMA Prepared','Sent'=>'Sent','Converted'=>'Converted','Lost'=>'Lost'),
    'se_confidence_dom' => array('High'=>'High','Medium'=>'Medium','Low'=>'Low'),
    'se_market_trend_dom' => array('Up'=>'Up','Down'=>'Down','Stable'=>'Stable'),
    'se_report_status_dom' => array('Draft'=>'Draft','Published'=>'Published','Archived'=>'Archived'),
    'se_alert_freq_dom' => array('Instant'=>'Instant','Daily'=>'Daily','Weekly'=>'Weekly','Monthly'=>'Monthly','Disabled'=>'Disabled'),
    'se_alert_status_dom' => array('Active'=>'Active','Paused'=>'Paused','Disabled'=>'Disabled'),
    'se_viewing_type_dom' => array('Physical'=>'Physical','Virtual'=>'Virtual','Open House'=>'Open House'),
    'se_viewing_status_dom' => array('Requested'=>'Requested','Scheduled'=>'Scheduled','Confirmed'=>'Confirmed','Done'=>'Done','Cancelled'=>'Cancelled','No Show'=>'No Show','Rescheduled'=>'Rescheduled'),
    'se_confirmation_dom' => array('Pending'=>'Pending','Confirmed'=>'Confirmed','Declined'=>'Declined'),
    'se_offer_type_dom' => array('Purchase'=>'Purchase','Rental'=>'Rental','Lease'=>'Lease'),
    'se_offer_status_dom' => array('New'=>'New','Submitted'=>'Submitted','Under Review'=>'Under Review','Counter Offered'=>'Counter Offered','Accepted'=>'Accepted','Rejected'=>'Rejected','Expired'=>'Expired','Withdrawn'=>'Withdrawn'),
    'se_deal_type_dom' => array('Sale'=>'Sale','Rental'=>'Rental','Lease'=>'Lease','Off Plan'=>'Off Plan'),
    'se_deal_stage_dom' => array('New'=>'New','Offer Accepted'=>'Offer Accepted','Contract Preparation'=>'Contract Preparation','Contract Sent'=>'Contract Sent','Signed'=>'Signed','Payment Pending'=>'Payment Pending','Closed'=>'Closed','Cancelled'=>'Cancelled','Lost'=>'Lost'),
    'se_payment_status_dom' => array('Unpaid'=>'Unpaid','Partial'=>'Partial','Paid'=>'Paid','Overdue'=>'Overdue','Refunded'=>'Refunded'),
    'se_commission_type_dom' => array('Percentage'=>'Percentage','Fixed'=>'Fixed'),
    'se_lead_type_dom' => array('Buyer'=>'Buyer','Seller'=>'Seller','Tenant'=>'Tenant','Landlord'=>'Landlord','Investor'=>'Investor','Developer'=>'Developer','Vendor'=>'Vendor'),
    'se_lead_temp_dom' => array('Cold'=>'Cold','Warm'=>'Warm','Hot'=>'Hot','Very Hot'=>'Very Hot'),
    'se_channel_dom' => array('Email'=>'Email','SMS'=>'SMS (Placeholder)','WhatsApp'=>'WhatsApp (Placeholder)','Call Task'=>'Call Task'),
    'se_page_type_dom' => array('Property'=>'Property','Community'=>'Community','Market Report'=>'Market Report','Valuation'=>'Valuation','Agent'=>'Agent','Office'=>'Office','Landing Page'=>'Landing Page'),
    'se_form_type_dom' => array('Buyer Inquiry'=>'Buyer Inquiry','Seller Valuation'=>'Seller Valuation','Showing Request'=>'Showing Request','Market Report'=>'Market Report','Contact Agent'=>'Contact Agent','Open House'=>'Open House','Download Brochure'=>'Download Brochure'),
    'se_rule_type_dom' => array('Round Robin'=>'Round Robin','Weighted'=>'Weighted','Area-Based'=>'Area-Based','Property-Based'=>'Property-Based','Source-Based'=>'Source-Based','Manual'=>'Manual'),
    'se_call_outcome_dom' => array('Connected'=>'Connected','No Answer'=>'No Answer','Busy'=>'Busy','Wrong Number'=>'Wrong Number','Call Back Later'=>'Call Back Later','Interested'=>'Interested','Not Interested'=>'Not Interested','Converted'=>'Converted','Do Not Call'=>'Do Not Call'),
);

$errors = array();
$success = array();

// ─── STEP 1: Install Dropdowns ──────────────────────────────────────────────
echo "<div class='step'><strong>Step 1:</strong> Installing " . count($dropdowns) . " dropdown lists...</div>";
$dropdownDir = $suiteRoot . '/custom/Extension/application/Ext/Language';
if (!is_dir($dropdownDir)) {
    mkdir($dropdownDir, 0777, true);
}

$dropdownContent = "<?php\n// SuiteEstate Growth CRM — Dropdown Definitions\n";
foreach ($dropdowns as $name => $options) {
    $dropdownContent .= "\$app_list_strings['$name'] = array(\n";
    foreach ($options as $key => $val) {
        $k = addslashes($key);
        $v = addslashes($val);
        $dropdownContent .= "    '$k' => '$v',\n";
    }
    $dropdownContent .= ");\n\n";
}
file_put_contents($dropdownDir . '/en_us.SuiteEstate.php', $dropdownContent);
echo "<div class='step'><span class='ok'>✓</span> Dropdowns installed.</div>";

// ─── STEP 2: Install Modules ─────────────────────────────────────────────────
echo "<div class='step'><strong>Step 2:</strong> Installing " . count($modules) . " modules...</div>";

foreach ($modules as $modName => $def) {
    $modDir = $suiteRoot . '/modules/' . $modName;
    if (!is_dir($modDir)) {
        mkdir($modDir, 0777, true);
    }
    
    // ── vardefs.php ──
    $vardefCode = "<?php\n\$dictionary['$modName'] = array(\n";
    $vardefCode .= "    'table' => '{$def['table']}',\n";
    $vardefCode .= "    'audited' => true,\n";
    $vardefCode .= "    'duplicate_merge' => true,\n";
    $vardefCode .= "    'fields' => array(\n";
    
    // Name field (always present)
    $vardefCode .= "        'name' => array(\n";
    $vardefCode .= "            'name' => 'name',\n";
    $vardefCode .= "            'vname' => 'LBL_NAME',\n";
    $vardefCode .= "            'type' => 'name',\n";
    $vardefCode .= "            'link' => true,\n";
    $vardefCode .= "            'dbType' => 'varchar',\n";
    $vardefCode .= "            'len' => 255,\n";
    $vardefCode .= "            'unified_search' => true,\n";
    $vardefCode .= "            'full_text_search' => array('boost' => 3),\n";
    $vardefCode .= "            'required' => true,\n";
    $vardefCode .= "            'importable' => 'required',\n";
    $vardefCode .= "        ),\n";
    
    foreach ($def['fields'] as $fName => $fDef) {
        $vardefCode .= "        '$fName' => array(\n";
        $vardefCode .= "            'name' => '$fName',\n";
        $vardefCode .= "            'vname' => '{$fDef['vname']}',\n";
        $vardefCode .= "            'type' => '{$fDef['type']}',\n";
        if (isset($fDef['len'])) $vardefCode .= "            'len' => '{$fDef['len']}',\n";
        if (isset($fDef['options'])) $vardefCode .= "            'options' => '{$fDef['options']}',\n";
        if (isset($fDef['default'])) $vardefCode .= "            'default' => '{$fDef['default']}',\n";
        $vardefCode .= "            'importable' => 'true',\n";
        $vardefCode .= "        ),\n";
    }
    
    $vardefCode .= "    ),\n";
    $vardefCode .= "    'indices' => array(\n";
    $vardefCode .= "        array('name' => 'idx_{$def['table']}_name', 'type' => 'index', 'fields' => array('name')),\n";
    $vardefCode .= "    ),\n";
    $vardefCode .= ");\n";
    $vardefCode .= "VardefManager::createVardef('$modName', '$modName', array('basic', 'assignable', 'security_groups'));\n";
    file_put_contents($modDir . '/vardefs.php', $vardefCode);
    
    // ── Bean Class ──
    $beanCode = "<?php\nif (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');\n\n";
    $beanCode .= "class $modName extends Basic {\n";
    $beanCode .= "    public \$new_schema = true;\n";
    $beanCode .= "    public \$module_dir = '$modName';\n";
    $beanCode .= "    public \$object_name = '$modName';\n";
    $beanCode .= "    public \$table_name = '{$def['table']}';\n";
    $beanCode .= "    public \$importable = true;\n";
    $beanCode .= "    public \$disable_row_level_security = true;\n\n";
    $beanCode .= "    public function __construct() {\n";
    $beanCode .= "        parent::__construct();\n";
    $beanCode .= "    }\n";
    $beanCode .= "}\n";
    file_put_contents($modDir . '/' . $modName . '.php', $beanCode);
    
    // ── Language Files ──
    $langDir = $modDir . '/language';
    if (!is_dir($langDir)) mkdir($langDir, 0777, true);
    
    // English
    $enLang = "<?php\n\$mod_strings = array(\n";
    $enLang .= "    'LBL_MODULE_NAME' => '{$def['label']}',\n";
    $enLang .= "    'LBL_MODULE_TITLE' => '{$def['label']}',\n";
    $enLang .= "    'LBL_NAME' => 'Name',\n";
    $enLang .= "    'LBL_LIST_NAME' => 'Name',\n";
    foreach ($def['fields'] as $fName => $fDef) {
        $enLang .= "    '{$fDef['vname']}' => '{$fDef['label_en']}',\n";
    }
    $enLang .= ");\n";
    file_put_contents($langDir . '/en_us.lang.php', $enLang);
    
    // Arabic
    $arLang = "<?php\n\$mod_strings = array(\n";
    $arLang .= "    'LBL_MODULE_NAME' => '{$def['label_ar']}',\n";
    $arLang .= "    'LBL_MODULE_TITLE' => '{$def['label_ar']}',\n";
    $arLang .= "    'LBL_NAME' => 'الاسم',\n";
    $arLang .= "    'LBL_LIST_NAME' => 'الاسم',\n";
    foreach ($def['fields'] as $fName => $fDef) {
        $arLang .= "    '{$fDef['vname']}' => '{$fDef['label_ar']}',\n";
    }
    $arLang .= ");\n";
    file_put_contents($langDir . '/ar_AR.lang.php', $arLang);
    
    // ── Metadata ──
    $metaDir = $modDir . '/metadata';
    if (!is_dir($metaDir)) mkdir($metaDir, 0777, true);
    
    // List View
    $listCols = array("'name'");
    $colCount = 0;
    foreach ($def['fields'] as $fName => $fDef) {
        if ($fDef['type'] !== 'text' && $colCount < 5) {
            $listCols[] = "'$fName'";
            $colCount++;
        }
    }
    $listDefs = "<?php\n\$listViewDefs['$modName'] = array(\n";
    foreach ($listCols as $col) {
        $colName = trim($col, "'");
        $listDefs .= "    '$colName' => array(\n";
        $listDefs .= "        'width' => '15%',\n";
        $listDefs .= "        'label' => '" . ($colName === 'name' ? 'LBL_NAME' : (isset($def['fields'][$colName]['vname']) ? $def['fields'][$colName]['vname'] : 'LBL_' . strtoupper($colName))) . "',\n";
        $listDefs .= "        'default' => true,\n";
        $listDefs .= "    ),\n";
    }
    $listDefs .= ");\n";
    file_put_contents($metaDir . '/listviewdefs.php', $listDefs);
    
    // Search Defs
    $searchFields = array('name');
    $searchCount = 0;
    foreach ($def['fields'] as $fName => $fDef) {
        if (($fDef['type'] === 'varchar' || $fDef['type'] === 'enum') && $searchCount < 4) {
            $searchFields[] = $fName;
            $searchCount++;
        }
    }
    $searchDefs = "<?php\n\$searchdefs['$modName'] = array(\n    'templateMeta' => array('maxColumns' => '3', 'widths' => array('label' => '10', 'field' => '30')),\n    'layout' => array(\n        'basic_search' => array(\n";
    foreach ($searchFields as $sf) {
        $searchDefs .= "            '$sf',\n";
    }
    $searchDefs .= "        ),\n        'advanced_search' => array(\n";
    foreach ($searchFields as $sf) {
        $searchDefs .= "            '$sf',\n";
    }
    $searchDefs .= "        ),\n    ),\n);\n";
    file_put_contents($metaDir . '/searchdefs.php', $searchDefs);
    
    echo "<div class='step'><span class='ok'>✓</span> Module <strong>$modName</strong> ({$def['label']}) installed.</div>";
}

// ─── STEP 3: Register Modules ───────────────────────────────────────────────
echo "<div class='step'><strong>Step 3:</strong> Registering modules in SuiteCRM...</div>";

// Register in custom/Extension/application/Ext/Include
$includeDir = $suiteRoot . '/custom/Extension/application/Ext/Include';
if (!is_dir($includeDir)) mkdir($includeDir, 0777, true);

$includeCode = "<?php\n// SuiteEstate Growth CRM — Module Registration\n";
foreach ($modules as $modName => $def) {
    $includeCode .= "\$beanList['$modName'] = '$modName';\n";
    $includeCode .= "\$beanFiles['$modName'] = 'modules/$modName/$modName.php';\n";
    $includeCode .= "\$moduleList[] = '$modName';\n\n";
}
file_put_contents($includeDir . '/SuiteEstate.php', $includeCode);

// Tab mapping
$tabDir = $suiteRoot . '/custom/Extension/application/Ext/Language';
// Already created above for dropdowns

echo "<div class='step'><span class='ok'>✓</span> All modules registered.</div>";

// ─── STEP 4: Extend Leads Module ────────────────────────────────────────────
echo "<div class='step'><strong>Step 4:</strong> Extending Leads module with Real Estate fields...</div>";

$leadsExtDir = $suiteRoot . '/custom/Extension/modules/Leads/Ext/Vardefs';
if (!is_dir($leadsExtDir)) mkdir($leadsExtDir, 0777, true);

$leadsExtFields = array(
    'lead_type_c' => array('type'=>'enum','options'=>'se_lead_type_dom','vname'=>'LBL_LEAD_TYPE_C','label_en'=>'Lead Type','label_ar'=>'نوع العميل المحتمل'),
    'budget_range_c' => array('type'=>'varchar','len'=>100,'vname'=>'LBL_BUDGET_RANGE_C','label_en'=>'Budget Range','label_ar'=>'نطاق الميزانية'),
    'preferred_area_c' => array('type'=>'varchar','len'=>100,'vname'=>'LBL_PREFERRED_AREA_C','label_en'=>'Preferred Area','label_ar'=>'المنطقة المفضلة'),
    'preferred_property_type_c' => array('type'=>'enum','options'=>'se_property_type_dom','vname'=>'LBL_PREF_PROP_TYPE_C','label_en'=>'Preferred Property Type','label_ar'=>'نوع العقار المفضل'),
    'preferred_bedrooms_c' => array('type'=>'int','len'=>11,'vname'=>'LBL_PREF_BEDS_C','label_en'=>'Preferred Bedrooms','label_ar'=>'غرف النوم المفضلة'),
    'buying_timeline_c' => array('type'=>'varchar','len'=>100,'vname'=>'LBL_BUYING_TIMELINE_C','label_en'=>'Buying Timeline','label_ar'=>'الجدول الزمني للشراء'),
    'lead_temperature_c' => array('type'=>'enum','options'=>'se_lead_temp_dom','vname'=>'LBL_LEAD_TEMP_C','label_en'=>'Lead Temperature','label_ar'=>'حرارة العميل'),
    'lead_score_c' => array('type'=>'int','len'=>11,'vname'=>'LBL_LEAD_SCORE_C','label_en'=>'Lead Score','label_ar'=>'نقاط العميل','default'=>0),
    'pre_approved_c' => array('type'=>'bool','vname'=>'LBL_PRE_APPROVED_C','label_en'=>'Pre-Approved','label_ar'=>'موافقة مبدئية','default'=>0),
    'financing_status_c' => array('type'=>'enum','options'=>'se_financing_dom','vname'=>'LBL_FINANCING_C','label_en'=>'Financing Status','label_ar'=>'حالة التمويل'),
    'last_property_viewed_c' => array('type'=>'varchar','len'=>255,'vname'=>'LBL_LAST_PROP_VIEWED_C','label_en'=>'Last Property Viewed','label_ar'=>'آخر عقار تمت مشاهدته'),
    'properties_viewed_count_c' => array('type'=>'int','len'=>11,'vname'=>'LBL_PROPS_VIEWED_C','label_en'=>'Properties Viewed Count','label_ar'=>'عدد العقارات المشاهدة','default'=>0),
    'email_consent_c' => array('type'=>'bool','vname'=>'LBL_EMAIL_CONSENT_C','label_en'=>'Email Consent','label_ar'=>'موافقة البريد','default'=>0),
    'sms_consent_c' => array('type'=>'bool','vname'=>'LBL_SMS_CONSENT_C','label_en'=>'SMS Consent','label_ar'=>'موافقة الرسائل','default'=>0),
    'whatsapp_consent_c' => array('type'=>'bool','vname'=>'LBL_WHATSAPP_CONSENT_C','label_en'=>'WhatsApp Consent','label_ar'=>'موافقة واتساب','default'=>0),
    'call_consent_c' => array('type'=>'bool','vname'=>'LBL_CALL_CONSENT_C','label_en'=>'Call Consent','label_ar'=>'موافقة الاتصال','default'=>0),
);

$leadsVardef = "<?php\n// SuiteEstate — Leads Extension Fields\n";
foreach ($leadsExtFields as $fName => $fDef) {
    $leadsVardef .= "\$dictionary['Lead']['fields']['$fName'] = array(\n";
    $leadsVardef .= "    'name' => '$fName',\n";
    $leadsVardef .= "    'vname' => '{$fDef['vname']}',\n";
    $leadsVardef .= "    'type' => '{$fDef['type']}',\n";
    if (isset($fDef['len'])) $leadsVardef .= "    'len' => '{$fDef['len']}',\n";
    if (isset($fDef['options'])) $leadsVardef .= "    'options' => '{$fDef['options']}',\n";
    if (isset($fDef['default'])) $leadsVardef .= "    'default' => '{$fDef['default']}',\n";
    $leadsVardef .= "    'source' => 'custom_fields',\n";
    $leadsVardef .= ");\n\n";
}
file_put_contents($leadsExtDir . '/SuiteEstate.php', $leadsVardef);

// Leads language extension
$leadsLangDir = $suiteRoot . '/custom/Extension/modules/Leads/Ext/Language';
if (!is_dir($leadsLangDir)) mkdir($leadsLangDir, 0777, true);

$enLeadsLang = "<?php\n";
$arLeadsLang = "<?php\n";
foreach ($leadsExtFields as $fName => $fDef) {
    $enLeadsLang .= "\$mod_strings['{$fDef['vname']}'] = '{$fDef['label_en']}';\n";
    $arLeadsLang .= "\$mod_strings['{$fDef['vname']}'] = '{$fDef['label_ar']}';\n";
}
file_put_contents($leadsLangDir . '/en_us.SuiteEstate.php', $enLeadsLang);
file_put_contents($leadsLangDir . '/ar_AR.SuiteEstate.php', $arLeadsLang);

echo "<div class='step'><span class='ok'>✓</span> Leads module extended with " . count($leadsExtFields) . " real estate fields.</div>";

// ─── STEP 5: Quick Repair ────────────────────────────────────────────────────
echo "<div class='step'><strong>Step 5:</strong> Running Quick Repair and Rebuild...</div>";

// Force extension rebuild
if (function_exists('sugar_cache_reset_full')) {
    sugar_cache_reset_full();
}

// Clear cached files
$cacheDirs = array(
    $suiteRoot . '/cache/modules',
    $suiteRoot . '/cache/themes',
    $suiteRoot . '/cache/smarty/templates_c',
);
foreach ($cacheDirs as $cd) {
    if (is_dir($cd)) {
        $iterator = new RecursiveDirectoryIterator($cd, RecursiveDirectoryIterator::SKIP_DOTS);
        $files = new RecursiveIteratorIterator($iterator, RecursiveIteratorIterator::CHILD_FIRST);
        foreach($files as $file) {
            if ($file->isFile() && $file->getExtension() === 'php') {
                @unlink($file->getRealPath());
            }
        }
    }
}

echo "<div class='step'><span class='ok'>✓</span> Cache cleared.</div>";

echo "<div class='step' style='border-left-color: #00ff88; background: #0a2a1a;'>";
echo "<h2 style='color: #00ff88; margin: 0;'>🎉 Installation Complete!</h2>";
echo "<p>All <strong>" . count($modules) . " modules</strong> have been installed successfully.</p>";
echo "<p><strong>Modules installed:</strong></p><ul>";
foreach ($modules as $modName => $def) {
    echo "<li><strong>$modName</strong> — {$def['label']} ({$def['label_ar']})</li>";
}
echo "</ul>";
echo "<h3>⚠️ IMPORTANT: Next Steps</h3>";
echo "<ol>";
echo "<li>Go to <strong>Admin → Repair → Quick Repair and Rebuild</strong></li>";
echo "<li>If the repair page shows SQL statements, <strong>scroll down and click 'Execute'</strong> to create the database tables.</li>";
echo "<li>Go to <strong>Admin → Display Modules and Subpanels</strong> to enable the new modules in the navigation.</li>";
echo "<li>Go to <strong>Admin → Studio → Leads → Layouts → EditView</strong> to add the new Real Estate fields to your layout.</li>";
echo "</ol>";
echo "</div>";

echo "</div></body></html>";
