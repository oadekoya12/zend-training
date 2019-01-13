<?php
// Get the resource
if($resource = fopen('records.csv', 'a+')){
    echo 'Got it, it\'s of type: ' . gettype($resource);
} else {
    echo 'Unable to connect to resource';
}