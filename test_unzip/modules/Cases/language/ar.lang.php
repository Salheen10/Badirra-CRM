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
    'ERR_DELETE_RECORD' => 'يجب أن تُحدد رقم السجل إذا أردت حذف هذا الحساب.',
    'LBL_TOOL_TIP_BOX_TITLE' => 'مقترحات قاعدة المعرفة',
    'LBL_TOOL_TIP_TITLE' => 'العنوان:',
    'LBL_TOOL_TIP_BODY' => 'النص:',
    'LBL_TOOL_TIP_INFO' => 'معلومات أضافية:',
    'LBL_TOOL_TIP_USE' => 'استخدم بغرض:',
    'LBL_SUGGESTION_BOX' => 'مقترحات',
    'LBL_NO_SUGGESTIONS' => 'لا توجد مقترحات',
    'LBL_RESOLUTION_BUTTON' => 'الحل',
    'LBL_SUGGESTION_BOX_STATUS' => 'الحالة',
    'LBL_SUGGESTION_BOX_TITLE' => 'العنوان',
    'LBL_SUGGESTION_BOX_REL' => 'مدى الارتباط',

    'LBL_ACCOUNT_ID' => 'معرف الحساب',
    'LBL_ACCOUNT_NAME' => 'اسم الحساب:',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'الحسابات',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'الأنشطة',
    'LBL_BUGS_SUBPANEL_TITLE' => 'أخطاء',
    'LBL_CASE_NUMBER' => 'رقم القضية:',
    'LBL_CASE' => 'القضية:',
    'LBL_CONTACT_NAME' => 'اسم جهة الاتصال:',
    'LBL_CONTACT_ROLE' => 'دوره:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'جهات الاتصال',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'قضايا',
    'LBL_DESCRIPTION' => 'الوصف:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'التاريخ',
    'LBL_INVITEE' => 'جهات الإتصال',
    'LBL_MEMBER_OF' => 'الحساب',
    'LBL_MODULE_NAME' => 'القضايا',
    'LBL_MODULE_TITLE' => 'القضايا: الرئيسية',
    'LBL_NEW_FORM_TITLE' => 'قضية جديدة',
    'LBL_NUMBER' => 'الرقم:',
    'LBL_PRIORITY' => 'الأولوية:',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'مشاريع',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'الوثائق',
    'LBL_RESOLUTION' => 'الحل:',
    'LBL_SEARCH_FORM_TITLE' => 'بحث القضايا',
    'LBL_STATUS' => 'الحالة:',
    'LBL_SUBJECT' => 'الموضوع:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'المستخدم المكلف',
    'LBL_LIST_ACCOUNT_NAME' => 'اسم الحساب',
    'LBL_LIST_ASSIGNED' => 'أسند إلى',
    'LBL_LIST_CLOSE' => 'إغلاق',
    'LBL_LIST_FORM_TITLE' => 'قائمة القضايا',
    'LBL_LIST_LAST_MODIFIED' => 'آخر تعديل',
    'LBL_LIST_MY_CASES' => 'قضاياي المفتوحة',
    'LBL_LIST_NUMBER' => 'الرقم.',
    'LBL_LIST_PRIORITY' => 'الأولوية',
    'LBL_LIST_STATUS' => 'الحالة',
    'LBL_LIST_SUBJECT' => 'الموضوع',

    'LNK_CASE_LIST' => 'معاينة القضايا',
    'LNK_NEW_CASE' => 'إنشاء قضية',
    'LBL_LIST_DATE_CREATED' => 'تاريخ الإنشاء',
    'LBL_ASSIGNED_TO_NAME' => 'أُسند إلى',
    'LBL_TYPE' => 'النوع',
    'LBL_WORK_LOG' => 'سجل العمل',
    'LNK_IMPORT_CASES' => 'استيراد القضايا',

    'LBL_CREATED_USER' => 'المستخدم الذي تم إنشاؤه',
    'LBL_MODIFIED_USER' => 'تم تعديل المستخدم',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'المشاريع',
    'LBL_CASE_INFORMATION' => 'نظرة شاملة', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    // SNIP
    'LBL_UPDATE_TEXT' => 'التحديثات-النص', //Field for Case updates with text only
    'LBL_INTERNAL' => 'تحديث داخلي',
    'LBL_AOP_CASE_UPDATES' => 'تحديثات القضية',
    'LBL_AOP_CASE_UPDATES_THREADED' => 'تحديثات القضية متشعبة',
    'LBL_CASE_UPDATES_COLLAPSE_ALL' => 'طي الكل',
    'LBL_CASE_UPDATES_EXPAND_ALL' => 'توسيع الكل',
    'LBL_AOP_CASE_ATTACHMENTS' => 'المرفقات:',

    'LBL_AOP_CASE_EVENTS' => 'أحداث القضية',
    'LBL_CASE_ATTACHMENTS_DISPLAY' => 'مرفقات القضية:',
    'LBL_ADD_CASE_FILE' => 'أضافة ملف',
    'LBL_REMOVE_CASE_FILE' => 'حذف ملف',
    'LBL_SELECT_CASE_DOCUMENT' => 'اختر وثيقة',
    'LBL_CLEAR_CASE_DOCUMENT' => 'مسح الوثيقة',
    'LBL_SELECT_INTERNAL_CASE_DOCUMENT' => 'ملف إدارة علاقات عملاء (CRM) داخلي',
    'LBL_SELECT_EXTERNAL_CASE_DOCUMENT' => 'ملف خارجي',
    'LBL_CONTACT_CREATED_BY_NAME' => 'أنشئ بواسطة جهة الاتصال',
    'LBL_CONTACT_CREATED_BY' => 'أنشئ بواسطة',
    'LBL_CASE_UPDATE_FORM' => 'التحديثات - نموذج المرفقات', //Form for attachments on case updates
    'LBL_UNKNOWN_CONTACT' => 'جهة اتصال غير معروفة',
);
