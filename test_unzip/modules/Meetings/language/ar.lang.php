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
    'LBL_ACCEPT_THIS' => 'موافق؟',
    'LBL_ADD_BUTTON' => 'إضافة',
    'LBL_ADD_INVITEE' => 'إضافة المدعوين',
    'LBL_CONTACT_NAME' => 'جهة إتصال:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'جهات الاتصال',
    'LBL_CREATED_BY' => 'أنشئ بواسطة',
    'LBL_DATE_END' => 'تاريخ الانتهاء',
    'LBL_DATE_TIME' => 'تاريخ ووقت البداية:',
    'LBL_DATE' => 'تاريخ البدء:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'الاجتماعات',
    'LBL_DESCRIPTION' => 'الوصف:',
    'LBL_DIRECTION' => 'الاتجاه:',
    'LBL_DURATION_HOURS' => 'المدة بالساعات:',
    'LBL_DURATION_MINUTES' => 'المدة بالدقائق:',
    'LBL_DURATION' => 'المدة:',
    'LBL_EMAIL' => 'بريد إلكتروني',
    'LBL_FIRST_NAME' => 'الاسم الأول',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'ملاحظات',
    'LBL_HOURS_ABBREV' => 'س',
    'LBL_HOURS_MINS' => '(ساعات/دقائق)',
    'LBL_INVITEE' => 'المدعوون',
    'LBL_LAST_NAME' => 'الاسم الأخير',
    'LBL_ASSIGNED_TO_NAME' => 'أُسند إلى:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'المستخدم المكلف',
    'LBL_LIST_CLOSE' => 'إغلاق',
    'LBL_LIST_CONTACT' => 'جهة الاتصال',
    'LBL_LIST_DATE_MODIFIED' => 'تاريخ التعديل',
    'LBL_LIST_DATE' => 'تاريخ البدء',
    'LBL_LIST_DIRECTION' => 'الاتجاه',
    'LBL_LIST_DUE_DATE' => 'تاريخ الاستحقاق',
    'LBL_LIST_FORM_TITLE' => 'قائمة الاجتماعات',
    'LBL_LIST_MY_MEETINGS' => 'اجتماعاتي',
    'LBL_LIST_RELATED_TO' => 'متعلق بـ',
    'LBL_LIST_STATUS' => 'الحالة',
    'LBL_LIST_SUBJECT' => 'الموضوع',
    'LBL_LEADS_SUBPANEL_TITLE' => 'مُهتمون',
    'LBL_LOCATION' => 'المكان: ',
    'LBL_MINSS_ABBREV' => 'د',
    'LBL_MODIFIED_BY' => 'عدل بواسطة',
    'LBL_MODULE_NAME' => 'اجتماعات',
    'LBL_MODULE_TITLE' => 'الاجتماعات: الرئيسية',
    'LBL_NAME' => 'الاسم',
    'LBL_NEW_FORM_TITLE' => 'إنشاء موعد',
    'LBL_OUTLOOK_ID' => 'معرف أوتلوك',
    'LBL_SEQUENCE' => 'تسلسل تحديث الاجتماعات',
    'LBL_PHONE' => 'هاتف المكتب:',
    'LBL_REMINDER_TIME' => 'وقت التذكير',
    'LBL_EMAIL_REMINDER_SENT' => 'تم إرسال التذكير',
    'LBL_REMINDER' => 'رسائل التذكير:',
    'LBL_REMINDER_POPUP' => 'المنبثقة',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'أرسل لكل المدعوين',
    'LBL_EMAIL_REMINDER' => 'رسالة التذكير',
    'LBL_EMAIL_REMINDER_TIME' => 'وقت رسالة التذكير',
    'LBL_REMOVE' => 'إزالة',
    'LBL_SCHEDULING_FORM_TITLE' => 'جدولة',
    'LBL_SEARCH_BUTTON' => 'بحث',
    'LBL_SEARCH_FORM_TITLE' => 'بحث الاجتماعات',
    'LBL_SEND_BUTTON_LABEL' => 'حفظ وإرسال الدعوات',
    'LBL_SEND_BUTTON_TITLE' => 'حفظ وإرسال الدعوات',
    'LBL_STATUS' => 'الحالة:',
    'LBL_TYPE' => 'نوع الاجتماع',
    'LBL_PASSWORD' => 'كلمة مرور الاجتماع',
    'LBL_URL' => 'ابدأ/انضم إلى الاجتماع',
    'LBL_HOST_URL' => 'رابط URL المضيف',
    'LBL_DISPLAYED_URL' => 'اعرض الرابط (URL)',
    'LBL_CREATOR' => 'منشئ الاجتماع',
    'LBL_EXTERNALID' => 'معرف التطبيق الخارجي',
    'LBL_SUBJECT' => 'الموضوع:',
    'LBL_TIME' => 'وقت البدء:',
    'LBL_USERS_SUBPANEL_TITLE' => 'المُستخدمون',
    'LBL_CALENDAR_ACCOUNTS' => 'Calendar Accounts',
    'LBL_PARENT_TYPE' => 'نوع الأصل',
    'LBL_PARENT_ID' => 'معرف الأصل',
    'LNK_MEETING_LIST' => 'عرض الاجتماعات',
    'LNK_NEW_APPOINTMENT' => 'إنشاء موعد',
    'LNK_NEW_MEETING' => 'جدولة اجتماع',
    'LNK_IMPORT_MEETINGS' => 'استيراد الاجتماعات',

    'LBL_CREATED_USER' => 'المستخدم الذي تم إنشاؤه',
    'LBL_MODIFIED_USER' => 'تم تعديل المستخدم',
    'NOTICE_DURATION_TIME' => 'الفترة الزمنية يجب أن تكون أكثر من ٠',
    'LBL_MEETING_INFORMATION' => 'نظرة شاملة', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_LIST_JOIN_MEETING' => 'الانضمام إلى الاجتماع',
    'LBL_ACCEPT_STATUS' => 'حالة القبول',
    'LBL_ACCEPT_LINK' => 'رابط القبول',
    // You are not invited to the meeting messages
    'LBL_EXTNOT_MAIN' => 'أنت غير قادر على الانضمام إلى هذا الاجتماع لأنك لست مدعو.',
    'LBL_EXTNOT_RECORD_LINK' => 'عرض الاجتماع',

    //cannot start messages
    'LBL_EXTNOSTART_MAIN' => 'لا يمكنك بدء هذا الاجتماع لأنك لست مسؤول أو مالك الاجتماع.',

    // create invitee functionallity
    'LBL_CREATE_INVITEE' => 'إنشاء مدعو',
    'LBL_CREATE_CONTACT' => 'كجهة اتصال',  // Create invitee functionallity
    'LBL_CREATE_LEAD' => 'كعميل محتمل',  // Create invitee functionallity
    'LBL_CREATE_AND_ADD' => 'إنشاء وإضافة',  // Create invitee functionallity
    'LBL_CANCEL_CREATE_INVITEE' => 'إلغاء',
    'LBL_EMPTY_SEARCH_RESULT' => 'آسف، لم يتم العثور على نتائج. فضلاً أنشئ المدعو أدناه.',
    'LBL_NO_ACCESS' => 'ليس لديك صلاحية لإنشاء $module',  // Create invitee functionallity

    'LBL_REPEAT_TYPE' => 'كرر النوع',
    'LBL_REPEAT_INTERVAL' => 'كرر الفاصل الزمني للتكرار',
    'LBL_REPEAT_DOW' => 'تكرار يوم الأسبوع (Dow)',
    'LBL_REPEAT_UNTIL' => 'كرر حتى',
    'LBL_REPEAT_COUNT' => 'مرات التكرار',
    'LBL_REPEAT_PARENT_ID' => 'تكرار معرف الأصل',
    'LBL_RECURRING_SOURCE' => 'مصدر متكرر',

    'LBL_SYNCED_RECURRING_MSG' => 'هذا الاجتماع نشأ في نظام آخر وتمت مزامنته مع نظام SuiteCRM. لإجراء التغييرات، انتقل إلى الاجتماع الأصلي داخل النظام الآخر. يمكن مزامنة التغييرات التي تتم في النظام الآخر مع هذا السجل.',
    'LBL_RELATED_TO' => 'يتعلق بـ:',

    // for reminders
    'LBL_REMINDERS' => 'رسائل التذكير',
    'LBL_REMINDERS_ACTIONS' => 'الإجراءات:',
    'LBL_REMINDERS_POPUP' => 'المنبثقة',
    'LBL_REMINDERS_EMAIL' => 'أرسل للمدعوين',
    'LBL_REMINDERS_WHEN' => 'عندما:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'إزالة رسالة التذكير',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'إضافة لكافة المدعوين',
    'LBL_REMINDERS_ADD_REMINDER' => 'إضافة رسالة تذكير',

    // for google sync
    'LBL_GSYNC_ID' => 'معرف حدث جوجل',
    'LBL_GSYNC_LASTSYNC' => 'وقت آخر مزامنة مع جوجل',
);
