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
    /*'ADMIN_EXPORT_ONLY'=>'Admin export only',*/
    'ADVANCED' => 'متقدم',
    'DEFAULT_CURRENCY_ISO4217' => 'رمز عملة ISO 4217',
    'DEFAULT_CURRENCY_NAME' => 'اسم العملة',
    'DEFAULT_CURRENCY_SYMBOL' => 'رمز العملة',
    'DEFAULT_DATE_FORMAT' => 'تنسيق التاريخ الافتراضي',
    'DEFAULT_DECIMAL_SEP' => 'علامة الفاصلة العشرية',
    'DEFAULT_LANGUAGE' => 'اللغة الافتراضية',
    'DEFAULT_SYSTEM_SETTINGS' => 'واجهة المستخدم',
    'DEFAULT_THEME' => 'النمط الافتراضي',
    'DEFAULT_TIME_FORMAT' => 'تنسيق الوقت الافتراضي',

    'DISPLAY_RESPONSE_TIME' => 'عرض سرعات استجابة الخادم',

    'IMAGES' => 'الشعارات',
    'LBL_ALLOW_USER_TABS' => 'السماح للمستخدمين بإخفاء علامات التبويب',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'إعدادات النظام',
    'LBL_LOGVIEW' => 'عرض سجل الأحداث',
    'LBL_MAIL_SMTPAUTH_REQ' => 'هل أستخدم نظام المصادقة الخاص بخدمة SMTP للبريد الصادر؟',
    'LBL_MAIL_SMTPPASS' => 'كلمة مرور SMTP:',
    'LBL_MAIL_SMTPPORT' => 'منفذ SMTP:',
    'LBL_MAIL_SMTPSERVER' => 'خادم SMTP:',
    'LBL_MAIL_SMTPUSER' => 'اسم المستخدم SMTP:',
    'LBL_MAIL_SMTP_SETTINGS' => 'مواصفات خادم SMTP',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'اختر مزود البريد الإلكتروني الخاص بك:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'كلمة السر لبريد ياهو:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'معرف بريد ياهو:',
    'LBL_GMAIL_SMTPPASS' => 'كلمة مرور جيميل:',
    'LBL_GMAIL_SMTPUSER' => 'عنوان بريد جيميل الإلكتروني:',
    'LBL_EXCHANGE_SMTPPASS' => 'كلمة مرورExchange:',
    'LBL_EXCHANGE_SMTPUSER' => 'اسم المستخدم لـ Exchange:',
    'LBL_EXCHANGE_SMTPPORT' => 'منفذ خادم Exchange:',
    'LBL_EXCHANGE_SMTPSERVER' => 'خادم Exchange:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'السماح للمستخدمين باستخدام هذا الحساب للبريد الصادر:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'عند تحديد هذا الخيار، سيتمكن جميع المستخدمين من إرسال رسائل البريد الإلكتروني باستخدام نفس حساب البريد الصادر المستخدم لإرسال إشعارات النظام والتنبيهات. في حالة عدم تحديد هذا الخيار، يمكن للمستخدمين استخدام سيرفر البريد الصادر بعد تقديم معلومات حساباتهم الخاصة.',
    'LBL_MAILMERGE' => 'دمج البريد',
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'الحد الأدنى للفاصل الزمني بين التحديثات التلقائية للتطبيق الفرعي',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'هذه هي القيمة الأقل التي يمكن اختيارها للحصول على التحديث التلقائي لتطبيق dashlets. الإعداد إلى "أبدا Never" يعطل التحديث التلقائي لتطبيق dashlets كلياً.',
    'LBL_MODULE_FAVICON' => 'عرض رمز الوحدة كأيقونة المفضلة (favicon)',
    'LBL_MODULE_FAVICON_HELP' => 'إذا كنت في وحدة لها أيقونة، استخدم رمز الوحدة كأيقونة مفضلة (favicon)، بدلاً من أيقونة المفضلة الخاصة بالنمط العام للنظام، في علامة التبويب المتصفح.',
    'LBL_MODULE_NAME' => 'إعدادات النظام',
    'LBL_MODULE_ID' => 'المنفذ للتهيئة Configurator',
    'LBL_MODULE_TITLE' => 'واجهة المستخدم',
    'LBL_NOTIFY_FROMADDRESS' => '"من" العنوان:',
    'LBL_NOTIFY_SUBJECT' => 'موضوع البريد الإلكتروني:',

    'LBL_PROXY_AUTH' => 'المصادقة؟',
    'LBL_PROXY_HOST' => 'بروكسي مضيف',
    'LBL_PROXY_ON_DESC' => 'تهيئة عنوان خادم البروكسي وإعدادات المصادقة',
    'LBL_PROXY_ON' => 'استخدام خادم بروكسي؟',
    'LBL_PROXY_PASSWORD' => 'كلمة السر',
    'LBL_PROXY_PORT' => 'منفذ',
    'LBL_PROXY_TITLE' => 'إعدادات بروكسي',
    'LBL_PROXY_USERNAME' => 'اسم المستخدم',
    'LBL_RESTORE_BUTTON_LABEL' => 'استعادة',
    'LBL_SYSTEM_SETTINGS' => 'إعدادات النظام',
    'LBL_USE_REAL_NAMES' => 'عرض الاسم الكامل',
    'LBL_USE_REAL_NAMES_DESC' => 'اعرض الأسماء الكاملة للمستخدمين بدلاً من أسماء المستخدمين الخاصة بهم في حقول التعيين.',
    'LBL_DISALBE_CONVERT_LEAD' => 'تعطيل إجراء تحويل نشاط العميل المحتمل للعملاء المحتملين المحولين',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'إذا تم تحويل أحد العملاء المحتملين من قبل، فإن تمكين هذا الخيار سيزيل نشاط العميل المحتمل المحول.',
    'LBL_ENABLE_ACTION_MENU' => 'عرض الأنشطة داخل القوائم',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'اختر هذا الخيار لعرض الأنشطة بطريقة عرض التفاصيل وطريقة عرض اللوحة الفرعية داخل قائمة منسدلة. إذا لم يتم اختيار هذا الخيار، ستظهر الإجراءات كأزرار منفصلة.',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'تمكين التحرير الداخلي في طريقة عرض القائمة',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'اختر لتمكين التعديل الداخلي للحقول في طريقة عرض القائمة. إذا كان التعديل الداخلي غير مختار سيتم تعطيله في طريقة عرض القائمة.',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'تمكين التحرير الداخلي في طريقة عرض التفاصيل',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'اختر لتمكين التعديل الداخلي للحقول في طريقة العرض التفصيلية. إذا كان التعديل الداخلي غير مختار سيتم تعطيله في طريقة العرض التفصيلية.',
    'LBL_HIDE_SUBPANELS' => 'لوحات فرعية مطوية',
    'LIST_ENTRIES_PER_LISTVIEW' => 'عدد العناصر لكل صفحة في طريقة عرض القائمة',
    'LIST_ENTRIES_PER_SUBPANEL' => 'عدد عناصر اللوحات الفرعية لكل صفحة',
    'LOG_MEMORY_USAGE' => 'استخدام الذاكرة لسجل الأحداث',
    'LOG_SLOW_QUERIES' => 'استعلامات السجل البطيئة',
    'CURRENT_LOGO' => 'الشعار الحالي:',
    'CURRENT_LOGO_HELP' => 'يتم عرض هذا الشعار في مركز شاشة تسجيل الدخول لتطبيق SuiteCRM.',
    'NEW_LOGO' => 'حدد الشعار:',
    'NEW_LOGO_HELP' => 'نوع ملف الصورة ممكن أن يكون .png أو .jpg. أعلى ارتفاع للصورة هو 170px و أقصى عرض للصورة هو 450px. أي صورة يتم رفعها وتكون أكبر فسوف يتم التحكم بأبعاده لتناسب المثاسات المذكورة سابقاً.',
    'NEW_LOGO_HELP_NO_SPACE' => 'نوع ملف الصورة ممكن أن يكون .png أو .jpg. أعلى ارتفاع للصورة هو 170px و أقصى عرض للصورة هو 450px. أي صورة يتم رفعها وتكون أكبر فسوف يتم التحكم بأبعاده لتناسب المثاسات المذكورة سابقاً.',
    'SLOW_QUERY_TIME_MSEC' => 'حد وقت الاستعلام البطيء (مللي ثانية)',
    'STACK_TRACE_ERRORS' => 'عرض تتبع جذور (stack trace) الأخطاء',
    'UPLOAD_MAX_SIZE' => 'حجم رفع الملفات الأقصى',
    'VERIFY_CLIENT_IP' => 'التحقق من صحة عنوان الانترنت (IP) للمستخدم',
    'LOCK_HOMEPAGE' => 'منع تصميم الصفحة الرئيسية القابلة للتخصيص من قبل المستخدم',
    'LOCK_SUBPANELS' => 'منع تصميم اللوحات الفرعية القابل للتخصيص من قبل المستخدم',
    'MAX_DASHLETS' => 'الحد الأقصى لعدد التطبيقات الفرعية SuiteCRM على الصفحة الرئيسية',
    'SYSTEM_NAME' => 'اسم النظام:',
    'SYSTEM_NAME_WIZARD' => 'الاسم:',
    'SYSTEM_NAME_HELP' => 'هذا هو الاسم الذي سيظهر في شريط العنوان الخاص بالمُتصفح.',
    'LBL_LDAP_TITLE' => 'دعم مصادقة LDAP',
    'LBL_LDAP_ENABLE' => 'تمكين LDAP',
    'LBL_LDAP_SERVER_HOSTNAME' => 'الخادم:',
    'LBL_LDAP_SERVER_PORT' => 'رقم المنفذ:',
    'LBL_LDAP_ADMIN_USER' => 'اسم المستخدم:',
    'LBL_LDAP_ADMIN_USER_DESC' => 'يستخدم للبحث عن مستخدم LDAP. قد يحتاج هذا إلى أن يكون مؤهلاً بشكل كامل.',
    'LBL_LDAP_ADMIN_PASSWORD' => 'كلمة المرور:',
    'LBL_LDAP_AUTHENTICATION' => 'المصادقة:',
    'LBL_LDAP_AUTHENTICATION_DESC' => 'ربط بخادم LDAP باستخدام بيانات اعتماد مستخدمين محددة. سيتم الربط بشكل مجهول إذا لم يتم توفيره.',
    'LBL_LDAP_AUTO_CREATE_USERS' => 'إنشاء تلقائي للمستخدمين:',
    'LBL_LDAP_USER_DN' => 'المعرف المميز الخاص بالمستخدم (User DN):',
    'LBL_LDAP_GROUP_DN' => 'المعرف المميز الخاص بالمستخدم (Group DN):',
    'LBL_LDAP_GROUP_DN_DESC' => 'مثال: <em>ou=groups,dc=example,dc=com</em>',
    'LBL_LDAP_USER_FILTER' => 'فلتر المستخدم:',
    'LBL_LDAP_GROUP_MEMBERSHIP' => 'عضوية المجموعة:',
    'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'المستخدمون يجب أن يكونوا أعضاء في مجموعة محددة',
    'LBL_LDAP_GROUP_USER_ATTR' => 'صفة أو خاصية المُستخدم:',
    'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'المعرف الذي يميز الشخص سوف يُستخدم للتحقق من عضويته في المجموعة مثال: <em>uid</em>',
    'LBL_LDAP_GROUP_ATTR_DESC' => 'سمة المجموعة التي سيتم استخدامها للتصفية وفقًا لمثال سمة المستخدم: <em> memberUid </em>',
    'LBL_LDAP_GROUP_ATTR' => 'صفات وسمات المجموعة:',
    'LBL_LDAP_USER_FILTER_DESC' => 'أي معطيات فرز إضافية يتم تطبيقها عند مصادقة المستخدمين مثل <em>is_suitecrm_user=1 أو (is_suitecrm_user=1)(is_sales=1)</em>',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'سمة الولوج:',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'سمة الربط:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'لأمثلة مصادقة مستخدم LDAP:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'لأمثلة البحث عن مستخدم LDAP:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'مثال: ldap.example.com أو ldaps://ldap.example.com لتشفير SSL',
    'LBL_LDAP_SERVER_PORT_DESC' => 'مثال: <em>389 أو 636 لـ SSL</em>',
    'LBL_LDAP_GROUP_NAME' => 'اسم المجموعة:',
    'LBL_LDAP_GROUP_NAME_DESC' => 'مثال <em>cn=suitecrm</em>',
    'LBL_LDAP_USER_DN_DESC' => 'مثال: <em>ou=people,dc=example,dc=com</em>',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'إذا المُستخدم الذي تم المُصادقة عليه غير موجود سيتم إنشاء واحد في النظام SuiteCRM.',
    'LBL_LDAP_ENC_KEY' => 'مفتاح التشفير:',
    'DEVELOPER_MODE' => 'وضع المطور',

    'SHOW_DOWNLOADS_TAB' => 'عرض علامة التبويب للتنزيلات',
    'SHOW_DOWNLOADS_TAB_HELP' => 'عند اختياره، ستظهر علامة التبويب للتنزيل في إعدادات المستخدم وتوفر للمستخدمين الوصول إلى ملحقات SuiteCRM والملفات الأخرى المتاحة',
    'LBL_LDAP_ENC_KEY_DESC' => 'لمصادقة SOAP عند استخدام LDAP.',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'يجب تمكين ملحق php_mcrypt في ملف php.ini.',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'يجب تمكين ملحق openssl في ملف php.ini.',
    'LBL_ALL' => 'الكل',
    'LBL_MARK_POINT' => 'نقطة علامة',
    'LBL_NEXT_' => 'التالي>>',
    'LBL_REFRESH_FROM_MARK' => 'تحديث من العلامة',
    'LBL_SEARCH' => 'البحث:',
    'LBL_REG_EXP' => 'شفرة Reg Exp:',
    'LBL_IGNORE_SELF' => 'تجاهل الذات:',
    'LBL_MARKING_WHERE_START_LOGGING' => 'تحديد من أين يبدأ تسجيل الأحداث',
    'LBL_DISPLAYING_LOG' => 'يتم عرض سجل الأحداث',
    'LBL_YOUR_PROCESS_ID' => 'معرف العملية الخاص بك',
    'LBL_YOUR_IP_ADDRESS' => 'عنوان الإنترنت (IP) الخاص بك هو',
    'LBL_IT_WILL_BE_IGNORED' => ' سيتم تجاهلها ',
    'LBL_LOG_NOT_CHANGED' => 'لم يتغير السجل الأحداث',
    'LBL_ALERT_JPG_IMAGE' => 'تنسيق الملف للصورة يجب أن يكون JPEG. قم برفع ملف جديد بامتداد jpg.',
    'LBL_ALERT_TYPE_IMAGE' => 'يجب أن يكون تنسيق الملف للصورة JPEG أو PNG. قم برفع ملف جديد بامتداد jpg أو png.',
    'LBL_ALERT_SIZE_RATIO' => 'نسبة العرض إلى الطول للصورة يجب أن تكون بين 1:1 و 10:1. سيتم تغيير حجم الصورة.',
    'ERR_ALERT_FILE_UPLOAD' => 'حدث خطأ أثناء رفع الصورة.',
    'LBL_LOGGER' => 'إعدادات نظام تسجيل الأحداث',
    'LBL_LOGGER_FILENAME' => 'اسم ملف سجل الأحداث',
    'LBL_LOGGER_FILE_EXTENSION' => 'الامتداد في اسم الملف',
    'LBL_LOGGER_MAX_LOG_SIZE' => 'الحد الأقصى لحجم سجل الأحداث',
    'LBL_STACK_TRACE' => 'تمكين تعقب جذور المشاكل (stack trace)',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'تنسيق التاريخ الافتراضي',
    'LBL_LOGGER_LOG_LEVEL' => 'مستوى تسجيل الأحداث',
    'LBL_LEAD_CONV_OPTION' => 'خيارات تحويل العملاء المحتملين',
    'LEAD_CONV_OPT_HELP' => "<b>نسخ</b> - ينشئ ويربط نسخ من جميع أنشطة العميل المحتمل بسجلات جديدة يتم اختيارها من قبل المستخدم أثناء التحويل. يتم إنشاء نسخ لكل سجل من السجلات المحددة.<br><br><b>نقل</b> - نقل جميع أنشطة العميل المحتمل إلى سجل جديد يتم اختياره من قبل المستخدم أثناء التحويل.<br><br><b>لا تفعل أي شيء</b> - لا تفعل شيئا بأنشطة العميل المحتمل أثناء التحويل. وتبقى الأنشطة متعلقة بالعميل المحتمل فقط.",
    'LBL_CONFIG_AJAX' => 'تهيئة أجاكس AJAX الخاص بواجهة المُستخدم',
    'LBL_CONFIG_AJAX_DESC' => 'تمكين أو تعطيل استخدام واجهة المستخدم بتقنية آجاكس (AJAX UI) لوحدات محددة.',
    'LBL_LOGGER_MAX_LOGS' => 'الحد الأقصى لعدد السجلات الأحداث (قبل التدوير)',
    'LBL_LOGGER_FILENAME_SUFFIX' => 'إلحاق بعد اسم الملف',
    'LBL_VCAL_PERIOD' => 'فترة تحديثات ملفات التقويم vCal:',
    'LBL_IMPORT_MAX_RECORDS' => 'الاستيراد - الحد الأقصى لعدد الصفوف:',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'حدد عدد الصفوف المسموح بها داخل ملفات الاستيراد.<br>إذا تجاوز عدد الصفوف في ملف الاستيراد هذا الرقم، سيتم تنبيه المستخدم.<br>إذا لم يتم إدخال أي عدد، يسمح بعدد غير محدود من الصفوف.',
    'vCAL_HELP' => 'استخدم هذا الإعداد لتحديد عدد الأشهر قبل التاريخ الحالي لنشر معلومات حول الفراغ/الانشغال للمكالمات والاجتماعات.<BR>لإيقاف نشر معلومات الفراغ/الانشغال، أدخل "0". الحد الأدنى هو شهر واحد؛ الحد الأقصى هو ١٢ شهراً.',

