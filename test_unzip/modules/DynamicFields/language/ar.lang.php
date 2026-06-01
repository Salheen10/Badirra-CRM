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
    'LNK_NEW_CALL' => 'سجل بيانات مُكالمة',
    'LNK_NEW_MEETING' => 'جدولة اجتماع',
    'LNK_NEW_TASK' => 'إنشاء مهمة',
    'LNK_NEW_NOTE' => 'إنشاء ملاحظة أو ملف مرفق',
    'LNK_NEW_EMAIL' => 'أرشفة الرسائل',
    'LNK_CALL_LIST' => 'مكالمات',
    'LNK_MEETING_LIST' => 'اجتماعات',
    'LNK_TASK_LIST' => 'المهام',
    'LNK_NOTE_LIST' => 'ملاحظات',
    'LBL_ADD_FIELD' => 'إضافة حقل:',
    'LBL_SEARCH_FORM_TITLE' => 'بحث الوحدات',
    'COLUMN_TITLE_NAME' => 'اسم الحقل',
    'COLUMN_TITLE_DISPLAY_LABEL' => 'التسمية المعروضة',
    'COLUMN_TITLE_LABEL_VALUE' => 'قيمة التسمية',
    'COLUMN_TITLE_LABEL' => 'تسمية النظام',
    'COLUMN_TITLE_DATA_TYPE' => 'نوع البيانات',
    'COLUMN_TITLE_MAX_SIZE' => 'الحد الأعلى للحجم',
    'COLUMN_TITLE_HELP_TEXT' => 'نص المساعدة',
    'COLUMN_TITLE_COMMENT_TEXT' => 'نص التعليق',
    'COLUMN_TITLE_REQUIRED_OPTION' => 'حقل إلزامي',
    'COLUMN_TITLE_DEFAULT_VALUE' => 'القيمة الافتراضية',
    'COLUMN_TITLE_FRAME_HEIGHT' => 'ارتفاع إطار التضمين (IFrame)',
    'COLUMN_TITLE_HTML_CONTENT' => 'HTML',
    'COLUMN_TITLE_URL' => 'الرابط الافتراضي (URL)',
    'COLUMN_TITLE_AUDIT' => 'تدقيق',
    'COLUMN_TITLE_MIN_VALUE' => 'الحد الأدنى للقيمة',
    'COLUMN_TITLE_MAX_VALUE' => 'الحد الأعلى للقيمة',
    'COLUMN_TITLE_LABEL_ROWS' => 'الصفوف',
    'COLUMN_TITLE_LABEL_COLS' => 'الأعمدة',
    'COLUMN_TITLE_DISPLAYED_ITEM_COUNT' => '# العناصر المعروضة',
    'COLUMN_TITLE_AUTOINC_NEXT' => 'زيادة تلقائية للقيمة التالية',
    'COLUMN_DISABLE_NUMBER_FORMAT' => 'تعطيل التنسيق',
    'COLUMN_TITLE_ENABLE_RANGE_SEARCH' => 'تمكين البحث ضمن النطاق',
    'LBL_DROP_DOWN_LIST' => 'قائمة منسدلة',
    'LBL_RADIO_FIELDS' => 'حقول اختيار راديو',
    'LBL_MULTI_SELECT_LIST' => 'قائمة اختيار متعددة',
    'COLUMN_TITLE_PRECISION' => 'الدقة',
    'LBL_MODULE' => 'نظام فرعي',
    'COLUMN_TITLE_MASS_UPDATE' => 'تحديث جماعي',
    'COLUMN_TITLE_IMPORTABLE' => 'قابل للاستيراد',
    'COLUMN_TITLE_DUPLICATE_MERGE' => 'دمج التكرار',
    'LBL_LABEL' => 'التسمية',
    'LBL_DATA_TYPE' => 'نوع البيانات',
    'LBL_DEFAULT_VALUE' => 'القيمة الافتراضية',
    'ERR_RESERVED_FIELD_NAME' => "الكلمة المفتاحية المحجوزة",
    'ERR_SELECT_FIELD_TYPE' => 'يرجى تحديد نوع الحقل',
    'ERR_FIELD_NAME_ALREADY_EXISTS' => 'اسم الحقل موجود مسبقاً',
    'LBL_BTN_ADD' => 'إضافة',
    'LBL_BTN_EDIT' => 'تحرير',
    'LBL_GENERATE_URL' => 'إنشاء عنوان URL',
    'LBL_CALCULATED' => 'القيمة المحسوبة',
    'LBL_LINK_TARGET' => 'فتح رابط في',
    'LBL_IMAGE_WIDTH' => 'العرض',
    'LBL_IMAGE_HEIGHT' => 'الارتفاع',
    'LBL_IMAGE_BORDER' => 'الحدود',
    'LBL_HELP' => 'مساعدة' /*for 508 compliance fix*/,
    'COLUMN_TITLE_INLINE_EDIT_TEXT' => 'تحرير مضمن',
    'COLUMN_TITLE_PARENT_ENUM' => 'القائمة المنسدلة الأصل',
    'LBL_INSERT_FIELD' => 'إدراج حقل',
);
