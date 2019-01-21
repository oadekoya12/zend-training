<?php
$file = (__DIR__) . DIRECTORY_SEPARATOR . 'sample.txt';
if (!$fh = file_exists($file)) exit('Does no exist');

$file_content = file_get_contents($file);
echo $file_content;
