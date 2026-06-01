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
    // DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_website' => 'LBL_LIST_WEBSITE',
    'db_billing_address_city' => 'LBL_LIST_CITY',
    // END DON'T CONVERT
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'الوثائق',
    // Dashlet Categories
    'LBL_CHARTS' => 'المخططات البيانية',
    'LBL_DEFAULT' => 'عدد المُشاهدات',
    // END Dashlet Categories

    'ERR_DELETE_RECORD' => 'يجب عليك تحديد رقم تسجيل من أجل حذف الحساب.',
    'LBL_ACCOUNT_INFORMATION' => 'نظرة شاملة', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_ACCOUNT_NAME' => 'اسم الحساب:',
    'LBL_ACCOUNT' => 'الحساب:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'الأنشطة',
    'LBL_ADDRESS_INFORMATION' => 'معلومات العنوان',
    'LBL_ANNUAL_REVENUE' => 'الإيرادات السنوية:',
    'LBL_ANY_ADDRESS' => 'أي عنوان:',
    'LBL_ANY_EMAIL' => 'أي بريد إلكتروني:',
    'LBL_ANY_PHONE' => 'أي هاتف:',
    'LBL_ASSIGNED_TO_NAME' => 'أُسند إلى:',
    'LBL_ASSIGNED_TO_ID' => 'المستخدم المُكلف:',
    'LBL_BILLING_ADDRESS_CITY' => 'الفواتير ترسل لمدينة:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'الفواتير ترسل لدولة:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'الفواتير ترسل للرمز البريدي:',
    'LBL_BILLING_ADDRESS_STATE' => 'المحافظة للفواتير:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'الفواتير ترسل لشارع ٢',
    'LBL_BILLING_ADDRESS_STREET_3' => 'الفواتير ترسل لشارع ٣',
    'LBL_BILLING_ADDRESS_STREET_4' => 'الفواتير ترسل لشارع ٤',
    'LBL_BILLING_ADDRESS_STREET' => 'الفواتير ترسل لشارع:',
    'LBL_BILLING_ADDRESS' => 'عنوان إرسال الفواتير:',
    'LBL_BUGS_SUBPANEL_TITLE' => 'أخطاء',
    'LBL_CAMPAIGN_ID' => 'معرف الحملة',
    'LBL_CASES_SUBPANEL_TITLE' => 'القضايا',
    'LBL_CITY' => 'المدينة:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'جهات الاتصال',
    'LBL_COUNTRY' => 'الدولة:',
    'LBL_DATE_ENTERED' => 'تاريخ الإنشاء:',
    'LBL_DATE_MODIFIED' => 'تاريخ التعديل:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'الحسابات',
    'LBL_DESCRIPTION_INFORMATION' => 'معلومات إيضاحية',
    'LBL_DESCRIPTION' => 'الوصف:',
    'LBL_DUPLICATE' => 'الحساب محتمل أنه مكرر',
    'LBL_EMAIL' => 'عنوان البريد الإلكتروني:',
    'LBL_EMAIL_OPT_OUT' => 'الإنسحاب من خدمة رسائل البريد الإلكتروني:',
    'LBL_EMAIL_ADDRESSES' => 'عناوين البريد الإلكتروني',
    'LBL_EMPLOYEES' => 'الموظفون:',
    'LBL_FAX' => 'فاكس:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'التاريخ',
    'LBL_HOMEPAGE_TITLE' => 'الحسابات الخاصة بي',
    'LBL_INDUSTRY' => 'مجال عمل الشركة:',
    'LBL_INVALID_EMAIL' => 'بريد إلكتروني غير صحيح:',
    'LBL_INVITEE' => 'جهات الإتصال',
    'LBL_LEADS_SUBPANEL_TITLE' => 'مُهتمون',
    'LBL_LIST_ACCOUNT_NAME' => 'الاسم',
    'LBL_LIST_CITY' => 'المدينة',
    'LBL_LIST_CONTACT_NAME' => 'اسم جهة الإتصال',
    'LBL_LIST_EMAIL_ADDRESS' => 'عنوان البريد الإلكتروني',
    'LBL_LIST_FORM_TITLE' => 'قائمة الحساب',
    'LBL_LIST_PHONE' => 'الهاتف',
    'LBL_LIST_STATE' => 'المحافظة',
    'LBL_MEMBER_OF' => 'عضو في:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'عضو بمنظمات',
    'LBL_MODULE_NAME' => 'الحسابات',
    'LBL_MODULE_TITLE' => 'الحسابات: الصفحة الرئيسية',
    'LBL_MODULE_ID' => 'الحسابات',
    'LBL_NAME' => 'الاسم:',
    'LBL_NEW_FORM_TITLE' => 'حساب جديد',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'الفرص',
    'LBL_OTHER_EMAIL_ADDRESS' => 'بريد إلكتروني آخر:',
    'LBL_OTHER_PHONE' => 'هاتف آخر:',
    'LBL_OWNERSHIP' => 'الملكية:',
    'LBL_PARENT_ACCOUNT_ID' => 'معرف الحساب الأصل',
    'LBL_PHONE_ALT' => 'الهاتف البديل:',
    'LBL_PHONE_FAX' => 'هاتف فاكس:',
    'LBL_PHONE_OFFICE' => 'هاتف المكتب:',
    'LBL_PHONE' => 'هاتف:',
    'LBL_POSTAL_CODE' => 'الرمز البريدي:',
    'LBL_PRODUCTS_TITLE' => 'المنتجات',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'مشاريع',
    'LBL_PUSH_CONTACTS_BUTTON_LABEL' => 'نسخ إلى جهات الاتصال',
    'LBL_PUSH_CONTACTS_BUTTON_TITLE' => 'نسخ...',
    'LBL_RATING' => 'التقييم:',
    'LBL_SAVE_ACCOUNT' => 'حفظ الحساب',
    'LBL_SEARCH_FORM_TITLE' => 'البحث عن حساب',
    'LBL_SHIPPING_ADDRESS_CITY' => 'يُشحن لمدينة:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'يُشحن لدولة:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'الرمز البريدي للشحن:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'الشحن لمحافظة:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'يُشحن لشارع ٢',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'يُشحن لشارع ٣',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'يُشحن لشارع ٤',
    'LBL_SHIPPING_ADDRESS_STREET' => 'يُشحن لشارع:',
    'LBL_SHIPPING_ADDRESS' => 'عنوان الشحن:',
    'LBL_SIC_CODE' => 'رمز التصنيف الصناعي العام (SIC):',
    'LBL_STATE' => 'المحافظة أو المنطقة:',
    'LBL_TICKER_SYMBOL' => 'رمز المؤشر:',
    'LBL_TYPE' => 'النوع:',
    'LBL_WEBSITE' => 'موقع الإنترنت:',
    'LBL_CAMPAIGNS' => 'الحملات',
    'LNK_ACCOUNT_LIST' => 'عرض الحسابات',
    'LNK_NEW_ACCOUNT' => 'إنشاء حساب',
    'LNK_IMPORT_ACCOUNTS' => 'استيراد الحسابات',
    'MSG_DUPLICATE' => 'إن سجل الحساب الذي أنشأته قد يكون تكرار لحساب موجود مُسبقاً. سجلات الحساب الذي يحتوي أسماء مُتشابهة مُدرجة بالأسفل.<br>أُنقر إنشاء الحساب للاستمرار في إنشاء هذا الحساب الجديد، أو حدد الحساب الموجود مسبقاً والمُدرح بالأسفل.',
    'MSG_SHOW_DUPLICATES' => 'قد يكون سجل الحساب المُراد إنشائه هو تكرار لسجل حساب موجود مُسبقاً. سجلات الحساب تحتوي على أسماء مشابهة لما هو مذكور أدناه. <br>"انقر فوق حفظ حتى تتابع عملية إنشاء هذا الحساب الجديد، أو انقر فوق إلغاء للرجوع بدون إنشاء هذا الحساب.',
    'LBL_ASSIGNED_USER_NAME' => 'أُسند إلى:',
    'LBL_PROSPECT_LIST' => 'قائمة العملاء المتوقعين',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'الحسابات',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'المشاريع',
    //For export labels
    'LBL_PARENT_ID' => 'معرف الأصل',
    // SNIP
    'LBL_PRODUCTS_SERVICES_PURCHASED_SUBPANEL_TITLE' => 'المنتجات والخدمات التي تم شراؤها',

    'LBL_AOS_CONTRACTS' => 'العقود',
    'LBL_AOS_INVOICES' => 'الفواتير',
    'LBL_AOS_QUOTES' => 'عروض الأسعار',
    'LBL_LIST_WEBSITE' => 'الموقع الإلكتروني',
);
