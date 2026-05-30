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

$mod_strings = array(
    'LBL_MODULE_NAME' => 'الصفحة الرئيسية',
    'LBL_NEW_FORM_TITLE' => 'جهة اتصال جديدة',
    'LBL_FIRST_NAME' => 'الاسم الأول:',
    'LBL_LAST_NAME' => 'الاسم الأخير:',
    'LBL_LIST_LAST_NAME' => 'الاسم الأخير',
    'LBL_PHONE' => 'هاتف:',
    'LBL_EMAIL_ADDRESS' => 'عنوان البريد الإلكتروني:',
    'LBL_MY_PIPELINE_FORM_TITLE' => 'الفرص قيد العمل الخاصة بي',
    'LBL_PIPELINE_FORM_TITLE' => 'الفرص قيد العمل بحسب مرحلة المبيعات',
    'LBL_RGraph_PIPELINE_FORM_TITLE' => 'الفرص قيد العمل بحسب مرحلة المبيعات',
    'LNK_NEW_CONTACT' => 'إنشاء جهة إتصال',
    'LNK_NEW_ACCOUNT' => 'إنشاء حساب',
    'LNK_NEW_OPPORTUNITY' => 'إنشاء فرصة',
    'LNK_NEW_LEAD' => 'إنشاء مهتم بنا',
    'LNK_NEW_CASE' => 'إنشاء قضية',
    'LNK_NEW_NOTE' => 'إنشاء ملاحظة أو ملف مرفق',
    'LNK_NEW_CALL' => 'سجل بيانات مُكالمة',
    'LNK_NEW_EMAIL' => 'أرشفة الرسائل',
    'LNK_NEW_MEETING' => 'جدولة اجتماع',
    'LNK_NEW_TASK' => 'إنشاء مهمة',
    'LNK_NEW_BUG' => 'تقرير بالخطأ',
    'LNK_NEW_SEND_EMAIL' => 'إنشاء رسالة',
    'LBL_NO_ACCESS' => 'ليس لديك صلاحية الوصول لهذه المنطقة. من فضلك أتصل بمدير الموقع للحصول على هذه الصلاحية',
    'LBL_NO_RESULTS_IN_MODULE' => '-- لا توجد نتائج --',
    'LBL_NO_RESULTS' => '<h2>لم يتم العثور على نتائج. الرجاء البحث مرة أخرى.</h2><br>',
    'LBL_NO_RESULTS_TIPS' => '<h3>تلميحات البحث:</h3><ul><li>تأكد من أن لديك الفئات المناسبة المحددة أعلاه.</li><li>توسع في معايير البحث الخاصة بك.</li><li>إذا كنت لا تزال غير قادر على العثور على أي نتائج جرب خيار البحث المتقدم.</li></ul>',

    'LBL_ADD_DASHLETS' => 'إضافة تطبيق جديد',
    'LBL_WEBSITE_TITLE' => 'موقع الإنترنت',
    'LBL_RSS_TITLE' => 'موجز الأخبار',
    'LBL_CLOSE_DASHLETS' => 'إغلاق',
    'LBL_OPTIONS' => 'خيارات',
    // dashlet search fields
    'LBL_TODAY' => 'اليوم',
    'LBL_YESTERDAY' => 'أمس',
    'LBL_TOMORROW' => 'غدا',
    'LBL_NEXT_WEEK' => 'الأسبوع التالي',
    'LBL_LAST_7_DAYS' => 'آخر ٧ أيام',
    'LBL_NEXT_7_DAYS' => 'السبعة أيام القادمة',
    'LBL_LAST_MONTH' => 'آخر شهر',
    'LBL_NEXT_MONTH' => 'الشهر التالي',
    'LBL_LAST_YEAR' => 'السنة الأخيرة',
    'LBL_NEXT_YEAR' => 'السنة التالية',
    'LBL_LAST_30_DAYS' => 'آخر ٣٠ يوما',
    'LBL_NEXT_30_DAYS' => 'الثلاثون يوما القادمة',
    'LBL_THIS_MONTH' => 'الشهر الحالي',
    'LBL_THIS_YEAR' => 'السنة الحالية',

    'LBL_MODULES' => 'الوحدات',
    'LBL_CHARTS' => 'المخططات البيانية',
    'LBL_TOOLS' => 'أدوات',
    'LBL_WEB' => 'ويب',
    'LBL_SEARCH_RESULTS' => 'نتائج البحث',

    // Dashlet Categories
    'dashlet_categories_dom' => array(
        'Module Views' => 'طرق عرض الوحدات',
        'Portal' => 'البوابة',
        'Charts' => 'المخططات البيانية',
        'Tools' => 'أدوات',
        'Miscellaneous' => 'متنوع'
    ),
    'LBL_ADDING_DASHLET' => 'إضافة تطبيق فرعي...',
    'LBL_ADDED_DASHLET' => 'تمت إضافة التطبيق الفرعي',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'هل أنت متأكد انك تريد إزالة هذا التطبيق الفرعي (Dashlet)؟',
    'LBL_REMOVING_DASHLET' => 'إزالة التطبيق الفرعي...',
    'LBL_REMOVED_DASHLET' => 'تمت إزالة التطبيق الفرعي',
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'عام',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'فلاتر',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'عناصري فقط',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'العنوان',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'استعراض الصفوف',

    'LBL_DASHLET_DELETE' => 'حذف التطبيق الفرعي',
    'LBL_DASHLET_REFRESH' => 'تحديث التطبيق الفرعي',
    'LBL_DASHLET_EDIT' => 'تحرير التطبيق الفرعي',

    // Default out-of-box names for tabs
    'LBL_HOME_PAGE_1_NAME' => 'صفحتي',
    'LBL_CLOSE_SITEMAP' => 'إغلاق',

    'LBL_SEARCH' => 'بحث',
    'LBL_CLEAR' => 'مسح',

    'LBL_BASIC_CHARTS' => 'مخططات بيانية بسيطة',

    'LBL_DASHLET_SEARCH' => 'البحث عن تطبيق فرعي',

//ABOUT page
    'LBL_VERSION' => 'الإصدار',
    'LBL_BUILD' => 'بناء',

    'LBL_SOURCE_SUGAR' => 'SugarCRM Inc - موفرو إطار CE',

    'LBL_DASHLET_TITLE' => 'بوابتي',
    'LBL_DASHLET_OPT_TITLE' => 'العنوان',
    'LBL_DASHLET_INCORRECT_URL' => 'عنوان الموقع المذكور غير صحيح',
    'LBL_DASHLET_OPT_URL' => 'عنوان الموقع',
    'LBL_DASHLET_OPT_HEIGHT' => 'ارتفاع اللوحة الفرعية (بالبكسل)',
    'LBL_DASHLET_SUITE_NEWS' => 'أخبار SuiteCRM',
    'LBL_DASHLET_DISCOVER_SUITE' => 'استكشاف',
    'LBL_BASIC_SEARCH' => 'فلتر سريع' /*for 508 compliance fix*/,
    'LBL_ADVANCED_SEARCH' => 'فلتر متقدم' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'أيقونة الصفحة الرئيسية',
    'LBL_TOUR_HOME_DESCRIPTION' => 'العودة بسرعة إلى لوحة تحكم الصفحة الرئيسية الخاصة بك بنقرة واحدة.',
    'LBL_TOUR_MODULES' => 'نظام فرعي',
    'LBL_TOUR_MODULES_DESCRIPTION' => 'كل وحداتك المهمة هنا.',
    'LBL_TOUR_MORE' => 'المزيد من الوحدات',
    'LBL_TOUR_MORE_DESCRIPTION' => 'بقية الوحدات الخاصة بك هنا.',
    'LBL_TOUR_SEARCH' => 'البحث عن النص بالكامل',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'البحث أصبح أفضل بكثير.',
    'LBL_TOUR_NOTIFICATIONS' => 'تنبيهات',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'ستكون إشعارات نظام SuiteCRM هنا.',
    'LBL_TOUR_PROFILE' => 'الملف التتعريفي',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'الوصول إلى الملف الشخصي والإعدادات وتسجيل الخروج.',
    'LBL_TOUR_QUICKCREATE' => 'إنشاء سريع',
    'LBL_TOUR_QUICKCREATE_DESCRIPTION' => 'قم بإنشاء السجلات بسرعة دون فقدان مكانك.',
    'LBL_TOUR_FOOTER' => 'تذييل قابل للطي',
    'LBL_TOUR_FOOTER_DESCRIPTION' => 'نشر وطي التذييل بسهولة.',
    'LBL_TOUR_CUSTOM' => 'تطبيقات مخصصة',
    'LBL_TOUR_CUSTOM_DESCRIPTION' => 'سيتم إدخال تكاملات مخصصة هنا.',
    'LBL_TOUR_BRAND' => 'العلامة التجارية الخاصة بك',
    'LBL_TOUR_BRAND_DESCRIPTION' => 'الشعار الخاص بك مكانه هنا. مرر المؤشر عليه للمزيد من المعلومات.',
    'LBL_TOUR_WELCOME' => 'مرحبابك في نظام SuiteCRM',
    'LBL_TOUR_WATCH' => 'شاهد ما هو الجديد في SuiteCRM',
    'LBL_TOUR_FEATURES' => '<ul style=""><li class="icon-ok">شريط تنقل مبسط جديد</li><li class="icon-ok">تذييل جديد قابل للطي</li><li class="icon-ok">بحث محسن</li><li class="icon-ok">قائمة إجراءات محدثة</li></ul><p>وأكثر من ذلك بكثير!</p>',
    'LBL_TOUR_VISIT' => 'للمزيد من المعلومات، يرجى زيارة تطبيقنا',
    'LBL_TOUR_DONE' => 'لقد انتهيت!',
    'LBL_TOUR_REFERENCE_1' => 'يمكنك دائماً الرجوع إلى',
    'LBL_TOUR_REFERENCE_2' => 'من خلال رابط "منتدى الدعم" تحت علامة التبويب الملف الشخصي.',
    'LNK_TOUR_DOCUMENTATION' => 'توثيق النظام',
    'LBL_TOUR_CALENDAR_URL_1' => 'هل تشارك تقويم SuiteCRM الخاص بك مع تطبيقات الطرف الثالث، مثل Microsoft Outlook أو Exchange؟ إذا كان الأمر كذلك، فهناك رابط جديد. هذا الرابط الجديد الأكثر أمانا يحتوي على مفتاح شخصي يمنع النشر غير المصرح به للتقويم.',
    'LBL_TOUR_CALENDAR_URL_2' => 'الحصول على رابط التقويم المشترك الجديد.',
    'LBL_CONTRIBUTORS' => 'المساهمون',
    'LBL_ABOUT_SUITE' => 'حول SuiteCRM',
    'LBL_PARTNERS' => 'الشركاء',
    'LBL_EDIT_ALL_RECURRENCES' => 'تعديل كل التواترات',
    'LBL_REMOVE_ALL_RECURRENCES' => 'حذف كل التواترات',
    'LBL_CONFIRM_REMOVE' => 'هل أنت متأكد من رغبتك بإزالة السجل؟',
    
    'LBL_MAINTAINER_SUITECRM' => 'SuiteCRM is written and maintained by SuiteCRM Ltd',
    'LBL_CONTRIBUTOR_SUITECRM' => 'SuiteCRM - نظام علاقات العملاء مفتوح المصدر للعالم',
    'LBL_CONTRIBUTOR_SECURITY_SUITE' => 'SecuritySuite بواسطة جاسون إيغرز',
    'LBL_CONTRIBUTOR_JJW_GMAPS' => 'خرائط جوجل JWDesign بواسطة جفري والترز',
    'LBL_CONTRIBUTOR_CONSCIOUS' => 'SuiteCRM Logo Design contributed by Conscious Solutions',
    'LBL_CONTRIBUTOR_RESPONSETAP' => 'Contribution to SuiteCRM by ResponseTap',
    'LBL_CONTRIBUTOR_GMBH' => 'حقول سير العمل المحسوبة مساهمة من diligent technology & business consulting GmbH',

    'LBL_LANGUAGE_ABOUT' => 'حول ترجمات SuiteCRM',
    'LBL_LANGUAGE_COMMUNITY_ABOUT' => 'الترجمة التعاونية من قبل مجتمع SuiteCRM',
    'LBL_LANGUAGE_COMMUNITY_PACKS' => 'تم إنشاء الترجمة باستخدام كراودِن (Crowdin)',

    'LBL_ABOUT_SUITE_2' => 'تم نشر SuiteCRM تحت ترخيص مفتوح المصدر - AGPLv3',
    'LBL_ABOUT_SUITE_4' => 'سيتم إصدار جميع الشفرات البرمجية لـ SuiteCRM التي يتم إدارتها وتطويرها بواسطة المشروع كمصدر مفتوح - AGPLv3',
    'LBL_ABOUT_SUITE_5' => 'دعم SuiteCRM متاح في كل من الخيارات المجانية و المدفوعة',

    'LBL_SUITE_PARTNERS' => 'لدينا شركاء موالين لـ SuiteCRM متحمسين للمصادر المفتوحة. لعرض قائمة شركائنا الكاملة، راجع موقعنا على شبكة الإنترنت.',

    'LBL_SAVE_BUTTON' => 'حفظ',
    'LBL_DELETE_BUTTON' => 'حذف',
    'LBL_APPLY_BUTTON' => 'تطبيق',
    'LBL_SEND_INVITES' => 'احفظ وأرسل دعوة',
    'LBL_CANCEL_BUTTON' => 'إلغاء',
    'LBL_CLOSE_BUTTON' => 'إغلاق',

    'LBL_CREATE_NEW_RECORD' => 'إنشاء نشاط',
    'LBL_CREATE_CALL' => 'سجل بيانات مُكالمة',
    'LBL_CREATE_MEETING' => 'جدولة اجتماع',

    'LBL_GENERAL_TAB' => 'تفاصيل',
    'LBL_PARTICIPANTS_TAB' => 'المدعوون',
    'LBL_REPEAT_TAB' => 'تواتر التكرار',

    'LBL_REPEAT_TYPE' => 'كرر',
    'LBL_REPEAT_INTERVAL' => 'كل',
    'LBL_REPEAT_END' => 'إنهاء',
    'LBL_REPEAT_END_AFTER' => 'بعد',
    'LBL_REPEAT_OCCURRENCES' => 'التكرار',
    'LBL_REPEAT_END_BY' => 'عند',
    'LBL_REPEAT_DOW' => 'على',
    'LBL_REPEAT_UNTIL' => 'كرر حتى',
    'LBL_REPEAT_COUNT' => 'عدد مرات التواتر',
    'LBL_REPEAT_LIMIT_ERROR' => 'طلبك سيُنشئ أكثر من $limit اجتماع.',

    //Events
    'LNK_EVENT' => 'الحدث',
    'LNK_EVENT_VIEW' => 'عرض حدث',
    'LBL_DATE' => 'التاريخ: ',
    'LBL_DURATION' => 'المدة: ',
    'LBL_NAME' => 'العنوان: ',
    'LBL_HOUR_ABBREV' => 'ساعة',
    'LBL_HOURS_ABBREV' => 'ساعات',
    'LBL_MINSS_ABBREV' => 'دقائق',
    'LBL_LOCATION' => 'المكان: ',
    'LBL_STATUS' => 'الحالة:',
    'LBL_DESCRIPTION' => 'وصف: ',
    //End Events

    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_INVALID_REQUEST' => 'حدث خطأ أثناء إجراء البحث. قد لا تكون صيغة الاستعلام الخاصة بك صالحة.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_ENGINE_NOT_FOUND' => 'لم نتمكن من العثور على محرك البحث المطلوب. حاول إجراء البحث مرة أخرى.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_NO_NODES_AVAILABLE' => 'فشل الاتصال بخادم البحث المرن (Elasticsearch).',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH' => 'حدث خطأ داخلي في البحث.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_DEFAULT' => 'حدث خطأ غير معروف أثناء إجراء البحث.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_END_MESSAGE' => 'اتصل بمدير النظام إذا استمرت المشكلة. المزيد من المعلومات متاحة في السجلات.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_MISSING_INDEX' => 'تعذر العثور على فِهْرِس البحث لوحدة أو أكثر من الوحدات النمطية. يُرجى التأكد من تكوين وتشغيل crontab، افتح تكوين البحث المرن وانقر على "جدولة الفهرسة الكاملة" وفكر في إنشاء مهمة جدولة "مفهرس البحث المرن" في حال عدم وجودها.',

    'LBL_ELASTIC_SEARCH_DEFAULT' => 'لا توجد نتائج مطابقة لمعايير البحث الخاصة بك. حاول توسيع نطاق بحثك.',

    'LNK_TASK_VIEW' => 'عرض المهام',
);
