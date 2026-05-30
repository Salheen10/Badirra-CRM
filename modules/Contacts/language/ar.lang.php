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
    'ERR_DELETE_RECORD' => 'حدد رقم السجل لحذف جهة الاتصال.',
    'LBL_ACCOUNT_ID' => 'معرف الحساب:',
    'LBL_ACCOUNT_NAME' => 'اسم الحساب:',
    'LBL_CAMPAIGN' => 'حملة التسويق:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'الأنشطة',
    'LBL_ADDRESS_INFORMATION' => 'معلومات العنوان',
    'LBL_ALT_ADDRESS_CITY' => 'العنوان البديل - المدينة:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'العنوان البديل - الدولة:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'العنوان البديل - الرمز البريدي:',
    'LBL_ALT_ADDRESS_STATE' => 'العنوان البديل - المحافظة:',
    'LBL_ALT_ADDRESS_STREET_2' => 'العنوان البديل - شارع 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'العنوان البديل - شارع 3:',
    'LBL_ALT_ADDRESS_STREET' => 'العنوان البديل - الشارع:',
    'LBL_ALTERNATE_ADDRESS' => 'عنوان آخر:',
    'LBL_ALT_ADDRESS' => 'عنوان آخر:',
    'LBL_ANY_ADDRESS' => 'أي عنوان:',
    'LBL_ANY_EMAIL' => 'أي بريد إلكتروني:',
    'LBL_ANY_PHONE' => 'أي هاتف:',
    'LBL_ASSIGNED_TO_NAME' => 'أُسند إلى:',
    'LBL_ASSIGNED_TO_ID' => 'المستخدم المكلف',
    'LBL_ASSISTANT_PHONE' => 'هاتف المساعد:',
    'LBL_ASSISTANT' => 'المساعد:',
    'LBL_BIRTHDATE' => 'تاريخ الولادة:',
    'LBL_CITY' => 'المدينة:',
    'LBL_CAMPAIGN_ID' => 'الرقم التعريفي للحملة التسويقية',
    'LBL_CONTACT_INFORMATION' => 'نظرة شاملة', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'اسم جهة الاتصال:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'فرصة-جهة اتصال:',
    'LBL_CONTACT_ROLE' => 'دوره:',
    'LBL_CONTACT' => 'جهة الإتصال:',
    'LBL_COUNTRY' => 'الدولة:',
    'LBL_CREATED_ACCOUNT' => 'تم إنشاء حساب جديد',
    'LBL_CREATED_CALL' => 'إنشاء اتصال جديد',
    'LBL_CREATED_CONTACT' => 'إنشاء جهة اتصال جديدة',
    'LBL_CREATED_MEETING' => 'إنشاء اجتماع جديد',
    'LBL_CREATED_OPPORTUNITY' => 'إنشاء فرصة جديدة',
    'LBL_DATE_MODIFIED' => 'تاريخ التعديل:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'جهات الإتصال',
    'LBL_DEPARTMENT' => 'الإدارة:',
    'LBL_DESCRIPTION' => 'الوصف:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'تقارير مباشرة',
    'LBL_DO_NOT_CALL' => 'لا تقم بالاتصال:',
    'LBL_DUPLICATE' => 'جهات اتصال مكررة محتملة',
    'LBL_EMAIL_ADDRESS' => 'عنوان البريد الإلكتروني:',
    'LBL_EMAIL_OPT_OUT' => 'الإنسحاب من خدمة رسائل البريد الإلكتروني:',
    'LBL_EXISTING_ACCOUNT' => 'استخدم حسابًا موجودًا',
    'LBL_EXISTING_CONTACT' => 'استخدم جهة اتصال موجودًة',
    'LBL_EXISTING_OPPORTUNITY' => 'استخدم فرصة موجودة',
    'LBL_FAX_PHONE' => 'فاكس:',
    'LBL_FIRST_NAME' => 'الاسم الأول:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'التاريخ',
    'LBL_HOME_PHONE' => 'المنزل:',
    'LBL_ID' => 'المعرف:',
    'LBL_IMPORT_VCARD' => 'Import vCard',
    'LBL_VCARD' => 'بطاقة تعريف إلكترونية vCard',
    'LBL_IMPORT_VCARDTEXT' => 'إنشاء جهة اتصال جديدة تلقائيًا عن طريق استيراد بطاقة جهة اتصال (vCard) من نظام الملفات الخاص بك.',
    'LBL_INVALID_EMAIL' => 'بريد إلكتروني غير صالح:',
    'LBL_INVITEE' => 'تقارير مباشرة',
    'LBL_LAST_NAME' => 'الاسم الأخير:',
    'LBL_LEAD_SOURCE' => 'مصدر المُهتم:',
    'LBL_LIST_ACCEPT_STATUS' => 'قبول الحالة',
    'LBL_LIST_ACCOUNT_NAME' => 'اسم الحساب',
    'LBL_LIST_CONTACT_NAME' => 'اسم جهة الإتصال',
    'LBL_LIST_CONTACT_ROLE' => 'الدور الوظيفي',
    'LBL_LIST_EMAIL_ADDRESS' => 'البريد الإلكتروني',
    'LBL_LIST_FIRST_NAME' => 'الاسم الأول',
    'LBL_LIST_FORM_TITLE' => 'قائمة جهات الاتصال',
    'LBL_LIST_LAST_NAME' => 'الاسم الأخير',
    'LBL_LIST_NAME' => 'الاسم',
    'LBL_LIST_PHONE' => 'هاتف المكتب',
    'LBL_LIST_TITLE' => 'المسمى الوظيفي',
    'LBL_MOBILE_PHONE' => 'الهاتف النقال:',
    'LBL_MODIFIED' => 'قام بالتعديل:',
    'LBL_MODULE_NAME' => 'جهات الإتصال',
    'LBL_MODULE_TITLE' => 'جهات الاتصال: الرئيسية',
    'LBL_NAME' => 'الاسم:',
    'LBL_NEW_FORM_TITLE' => 'جهة اتصال جديدة',
    'LBL_NOTE_SUBJECT' => 'موضوع الملاحظة',
    'LBL_OFFICE_PHONE' => 'هاتف المكتب:',
    'LBL_OPP_NAME' => 'اسم الفرصة:',
    'LBL_OPPORTUNITY_ROLE_ID' => 'معرف دور الفرصة:',
    'LBL_OPPORTUNITY_ROLE' => 'دور الفرصة',
    'LBL_OTHER_EMAIL_ADDRESS' => 'بريد إلكتروني آخر:',
    'LBL_OTHER_PHONE' => 'هاتف آخر:',
    'LBL_PHONE' => 'هاتف:',
    'LBL_PORTAL_APP' => 'تطبيق البوابة:',
    'LBL_PORTAL_INFORMATION' => 'معلومات البوابة',
    'LBL_PORTAL_NAME' => 'اسم البوابة:',
    'LBL_STREET' => 'الشارع',
    'LBL_POSTAL_CODE' => 'الرمز البريدي:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'العنوان الرئيسي - المدينة:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'العنوان الرئيسي - الدولة:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'العنوان الرئيسي - الرمز البريدي:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'العنوان الرئيسي - المحافظة:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'العنوان الرئيسي - شارع 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'العنوان الرئيسي - شارع 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'العنوان الرئيسي - الشارع:',
    'LBL_PRIMARY_ADDRESS' => 'العنوان الرئيسي:',
    'LBL_PRODUCTS_TITLE' => 'المنتجات',
    'LBL_REPORTS_TO_ID' => 'تقارير لمعرف:',
    'LBL_REPORTS_TO' => 'المدير المباشر:',
    'LBL_RESOURCE_NAME' => 'اسم المًوْرِد',
    'LBL_SALUTATION' => 'بادئة الاسم:',
    'LBL_SAVE_CONTACT' => 'حفظ جهة الاتصال',
    'LBL_SEARCH_FORM_TITLE' => 'البحث في جهات الاتصال',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'اختيار جهات الاتصال المحددة',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'اختيار جهات الاتصال المحددة',
    'LBL_STATE' => 'المحافظة أو المنطقة:',
    'LBL_SYNC_CONTACT' => 'مزامنة مع Outlook&reg;:',
    'LBL_PROSPECT_LIST' => 'قائمة العملاء المُتوقعين',
    'LBL_TITLE' => 'المسمى الوظيفي:',
    'LNK_CONTACT_LIST' => 'عرض جهات الاتصال',
    'LNK_IMPORT_VCARD' => 'إنشاء جهة اتصال من بطاقة جهة اتصال (vCard)',
    'LNK_NEW_ACCOUNT' => 'إنشاء حساب',
    'LNK_NEW_APPOINTMENT' => 'إنشاء موعد',
    'LNK_NEW_CALL' => 'سجل بيانات مُكالمة',
    'LNK_NEW_CASE' => 'إنشاء قضية',
    'LNK_NEW_CONTACT' => 'إنشاء جهة إتصال',
    'LNK_NEW_EMAIL' => 'أرشفة الرسائل',
    'LNK_NEW_MEETING' => 'جدولة اجتماع',
    'LNK_NEW_NOTE' => 'إنشاء ملاحظة',
    'LNK_NEW_OPPORTUNITY' => 'إنشاء فرصة',
    'LNK_NEW_TASK' => 'إنشاء مهمة',
    'LNK_SELECT_ACCOUNT' => "اختيار حساب",
    'NTC_DELETE_CONFIRMATION' => 'هل أنت متأكد من أنك تريد حذف هذا السجل؟',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'يتطلب إنشاء فرصة حسابًا.\n يرجى إنشاء حساب جديد أو تحديد حساب موجود.',
    'NTC_REMOVE_CONFIRMATION' => 'هل أنت متأكد أنك تريد إزالة جهة الاتصال هذه من القضية؟',

    'LBL_LEADS_SUBPANEL_TITLE' => 'مُهتمون',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'الفرص',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'الوثائق',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'نسخ إلى العنوان الأساسي',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'نسخ إلى العنوان الآخر',

    'LBL_CASES_SUBPANEL_TITLE' => 'القضايا',
    'LBL_BUGS_SUBPANEL_TITLE' => 'أخطاء',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'مشاريع',
    'LBL_PROJECTS_RESOURCES' => 'موارد المشاريع',
    'LBL_CAMPAIGNS' => 'الحملات',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'حملات',
    'LBL_LIST_CITY' => 'المدينة',
    'LBL_LIST_STATE' => 'المحافظة',
    'LBL_HOMEPAGE_TITLE' => 'دليل جهات الاتصال الخاص بي',
    'LBL_OPPORTUNITIES' => 'الفرص',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'جهات الاتصال',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'المشاريع',
    'LNK_IMPORT_CONTACTS' => 'استيراد جهات اتصال',

    // SNIP
    'LBL_USER_SYNC' => 'مزامنة المستخدم',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'الأحداث',

    'LBL_AOP_CASE_UPDATES' => 'تحديثات القضية',
    'LBL_CREATE_PORTAL_USER' => 'إنشاء مستخدم البوابة',
    'LBL_ENABLE_PORTAL_USER' => 'تفعيل مستخدم البوابة',
    'LBL_DISABLE_PORTAL_USER' => 'تعطيل مستخدم البوابة',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'فشل إنشاء مستخدم البوابة',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'فشل تفعيل مستخدم البوابة',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'فشل تعطيل مستخدم البوابة',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'تم إنشاء مستخدم البوابة',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'تم تفعيل مستخدم البوابة',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'تم تعطيل مستخدم البوابة',
    'LBL_NO_JOOMLA_URL' => 'لم يتم تحديد عنوان URL للبوابة الإلكترونية',
    'LBL_PORTAL_USER_TYPE' => 'نوع مستخدم البوابة',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'الحساب معطل',
    'LBL_JOOMLA_ACCOUNT_ID' => 'معرف حساب Joomla',

    'LBL_AOS_CONTRACTS' => 'العقود',
    'LBL_AOS_INVOICES' => 'الفواتير',
    'LBL_AOS_QUOTES' => 'عروض الأسعار',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => 'جهات اتصال المشروع من عنوان المشروع',

    'LBL_LIST_INVITE_STATUS' => 'حالة الدعوة',
);
