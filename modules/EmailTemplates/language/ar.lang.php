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
    'LBL_ADD_DOCUMENT' => 'إضافة وثيقة',
    'LBL_ADD_FILE' => 'إضافة ملف',
    'LBL_ATTACHMENTS' => 'المرفقات',
    'LBL_BODY' => 'النص:',
    'LBL_CLOSE' => 'إغلاق:',
    'LBL_DESCRIPTION' => 'الوصف:',
    'LBL_EDIT_ALT_TEXT' => 'تحرير نص عادي',
    'LBL_EMAIL_ATTACHMENT' => 'مرفق البريد الإلكتروني',
    'LBL_HIDE_ALT_TEXT' => 'إخفاء النص العادي',
    'LBL_HTML_BODY' => 'نص HTML',
    'LBL_INSERT_VARIABLE' => 'إدخال المتغير:',
    'LBL_INSERT_URL_REF' => 'أدخل مرجع رابط URL',
    'LBL_INSERT_TRACKER_URL' => 'أدخل رابط URL الخاص بالمتعقب:',
    'LBL_INSERT' => 'إدراج',
    'LBL_LIST_DATE_MODIFIED' => 'آخر تعديل',
    'LBL_LIST_DESCRIPTION' => 'الوصف',
    'LBL_LIST_FORM_TITLE' => 'قائمة قوالب البريد الإلكتروني',
    'LBL_LIST_NAME' => 'الاسم',
    'LBL_MODULE_NAME' => 'قوالب البريد الإلكتروني',
    'LBL_MODULE_TITLE' => 'قوالب البريد الإلكتروني: الرئيسية',
    'LBL_NAME' => 'الاسم:',
    'LBL_NEW_FORM_TITLE' => 'إنشاء قالب بريد إلكتروني',
    'LBL_PUBLISH' => 'نشر:',
    'LBL_RELATED_TO' => 'متعلق بـ:',
    'LBL_SEARCH_FORM_TITLE' => 'بحث قوالب البريد الإلكتروني',
    'LBL_SHOW_ALT_TEXT' => 'عرض النص العادي',
    'LBL_SUBJECT' => 'الموضوع:',
    'LBL_SUITE_DOCUMENT' => 'الوثيقة',
    'LBL_UPLOAD_FILE' => 'رفع الملف',
    'LBL_TEXT_BODY' => 'نص الرسالة',
    'LBL_USERS' => 'المُستخدمون',

    'LNK_EMAIL_TEMPLATE_LIST' => 'عرض قوالب البريد',
    'LNK_IMPORT_NOTES' => 'استيراد ملاحظات',
    'LNK_NEW_EMAIL_TEMPLATE' => 'إنشاء قالب بريد',
    'LNK_NEW_EMAIL' => 'أرشفة الرسائل',
    'LNK_NEW_SEND_EMAIL' => 'إنشاء رسالة',
    'LNK_SENT_EMAIL_LIST' => 'البريد المرسل',
    'LNK_VIEW_CALENDAR' => 'اليوم',
    // for Inbox
    'LBL_NEW' => 'جديد',
    'LNK_MY_DRAFTS' => 'مسوداتي',
    'LNK_MY_INBOX' => 'بريدي',
    'LBL_TEXT_ONLY' => 'نص فقط',
    'LBL_SEND_AS_TEXT' => 'إرسال النص فقط',
    'LBL_ACCOUNT' => 'الحساب',
    'LBL_FROM_NAME' => 'من اسم',
    'LBL_PLAIN_TEXT' => 'نص عادي',
    'LBL_CREATED_BY' => 'أنشئ بواسطة',
    'LBL_PUBLISHED' => 'تم النشر',
    'LNK_VIEW_MY_INBOX' => 'عرض البريد الخاص بي',
    'LBL_ASSIGNED_TO_ID' => 'أسند إلى',
    'LBL_EDIT_LAYOUT' => 'تحرير التصميم' /*for 508 compliance fix*/,
    'LBL_SELECT' => 'اختر' /*for 508 compliance fix*/,
    'LBL_ID_FF_CLEAR' => 'مسح' /*for 508 compliance fix*/,
    'LBL_TYPE' => 'النوع',
    'LBL_WIDTH' => 'العرض الافتراضي',
    'LNK_IMPORT_CAMPAIGNS' => 'استيراد الحملة',
);
