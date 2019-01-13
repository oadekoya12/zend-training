<?php
// Construction syntax for value only:
$astronaut = ['firstName' => 'Mark', 'lastName' => 'Watney',
    'specialty' => 'Botanist'];
foreach ($astronaut as $value ) {
    echo $value . '<br/>';
}

// Construction syntax using key and value
foreach ( $astronaut as $key => $value ) {
    echo "The $key is $value" . '<br/>';
}