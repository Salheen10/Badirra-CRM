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
    'LBL_ASSIGNED_TO_NAME' => 'مستخدم SuiteCRM',
    'LBL_ID' => 'المُعرف',
    'LBL_DATE_ENTERED' => 'تاريخ الإنشاء',
    'LBL_DATE_MODIFIED' => 'تاريخ التعديل',
    'LBL_MODIFIED' => 'عُدل بواسطة',
    'LBL_MODIFIED_NAME' => 'قام بالتعديل',
    'LBL_CREATED' => 'أنشئ بواسطة',
    'LBL_DESCRIPTION' => 'الوصف',
    'LBL_DELETED' => 'محذوف',
    'LBL_NAME' => 'اسم مستخدم التطبيق',
    'LBL_CREATED_USER' => 'أنشئ بواسطة المستخدم',
    'LBL_MODIFIED_USER' => 'عدل بواسطة المستخدم',
    'LBL_LIST_NAME' => 'الاسم',
    'LBL_LIST_FORM_TITLE' => 'قائمة الحسابات الخارجية',
    'LBL_MODULE_NAME' => 'حساب خارجي',
    'LBL_MODULE_TITLE' => 'الحسابات الخارجية',
    'LBL_HOMEPAGE_TITLE' => 'حساباتي الخارجية',
    'LNK_NEW_RECORD' => 'إنشاء حساب خارجي',
    'LNK_LIST' => 'عرض الحسابات الخارجية',
    'LBL_SEARCH_FORM_TITLE' => 'بحث الحسابات الخارجية',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'عرض التاريخ',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'الأنشطة',
    'LBL_NEW_FORM_TITLE' => 'حساب خارجي جديد',
    'LBL_PASSWORD' => 'كلمة مرور التطبيق',
    'LBL_USER_NAME' => 'اسم مستخدم التطبيق',
    'LBL_URL' => 'الرابط (URL)',
    'LBL_APPLICATION' => 'التطبيق',
    'LBL_API_DATA' => 'بيانات واجهة ربط التطبيق ( AP)',
    'LBL_API_CONSKEY' => 'مفتاح المستهلك',
    'LBL_API_CONSSECRET' => 'كلمة سر المستهلك',
    'LBL_API_OAUTHTOKEN' => 'رمز OAuth',
    'LBL_AUTH_UNSUPPORTED' => "طريقة التفويض هذه غير مدعومة من قبل التطبيق",
    'LBL_AUTH_ERROR' => 'فشلت محاولة الاتصال بهذا الحساب.',
    'LBL_VALIDATED' => 'متصل',
    'LBL_ACTIVE' => 'نشط',
    'LBL_OAUTH_NAME' => '%s',
    'LBL_CONNECT_BUTTON_TITLE' => 'الاتصال',
    'LBL_NOTE' => 'يرجى الملاحظة',
    'LBL_CONNECTED' => 'متصل',

    'LBL_ERR_NO_AUTHINFO' => 'لا توجد معلومات مصادقة لهذا الحساب.',
    'LBL_ERR_NO_TOKEN' => 'لا توجد رموز تسجيل دخول صالحة لهذا الحساب.',

    'LBL_ERR_FAILED_QUICKCHECK' => 'أنت غير متصل حاليا بحسابك {0}. انقر موافق لتسجيل الدخول إلى حسابك وإعادة تنشيط الاتصال.',

    'LBL_CLICK_TO_EDIT' => 'انقر للتعديل',

    // Various strings used throughout the external account modules
    'LBL_REAUTHENTICATE_LABEL' => 'إعادة المصادقة',
    'LBL_APPLICATION_FOUND_NOTICE' => 'يوجد حساب لهذا التطبيق بالفعل. لقد قمنا بإعادة الحساب الحالي.',
    'LBL_OMIT_URL' => '(احذف http:// أو https://)',
    'LBL_OAUTH_SAVE_NOTICE' => 'انقر على <b>الاتصال</b> ليتم توجيهك إلى صفحة لإدخال معلومات حسابك وللسماح بالوصول إلى الحساب من قبل SuiteCRM. بعد الاتصال، سيتم توجيهك مرة أخرى إلى نظام SuiteCRM.',
    'LBL_BASIC_SAVE_NOTICE' => 'انقر على <b>الاتصال</b> لربط هذا الحساب بنظام SuiteCRM.',
    'LBL_ERR_POPUPS_DISABLED' => 'الرجاء تمكين النوافذ المنبثقة المنبثقة للمتصفح أو إضافة استثناء للموقع "{0}" إلى قائمة الاستثناءات من أجل الاتصال.',

    'LBL_API_OAUTHSECRET' => 'كلمة سر OAuth API',
);
