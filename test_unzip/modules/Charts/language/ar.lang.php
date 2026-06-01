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
    'ERR_NO_OPPS' => 'يرجى إنشاء بعض الفرص لرؤية المخططات البيانية للفرص.',
    'LBL_ALL_OPPORTUNITIES' => 'إجمالي جميع الفرص هو',
    'LBL_CHART_TYPE' => 'نوع المخطط البياني:',
    'LBL_CREATED_ON' => 'آخر مرة تم عرضه',
    'LBL_CLOSE_DATE_START' => 'التاريخ المتوقع للإغلاق - من:',
    'LBL_CLOSE_DATE_END' => 'التاريخ المتوقع للإغلاق - إلى:',
    'LBL_DATE_END' => 'تاريخ الإنتهاء:',
    'LBL_DATE_RANGE_TO' => 'إلى',
    'LBL_DATE_RANGE' => 'المدى التاريخي هو',
    'LBL_DATE_START' => 'تاريخ البدء:',
    'LBL_EDIT' => 'حرر',
    'LBL_LEAD_SOURCE_BY_OUTCOME_DESC' => 'يعرض المبالغ التراكمية للفرص بحسب مصدر العميل المحتمل المحدد حسب النتيجة للمستخدمين المحددين. تعتمد النتيجة على ما إذا كانت مرحلة المبيعات هي مغلق بنجاح أو مغلق بفشل أو أي قيمة أخرى.',
    'LBL_LEAD_SOURCE_BY_OUTCOME' => 'جميع الفرص بحسب مصدر العملاء المحتملين بحسب النتائج',
    'LBL_LEAD_SOURCE_FORM_DESC' => 'يعرض المبالغ التراكمية للفرص بحسب مصدر العميل المحتمل المحدد للمستخدمين المحددين.',
    'LBL_LEAD_SOURCE_FORM_TITLE' => 'جميع الفرص بحسب مصدر العميل المحتمل',
    'LBL_LEAD_SOURCE_OTHER' => 'أخرى',
    'LBL_LEAD_SOURCES' => 'مصدر العميل المحتمل:',
    'LBL_MODULE_NAME' => 'لوحة التحكم',
    'LBL_MODULE_TITLE' => 'لوحة البيانات: الرئيسية',
    'LBL_MONTH_BY_OUTCOME_DESC' => 'يعرض المبالغ التراكمية للفرص بحسب الشهر بحسب النتيجة للمستخدمين المحددين بحيث يكون تاريخ الإغلاق المتوقع ضمن النطاق الزمني المحدد. تعتمد النتيجة على ما إذا كانت مرحلة المبيعات هي مغلق بنجاح أو مغلق بفشل أو أي قيمة أخرى.',
    'LBL_OPP_SIZE' => 'وحدة احتساب حجم الفرص',
    'LBL_OPP_THOUSANDS' => 'ألف',
    'LBL_OPPS_IN_LEAD_SOURCE' => 'الفرص التي مصدرها هو',
    'LBL_OPPS_IN_STAGE' => ' ومرحلة المبيعات لها هي',
    'LBL_OPPS_OUTCOME' => ' ونتيجتها هي',
    'LBL_OPPS_WORTH' => 'الفرص التي قيمتها',
    'LBL_PIPELINE_FORM_TITLE_DESC' => 'يعرض المبالغ التراكمية حسب مراحل المبيعات المحددة للفرص بحيث يكون تاريخ الإغلاق المتوقع ضمن النطاق الزمني المحدد.',
    'LBL_REFRESH' => 'إعادة تحميل',
    'LBL_ROLLOVER_DETAILS' => 'قم بتمرير شريط للحصول على التفاصيل.',
    'LBL_ROLLOVER_WEDGE_DETAILS' => 'قم بتمرير وتد للحصول على التفاصيل.',
    'LBL_SALES_STAGE_FORM_DESC' => 'يعرض المبالغ التراكمية للفرص بحسب مراحل المبيعات المحددة للمستخدمين المحددين بحيث يكون تاريخ الإغلاق المتوقع ضمن النطاق الزمني المحدد.',
    'LBL_SALES_STAGE_FORM_TITLE' => 'الفرص قيد العمل بحسب مراحل المبيعات',
    'LBL_SALES_STAGES' => 'مراحل المبيعات:',
    'LBL_TOTAL_PIPELINE' => 'إجمالي الفرص قيد العمل هو',
    'LBL_USERS' => 'المستخدمون:',
    'LBL_YEAR_BY_OUTCOME' => 'الفرص قيد العمل بحسب الشهر بحسب النتيجة',
    'LBL_YEAR' => 'السنة:',
    'LNK_NEW_ACCOUNT' => 'إنشاء حساب',
    'LNK_NEW_CALL' => 'سجل بيانات مُكالمة',
    'LNK_NEW_CASE' => 'إنشاء قضية',
    'LNK_NEW_CONTACT' => 'إنشاء جهة إتصال',
    'LNK_NEW_LEAD' => 'إنشاء عميل محتمل',
    'LNK_NEW_MEETING' => 'جدولة اجتماع',
    'LNK_NEW_NOTE' => 'إنشاء ملاحظة أو ملف مرفق',
    'LNK_NEW_OPPORTUNITY' => 'إنشاء فرصة',
    'LNK_NEW_TASK' => 'إنشاء مهمة',
    'NTC_NO_LEGENDS' => '--لا شيء--',

    'LBL_TITLE' => 'العنوان:',
    'LBL_MY_MODULES_USED_SIZE' => 'عدد مرات الدخول',

    'LBL_CHART_PIPELINE_BY_SALES_STAGE' => 'الفرص قيد العمل بحسب مرحلة المبيعات',
    'LBL_CHART_LEAD_SOURCE_BY_OUTCOME' => 'مصادر العملاء المحتملين بحسب النتائج',
    'LBL_CHART_OUTCOME_BY_MONTH' => 'النتائج الشهرية',
    'LBL_CHART_PIPELINE_BY_LEAD_SOURCE' => 'الفرص قيد العمل بحسب مصادر العملاء المحتملين',
    'LBL_CHART_MY_PIPELINE_BY_SALES_STAGE' => 'الفرص قيد العمل الخاصة بي بحسب مرحلة المبيعات',
    'LBL_CHART_MY_MODULES_USED_30_DAYS' => 'وحداتي المستخدمة (خلال آخر ٣٠ يوم)',
);
