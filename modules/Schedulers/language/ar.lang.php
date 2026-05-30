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
// OOTB Scheduler Job Names:
    'LBL_OOTB_WORKFLOW' => 'مهام سير العمل',
    'LBL_OOTB_REPORTS' => 'تشغيل تقرير توليد المهام المجدولة',
    'LBL_OOTB_IE' => 'التحقق من صناديق البريد الوارد',
    'LBL_OOTB_BOUNCE' => 'تشغيل المعالجة الليلية للبريد الإلكتروني المرتد للحملات',
    'LBL_OOTB_CAMPAIGN' => 'التنفيذ الليلي لحملات البريد الإلكتروني الجماعية',
    'LBL_OOTB_PRUNE' => 'تنظيف قاعدة البيانات بداية الشهر',
    'LBL_OOTB_TRACKER' => 'تنظيف جداول التعقب',
    'LBL_OOTB_SUITEFEEDS' => 'تنظيف جداول موجزات نظام SuiteCRM',
    'LBL_OOTB_LUCENE_INDEX' => 'Perform Lucene Index',
    'LBL_OOTB_OPTIMISE_INDEX' => 'Optimise AOD Index',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'تنفيذ رسائل إشعارات التذكير بالبريد الإلكتروني',
    'LBL_OOTB_CLEANUP_QUEUE' => 'تنظيف قائمة انتظار العمليات',
    'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'إزالة الوثائق من النظام',
    'LBL_OOTB_GOOGLE_CAL_SYNC' => 'مزامنة تقويم جوجل',
    'LBL_OOTB_ELASTIC_INDEX' => 'أداء فهرسه البحث المرن',
    'LBL_OOTB_CAL_ACC_SYNC' => 'Calendar Accounts Sync',

// List Labels
    'LBL_LIST_JOB_INTERVAL' => 'الفاصل الزمني:',
    'LBL_LIST_LIST_ORDER' => 'المجدولات:',
    'LBL_LIST_NAME' => 'المجدول:',
    'LBL_LIST_RANGE' => 'المدى:',
    'LBL_LIST_STATUS' => 'الحالة:',
    'LBL_LIST_TITLE' => 'قائمة الجدولة:',
// human readable:
    'LBL_SUN' => 'الأحد',
    'LBL_MON' => 'الإثنين',
    'LBL_TUE' => 'الثلاثاء',
    'LBL_WED' => 'الأربعاء',
    'LBL_THU' => 'الخميس',
    'LBL_FRI' => 'الجمعة',
    'LBL_SAT' => 'السبت',
    'LBL_ALL' => 'كل يوم',
    'LBL_EVERY' => 'كل',
    'LBL_FROM' => 'من',
    'LBL_ON_THE' => 'في',
    'LBL_RANGE' => 'إلى',
    'LBL_AND' => 'و',
    'LBL_MINUTES' => 'دقائق',
    'LBL_HOUR' => 'ساعات',
    'LBL_HOUR_SING' => 'ساعة',
    'LBL_OFTEN' => 'أكثر ما يمكن.',
    'LBL_MIN_MARK' => 'علامة الدقائق',


// crontabs
    'LBL_MINS' => 'دقيقة',
    'LBL_HOURS' => 'ساعات',
    'LBL_DAY_OF_MONTH' => 'التاريخ',
    'LBL_MONTHS' => 'شهر',
    'LBL_DAY_OF_WEEK' => 'يوم',
    'LBL_CRONTAB_EXAMPLES' => 'يستخدم ما ورد أعلاه علامة التبويب القياسية للعمليات المجدولة (crontab).',
// Labels
    'LBL_ALWAYS' => 'دائما',
    'LBL_CATCH_UP' => 'تنفيذ إذا فشل التنفيذ السابق',
    'LBL_CATCH_UP_WARNING' => 'قم بإلغاء التحديد إذا كانت هذه العملية قد تستغرق أكثر من لحظة للتشغيل.',
    'LBL_DATE_TIME_END' => 'تاريخ ووقت الانتهاء',
    'LBL_DATE_TIME_START' => 'بداية التاريخ والوقت',
    'LBL_INTERVAL' => 'الفاصل الزمني',
    'LBL_JOB' => 'العملية',
    'LBL_JOB_URL' => 'رابط العملية (URL)',
    'LBL_LAST_RUN' => 'آخر تشغيل ناجح',
    'LBL_MODULE_NAME' => 'مجدول نظام SuiteCRM',
    'LBL_MODULE_TITLE' => 'مُجدول المهام آلياً',
    'LBL_NAME' => 'اسم العملية',
    'LBL_NEVER' => 'أبدا',
    'LBL_NEW_FORM_TITLE' => 'جدولة جديدة',
    'LBL_PERENNIAL' => 'دائم',
    'LBL_SEARCH_FORM_TITLE' => 'بحث المجدول',
    'LBL_SCHEDULER' => 'المجدول:',
    'LBL_STATUS' => 'الحالة',
    'LBL_TIME_FROM' => 'نشط من',
    'LBL_TIME_TO' => 'نشط من',
    'LBL_WARN_CURL_TITLE' => 'تحذير cURL:',
    'LBL_WARN_CURL' => 'تحذير:',
    'LBL_WARN_NO_CURL' => 'هذا النظام ليس به مكتبات cURL مجمعة/مفعلة في وحدة PHP (--with-curl=/path/to/curl_library). يرجى الاتصال بمدير النظام الخاص بك لحل هذه المشكلة. بدون وظيفة cURL ، لا يمكن للجدول أن بتوزيع وظائفه.',
    'LBL_BASIC_OPTIONS' => 'الإعداد البسيط',
    'LBL_ADV_OPTIONS' => 'خيارات متقدمة',
    'LBL_TOGGLE_ADV' => 'إظهار الخيارات المتقدمة',
    'LBL_TOGGLE_BASIC' => 'إظهار الخيارات البسيطة',
