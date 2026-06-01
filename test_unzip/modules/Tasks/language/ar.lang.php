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
    'LBL_MODULE_NAME' => 'المهام',
    'LBL_MODULE_TITLE' => ' المهام: الرئيسية',
    'LBL_SEARCH_FORM_TITLE' => ' بحث المهام',
    'LBL_LIST_FORM_TITLE' => ' قائمة المهام',
    'LBL_NEW_FORM_TITLE' => ' إنشاء مهمة',
    'LBL_LIST_CLOSE' => 'إغلاق',
    'LBL_LIST_SUBJECT' => 'الموضوع',
    'LBL_LIST_CONTACT' => 'جهة الاتصال',
    'LBL_LIST_PRIORITY' => 'الأولوية',
    'LBL_LIST_RELATED_TO' => 'متعلق بـ',
    'LBL_LIST_DUE_DATE' => 'تاريخ الاستحقاق',
    'LBL_LIST_DUE_TIME' => 'وقت الاستحقاق',
    'LBL_SUBJECT' => 'الموضوع:',
    'LBL_STATUS' => 'الحالة:',
    'LBL_DUE_DATE' => 'تاريخ الاستحقاق:',
    'LBL_DUE_TIME' => 'وقت الاستحقاق:',
    'LBL_PRIORITY' => 'الأولوية:',
    'LBL_DUE_DATE_AND_TIME' => 'تاريخ ووقت الاستحقاق:',
    'LBL_START_DATE_AND_TIME' => 'تاريخ ووقت البداية:',
    'LBL_START_DATE' => 'تاريخ البدء:',
    'LBL_LIST_START_DATE' => 'تاريخ البدء',
    'LBL_START_TIME' => 'وقت البدء:',
    'DATE_FORMAT' => '(yyyy-mm-dd)',
    'LBL_NONE' => 'لاشئ',
    'LBL_CONTACT' => 'جهة الإتصال:',
    'LBL_EMAIL_ADDRESS' => 'عنوان البريد الإلكتروني:',
    'LBL_PHONE' => 'هاتف:',
    'LBL_EMAIL' => 'عنوان البريد الإلكتروني:',
    'LBL_DESCRIPTION' => 'الوصف:',
    'LBL_NAME' => 'الاسم:',
    'LBL_CONTACT_NAME' => 'اسم جهة الاتصال ',
    'LBL_LIST_STATUS' => 'الحالة',
    'LBL_DATE_DUE_FLAG' => 'لا يوجد تاريخ استحقاق',
    'LBL_DATE_START_FLAG' => 'لا يوجد تاريخ بدء',
    'LBL_LIST_MY_TASKS' => 'مهامي المفتوحة',
    'LNK_NEW_TASK' => 'إنشاء مهمة',
    'LNK_TASK_LIST' => 'عرض المهام',
    'LNK_IMPORT_TASKS' => 'استيراد مهام',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'المستخدم المكلف',
    'LBL_ASSIGNED_TO_NAME' => 'أُسند إلى:',
    'LBL_LIST_DATE_MODIFIED' => 'تاريخ التعديل',
    'LBL_CONTACT_ID' => 'معرف جهة الاتصال:',
    'LBL_PARENT_ID' => 'معرف الأصل:',
    'LBL_CONTACT_PHONE' => 'هاتف جهة الاتصال:',
    'LBL_PARENT_TYPE' => 'نوع الأصل:',
    'LBL_TASK_INFORMATION' => 'نظرة شاملة على المهام', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EDITLAYOUT' => 'تحرير التصميم' /*for 508 compliance fix*/,
    'LBL_HISTORY_SUBPANEL_TITLE' => 'ملاحظات',
    //For export labels
    'LBL_DATE_DUE' => 'تاريخ الاستحقاق',
    'LBL_RELATED_TO' => 'يتعلق بـ:',
);
