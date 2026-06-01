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
    'LBL_MODULE_NAME' => 'رموز OAuth2 المميزة',
    'LBL_MODULE_TITLE' => 'رموز OAuth2 المميزة',
    'LBL_MODULE_ID'=> 'رموز OAuth2 المميزة',
    'LBL_TOKEN_ID'=> 'معرف الرمز المميز',
    'LBL_CLIENT'=> 'تطبيق',
    'LBL_TOKEN_IS_REVOKED'=> 'ملغى',
    'LBL_ACCESS_TOKEN_TYPE'=> 'نوع الرمز',
    'LBL_ACCESS_TOKEN_EXPIRES'=> 'تنتهي صلاحية رمز الوصول',
    'LBL_REFRESH_TOKEN_EXPIRES'=> 'تنتهي صلاحية رمز التحديث',
    'LBL_GRANT_TYPE'=> 'نوع المنحة',
    'LBL_SCOPES'=> 'النطاقات',
    'LBL_REVOKE_TOKEN'=> 'إلغاء الرمز المميز',
    'LBL_REVOKE_TOKENS'=> 'Revoke Tokens',
    'LBL_CLIENT_NAME'=> 'اسم التطبيق',
    'LBL_USER' => 'المستخدم المرتبط',
    'LBL_IS_ACTIVE' => 'الرموز المميزة النشطة فقط',

    'LNK_OAUTH2_TOKEN_LIST'=> 'إدراج رموز OAuth2 المميزة',
    'LNK_OAUTH2_CLIENT_LIST' => 'إدراج تطبيقات OAuth2',
    'LNK_OAUTH2_AUTHCODE_LIST' => 'List OAuth2 Authorization Codes',
    
    'LNK_NEW_OAUTH2_CLIENT' => 'إنشاء تطبيق OAuth2',
    'LNK_NEW_OAUTH2_PASSWORD_CLIENT' => 'تطبيق كلمة المرور الجديدة',
    'LNK_NEW_OAUTH2_CREDENTIALS_CLIENT' => 'تطبيق جديد لوثائق تفويض التطبيق',
    'LNK_NEW_OAUTH2_IMPLICIT_CLIENT' => 'تطبيق ضمني جديد',
    'LNK_NEW_OAUTH2_AUTHORIZATION_CLIENT' => 'تطبيق تفويض جديد',

    'LBL_ACCESS_TOKEN' => 'رمز الوصول',
    'LBL_REFRESH_TOKEN' => 'تحديث الرمز',
    'LBL_DELETE_CONFIRMATION' => 'Are you sure you want to delete this record? The client will not be granted an authorization code any more.',
    'LBL_REVOKE_AND_DELETE_BUTTON_LABEL' => 'Revoke and Delete',
);
