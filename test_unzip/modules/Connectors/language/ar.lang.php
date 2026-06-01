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

    'LBL_ADMINISTRATION_MAIN' => 'إعدادات الموصّل',
    'LBL_AVAILABLE' => 'متاح',
    'LBL_BACK' => '< رجوع',
    'LBL_CONFIRM_CONTINUE_SAVE' => 'بعض الحقول الإلزامية قد تركت فارغة. هل تريد المتابعة لحفظ التغييرات؟',
    'LBL_CONNECTOR_FIELDS' => 'حقول الموصّل',
    'LBL_DATA' => 'البيانات',
    'LBL_DEFAULT' => 'الإفتراضي',
    'LBL_DISABLED' => 'غير مفعل',
    'LBL_ENABLED' => 'مفعل',
    'LBL_EXTERNAL' => 'تمكين المستخدمين من إنشاء سجلات حسابات خارجية لهذا الموصل.',
    'LBL_EXTERNAL_SET_PROPERTIES' => ' من أجل استخدام هذا الموصل، يجب أيضا تعيين الخصائص في صفحة إعدادات خصائص الموصل.',
    'LBL_MERGE' => 'دمج',
    'LBL_MODIFY_DISPLAY_TITLE' => 'تمكين الموصلات',
    'LBL_MODIFY_DISPLAY_DESC' => 'حدد الوحدات الممكَّنة لكل موصل.',
    'LBL_MODULE_FIELDS' => 'حقول الوحدة',
    'LBL_MODIFY_MAPPING_TITLE' => 'تعيين اقتران حقول الموصل',
    'LBL_MODIFY_MAPPING_DESC' => 'تعيين اقتران حقول الموصل بحقول الوحدة لتحديد بيانات الموصل التي يمكن عرضها ودمجها في سجلات الوحدة.',
    'LBL_MODIFY_PROPERTIES_TITLE' => 'ضبط خصائص الموصّل',
    'LBL_MODIFY_PROPERTIES_DESC' => 'تهيئة الخصائص لكل موصل، بما في ذلك عناوين URL ومفاتيح API.',
    'LBL_MODIFY_SEARCH_TITLE' => 'إدارة بحث الموصلات',
    'LBL_MODIFY_SEARCH' => 'بحث',
    'LBL_MODIFY_SEARCH_DESC' => 'حدد حقول الموصل التي ستسخدم للبحث عن البيانات لكل وحدة.',
    'LBL_MODULE_NAME' => 'الموصلات',
    'LBL_NO_PROPERTIES' => 'لا توجد خصائص قابلة للتهيئة لهذا الموصل.',
    'LBL_SAVE' => 'حفظ',
    'LBL_SUMMARY' => 'ملخص',
    'LBL_STEP1' => 'البحث وعرض البيانات',
    'LBL_STEP2' => 'دمج السجلات مع',
    'LBL_TEST_SOURCE' => 'اختبار الموصل',
    'LBL_TEST_SOURCE_FAILED' => 'فشل الاختبار',
    'LBL_TEST_SOURCE_SUCCESS' => 'تم الاختبار بنجاح',
    'LBL_TITLE' => 'دمج البيانات',

    'ERROR_NO_ADDITIONAL_DETAIL' => 'خطأ: لم يتم العثور على تفاصيل إضافية للسجل.',
    'ERROR_NO_SEARCHDEFS_DEFINED' => 'لم يتم تمكين أي وحدات لهذا الموصل. حدد وحدة لهذا الموصل في صفحة تمكين الموصل.',
    'ERROR_NO_SEARCHDEFS_MAPPED' => 'خطأ: لا توجد موصلات مفعلة تحتوي على حقول بحث معرّفة.',
    'ERROR_NO_SEARCHDEFS_MAPPING' => 'خطأ: لا توجد حقول بحث محددة للوحدة والموصل. الرجاء الاتصال بمدير النظام.',
    'ERROR_NO_DISPLAYABLE_MAPPED_FIELDS' => 'خطأ: لا توجد أي حقول وحدة تم تعيينها لعرضها في النتائج. الرجاء الاتصال بمدير النظام.',
    'LBL_INFO_INLINE' => 'معلومات' /*for 508 compliance fix*/,
    'LBL_CLOSE' => 'إغلاق' /*for 508 compliance fix*/,

);
