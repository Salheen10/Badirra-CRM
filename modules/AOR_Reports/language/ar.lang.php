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
    'LBL_ASSIGNED_TO_NAME' => 'أُسند إلى',
    'LBL_ID' => 'المُعرف',
    'LBL_DATE_ENTERED' => 'تاريخ الإنشاء',
    'LBL_DATE_MODIFIED' => 'تاريخ التعديل',
    'LBL_MODIFIED' => 'عُدل بواسطة',
    'LBL_MODIFIED_NAME' => 'قام بالتعديل',
    'LBL_CREATED' => 'أنشئ بواسطة',
    'LBL_DESCRIPTION' => 'الوصف',
    'LBL_DELETED' => 'محذوف',
    'LBL_NAME' => 'الاسم',
    'LBL_CREATED_USER' => 'تم الإنشاء بواسطة المستخدم',
    'LBL_MODIFIED_USER' => 'عُدل بواسطة المستخدم',
    'LBL_LIST_NAME' => 'الاسم',
    'LBL_EDIT_BUTTON' => 'حرر',
    'LBL_REMOVE' => 'إزالة',
    'LBL_LIST_FORM_TITLE' => 'قائمة التقارير',
    'LBL_MODULE_NAME' => 'التقارير',
    'LBL_MODULE_TITLE' => 'التقارير',
    'LBL_HOMEPAGE_TITLE' => 'تقاريري',
    'LNK_NEW_RECORD' => 'إنشاء تقرير',
    'LNK_LIST' => 'عرض التقارير',
    'LBL_SEARCH_FORM_TITLE' => 'بحث التقارير',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'عرض التاريخ',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'الأنشطة',
    'LBL_NEW_FORM_TITLE' => 'تقارير جديدة',
    'LBL_REPORT_MODULE' => 'وحدة التقارير',
    'LBL_GRAPHS_PER_ROW' => 'المخططات البيانية لكل صف',
    'LBL_FIELD_LINES' => 'عرض الحقول',
    'LBL_ADD_FIELD' => 'إضافة حقل',
    'LBL_CONDITION_LINES' => 'الشروط',
    'LBL_ADD_CONDITION' => 'إضافة شرط',
    'LBL_EXPORT' => 'تصدير',
    'LBL_DOWNLOAD_PDF' => 'تنزيل PDF',
    'LBL_ADD_TO_PROSPECT_LIST' => 'إضافة إلى قائمة المستهدفين',
    'LBL_AOR_MODULETREE_SUBPANEL_TITLE' => 'شجرة الوحدة',
    'LBL_AOR_FIELDS_SUBPANEL_TITLE' => 'الحقول',
    'LBL_AOR_CONDITIONS_SUBPANEL_TITLE' => 'الشروط',
    'LBL_TOTAL' => 'المجموع',
    'LBL_AOR_CHARTS_SUBPANEL_TITLE' => 'المخططات البيانية',
    'LBL_ADD_CHART' => 'إضافة مخطط بياني',
    'LBL_ADD_PARENTHESIS' => 'إسقاط الأقواس',
    'LBL_CHART_TITLE' => 'العنوان',
    'LBL_CHART_TYPE' => 'النوع',
    'LBL_CHART_X_FIELD' => 'المحور س',
    'LBL_CHART_Y_FIELD' => 'المحور ص',
    'LBL_AOR_REPORTS_DASHLET' => 'التقارير',
    'LBL_DASHLET_TITLE' => 'العنوان',
    'LBL_DASHLET_REPORT' => 'التقرير',
    'LBL_DASHLET_CHOOSE_REPORT' => 'يرجى اختيار تقرير',
    'LBL_DASHLET_SAVE' => 'حفظ',
    'LBL_DASHLET_CHARTS' => 'المخططات البيانية',
    'LBL_DASHLET_ONLY_CHARTS' => 'إظهار المخططات البيانية فقط',
    'LBL_UPDATE_PARAMETERS' => 'تحذيث',
    'LBL_PARAMETERS' => 'المعطيات',
    'LBL_TOOLTIP_DRAG_DROP_ELEMS' => 'سحب وإسقاط العناصر في منطقة الحقول أو الشروط',
    'LBL_MAIN_GROUPS' => 'المجموعة الرئيسية:',
    'LBL_CHAR_UNNAMED_DEFAULT_TITLE' => 'مخطط بياني غير مسمى',
    'LBL_REPORT' => 'التقرير',
);
