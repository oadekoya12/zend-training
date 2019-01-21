<?php
/*
Write an example of:
* 1. Opening a file with error handling
* 2. Write something to the file
* 3. Close the file
**/
$file = (__DIR__) . DIRECTORY_SEPARATOR . 'sample.txt';
// echo ($file);
// echo ('Here') . PHP_EOL;
// echo getcwd() . PHP_EOL;
// echo '__FILE__: ' . (__FILE__) . PHP_EOL;
// echo  '__DIR__: ' . (__DIR__) . DIRECTORY_SEPARATOR . 'sample.txt' . PHP_EOL;
if (!$fh = fopen($file, 'a+')) exit('Unable to open file');
$txt = PHP_EOL . 'Where does it come from?
Contrary to popular belief, Lorem Ipsum is not simply random text. It has
roots in a piece of classical Latin literature from 45 BC, making it over
2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney
College in Virginia, looked up one of the more obscure Latin words,
consectetur, from a Lorem Ipsum passage, and going through the cites of
the word in classical literature, discovered the undoubtable source.
Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum
et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC.
This book is a treatise on the theory of ethics, very popular during the
Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..",
comes from a line in section 1.10.32.' . PHP_EOL;
fwrite($fh, $txt);
fclose($fh);
