<?php
$astronaut = ['Mark', 'Watney', 'Botanist'];
sort($astronaut);
print_r($astronaut);
echo '<br/>';

$astronaut = ['firstName' => 'Mark', 'lastName' => 'Watney', 'Specialty' => 'Botanist'];
ksort($astronaut);
print_r($astronaut);