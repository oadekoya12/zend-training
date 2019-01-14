<?php
$cars =[
  ["Volvo",22,18],
  ["BMW",15,13],
  ["Saab",5,2],
  ["Land Rover",17,15],
];
foreach ($cars as $sets) {
  echo $sets[1]. ' ' . $sets[0] .' Cars was sold and '. $sets[2] . ' was left in stock';
  echo "<br>";
}
