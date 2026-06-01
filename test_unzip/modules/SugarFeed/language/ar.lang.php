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
    'LBL_SAVING' => 'حفظ......',
    'LBL_SAVED' => 'تم حفظه',
    'LBL_CREATED_USER' => 'تم الإنشاء بواسطة المستخدم',
    'LBL_MODIFIED_USER' => 'عُدل بواسطة المستخدم',
    'LBL_LIST_FORM_TITLE' => 'قائمة الموجزات',
    'LBL_MODULE_NAME' => 'تيارات الأنشطة',
    'LBL_MODULE_TITLE' => 'تيارات الأنشطة',
    'LBL_DASHLET_DISABLED' => 'تحذير: نظام الموجزات معطل، لن يتم نشر الإدخالات الجديدة حتى يتم تفعيله',
    'LBL_RECORDS_DELETED' => 'تم إزالة جميع إدخالات الموجز السابقة، إذا تم تمكين نظام الموجزات ، سيتم إنشاء إدخالات جديدة تلقائياً.',
    'LBL_CONFIRM_DELETE_RECORDS' => 'هل أنت متأكد من أنك تريد حذف جميع إدخالات الموجز؟',
    'LBL_FLUSH_RECORDS' => 'حذف مدخلات الموجز',
    'LBL_ENABLE_FEED' => 'تمكين التطبيق الفرعي لتيار الأنشطة الخاص بي',
    'LBL_ENABLE_MODULE_LIST' => 'تفعيل الموجزات لـ',
    'LBL_HOMEPAGE_TITLE' => 'تيارات الأنشطة الخاصة بي',
    'LNK_NEW_RECORD' => 'إنشاء موجز',
    'LNK_LIST' => 'موجز',
    'LBL_SEARCH_FORM_TITLE' => 'بحث الموجزات',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'عرض التاريخ',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'الأنشطة',
    'LBL_NEW_FORM_TITLE' => 'موجز جديد',
    'LBL_ALL' => 'الكل',
    'LBL_USER_FEED' => 'موجز المستخدم',
    'LBL_ENABLE_USER_FEED' => 'تفعيل موجز المستخدم',
    'LBL_TO' => 'مرئي للفريق',
    'LBL_IS' => 'هو',
    'LBL_DONE' => 'تم',
    'LBL_TITLE' => 'العنوان',
    'LBL_ROWS' => 'الصفوف',
    'LBL_CATEGORIES' => 'الوحدات',
    'LBL_TIME_LAST_WEEK' => 'الأسبوع الماضي',
    'LBL_TIME_WEEKS' => 'أسابيع',
    'LBL_TIME_DAYS' => 'أيام',
    'LBL_TIME_YESTERDAY' => 'أمس',
    'LBL_TIME_HOURS' => 'ساعات',
    'LBL_TIME_HOUR' => 'ساعات',
    'LBL_TIME_MINUTES' => 'دقائق',
    'LBL_TIME_MINUTE' => 'دقيقة',
    'LBL_TIME_SECONDS' => 'ثواني',
    'LBL_TIME_SECOND' => 'نانية',
    'LBL_TIME_AND' => 'و',
    'LBL_TIME_AGO' => 'مضت',
// Activity stream
    'CREATED_CONTACT' => 'أنشأ {0} <b>جديد</b>',
    'CREATED_OPPORTUNITY' => 'أنشأ {0} <b>جديد</b>',
    'CREATED_CASE' => 'أنشأ {0} <b>جديد</b>',
    'CREATED_LEAD' => 'أنشأ {0} <b>جديد</b>',
    'FOR' => 'الخاص بـ', // Activity stream for cases
    'FOR_AMOUNT' => 'للمبلغ', // Activity stream for cases
    'CLOSED_CASE' => '<b>أغلق</b> {0} ',
    'CONVERTED_LEAD' => '<b>حوّل</b> {0}',
    'WON_OPPORTUNITY' => 'قد <b>نجح في تحقيق</b> {0}',
    'WITH' => 'مع',

    'LBL_LINK_TYPE_Link' => 'رابط',
    'LBL_LINK_TYPE_Image' => 'صورة',
    'LBL_LINK_TYPE_YouTube' => 'يوتيوب&#153;',

    'LBL_SELECT' => 'اختر',
    'LBL_POST' => 'نشر',
    'LBL_AUTHENTICATE' => 'الاتصال بـ',
    'LBL_AUTHENTICATION_PENDING' => 'لم تتم المصادقة على جميع الحسابات الخارجية التي اخترتها. انقر على \'إلغاء\' للعودة إلى نافذة الخيارات لمصادقة الحسابات الخارجية، أو انقر على \'موافق\' للمتابعة دون مصادقة.',
    'LBL_ADVANCED_SEARCH' => 'فلتر متقدم' /*for 508 compliance fix*/,
    'LBL_SHOW_MORE_OPTIONS' => 'إظهار المزيد من الخيارات',
    'LBL_HIDE_OPTIONS' => 'إخفاء الخيارات',
    'LBL_VIEW' => 'عرض',
    'LBL_POST_TITLE' => 'تحديث حالة النشر لـ ',
    'LBL_URL_LINK_TITLE' => 'رابط (URL) المستخدم',
);
