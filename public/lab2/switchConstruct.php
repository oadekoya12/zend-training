<?php
/*
* An application needs to determine the country of origin for an astronaut
* applicant. Write a switch construct that evaluates multiple
* country use cases against a true boolean, and sets a variable
* based on the condition evaluated.
**/

$astronaut1 = [
  'firstName' => 'Mark',
  'lastName' => 'Watney',
  'specialty' => 'Botanist'
  // normally the country would be part of astronaut data
];
$astronaut2 = [
  'firstName' => 'Melissa',
  'lastName' => 'Lewis',
  'specialty' => 'Commander'
];
$astronaut3 = [
  'firstName' => 'Beth',
  'lastName' => 'Johanssen',
  'specialty' => 'Computer Specialist'
];
$astronaut = [$astronaut1,$astronaut2,$astronaut3];
$output = '';
foreach ($astronaut as $value) {

  //why can't I use $value['firstName'].' '.$value['lastName']
  //as an argument in the switch statement
  $name = $value['firstName'] . ' ' . $value['lastName'];

  // echo "$name" . PHP_EOL;
  switch ($name) {
    case 'Mark Watney':
      $output .= $name . ' is from Britain'. PHP_EOL;
      break;

    case 'Melissa Lewis':
      $output .= $name . ' is from United State' . PHP_EOL;
      break;

    case 'Beth Johanssen':
      $output .= $name . ' is from Germany'. PHP_EOL;
      break;
  }
}
echo $output;

