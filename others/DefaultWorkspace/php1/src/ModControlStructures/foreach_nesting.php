<?php
// Build the crew
$astronaut1 = ['firstName' => 'Mark', 'lastName' => 'Watney', 'specialty' => 'Botanist'];
$astronaut2 = ['firstName' => 'Melissa', 'lastName' => 'Lewis', 'specialty' => 'Commander'];
$astronaut3 = ['firstName' => 'Beth', 'lastName' => 'Johanssen', 'specialty' => 'Computer Specialist'];
$missions = ['STS395' => [$astronaut1, $astronaut2, $astronaut3]];

foreach($missions as $mission => $astronauts){
    if($mission === 'STS395'){
        foreach($astronauts as $astronaut){
            echo "{$astronaut['specialty']} {$astronaut['lastName']} is on board" . '<br>';
        }
    }
}