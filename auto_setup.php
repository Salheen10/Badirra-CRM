<?php
if(!defined('sugarEntry')) define('sugarEntry', true);
require_once('include/entryPoint.php');
require_once('ModuleInstall/ModuleInstaller.php');

echo "<h1>Starting Automated Setup...</h1><br>";

// Install Arabic Language
if(file_exists('auto_install/ar_SuiteCRM_lang_7.15.zip')) {
    echo "Installing Arabic Language...<br>";
    try {
        $mi = new ModuleInstaller();
        $mi->silent = true;
        $mi->install('auto_install/ar_SuiteCRM_lang_7.15.zip');
        echo "<b>Arabic Language Installed Successfully.</b><br><br>";
    } catch (Exception $e) {
        echo "Error installing Arabic: " . $e->getMessage() . "<br>";
    }
}

// Install Enterprise Mode
if(file_exists('auto_install/SuiteEstate_Growth_CRM_Free.zip')) {
    echo "Installing Enterprise Mode...<br>";
    try {
        $mi2 = new ModuleInstaller();
        $mi2->silent = true;
        $mi2->install('auto_install/SuiteEstate_Growth_CRM_Free.zip');
        echo "<b>Enterprise Mode Installed Successfully.</b><br><br>";
    } catch (Exception $e) {
        echo "Error installing Enterprise Mode: " . $e->getMessage() . "<br>";
    }
}

echo "<h2>Setup Complete! Please delete this file for security.</h2>";
?>
