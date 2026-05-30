<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SuiteCRM Ltd.
 * Copyright (C) 2011 - 2022 SuiteCRM Ltd.
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

$mod_strings = [

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
    'LBL_LIST_FORM_TITLE' => 'قائمة مزودي الأذون الخارجيين',
    'LBL_MODULE_NAME' => 'مزودو OAuth الخارجيين',
    'LBL_MODULE_TITLE' => 'مزودو OAuth الخارجيين',
    'LBL_HOMEPAGE_TITLE' => 'مزودو الأذون الخارجيين الخاصين بي',
    'LNK_NEW_RECORD' => 'إنشاء موفر اذون خارجي',

    'LNK_LIST' => 'مزودو OAuth الخارجيين',
    'LBL_SEARCH_FORM_TITLE' => 'بحث مزودي الأذون الخارجيين',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'عرض التاريخ',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'الأنشطة',
    'LBL_NEW_FORM_TITLE' => 'موفر اذون خارجي جديد',

    'LBL_LIST_DELETE' => 'حذف',
    'LBL_TYPE' => 'النوع',
    'LBL_CONNECTOR' => 'موصل',
    'LBL_REDIRECT_URI' => 'رابط إعادة التوجيه',
    'LBL_REDIRECT_URI_TYPE' => 'Redirect URI Type',

    'LBL_CLIENT_ID' => 'معرف العميل',
    'LBL_CLIENT_SECRET' => 'المفتاح السري للعميل',
    'LBL_SCOPE' => 'النطاق',
    'LBL_URL_AUTHORIZE' => 'اعتماد الرابط',
    'LBL_AUTHORIZE_URL_OPTIONS' => 'اعتماد خيارات الرابط',
    'LBL_URL_ACCESS_TOKEN' => 'رابط رمز الوصول',
    'LBL_EXTRA_PROVIDER_PARAMS' => 'معطيات مزود إضافية',
    'LBL_GET_TOKEN_REQUEST_GRANT' => 'جلب نوع منح طلب الرمز',
    'LBL_GET_TOKEN_REQUEST_OPTIONS' => 'جلب خيارات طلب الرمز',
    'LBL_REFRESH_TOKEN_REQUEST_GRANT' => 'تحديث نوع منح طلب الرمز',
    'LBL_REFRESH_TOKEN_REQUEST_OPTIONS' => 'تحديث خيارات طلب الرمز',

    'LBL_ACCESS_TOKEN_MAPPING' => 'إقران الرمز المميز للوصول',
    'LBL_EXPIRES_IN_MAPPING' => 'إقران تاريخ انتهاء الصلاحية',
    'LBL_REFRESH_TOKEN_MAPPING' => 'تحديث إقران الرمز المميز للوصول',
    'LBL_TOKEN_TYPE_MAPPING' => 'إقران نوع الرمز',

    'LBL_EXTRA' => 'إعدادات اضافية',
    'LBL_MAPPING' => 'إعدادات الإقران',
    'LBL_OTHER' => 'أخرى',


    'LNK_LIST_CREATE_NEW_PERSONAL' => 'New Personal OAuth Provider',
    'LNK_LIST_CREATE_NEW_GROUP' => 'New Group OAuth Provider',
    'LNK_LIST_INBOUND_EMAILS' => 'حسابات البريد الإلكتروني الوارد',
    'LNK_LIST_OUTBOUND_EMAILS' => 'حسابات البريد الإلكتروني الصادر',
    'LNK_LIST_EXTERNAL_OAUTH_CONNECTION' => 'اتصالات OAuth الخارجية',

    'LBL_OWNER' => 'المالك',
];
