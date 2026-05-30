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
    'LBL_ASSIGNED_TO_ID' => 'معرف المستخدم المُكلف',
    'LBL_ASSIGNED_TO_NAME' => 'مدير المشروع',
    'LBL_ID' => 'المُعرف',
    'LBL_DATE_ENTERED' => 'تاريخ الإنشاء',
    'LBL_DATE_MODIFIED' => 'تاريخ التعديل',
    'LBL_MODIFIED' => 'عُدل بواسطة',
    'LBL_MODIFIED_NAME' => 'قام بالتعديل',
    'LBL_CREATED' => 'أنشئ بواسطة',
    'LBL_DELETED' => 'محذوف',
    'LBL_NAME' => 'اسم القالب',
    'LBL_CREATED_USER' => 'تم الإنشاء بواسطة المستخدم',
    'LBL_MODIFIED_USER' => 'عُدل بواسطة المستخدم',
    'LBL_LIST_NAME' => 'الاسم',
    'LBL_EDIT_BUTTON' => 'حرر',
    'LBL_REMOVE' => 'إزالة',
    'LBL_LIST_FORM_TITLE' => 'قائمة قوالب المشاريع',
    'LBL_MODULE_NAME' => 'قوالب المشاريع',
    'LBL_MODULE_TITLE' => 'قوالب المشاريع',
    'LBL_HOMEPAGE_TITLE' => 'قوالب المشاريع الخاص بي',
    'LNK_NEW_RECORD' => 'إنشاء قوالب مشاريع',
    'LNK_LIST' => 'عرض قوالب المشاريع',
    'LNK_IMPORT_AM_PROJECTTEMPLATES' => 'استيراد قوالب المشاريع',
    'LBL_SEARCH_FORM_TITLE' => 'بحث قوالب المشاريع',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'عرض التاريخ',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'الأنشطة',
    'LBL_NEW_FORM_TITLE' => 'قوالب مشاريع جديدة',
    'LBL_STATUS' => 'الحالة',
    'LBL_PRIORITY' => 'الأولوية',
    'LBL_PROJECT_NAME' => 'اسم المشروع',
    'LBL_START_DATE' => 'تاريخ البدء',
    'LBL_CREATE_PROJECT_TITLE' => 'إنشاء مشروع جديد من هذا القالب؟',
    'LBL_AM_TASKTEMPLATES_AM_PROJECTTEMPLATES_FROM_AM_TASKTEMPLATES_TITLE' => 'قوالب المهام',
    'LBL_AM_PROJECTTEMPLATES_USERS_1_TITLE' => 'المستخدمون',
    'LBL_AM_PROJECTTEMPLATES_CONTACTS_1_TITLE' => 'جهات الاتصال',
    'LBL_AM_PROJECTTEMPLATES_RESOURCES_TITLE' => 'اختر الموارد',
    'LBL_NEW_PROJECT_CREATED' => 'تم إنشاء مشروع جديد',
    'LBL_NEW_PROJECT' => 'إنشاء مشروع',
    'LBL_CANCEL_PROJECT' => 'إلغاء',

    'LBL_SUBTASK' => 'مهمة عمل',
    'LBL_MILESTONE_FLAG' => 'معلم مهم',
    'LBL_RELATIONSHIP_TYPE' => 'نوع العلاقة',
    'LBL_LAG' => 'التأخر',
    'LBL_DAYS' => 'أيام',
    'LBL_HOURS' => 'ساعات',
    'LBL_MONTHS' => 'شهور',

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'مهام المشروع',
    'LBL_VIEW_GANTT_TITLE' => 'عرض مخطط جانت (Gantt)',
    'LBL_VIEW_GANTT_DURATION' => 'المدة',
    'LBL_TASK_TITLE' => 'تحرير المهمة',
    'LBL_DURATION_TITLE' => 'تحرير المدة',
    'LBL_DESCRIPTION' => 'ملاحظات',
    'LBL_ASSIGNED_USER_ID' => 'أُسند إلى:',

    'LBL_LIST_ASSIGNED_USER' => 'مدير المشروع',
    'LBL_UNASSIGNED' => 'غير مُسند',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'الموارد',
    'LBL_DELETE_TASK' => 'حذف المهمة',
    'LBL_VIEW_DETAIL' => 'عرض التفاصيل',
    'LBL_ADD_NEW_TASK' => 'إضافة مهمة جديدة',
    'LBL_ASSIGNED_USER_NAME' => 'مدير المشروع:',

    'LBL_TASK_ID' => 'المُعرف',
    'LBL_TASK_NAME' => 'اسم المهمة',
    'LBL_DURATION' => 'المدة',
    'LBL_ACTUAL_DURATION' => 'المدة الفعلية',
    'LBL_START' => 'ابدأ',
    'LBL_FINISH' => 'إنتهى',
    'LBL_PREDECESSORS' => 'المهام السابقة',
    'LBL_PERCENT_COMPLETE' => '٪ الإنجاز',
    'LBL_EDIT_TASK_PROPERTIES' => 'تحرير خصائص المهمة.',

    'LBL_OVERRIDE_BUSINESS_HOURS' => 'مراعات أيام العمل',
    'LBL_COPY_ALL_TASKS' => 'نسخ كافة المهام بالموارد',
    'LBL_COPY_SEL_TASKS' => 'نسخ المهام المحددة بالموارد',
    'LBL_TOOLTIP_TITLE' => 'تلميح',
    'LBL_TOOLTIP_TEXT' => 'نسخ كافة المهام مع المستخدمين المكلفين',

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
    'LBL_NONE' => 'لاشئ',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',

    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'قوالب المشروع: المشروع من عنوان المشروع',


);
