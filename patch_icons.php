<?php
$file = 'custom/themes/SuiteP/dist/assets/main.js';
if (file_exists($file)) {
    $content = file_get_contents($file);
    $search = 'let a=r[t]||{},o=a.color||i[n%i.length],s=t.charAt(0).toUpperCase();';
    $replace = 'let mk=e[t]?e[t].match(/module=([^&]+)/):null;let m=mk?mk[1]:t;let a=r[m]||r[t]||{},o=a.color||i[n%i.length],s=t.charAt(0).toUpperCase();';
    if (strpos($content, $search) !== false) {
        $content = str_replace($search, $replace, $content);
        file_put_contents($file, $content);
        echo "PATCHED SUCCESSFULLY";
    } else {
        if (strpos($content, 'let mk=e[t]') !== false) {
            echo "ALREADY PATCHED";
        } else {
            echo "SEARCH STRING NOT FOUND";
        }
    }
} else {
    echo "FILE NOT FOUND";
}