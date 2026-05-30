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

//the left value is the key stored in the db and the right value is ie display value
//to translate, only modify the right value in each key/value pair
$app_list_strings = array(
//e.g. auf Deutsch 'Contacts'=>'Contakten',
    'language_pack_name' => 'العربية - ar',
    'moduleList' => array(
        'Home' => 'الصفحة الرئيسية',
        'ResourceCalendar' => 'تقويم الموظف',
        'Contacts' => 'جهات الاتصال',
        'Accounts' => 'الحسابات',
        'Alerts' => 'تنبيهات',
        'Opportunities' => 'فرص بيع',
        'Cases' => 'قضايا',
        'Notes' => 'ملاحظات',
        'Calls' => 'مكالمات',
        'TemplateSectionLine' => 'خط قسم القالب',
        'Calls_Reschedule' => 'إعادة جدولة المكالمات',
        'Emails' => 'رسائل بريد إلكتروني',
        'EAPM' => 'EAPM',
        'Meetings' => 'اجتماعات',
        'Tasks' => 'مهام',
        'Calendar' => 'التقويم',
        'Leads' => 'العملاء المحتملون',
        'Currencies' => 'عملات',
        'Activities' => 'أنشطة',
        'Bugs' => 'أخطاء برمجية',
        'Feeds' => 'مزود RSS',
        'iFrames' => 'مواقعي الإلكترونية',
        'TimePeriods' => 'فترات زمنية',
        'ContractTypes' => 'أنواع العقود',
        'Schedulers' => 'مُجدول المهام آلياً',
        'Project' => 'المشروع',
        'ProjectTask' => 'مهام المشروع',
        'Campaigns' => 'حملات',
        'CampaignLog' => 'سجل الحملات',
        'Documents' => 'مستندات',
        'DocumentRevisions' => 'مراجعات الوثيقة',
        'Connectors' => 'موصلات',
        'Roles' => 'الأدوار الوظيفية',
        'Notifications' => 'تنبيهات',
        'Sync' => 'مزامنة',
        'Users' => 'المستخدمون',
        'Employees' => 'الموظفون',
        'Administration' => 'إدارة',
        'ACLRoles' => 'أدوار المُستخدم',
        'InboundEmail' => 'عنوان إيميل سجل من الإنترنت',
        'Releases' => 'إصدارات',
        'Prospects' => 'المُستهدفون',
        'Queues' => 'قوائم الانتظار',
        'EmailMarketing' => 'التسويق بالبريد الإلكتروني',
        'EmailTemplates' => 'البريد الإلكتروني - قوالب',
        'ProspectLists' => 'قائمة العملاء المتوقعين',
        'SavedSearch' => 'عمليات البحث المحفوظة',
        'UpgradeWizard' => 'ترقية المُرشد الآلي',
        'Trackers' => 'متتبعات',
        'TrackerSessions' => 'جلسات المتتبع',
        'TrackerQueries' => 'استعلامات المتتبع',
        'FAQ' => 'الأسئلة المُتكررة',
        'Newsletters' => 'التشرات الإخبارية',
        'SugarFeed' => 'مصادر SuiteCRM',
        'SugarFavorites' => 'تفضيلات SuiteCRM',

        'OAuthKeys' => 'مفاتيح المستهلك OAuth',
        'OAuthTokens' => 'رموز OAuth',
        'OAuth2Clients' => 'تطبيقات OAuth',
        'OAuth2Tokens' => 'رموز OAuth',
        'OAuth2AuthCodes' => 'OAuth Authorization Codes',
    ),

    'moduleListSingular' => array(
        'Home' => 'الرئيسية',
        'Dashboard' => 'لوحة التحكم',
        'Contacts' => 'جهة الإتصال',
        'Accounts' => 'الحساب',
        'Opportunities' => 'الفرصة',
        'Cases' => 'القضية',
        'Notes' => 'ملاحظة',
        'Calls' => 'مكالمات',
        'Emails' => 'البريد الالكتروني',
        'EmailTemplates' => 'قالب البريد الإلكتروني',
        'Meetings' => 'اجتماعات',
        'Tasks' => 'مهمة عمل',
        'Calendar' => 'التقويم',
        'Leads' => 'العملاء المحتملون',
        'Activities' => 'أنشطة',
        'Bugs' => 'أخطاء',
        'KBDocuments' => 'وثائق قسم المعرفة',
        'Feeds' => 'مُزود RSS',
        'iFrames' => 'بوابتي',
        'TimePeriods' => 'فترات زمنية',
        'Project' => 'المشروع',
        'ProjectTask' => 'مهام المشروع',
        'Prospects' => 'عملاء متوقعون',
        'Campaigns' => 'حملات',
        'Documents' => 'مستندات',
        'Sync' => 'مزامنة',
        'Users' => 'المُستخدمون',
        'SugarFavorites' => 'تفضيلات SuiteCRM',

    ),

    'checkbox_dom' => array(
        '' => '',
        '1' => 'نعم',
        '2' => 'لا',
    ),

    //e.g. en français 'Analyst'=>'Analyste',
    'account_type_dom' => array(
        '' => '',
        'Analyst' => 'محلل',
        'Competitor' => 'منافس',
        'Customer' => 'عميل',
        'Integrator' => 'ملتزم بالإندماج',
        'Investor' => 'مستثمر',
        'Partner' => 'شريك',
        'Press' => 'صحفي',
        'Prospect' => 'عميل متوقع',
        'Reseller' => 'وسيط بيع',
        'Other' => 'أخرى',
    ),
    //e.g. en español 'Apparel'=>'Ropa',
    'industry_dom' => array(
        '' => '',
        'Apparel' => 'أزياء وملابس',
        'Banking' => 'مصرفية',
        'Biotechnology' => 'تكنولوجيا حيوية',
        'Chemicals' => 'كيماويات',
        'Communications' => 'إتصالات',
        'Construction' => 'تشييد وبناء',
        'Consulting' => 'إستشارات',
        'Education' => 'تعليم',
        'Electronics' => 'إلكترونيات',
        'Energy' => 'طاقة',
        'Engineering' => 'هندسة',
        'Entertainment' => 'ترفيه',
        'Environmental' => 'بيئة',
        'Finance' => 'مالية',
        'Government' => 'جهات حكومية',
        'Healthcare' => 'رعاية صحية',
        'Hospitality' => 'فندقة',
        'Insurance' => 'تأمين',
        'Machinery' => 'مكائن والآلات',
        'Manufacturing' => 'تصنيع',
        'Media' => 'إعلام وإعلان',
        'Not For Profit' => 'جهات غير ربحية',
        'Recreation' => 'استجمام',
        'Retail' => 'تجارة تجزئة',
        'Shipping' => 'الشحن',
        'Technology' => 'تكنولوجيا',
        'Telecommunications' => 'اتصالات معلوماتية',
        'Transportation' => 'نقل ',
        'Utilities' => 'خدمات',
        'Other' => 'أخرى',
    ),
    'lead_source_default_key' => 'نتجت آلياً',
    'lead_source_dom' => array(
        '' => '',
        'Cold Call' => 'مكالمة للتسويق',
        'Existing Customer' => 'عميل موجود',
        'Self Generated' => 'نتجت آلياً',
        'Employee' => 'موظف',
        'Partner' => 'شريك',
        'Public Relations' => 'علاقات عامة',
        'Direct Mail' => 'رسالة بريدية مباشرة',
        'Conference' => 'مؤتمر',
        'Trade Show' => 'معرض تجاري',
        'Web Site' => 'موقع إنترنت',
        'Word of mouth' => 'توصيات الناس',
        'Email' => 'بريد الكتروني',
        'Campaign' => 'الحملات التسويقية',
        'Other' => 'أخرى',
    ),
    'opportunity_type_dom' => array(
        '' => '',
        'Existing Business' => 'نشاط تجاري قائم',
        'New Business' => 'نشاط تجاري جديد',
    ),
    'roi_type_dom' => array(
        'Revenue' => 'الإيرادات',
        'Investment' => 'الاستثمار',
        'Expected_Revenue' => 'الإيرادات المتوقعة',
        'Budget' => 'الميزانية',

    ),
    //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
    'opportunity_relationship_type_default_key' => 'متخذ القرار الرئيسي',
    'opportunity_relationship_type_dom' => array(
        '' => '',
        'Primary Decision Maker' => 'متخذ القرار الرئيسي',
        'Business Decision Maker' => 'متخذ القرار لنشاط تجاري',
        'Business Evaluator' => 'مُقيم النشاط التجاري',
        'Technical Decision Maker' => 'متخذ القرار في المجال الفني',
        'Technical Evaluator' => 'المقيم الفني',
        'Executive Sponsor' => 'الراعي التنفيذي',
        'Influencer' => 'مؤثر',
        'Other' => 'أخرى',
    ),
    //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
    'case_relationship_type_default_key' => 'جهة الاتصال الرئيسية',
    'case_relationship_type_dom' => array(
        '' => '',
        'Primary Contact' => 'جهة الاتصال الرئيسية',
        'Alternate Contact' => 'جهة اتصال ثانوية',
    ),
    'payment_terms' => array(
        '' => '',
        'Net 15' => 'الصافي 15',
        'Net 30' => 'صافي 30',
    ),
    'sales_stage_default_key' => 'تتبع',
    'sales_stage_dom' => array(
        'Prospecting' => 'تتبع',
        'Qualification' => 'تقييم',
        'Needs Analysis' => 'تحليل الاحتياجات',
        'Value Proposition' => 'شرح الفائدة والقيمة',
        'Id. Decision Makers' => 'تحديد متخذي القرار',
        'Perception Analysis' => 'تحليل وتحديد ما يناسب العميل',
        'Proposal/Price Quote' => 'عرض أسعار',
        'Negotiation/Review' => 'تفاوض ومراجعة',
        'Closed Won' => 'تم البيع',
        'Closed Lost' => 'فشل البيع',
    ),
    'sales_probability_dom' => // keys must be the same as sales_stage_dom
        array(
            'Prospecting' => '١٠',
            'Qualification' => '٢٠',
            'Needs Analysis' => '٢٥',
            'Value Proposition' => '٣٠',
            'Id. Decision Makers' => '40',
            'Perception Analysis' => '٥٠',
            'Proposal/Price Quote' => '65',
            'Negotiation/Review' => '80',
            'Closed Won' => '١٠٠',
            'Closed Lost' => '0',
        ),
    'activity_dom' => array(
        'Call' => 'مكالمة',
        'Meeting' => 'مقابلة',
        'Task' => 'مهمة',
        'Email' => 'بريد الكتروني',
        'Note' => 'ملاحظة',
    ),
    'salutation_dom' => array(
        '' => '',
        'Mr.' => 'السيد/',
        'Ms.' => 'الآنسة.',
        'Mrs.' => 'السيدة.',
        'Miss' => 'مفقود',
        'Dr.' => 'د.',
        'Prof.' => 'الأستاذ الدكتور',
    ),

    'redirect_uri_type_dom' => [
        'pretty_url' => 'Pretty URL (/ep/)',
        'query_string' => 'Query String (index.php?entryPoint=)'
    ],

    //time is in seconds; the greater the time the longer it takes;
    'reminder_max_time' => 90000,
    'reminder_time_options' => array(
        60 => 'قبل دقيقة واحدة',
        300 => 'قبل 5 دقائق',
        600 => 'قبل 10 دقائق',
        900 => 'قبل 15 دقائق',
        1800 => 'قبل 30 دقيقة',
        3600 => 'قبل ساعة واحدة',
        7200 => 'قبل ساعتين',
        10800 => 'قبل 3 ساعات',
        18000 => 'قبل 5 ساعات',
        86400 => 'قبل يوم واحد',
    ),

    'task_priority_default' => 'متوسط',
    'task_priority_dom' => array(
        'High' => 'عالي',
        'Medium' => 'متوسط',
        'Low' => 'منخفض',
    ),
    'task_status_default' => 'لم يبدأ',
    'task_status_dom' => array(
        'Not Started' => 'لم يبدأ',
        'In Progress' => 'جاري التنفيذ',
        'Completed' => 'أُنجزت',
        'Pending Input' => 'بإنتظار مُعطيات أخرى',
        'Deferred' => 'مؤجل',
    ),
    'meeting_status_default' => 'حُدد الاجتماع',
    'meeting_status_dom' => array(
        'Planned' => 'حُدد الاجتماع',
        'Held' => 'تم الاجتماع',
        'Not Held' => 'لم يعقد',
    ),
    'extapi_meeting_password' => array(
        'WebEx' => 'WebEx',
    ),
    'meeting_type_dom' => array(
        'Other' => 'أخرى',
        'Sugar' => 'SuiteCRM',
    ),
    'call_status_default' => 'حُدد الاجتماع',
    'call_status_dom' => array(
        'Planned' => 'ُدد وقتها',
        'Held' => 'تمت',
        'Not Held' => 'لم تتم',
    ),
    'call_direction_default' => 'صادرة',
    'call_direction_dom' => array(
        'Inbound' => 'واردة',
        'Outbound' => 'صادرة',
    ),
    'lead_status_dom' => array(
        '' => '',
        'New' => 'جديد',
        'Assigned' => 'كُلف به',
        'In Process' => 'جاري التنفيذ',
        'Converted' => 'تحول',
        'Recycled' => 'معاد إستخدامه',
        'Dead' => 'منتهي',
    ),
    'case_priority_default_key' => 'P2',
    'case_priority_dom' => array(
        'P1' => 'عالي',
        'P2' => 'متوسط',
        'P3' => 'منخفض',
    ),
    'user_type_dom' => array(
        'RegularUser' => 'مستخدم عادي',
        'Administrator' => 'مدير نظام',
    ),
    'user_status_dom' => array(
        'Active' => 'نشط',
        'Inactive' => 'غير نشط',
    ),
    'user_factor_auth_interface_dom' => array(
        'FactorAuthEmailCode' => 'رمز البريد الإلكتروني',
    ),
    'employee_status_dom' => array(
        'Active' => 'نشط',
        'Terminated' => 'طويّ قيده',
        'Leave of Absence' => 'إجازة ومتغيب',
    ),
    'messenger_type_dom' => array(
        '' => '',
        'MSN' => 'أم إس أن',
        'Yahoo!' => 'ياهو !',
        'AOL' => 'أمريكا أون لاين',
    ),
    'project_task_priority_options' => array(
        'High' => 'عالي',
        'Medium' => 'متوسط',
        'Low' => 'Low',
    ),
    'project_task_priority_default' => 'متوسط',

    'project_task_status_options' => array(
        'Not Started' => 'لم يبدأ',
        'In Progress' => 'جاري التنفيذ',
        'Completed' => 'اكتمل المشروع',
        'Pending Input' => 'بإنتظار مُعطيات أخرى',
        'Deferred' => 'مؤجل',
    ),
    'project_task_utilization_options' => array(
        '0' => 'لا يوجد',
        '25' => '٢٥',
        '50' => '٥٠',
        '75' => '٧٥',
        '100' => '١٠٠',
    ),

    'project_status_dom' => array(
        'Draft' => 'مسودة',
        'In Review' => 'قيد المُراجعة',
        'Underway' => 'قيد التنفيذ',
        'On_Hold' => 'مؤجل',
        'Completed' => 'تم التنفيذ',
    ),
    'project_status_default' => 'مُسودة',

    'project_duration_units_dom' => array(
        'Days' => 'أيام',
        'Hours' => 'ساعات',
    ),

    'activity_status_type_dom' => array(
        '' => '--لا شيء--',
        'active' => 'نشط',
        'inactive' => 'غير نشط',
    ),

    // Note:  do not translate record_type_default_key
    //        it is the key for the default record_type_module value
    'record_type_default_key' => 'الحسابات',
    'record_type_display' => array(
        '' => '',
        'Accounts' => 'حساب',
        'Opportunities' => 'فرص بيع',
        'Cases' => 'القضية',
        'Leads' => 'عملاء محتملون',
        'Contacts' => 'جهات إتصال', // cn (11/22/2005) added to support Emails

        'Bugs' => 'الأخطاء',
        'Project' => 'مشروع',

        'Prospects' => 'عميل متوقع',
        'ProjectTask' => 'مهمة المشروع',

        'Tasks' => 'مهام',

        'AOS_Contracts' => 'العقد',
        'AOS_Invoices' => 'الفاتورة',
        'AOS_Quotes' => 'عرض الأسعار',
        'AOS_Products' => 'منتج',

    ),

    'record_type_display_notes' => array(
        'Accounts' => 'حساب',
        'Contacts' => 'جهات إتصال',
        'Opportunities' => 'فرص بيع',
        'Campaigns' => 'حملات تسويقية',
        'Tasks' => 'مهام',
        'Emails' => 'بريد إلكتروني',

        'Bugs' => 'الأخطاء',
        'Project' => 'مشروع',
        'ProjectTask' => 'مهمة المشروع',
        'Prospects' => 'عملاء متوقعون',
        'Cases' => 'القضية',
        'Leads' => 'عملاء محتملون',

        'Meetings' => 'اجتماعات',
        'Calls' => 'مكالمات',

        'AOS_Contracts' => 'عقد',
        'AOS_Invoices' => 'الفاتورة',
        'AOS_Quotes' => 'عرض الأسعار',
        'AOS_Products' => 'منتج',
    ),

    'parent_type_display' => array(
        'Accounts' => 'حساب',
        'Contacts' => 'جهات إتصال',
        'Tasks' => 'مهام',
        'Opportunities' => 'فرص بيع',

        'Bugs' => 'أخطاء',
        'Cases' => 'القضية',
        'Leads' => 'عملاء محتملون',

        'Project' => 'مشروع',
        'ProjectTask' => 'مهمة المشروع',

        'Prospects' => 'عملاء متوقعون',

        'AOS_Contracts' => 'عقد',
        'AOS_Invoices' => 'الفاتورة',
        'AOS_Quotes' => 'عرض الأسعار',
        'AOS_Products' => 'منتج',

    ),
    'parent_line_items' => array(
        'AOS_Quotes' => 'عروض الأسعار',
        'AOS_Invoices' => 'الفواتير',
        'AOS_Contracts' => 'العقود',
    ),
    'issue_priority_default_key' => 'متوسط',
    'issue_priority_dom' => array(
        'Urgent' => 'مُستعجل',
        'High' => 'عالي',
        'Medium' => 'متوسط',
        'Low' => 'منخفض',
    ),
    'issue_resolution_default_key' => '',
    'issue_resolution_dom' => array(
        '' => '',
        'Accepted' => 'تم قبوله',
        'Duplicate' => 'مكرر',
        'Closed' => 'مغلق',
        'Out of Date' => 'إنتهى وقته',
        'Invalid' => 'غير صالح',
    ),

    'issue_status_default_key' => 'جديد',
    'issue_status_dom' => array(
        'New' => 'جديد',
        'Assigned' => 'كُلف به',
        'Closed' => 'مغلق',
        'Pending' => 'معلق',
        'Rejected' => 'مهمل',
    ),

    'bug_priority_default_key' => 'متوسط',
    'bug_priority_dom' => array(
        'Urgent' => 'مُستعجل',
        'High' => 'عالي',
        'Medium' => 'متوسط',
        'Low' => 'منخفض',
    ),
    'bug_resolution_default_key' => '',
    'bug_resolution_dom' => array(
        '' => '',
        'Accepted' => 'تم قبوله',
        'Duplicate' => 'مكرر',
        'Fixed' => 'تم إصلاحه',
        'Out of Date' => 'متأخر',
        'Invalid' => 'غير صالح',
        'Later' => 'فيما بعد',
    ),
    'bug_status_default_key' => 'جديد',
    'bug_status_dom' => array(
        'New' => 'جديد',
        'Assigned' => 'كُلف به',
        'Closed' => 'مغلق',
        'Pending' => 'معلق',
        'Rejected' => 'مرفوض',
    ),
    'bug_type_default_key' => 'الأخطاء',
    'bug_type_dom' => array(
        'Defect' => 'عيب',
        'Feature' => 'ميزه',
    ),
    'case_type_dom' => array(
        'Administration' => 'إدارة',
        'Product' => 'المنتج',
        'User' => 'مستخدم',
    ),

    'source_default_key' => '',
    'source_dom' => array(
        '' => '',
        'Internal' => 'داخليا',
        'Forum' => 'منتدى',
        'Web' => 'ويب',
        'InboundEmail' => 'بريد الكتروني',
    ),

    'product_category_default_key' => '',
    'product_category_dom' => array(
        '' => '',
        'Accounts' => 'حسابات',
        'Activities' => 'أنشطة',
        'Bugs' => 'أخطاء',
        'Calendar' => 'التقويم',
        'Calls' => 'مكالمات',
        'Campaigns' => 'حملات',
        'Cases' => 'القضايا',
        'Contacts' => 'جهات إتصال',
        'Currencies' => 'عملات',
        'Dashboard' => 'المؤشرات والاحصاءات',
        'Documents' => 'مستندات',
        'Emails' => 'رسائل إلكترونية',
        'Feeds' => 'مُزود',
        'Forecasts' => 'تنبؤات',
        'Help' => 'مساعدة',
        'Home' => 'الرئيسية',
        'Leads' => 'عملاء محتملون',
        'Meetings' => 'اجتماعات',
        'Notes' => 'ملاحظات',
        'Opportunities' => 'فرص بيع',
        'Outlook Plugin' => 'مزود أوت لوك',
        'Projects' => 'مشاريع',
        'Quotes' => 'عروض الأسعار',
        'Releases' => 'إصدارات',
        'RSS' => 'مزود RSS',
        'Studio' => 'ستديو',
        'Upgrade' => 'hgترقية',
        'Users' => 'المُستخدمون',
    ),
    /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
    'campaign_status_dom' => array(
        '' => '',
        'Planning' => 'تخطيط',
        'Active' => 'نشط',
        'Inactive' => 'غير نشط',
        'Complete' => 'إكتمل',
        //'In Queue' => 'In Queue',
        //'Sending' => 'Sending',
    ),
    'campaign_type_dom' => array(
        '' => '',
        'Telesales' => 'البيع بالهاتف',
        'Mail' => 'بريد',
        'Email' => 'بريد الكتروني',
        'Print' => 'اطبع',
        'Web' => 'ويب',
        'Radio' => 'راديو',
        'Television' => 'تليفيزيون',
        'NewsLetter' => 'نشرات إخبارية',
        'Survey' => 'الاستطلاع',
    ),

    'newsletter_frequency_dom' => array(
        '' => '',
        'Weekly' => 'أسبوعي',
        'Monthly' => 'شهرى',
        'Quarterly' => 'ربع سنوي',
        'Annually' => 'سنوياً',
    ),

    'notifymail_sendtype' => array(
        'SMTP' => 'SMTP',
    ),
    'dom_cal_month_long' => array(
        '0' => '',
        '1' => 'يناير',
        '2' => 'فبراير',
        '3' => 'مارس',
        '4' => 'أبريل',
        '5' => 'مايو',
        '6' => 'يونيو',
        '7' => 'يوليو',
        '8' => 'أغسطس',
        '9' => 'سبتمبر',
        '10' => 'أكتوبر',
        '11' => 'نوفمبر',
        '12' => 'ديسمبر',
    ),
    'dom_cal_month_short' => array(
        '0' => '',
        '1' => 'يناير',
        '2' => 'فبراير',
        '3' => 'مارس',
        '4' => 'أبريل',
        '5' => 'مايو',
        '6' => 'يونيو',
        '7' => 'يوليو',
        '8' => 'أغسطس',
        '9' => 'سبتمبر',
        '10' => 'أكتوبر',
        '11' => 'نوفمبر',
        '12' => 'ديسمبر',
    ),
    'dom_cal_day_long' => array(
        '0' => '',
        '1' => 'الأحد',
        '2' => 'الإثنين',
        '3' => 'الثلاثاء',
        '4' => 'الأربعاء',
        '5' => 'الخميس',
        '6' => 'الجمعة',
        '7' => 'السبت',
    ),
    'dom_cal_day_short' => array(
        '0' => '',
        '1' => 'الأحد',
        '2' => 'الاثنين',
        '3' => 'الثلاثاء',
        '4' => 'الأربعاء',
        '5' => 'الخميس',
        '6' => 'الجمعة',
        '7' => 'السبت',
    ),
    'dom_meridiem_lowercase' => array(
        'am' => 'ص',
        'pm' => 'م',
    ),
    'dom_meridiem_uppercase' => array(
        'AM' => 'ص',
        'PM' => 'م',
    ),

    'dom_inbound_email_account_types' => [
        'personal' => 'شخصي',
        'group' => 'المجموعة',
        'bounce' => 'مكافأة',
    ],

    'dom_inbound_email_auth_types' => [
        'basic' => 'الأذون الأساسية',
        'oauth' => 'الأذون المفتوحة (OAuth)',
    ],

    'dom_outbound_email_auth_types' => [
        'no_auth' => 'No Auth',
        'basic' => 'الأذون الأساسية',
        'oauth' => 'الأذون المفتوحة (OAuth)',
    ],

    'dom_external_oauth_connection_types' => [
        'personal' => 'شخصي',
        'group' => 'مجموعة',
    ],

    'dom_external_oauth_provider_types' => [
        'personal' => 'شخصي',
        'group' => 'مجموعة',
    ],

    'dom_outbound_email_account_types' => [
        'user' => 'شخصي',
        'group' => 'مجموعة',
        'system' => 'نظام',
        'system-override' => 'صلاحيات النظام',
    ],

    'dom_inbound_email_account_status' => [
        'Active' => 'نشط',
        'Inactive' => 'غير نشط',
    ],

    'dom_email_body_filtering_option' => [
      'multi' => 'بحث متعدد الكلمات',
      'single' => 'البحث عن كلمة واحدة',
    ],

    'dom_email_types' => array(
        'out' => 'أُرسلت',
        'archived' => 'مؤرشف',
        'draft' => 'مُسودة',
        'inbound' => 'وارد',
        'campaign' => 'حملات',
    ),
    'dom_email_status' => array(
        'archived' => 'مؤرشف',
        'closed' => 'مغلق',
        'draft' => 'مُسودة',
        'read' => 'مقروء',
        'replied' => 'تم الرد عليه',
        'sent' => 'أُرسلت',
        'send_error' => 'خطأ في الإرسال',
        'unread' => 'غير مقروء',
    ),
    'dom_email_archived_status' => array(
        'archived' => 'مؤرشف',
    ),

    'dom_email_server_type' => array(
        '' => '--لا شيء--',
        'imap' => 'IMAP',
    ),
    'dom_mailbox_type' => array(/*''           => '--None Specified--',*/
        'pick' => 'لا شيء',
        'createcase' => 'إنشاء قضية',
        'bounce' => 'معالجة الرد',
    ),
    'dom_email_distribution' => array(
        '' => '--لا شيء--',
        'direct' => 'تكليف مباشر',
        'roundRobin' => 'إرسال للجميع تتابعياً',
        'leastBusy' => 'الأقل إنشغالا',
    ),
    'dom_email_errors' => array(
        1 => 'حدد مستخدم واحد فقط عند تعيين العناصر مباشرة.',
        2 => 'يجب تعيين العناصر المحددة فقط عند تعيين العناصر مباشرة.',
    ),
    'dom_email_bool' => array(
        'bool_true' => 'نعم',
        'bool_false' => 'لا',
    ),
    'dom_int_bool' => array(
        1 => 'نعم',
        0 => 'لا',
    ),
    'dom_switch_bool' => array(
        'on' => 'نعم',
        'off' => 'لا',
        '' => 'لا',
    ),

    'dom_email_link_type' => array(
        'sugar' => 'تطبيق البريد الإلكتروني الخاص بـ SuiteCRM',
        'mailto' => 'تطبيق بريد إلكتروني خارجي',
    ),

    'dom_editor_type' => array(
        'none' => 'HTML مباشر',
        'tinymce' => 'TinyMCE',
        'mozaik' => 'Mozaik',
    ),

    'dom_email_editor_option' => array(
        '' => 'تنسيق البريد الإلكتروني الافتراضي',
        'html' => 'صيغة HTML',
        'plain' => 'بدون تنسيق',
    ),

    'schedulers_times_dom' => array(
        'not run' => 'إنتهى الوقت المُحدد، لم يتم التنفيذ',
        'ready' => 'جاهز',
        'in progress' => 'جاري التنفيذ',
        'failed' => 'فشل',
        'completed' => 'تم التنفيذ',
        'no curl' => 'لم يُنفذ: لعدم وجود برنامج cURL',
    ),

    'scheduler_status_dom' => array(
        'Active' => 'نشط',
        'Inactive' => 'غير نشط',
    ),

    'scheduler_period_dom' => array(
        'min' => 'دقائق',
        'hour' => 'ساعات',
    ),
    'document_category_dom' => array(
        '' => '',
        'Marketing' => 'تسويق',
        'Knowledege Base' => 'قاعدة المعلومات المعرفية',
        'Sales' => 'المبيعات',
    ),

    'email_category_dom' => array(
        '' => '',
        'Archived' => 'مؤرشف',
        // TODO: add more categories here...
    ),

    'document_subcategory_dom' => array(
        '' => '',
        'Marketing Collateral' => 'وسائل تسويق ثانوية',
        'Product Brochures' => 'مطويات ونشرات عن المُنتج',
        'FAQ' => 'الأسئلة المُتكررة',
    ),

    'document_status_dom' => array(
        'Active' => 'نشط',
        'Draft' => 'مسودة',
        'FAQ' => 'الأسئلة المُتكررة',
        'Expired' => 'منتهي الصلاحية',
        'Under Review' => 'تحت المراجعة',
        'Pending' => 'معلق',
    ),
    'document_template_type_dom' => array(
        '' => '',
        'mailmerge' => 'دمج البريد',
        'eula' => 'EULA-ترخيص للمُستخدم النهائي',
        'nda' => 'وثيقة الإلتزام بسرية المعلومات',
        'license' => 'إتفاقية الترخيص',
    ),
    'dom_meeting_accept_options' => array(
        'accept' => 'قبول',
        'decline' => 'رفض',
        'tentative' => 'غير مؤكد',
    ),
    'dom_meeting_accept_status' => array(
        'accept' => 'تم قبوله',
        'decline' => 'مرفوض',
        'tentative' => 'غير مؤكد',
        'none' => 'لاشئ',
    ),
    'duration_intervals' => array(
        '0' => '٠٠',
        '15' => '١٥',
        '30' => '٣٠',
        '45' => '٤٥',
    ),
    'repeat_type_dom' => array(
        '' => '--لا شيء--',
        'Daily' => 'يومى',
        'Weekly' => 'أسبوعي',
        'Monthly' => 'شهرى',
        'Yearly' => 'سنوياً',
    ),

    'repeat_intervals' => array(
        '' => '',
        'Daily' => 'يوم (أيام)',
        'Weekly' => 'أسبوع (أسابيع)',
        'Monthly' => 'شهر (أشهر)',
        'Yearly' => 'سنة (سنوات)',
    ),

    'duration_dom' => array(
        '' => '--لا شيء--',
        '900' => 'منذ 15 دقيقة',
        '1800' => 'منذ 30 دقيقة',
        '2700' => '45 دقيقة',
        '3600' => 'مذ ساعة',
        '5400' => 'ساعة ونصف',
        '7200' => 'ساعتان',
        '10800' => '3 ساعات',
        '21600' => '6 ساعات',
        '86400' => 'يوم واحد',
        '172800' => 'يومان',
        '259200' => '3 أيام',
        '604800' => 'أسبوع واحد',
    ),


//prospect list type dom
    'prospect_list_type_dom' => array(
        'default' => 'الإفتراضي',
        'seed' => 'الموظفون المختبرين للرسالة قبل إرسالها للعملاء',
        'exempt_domain' => 'قائمة مُنقحة - حسب النطاق',
        'exempt_address' => 'قائمة مُنقحة - حسب عنوان البريد الإلكتروني',
        'exempt' => 'قائمة الحظر - حسب المعرف',
        'test' => 'اختبار',
    ),

    'email_settings_num_dom' => array(
        '10' => '١٠',
        '20' => '٢٠',
        '50' => '٥٠',
    ),
    'email_marketing_status_dom' => array(
        '' => '',
        'active' => 'نشط',
        'inactive' => 'غير نشط',
    ),

    'campainglog_activity_type_dom' => array(
        '' => '',
        'targeted' => 'الرسالة أرسلت/محاولة',
        'send error' => 'الرسائل الراجعة بسبب خطأ، أخرى',
        'invalid email' => 'الرسائل الراجعة بسبب خطأ عنوان البريد الإلكتروني',
        'link' => 'النقر على الرابط',
        'viewed' => 'رسائل شوهدت',
        'removed' => 'ترك القائمة البريدية',
        'lead' => 'عميل مُحتمل أُنشئ',
        'contact' => 'جهات إتصال أُنشئت',
        'blocked' => 'مُنقحة بالعنوان أو النطاق',
        'Survey' => 'ردود الإستطلاعات',
    ),

    'campainglog_target_type_dom' => array(
        'Contacts' => 'جهات إتصال',
        'Users' => 'المُستخدمون',
        'Prospects' => 'عملاء متوقعون',
        'Leads' => 'عملاء محتملون',
        'Accounts' => 'حسابات',
    ),
    'merge_operators_dom' => array(
        'like' => 'تحتوي على',
        'exact' => 'تماما',
        'start' => 'تبدأ بـ',
    ),

    'custom_fields_importable_dom' => array(
        'true' => 'نعم',
        'false' => 'لا',
        'required' => 'إلزامي',
    ),

    'custom_fields_merge_dup_dom' => array(
        0 => 'غير مُتاح',
        1 => 'تمكين',
        2 => 'بحث',
        3 => 'الفرز الافتراضي المحدد',
        4 => 'فرز فقط',
    ),

    'projects_priority_options' => array(
        'high' => 'عالي',
        'medium' => 'متوسط',
        'low' => 'منخفض',
    ),

    'projects_status_options' => array(
        'notstarted' => 'لم يبدأ بعد',
        'inprogress' => 'جاري التنفيذ',
        'completed' => 'تم التنفيذ',
    ),
    // strings to pass to Flash charts
    'chart_strings' => array(
        'expandlegend' => 'تكبير أداة تفسير الرسوم Legend',
        'collapselegend' => 'تقليص أداة تفسير الرسوم',
        'clickfordrilldown' => 'أنقر لعرض المعلومات بشكل أعمق',
        'detailview' => 'مزيد من التفاصيل...',
        'piechart' => 'رسم دائري',
        'groupchart' => 'رسم هيكلي بياني',
        'stackedchart' => 'رسم الأعمدة المُكدسة',
        'barchart' => 'رسم الأعمدة',
        'horizontalbarchart' => 'رسم أفقي',
        'linechart' => 'رسم خطي',
        'noData' => 'لا تتوفر بيانات',
        'print' => 'طباعة',
        'pieWedgeName' => 'أقسام',
    ),
    'release_status_dom' => array(
        'Active' => 'نشط',
        'Inactive' => 'غير نشط',
    ),
    'email_settings_for_ssl' => array(
        '0' => '',
        '1' => 'SSL',
        '2' => 'TLS',
    ),
    'import_enclosure_options' => array(
        '\'' => 'علامة اقتباس مفردة (&#39;)',
        '"' => 'علامة اقتباس مزدوجة (&#34;)',
        '' => '--لا شيء--',
        'other' => 'أخرى:',
    ),
    'import_delimeter_options' => array(
        ',' => ',',
        ';' => ';',
        '\t' => '\t',
        '.' => '.',
        ':' => ':',
        '|' => '|',
        'other' => 'أخرى:',
    ),
    'link_target_dom' => array(
        '_blank' => 'نافذة جديدة',
        '_self' => 'نفس النافذة',
    ),
    'dashlet_auto_refresh_options' => array(
        '-1' => 'عدم إعادة التحميل أتوماتيكيا',
        '30' => 'كل 30 ثانية',
        '60' => 'منذ دقيقة واحدة',
        '180' => 'كل 3 دقائق',
        '300' => 'منذ 5 دقائق',
        '600' => 'منذ 10 دقيقة',
    ),
    'dashlet_auto_refresh_options_admin' => array(
        '-1' => 'أبدا',
        '30' => 'كل 30 ثانية',
        '60' => 'منذ دقيقة واحدة',
        '180' => 'كل 3 دقائق',
        '300' => 'منذ 5 دقائق',
        '600' => 'منذ 10 دقيقة',
    ),
    'date_range_search_dom' => array(
        '=' => 'يساوي',
        'not_equal' => 'لا يُساوي',
        'greater_than' => 'بعد',
        'less_than' => 'قبل',
        'last_7_days' => 'آخر ٧ أيام',
        'next_7_days' => 'السبعة أيام القادمة',
        'last_30_days' => 'آخر ٣٠ يوما',
        'next_30_days' => 'الثلاثون يوما القادمة',
        'last_month' => 'آخر شهر',
        'this_month' => 'الشهر الحالي',
        'next_month' => 'الشهر التالي',
        'last_year' => 'السنة الأخيرة',
        'this_year' => 'السنة الحالية',
        'next_year' => 'السنة التالية',
        'between' => 'يتراوح بين',
    ),
    'numeric_range_search_dom' => array(
        '=' => 'يساوي',
        'not_equal' => 'لا يساوي',
        'greater_than' => 'أكبر من',
        'greater_than_equals' => 'أكبر من أو يساوى',
        'less_than' => 'أصغر من',
        'less_than_equals' => 'أصغر من أو يساوى',
        'between' => 'يتراوح بين',
    ),
    'lead_conv_activity_opt' => array(
        'copy' => 'نسخ',
        'move' => 'نقل',
        'donothing' => 'لا تفعل شيئا',
    ),
);

