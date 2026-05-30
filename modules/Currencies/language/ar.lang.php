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
    'LBL_MODULE_NAME' => 'العملات',
    'LBL_LIST_FORM_TITLE' => 'العملات',
    'LBL_CURRENCY' => 'العملة',
    'LBL_ADD' => 'إضافة',
    'LBL_MERGE' => 'دمج',
    'LBL_MERGE_TXT' => 'الرجاء تحديد العملات التي ترغب في عمل اقتران بينها وبين العملة المختارة. سيؤدي هذا إلى حذف جميع العملات التي تحمل علامة اختبار وإعادة تعيين أي قيمة مرتبطة بها إلى العملة المحددة.',
    'LBL_US_DOLLAR' => 'دولار أمريكي',
    'LBL_DELETE' => 'حذف',
    'LBL_LIST_SYMBOL' => 'رمز العملة',
    'LBL_LIST_NAME' => 'اسم العملة',
    'LBL_LIST_ISO4217' => 'رمز ISO 4217',
    'LBL_LIST_ISO4217_HELP' => 'أدخل رمز ISO 4217 من ثلاثة أحرف تعرّف اسم العملة ورمز العملة.',
    'LBL_UPDATE' => 'تحذيث',
    'LBL_LIST_RATE' => 'سعر التحويل',
    'LBL_LIST_RATE_HELP' => 'سعر التحويل البالغ 0.5 لليورو يعني أن 10 دولارات = 5 يورو.',
    'LBL_LIST_STATUS' => 'الحالة',
    'LNK_NEW_CONTACT' => 'جهة اتصال جديدة',
    'LNK_NEW_ACCOUNT' => 'حساب جديد',
    'LNK_NEW_OPPORTUNITY' => 'فرصة جديدة',
    'LNK_NEW_CASE' => 'قضية جديدة',
    'LNK_NEW_NOTE' => 'إنشاء ملاحظة أو ملف مرفق',
    'LNK_NEW_CALL' => 'مكالمة جديدة',
    'LNK_NEW_EMAIL' => 'بريد إلكتروني جديد',
    'LNK_NEW_MEETING' => 'اجتماع جديد',
    'LNK_NEW_TASK' => 'إنشاء مهمة',
    'NTC_DELETE_CONFIRMATION' => 'هل أنت متأكد من أنك تريد حذف هذا السجل؟ سيتم تحويل أي سجل يستخدم هذه العملة إلى العملة الافتراضية للنظام عند فتحه. وقد يكون من الأفضل ضبط الحالة إلى غير نشط.',
    'LBL_BELOW_MIN' => 'يجب أن يكون سعر التحويل أعلى من صفر',
    'currency_status_dom' =>
        array(
            'Active' => 'نشط',
            'Inactive' => 'غير نشط',
        ),
    'LBL_CREATED_BY' => 'أنشئ بواسطة',
    'LBL_EDIT_LAYOUT' => 'تحرير التصميم' /*for 508 compliance fix*/,
);
