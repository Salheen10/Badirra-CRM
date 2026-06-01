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
    'LBL_NAME' => 'الاسم',
    'LBL_CREATED_USER' => 'تم الإنشاء بواسطة المستخدم',
    'LBL_MODIFIED_USER' => 'عُدل بواسطة المستخدم',
    'LBL_LIST_NAME' => 'الاسم',
    'LBL_EDIT_BUTTON' => 'حرر',
    'LBL_REMOVE' => 'إزالة',
    'LBL_LIST_FORM_TITLE' => 'قائمة حسابات البريد الإلكتروني الصادر',
    'LBL_MODULE_NAME' => 'حسابات البريد الإلكتروني الصادر',
    'LBL_MODULE_TITLE' => 'حسابات البريد الإلكتروني الصادر',
    'LBL_HOMEPAGE_TITLE' => 'حسابات البريد الإلكتروني الصادر الخاصة بي',
    'LNK_NEW_RECORD' => 'إنشاء حسابات بريد إلكتروني صادر',

    'LNK_LIST_CREATE_NEW_PERSONAL' => 'New Personal Outbound Email Account',
    'LNK_LIST_CREATE_NEW_GROUP' => 'New Group Outbound Email Account',
    'LNK_LIST_CREATE_SYSTEM_OVERRIDE_GROUP' => 'حساب بريد إلكتروني صادر جديد يتجاوز النظام',

    'LNK_LIST' => 'حسابات البريد الإلكتروني الصادر',
    'LNK_LIST_INBOUND_EMAIL_ACCOUNTS' => 'حسابات البريد الإلكتروني الوارد',
    'LBL_SEARCH_FORM_TITLE' => 'بحث حسابات البريد الإلكتروني الصادر',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'عرض التاريخ',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'الأنشطة',
    'LBL_NEW_FORM_TITLE' => 'حسابات بريد إلكتروني صادر جديدة',
    'LBL_USERNAME' => 'اسم المستخدم',
    'LBL_PASSWORD' => 'كلمة السر',
    'LBL_SMTP_SERVERNAME' => 'اسم خادم البريد الصادر (SMTP)',
    'LBL_SMTP_AUTH' => 'مصادقة SMTP',
    'LBL_SMTP_PORT' => 'منفذ SMTP',
    'LBL_SMTP_PROTOCOL' => 'بروتكول SMTP',
    'LBL_EDITVIEW_PANEL1' => 'إعدادات الحساب',
    'LBL_OUTBOUND_CONFIGURATION' => 'تهيئة البريد الصادر',
    'LBL_CONNECTION_CONFIGURATION' => 'تهيئة الخادم',
    'LBL_CHANGE_PASSWORD' => 'تغيير كلمة المرور',
    'LBL_SEND_TEST_EMAIL' => 'إرسال بريد للإختبار',

    // for outbound email dialog
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'لم يقم المُشرف بتهيئة حساب الرسائل الصادرة بعد. النظام غير قادر على إرسال رسائل تجريبية.',
    'LBL_MAIL_SMTPAUTH_REQ' => 'هل أستخدم نظام المصادقة الخاص بخدمة SMTP للبريد الصادر؟',
    'LBL_MAIL_SMTPPASS' => 'كلمة السر',
    'LBL_MAIL_SMTPPORT' => 'منفذ',
    'LBL_MAIL_SMTPSERVER' => 'خادم',
    'LBL_MAIL_SMTPUSER' => 'المستخدم',
    'LBL_MAIL_SMTP_SETTINGS' => 'مواصفات خادم SMTP',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'اختر مزود البريد الإلكتروني الخاص بك:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'كلمة السر لبريد ياهو:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'معرف بريد ياهو:',
    'LBL_GMAIL_SMTPPASS' => 'كلمة مرور جيميل:',
    'LBL_GMAIL_SMTPUSER' => 'عنوان بريد جيميل الإلكتروني:',
    'LBL_EXCHANGE_SMTPPASS' => 'كلمة مرورExchange:',
    'LBL_EXCHANGE_SMTPUSER' => 'اسم المستخدم لـ Exchange:',
    'LBL_EXCHANGE_SMTPPORT' => 'منفذ خادم Exchange:',
    'LBL_EXCHANGE_SMTPSERVER' => 'خادم Exchange:',

    'LBL_TYPE' => 'النوع',
    'LBL_MAIL_SENDTYPE' => 'نوع إرسال البريد',
    'LBL_MAIL_SMTPSSL' => 'بريد SMTP/SSL',
    'LBL_SMTP_FROM_NAME' => 'اسم "المرسل"',
    'LBL_SMTP_FROM_ADDR' => 'عنوان "المرسل"',
    'LBL_REPLY_TO_NAME' => '"أرسل رداً" للإسم',
    'LBL_REPLY_TO_ADDR' => '"أرسل رداً" للعنوان',

    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'المجموعات الأمنية',

    'LBL_OWNER' => 'المالك',
    'LBL_OWNER_NAME' => 'المالك',

    'LBL_AUTH_TYPE' => 'نوع المصادقة',

    'LBL_EXTERNAL_OAUTH_CONNECTION' => 'اتصال OAuth خارجي',
    'LBL_EXTERNAL_OAUTH_CONNECTION_ID' => 'معرف اتصال OAuth الخارجي',
    'LBL_EXTERNAL_OAUTH_CONNECTION_NAME' => 'اتصال OAuth خارجي',
    'LNK_EXTERNAL_OAUTH_CONNECTIONS' => 'اتصالات OAuth الخارجية',

    'LBL_ERROR_OUTBOUND_EMAIL_SYSTEM_EXISTS' => 'System Outbound Email Account already exists. Please remove it before creating a new one.',
    'LBL_ERROR_OUTBOUND_EMAIL_SYSTEM_IS_NOT_GROUP' => 'When configuring the System Outbound account using OAuth, you must select a Group-Type External Oauth Connection',
    'LBL_ERROR_OUTBOUND_EMAIL_CONNECTION_TYPE_MISMATCH' => 'When configuring the Outbound account using OAuth, you must select a External Oauth Connection the same type as the Outbound Email Account (Group or Personal)',
);
