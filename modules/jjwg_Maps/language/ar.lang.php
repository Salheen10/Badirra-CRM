<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SuiteCRM Ltd.
 * Copyright (C) 2011 - 2025 SuiteCRM Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings['LBL_MAP'] = 'خريطة';
$mod_strings['LBL_MODULE_NAME'] = 'خرائط';
$mod_strings['LBL_MODULE_TITLE'] = 'الخرائط: الصفحة الرئيسية';
$mod_strings['LBL_MODULE_ID'] = 'خرائط';
$mod_strings['LBL_LIST_FORM_TITLE'] = 'قائمة الخرائط';
$mod_strings['LBL_MAP_CUSTOM_MARKER'] = 'علامة مخصصة';
$mod_strings['LBL_MAP_CUSTOM_AREA'] = 'منطقة مخصصة';
$mod_strings['LBL_HOMEPAGE_TITLE'] = 'قائمة الخرائط الخاصة بي';

$mod_strings['LBL_FLEX_RELATE'] = 'ذات الصلة (المركز):';
$mod_strings['LBL_MODULE_TYPE'] = 'نوع الوحدة التي تعرض:';
$mod_strings['LBL_DISTANCE'] = 'المسافة (نصف القطر):';
$mod_strings['LBL_UNIT_TYPE'] = 'نوع الوحدة:';

$mod_strings['LBL_MAP_DISPLAY'] = 'عرض الخريطة';
$mod_strings['LBL_MAP_LEGEND'] = 'التوضيح:';
$mod_strings['LBL_MAP_USER_GROUPS'] = 'المجموعات:';
$mod_strings['LBL_MAP_GROUP'] = 'المجموعة';
$mod_strings['LBL_MAP_TYPE'] = 'النوع';
$mod_strings['LBL_MAP_ASSIGNED_TO'] = 'أُسند إلى:';
$mod_strings['LBL_MAP_GET_DIRECTIONS'] = 'الحصول على إرشادات';
$mod_strings['LBL_MAP_GOOGLE_MAPS_VIEW'] = 'عرض خرائط جوجل';

$mod_strings['LNK_NEW_MAP'] = 'إضافة خريطة جديدة';
$mod_strings['LNK_NEW_RECORD'] = 'إضافة خريطة جديدة';
$mod_strings['LNK_MAP_LIST'] = 'عرض قائمة الخرائط';

$mod_strings['LBL_MAP_ADDRESS_TEST'] = 'اختبار الترميز الجغرافي';
$mod_strings['LBL_MAP_QUICK_RADIUS'] = 'خريطة نصف قطر سريعة';
$mod_strings['LBL_MAP_NULL_GROUP_NAME'] = 'لاشئ';
$mod_strings['LBL_MAP_ADDRESS'] = 'عنوان';
$mod_strings['LBL_MAP_PROCESS'] = 'عالجه!';

$mod_strings['LBL_MAP_LAST_STATUS'] = 'آخر حالة للترميز الجغرافي';
$mod_strings['LBL_GEOCODED_COUNTS'] = 'عدد الترميزات الجغرافية للوحدة';
$mod_strings['LBL_CRON_URL'] = 'عنوان URL للأوامر المجدولة (Cron):';
$mod_strings['LBL_MODULE_HEADING'] = 'الوحدة';

$mod_strings['LBL_N/A'] = 'غير متاح';
$mod_strings['LBL_ZERO_RESULTS'] = 'لا توجد نتائج';
$mod_strings['LBL_OK'] = 'موافق';
$mod_strings['LBL_INVALID_REQUEST'] = 'طلب غير صالح';
$mod_strings['LBL_APPROXIMATE'] = 'تقريبي';
$mod_strings['LBL_EMPTY'] = 'فارغة';

