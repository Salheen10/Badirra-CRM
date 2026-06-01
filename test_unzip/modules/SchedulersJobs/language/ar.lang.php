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
    'LBL_NAME' => 'اسم العملية',
    'LBL_EXECUTE_TIME' => 'وقت التشغيل',
    'LBL_SCHEDULER_ID' => 'المجدول',
    'LBL_STATUS' => 'حالة العملية',
    'LBL_RESOLUTION' => 'النتيجة',
    'LBL_MESSAGE' => 'الرسائل',
    'LBL_DATA' => 'بيانات العملية',
    'LBL_REQUEUE' => 'إعادة المحاولة عند الفشل',
    'LBL_RETRY_COUNT' => 'الحد الأقصى للمحاولات',
    'LBL_FAIL_COUNT' => 'حالات الفشل',
    'LBL_INTERVAL' => 'الحد الأدنى للفاصل الزمني بين المحاولات',
    'LBL_CLIENT' => 'التطبيق المالك',
    'LBL_PERCENT' => 'نسبة الإنجاز',
// Errors
    'ERR_CALL' => "لا يمكن طلب الدالة: %s",
    'ERR_CURL' => "دعم CURL عير متوفر - لا يمكن تشغيل عمليات URL",
    'ERR_FAILED' => "فشل غير متوقع، الرجاء التحقق من سجلات PHP و ملف suitecrm.log",
    'ERR_PHP' => "%s [%d]: %s في %s في السطر %d",
    'ERR_NOUSER' => "لا يوجد معرف مستخدم محدد للعملية",
    'ERR_NOSUCHUSER' => "لم يتم العثور على معرف المستخدم %s",
    'ERR_JOBTYPE' => "نوع عملية غير معروف: %s",
    'ERR_TIMEOUT' => "فشل إجباري لانتهاء المهلة",
    'ERR_JOB_FAILED_VERBOSE' => 'العمليات %1$s (%2$s) فشلت في مجدول العمليات (CRON)',
);
