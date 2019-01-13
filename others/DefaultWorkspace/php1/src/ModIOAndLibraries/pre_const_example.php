<?php
$path = sprintf('%s%s%s%s%s',
    get_include_path(),
    PATH_SEPARATOR,
    '..',
    DIRECTORY_SEPARATOR,
    'data');

echo $path;