$mod_strings['LBL_MODULE_TOTAL_HEADING'] = 'المجموع';
$mod_strings['LBL_MODULE_RESET_HEADING'] = 'إعادة ضبط';
$mod_strings['LBL_GEOCODED_COUNTS_DESCRIPTION'] = 'يوضح الجدول المعروض أدناه عدد كائنات الوحدة المرمّزة جغرافيًا ، مجمعة حسب استجابة الترميز الجغرافي. ضع في اعتبارك أن حد استخدام خرائط Google القياسي هو 2500 طلب في اليوم. ستقوم هذه الوحدة بتخزين معلومات الترميز الجغرافي للعناوين مؤقتًا أثناء المعالجة لتقليل العدد الإجمالي للطلبات اللازمة.';

$mod_strings['LBL_CRON_INSTRUCTIONS'] = 'لمعالجة طلبات الترميز الجغرافي ، يوصى بإعداد أمر مجدول (Cron-Job) ليليًا. تم إنشاء نقطة دخول مخصصة لهذا الغرض ويمكن الوصول إليها بدون مصادقة. من المفترض أن يتم استخدام عنوان URL الموضح أدناه من خلال مهمة إدارية مجدولة. يرجى الاطلاع على التوثيق لمزيد من المعلومات.';
$mod_strings['LBL_EXPORT_ADDRESS_URL'] = 'تصدير عناوين URL';
$mod_strings['LBL_EXPORT_INSTRUCTIONS'] = 'استخدم الروابط أدناه لتصدير العناوين الكاملة التي تحتاج إلى معلومات الترميز الجغرافي. ثم استخدم أداة الترميز الجغرافي على الانترنت أو دون اتصال لترجمة العناوين إلى رموز جغرافية. عند الانتهاء من الترميز الجغرافي، قم باستيراد العناوين إلى وحدة ذاكرة التخزين المؤقت للعناوين لاستخدامها مع الخرائط الخاصة بك. ملاحظة: وحدة ذاكرة التخزين المؤقت للعناوين اختيارية. يتم تخزين جميع معلومات الترميز الجغرافي في الوحدة الممثلة.';
$mod_strings['LBL_ADDRESS_CACHE'] = 'عنوان الكاش';
$mod_strings['LBL_ADD_TO_TARGET_LIST'] = 'إضافة إلى قائمة المستهدفين';
$mod_strings['LBL_ADD_TO_TARGET_LIST_PROCESSING'] = 'جاري المعالجة...';


$mod_strings['LBL_CONFIG_TITLE'] = 'إعدادات التهيئة';
$mod_strings['LBL_CONFIG_SAVED'] = 'تم حفظ الإعدادات بنجاح!';
$mod_strings['LBL_BILLING_ADDRESS'] = 'ترسل الفاتوة لعنوان';
$mod_strings['LBL_SHIPPING_ADDRESS'] = 'عنوان الشحن';
$mod_strings['LBL_PRIMARY_ADDRESS'] = 'العنوان الرئيسي';
$mod_strings['LBL_ALTERNATIVE_ADDRESS'] = 'العنوان البديل';
$mod_strings['LBL_ADDRESS_FLEX_RELATE'] = 'علاقة مرنة (Flex Relate)';
$mod_strings['LBL_ADDRESS_ADDRESS'] = 'العنوان (بسيط، مستخدمون)';
$mod_strings['LBL_ADDRESS_CUSTOM'] = 'مخصص (منطق التحكم المخصص)';
$mod_strings['LBL_ENABLED'] = 'مفعل';
$mod_strings['LBL_DISABLED'] = 'غير مفعل';
$mod_strings['LBL_DEFAULT'] = 'الإفتراضي:';
$mod_strings['LBL_CONFIG_DEFAULT'] = 'الافتراضي:';

