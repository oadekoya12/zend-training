<?php
/*
*  An application has an invoicing system and must calculate a total for items in a list.
*    1. Construct an associative array of invoice items.
*    2. Instead of a foreach loop, which is used with arrays,
*       construct a while loop and use it to iterate the associative array of list items, and
*       add a tax value to each.
*    3. Output each updated values.
**/
$slide = [];
$cars = [
    ['Make'=>'Toyota', 'Model'=>'Corolla', 'Color'=>'White', 'Mileage'=>24000, 'Status'=>'Sold'],
    ['Make'=>'Toyota', 'Model'=>'Camry', 'Color'=>'Black', 'Mileage'=>56000, 'Status'=>'Available'],
    ['Make'=>'Honda', 'Model'=>'Accord', 'Color'=>'White', 'Mileage'=>15000, 'Status'=>'Sold'],
    ['Make'=>'Nissan', 'Model'=>'Juke', 'Color'=>'Red', 'Mileage'=>4500, 'Status'=>'Sold']
];

while (count($cars)) {
  $slide = array_pop ($cars);
  echo $slide['Color'] .' '. $slide['Make'] .' '. $slide['Model'] .' with '. $slide['Mileage'] . ' Mileage is '. $slide['Status'] . PHP_EOL;
  echo '<br>';
}
