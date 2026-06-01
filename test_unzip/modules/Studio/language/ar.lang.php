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
    'LBL_EDIT_LAYOUT' => 'تحرير التصميم',
    'LBL_EDIT_FIELDS' => 'تحرير الحقول المخصصة',
    'LBL_SELECT_FILE' => 'حدد ملف',
    'LBL_MODULE_TITLE' => 'الاستديو',
    'LBL_TOOLBOX' => 'صندوق الأدوات',
    'LBL_SUITE_FIELDS_STAGE' => 'حقول SuiteCRM (انقر على العناصر للإضافة إلى منطقة التجهيز)',
    'LBL_VIEW_SUITE_FIELDS' => 'عرض حقول SuiteCRM',
    'LBL_FAILED_TO_SAVE' => 'فشل في الحفظ',
    'LBL_CONFIRM_UNSAVE' => 'سيتم إلغاء حفظ أي تغييرات. هل أنت متأكد من أنك تريد المتابعة؟',
    'LBL_PUBLISHING' => 'جاري النشر...',
    'LBL_PUBLISHED' => 'تم نشره',
    'LBL_FAILED_PUBLISHED' => 'فشل في النشر',
    'LBL_DROP_HERE' => '[أضفه هنا]',

//CUSTOM FIELDS
    'LBL_NAME' => 'الاسم',
    'LBL_LABEL' => 'التسمية',
    'LBL_MASS_UPDATE' => 'تحديث جماعي',
    'LBL_DEFAULT_VALUE' => 'القيمة الافتراضية',
    'LBL_REQUIRED' => 'إلزامي',
    'LBL_DATA_TYPE' => 'النوع',


    'LBL_HISTORY' => 'التاريخ',

//WIZARDS

//STUDIO WIZARD
    'LBL_SW_WELCOME' => '<h2>مرحبا بك في الاستوديو!</h2><br> ماذا تريد أن تفعل اليوم؟<br><b> من فضلك اختر من الخيارات أدناه</b>',
    'LBL_SW_EDIT_MODULE' => 'تحرير وحدة',
    'LBL_SW_EDIT_DROPDOWNS' => 'تعديل القوائم المنسدلة',
    'LBL_SW_EDIT_TABS' => 'تهيئة علامات التبويب',
    'LBL_SW_RENAME_TABS' => 'إعادة تسمية علامات التبويب',
    'LBL_SW_EDIT_GROUPTABS' => 'تكوين علامات تبويب المجموعات',
    'LBL_SW_EDIT_PORTAL' => 'تحرير البوابة',
    'LBL_SW_REPAIR_CUSTOMFIELDS' => 'إصلاح الحقول المخصصة',
    'LBL_SW_MIGRATE_CUSTOMFIELDS' => 'تصدير الحقول المخصصة',

// JS LABELS
    'LBL_REBUILD_JAVASCRIPT_LANG_DESC_SHORT' => 'يعيد بناء إصدارات جافا سكريبت لملفات اللغة',
    'LBL_REBUILD_JAVASCRIPT_LANG_DESC' => 'إزالة إصدار جافا سكريبت من ملف اللغات، سيتم إعادة بنائه عند الحاجة.',


//Manager Backups History
    'LBL_MB_DELETE' => 'حذف',

//EDIT DROP DOWNS
    'LBL_ED_CREATE_DROPDOWN' => 'إنشاء قائمة منسدلة',
    'LBL_DROPDOWN_NAME' => 'اسم القائمة المنسدلة:',
    'LBL_DROPDOWN_LANGUAGE' => 'لغة القائمة المنسدلة:',
    'LBL_TABGROUP_LANGUAGE' => 'اللغة:',

//END WIZARDS

//DROP DOWN EDITOR
    'LBL_DD_DISPALYVALUE' => 'عرض القيمة',
    'LBL_DD_DATABASEVALUE' => 'قيمة قاعدة البيانات',
    'LBL_DD_ALL' => 'الكل',

//BUTTONS
    'LBL_BTN_SAVE' => 'حفظ',
    'LBL_BTN_CANCEL' => 'إلغاء',
    'LBL_BTN_SAVEPUBLISH' => 'حفظ وتنفيذ',
    'LBL_BTN_HISTORY' => 'التاريخ',
    'LBL_BTN_ADDROWS' => 'إضافة صفوف',
    'LBL_BTN_UNDO' => 'تراجع',
    'LBL_BTN_REDO' => 'إعادة',
    'LBL_BTN_ADDCUSTOMFIELD' => 'إضافة حقل مخصص',
    'LBL_BTN_TABINDEX' => 'تعديل ترتيب التبويب',

//TABS
    'LBL_MODULES' => 'الوحدات',
    'LBL_MODULE_NAME' => 'إدارة',
    'LBL_CONFIGURE_GROUP_TABS' => 'تهيئة معطيات الفرز لقوائم الوحدة',
    'LBL_GROUP_TAB_WELCOME' => 'محددات الفرز أدناه سيتم عرضها في قائمة المزيد في قائمة الوحدة للمستخدمين لاستخدامها لعرض مجموعات الوحدات داخل القائمة. سحب وإسقاط الوحدات إلى الفلاتر ومنها. ملاحظة: الفلاتر الفارغة لن يتم عرضها في القائمة.',
    'LBL_RENAME_TAB_WELCOME' => 'انقر على أي قيمة عرض علامة تبويب في الجدول أدناه لإعادة تسمية علامة التبويب.',
    'LBL_DELETE_MODULE' => 'إزالة&nbsp;وحدة<br />من&nbsp;الفرز',
    'LBL_TAB_GROUP_LANGUAGE_HELP' => 'حدد لغة متوفرة، قم بتعديل تسميات المجموعة وانقر فوق حفظ وتنفيذ لتطبيق التسميات باللغة المحددة.',
    'LBL_ADD_GROUP' => 'إضافة معطى فرز',
    'LBL_NEW_GROUP' => 'مجموعة جديدة',
    'LBL_RENAME_TABS' => 'إعادة تسمية الوحدات',

//ERRORS
    'ERROR_INVALID_KEY_VALUE' => "خطأ: قيمة المفتاح غير صالحة: [']",

//SUGAR PORTAL
    'LBL_SAVE' => 'حفظ' /*for 508 compliance fix*/,
    'LBL_UNDO' => 'تراجع' /*for 508 compliance fix*/,
    'LBL_REDO' => 'إعادة' /*for 508 compliance fix*/,
    'LBL_INLINE' => 'داخلي' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'حذف' /*for 508 compliance fix*/,
    'LBL_ADD_FIELD' => 'إضافة حقل' /*for 508 compliance fix*/,
    'LBL_MAXIMIZE' => 'تكبير' /*for 508 compliance fix*/,
    'LBL_MINIMIZE' => 'تصغير' /*for 508 compliance fix*/,
    'LBL_PUBLISH' => 'نشر' /*for 508 compliance fix*/,
    'LBL_ADDROWS' => 'إضافة صفوف' /*for 508 compliance fix*/,
    'LBL_ADDFIELD' => 'إضافة حقل' /*for 508 compliance fix*/,
    'LBL_EDIT' => 'حرر' /*for 508 compliance fix*/,

    'LBL_LANGUAGE_TOOLTIP' => 'حدد اللغة المراد تعديلها.',
    'LBL_SINGULAR' => 'التسمية بصيغة المفرد',
    'LBL_PLURAL' => 'التسمية بصيغة الجمع',
    'LBL_RENAME_MOD_SAVE_HELP' => 'انقر على <b>حفظ</b> لحفظ جميع التغييرات.'

);
