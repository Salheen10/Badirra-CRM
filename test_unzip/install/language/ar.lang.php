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
    'LBL_BASIC_SEARCH' => 'فلتر سريع',
    'LBL_ADVANCED_SEARCH' => 'فلتر متقدم',
    'LBL_BASIC_TYPE' => 'النوع الأساسي',
    'LBL_ADVANCED_TYPE' => 'نوع متقدم',
    'LBL_SYSOPTS_2' => 'ماهو نوع قاعدة البيانات التي سوف تستخدمها مع نظام SuiteCRM في تركيبه على الخادم؟',
    'LBL_SYSOPTS_DB' => 'حدد نوع قاعدة البيانات',
    'LBL_SYSOPTS_DB_TITLE' => 'نوع قاعدة البيانات',
    'LBL_SYSOPTS_ERRS_TITLE' => 'من فضلك أصلح الأخطاء التالية قبل متابعة:',
    'ERR_DB_VERSION_FAILURE' => 'غير قادر على التحقق من إصدار قاعدة البيانات.',
    'DEFAULT_CHARSET' => 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK' => 'زودني باسم المستخدم الذي سيكون مدير نظام SuiteCRM لإدارة علاقات العملاء. ',
    'ERR_ADMIN_PASS_BLANK' => 'أدخل كلمة المرور الخاصة بإسم مُدير Admin لنظام SuiteCRM لإدارة علاقات العملاء. ',

    'ERR_CHECKSYS' => 'تم الكشف عن أخطاء أثناء عملية فحص التوافق.  من أجل تثبيت SuiteCRM وعمله بشكل صحيح، يرجى اتبع الخطوات المناسبة لمعالجة المشاكل المذكورة أدناه أو اضغط على زر إعادة إجراء الفحص، أو قم بعملية التثبيت مرة أخرى.',
    'ERR_CHECKSYS_CALL_TIME' => 'السماح بمرجع مرور وقت الطلب مفعل (ينبغي تعطيل هذه الخاصية في ملف php.ini)',
    'ERR_CHECKSYS_CURL' => 'غير موجود: أداة الجدولة Scheduler في نظام SuiteCRM ستعمل باستخدام وظائف محدودة.',
    'ERR_CHECKSYS_IMAP' => 'غير موجود: خادم الرسائل الواردة InboundEmail ورسائل حملات التسويق الإلكترونية تتطلب وجود مكتبات IMAP. وإلا لن تعمل وظائفها مُستقبلاً.',
    'ERR_CHECKSYS_MEM_LIMIT_1' => ' (عين قيمته لتكون ',
    'ERR_CHECKSYS_MEM_LIMIT_2' => 'ميغابايت أو أكبر في ملف php.ini)',
    'ERR_CHECKSYS_NOT_WRITABLE' => 'تحذير: غير قابل للكتابة',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'إصدار PHP الخاص بك غير مدعوم من قبل نظام إدارة علاقات العملاء SuiteCRM. تحتاج لتركيب إصدار PHP متوافق مع نظام SuiteCRM. من فضلك استشر وراجع وثيقة التركيب وتحديداً ما يتعلق بالتوافقية  Compatibility Matrix لتعرف أي إصدار PHP المتوافق. إصدار PHP في الخادم Server الخاص بك هو ',
    'ERR_CHECKSYS_IIS_INVALID_VER' => 'إصدار IIS الخاص بك غير مدعوم من قبل نظام إدارة علاقات العملاء SuiteCRM. تحتاج لتركيب إصدار IIS متوافق مع نظام SuiteCRM. من فضلك استشر وراجع وثيقة التركيب وتحديداً ما يتعلق بالتوافقية  Compatibility Matrix لتعرف أي إصدار IIS المتوافق. إصدار IIS في الخادم Server الخاص بك هو ',
    'ERR_CHECKSYS_FASTCGI' => 'لقد وجدت أنك لا تستخدم FastCGI handler mapping للـ PHP. أنت تحتاج لتثبيت إصدار متوافق مع نظام SuiteCRM. من فضلك استشر وراجع وثيقة تثبيت النظام لمعرفة كل ما يتعلق بالتوافقية Compatibility Matrix والإصدار المدعوم من قبل SuiteCRM. من فضلك راجع هذا الرابط  <a href="http://www.iis.net/php/" target="_blank">http://www.iis.net/php/</a> لمزيد من التفاصيل ',
    'ERR_CHECKSYS_FASTCGI_LOGGING' => 'للحصول على تجربة أمثل في استخدام IIS/FastCGI sapi, حدد set fastcgi.logging ليكون صفر وذلك في داخل ملف php.ini',
    'LBL_DB_UNAVAILABLE' => 'قاعدة البيانات غير مُتاحة',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'دعم قاعدة البيانات غير موجود. من فضلك تأكد من وجود ملفات تشغيل قاعدة البيانات drivers اللازمة لأنواع قواعد البيانات التالية: MySQL or MS SQLServer. قد تحتاج لتهميش uncomment the extension بعض الأسطر في ملف php.ini أو إعادة ترجمة recompile مع ملف binary صحيح. من فضلك راجع دليل تشغيل PHP لمزيد من المعلومات عن كيفية تمكين دعم قاعدة البيانات.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE' => 'الوظائف المُرتبطة مع مكتبات XML Parser والتي يحتاجها نظام SuiteCRM غير موجودة. ربما تحتاج لتهميش أسطر uncomment the extension في ملف php.ini أو إعادة ترجمة recompile بتوليد ملف binary الصحيح. إعتماداً على إصدار PHP. من فضلك راجع دليل تشغيل PHP للإطلاع على مزيد من المعلومات.',
    'ERR_CHECKSYS_MBSTRING' => 'لم يتم العثور على الوظائف المرتبطة مع Multibyte Strings PHP extension (mbstring) والتي يحتاجها نظام SuiteCRM لإدارة العلاقات العملاء. <br/><br/> بصفة عامة، mbstring module لم يتم تمكينه بشكل افتراضي في PHP ويجب تفعيله من خلال --enable-mbstring وذلك عندما يتم بناء PHP binary. يرجى الرجوع لدليل PHP لمزيد من المعلومات حول كيفية تمكين دعم mbstring.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE' => 'ملف Config موجود ولكن غير قابل للكتابة.  يرجى اتخاذ الخطوات اللازمة لجعل الملف قابل للكتابة.  بالنظر إلى نظام التشغيل الخاص بك، فقد يتطلب هذا تغيير الصلاحيات بتطبيق أمر chmod 766، أو انقر الزر الأيمن للفأرة فوق اسم الملف لتُظهر قائمة الخصائص ثم قم بإلغاء خيار قراءة فقط.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE' => 'ملف config override موجود ولكن غير قابل للكتابة.  يرجى اتخاذ الخطوات اللازمة لجعل الملف قابل للكتابة.  بالنظر إلى نظام التشغيل الخاص بك، فقد يتطلب هذا تغيير الصلاحيات بتطبيق أمر chmod 766، أو انقر الزر الأيمن للفأرة فوق اسم الملف لتُظهر قائمة الخصائص ثم قم بإلغاء خيار قراءة فقط.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE' => 'إن  Custom Directory موجود ولكن غير قابل للكتابة. يجب أن تُغير صلاحياته (chmod 766) أو أنقر على الزر الأيمن للفأرة فوق اسم الملف لتُظهر قائمة الخصائص ثم قم بإلغاء خيار قراءة فقط. وذلك بالنظر إلى نظام التشغيل الخاص بك. من فضلك خذ الخطوات اللازمة لتجعل الملف قابل للكتابة.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE' => "الملفات أو المُجلدات المذكورة أدناه ليست قابلة للكتابة عليها أو أنها مفقودة ولا يُمكن إنشائها. وبناءً على نظام التشغيل الخاص بك، تصحيحها قد يتطلب منك تغيير الصلاحيات للملفات أو المُجلدات المتفرعة عنها  parent directory لتصبح (chmod 755), أو أنقر على زر الفأرة الأيمن وأنت متوقف فوق المجلد الأب له ثم ألغي تحديد خيار القرأة فقط وتعميده apply على كل المُجلدات الفرعية.",
    'ERR_CHECKSYS_JSON_NOT_AVAILABLE' => "لم يتم العثور على الوظائف المرتبطة بـ JSON Parser Libraries التي يحتاجها تطبيق SuiteCRM. قد تحتاج إلى إلغاء التعليق على الامتداد في ملف php.ini ، أو إعادة التحويل بالملف الثنائي الصحيح ، اعتمادًا على إصدار PHP الخاص بك. يرجى الرجوع إلى دليل PHP الخاص بك لمزيد من المعلومات.",
    'LBL_CHECKSYS_OVERRIDE_CONFIG' => 'تهيئة التجاوز',
    'ERR_CHECKSYS_SAFE_MODE' => 'طور الآمان Safe Mode يعمل On (ربما تريد تعطيله من خلال تعديل ملف php.ini)',
    'ERR_CHECKSYS_ZLIB' => 'مكتبة ZLib الخاص بدعم الملفات المضغوطة غير موجود: إن SuiteCRM سوف يتحسن أدائه من خلال استخدام ضغط الملفات بـ zlib.',
    'ERR_CHECKSYS_ZIP' => 'دعم ZIP غير متوفر: نظام SuiteCRM يحتاج إلى دعم ZIP ليُمكنه القيام بعملية ضغط الملفات.',
    'ERR_CHECKSYS_PCRE' => 'مكتبة PCRE غير موجود: يحتاج نظام SuiteCRM ليتم المعالجة Perl style الخاص بـ نمط Perl لمطابقة نمط التعبير العادي.',
    'ERR_CHECKSYS_PCRE_VER' => 'إصدار مكتبة PCRE: نظام SuiteCRM يحتاج إلى مكتبة PCRE بإصدار 7.0 أو أعلى لمعالجة نمط Perl لمطابقة نمط التعبير العادي.',
    'ERR_DB_ADMIN' => 'اسم المُستخدم أو كلمة المرور الخاص بمدير قاعدة البيانات غير صحيح، ولم يتم تأسيس اتصال مع لقاعدة البيانات. من فضلك أدخل اسم المُستخدم وكلمة السر بشكل صحيح. (خطأ: ',
    'ERR_DB_ADMIN_MSSQL' => 'اسم المُستخدم أو كلمة المرور الخاص بمدير قاعدة البيانات غير صحيح، ولم يتم تأسيس اتصال مع لقاعدة البيانات. من فضلك أدخل اسم المُستخدم وكلمة السر بشكل صحيح.',
    'ERR_DB_EXISTS_NOT' => 'قاعدة البيانات التي حددتها غير موجودة.',
    'ERR_DB_EXISTS_WITH_CONFIG' => 'قاعدة البيانات موجودة مسبقاً مع بيانات التهيئة config data.  لبدء التثبيت مع قاعدة البيانات التي اخترتها، الرجاء إعادة تشغيل عملية التثبيت واختر: "إسقاط وإعادة إنشاء القائمة جداول SuiteCRM؟"  أو بالإنجليزية "?Drop and recreate existing SuiteCRM tables" حتى تتم الترقية استخدم "المرشد الآلي للترقية Upgrade Wizard" في وحدة تحكم المشرفين والمُدراء للنظام.  يُرجى قراءة وثائق الترقية الموجودة <a href="https://docs.suitecrm.com/admin/installation-guide/upgrading/" target="_new"> هنا</a>.',
    'ERR_DB_EXISTS' => 'اسم قاعدة البيانات الذي كتبته موجود مُسبقاً - لا يُمكن إنشاء قاعدة بيانات أخرى بنفس هذا الاسم.',
    'ERR_DB_EXISTS_PROCEED' => 'اسم قاعدة البيانات الذي زودتنا به موجود مُسبقاً. يُمكنك<br>أولاً: اضغط زر رجوع لتختار اسم قاعدة بيانات آخر <br>ثانيا: اضغط زر التالي واستمر لكن كل الجداول الحالية في قاهدة البيانات هذه سوف يتم حذفها. <strong> هذا يعني أنك ستفقد الجداول الخاصة بك وكذلك ستفقد البيانات الموجودة فيها.</strong>',
    'ERR_DB_HOSTNAME' => 'لا يُمكنك أن تترك اسم المُستضيف (Hostname) فارغاً.',
    'ERR_DB_INVALID' => 'لقد اخترت نوع قاعدة بيانات خاطئ.',
    'ERR_DB_LOGIN_FAILURE' => 'ربما يكون هناك خطأ في قاعدة البيانات المُستضيفة للنظام واسم المُستخدم و/أو كلمة المرور التي زودتنا بها، لذا فإن الاتصال بقاعدة البيانات لم يتم. من فضلك أدخل اسم مُستضيف صحيح وتأكد أيضاً من صحة اسم المُستخدم وكلمة المرور',
    'ERR_DB_LOGIN_FAILURE_MYSQL' => 'ربما يكون هناك خطأ في قاعدة البيانات المُستضيفة للنظام واسم المُستخدم و/أو كلمة المرور التي زودتنا بها، لذا فإن الاتصال بقاعدة البيانات لم يتم. من فضلك أدخل اسم مُستضيف صحيح وتأكد أيضاً من صحة اسم المُستخدم وكلمة المرور',
    'ERR_DB_LOGIN_FAILURE_MSSQL' => 'ربما يكون هناك خطأ في قاعدة البيانات المُستضيفة للنظام واسم المُستخدم و/أو كلمة المرور التي زودتنا بها، لذا فإن الاتصال بقاعدة البيانات لم يتم. من فضلك أدخل اسم مُستضيف صحيح وتأكد أيضاً من صحة اسم المُستخدم وكلمة المرور',
    'ERR_DB_MYSQL_VERSION' => 'إن إصدار قاعدة البيانات من نوع MySQL الخاصة بك ورقمه (%s) هو غير مدعوم ومُعتمد من قبل SuiteCRM. إنك تحتاج إلى تثبيت إصدار متوافق مع نظام SuiteCRM. من فضلك استشر وراجع مصفوفة التوافقية Compatibility Matrix في التوثيق الرسمي بالإصدار لتتعرف على إصدار MySQL المدعوم.',
    'ERR_DB_NAME' => 'لا يُمكنك أن تترك اسم قاعدة البيانات فارغاً.',
    'ERR_DB_MYSQL_DB_NAME_INVALID' => "لا يُسمح بأن يحتوي اسم قاعدة البيانات على أحد هذه الرموز '\\', '/', '.'",
    'ERR_DB_MSSQL_DB_NAME_INVALID' => "يُمنع أن يبدأ إسم قاعدة البيانات برقم أو '#'، أو' @' ولا يمكن أن يحتوي على مسافة أو أي من هذه الرموز '*', '/', '\\'، '؟', ':'، '<'، '>'، 'آند'، '!'، '-'",
    'ERR_DB_OCI8_DB_NAME_INVALID' => "يُسمح بأن يحتوي اسم قاعدة البيانات على أحرف الأبجدية الإنجليزية وهذه الرموز '#', '_' أو '$'",
    'ERR_DB_PASSWORD' => 'كلمات المرور التي أدخلتها غير مُتطابقة. من فضلك أعد كتابتها لتكون كلمات المرور في هذه الحقول مُتطابقة.',
    'ERR_DB_PRIV_USER' => 'زودنا بإسم مُستخدم خاص بالمدير أو المُشرف على قاعدة البيانات. هذا المُستخدم ظروري ومطلوب لبدء الاتصال بقاعدة البيانات.',
    'ERR_DB_USER_EXISTS' => 'اسم المُستخدم الخاص بقاعدة بيانات نظام SuiteCRM هو موجود مُسبقاً. لايُمكنك إنشاء اسم مُستخدم آخر بنفس الإسم. من فضلك أدخل اسم مُستخدم جديد.',
    'ERR_DB_USER' => 'أدخل اسم مستخدم خاص بمدير قاعدة بيانات نظام SuiteCRM.',
    'ERR_DBCONF_VALIDATION' => 'يرجى إصلاح الأخطاء التالية قبل متابعة:',
    'ERR_DBCONF_PASSWORD_MISMATCH' => 'كلمات المرور التي أدخلتها والخاصة بقاعدة بيانات نظام SuiteCRM هي كلمات غير مُتطابقة. من فضلك أعد كتابتها لتكون كلمات المرور في هذه الحقول مُتطابقة.',
    'ERR_ERROR_GENERAL' => 'لقد وجدت الأخطاء التالية:',
    'ERR_LANG_CANNOT_DELETE_FILE' => 'لا يمكنك حذف الملف: ',
    'ERR_LANG_MISSING_FILE' => 'لا يمكن العثور على الملف: ',
    'ERR_LANG_NO_LANG_FILE' => 'ملف حزمة اللغة غير موجود في داخل مُجلد include/language: ',
    'ERR_LANG_UPLOAD_1' => 'يوجد مشكلة أثناء تحميلك للملفات. حاول مرة أخرى.',
    'ERR_LANG_UPLOAD_2' => 'يجب أن يكون ملف حزمة اللغة من نوع ZIP.',
    'ERR_LANG_UPLOAD_3' => 'إن PHP لا يُمكنها نقل الملف المؤقت إلى المُجلد الخاص بكل ما يتعلق بالترقية وهو بإسم upgrade.',
    'ERR_LOG_DIRECTORY_NOT_EXISTS' => 'إن Log directory الذي زودتنا به فهو مجلد غير صحيح.',
    'ERR_LOG_DIRECTORY_NOT_WRITABLE' => 'إن Log directory الذي زودتنا به فهو مجلد غير قابل للكتابة فيه.',
    'ERR_NO_DIRECT_SCRIPT' => 'غير قادر على معالجة الـ script بشكل مباشر.',
    'ERR_NO_SINGLE_QUOTE' => 'لا يمكن استخدام علامة التنصيص المفردة ل ',
    'ERR_PASSWORD_MISMATCH' => 'كلمات المرور التي أدخلتها والخاصة بالمُشرف على نظام SuiteCRM هي كلمات مرور غير مُتطابقة. من فضلك أعد كتابتها لتكون كلمات المرور في هذه الحقول مُتطابقة.',
    'ERR_PERFORM_CONFIG_PHP_1' => 'لا يمكنك الكتابة في ملف <span class=stop> config.php</span>.',
    'ERR_PERFORM_CONFIG_PHP_2' => 'يمكنك متابعة عملية التثبيت هذه من خلال إنشاء ملف config.php بشكل يديو ولصق معلومات التهيئة configuration الموجودة أدناه في ملف config.php.  ومع ذلك، يمكنك <strong>يجب</strong> إنشاء ملف config.php قبل أن تتابع إلى الخطوة التالية.',
    'ERR_PERFORM_CONFIG_PHP_3' => 'هل تتذكر إنشاء ملف config.php؟',
    'ERR_PERFORM_CONFIG_PHP_4' => 'تحذير: تعذر الكتابة في ملف config.php.  الرجاء التأكد من أن الملف موجود.',
    'ERR_PERFORM_HTACCESS_1' => 'لا يمكن الكتابة إلى ',
    'ERR_PERFORM_HTACCESS_2' => ' ملف.',
    'ERR_PERFORM_HTACCESS_3' => 'إذا كنت ترغب في المحافظة على أمن ملف السجل log file الخاص بك بحيث لا يتم الوصول إليه عبر متصفح الانترنت، فيجب أن تنشئ ملف.htaccess في مجلد السجل log directory الخاص بك مع:',
    'ERR_PERFORM_NO_TCPIP' => '<b>لم نجد اتصال بالإنترنت</b> عندما يكون لديك اتصال فيرجى زيارة <a href="https://www.suitecrm.com/"> https://www.suitecrm.com/</a> للتسجيل كعضو مع SuiteCRM. من خلال السماح لنا بأن نعرف قليلاً عن كيف تخطط شركتك أن تستخدم SuiteCRM، بهذه الطريقة سوف نتمكن من ضمان تسليمنا للتطبيق المناسب لاحتياجات عملك.',
    'ERR_SESSION_DIRECTORY_NOT_EXISTS' => 'إن مجلد الجلسة (Session directory) الذي زودتنا به فهو مجلد غير صحيح.',
    'ERR_SESSION_DIRECTORY' => 'إن مجلد الجلسة (Session directory) الذي زودتنا به هو مجلد غير قابل للكتابة فيه.',
    'ERR_SESSION_PATH' => 'مسار الجلسة (Session) مطلوب إدخاله إذا كنت تريد تحديد المسار الخاص بك.',
    'ERR_SI_NO_CONFIG' => 'لم تقم بتضمين config_si.php في المسار الأساسي (document root)، أو أنك لم تحدد $sugar_config_si في config.php',
    'ERR_SITE_GUID' => 'معرف التطبيق مطلوب إذا كنت تريد تحديد مُعرف خاص بك.',
    'ERROR_SPRITE_SUPPORT' => "حالياً لا يُمكننا تحديد مكتبة GD, ونتيجة لذلك لن تتمكن من استخدام وظيفة CSS Sprite.",
    'ERR_UPLOAD_MAX_FILESIZE' => 'تحذير: إعدادات PHP الخاص بك يجب أن تتغير حتى تسمح برفع ملفات بحجم 6 ميغا بايت على الأقل.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE' => 'حجم الملف المرفوع',
    'ERR_URL_BLANK' => 'أكتب مسار (URL) الأساسي الخاص بخادم النظام SuiteCRM.',
    'ERR_UW_NO_UPDATE_RECORD' => 'تعذر تحديد سجل التثبيت للـ',
    'ERROR_MANIFEST_TYPE' => 'ملف Manifest يجب أن يُحدد نوع الحزمة (package type).',
    'ERROR_PACKAGE_TYPE' => 'ملف Manifest حدد نوع حزمة (package type) غير معروف للنظام',
    'ERROR_VERSION_INCOMPATIBLE' => 'الملف الذي تم رفعه غير متوافق مع إصدار SuiteCRM: ',

    'LBL_BACK' => 'رجوع',
    'LBL_CANCEL' => 'إلغاء',
    'LBL_ACCEPT' => 'موافق',
    'LBL_CHECKSYS_CACHE' => 'ذاكرة التخزين المؤقتة (Cache) الخاصة بالمجلد الفرعي هي قابلة للكتابة',
    'LBL_DROP_DB_CONFIRM' => 'اسم قاعدة البيانات المكتوب هو موجود مُسبقاً. <br>يمكنك أما: <br>1. أن تنقر فوق زر إلغاء الأمر وتختار اسم قاعدة بيانات جديد أو <br>2. انقر فوق زر قبول واستمر. كل الجداول الموجودة في قاعدة البيانات سيتم حذفها. <strong>وهذا يعني أن جميع الجداول والبيانات الموجودة من قبل سوف تتلاشى.</strong>',
    'LBL_CHECKSYS_COMPONENT' => 'مكون (Component)',
    'LBL_CHECKSYS_CONFIG' => 'ملف (config.php) الخاص بتهيئة وإعدادات SuiteCRM هو قابل للكتابة عليه',
    'LBL_CHECKSYS_CURL' => 'وحدة cURL',
    'LBL_CHECKSYS_CUSTOM' => 'دليل مخصص للكتابة',
    'LBL_CHECKSYS_DATA' => 'مجلد فرعي للبيانات وقابل للكتابة عليه',
    'LBL_CHECKSYS_IMAP' => 'وحدة IMAP',
    'LBL_CHECKSYS_FASTCGI' => 'FastCGI',
    'LBL_CHECKSYS_MBSTRING' => 'وحدة نصوص MBSTRING',
    'LBL_CHECKSYS_MEM_OK' => 'موافق (بدون حدود)',
    'LBL_CHECKSYS_MEM_UNLIMITED' => 'حسنا (غير محدود)',
    'LBL_CHECKSYS_MEM' => 'الحد الأقصى لذاكرة PHP',
    'LBL_CHECKSYS_MODULE' => 'ملفات و مجلدات الوحدات قابلة للكتابة',
    'LBL_CHECKSYS_NOT_AVAILABLE' => 'غير مُتاح',
    'LBL_CHECKSYS_OK' => 'موافق',
    'LBL_CHECKSYS_PHP_INI' => 'موقع ملف (php.ini) لتهيئة PHP الخاص بك:',
    'LBL_CHECKSYS_PHP_OK' => 'حسنا (إصدار ',
    'LBL_CHECKSYS_PHPVER' => 'إصدار PHP',
    'LBL_CHECKSYS_IISVER' => 'إصدار IIS',
    'LBL_CHECKSYS_JSON' => 'تحليل لغة JSON',
    'LBL_CHECKSYS_RECHECK' => 'إعادة فحص',
    'LBL_CHECKSYS_STATUS' => 'الحالة',
    'LBL_CHECKSYS_TITLE' => 'قبول نظام الفحص والاختبار',
    'LBL_CHECKSYS_XML' => 'تحليل XML',
    'LBL_CHECKSYS_ZLIB' => 'وحدة ضغط ZLIB',
    'LBL_CHECKSYS_ZIP' => 'وحدة لمعالجة ZIP',
    'LBL_CHECKSYS_PCRE' => 'مكتبة PCRE',
    'LBL_CHECKSYS_FIX_FILES' => 'الرجاء إصلاح الملفات أو المُجلدات قبل المتابعة التالية:',
    'LBL_CHECKSYS_FIX_MODULE_FILES' => 'الرجاء إصلاح مجلدات الوحدة وملفاتها قبل المتابعة:',
    'LBL_CHECKSYS_UPLOAD' => 'دليل التحميل القابل للكتابة',
    'LBL_CLOSE' => 'إغلاق',
    'LBL_THREE' => '٣',
    'LBL_CONFIRM_BE_CREATED' => 'سيتم إنشاؤه',
    'LBL_CONFIRM_DB_TYPE' => 'نوع قاعدة البيانات',
    'LBL_CONFIRM_NOT' => 'لا',
    'LBL_CONFIRM_TITLE' => 'تأكيد الإعدادات',
    'LBL_CONFIRM_WILL' => 'سوف',
    'LBL_DBCONF_DB_DROP' => 'حذف الجداول',
    'LBL_DBCONF_DB_NAME' => 'اسم قاعدة البيانات',
    'LBL_DBCONF_DB_PASSWORD' => 'كلمة مرور المستخدم لقاعدة بيانات النظام',
    'LBL_DBCONF_DB_PASSWORD2' => 'أعد إدخال كلمة مرور المستخدم لقاعدة بيانات النظام',
    'LBL_DBCONF_DB_USER' => 'مستخدم قاعدة بيانات النظام',
    'LBL_DBCONF_SUITE_DB_USER' => 'مستخدم قاعدة بيانات النظام',
    'LBL_DBCONF_DB_ADMIN_USER' => 'اسم المستخدم الخاص بمسؤول قاعدة البيانات',
    'LBL_DBCONF_DB_ADMIN_PASSWORD' => 'كلمة مرور مسؤول قاعدة البيانات',
    'LBL_DBCONF_COLLATION' => 'التجميع',
    'LBL_DBCONF_CHARSET' => 'نوع لوحة الأحرف',
    'LBL_DBCONF_ADV_DB_CFG_TITLE' => 'الإعدادات المتقدمة لقاعدة البيانات',
    'LBL_DBCONF_DEMO_DATA' => 'قم بتعبئة قاعدة البيانات ببيانات تجريبية؟',
    'LBL_DBCONF_DEMO_DATA_TITLE' => 'اختر بيانات العرض التجريبي',
    'LBL_DBCONF_HOST_NAME' => 'اسم المضيف',
    'LBL_DBCONF_HOST_INSTANCE' => 'نموذج المضيف',
    'LBL_DBCONFIG_SECURITY' => 'لأغراض أمنية، يمكنك تحديد مستخدم قاعدة بيانات محدد حتى يتصل بقاعدة بيانات نظام SuiteCRM.  هذا المستخدم يجب أن يكون لديه صلاحية الكتابة، وتحديث واسترجاع البيانات الموجودة في قاعدة بيانات SuiteCRM والتي سيتم إنشاؤها في هذا الخادم.  هذا المستخدم يُمكنه أن يكون أحد مسئولي قاعدة البيانات المحددين بالأعلى، أو يمكنك توفير مستخدم جديد أو مُستخدم حالي غير مذكور في القائمة أعلاه.',
    'LBL_DBCONFIG_PROVIDE_DD' => 'أكتب اسم مُستخدم حالي',
    'LBL_DBCONFIG_CREATE_DD' => 'عرف مُستخدم لإنشائه',
    'LBL_DBCONFIG_SAME_DD' => 'مثل اسم المستخدم الخاص بالمشرف',
    'LBL_DBCONF_TITLE' => 'تهيئة قاعدة البيانات',
    'LBL_DBCONF_TITLE_NAME' => 'زودنا باسم قاعدة البيانات',
    'LBL_DBCONF_TITLE_USER_INFO' => 'زودنا بمعلومات مستخدم قاعدة البيانات',
    'LBL_DBCONF_TITLE_PSWD_INFO_LABEL' => 'كلمة المرور',
    'LBL_DISABLED_DESCRIPTION_2' => 'بعد أن يتم إجراء هذا التغيير، يمكنك النقر على زر "ابدأ" بالأسفل لبدء عملية التثبيت الخاصة بك.  <i>بعد أن يكتمل التثبيت، ستحتاج لتغيير قيمة المتغير \'installer_locked\' إلى \'true\'.</i>',
    'LBL_DISABLED_DESCRIPTION' => 'تم تشغيل التثببيت مرةً قبل ذلك. كإجراء وقائي، تم منع أن تُشغل التثبيت مرة أخرى. إذا كنت متأكد من رغبتك في تشغيل التثبيت مرةً أخرى، فيرجى أن تذهب لملف config.php وحدد أو أضف متغير يُسمى \'installer_locked\' ثم أعطه قيمة \'false\'. سيكون شكل الأمر مكتوبا ً كالتالي:',
    'LBL_DISABLED_HELP_1' => 'للحصول على مساعدة في التثبيت، الرجاء زيارة SuiteCRM',
    'LBL_DISABLED_HELP_LNK' => 'https://community.suitecrm.com',
    'LBL_DISABLED_HELP_2' => 'مُنتدى الدعم',
    'LBL_DISABLED_TITLE_2' => 'لقد تم تعطيل تثبيت النظام',
    'LBL_HELP' => 'مساعدة',
    'LBL_INSTALL' => 'تثبيت',
    'LBL_INSTALL_TYPE_TITLE' => 'خيارات التثبيت',
    'LBL_INSTALL_TYPE_SUBTITLE' => 'اختر نوع التثبيت',
    'LBL_INSTALL_TYPE_TYPICAL' => ' <b>تثبيت نموذجي</b>',
    'LBL_INSTALL_TYPE_CUSTOM' => ' <b>تثبيت مخصص</b>',
    'LBL_INSTALL_TYPE_MSG2' => 'مطلوب حد أدنى من المعلومات للتثبيت. يُنصح به للمستخدمين الجدد.',
    'LBL_INSTALL_TYPE_MSG3' => 'زودنا بخيارات إضافية لتحديدها أثناء التثبيت. معظم هذه الخيارات متاحة بعد التثبيت في صفحة المشرف. يوصى به للمستخدم المتطور.',
    'LBL_LANG_1' => 'لاستخدام لغة في النظام تختلف عن اللغة الافتراضية (الإنكليزية-الولايات المتحدة)، يمكنك تحميل وتثبيت حزمة اللغة المطلوبة. ستكون قادر على تحميل وتثبيت حزم اللغات من داخل النظام أيضاً.  إذا رغبت في تخطي هذه الخطوة، انقر فوق التالي.',
    'LBL_LANG_BUTTON_COMMIT' => 'تثبيت',
    'LBL_LANG_BUTTON_REMOVE' => 'إزالة',
    'LBL_LANG_BUTTON_UNINSTALL' => 'إلغاء تثبيت',
    'LBL_LANG_BUTTON_UPLOAD' => 'تحميل',
    'LBL_LANG_NO_PACKS' => 'لا يوجد',
    'LBL_LANG_PACK_INSTALLED' => 'تم تثبيت حزم اللغة التالية: ',
    'LBL_LANG_PACK_READY' => 'حزم اللغة المثبتة من قبل هي كالتالي: ',
    'LBL_LANG_SUCCESS' => 'تم بنجاح تحميل حزمة اللغة.',
    'LBL_LANG_TITLE' => 'حزمة اللغة',
    'LBL_LAUNCHING_SILENT_INSTALL' => 'ثبت النظام الآن.  سوف يستغرق بضع دقائق.',
    'LBL_LANG_UPLOAD' => 'تحميل حزمة اللغة',
    'LBL_LICENSE_ACCEPTANCE' => 'قبول الترخيص',
    'LBL_LICENSE_CHECKING' => 'افحص توافقية النظام.',
    'LBL_LICENSE_CHKENV_HEADER' => 'التحقق من بيئة',
    'LBL_LICENSE_CHKDB_HEADER' => 'تحقق من شهادة اعتماد DB.',
    'LBL_LICENSE_CHECK_PASSED' => 'تجاوز النظام فحص توافقية بنجاح.',
    'LBL_CREATE_CACHE' => 'جاري التحضير للتثبيت ...',
    'LBL_LICENSE_REDIRECT' => 'إعادة التوجيه في ',
    'LBL_LICENSE_I_ACCEPT' => 'موافق',
    'LBL_LICENSE_PRINTABLE' => ' عرض قابل للطباعة ',
    'LBL_PRINT_SUMM' => 'ملخص الطباعة',
    'LBL_LICENSE_TITLE_2' => 'رخصة النظام',

    'LBL_LOCALE_NAME_FIRST' => 'محمد',
    'LBL_LOCALE_NAME_LAST' => 'الهداني',
    'LBL_LOCALE_NAME_SALUTATION' => 'د.',

    'LBL_ML_ACTION' => 'الإجراء',
    'LBL_ML_DESCRIPTION' => 'الوصف',
    'LBL_ML_INSTALLED' => 'تاريخ التثبيت',
    'LBL_ML_NAME' => 'الاسم',
    'LBL_ML_PUBLISHED' => 'تاريخ النشر',
    'LBL_ML_TYPE' => 'النوع',
    'LBL_ML_UNINSTALLABLE' => 'إلغاء التثبيت',
    'LBL_ML_VERSION' => 'الإصدار',
    'LBL_MSSQL' => 'سيرفر SQL',
    'LBL_MSSQL2' => 'سيرفر SQL (مجاني TDS)',
    'LBL_MSSQL_SQLSRV' => 'سيرفر SQL (سيرفر SQL مايكرو سوفت الموجه لـ PHP)',
    'LBL_MYSQL' => 'MySQL',
    'LBL_MYSQLI' => 'MySQL (ملحقة MySQL)',
    'LBL_NEXT' => 'التالي',
    'LBL_NO' => 'لا',
    'LBL_PERFORM_ADMIN_PASSWORD' => 'عين كلمة مرور لمدير الموقع',
    'LBL_PERFORM_CONFIG_PHP' => 'إنشاء ملف تهيئة SuiteCRM',
    'LBL_PERFORM_CREATE_DB_1' => '<b>إنشاء قاعدة بيانات</b> ',
    'LBL_PERFORM_CREATE_DB_2' => ' <b>على</b> ',
    'LBL_PERFORM_CREATE_DB_USER' => 'إنشاء اسم مستخدم وكلمة مرور لقاعدة البيانات...',
    'LBL_PERFORM_CREATE_DEFAULT' => 'إنشئ البيانات الافتراضية للنظام',
    'LBL_PERFORM_DEFAULT_SCHEDULER' => 'إنشاء جدولة افتراضية للمهام',
    'LBL_PERFORM_DEFAULT_USERS' => 'إنشاء المستخدمين الافتراضيين',
    'LBL_PERFORM_DEMO_DATA' => 'ملء جداول قاعدة البيانات ببيانات تجريبية (هذا قد يأخذ القليل من الوقت)',
    'LBL_PERFORM_DONE' => 'تم <br>',
    'LBL_PERFORM_FINISH' => 'إنتهى',
    'LBL_PERFORM_OUTRO_1' => 'إعداد النظام ',
    'LBL_PERFORM_OUTRO_2' => ' اكتمل الآن!',
    'LBL_PERFORM_OUTRO_3' => 'مجموع الوقت: ',
    'LBL_PERFORM_OUTRO_4' => ' ثواني.',
    'LBL_PERFORM_OUTRO_5' => 'الذاكرة التقريبية المستخدمة: ',
    'LBL_PERFORM_OUTRO_6' => ' بايت.',
    'LBL_PERFORM_SUCCESS' => 'ناجح!',
    'LBL_PERFORM_TABLES' => 'إنشاء تطبيق جداول النظام وجداول المراجعة والتدقيق والعلاقات',
    'LBL_PERFORM_TITLE' => 'تنفيذ الإعداد',
    'LBL_PRINT' => 'طباعة',
    'LBL_REG_CONF_1' => 'يرجى تعبئة النموذج أدناه لتتسقبل إعلانات المنتج وأخبار التدريب والعروض الخاصة ودعوات عن مناسبات خاصة من الشركة. نحن لا نبيع ولانؤجر ولانشارك أو نوزع المعلومات التي نقوم بجمعها.',
    'LBL_REG_CONF_3' => 'شكراً لتسجيلك، أنقر على زر إنهتء حتى تدخل على SuiteCRM. ستحتاج إلى الدخول في المرة الأولى باستخدام اسم المُستخدم "admin" وكلمة المرور حتى تُكمل الخطوة الثانية.',
    'LBL_REG_TITLE' => 'التسجيل',

    'LBL_REQUIRED' => '* الحقول المطلوبة',

    'LBL_SITECFG_ADMIN_Name' => 'اسم مشرف النظام',
    'LBL_SITECFG_ADMIN_PASS_2' => 'أعد إدخال كلمة المرور الخاصة بالمشرف',
    'LBL_SITECFG_ADMIN_PASS' => 'كلمة مرور مشرف النظام',
    'LBL_SITECFG_APP_ID' => 'رقم معرف التطبيق',
    'LBL_SITECFG_CUSTOM_ID_DIRECTIONS' => 'إذا تم تحديد هذا الخيار، يجب عليك تقديم معرف التطبيق لتجاوز إنشاء المعرف تلقائياً. يضمن المعرف عدم استخدام جلسات مثيل SuiteCRM من قبل مثيلات أخرى. إذا كان لديك مجموعة من تثبيتات لـ SuiteCRM، فيجب على الجميع استخدام نفس معرف التطبيق.',
    'LBL_SITECFG_CUSTOM_ID' => 'توفير معرف التطبيق الخاص بك',
    'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS' => 'إذا تم تحديد هذا الخيار، يجب عليك تحديد سجل الدليل لتجاوز الدليل الافتراضي لـسجل SuiteCRM. بغض النظر عن أي يوجد ملف السجل، سيقتصر الوصول إليه من خلال متصفح الويب عن طريق توجيه هتكس \'htaccess\'.',
    'LBL_SITECFG_CUSTOM_LOG' => 'استخدم سجل الدليل المخصص',
    'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS' => 'إذا تم تحديدها، يجب أن تُزودنا بمجلد آمن لتخزين معلومات جلسة النظام. هذا سيمنع سرقة بيانات الجلسة إذا كانت خوادم الاستضافة مُشتركة.',
    'LBL_SITECFG_CUSTOM_SESSION' => 'استخدم دليل جلسة عمل مخصصة في SuiteCRM',
    'LBL_SITECFG_FIX_ERRORS' => '<b>الرجاء تصحيح الأخطاء التالية قبل المتابعة:</b>',
    'LBL_SITECFG_LOG_DIR' => 'سجل الدليل',
    'LBL_SITECFG_SESSION_PATH' => 'المسار مجلد الجلسة<br>(يجب أن يكون قابل للكتابة)',
    'LBL_SITECFG_SITE_SECURITY' => 'حدد خيارات الأمان',
    'LBL_SITECFG_SUITE_UP_DIRECTIONS' => 'إذا كانت محددة، سيقوم النظام بالتحقق بشكل دوري من توفر إصدارات محدثة للتطبيق.',
    'LBL_SITECFG_SUITE_UP' => 'البحث عن التحديثات تلقائياً؟',
    'LBL_SITECFG_TITLE' => 'تهيئة الموقع',
    'LBL_SITECFG_TITLE2' => 'حدد مسئول إدارة النظام',
    'LBL_SITECFG_SECURITY_TITLE' => 'أمان الموقع',
    'LBL_SITECFG_URL' => 'رابط URl لمثيل SuiteCRM',
    'LBL_SITECFG_ANONSTATS' => 'إرسال إحصائيات الاستخدام المجهول؟',
    'LBL_SITECFG_ANONSTATS_DIRECTIONS' => 'إذا حُددت،النظام سيرسل إحصائيات <b>مجهولة</b> حول تثبيت النظام لشركة SuiteCRM Inc. النظام سيتحقق من توافر إصدارات جديدة. هذه المعلومات ستساعدنا على فهم افضل لكيفية استخدام التطبيق وتحسين المنتج.',
    'LBL_SITECFG_URL_MSG' => 'أدخل رابط URL الذي سيستخدم للوصول إلى مثيل SuiteCRM بعد التثبيت. الرباط سيتم استخدامه كقاعدة لروابط صفحات تطبيق SuiteCRM. يجب أن يتضمن الرباط سيرفر الويب أو اسم الجهاز أو عنوان IP.',
    'LBL_SITECFG_SYS_NAME_MSG' => 'أدخل اسماً للنظام الخاص بك. هذا الاسم سيظهر في شريط عنوان المُتصفح عند زيارة المستخدمين تطبيق SuiteCRM.',
    'LBL_SITECFG_PASSWORD_MSG' => 'بعد التثبيت، ستحتاج لاسم مستخدم مشرف النظام (اسم المستخدم الافتراضي= Admin) لتسجيل الدخول للنظام. أدخل كلمة مرور لمسول النظام. يمكن تغيير كلمة المرور بعد تسجيل المبدئي.  يمكنك أيضا إدخال اسم مشرف آخر لتستخدمه بجانب القيمة الافتراضية المتوفره.',
    'LBL_SITECFG_COLLATION_MSG' => 'حدد إعدادات التصنيف (الفرز) للنظامك. هذه الإعدادات ستنشئ جداول باللغات التي تستخدمها. في حالة أن لغتك لا تتطلب إعداد مخصص، الرجاء استخدام القيم الافتراضية.',
    'LBL_SPRITE_SUPPORT' => 'دعم الطيف',
    'LBL_SYSTEM_CREDS' => 'اعتمادات النظام',
    'LBL_SYSTEM_ENV' => 'بيئة النظام',
    'LBL_SHOW_PASS' => 'إظهار كلمات المرور',
    'LBL_HIDE_PASS' => 'إخفاء كلمات المرور',
    'LBL_HIDDEN' => '<i>(مخفي)</i>',
    'LBL_STEP1' => 'الخطوة 1 من 2-متطلبات التثبيت المسبق',
    'LBL_STEP2' => 'الخطوة 2 من 2-التهيئة',
    'LBL_STEP' => 'الخطوة',
    'LBL_TITLE_WELCOME' => 'مرحبا بك للنظام ',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY' => 'هل أنت جاهز لبدء التثبيت؟',
    'REQUIRED_SYS_COMP' => 'مكونات النظام المطلوبة',
    'REQUIRED_SYS_COMP_MSG' =>
        'قبل البدء تأكد أن النظام مدعوم بمكونات النظام التالية:<br>
                      <ul>
                      <li> نظام إدارة قواعد البيانات (مثل: MariaDB, MySQL or SQL Server)</li>
                      <li>خادم الويب (Apache, IIS)</li>
                      </ul>
                      راجع وثيقة التوافقية وتحديدا مصفووفة التوافقية لتتعرف
                      على المكونات المتوافقة مع إصدار النظام الذي تم تثبيته.<br>',
    'REQUIRED_SYS_CHK' => 'التحقق الأولي للنظام',
    'REQUIRED_SYS_CHK_MSG' =>
        'عندما تبدء عملية التنصيب، سيتم إجراء فحص النظام على سيرفر الويب الذي توجد عليه ملفات SuiteCRM من أجل
                      التأكد من أن النظام تم تهيئته بشكل جيد و لديه كل المكونات اللازمة
                      لإكمال التثبيت بنجاح.<br><br>
                      النظام سيقوم بالتحقق من كل العناصر التالية:<br>
                      <ul>
                      <li><b>إصدار PHP</b> &#8211; يجب أن يتطابق مع التطبيق</li>
                      <li><b>متغيرات الجلسة</b> &#8211; يجب أن تعمل بشكل جيد</li>
                      <li><b>سلاسل MB </b> &#8211; يجب أن تكون مثبتة و أن يتم تمكينها في php.ini</li>
                      <li><b>قاعدة بيانات الدعم</b> &#8211; يجب أن تكون موجودة من أجل MariaDB و MySQL أو SQL سيرفر</li>
                      <li><b>Config.php</b> &#8211; يجب أن تكون موجودة و لديها الأذونات المناسبة لجعله قابل للكتابة فيه</li>
                      <li>ملفات SuiteCRM التالية يجب أن تكون قابلة للكتابة:<ul><li><b>/مخصص</li>
                      <li>/ذاكرة التخزين الموقتة</li>
                      <li>/الوحدات</li>
                      <li>تحميل</b></li></ul></li></ul>
                                  إذا فشل التحقق لن يكون بإمكانك رسالة إجراء عملية التنصيب.
                                  ستظهر رسالة الخطأ لتشرح لماذا لم يستطع نظامك اجتياز عملية التحقق.
                                  بعد إجراء أية تغييرات ضرورية، يمكنك  إخضاع النظام لتحقق مرة أخرى لمتابعة التنصيب.<br>',


    'REQUIRED_INSTALLTYPE' => 'تثبيت نموذجي أو مخصص',
    'REQUIRED_INSTALLTYPE_MSG' =>
        'بعد إجراء التحقق من النظام، يمكنك اختيار بين
                      التنصيب النموذجي أو المخصص.<br><br>
                      لكليهما أي التنصيب <b>النموذجي</b> و <b>المخصص</b>، يتوجب عليك معرفة التالي:<br>
                      <ul>
                      <li> <b>نمط قاعدة البيانات</b> التي سوف تستقبل بيانات SuiteCRM و ملفاته<ul><li>قاعدة بيانات متوافقة
                      <li> <b>أنماط: كل من MariaDB و MySQL أو SQL سيرفر.<br><br></li></ul></li>
                      <li> <b>اسم سيرفر الويب</b> أو ألة (استقبال) في أي قاعدة بيانات موجودة
                      <ul><li>هذا قد يكون<i>مخزن محلياً</i> إذا كانت قاعدة البيانات موجودة على حاسوبك أو على نفس سيرفر الويب على نفس أدة ملفات SuiteCRM الخاصة بك.<br><br></li></ul></li>
                      <li><b>اسم قاعدة البيانات</b>التي تريد استخدامها لاستقبال  بيانات SuiteCRM و ملفاته</li>
                        <ul>
                          قد يكون لديك قاعدة بيانات مسبقاً و تريد استخدامها. إذا
                          قمت بتقديم اسم قاعدة بيانات موجودة، الجداول في قاعدة البيانات سوف تكون
                          منسدلة أثناء التنصيب عندما يتم تعريف مخطط قاعدة بيانات SuiteCRM و ملفاته.</li>
                          <li>إذا لم يكن لديك قاعدة بيانات من قبل، الاسم الذي تقدمه سيتم استخدامه من أجل
                          قاعدة البيانات الجديدة التي تم إنشاؤها من أجل المثيل أثناء التنصيب.<br><br></li>
                        </ul>
                      <li><b>قاعدة بيانات المستخدم المسؤول الاسم و كلمة المرور</b> <ul><li>قاعدة بيانات المسؤول يجب أن تكون قادرة على إنشاء جداول و المستخدمين و كتابة قاعدة البيانات.</li><li>قد تحتاج إلى
                      الاتصال بمسؤول قاعدة بياناتك لمعرفة ما إذا كانت قاعدة بياناتك
                      ليتس مخزنة على جهازك و/أو ما إذا كنت أنت هو المسؤول عن قاعدة البيانات أم لا.<br><b</ul></li></li>r>
                      <li> <b> قاعدة بيانات SuiteCRM  اسم المستخدم و كلمة المرور</b>
                      </li>
                        <ul>
                          <li> المستخدم قد يكون المسؤو عن قاعدة البيانات، أو يمكنك تقديم اسم
                          مستخدم قاعدة بيانات آخر موجود.</li>
                          <li> إذا أردت إنشاء مستخدم قاعدة بيانات لهذا الغرض، سيكون بإمكانك
                          تقديم اسم مستخدم و كلمة مرور جديدة أثناء عملية التنصيب،
                          و سيتم إنشاء المستخدم أثناء التنصيب. </li>
                        </ul></ul><p>

                      من أجل إعداد<b>مخصص</b>، قد يتوجب عليك معرفة التالي:<br>
                      <ul>
                      <li> <b> الرباط الذي سيتم استخدامه للوصول إلى مثيل SuiteCRM </b> بعد أن يتم تنصيبه.
                      هذا الرابط يجب أن يشمل خادم الويب أو اسم الجهاز أو عنوان آي بي.<br><br></li>          
                                  <li>[Optional]<b>المسار إلى دليل الجلسة </b>إذا أردت استخدام
                                  دليل جلسة مخصص لمعلومات حول SuiteCRM من أجل الحفاظ على بيانات الجلسة من
                   أن تكون غير محمية على سيرفرات مشتركة.<br><br></li>
                                  <li>[Optional]<b>المسار إلى دليل السجل المخصص</b>إذا كنت تريد تجاوز الدليل الافتراضي لسجل SuiteCRM.<br><br></li>   
                                  <li>[Optional]<b>معرف التطبيق</b>إذا كنت تريد تجاوز المعرف الذي تم إنشاؤه تلقائياً
                                  الذي يضمن أن لا تكون جلسات مثيل SuiteCRM مستخدمة من طرف مثيل أخر.<br><br></li>
                                  <li><b>مجموعة الأحرف</b>المستخدم غالباً من قبلك.<br><br></li></ul>
                                  للمزيد من المعلومات التفصيلية، يرجى الرجوع إلى دليل التثبيت.
                                ',
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'يرجى قراءة المعلومات الهامة التالية قبل متابعة التثبيت.  المعلومات ستساعدك على تحديد إذا كنت جاهز لتثبيت التطبيق حالياً أو لا.',

    'LBL_WELCOME_CHOOSE_LANGUAGE' => '<b>اختر اللغة الخاصة بك</b>',
    'LBL_WELCOME_SETUP_WIZARD' => 'مرشد الإعدادات الآلي',
    'LBL_WIZARD_TITLE' => 'معالج إعداد SuiteCRM: ',
    'LBL_YES' => 'نعم',

    'LBL_PATCHES_TITLE' => 'تثبيت أحدث التصحيحات',
    'LBL_MODULE_TITLE' => 'تثبيت حزم اللغات',
    'LBL_PATCH_1' => 'إذا كنت تريد تخطي هذه الخطوة، فانقر على التالي.',
    'LBL_PATCH_TITLE' => 'تصحيح النظام',
    'LBL_PATCH_READY' => 'التصحيحات التالية جاهزة للتثبيت:',
    'LBL_SESSION_ERR_DESCRIPTION' => "يعتمد SuiteCRM على جلسات PHP لتخزين المعلومات المهمة أثناء الاتصال بسيرفر الويب هذا. PHB المثبة لا يحتوي على معلومات الجلسة التي تم تكوينها بشكل صحيح.
											<br><br>تهيئة سيئة شائعة هي التي
