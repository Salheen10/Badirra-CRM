<?php
define('sugarEntry', true);
require_once('include/entryPoint.php');
require_once('modules/Currencies/Currency.php');

$currencies_to_add = array(
    array('name' => 'الجنيه المصري', 'iso4217' => 'EGP', 'symbol' => 'EGP', 'conversion_rate' => 1.0, 'status' => 'Active'),
    array('name' => 'الريال السعودي', 'iso4217' => 'SAR', 'symbol' => 'SAR', 'conversion_rate' => 1.0, 'status' => 'Active'),
    array('name' => 'الدرهم الإماراتي', 'iso4217' => 'AED', 'symbol' => 'AED', 'conversion_rate' => 1.0, 'status' => 'Active'),
);
foreach ($currencies_to_add as $curr_data) {
    $curr_obj = new Currency();
    $id = $curr_obj->retrieve_id_by_name($curr_data['name']);
    echo "ID for " . $curr_data['name'] . " is: " . var_export($id, true) . "\n";
}