$app_strings = array(
    'LBL_SEARCH_REAULTS_TITLE' => 'النتائج',
    'ERR_SEARCH_INVALID_QUERY' => 'حدث خطأ أثناء إجراء البحث. قد لا تكون صيغة الاستعلام الخاصة بك صالحة.',
    'ERR_SEARCH_NO_RESULTS' => 'لا توجد نتائج مطابقة لمعايير البحث الخاصة بك. حاول توسيع نطاق بحثك.',
    'LBL_SEARCH_PERFORMED_IN' => 'تم إجراء البحث في',
    'LBL_EMAIL_CODE' => 'رمز البريد الإلكتروني:',
    'LBL_SEND' => 'أرسل',
    'LBL_LOGOUT' => 'خروج',
    'LBL_TOUR_NEXT' => 'التالي',
    'LBL_TOUR_SKIP' => 'تجاوزه',
    'LBL_TOUR_BACK' => 'رجوع',
    'LBL_TOUR_TAKE_TOUR' => 'قم جولة',
    'LBL_MOREDETAIL' => 'معلومات إضافية' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'تحرير على السريع' /*for 508 compliance fix*/,
    'LBL_VIEW_INLINE' => 'مُشاهدة' /*for 508 compliance fix*/,
    'LBL_BASIC_SEARCH' => 'تنقيح وفلترة البيانات' /*for 508 compliance fix*/,
    'LBL_Blank' => ' ' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD' => 'إضافة' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD_EMAIL' => 'إضافة عنوان بريد إلكتروني' /*for 508 compliance fix*/,
    'LBL_HIDE_SHOW' => 'إظهار/إخفاء' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'احذف' /*for 508 compliance fix*/,
    'LBL_ID_FF_CLEAR' => 'مسح' /*for 508 compliance fix*/,
    'LBL_ID_FF_VCARD' => 'بطاقة جهة اتصال (vCard)' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE' => 'قم بإزالة' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE_EMAIL' => 'إزالة عنوان بريد إلكترني' /*for 508 compliance fix*/,
    'LBL_ID_FF_OPT_OUT' => 'إلغاء الاشتراك',
    'LBL_ID_FF_INVALID' => 'إجعله غير صالح',
    'LBL_ADD' => 'إضافة' /*for 508 compliance fix*/,
    'LBL_COMPANY_LOGO' => 'شعار الشركة' /*for 508 compliance fix*/,
    'LBL_CONNECTORS_POPUPS' => 'وصلات مُنبثقة',
    'LBL_CLOSEINLINE' => 'أغلق',
    'LBL_VIEWINLINE' => 'مُشاهدة',
    'LBL_INFOINLINE' => 'معلومات',
    'LBL_PRINT' => 'طبع',
    'LBL_HELP' => 'مساعدة',
    'LBL_ID_FF_SELECT' => 'اختر',
    'DEFAULT' => 'أساسي',
    'LBL_SORT' => 'ترتيب',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'تمكين SMTP عبر SSL أو TLS؟',
    'LBL_NO_ACTION' => 'لم يكن هناك إجراء بهذا الاسم: %s',
    'LBL_NO_SHORTCUT_MENU' => 'لا يوجد إجراءات مُتاحة',
    'LBL_NO_DATA' => 'لا توجد بيانات',

    'LBL_ROUTING_FLAGGED' => 'ضع علامة',
    'LBL_ROUTING_TO' => 'إلى',
    'LBL_ROUTING_TO_ADDRESS' => 'إلى عنوان',
    'LBL_ROUTING_WITH_TEMPLATE' => 'مع قالب',

    'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'السجل الحالي يحتوي قيم في كل من حقل هاتف المكتب وحقل العنوان. لاستبدال محتوى الحقول برقم هاتف المكتب والعنوان للحساب الذي اخترته حالياً  فقم بالضغط على "موافق" أو اضغط على "إلغاء" لإبقاء البيانات دون تغيير',
    'LBL_DROP_HERE' => '[أسقطه هنا]',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS' => 'وضع خدمة بريد جوجل Gmail كخدمة بريد إفتراضية',
    'LBL_EMAIL_ACCOUNTS_NAME' => 'اسم',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND' => 'خادم/سيرفر SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS' => 'كلمة المرور الخاصة بـ SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT' => 'منفذ  \"SMTP\"',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER' => 'خادم SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER' => 'إسم مستخدم SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT' => 'الإفتراضي',
    'LBL_EMAIL_WARNING_MISSING_USER_CREDS' => 'تحذير: لم يتم إدخال اسم المستخدم وكلمة السر لحساب البريد الصادر.',
    'LBL_OAUTH_CONNECTION_NOT_SET' => 'الرجاء تعيين اتصال OAuth خارجي.',
    'LBL_EMAIL_PASSWORD_NOT_SET' => 'تحذير: لم يتم تعيين كلمة المرور.',
    'LBL_EMAIL_WARNING_MISSING_CREDS' => 'تحذير: بيانات الاعتماد مفقودة',
    'LBL_EMAIL_ACCOUNTS_SUBTITLE' => 'أكمل إعدادات حسابات البريد لترى رسائل البريد الواردة من حسابات البريد الإلكتروني.',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE' => 'قم بتوفير معلومات سيرفر البريد الالكتروني SMTP لاستخدام في الرسائل الصادرة من حسابات البريد الالكتروني.',

    'LBL_EMAIL_ADDRESS_BOOK_ADD' => 'تمت',
    'LBL_EMAIL_ADDRESS_BOOK_CLEAR' => 'مسح',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_TO' => 'إلى:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_CC' => 'نسخة إلى :',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC' => 'نسخة نخفية إلى:',
    'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE' => 'إلى/نسخة إلى/مخفية',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR' => 'عنوان البريد الإلكتروني',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER' => 'تنقيح وفلترة البيانات',
    'LBL_EMAIL_ADDRESS_BOOK_NAME' => 'اسم',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND' => 'لم يتم العثور على عناوين',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD' => 'حفظ وإضافة إلى دفتر العناوين',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE' => 'تحديد مستلمي البريد الإلكتروني',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE' => 'دفتر العناوين',
    'LBL_EMAIL_REMOVE_SMTP_WARNING' => 'تحذير! حساب البريد الصادر قام بحذف ارتباطه مع الحساب الحالي للبريد الوارد. هل متأكد بأنك تريد الاستمرار بفك الارتباط؟',
    'LBL_EMAIL_ADDRESSES' => 'بريد الكتروني',
    'LBL_EMAIL_ADDRESS_PRIMARY' => 'عنوان البريد الإلكتروني',
    'LBL_EMAIL_ADDRESS_OPT_IN' => 'لقد أكدت أن عنوان بريدك الإلكتروني قد تم اختياره في: ',
    'LBL_EMAIL_ADDRESS_OPT_IN_ERR' => 'غير قادر على تأكيد عنوان البريد الإلكتروني',
    'LBL_EMAIL_ARCHIVE_TO_SUITE' => 'استيراد عناوين بريد إلكتروني للنظام',
    'LBL_EMAIL_ASSIGNMENT' => 'تكليف بالبريد',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL' => 'إرفاق',
    'LBL_EMAIL_ATTACHMENT' => 'إرفاق',
    'LBL_EMAIL_ATTACHMENTS' => 'من قرص التخزين',
    'LBL_EMAIL_ATTACHMENTS2' => 'من مخزن الوثائق في النظام',
    'LBL_EMAIL_ATTACHMENTS3' => 'قالب المرفقات',
    'LBL_EMAIL_ATTACHMENTS_FILE' => 'الملف',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT' => 'وثيقة',
    'LBL_EMAIL_BCC' => 'نسخة مخفية',
    'LBL_EMAIL_CANCEL' => 'إلغاء',
    'LBL_EMAIL_CC' => 'نسخة إضافية',
    'LBL_EMAIL_CHARSET' => 'نوع لوحة الأحرف',
    'LBL_EMAIL_CHECK' => 'تحقق من حركة البريد',
    'LBL_EMAIL_CHECKING_NEW' => 'تحقق من وجود بريد إلكتروني جديد',
    'LBL_EMAIL_CHECKING_DESC' => 'لحظة من فضلك... <br><br>إذا التحقق من حركة البريد لهذا الحساب يحدث لأول مرة، فقد تستغرق عملية التحقق بعض الوقت.',
    'LBL_EMAIL_CLOSE' => 'إغلاق',
    'LBL_EMAIL_COFFEE_BREAK' => 'تحقق من وجود بريد إلكتروني جديد. <br><br>حسابات البريد الكبيرة الحجم قد تستغرق وقتاً أطول',

    'LBL_EMAIL_COMPOSE' => 'بريد الكتروني',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS' => 'الرجاء إدخال المستلمين لهذا البريد الإلكتروني.',
    'LBL_EMAIL_COMPOSE_NO_BODY' => 'محتوى الرسالة فارغ. هل أرسلها هكذا؟',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT' => 'حقل الموضوع فارغ، هل أرسله هكذا؟',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL' => '(لا يوجد موضوع)',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS' => 'فضلاً، تأكد من إدخال عنوان صحيح للبريد الإلكتروني في كل من حقل المرسل له والنسخة CC والنسخة المخفية BCC حتى يتم إرسال البريد',

    'LBL_EMAIL_CONFIRM_CLOSE' => 'إلغاء كتابة الرسالة البريدية؟',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE' => 'هل أنت متأكد من أنك تريد حذف هذا التوقيع؟',

    'LBL_EMAIL_SENT_SUCCESS' => 'تم إرسال الرسالة',

    'LBL_EMAIL_CREATE_NEW' => '-إنشاء نسخة إحتياطية-',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS' => 'متعدد',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'فارغ',
    'LBL_EMAIL_DATE_SENT_BY_SENDER' => 'تاريخ الإرسال من قبل المُرسل',
    'LBL_EMAIL_DATE_TODAY' => 'اليوم',
    'LBL_EMAIL_DELETE' => 'احذف',
    'LBL_EMAIL_DELETE_CONFIRM' => 'حذف الرسائل المحددة؟',
    'LBL_EMAIL_DELETE_SUCCESS' => 'تم حذف الرسائل بنجاح',
    'LBL_EMAIL_DELETING_MESSAGE' => 'حذف رسالة',
    'LBL_EMAIL_DETAILS' => 'تفاصيل',

    'LBL_EMAIL_EDIT_CONTACT_WARN' => 'سيتم استخدام العنوان الرئيسي فقط عند العمل مع جهات الاتصال.',

    'LBL_EMAIL_EMPTYING_TRASH' => 'إفراغ سلة المهملات',
    'LBL_EMAIL_DELETING_OUTBOUND' => 'حذف خادم/سيرفر الرسائل الصادرة',
    'LBL_EMAIL_CLEARING_CACHE_FILES' => 'مسح ذاكرة التخزين المؤقت للملفات',
    'LBL_EMAIL_EMPTY_MSG' => 'لا يوجد رسائل للعرض.',
    'LBL_EMAIL_EMPTY_ADDR_MSG' => 'لا يوجد عناوين بريد الكتروني للعرض.',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER' => 'يجب أن يكون اسم المجلد فريد من نوعه وغير فارغ. الرجاء المحاولة مرة أخرى.',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER' => 'لا يمكن حذف المُجلد. كما أن المجلد والمجلدات المتفرعة منه في داخله تحتوي رسائل أو أن صندوق البريد مُرتبط بها.',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE' => 'لايُمكن تحديد المجلد المجلد المقصود من المسار، حاول مرة أخرى.',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS' => 'الرجاء التحقق من الإعدادات الخاصة بك.',
    'LBL_EMAIL_ERROR_DESC' => 'تم اكتشاف أخطاء: ',
    'LBL_EMAIL_DELETE_ERROR_DESC' => 'ليس لديك صلاحية الوصول لهذه المنطقة. من فضلك أتصل بمدير موقعك لو أن تعتقد أنه من المفترض حصولك على هذه الصلاحية',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME' => 'مُجلدات النظام يجب أن تكون فريدة ولايُسمح أن تكون مكررة',
    'LBL_EMAIL_ERROR_EMPTY' => 'أدخل بعض شروط للبحث.',
    'LBL_EMAIL_ERROR_GENERAL_TITLE' => 'لقد حدث خطأ',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED' => 'تم إزالة الرسالة من الخادم/السيرفر',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED' => 'قد تكون الرسالة محذوفة أو منقولة لمُجلد آخر.',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION' => 'فشل الاتصال بخادم البريد. الرجاء الاتصال بالمسؤول',
    'LBL_EMAIL_ERROR_MOVE' => 'نقل البريد الإلكتروني بين الخوادم و/أو حسابات البريد غير معتمد في هذا الوقت.',
    'LBL_EMAIL_ERROR_MOVE_TITLE' => 'خطأ في النقل',
    'LBL_EMAIL_ERROR_NAME' => 'اسم مطلوب.',
    'LBL_EMAIL_ERROR_FROM_ADDRESS' => 'عنوان بريد المُرسل إجباري.  الرجاء إدخال عنوان بريد إلكتروني صحيح.',
    'LBL_EMAIL_ERROR_NO_FILE' => 'الرجاء تزويدي بالملف.',
    'LBL_EMAIL_ERROR_SERVER' => 'مطلوب عنوان خادم/سيرفر البريد.',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT' => 'ربما لم يتم حفظ حساب البريد الإلكتروني',
    'LBL_EMAIL_ERROR_TIMEOUT' => 'حدث خطأ أثناء الاتصال بخادم البريد.',
    'LBL_EMAIL_ERROR_USER' => 'إدخال اسم المستخدم إجباري',
    'LBL_EMAIL_ERROR_PORT' => 'إدخال منفذ خادم/سيرفر البريد إجباري',
    'LBL_EMAIL_ERROR_PROTOCOL' => 'حدد اسم بروتوكول خادم/سيرفر البريد - إجباري',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER' => 'تحديد مجلد المراقبة إجباري.',
    'LBL_EMAIL_ERROR_TRASH_FOLDER' => 'تحديد مجلد سلة المهملات إجباري.',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE' => 'هذه المعلومات غير متوفرة',
    'LBL_EMAIL_ERROR_NO_OUTBOUND' => 'لم تُحدد خادم/سيرفر البريد الصادر.',
    'LBL_EMAIL_ERROR_SENDING' => 'خطأ في إرسال الرسالة. الرجاء الاتصال بالمسؤول للحصول على مساعدة.',
    'LBL_EMAIL_FOLDERS' => SugarThemeRegistry::current()->getImage(
        'icon_email_folder',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
        ) . 'مجلدات',
    'LBL_EMAIL_FOLDERS_SHORT' => SugarThemeRegistry::current()->getImage(
        'icon_email_folder',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
    ),
    'LBL_EMAIL_FOLDERS_ADD' => 'أضف',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE' => 'إضافة مجلد جديد',
    'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'إعادة تسمية المجلد',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER' => 'حفظ',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO' => 'إضافة هذا المجلد إلى',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME' => 'لا يمكن تغيير هذا المجلد',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM' => 'هل متأكد من أنك تريد حذف هذا المجلد؟ \n إذا حذفته فلا يُمكنك التراجع. \n حذف هذا المُجلد سيؤدي تلقائياً لحذف أي مُجلد فرعي بداخله.',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER' => 'اسم مُجلد جديد',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE' => 'الرجاء تحديد مجلد قبل تنفيذ هذا الإجراء.',
    'LBL_EMAIL_FOLDERS_TITLE' => 'إدارة المجلدات',

    'LBL_EMAIL_FORWARD' => 'تمرير',
    'LBL_EMAIL_DELIMITER' => '::;::',
    'LBL_EMAIL_DOWNLOAD_STATUS' => 'تم تحميل [[count]] من مجموع [[total]] رسالة بريد إلكتروني',
    'LBL_EMAIL_FROM' => 'من',
    'LBL_EMAIL_GROUP' => 'مجموعة',
    'LBL_EMAIL_UPPER_CASE_GROUP' => 'المجموعة',
    'LBL_EMAIL_HOME_FOLDER' => 'المُجلد الرئيسي',
    'LBL_EMAIL_IE_DELETE' => 'حذف حساب البريد',
    'LBL_EMAIL_IE_DELETE_SIGNATURE' => 'حذف التوقيع',
    'LBL_EMAIL_IE_DELETE_CONFIRM' => 'هل تريد حذف حساب البريد؟',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL' => 'نجح حذف حساب البريد',
    'LBL_EMAIL_IE_SAVE' => 'حفظ معلومات حساب البريد',
    'LBL_EMAIL_IMPORTING_EMAIL' => 'استيراد البريد الإلكتروني',
    'LBL_EMAIL_IMPORT_EMAIL' => 'استيراد إلى سويتكرم',
    'LBL_EMAIL_IMPORT_SETTINGS' => 'استيراد الإعدادات',
    'LBL_EMAIL_INVALID' => 'غير صالح',
    'LBL_EMAIL_LOADING' => 'تحميل......',
    'LBL_EMAIL_MARK' => 'علامة مُحددة',
    'LBL_EMAIL_MARK_FLAGGED' => 'كتحديده بعلامة',
    'LBL_EMAIL_MARK_READ' => 'كمقروء',
    'LBL_EMAIL_MARK_UNFLAGGED' => 'بدون علامة محددة',
    'LBL_EMAIL_MARK_UNREAD' => 'كغير مقروءة',
    'LBL_EMAIL_ASSIGN_TO' => 'تعيين إلى',

    'LBL_EMAIL_MENU_ADD_FOLDER' => 'إنشاء مجلد',
    'LBL_EMAIL_MENU_COMPOSE' => 'تُرسل إلى',
    'LBL_EMAIL_MENU_DELETE_FOLDER' => 'حذف مجلد',
    'LBL_EMAIL_MENU_EMPTY_TRASH' => 'سلة المهملات فارغة',
    'LBL_EMAIL_MENU_SYNCHRONIZE' => 'مزامنة',
    'LBL_EMAIL_MENU_CLEAR_CACHE' => 'مسح ملفات ذاكرة التخزين المؤقت',
    'LBL_EMAIL_MENU_REMOVE' => 'أزِل',
    'LBL_EMAIL_MENU_RENAME_FOLDER' => 'إعادة تسمية المجلد',
    'LBL_EMAIL_MENU_RENAMING_FOLDER' => 'يتم اعادة التسمية للمجلد',
    'LBL_EMAIL_MENU_MAKE_SELECTION' => 'من فضلك حدد اختيار قبل أن تبدأ هذه العملية.',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER' => 'أنشء مُجلد (عن بعد أو في النظام)',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER' => 'حذف الرسالة/الرسائل البريدية في النظام.',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH' => 'إفراغ كافة مجلدات سلة المهملات لحسابات البريد الإلكتروني الخاصة بك',
    'LBL_EMAIL_MENU_HELP_MARK_READ' => 'حدد هذه الرسائل البريدية على أنها مقرؤة',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED' => 'حدد هذه الرسائل البريدية على أنها بدون علامة مميزة',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER' => 'أعدّ تسمية المُجلد (عن بعد أو في النظام)',

    'LBL_EMAIL_MESSAGES' => 'رسائل',

    'LBL_EMAIL_ML_NAME' => 'اسم القائمة',
    'LBL_EMAIL_ML_ADDRESSES_1' => 'قائمة العناوين المُختارة',
    'LBL_EMAIL_ML_ADDRESSES_2' => 'قائمة العناوين المُتاحة',

    'LBL_EMAIL_MULTISELECT' => '<b>اضغط زر كنترول مع النقر</b>لاختيار أكثر من رسالة <br />مُستخدمي أجهزة الماك عليهم استخدام  <b>CMD مع النقر بالفأرة</b>)',

    'LBL_EMAIL_NO' => 'لا',
    'LBL_EMAIL_NOT_SENT' => 'النظام غير قادر على معالجة الطلب الخاص بك. الرجاء الاتصال بمسؤول النظام.',

    'LBL_EMAIL_OK' => 'موافق',
    'LBL_EMAIL_ONE_MOMENT' => 'لحظة واحدة من فضلك...',
    'LBL_EMAIL_OPEN_ALL' => 'فتح عدة رسائل بنفس الوقت',
    'LBL_EMAIL_OPTIONS' => 'خيارات',
    'LBL_EMAIL_QUICK_COMPOSE' => 'إنشاء سريع',
    'LBL_EMAIL_OPT_OUT' => 'ترك القائمة البريدية',
    'LBL_EMAIL_OPT_OUT_AND_INVALID' => 'ترك القائة البريدية وغير صالح',
    'LBL_EMAIL_PERFORMING_TASK' => 'أداء المهمة',
    'LBL_EMAIL_PRIMARY' => 'أساسي',
    'LBL_EMAIL_PRINT' => 'طباعة',

    'LBL_EMAIL_QC_BUGS' => 'الأخطاء',
    'LBL_EMAIL_QC_CASES' => 'القضية',
    'LBL_EMAIL_QC_LEADS' => 'عميل محتمل',
    'LBL_EMAIL_QC_CONTACTS' => 'جهة إتصال',
    'LBL_EMAIL_QC_TASKS' => 'مهمة عمل',
    'LBL_EMAIL_QC_OPPORTUNITIES' => 'فرصة',
    'LBL_EMAIL_QUICK_CREATE' => 'إنشاء سريع',

    'LBL_EMAIL_REBUILDING_FOLDERS' => 'إعادة بناء المجلدات',
    'LBL_EMAIL_RELATE_TO' => 'مرتبط بـ',
    'LBL_EMAIL_VIEW_RELATIONSHIPS' => 'عرض العلاقات',
    'LBL_EMAIL_RECORD' => 'سجل البريد الإلكتروني',
    'LBL_EMAIL_REMOVE' => 'أزِل',
    'LBL_EMAIL_REPLY' => 'الردّ',
    'LBL_EMAIL_REPLY_ALL' => 'الردّ على الكل',
    'LBL_EMAIL_REPLY_TO' => 'الرد على',
    'LBL_EMAIL_RETRIEVING_MESSAGE' => 'استرجاع الرسالة',
    'LBL_EMAIL_RETRIEVING_RECORD' => 'استرداد سجل البريد الإلكتروني',
    'LBL_EMAIL_SELECT_ONE_RECORD' => 'الرجاء تحديد سجل بريد إلكتروني واحد',
    'LBL_EMAIL_RETURN_TO_VIEW' => 'عودة إلى النظام الفرعي السابق؟',
    'LBL_EMAIL_REVERT' => 'رجوع',
    'LBL_EMAIL_RELATE_EMAIL' => 'تتعلق بالبريد الإلكتروني',

    'LBL_EMAIL_RULES_TITLE' => 'إدارة القواعد',

    'LBL_EMAIL_SAVE' => 'حفظ',
    'LBL_EMAIL_SAVE_AND_REPLY' => 'حفظ و رد',
    'LBL_EMAIL_SAVE_DRAFT' => 'حفظ مُسودة',
    'LBL_EMAIL_DRAFT_SAVED' => 'تم حفظ المسودة',

    'LBL_EMAIL_SEARCH' => SugarThemeRegistry::current()->getImage(
        'Search',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
    ),
    'LBL_EMAIL_SEARCH_SHORT' => SugarThemeRegistry::current()->getImage(
        'Search',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
    ),
    'LBL_EMAIL_SEARCH_DATE_FROM' => 'من تاريخ',
    'LBL_EMAIL_SEARCH_DATE_UNTIL' => 'حتى تاريخ',
    'LBL_EMAIL_SEARCH_NO_RESULTS' => 'لا يوجد نتائج مُطابقة لشروطك في البحث.',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE' => 'نتائج البحث',

    'LBL_EMAIL_SELECT' => 'إخْتار',

    'LBL_EMAIL_SEND' => 'أرسل',
    'LBL_EMAIL_SENDING_EMAIL' => 'إرسال البريد الإلكتروني',

    'LBL_EMAIL_SETTINGS' => 'إعدادات',
    'LBL_EMAIL_SETTINGS_ACCOUNTS' => 'حسابات البريد الإلكتروني',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT' => 'مسح النموذج',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL' => 'تحقق من وصول رسالة جديدة',
    'LBL_EMAIL_SETTINGS_FROM_ADDR' => 'من عنوان',
    'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'عنوان البريد الإلكتروني لإشعارك بالاختبار:',
    'LBL_EMAIL_SETTINGS_FROM_ADDR_NOT_SET' => 'From address and/or From name not set',
    'LBL_EMAIL_SETTINGS_FROM_NAME' => 'إسم المرسل',
    'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR' => 'إلى عنوان المُستقبل',
    'LBL_EMAIL_SETTINGS_FULL_SYNC' => 'مزامنة كافة حسابات البريد الإلكتروني',
    'LBL_EMAIL_TEST_NOTIFICATION_SENT' => 'تم إرسال رسالة إلى البريد الالكتروني المحدد باستخدام إعدادات البريد الاصدر المقدمة. الرجاء التحقق من إستلام الرسالة من أجل التحقق من صحة الإعدادات.',
    'LBL_EMAIL_TEST_SEE_FULL_SMTP_LOG' => 'انظر لكامل سجل SMTP',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN' => 'هل أنفذ مُزامنة كاملة؟/nالرسائل الكبيرة قد تستغرق دقائق أكثر',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP' => 'اضغط زر الإزاحة  Shift أو زر التحكم Ctrl في لوحة المفاتيح لتتمكن من إختيار أكثر من مُجلد',
    'LBL_EMAIL_SETTINGS_GENERAL' => 'عام',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE' => 'إنشاء مجموعة مجلدات',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'تحرير مجلد المجموعة',

    'LBL_EMAIL_SETTINGS_NAME' => 'اسم حساب البريد',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH' => 'حدد عدد الرسائل في كل صفحة في صندوق الرسائل. هذا التعديل في الاعدادات يتطلب إعادة تحميل الصفحة ليظهر أثر التعديل.',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'استرجاع حساب البريد',
    'LBL_EMAIL_SETTINGS_SAVED' => 'تم حفظ الإعدادات.',
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS' => 'أرسل الرسائل الخالية من التنسيقات فقط',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST' => 'رسالة في كل صفحة',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT' => 'الإغدادات المرئية',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES' => 'تفضيلات',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS' => 'مجلدات المستخدم المتوفرة',
    'LBL_EMAIL_ERROR_PREPEND' => 'حدث خطأ في البريد الإلكتروني:',
    'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'إن خادم/سيرفر الرسائل الصادرة الذي اخترته لحساب البريد هو خطأ. تحقق من الاعدادات أو اختر خادم/سيرفر آخر لحساب البريد.',
    'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'لم يتم إعداد خادم/سيرفر إرسال الرسائل. من فضلك قم بإعداده أو اختر خادم/سيرفر مُخصص لذلك من خلال الذهاب إلى قائمة إعدادات ثم اختر حساب البريد .',
    'LBL_DEFAULT_EMAIL_SIGNATURES' => 'التوقيع الافتراضي',
    'LBL_EMAIL_SIGNATURES' => 'التوقيعات',
    'LBL_SMTPTYPE_GMAIL' => 'بريد جوجل',
    'LBL_SMTPTYPE_YAHOO' => 'بريد ياهو!',
    'LBL_SMTPTYPE_EXCHANGE' => 'مايكروسوفت إكسشينج',
    'LBL_SMTPTYPE_OTHER' => 'أخرى',
    'LBL_EMAIL_SPACER_MAIL_SERVER' => '[ مُجلدات عن بُعد]',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER' => '[ مُجلدات النظام ]',
    'LBL_EMAIL_SUBJECT' => 'الموضوع',
    'LBL_EMAIL_SUCCESS' => 'ناجح',
    'LBL_EMAIL_SUITE_FOLDER' => 'مجلد SuiteCRM',
    'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT' => 'قالب الرسالة البريدية فارغ',
    'LBL_EMAIL_TEMPLATES' => 'قوالب',
    'LBL_EMAIL_TO' => 'إلى',
    'LBL_EMAIL_VIEW' => 'عرض',
    'LBL_EMAIL_VIEW_HEADERS' => 'أظهر الترويسات',
    'LBL_EMAIL_VIEW_RAW' => 'عرض الرسالة كما هي بدون ترويسات',
    'LBL_EMAIL_VIEW_UNSUPPORTED' => 'هذه الميزة لا تعمل وغير مدعومة عند استخدام بروتوكول POP3.',
    'LBL_DEFAULT_LINK_TEXT' => 'النص الافتراضي للرابط',
    'LBL_EMAIL_YES' => 'نعم',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS' => 'إرسال بريد للإختبار',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'اختبر البريد المُرسل',
    'LBL_EMAIL_MESSAGE_NO' => 'رسالة رقم',
    'LBL_EMAIL_IMPORT_SUCCESS' => 'تم الاستيراد',
    'LBL_EMAIL_IMPORT_FAIL' => 'فشلت عملية الاستيراد لأن الرسالة قد تم إستيرادها من قبل أو أنها محذوفة من قبل',

    'LBL_LINK_NONE' => 'لاشئ',
    'LBL_LINK_ALL' => 'الكل',
    'LBL_LINK_RECORDS' => 'سجلات',
    'LBL_LINK_SELECT' => 'إختر',
    'LBL_LINK_ACTIONS' => 'إجراءات',
    'LBL_CLOSE_ACTIVITY_HEADER' => 'تأكيدذ',
    'LBL_CLOSE_ACTIVITY_CONFIRM' => 'هل تُريد إغلاق النظام الفرعي المُسمى #module#؟',
    'LBL_INVALID_FILE_EXTENSION' => 'ملف الإضافة البرمجية خاطئ',

    'ERR_AJAX_LOAD' => 'حدث خطأ: ',
    'ERR_AJAX_LOAD_FAILURE' => 'هناك خطأ في مُعالجة طلبك، من فضلك حاول مرة أُخرى في وقت لاحق.',
    'ERR_AJAX_LOAD_FOOTER' => 'إذا كان هذا الخطأ لا يزال قائماً ومُتكرراً، فقد يكون مُدير النظام قام بتعطيل خاصية أجاكس لهذا لنظام الفرعي',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP' => 'لا يُمكنك استخدام الفاصلة العشرية على أنها فاصلة لتوضيح رقم الألوف.\\n\\n من فضلك غير القيمّ.',
    'ERR_DELETE_RECORD' => 'يجب أن تُحدد رقم سجل حتى يُمكن حذف جهة الاتصال',
    'ERR_EXPORT_DISABLED' => 'تصدير البيانات موقوف',
    'ERR_EXPORT_TYPE' => 'خطأ في التصدير ',
    'ERR_INVALID_EMAIL_ADDRESS' => 'عنوان البريد الإلكتروني غير صحيح، راجع الصيغة',
    'ERR_INVALID_FILE_REFERENCE' => 'رقم الملف خاطئ',
    'ERR_NO_HEADER_ID' => 'هذه الميزة غير مُتاحة في السمة/الثيم الحالي',
    'ERR_NOT_ADMIN' => 'وصول غير مصرح به للإدارة',
    'ERR_MISSING_REQUIRED_FIELDS' => 'حقل إجباري ناقص:',
    'ERR_INVALID_REQUIRED_FIELDS' => 'خطأ في حقل إجباري:',
    'ERR_INVALID_VALUE' => 'قيمة غير صحيحة:',
    'ERR_NO_SUCH_FILE' => 'الملف غير موجود على النظام',
    'ERR_NO_SINGLE_QUOTE' => 'لا يمكن استخدام علامة التنصيص المفردة ل ',
    'ERR_NOTHING_SELECTED' => 'من فضلك اختر قبل متابعة الإجراء',
    'ERR_SELF_REPORTING' => 'لا يمكن للمستخدم أن يرسل تقريرا لنفسه',
    'ERR_SQS_NO_MATCH_FIELD' => 'لا يوجد ما يتطابق مع حقل: ',
    'ERR_SQS_NO_MATCH' => 'لا يوجد تطابق',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'الرجاء تحديد \'مفتاح\' فهرس سمات العرض الخاص بتعريف البيانات الوصفية',
    'ERR_EXISTING_PORTAL_USERNAME' => 'خطأ: اسم المدخل تم تعيين مسبقاً لجهة اتصال أخرى.',
    'ERR_COMPATIBLE_PRECISION_VALUE' => 'قيمة الحقل ليست متوافقة مع قيمة الدقة',
    'ERR_EXTERNAL_API_SAVE_FAIL' => 'حدث خطأ عند محاولة حفظ لحساب خارجي.',
    'ERR_NO_DB' => 'لم يتم الاتصال بقاعدة البيانات الرئيسية. فضلاً ارجع لسجل الأخطاء الخاص بالنظام لتحصل على مزيد من التفاصيل',
    'ERR_DB_FAIL' => 'فشل في قاعدة البيانات.  فضلاً ارجع لسجل الأخطاء الخاص بالنظام لتحصل على مزيد من التفاصيل.',
    'ERR_DB_VERSION' => 'ملفات سويتكرم {0} قد يتم استخدامه فقط مع بيانات سويتكرم {1}.',

    'LBL_ACCOUNT' => 'حساب',
    'LBL_ACCOUNTS' => 'حسابات',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'أنشطة',
    'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'اظهر الملخص',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'اظهرالملخص',
    'LBL_ADD_BUTTON' => 'إضافة',
    'LBL_ADD_DOCUMENT' => 'أإضافة مُستند',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'إضافة إلى قائمة المستهدفين',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL_ACCOUNTS_CONTACTS' => 'إضافة جهات اتصال إلى قائمة المستهدفين',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'انقر للإغلاق',
    'LBL_ADDITIONAL_DETAILS' => 'تفاصيل إضافية',
    'LBL_ADMIN' => 'مُشرف',
    'LBL_ALT_HOT_KEY' => '',
    'LBL_ARCHIVE' => 'أرشيف',
    'LBL_ASSIGNED_TO_USER' => 'مكلف به المستخدم',
    'LBL_ASSIGNED_TO' => 'كُلف به:',
    'LBL_BACK' => 'رجوع',
    'LBL_BILLING_ADDRESS' => 'ترسل الفاتوة لعنوان',
    'LBL_QUICK_CREATE' => 'إنشاء ',
    'LBL_BROWSER_TITLE' => 'سويتكرم -مشروع مفتوح المصدر لنظام إدراة العملاء',
    'LBL_BUGS' => 'أخطاء',
    'LBL_BY' => 'بواسطة',
    'LBL_CALLS' => 'مكالمات',
    'LBL_CAMPAIGNS_SEND_QUEUED' => 'أرسل الرسائل الإلكترونية الخاصة بالحملة إلى قائمة الانتظار',
    'LBL_SUBMIT_BUTTON_LABEL' => 'موافق',
    'LBL_CASE' => 'القضية',
    'LBL_CASES' => 'القضايا',
    'LBL_CHANGE_PASSWORD' => 'تغيير كلمة المرور',
    'LBL_CHARSET' => 'UTF-8',
    'LBL_CHECKALL' => 'تأشير على الجميع',
    'LBL_CITY' => 'مدينة',
    'LBL_CLEAR_BUTTON_LABEL' => 'مسح',
    'LBL_CLEAR_BUTTON_TITLE' => 'مسح',
    'LBL_CLEARALL' => 'مسح الكل',
    'LBL_CLOSE_BUTTON_TITLE' => 'إغلاق',
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'إغلاق وإنشاء جديد',
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'إغلاق وإنشاء جديد',
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
    'LBL_OPEN_ITEMS' => 'Open Items:',
    'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'إنشاء رسالة',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'إنشاء رسالة',
    'LBL_SEARCH_DROPDOWN_YES' => 'نعم',
    'LBL_SEARCH_DROPDOWN_NO' => 'لا',
    'LBL_CONTACT_LIST' => 'قائمة جهات الاتصال',
    'LBL_CONTACT' => 'جهة إتصال',
    'LBL_CONTACTS' => 'جهات إتصال',
    'LBL_CONTRACT' => 'جهة إتصال',
    'LBL_CONTRACTS' => 'العقود',
    'LBL_COUNTRY' => 'الدولة:',
    'LBL_CREATE_BUTTON_LABEL' => 'أنشئ',
    'LBL_CREATED_BY_USER' => 'أُنشئ من قبل المُستخدم',
    'LBL_CREATED_USER' => 'أُنشئ من قبل المُستخدم',
    'LBL_CREATED' => 'أنشئ بواسطة',
    'LBL_CURRENT_USER_FILTER' => 'My Items:',
    'LBL_CURRENCY' => 'العملة:',
    'LBL_DOCUMENTS' => 'مستندات',
    'LBL_DATE_ENTERED' => 'تاريخ الإنشاء:',
    'LBL_DATE_MODIFIED' => 'تاريخ التعديل:',
    'LBL_EDIT_BUTTON' => 'تحرير',
    'LBL_DUPLICATE_BUTTON' => 'أنشئ نسخة مطابقة',
    'LBL_DELETE_BUTTON' => 'حذف',
    'LBL_DELETE' => 'حذف',
    'LBL_DELETED' => 'محذوف',
    'LBL_DIRECT_REPORTS' => 'تقارير مباشرة',
    'LBL_DONE_BUTTON_LABEL' => 'أُنجزت',
    'LBL_DONE_BUTTON_TITLE' => 'أُنجزت',
    'LBL_FAVORITES' => 'المفضلة',
    'LBL_VCARD' => 'بطاقة تعريف إلكترونية vCard',
    'LBL_EMPTY_VCARD' => 'الرجاء تحديد ملف vCard',
    'LBL_EMPTY_REQUIRED_VCARD' => 'بطاقة التعريف الإلكترونية vCard لا تحتوي كل المعلومات المطلوبة لهذا النظام الفرعي. من فضلك راجع SuiteCRM.log لمزيد من التفاصيل.',
    'LBL_VCARD_ERROR_FILESIZE' => 'الملف المُراد تحميله تجاوز حجمه 3000 بايت',
    'LBL_VCARD_ERROR_DEFAULT' => 'حدث خطأ أثناء تحميل ملف vCard. من فضلك راجع SuiteCRM.log لمزيد من التفاصيل.',
    'LBL_IMPORT_VCARD' => 'إستيراد vCard:',
    'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'إستيراد بطاقة جهة اتصال (vCard)',
    'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'إستيراد vCard',
    'LBL_VIEW_BUTTON' => 'عرض',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => 'أرسل الرسالة بصيغة PDF',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => 'أرسل الرسالة بصيغة PDF',
    'LBL_EMAILS' => 'رسائل بريد إلكتروني',
    'LBL_EMPLOYEES' => 'موظفون',
    'LBL_ENTER_DATE' => 'أدخل التاريخ',
    'LBL_EXPORT' => 'تصدير',
    'LBL_FAVORITES_FILTER' => 'My Favorites:',
    'LBL_GO_BUTTON_LABEL' => 'إبدأ',
    'LBL_HIDE' => 'إخفاءِ',
    'LBL_ID' => 'رقم المُعرف',
    'LBL_IMPORT' => 'استيراد',
    'LBL_IMPORT_STARTED' => 'بدأ الاستيراد: ',
    'LBL_LAST_VIEWED' => 'أحدث مُشاهداتك',
    'LBL_LEADS' => 'عملاء محتملون',
    'LBL_LESS' => 'أقل',
    'LBL_CAMPAIGN' => 'حملة:',
    'LBL_CAMPAIGNS' => 'حملات',
    'LBL_CAMPAIGNLOG' => 'سجل الحملات',
    'LBL_CAMPAIGN_CONTACT' => 'حملات',
    'LBL_CAMPAIGN_ID' => 'campaign_id',
    'LBL_CAMPAIGN_NONE' => 'لاشئ',
    'LBL_THEME' => 'النمط (Theme):',
    'LBL_FOUND_IN_RELEASE' => 'عثر عليها في الإصدار',
    'LBL_FIXED_IN_RELEASE' => 'تم إصلاحها في الإصدار',
    'LBL_LIST_ACCOUNT_NAME' => 'اسم الحساب',
    'LBL_LIST_ASSIGNED_USER' => 'المُستخدم',
    'LBL_LIST_CONTACT_NAME' => 'اسم جهة الإتصال',
    'LBL_LIST_CONTACT_ROLE' => 'وظيفة جهة الإتصال',
    'LBL_LIST_DATE_ENTERED' => 'تاريخ الإنشاء',
    'LBL_LIST_EMAIL' => 'بريد الكتروني',
    'LBL_LIST_NAME' => 'اسم',
    'LBL_LIST_OF' => 'الخاص بـ',
    'LBL_LIST_PHONE' => 'هاتف',
    'LBL_LIST_RELATED_TO' => 'متعلق بـ',
    'LBL_LIST_USER_NAME' => 'اسم المستخدم',
    'LBL_LISTVIEW_NO_SELECTED' => 'من فضلك اختر سجل واحد على الأقل لمتابعة التنفيذ',
    'LBL_LISTVIEW_TWO_REQUIRED' => 'من فضلك اختر سجلين على الأقل لمتابعة التنفيذ',
    'LBL_LISTVIEW_OPTION_SELECTED' => 'السجلات المختارة',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => 'تم إختيار: ',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'محمد',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'الهداني',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'الدكتور. ',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'رمز القرد رائع',
    'LBL_CANCEL' => 'إلغاء',
    'LBL_VERIFY' => 'التحقق',
    'LBL_RESEND' => 'إعادة الإرسال',
    'LBL_PROFILE' => 'الملف التتعريفي',
    'LBL_MAILMERGE' => 'دمج البريد',
    'LBL_MASS_UPDATE' => 'تحديث شامل',
    'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'لا يوجد حقول متاحة لعملية التحديث الشاملة',
    'LBL_OPT_OUT_FLAG_PRIMARY' => 'إلغاء اشتراك البريد الالكتروني الأساسي',
    'LBL_OPT_IN_FLAG_PRIMARY' => 'تنشيط البريد الالكتروني الأساسي',
    'LBL_MEETINGS' => 'اجتماعات',
    'LBL_MEETING_GO_BACK' => 'عودة إلى الإجتماع',
    'LBL_MEMBERS' => 'أعضاء',
    'LBL_MEMBER_OF' => 'عضو في',
    'LBL_MODIFIED_BY_USER' => 'تم تعديلة بواسطة المُستخدم',
    'LBL_MODIFIED_USER' => 'تم تعديلة بواسطة المُستخدم',
    'LBL_MODIFIED' => 'عدل بواسطة',
    'LBL_MODIFIED_NAME' => 'إسم القائم بالتعديل',
    'LBL_MORE' => 'المزيد',
    'LBL_MY_ACCOUNT' => 'إعداداتي',
    'LBL_NAME' => 'اسم',
    'LBL_NEW_BUTTON_KEY' => 'N',
    'LBL_NEW_BUTTON_LABEL' => 'إنشاء',
    'LBL_NEW_BUTTON_TITLE' => 'أنشئ',
    'LBL_NEXT_BUTTON_LABEL' => 'التالي',
    'LBL_NONE' => '--لا شيء--',
    'LBL_NOTES' => 'ملاحظات',
    'LBL_OPPORTUNITIES' => 'فرص بيع',
    'LBL_OPPORTUNITY_NAME' => 'اسم الفرصة',
    'LBL_OPPORTUNITY' => 'فرصة',
    'LBL_OR' => 'أو',
    'LBL_PANEL_OVERVIEW' => 'نظرة شاملة',
    'LBL_PANEL_ASSIGNMENT' => 'الأخرى',
    'LBL_PANEL_ADVANCED' => 'معلومات إضافية',
    'LBL_PARENT_TYPE' => 'نوع الأصل',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_POSTAL_CODE' => 'الرمز البريدي:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'العنوان الرئيسي - المدينة:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'الدولة للعنوان الرئيسي:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'العنوان الرئيسي - الرمز البريدي:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'العنوان الرئيسي - المحافظة:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'شارع 2 للعنوان الرئيسي:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'شارع 3 للعنوان الرئيسي:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'العنوان الرئيسي - الشارع:',
    'LBL_PRIMARY_ADDRESS' => 'العنوان الرئيسي:',

    'LBL_PROSPECTS' => 'عملاء متوقعون',
    'LBL_PRODUCTS' => 'المنتجات',
    'LBL_PROJECT_TASKS' => 'مهام المشروع',
    'LBL_PROJECTS' => 'مشاريع',
    'LBL_QUOTES' => 'عروض الأسعار',

    'LBL_RELATED' => 'متعلقات',
    'LBL_RELATED_RECORDS' => 'سجلات متعلقة',
    'LBL_REMOVE' => 'إزالة',
    'LBL_REPORTS_TO' => 'المسؤول المباشر',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_REQUIRED_TITLE' => 'يُشير للحقول الإلزامية',
    'LBL_EMAIL_DONE_BUTTON_LABEL' => 'تم',
    'LBL_FULL_FORM_BUTTON_KEY' => 'L',
    'LBL_FULL_FORM_BUTTON_LABEL' => 'نموذج كامل',
    'LBL_FULL_FORM_BUTTON_TITLE' => 'نموذج كامل',
    'LBL_SAVE_NEW_BUTTON_LABEL' => 'احفظ وأنشئ جديدا',
    'LBL_SAVE_NEW_BUTTON_TITLE' => 'احفظ وأنشئ جديدا',
    'LBL_SAVE_OBJECT' => 'حفظ {0}',
    'LBL_SEARCH_BUTTON_KEY' => 'Q',
    'LBL_SEARCH_BUTTON_LABEL' => 'بحث',
    'LBL_SEARCH_BUTTON_TITLE' => 'بحث',
    'LBL_FILTER' => 'تنقيح وفلترة البيانات',
    'LBL_SEARCH' => 'بحث',
    'LBL_SEARCH_ALT' => '',
    'LBL_SEARCH_MORE' => 'المزيد',
    'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'صيغة تنسيق الملف خاطئة، لا يمكنك رفع إلا ملفات الصور فقط',
    'LBL_SELECT_BUTTON_KEY' => 'T',
    'LBL_SELECT_BUTTON_LABEL' => 'حدد',
    'LBL_SELECT_BUTTON_TITLE' => 'حدد',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'تصفح الوثائق',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'تصفح الوثائق',
    'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'حدد جهة إتصال',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'حدد جهة إتصال',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'اختر من التقارير',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'إختر التقارير',
    'LBL_SELECT_USER_BUTTON_KEY' => 'U',
    'LBL_SELECT_USER_BUTTON_LABEL' => 'حدد مُستخدم',
    'LBL_SELECT_USER_BUTTON_TITLE' => 'حدد مُستخدم',
    // Clear buttons take up too many keys, lets default the relate and collection ones to be empty
    'LBL_ACCESSKEY_CLEAR_RELATE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_RELATE_TITLE' => 'إلغاء التحديد',
    'LBL_ACCESSKEY_CLEAR_RELATE_LABEL' => 'إلغاء التحديد',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_TITLE' => 'إلغاء التحديد',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_LABEL' => 'إلغاء التحديد',
    'LBL_ACCESSKEY_SELECT_FILE_KEY' => 'F',
    'LBL_ACCESSKEY_SELECT_FILE_TITLE' => 'حدد ملف',
    'LBL_ACCESSKEY_SELECT_FILE_LABEL' => 'حدد ملف',
    'LBL_ACCESSKEY_CLEAR_FILE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_FILE_TITLE' => 'مسح الملف',
    'LBL_ACCESSKEY_CLEAR_FILE_LABEL' => 'مسح الملف',

    'LBL_ACCESSKEY_SELECT_USERS_KEY' => 'U',
    'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'حدد مُستخدم',
    'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'حدد مُستخدم',
    'LBL_ACCESSKEY_CLEAR_USERS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'إلغاء مُستخدم',
    'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'إلغاء مُستخدم',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_KEY' => 'A',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE' => 'حدد حساب',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL' => 'حدد حساب',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE' => 'مسح الحساب',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL' => 'مسح الحساب',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_KEY' => 'M',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_TITLE' => 'حدد الحملة',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_LABEL' => 'حدد الحملة',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_TITLE' => 'مسح الحملة',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_LABEL' => 'مسح الحملة',
    'LBL_ACCESSKEY_SELECT_CONTACTS_KEY' => 'C',
    'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE' => 'حدد جهة إتصال',
    'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL' => 'حدد جهة إتصال',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE' => 'مسح جهة الاتصال',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL' => 'مسح جهة الاتصال',
    'LBL_ACCESSKEY_SELECT_TEAMSET_KEY' => 'Z',
    'LBL_ACCESSKEY_SELECT_TEAMSET_TITLE' => 'حدد فريق',
    'LBL_ACCESSKEY_SELECT_TEAMSET_LABEL' => 'حدد فريق',
    'LBL_ACCESSKEY_CLEAR_TEAMS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_TEAMS_TITLE' => 'مسح الفريق',
    'LBL_ACCESSKEY_CLEAR_TEAMS_LABEL' => 'مسح الفريق',
    'LBL_SERVER_RESPONSE_RESOURCES' => 'المصادر المستخدمة لإنشاء هذه الصفحة (الإستعلامات ،الملفات)',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'ثواني',
    'LBL_SERVER_RESPONSE_TIME' => 'زمن إستجابة الخادم:',
    'LBL_SERVER_MEMORY_BYTES' => 'بايت',
    'LBL_SERVER_MEMORY_USAGE' => 'سيرفر استخدام الذاكرة: {0} ({1})',
    'LBL_SERVER_MEMORY_LOG_MESSAGE' => 'استخدام: -الوحدة: {0} -الإجراء: {1}',
    'LBL_SERVER_PEAK_MEMORY_USAGE' => 'سيرفر ذروة استخدام الذاكرة: {0} ({1})',
    'LBL_SHIPPING_ADDRESS' => 'عنوان الشحن',
    'LBL_SHOW' => 'أعرض',
    'LBL_STATE' => 'المحافظة:',
    'LBL_STATUS_UPDATED' => 'تم تحديث حالتك بالنسبة لهذا الحدث!',
    'LBL_STATUS' => 'الحالة:',
    'LBL_STREET' => 'الشارع',
    'LBL_SUBJECT' => 'الموضوع',

    'LBL_INBOUNDEMAIL_ID' => 'رقم معرف الرسالة الواردة',

    'LBL_SCENARIO_SALES' => 'المبيعات',
    'LBL_SCENARIO_MARKETING' => 'التسويق',
    'LBL_SCENARIO_FINANCE' => 'المالية',
    'LBL_SCENARIO_SERVICE' => 'الخدمة',
    'LBL_SCENARIO_PROJECT' => 'إدارة المشاريع',

    'LBL_SCENARIO_SALES_DESCRIPTION' => 'هذا السيناريو يسهل إدارة البنود المتعلقة بالمبيعات',
    'LBL_SCENARIO_MAKETING_DESCRIPTION' => 'هذا السيناريو يسهل إدارة البنود المتعلقة بالتسويق',
    'LBL_SCENARIO_FINANCE_DESCRIPTION' => 'هذا السيناريو يسهل إدارة البنود المتعلقة بالشئون المالية',
    'LBL_SCENARIO_SERVICE_DESCRIPTION' => 'هذا السيناريو يسهل إدارة البنود المتعلقة بالخدمات',
    'LBL_SCENARIO_PROJECT_DESCRIPTION' => 'هذا السيناريو يسهل إدارة البنود المتعلقة بإدارةالمشاريع',

    'LBL_SYNC' => 'مزامنة',
    'LBL_TABGROUP_ALL' => 'الكل',
    'LBL_TABGROUP_ACTIVITIES' => 'أنشطة',
    'LBL_TABGROUP_COLLABORATION' => 'تعاون الفريق',
    'LBL_TABGROUP_MARKETING' => 'تسويق',
    'LBL_TABGROUP_OTHER' => 'أخرى',
    'LBL_TABGROUP_SALES' => 'المبيعات',
    'LBL_TABGROUP_SUPPORT' => 'الدعم',
    'LBL_TASKS' => 'مهام',
    'LBL_THOUSANDS_SYMBOL' => 'ألف',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'أرشفة الرسائل',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'أرشفة الرسائل',
    'LBL_UNDELETE_BUTTON_LABEL' => 'إلغاء الحذف',
    'LBL_UNDELETE_BUTTON_TITLE' => 'إلغاء الحذف',
    'LBL_UNDELETE_BUTTON' => 'إلغاء الحذف',
    'LBL_UNDELETE' => 'إلغاء الحذف',
    'LBL_UNSYNC' => 'إلغاء المُزامنة',
    'LBL_UPDATE' => 'تحذيث',
    'LBL_USER_LIST' => 'قائمة المستخدمين',
    'LBL_USERS' => 'المستخدمين',
    'LBL_VERIFY_EMAIL_ADDRESS' => 'التحقق من البريد الإلكتروني المُدخل ...',
    'LBL_VERIFY_PORTAL_NAME' => 'التحقق من اسم البوابة الموجود ...',
    'LBL_VIEW_IMAGE' => 'عرض',

    'LNK_ABOUT' => 'حول',
    'LNK_ADVANCED_FILTER' => 'فرز متقدم',
    'LNK_BASIC_FILTER' => 'فرز سريع',
    'LBL_ADVANCED_SEARCH' => 'فلتر متقدم',
    'LBL_QUICK_FILTER' => 'فلتر سريع',
    'LNK_SEARCH_NONFTS_VIEW_ALL' => 'إظهار الكل',
    'LNK_CLOSE' => 'إغلاق',
    'LBL_MODIFY_CURRENT_FILTER' => 'تعديل الفلتر الحالي',
    'LNK_SAVED_VIEWS' => 'خيارات التصميم',
    'LNK_DELETE' => 'احذف',
    'LNK_EDIT' => 'حرر',
    'LNK_GET_LATEST' => 'احصل على الأحدث',
    'LNK_GET_LATEST_TOOLTIP' => 'استبدله بالإصدار الأحدث',
    'LNK_HELP' => 'مساعدة',
    'LNK_CREATE' => 'إنشاء',
    'LNK_LIST_END' => 'إنهاء',
    'LNK_LIST_NEXT' => 'التالي',
    'LNK_LIST_PREVIOUS' => 'السابق',
    'LNK_LIST_RETURN' => 'العودة للقائمة',
    'LNK_LIST_START' => 'ابدأ',
    'LNK_LOAD_SIGNED' => 'توقيع',
    'LNK_LOAD_SIGNED_TOOLTIP' => 'إستبدل بمستند موقع',
    'LNK_PRINT' => 'طباعة',
    'LNK_BACKTOTOP' => 'العودة إلى أعلى',
    'LNK_REMOVE' => 'أزِل',
    'LNK_RESUME' => 'إستعادة',
    'LNK_VIEW_CHANGE_LOG' => 'اعرض سجل التغييرات التي تمت',

    'NTC_CLICK_BACK' => 'من فضلك اضغط على زر العودة في المستعرض وأصلح خطأ التشغيل',
    'NTC_DATE_FORMAT' => '(yyyy-mm-dd)',
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'هل أنت متأكد بأنك ستحذف السجلات التي حددتها؟',
    'NTC_TEMPLATE_IS_USED' => 'هذا القالب مُستخدم في عملية تسويق واحدة على الأقل. هل متأكد من رغبتك في حذف هذه القالب؟',
    'NTC_TEMPLATES_IS_USED' => 'القوالب التالية مستخدمة في سجلات التسويق عبر البريد الالكتروني. هل أنت متأكد أنك تريد حذفه؟' . PHP_EOL,
    'NTC_DELETE_CONFIRMATION' => 'هل أنت متأكد من أنك تريد إلغاء هذا السجل؟',
    'NTC_DELETE_CONFIRMATION_NUM' => 'هل أنت متأكد من رغبتك في حذف ',
    'NTC_UPDATE_CONFIRMATION_NUM' => 'هل أنت متأكد من أنك تريد تحديث ',
    'NTC_DELETE_SELECTED_RECORDS' => 'السجلات المُحددة؟',
    'NTC_LOGIN_MESSAGE' => 'من فضلك أدخل اسم المستخدم وكلمة المرور',
    'NTC_NO_ITEMS_DISPLAY' => 'لا شئ',
    'NTC_REMOVE_CONFIRMATION' => 'هل تريد حذف هذه العلاقة/التعامل مع العميل؟ فقط سيتم حذف العلاقة/المعاملة ولن يتم حذف السجل.',
    'NTC_REQUIRED' => 'حدد الحقل المطلوب',
    'NTC_TIME_FORMAT' => '(24:00)',
    'NTC_WELCOME' => 'مرحبا',
    'NTC_YEAR_FORMAT' => '(yyyy)',
    'WARN_UNSAVED_CHANGES' => 'سوف تترك هذا السجل بدون حفظ التعديلات التي تمت عليه. هل أنت متأكد بأنك ستترك هذا السجل هكذا؟',
    'ERROR_NO_RECORD' => 'خطأ في استرجاع بيانات السجل. ربما هذا السجل محذوف أو لا يُسمح لك باستعراض بياناته',
    'WARN_BROWSER_VERSION_WARNING' => '<b>تحذير:</b> أنت تستخدم متصفح إنترنت ذو إصدار قديم غير مُحدث أو أن متصفحك غير مدعوم من قبل النظام.<p></p>هذه إصدارات المتصفحات التي ندعمها وننصح بها:<p></p><ul><li>انترنت أكسبلولر - الإصدار العاشر<li>فايرفوكس إصدار 32<li>سفاري إصدار 5.1<li>جوجل كروم إصدار 37</ul>',
    'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => '<b>تحذير:</b> المتصفح الخاص بك في وضعية عرض غير مدعومة.',
    'ERROR_TYPE_NOT_VALID' => '	خطأ. هذا النوع غير صحيح.',
    'ERROR_NO_BEAN' => 'فشل الحصول على الظبط.',
    'LBL_DUP_MERGE' => 'اظهر المتكرر',
    'LBL_MANAGE_SUBSCRIPTIONS' => 'إدارة الإشتراكات',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR' => 'إدارة الإشتراكات للـ',
    // Ajax status strings
    'LBL_LOADING' => 'جاري التحميل...',
    'LBL_SEARCHING' => 'جاري البحث...',
    'LBL_SAVING_LAYOUT' => 'حاري حفظ التصميم الخارجي...',
    'LBL_SAVED_LAYOUT' => 'تم حفظ التصميم الخارجي.',
    'LBL_SAVED' => 'تم حفظه',
    'LBL_SAVING' => 'جاري الحفظ',
    'LBL_DISPLAY_COLUMNS' => 'إظهار الأعمدة',
    'LBL_HIDE_COLUMNS' => 'إخفاء الأعمدة',
    'LBL_SEARCH_CRITERIA' => 'معايير البحث',
    'LBL_SAVED_VIEWS' => 'المشاهدات المحفوظة',
    'LBL_PROCESSING_REQUEST' => 'جاري المعالجة...',
    'LBL_REQUEST_PROCESSED' => 'تم',
    'LBL_AJAX_FAILURE' => 'فشل Ajax',
    'LBL_MERGE_DUPLICATES' => 'دمج',
    'LBL_SAVED_FILTER_SHORTCUT' => 'تصفياتي',
    'LBL_SEARCH_POPULATE_ONLY' => 'قم بالبحث باستخدام نموذج البحث أعلاه',
    'LBL_DETAILVIEW' => 'عرض التفاصيل',
    'LBL_LISTVIEW' => 'عرض كقائمة',
    'LBL_EDITVIEW' => 'عرض للتحرير',
    'LBL_BILLING_STREET' => 'الشارع:',
    'LBL_SHIPPING_STREET' => 'الشارع:',
    'LBL_SEARCHFORM' => 'نموذج البحث',
    'LBL_SAVED_SEARCH_ERROR' => 'من فضلك قدم اسما لهذه المطالعة',
    'LBL_DISPLAY_LOG' => 'اعرض سجل الأحداث',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => 'نظام',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => 'المهلة الزمنية لكل جلسة',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => 'المُهلة الزمنية للجلسة هي دقيقتان. من فضلك قم بحفظ كل ما قمت به',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' => 'انتهت مهلة جلسة العمل الخاصة بك.',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "\nAgenda: ",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => 'اجتماعات',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => 'مكالمات',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => 'الوقت: ',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'المكان: ',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'وصف: ',
    'MSG_JS_ALERT_MTG_REMINDER_STATUS' => 'الحالة: ',
    'MSG_JS_ALERT_MTG_REMINDER_RELATED_TO' => 'متعلق بـ: ',
    'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => "\nClick OK to view this call or click Cancel to dismiss this message.",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => "\nClick OK to view this meeting or click Cancel to dismiss this message.",
    'MSG_JS_ALERT_MTG_REMINDER_NO_EVENT_NAME' => 'الحدث',
    'MSG_JS_ALERT_MTG_REMINDER_NO_DESCRIPTION' => 'لم يتم تعيين الحدث.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_LOCATION' => 'لم يتم تعيين الموقع.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_START_DATE' => 'لا يعرف تاريخ البدء.',
    'MSG_LIST_VIEW_NO_RESULTS_BASIC' => 'لا يوجد نتائج.',
    'MSG_LIST_VIEW_NO_RESULTS_CHANGE_CRITERIA' => 'لتعذر الحصول على نتائج... قد يتوجب عليك معايير البحث و المحاولة مجدداً؟',
    'MSG_LIST_VIEW_NO_RESULTS' => 'لا يوجد نتائج تتعلق بـ <item1>',
    'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => 'إنشئ <item1> على أنه <item2> جديد',
    'MSG_LIST_VIEW_CHANGE_SEARCH' => 'أو تغيير معايير البحث الخاصة بك',
    'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => 'ليس لديك سجلات محفوظة حاليا. <item2> أو <item3> واحد الآن.',

    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => 'أضفه لمفضلتي',
    'LBL_CREATE_CONTACT' => 'إنشاء جهة إتصال',
    'LBL_CREATE_CASE' => 'إنشاء قضية',
    'LBL_CREATE_NOTE' => 'إنشاء ملاحظة',
    'LBL_CREATE_OPPORTUNITY' => 'انشئ فرصة',
    'LBL_SCHEDULE_CALL' => 'سجل المكالمة',
    'LBL_SCHEDULE_MEETING' => 'جدولة اجتماع',
    'LBL_CREATE_TASK' => 'إنشاء مهمة',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'توليد نموذج',
    'LBL_SAVE_WEB_TO_LEAD_FORM' => 'حفظ نموذج الويب',
    'LBL_AVAILABLE_FIELDS' => 'الحقول المتاحة',
    'LBL_FIRST_FORM_COLUMN' => 'أول عمود في النموذج',
    'LBL_SECOND_FORM_COLUMN' => 'ثاني عمود في النموذج',
    'LBL_ASSIGNED_TO_REQUIRED' => 'حقل مطلوب غير موجود: محدد لـ',
    'LBL_RELATED_CAMPAIGN_REQUIRED' => 'حقل مطلوب غير موجود: حملة تسويق ذات علاقة',
    'LBL_TYPE_OF_PERSON_FOR_FORM' => 'نموذج ويب لإنشائه',
    'LBL_TYPE_OF_PERSON_FOR_FORM_DESC' => 'اعتماد هذا النموذج سوف ينشئ ',

    'LBL_ADD_ALL_LEAD_FIELDS' => 'إضافة كافة الحقول',
    'LBL_RESET_ALL_LEAD_FIELDS' => 'إعادة تعيين كل الحقول',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => 'إزالة كل الحقول',
    'LBL_NEXT_BTN' => 'التالي',
    'LBL_ONLY_IMAGE_ATTACHMENT' => 'فقط يمكنك تضمين ملفات الصور المرفقة والتي بصيغة : JPG, PNG.',
    'LBL_TRAINING' => 'مُنتدى الدعم',
    'ERR_MSSQL_DB_CONTEXT' => 'تم تغيير سياق قاعدة البيانات إلى',
    'ERR_MSSQL_WARNING' => 'تحذير:',

    //Meta-Data framework
    'ERR_CANNOT_CREATE_METADATA_FILE' => 'خطأ: الملف [[file]] هو مفقود. غير قادر على الإنشاء لأنه لم يتم العثور على أي ملف HTML مطابق.',
    'ERR_CANNOT_FIND_MODULE' => 'خطأ: الوحدة [module] غير موجودة.',
    'LBL_ALT_ADDRESS' => 'عنوان آخر:',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'خطأ: هناك عدد غير متكافئ من الحجج لعنصري \'المفتاح\' و \'النسخ\' في جدول عوامل العرض.',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'عام',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'فلاتر',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'عناصري فقط',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'العنوان',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'استعراض الصفوف',

    // MySugar status strings
    'LBL_MAX_DASHLETS_REACHED' => 'لقد وصلت إلى الحد الأقصى من عدد داش لات الخاصة بالسويتيكرم التي تم تحديدها من قبل مسؤولك. الرجاء إزالة أحد الـ داش لات سويتيكرم لإضافة المزيد.',
    'LBL_ADDING_DASHLET' => 'إضافة تطبيق فرعي...',
    'LBL_ADDED_DASHLET' => 'تمت إضافة التطبيق الفرعي',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'هل أنت متأكد انك تريد إزالة هذا التطبيق الفرعي (Dashlet)؟',
    'LBL_REMOVING_DASHLET' => 'إزالة التطبيق الفرعي...',
    'LBL_REMOVED_DASHLET' => 'تمت إزالة التطبيق الفرعي',
    'LBL_MAX_DASHLET_COLUMNS' => "Maximum of %s columns can be displayed.",
    'LBL_RETRIEVING_XML_DATA' => "There was a problem retrieving the XML data:\n",

    // MySugar Menu Options

    'LBL_LOADING_PAGE' => 'جاري تحميل الصفحة، الرجاء الانتظار...',

    'LBL_RELOAD_PAGE' => 'يرجى تحديث <a href="javascript: window.location.reload()">النافذة</a>لاستخدام Dashlet.',
    'LBL_ADD_DASHLETS' => 'إضافة صفحة مُتابعة',
    'LBL_CLOSE_DASHLETS' => 'إغلاق',
    'LBL_OPTIONS' => 'خيارات',
    'LBL_1_COLUMN' => 'عمود واحد',
    'LBL_2_COLUMN' => 'عامودان',
    'LBL_3_COLUMN' => '3 أعمدة',
    'LBL_PAGE_NAME' => 'اسم الصفحة',

    'LBL_SEARCH_RESULTS' => 'نتائج البحث',
    'LBL_SEARCH_MODULES' => 'نظام فرعي',
    'LBL_SEARCH_TOOLS' => 'أدوات',
    'LBL_SEARCH_HELP_TITLE' => 'تلميحات مساعدة حول البحث',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => 'لا توجد صورة',

    'LBL_MODULE' => 'الوحدة',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => 'نسخ عنوان من اليسار:',
    'LBL_SAVE_AND_CONTINUE' => 'احفظ ثم تابع',

    'LBL_SEARCH_HELP_TEXT' => '<p><br /><strong>عناصر تحكم الخيارات المتعددة</strong></p><ul><li>انقر على القيم لاختيار سمة. </li><li>انقر على القيم مع الضغط على مفتاح Ctrl على لتحديد عدة سمات. ولمستخمي أجهزة ماك الضغط على CMD مع النقر على القيم.</li><li>لتحديد كل القيم بين سمتين، انقر على القيمة الأولى؛ ثم اضغط على مفتاح shift مع النقر على القيمة الأخيرة.</li></ul><p><strong>خيارات البحث والتصميم المتقدمة</strong><br><br>باستخدام خيار <b>البحث والتصميم المحفوظ</b>، يمكنك حفظ مجموعة من معطيات البحث أو تصاميم عرض قائمة مخصصة من أجل الحصول بسرعة على نتائج البحث المطلوبة في المستقبل. يمكنك حفظ عدد غير محدود من عمليات البحث والتصاميم المخصصة. تظهر جميع عمليات البحث المحفوظة بالاسم في قائمة عمليات البحث المحفوظة، ويظهر آخر بحث محفوظ تم تحميله أعلى القائمة.<br><br>لتخصيص تصميم طريقة عرض القائمة، استخدم مربعي إخفاء الأعمدة وعرض الأعمدة لتحديد الحقول المراد عرضها في نتائج البحث. على سبيل المثال، يمكنك عرض أو إخفاء التفاصيل مثل اسم السجل والمستخدم المكلف والفريق المكلف في نتائج البحث. لإضافة عمود إلى طريقة عرض القائمة، حدد الحقل من قائمة إخفاء الأعمدة واستخدم السهم الأيسر لنقله إلى قائمة أعمدة العرض. لإزالة عمود من عرض القائمة، حدده من قائمة أعمدة العرض واستخدم السهم الأيمن لنقله إلى قائمة إخفاء الأعمدة.<br><br>إذا قمت بحفظ إعدادات التصميم، فستتمكن من تحميلها في أي وقت لعرض نتائج البحث في التصميم المخصص.<br><br>لحفظ وتحديث بحث أو تخطيط:<ol><li>أدخل اسمًا لنتائج البحث في حقل <b>حفظ هذا البحث باسم</b> وانقر على <b>حفظ</b>. يظهر الاسم الآن في قائمة عمليات البحث المحفوظة المجاورة لزر <b>مسح</b>.</li><li>لعرض بحث محفوظ، حدده من قائمة عمليات البحث المحفوظة. يتم عرض نتائج البحث في طريقة عرض القائمة.</li><li>لتحديث خصائص بحث محفوظ، حدد البحث المحفوظ من القائمة، وأدخل معطيات البحث الجديدة وخيارات التصميم في منطقة البحث المتقدم، وانقر على <b>تحديث</b> بجوار <b>تعديل البحث الحالي</b>.</li><li>لحذف بحث محفوظ، حدده في قائمة عمليات البحث المحفوظة، وانقر على <b>حذف</b> بجوار <b>تعديل البحث الحالي</b>، ثم انقر على <b>موافق</b> لتأكيد الحذف.</li></ol><p><strong>نصائح</strong><br><br>باستخدام علامة % كعامل استبدال، يمكنك جعل بحثك أكثر شمولاً. على سبيل المثال، بدلاً من مجرد البحث عن النتائج المطابقة لكلمة "تفاح"، يمكنك تغيير بحثك إلى "تفاح%" والذي سيطابق جميع النتائج التي تبدأ بكلمة "تفاح" ولكنها قد تحتوي على أحرف أخرى أيضًا.</p>',

    //resource management
    'ERR_QUERY_LIMIT' => 'خطأ: تم الوصول إلى حد عملية طلب $limit للوحدة $module.',
    'ERROR_NOTIFY_OVERRIDE' => 'خطأ: مراقب الموارد->أبلغ أنه()يجب التجاوز.',

    //tracker labels
    'ERR_MONITOR_FILE_MISSING' => 'خطأ: تعذر إنشاء المراقب لأن ملف البيانات الوصفية فارغ أو الملف غير موجود.',
    'ERR_MONITOR_NOT_CONFIGURED' => 'خطأ: لا يوجد أي مراقب تمت تهيئته للاسم المطلوب',
    'ERR_UNDEFINED_METRIC' => 'خطأ: تعذر تعيين القيمة للمقياس غير المحدد',
    'ERR_STORE_FILE_MISSING' => 'خطأ: تعذر العثور على ملف تخزين التنفيذات',

    'LBL_MONITOR_ID' => 'معرف المراقب',
    'LBL_USER_ID' => 'معرف المستخدم',
    'LBL_MODULE_NAME' => 'اسم الوحدة',
    'LBL_ITEM_ID' => 'رقم العنصر',
    'LBL_ITEM_SUMMARY' => 'ملخص للعنصر',
    'LBL_ACTION' => 'إجراء',
    'LBL_SESSION_ID' => 'رقم جلسة المُتصفح',
    'LBL_BREADCRUMBSTACK_CREATED' => 'BreadCrumbStack تم إنشاؤه لمعرف المستخدم {0}',
    'LBL_VISIBLE' => 'سجل مرئي',
    'LBL_DATE_LAST_ACTION' => 'تاريخ آخر إجراء',

    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => 'ليس قبل',
    'MSG_IS_MORE_THAN' => 'أكثر من ',
    'MSG_SHOULD_BE' => 'يجب أن يكون',
    'MSG_OR_GREATER' => 'أو أكبر',

    'LBL_LIST' => 'قائمة',
    'LBL_CREATE_BUG' => 'إنشاء خطأ',

    'LBL_OBJECT_IMAGE' => 'صورة الكائن',
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => 'حدد تاريخ',

    'LBL_VALIDATE_RANGE' => 'ليست ضمن فترة تاريخية صحيحة',
    'LBL_CHOOSE_START_AND_END_DATES' => 'من فضلك اختر الفترة التاريخية بتحديد بداية ونهاية التاريخ',
    'LBL_CHOOSE_START_AND_END_ENTRIES' => 'من فضلك اختر مدخلات كل من بداية ونهاية الفترة التاريخية',

    //jchi #  20776
    'LBL_DROPDOWN_LIST_ALL' => 'الكل',

    //Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'خطأ: ترتيب إحصاء عوامل الجمع لا يتطابق مع ترتيب إحصاء النتائج.',
    'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'خطأ: إدخال تعيين مفقود للوحدة.',
    'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'خطأ: تعذر استرداد البيانات للموصل{0}. قد يكون تعذر الوصول إلى الخدمة أو إعدادات التهيئة قد تكون غير صالحة. رسالة خطأ الموصل: ({1}).',

    // fastcgi checks
    'LBL_FASTCGI_LOGGING' => 'للحصول على تجربة أمثل في استخدام IIS/FastCGI sapi, حدد set fastcgi.logging ليكون صفر وذلك في داخل ملف php.ini',

    //Collection Field
    'LBL_COLLECTION_NAME' => 'الاسم',
    'LBL_COLLECTION_PRIMARY' => 'رئيسي',
    'ERROR_MISSING_COLLECTION_SELECTION' => 'حقل إلزامي فارغ',

    //MB -Fixed Bug #32812 -Max
    'LBL_ASSIGNED_TO_NAME' => 'مُسند إلى',
    'LBL_DESCRIPTION' => 'وصف',

    'LBL_YESTERDAY' => 'يوم أمس',
    'LBL_TODAY' => 'اليوم',
    'LBL_TOMORROW' => 'غدا',
    'LBL_NEXT_WEEK' => 'الأسبوع التالي',
    'LBL_NEXT_MONDAY' => 'يوم الاثنين القادم',
    'LBL_NEXT_FRIDAY' => 'يوم الجمعة القادم',
    'LBL_TWO_WEEKS' => 'أسبوعان',
    'LBL_NEXT_MONTH' => 'الشهر التالي',
    'LBL_FIRST_DAY_OF_NEXT_MONTH' => 'أول يوم من الشهر القادم',
    'LBL_THREE_MONTHS' => 'ثلاثة أشهر',
    'LBL_SIXMONTHS' => 'ستة أشهر',
    'LBL_NEXT_YEAR' => 'العام القادم',

    //Datetimecombo fields
    'LBL_HOURS' => 'ساعات',
    'LBL_MINUTES' => 'دقائق',
    'LBL_MERIDIEM' => 'منتصف النهار',
    'LBL_DATE' => 'التاريخ',
    'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => 'إعادة تحميل الصفحة تلقائياً',

    'LBL_DURATION_DAY' => 'يوم',
    'LBL_DURATION_HOUR' => 'ساعة',
    'LBL_DURATION_MINUTE' => 'دقيقة',
    'LBL_DURATION_DAYS' => 'أيام',
    'LBL_DURATION_HOURS' => 'المدة (ساعات)',
    'LBL_DURATION_MINUTES' => 'المدة (دقائق)',

    //Calendar widget labels
    'LBL_CHOOSE_MONTH' => 'اختر الشهر',
    'LBL_ENTER_YEAR' => 'أدخل السنة',
    'LBL_ENTER_VALID_YEAR' => 'أدخل السنة بشكل صحيح',

    //File write error label
    'ERR_FILE_WRITE' => 'خطأ: لا يُمكن الكتابة على ملف {0}. من فضلك تأكد من وجود صلاحية لك في النظام وخادم/سيرفر الويب.',
    'ERR_FILE_NOT_FOUND' => 'خطأ: تعذر تحميل الملف {0}. الرجاء التحقق من النظام و سيرفر أذونات الويب.',

    'LBL_AND' => 'E',

    // File fields
    'LBL_SEARCH_EXTERNAL_API' => 'ملف في مصدر خارجي',
    'LBL_EXTERNAL_SECURITY_LEVEL' => 'الحماية',

    //IMPORT SAMPLE TEXT
    'LBL_IMPORT_SAMPLE_FILE_TEXT' => '
"هذا ملف نموذج استيراد الذي يوفر مثال عن المحتويات المتوقعة من الملفات الجاهزة لاستيرادها."
"هذا الملف مفصول بفاصلة .ملف csv، باستخدام  علامة اقتباش مزدوجة كمؤهل للحقل."
سطر الرأس هو في أعلى الملف و يحتوي على حقل التسميات الذي سترهم في التطبيق."
"ملاحضات: أسماء البيانات قد تكون مستخدمة أيضا في سطر الرأس. هذا يساعدك عند استخدام phpMyAdmin أو أي أداة بيانات قاعدية أخرى لتوفر لك قائمة تصدير البيانات المستوردة ".
"ترتيب هذا العمود ليس دقيق في إجراء تطابق عملية الاستيراد البيانات مع الحقول المناسبة إستناداً إلى سطر الرأس."
لاستخدام هذا الملف كقالب، قم بمايلي:"
"1. احذف صفوف النموذج من البيانات"
"2. قم بحذف نصل المساعدة الذي تقرءه الآن"
"3. قم بإدخال بياناتك في الصفوف و الأعمدة المناسبة"
"4. احفظ الملف في مكان معروف على نظامك"
"5. انقر على خيار الاستيراد من قائمة الإجراءت في التطبيق و اختر ملف لتحميله"
   ',
    //define labels to be used for overriding local values during import/export

    'LBL_NOTIFICATIONS_NONE' => 'لا يوجد تنبيهات حالياً',
    'LBL_ALT_SORT_DESC' => 'ترتيب تنازلي',
    'LBL_ALT_SORT_ASC' => 'ترتيب تصاعدي',
    'LBL_ALT_SORT' => 'ترتيب',
    'LBL_ALT_SHOW_OPTIONS' => 'إظهار الخيارات',
    'LBL_ALT_HIDE_OPTIONS' => 'إخفاء الخيارات',
    'LBL_ALT_MOVE_COLUMN_LEFT' => 'انقل ما حددته إلى القائمة اليسرى',
    'LBL_ALT_MOVE_COLUMN_RIGHT' => 'انقل ما حددته إلى القائمة اليمنى',
    'LBL_ALT_MOVE_COLUMN_UP' => 'قم بتحريك الإدخال المحدد إلى الأعلى في ترتيب القائمة المعروضة',
    'LBL_ALT_MOVE_COLUMN_DOWN' => 'قم بتحريك الإدخال المحدد إلى الأسفل في ترتيب القائمة المعروضة',
    'LBL_ALT_INFO' => 'معلومات',
    'MSG_DUPLICATE' => 'إن {0} سجل الذي ستقوم بإنشائه ربما يكون تكراراً لشيء موجود. {1} سجلاً يحتوي أسماء مُتشايهة مدونة بالأسفل.<br>إنقر لإنشاء {1} للاستمرار في إنشاء الجديد {0}, أو اختر الموجود {0} في القائمة أدناه.',
    'MSG_SHOW_DUPLICATES' => 'السجل {0} الذي أنت على وشك إنشاءه قد يكون نسخة مكررة من سجل {0} الموجود مسبقاً. السجلات {1} تحتوي على أسماء مشابهة مدرجة في الأسفل. انقر على حفظ لمواصلة إنشاء هذه السجل الجديد {0}، أو انقر إلغاء للرجةع إلى الوحدة بدون إنشاء الـ {0}.',
    'LBL_EMAIL_TITLE' => 'عنوان البريد الإلكتروني',
    'LBL_EMAIL_OPT_TITLE' => 'إلغاء اشتراك عنوان البريد الالكتروني',
    'LBL_EMAIL_INV_TITLE' => 'عنوان البريد الإلكتروني غير صحيح',
    'LBL_EMAIL_PRIM_TITLE' => 'اختيار عنوان البريد الالكتروني الأساسي',
    'LBL_SELECT_ALL_TITLE' => 'تحديد الكل',
    'LBL_SELECT_THIS_ROW_TITLE' => 'حدد هذا الصف',

    //for upload errors
    'UPLOAD_ERROR_TEXT' => 'خطأ: حدث خطأ أثناء رفع الملف. كود الخطأ: {0} - {1}',
    'UPLOAD_ERROR_TEXT_SIZEINFO' => 'خطأ: حدث خطأ أثناء رفع الملف. كود الخطأ: {0} - {1}. الحد الأعلى لرفع المفلات هو {2} ',
    'UPLOAD_ERROR_HOME_TEXT' => 'خطأ: حدث خطأ أثناء رفع الملف، من فضلك اتصل بمدير النظام لطلب المساعدة.',
    'UPLOAD_MAXIMUM_EXCEEDED' => 'حجم الملف المراد رفعه ({0} bytes) ويتجاوز الحد الأعلى المسموح به وهو:  {1} بايت',
    'UPLOAD_REQUEST_ERROR' => 'حدث خطأ. من فضلك إعادة تحميل صفحتك وحاول مرة أخرى',

    //508 used Access Keys
    'LBL_EDIT_BUTTON_KEY' => 'i',
    'LBL_EDIT_BUTTON_LABEL' => 'تحرير',
    'LBL_EDIT_BUTTON_TITLE' => 'تحرير',
    'LBL_DUPLICATE_BUTTON_KEY' => 'u',
    'LBL_DUPLICATE_BUTTON_LABEL' => 'كرر',
    'LBL_DUPLICATE_BUTTON_TITLE' => 'كرر',
    'LBL_DELETE_BUTTON_KEY' => 'd',
    'LBL_DELETE_BUTTON_LABEL' => 'حذف',
    'LBL_DELETE_BUTTON_TITLE' => 'احذف',
    'LBL_BULK_ACTION_BUTTON_LABEL' => 'BULK ACTION',
    'LBL_BULK_ACTION_BUTTON_LABEL_MOBILE' => 'إجراء',
    'LBL_SAVE_BUTTON_KEY' => 'a',
    'LBL_SAVE_BUTTON_LABEL' => 'حفظ',
    'LBL_SAVE_BUTTON_TITLE' => 'حفظ',
    'LBL_CANCEL_BUTTON_KEY' => 'l',
    'LBL_CANCEL_BUTTON_LABEL' => 'إلغاء',
    'LBL_CANCEL_BUTTON_TITLE' => 'إلغاء',
    'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '٧',
    'LBL_ADV_SEARCH_LNK_KEY' => '٨',
    'LBL_FIRST_INPUT_SEARCH_KEY' => '٩',

    'ERR_CONNECTOR_NOT_ARRAY' => 'ترتيب الموصل في {0} تم تعريفه بشكل غير صحيح أو هو فارغ و لا يمكن اسخدامه.',
    'ERR_SUHOSIN' => 'تحميل البث محظور من قبل Suhosin، الرجاء إضافة &quot;upload&quot; إلى suhosin.executor.include.whitelist (انظر suitecrm.log لمزيد من المعلومات)',
    'ERR_BAD_RESPONSE_FROM_SERVER' => 'إن استجابة الخادم/سيرفر تعتبر سيئة',
    'LBL_ACCOUNT_PRODUCT_QUOTE_LINK' => 'عرض الأسعار',
    'LBL_ACCOUNT_PRODUCT_SALE_PRICE' => 'سعر البيع',
    'LBL_EMAIL_CHECK_INTERVAL_DOM' => array(
        '-1' => 'يدويا',
        '5' => 'كل 5 دقائق',
        '15' => 'كل 10 دقيقة',
        '30' => 'كل 30 دقيقة',
        '60' => 'كل ساعة',
    ),

    'ERR_A_REMINDER_IS_EMPTY_OR_INCORRECT' => 'التذكير فارغ أو غير صحيح.',
    'ERR_REMINDER_IS_NOT_SET_POPUP_OR_EMAIL' => 'لم يتم تعيين التذكير سواء عبر الرسالة المنبثقة أو البريد الالكتروني.',
    'ERR_NO_INVITEES_FOR_REMINDER' => 'لا مدعوين للتذكير.',
    'LBL_DELETE_REMINDER_CONFIRM' => 'لا يتضمن التذكير أي مدعوين، هل تريد إزالة التذكير؟',
    'LBL_DELETE_REMINDER' => 'حذف التذكير',
    'LBL_OK' => 'موافق',

    'LBL_COLUMNS_FILTER_HEADER_TITLE' => 'اختر الأعمدة',
    'LBL_COLUMN_CHOOSER' => 'محدد العمود',
    'LBL_SAVE_CHANGES_BUTTON_TITLE' => 'حفظ التغييرات',
    'LBL_DISPLAYED' => 'معروض',
    'LBL_HIDDEN' => 'مخفي',
    'ERR_EMPTY_COLUMNS_LIST' => 'أحد العناصر مطلوب، على الأقل',

    'LBL_FILTER_HEADER_TITLE' => 'تنقيح وفلترة البيانات',

    'LBL_CATEGORY' => 'الفئة',
    'LBL_LIST_CATEGORY' => 'الفئة',
    'ERR_FACTOR_TPL_INVALID' => 'رسالة فاكتور اوثنتيكيشن غير صالحة، الرجاء الاتصال بمسؤولك.',
    'LBL_SUBTHEMES' => 'النمط',
    'LBL_SUBTHEME_OPTIONS_DAWN' => 'الفجر',
    'LBL_SUBTHEME_OPTIONS_DAY' => 'اليوم',
    'LBL_SUBTHEME_OPTIONS_DUSK' => 'المغرب',
    'LBL_SUBTHEME_OPTIONS_NIGHT' => 'الليل',
    'LBL_SUBTHEME_OPTIONS_NOON' => 'الظهر',

    'LBL_CONFIRM_DISREGARD_DRAFT_TITLE' => 'تجاهل المسودة',
    'LBL_CONFIRM_DISREGARD_DRAFT_BODY' => 'هذه العملية ستؤدي إلى حذف هذا االرسالة، هل تريد المتابعة؟',
    'LBL_CONFIRM_DISREGARD_EMAIL_TITLE' => 'الخروج من مربع الحوار',
    'LBL_CONFIRM_DISREGARD_EMAIL_BODY' => 'بترك مربع الحوار ستفقد جميع المعلومات التي أدخلتها، هل ترغب في الاستمرار؟',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_TITLE' => 'تطبيق قالب بريد الكتروني',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_BODY' => 'هذا العملية ستؤدي إلى تجاوز نص و حقل الموضوع في الرسالة، هل تريد المتابعة؟',

    'LBL_CONFIRM_OPT_IN_TITLE' => 'تأكيد الاشتراك',
    'LBL_OPT_IN_TITLE' => 'الاشتراك في',
    'LBL_CONFIRM_OPT_IN_DATE' => 'تاريخ تأكيد الاشتراك',
    'LBL_CONFIRM_OPT_IN_SENT_DATE' => 'تاريخ إرسال تأكيد الاشتراك',
    'LBL_CONFIRM_OPT_IN_FAIL_DATE' => 'تاريخ فشل تأكيد الاشتراك',
    'LBL_CONFIRM_OPT_IN_TOKEN' => 'تأكيد رمز الاشتراك',
    'ERR_OPT_IN_TPL_NOT_SET' => 'لم يتم تهيئة قالب اشتراك البريد الإلكتروني. الرجاء ضبط إعدادات البريد الإلكتروني.',
    'ERR_OPT_IN_RELATION_INCORRECT' => 'تسجيل الاشتراك يتطلب أن يكون البريد الإلكتروني متعلق بالحساب/جهة الاتصال/العميل/المستلم',

    'LBL_SECURITYGROUP_NONINHERITABLE' => 'المجموعة غير موروثة',
    'LBL_PRIMARY_GROUP' => "مجموعة أساسية",

    // footer
    'LBL_SUITE_TOP' => 'العودة إلى أعلى',
    'LBL_SUITE_SUPERCHARGED' => 'مدعومة جدا من قبل SuiteCRM',
    'LBL_SUITE_POWERED_BY' => 'بواسطة SugarCRM',
    'LBL_SUITE_DESC1' => 'SuiteCRM has been written and assembled by <a href="https://suitecrm.com/">SuiteCRM Ltd</a>. The Program is provided AS IS, without warranty. Licensed under AGPLv3.',
    'LBL_SUITE_DESC2' => 'هذا البرنامج مجاني؛ و يمكنك إعادة توزيعه و/أو التعديل عليه تحت شروط GNU Affero General Public الخاصة بترخيص الإصدار الثالث التي تم نشرها بواسطة مؤسسة البرامج المجانية.، بما في ذالك الإذن الإضافي المبينة في رأس شفرة المصدر.',
    'LBL_SUITE_DESC3' => 'SuiteCRM is a trademark of SuiteCRM Ltd<. All other company and product names may be trademarks of the respective companies with which they are associated.',
    'LBL_GENERATE_PASSWORD_BUTTON_TITLE' => 'إعادة تعيين كلمة المرور',
    'LBL_SEND_CONFIRM_OPT_IN_EMAIL' => 'إرسال تأكيد اشتراك البريد الإلكتروني',
    'LBL_CONFIRM_OPT_IN_ONLY_FOR_PERSON' => 'تأكيد اشتراك البريد الإلكتروني يتم إرساله فقط للحسابات/جهات الاتصال/قيادة/آفق',
    'LBL_CONFIRM_OPT_IN_IS_DISABLED' => 'تم تعطيل إرسال تأكيد اشتراك البريد الإلكتروني،قم بتمكين خيار تأكيد اشتراك البريد الإلكتروني في الإعدادات أو اتصل بالمسؤول.',
    'LBL_CONTACT_HAS_NO_PRIMARY_EMAIL' => 'إرسال تأكيد اشتراك البريد الإلكتروني غير ممكن لأن جهة الاتصال ليس لديها البريد الإلكتروني الأساسي',
    'LBL_CONFIRM_EMAIL_SENDING_FAILED' => 'فشل إرسال تأكيد اشتراك البريد الإلكتروني',
    'LBL_CONFIRM_EMAIL_SENT' => 'تم بنجاح إرسال تأكيد اشتراك البريد الإلكتروني',
);