$mod_strings['LBL_CONFIG_VALID_GEOCODE_MODULES'] = 'وحدات ترميز جغرافي صالحة:';
$mod_strings['LBL_CONFIG_VALID_GEOCODE_TABLES'] = 'جداول ترميز جغرافي صالحة:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_SETTINGS_TITLE'] = "إعدادات نوع العنوان: يحدد أنواع عناوين الوحدات المستخدمة عند ترميز العناوين الجغرافية. القيم المقبولة: 'فوترة '; 'شحن'; 'أساسي'; 'alt'; 'flex_relate'";
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR'] = 'نوع العنوان لـ ';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_ACCOUNTS'] = 'نوع العنوان للحسابات:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CONTACTS'] = 'نوع العنوان لجهات الاتصال:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_LEADS'] = 'نوع العنوان للعملاء المحتملين:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_OPPORTUNITIES'] = 'نوع العنوان للفرص:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT'] = '(لحساب ذي صلة)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CASES'] = 'نوع العنوان للقضايا:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROJECTS'] = 'نوع العنوان للمشاريع:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT_OPPORTUNITY'] = '(للحساب/الفرصة ذات الصلة)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_MEETINGS'] = 'نوع عنوان الاجتماعات:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROSPECTS'] = 'نوع العنوان للعملاء المتوقعين/المستهدفين:';
$mod_strings['LBL_CONFIG_RELATED_OBJECT_THRU_FLEX_RELATE'] = 'عنصر ذو الصلة من خلال حقل علاقة مرنة (Flex Relate)';

$mod_strings['LBL_CONFIG_MARKER_GROUP_FIELD_SETTINGS_TITLE'] = "إعدادات حقل مجموعة العلامات: تعرّف 'الحقل' الذي سيتم استخدامه كمعطى المجموعة عند عرض العلامات على الخريطة. أمثلة: assigned_user_name (للمستخدم المسند إليه)، industry (لمجال العمل)، status (للحالة)، sales_stage (لمرحلة البيع)، priority (للأولوية)";
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR'] = 'حقل المجموعة لـ ';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_ACCOUNTS'] = 'حقل المجموعة للحسابات:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CONTACTS'] = 'حقل المجموعة لجهات الاتصال:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_LEADS'] = 'حقل المجموعة للعملاء المحتملين:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_OPPORTUNITIES'] = 'حقل المجموعة للفرص:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CASES'] = 'حقل المجموعة للقضايا:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROJECTS'] = 'حقل المجموعة للمشاريع:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_MEETINGS'] = 'مجال المجموعات للاجتماعات:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROSPECTS'] = 'حقل المجموعة للعملاء المتوقعين/المستهدفين:';

$mod_strings['LBL_CONFIG_GEOCODING_SETTINGS_TITLE'] = 'الترميز الجغرافي/إعدادات جوجل:';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_TITLE'] = 'عنوان URL لواجهات الربط API الخاصة بالترميز الجغرافي:';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_DESC'] = 'عنوان URL لخرائط Google API V3 أو البروكسي';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_TITLE'] = 'العبارة السرية للبروكسي:';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_DESC'] = 'العبارة السرية التي سيتم استخدامها لمقارنة تشفير MD5 للبروكسي.';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_TITLE'] = 'الحد الأقصى للترميز الجغرافي:';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_DESC'] = "'geocoding_limit' يحدد الحد الأقصى للاستعلام عند اختيار السجلات التي سيتم ترميزها جغرافيًا.";
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_TITLE'] = 'الحد الأقصى للترميز الجغرافي في جوجل:';
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_DESC'] = "'google_geocoding_limit' يحدد الحد الأقصى للطلبات عند الترميز الجغرافي باستخدام واجهات الربط API لخرائط جوجل.";
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_TITLE'] = 'الحد الأقصى لعناوين التصدير:';
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_DESC'] = "'export_addresses_limit' يحدد الحد الأقصى للاستعلام عند اختيار السجلات للتصدير.";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_TITLE'] = "السماح بأنواع \"APPROXIMATE\" للمواقع:";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_DESC'] = "'allow_approximate_location_type' - يسمح لأنواع المواقع من 'APPROXIMATE' أن تُعتبر مقبولة ضمن نتائج الترميز الجغرافي.";

$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SETTINGS_TITLE'] = 'إعدادات ذاكرة التخزين المؤقت للعناوين:';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_TITLE'] = 'تمكين ذاكرة التخزين المؤقت للعناوين (قراءة):';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_DESC'] = "'address_cache_get_enabled' يسمح لوحدة ذاكرة التخزين المؤقت للعناوين باسترداد البيانات من جدول ذاكرة التخزين المؤقت.";
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_TITLE'] = 'تمكين حفظ ذاكرة التخزين المؤقت للعناوين (حفظ):';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_DESC'] = "'address_cache_save_enabled' يسمح لوحدة ذاكرة التخزين المؤقت للعنوان بحفظ البيانات في جدول ذاكرة التخزين المؤقت.";

