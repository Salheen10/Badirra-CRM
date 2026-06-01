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
    'LBL_ACCOUNT_ID' => 'معرف الحساب:',
    'LBL_CASE_ID' => 'معرف القضية:',
    'LBL_CLOSE' => 'إغلاق:',
    'LBL_CONTACT_ID' => 'معرف جهة الاتصال:',
    'LBL_CONTACT_NAME' => 'جهة إتصال:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'الملاحظات',
    'LBL_DESCRIPTION' => 'الملاحظة',
    'LBL_EMAIL_ADDRESS' => 'عنوان البريد الإلكتروني:',
    'LBL_EMAIL_ATTACHMENT' => 'مرفق البريد الإلكتروني',
    'LBL_FILE_MIME_TYPE' => 'صيغة الملف (Mime)',
    'LBL_FILE_URL' => 'رابط (URL) الملف',
    'LBL_FILENAME' => 'المرفق:',
    'LBL_LEAD_ID' => 'معرف العميل المحتمل:',
    'LBL_LIST_CONTACT_NAME' => 'جهة الإتصال',
    'LBL_LIST_DATE_MODIFIED' => 'آخر تعديل',
    'LBL_LIST_FILENAME' => 'المرفق',
    'LBL_LIST_FORM_TITLE' => 'قائمة الملاحظات',
    'LBL_LIST_RELATED_TO' => 'يتعلق بـ',
    'LBL_LIST_SUBJECT' => 'الموضوع',
    'LBL_LIST_STATUS' => 'الحالة',
    'LBL_LIST_CONTACT' => 'جهة الاتصال',
    'LBL_MODULE_NAME' => 'الملاحظات',
    'LBL_MODULE_TITLE' => 'الملاحظات: الرئيسية',
    'LBL_NEW_FORM_TITLE' => 'إنشاء ملاحظة أو إضافة مُرفق',
    'LBL_NOTE_STATUS' => 'الملاحظة',
    'LBL_NOTE_SUBJECT' => 'الموضوع:',
    'LBL_NOTES_SUBPANEL_TITLE' => 'المرفقات',
    'LBL_NOTE' => 'الملاحظة:',
    'LBL_OPPORTUNITY_ID' => 'معرف الفرصة:',
    'LBL_PARENT_ID' => 'معرف الأصل:',
    'LBL_PARENT_TYPE' => 'نوع الأصل',
    'LBL_PHONE' => 'هاتف:',
    'LBL_PORTAL_FLAG' => 'عرض في البوابة؟',
    'LBL_EMBED_FLAG' => 'تضمين في البريد الإلكتروني؟',
    'LBL_PRODUCT_ID' => 'معرف المنتج:',
    'LBL_QUOTE_ID' => 'معرف عرض السعر:',
    'LBL_RELATED_TO' => 'متعلق بـ:',
    'LBL_SEARCH_FORM_TITLE' => 'بحث الملاحظات',
    'LBL_STATUS' => 'الحالة',
    'LBL_SUBJECT' => 'الموضوع:',
    'LNK_IMPORT_NOTES' => 'استيراد ملاحظات',
    'LNK_NEW_NOTE' => 'إنشاء ملاحظة أو ملف مرفق',
    'LNK_NOTE_LIST' => 'عرض الملاحظات',
    'LBL_MEMBER_OF' => 'عضو في:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'المستخدم المكلف',
    'LBL_REMOVING_ATTACHMENT' => 'جاري إزالة المرفقات...',
    'ERR_REMOVING_ATTACHMENT' => 'فشل إزالة المرفقات...',
    'LBL_CREATED_BY' => 'أنشئ بواسطة',
    'LBL_MODIFIED_BY' => 'عُدل بواسطة',
    'LBL_SEND_ANYWAYS' => 'هذا البريد الإلكتروني لا يحتوي موضوع. إرسال/حفظ بأي حال؟',
    'LBL_NOTE_INFORMATION' => 'نظرة شاملة', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MY_NOTES_DASHLETNAME' => 'ملاحظاتي',
    'LBL_EDITLAYOUT' => 'تحرير التصميم' /*for 508 compliance fix*/,
    //For export labels
    'LBL_FIRST_NAME' => 'الاسم الأول',
    'LBL_LAST_NAME' => 'الاسم الأخير',
    'LBL_DATE_ENTERED' => 'تاريخ الإنشاء',
    'LBL_DATE_MODIFIED' => 'تاريخ التعديل',
    'LBL_DELETED' => 'محذوف',
    'LBL_FILE_CONTENTS' => 'محتويات الملف',

    'LBL_ASCENDING' => 'تصاعدي',
    'LBL_DESCENDING' => 'تنازلي',
);
