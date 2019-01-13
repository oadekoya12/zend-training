<?php
$year = 2017;
$allowed = range(date('Y') - 2, date('Y') + 4);

if(in_array($year, $allowed)){
    echo $year;
} else {
    echo 'invalid';
}