$app_list_strings['moduleList']['Library'] = 'مكتبة';
$app_list_strings['moduleList']['EmailAddresses'] = 'عنوان البريد الإلكتروني';
$app_list_strings['project_priority_default'] = 'متوسط';
$app_list_strings['project_priority_options'] = array(
    'High' => 'عالي',
    'Medium' => 'متوسط',
    'Low' => 'منخفض',
);

//GDPR lawful basis options
$app_list_strings['lawful_basis_dom'] = array(
    '' => '',
    'consent' => 'موافقة',
    'contract' => 'عقد',
    'legal_obligation' => 'الالتزام القانوني',
    'protection_of_interest' => 'حماية المصالح',
    'public_interest' => 'الصالح العام',
    'legitimate_interest' => 'المصلحة المشروعة',
    'withdrawn' => 'منسحب',
);
//End GDPR lawful basis options

//GDPR lawful basis source options
$app_list_strings['lawful_basis_source_dom'] = array(
    '' => '',
    'website' => 'موقع الإنترنت',
    'phone' => 'هاتف',
    'given_to_user' => 'معطى للمستخدم',
    'email' => 'رسائل بريد الكتروني',
    'third_party' => 'الطرف الثالث',
);
//End GDPR lawful basis source options

$app_list_strings['moduleList']['KBDocuments'] = 'القاعدة المعرفية';

