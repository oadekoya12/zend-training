<?php
$astronaut1 = ['firstName' => null, 'lastName' => 'Watney',
    'specialty' => 'Botanist'];

// This condition fails early on required keys not being set
if(!isset($astronaut['firstName'])
    && !isset($astronaut['lastName'])
    && !isset($astronaut['specialty'])) {
    echo 'Information incomplete';
}
//...