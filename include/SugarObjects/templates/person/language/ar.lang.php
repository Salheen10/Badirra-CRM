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
    'LBL_SALUTATION' => 'مقدمة الرسالة',
    'LBL_NAME' => 'الاسم',
    'LBL_FIRST_NAME' => 'الاسم الأول',
    'LBL_LAST_NAME' => 'الاسم الأخير',
    'LBL_TITLE' => 'العنوان',
    'LBL_DEPARTMENT' => 'الإدارة',
    'LBL_DO_NOT_CALL' => 'لا تتصل',
    'LBL_HOME_PHONE' => 'هاتف المنزل',
    'LBL_MOBILE_PHONE' => 'الهاتف المحمول',
    'LBL_OFFICE_PHONE' => 'هاتف المكتب',
    'LBL_OTHER_PHONE' => 'هاتف آخر',
    'LBL_FAX_PHONE' => 'الفاكس',
    'LBL_EMAIL_ADDRESS' => 'عناوين البريد الإلكتروني',
    'LBL_PRIMARY_ADDRESS' => 'العنوان الرئيسي',
    'LBL_PRIMARY_ADDRESS_STREET' => 'العنوان الرئيسي',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'العنوان الرئيسي - شارع 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'العنوان الرئيسي - شارع 3:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'المدينة الرئيسية',
    'LBL_PRIMARY_ADDRESS_STATE' => 'المحافظة الرئيسية',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'الرمز البريدي الرئيسي',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'العنوان الرئيسي - الدولة:',
    'LBL_ALT_ADDRESS' => 'العنوان البديل',
    'LBL_ALT_ADDRESS_STREET' => 'العنوان البديل',
    'LBL_ALT_ADDRESS_STREET_2' => 'العنوان البديل - شارع 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'العنوان البديل - شارع 3:',
    'LBL_ALT_ADDRESS_CITY' => 'المدينة البديلة',
    'LBL_ALT_ADDRESS_STATE' => 'المحافظة البديلة',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'الرمز البريدي البديل',
    'LBL_ALT_ADDRESS_COUNTRY' => 'الدولة البديلة',
    'LBL_PRIMARY_STREET' => 'عنوان',
    'LBL_ALT_STREET' => 'عنوان آخر',
    'LBL_STREET' => 'عنوان آخر',
    'LBL_CITY' => 'المدينة',
    'LBL_STATE' => 'المحافظة',
    'LBL_POSTAL_CODE' => 'الرمز البريدي',
    'LBL_COUNTRY' => 'الدولة',
    'LBL_CONTACT_INFORMATION' => 'معلومات الاتصال',
    'LBL_ADDRESS_INFORMATION' => 'عنوان (عناوين)',
    'LBL_ASSIGNED_TO_NAME' => 'مُستخدم',
    'LBL_OTHER_EMAIL_ADDRESS' => 'بريد إلكتروني آخر:',
    'LBL_ASSISTANT' => 'المُساعد',
    'LBL_ASSISTANT_PHONE' => 'هاتف المُساعد',
    'LBL_WORK_PHONE' => 'هاتف العمل',
    'LNK_IMPORT_VCARD' => 'إنشاء من (vCard) بطاقة جهة الاتصال الإفتراضية',
    'LBL_ANY_EMAIL' => 'أي بريد إلكتروني',
    'LBL_EMAIL_NON_PRIMARY' => 'البريد الإلكتروني غير الرئيسي',
    'LBL_PHOTO' => 'صورة',
    'LBL_EDIT_BUTTON' => 'حرر',
    'LBL_REMOVE' => 'إزالة',

    //Lawful Basis labels
    'LBL_LAWFUL_BASIS' => 'الأسس القانونية',
    'LBL_DATE_REVIEWED' => 'تاريخ مراحعة الأساس القانوني',
    'LBL_LAWFUL_BASIS_SOURCE' => 'مصدر الأساس القانوني',
    'LBL_CONSENT' => 'موافقة',
    //End Lawful Basis labels
);
