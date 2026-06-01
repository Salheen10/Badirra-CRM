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
    'LBL_MODULE_NAME' => 'المُستهدفون',
    'LBL_MODULE_ID' => 'المُستهدفون',
    'LBL_INVITEE' => 'تقارير مباشرة',
    'LBL_MODULE_TITLE' => 'المستهدفون: الرئيسية',
    'LBL_SEARCH_FORM_TITLE' => 'بحث المستهدفين',
    'LBL_LIST_FORM_TITLE' => 'قائمة المستهدفين',
    'LBL_NEW_FORM_TITLE' => 'مستهدف جديد',
    'LBL_LIST_NAME' => 'الاسم',
    'LBL_LIST_LAST_NAME' => 'الاسم الأخير',
    'LBL_LIST_TITLE' => 'المسمى الوظيفي',
    'LBL_LIST_EMAIL_ADDRESS' => 'البريد الإلكتروني',
    'LBL_LIST_PHONE' => 'الهاتف',
    'LBL_LIST_FIRST_NAME' => 'الاسم الأول',
    'LBL_ASSIGNED_TO_NAME' => 'أُسند إلى',
    'LBL_ASSIGNED_TO_ID' => 'أُسند إلى:',
    'LBL_CAMPAIGN_ID' => 'الرقم التعريفي للحملة التسويقية',
    'LBL_EXISTING_ACCOUNT' => 'مستخدم في حساب موجود',
    'LBL_CREATED_ACCOUNT' => 'تم إنشاء حساب جديد',
    'LBL_CREATED_CALL' => 'تم إنشاء مكالمة جديدة',
    'LBL_CREATED_MEETING' => 'تم إنشاء اجتماع جديد',
    'LBL_NAME' => 'الاسم:',
    'LBL_PROSPECT_INFORMATION' => 'نظرة شاملة', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'مزيد من المعلومات',
    'LBL_FIRST_NAME' => 'الاسم الأول:',
    'LBL_OFFICE_PHONE' => 'هاتف المكتب:',
    'LBL_ANY_PHONE' => 'أي هاتف:',
    'LBL_PHONE' => 'هاتف:',
    'LBL_LAST_NAME' => 'الاسم الأخير:',
    'LBL_MOBILE_PHONE' => 'الهاتف النقال:',
    'LBL_HOME_PHONE' => 'المنزل:',
    'LBL_OTHER_PHONE' => 'هاتف آخر:',
    'LBL_FAX_PHONE' => 'فاكس:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'العنوان الرئيسي - الشارع:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'العنوان الرئيسي - المدينة:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'العنوان الرئيسي - الدولة:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'العنوان الرئيسي - المحافظة:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'العنوان الرئيسي - الرمز البريدي:',
    'LBL_ALT_ADDRESS_STREET' => 'العنوان البديل - الشارع:',
    'LBL_ALT_ADDRESS_CITY' => 'العنوان البديل - المدينة:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'العنوان البديل - الدولة:',
    'LBL_ALT_ADDRESS_STATE' => 'العنوان البديل - المحافظة:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'العنوان البديل - الرمز البريدي:',
    'LBL_TITLE' => 'المسمى الوظيفي:',
    'LBL_DEPARTMENT' => 'الإدارة:',
    'LBL_BIRTHDATE' => 'تاريخ الولادة:',
    'LBL_EMAIL_ADDRESS' => 'عنوان البريد الإلكتروني:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'بريد إلكتروني آخر:',
    'LBL_ANY_EMAIL' => 'أي بريد إلكتروني:',
    'LBL_ASSISTANT' => 'المساعد:',
    'LBL_ASSISTANT_PHONE' => 'هاتف المساعد:',
    'LBL_DO_NOT_CALL' => 'لا يرغب في الاتصال:',
    'LBL_EMAIL_OPT_OUT' => 'الإنسحاب من خدمة رسائل البريد الإلكتروني:',
    'LBL_PRIMARY_ADDRESS' => 'العنوان الرئيسي:',
    'LBL_ALTERNATE_ADDRESS' => 'عنوان آخر:',
    'LBL_ANY_ADDRESS' => 'أي عنوان:',
    'LBL_CITY' => 'المدينة:',
    'LBL_STATE' => 'المحافظة أو المنطقة:',
    'LBL_POSTAL_CODE' => 'الرمز البريدي:',
    'LBL_COUNTRY' => 'الدولة:',
    'LBL_ADDRESS_INFORMATION' => 'معلومات العنوان',
    'LBL_DESCRIPTION' => 'الوصف:',
    'LBL_OPP_NAME' => 'اسم الفرصة:',
    'LBL_IMPORT_VCARD' => 'إستيراد vCard',
    'LBL_IMPORT_VCARDTEXT' => 'قم بإنشاء جهة اتصال جديدة تلقائيًا عن طريق استيراد بطاقة جهة اتصا (vCard) من نظام الملفات الخاص بك.',
    'LBL_DUPLICATE' => 'مستهدفون محتملو التكرار',
    'MSG_SHOW_DUPLICATES' => 'قد يكون سجل المستهدف الذي أنت على وشك إنشائه تكرارًا لسجل مستهدف موجود بالفعل. يتم سرد سجلات المستهدفين التي تحتوي على أسماء و / أو عناوين بريد إلكتروني مشابهة أدناه. <br> انقر فوق "إنشاء مستهدف" لمتابعة إنشاء هذا المستهدف الجديد، أو حدد مستهدفًا موجودًا مدرجًا أدناه.',
    'MSG_DUPLICATE' => 'قد يكون سجل المستهدف الذي أنت على وشك إنشائه تكرارًا لسجل مستهدف موجود بالفعل. يتم سرد سجلات المستهدفين التي تحتوي على أسماء و / أو عناوين بريد إلكتروني مشابهة أدناه. <br> انقر فوق "حفظ" لمتابعة إنشاء هذا المستهدف الجديد، أو انقر فوق "إلغاء" للعودة إلى الوحدة بدون إنشاء المستهدف.',
    'LNK_IMPORT_VCARD' => 'إنشاء من (vCard) بطاقة جهة الاتصال الإفتراضية',
    'LNK_NEW_ACCOUNT' => 'إنشاء حساب',
    'LNK_NEW_OPPORTUNITY' => 'إنشاء فرصة',
    'LNK_NEW_CASE' => 'إنشاء قضية',
    'LNK_NEW_NOTE' => 'إنشاء ملاحظة أو ملف مرفق',
    'LNK_NEW_CALL' => 'سجل بيانات مُكالمة',
    'LNK_NEW_EMAIL' => 'أرشفة الرسائل',
    'LNK_NEW_MEETING' => 'جدولة اجتماع',
    'LNK_NEW_TASK' => 'إنشاء مهمة',
    'LNK_NEW_APPOINTMENT' => 'إنشاء موعد',
    'LNK_IMPORT_PROSPECTS' => 'استيراد مستهدفين',
    'NTC_DELETE_CONFIRMATION' => 'هل أنت متأكد من أنك تريد حذف هذا السجل؟',
    'NTC_REMOVE_CONFIRMATION' => 'هل أنت متأكد من أنك تريد حذف جهة الاتصال هذه من القضية؟',
    'ERR_DELETE_RECORD' => 'يجب أن تُحدد رقم سجل حتى يُمكن حذف جهة الاتصال',
    'LBL_SALUTATION' => 'البادئة',
    'LBL_CREATED_OPPORTUNITY' => 'تم إنشاء فرصة جديدة',
    'LNK_SELECT_ACCOUNT' => "اختيار حساب",
    'LNK_NEW_PROSPECT' => 'انشاء مستهدف',
    'LNK_PROSPECT_LIST' => 'عرض المستهدفين',
    'LNK_NEW_CAMPAIGN' => 'إنشاء حملة',
    'LNK_CAMPAIGN_LIST' => 'حملات',
    'LNK_NEW_PROSPECT_LIST' => 'إنشاء قائمة مستهدفين',
    'LNK_PROSPECT_LIST_LIST' => 'قوائم المستهدفين',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'اختر المستهدفين المحددين',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'اختر المستهدفين المحددين',
    'LBL_INVALID_EMAIL' => 'بريد إلكتروني غير صالح:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'المُستهدفون',
    'LBL_PROSPECT_LIST' => 'قائمة العملاء المُتوقعين',
    'LBL_CONVERT_BUTTON_TITLE' => 'تحويل المستهدف',
    'LBL_CONVERT_BUTTON_LABEL' => 'تحويل المستهدف',
    'LNK_NEW_CONTACT' => 'جهة اتصال جديدة',
    'LBL_CREATED_CONTACT' => "تم إنشاء جهة اتصال جديدة",
    'LBL_CAMPAIGNS' => 'الحملات',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'سجل الحملات',
    'LBL_TRACKER_KEY' => 'مفتاح المتعقب',
    'LBL_LEAD_ID' => 'معرف العميل المحتمل',
    'LBL_CONVERTED_LEAD' => 'تم تحويل العميل المحتمل',
    'LBL_ACCOUNT_NAME' => 'اسم الحساب',
    'LBL_EDIT_ACCOUNT_NAME' => 'اسم الحساب:',
    'LBL_CREATED_USER' => 'المستخدم الذي تم إنشاؤه',
    'LBL_MODIFIED_USER' => 'تم تعديل المستخدم',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'التاريخ',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'الأحداث',
);
