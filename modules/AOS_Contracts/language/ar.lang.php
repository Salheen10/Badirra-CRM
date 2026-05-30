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
    'LBL_ASSIGNED_TO_NAME' => 'مدير العقود',
    'LBL_CONTRACT_ACCOUNT' => 'الحساب',
    'LBL_OPPORTUNITY' => 'الفرصة',
    'LBL_ID' => 'المُعرف',
    'LBL_DATE_ENTERED' => 'تاريخ الإنشاء',
    'LBL_DATE_MODIFIED' => 'تاريخ التعديل',
    'LBL_MODIFIED' => 'عُدل بواسطة',
    'LBL_MODIFIED_NAME' => 'قام بالتعديل',
    'LBL_CREATED' => 'أنشئ بواسطة',
    'LBL_DESCRIPTION' => 'الوصف',
    'LBL_DELETED' => 'محذوف',
    'LBL_NAME' => 'عنوان العقد',
    'LBL_CREATED_USER' => 'تم الإنشاء بواسطة المستخدم',
    'LBL_MODIFIED_USER' => 'عُدل بواسطة المستخدم',
    'LBL_LIST_NAME' => 'الاسم',
    'LBL_LIST_FORM_TITLE' => 'قائمة العقود',
    'LBL_MODULE_NAME' => 'العقود',
    'LBL_MODULE_TITLE' => 'العقود: الرئيسية',
    'LBL_HOMEPAGE_TITLE' => 'عقودي',
    'LNK_NEW_RECORD' => 'إنشاء عقد',
    'LNK_LIST' => 'عرض العقود',
    'LBL_SEARCH_FORM_TITLE' => 'بحث العقود',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'عرض التاريخ',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'الأنشطة',
    'LBL_NEW_FORM_TITLE' => 'عقد جديد',
    'LBL_CONTRACT_NAME' => 'اسم العقد',
    'LBL_REFERENCE_CODE ' => 'رقم المرجع ',
    'LBL_START_DATE' => 'تاريخ البدء',
    'LBL_END_DATE' => 'تاريخ الانتهاء',
    'LBL_TOTAL_CONTRACT_VALUE' => 'قيمة العقد',
    'LBL_STATUS' => 'الحالة',
    'LBL_CUSTOMER_SIGNED_DATE' => 'تاريخ توقيع العميل',
    'LBL_COMPANY_SIGNED_DATE' => 'تاريخ توقيع الشركة',
    'LBL_RENEWAL_REMINDER' => ' تذكير تجديد العقد',
    'LBL_RENEWAL_REMINDER_DATE' => 'تاريخ التذكير بالتجديد',
    'LBL_CONTRACT_TYPE' => 'نوع العقد',
    'LBL_CONTACT' => 'جهة الإتصال',
    'LBL_ADD_GROUP' => 'إضافة مجموعة',
    'LBL_DELETE_GROUP' => 'حذف مجموعة',
    'LBL_GROUP_NAME' => 'اسم المجموعة',
    'LBL_GROUP_TOTAL' => 'إجمالي المجموعة',
    'LBL_PRODUCT_QUANITY' => 'الكمية',
    'LBL_PRODUCT_NAME' => 'المنتج',
    'LBL_PART_NUMBER' => 'رقم القطعة',
    'LBL_PRODUCT_NOTE' => 'ملاحظة',
    'LBL_PRODUCT_DESCRIPTION' => 'الوصف',
    'LBL_LIST_PRICE' => 'القائمة',
    'LBL_DISCOUNT_AMT' => 'الخصم',
    'LBL_UNIT_PRICE' => 'سعر البيع',
    'LBL_TOTAL_PRICE' => 'المجموع',
    'LBL_VAT' => 'الضرائب',
    'LBL_VAT_AMT' => 'مبلغ الضريبة',
    'LBL_SERVICE_NAME' => 'الخدمة',
    'LBL_SERVICE_LIST_PRICE' => 'القائمة',
    'LBL_SERVICE_PRICE' => 'سعر البيع',
    'LBL_SERVICE_DISCOUNT' => 'الخصم',
    'LBL_LINE_ITEMS' => 'بنود متسلسلة',
    'LBL_SUBTOTAL_AMOUNT' => 'المجموع الفرعي',
    'LBL_DISCOUNT_AMOUNT' => 'الخصم',
    'LBL_TAX_AMOUNT' => 'الضرائب',
    'LBL_SHIPPING_AMOUNT' => 'الشحن',
    'LBL_TOTAL_AMT' => 'المجموع',
    'LBL_GRAND_TOTAL' => 'المجموع الكلي',
    'LBL_SHIPPING_TAX' => 'ضريبة الشحن',
    'LBL_SHIPPING_TAX_AMT' => 'ضريبة الشحن',
    'LBL_ADD_PRODUCT_LINE' => 'إضافة سطر منتج',
    'LBL_ADD_SERVICE_LINE' => 'إضافة سطر خدمة ',
    'LBL_PRINT_AS_PDF' => 'طباعة بصيغة PDF',
    'LBL_EMAIL_PDF' => 'أرسل PDF كرسالة إلكترونية',
    'LBL_PDF_NAME' => 'العقد',
    'LBL_EMAIL_NAME' => 'العقد لـ',
    'LBL_NO_TEMPLATE' => 'خطأ\nلم يتم العثور على قوالب. إذا لم تُنشئ قالب للعقود، فاتجه للوحدة الخاصة بقوالب PDF وأنشئ قالب',
    'LBL_TOTAL_CONTRACT_VALUE_USDOLLAR' => 'قيمة العقد (العملة الافتراضية)',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'المجموع الفرعي (العملة الافتراضية)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'الخصم (العملة الافتراضية)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'الضرائب (العملة الافتراضية)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'الشحن (العملة الافتراضية)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'المجموع (العملة الافتراضية)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'ضريبة الشحن (العملة الافتراضية)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'المجموع الكلي (العملة الافتراضية)',

    'LBL_CALL_ID' => 'معرف المكالمة',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'مجموعات العناصر المتسلسلة',
    'LBL_AOS_PRODUCT_QUOTES' => 'عروض أسعار المنتج',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'عروض الأسعار: العقود',
);
