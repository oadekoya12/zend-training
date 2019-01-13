<?php
// An astronaut array assignment
$astronaut = ['firstName' => 'Mark', 'lastName' => 'Watney',
    'specialty' => 'Botanist'];

print_r($astronaut);
echo '<br>';

// Add a new associative element
$astronaut['mission'] = 'STS395';

// Add a new numeric element
$astronaut[] = 'code red';
print_r($astronaut);