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
    'LBL_MODULE_NAME' => 'الأنشطة',
    'LBL_MODULE_TITLE' => 'الأنشطة: الصفحة الرئيسية',
    'LBL_SEARCH_FORM_TITLE' => 'البحث عن الأنشطة',
    'LBL_LIST_FORM_TITLE' => 'قائمة الأنشطة',
    'LBL_LIST_SUBJECT' => 'الموضوع',
    'LBL_OVERVIEW' => 'نظرة شاملة', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_TASKS' => 'مهمات عمل', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETINGS' => 'اجتماعات', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CALLS' => 'اتصالات', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EMAILS' => 'عناوين البريد الإلكتروني', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_NOTES' => 'ملاحظات', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_PRINT' => 'طباعة', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETING_TYPE' => 'اجتماعات',
    'LBL_CALL_TYPE' => 'مكالمات',
    'LBL_EMAIL_TYPE' => 'Email',
    'LBL_NOTE_TYPE' => 'ملاحظات',
    'LBL_DATA_TYPE_START' => 'البداية:',
    'LBL_DATA_TYPE_SENT' => 'تم إرساله:',
    'LBL_DATA_TYPE_MODIFIED' => 'تم تعديله:',
    'LBL_LIST_CONTACT' => 'جهة الاتصال',
    'LBL_LIST_RELATED_TO' => 'متعلق بـ',
    'LBL_LIST_DATE' => 'التاريخ',
    'LBL_LIST_CLOSE' => 'إغلاق',
    'LBL_SUBJECT' => 'الموضوع:',
    'LBL_STATUS' => 'الحالة:',
    'LBL_LOCATION' => 'المكان: ',
    'LBL_DATE_TIME' => 'تاريخ ووقت البداية:',
    'LBL_DATE' => 'تاريخ البدء:',
    'LBL_TIME' => 'وقت البدء:',
    'LBL_DURATION' => 'المدة:',
    'LBL_HOURS_MINS' => '(ساعات/دقائق)',
    'LBL_CONTACT_NAME' => 'اسم جهة الاتصال: ',
    'LBL_DESCRIPTION' => 'الوصف:',
    'LNK_NEW_CALL' => 'سجل بيانات مُكالمة',
    'LNK_NEW_MEETING' => 'جدولة اجتماع',
    'LNK_NEW_TASK' => 'إنشاء مهمة',
    'LNK_NEW_NOTE' => 'إنشاء ملاحظة أو إضافة مُرفق',
    'LNK_NEW_EMAIL' => 'إنشاء رسائل بريد إلكتروني مؤرشفة',
    'LNK_CALL_LIST' => 'عرض مكالمات',
    'LNK_MEETING_LIST' => 'عرض الاجتماعات',
    'LNK_TASK_LIST' => 'عرض المهام',
    'LNK_NOTE_LIST' => 'عرض الملاحظات',
    'LBL_DELETE_ACTIVITY' => 'هل أنت متأكد من أنك تريد حذف هذا النشاط؟',
    'ERR_DELETE_RECORD' => 'يجب أن تُحدد رقم السجل إذا أردت حذف هذا الحساب.',
    'LBL_INVITEE' => 'المدعوون',
    'LBL_LIST_DIRECTION' => 'الاتجاه',
    'LBL_DIRECTION' => 'الاتجاه',
    'LNK_NEW_APPOINTMENT' => 'موعد جديد',
    'LNK_VIEW_CALENDAR' => 'عرض التقويم',
    'LBL_OPEN_ACTIVITIES' => 'الأنشطة المفتوحة',
    'LBL_HISTORY' => 'التاريخ',
    'LBL_NEW_TASK_BUTTON_TITLE' => 'إنشاء مهمة',
    'LBL_NEW_TASK_BUTTON_LABEL' => 'إنشاء مهمة',
    'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'جدولة اجتماع',
    'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'جدولة اجتماع',
    'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'سجل بيانات المُكالمة',
    'LBL_NEW_NOTE_BUTTON_TITLE' => 'إنشاء ملاحظة أو ملف مرفق',
    'LBL_NEW_NOTE_BUTTON_LABEL' => 'إنشاء ملاحظة أو ملف مرفق',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'أرشفة الرسائل',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'أرشفة الرسائل',
    'LBL_LIST_STATUS' => 'الحالة',
    'LBL_LIST_DUE_DATE' => 'تاريخ الاستحقاق',
    'LBL_LIST_LAST_MODIFIED' => 'آخر تعديل',
    'LNK_IMPORT_CALLS' => 'استيراد مكالمات',
    'LNK_IMPORT_MEETINGS' => 'استيراد الاجتماعات',
    'LNK_IMPORT_TASKS' => 'استيراد مهام',
    'LNK_IMPORT_NOTES' => 'استيراد ملاحظات',
    'LBL_ACCEPT_THIS' => 'موافق؟',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'الأنشطة المفتوحة',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'المستخدم المكلف',

    'LBL_ACCEPT' => 'قبول' /*for 508 compliance fix*/,
);
