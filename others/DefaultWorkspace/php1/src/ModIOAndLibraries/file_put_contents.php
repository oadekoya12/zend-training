<?php
$file = 'target.txt';
$bytes = file_put_contents( $file, 'contents to write', FILE_APPEND);
echo "$bytes bytes written to the file: $file" . PHP_EOL;