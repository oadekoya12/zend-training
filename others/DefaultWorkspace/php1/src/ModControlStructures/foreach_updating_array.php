<?php
$items = [10.41, 15.96 , 30.99, 46.99];

// Add an 8% markup
foreach ($items as $key => $value ) {
    //store the new value back into the array
    $items[$key] = $value * 1.08;
    echo $items[$key] . '<br/>';
}