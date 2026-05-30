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
    'LBL_MODULE_NAME' => 'أخطاء برمجية',
    'LBL_MODULE_TITLE' => 'متتبع الأخطاء البرمجية: الرئيسية',
    'LBL_MODULE_ID' => 'أخطاء برمجية',
    'LBL_SEARCH_FORM_TITLE' => 'بحث الأخطاء البرمجية',
    'LBL_LIST_FORM_TITLE' => 'الأخطاء البرمجية',
    'LBL_NEW_FORM_TITLE' => 'خطأ جديد جديد',
    'LBL_SUBJECT' => 'الموضوع:',
    'LBL_NUMBER' => 'الرقم:',
    'LBL_STATUS' => 'الحالة:',
    'LBL_PRIORITY' => 'الأولوية:',
    'LBL_DESCRIPTION' => 'الوصف:',
    'LBL_CONTACT_NAME' => 'اسم جهة الاتصال:',
    'LBL_CONTACT_ROLE' => 'الدور:',
    'LBL_LIST_NUMBER' => 'الرقم',
    'LBL_LIST_SUBJECT' => 'الموضوع',
    'LBL_LIST_STATUS' => 'الحالة',
    'LBL_LIST_PRIORITY' => 'الأولوية',
    'LBL_LIST_RESOLUTION' => 'الحل',
    'LBL_LIST_LAST_MODIFIED' => 'آخر تعديل',
    'LBL_INVITEE' => 'جهات الإتصال',
    'LBL_TYPE' => 'النوع:',
    'LBL_LIST_TYPE' => 'نوع',
    'LBL_RESOLUTION' => 'الحل:',
    'LBL_RELEASE' => 'الإصدار:',
    'LNK_NEW_BUG' => 'الإبلاغ عن الخطأ البرمجي',
    'LNK_BUG_LIST' => 'عرض الأخطاء البرمجية',
    'ERR_DELETE_RECORD' => 'يجب أن تُحدد رقم السجل من أجل حذف الخطأ البرمجي.',
    'LBL_LIST_MY_BUGS' => 'الأخطاء البرمجية المُسندة لي',
    'LNK_IMPORT_BUGS' => 'استيراد أخطاء برمجية',
    'LBL_FOUND_IN_RELEASE' => 'وجد في الإصدار:',
    'LBL_FIXED_IN_RELEASE' => 'أُصلح في الإصدار:',
    'LBL_LIST_FIXED_IN_RELEASE' => 'أُصلح في الإصدار',
    'LBL_WORK_LOG' => 'سجل العمل:',
    'LBL_SOURCE' => 'المصدر:',
    'LBL_PRODUCT_CATEGORY' => 'الفئة:',

    'LBL_CREATED_BY' => 'أنشئ بواسطة:',
    'LBL_MODIFIED_BY' => 'آخر تعديل بواسطة:',

    'LBL_LIST_EMAIL_ADDRESS' => 'عنوان البريد الإلكتروني',
    'LBL_LIST_CONTACT_NAME' => 'اسم جهة الإتصال',
    'LBL_LIST_ACCOUNT_NAME' => 'اسم الحساب',
    'LBL_LIST_PHONE' => 'الهاتف',
    'NTC_DELETE_CONFIRMATION' => 'هل تريد حذف جهة الاتصال من هذا الخطأ البرمجي؟',

    'LBL_DEFAULT_SUBPANEL_TITLE' => 'متتبع الأخطاء البرمجية',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'الأنشطة',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'التاريخ',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'جهات الاتصال',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'الحسابات',
    'LBL_CASES_SUBPANEL_TITLE' => 'القضايا',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'مشاريع',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'الوثائق',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'المستخدم المكلف',
    'LBL_ASSIGNED_TO_NAME' => 'أُسند إلى',

    'LBL_BUG_INFORMATION' => 'نظرة شاملة', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

);
