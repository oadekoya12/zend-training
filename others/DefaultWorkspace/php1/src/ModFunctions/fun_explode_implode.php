<?php
$astronaut = 'Mark Watney Botanist';
$astronaut = explode(' ', $astronaut);
print_r($astronaut);
echo '<br/>';

$astronaut = implode(' ', $astronaut);
echo $astronaut;