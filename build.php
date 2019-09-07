<?php
## TODO: write build script

var_dump($themes = glob('./src/themes/*.scss'));

foreach ($themes as $theme) {
    system("npx node-sass --include-path scss $theme ./bizarre-foods-" . mb_substr(basename($theme), 0, strlen(basename($theme)) - 5) . "/style.css");
    //var_dump($output);
    //echo implode("\r\n", $output) . "\r\n";
}