$app_list_strings['countries_dom'] = array(
    '' => '',
    'ABU DHABI' => 'أبو ظبي',
    'ADEN' => 'عدن',
    'AFGHANISTAN' => 'أفغانستان',
    'ALBANIA' => 'ألبانيا',
    'ALGERIA' => 'الجزائر',
    'AMERICAN SAMOA' => 'ساموا الأمريكية',
    'ANDORRA' => 'أندورا',
    'ANGOLA' => 'أنغولا',
    'ANTARCTICA' => 'القارة القطبية الجنوبية',
    'ANTIGUA' => 'أنتيغوا',
    'ARGENTINA' => 'الأرجنتين',
    'ARMENIA' => 'أرمينيا',
    'ARUBA' => 'أروبا',
    'AUSTRALIA' => 'أستراليا',
    'AUSTRIA' => 'النمسا',
    'AZERBAIJAN' => 'أذربيجان',
    'BAHAMAS' => 'جزر البهاما',
    'BAHRAIN' => 'البحرين',
    'BANGLADESH' => 'بنغلاديش',
    'BARBADOS' => 'بربادوس',
    'BELARUS' => 'بيلاروسيا',
    'BELGIUM' => 'بلجيكا',
    'BELIZE' => 'بيلز',
    'BENIN' => 'بينين',
    'BERMUDA' => 'برمودا',
    'BHUTAN' => 'بوتان',
    'BOLIVIA' => 'بوليفيا',
    'BOSNIA' => 'البوسنة',
    'BOTSWANA' => 'بوتسوانا',
    'BOUVET ISLAND' => 'جزيرة بوفيت',
    'BRAZIL' => 'البرازيل',
    'BRITISH ANTARCTICA TERRITORY' => 'إقليم أنتاركتيكا البريطاني',
    'BRITISH INDIAN OCEAN TERRITORY' => 'إقليم المحيط الهندي البريطاني',
    'BRITISH VIRGIN ISLANDS' => 'جزر العذراء البريطانية',
    'BRITISH WEST INDIES' => 'جزر الهند الغربية البريطانية',
    'BRUNEI' => 'بروناي',
    'BULGARIA' => 'بلغاريا',
    'BURKINA FASO' => 'بوركينا فاسو',
    'BURUNDI' => 'بوروندي',
    'CAMBODIA' => 'كمبوديا',
    'CAMEROON' => 'الكاميرون',
    'CANADA' => 'كندا',
    'CANAL ZONE' => 'منطقة القناة',
    'CANARY ISLAND' => 'جزيرة الكناري',
    'CAPE VERDI ISLANDS' => 'جزر كيب فيردي',
    'CAYMAN ISLANDS' => 'جزر كايمان',
    'CHAD' => 'تشاد',
    'CHANNEL ISLAND UK' => 'جزيرة قناة المملكة المتحدة',
    'CHILE' => 'شيلي',
    'CHINA' => 'الصين',
    'CHRISTMAS ISLAND' => 'جزيرة كريسمس',
    'COCOS (KEELING) ISLAND' => 'جزيرة كوكوس (كيلينغ)',
    'COLOMBIA' => 'كولومبيا',
    'COMORO ISLANDS' => 'جزر القمر',
    'CONGO' => 'الكونغو',
    'CONGO KINSHASA' => 'الكونغو كينشاسا',
    'COOK ISLANDS' => 'جزر كوك',
    'COSTA RICA' => 'كوستريكا',
    'CROATIA' => 'كرواتيا',
    'CUBA' => 'كوبا',
    'CURACAO' => 'كوراكاو',
    'CYPRUS' => 'قبرص',
    'CZECH REPUBLIC' => 'جمهورية التشيك',
    'DAHOMEY' => 'داهومي',
    'DENMARK' => 'الدنمارك',
    'DJIBOUTI' => 'جيبوتي',
    'DOMINICA' => 'الدومنيكا',
    'DOMINICAN REPUBLIC' => 'جمهورية الدومينيكان',
    'DUBAI' => 'دبي',
    'ECUADOR' => 'الإكوادور',
    'EGYPT' => 'مصر',
    'EL SALVADOR' => 'السلفادور',
    'EQUATORIAL GUINEA' => 'غينيا الإستوائية',
    'ESTONIA' => 'إيسوتنيا',
    'ETHIOPIA' => 'أثيوبيا',
    'FAEROE ISLANDS' => 'جزر فيرو',
    'FALKLAND ISLANDS' => 'جزر فوكلاند',
    'FIJI' => 'فيجي',
    'FINLAND' => 'فنلندا',
    'FRANCE' => 'فرنسا',
    'FRENCH GUIANA' => 'غويانا الفرنسية',
    'FRENCH POLYNESIA' => 'بولينيزيا الفرنسية',
    'GABON' => 'جابونN',
    'GAMBIA' => 'غامبيا',
    'GEORGIA' => 'جورجيا',
    'GERMANY' => 'ألمانيا',
    'GHANA' => 'غانا',
    'GIBRALTAR' => 'جبل طارق',
    'GREECE' => 'اليونان',
    'GREENLAND' => 'غرينلاند',
    'GUADELOUPE' => 'غواديلوب',
    'GUAM' => 'غوام',
    'GUATEMALA' => 'جواتيمالا',
    'GUINEA' => 'غينيا',
    'GUYANA' => 'غيانا',
    'HAITI' => 'هايتي',
    'HONDURAS' => 'هوندروس',
    'HONG KONG' => 'هونغ كونغ',
    'HUNGARY' => 'المجر',
    'ICELAND' => 'أيسلندا',
    'IFNI' => 'أفني',
    'INDIA' => 'الهند',
    'INDONESIA' => 'إندونيسيا',
    'IRAN' => 'إيران',
    'IRAQ' => 'العراق',
    'IRELAND' => 'أيرلندا',
    'ISRAEL' => 'إسرائيل',
    'ITALY' => 'إيطاليا',
    'IVORY COAST' => 'ساحل العاج',
    'JAMAICA' => 'جامايكا',
    'JAPAN' => 'اليابان',
    'JORDAN' => 'الأردن',
    'KAZAKHSTAN' => 'كازاخستان',
    'KENYA' => 'كينيا',
    'KOREA' => 'كوريا',
    'KOREA, SOUTH' => 'كوريا الجنوبية',
    'KUWAIT' => 'الكويت',
    'KYRGYZSTAN' => 'قيرغيزستان',
    'LAOS' => 'لاوس',
    'LATVIA' => 'لاتفيا',
    'LEBANON' => 'لبنان',
    'LEEWARD ISLANDS' => 'جزر ليوارد',
    'LESOTHO' => 'ليسوتو',
    'LIBYA' => 'ليبيا',
    'LIECHTENSTEIN' => 'ليشتنشتاين',
    'LITHUANIA' => 'لتوانيا',
    'LUXEMBOURG' => 'لوكسمبورج',
    'MACAO' => 'ماكاو',
    'MACEDONIA' => 'مقدونيا',
    'MADAGASCAR' => 'مدغشقر',
    'MALAWI' => 'ملاوي',
    'MALAYSIA' => 'ماليزيا',
    'MALDIVES' => 'جزر المالديف',
    'MALI' => 'مالي',
    'MALTA' => 'مالطا',
    'MARTINIQUE' => 'جزر المارتينيك',
    'MAURITANIA' => 'موريتانيا',
    'MAURITIUS' => 'موريشيوس',
    'MELANESIA' => 'ميلانيزيا',
    'MEXICO' => 'المكسيك',
    'MOLDOVIA' => 'مولدوفيا',
    'MONACO' => 'موناكو',
    'MONGOLIA' => 'منغوليا',
    'MOROCCO' => 'المغرب',
    'MOZAMBIQUE' => 'موزامبيق',
    'MYANAMAR' => 'ميانمار',
    'NAMIBIA' => 'ناميبيا',
    'NEPAL' => 'نيبال',
    'NETHERLANDS' => 'هولندا',
    'NETHERLANDS ANTILLES' => 'جزر اﻷنتيل الهولندية',
    'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'هولندا جزر اﻷنتيل المنطقة المحايدة',
    'NEW CALADONIA' => 'كالادونيا الجديدة',
    'NEW HEBRIDES' => 'نيو هبريدس',
    'NEW ZEALAND' => 'نيوزيلندا',
    'NICARAGUA' => 'نيكاراجوا',
    'NIGER' => 'النيجر',
    'NIGERIA' => 'نيجيريا',
    'NORFOLK ISLAND' => 'جزيرة نورفولك',
    'NORWAY' => 'النرويج',
    'OMAN' => 'عُمان',
    'OTHER' => 'الأخرى',
    'PACIFIC ISLAND' => 'جزر المحيط الهادئ',
    'PAKISTAN' => 'باكستان',
    'PANAMA' => 'بنما',
    'PAPUA NEW GUINEA' => 'بابوا غينيا الجديدة',
    'PARAGUAY' => 'باراجواي',
    'PERU' => 'بيرو',
    'PHILIPPINES' => 'الفلبين',
    'POLAND' => 'بولندا',
    'PORTUGAL' => 'البرتغال',
    'PORTUGUESE TIMOR' => 'تيمور الشرقية',
    'PUERTO RICO' => 'بويرتوريكو',
    'QATAR' => 'قطر',
    'REPUBLIC OF BELARUS' => 'جمهورية بيلاروس',
    'REPUBLIC OF SOUTH AFRICA' => 'جمهورية جنوب أفريقيا',
    'REUNION' => 'جزيرة ريونيون',
    'ROMANIA' => 'رومانيا',
    'RUSSIA' => 'روسيا',
    'RWANDA' => 'رواندا',
    'RYUKYU ISLANDS' => 'جزر ريوكيو',
    'SABAH' => 'صباح',
    'SAN MARINO' => 'سان مارينو',
    'SAUDI ARABIA' => 'المملكة العربية السعودية',
    'SENEGAL' => 'السنغال',
    'SERBIA' => 'صربيا',
    'SEYCHELLES' => 'سيشيل',
    'SIERRA LEONE' => 'سيراليون',
    'SINGAPORE' => 'سنغافورة',
    'SLOVAKIA' => 'سلوفاكيا',
    'SLOVENIA' => 'سلوفينيا',
    'SOMALILIAND' => 'سوماليلياند',
    'SOUTH AFRICA' => 'جنوب أفريقيا',
    'SOUTH YEMEN' => 'جنوب اليمن',
    'SPAIN' => 'إسبانيا',
    'SPANISH SAHARA' => 'الصحراء الإسبانية',
    'SRI LANKA' => 'سريلانكا',
    'ST. KITTS AND NEVIS' => 'سانت كيتس و نيفيس',
    'ST. LUCIA' => 'سانت لوسيا',
    'SUDAN' => 'السودان',
    'SURINAM' => 'سورينام',
    'SW AFRICA' => 'جنوب افريقيا',
    'SWAZILAND' => 'سوازيلند',
    'SWEDEN' => 'السويد',
    'SWITZERLAND' => 'سويسرا',
    'SYRIA' => 'سوريا',
    'TAIWAN' => 'تايوان',
    'TAJIKISTAN' => 'طاجيكستان',
    'TANZANIA' => 'تنزانيا',
    'THAILAND' => 'تايلاند',
    'TONGA' => 'تونغا',
    'TRINIDAD' => 'ترينيداد',
    'TUNISIA' => 'تونس',
    'TURKEY' => 'تركيا',
    'UGANDA' => 'أوغندا',
    'UKRAINE' => 'أوكرانيا',
    'UNITED ARAB EMIRATES' => 'الإمارات العربية المتحدة',
    'UNITED KINGDOM' => 'المملكة المتحدة',
    'URUGUAY' => 'اوروجواي',
    'US PACIFIC ISLAND' => 'جزر المحيط الهادئ في الولايات المتحدة',
    'US VIRGIN ISLANDS' => 'جزر العذراء الأمريكية',
    'USA' => 'الولايات المتحدة الأمريكية',
    'UZBEKISTAN' => 'أوزبكستان',
    'VANUATU' => 'فانواتو',
    'VATICAN CITY' => 'مدينة الفاتيكان',
    'VENEZUELA' => 'فنزويلا',
    'VIETNAM' => 'فيتنام',
    'WAKE ISLAND' => 'جزيرة ويك',
    'WEST INDIES' => 'جزر الهند الغربية',
    'WESTERN SAHARA' => 'الصحراء الغربية',
    'YEMEN' => 'اليمن',
    'ZAIRE' => 'زائير',
    'ZAMBIA' => 'زامبيا',
    'ZIMBABWE' => 'زيمبابوي',
);

