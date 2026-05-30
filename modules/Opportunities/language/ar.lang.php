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
    'LBL_MODULE_NAME' => 'الفرص',
    'LBL_MODULE_TITLE' => 'الفرص: الرئيسية',
    'LBL_SEARCH_FORM_TITLE' => 'بحث الفرص',
    'LBL_LIST_FORM_TITLE' => 'قائمة الفرص',
    'LBL_OPPORTUNITY_NAME' => 'اسم الفرصة:',
    'LBL_OPPORTUNITY' => 'الفرصة:',
    'LBL_NAME' => 'اسم الفرصة',
    'LBL_INVITEE' => 'جهات الإتصال',
    'LBL_CURRENCIES' => 'العملات',
    'LBL_LIST_OPPORTUNITY_NAME' => 'الاسم',
    'LBL_LIST_ACCOUNT_NAME' => 'اسم الحساب',
    'LBL_LIST_AMOUNT' => 'مبلغ الفرصة',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'المبلغ',
    'LBL_LIST_DATE_CLOSED' => 'إغلاق',
    'LBL_LIST_SALES_STAGE' => 'مرحلة المبيعات',
    'LBL_ACCOUNT_ID' => 'معرف الحساب',
    'LBL_CURRENCY_NAME' => 'اسم العملة',
    'LBL_CURRENCY_SYMBOL' => 'رمز العملة',

    'UPDATE' => 'الفرصة - تحديث العملة',
    'LBL_ACCOUNT_NAME' => 'اسم الحساب:',
    'LBL_AMOUNT' => 'مبلغ الفرصة:',
    'LBL_AMOUNT_USDOLLAR' => 'المبلغ:',
    'LBL_CURRENCY' => 'العملة:',
    'LBL_DATE_CLOSED' => 'تاريخ الإغلاق المتوقع:',
    'LBL_TYPE' => 'النوع:',
    'LBL_CAMPAIGN' => 'حملة التسويق:',
    'LBL_NEXT_STEP' => 'الخطوة التالية:',
    'LBL_LEAD_SOURCE' => 'مصدر المُهتم:',
    'LBL_SALES_STAGE' => 'مرحلة المبيعات:',
    'LBL_PROBABILITY' => 'نسبة الاحتمال (%):',
    'LBL_DESCRIPTION' => 'الوصف:',
    'LBL_DUPLICATE' => 'الفرصة يتحتمل أنها مكررة',
    'MSG_DUPLICATE' => 'سجل الفرصة الذي توشك على إنشائه قد يكون تكراراً لسجل الفرص موجود بالفعل. أدناه سجلات الفرص التي تحتوي على أسماء مماثلة.<br>انقر على حفظ لمواصلة إنشاء هذه الفرصة الجديدة، أو انقر على إلغاء للعودة إلى الوحدة دون إنشاء الفرصة.',
    'LBL_NEW_FORM_TITLE' => 'إنشاء فرصة',
    'LNK_NEW_OPPORTUNITY' => 'إنشاء فرصة',
    'LNK_OPPORTUNITY_LIST' => 'عرض الفرص',
    'ERR_DELETE_RECORD' => 'يجب تحديد رقم السجل ليتم حذف الفرصة.',
    'LBL_TOP_OPPORTUNITIES' => 'أفضل الفرص المفتوحة الخاصة بي',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'هل أنت متأكد من أنك تريد إزالة هذه الفرصة من المشروع؟',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'الفرص',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'الأنشطة',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'التاريخ',

    'LBL_LEADS_SUBPANEL_TITLE' => 'مُهتمون',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'جهات الاتصال',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'الوثائق',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'مشاريع',
    'LBL_ASSIGNED_TO_NAME' => 'أُسند إلى:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'المستخدم المكلف',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'الفرص المغلقة الخاصة بي',
    'LBL_TOTAL_OPPORTUNITIES' => 'إجمالي الفرص',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'الفرص الناجحة المغلقة',
    'LBL_ASSIGNED_TO_ID' => 'المستخدم المُكلف:',
    'LBL_MODIFIED_NAME' => 'عُدلت بواسطة اسم المُستخدم',
    'LBL_CREATED_USER' => 'المستخدم الذي تم إنشاؤه',
    'LBL_MODIFIED_USER' => 'تم تعديل المستخدم',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'الحملات',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'المشاريع',
    'LNK_IMPORT_OPPORTUNITIES' => 'استيراد الفرص',
    'LBL_EDITLAYOUT' => 'تحرير التصميم' /*for 508 compliance fix*/,

    // SNIP

    'LBL_AOS_CONTRACTS' => 'العقود',
    'LBL_AOS_QUOTES' => 'عروض الأسعار',
);
