<?php
$colorChoice = 'jade';
switch (true) {
    case ($colorChoice === 'red') :
        echo 'Alert level: <span style="color:green;font-size: 200%">RED</span>';
        break;
    case ($colorChoice === 'olive') :
    case ($colorChoice === 'jade') :
    case ($colorChoice === 'green') :
        echo 'Alert level: <span style="color:green;font-size: 200%">GREEN</span>';
        break;
    case ($colorChoice === 'blue') :
        echo 'Alert level: <span style="color:green;font-size: 200%">BLUE</span>';
        break;
    default :
        echo 'Please choose red, some shade of green, or blue';
}