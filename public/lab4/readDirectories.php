<?php
/*
* Read the directories and files in the class project root and output the following:
* File Name
* File Size
Number of lines in the file
**/

function recuresivescan(string $p, &$dir = []){
  $scaneddir = scandir($p);
  $currentdir = dirname(__FILE__);
  if(!empty($scaneddir)){
    foreach ($scaneddir as $value) {
      if(is_dir($currentdir . DIRECTORY_SEPARATOR . $value)  && $value != ".." && $value != "."){
        // echo 'Here' . PHP_EOL;
        // but ut us not working properly
        // am missing sub directory name
        recuresivescan($currentdir . DIRECTORY_SEPARATOR . $value, $dir);
      }else {
        $dir[] = $currentdir . DIRECTORY_SEPARATOR . $value;
      }
    }
  }
  return $dir;
}
$workingdir = (__DIR__) . DIRECTORY_SEPARATOR;
$recuresiveresult = recuresivescan($workingdir);
print_r($recuresiveresult);
