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

    'LBL_SHAREDWEEK' => 'مشاركة في الأسبوع',
    'LBL_SHAREDMONTH' => 'مشترك في الشهر',

    'LBL_MODULE_NAME' => 'التقويم',
    'LBL_MODULE_TITLE' => 'التقويم',
    'LNK_NEW_CALL' => 'جدولة المكالمة',
    'LNK_NEW_MEETING' => 'جدولة اجتماع',
    'LNK_NEW_TASK' => 'إنشاء مهمة',
    'LNK_CALL_LIST' => 'مكالمات',
    'LNK_MEETING_LIST' => 'اجتماعات',
    'LNK_TASK_LIST' => 'المهام',
    'LNK_TASK' => 'مهمة عمل',
    'LNK_TASK_VIEW' => 'عرض المهام',
    'LNK_EVENT' => 'الحدث',
    'LNK_EVENT_VIEW' => 'عرض حدث',
    'LNK_VIEW_CALENDAR' => 'اليوم',
    'LNK_IMPORT_CALLS' => 'استيراد مكالمات',
    'LNK_IMPORT_MEETINGS' => 'استيراد الاجتماعات',
    'LNK_IMPORT_TASKS' => 'استيراد مهام',
    'LBL_MONTH' => 'شهر',
    'LBL_AGENDADAY' => 'يوم',
    'LBL_YEAR' => 'سنة',

    'LBL_AGENDAWEEK' => 'الأسبوع',
    'LBL_PREVIOUS_MONTH' => 'الشهر السابق',
    'LBL_PREVIOUS_DAY' => 'اليوم السابق',
    'LBL_PREVIOUS_YEAR' => 'سنة سابقة',
    'LBL_PREVIOUS_WEEK' => 'أسبوع سابق',
    'LBL_NEXT_MONTH' => 'الشهر التالي',
    'LBL_NEXT_DAY' => 'اليوم التالي',
    'LBL_NEXT_YEAR' => 'السنة التالية',
    'LBL_NEXT_WEEK' => 'الأسبوع التالي',
    'LBL_AM' => 'ص',
    'LBL_PM' => 'م',
    'LBL_SCHEDULED' => 'تم جدولته',
    'LBL_BUSY' => 'مشغول',
    'LBL_CONFLICT' => 'تعارض',
    'LBL_USER_CALENDARS' => 'رُزنامات المُستخدم',
    'LBL_SHARED' => 'المشتركة',
    'LBL_PREVIOUS_SHARED' => 'السابق',
    'LBL_NEXT_SHARED' => 'التالي',
    'LBL_SHARED_CAL_TITLE' => 'التقويم المشترك',
    'LBL_USERS' => 'المُستخدمون',
    'LBL_REFRESH' => 'إعادة تحميل',
    'LBL_EDIT_USERLIST' => 'قائمة المستخدمين',
    'LBL_SELECT_USERS' => 'تحديد المستخدمين لعرض التقويم',
    'LBL_FILTER_BY_TEAM' => 'فلترة المستخدم بواسطة الفريق:',
    'LBL_ASSIGNED_TO_NAME' => 'أُسند إلى',
    'LBL_DATE' => 'تاريخ ووقت البداية',
    'LBL_CREATE_MEETING' => 'جدولة اجتماع',
    'LBL_CREATE_CALL' => 'سجل بيانات مُكالمة',
    'LBL_HOURS_ABBREV' => 'س',
    'LBL_MINS_ABBREV' => 'د',


    'LBL_YES' => 'نعم',
    'LBL_NO' => 'لا',
    'LBL_SETTINGS' => 'إعدادات',
    'LBL_CREATE_NEW_RECORD' => 'إنشاء نشاط',
    'LBL_LOADING' => 'جاري التحميل...',
    'LBL_SAVING' => 'حفظ......',
    'LBL_SENDING_INVITES' => 'حفظ وإرسال دعوات.....',
    'LBL_CONFIRM_REMOVE' => 'هل أنت متأكد من رغبتك بحذف السجل؟',
    'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'متأكد من رغبتك بإزالة السجلات المتكررة؟',
    'LBL_EDIT_RECORD' => 'تحرير النشاط',
    'LBL_ERROR_SAVING' => 'حدث خطأ أثناء الحفظ',
    'LBL_ERROR_LOADING' => 'حدث خطأ أثناء التحميل',
    'LBL_GOTO_DATE' => 'الانتقال للتاريخ',
    'NOTICE_DURATION_TIME' => 'يجب أن تكون المدة الزمنية أكبر من ٠',
    'LBL_STYLE_BASIC' => 'أساسي', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_STYLE_ADVANCED' => 'متقدم', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    'LBL_NO_USER' => 'لا يتطاق مع حقل: المُسند إليه',
    'LBL_SUBJECT' => 'الموضوع',
    'LBL_DURATION' => 'المدة',
    'LBL_STATUS' => 'الحالة',
    'LBL_PRIORITY' => 'الأولوية',

    'LBL_SETTINGS_TITLE' => 'إعدادات',
    'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'عرض الوقت بتصميم اليوم والأسبوع:',
    'LBL_SETTINGS_TIME_STARTS' => 'وقت البدء:',
    'LBL_SETTINGS_TIME_ENDS' => 'نهاية الوقت:',
    'LBL_SETTINGS_CALLS_SHOW' => 'إظهار المكالمات:',
    'LBL_SETTINGS_TASKS_SHOW' => 'إظهار المهام:',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'إظهار الاجتماعات والمكالمات والمهام المكتملة:',
    'LBL_SETTINGS_DISPLAY_SHARED_CALENDAR_SEPARATE' => 'شارك التقويم بشكل منفصل:',

    'LBL_SAVE_BUTTON' => 'حفظ',
    'LBL_DELETE_BUTTON' => 'حذف',
    'LBL_APPLY_BUTTON' => 'تطبيق',
    'LBL_SEND_INVITES' => 'احفظ وأرسل دعوة',
    'LBL_CANCEL_BUTTON' => 'إلغاء',
    'LBL_CLOSE_BUTTON' => 'إغلاق',

    'LBL_GENERAL_TAB' => 'تفاصيل',
    'LBL_PARTICIPANTS_TAB' => 'المدعوون',
    'LBL_REPEAT_TAB' => 'التكرار',

    'LBL_REPEAT_TYPE' => 'كرر',
    'LBL_REPEAT_INTERVAL' => 'كل',
    'LBL_REPEAT_END' => 'إنهاء',
    'LBL_REPEAT_END_AFTER' => 'بعد',
    'LBL_REPEAT_OCCURRENCES' => 'التكرار',
    'LBL_REPEAT_END_BY' => 'عند',
    'LBL_REPEAT_DOW' => 'في',
    'LBL_REPEAT_UNTIL' => 'كرر حتى',
    'LBL_REPEAT_COUNT' => 'عدد مرات التكرار',
    'LBL_REPEAT_LIMIT_ERROR' => 'طلبك سيُنشئ أكثر من $limit اجتماع.',

    'LBL_EDIT_ALL_RECURRENCES' => 'تعديل كل التكرارات',
    'LBL_REMOVE_ALL_RECURRENCES' => 'حذف كل التكرارات',

    'LBL_DATE_END_ERROR' => 'تاريخ الانتهاء قبل تاريخ البدء',
    'ERR_YEAR_BETWEEN' => 'آسف، لالروزنامة لايمكنها عرض السنة التي طلبتها <br>العام يجب أن يكون بين عامي ١٩٧٠ و ٢٠٣٧',
    'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: غير معرف لهذا العرض',
    'LBL_NO_ITEMS_MOBILE' => 'تم مسح تقويمك لهذا الأسبوع.',
    'LBL_GENERAL_SETTINGS' => 'إعدادات عامة',
    'LBL_COLOR_SETTINGS' => 'إعدادات الألوان',
    'LBL_MODULE' => 'نظام فرعي',
    'LBL_BODY' => 'الهيئة',
    'LBL_BORDER' => 'الحدود',
    'LBL_TEXT' => 'نص',
);


