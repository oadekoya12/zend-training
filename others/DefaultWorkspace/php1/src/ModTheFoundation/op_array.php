<?php
$astronaut = ['Mark', 'Watney', 'Botanist'];
print_r($astronaut);
echo '<br>';

$astronaut = ['firstName' => 'Mark', 'LastName' => 'Watney', 'Specialty' => 'botanist'];
print_r($astronaut);
echo '<br>';
echo $astronaut['Specialty'] . '<br>';

$astronaut = array('Mark', 'Watney', 'Botanist');
print_r($astronaut);
echo '<br>', $astronaut[2];