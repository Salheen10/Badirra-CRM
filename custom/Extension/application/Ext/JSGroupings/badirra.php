<?php

foreach ($js_groupings as $key => $grouping) {
    foreach  ($grouping as $file => $target) {
        if ($target == 'include/javascript/sugar_grp1.js') {
            $js_groupings[$key]['custom/themes/SuiteP/js/badirra_enhancements.js'] = 'include/javascript/sugar_grp1.js';
        }
    }
}
