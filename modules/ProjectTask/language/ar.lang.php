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
    'LBL_MODULE_NAME' => 'مهام المشروع',
    'LBL_MODULE_TITLE' => 'مهام المشاريع: الرئيسية',

    'LBL_ID' => 'المعرف:',
    'LBL_PROJECT_TASK_ID' => 'معرف مهمة المشروع:',
    'LBL_PROJECT_ID' => 'معرف المشروع:',
    'LBL_DATE_ENTERED' => 'تاريخ الإنشاء:',
    'LBL_DATE_MODIFIED' => 'تاريخ التعديل:',
    'LBL_ASSIGNED_USER_ID' => 'أُسند إلى:',
    'LBL_MODIFIED_USER_ID' => 'معرف المستخدم المعدل:',
    'LBL_CREATED_BY' => 'أنشئ بواسطة:',
    'LBL_NAME' => 'الاسم:',
    'LBL_STATUS' => 'الحالة:',
    'LBL_DATE_DUE' => 'تاريخ الاستحقاق:',
    'LBL_TIME_DUE' => 'وقت الاستحقاق:',
    'LBL_PREDECESSORS' => 'المهمة السابقة',
    'LBL_DATE_START' => 'تاريخ البدء:',
    'LBL_DATE_FINISH' => 'تاريخ الإنتهاء:',
    'LBL_TIME_START' => 'وقت البدء:',
    'LBL_TIME_FINISH' => 'وقت الإنتهاء:',
    'LBL_DURATION' => 'المدة:',
    'LBL_DURATION_UNIT' => 'وحدة المدة:',
    'LBL_ACTUAL_DURATION' => 'المدة الفعلية:',
    'LBL_PARENT_ID' => 'المشروع:',
    'LBL_PARENT_TASK_ID' => 'معرف المهمة الأصل:',
    'LBL_PERCENT_COMPLETE' => '٪ الإنجاز',
    'LBL_PRIORITY' => 'الأولوية:',
    'LBL_DESCRIPTION' => 'ملاحظات:',
    'LBL_ORDER_NUMBER' => 'الترتيب:',
    'LBL_TASK_NUMBER' => 'رقم المهمة:',
    'LBL_TASK_ID' => 'معرف المهمة:',
    'LBL_MILESTONE_FLAG' => 'معلم مهم:',
    'LBL_ESTIMATED_EFFORT' => 'الجهد المقدر (ساعات):',
    'LBL_ACTUAL_EFFORT' => 'الجهد الفعلي (ساعات):',
    'LBL_UTILIZATION' => 'الاستغلال (٪):',
    'LBL_DELETED' => 'محذوف:',
    'LBL_IMPORT_PROJECT_TASKS' => 'استيراد مهام المشروع',

    'LBL_LIST_NAME' => 'الاسم',
    'LBL_LIST_PARENT_NAME' => 'مشروع',
    'LBL_SEARCH_FORM_TITLE' => 'Project Task Search',
    'LBL_LIST_PERCENT_COMPLETE' => '٪ الإنجاز',
    'LBL_LIST_STATUS' => 'الحالة',
    'LBL_LIST_ASSIGNED_USER_ID' => 'أسند إلى',
    'LBL_LIST_DATE_DUE' => 'تاريخ الاستحقاق',
    'LBL_LIST_PRIORITY' => 'الأولوية',
    'LBL_LIST_CLOSE' => 'إغلاق',
    'LBL_PROJECT_NAME' => 'اسم المشروع',
    'LBL_LIST_FORM_TITLE' => 'Project Task List',

    'LNK_NEW_PROJECT' => 'إنشاء مشروع',
    'LNK_PROJECT_LIST' => 'قائمة المشاريع',
    'LNK_NEW_PROJECT_TASK' => 'إنشاء مهمة مشروع',
    'LNK_PROJECT_TASK_LIST' => 'مهام المشروع',

    'LBL_LIST_MY_PROJECT_TASKS' => 'مهام المشروع الخاصة بي',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'مهام المشروع',
    'LBL_NEW_FORM_TITLE' => 'مهمة مشروع جديدة',

    'LBL_HISTORY_TITLE' => 'التاريخ',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'الأنشطة',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'التاريخ',

    'LBL_ASSIGNED_USER_NAME' => 'أسند إلى',
    'LBL_PARENT_NAME' => 'اسم المشروع',
    'LBL_EDITLAYOUT' => 'تحرير التصميم' /*for 508 compliance fix*/,
    'LBL_PANEL_TIMELINE' => 'الخط الزمني',

    'LBL_SUBTASK' => 'مهمة فرعية',
    'LBL_LAG' => 'التأخر',
    'LBL_DAYS' => 'أيام',
    'LBL_HOURS' => 'ساعات',
    'LBL_RELATIONSHIP_TYPE' => 'نوع العلاقة',

    'LBL_ASCENDING' => 'تصاعدي',
    'LBL_DESCENDING' => 'تنازلي',
);
