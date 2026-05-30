<?php
// Fix all corrupted SE_* language files
$base = dirname(__FILE__) . '/modules';
$dirs = glob($base . '/SE_*', GLOB_ONLYDIR);
$fixed = 0;

foreach ($dirs as $modDir) {
    $modName = basename($modDir);
    $langDir = $modDir . '/language';
    if (!is_dir($langDir)) continue;
    
    foreach (glob($langDir . '/*.lang.php') as $langFile) {
        $content = file_get_contents($langFile);
        
        // Check if it has the broken pattern: $mod_strings['...'] = '...' inside array()
        if (strpos($content, "\$mod_strings['LBL_LIST_FORM_TITLE']") !== false) {
            // Remove the broken lines
            $lines = explode("\n", $content);
            $cleanLines = array();
            $extraLabels = array();
            
            foreach ($lines as $line) {
                // Match: $mod_strings['KEY'] = 'VALUE';
                if (preg_match("/^\\\$mod_strings\['([^']+)'\]\s*=\s*'([^']+)';/", trim($line), $m)) {
                    $extraLabels[$m[1]] = $m[2];
                } else {
                    $cleanLines[] = $line;
                }
            }
            
            // Now insert the extra labels as proper array entries before the closing );
            $output = implode("\n", $cleanLines);
            $insert = '';
            foreach ($extraLabels as $k => $v) {
                $insert .= "    '$k' => '$v',\n";
            }
            
            // Replace ); with the extra entries + );
            $output = preg_replace('/\);[\s]*$/', $insert . ");\n", $output);
            
            file_put_contents($langFile, $output);
            $fixed++;
            echo "Fixed: $langFile\n";
        }
    }
}

echo "\nDone! Fixed $fixed files.\n";