$mod_strings['LBL_CONFIG_LOGIC_HOOKS_SETTINGS_TITLE'] = 'إعدادات الخطافات المنطقية:';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_TITLE'] = 'تمكين جميع الخطافات المنطقية: ';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_DESC'] = "'logic_hooks_enabled' يسمح للخطافات المنطقية بالتحديث التلقائي بناء على العناصر ذات الصلة. من المستحسن تعطيله عند ترقية SuiteCRM الخاص بك.";

$mod_strings['LBL_CONFIG_MARKER_MAPPING_SETTINGS_TITLE'] = 'إعدادات العلامات / الاقتران:';
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_TITLE'] = "الجد الأقصى لعلامات الخرائط:";
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_DESC'] = "يحدد 'map_markers_limit' الحد الأعلى للاستعلام عند اختيار السجلات التي سيتم عرضها على الخريطة.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_TITLE'] = "مركز خط العرض الافتراضي للخريطة:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_DESC'] = "يحدد 'map_default_center_latitude' موضع خط العرض الافتراضي للخرائط.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_TITLE'] = "مركز خط الطول الافتراضي للخريطة:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_DESC'] = "يحدد 'map_default_center_latitude' موضع خط الطول الافتراضي للخرائط.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_TITLE'] = "نوع وحدة القياس الافترضية للخريطة:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_DESC'] = "يحدد 'map_default_unit_type' نوع وحدة القياس الافتراضية لحساب المسافة. القيم: 'ميل' (ميل) أو 'كم' (كيلومتر).";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_TITLE'] = "المسافة الافتراضية للخريطة:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_DESC'] = "يحدد 'map_default_destance' المسافة الافتراضية المستخدمة في الخرائط القائمة على المسافة.";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_TITLE'] = "تعديل العلامات المكررة في الخريطة:";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_DESC'] = "يحدد 'map_duplicate_marker_modiment' التعديل الذي يضاف إلى خط الطول وخط العرض في حالة تطابق مواضع العلامات وتكررها.";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_TITLE'] = "حجم شبكة تكتل علامات الخرائط:";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_DESC'] = "يستخدم 'map_clusterer_grid_size' لتعيين حجم الشبكة لحساب تكتلات الخرائط.";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_TITLE'] = "أقصى تكبير لتكتلات علامات الخريطة:";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_DESC'] = "يستخدم 'map_clusterer_max_zoom' لتعيين الحد الأقصى لمستوى التكبير الذي لن يتم فيه تطبيق التكتلات (clustering).";
$mod_strings['LBL_CONFIG_CUSTOM_CONTROLLER_DESC'] = "ملاحظة هامة: يمكن العثور على جميع الإعدادات المحفوظة في جدول الإعداد 'config' تحت الفئة 'jjwg'. ملاحظة، يجب عدم استخدام ملف controlller.php المخصص لتجاوز الإعدادات.";
$mod_strings['LBL_JJWG_MAPS_JJWG_AREAS_FROM_JJWG_AREAS_TITLE'] = 'المناطق';
$mod_strings['LBL_JJWG_MAPS_JJWG_MARKERS_FROM_JJWG_MARKERS_TITLE'] = 'العلامات';
$mod_strings['LBL_PARENT_ID'] = 'معرف الأصل';
$mod_strings['LBL_JJWP_PARTNERS'] = 'شركاء JJWP';
$mod_strings['LBL_GET_GOOGLE_API_KEY'] = 'احصل على مفتاح';
$mod_strings['LBL_GOOGLE_API_KEY'] = 'مفتاح Google Api';
$mod_strings['LBL_ERROR_NO_GOOGLE_API_KEY'] = 'الرجاء ضبط مفتاح Google Api في لوحة التحكم لخرائط جوجل.';