<b>'session.save_path'</b>التوجيهية التي لا تشير إلى دليل صالح. <br>
											<br> الرجاء تصحيح<a target=_new href='http://us2.php.net/manual/en/ref.session.php'>تهيئة PHP الخاص بك</a> في ملف php.ini الموجود أدناه.",
    'LBL_SESSION_ERR_TITLE' => 'خطأ في تهيئة جلسات PHP',
    'LBL_SYSTEM_NAME' => 'اسم النظام',
    'LBL_COLLATION' => 'إعدادات التصنيف',
    'LBL_REQUIRED_SYSTEM_NAME' => 'جد اسم نظام لمثيل SuiteCRM.',
    'LBL_PATCH_UPLOAD' => 'قم بتحديد ملف التصحيح من حاسبوك',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'مطلوب Php بإصدار 5 أو أعلى.',
    'LBL_MINIMUM_PHP_VERSION' => 'أقل إصدار Php مطلوب هو 5.1.0. لكن إصدار Php الموصى به هو 5.2.x.',
    'LBL_YOUR_PHP_VERSION' => '(إصدار Php الحالي هو ',
    'LBL_RECOMMENDED_PHP_VERSION' => ' إصدار php الموصى به هو 5.2.x)',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'تم تفعيل طورّ التوافق مع إصدارات Php السابقة. ضع zend.ze1_compatibility_mode بقيمة Off للمضي قدماً',
    'LBL_STREAM' => 'PHP يتيح استخدام التدفق',

    'advanced_password_new_account_email' => array(
        'subject' => 'معلومات الحساب الجديد',
        'type' => 'النظام',
        'description' => 'يتم استخدام هذا القالب عندما يقوم نظام المسؤول بإرسال كلمة مرور جديدة للمستخدم.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>هنا يوجد اسم المستخدم خاص بحسابك و كلمة المرور المؤقتة:</p><p>اسم المستخدم: $contact_user_user_name</p><p>كلمة المرور: $contact_user_user_hash </p><br><p>$config_site_url</p><br><p> عندما تقوم بتسجيل الدخول باستخدام كلمة المرور التي في الأعلى، قد يتم يطلب منك إعادة تعيين كلمة المرور من اختيارك. </p>   </td>         <tr><tr><td colspan=\"2\">         </tr> </tbody> </div>',
        'txt_body' =>
            '
هنا يوجد اسم المستخدم الخاص بحسابك و كلمة المرور المؤقتة:
اسم المستخدم: $contact_user_user_name
كلمة المرور : $contact_user_user_hash

$config_site_url

بعد تسجيل الدخول باستخدم كلمة المرور التي في الأعلى، قد يطلب منك إعادة تعيين كلمة المرور من اختيارك.',
        'name' => 'النظام أنشأ كلمة المرور للبريد الإلكتروني',
    ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'إعادة تعيين كلمة مرور حسابك',
        'type' => 'النظام',
        'description' => "هذا القالب يستخدم حتى أرسل للمُستخدم رابط ينقر عليه لإعادة تعيين كلمة مرور حساب المُستخدم.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>لقد طلبت مؤخرا $contact_user_pwd_last_changed أن تكون قادراً على إعادة تعيين كلمة مرور حسابك. </p><p>انقر على الرابط أدناه لإعادة تعيين كلمة مرورك:</p><p>$contact_user_link_guid </p> </td><td colspan=\"2\">         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
لقد طلبت مؤخرا على $contact_user_pwd_last_changed لتكون قادراً على إعادة تعيين كلمة مرور الحساب الخاص بك.

انقر الرابط الموجود أدناه لإعادة تعيين كلمة المرور الخاصة بك:

 $contact_user_link_guid',
        'name' => 'نسيت كلمة المرور لبريدك الإلكتروني',
    ),


    'two_factor_auth_email' => array(
        'subject' => 'رمز التوثيق الثنائي',
        'type' => 'النظام',
        'description' => "يتم استخدام هذا القالب للإرسال للمستخدم كود التوثيق الثنائي.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>رمز التوثيق الثنائي هو <b>$code</b>.</p> </td>         </tr></tr> </tbody></table> </div>',
        'txt_body' =>
            'رمز التوثيق الثنائي هو $code.',
        'name' => 'رسالة التوثيق الثنائي',
    ),

    // SMTP settings

    'LBL_FROM_NAME' => '"من" الاسم:',
    'LBL_FROM_ADDR' => '"من" العنوان:',

    'LBL_WIZARD_SMTP_DESC' => 'زودني بحساب البريد الإلكتروني الذي سيستخدم في إرسال رسائل البريد، سترسل مثل رسائل إسناد المهام والتنبيهات وكلمات المرور للمستخدمين الجدد. المستخدمين سيتلقو راسئل من النظام كما سيرسلون من حساب بريدهم الإلكتروني.',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'اختر مزود البريد الإلكتروني الخاص بك:',

    'LBL_SMTPTYPE_GMAIL' => 'بريد جوجل',
    'LBL_SMTPTYPE_YAHOO' => 'بريد ياهو!',
    'LBL_SMTPTYPE_EXCHANGE' => 'مايكروسوفت إكسشينج',
    'LBL_SMTPTYPE_OTHER' => 'أخرى',
    'LBL_MAIL_SMTP_SETTINGS' => 'مواصفات خادم SMTP',
    'LBL_MAIL_SMTPSERVER' => 'خادم SMTP:',
    'LBL_MAIL_SMTPPORT' => 'منفذ SMTP:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'هل أستخدم نظام المصادقة الخاص بـ SMTP؟',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'تمكين SMTP عبر SSL أو TLS؟',
    'LBL_GMAIL_SMTPUSER' => 'عنوان بريد Gmail الإلكتروني:',
    'LBL_GMAIL_SMTPPASS' => 'كلمة مرور Gmail:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'السماح للمستخدمين باستخدام هذا الحساب للبريد الصادر:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'عند تحديد هذا الخيار، سيتمكن جميع المستخدمين من إرسال رسائل البريد الإلكتروني باستخدام نفس حساب البريد الصادر المستخدم لإرسال إشعارات النظام والتنبيهات. في حالة عدم تحديد هذا الخيار، يمكن للمستخدمين استخدام سيرفر البريد الصادر بعد تقديم معلومات حساباتهم الخاصة.',

    'LBL_YAHOOMAIL_SMTPPASS' => 'كلمة السر لبريد ياهو:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'معرف بريد ياهو:',

    'LBL_EXCHANGE_SMTPPASS' => 'كلمة مرور Exchange:',
    'LBL_EXCHANGE_SMTPUSER' => 'اسم المستخدم لـ Exchange:',
    'LBL_EXCHANGE_SMTPPORT' => 'منفذ خادم Exchange:',
    'LBL_EXCHANGE_SMTPSERVER' => 'خادم Exchange:',


    'LBL_MAIL_SMTPUSER' => 'اسم المستخدم SMTP:',
    'LBL_MAIL_SMTPPASS' => 'كلمة مرور SMTP:',

    // Branding

    'LBL_WIZARD_SYSTEM_TITLE' => 'العلامة التجارية',
    'LBL_WIZARD_SYSTEM_DESC' => 'زودني بإسم وشعار منشأتك من أجل إبرازها في النظام.',
    'SYSTEM_NAME_WIZARD' => 'الاسم:',
    'SYSTEM_NAME_HELP' => 'هذا هو الاسم الذي سيظهر في شريط العنوان الخاص بالمُتصفح.',
    'NEW_LOGO' => 'حدد الشعار:',
    'NEW_LOGO_HELP' => 'نوع ملف الصورة ممكن أن يكون .png أو .jpg. أعلى ارتفاع للصورة هو 170px و أقصى عرض للصورة هو 450px. أي صورة يتم رفعها وتكون أكبر فسوف يتم التحكم بأبعاده لتناسب المثاسات المذكورة سابقاً.',
    'COMPANY_LOGO_UPLOAD_BTN' => 'رفع',
    'CURRENT_LOGO' => 'الشعار الحالي:',
    'CURRENT_LOGO_HELP' => 'يتم عرض هذا الشعار في مركز شاشة تسجيل الدخول لتطبيق SuiteCRM.',


    //Scenario selection of modules
    'LBL_WIZARD_SCENARIO_TITLE' => 'سيناريو الاختيار',
    'LBL_WIZARD_SCENARIO_DESC' => 'هذا سيسمح بتكييف الوحدات المعروضة حسب متطلباتك. كل وحدة يمكن أن تُفعل بعد تثبتها باستخدام صفحة مدير النظام.',
    'LBL_WIZARD_SCENARIO_EMPTY' => 'لا يوجد سيناريوهات مُحددة حالياً في ملف التهيئة (config.php)',


    // System Local Settings


    'LBL_LOCALE_TITLE' => 'الإعدادات المحلية للنظام',
    'LBL_WIZARD_LOCALE_DESC' => 'حدد كيف تريد عرض بياناتك في النظام، هل تُعرض حسب الموقع الجغرافي. الإعدادات التي قدمتها هن سوف تكون الإعدادات الإفتراضية. المُستخدمون سيكونون قادرين على تحديد تفضيلاتهم.',
    'LBL_DATE_FORMAT' => 'تنسيق التاريخ:',
    'LBL_TIME_FORMAT' => 'تنسيق الوقت:',
    'LBL_TIMEZONE' => 'المنطقة الزمنية:',
    'LBL_LANGUAGE' => 'اللغة:',
    'LBL_CURRENCY' => 'العملة:',
    'LBL_CURRENCY_SYMBOL' => 'رمز العملة:',
    'LBL_CURRENCY_ISO4217' => 'إيزو 4217 رمز العملة:',
    'LBL_NUMBER_GROUPING_SEP' => 'فاصلة آلالاف:',
    'LBL_DECIMAL_SEP' => 'الفاصلة العشرية:',
    'LBL_NAME_FORMAT' => 'تنسيق الاسم:',
    'UPLOAD_LOGO' => 'الرجاء الانتظار، تحميل الشعار..',
    'ERR_UPLOAD_FILETYPE' => 'نوع الملف غير مسموح، الرجاء تحميل jpeg أو png.',
    'ERR_LANG_UPLOAD_UNKNOWN' => 'حدث خطأ في تحميل ملف غير معروف.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_INI_SIZE' => 'الملف الذي تم تحميله يتجاوز شروط هذا الأمر upload_max_filesize والمكتوب في ملف php.ini.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_FORM_SIZE' => 'الملف الذي تم تحميله يتجاوز شروط أمر MAX_FILE_SIZE الموجود والمجدد في نموذج الـ HTML.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_PARTIAL' => 'الملف الذي تم تحميله قد تم تحميله جزيئاً فقط.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_FILE' => 'لم يتم تحميل أي ملف.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_TMP_DIR' => 'مجلد مؤقت مفقود.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_CANT_WRITE' => 'فشل في كتابة الملف على القرص.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_EXTENSION' => 'ملحق PHP أوقف تحميل الملف. PHP لا يوفر وسيلة للتأكد من أي ملحق قد تسبب في إيقاف تحميل الملف.',

    'LBL_INSTALL_PROCESS' => 'تثبيت...',

    'LBL_EMAIL_ADDRESS' => 'عنوان البريد الإلكتروني:',
    'ERR_ADMIN_EMAIL' => 'عنوان بريد المشرف غير صحيح.',
    'ERR_SITE_URL' => 'عنوان الموقع مطلوب.',

    'STAT_CONFIGURATION' => 'تهيئة العلاقات...',
    'STAT_CREATE_DB' => 'إنشاء قاعدة بيانات...',

    'STAT_CREATE_DEFAULT_SETTINGS' => 'إنشاء الإعدادات الافتراضية...',
    'STAT_INSTALL_FINISH' => 'إنتهاء التثبيت...',
    'STAT_INSTALL_FINISH_LOGIN' => 'انتهت عملية التثبيت، <a href="%s"> الرجاء تسجيل الدخول...</a>',
    'LBL_LICENCE_TOOLTIP' => 'فضلاً اقبل الرخصة أو لاً',

    'LBL_MORE_OPTIONS_TITLE' => 'المزيد من الخيارات',
    'LBL_START' => '',
    'LBL_DB_CONN_ERR' => 'خطأ في قاعدة البيانات',
    'LBL_OLD_PHP' => 'تم الكشف عن إصدار PHP القديم!',
    'LBL_OLD_PHP_MSG' => 'إصدار PHP الموصى به لتثبيت SuiteCRM هو %s <br />الحد الأدنى لنسخة PHP المطلوبة هو %s<br />أنت تستخدم نسخة PHP %s، وهو EOL: <a href="http://php.net/eol.php">http://php. et/eol.php</a>.<br />يرجى النظر في ترقية إصدار PHP الخاص بك. ',
    'LBL_OLD_PHP_OK' => 'أنا أدرك المخاطر وأريد أن أستمر.',

    'LBL_DBCONF_TITLE_USER_INFO_LABEL' => 'مُستخدم',
    'LBL_DBCONFIG_MSG3_LABEL' => 'اسم قاعدة البيانات',
    'LBL_DBCONFIG_MSG3' => 'اسم قاعدة البيانات التي ستحتوي على بيانات مثيل SuiteCRM التي توشك على تثبيتها.',
    'LBL_DBCONFIG_MSG2_LABEL' => 'اسم المضيف',
    'LBL_DBCONFIG_MSG2' => 'اسم خادم الويب أو الجهاز (المضيف) الذي توجد عليه قاعدة البيانات (مثل www.mydomain.com). في حالة التثبيت محليًا ، من الأفضل استخدام "localhost" بدلاً من "127.0.0.1" ، لأسباب تتعلق بالأداء.',
    'LBL_DBCONFIG_B_MSG1_LABEL' => '', // this label dynamically needed in install/installConfig.php:293
    'LBL_DBCONFIG_B_MSG1' => 'اسم المستخدم وكلمة المرور الخاصة بمسؤول قاعدة البيانات الذي يمكنه إنشاء جداول ومُستخدمين والذي يمكنه الكتابة في قاعدة البيانات عند الضرورة من أجل إعداد قاعدة بيانات SuiteCRM.'
);
