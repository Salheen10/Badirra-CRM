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
    'LBL_BLANK' => ' ',
    'LBL_MODULE_NAME' => 'مكالمات',
    'LBL_MODULE_TITLE' => 'المكالمات: الرئيسية',
    'LBL_SEARCH_FORM_TITLE' => 'بحث المكالمات',
    'LBL_LIST_FORM_TITLE' => 'قائمة المكالمات',
    'LBL_NEW_FORM_TITLE' => 'إنشاء موعد',
    'LBL_LIST_CLOSE' => 'إغلاق',
    'LBL_LIST_SUBJECT' => 'الموضوع',
    'LBL_LIST_CONTACT' => 'جهة الاتصال',
    'LBL_LIST_RELATED_TO' => 'متعلق بـ',
    'LBL_LIST_RELATED_TO_ID' => 'ذو علاقة بمُعرف',
    'LBL_LIST_DATE' => 'تاريخ البدء',
    'LBL_LIST_DIRECTION' => 'الاتجاه',
    'LBL_SUBJECT' => 'الموضوع:',
    'LBL_REMINDER' => 'للتذكير:',
    'LBL_CONTACT_NAME' => 'جهة الإتصال:',
    'LBL_DESCRIPTION' => 'الوصف:',
    'LBL_STATUS' => 'الحالة:',
    'LBL_DIRECTION' => 'الاتجاه:',
    'LBL_DATE' => 'تاريخ البدء:',
    'LBL_DURATION' => 'المدة:',
    'LBL_DURATION_HOURS' => 'المدة بالساعات:',
    'LBL_DURATION_MINUTES' => 'المدة بالدقائق:',
    'LBL_HOURS_MINUTES' => '(ساعات/دقائق)',
    'LBL_DATE_TIME' => 'تاريخ ووقت البداية:',
    'LBL_TIME' => 'وقت البدء:',
    'LBL_HOURS_ABBREV' => 'س',
    'LBL_MINSS_ABBREV' => 'د',
    'LNK_NEW_CALL' => 'سجل بيانات مُكالمة',
    'LNK_NEW_MEETING' => 'جدولة اجتماع',
    'LNK_CALL_LIST' => 'عرض المكالمات',
    'LNK_IMPORT_CALLS' => 'استيراد مكالمات',
    'ERR_DELETE_RECORD' => 'يجب تحديد رقم السجل ليتم حذف الحساب.',
    'LBL_INVITEE' => 'المدعوون',
    'LBL_RELATED_TO' => 'متعلق بـ:',
    'LNK_NEW_APPOINTMENT' => 'إنشاء موعد',
    'LBL_SCHEDULING_FORM_TITLE' => 'جدولة',
    'LBL_ADD_INVITEE' => 'إضافة مدعوين',
    'LBL_NAME' => 'الاسم',
    'LBL_FIRST_NAME' => 'الاسم الأول',
    'LBL_LAST_NAME' => 'الاسم الأخير',
    'LBL_EMAIL' => 'بريد إلكتروني',
    'LBL_PHONE' => 'هاتف',
    'LBL_REMINDER_POPUP' => 'مُنبثقة',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'أرسل لكل المدعوين',
    'LBL_EMAIL_REMINDER' => 'رسالة تذكير',
    'LBL_EMAIL_REMINDER_TIME' => 'وقت رسالة التذكير',
    'LBL_SEND_BUTTON_TITLE' => 'حفظ وإرسال الدعوات',
    'LBL_SEND_BUTTON_LABEL' => 'حفظ وإرسال الدعوات',
    'LBL_DATE_END' => 'تاريخ الانتهاء',
    'LBL_REMINDER_TIME' => 'وقت التذكير',
    'LBL_EMAIL_REMINDER_SENT' => 'تم إرسال التذكير',
    'LBL_SEARCH_BUTTON' => 'بحث',
    'LBL_ADD_BUTTON' => 'إضافة',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'مكالمات',
    'LNK_SELECT_ACCOUNT' => 'اختيار حساب',
    'LNK_NEW_ACCOUNT' => 'حساب جديد',
    'LNK_NEW_OPPORTUNITY' => 'فرصة جديدة',
    'LBL_LEADS_SUBPANEL_TITLE' => 'مُهتمون',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'جهات الاتصال',
    'LBL_USERS_SUBPANEL_TITLE' => 'المُستخدمون',
    'LBL_OUTLOOK_ID' => 'معرف أوتلوك',
    'LBL_MEMBER_OF' => 'عضو في',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'ملاحظات',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'أُسند إلى',
    'LBL_LIST_MY_CALLS' => 'مكالماتي',
    'LBL_ASSIGNED_TO_NAME' => 'أُسند إلى',
    'LBL_ASSIGNED_TO_ID' => 'المستخدم المكلف',
    'NOTICE_DURATION_TIME' => 'الفترة الزمنية يجب أن تكون أكثر من ٠',
    'LBL_CALL_INFORMATION' => 'نظرة شاملة', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_REMOVE' => 'إزالة',
    'LBL_ACCEPT_STATUS' => 'حالة القبول',
    'LBL_ACCEPT_LINK' => 'رابط القبول',

    // create invitee functionality
    'LBL_CREATE_INVITEE' => 'إنشاء مدعو',
    'LBL_CREATE_CONTACT' => 'كجهة اتصال',
    'LBL_CREATE_LEAD' => 'كعميل محتمل',
    'LBL_CREATE_AND_ADD' => 'إنشاء وإضافة',
    'LBL_CANCEL_CREATE_INVITEE' => 'إلغاء',
    'LBL_EMPTY_SEARCH_RESULT' => 'آسف، لم يتم العثور على نتائج. فضلاً أنشئ المدعو أدناه.',
    'LBL_NO_ACCESS' => 'ليس لديك صلاحية لإنشاء $module',

    'LBL_REPEAT_TYPE' => 'كرر النوع',
    'LBL_REPEAT_INTERVAL' => 'كرر الفاصل الزمني للتكرار',
    'LBL_REPEAT_DOW' => 'تكرار يوم الأسبوع (Dow)',
    'LBL_REPEAT_UNTIL' => 'كرر حتى',
    'LBL_REPEAT_COUNT' => 'مرات التكرار',
    'LBL_REPEAT_PARENT_ID' => 'تكرار معرف الأصل',
    'LBL_RECURRING_SOURCE' => 'مصدر متكرر',

    'LBL_SYNCED_RECURRING_MSG' => 'هذه المكالمة نشأت في نظام آخر، وتم مزامنتها إلى SuiteCRM. لإجراء تغييرات، انتقل إلى المكالمة الأصلية في النظام الآخر. يمكن مزامنة التغييرات التي تتم في النظام الآخر ونقلها إلى هذا السجل.',

    // for reminders
    'LBL_REMINDERS' => 'رسائل التذكير',
    'LBL_REMINDERS_ACTIONS' => 'الإجراءات:',
    'LBL_REMINDERS_POPUP' => 'المنبثقة',
    'LBL_REMINDERS_EMAIL' => 'أرسل للمدعوين',
    'LBL_REMINDERS_WHEN' => 'عندما:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'إزالة التذكير',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'إضافة كافة المدعوين',
    'LBL_REMINDERS_ADD_REMINDER' => 'إضافة تذكير',

    'LBL_RESCHEDULE' => 'إعادة جدولة',
    'LBL_RESCHEDULE_COUNT' => 'محاولات الاتصال',
    'LBL_RESCHEDULE_DATE' => 'التاريخ',
    'LBL_RESCHEDULE_REASON' => 'السبب',
    'LBL_RESCHEDULE_ERROR1' => 'الرجاء تحديد تاريخ صحيح',
    'LBL_RESCHEDULE_ERROR2' => 'الرجاء تحديد سبب',
    'LBL_RESCHEDULE_PANEL' => 'إعادة جدولة',
    'LBL_RESCHEDULE_HISTORY' => 'سجل محاولات الاتصال',
    'LBL_CANCEL' => 'إلغاء',
    'LBL_SAVE' => 'حفظ',

    'LBL_CALLS_RESCHEDULE' => 'إعادة جدولة المكالمات',
    'LBL_LIST_STATUS'=>'الحالة',
    'LBL_LIST_DATE_MODIFIED'=>'تاريخ التعديل',
    'LBL_LIST_DUE_DATE'=>'تاريخ الاستحقاق',
    'LBL_RESCHEDULED_BY'=>'بواسطة',
);
