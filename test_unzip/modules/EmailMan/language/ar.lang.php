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
    'LBL_SEND_DATE_TIME' => 'تاريخ الإرسال',
    'LBL_IN_QUEUE' => 'جاري التنفيذ',
    'LBL_IN_QUEUE_DATE' => 'تاريخ الدخول في قائمة الانتظار',

    'ERR_INT_ONLY_EMAIL_PER_RUN' => 'استخدم القيم الصحيحة فقط لتحديد عدد رسائل البريد الإلكتروني المرسلة لكل دفعة',

    'LBL_ATTACHMENT_AUDIT' => ' تم ارساله. لم يتم تكراره محليًا للحفاظ على مساحة التخزين.',
    'LBL_CONFIGURE_SETTINGS' => 'تهيئة إعدادات البريد الإلكتروني',
    'LBL_CUSTOM_LOCATION' => 'معرف بواسطة المستخدم',
    'LBL_DEFAULT_LOCATION' => 'الإفتراضي',

    'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS' => 'حذف الملاحظات والمرفقات ذات الصلة مع رسائل البريد الإلكتروني المحذوفة',
    'LBL_EMAIL_WARNING_NOTIFICATIONS' => 'إشعارات تحذير البريد الإلكتروني',
    'LBL_EMAIL_ENABLE_CONFIRM_OPT_IN' => 'إعدادات الاشتراك',
    'LBL_EMAIL_ENABLE_SEND_OPT_IN' => 'إرسال رسالة تأكيد الرغبة في الاشتراك تلقائيًا',
    'LBL_EMAIL_CONFIRM_OPT_IN_TEMPLATE_ID' => 'تأكيد قالب رسالة تأكيد الرغبة في الاشتراك',
    'LBL_LEGACY_EMAIL_COMPOSE_BEHAVIOR' => 'تفعيل نظام الكتابة القديم في البريد الإلكتروني',
    'LBL_EMAIL_OUTBOUND_CONFIGURATION' => 'تهيئة البريد الصادر',
    'LBL_EMAILS_PER_RUN' => 'عدد رسائل البريد الإلكتروني المرسلة لكل دفعة:',
    'LBL_ID' => 'معرف',
    'LBL_LIST_CAMPAIGN' => 'حملة',
    'LBL_LIST_FORM_TITLE' => 'قائمة الانتظار',
    'LBL_LIST_FROM_NAME' => 'إسم المرسل',
    'LBL_LIST_IN_QUEUE' => 'جاري التنفيذ',
    'LBL_LIST_MESSAGE_NAME' => 'الرسالة التسويقية',
    'LBL_LIST_RECIPIENT_EMAIL' => 'البريد الإلكتروني للمستلم',
    'LBL_LIST_RECIPIENT_NAME' => 'اسم المستلم',
    'LBL_LIST_SEND_ATTEMPTS' => 'محاولات الإرسال',
    'LBL_LIST_SEND_DATE_TIME' => 'إرسال في',
    'LBL_LIST_USER_NAME' => 'اسم المستخدم',
    'LBL_LOCATION_ONLY' => 'الموقع',
    'LBL_LOCATION_TRACK' => 'موقع ملفات تعقب الحملة (مثل campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY' => 'الاحتفاظ بنسخ من رسائل الحملة:',
    'LBL_CAMP_MESSAGE_COPY_DESC' => 'هل ترغب في تخزين نسخ كاملة من <bold>كل</bold> رسالة بريد إلكتروني تم إرسالها خلال جميع الحملات؟  <bold>نحن نوصي افتراضيا بعمل لا</bold>. سيؤدي اختيار "لا" إلى تخزين القالب الذي تم إرساله والمتغيرات المطلوبة لإعادة إنشاء الرسالة الفردية فقط.',
    'LBL_MAIL_SENDTYPE' => 'وكيل نقل البريد:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'استخدام مصادقة SMTP:',
    'LBL_MAIL_SMTPPASS' => 'كلمة المرور:',
    'LBL_MAIL_SMTPPORT' => 'منفذ SMTP:',
    'LBL_MAIL_SMTPSERVER' => 'خادم البريد SMTP:',
    'LBL_MAIL_SMTPUSER' => 'اسم المستخدم:',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'اختر موفر البريد الإلكتروني الخاص بك',
    'LBL_YAHOOMAIL_SMTPPASS' => 'كلمة مرور بريد Yahoo!',
    'LBL_YAHOOMAIL_SMTPUSER' => 'معرف بريد Yahoo!',
    'LBL_GMAIL_SMTPPASS' => 'كلمة مرور Gmail',
    'LBL_GMAIL_SMTPUSER' => 'عنوان البريد Gmail',
    'LBL_EXCHANGE_SMTPPASS' => 'كلمة مرور Exchange',
    'LBL_EXCHANGE_SMTPUSER' => 'اسم مستخدم Exchange',
    'LBL_EXCHANGE_SMTPPORT' => 'منفذ خادم Exchange',
    'LBL_EXCHANGE_SMTPSERVER' => 'خادم Exchange',
    'LBL_EMAIL_LINK_TYPE' => 'تطبيق البريد الإلكتروني',
    'LBL_MARKETING_ID' => 'معرف التسويق',
    'LBL_MODULE_ID' => 'إدارة البريد الإلكتروني',
    'LBL_MODULE_NAME' => 'إعدادات البريد الإلكتروني',
    'LBL_MODULE_TITLE' => 'إدارة قائمة انتظار البريد الإلكتروني الصادر',
    'LBL_NOTIFICATION_ON_DESC' => 'عند التمكين، يتم إرسال رسائل البريد الإلكتروني إلى المستخدمين عند تعيين السجلات لهم.',
    'LBL_NOTIFY_FROMADDRESS' => '"من" العنوان:',
    'LBL_NOTIFY_FROMNAME' => 'اسم "المرسل":',
    'LBL_NOTIFY_ON' => 'إشعارات الإسناد',
    'LBL_NOTIFY_TITLE' => 'خيارات البريد الإلكتروني',
    'LBL_OUTBOUND_EMAIL_TITLE' => 'خيارات البريد الإلكتروني الصادر',
    'LBL_RELATED_ID' => 'معرف ذي الصلة',
    'LBL_RELATED_TYPE' => 'نوع ذي الصلة',
    'LBL_SEARCH_FORM_TITLE' => 'البحث في قائمة الانتظار',
    'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'قيمة إعداد site_url في ملف Config.php',
    'TXT_REMOVE_ME_ALT' => 'لإزالة نفسك من قائمة البريد الإلكتروني هذه انتقل إلى',
    'TXT_REMOVE_ME_CLICK' => 'انقر هنا',
    'TXT_REMOVE_ME' => 'لإزالة نفسك من قائمة البريد الإلكتروني هذه ',
    'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER' => 'إرسال إشعار من عنوان البريد الإلكتروني للمستخدم الذي المُسنِذ',

    'LBL_SECURITY_TITLE' => 'إعدادات أمان البريد الإلكتروني',
    'LBL_SECURITY_DESC' => 'تحقق مما يلي الذي لا ينبغي السماح به عبر البريد الإلكتروني أو عرضه في وحدة البريد الإلكتروني.',
    'LBL_SECURITY_APPLET' => 'علامة Applet',
    'LBL_SECURITY_BASE' => 'العلامة الأساسية',
    'LBL_SECURITY_EMBED' => 'تضمين العلامة',
    'LBL_SECURITY_FORM' => 'علامة النموذج',
    'LBL_SECURITY_FRAME' => 'علامة الإطار',
    'LBL_SECURITY_FRAMESET' => 'علامة مجموعة الإطارات',
    'LBL_SECURITY_IFRAME' => 'علامة إطار تضمين (iFrame)',
    'LBL_SECURITY_IMPORT' => 'علامة الاستيراد',
    'LBL_SECURITY_LAYER' => 'علامة الطبقة',
    'LBL_SECURITY_LINK' => 'علامة الرابط',
    'LBL_SECURITY_OBJECT' => 'علامة الكائن',
    'LBL_SECURITY_OUTLOOK_DEFAULTS' => 'حدد توقعات الحد الأدنى من إعدادات الأمان الافتراضية لآوتلوك (الأخطاء على جانب الشاشة الصحيحة).',
    'LBL_SECURITY_STYLE' => 'علامة النمط',
    'LBL_SECURITY_TOGGLE_ALL' => 'تبديل جميع الخيارات',
    'LBL_SECURITY_XMP' => 'علامة Xmp',
    'LBL_YES' => 'نعم',
    'LBL_NO' => 'لا',
    'LBL_PREPEND_TEST' => '[اختبار]: ',
    'LBL_SEND_ATTEMPTS' => 'محاولات الإرسال',
    'LBL_OUTGOING_SECTION_HELP' => 'تهيئة خادم البريد الصادر الافتراضي لإرسال إشعارات البريد الإلكتروني، بما في ذلك تنبيهات سير العمل.',
    'LBL_ALLOW_DEFAULT_SELECTION' => "يمكن للمستخدمين الإرسال بهوية هذا الحساب:",
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'عند تحديد هذا الخيار، سيتمكن جميع المستخدمين من إرسال رسائل البريد الإلكتروني باستخدام نفس حساب البريد الصادر المستخدم لإرسال إشعارات النظام والتنبيهات.<br>في حالة عدم تحديد هذا الخيار، يمكن للمستخدمين استخدام خادم البريد الصادر بعد تقديم معلومات حساباتهم الخاصة.',
    'LBL_FROM_ADDRESS_HELP' => 'عند تفعيل هذا الخيار، سيتم تضمين اسم المستخدم المُسنِد وعنوان البريد الإلكتروني في حقل المرسل للبريد الإلكتروني. قد لا تعمل هذه الميزة مع خوادم SMTP التي لا تسمح بالإرسال من حساب بريد إلكتروني مختلف عن حساب الخادم.',
    'LBL_HELP' => 'مساعدة' /*for 508 compliance fix*/,
    'LBL_OUTBOUND_EMAIL_ACCOUNT_VIEW' => 'عرض حسابات البريد الإلكتروني الصادر',
    'LBL_SYSTEM_OUTBOUND_EMAIL_ACCOUNT' => 'System Outbound Email Account',
    'LBL_ALLOW_SEND_AS_USER' => 'يمكن للمستخدمين أن يرسلوا بهوياتهم:',
    'LBL_ALLOW_SEND_AS_USER_DESC' => 'عند تفعيل هذا الخيار، يمكن <b>لجميع</b> المستخدمين إرسال البريد الإلكتروني باستخدام خادم البريد الصادر، باستخدام عناوين البريد الإلكتروني الأساسي الخاصة بهم كعنوان &quot;المرسل:&quot;.<br>قد لا تعمل هذه الميزة مع خوادم SMTP التي لا تسمح بالإرسال من حساب بريد إلكتروني مختلف عن حساب الخادم.',
    'LBL_EMAIL_IMPORT_CONFIGURATION' => 'Email Import Configuration',
    'LBL_EMAIL_IMPORT_PER_RUN_THRESHOLD' => 'Threshold for Number of Emails Imported Per Run (per Mailbox)',
    'LBL_EMAIL_IMPORT_PER_RUN_THRESHOLD_DESC' => 'Threshold of emails to import per run. Default is 25. Each run will go through each day in the mailbox within the set timeframe, from oldest to most recent. It will import all emails on each day until the total emails imported on this run exceeds the threshold. Once met, the job will stop and mark the last day imported, starting there on the next run.',
    'LBL_EMAIL_IMPORT_TIMEFRAME_START' => 'Starting Point for New Mailbox Imports',
    'LBL_EMAIL_IMPORT_TIMEFRAME_START_DESC' => 'Period of time from which emails will start being imported. For example, selecting 30 Days will start with emails from 30 days ago and move forward from there.',
    'LBL_EMAIL_IMPORT_FETCH_UNREAD_ONLY' => 'Only fetch unread emails when importing',
);
