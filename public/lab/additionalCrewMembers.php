<?php
// Build the crew
$astronaut1 = ['firstName' => 'Mark', 'lastName' => 'Watney', 'specialty' => 'Botanist'];
$astronaut2 = ['firstName' => 'Melissa', 'lastName' => 'Lewis', 'specialty' => 'Commander'];
$astronaut3 = ['firstName' => 'Beth', 'lastName' => 'Johanssen', 'specialty' => 'Computer Specialist'];


$STS395 = [$astronaut1, $astronaut2, $astronaut3];
foreach ($STS395 as $value) {
  echo 'Astronaut ' . $value['firstName'] . ' ' . $value['lastName'] . ' specialty in ' .$value['specialty'];
echo "<br>";
}
