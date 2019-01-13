<?php
$file = 'bitcoin.csv';
$results = file($file);
$i = 0;

foreach($results = file($file) as $line){
    if($i === 0){
        echo "Columns = $line <br/>";
    } else {
        echo "Line $i = $line <br/>";
    }
    $i++;
}