$app_list_strings['charset_dom'] = array(
    'BIG-5' => 'BIG-5 (تايوان وهونغ كونغ)',
    /*'CP866'     => 'CP866', // ms-dos Cyrillic */
    /*'CP949'     => 'CP949 (Microsoft Korean)', */
    'CP1251' => 'CP1251 (مايكروسوفت - السيريلية)',
    'CP1252' => 'CP1252 (مايكروسوفت - الأوروبية الغربية & الولايات المتحدة)',
    'EUC-CN' => 'EUC-CN (الصينية المبسطة GB2312)',
    'EUC-JP' => 'EUC-JP (يابانية - يونكس)',
    'EUC-KR' => 'EUC-KR (كورية)',
    'EUC-TW' => 'يوك-تو (التايوانية)',
    'ISO-2022-JP' => 'أيزو-2022-جب (اليابان)',
    'ISO-2022-KR' => 'أيزو-2022-كر(كوريا)',
    'ISO-8859-1' => 'أيزو-8859 (أوروبا الغربية و الولايات المتحدة)',
    'ISO-8859-2' => 'أيزو-8859-2 (أوروبا الوسطى و الشرقية)',
    'ISO-8859-3' => 'أيزو-8859-3 (اللاتيني 3)',
    'ISO-8859-4' => 'أيزو-8859-4 (اللاتيني 4)',
    'ISO-8859-5' => 'أيزو-8859-5 (السريلية)',
    'ISO-8859-6' => 'ISO-8859-6 (العربية)',
    'ISO-8859-7' => 'أيزو-8859-7 (اليونانية)',
    'ISO-8859-8' => 'أيزو-8859-8 (عبري)',
    'ISO-8859-9' => 'أيزو-8859-9 (اللاتيني 5)',
    'ISO-8859-10' => 'أيزو-8859-10 (اللاتيني 6)',
    'ISO-8859-13' => 'أيزو-8859-13 (اللاتيني 7)',
    'ISO-8859-14' => 'أيزو-8859-14 (اللاتيني 8)',
    'ISO-8859-15' => 'أيزو-8859-15 (اللاتيني 9)',
    'KOI8-R' => 'كوا8-ر (السيريلية الروسية)',
    'KOI8-U' => 'كوا8-ر (السيريلية الأوكرانية)',
    'SJIS' => 'س ج ي س (م س اليابانية)',
    'UTF-8' => 'UTF-8',
);

