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
    'ERR_UW_CANNOT_DETERMINE_GROUP' => 'لا يمكن تحديد مجموعة',
    'ERR_UW_CANNOT_DETERMINE_USER' => 'لا يمكن تحديد المالك',
    'ERR_UW_CONFIG_WRITE' => 'حدث خطأ أثناء تحديث معلومات الإصدار الجديد في ملف config.php التهيئة.',
    'ERR_UW_CONFIG' => 'الرجاء جعل ملف config.php قابل للكتابة وأعدّ تحميل الصفحة.',
    'ERR_UW_DIR_NOT_WRITABLE' => 'المجلد لا يقبل الكتابة',
    'ERR_UW_FILE_NOT_COPIED' => 'لم يُنسخ الملف',
    'ERR_UW_FILE_NOT_DELETED' => 'مشكلة إزالة الحزمة ',
    'ERR_UW_FILE_NOT_READABLE' => 'تعذر قراءة الملف.',
    'ERR_UW_FILE_NOT_WRITABLE' => 'لا يمكن نقل الملف أو الكتابة عليه',
    'ERR_UW_FLAVOR_2' => 'نوع الترقية: ',
    'ERR_UW_FLAVOR' => 'إصدار نظام SuiteCRM: ',
    'ERR_UW_LOG_FILE_UNWRITABLE' => 'لايُمكن الكتابة أو إنشاء أي شي داخل /upgradeWizard.log. فضلاً أصلح الأذونات في مجلد SuiteCRM الخاص بك.',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD' => 'إن mbstring.func_overload حدد له قيمة أعلى من 1. فضلاً غير هذا في ملف php.ini وأعد تشغيل خادم الويب.',
    'ERR_UW_NO_FILE_UPLOADED' => 'فضلاً حدد الملف وحاول مرةً أخرى!',
    'ERR_UW_NO_FILES' => 'حدث خطأ, لا يوجد ملفات لفحصها.',
    'ERR_UW_NO_MANIFEST' => 'ملف manifest.php file لم يتم ضغطه وتضمينه داخل الملف المضغوط. لذا لا يُمكنني الاستمرار.',
    'ERR_UW_NO_VIEW' => 'العرض المُحدد خطأ.',
    'ERR_UW_NOT_VALID_UPLOAD' => 'رفع الملف غير صحيح.',
    'ERR_UW_NO_CREATE_TMP_DIR' => 'تعذر إنشاء مجلد temp. تحقق من أذونات الملف.',
    'ERR_UW_ONLY_PATCHES' => 'يمكنك هذه الصفحة تحميل ملف التصحيحات patches فقط.',
    'ERR_UW_PREFLIGHT_ERRORS' => 'وجد خطأ أثناء فحص الاختبار المبدئي',
    'ERR_UW_UPLOAD_ERR' => 'حدث خطأ أثناء رفع الملف للنظام، الرجاء المحاولة مرة أخرى! <br>' . PHP_EOL,
    'ERR_UW_VERSION' => 'إصدار نظام SuiteCRM: ',
    'ERR_UW_PHP_VERSION' => 'إصدار PHP: ',
    'ERR_UW_SUITECRM_VERSION' => 'إصدار نظام SuiteCRM: ',
    'ERR_UW_WRONG_TYPE' => 'هذه الصفحة ليست للتشغيل ',
    'LBL_BUTTON_BACK' => '< رجوع',
    'LBL_BUTTON_CANCEL' => 'إلغاء',
    'LBL_BUTTON_DELETE' => 'حذف حزمة',
    'LBL_BUTTON_DONE' => 'انتهاء',
    'LBL_BUTTON_EXIT' => 'خروج',
    'LBL_BUTTON_NEXT' => 'التالي >',
    'LBL_BUTTON_RECHECK' => 'إعادة الفحص',
    'LBL_BUTTON_RESTART' => 'البدء من جديد',

    'LBL_UPLOAD_UPGRADE' => 'رفع حزمة الترقية ',
    'LBL_UW_BACKUP_FILES_EXIST_TITLE' => 'الحفظ الاحتياطي',
    'LBL_UW_BACKUP_FILES_EXIST' => 'يمكن الحصول على الملفات المحفوظة احتياطيًا من الترقية في',
    'LBL_UW_BACKUP' => 'النسخ الاحتياطي',
    'LBL_UW_CANCEL_DESC' => 'تم إلغاء الترقية. لقد نم حذف أي ملفات مؤقتة تم نسخها واي ملفات ترقية تم رفعها.',
    'LBL_UW_CHECK_ALL' => 'تأشير على الجميع',
    'LBL_UW_CHECKLIST' => 'خطوات الترقية',
    'LBL_UW_COMMIT_ADD_TASK_DESC_1' => 'النسخ الاحتياطية للملفات التي تم تعديلها موجودة في المجلد التالي: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_DESC_2' => 'دمج الملغات التالية يدويًا: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_NAME' => 'عملية الترقية: دمج الملفات يدوياً',
    'LBL_UW_COMMIT_ADD_TASK_OVERVIEW' => 'فضلاً استخدم أي أسلوب مقارنة مألوف لديك حتى تدمج هذه الملفات. إلى أن يكتمل ذلك، ستكون حالة تثبيت SuiteCRM الخاص بك غير مؤكدة والترقية غير كاملة.',
    'LBL_UW_COMPLETE' => 'إكتمل',
    'LBL_UW_COMPLIANCE_ALL_OK' => 'جميع متطلبات إعداد النظام مستوفية',
    'LBL_UW_COMPLIANCE_CALLTIME' => 'إعدادات PHP: تمرير المتغيرات حال التشغيل بناء على المرجع (Call Time Pass By Reference)',
    'LBL_UW_COMPLIANCE_CURL' => 'وحدة cURL',
    'LBL_UW_COMPLIANCE_IMAP' => 'وحدة IMAP',
    'LBL_UW_COMPLIANCE_MBSTRING' => 'وحدة MBStrings',
    'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD' => 'معطى MBStrings mbstring.func_overload',
    'LBL_UW_COMPLIANCE_MEMORY' => 'إعدادات PHP: حدود الذاكرة',
    'LBL_UW_COMPLIANCE_STREAM' => 'إعداد PHP: بث (Stream)',
    'LBL_UW_COMPLIANCE_DB' => 'أدنى إصدار قاعدة بيانات',
    'LBL_UW_COMPLIANCE_PHP_INI' => 'موقع php.ini',
    'LBL_UW_COMPLIANCE_PHP_VERSION' => 'أدنى إصدار للـ PHP',
    'LBL_UW_COMPLIANCE_SAFEMODE' => 'إعداد PHP: الطور الآمن',
    'LBL_UW_COMPLIANCE_TITLE2' => 'تم كشف الإعدادات',
    'LBL_UW_COMPLIANCE_XML' => 'تحليل XML',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE' => 'دعم Zip',
    'LBL_UW_COMPLIANCE_PCRE_VERSION' => 'إصدار PCRE',
    'LBL_UW_COPIED_FILES_TITLE' => 'الملفات تم نسخها بنجاح',

    'LBL_UW_DB_CHOICE1' => 'ترقية مرشد تنفيذ استعلامات SQL',
    'LBL_UW_DB_CHOICE2' => 'استعلام SQL يدوي',
    'LBL_UW_DB_ISSUES_PERMS' => 'أذونات قاعدة البيانات',
    'LBL_UW_DB_METHOD' => 'طريقة تحديث قاعدة البيانات',
    'LBL_UW_DB_NO_ADD_COLUMN' => 'ALTER TABLE [table] ADD COLUMN [column]',
    'LBL_UW_DB_NO_CHANGE_COLUMN' => 'ALTER TABLE [table] CHANGE COLUMN [column]',
    'LBL_UW_DB_NO_CREATE' => 'CREATE TABLE [table]',
    'LBL_UW_DB_NO_DELETE' => 'DELETE FROM [table]',
    'LBL_UW_DB_NO_DROP_COLUMN' => 'ALTER TABLE [table] DROP COLUMN [column]',
    'LBL_UW_DB_NO_DROP_TABLE' => 'DROP TABLE [table]',
    'LBL_UW_DB_NO_ERRORS' => 'جميع الأذونات المتاحة',
    'LBL_UW_DB_NO_INSERT' => 'INSERT INTO [table]',
    'LBL_UW_DB_NO_SELECT' => 'SELECT [x] FROM [table]',
    'LBL_UW_DB_NO_UPDATE' => 'UPDATE [table]',
    'LBL_UW_DB_PERMS' => 'الأذونات الضرورية',

    'LBL_UW_DESC_MODULES_INSTALLED' => 'تم تثبيت حزمّ الترقية التالية:',
    'LBL_UW_END_LOGOUT_PRE' => 'اكتملت الترقية.',
    'LBL_UW_END_LOGOUT_PRE2' => 'أنقر على إنتهاء لتخرج من المساعد الآلي للترقية.',
    'LBL_UW_END_LOGOUT' => 'إذا كنت تُخطط لتطبيق حزمة ترقية أخرى باستخدام المساعد الآلي للترقية، فقم أولاً بتسجيل خروجك من النظام ثم سجل دخولك مرة أخرى.',

    'LBL_UW_FILE_DELETED' => ' قد تم حذفه.<br>',
    'LBL_UW_FILE_GROUP' => 'المجموعة',
    'LBL_UW_FILE_ISSUES_PERMS' => 'أذونات الملفات',
    'LBL_UW_FILE_NO_ERRORS' => '<b>جميع الملفات قابلة للكتابة</b>',
    'LBL_UW_FILE_OWNER' => 'المالك',
    'LBL_UW_FILE_PERMS' => 'الأذونات',
    'LBL_UW_FILE_UPLOADED' => ' تم رفعه',
    'LBL_UW_FILE' => 'اسم الملف',
    'LBL_UW_FILES_QUEUED' => 'حزم الترقية التالية جاهزة للتثبيت:',
    'LBL_UW_FILES_REMOVED' => 'سيتم حذف الملفات التالية من النظام:<br>' . PHP_EOL,
    'LBL_UW_NEXT_TO_UPLOAD' => '<b>انقر التالي لرفع حزم الترقية.</b>',
    'LBL_UW_FROZEN' => 'قم برفع حزمة قبل المتابعة.',
    'LBL_UW_HIDE_DETAILS' => 'إخفاء التفاصيل',
    'LBL_UW_IN_PROGRESS' => 'جاري التنفيذ',
    'LBL_UW_INCLUDING' => 'متضمن',
    'LBL_UW_INCOMPLETE' => 'غير مكتمل',
    'LBL_UW_MANUAL_MERGE' => 'دمج الملفات',
    'LBL_UW_MODULE_READY' => 'الوحدة جاهزة للتثبيت. انقر على Click "تنفيذ" لمتابعة التثبيت.',
    'LBL_UW_NO_INSTALLED_UPGRADES' => 'لم يتم تسجيل أي ترقية من قبل.',
    'LBL_UW_NONE' => '--لا شيء--',
    'LBL_UW_OVERWRITE_DESC' => 'سيتم الكتابة على جميع الملفات المعدلة سابقًا, يشمل ذلك أي شفرة برمجية تم تخصيصها وأي قالب قمت بتعديله. هل تريد حقاً المتابعة؟',

    'LBL_UW_PREFLIGHT_ADD_TASK' => 'إنشاء مهمة للدمج اليدوي؟',
    'LBL_UW_PREFLIGHT_EMAIL_REMINDER' => 'أرسل لنفسك رسالة تذكير للدمج اليدوي؟',
    'LBL_UW_PREFLIGHT_FILES_DESC' => 'الملفات المدرجة أدناه تم تعديلها سابقًا. قم بإلغاء تحديد الملفات التي بحاجة لدمج يدوي. <i>أي تعديلات سابقة في التصميم لم يتم تحديدها بشكل آلي؛ قم بتحديد أية ملفات ترى أنه ينبغي الكتابة عليها.',
    'LBL_UW_PREFLIGHT_NO_DIFFS' => 'لا توجد حاجة لأي دمج يدوي للملفات.',
    'LBL_UW_PREFLIGHT_NOT_NEEDED' => 'لا حاجة له.',
    'LBL_UW_PREFLIGHT_PRESERVE_FILES' => 'الملفات المحمية آليا:',
    'LBL_UW_PREFLIGHT_TESTS_PASSED' => 'تم تجاوز جميع اختبارات الأولية بنجاح.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED2' => 'انقر التالي لنسخ الملفات التي بحاجة لترقية إلى النظام.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED3' => '<b>ملاحظة: </b> ما تبقى من إجراءات الترقية ضرورية، والنقر على التالي يستلزم إكمال الإجراءات. إذا لم تكن ترغب في المواصلة فانقر على زر الإلغاء.',
    'LBL_UW_PREFLIGHT_TOGGLE_ALL' => 'تبديل التحديد لجميع الملفات',

    'LBL_UW_REBUILD_TITLE' => 'نتيجة إعادة البناء',
    'LBL_UW_SCHEMA_CHANGE' => 'التعدبلات على البنية الهيكلية للبيانات',

    'LBL_UW_SHOW_COMPLIANCE' => 'عرض الإعدادات المرصودة',
    'LBL_UW_SHOW_DB_PERMS' => 'عرض أذونات قاعدة البيانات المفقودة',
    'LBL_UW_SHOW_DETAILS' => 'عرض التفاصيل',
    'LBL_UW_SHOW_DIFFS' => 'عرض الملفات التي بحاجة لدمج يدوي',
    'LBL_UW_SHOW_NW_FILES' => 'عرض الملفات ذات الأذونات غير الصحيحة',
    'LBL_UW_SHOW_SCHEMA' => 'عرض الشفرة البرمجية لتعديل البنية الهيكلية للبيانات',
    'LBL_UW_SHOW_SQL_ERRORS' => 'عرض الاستعلامات غير الصحيحية',
    'LBL_UW_SHOW' => 'أعرض',

    'LBL_UW_SKIPPED_FILES_TITLE' => 'الملفات التي تم تجاوزها',
    'LBL_UW_SQL_RUN' => 'الفحص متى ما تم تشغيل استعلامات SQL يدويًا',
    'LBL_UW_START_DESC' => 'سيقوم هذا المساعد الآلي بمساعدتك في ترقية نسخة SuiteCRM هذه.',
    'LBL_UW_START_DESC2' => 'ملاحظة: نوصي بشدة بإنشاء نسخة من نسخة SuiteCRM الذي تستخدمها في بيئة العمل الفعلية، واختبار حزمة الترقية قبل اعتماد الإصدار الجديد. إذا قمت بتغيير ملف "composer.json"، فيرجى تشغيل هذا الأمر بعد اكتمال عملية الترقية: <br/> <br/> <pre> composer install --no-dev </pre>', // Keep the <pre>composer install --no-dev</pre> words at the end of the sentence and do not translate it
    'LBL_UW_START_DESC3' => 'انقر التالي لإجراء فحص على نظامك للتأكد من أن النظام جاهز للترقية. يتضمن الاختيار أذونات الملف الملفات وأذونات قاعدة البيانات وإعدادات الخادم.',
    'LBL_UW_START_UPGRADED_UW_DESC' => 'سيقوم مساعد الترقية الجديدة الآلي الآن بتابعة إجراءات الترقية. يرجى متابعة الترقية الخاصة بك.',
    'LBL_UW_START_UPGRADED_UW_TITLE' => 'مرحبا بك في المساعد الآلي للترقية الجديدة',

    'LBL_UW_TITLE_CANCEL' => 'إلغاء',
    'LBL_UW_TITLE_COMMIT' => 'اعتمد الترقية',
    'LBL_UW_TITLE_END' => 'استخلاص',
    'LBL_UW_TITLE_PREFLIGHT' => 'الفحص الأولي',
    'LBL_UW_TITLE_START' => 'مرحبا',
    'LBL_UW_TITLE_SYSTEM_CHECK' => 'فحص النظام',
    'LBL_UW_TITLE_UPLOAD' => 'رفع الحزمة',
    'LBL_UW_TITLE' => 'المساعد الآلي للترقية',
    'LBL_UW_UNINSTALL' => 'إلغاء التثبيت',
    //500 upgrade labels
    'LBL_UW_ACCEPT_THE_LICENSE' => 'قبول الترخيص',
    'LBL_UW_CONVERT_THE_LICENSE' => 'تحويل الترخيص',

    'LBL_START_UPGRADE_IN_PROGRESS' => 'جاري بدء التقدم',
    'LBL_SYSTEM_CHECKS_IN_PROGRESS' => 'جاري التحقق من النظام',
    'LBL_LICENSE_CHECK_IN_PROGRESS' => 'جاري فحص الرخصة',
    'LBL_PREFLIGHT_CHECK_IN_PROGRESS' => 'جاري الاختيار الأولي',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS' => 'جاري نسخ الملفات',
    'LBL_COMMIT_UPGRADE_IN_PROGRESS' => 'جاري تنفيذ الترقية',
    'LBL_UW_COMMIT_DESC' => 'أنقر التالي لتنفيذ شفرات الترقية إضافية.',
    'LBL_UPGRADE_SCRIPTS_IN_PROGRESS' => 'يجري تنفيذ الشفرة البرمجية للترقية',
    'LBL_UPGRADE_SUMMARY_IN_PROGRESS' => 'جاري تجهيز خلاصة الترقية',
    'LBL_UPGRADE_IN_PROGRESS' => 'جاري التنفيذ     ',
    'LBL_UPGRADE_TIME_ELAPSED' => 'الوقت المنقضي',
    'LBL_UPGRADE_CANCEL_IN_PROGRESS' => 'جاري إلغاء الترقية والتنظيف',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE' => 'الترقية قد تستغرق وقتاً',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS' => 'جاري فحص الملفات المرفوعة',
    'LBL_UPLOADING_UPGRADE_PACKAGE' => 'جاري رفع ملفات حزمة الترقية ',
    'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD' => 'مساعد الترقية يحذف البنية الهيكلية للبيانات ٤٥١ القديمة',
    'LBL_UW_DROP_SCHEMA_MANUAL' => 'الحذف اليدوي للبنية الهيكلية للبيانات بعد الترقية',
    'LBL_UW_DROP_SCHEMA_METHOD' => 'طريقة حذف البنية الهيكلية القديمة للبيانات',
    'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP' => 'أظهر التصميم القديم الذي قد يحُذف',
    'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST' => 'الاستعلامات التي تم تجاوزها',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'مطلوب Php بإصدار 5 أو أعلى.',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'إصدار PHP الخاص بك غير مدعوم من قبل نظام SuiteCRM. تحتاج لتركيب إصدار PHP متوافق مع نظام SuiteCRM. يرجى مراجعة مصفوفة التوافق في وثيقة ملاحظة الإصدار لمعرفة إصدارات PHP المدعومة. إصدار PHP في الخادم Server الخاص بك هو ',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'تم تفعيل طورّ التوافق مع إصدارات Php السابقة. قم بوضع القيمة Off مقابل المتغير zend.ze1_compatibility_mode في الإعدادات للمضي قدماً',
    //including some strings from moduleinstall that are used in Upgrade
    'LBL_ML_ACTION' => 'الإجراء',
    'LBL_ML_CANCEL' => 'إلغاء',
    'LBL_ML_COMMIT' => 'تنفيذ',
    'LBL_ML_DESCRIPTION' => 'الوصف',
    'LBL_ML_INSTALLED' => 'تاريخ التثبيت',
    'LBL_ML_NAME' => 'الاسم',
    'LBL_ML_PUBLISHED' => 'تاريخ النشر',
    'LBL_ML_TYPE' => 'النوع',
    'LBL_ML_UNINSTALLABLE' => 'إلغاء التثبيت',
    'LBL_ML_VERSION' => 'الإصدار',
    'LBL_ML_INSTALL' => 'تثبيت',
    //adding the string used in tracker. copying from homepage
    'LBL_CURRENT_PHP_VERSION' => 'إصدار Php الحالي هو: ',
    'LBL_RECOMMENDED_PHP_VERSION_1' => 'إصدار PHP الموصى به هو ',
    'LBL_RECOMMENDED_PHP_VERSION_2' => ' أو أعلى.',  // End of a sentence as in Recommended PHP version is version X.Y or above

    'LBL_MODULE_NAME' => 'مساعة الترقية الآلي',
    'LBL_UPLOAD_SUCCESS' => 'تم رفع حزمة الترقية بنجاح. أنقر زر التالي لتقوم بالفحص النهائي.',
    'LBL_UW_TITLE_LAYOUTS' => 'تأكيد التصميم',
    'LBL_LAYOUT_MODULE_TITLE' => 'التصميم',
    'LBL_LAYOUT_MERGE_DESC' => 'هناك حقول جديدة أُضيفت كجزء من هذه الترقية ويمكن إلحاقها تلقائياً بتصميم الوحدات الحالية. لمعرفة المزيد عن الحقول الجديدة راجع ملاحظات الإصدار الذي تريد الترقية له. <br><br>إذا لم ترد إلحاق حقول جديدة فيرجي إلغاء تحديد الوحدة، وسيظل التصميم المُخصص دون تغيير. الحقول ستكون متاحة في الاستوديو بعد الترقية. <br><br>',
    'LBL_LAYOUT_MERGE_TITLE' => 'انقر التالي لتأكيد التغييرات وإنهاء الترقية.',
    'LBL_LAYOUT_MERGE_TITLE2' => 'انقر التالي لإتمام الترقية.',
    'LBL_UW_CONFIRM_LAYOUTS' => 'تأكيد التصميم',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'تأكيد نتائج التصميم',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'تم دمج التصاميم التالية بنجاح:',
    'LBL_SELECT_FILE' => 'اختيار الملف:',
    'ERROR_VERSION_INCOMPATIBLE' => 'الملف الذي تم رفعه غير متوافق مع إصدار SuiteCRM: ',
    'ERROR_PHP_VERSION_INCOMPATIBLE' => 'الملف الذي تم رفعه غير متوافق مع هذا الإصدار من PHP: ',
    'ERROR_SUITECRM_VERSION_INCOMPATIBLE' => 'الملف الذي تم رفعه غير متوافق مع إصدار SuiteCRM: ',
    'LBL_LANGPACKS' => 'حزم اللغات' /*for 508 compliance fix*/,
    'LBL_MODULELOADER' => 'أداة رفع الوحدات' /*for 508 compliance fix*/,
    'LBL_PATCHUPGRADES' => 'ترقيات الحزم' /*for 508 compliance fix*/,
    'LBL_THEMES' => 'الأنماط' /*for 508 compliance fix*/,
    'LBL_WORKFLOW' => 'دورة عمل (Workflows)' /*for 508 compliance fix*/,
    'LBL_UPGRADE' => 'hgترقية' /*for 508 compliance fix*/,
    'LBL_PROCESSING' => 'المعالجة' /*for 508 compliance fix*/,
    'ERROR_NO_VERSION_SET' => 'لم يتم تعيين الإصدار المتوافق في ملف البيان (manifest file)',
    'LBL_UPGRD_CSTM_CHK' => 'ستعمل عملية الترقية على تحديث بعض الملفات ولكن هذه الملفات موجودة أيضًا في مجلد  custom/. الرجاء مراجعة التغييرات قبل المتابعة:',
    'ERR_UW_PHP_FILE_ERRORS' => array(
        1 => 'الملف الذي تم رفعه يتجاوز شروط متغير upload_max_filesize والمكتوب في ملف php.ini.',
        2 => 'الملف الذي تم رفعه يتجاوز شروط متغير MAX_FILE_SIZE الذي تم تحديدفي نموذج الـ HTML.',
        3 => 'الملف الذي تم رفعه قد تم رفعه جزئيًا فقط.',
        4 => 'لم يتم رفع أي ملف.',
        5 => 'خطأ غير معروف.',
        6 => 'مجلد مؤقت مفقود.',
        7 => 'فشل في كتابة الملف على القرص.',
        8 => 'تم إيقاف رفع الملف بسبب امتداده (extension).',
    ),
    'LBL_PASSWORD_EXPIRATON_CHANGED' => 'تحذير: لم يتم تحديد فترة لصلاحية كلمة المرور!',
    'LBL_PASSWORD_EXPIRATON_REDIRECT' => 'يرجى تحديث الإعدادات هنا',
);