// Wizard
    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => 'سيناريوهاتك',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'لم يتم تهيئة سيناريوهات',
    'LBL_WIZARD_SCENARIOS_DESC' => 'أختر أي السيناريوهات تناسب تثبيتك للتطبيق. هذه الخيارات يمكن تغييرها بعد التثبيت.',

    'LBL_WIZARD_TITLE' => 'مرشد آلي Wizard لمدير النظام',
    'LBL_WIZARD_WELCOME_TAB' => 'مرحبا',
    'LBL_WIZARD_WELCOME_TITLE' => 'مرحبا بكم في SuiteCRM!',
    'LBL_WIZARD_WELCOME' => 'انقر على <b>التالي</b> لوضع العلامة التجارية، وتعريب وتهيئة SuiteCRM الآن. إذا كنت ترغب في تهيئة SuiteCRM لاحقا، انقر على <b>تخطي</b>.',
    'LBL_WIZARD_NEXT_BUTTON' => 'التالي >',
    'LBL_WIZARD_BACK_BUTTON' => '< رجوع',
    'LBL_WIZARD_SKIP_BUTTON' => 'تجاوزه',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'متابعة',
    'LBL_WIZARD_FINISH_TITLE' => 'اكتملت تهيئة النظام الأساسي',
    'LBL_WIZARD_SYSTEM_TITLE' => 'العلامة التجارية',
    'LBL_WIZARD_SYSTEM_DESC' => 'زودني بإسم وشعار منشأتك من أجل إبرازها في النظام.',
    'LBL_WIZARD_LOCALE_DESC' => 'حدد كيف تريد عرض بياناتك في النظام، هل تُعرض حسب الموقع الجغرافي. الإعدادات التي قدمتها هن سوف تكون الإعدادات الإفتراضية. المُستخدمون سيكونون قادرين على تحديد تفضيلاتهم.',
    'LBL_WIZARD_SMTP_DESC' => 'زودني بحساب البريد الإلكتروني الذي سيستخدم في إرسال رسائل البريد، سترسل مثل رسائل إسناد المهام والتنبيهات وكلمات المرور للمستخدمين الجدد. المستخدمين سيتلقو راسئل من النظام كما سيرسلون من حساب بريدهم الإلكتروني.',
    'LBL_LOADING' => 'جاري التحميل...' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'حذف' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'مرحبا' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'الشعار' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'إظهار البريد الإلكتروني لجهات الاتصال ذات الصلة في لوحة السجل الفرعية للوحدات',
);
