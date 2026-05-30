<?php
if (!defined('sugarEntry')) {
    define('sugarEntry', true);
}
require_once('include/entryPoint.php');
require_once('modules/Administration/QuickRepairAndRebuild.php');
$repair = new RepairAndClear();
$repair->repairAndClearAll(array('clearAll'), array(translate('LBL_ALL_MODULES')), false, false);
echo "Repair Complete\n";
