<?php
/*
*  A new feature request has risen to top priority that requires showing a list of past purchases.
*    1. Create an associative array with past purchase dates and amounts.
*    2. Iterate the list using a do...while loop displaying the past purchases
**/
$cars = [
  ['Make' => 'Nissan', 'Module' => 'Juke', 'Price' => '15000', 'Date' => '04/11/2011'],
  ['Make' => 'Toyota', 'Module' => 'Corolla', 'Price' => '16000', 'Date' => '01/23/2005'],
  ['Make' => 'Toyota', 'Module' => 'Camry', 'Price' => '18000', 'Date' => '11/02/2015'],
  ['Make' => 'Honda', 'Module' => 'Accord', 'Price' => '17000', 'Date' => '10/05/2004'],
];

$slide = [];
do {
  $slide = array_pop ($cars);
  echo $slide['Make'] .' '. $slide['Module'] .' was sold at '. $slide['Price'] . ' on '. $slide['Date'] . PHP_EOL;
  echo '<br>';
} while (count($cars));
