<?php
$firstname = 'Mark';
if(ctype_alpha($firstname)){
    echo 'Clean first name';
} else {
    echo 'invalid';
}