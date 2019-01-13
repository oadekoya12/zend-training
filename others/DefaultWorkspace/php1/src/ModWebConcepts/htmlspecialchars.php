<?php
$year = 'year2016';
$allowed = range(2014, 2020);

if(in_array($year, $allowed)){
    echo (int) $year;
} else {
    echo htmlspecialchars($year) . ' is invalid';
}