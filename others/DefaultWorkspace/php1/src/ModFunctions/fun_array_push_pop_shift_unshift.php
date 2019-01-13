<?php
$astronaut = ['astronaut', 'Mark', 'Watney', 'Botanist'];
array_push($astronaut, 'STS349');
print_r($astronaut);
echo '<br/>';
echo array_pop($astronaut) . '<br/>';
echo array_shift($astronaut);

array_unshift($astronaut, 'astronaut');
echo '<br/>';
print_r($astronaut);