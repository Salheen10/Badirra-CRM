<?php
define('sugarEntry', true);
require_once('include/entryPoint.php');
require_once('include/Smarty/plugins/function.sugar_link.php');
require_once('include/MVC/View/SugarView.php');
$smarty = new Sugar_Smarty();
$params = array(
    'module' => 'Accounts',
    'link_only' => 1
);
echo smarty_function_sugar_link($params, $smarty);
