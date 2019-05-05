<?php
/*
* 1. Write an array of text strings to a file.
* 2. Open the file using fopen().
* 3. read and output the third character from each line.
**/
$file = (__DIR__) . DIRECTORY_SEPARATOR . 'newwriteto.txt';
if (!$f = file_exists($file)) exit('Does no exist');

$arraytowrite = [
  '1. Write an array of text strings to a file.'. PHP_EOL,
  '2. Open the file using fopen().'. PHP_EOL,
  '3. read and output the third character from each line.'. PHP_EOL,
];

$fp = fopen($file, 'ar');
foreach ($arraytowrite as $value) {
  fwrite($fp, $value);
}
fclose($fp);
// echo(file_get_contents($file));