// Links
    'LNK_LIST_SCHEDULER' => 'مُجدول المهام آلياً',
    'LNK_NEW_SCHEDULER' => 'إنشاء مجدول',
// Messages
    'ERR_CRON_SYNTAX' => 'بناء جملة عملية مجدولة (Cron) غير صالح',
    'NTC_LIST_ORDER' => 'تعيين الترتيب الذي سيظهر به هذا المجدول الزمني في قوائم القوائم المنسدلة',
    'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'لإعداد جدولة Windows',
    'LBL_CRON_INSTRUCTIONS_LINUX' => 'لإعداد نظام جدولة العمليات (Crontab)',
    'LBL_CRON_LINUX_DESC1' => 'من أجل تشغيل مجدولات نظام SuiteCRM، قم بتعديل ملف crontab الخاص بخادم الويب الخاص بك من خلال هذا الأمر:',
    'LBL_CRON_LINUX_DESC2' => '... وإضافة السطر التالي إلى ملف الـ crontab:',
    'LBL_CRON_LINUX_DESC3' => 'يجب عليك القيام بذلك فقط بعد انتهاء التثبيت.',
    'LBL_CRON_WINDOWS_DESC' => 'من أجل تشغيل مجدولات نظام SuiteCRM، قم بإنشاء ملف شفرة مجمعة (batch) لتشغيله باستخدام المهام المجدولة في Windows. يجب أن يتضمن ملف الشفرة المجمعة الأوامر التالية:',
// Subpanels
    'LBL_JOBS_SUBPANEL_TITLE' => 'سجل العمليات',
    'LBL_EXECUTE_TIME' => 'وقت التشغيل',

//jobstrings
    'LBL_REFRESHJOBS' => 'تحديث العمليات',
    'LBL_POLLMONITOREDINBOXES' => 'التحقق من حسابات البريد الوارد',
    'LBL_PERFORMFULLFTSINDEX' => 'نظام فهرس البحث للنص الكامل',

    'LBL_RUNMASSEMAILCAMPAIGN' => 'التنفيذ الليلي لحملات البريد الإلكتروني الجماعية',
    'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'تشغيل المعالجة الليلية للبريد الإلكتروني المرتد للحملات',
    'LBL_PRUNEDATABASE' => 'تنظيف قاعدة البيانات بأول الشهر',
    'LBL_TRIMTRACKER' => 'تنظيف جداول التعقب',
    'LBL_TRIMSUGARFEEDS' => 'تنظيف جداول موجزات نظام SuiteCRM',
    'LBL_SENDEMAILREMINDERS' => 'تنفيذ إرسال رسائل التذكير بالبريد الإلكتروني',
    'LBL_CLEANJOBQUEUE' => 'تنظيف قائمة انتظار العمليات',
    'LBL_REMOVEDOCUMENTSFROMFS' => 'إزالة الوثائق من النظام',

    'LBL_AODOPTIMISEINDEX' => 'Optimise Advanced OpenDiscovery Index',
    'LBL_AODINDEXUNINDEXED' => 'Index unindexed documents',
    'LBL_POLLMONITOREDINBOXESAOP' => 'صناديق الوارد التي تتم مراقبتها في استطلاع البوابة المفتوحة المتقدمة (AOP)',
    'LBL_AORRUNSCHEDULEDREPORTS' => 'تشغيل التقارير المجدولة',
    'LBL_PROCESSAOW_WORKFLOW' => 'معالجة سير عمل AOW',

    'LBL_RUNELASTICSEARCHINDEXERSCHEDULER' => 'مفهرس البحث المرن (Elasticsearch)',
    'LBL_CALENDARSYNCJOB' => 'Sync Calendar Accounts',

    'LBL_SCHEDULER_TIMES' => 'أوقات المجدول',
    'LBL_SYNCGOOGLECALENDAR' => 'مزامنة تقاويم جوجل',
);

global $sugar_config;
