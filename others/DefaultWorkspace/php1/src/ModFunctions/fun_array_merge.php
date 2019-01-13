<?php
// array_merge
$astronaut1 = ['Mark', 'Watney', 'Botanist'];
$astronaut2 = ['Melissa', 'Lewis', 'Commander'];
$astronaut3 = ['Beth', 'Johanssen', 'Computer Specialist'];
$mission = array_merge($astronaut1, $astronaut2, $astronaut3);
print_r($mission);