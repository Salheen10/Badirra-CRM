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
    'LBL_MODULE_NAME' => 'إصدارات',
    'LBL_MODULE_TITLE' => 'الإصدارات: الرئيسية',
    'LBL_SEARCH_FORM_TITLE' => 'بحث الإصدارات',
    'LBL_LIST_FORM_TITLE' => 'قائمة الإصدارات',
    'LBL_NEW_FORM_TITLE' => 'إصدار جديد',
    'LBL_RELEASE' => 'الإصدار:',
    'LBL_LIST_NAME' => 'إصدار',
    'LBL_NAME' => 'نسخة الإصدار:',
    'LBL_LIST_LIST_ORDER' => 'ترتيب',
    'LBL_LIST_ORDER' => 'الترتيب:',
    'LBL_LIST_STATUS' => 'الحالة',
    'LBL_STATUS' => 'الحالة:',
    'LNK_NEW_RELEASE' => 'قائمة الإصدارات',
    'NTC_DELETE_CONFIRMATION' => 'هل أنت متأكد من أنك تريد حذف هذا السجل؟',
    'ERR_DELETE_RECORD' => 'يجب أن تحدد رقم السجل لحذف الإصدار.',
    'NTC_STATUS' => 'اضبط الحالة إلى غير نشط لإزالة هذا الإصدار من قوائم القائمة المنسدلة للإصدار',
    'NTC_LIST_ORDER' => 'اضبط الترتيب الذي سيظهر فيه هذا الإصدار في قوائم الإصدارات المنسدلة',
    'release_status_dom' =>
        array(
            'Active' => 'نشط',
            'Inactive' => 'غير نشط',
        ),
    'LBL_EDITLAYOUT' => 'تحرير التصميم' /*for 508 compliance fix*/,
);