$app_list_strings['timezone_dom'] = array(

    'Africa/Algiers' => 'أفريقيا/الجزائر',
    'Africa/Luanda' => 'أفريقيا/لواندا',
    'Africa/Porto-Novo' => 'أفريقيا/بورتو-نوفو',
    'Africa/Gaborone' => 'أفريقيا/غابورون',
    'Africa/Ouagadougou' => 'أفريقيا/واغادوغو',
    'Africa/Bujumbura' => 'أفريقيا/بوجومبورا',
    'Africa/Douala' => 'أفريقيا/دوالا',
    'Atlantic/Cape_Verde' => 'المحيط الأطلسي/الرأس الأخضر',
    'Africa/Bangui' => 'أفريقيا/بانغي',
    'Africa/Ndjamena' => 'أفريقيا/نجامينا',
    'Indian/Comoro' => 'الهندي/جزر القمر',
    'Africa/Kinshasa' => 'أفريقيا/كينشاسا',
    'Africa/Lubumbashi' => 'أفريقيا/لوبومباشي',
    'Africa/Brazzaville' => 'أفريقيا/برازافيل',
    'Africa/Abidjan' => 'أفريقيا/أبيدجان',
    'Africa/Djibouti' => 'أفريقيا/جيبوتي',
    'Africa/Cairo' => 'أفريقيا/القاهرة',
    'Africa/Malabo' => 'أفريقيا/مالابو',
    'Africa/Asmera' => 'أفريقيا/أسمرا',
    'Africa/Addis_Ababa' => 'أفريقيا/أديس أبابا',
    'Africa/Libreville' => 'أفريقيا/ليبرفيل',
    'Africa/Banjul' => 'أفريقيا/بانجول',
    'Africa/Accra' => 'أفريقيا/أكرا',
    'Africa/Conakry' => 'أفريقيا/كوناكري',
    'Africa/Bissau' => 'أفريقيا/بيساو',
    'Africa/Nairobi' => 'أفريقيا/نيروبي',
    'Africa/Maseru' => 'أفريقيا/ماسيرو',
    'Africa/Monrovia' => 'أفريقيا/مونروفيا',
    'Africa/Tripoli' => 'أفريقيا/طرابلس',
    'Indian/Antananarivo' => 'الهندي/أنتاناناريفو',
    'Africa/Blantyre' => 'أفريقيا/بلانتير',
    'Africa/Bamako' => 'أفريقيا/باماكو',
    'Africa/Nouakchott' => 'أفريقيا/نواكشوط',
    'Indian/Mauritius' => 'الهندي/موريشيوس',
    'Indian/Mayotte' => 'الهندي/جزيرة مايوت',
    'Africa/Casablanca' => 'أفريقيا/الدار البيضاء',
    'Africa/El_Aaiun' => 'أفريقيا/العيون',
    'Africa/Maputo' => 'أفريقيا/مابوتو',
    'Africa/Windhoek' => 'أفريقيا/ويندهوك',
    'Africa/Niamey' => 'أفريقيا/نيامي',
    'Africa/Lagos' => 'أفريقيا/لاجوس',
    'Indian/Reunion' => 'الهندي/ريونيون',
    'Africa/Kigali' => 'أفريقيا/كيغالي',
    'Atlantic/St_Helena' => 'المحيط الأطلسي/سانت هيلانة',
    'Africa/Sao_Tome' => 'أفريقيا/ساو تومي',
    'Africa/Dakar' => 'أفريقيا/داكار',
    'Indian/Mahe' => 'الهندي/ماهي',
    'Africa/Freetown' => 'أفريقيا/فريتاون',
    'Africa/Mogadishu' => 'أفريقيا/مقديشو',
    'Africa/Johannesburg' => 'أفريقيا/جوهانسبرغ',
    'Africa/Khartoum' => 'أفريقيا/الخرطوم',
    'Africa/Mbabane' => 'أفريقيا/مبابان',
    'Africa/Dar_es_Salaam' => 'أفريقيا/دار السلام',
    'Africa/Lome' => 'إفريقيا/لومي',
    'Africa/Tunis' => 'أفريقيا/تونس',
    'Africa/Kampala' => 'أفريقيا/كمبالا',
    'Africa/Lusaka' => 'أفريقيا/لوساكا',
    'Africa/Harare' => 'أفريقيا/هراري',
    'Antarctica/Casey' => 'القارة القطبية الجنوبية/كيسي',
    'Antarctica/Davis' => 'القارة القطبية الجنوبية/ديفيس',
    'Antarctica/Mawson' => 'القارة القطبية الجنوبية/موسون',
    'Indian/Kerguelen' => 'الهندي/كيرغولن',
    'Antarctica/DumontDUrville' => 'القارة القطبية الجنوبية/دومونتدورفيل',
    'Antarctica/Syowa' => 'القارة القطبية الجنوبية/سيووا',
    'Antarctica/Vostok' => 'القارة القطبية الجنوبية/فوستوك',
    'Antarctica/Rothera' => 'القارة القطبية الجنوبية/روثيرا',
    'Antarctica/Palmer' => 'القارة القطبية الجنوبية/بالمر',
    'Antarctica/McMurdo' => 'القارة القطبية الجنوبية/ماكموردو',
    'Asia/Kabul' => 'آسيا/كابول',
    'Asia/Yerevan' => 'آسيا/يريفان',
    'Asia/Baku' => 'آسيا/باكو',
    'Asia/Bahrain' => 'آسيا/البحرين',
    'Asia/Dhaka' => 'آسيا/دكا',
    'Asia/Thimphu' => 'آسيا/تيمفو',
    'Indian/Chagos' => 'الهندي/شاغوس',
    'Asia/Brunei' => 'آسيا/بروناي',
    'Asia/Rangoon' => 'آسيا/رانغون',
    'Asia/Phnom_Penh' => 'آسيا/بنوم بنه',
    'Asia/Beijing' => 'آسيا/بكين',
    'Asia/Harbin' => 'آسيا/هاربين',
    'Asia/Shanghai' => 'آسيا/شانغهاي',
    'Asia/Chongqing' => 'آسيا/تشونغتشينغ',
    'Asia/Urumqi' => 'آسيا/أورومكي',
    'Asia/Kashgar' => 'آسيا/كاشغر',
    'Asia/Hong_Kong' => 'آسيا/هونغ كونغ',
    'Asia/Taipei' => 'آسيا/تايبيه',
    'Asia/Macau' => 'آسيا/ماكاو',
    'Asia/Nicosia' => 'آسيا/نيقوسيا',
    'Asia/Tbilisi' => 'آسيا/تبليسي',
    'Asia/Dili' => 'آسيا/ديلي',
    'Asia/Calcutta' => 'آسيا/كالكوتا',
    'Asia/Jakarta' => 'آسيا/جاكرتا',
    'Asia/Pontianak' => 'آسيا/بونتياناك',
    'Asia/Makassar' => 'آسيا/ماكاسار',
    'Asia/Jayapura' => 'آسيا/جايابورا',
    'Asia/Tehran' => 'آسيا/طهران',
    'Asia/Baghdad' => 'آسيا/بغداد',
    'Asia/Jerusalem' => 'آسيا/القدس',
    'Asia/Tokyo' => 'آسيا/طوكيو',
    'Asia/Amman' => 'آسيا/عمان',
    'Asia/Almaty' => 'آسيا/ألماتي',
    'Asia/Qyzylorda' => 'آسيا/وكيزيلوردا',
    'Asia/Aqtobe' => 'آسيا/أقتوبي',
    'Asia/Aqtau' => 'آسيا/أكتاو',
    'Asia/Oral' => 'آسيا/أورل',
    'Asia/Bishkek' => 'آسيا/بيشكيك',
    'Asia/Seoul' => 'آسيا/سيول',
    'Asia/Pyongyang' => 'آسيا/بيونغ يانغ',
    'Asia/Kuwait' => 'آسيا/الكويت',
    'Asia/Vientiane' => 'آسيا/فيينتيان',
    'Asia/Beirut' => 'آسيا/بيروت',
    'Asia/Kuala_Lumpur' => 'آسيا/كوالالمبور',
    'Asia/Kuching' => 'آسيا/كوتشينغ',
    'Indian/Maldives' => 'الهندي/جزر المالديف',
    'Asia/Hovd' => 'آسيا/هوفد',
    'Asia/Ulaanbaatar' => 'آسيا/أولان باتر',
    'Asia/Choibalsan' => 'آسيا/تشويبالسان',
    'Asia/Katmandu' => 'آسيا/كاتماندو',
    'Asia/Muscat' => 'آسيا/مسقط',
    'Asia/Karachi' => 'آسيا/كراتشي',
    'Asia/Gaza' => 'آسيا/غزة',
    'Asia/Manila' => 'آسيا/مانيلا',
    'Asia/Qatar' => 'آسيا/قطر',
    'Asia/Riyadh' => 'آسيا/الرياض',
    'Asia/Singapore' => 'آسيا/سنغافورة',
    'Asia/Colombo' => 'آسيا/كولومبو',
    'Asia/Damascus' => 'آسيا/دمشق',
    'Asia/Dushanbe' => 'آسيا/دوشانبي',
    'Asia/Bangkok' => 'آسيا/بانكوك',
    'Asia/Ashgabat' => 'آسيا/عشق أباد',
    'Asia/Dubai' => 'آسيا/دبي',
    'Asia/Samarkand' => 'آسيا/سمرقند',
    'Asia/Tashkent' => 'آسيا/طشقند',
    'Asia/Saigon' => 'آسيا/سايغون',
    'Asia/Aden' => 'آسيا/عدن',
    'Australia/Darwin' => 'أستراليا/داروين',
    'Australia/Perth' => 'أستراليا/بيرث',
    'Australia/Brisbane' => 'أستراليا/بريسبان',
    'Australia/Lindeman' => 'أستراليا/ليندمان',
    'Australia/Adelaide' => 'أستراليا/أديليد',
    'Australia/Hobart' => 'أستراليا/هوبارت',
    'Australia/Currie' => 'أستراليا/كوري',
    'Australia/Melbourne' => 'أستراليا/ملبورن',
    'Australia/Sydney' => 'أستراليا/سيدني',
    'Australia/Broken_Hill' => 'أستراليا/ بروكن هيل',
    'Indian/Christmas' => 'الهندي/كريسمس',
    'Pacific/Rarotonga' => 'المحيط الهادئ/راروتونغا',
    'Indian/Cocos' => 'الهندي/جزر كوكوس',
    'Pacific/Fiji' => 'المحيط الهادئ/فيجي',
    'Pacific/Gambier' => 'المحيط الهادئ/غامبير',
    'Pacific/Marquesas' => 'المحيط الهادئ/الماركيز',
    'Pacific/Tahiti' => 'المحيط الهادئ/تاهيتي',
    'Pacific/Guam' => 'المحيط الهادئ/غوام',
    'Pacific/Tarawa' => 'المحيط الهادئ/تاراوا',
    'Pacific/Enderbury' => 'المحيط الهادئ/انديربوري',
    'Pacific/Kiritimati' => 'المحيط الهادئ/كيريتيماتي',
    'Pacific/Saipan' => 'المحيط الهادئ/سايبان',
    'Pacific/Majuro' => 'المحيط الهادئ/ماجورو',
    'Pacific/Kwajalein' => 'المحيط الهادئ/كواجالين',
    'Pacific/Truk' => 'المحيط الهادئ/تراك',
    'Pacific/Pohnpei' => 'المحيط الهادئ/بونبي',
    'Pacific/Kosrae' => 'المحيط الهادئ/كوسراي',
    'Pacific/Nauru' => 'المحيط الهادئ/ناورو',
    'Pacific/Noumea' => 'المحيط الهادئ/نوميا',
    'Pacific/Auckland' => 'المحيط الهادئ/أوكلاند',
    'Pacific/Chatham' => 'المحيط الهادئ/تشاتام',
    'Pacific/Niue' => 'المحيط الهادئ/نوميا',
    'Pacific/Norfolk' => 'المحيط الهادئ/نورفولك',
    'Pacific/Palau' => 'المحيط الهادئ/بالاو',
    'Pacific/Port_Moresby' => 'المحيط الهادئ/بورت مورسبي',
    'Pacific/Pitcairn' => 'المحيط الهادئ/بيتكيرن',
    'Pacific/Pago_Pago' => 'المحيط الهادئ/باغو باغو',
    'Pacific/Apia' => 'المحيط الهادئ/أبيا',
    'Pacific/Guadalcanal' => 'المحيط الهادئ/وادي القنال',
    'Pacific/Fakaofo' => 'المحيط الهادئ/فاكاوفو',
    'Pacific/Tongatapu' => 'المحيط الهادئ/تونجاتابو',
    'Pacific/Funafuti' => 'المحيط الهادئ/فونافوتي',
    'Pacific/Johnston' => 'المحيط الهادئ/جونستون',
    'Pacific/Midway' => 'المحيط الهادئ/ميدواي',
    'Pacific/Wake' => 'المحيط الهادئ/وايك',
    'Pacific/Efate' => 'المحيط الهادئ/إيفايت',
    'Pacific/Wallis' => 'المحيط الهادئ/واليس',
    'Europe/London' => 'أوروبا/لندن',
    'Europe/Dublin' => 'أوروبا/دبلن',
    'WET' => 'WET (توقيت أوروبا الغربية)',
    'CET' => 'CET (توقيت وسط أوروبا)',
    'MET' => 'MET (توقيت أوروبا الوسطى)',
    'EET' => 'EET (توقيت أوروبا الشرقية)',
    'Europe/Tirane' => 'أوروبا/تيران',
    'Europe/Andorra' => 'أوروبا/أندورا',
    'Europe/Vienna' => 'أوروبا/فيينا',
    'Europe/Minsk' => 'أوروبا/مينسك',
    'Europe/Brussels' => 'أوروبا/بروكسل',
    'Europe/Sofia' => 'أوروبا/صوفيا',
    'Europe/Prague' => 'أوروبا/براغ',
    'Europe/Copenhagen' => 'أوروبا/كوبنهاغن',
    'Atlantic/Faeroe' => 'الأطلسي/فايرو',
    'America/Danmarkshavn' => 'أمريكا/دانماركشافن',
    'America/Scoresbysund' => 'أمريكا/سكورسبايسند',
    'America/Godthab' => 'أمريكا/جودتاب',
    'America/Thule' => 'أمريكا/ثول',
    'Europe/Tallinn' => 'أوروبا/تالين',
    'Europe/Helsinki' => 'أوروبا/هلسنكي',
    'Europe/Paris' => 'أوروبا/باريس',
    'Europe/Berlin' => 'أوروبا/برلين',
    'Europe/Gibraltar' => 'أوروبا/جبل طارق',
    'Europe/Athens' => 'أوروبا/أثينا',
    'Europe/Budapest' => 'أوروبا/بودابست',
    'Atlantic/Reykjavik' => 'الأطلسي/ريكيافيك',
    'Europe/Rome' => 'أوروبا/روما',
    'Europe/Riga' => 'أوروبا/ريغا',
    'Europe/Vaduz' => 'أوروبا/فادوز',
    'Europe/Vilnius' => 'أوروبا/فيلنيوس',
    'Europe/Luxembourg' => 'أوروبا/لوكسمبورج',
    'Europe/Malta' => 'أوروبا/مالطا',
    'Europe/Chisinau' => 'أوروبا/كيشيناو',
    'Europe/Monaco' => 'أوروبا/موناكو',
    'Europe/Amsterdam' => 'أوروبا/أمستردام',
    'Europe/Oslo' => 'أوروبا/أوسلو',
    'Europe/Warsaw' => 'أوروبا/وارسو',
    'Europe/Lisbon' => 'أوروبا/لشبونة',
    'Atlantic/Azores' => 'المحيط الأطلسي/الأزور',
    'Atlantic/Madeira' => 'المحيط الأطلسي/ماديرا',
    'Europe/Bucharest' => 'أوروبا/بوخارست',
    'Europe/Kaliningrad' => 'أوروبا/كالينينجراد',
    'Europe/Moscow' => 'أوروبا/موسكو',
    'Europe/Samara' => 'أوروبا/سماره',
    'Asia/Yekaterinburg' => 'أوروبا/ياكترينبرج',
    'Asia/Omsk' => 'آسيا/أومسك',
    'Asia/Novosibirsk' => 'آسيا/نوفوسيبيرسك',
    'Asia/Krasnoyarsk' => 'آسيا/كراسنويارسك',
    'Asia/Irkutsk' => 'آسيا/إركوتسك',
    'Asia/Yakutsk' => 'آسيا/ياكوتسك',
    'Asia/Vladivostok' => 'آسيا/فلاديفوستوك',
    'Asia/Sakhalin' => 'آسيا/ساخلين',
    'Asia/Magadan' => 'آسيا/ماغادان',
    'Asia/Kamchatka' => 'آسيا/كامتشاتكا',
    'Asia/Anadyr' => 'آسيا/أنادير',
    'Europe/Belgrade' => 'أوروبا/بلغراد',
    'Europe/Madrid' => 'أوروبا/مدريد',
    'Africa/Ceuta' => 'أوروبا/سبتة',
    'Atlantic/Canary' => 'المحيط الأطلسي/كناري',
    'Europe/Stockholm' => 'أوروبا/ستوكهولم',
    'Europe/Zurich' => 'أوروبا/زيورخ',
    'Europe/Istanbul' => 'أوروبا/اسطنبول',
    'Europe/Kiev' => 'أوروبا/كييف',
    'Europe/Uzhgorod' => 'أوروبا/أوزجغورود',
    'Europe/Zaporozhye' => 'أوروبا/زابورزاي',
    'Europe/Simferopol' => 'أوروبا/سيمفيروبول',
    'America/New_York' => 'أمريكا/نيويورك',
    'America/Chicago' => 'أمريكا/شيكاغو',
    'America/North_Dakota/Center' => 'أمريكا/داكوتا الشمالية/وسط',
    'America/Denver' => 'أمريكا/دنفر',
    'America/Los_Angeles' => 'أمريكا/لوس أنجلس',
    'America/Juneau' => 'أمريكا/جونو',
    'America/Yakutat' => 'أمريكا/ياكوتات',
    'America/Anchorage' => 'أمريكا/أنشوراج',
    'America/Nome' => 'أمريكا/نومي',
    'America/Adak' => 'أمريكا/أداك',
    'Pacific/Honolulu' => 'المحيط الهادئ/هونولولو',
    'America/Phoenix' => 'أمريكا/فينيكس',
    'America/Boise' => 'أمريكا/بويز',
    'America/Indiana/Indianapolis' => 'أمريكا/إنديانا/إنديانا بوليس',
    'America/Indiana/Marengo' => 'أمريكا/إنديانا/إنديانا بوليس',
    'America/Indiana/Knox' => 'أمريكا/إنديانا/كونكس',
    'America/Indiana/Vevay' => 'أمريكا/إنديانا/فيفاي',
    'America/Kentucky/Louisville' => 'أمريكا/كنتاكي/لويزفيل',
    'America/Kentucky/Monticello' => 'أمريكا/كنتاكي/مونتايسلو',
    'America/Detroit' => 'أمريكا/ديترويت',
    'America/Menominee' => 'أمريكا/مينوميني',
    'America/St_Johns' => 'أمريكا/سانت جونز',
    'America/Goose_Bay' => 'أمريكا/قوس باي',
    'America/Halifax' => 'أمريكا/هاليفاكس',
    'America/Glace_Bay' => 'أمريكا/قلاس باي',
    'America/Montreal' => 'أمريكا/مونتريال',
    'America/Toronto' => 'أمريكا/تورونتو',
    'America/Thunder_Bay' => 'أمريكا/ثاندر باي',
    'America/Nipigon' => 'أمريكا/نيبيجون',
    'America/Rainy_River' => 'أمريكا/راين ريفر',
    'America/Winnipeg' => 'أمريكا/وينيباغ',
    'America/Regina' => 'أمريكا/ريجينا',
    'America/Swift_Current' => 'أمريكا/سويفت كورانت',
    'America/Edmonton' => 'أمريكا/إدمنتون',
    'America/Vancouver' => 'أمريكا/فانكوفر',
    'America/Dawson_Creek' => 'أمريكا/ داوسون كريك',
    'America/Pangnirtung' => 'أمريكا/بانجنيرتونج',
    'America/Iqaluit' => 'أمريكا/لاكالويت',
    'America/Coral_Harbour' => 'أمريكا/كورل هاربور',
    'America/Rankin_Inlet' => 'أمريكا/رانكن لنلات',
    'America/Cambridge_Bay' => 'أمريكا/كامبريدج باي',
    'America/Yellowknife' => 'أمريكا/يالاونايف',
    'America/Inuvik' => 'أمريكا/أنفيك',
    'America/Whitehorse' => 'أمريكا/وايت هورس',
    'America/Dawson' => 'أمريكا/داوسون',
    'America/Cancun' => 'أمريكا/كانكون',
    'America/Merida' => 'أمريكا/ميريدا',
    'America/Monterrey' => 'أمريكا/مونتيري',
    'America/Mexico_City' => 'أمريكا/مكسيكو سيتي',
    'America/Chihuahua' => 'أمريكا/تشيهواهوا',
    'America/Hermosillo' => 'أمريكا/هيرموسيلو',
    'America/Mazatlan' => 'أمريكا/مازاتلان',
    'America/Tijuana' => 'أمريكا/تيخوانا',
    'America/Anguilla' => 'أمريكا/أنغيلا',
    'America/Antigua' => 'أمريكا/أنتيغوا',
    'America/Nassau' => 'أمريكا/ناسو',
    'America/Barbados' => 'أمريكا/بربادوس',
    'America/Belize' => 'أمريكا/بليز',
    'Atlantic/Bermuda' => 'المحيط الأطلسي/برمودا',
    'America/Cayman' => 'أمريكا/كايمان',
    'America/Costa_Rica' => 'أمريكا/كوستا ريكا',
    'America/Havana' => 'أمريكا/هافانا',
    'America/Dominica' => 'أمريكا/دومينيكا',
    'America/Santo_Domingo' => 'أمريكا/سانتو دومينغو',
    'America/El_Salvador' => 'أمريكا/السلفادور',
    'America/Grenada' => 'أمريكا/غرينادا',
    'America/Guadeloupe' => 'أمريكا/جوادلوب',
    'America/Guatemala' => 'أمريكا/غواتيمالا',
    'America/Port-au-Prince' => 'أمريكا/بورت أو برنس',
    'America/Tegucigalpa' => 'أمريكا/تيغوسيغالبا',
    'America/Jamaica' => 'أمريكا/جامايكا',
    'America/Martinique' => 'أمريكا/مارتينيك',
    'America/Montserrat' => 'أمريكا/مونتسيرات',
    'America/Managua' => 'أمريكا/ماناغوا',
    'America/Panama' => 'أمريكا/بنما',
    'America/Puerto_Rico' => 'أمريكا/بورت إريكو',
    'America/St_Kitts' => 'أمريكا/سانت كيتس',
    'America/St_Lucia' => 'أمريكا/سانت لوشيا',
    'America/Miquelon' => 'أمريكا/ميكولون',
    'America/St_Vincent' => 'أمريكا/سانت فنسنت',
    'America/Grand_Turk' => 'أمريكا/غراند تورك',
    'America/Tortola' => 'أمريكا/تورتولا',
    'America/St_Thomas' => 'أمريكا/سانت توماس',
    'America/Argentina/Buenos_Aires' => 'أمريكا/الأرجنتين/بوينس آيرس',
    'America/Argentina/Cordoba' => 'أمريكا/الأرجنتين/قرطبة',
    'America/Argentina/Tucuman' => 'أمريكا/الأرجنتين/توكومان',
    'America/Argentina/La_Rioja' => 'أمريكا/الأرجنتين/لا روخا',
    'America/Argentina/San_Juan' => 'أمريكا/الأرجنتين/سان جويان',
    'America/Argentina/Jujuy' => 'أمريكا/الأرجنتين/خوخوي',
    'America/Argentina/Catamarca' => 'أمريكا/الأرجنتين/كاتاماركا',
    'America/Argentina/Mendoza' => 'أمريكا/الأرجنتين/ميندوزا',
    'America/Argentina/Rio_Gallegos' => 'أمريكا/الأرجنتين/ريو غاليغوس',
    'America/Argentina/Ushuaia' => 'أمريكا/الأرجنتين/أوشوايا',
    'America/Aruba' => 'أمريكا/أروبا',
    'America/La_Paz' => 'أمريكا/لا باز',
    'America/Noronha' => 'أمريكا/نورونها',
    'America/Belem' => 'أمريكا/بيليم',
    'America/Fortaleza' => 'أمريكا/فورتاليزا',
    'America/Recife' => 'أمريكا/ريسيفي',
    'America/Araguaina' => 'أمريكا/أراجواينا',
    'America/Maceio' => 'أمريكا/ماشيو',
    'America/Bahia' => 'أمريكا/باهيا',
    'America/Sao_Paulo' => 'أمريكا/ساو باولو',
    'America/Campo_Grande' => 'أمريكا/كامبو غراندي',
    'America/Cuiaba' => 'أمريكا/كويابا',
    'America/Porto_Velho' => 'أمريكا/بورتو فيلو',
    'America/Boa_Vista' => 'أمريكا/بوا فيستا',
    'America/Manaus' => 'أمريكا/ماناوس',
    'America/Eirunepe' => 'أمريكا/ايرونيبي',
    'America/Rio_Branco' => 'أمريكا/ريو برانكو',
    'America/Santiago' => 'أمريكا/سانتياغو',
    'Pacific/Easter' => 'المحيط الهادئ/أستر',
    'America/Bogota' => 'أمريكا/بوقوتا',
    'America/Curacao' => 'أمريكا/كوراكاو',
    'America/Guayaquil' => 'أمريكا/غواياكيل',
    'Pacific/Galapagos' => 'المحيذ الهادئ/غالاباغوس',
    'Atlantic/Stanley' => 'المحيط الاطلسي/ستانلي',
    'America/Cayenne' => 'أمريكا/كاياني',
    'America/Guyana' => 'أمريكا/غيانا',
    'America/Asuncion' => 'أمريكا/أسونسيون',
    'America/Lima' => 'أمريكا/ليما',
    'Atlantic/South_Georgia' => 'الأطلسي/جورجيا الجنوبية',
    'America/Paramaribo' => 'أمريكا/باراماريبو',
    'America/Port_of_Spain' => 'أمريكا/بورت أوف سبين',
    'America/Montevideo' => 'أمريكا/مونتفيديو',
    'America/Caracas' => 'أمريكا/كاراكاس',
);

$app_list_strings['eapm_list'] = array(
    'Sugar' => 'SuiteCRM',
    'WebEx' => 'WebEx',
    'GoToMeeting' => 'GoToMeeting',
    'IBMSmartCloud' => 'IBM SmartCloud',
    'Google' => 'جوجل',
    'Box' => 'Box.net',
    'Facebook' => 'فيسبوك',
    'Twitter' => 'تويتر',
);
$app_list_strings['eapm_list_import'] = array(
    'Google' => 'جهات الاتصال في حساب جوجل',
);
$app_list_strings['eapm_list_documents'] = array(
    'Google' => 'جوجول درايف',
);
$app_list_strings['token_status'] = array(
    1 => 'طلب',
    2 => 'صلاحية الوصول',
    3 => 'خاطئ',
);

$app_list_strings ['emailTemplates_type_list'] = array(
    '' => '',
    'campaign' => 'حملات',
    'email' => 'بريد إلكتروني',
    'event' => 'الحدث',
);

$app_list_strings ['emailTemplates_type_list_campaigns'] = array(
    '' => '',
    'campaign' => 'حملات',
);

$app_list_strings ['emailTemplates_type_list_no_workflow'] = array(
    '' => '',
    'campaign' => 'حملات',
    'email' => 'بريد إلكتروني',
    'event' => 'الحدث',
    'system' => 'النظام',
);

// knowledge base
$app_list_strings['moduleList']['AOK_KnowledgeBase'] = 'قاعدة معرفية';
$app_list_strings['moduleList']['AOK_Knowledge_Base_Categories'] = 'تبويبات وفصول القاعدة المعرفية';
$app_list_strings['aok_status_list']['Draft'] = 'مُسودة';
$app_list_strings['aok_status_list']['Expired'] = 'منتهي الصلاحية';
$app_list_strings['aok_status_list']['In_Review'] = 'للمراجعة';
//$app_list_strings['aok_status_list']['Published'] = 'Published';
$app_list_strings['aok_status_list']['published_private'] = 'خاص';
$app_list_strings['aok_status_list']['published_public'] = 'العام';

$app_list_strings['moduleList']['FP_events'] = 'الأحداث';
$app_list_strings['moduleList']['FP_Event_Locations'] = 'الأماكن';

//events
$app_list_strings['fp_event_invite_status_dom']['Invited'] = 'مدعو';
$app_list_strings['fp_event_invite_status_dom']['Not Invited'] = 'غير مدعو';
$app_list_strings['fp_event_invite_status_dom']['Attended'] = 'حَضَر';
$app_list_strings['fp_event_invite_status_dom']['Not Attended'] = 'لم يحضر';
$app_list_strings['fp_event_status_dom']['Accepted'] = 'تم القبول';
$app_list_strings['fp_event_status_dom']['Declined'] = 'رفض / ألغى';
$app_list_strings['fp_event_status_dom']['No Response'] = 'لم يتم الإجابة';

$app_strings['LBL_STATUS_EVENT'] = 'حالة الدعوة';
$app_strings['LBL_ACCEPT_STATUS'] = 'حالة القبول';
$app_strings['LBL_LISTVIEW_OPTION_CURRENT'] = 'إختار الصفحة الحالية';
$app_strings['LBL_LISTVIEW_OPTION_ENTIRE'] = 'حدد الكل';
$app_strings['LBL_LISTVIEW_NONE'] = 'إلغاء تحديد الكل';

//aod
$app_list_strings['moduleList']['AOD_IndexEvent'] = 'Index Event';
$app_list_strings['moduleList']['AOD_Index'] = 'الفهرسة';

$app_list_strings['moduleList']['AOP_Case_Events'] = 'أحداث القضية';
$app_list_strings['moduleList']['AOP_Case_Updates'] = 'تحديثات القضية';
$app_strings['LBL_AOP_EMAIL_REPLY_DELIMITER'] = '= = = الرجاء أكتب الرد فوق هذا الخط = = =';


//aop
$app_list_strings['case_state_default_key'] = 'افتح';
$app_list_strings['case_state_dom'] =
    array(
        'Open' => 'مفتوح',
        'Closed' => 'مغلق',
    );
$app_list_strings['case_status_default_key'] = 'Open_New';
$app_list_strings['case_status_dom'] =
    array(
        'Open_New' => 'جديد',
        'Open_Assigned' => 'اُسندت',
        'Closed_Closed' => 'مغلقة',
        'Open_Pending Input' => 'بإنتظار مُعطيات',
        'Closed_Rejected' => 'مرفوض',
        'Closed_Duplicate' => 'مكرر',
    );
$app_list_strings['contact_portal_user_type_dom'] =
    array(
        'Single' => 'مستخدم واحد',
        'Account' => 'حساب المستخدم',
    );
$app_list_strings['dom_email_distribution_for_auto_create'] = array(
    'AOPDefault' => 'افتراضي النظام',
    'singleUser' => 'مستخدم واحد',
    'roundRobin' => 'إرسال للجميع تتابعياً',
    'leastBusy' => 'الأقل إنشغالا',
    'random' => 'عشوائي',
);

//aor
$app_list_strings['moduleList']['AOR_Reports'] = 'التقارير';
$app_list_strings['moduleList']['AOR_Conditions'] = 'شروط التقرير';
$app_list_strings['moduleList']['AOR_Charts'] = 'المخططات البيانية للتقارير';
$app_list_strings['moduleList']['AOR_Fields'] = 'حقول التقرير';
$app_list_strings['moduleList']['AOR_Scheduled_Reports'] = 'التقارير المجدولة';
$app_list_strings['aor_operator_list']['Equal_To'] = 'يساوي';
$app_list_strings['aor_operator_list']['Not_Equal_To'] = 'لا يساوي';
$app_list_strings['aor_operator_list']['Greater_Than'] = 'أكبر من';
$app_list_strings['aor_operator_list']['Less_Than'] = 'أصغر من';
$app_list_strings['aor_operator_list']['Greater_Than_or_Equal_To'] = 'أكبر من أو يساوي';
$app_list_strings['aor_operator_list']['Less_Than_or_Equal_To'] = 'أصغر من أو يساوى';
$app_list_strings['aor_operator_list']['Contains'] = 'تحتوي على';
$app_list_strings['aor_operator_list']['Starts_With'] = 'تبدأ بـ';
$app_list_strings['aor_operator_list']['Ends_With'] = 'ينتهي بـ';
$app_list_strings['aor_format_options'][''] = '';
$app_list_strings['aor_format_options']['Y-m-d'] = 'س-ش-ي';
$app_list_strings['aor_format_options']['m-d-Y'] = 'ش-ي-س';
$app_list_strings['aor_format_options']['d-m-Y'] = 'ي-ش-س';
$app_list_strings['aor_format_options']['Y/m/d'] = 'س/ش/ي';
$app_list_strings['aor_format_options']['m/d/Y'] = 'ش/ي/س';
$app_list_strings['aor_format_options']['d/m/Y'] = 'ي/ش/س';
$app_list_strings['aor_format_options']['Y.m.d'] = 'س.ش.ي';
$app_list_strings['aor_format_options']['m.d.Y'] = 'ش.ي.س';
$app_list_strings['aor_format_options']['d.m.Y'] = 'ي.ش.س';
$app_list_strings['aor_format_options']['Ymd'] = 'Ymd';
$app_list_strings['aor_format_options']['Y-m'] = 'Y-m';
$app_list_strings['aor_format_options']['Y'] = 'Y';
$app_list_strings['aor_condition_operator_list']['And'] = 'و';
$app_list_strings['aor_condition_operator_list']['OR'] = 'أو';
$app_list_strings['aor_condition_type_list']['Value'] = 'القيمة';
$app_list_strings['aor_condition_type_list']['Field'] = 'الحقل';
$app_list_strings['aor_condition_type_list']['Date'] = 'التاريخ';
$app_list_strings['aor_condition_type_list']['Multi'] = 'واحد من';
$app_list_strings['aor_condition_type_list']['Period'] = 'الفترة';
$app_list_strings['aor_condition_type_list']['CurrentUserID'] = 'المستخدم الحالي';
$app_list_strings['aor_date_type_list'][''] = '';
$app_list_strings['aor_date_type_list']['minute'] = 'دقائق';
$app_list_strings['aor_date_type_list']['hour'] = 'ساعات';
$app_list_strings['aor_date_type_list']['day'] = 'أيام';
$app_list_strings['aor_date_type_list']['week'] = 'أسابيع';
$app_list_strings['aor_date_type_list']['month'] = 'شهور';
$app_list_strings['aor_date_type_list']['business_hours'] = 'ساعات العمل';
$app_list_strings['aor_date_options']['now'] = 'الآن';
$app_list_strings['aor_date_options']['field'] = 'هذا الحقل';
$app_list_strings['aor_date_operator']['now'] = '';
$app_list_strings['aor_date_operator']['plus'] = '+';
$app_list_strings['aor_date_operator']['minus'] = '-';
$app_list_strings['aor_sort_operator'][''] = '';
$app_list_strings['aor_sort_operator']['ASC'] = 'تصاعدي';
$app_list_strings['aor_sort_operator']['DESC'] = 'تنازلي';
$app_list_strings['aor_function_list'][''] = '';
$app_list_strings['aor_function_list']['COUNT'] = 'العد';
$app_list_strings['aor_function_list']['MIN'] = 'الحد الأدني';
$app_list_strings['aor_function_list']['MAX'] = 'الحد الأقصى';
$app_list_strings['aor_function_list']['SUM'] = 'المجموع';
$app_list_strings['aor_function_list']['AVG'] = 'متوسط';
$app_list_strings['aor_total_options'][''] = '';
$app_list_strings['aor_total_options']['COUNT'] = 'العد';
$app_list_strings['aor_total_options']['SUM'] = 'المجموع';
$app_list_strings['aor_total_options']['AVG'] = 'متوسط';
$app_list_strings['aor_chart_types']['bar'] = 'منحنى شريطي';
$app_list_strings['aor_chart_types']['line'] = 'منحنى خطي';
$app_list_strings['aor_chart_types']['pie'] = 'منحنى دائري';
$app_list_strings['aor_chart_types']['radar'] = 'منحنى الرادار';
$app_list_strings['aor_chart_types']['stacked_bar'] = 'شريطي مكدس';
$app_list_strings['aor_chart_types']['grouped_bar'] = 'شريط مجمع';
$app_list_strings['aor_scheduled_report_schedule_types']['monthly'] = 'شهرى';
$app_list_strings['aor_scheduled_report_schedule_types']['weekly'] = 'أسبوعي';
$app_list_strings['aor_scheduled_report_schedule_types']['daily'] = 'يومى';
$app_list_strings['aor_scheduled_reports_status_dom']['active'] = 'نشط';
$app_list_strings['aor_scheduled_reports_status_dom']['inactive'] = 'غير نشط';
$app_list_strings['aor_email_type_list']['Email Address'] = 'بريد إلكتروني';
$app_list_strings['aor_email_type_list']['Specify User'] = 'مُستخدم';
$app_list_strings['aor_email_type_list']['Users'] = 'المستخدمين';
$app_list_strings['aor_assign_options']['all'] = 'كل المستخدمين';
$app_list_strings['aor_assign_options']['role'] = 'كل المستخدمين في الدور';
$app_list_strings['aor_assign_options']['security_group'] = 'كل المستخدمين في مجموعة الأمان';
$app_list_strings['date_time_period_list']['today'] = 'اليوم';
$app_list_strings['date_time_period_list']['yesterday'] = 'أمس';
$app_list_strings['date_time_period_list']['this_week'] = 'هذا الأسبوع';
$app_list_strings['date_time_period_list']['last_week'] = 'الأسبوع الماضي';
$app_list_strings['date_time_period_list']['last_month'] = 'آخر شهر';
$app_list_strings['date_time_period_list']['this_month'] = 'الشهر الحالي';
$app_list_strings['date_time_period_list']['this_quarter'] = 'هذا الربع';
$app_list_strings['date_time_period_list']['last_quarter'] = 'الربع الماضي';
$app_list_strings['date_time_period_list']['this_year'] = 'هذا السنة';
$app_list_strings['date_time_period_list']['last_year'] = 'السنة الماضية';
$app_strings['LBL_CRON_ON_THE_MONTHDAY'] = 'في';
$app_strings['LBL_CRON_ON_THE_WEEKDAY'] = 'في';
$app_strings['LBL_CRON_AT'] = 'عند';
$app_strings['LBL_CRON_RAW'] = 'متقدم';
$app_strings['LBL_CRON_MIN'] = 'دقيقة';
$app_strings['LBL_CRON_HOUR'] = 'ساعة';
$app_strings['LBL_CRON_DAY'] = 'يوم';
$app_strings['LBL_CRON_MONTH'] = 'الشهر';
$app_strings['LBL_CRON_DOW'] = 'يوم من أسبوع';
$app_strings['LBL_CRON_DAILY'] = 'يومى';
$app_strings['LBL_CRON_WEEKLY'] = 'أسبوعي';
$app_strings['LBL_CRON_MONTHLY'] = 'شهرى';

