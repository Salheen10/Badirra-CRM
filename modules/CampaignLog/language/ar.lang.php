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
    'LBL_LIST_ID' => 'معرف قائمة العملاء المتوقعين',
    'LBL_ID' => 'المُعرف',
    'LBL_TARGET_TRACKER_KEY' => 'مفتاح متعقب المستهدف',
    'LBL_TARGET_ID' => 'معرف المستهدف',
    'LBL_TARGET_TYPE' => 'نوع المستهدف',
    'LBL_ACTIVITY_TYPE' => 'نوع الحدث',
    'LBL_ACTIVITY_DATE' => 'تاريخ الحدث',
    'LBL_RELATED_ID' => 'معرف المتعلق',
    'LBL_RELATED_TYPE' => 'نوع المتعلق',
    'LBL_DELETED' => 'محذوف',
    'LBL_MODULE_NAME' => 'سجل الحملات',
    'LBL_LIST_RECIPIENT_EMAIL' => 'البريد الإلكتروني للمستلم',
    'LBL_LIST_RECIPIENT_NAME' => 'اسم المستلم',
    'LBL_ARCHIVED' => 'مؤرشف',
    'LBL_HITS' => 'الإصابات',

    'LBL_CAMPAIGN_NAME' => 'الاسم:',
    'LBL_CAMPAIGN' => 'حملة التسويق:',
    'LBL_NAME' => 'الاسم: ',
    'LBL_INVITEE' => 'جهات الإتصال',
    'LBL_LIST_CAMPAIGN_NAME' => 'حملة',
    'LBL_LIST_STATUS' => 'الحالة',
    'LBL_LIST_TYPE' => 'نوع',
    'LBL_LIST_END_DATE' => 'End Date',
    'LBL_DATE_ENTERED' => 'تاريخ الإدخال',
    'LBL_DATE_MODIFIED' => 'تاريخ التعديل',
    'LBL_MODIFIED' => 'عدل بواسطة: ',
    'LBL_CREATED' => 'أنشئ بواسطة: ',
    'LBL_TEAM' => 'الفريق: ',
    'LBL_ASSIGNED_TO' => 'أسند إلى: ',
    'LBL_CAMPAIGN_START_DATE' => 'تاريخ البدء: ',
    'LBL_CAMPAIGN_END_DATE' => 'تاريخ الانتهاء: ',
    'LBL_CAMPAIGN_STATUS' => 'الحالة: ',
    'LBL_CAMPAIGN_BUDGET' => 'الميزانية: ',
    'LBL_CAMPAIGN_EXPECTED_COST' => 'التكلفة المتوقعة: ',
    'LBL_CAMPAIGN_ACTUAL_COST' => 'التكلفة الفعلية: ',
    'LBL_CAMPAIGN_EXPECTED_REVENUE' => 'العائد المتوقع: ',
    'LBL_CAMPAIGN_TYPE' => 'النوع: ',
    'LBL_CAMPAIGN_OBJECTIVE' => 'الهدف: ',
    'LBL_CAMPAIGN_CONTENT' => 'وصف: ',
    'LBL_CREATED_LEAD' => 'تم إنشاء العميل المحتمل',
    'LBL_CREATED_CONTACT' => 'تم إنشاء جهة الاتصال',
    'LBL_CREATED_OPPORTUNITY' => 'تم إنشاء الفرصة',
    'LBL_TARGETED_USER' => 'المستخدم المستهدف',
    'LBL_SENT_EMAIL' => 'البريد المرسل',
    'LBL_LIST_FORM_TITLE' => 'الحملات المستهدفة',
    'LBL_LIST_ACTIVITY_DATE' => 'تاريخ الحدث',
    'LBL_RELATED' => 'متعلقات',
    'LBL_MORE_INFO' => 'مزيد من المعلومات',

    'LBL_CAMPAIGNS' => 'الحملات',
    'LBL_LIST_MARKETING_NAME' => 'معرف التسويق',

    'LBL_MARKETING_ID' => 'معرف التسويق',
    'LBL_RELATED_NAME' => 'اسم المتعلق',
);
