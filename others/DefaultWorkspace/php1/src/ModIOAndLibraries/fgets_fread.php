<?php
// open a binary file for reading
$filename = __DIR__ . '/mars.png';
if (!$fh = fopen( $filename, 'rb')) {
    exit( 'Unable to open file' );
}
// read 1st 8 bytes and display in hexadecimal
echo bin2hex(fgets($fh, 8));
echo '<br>' . PHP_EOL;
