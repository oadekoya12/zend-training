<?php
$cards = [1, 2, 3, 4];
$stack = ['red' => $cards, 'green' => $cards, 'blue' => $cards, 'yellow' => $cards];
function drawCard(array &$deck){
    $suitKey = array_rand($deck);
    $suit = $deck[$suitKey];
    $cardKey = array_rand($suit);
    $card = $suit[$cardKey];
    unset($deck[$suitKey][$cardKey]);
    return "$suitKey $card";
}

echo drawCard($stack);
var_dump($stack);