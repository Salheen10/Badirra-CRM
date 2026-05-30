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
    'LBL_LIST_FORM_TITLE' => 'قائمة الأحداث',
    'LBL_MODULE_NAME' => 'الحدث',
    'LBL_MODULE_TITLE' => 'الحدث',
    'LBL_HOMEPAGE_TITLE' => 'أحداثي',
    'LNK_NEW_RECORD' => 'إنشاء حدث',
    'LNK_LIST' => 'عرض الأحداث',
    'LBL_SEARCH_FORM_TITLE' => 'بحث الأحداث',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'عرض التاريخ',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'الأنشطة',
    'LBL_NEW_FORM_TITLE' => 'حدث جديد',
    'LBL_LOCATION' => 'موقع',
    'LBL_START_DATE' => 'تاريخ البدء',
    'LBL_END_DATE' => 'نهاية التاريخ/الوقت',
    'LBL_BUDGET' => 'الميزانية',
    'LBL_DATE' => 'تاريخ البدء',
    'LBL_DATE_END' => 'تاريخ الانتهاء',
    'LBL_DURATION' => 'المدة',
    'LBL_INVITE_TEMPLATES' => 'قالب دعوة بالبريد الإلكتروني',
    'LBL_INVITE_PDF' => 'إرسال الدعوات',
    'LBL_EDITVIEW_PANEL1' => 'تفاصيل الحدث',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'المندوبون',
    'LBL_ACCEPT_REDIRECT' => 'رابط (URL) إعادة التوجيه للقبول',
    'LBL_DECLINE_REDIRECT' => 'رابط (URL) إعادة التوجيه للرفض',
    'LBL_SELECT_DELEGATES' => 'اختيار المندوبين',
    'LBL_SELECT_DELEGATES_TITLE' => 'اختيار المندوبين:-',
    'LBL_SELECT_DELEGATES_TARGET_LIST' => 'قائمة المستهدفين',
    'LBL_SELECT_DELEGATES_TARGETS' => 'المُستهدفون',
    'LBL_SELECT_DELEGATES_CONTACTS' => 'جهات الإتصال',
    'LBL_SELECT_DELEGATES_LEADS' => 'عملاء محتملون',
    'LBL_MANAGE_DELEGATES' => 'إدارة المندوبين',
    'LBL_MANAGE_DELEGATES_TITLE' => 'إدارة المندوبين:-',
    'LBL_MANAGE_ACCEPTANCES' => 'إدارة القبول',
    'LBL_MANAGE_ACCEPTANCES_TITLE' => 'إدارة القبول:-',
    'LBL_MANAGE_ACCEPTANCES_ACCEPTED' => 'تم القبول',
    'LBL_MANAGE_ACCEPTANCES_DECLINED' => 'مرفوض',
    'LBL_MANAGE_POPUP_ERROR' => 'لم يتم اختيار أي مندوبين.',
    'LBL_MANAGE_DELEGATES_INVITED' => 'مدعو',
    'LBL_MANAGE_DELEGATES_NOT_INVITED' => 'غير مدعو',
    'LBL_MANAGE_DELEGATES_ATTENDED' => 'حَضَر',
    'LBL_MANAGE_DELEGATES_NOT_ATTENDED' => 'لم يحضر',
    'LBL_SUCCESS_MSG' => 'تم إرسال جميع الدعوات بنجاح.',
    'LBL_ERROR_MSG_1' => 'تم دعوة جميع جهات الاتصال المرتبطة من قبل.',
    'LBL_ERROR_MSG_2' => 'فشل إرسال رسائل الدعوة بالبريد الإلكتروني! الرجاء التحقق من إعدادات البريد الإلكتروني الخاص بك.',
    'LBL_ERROR_MSG_3' => 'فشل إرسال أكثر من ١٠ رسائل بريد إلكتروني. الرجاء التحقق من أن جميع جهات الاتصال التي دعوتها لديها عنوان بريد إلكتروني صالح. (انظر suitecrm.log)',
    'LBL_ERROR_MSG_4' => ' فشل إرسال رسائل البريد الإلكتروني. الرجاء التحقق من أن جميع جهات الاتصال التي دعوتها لديها عنوان بريد إلكتروني صالح. (انظر suitecrm.log)', // LBL_ERROR_MSG_4 Begins with a number (controller.php line 581) for example 10 emails have failed to send.
    'LBL_ERROR_MSG_5' => 'قالب البريد الإلكتروني غير صالح',
    'LBL_EMAIL_INVITE' => 'دعوة البريد الإلكتروني',

    'LBL_FP_EVENTS_CONTACTS_FROM_CONTACTS_TITLE' => 'جهات الإتصال',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENT_LOCATIONS_TITLE' => 'الأماكن',
    'LBL_FP_EVENTS_LEADS_1_FROM_LEADS_TITLE' => 'العملاء المحتملون',
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_PROSPECTS_TITLE' => 'المُستهدفون',

    'LBL_HOURS_ABBREV' => 'س',
    'LBL_MINSS_ABBREV' => 'د',
    'LBL_FP_EVENTS_FP_EVENT_DELEGATES_1_FROM_FP_EVENT_DELEGATES_TITLE' => 'المندوبون',

    // Attendance report
    'LBL_CONTACT_NAME' => 'الاسم',
    'LBL_ACCOUNT_NAME' => 'الشركة',
    'LBL_SIGNATURE' => 'التوقيع',
    // contacts/leads/targets subpanels
    'LBL_LIST_INVITE_STATUS_EVENT' => 'مدعو',
    'LBL_LIST_ACCEPT_STATUS_EVENT' => 'الحالة',

    'LBL_ACTIVITY_STATUS' => 'حالة النشاط',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENTS_TITLE' => 'مواقع الأحداث من عنوان الحدث',
    // Email links
    'LBL_ACCEPT_LINK' => 'قبول',
    'LBL_DECLINE_LINK' => 'رفض',
    
);
