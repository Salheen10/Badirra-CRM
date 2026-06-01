<?php
define('sugarEntry', true);
require_once('include/entryPoint.php');
global $app_list_strings;
$lang = 'ar_AE';
$app_list_strings = return_app_list_strings_language($lang);
print_r($app_list_strings['moduleList']);