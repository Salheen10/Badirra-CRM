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
    //module
    'LBL_MODULE_NAME' => 'الوثائق',
    'LBL_MODULE_TITLE' => 'الوثائق: الرئيسية',
    'LNK_NEW_DOCUMENT' => 'إنشاء وثيقة',
    'LNK_DOCUMENT_LIST' => 'عرض الوثائق',
    'LBL_DOC_REV_HEADER' => 'مراجعات الوثيقة',
    'LBL_SEARCH_FORM_TITLE' => 'بحث الوثائق',
    //vardef labels
    'LBL_NAME' => 'اسم الوثيقة',
    'LBL_DESCRIPTION' => 'الوصف',
    'LBL_CATEGORY' => 'الفئة',
    'LBL_SUBCATEGORY' => 'الفئة الفرعية',
    'LBL_STATUS' => 'الحالة',
    'LBL_CREATED_BY' => 'أنشئ بواسطة',
    'LBL_DATE_ENTERED' => 'تاريخ الإنشاء',
    'LBL_DATE_MODIFIED' => 'تاريخ التعديل',
    'LBL_DELETED' => 'محذوف',
    'LBL_MODIFIED' => 'عدل بواسطة المعرف',
    'LBL_MODIFIED_USER' => 'عدل بواسطة',
    'LBL_CREATED' => 'أنشئ بواسطة',
    'LBL_REVISIONS' => 'المراجعات',
    'LBL_RELATED_DOCUMENT_ID' => 'معرف الوثيقة ذات الصلة',
    'LBL_RELATED_DOCUMENT_REVISION_ID' => 'معرف مراجعة الوثيقة ذات الصلة',
    'LBL_IS_TEMPLATE' => 'هو قالب',
    'LBL_TEMPLATE_TYPE' => 'نوع الوثيقة',
    'LBL_ASSIGNED_TO_NAME' => 'أُسند إلى:',
    'LBL_REVISION_NAME' => 'رقم المراجعة',
    'LBL_MIME' => 'نوع mime',
    'LBL_REVISION' => 'مراجعة',
    'LBL_DOCUMENT' => 'الوثيقة ذات الصلة',
    'LBL_LATEST_REVISION' => 'أحدث مُراجعة',
    'LBL_CHANGE_LOG' => 'سجل التغييرات',
    'LBL_ACTIVE_DATE' => 'تاريخ النشر',
    'LBL_EXPIRATION_DATE' => 'تاريخ الإنتهاء',
    'LBL_FILE_EXTENSION' => 'إمتداد نوع الملف',
    'LBL_LAST_REV_MIME_TYPE' => 'نوع التنسق (MIME) لآخر مراجعة',
    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'غير محدد',
    'LBL_HOMEPAGE_TITLE' => 'وثائقي',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'وثيقة جديدة',
    //document edit and detail view
    'LBL_DOC_NAME' => 'اسم الوثيقة:',
    'LBL_FILENAME' => 'اسم الملف:',
    'LBL_LIST_FILENAME' => 'الملف:',
    'LBL_DOC_VERSION' => 'مراجعة:',
    'LBL_FILE_UPLOAD' => 'الملف:',

    'LBL_CATEGORY_VALUE' => 'الفئة:',
    'LBL_LIST_CATEGORY' => 'الفئة',
    'LBL_SUBCATEGORY_VALUE' => 'الفئة الفرعية:',
    'LBL_DOC_STATUS' => 'الحالة:',
    'LBL_LAST_REV_CREATOR' => 'تم إنشاء المراجعة بواسطة:',
    'LBL_LASTEST_REVISION_NAME' => 'اسم آخر مراجعة:',
    'LBL_SELECTED_REVISION_NAME' => 'اسم المراجعة المحددة:',
    'LBL_CONTRACT_STATUS' => 'حالة العقد:',
    'LBL_CONTRACT_NAME' => 'اسم العقد:',
    'LBL_DET_RELATED_DOCUMENT' => 'الوثائق ذات الصلة:',
    'LBL_DET_RELATED_DOCUMENT_VERSION' => "مراجعة الوثيقة ذات الصلة:",
    'LBL_DET_IS_TEMPLATE' => 'قالب؟ :',
    'LBL_DET_TEMPLATE_TYPE' => 'نوع الوثيقة:',
    'LBL_DOC_DESCRIPTION' => 'وصف:',
    'LBL_DOC_ACTIVE_DATE' => 'تاريخ النشر:',
    'LBL_DOC_EXP_DATE' => 'تاريخ الإنتهاء:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'قائمة الوثائق',
    'LBL_LIST_DOCUMENT' => 'الوثيقة',
    'LBL_LIST_SUBCATEGORY' => 'الفئة الفرعية',
    'LBL_LIST_REVISION' => 'المراجعة',
    'LBL_LIST_LAST_REV_CREATOR' => 'نُشر بواسطة',
    'LBL_LIST_LAST_REV_DATE' => 'تاريخ المراجعة',
    'LBL_LIST_VIEW_DOCUMENT' => 'عرض',
    'LBL_LIST_ACTIVE_DATE' => 'تاريخ النشر',
    'LBL_LIST_EXP_DATE' => 'تاريخ الإنتهاء',
    'LBL_LIST_STATUS' => 'الحالة',
    'LBL_LINKED_ID' => 'معرف المرتبط',
    'LBL_SELECTED_REVISION_ID' => 'معرف المراجعة المحددة',
    'LBL_LATEST_REVISION_ID' => 'معرف آخر مراجعة',
    'LBL_SELECTED_REVISION_FILENAME' => 'اسم ملف المراجعة المحددة',
    'LBL_FILE_URL' => 'رابط الملف (URL)',

    //document search form.
    'LBL_SF_CATEGORY' => 'الفئة:',
    'LBL_SF_SUBCATEGORY' => 'الفئة الفرعية:',

    'DEF_CREATE_LOG' => 'تم إنشاء الوثيقة',

    //error messages
    'ERR_DOC_NAME' => 'اسم الوثيقة',
    'ERR_DOC_ACTIVE_DATE' => 'تاريخ النشر',
    'ERR_FILENAME' => 'اسم الملف',
    'ERR_DOC_VERSION' => 'نسخة الوثيقة',
    'ERR_DELETE_CONFIRM' => 'هل تريد حذف مراجعة الوثيقة هذه؟',
    'ERR_DELETE_LATEST_VERSION' => 'غير مسموح لك بحذف أحدث مراجعة للوثيقة.',
    'LNK_NEW_MAIL_MERGE' => 'دمج البريد',
    'ERR_MISSING_FILE' => 'هذه الوثيقة تفتقر إلى ملف، على الأرجح بسبب خطأ أثناء الرفع. يرجى إعادة محاولة رفق الملف أو الاتصال بمدير النظام.',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => 'الاسم',
    'LBL_LIST_IS_TEMPLATE' => 'قالب؟',
    'LBL_LIST_TEMPLATE_TYPE' => 'نوع الوثيقة',
    'LBL_LAST_REV_CREATE_DATE' => 'تاريخ إنشاء آخر مراجعة',
    'LBL_CONTRACTS' => 'العقود',
    'LBL_CREATED_USER' => 'المستخدم الذي تم إنشاؤه',
    'LBL_DOCUMENT_INFORMATION' => 'نظرة شاملة', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_DOC_ID' => 'معرف مصدر الوثيقة',
    'LBL_DOC_TYPE' => 'المصدر',
    'LBL_DOC_TYPE_POPUP' => 'اختر المصدر الذي سيتم رفع هذه الوثيقة إليه<br> والذي سيكون متاحا منه.',
    'LBL_DOC_URL' => 'رابط مصدر الوثيقة (URL)',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'اسم الملف',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'يتم عرض أول ٢٠ ملفًا معدلًا بترتيب تنازلي في القائمة أدناه. استخدم البحث للعثور على ملفات أخرى.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'اسم الملف',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'حاول المستخدم الوصول إلى واجهة برمجة تطبيقات (API) خارجية ({0}) غير صالحة',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'فشل التحقق من تسجيل الدخول لواجهة برمجة التطبيقات (API) الخارجية ({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'الحسابات',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'جهات الاتصال',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'الفرص',
    'LBL_CASES_SUBPANEL_TITLE' => 'القضايا',
    'LBL_BUGS_SUBPANEL_TITLE' => 'أخطاء',

    'LBL_AOS_CONTRACTS' => 'العقود',
);
