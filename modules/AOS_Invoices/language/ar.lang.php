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
    'LBL_NAME' => 'العنوان',
    'LBL_CREATED_USER' => 'تم الإنشاء بواسطة المستخدم',
    'LBL_MODIFIED_USER' => 'عُدل بواسطة المستخدم',
    'ERR_DELETE_RECORD' => 'يجب تحديد رقم السجل ليتم حذف الحساب.',
    'LBL_ACCOUNT_NAME' => 'العنوان',
    'LBL_ACCOUNT' => 'الشركة:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'الأنشطة',
    'LBL_ADDRESS_INFORMATION' => 'معلومات العنوان',
    'LBL_ANNUAL_REVENUE' => 'الإيرادات السنوية:',
    'LBL_ANY_ADDRESS' => 'أي عنوان:',
    'LBL_ANY_EMAIL' => 'أي بريد إلكتروني:',
    'LBL_ANY_PHONE' => 'أي هاتف:',
    'LBL_RATING' => 'التقييم',
    'LBL_ASSIGNED_USER' => 'المستخدم',
    'LBL_BILLING_ADDRESS_CITY' => 'الفواتير ترسل لمدينة:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'الفواتير ترسل لدولة:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'الفواتير ترسل للرمز البريدي:',
    'LBL_BILLING_ADDRESS_STATE' => 'المحافظة للفواتير:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'الفواتير ترسل لشارع ٢',
    'LBL_BILLING_ADDRESS_STREET_3' => 'الفواتير ترسل لشارع ٣',
    'LBL_BILLING_ADDRESS_STREET_4' => 'الفواتير ترسل لشارع ٤',
    'LBL_BILLING_ADDRESS_STREET' => 'الفواتير ترسل لشارع:',
    'LBL_BILLING_ADDRESS' => 'عنوان إرسال الفواتير:',
    'LBL_ACCOUNT_INFORMATION' => 'نظرة شاملة',
    'LBL_CITY' => 'المدينة:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'جهات الاتصال',
    'LBL_COUNTRY' => 'الدولة:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'الحسابات',
    'LBL_DUPLICATE' => 'الحساب محتمل أنه مكرر',
    'LBL_EMAIL' => 'البريد الإلكتروني:',
    'LBL_EMPLOYEES' => 'الموظفون:',
    'LBL_FAX' => 'فاكس:',
    'LBL_INDUSTRY' => 'مجال عمل الشركة:',
    'LBL_LIST_ACCOUNT_NAME' => 'اسم الحساب',
    'LBL_LIST_CITY' => 'المدينة',
    'LBL_LIST_EMAIL_ADDRESS' => 'عنوان البريد الإلكتروني',
    'LBL_LIST_PHONE' => 'الهاتف',
    'LBL_LIST_STATE' => 'المحافظة',
    'LBL_MEMBER_OF' => 'عضو في:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'عضو بمنظمات',
    'LBL_OTHER_EMAIL_ADDRESS' => 'بريد إلكتروني آخر:',
    'LBL_OTHER_PHONE' => 'هاتف آخر:',
    'LBL_OWNERSHIP' => 'الملكية:',
    'LBL_PARENT_ACCOUNT_ID' => 'معرف الحساب الأصل',
    'LBL_PHONE_ALT' => 'الهاتف البديل:',
    'LBL_PHONE_FAX' => 'هاتف فاكس:',
    'LBL_PHONE_OFFICE' => 'هاتف المكتب:',
    'LBL_PHONE' => 'هاتف:',
    'LBL_POSTAL_CODE' => 'الرمز البريدي:',
    'LBL_SAVE_ACCOUNT' => 'حفظ الحساب',
    'LBL_SHIPPING_ADDRESS_CITY' => 'يُشحن لمدينة:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'يُشحن لدولة:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'الرمز البريدي للشحن:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'الشحن لمحافظة:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'يُشحن لشارع ٢',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'يُشحن لشارع ٣',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'يُشحن لشارع ٤',
    'LBL_SHIPPING_ADDRESS_STREET' => 'يُشحن لشارع:',
    'LBL_SHIPPING_ADDRESS' => 'عنوان الشحن:',
    'LBL_STATE' => 'المحافظة أو المنطقة:',
    'LBL_TICKER_SYMBOL' => 'رمز المؤشر:',
    'LBL_TYPE' => 'النوع:',
    'LBL_WEBSITE' => 'موقع الإنترنت:',
    'LNK_ACCOUNT_LIST' => 'الحسابات',
    'LNK_NEW_ACCOUNT' => 'إنشاء حساب',
    'MSG_DUPLICATE' => 'إنشاء هذا الحساب قد يحتمل إنشاء حساب مكرر. يمكنك إما تحديد حساب من القائمة أدناه أو يمكنك النقر على حفظ لتستمر بإنشاء حساب جديد مُستخدماً البيانات المُدخلة مُسبقاً.',
    'MSG_SHOW_DUPLICATES' => 'إنشاء هذا الحساب قد يحتمل إنشاء حساب مكرر. يمكنك إما النقر فوق حفظ للاستمرار بإنشاء هذا الحساب الجديد مُستخدماً البيانات المُدخلة مسبقاً أو النقر على إلغاء.',
    'NTC_DELETE_CONFIRMATION' => 'هل أنت متأكد من أنك تريد حذف هذا السجل؟',
    'LBL_LIST_FORM_TITLE' => 'قائمة الفواتير',
    'LBL_MODULE_NAME' => 'الفواتير',
    'LBL_MODULE_TITLE' => 'الفواتير: الصفحة الرئيسية',
    'LBL_HOMEPAGE_TITLE' => 'فواتيري',
    'LNK_NEW_RECORD' => 'إنشاء فاتورة',
    'LNK_LIST' => 'عرض الفواتير',
    'LBL_SEARCH_FORM_TITLE' => 'بحث الفواتير',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'عرض التاريخ',
    'LBL_NEW_FORM_TITLE' => 'فاتورة جديدة',
    'LBL_TERMS_C' => 'الأحكام',
    'LBL_APPROVAL_ISSUE' => 'مشاكل الموافقة',
    'LBL_APPROVAL_STATUS' => 'حالة الموافقة',
    'LBL_BILLING_ACCOUNT' => 'الحساب',
    'LBL_BILLING_CONTACT' => 'جهة الاتصال',
    'LBL_EXPIRATION' => 'ساري حتى',
    'LBL_INVOICE_NUMBER' => 'رقم الفاتورة',
    'LBL_OPPORTUNITY' => 'اسم الفرصة',
    'LBL_TEMPLATE_DDOWN_C' => 'قوالب الفواتير',
    'LBL_STAGE' => 'مرحلة عرض الأسعار',
    'LBL_TERM' => 'أحكام الدفع',
    'LBL_SUBTOTAL_AMOUNT' => 'المجموع الفرعي',
    'LBL_DISCOUNT_AMOUNT' => 'الخصم',
    'LBL_TAX_AMOUNT' => 'الضرائب',
    'LBL_SHIPPING_AMOUNT' => 'الشحن',
    'LBL_TOTAL_AMT' => 'المجموع',
    'VALUE' => 'العنوان',
    'LBL_EMAIL_ADDRESSES' => 'عناوين البريد الإلكتروني',
    'LBL_LINE_ITEMS' => 'بنود متسلسلة',
    'LBL_GRAND_TOTAL' => 'المجموع الكلي',
    'LBL_QUOTE_NUMBER' => 'رقم عرض الأسعار',
    'LBL_QUOTE_DATE' => 'تاريخ عرض الأسعار',
    'LBL_INVOICE_DATE' => 'تاريخ الفاتورة',
    'LBL_DUE_DATE' => 'تاريخ الاستحقاق',
    'LBL_STATUS' => 'الحالة',
    'LBL_INVOICE_STATUS' => 'حالة الفاتورة',
    'LBL_PRODUCT_QUANITY' => 'الكمية',
    'LBL_PRODUCT_NAME' => 'المنتج',
    'LBL_PART_NUMBER' => 'رقم القطعة',
    'LBL_PRODUCT_NOTE' => 'ملاحظة',
    'LBL_PRODUCT_DESCRIPTION' => 'الوصف',
    'LBL_LIST_PRICE' => 'القائمة',
    'LBL_DISCOUNT_AMT' => 'الخصم',
    'LBL_UNIT_PRICE' => 'سعر البيع',
    'LBL_TOTAL_PRICE' => 'المجموع',
    'LBL_VAT' => 'الضرائب', //VAT
    'LBL_VAT_AMT' => 'مبلغ الضريبة', //VAT
    'LBL_ADD_PRODUCT_LINE' => 'إضافة سطر منتج',
    'LBL_SERVICE_NAME' => 'الخدمة',
    'LBL_SERVICE_LIST_PRICE' => 'القائمة',
    'LBL_SERVICE_PRICE' => 'سعر البيع',
    'LBL_SERVICE_DISCOUNT' => 'الخصم',
    'LBL_ADD_SERVICE_LINE' => 'إضافة سطر خدمة ',
    'LBL_REMOVE_PRODUCT_LINE' => 'حذف',
    'LBL_PRINT_AS_PDF' => 'طباعة بصيغة PDF',
    'LBL_EMAIL_INVOICE' => 'أرسل الفاتورة بالبريد الإلكتروني',
    'LBL_LIST_NUM' => 'رقم',
    'LBL_PDF_NAME' => 'الفاتورة',
    'LBL_EMAIL_NAME' => 'فاتورة لـ',
    'LBL_NO_TEMPLATE' => 'خطأ\nلم أجد قوالب. إذا لم تُنشئ قالب فاتورة، فاتجه للوحدة الخاصة بقوالب PDF وأنشئ قالب',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'المجموع الفرعي + الضريبة',//pre shipping
    'LBL_EMAIL_PDF' => 'أرسل PDF كبريد إلكتروني',
    'LBL_ADD_GROUP' => 'إضافة مجموعة',
    'LBL_DELETE_GROUP' => 'حذف مجموعة',
    'LBL_GROUP_NAME' => 'اسم المجموعة',
    'LBL_GROUP_TOTAL' => 'إجمالي المجموعة',
    'LBL_SHIPPING_TAX' => 'ضريبة الشحن',
    'LBL_SHIPPING_TAX_AMT' => 'ضريبة الشحن',
    'LBL_IMPORT_LINE_ITEMS' => 'استيراد عناصر متسلسلة',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'المجموع الفرعي (العملة الافتراضية)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'الخصم (بالعملة الافتراضية)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'الضرائب (العملة الافتراضية)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'الشحن (العملة الافتراضية)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'المجموع (العملة الافتراضية)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'ضريبة الشحن (العملة الافتراضية)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'المجموع الكلي (العملة الافتراضية)',
    'LBL_INVOICE_TO' => 'فاتورة إلى',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'مجموعات العناصر المتسلسلة',
    'LBL_AOS_PRODUCT_QUOTES' => 'عروض أسعار المنتج',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'عروض الأسعار: الفواتير',
);
