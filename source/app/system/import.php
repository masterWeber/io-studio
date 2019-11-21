<?php
function import($path = '')
{
    if ($path === '') {
        echo 'path is\'t defined';
    }

    if (!preg_match('/(\.php$)|(\*$)/i', $path)) {
        $path .= '.php';
    }

    foreach (glob($path) as $file) {
        if (is_dir($file)) {
            import($file . '/*');
            continue;
        }
        require_once($file);
    }
}
