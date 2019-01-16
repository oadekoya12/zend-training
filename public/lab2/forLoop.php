<?php
/*
* @output = 5 to 99
**/
$max = 100;
for ($x = 5; $x < $max; $x++)
{
  // This if evaluation checks to see if number is odd or even
  $test = TRUE;

  // remove all the multiple of 2 and 3 numbers
  for($i = 3; $i < $x; $i++) {
    if(($x % $i) === 0) {
      $test = FALSE;
      break;
    }
  }
  if ($test) echo $x . ', ';
  // Final Output =
  // 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 
  // 79, 83, 89, 97,
}
