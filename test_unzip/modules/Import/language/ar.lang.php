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
    'LBL_RECORDS_SKIPPED_DUE_TO_ERROR' => 'لم يتم استيراد الصفوف بسبب خطأ',
    'LBL_UPDATE_SUCCESSFULLY' => 'تم تحديث السجلات بنجاح',
    'LBL_SUCCESSFULLY_IMPORTED' => 'تم إنشاء السجلات',
    'LBL_STEP_4_TITLE' => 'الخطوة {0}: استيراد الملف',
    'LBL_STEP_5_TITLE' => 'الخطوة {0}: عرض نتائج الاستيراد',
    'LBL_CUSTOM_ENCLOSURE' => 'تم تأهيل الحقول بواسطة:',
    'LBL_ERROR_UNABLE_TO_PUBLISH' => 'لم نتمكن من النشر. تم نشر خريطة استيراد أخرى بنفس الاسم.',
    'LBL_ERROR_UNABLE_TO_UNPUBLISH' => 'لم نتمكن من إلغاء نشر خريطة مملوكة لمستخدم آخر. أنت تمتلك خريطة استيراد بنفس الاسم.',
    'LBL_ERROR_IMPORTS_NOT_SET_UP' => 'لم يتم إعداد الاستيراد لهذا النوع من الوحدات',
    'LBL_IMPORT_TYPE' => 'ماذا تريد أن تفعل بالبيانات المستوردة؟',
    'LBL_IMPORT_BUTTON' => 'إنشاء سجلات جديدة فقط',
    'LBL_UPDATE_BUTTON' => 'إنشاء سجلات جديدة وتحديث السجلات الموجودة',
    'LBL_CREATE_BUTTON_HELP' => 'استخدم هذا الخيار لإنشاء سجلات جديدة. ملاحظة: الصفوف في ملف الاستيراد التي تحتوي على قيم تتطابق مع معرفات سجلات موجودة من قبل لن يتم استيرادها إذا تم تعيين اقتران القيم بحقل المعرف.',
    'LBL_UPDATE_BUTTON_HELP' => 'استخدم هذا الخيار لتحديث السجلات الموجودة. سيتم مطابقة البيانات الموجودة في ملف الاستيراد مع السجلات الموجودة استنادًا إلى معرف السجل في ملف الاستيراد.',
    'LBL_ERROR_INVALID_BOOL' => 'قيمة منطقية ثنائية (boolean) غير صالحة',
    'LBL_IMPORT_ERROR' => 'أخطاء الاستيراد:',
    'LBL_ERROR' => 'خطأ',
    'LBL_FIELD_NAME' => 'اسم الحقل',
    'LBL_VALUE' => 'القيمة',
    'LBL_NONE' => 'لاشئ',
    'LBL_REQUIRED_VALUE' => 'قيمة إلزامية مفقودة',
    'LBL_ERROR_SYNC_USERS' => 'قيمة غير صالحة للمزامنة مع آوتلوك: ',
    'LBL_ID_EXISTS_ALREADY' => 'المعرف موجود من قبل في هذا الجدول',
    'LBL_ASSIGNED_USER' => 'إذا كان المستخدم غير موجود استخدم المستخدم الحالي',
    'LBL_ERROR_DELETING_RECORD' => 'خطأ في حذف السجل:',
    'LBL_ERROR_INVALID_ID' => 'المعرف المقدم طويل جدا بحيث لا يتلاءم مع حجم الحقل (الحد الأقصى للطول هو ٣٦ حرفا)',
    'LBL_ERROR_INVALID_PHONE' => 'رقم الهاتف غير صالح',
    'LBL_ERROR_INVALID_NAME' => 'النص طويل جدا ليتناسب مع حجم الحقل',
    'LBL_ERROR_INVALID_VARCHAR' => 'النص طويل جدا ليتناسب مع حجم الحقل',
    'LBL_ERROR_INVALID_DATE' => 'تاريخ غير صالح',
    'LBL_ERROR_INVALID_DATETIME' => 'التاريخ والوقت غير صالح',
    'LBL_ERROR_INVALID_DATETIMECOMBO' => 'التاريخ والوقت غير صالح',
    'LBL_ERROR_INVALID_TIME' => 'وقت غير صالح',
    'LBL_ERROR_INVALID_INT' => 'قيمة عدد صحيح غير صالحة',
    'LBL_ERROR_INVALID_NUM' => 'قيمة رقم غير صالحة',
    'LBL_ERROR_INVALID_EMAIL' => 'عنوان البريد الإلكتروني غير صالح',
    'LBL_ERROR_INVALID_USER' => 'اسم المستخدم أو المعرف غير صالح',
    'LBL_ERROR_INVALID_TEAM' => 'اسم الفريق أو معرفه غير صالح',
    'LBL_ERROR_INVALID_ACCOUNT' => 'اسم الحساب أو معرفه غير صالح',
    'LBL_ERROR_INVALID_RELATE' => 'حقل علاقة غير صالح',
    'LBL_ERROR_INVALID_CURRENCY' => 'قيمة العملة غير صالحة',
    'LBL_ERROR_INVALID_FLOAT' => 'رقم الرقم غير الصحيح (floating) غير صالح',
    'LBL_ERROR_NOT_IN_ENUM' => 'القيمة غير موجودة في القائمة المنسدلة. القيم المسموح بها هي: ',
    'LBL_IMPORT_MODULE_ERROR_NO_UPLOAD' => 'لم يتم تحميل الملف بنجاح. قد يكون إعداد \'upload_max_filesize\' في ملف php.ini الخاص بك مهيأ بقيمة صغيرة',
    'LBL_MODULE_NAME' => 'استيراد',
    'LBL_TRY_AGAIN' => 'حاول مرة أخرى',
    'LBL_IMPORT_ERROR_MAX_REC_LIMIT_REACHED' => 'ملف الاستيراد يحتوي على {0} صفوف. العدد الأمثل للصفوف هو {1}. زيادة الصفوف قد تبطئ عملية الاستيراد. انقر موافق لمواصلة الاستيراد. انقر إلغاء لتنقيح وإعادة تحميل ملف الاستيراد.',
    'ERR_IMPORT_SYSTEM_ADMININSTRATOR' => 'لا يمكنك استيراد مستخدم مدير النظام',
    'ERR_MULTIPLE' => 'تم تعريف أعمدة متعددة بنفس اسم الحقل.',
    'ERR_MISSING_REQUIRED_FIELDS' => 'حقول إلزامية مفقودة:',
    'ERR_SELECT_FILE' => 'حدد الملف الذي ترغب برفعه.',
    'LBL_SELECT_FILE' => 'اختيار الملف:',
    'LBL_EXTERNAL_SOURCE' => 'تطبيق أو خدمة خارجية',
    'LBL_CUSTOM_DELIMITER' => 'علامة الفاصل بين الحقول هي:',
    'LBL_DONT_MAP' => '-- لا تقرن هذا الحقل --',
    'LBL_STEP_MODULE' => 'ما هي الوحدة التي تريد استيراد البيانات إليها؟',
    'LBL_STEP_1_TITLE' => 'الخطوة رقم ١: حدد مصدر البيانات',
    'LBL_CONFIRM_TITLE' => 'الخطوة رقم {0}: تأكيد خصائص ملف الاستيراد',
    'LBL_MICROSOFT_OUTLOOK' => 'مايكروسوف آوتلوك',
    'LBL_MICROSOFT_OUTLOOK_HELP' => 'يعتمد تعيين الاقتران المخصص لمايكروسوف آوتلوك على أن تكون علامة الفصل بين الحقول في ملف الاستيراد هي الفاصلة (,) (ملف csv). إذا علامة الفصل بين الحقول في ملف الاستيراد الخاص بك هي المسافة الطويلة (tab) ، فلن يتم تطبيق الاقتران بالشكل المتوقع.',
    'LBL_SALESFORCE' => 'Salesforce.com',
    'LBL_PUBLISH' => 'نشر',
    'LBL_DELETE' => 'حذف',
    'LBL_PUBLISHED_SOURCES' => 'لاستخدام إعدادات الاستيراد المحددة مسبقا، اختر من الأسفل:',
    'LBL_UNPUBLISH' => 'إلغاء النشر',
    'LBL_NEXT' => 'التالي >',
    'LBL_BACK' => '< رجوع',
    'LBL_STEP_2_TITLE' => 'الخطوة رقم {0}: رفع ملف الاستيراد',
    'LBL_HAS_HEADER' => 'صف الترويسة:',
    'LBL_NUM_1' => '١.',
    'LBL_NUM_2' => '٢.',
    'LBL_NUM_3' => '٣.',
    'LBL_NUM_4' => '٤.',
    'LBL_NUM_5' => '٥.',
    'LBL_NUM_6' => '٦.',
    'LBL_NUM_7' => '٧.',
    'LBL_NUM_8' => '٨.',
    'LBL_NUM_9' => '٩.',
    'LBL_NUM_10' => '١٠.',
    'LBL_NUM_11' => '١١.',
    'LBL_NUM_12' => '١٢.',
    'LBL_NOTES' => 'ملاحظات:',
    'LBL_STEP_3_TITLE' => 'الخطوة رقم {0}: تأكيد اقتران الحقول',
    'LBL_STEP_DUP_TITLE' => 'الخطوة رقم {0}: التحقق من التكرارات المحتملة',
    'LBL_DATABASE_FIELD' => 'حقل الوحدة',
    'LBL_HEADER_ROW' => 'صف الترويسة',
    'LBL_HEADER_ROW_OPTION_HELP' => 'حدد إذا كان الصف العلوي من ملف الاستيراد هو صف ترويسات يحتوي على تسميات الحقول.',
    'LBL_ROW' => 'الصف',
    'LBL_CONTACTS_NOTE_1' => 'إما اسم العائلة أو الاسم الكامل يجب تعيين اقترانه.',
    'LBL_CONTACTS_NOTE_2' => 'إذا تم تعيين اقتران الاسم الكامل، فسيتم تجاهل الاسم الأول واسم العائلة.',
    'LBL_CONTACTS_NOTE_3' => 'إذا تم تعيين اقتران الاسم الكامل، فسيتم تقسيم البيانات في الاسم الكامل إلى الاسم الأول واسم العائلة عند إدراجها في قاعدة البيانات.',
    'LBL_CONTACTS_NOTE_4' => 'حقول العناوين التي تنتهي بالشارع ٢ والشارع ٣ يتم دمجها مع حقل العنوان للشارع الرئيسي عند إدخالها في قاعدة البيانات.',
    'LBL_ACCOUNTS_NOTE_1' => 'حقول العناوين التي تنتهي بالشارع ٢ والشارع ٣ يتم دمجها مع حقل العنوان للشارع الرئيسي عند إدخالها في قاعدة البيانات.',
    'LBL_IMPORT_NOW' => 'استيراد الآن',
    'LBL_' => '',
    'LBL_CANNOT_OPEN' => 'لا يمكن فتح الملف المستورد للقراءة',
    'LBL_NO_LINES' => 'لم يتم العثور على أية أسطر في ملف الاستيراد الخاص بك. الرجاء التأكد من عدم وجود أسطر فارغة في الملف الخاص بك وحاول مرة أخرى.',
    'LBL_SUCCESS' => 'نجاح:',
    'LBL_LAST_IMPORT_UNDONE' => 'تم التراجع عن الاستيراد.',
    'LBL_NO_IMPORT_TO_UNDO' => 'ليس هناك استيراد للتراجع عنه.',
    'LBL_CREATED_TAB' => 'السجلات التي تم إنشاؤها',
    'LBL_DUPLICATE_TAB' => 'التكرارات',
    'LBL_ERROR_TAB' => 'أخطاء',
    'LBL_IMPORT_MORE' => 'استيراد مرة أخرى',
    'LBL_FINISHED' => 'انتهى',
    'LBL_UNDO_LAST_IMPORT' => 'التراجع عن الاستيراد',
    'LBL_DUPLICATES' => 'تم العثور على تكرارات',
    'LNK_DUPLICATE_LIST' => 'تنزيل قائمة التكرارات',
    'LNK_ERROR_LIST' => 'تنزيل قائمة الأخطاء',
    'LNK_RECORDS_SKIPPED_DUE_TO_ERROR' => 'تنزيل قائمة الصفوف التي لم يتم استيرادها',
    'LBL_INDEX_USED' => 'الحقول التي سيتم التحقق منها:',
    'LBL_INDEX_NOT_USED' => 'الحقول المتاحة:',
    'LBL_IMPORT_FIELDDEF_ID' => 'رقم معرف فريد',
    'LBL_IMPORT_FIELDDEF_RELATE' => 'الاسم أو المعرف',
    'LBL_IMPORT_FIELDDEF_PHONE' => 'رقم الهاتف',
    'LBL_IMPORT_FIELDDEF_TEAM_LIST' => 'اسم الفريق أو معرفه',
    'LBL_IMPORT_FIELDDEF_NAME' => 'أي نص',
    'LBL_IMPORT_FIELDDEF_VARCHAR' => 'أي نص',
    'LBL_IMPORT_FIELDDEF_TEXT' => 'أي نص',
    'LBL_IMPORT_FIELDDEF_TIME' => 'الوقت',
    'LBL_IMPORT_FIELDDEF_DATE' => 'التاريخ',
    'LBL_IMPORT_FIELDDEF_ASSIGNED_USER_NAME' => 'اسم المستخدم أو المعرف',
    'LBL_IMPORT_FIELDDEF_BOOL' => '\'٠\' أو \'١\'',
    'LBL_IMPORT_FIELDDEF_ENUM' => 'قائمة',
    'LBL_IMPORT_FIELDDEF_EMAIL' => 'عنوان البريد الإلكتروني',
    'LBL_IMPORT_FIELDDEF_INT' => 'رقمي (بدون كسور)',
    'LBL_IMPORT_FIELDDEF_DOUBLE' => 'رقمي (بدون كسور)',
    'LBL_IMPORT_FIELDDEF_NUM' => 'رقمي (بدون كسور)',
    'LBL_IMPORT_FIELDDEF_CURRENCY' => 'رقمي (الكسور مسموحة)',
    'LBL_IMPORT_FIELDDEF_FLOAT' => 'رقمي (الكسور مسموحة)',
    'LBL_DATE_FORMAT' => 'تنسيق التاريخ:',
    'LBL_TIME_FORMAT' => 'تنسيق الوقت:',
    'LBL_TIMEZONE' => 'المنطقة الزمنية:',
    'LBL_ADD_ROW' => 'إضافة حقل',
    'LBL_REMOVE_ROW' => 'إزالة الحقل',
    'LBL_DEFAULT_VALUE' => 'القيمة الافتراضية',
    'LBL_SHOW_ADVANCED_OPTIONS' => 'عرض خصائص ملف الاستيراد',
    'LBL_HIDE_ADVANCED_OPTIONS' => 'إخفاء خصائص ملف الاستيراد',
    'LBL_SHOW_NOTES' => 'عرض الملاحظات',
    'LBL_HIDE_NOTES' => 'إخفاء الملاحظات',
    'LBL_SAVE_MAPPING_AS' => 'لحفظ إعدادات الاستيراد، قم بإدخال اسم للإعدادات المحفوظة:',
    'LBL_IMPORT_COMPLETE' => 'خروج',
    'LBL_IMPORT_COMPLETED' => 'اكتمل الاستيراد',
    'LBL_IMPORT_RECORDS' => 'يتم استيراد السجلات',
    'LBL_IMPORT_RECORDS_OF' => 'الخاص ب',
    'LBL_IMPORT_RECORDS_TO' => 'إلى',
    'LBL_CURRENCY' => 'العملة:',
    'LBL_CURRENCY_SIG_DIGITS' => 'أرقام العملة المهمة',
    'LBL_NUMBER_GROUPING_SEP' => 'فاصلة آلالاف:',
    'LBL_DECIMAL_SEP' => 'الفاصلة العشرية:',
    'LBL_LOCALE_DEFAULT_NAME_FORMAT' => 'تنسيق عرض الإسم',
    'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'مثال',
    'LBL_LOCALE_NAME_FORMAT_DESC' => '<i>بادئة الاسم "s" ، الاسم الأول ، الاسم الأخير "l"</i>',
    'LBL_CHARSET' => 'ترميز الملف:',
    'LBL_MY_SAVED_HELP' => 'استخدم هذا الخيار لتطبيق إعدادات الاستيراد المسبق الخاصة بك، بما في ذلك خصائص الاستيراد، وتعيينات الاقتران، وأي إعدادات للتحقق من التكرار، لهذا الاستيراد.<br><br>انقر على <b>حذف</b> لحذف تعيينات الاقتران لجميع المستخدمين.',
    'LBL_MY_SAVED_ADMIN_HELP' => 'استخدم هذا الخيار لتطبيق إعدادات الاستيراد المسبق الخاصة بك، بما في ذلك خصائص الاستيراد، وتعيينات الاقتران، وأي إعدادات للتحقق من التكرار، لهذا الاستيراد.<br><br>انقر على <b>نشر</b> لجعل تعيين الاقتران متاحا للمستخدمين الآخرين.<br>انقر على <b>إلغاء النشر</b> لجعل تعيين الاقتران غير متاح للمستخدمين الآخرين.<br>انقر على <b>حذف</b> لحذف تعيين اقتران لجميع المستخدمين.',
    'LBL_ENCLOSURE_HELP' => '<p><b>حرف التحقق</b> يستخدم للإحاطة بمحتوى الحقل المقصود، بما في ذلك أي أحرف تستخدم كمؤشرات للفواصل بين الحقول.<br><br>مثال: إذا كان مؤشر الفواصل بين الحقول هو فاصلة (,) وكان حرف التحقق هو علامة اقتباس (")، يتم استيراد