//aos
$app_list_strings['moduleList']['AOS_Contracts'] = 'عقود';
$app_list_strings['moduleList']['AOS_Invoices'] = 'الفواتير';
$app_list_strings['moduleList']['AOS_PDF_Templates'] = 'قوالب- بدياف';
$app_list_strings['moduleList']['AOS_Product_Categories'] = 'فئات-المنتجات';
$app_list_strings['moduleList']['AOS_Products'] = 'منتجات';
$app_list_strings['moduleList']['AOS_Products_Quotes'] = 'بنود متسلسلة';
$app_list_strings['moduleList']['AOS_Line_Item_Groups'] = 'مجموعات العناصر المتسلسلة';
$app_list_strings['moduleList']['AOS_Quotes'] = 'عروض الأسعار';
$app_list_strings['aos_quotes_type_dom'][''] = '';
$app_list_strings['aos_quotes_type_dom']['Analyst'] = 'مُحلل';
$app_list_strings['aos_quotes_type_dom']['Competitor'] = 'مُنافس';
$app_list_strings['aos_quotes_type_dom']['Customer'] = 'زبون';
$app_list_strings['aos_quotes_type_dom']['Integrator'] = 'ملتزم بالإندماج';
$app_list_strings['aos_quotes_type_dom']['Investor'] = 'مستثمر';
$app_list_strings['aos_quotes_type_dom']['Partner'] = 'شريك';
$app_list_strings['aos_quotes_type_dom']['Press'] = 'الصحافة';
$app_list_strings['aos_quotes_type_dom']['Prospect'] = 'عميل متوقع';
$app_list_strings['aos_quotes_type_dom']['Reseller'] = 'موزع';
$app_list_strings['aos_quotes_type_dom']['Other'] = 'أخرى';
$app_list_strings['template_ddown_c_list'][''] = '';
$app_list_strings['quote_stage_dom']['Draft'] = 'مُسودة';
$app_list_strings['quote_stage_dom']['Negotiation'] = 'تفاوض';
$app_list_strings['quote_stage_dom']['Delivered'] = 'تم تسليمه';
$app_list_strings['quote_stage_dom']['On Hold'] = 'مؤجل';
$app_list_strings['quote_stage_dom']['Confirmed'] = 'تم تأكيده';
$app_list_strings['quote_stage_dom']['Closed Accepted'] = 'أغلقت وقبلت';
$app_list_strings['quote_stage_dom']['Closed Lost'] = 'فشل البيع';
$app_list_strings['quote_stage_dom']['Closed Dead'] = 'التواصل انتهى من قبل العميل';
$app_list_strings['quote_term_dom']['Net 15'] = 'صافي 15';
$app_list_strings['quote_term_dom']['Net 30'] = 'صافي 30';
$app_list_strings['quote_term_dom'][''] = '';
$app_list_strings['approval_status_dom']['Approved'] = 'تم قبوله';
$app_list_strings['approval_status_dom']['Not Approved'] = 'لم تتم الموافقة';
$app_list_strings['approval_status_dom'][''] = '';
$app_list_strings['vat_list']['0.0'] = '٠٪';
$app_list_strings['vat_list']['5.0'] = '٥٪';
$app_list_strings['vat_list']['7.5'] = '٧,٥٪';
$app_list_strings['vat_list']['17.5'] = '١٧,٥٪';
$app_list_strings['vat_list']['20.0'] = '٢٠٪';
$app_list_strings['discount_list']['Percentage'] = 'نسبة مئوية';
$app_list_strings['discount_list']['Amount'] = 'المبلغ';
$app_list_strings['aos_invoices_type_dom'][''] = '';
$app_list_strings['aos_invoices_type_dom']['Analyst'] = 'مُحلل';
$app_list_strings['aos_invoices_type_dom']['Competitor'] = 'مُنافس';
$app_list_strings['aos_invoices_type_dom']['Customer'] = 'زبون';
$app_list_strings['aos_invoices_type_dom']['Integrator'] = 'ملتزم بالإندماج';
$app_list_strings['aos_invoices_type_dom']['Investor'] = 'مستثمر';
$app_list_strings['aos_invoices_type_dom']['Partner'] = 'شريك';
$app_list_strings['aos_invoices_type_dom']['Press'] = 'الصحافة';
$app_list_strings['aos_invoices_type_dom']['Prospect'] = 'عميل متوقع';
$app_list_strings['aos_invoices_type_dom']['Reseller'] = 'موزع';
$app_list_strings['aos_invoices_type_dom']['Other'] = 'أخرى';
$app_list_strings['invoice_status_dom']['Paid'] = 'مدفوع';
$app_list_strings['invoice_status_dom']['Unpaid'] = 'غير مدفوع';
$app_list_strings['invoice_status_dom']['Cancelled'] = 'ملغي';
$app_list_strings['invoice_status_dom'][''] = '';
$app_list_strings['quote_invoice_status_dom']['Not Invoiced'] = 'غير مفوتر';
$app_list_strings['quote_invoice_status_dom']['Invoiced'] = 'تم فوترته';
$app_list_strings['product_code_dom']['XXXX'] = 'XXXX';
$app_list_strings['product_code_dom']['YYYY'] = 'YYYY';
$app_list_strings['product_category_dom']['Laptops'] = 'كمبيوتر محمول';
$app_list_strings['product_category_dom']['Desktops'] = 'كومبيوتر مكتبي';
$app_list_strings['product_category_dom'][''] = '';
$app_list_strings['product_type_dom']['Good'] = 'جيد';
$app_list_strings['product_type_dom']['Service'] = 'خدمة';
$app_list_strings['product_quote_parent_type_dom']['AOS_Quotes'] = 'عروض الأسعار';
$app_list_strings['product_quote_parent_type_dom']['AOS_Invoices'] = 'الفواتير';
$app_list_strings['product_quote_parent_type_dom']['AOS_Contracts'] = 'عقود';
$app_list_strings['pdf_template_type_dom']['AOS_Quotes'] = 'عروض الأسعار';
$app_list_strings['pdf_template_type_dom']['AOS_Invoices'] = 'الفواتير';
$app_list_strings['pdf_template_type_dom']['AOS_Contracts'] = 'عقود';
$app_list_strings['pdf_template_type_dom']['Accounts'] = 'الحسابات';
$app_list_strings['pdf_template_type_dom']['Contacts'] = 'جهات الإتصال';
$app_list_strings['pdf_template_type_dom']['Leads'] = 'العملاء المحتملون';
$app_list_strings['pdf_template_sample_dom'][''] = '';
$app_list_strings['contract_status_list']['Not Started'] = 'لم يبدأ';
$app_list_strings['contract_status_list']['In Progress'] = 'جاري التنفيذ';
$app_list_strings['contract_status_list']['Signed'] = 'تم توقيعه';
$app_list_strings['contract_type_list']['Type'] = 'النوع';
$app_strings['LBL_PRINT_AS_PDF'] = 'طباعة بصيغة PDF';
$app_strings['LBL_SELECT_TEMPLATE'] = 'الرجاء إختيار القالب';
$app_strings['LBL_NO_TEMPLATE'] = 'خطأ\nالقوالب غير موجودة.\n من فضلك إذهب للنظام الفرعي الخاص بقوالب PDF وأنشئ قالب';

//aow
$app_list_strings['moduleList']['AOW_WorkFlow'] = 'سير العمل';
$app_list_strings['moduleList']['AOW_Conditions'] = 'شروط إجراءات العمل';
$app_list_strings['moduleList']['AOW_Processed'] = 'عملية التدقيق';
$app_list_strings['moduleList']['AOW_Actions'] = 'إجراءات سير العمل';
$app_list_strings['aow_status_list']['Active'] = 'نشط';
$app_list_strings['aow_status_list']['Inactive'] = 'غير نشط';
$app_list_strings['aow_operator_list']['Equal_To'] = 'يساوي';
$app_list_strings['aow_operator_list']['Not_Equal_To'] = 'لا يساوي';
$app_list_strings['aow_operator_list']['Greater_Than'] = 'أكبر من';
$app_list_strings['aow_operator_list']['Less_Than'] = 'أصغر من';
$app_list_strings['aow_operator_list']['Greater_Than_or_Equal_To'] = 'أكبر من أو يساوي';
$app_list_strings['aow_operator_list']['Less_Than_or_Equal_To'] = 'أصغر من أو يساوى';
$app_list_strings['aow_operator_list']['Contains'] = 'تحتوي على';
$app_list_strings['aow_operator_list']['Starts_With'] = 'تبدأ بـ';
$app_list_strings['aow_operator_list']['Ends_With'] = 'ينتهي بـ';
$app_list_strings['aow_operator_list']['is_null'] = 'لا شيء';
$app_list_strings['aow_process_status_list']['Complete'] = 'إكتمل';
$app_list_strings['aow_process_status_list']['Running'] = 'يجري تشغيله';
$app_list_strings['aow_process_status_list']['Pending'] = 'معلق';
$app_list_strings['aow_process_status_list']['Failed'] = 'فشل';
$app_list_strings['aow_condition_operator_list']['And'] = 'E';
$app_list_strings['aow_condition_operator_list']['OR'] = 'أو';
$app_list_strings['aow_condition_type_list']['Value'] = 'القيمة';
$app_list_strings['aow_condition_type_list']['Field'] = 'حقل';
$app_list_strings['aow_condition_type_list']['Any_Change'] = 'أي تغيير';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = 'في مجموعة أمنية';
$app_list_strings['aow_condition_type_list']['Date'] = 'التاريخ';
$app_list_strings['aow_condition_type_list']['Multi'] = 'واحد من';
$app_list_strings['aow_action_type_list']['Value'] = 'القيمة';
$app_list_strings['aow_action_type_list']['Field'] = 'حقل';
$app_list_strings['aow_action_type_list']['Date'] = 'التاريخ';
$app_list_strings['aow_action_type_list']['Round_Robin'] = 'دورة روبن';
$app_list_strings['aow_action_type_list']['Least_Busy'] = 'الأقل إنشغالاً';
$app_list_strings['aow_action_type_list']['Random'] = 'عشوائي';
$app_list_strings['aow_rel_action_type_list']['Value'] = 'القيمة';
$app_list_strings['aow_rel_action_type_list']['Field'] = 'حقل';
$app_list_strings['aow_date_type_list'][''] = '';
$app_list_strings['aow_date_type_list']['minute'] = 'دقائق';
$app_list_strings['aow_date_type_list']['hour'] = 'ساعات';
$app_list_strings['aow_date_type_list']['day'] = 'أيام';
$app_list_strings['aow_date_type_list']['week'] = 'أسابيع';
$app_list_strings['aow_date_type_list']['month'] = 'شهور';
$app_list_strings['aow_date_type_list']['year'] = 'العام';
$app_list_strings['aow_date_type_list']['business_hours'] = 'ساعات العمل';
$app_list_strings['aow_date_options']['now'] = 'الآن';
$app_list_strings['aow_date_options']['today'] = 'اليوم';
$app_list_strings['aow_date_options']['field'] = 'هذا الحقل';
$app_list_strings['aow_date_operator']['now'] = '';
$app_list_strings['aow_date_operator']['plus'] = '+';
$app_list_strings['aow_date_operator']['minus'] = '-';
$app_list_strings['aow_assign_options']['all'] = 'كل المستخدمين';
$app_list_strings['aow_assign_options']['role'] = 'كل المستخدمين في الدور';
$app_list_strings['aow_assign_options']['security_group'] = 'كل المستخدمين في مجموعة الأمان';
$app_list_strings['aow_email_type_list']['Email Address'] = 'بريد إلكتروني';
$app_list_strings['aow_email_type_list']['Record Email'] = 'سجل البريد الإلكتروني';
$app_list_strings['aow_email_type_list']['Related Field'] = 'الحقول المرتبطة';
$app_list_strings['aow_email_type_list']['Specify User'] = 'مُستخدم';
$app_list_strings['aow_email_type_list']['Users'] = 'المستخدمين';
$app_list_strings['aow_email_to_list']['to'] = 'إلى';
$app_list_strings['aow_email_to_list']['cc'] = 'نسخة إلى';
$app_list_strings['aow_email_to_list']['bcc'] = 'نسخة مخفية إلى';
$app_list_strings['aow_run_on_list']['All_Records'] = 'كل السجلات';
$app_list_strings['aow_run_on_list']['New_Records'] = 'سجلات جديدة';
$app_list_strings['aow_run_on_list']['Modified_Records'] = 'سجلات معدلة';
$app_list_strings['aow_run_when_list']['Always'] = 'دائما';
$app_list_strings['aow_run_when_list']['On_Save'] = 'أثناء الحفظ فقط';
$app_list_strings['aow_run_when_list']['In_Scheduler'] = 'فقط في الجدولة';

//gant
$app_list_strings['moduleList']['AM_ProjectTemplates'] = 'المشاريع - قوالب';
$app_list_strings['moduleList']['AM_TaskTemplates'] = 'قوالب مهام المشاريع';
$app_list_strings['relationship_type_list']['FS'] = 'من النهاية إلى البداية';
$app_list_strings['relationship_type_list']['SS'] = 'من البداية للبداية';
$app_list_strings['duration_unit_dom']['Days'] = 'أيام';
$app_list_strings['duration_unit_dom']['Hours'] = 'ساعات';
$app_strings['LBL_GANTT_BUTTON_LABEL'] = 'عرض مخطط جانت (Gantt)';
$app_strings['LBL_DETAIL_BUTTON_LABEL'] = 'عرض التفاصيل';
$app_strings['LBL_CREATE_PROJECT'] = 'إنشاء مشروع';

//gmaps
$app_strings['LBL_MAP'] = 'خريطة';

$app_strings['LBL_JJWG_MAPS_LNG'] = 'خط الطول';
$app_strings['LBL_JJWG_MAPS_LAT'] = 'خط العرض';
$app_strings['LBL_JJWG_MAPS_GEOCODE_STATUS'] = 'وضع الترميز الجغرافي';
$app_strings['LBL_JJWG_MAPS_ADDRESS'] = 'عنوان';

$app_list_strings['moduleList']['jjwg_Maps'] = 'خرائط';
$app_list_strings['moduleList']['jjwg_Markers'] = 'خرائط- علامات';
$app_list_strings['moduleList']['jjwg_Areas'] = 'خرائط - مناطق';
$app_list_strings['moduleList']['jjwg_Address_Cache'] = 'خرائط -عنوان ذاكرة التخزين المؤقت';

$app_list_strings['moduleList']['jjwp_Partners'] = 'شركاء JJWP';

$app_list_strings['map_unit_type_list']['mi'] = 'أميال';
$app_list_strings['map_unit_type_list']['km'] = 'كيلوميترات';

$app_list_strings['map_module_type_list']['Accounts'] = 'حسابات';
$app_list_strings['map_module_type_list']['Contacts'] = 'جهات اتصال';
$app_list_strings['map_module_type_list']['Cases'] = 'القضايا';
$app_list_strings['map_module_type_list']['Leads'] = 'عملاء محتملون';
$app_list_strings['map_module_type_list']['Meetings'] = 'اجتماعات';
$app_list_strings['map_module_type_list']['Opportunities'] = 'فرص بيع';
$app_list_strings['map_module_type_list']['Project'] = 'مشاريع';
$app_list_strings['map_module_type_list']['Prospects'] = 'عملاء متوقعون';

$app_list_strings['map_relate_type_list']['Accounts'] = 'حساب';
$app_list_strings['map_relate_type_list']['Contacts'] = 'جهة اتصال';
$app_list_strings['map_relate_type_list']['Cases'] = 'القضية';
$app_list_strings['map_relate_type_list']['Leads'] = 'عميل محتمل';
$app_list_strings['map_relate_type_list']['Meetings'] = 'اجتماع';
$app_list_strings['map_relate_type_list']['Opportunities'] = 'فرصة';
$app_list_strings['map_relate_type_list']['Project'] = 'مشروع';
$app_list_strings['map_relate_type_list']['Prospects'] = 'عملاء متوقعون';

$app_list_strings['marker_image_list']['accident'] = 'حادثة';
$app_list_strings['marker_image_list']['administration'] = 'إدارة';
$app_list_strings['marker_image_list']['agriculture'] = 'زراعة';
$app_list_strings['marker_image_list']['aircraft_small'] = 'طائرة صغيرة';
$app_list_strings['marker_image_list']['airplane_tourism'] = 'طائرة سياحية';
$app_list_strings['marker_image_list']['airport'] = 'مطار';
$app_list_strings['marker_image_list']['amphitheater'] = 'المدرج';
$app_list_strings['marker_image_list']['apartment'] = 'شقة';
$app_list_strings['marker_image_list']['aquarium'] = 'حوض كائنات بحرية';
$app_list_strings['marker_image_list']['arch'] = 'قوس';
$app_list_strings['marker_image_list']['atm'] = 'أجهزة الصراف الآلي';
$app_list_strings['marker_image_list']['audio'] = 'صوتيات';
$app_list_strings['marker_image_list']['bank'] = 'بنك';
$app_list_strings['marker_image_list']['bank_euro'] = 'بنك باليورو';
$app_list_strings['marker_image_list']['bank_pound'] = 'بنك بالجنبية الاسترليني';
$app_list_strings['marker_image_list']['bar'] = 'حانة';
$app_list_strings['marker_image_list']['beach'] = 'شاطئ';
$app_list_strings['marker_image_list']['beautiful'] = 'جميلة';
$app_list_strings['marker_image_list']['bicycle_parking'] = 'مواقف الدراجات';
$app_list_strings['marker_image_list']['big_city'] = 'مدينة كبيرة';
$app_list_strings['marker_image_list']['bridge'] = 'جسر';
$app_list_strings['marker_image_list']['bridge_modern'] = 'جسر حديث';
$app_list_strings['marker_image_list']['bus'] = 'حافلة';
$app_list_strings['marker_image_list']['cable_car'] = 'تيليفريك';
$app_list_strings['marker_image_list']['car'] = 'سيارة';
$app_list_strings['marker_image_list']['car_rental'] = 'تأجير سيارات';
$app_list_strings['marker_image_list']['carrepair'] = 'صيانة سيارات';
$app_list_strings['marker_image_list']['castle'] = 'القلعة';
$app_list_strings['marker_image_list']['cathedral'] = 'كاتدرائية';
$app_list_strings['marker_image_list']['chapel'] = 'مصلى';
$app_list_strings['marker_image_list']['church'] = 'الكنيسة';
$app_list_strings['marker_image_list']['city_square'] = 'ساحة المدينة';
$app_list_strings['marker_image_list']['cluster'] = 'تجمعات';
$app_list_strings['marker_image_list']['cluster_2'] = 'تجمعات 2';
$app_list_strings['marker_image_list']['cluster_3'] = 'تجمعات 3';
$app_list_strings['marker_image_list']['cluster_4'] = 'تجمعات 4';
$app_list_strings['marker_image_list']['cluster_5'] = 'تجمعات 5';
$app_list_strings['marker_image_list']['coffee'] = 'قهوة';
$app_list_strings['marker_image_list']['community_centre'] = 'مركز المجتمع';
$app_list_strings['marker_image_list']['company'] = 'الشركة';
$app_list_strings['marker_image_list']['conference'] = 'مؤتمر';
$app_list_strings['marker_image_list']['construction'] = 'تشييد وبناء';
$app_list_strings['marker_image_list']['convenience'] = 'وسائل الراحة';
$app_list_strings['marker_image_list']['court'] = 'محكمة';
$app_list_strings['marker_image_list']['cruise'] = 'رحلة بحرية';
$app_list_strings['marker_image_list']['currency_exchange'] = 'صرافة عملة';
$app_list_strings['marker_image_list']['customs'] = 'جمارك';
$app_list_strings['marker_image_list']['cycling'] = 'ركوب الدراجات';
$app_list_strings['marker_image_list']['dam'] = 'السد';
$app_list_strings['marker_image_list']['dentist'] = 'طبيب أسنان';
$app_list_strings['marker_image_list']['deptartment_store'] = 'متجر متنوع';
$app_list_strings['marker_image_list']['disability'] = 'ذوي الاحتياجات الخاصة';
$app_list_strings['marker_image_list']['disabled_parking'] = 'مواقف ذوي الاحتياجات الخاصة';
$app_list_strings['marker_image_list']['doctor'] = 'طبيب';
$app_list_strings['marker_image_list']['dog_leash'] = 'مقود كلب';
$app_list_strings['marker_image_list']['down'] = 'أسفل';
$app_list_strings['marker_image_list']['down_left'] = 'أسفل اليسار';
$app_list_strings['marker_image_list']['down_right'] = 'أسفل اليمين';
$app_list_strings['marker_image_list']['down_then_left'] = 'إلى الأسفل ثم إلى اليسار';
$app_list_strings['marker_image_list']['down_then_right'] = 'إلى الأسفل ثم إلى اليمين';
$app_list_strings['marker_image_list']['drugs'] = 'أدوية';
$app_list_strings['marker_image_list']['elevator'] = 'مصعد';
$app_list_strings['marker_image_list']['embassy'] = 'سفارة';
$app_list_strings['marker_image_list']['expert'] = 'الخبير';
$app_list_strings['marker_image_list']['factory'] = 'مصنع';
$app_list_strings['marker_image_list']['falling_rocks'] = 'صخور متساقطة';
$app_list_strings['marker_image_list']['fast_food'] = 'آكل خفيف';
$app_list_strings['marker_image_list']['festival'] = 'مهرجان';
$app_list_strings['marker_image_list']['fjord'] = 'مضيق';
$app_list_strings['marker_image_list']['forest'] = 'غابة';
$app_list_strings['marker_image_list']['fountain'] = 'نافورة';
$app_list_strings['marker_image_list']['friday'] = 'الجمعة';
$app_list_strings['marker_image_list']['garden'] = 'حديقة';
$app_list_strings['marker_image_list']['gas_station'] = 'محطة وقود';
$app_list_strings['marker_image_list']['geyser'] = 'السخان';
$app_list_strings['marker_image_list']['gifts'] = 'الهدايا';
$app_list_strings['marker_image_list']['gourmet'] = 'الذواق';
$app_list_strings['marker_image_list']['grocery'] = 'البقالة';
$app_list_strings['marker_image_list']['hairsalon'] = 'صالون تصفيف الشعر';
$app_list_strings['marker_image_list']['helicopter'] = 'طائرة هليكوبتر';
$app_list_strings['marker_image_list']['highway'] = 'طريق سريع';
$app_list_strings['marker_image_list']['historical_quarter'] = 'الربع التاريخي';
$app_list_strings['marker_image_list']['home'] = 'المُجلد الرئيسي';
$app_list_strings['marker_image_list']['hospital'] = 'مستشفي';
$app_list_strings['marker_image_list']['hostel'] = 'نزل';
$app_list_strings['marker_image_list']['hotel'] = 'فندق';
$app_list_strings['marker_image_list']['hotel_1_star'] = 'فندق نجمة واحدة';
$app_list_strings['marker_image_list']['hotel_2_stars'] = 'فندق نجمتين';
$app_list_strings['marker_image_list']['hotel_3_stars'] = 'فندق 3 نجوم';
$app_list_strings['marker_image_list']['hotel_4_stars'] = 'فندق 4 نجوم';
$app_list_strings['marker_image_list']['hotel_5_stars'] = 'فندق 5 نجوم';
$app_list_strings['marker_image_list']['info'] = 'معلومات';
$app_list_strings['marker_image_list']['justice'] = 'العدالة';
$app_list_strings['marker_image_list']['lake'] = 'بحيرة';
$app_list_strings['marker_image_list']['laundromat'] = 'غسيل الملابس';
$app_list_strings['marker_image_list']['left'] = 'اليسار';
$app_list_strings['marker_image_list']['left_then_down'] = 'اليسار ثم إلى الأسفل';
$app_list_strings['marker_image_list']['left_then_up'] = 'اليسار ثم إلى الأعلى';
$app_list_strings['marker_image_list']['library'] = 'مكتبة';
$app_list_strings['marker_image_list']['lighthouse'] = 'المنارة';
$app_list_strings['marker_image_list']['liquor'] = 'المشروبات الكحولية';
$app_list_strings['marker_image_list']['lock'] = 'قفل';
$app_list_strings['marker_image_list']['main_road'] = 'الطريق الرئيسي';
$app_list_strings['marker_image_list']['massage'] = 'التدليك';
$app_list_strings['marker_image_list']['mobile_phone_tower'] = 'برج الهاتف المحمول';
$app_list_strings['marker_image_list']['modern_tower'] = 'برج حديث';
$app_list_strings['marker_image_list']['monastery'] = 'دير';
$app_list_strings['marker_image_list']['monday'] = 'الإثنين';
$app_list_strings['marker_image_list']['monument'] = 'نصب تذكاري';
$app_list_strings['marker_image_list']['mosque'] = 'مسجد';
$app_list_strings['marker_image_list']['motorcycle'] = 'دراجة نارية';
$app_list_strings['marker_image_list']['museum'] = 'متحف';
$app_list_strings['marker_image_list']['music_live'] = 'موسيقى حيه';
$app_list_strings['marker_image_list']['oil_pump_jack'] = 'مضخة نفط';
$app_list_strings['marker_image_list']['pagoda'] = 'معبد';
$app_list_strings['marker_image_list']['palace'] = 'قصر';
$app_list_strings['marker_image_list']['panoramic'] = 'بانورامية';
$app_list_strings['marker_image_list']['park'] = 'باحة';
$app_list_strings['marker_image_list']['park_and_ride'] = 'باحة للتحميل والتنزيل';
$app_list_strings['marker_image_list']['parking'] = 'مواقف';
$app_list_strings['marker_image_list']['photo'] = 'صورة';
$app_list_strings['marker_image_list']['picnic'] = 'نزهة';
$app_list_strings['marker_image_list']['places_unvisited'] = 'أماكن لم يتم زيارتها';
$app_list_strings['marker_image_list']['places_visited'] = 'أماكن تمت زيارتها';
$app_list_strings['marker_image_list']['playground'] = 'ملعب للأطفال';
$app_list_strings['marker_image_list']['police'] = 'الشرطة';
$app_list_strings['marker_image_list']['port'] = 'منفذ';
$app_list_strings['marker_image_list']['postal'] = 'مركز بريدي';
$app_list_strings['marker_image_list']['power_line_pole'] = 'سارية تيار الطاقة';
$app_list_strings['marker_image_list']['power_plant'] = 'محطة للطاقة';
$app_list_strings['marker_image_list']['power_substation'] = 'محطة الطاقة';
$app_list_strings['marker_image_list']['public_art'] = 'الفن العام';
$app_list_strings['marker_image_list']['rain'] = 'مطر';
$app_list_strings['marker_image_list']['real_estate'] = 'العقارات';
$app_list_strings['marker_image_list']['regroup'] = 'إعادة تجميع';
$app_list_strings['marker_image_list']['resort'] = 'منتجع';
$app_list_strings['marker_image_list']['restaurant'] = 'مطعم';
$app_list_strings['marker_image_list']['restaurant_african'] = 'مطعم أفريقي';
$app_list_strings['marker_image_list']['restaurant_barbecue'] = 'مطعم الشواء';
$app_list_strings['marker_image_list']['restaurant_buffet'] = 'بوفيه مطعم';
$app_list_strings['marker_image_list']['restaurant_chinese'] = 'مطعم صيني';
$app_list_strings['marker_image_list']['restaurant_fish'] = 'مطعم أسماك';
$app_list_strings['marker_image_list']['restaurant_fish_chips'] = 'مطعم سمك وبطاطس';
$app_list_strings['marker_image_list']['restaurant_gourmet'] = 'مطعم مُشهيات';
$app_list_strings['marker_image_list']['restaurant_greek'] = 'مطعم يوناني';
$app_list_strings['marker_image_list']['restaurant_indian'] = 'مطعم هندي';
$app_list_strings['marker_image_list']['restaurant_italian'] = 'مطعم إيطالي';
$app_list_strings['marker_image_list']['restaurant_japanese'] = 'مطعم ياباني';
$app_list_strings['marker_image_list']['restaurant_kebab'] = 'مطعم كباب';
$app_list_strings['marker_image_list']['restaurant_korean'] = 'مطعم كوري';
$app_list_strings['marker_image_list']['restaurant_mediterranean'] = 'مطعم مأكولات البحر الأبيض المتوسط';
$app_list_strings['marker_image_list']['restaurant_mexican'] = 'المطعم المكسيكي';
$app_list_strings['marker_image_list']['restaurant_romantic'] = 'مطعم رومانسي';
$app_list_strings['marker_image_list']['restaurant_thai'] = 'مطعم التايلندي';
$app_list_strings['marker_image_list']['restaurant_turkish'] = 'مطعم تركي';
$app_list_strings['marker_image_list']['right'] = 'يمين';
$app_list_strings['marker_image_list']['right_then_down'] = 'يمين ثم للأسفل';
$app_list_strings['marker_image_list']['right_then_up'] = 'يمين ثم للأعلى';
$app_list_strings['marker_image_list']['saturday'] = 'السبت';
$app_list_strings['marker_image_list']['school'] = 'مدرسة';
$app_list_strings['marker_image_list']['shopping_mall'] = 'مركز تسوق';
$app_list_strings['marker_image_list']['shore'] = 'ساحل';
$app_list_strings['marker_image_list']['sight'] = 'البصر';
$app_list_strings['marker_image_list']['small_city'] = 'مدينة صغيرة';
$app_list_strings['marker_image_list']['snow'] = 'ثلج';
$app_list_strings['marker_image_list']['spaceport'] = 'قاعدة أطلاق المركبات الفضائية';
$app_list_strings['marker_image_list']['speed_100'] = 'سرعة 100';
$app_list_strings['marker_image_list']['speed_110'] = 'سرعة 110';
$app_list_strings['marker_image_list']['speed_120'] = 'سرعة 120';
$app_list_strings['marker_image_list']['speed_130'] = 'سرعة 130';
$app_list_strings['marker_image_list']['speed_20'] = 'سرعة 20';
$app_list_strings['marker_image_list']['speed_30'] = 'سرعة 30';
$app_list_strings['marker_image_list']['speed_40'] = 'سرعة 40';
$app_list_strings['marker_image_list']['speed_50'] = 'سرعة 50';
$app_list_strings['marker_image_list']['speed_60'] = 'سرعة 60';
$app_list_strings['marker_image_list']['speed_70'] = 'سرعة 70';
$app_list_strings['marker_image_list']['speed_80'] = 'سرعة 80';
$app_list_strings['marker_image_list']['speed_90'] = 'سرعة 90';
$app_list_strings['marker_image_list']['speed_hump'] = 'سرعة رابية';
$app_list_strings['marker_image_list']['stadium'] = 'ملعب';
$app_list_strings['marker_image_list']['statue'] = 'وضع';
$app_list_strings['marker_image_list']['steam_train'] = 'قطار البخار';
$app_list_strings['marker_image_list']['stop'] = 'توقف';
$app_list_strings['marker_image_list']['stoplight'] = 'ضوء التوقف';
$app_list_strings['marker_image_list']['subway'] = 'مترو الأنفاق';
$app_list_strings['marker_image_list']['sun'] = 'الأحد';
$app_list_strings['marker_image_list']['sunday'] = 'الأحد';
$app_list_strings['marker_image_list']['supermarket'] = 'سوبر ماركت';
$app_list_strings['marker_image_list']['synagogue'] = 'كنيس يهودي';
$app_list_strings['marker_image_list']['tapas'] = 'المقبلات';
$app_list_strings['marker_image_list']['taxi'] = 'سيارة أجرة';
$app_list_strings['marker_image_list']['taxiway'] = 'طريق سيارات الأجرة';
$app_list_strings['marker_image_list']['teahouse'] = 'مقهى';
$app_list_strings['marker_image_list']['telephone'] = 'الهاتف';
$app_list_strings['marker_image_list']['temple_hindu'] = 'معبد هندوسي';
$app_list_strings['marker_image_list']['terrace'] = 'شرفة';
$app_list_strings['marker_image_list']['text'] = 'نص';
$app_list_strings['marker_image_list']['theater'] = 'مسرح';
$app_list_strings['marker_image_list']['theme_park'] = 'منتزه';
$app_list_strings['marker_image_list']['thursday'] = 'الخميس';
$app_list_strings['marker_image_list']['toilets'] = 'دورات المياه';
$app_list_strings['marker_image_list']['toll_station'] = 'محطة الرسوم';
$app_list_strings['marker_image_list']['tower'] = 'برج';
$app_list_strings['marker_image_list']['traffic_enforcement_camera'] = 'كاميرا حركة المرور';
$app_list_strings['marker_image_list']['train'] = 'قطار';
$app_list_strings['marker_image_list']['tram'] = 'الترام';
$app_list_strings['marker_image_list']['truck'] = 'شاحنة';
$app_list_strings['marker_image_list']['tuesday'] = 'الثلاثاء';
$app_list_strings['marker_image_list']['tunnel'] = 'النفق';
$app_list_strings['marker_image_list']['turn_left'] = 'انعطف لليسار';
$app_list_strings['marker_image_list']['turn_right'] = 'انعطف لليمين';
$app_list_strings['marker_image_list']['university'] = 'جامعة';
$app_list_strings['marker_image_list']['up'] = 'أعلى';
$app_list_strings['marker_image_list']['up_left'] = 'أعلى اليسار';
$app_list_strings['marker_image_list']['up_right'] = 'أعلى اليمين';
$app_list_strings['marker_image_list']['up_then_left'] = 'إلى الأعلى ثم إلى اليسار';
$app_list_strings['marker_image_list']['up_then_right'] = 'فوق ثم يمين';
$app_list_strings['marker_image_list']['vespa'] = 'دراجة كهربائية';
$app_list_strings['marker_image_list']['video'] = 'فيديو';
$app_list_strings['marker_image_list']['villa'] = 'فيلا';
$app_list_strings['marker_image_list']['water'] = 'ماء';
$app_list_strings['marker_image_list']['waterfall'] = 'شلال';
$app_list_strings['marker_image_list']['watermill'] = 'طاحونة مائية';
$app_list_strings['marker_image_list']['waterpark'] = 'حديقة مائية';
$app_list_strings['marker_image_list']['watertower'] = 'برج ماء';
$app_list_strings['marker_image_list']['wednesday'] = 'الأربعاء';
$app_list_strings['marker_image_list']['wifi'] = 'واي فاي';
$app_list_strings['marker_image_list']['wind_turbine'] = 'توربينات هوائية';
$app_list_strings['marker_image_list']['windmill'] = 'طاحونة هوائية';
$app_list_strings['marker_image_list']['winery'] = 'مصنع خمر';
$app_list_strings['marker_image_list']['work_office'] = 'مكتب العمل';
$app_list_strings['marker_image_list']['world_heritage_site'] = 'موقع التراث العالمي';
$app_list_strings['marker_image_list']['zoo'] = 'حديقة الحيوان';

