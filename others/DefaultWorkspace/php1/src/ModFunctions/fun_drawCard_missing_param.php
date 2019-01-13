<?php
$deck = null;
function drawCard(array $deck){
    $suitKey = array_rand($deck);
    $suit = $deck[$suitKey];
    $cardKey = array_rand($suit);
    $card = $suit[$cardKey];
    unset($deck[$suitKey][$cardKey]);
    return "$suit $card";
}

$card = drawCard($deck);