<br><b>"صنعاء, اليمن"</b> على أنها حقل واحد فقط في النظام ويظهر بشكل <b>صنعاء, اليمن</b>.<br>إذا لم يكن هناك حروف تحقق، أو إذا كانت حرف مختلف هو حرف التحقق،
<br>فسيتم استيراد<b>"صنعاء, اليمن"</b> إلى حقلين متجاورين وتطهر بشكل <b>"صنعاء</b> و <b>اليمن"</b>.<br><br>ملاحظة: قد لا يحتوي ملف الاستيراد على أي أحرف تحقق.<br>حرف التحقق الافتراضي للملفات التي مؤشر الفواصل بين الحقول فيها هو الفاصلة (,) أو المسافة الطويلة (tab) والتي تم إنشاؤها في برنامج Excel هو علامة الاقتباس (").</p>',
    'LBL_DATABASE_FIELD_HELP' => 'هذا العمود يعرض جميع الحقول في الوحدة. حدد حقل لتعيين اقتران البيانات مع صفوف ملف الاستيراد.',
    'LBL_HEADER_ROW_HELP' => 'يعرض هذا العمود التسميات في صف الترويسات في ملف الاستيراد.',
    'LBL_DEFAULT_VALUE_HELP' => 'حدد القيمة التي سيتم تسجيلها للحقل في السجلات التي يتم إنشاؤها أو تحديثها إذا كان الحقل في ملف الاستيراد لا يحتوي على بيانات.',
    'LBL_ROW_HELP' => 'يعرض هذا العمود البيانات في الصف الأول غير صف الترويسات من ملف الاستيراد. إذا كانت تسميات صف الترويسات تظهر في هذا العمود، انقر على العودة لتحديد صف الترويسات في خصائص ملف الاستيراد.',
    'LBL_SAVE_MAPPING_HELP' => 'أدخل اسما لحفظ إعدادات الاستيراد، بما في ذلك تعيينات الاقتران للحقول والفهارس المستخدمة للتحقق من التكرار. يمكن استخدام إعدادات الاستيراد المحفوظة للاستيراد في المستقبل.',
    'LBL_IMPORT_FILE_SETTINGS_HELP' => 'أثناء رفع ملف الاستيراد الخاص بك، يمكن اكتشاف بعض خصائص الملف تلقائيا. قم باستعراض وإدارة هذه الخصائص، حسب<br> اللزوم. ملاحظة: الإعدادات المقدمة هنا تتعلق بهذا الاستيراد<br> ولن تتجاوز الإعدادات العامة للمستخدم.',
    'LBL_IMPORT_STARTED' => 'بدأ الاستيراد:',
    'LBL_RECORD_CANNOT_BE_UPDATED' => 'تعذر تحديث السجل بسبب مشكلة في الأذونات',
    'LBL_DELETE_MAP_CONFIRMATION' => 'هل أنت متأكد من أنك تريد حذف هذه المجموعة المحفوظة من إعدادات الاستيراد؟',
    'LBL_THIRD_PARTY_CSV_SOURCES' => 'إذا تم تصدير بيانات ملف الاستيراد من أي من المصادر التالية، اختر أي منها.',
    'LBL_THIRD_PARTY_CSV_SOURCES_HELP' => 'حدد المصدر لتطبيق تعيينات اقتران مخصصة تلقائياً من أجل تبسيط عملية تعيين الاقتران (الخطوة التالية).',
    'LBL_EXAMPLE_FILE' => 'تنزيل نموذج ملف الاستيراد',
    'LBL_CONFIRM_IMPORT' => 'لقد اخترت تحديث السجلات أثناء عملية الاستيراد. لا يمكن التراجع عن التحديثات التي أجريت للسجلات الموجودة. غير أن السجلات التي أنشئت أثناء عملية الاستيراد يمكن التراجع عنها (حذفها)، إذا رغبت في ذلك. انقر على إلغاء لتحديد لإنشاء سجلات جديدة فقط، أو انقر موافق للمتابعة.',
    'LBL_CONFIRM_MAP_OVERRIDE' => 'تحذير: لقد قمت من قبل بتحديد تعيين اقتران مخصص لهذا الاستيراد، هل تريد الاستمرار؟',
    'LBL_SAMPLE_URL_HELP' => 'تنزيل عينة لملف استيراد يحتوي على صف ترويسات لحقول الوحدة. يمكن استخدام الملف كنموذج لإنشاء ملف استيراد يحتوي على البيانات التي ترغب في استيرادها.',
    'LBL_AUTO_DETECT_ERROR' => 'تعذر اكتشاف مؤشر الفواصل بين الحقول وحرف التحقق في ملف الاستيراد. الرجاء التحقق من الإعدادات في خصائص ملف الاستيراد.',
    'LBL_MIME_TYPE_ERROR_1' => 'يبدو أن الملف المحدد لا يحتوي على قائمة بها مؤشرات فواصل بين الحقول. الرجاء التحقق من نوع الملف. نحن نوصي بملفات مؤشر الفواصل بين حقولها هو حرف الفاصلة (,) (.csv).',
    'LBL_MIME_TYPE_ERROR_2' => 'للمضي قدما في استيراد الملف المحدد، انقر على موافق. لتحميل ملف جديد، انقر على المحاولة مرة أخرى.',
    'LBL_FIELD_DELIMETED_HELP' => 'تحدد علامة الفاصل بين الحقول الحرف المستخدم لفصل أعمدة الحقول.',
    'LBL_FILE_UPLOAD_WIDGET_HELP' => 'حدد ملفًا يحتوي على بيانات تفصلها علامة الفاصل بين الحقول، مثل ملف تكون علامة الفصل بين حقوله هي الفواصل (,) أو المسافة الطويلة (Tab). ينصح بالملفات من نوع csv.',
    'LBL_ERROR_IMPORT_CACHE_NOT_WRITABLE' => 'مجلد ذاكرة التخزين المؤقت المستورد غير قابل للكتابة.',
    'LBL_ADD_FIELD_HELP' => 'استخدم هذا الخيار لإضافة قيمة إلى حقل في جميع السجلات التي تم إنشاؤها و/أو تحديثها. حدد الحقل ثم أدخل أو اختر قيمة لهذا الحقل في عمود القيمة الافتراضية.',
    'LBL_MISSING_HEADER_ROW' => 'لم يتم العثور على صف للترويسات',
    'LBL_CANCEL' => 'إلغاء',
    'LBL_SELECT_DS_INSTRUCTION' => 'هل أنت مستعد لبدء الاستيراد؟ حدد مصدر البيانات التي ترغب في استيرادها.',
    'LBL_SELECT_UPLOAD_INSTRUCTION' => 'حدد ملف على جهاز الكمبيوتر الخاص بك يحتوي على البيانات التي ترغب في استيرادها، أو قم بتنزيل القالب للحصول على دفعة تساعدك في البدء بإنشاء ملف الاستيراد.',
    'LBL_SELECT_PROPERTY_INSTRUCTION' => 'إليك كيف تظهر الصفوف الأولى من ملف الاستيراد من خلال خصائص الملف المكتشف. إذا تم اكتشاف صف للترويسات، فإنه يتم عرضه في الصف العلوي من الجدول. عرض خصائص ملف الاستيراد لإجراء تغييرات على الخصائص المكتشفة ولتعيين خصائص إضافية. تحديث الإعدادات سيؤدي إلى تحديث البيانات المعروضة في الجدول.',
    'LBL_SELECT_MAPPING_INSTRUCTION' => 'يحتوي الجدول أدناه على جميع الحقول في الوحدة التي يمكن تعيين اقترانها بالبيانات في ملف الاستيراد. إذا كان الملف يحتوي على صف للترويسات، فقد تم عمل اقتران للأعمدة في الملف بالحقول المطابقة. تحقق من صحة الاقتران للتأكد من أنه كما تتوقعه، وقم بإجراء التغييرات اللازمة. لمساعدتك على التحقق من الاقترانات، يعرض الصف الأول البيانات في الملف. تأكد من الاقتران بين جميع الحقول المطلوبة (تم تمييزها بواسطة علامة النجمة).',
    'LBL_SELECT_DUPLICATE_INSTRUCTION' => 'لتجنب إنشاء سجلات مكررة، حدد أي من الحقول المربوطة ترغب في استخدامها لإجراء التحقق من التكرار أثناء استيراد البيانات. سيتم التحقق من القيم الموجودة في السجلات الموجودة في الحقول المحددة مقابل البيانات الموجودة في ملف الاستيراد. إذا تم العثور على بيانات مطابقة، سيتم عرض الصفوف في ملف الاستيراد التي تحتوي على البيانات جنبا إلى جنب مع نتائج الاستيراد (الصفحة التالية). ستتمكن بعد ذلك من تحديد الصفوف التي ترغب في مواصلة استيرادها.',
    'LBL_DUP_HELP' => 'فيما يلي الصفوف في ملف الاستيراد التي لم يتم استيرادها لأنها تحتوي على بيانات تطابق القيم في السجلات الموجودة سابقًا استنادًا إلى فحص التكرار. تم التعليم على البيانات المتطابقة. لإعادة استيراد هذه الصفوف، قم بتنزيل القائمة، ثم قم بإجراء تغييرات وانقر على <b>استيراد مرة أخرى</b>.',
    'LBL_SUMMARY' => 'ملخص',
    'LBL_OK' => 'موافق',
    'LBL_ERROR_HELP' => 'فيما يلي الصفوف في ملف الاستيراد التي لم يتم استيرادها بسبب الأخطاء. لإعادة استيراد هذه الصفوف ، قم بتنزيل القائمة وإجراء التغييرات وانقر على <b>استيراد مرة أخرى</b>',
    'LBL_EXTERNAL_ASSIGNED_TOOLTIP' => 'لإسناد السجلات الجديدة لمستخدم آخر غيرك، استخدم عمود القيمة الافتراضية لتحديد مستخدم مختلف.',
    'LBL_EXTERNAL_TEAM_TOOLTIP' => 'لإسناد السجلات الجديدة لفرق أخرى غير فريقك (فرقك) الافتراضي، استخدم عمود القيمة الافتراضية لاختيار فرق أخرى.',
);

global $timedate;