//Reschedule
$app_list_strings['call_reschedule_dom'][''] = '';
$app_list_strings['call_reschedule_dom']['Out of Office'] = 'خارج المكتب';
$app_list_strings['call_reschedule_dom']['In a Meeting'] = 'في اجتماع';

$app_strings['LBL_RESCHEDULE_LABEL'] = 'إعادة الجدولة';
$app_strings['LBL_RESCHEDULE_TITLE'] = 'الرجاء إدخال معلومات إعادة جدولة';
$app_strings['LBL_RESCHEDULE_DATE'] = 'التاريخ:';
$app_strings['LBL_RESCHEDULE_REASON'] = 'السبب:';
$app_strings['LBL_RESCHEDULE_ERROR1'] = 'الرجاء تحديد تاريخ صحيح';
$app_strings['LBL_RESCHEDULE_ERROR2'] = 'الرجاء تحديد سبب';

$app_strings['LBL_RESCHEDULE_PANEL'] = 'إعادة جدولة';
$app_strings['LBL_RESCHEDULE_HISTORY'] = 'سجل محاولات الاتصال';
$app_strings['LBL_RESCHEDULE_COUNT'] = 'محاولات الاتصال';

//SecurityGroups
$app_list_strings['moduleList']['SecurityGroups'] = 'إدارة مجموعة الأمان';
$app_strings['LBL_SECURITYGROUP'] = 'مجموعة أمنية';
$app_strings['LBL_ROLE'] = 'الدور الوظيفي';

$app_list_strings['moduleList']['OutboundEmailAccounts'] = 'حسابات البريد الإلكتروني الصادر';
$app_list_strings['moduleList']['ExternalOAuthConnection'] = 'اتصال OAuth خارجي';
$app_list_strings['moduleList']['ExternalOAuthProvider'] = 'موفر OAuth خارجي';

//social
$app_strings['FACEBOOK_USER_C'] = 'فيسبوك';
$app_strings['TWITTER_USER_C'] = 'تويتر';
$app_strings['LBL_PANEL_SOCIAL_FEED'] = 'تفاصيل مزود شبكة إجتماعية';

$app_strings['LBL_SUBPANEL_FILTER_LABEL'] = 'تنقيح وفلترة البيانات';

$app_strings['LBL_COLLECTION_TYPE'] = 'نوع';

$app_strings['LBL_ADD_TAB'] = 'إضافة تبويب';
$app_strings['LBL_EDIT_TAB'] = 'تحرير علامات التبويب';
$app_strings['LBL_SUITE_DASHBOARD'] = 'لوحة بيانات النظام';
$app_strings['LBL_ENTER_DASHBOARD_NAME'] = 'أدخل اسم صفحة المؤشرات والمعلومات:';
$app_strings['LBL_NUMBER_OF_COLUMNS'] = 'عدد الأعمدة:';
$app_strings['LBL_DELETE_DASHBOARD1'] = 'هل أنت متأكد من أنك تريد حذف الـ';
$app_strings['LBL_DELETE_DASHBOARD2'] = 'صفحة المؤشرات والمعلومات؟';
$app_strings['LBL_ADD_DASHBOARD_PAGE'] = 'إضافة صفحة المؤشرات والمعلومات';
$app_strings['LBL_DELETE_DASHBOARD_PAGE'] = 'إزالة الصفحة الحالية للمؤشرات والمعلومات';
$app_strings['LBL_RENAME_DASHBOARD_PAGE'] = 'إعادة تسمية صفحة المؤشرات والمعلومات';
$app_strings['LBL_SUITE_DASHBOARD_ACTIONS'] = 'إجراءات';

$app_list_strings['collection_temp_list'] = array(
    'Tasks' => 'مهام',
    'Meetings' => 'اجتماعات',
    'Calls' => 'مكالمات',
    'Notes' => 'ملاحظات',
    'Emails' => 'رسائل بريد إلكتروني'
);

$app_list_strings['moduleList']['TemplateEditor'] = 'مُحرر جزء القالب';
$app_strings['LBL_CONFIRM_CANCEL_INLINE_EDITING'] = "لقد نقرت بعيداً عن الحقل الذي تقوم بتحريره دون حفظه. انقر على موافق إذا أردت عدم حفظ التغييرات التي قمت بها، أو على إلغاء إذا رغبت في الاستمرار بدون حفظ تعديلاتك";
$app_strings['LBL_LOADING_ERROR_INLINE_EDITING'] = "حدث خطأ أثناء تحميل الحقل. قد تكون انتهت مهلة جلستك. الرجاء تسجيل الدخول مرة أخرى لتصليح ذالك";

//SuiteSpots
$app_list_strings['spots_areas'] = array(
    'getSalesSpotsData' => 'المبيعات',
    'getAccountsSpotsData' => 'الحسابات',
    'getLeadsSpotsData' => 'العملاء المحتملون',
    'getServiceSpotsData' => 'الخدمة',
    'getMarketingSpotsData' => 'التسويق',
    'getMarketingActivitySpotsData' => 'Marketing Activity',
    'getActivitiesSpotsData' => 'الأنشطة',
    'getQuotesSpotsData' => 'عروض الأسعار'
);

$app_list_strings['moduleList']['Spots'] = 'Spots';

$app_list_strings['moduleList']['AOBH_BusinessHours'] = 'ساعات العمل';
$app_list_strings['business_hours_list']['0'] = '12:00 ص';
$app_list_strings['business_hours_list']['1'] = '1:00 ص';
$app_list_strings['business_hours_list']['2'] = '2:00 ص';
$app_list_strings['business_hours_list']['3'] = '3:00 ص';
$app_list_strings['business_hours_list']['4'] = '4:00 ص';
$app_list_strings['business_hours_list']['5'] = '05:00 ص';
$app_list_strings['business_hours_list']['6'] = '06:00 ص';
$app_list_strings['business_hours_list']['7'] = '07:00 ص';
$app_list_strings['business_hours_list']['8'] = '08:00 ص';
$app_list_strings['business_hours_list']['9'] = '09:00 ص';
$app_list_strings['business_hours_list']['10'] = '10:00 ص';
$app_list_strings['business_hours_list']['11'] = '11:00 ص';
$app_list_strings['business_hours_list']['12'] = '12:00 ص';
$app_list_strings['business_hours_list']['13'] = '01:00 م';
$app_list_strings['business_hours_list']['14'] = '02:00 م';
$app_list_strings['business_hours_list']['15'] = '03:00 م';
$app_list_strings['business_hours_list']['16'] = '04:00 م';
$app_list_strings['business_hours_list']['17'] = '05:00 م';
$app_list_strings['business_hours_list']['18'] = '06:00 م';
$app_list_strings['business_hours_list']['19'] = '07:00 م';
$app_list_strings['business_hours_list']['20'] = '08:00 م';
$app_list_strings['business_hours_list']['21'] = '09:00 م';
$app_list_strings['business_hours_list']['22'] = '10:00 م';
$app_list_strings['business_hours_list']['23'] = '11:00 م';
$app_list_strings['day_list']['Monday'] = 'الإثنين';
$app_list_strings['day_list']['Tuesday'] = 'الثلاثاء';
$app_list_strings['day_list']['Wednesday'] = 'الأربعاء';
$app_list_strings['day_list']['Thursday'] = 'الخميس';
$app_list_strings['day_list']['Friday'] = 'الجمعة';
$app_list_strings['day_list']['Saturday'] = 'السبت';
$app_list_strings['day_list']['Sunday'] = 'الأحد';
$app_list_strings['pdf_page_size_dom']['A4'] = 'A4';
$app_list_strings['pdf_page_size_dom']['Letter'] = 'Letter';
$app_list_strings['pdf_page_size_dom']['Legal'] = 'Legal';
$app_list_strings['pdf_orientation_dom']['Portrait'] = 'بالطول';
$app_list_strings['pdf_orientation_dom']['Landscape'] = 'بالعرض';


$app_list_strings['moduleList']['SurveyResponses'] = 'الردود على الاستطلاع';
$app_list_strings['moduleList']['Surveys'] = 'الاستطلاعات';
$app_list_strings['moduleList']['SurveyQuestionResponses'] = 'ردود أسئلة الاستطلاع';
$app_list_strings['moduleList']['SurveyQuestions'] = 'أسئلة الاستطلاع';
$app_list_strings['moduleList']['SurveyQuestionOptions'] = 'خيارات أسئلة الاستطلاع';
$app_list_strings['survey_status_list']['Draft'] = 'مسودة';
$app_list_strings['survey_status_list']['Public'] = 'العام';
$app_list_strings['survey_status_list']['Closed'] = 'مغلق';
$app_list_strings['surveys_question_type']['Text'] = 'نص';
$app_list_strings['surveys_question_type']['Textbox'] = 'مربع النص';
$app_list_strings['surveys_question_type']['Checkbox'] = 'خانة الاختيار';
$app_list_strings['surveys_question_type']['Radio'] = 'راديو';
$app_list_strings['surveys_question_type']['Dropdown'] = 'القائمة المنسدلة';
$app_list_strings['surveys_question_type']['Multiselect'] = 'اختيار متعدد';
$app_list_strings['surveys_question_type']['Matrix'] = 'مصفوفة';
$app_list_strings['surveys_question_type']['DateTime'] = 'التاريخ و الوقت';
$app_list_strings['surveys_question_type']['Date'] = 'التاريخ';
$app_list_strings['surveys_question_type']['Scale'] = 'مقياس';
$app_list_strings['surveys_question_type']['Rating'] = 'تصنيف';
$app_list_strings['surveys_matrix_options'][0] = 'راضي';
$app_list_strings['surveys_matrix_options'][1] = 'ليس راضيا أو غير راضي';
$app_list_strings['surveys_matrix_options'][2] = 'غير راضي';

$app_list_strings['moduleList']['CalendarAccount'] = 'Calendar Accounts';

$app_strings['LBL_OPT_IN_PENDING_EMAIL_NOT_SENT'] = 'قيد انتظار إرسال تأكيد اشتراك البريد الالكتروني، لم يتم إرسال تأكيد اشتراك البريد الالكتروني';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_FAILED'] = 'فشل إرسال تأكيد اشتراك البريد الإلكتروني';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_SENT'] = 'قيد انتظار إرسال تأكيد اشتراك البريد الإلكتروني، تم إرسال تأكيد اشتراك البريد الالكتروني';
$app_strings['LBL_OPT_IN'] = 'مفعل';
$app_strings['LBL_OPT_IN_CONFIRMED'] = 'تأكيد التفعيل';
$app_strings['LBL_OPT_IN_OPT_OUT'] = 'استبعدت';
$app_strings['LBL_OPT_IN_INVALID'] = 'غير صالح';

/** @see SugarEmailAddress */
$app_list_strings['email_settings_opt_in_dom'] = array(
    'not-opt-in' => 'غير مشترك',
    'opt-in' => 'مشترك',
    'confirmed-opt-in' => 'اشتراك مؤكد'
);

$app_list_strings['email_confirmed_opt_in_dom'] = array(
    'not-opt-in' => 'غير مشترك',
    'opt-in' => 'مشترك',
    'confirmed-opt-in' => 'اشتراك مؤكد'
);

$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL'] = 'تم إضافة تأكيد البريد الإلكتروني إلى قائمة الانتظار في عناوين البريد الإلكتروني %s. ';
$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL_NOT_OPT_IN'] = 'تعذر إرسال الرسالة إلى عناوين البريد الإلكتروني %s، لأنه لم يتم تسجيل اشتراكهم. ';
$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL_MISSING_EMAIL_ADDRESS_ID'] = 'البريد الإلكتروني %s ليس لديه معرف صالح. ';

$app_strings['ERR_TWO_FACTOR_FAILED'] = 'فشل التوثيق الثنائي';
$app_strings['ERR_TWO_FACTOR_CODE_SENT'] = 'تم إرسال كود التوثيق الثنائي.';
$app_strings['ERR_TWO_FACTOR_CODE_FAILED'] = 'فشل إرسال كود مصادقة عاملين.';
$app_strings['LBL_THANKS_FOR_SUBMITTING'] = 'شكراً لتقديم اهتمامك.';

$app_strings['ERR_IP_CHANGE'] = 'انتهت جلسة العمل الخاصة بك بسبب تغيير كبير في عنوان IP الخاص بك';
$app_strings['ERR_RETURN'] = 'الرجوع الى الصفحة الرئيسية';


$app_list_strings['oauth2_grant_type_dom'] = array(
    'password' => 'منح كلمة المرور',
    'client_credentials' => 'بيانات اعتماد العميل',
    'implicit' => 'ضمني',
    'authorization_code' => 'كود التوثيق'
);

$app_list_strings['oauth2_duration_units'] = [
    'minute' => 'دقائق',
    'hour' => 'ساعات',
    'day' => 'أيام',
    'week' => 'أسابيع',
    'month' => 'أشهر',
];

$app_list_strings['search_controllers'] = [
    'Search' => 'البحث (جديد)',
    'UnifiedSearch' => 'البحث العالمي الموحد (موروث)'
];

// Calendar Account Types dropdown
$app_list_strings['calendar_account_types'] = [
    'personal' => 'شخصي',
    'shared' => 'المشتركة',
    'group' => 'مجموعة',
];

// Calendar Connection Status dropdown
$app_list_strings['calendar_connection_status_list'] = [
    'never_tested' => 'Never Tested',
    'success' => 'متصل',
    'failed' => 'فشل',
];

// Calendar Sync Attempt Status dropdown
$app_list_strings['sync_attempt_status_list'] = [
    '' => '',
    'in_progress' => 'جاري التنفيذ',
    'success' => 'ناجح',
    'warning' => 'تحذير',
    'error' => 'خطأ',
];

$app_list_strings['sync_attempt_message_list'] = [
    '' => '',
    'sync_complete' => 'All meetings synced.',
    'up_to_date' => 'No new meetings to sync.',
    'meetings_failed' => 'Some meetings failed to sync. Check logs.',
    'sync_partial' => 'Some meetings synced. More pending due to limits.',
    'sync_failed' => 'No meetings synced. Check logs.',
];

$app_strings['LBL_DEFAULT_API_ERROR_TITLE'] = 'خطأ في JSON API';
$app_strings['LBL_DEFAULT_API_ERROR_DETAIL'] = 'حدث خطأ في API JSON.';
$app_strings['LBL_API_EXCEPTION_DETAIL'] = 'إصدار Api: 8';
$app_strings['LBL_BAD_REQUEST_EXCEPTION_DETAIL'] = 'الرجاء التأكد من ملء الحقول المطلوبة';
$app_strings['LBL_EMPTY_BODY_EXCEPTION_DETAIL'] = 'تتوقع Json API أن تكون مجموعة الطلب JSON';
$app_strings['LBL_INVALID_JSON_API_REQUEST_EXCEPTION_DETAIL'] = 'غير قادر على التحقق من صحة طلب حمولة Json Api';
$app_strings['LBL_INVALID_JSON_API_RESPONSE_EXCEPTION_DETAIL'] = 'غير قادر على التحقق من صحة استجابة حمولة Json Api';
$app_strings['LBL_MODULE_NOT_FOUND_EXCEPTION_DETAIL'] = 'Json API لا يمكن العثور على مورد';
$app_strings['LBL_NOT_ACCEPTABLE_EXCEPTION_DETAIL'] = 'يتوقع Json API أن يكون رأس "القبول" تطبيق/vnd.api+json';
$app_strings['LBL_UNSUPPORTED_MEDIA_TYPE_EXCEPTION_DETAIL'] = 'يتوقع Json API أن يكون رأس "المحتوى" تطبيق/vnd.api+json';

$app_strings['MSG_BROWSER_NOTIFICATIONS_ENABLED'] = 'تم الآن تمكين إشعارات سطح المكتب لهذا المتصفح على الويب.';
$app_strings['MSG_BROWSER_NOTIFICATIONS_DISABLED'] = 'تنبيهات سطح المكتب معطلة لمتصفح الويب هذا. استخدم تفضيلات المتصفح الخاص بك لتمكينهم مرة أخرى.';
$app_strings['MSG_BROWSER_NOTIFICATIONS_UNSUPPORTED'] = 'هذا المتصفح لا يدعم تنبيهات سطح المكتب.';

$app_strings['LBL_THERE_WAS_AN_ERR'] = 'كان هناك خطأ: ';
$app_strings['LBL_CLICK_HERE'] = 'اضغط هنا';
$app_strings['LBL_TO_CONTINUE'] = ' للمتابعة.';

$app_strings['IMAP_HANDLER_ERROR'] = 'خطأ: {error}; المفتاح: "{key}".';
$app_strings['IMAP_HANDLER_SUCCESS'] = 'موافق: تم تغيير إعدادات الاختبار إلى "{key}"';
$app_strings['IMAP_HANDLER_ERROR_INVALID_REQUEST'] = 'طلب غير صالح، استخدم "{var}"قيمة".';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN_BY_KEY'] = 'حدث خطأ غير معروف، المفتاح{key}" لم يتم حفظه.';
$app_strings['IMAP_HANDLER_ERROR_NO_TEST_SET'] = 'إعدادات الاختبار غير موجودة.';
$app_strings['IMAP_HANDLER_ERROR_NO_KEY'] = 'المفتاح غير موجود.';
$app_strings['IMAP_HANDLER_ERROR_KEY_SAVE'] = 'خطأ في حفظ المفتاح.';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN'] = '‏‏خطأ غير معروف';
$app_strings['LBL_SEARCH_TITLE']                   = 'بحث';
$app_strings['LBL_SEARCH_TEXT_FIELD_TITLE_ATTR']   = 'إدخال معايير البحث';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_TITLE_ATTR'] = 'بحث';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_VALUE']      = 'بحث';
$app_strings['LBL_SEARCH_QUERY']                   = 'استعلام البحث: ';
$app_strings['LBL_SEARCH_RESULTS_PER_PAGE']        = 'Results per module: ';
$app_strings['LBL_SEARCH_ENGINE']                  = 'المحركات: ';
$app_strings['LBL_SEARCH_TOTAL'] = 'مجموع النتائج: ';
$app_strings['LBL_SEARCH_PREV'] = 'السابق';
$app_strings['LBL_SEARCH_NEXT'] = 'التالي';
$app_strings['LBL_SEARCH_PAGE'] = 'الصفحة ';
$app_strings['LBL_SEARCH_OF'] = ' من ';
$app_strings['LBL_USE_ADVANCED_SEARCH'] = 'استخدم البحث المتقدم';
$app_strings['LBL_USE_BASIC_SEARCH'] = 'استخدم البحث البسيط';

// PDF Engines
$app_strings['LBL_LEGACY_MPDF_ENGINE'] = 'محرك MPDF تقليدي';
$app_strings['LBL_TCPDF_ENGINE'] = 'محرك TCPDF';


$app_strings['ERR_INVALID_FILE_NAME'] = 'اسم الملف غير صالح:';
$app_strings['LBL_LOGGER_VALID_FILENAME_CHARACTERS'] = 'لا يقبل إلا الحروف والأرقام، بالإضافة إلى \'.\' , \'-\' و \'_\'';
$app_strings['LBL_LOGGER_INVALID_FILENAME'] = 'اسم ملف الاستيراد غير صالح';

$app_strings['LBL_PASSWORD_SET_NEW_VALUE_TO_RESET'] = 'تعيين كلمة المرور. أدخل كلمة المرور الجديدة.';
$app_strings['LBL_VALUE_SET_PLACEHOLDER'] = 'تعيين قيمة جديدة. ادخل قيمة جديدة بديلاً عن القيمة الحالية.';

$app_strings['ERR_IMAP_OAUTH_CONNECTION_ERROR'] = 'لا يوجد إذن للإتصال بإستخدام مصادقة OAuth لخادم البريد الإلكتروني. للإتصال: ';
$app_strings['WARN_OAUTH_TOKEN_SESSION_EXPIRED'] = 'انتهت جلسة الإتصال الخاصة بك, يرجى الدخول مرة أخرى لإعادة الإتصال: ';

$app_strings['ERR_OAUTH_CONNECTION_ERROR'] = 'Not able to connect using OAuth login. For connection: ';

$app_strings['LBL_KEY'] = 'المفتاح';
$app_strings['LBL_VALUE'] = 'القيمة';
$app_strings['LBL_OPTIONAL'] = 'اختياري';
$app_strings['LBL_OPTIONAL_CONNECTION_STRING'] = 'اختياري. قم بتعيين معرف اتصال محدد لإستخدامة';
$app_strings['LBL_OUTBOUND_ACCOUNT'] = 'الحساب الصادر';
$app_strings['LBL_INBOUND_ACCOUNT'] = 'الحساب الوارد';
$app_strings['LBL_SYSTEM_ACCOUNT'] = 'حساب النظام';
$app_strings['LBL_FROM_SYSTEM'] = 'الإرسال من النظام';
$app_strings['LBL_SIGNATURE'] = 'التوقيع';

$app_list_strings['email_import_timeframe_start_dom'] = [
    '-1 year' => '1 Year',
    '-6 months' => '6 Months',
    '-3 months' => '3 Months',
    '-30 days' => '30 Days',
    '-15 days' => '15 Days',
    '-5 days' => '5 Days',
    '-1 days' => '1 Day',
    '0 days' => '0 Days',
];
