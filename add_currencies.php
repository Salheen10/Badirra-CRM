<?php
if (!defined('sugarEntry')) define('sugarEntry', true);
require_once('include/entryPoint.php');
require_once('modules/Currencies/Currency.php');
global $current_user;
$current_user = BeanFactory::getBean('Users', '1');

$currencies_to_add = array(
    array('name' => 'الجنيه المصري', 'iso4217' => 'EGP', 'symbol' => 'EGP', 'conversion_rate' => 1.0, 'status' => 'Active'),
    array('name' => 'الريال السعودي', 'iso4217' => 'SAR', 'symbol' => 'SAR', 'conversion_rate' => 1.0, 'status' => 'Active'),
    array('name' => 'الدرهم الإماراتي', 'iso4217' => 'AED', 'symbol' => 'AED', 'conversion_rate' => 1.0, 'status' => 'Active'),
);
foreach ($currencies_to_add as $curr_data) {
    $curr_obj = new Currency();
    $id = $curr_obj->retrieve_id_by_name($curr_data['name']);
    if (empty($id)) {
        $curr_obj->name = $curr_data['name'];
        $curr_obj->iso4217 = $curr_data['iso4217'];
        $curr_obj->symbol = $curr_data['symbol'];
        $curr_obj->conversion_rate = $curr_data['conversion_rate'];
        $curr_obj->status = $curr_data['status'];
        $curr_obj->save();
        echo 'Added ' . $curr_data['name'] . '<br>';
    } else {
        echo $curr_data['name'] . ' already exists.<br>';
    }
}
echo 'Done.';