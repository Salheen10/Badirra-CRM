<?php
$dirs = array('Dawn', 'Day', 'Dusk', 'Night', 'Noon');
foreach ($dirs as $dir) {
    $file = "themes/SuiteP/css/$dir/style.css";
    if (file_exists($file)) {
        $content = file_get_contents($file);
        if (strpos($content, 'badirra_fixes.css') === false) {
            $content = preg_replace('/^(@charset "UTF-8";)/i', "$1\n@import url('../../../../../custom/themes/SuiteP/css/badirra_fixes.css?v=dark3');", $content);
            file_put_contents($file, $content);
            echo "Updated $file\n";
        } else {
            echo "Already updated $file\n";
        }
    }
}
echo "Done\n";
