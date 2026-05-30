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
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',
    //END DON'T CONVERT

    'ERR_DELETE_RECORD' => 'يجب تحديد رقم السجل ليتم حذف العميل المحتمل.',
    'LBL_ACCOUNT_DESCRIPTION' => 'وصف الحساب',
    'LBL_ACCOUNT_ID' => 'معرف الحساب',
    'LBL_ACCOUNT_NAME' => 'اسم الحساب:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'الأنشطة',
    'LBL_ADDRESS_INFORMATION' => 'معلومات العنوان',
    'LBL_ALT_ADDRESS_CITY' => 'عنوان المدينة البديل',
    'LBL_ALT_ADDRESS_COUNTRY' => 'عنوان البلد البديل',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'عنوان الرمز البريدي البديل',
    'LBL_ALT_ADDRESS_STATE' => 'عنوان المحافظة البديل',
    'LBL_ALT_ADDRESS_STREET_2' => 'العنوان البديل - شارع 2',
    'LBL_ALT_ADDRESS_STREET_3' => 'العنوان البديل - شارع 3',
    'LBL_ALT_ADDRESS_STREET' => 'العنوان البديل - الشارع',
    'LBL_ALTERNATE_ADDRESS' => 'عنوان آخر:',
    'LBL_ALT_ADDRESS' => 'عنوان آخر:',
    'LBL_ANY_ADDRESS' => 'أي عنوان:',
    'LBL_ANY_EMAIL' => 'أي بريد إلكتروني:',
    'LBL_ANY_PHONE' => 'أي هاتف:',
    'LBL_ASSIGNED_TO_NAME' => 'أُسند إلى',
    'LBL_ASSIGNED_TO_ID' => 'المستخدم المُكلف:',
    'LBL_CITY' => 'المدينة:',
    'LBL_CONTACT_ID' => 'معرف جهة الاتصال',
    'LBL_CONTACT_INFORMATION' => 'نظرة شاملة', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'اسم العميل المحتمل:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'فرصة-عميل محتمل:',
    'LBL_CONTACT_ROLE' => 'دوره:',
    'LBL_CONTACT' => 'عميل محتمل:',
    'LBL_CONVERTED_ACCOUNT' => 'الحساب المحول:',
    'LBL_CONVERTED_CONTACT' => 'جهة الاتصال المحوّلة:',
    'LBL_CONVERTED_OPP' => 'الفرصة المحوّلة:',
    'LBL_CONVERTED' => 'تحول',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'العميل المحتمل المحوّل',
    'LBL_CONVERTLEAD' => 'العميل المحتمل المحوّل',
    'LBL_CONVERTLEAD_WARNING' => 'تحذير: حالة العميل المحتمل الذي أنت على وشك تحويله هي "محوّل". قد يكون تم بالفعل إنشاء سجلات الاتصال و/أو الحساب من العميل المحتمل. إذا كنت ترغب في الاستمرار في تحويل العميل المحتمل، انقر فوق حفظ. للعودة إلى العميل المحتمل دون تحويله، انقر فوق إلغاء.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => ' جهة اتصال محتملة: ',
    'LBL_COUNTRY' => 'الدولة:',
    'LBL_CREATED_NEW' => 'تم إنشاء',
    'LBL_CREATED_ACCOUNT' => 'تم إنشاء حساب جديد',
    'LBL_CREATED_CALL' => 'تم إنشاء مكالمة جديدة',
    'LBL_CREATED_CONTACT' => 'تم إنشاء جهة اتصال جديدة',
    'LBL_CREATED_MEETING' => 'تم إنشاء اجتماع جديد',
    'LBL_CREATED_OPPORTUNITY' => 'تم إنشاء فرصة جديدة',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'مُهتمون',
    'LBL_DEPARTMENT' => 'الإدارة:',
    'LBL_DESCRIPTION' => 'الوصف:',
    'LBL_DO_NOT_CALL' => 'لا يرغب في الاتصال:',
    'LBL_DUPLICATE' => 'العملاء المحتملون المماثلون',
    'LBL_EMAIL_ADDRESS' => 'عنوان البريد الإلكتروني:',
    'LBL_EMAIL_OPT_OUT' => 'الإنسحاب من خدمة رسائل البريد الإلكتروني:',
    'LBL_EXISTING_ACCOUNT' => 'مستخدم في حساب موجود',
    'LBL_EXISTING_CONTACT' => 'استخدم جهة اتصال موجودًة',
    'LBL_EXISTING_OPPORTUNITY' => 'استخدم فرصة موجودة',
    'LBL_FAX_PHONE' => 'فاكس:',
    'LBL_FIRST_NAME' => 'الاسم الأول:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'التاريخ',
    'LBL_HOME_PHONE' => 'هاتف المنزل:',
    'LBL_IMPORT_VCARD' => 'إستيراد vCard',
    'LBL_VCARD' => 'بطاقة تعريف إلكترونية vCard',
    'LBL_IMPORT_VCARDTEXT' => 'إنشاء عميل محتمل جديد تلقائيًا عن طريق استيراد بطاقة جهة اتصال (vCard) من نظام الملفات الخاص بك.',
    'LBL_INVALID_EMAIL' => 'بريد إلكتروني غير صالح:',
    'LBL_INVITEE' => 'تقارير مباشرة',
    'LBL_LAST_NAME' => 'الاسم الأخير:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'وصف مصدر العميل المحتمل:',
    'LBL_LEAD_SOURCE' => 'مصدر المُهتم:',
    'LBL_LIST_ACCEPT_STATUS' => 'قبول الحالة',
    'LBL_LIST_ACCOUNT_NAME' => 'اسم الحساب',
    'LBL_LIST_CONTACT_NAME' => 'اسم العميل المحتمل',
    'LBL_LIST_CONTACT_ROLE' => 'الدور الوظيفي',
    'LBL_LIST_DATE_ENTERED' => 'تاريخ الإنشاء',
    'LBL_LIST_EMAIL_ADDRESS' => 'البريد الإلكتروني',
    'LBL_LIST_FIRST_NAME' => 'الاسم الأول',
    'LBL_LIST_FORM_TITLE' => 'قائمة العملاء المحتملين',
    'LBL_LIST_LAST_NAME' => 'الاسم الأخير',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'وصف مصدر العميل المحتمل',
    'LBL_LIST_LEAD_SOURCE' => 'مصدر العميل المحتمل',
    'LBL_LIST_MY_LEADS' => 'العملاء المحتملون الخاصون بي',
    'LBL_LIST_NAME' => 'الاسم',
    'LBL_LIST_PHONE' => 'هاتف المكتب',
    'LBL_LIST_REFERED_BY' => 'عرف بواسطة',
    'LBL_LIST_STATUS' => 'الحالة',
    'LBL_LIST_TITLE' => 'المسمى الوظيفي',
    'LBL_MOBILE_PHONE' => 'الهاتف النقال:',
    'LBL_MODULE_NAME' => 'مُهتمون',
    'LBL_MODULE_TITLE' => 'العملاء المحتملين: الصفحة الرئيسية',
    'LBL_NAME' => 'الاسم:',
    'LBL_NEW_FORM_TITLE' => 'عميل محتمل جديد',
    'LBL_OFFICE_PHONE' => 'هاتف المكتب:',
    'LBL_OPP_NAME' => 'اسم الفرصة:',
    'LBL_OPPORTUNITY_AMOUNT' => 'مبلغ الفرصة:',
    'LBL_OPPORTUNITY_ID' => 'معرف الفرصة',
    'LBL_OPPORTUNITY_NAME' => 'اسم الفرصة:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'بريد إلكتروني آخر:',
    'LBL_OTHER_PHONE' => 'هاتف آخر:',
    'LBL_PHONE' => 'هاتف:',
    'LBL_PORTAL_APP' => 'تطبيق البوابة',
    'LBL_PORTAL_INFORMATION' => 'معلومات البوابة',
    'LBL_PORTAL_NAME' => 'اسم البوابة:',
    'LBL_POSTAL_CODE' => 'الرمز البريدي:',
    'LBL_STREET' => 'الشارع',
    'LBL_PRIMARY_ADDRESS_CITY' => 'العنوان الرئيسي - المدينة',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'العنوان الرئيسي - الدولة',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'العنوان الرئيسي - الرمز البريدي',
    'LBL_PRIMARY_ADDRESS_STATE' => 'العنوان الرئيسي - المحافظة',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'العنوان الرئيسي - شارع 2',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'العنوان الرئيسي - شارع 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'العنوان الرئيسي - الشارع',
    'LBL_PRIMARY_ADDRESS' => 'العنوان الرئيسي:',
    'LBL_REFERED_BY' => 'عرف بواسطة:',
    'LBL_REPORTS_TO_ID' => 'يرفع تقريره إلى',
    'LBL_REPORTS_TO' => 'المدير المباشر:',
    'LBL_SALUTATION' => 'البادئة',
    'LBL_MODIFIED' => 'عُدل بواسطة',
    'LBL_CREATED' => 'أنشئ بواسطة',
    'LBL_SEARCH_FORM_TITLE' => 'البحث عن عميل محتمل',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'حدد العملاء المحتملين المُختارين',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'حدد العملاء المحتملين المُختارين',
    'LBL_STATE' => 'المحافظة أو المنطقة:',
    'LBL_STATUS_DESCRIPTION' => 'وصف الحالة:',
    'LBL_STATUS' => 'الحالة:',
    'LBL_TITLE' => 'المسمى الوظيفي:',
    'LNK_IMPORT_VCARD' => 'إنشاء عميل محتمل من بطاقة جهة اتصال (vCard)',
    'LNK_LEAD_LIST' => 'عرض العملاء المحتملين',
    'LNK_NEW_ACCOUNT' => 'إنشاء حساب',
    'LNK_NEW_APPOINTMENT' => 'إنشاء موعد',
    'LNK_NEW_CONTACT' => 'إنشاء جهة إتصال',
    'LNK_NEW_LEAD' => 'إنشاء مهتم بنا',
    'LNK_NEW_NOTE' => 'إنشاء ملاحظة',
    'LNK_NEW_TASK' => 'إنشاء مهمة',
    'LNK_NEW_CASE' => 'إنشاء قضية',
    'LNK_NEW_CALL' => 'سجل بيانات مُكالمة',
    'LNK_NEW_MEETING' => 'جدولة اجتماع',
    'LNK_NEW_OPPORTUNITY' => 'إنشاء فرصة',
    'LNK_SELECT_ACCOUNTS' => ' <b>أو</b> حدد الحساب',
    'LNK_SELECT_CONTACTS' => ' <b>أو</b> حدد جهة الاتصال',
    'NTC_DELETE_CONFIRMATION' => 'هل أنت متأكد من أنك تريد حذف هذا السجل؟',
    'NTC_REMOVE_CONFIRMATION' => 'هل أنت متأكد أنك تريد إزالة العميل المحتمل هذا من القضية؟',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'حملات',
    'LBL_CAMPAIGN' => 'حملة التسويق:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'المستخدم المكلف',
    'LBL_PROSPECT_LIST' => 'قائمة العملاء المُتوقعين',
    'LBL_CAMPAIGN_LEAD' => 'حملات',
    'LBL_BIRTHDATE' => 'تاريخ الولادة:',
    'LBL_ASSISTANT_PHONE' => 'هاتف المُساعد',
    'LBL_ASSISTANT' => 'المُساعد',
    'LBL_CREATED_USER' => 'المستخدم الذي تم إنشاؤه',
    'LBL_MODIFIED_USER' => 'تم تعديل المستخدم',
    'LBL_CAMPAIGNS' => 'الحملات',
    'LBL_CONVERT_MODULE_NAME' => 'نظام فرعي',
    'LBL_CONVERT_REQUIRED' => 'إلزامي',
    'LBL_CONVERT_SELECT' => 'السماح بالاختيار',
    'LBL_CONVERT_COPY' => 'نسخ البيانات',
    'LBL_CONVERT_EDIT' => 'حرر',
    'LBL_CONVERT_DELETE' => 'احذف',
    'LBL_CONVERT_ADD_MODULE' => 'إضافة وحدة',
    'LBL_CREATE' => 'أنشئ',
    'LBL_SELECT' => ' <b>أو</b> اختر',
    'LBL_WEBSITE' => 'موقع الإنترنت',
    'LNK_IMPORT_LEADS' => 'استيراد العملاء المحتملين',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'الوحدة التي سيتم إنشاء سجل جديد فيها.',
    'LBL_REQUIRED_TIP' => 'يجب إنشاء الوحدات المطلوبة أو إختيارها قبل أن يمكن تحويل العميل المحتمل.',
    'LBL_COPY_TIP' => 'إذا تم تحديده، سيتم نسخ الحقول من العميل المحتمل إلى حقول بنفس الاسم في السجلات المنشأة حديثا.',
    'LBL_SELECTION_TIP' => 'يمكن تحديد الوحدات التي فيها حقل علاقة في جهات الاتصال بدلاً من إنشائها أثناء عملية تحويل العميل المحتمل.',
    'LBL_EDIT_TIP' => 'تعديل تخطيط التحويل لهذه الوحدة.',
    'LBL_DELETE_TIP' => 'إزالة هذه الوحدة من تصميم التحويل.',

    'LBL_ACTIVITIES_MOVE' => 'نقل الأنشطة إلى',
    'LBL_ACTIVITIES_COPY' => 'نسخ الأنشطة إلى',
    'LBL_ACTIVITIES_MOVE_HELP' => "حدد السجل الذي سيتم تحريك الأنشطة الخاصة بالعميل المحتمل. سيتم نقل المهام والمكالمات والاجتماعات والملاحظات والبريد الإلكتروني إلى السجل (السجلات) المحددة.",
    'LBL_ACTIVITIES_COPY_HELP' => "حدد السجل (السجلات) التي سيتم إنشاء نسخ فيها من الأنشطة الخاصة بالعميل المحتمل. سيتم إنشاء مهام جديدة ورسائل واجتماعات وملاحظات لكل سجل من السجلات المحددة. سيتم ربط رسائل البريد الإلكتروني بالسجل (السجلات) المحددة.",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'الرقم التعريفي للحملة التسويقية',
    'LBL_EDITLAYOUT' => 'تحرير التصميم' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'أدخل التاريخ' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'جاري التحميل' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'حرر' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'الأحداث',
);