$mod_list_strings = array(
    'dom_cal_weekdays' =>
        array(
            '0' => "الأحد",
            '1' => "الاثنين",
            '2' => "الثلاثاء",
            '3' => "الأربعاء",
            '4' => "الخميس",
            '5' => "الجمعة",
            '6' => "السبت",
        ),
    'dom_cal_weekdays_long' =>
        array(
            '0' => "الأحد",
            '1' => "الإثنين",
            '2' => "الثلاثاء",
            '3' => "الأربعاء",
            '4' => "الخميس",
            '5' => "الجمعة",
            '6' => "السبت",
        ),
    'dom_cal_month' =>
        array(
            '0' => "",
            '1' => "يناير",
            '2' => "فبراير",
            '3' => "مارس",
            '4' => "أبريل",
            '5' => "مايو",
            '6' => "يونيو",
            '7' => "يوليو",
            '8' => "أغسطس",
            '9' => "سبتمبر",
            '10' => "أكتوبر",
            '11' => "نوفمبر",
            '12' => "ديسمبر",
        ),
    'dom_cal_month_long' =>
        array(
            '0' => "",
            '1' => "يناير",
            '2' => "فبراير",
            '3' => "مارس",
            '4' => "أبريل",
            '5' => "مايو",
            '6' => "يونيو",
            '7' => "يوليو",
            '8' => "أغسطس",
            '9' => "سبتمبر",
            '10' => "أكتوبر",
            '11' => "نوفمبر",
            '12' => "ديسمبر",
        ),
);
