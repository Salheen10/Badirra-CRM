<?php
/******************************************
 * SuiteCRM Translations
 * @URL: https://crowdin.com/project/suitecrmtrans
 * @author SuiteCRM Community via Crowdin
 ******************************************/

$manifest = array(
    'name' => 'Arabic',
    'description' => 'Translation: crowdin.com/project/suitecrmtranslations',
    'type' => 'langpack',
    'is_uninstallable' => 'نعم',
    'author' => 'SuiteCRM Community',
    'version' => '7.15-26.04',
    'published_date' => '2026-04-30',
);
$installdefs = array(
    'id' => 'ar',
    'image_dir' => '<basepath>/images',
    'copy' => array(
        array('from' => '<basepath>/include', 'to' => 'include'),
        array('from' => '<basepath>/modules', 'to' => 'modules'),
        array('from' => '<basepath>/install', 'to' => 'install'),
    )
);
