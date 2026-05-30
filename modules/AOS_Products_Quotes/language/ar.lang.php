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
    'LBL_DESCRIPTION' => 'الملاحظة',
    'LBL_DELETED' => 'محذوف',
    'LBL_NAME' => 'الاسم',
    'LBL_CREATED_USER' => 'تم الإنشاء بواسطة المستخدم',
    'LBL_MODIFIED_USER' => 'عُدل بواسطة المستخدم',
    'LBL_LIST_FORM_TITLE' => 'قائمة عروض أسعار المنتجات',
    'LBL_MODULE_NAME' => 'بنود متسلسلة',
    'LBL_MODULE_TITLE' => 'عروض أسعار المنتجات: الرئيسية',
    'LBL_HOMEPAGE_TITLE' => 'عروض أسعار المنتجات الخاصة بي',
    'LNK_NEW_RECORD' => 'إنشاء عرض سعر لمنتج',
    'LNK_LIST' => 'عروض أسعار المنتجات',
    'LBL_SEARCH_FORM_TITLE' => 'بحث عروض الأسعار',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'عرض التاريخ',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'الأنشطة',
    'LBL_NEW_FORM_TITLE' => 'عرض أسعار جديد لمنتج',
    'LBL_PRODUCT_NAME' => 'الاسم',
    'LBL_PRODUCT_QTY' => 'الكمية',
    'LBL_PRODUCT_COST_PRICE' => 'سعر التكلفة',
    'LBL_PRODUCT_LIST_PRICE' => 'سعر قائمة الأسعار',
    'LBL_PRODUCT_UNIT_PRICE' => 'سعر الوحدة',
    'LBL_PRODUCT_DISCOUNT' => 'الخصم',
    'LBL_PRODUCT_DISCOUNT_AMOUNT' => 'مبلغ الخصم',
    'LBL_PART_NUMBER' => 'رقم القطعة',
    'LBL_PRODUCT_DESCRIPTION' => 'الوصف',
    'LBL_DISCOUNT' => 'نوع الخصم',
    'LBL_VAT_AMT' => 'مبلغ الضريبة',
    'LBL_VAT' => 'الضرائب',
    'LBL_PRODUCT_TOTAL_PRICE' => 'إجمالي السعر',
    'LBL_PRODUCT_NOTE' => 'ملاحظة',
    'Quote' => '',
    'LBL_FLEX_RELATE' => 'متعلق بـ',
    'LBL_PRODUCT' => 'المنتج',

    'LBL_SERVICE_MODULE_NAME' => 'الخدمات',
    'LBL_LIST_NUM' => 'الرقم',
    'LBL_PARENT_ID' => 'معرف الأصل',
    'LBL_GROUP_NAME' => 'المجموعة',
    'LBL_PRODUCT_COST_PRICE_USDOLLAR' => 'سعر التكلفة (العملة الافتراضية)',
    'LBL_PRODUCT_LIST_PRICE_USDOLLAR' => 'سعر قائمة الأسعار (العملة الافتراضية)',
    'LBL_PRODUCT_UNIT_PRICE_USDOLLAR' => 'سعر الوحدة (العملة الافتراضية)',
    'LBL_PRODUCT_TOTAL_PRICE_USDOLLAR' => 'السعر الإجمالي (العملة الافتراضية)',
    'LBL_PRODUCT_DISCOUNT_USDOLLAR' => 'الخصم (العملة الافتراضية)',
    'LBL_PRODUCT_DISCOUNT_AMOUNT_USDOLLAR' => 'مبلغ الخصم (العملة الافتراضية)',
    'LBL_VAT_AMT_USDOLLAR' => 'مبلغ الضريبة (العملة الافتراضية)',
    'LBL_PRODUCTS_SERVICES' => 'المنتج / الخدمة',
    'LBL_PRODUCT_ID' => 'معرف المنتج',

    'LBL_AOS_CONTRACTS' => 'العقود',
    'LBL_AOS_INVOICES' => 'الفواتير',
    'LBL_AOS_PRODUCTS' => 'المنتجات',
    'LBL_AOS_QUOTES' => 'عروض الأسعار',
);
