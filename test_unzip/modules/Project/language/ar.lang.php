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
    'LBL_MODULE_NAME' => 'المشروع',
    'LBL_MODULE_TITLE' => 'المشاريع: الرئيسية',
    'LBL_SEARCH_FORM_TITLE' => 'بحث المشاريع',
    'LBL_LIST_FORM_TITLE' => 'قائمة المشاريع',
    'LBL_HISTORY_TITLE' => 'التاريخ',
    'LBL_ID' => 'المعرف:',
    'LBL_DATE_ENTERED' => 'تاريخ الإنشاء:',
    'LBL_DATE_MODIFIED' => 'تاريخ التعديل:',
    'LBL_ASSIGNED_USER_ID' => 'أُسند إلى:',
    'LBL_ASSIGNED_USER_NAME' => 'مدير المشروع:',
    'LBL_MODIFIED_USER_ID' => 'معرف المستخدم المعدل:',
    'LBL_CREATED_BY' => 'أنشئ بواسطة:',
    'LBL_NAME' => 'الاسم:',
    'LBL_DESCRIPTION' => 'الوصف:',
    'LBL_DELETED' => 'محذوف:',
    'LBL_DATE' => 'التاريخ:',
    'LBL_DATE_START' => 'تاريخ البدء:',
    'LBL_DATE_END' => 'تاريخ الإنتهاء:',
    'LBL_PRIORITY' => 'الأولوية:',
    'LBL_LIST_NAME' => 'الاسم',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'مجموع الجهد المقدر (ساعة):',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'مجموع الجهد الفعلي (ساعة):',
    'LBL_LIST_END_DATE' => 'تاريخ الانتهاء',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'المشاريع',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'مهام المشروع',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'الفرص',
    'LBL_PROJECT_PREDECESSOR_NONE' => 'لا شئ',
    'LBL_ALL_PROJECTS' => 'كل المشاريع',
    'LBL_ALL_USERS' => 'كل المستخدمين',
    'LBL_ALL_CONTACTS' => 'كل جهات الاتصال',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'مشروع جديد',
    'LNK_NEW_PROJECT' => 'إنشاء مشروع',
    'LNK_PROJECT_LIST' => 'عرض قائمة المشاريع',
    'LNK_NEW_PROJECT_TASK' => 'إنشاء مهمة مشروع',
    'LNK_PROJECT_TASK_LIST' => 'عرض مهام المشروع',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'المشاريع',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'الأنشطة',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'التاريخ',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'جهات الاتصال',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'الحسابات',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'الفرص',
    'LBL_CASES_SUBPANEL_TITLE' => 'القضايا',
    'LBL_BUGS_SUBPANEL_TITLE' => 'أخطاء',
    'LBL_TASK_ID' => 'المُعرف',
    'LBL_TASK_NAME' => 'اسم المهمة',
    'LBL_DURATION' => 'المدة',
    'LBL_ACTUAL_DURATION' => 'المدة الفعلية',
    'LBL_START' => 'ابدأ',
    'LBL_FINISH' => 'إنتهى',
    'LBL_PREDECESSORS' => 'المهام السابقة',
    'LBL_PERCENT_COMPLETE' => '٪ الإنجاز',
    'LBL_MORE' => 'المزيد...',
    'LBL_OPPORTUNITIES' => 'الفرص',
    'LBL_NEXT_WEEK' => 'التالي',
    'LBL_PROJECT_INFORMATION' => 'نظرة شاملة للمشروع',
    'LBL_EDITLAYOUT' => 'تحرير التصميم' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'مهام المشروع',
    'LBL_VIEW_GANTT_TITLE' => 'عرض مخطط جانت (Gantt)',
    'LBL_VIEW_GANTT_DURATION' => 'المدة',
    'LBL_TASK_TITLE' => 'تحرير المهمة',
    'LBL_DURATION_TITLE' => 'تحرير المدة',
    'LBL_LAG' => 'التأخر',
    'LBL_DAYS' => 'أيام',
    'LBL_HOURS' => 'ساعات',
    'LBL_MONTHS' => 'شهور',
    'LBL_SUBTASK' => 'مهمة عمل',
    'LBL_MILESTONE_FLAG' => 'معلم مهم',
    'LBL_ADD_NEW_TASK' => 'إضافة مهمة جديدة',
    'LBL_DELETE_TASK' => 'حذف المهمة',
    'LBL_EDIT_TASK_PROPERTIES' => 'تحرير خصائص المهمة.',
    'LBL_PARENT_TASK_ID' => 'معرف أصل المهمة:',
    'LBL_RESOURCE_CHART' => 'تقويم الموظف',
    'LBL_RELATIONSHIP_TYPE' => 'نوع العلاقة',
    'LBL_ASSIGNED_TO' => 'مدير المشروع',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'قالب المشروع',
    'LBL_STATUS' => 'الحالة:',
    'LBL_LIST_ASSIGNED_USER_ID' => 'مدير المشروع',
    'LBL_TOOLTIP_PROJECT_NAME' => 'المشروع',
    'LBL_TOOLTIP_TASK_NAME' => 'اسم المهمة',
    'LBL_TOOLTIP_TITLE' => 'المهام لهذا اليوم',
    'LBL_TOOLTIP_TASK_DURATION' => 'المدة',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'المورد هو مستخدم',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'المورد هو جهة اتصال',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'الشهر السابق',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'الشهر التالي',
    'LBL_RESOURCE_CHART_WEEK' => 'أسبوع',
    'LBL_RESOURCE_CHART_DAY' => 'يوم',
    'LBL_RESOURCE_CHART_WARNING' => 'لم يتم إسناد موارد لهذا المشروع.',
    'LBL_PROJECT_DELETE_MSG' => 'هل أنت متأكد من أنك تريد حذف هذا المشروع وكل المهام المرتبطة به؟',
    'LBL_LIST_MY_PROJECT' => 'مشاريعي',
    'LBL_LIST_ASSIGNED_USER' => 'مدير المشروع',
    'LBL_UNASSIGNED' => 'غير مُسند',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'الموارد',

    'LBL_EMAIL' => 'بريد إلكتروني',
    'LBL_PHONE' => 'هاتف المكتب:',
    'LBL_ADD_BUTTON' => 'إضافة',
    'LBL_ADD_INVITEE' => 'إضافة مورد',
    'LBL_FIRST_NAME' => 'الاسم الأول',
    'LBL_LAST_NAME' => 'الاسم الأخير',
    'LBL_SEARCH_BUTTON' => 'بحث',
    'LBL_EMPTY_SEARCH_RESULT' => 'آسف، لم يتم العثور على نتائج. فضلاً أنشئ المدعو أدناه.',
    'LBL_CREATE_INVITEE' => 'إنشاء مورد',
    'LBL_CREATE_CONTACT' => 'كجهة اتصال',
    'LBL_CREATE_AND_ADD' => 'إنشاء وإضافة',
    'LBL_CANCEL_CREATE_INVITEE' => 'إلغاء',
    'LBL_NO_ACCESS' => 'ليس لديك صلاحية لإنشاء $module',
    'LBL_SCHEDULING_FORM_TITLE' => 'قائمة الموارد',
    'LBL_REMOVE' => 'إزالة',
    'LBL_VIEW_DETAIL' => 'عرض التفاصيل',
    'LBL_OVERRIDE_BUSINESS_HOURS' => 'فكر بمقدار أيام العمل',

    'LBL_IMPORT_PROJECTS' => 'استيراد المشاريع',

    'LBL_PROJECTS_SEARCH' => 'بحث المشاريع',
    'LBL_USERS_SEARCH' => 'بحث المستخدمين',
    'LBL_CONTACTS_SEARCH' => 'اختر جهات الاتصال',
    'LBL_RESOURCE_CHART_SEARCH_BUTTON' => 'بحث',

    'LBL_CHART_TYPE' => 'النوع',
    'LBL_CHART_WEEKLY' => 'أسبوعي',
    'LBL_CHART_MONTHLY' => 'شهرى',
    'LBL_CHART_QUARTERLY' => 'ربع سنوي',

    'LBL_RESOURCE_CHART_MONTH' => 'الشهر',
    'LBL_RESOURCE_CHART_QUARTER' => 'الربع',

    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'جهات اتصال المشروع من عنوان جهات الاتصال',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'قوالب المشروع: المشروع من عنوان المشروع',
    'LBL_AOS_QUOTES_PROJECT' => 'عروض الأسعار: المشروع',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',


    'LBL_ASCENDING' => 'تصاعدي',
    'LBL_DESCENDING' => 'تنازلي',
);
