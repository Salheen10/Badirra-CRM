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
    'LBL_ALL_MODULES' => 'الكل',//rost fix
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
    'LBL_NONINHERITABLE' => 'غير قابل للاقتباس',
    'LBL_LIST_NONINHERITABLE' => 'غير قابل للتوريث',
    'LBL_NAME' => 'الاسم',
    'LBL_CREATED_USER' => 'تم الإنشاء بواسطة المستخدم',
    'LBL_MODIFIED_USER' => 'عُدل بواسطة المستخدم',
    'LBL_LIST_FORM_TITLE' => 'المجموعات الأمنية',
    'LBL_MODULE_NAME' => 'إدارة مجموعة الأمان',
    'LBL_MODULE_TITLE' => 'إدارة مجموعة الأمان',
    'LNK_NEW_RECORD' => 'إنشاء مجموعة أمنية',
    'LNK_LIST' => 'عرض كقائمة',
    'LBL_SEARCH_FORM_TITLE' => 'بحث إدارة المجموعات الأمنية',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'التاريخ',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'الأنشطة',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'إدارة المجموعات الأمنية',
    'LBL_USERS' => 'المُستخدمون',
    'LBL_USERS_SUBPANEL_TITLE' => 'المُستخدمون',
    'LBL_ROLES_SUBPANEL_TITLE' => 'الأدوار الوظيفية',
    'LBL_ROLES' => 'الأدوار الوظيفية',

    'LBL_CONFIGURE_SETTINGS' => 'تهيئة',
    'LBL_ADDITIVE' => 'الحقوق الإضافية',
    'LBL_ADDITIVE_DESC' => "يحصل المستخدم على أكبر الحقوق لجميع الأدوار المسندة إلى المستخدم أو إلى مجموعة (مجموعات) المستخدم",
    'LBL_STRICT_RIGHTS' => 'الحقوق الصارمة',
    'LBL_STRICT_RIGHTS_DESC' => "إذا كان المستخدم عضوا في عدة مجموعات، لا تستخدم إلا الحقوق ذات الصلة من المجموعة المسندة إلى السجل الحالي.",
    'LBL_USER_ROLE_PRECEDENCE' => 'سوابق دور المستخدم',
    'LBL_USER_ROLE_PRECEDENCE_DESC' => 'إذا تم إسناد أي دور مباشرة للمستخدم يجب أن يكون لذلك الدور الأسبقية على أي أدوار للمجموعة.',
    'LBL_INHERIT_TITLE' => 'قواعد الاقتباس للمجموعة',
    'LBL_INHERIT_CREATOR' => 'الاقتباس من المستخدم الذي قام بالإنشاء',
    'LBL_INHERIT_CREATOR_DESC' => 'سيقتبس السجل جميع المجموعات المسندة إلى المستخدم الذي قام بإنشائها.',
    'LBL_INHERIT_PARENT' => 'الاقتباس من سجل الأصل',
    'LBL_INHERIT_PARENT_DESC' => 'على سبيل المثال، إذا تم إنشاء قضية لجهة اتصال، فإن القضية سوف تقتبس المجموعات المرتبطة بجهة الاتصال.',
    'LBL_USER_POPUP' => 'نافذة منبثقة لمجموعة مستخدمين جديدة',
    'LBL_USER_POPUP_DESC' => 'عند إنشاء مستخدم جديد يتم عرض نافذة منبثقة بالمجموعات الأمنية لإسناد المستخدم إلى مجموعة (مجموعات).',
    'LBL_INHERIT_ASSIGNED' => 'الاقتباس من المستخدم المسند إليه',
    'LBL_INHERIT_ASSIGNED_DESC' => 'سيقتبس السجل جميع مجموعات المستخدم المسند إلى السجل. المجموعات الأخرى المسندة إلى السجل لن تتم إزالتها.',
    'LBL_POPUP_SELECT' => 'استخدام اختيار مجموعة المنشئة',
    'LBL_POPUP_SELECT_DESC' => 'عند إنشاء سجل من قبل مستخدم في أكثر من مجموعة واحدة ييتم إظهار لوحة اختيار المجموعات على شاشة الإنشاء. وإلا يتم الاقتباس من تلك المجموعة الواحدة فقط.',
    'LBL_FILTER_USER_LIST' => 'فرز قائمة المستخدمين',
    'LBL_FILTER_USER_LIST_DESC' => "يمكن للمستخدمين من غير مدراء النظام الإسناد فقط المستخدمين في نفس المجموعة (المجموعات)",

    'LBL_DEFAULT_GROUP_TITLE' => 'المجموعات الافتراضية للسجلات الجديدة',
    'LBL_ADD_BUTTON_LABEL' => 'إضافة',
    'LBL_REMOVE_BUTTON_LABEL' => 'حذف',
    'LBL_GROUP' => 'المجموعة:',
    'LBL_MODULE' => 'الوحدة:',

    'LBL_MASS_ASSIGN' => 'المجموعات الأمنية: إسناد جماعي',
    'LBL_ASSIGN' => 'تعيين',
    'LBL_REMOVE' => 'إزالة',
    'LBL_ASSIGN_CONFIRM' => 'هل أنت متأكد من أنك تريد إضافة هذه المجموعة إلى ',
    'LBL_REMOVE_CONFIRM' => 'هل أنت متأكد من أنك تريد إزالة هذه المجموعة من ',
    'LBL_CONFIRM_END' => 'السجلات المُحددة؟',

    'LBL_SECURITYGROUP_USER_FORM_TITLE' => 'المجموعة الأمنية/المستخدم',
    'LBL_USER_NAME' => 'اسم المستخدم',
    'LBL_SECURITYGROUP_NAME' => 'اسم المجموعة الأمنية',
    'LBL_HOMEPAGE_TITLE' => 'رسائل المجموعة',
    'LBL_TITLE' => 'العنوان',
    'LBL_ROWS' => 'الصفوف',
    'LBL_POST' => 'نشر',
    'LBL_SELECT_GROUP_ERROR' => 'الرجاء تحديد مجموعة وحاول مرة أخرى.',

    'LBL_GROUP_SELECT' => 'حدد المجموعات التي يجب أن يكون لها حق الوصول إلى هذا السجل',
    'LBL_ERROR_DUPLICATE' => 'بسبب احتمال اكتشاف تكرار من قبل نظام SuiteCRM سوف تضطر إلى إضافة مجموعات أمنية يدويًا إلى سجلك المنشأ حديثاً.',
    'LBL_ERROR_EXPORT_WHERE_CHANGED' => 'فشل التحديث بسبب تعديل فرز البحث. يرجى المحاولة مرة أخرى.',

    'LBL_INBOUND_EMAIL' => 'حساب البريد الإلكتروني الوارد',
    'LBL_INBOUND_EMAIL_DESC' => 'السماح فقط بالوصول إلى حساب البريد الإلكتروني إذا كان المستخدم ينتمي إلى مجموعة تم إسنادها إلى حساب البريد.',
    'LBL_PRIMARY_GROUP' => 'مجموعة أساسية',
    'LBL_CHECKMARK' => 'علامة الاختيار',

);
