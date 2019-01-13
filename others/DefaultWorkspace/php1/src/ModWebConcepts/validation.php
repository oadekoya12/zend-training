<?php
$year = 2016;
$max = 2020;
$min = 2010;

if($min < $year && $year < $max) {
    echo $year;
} else {
    echo 'invalid';
}