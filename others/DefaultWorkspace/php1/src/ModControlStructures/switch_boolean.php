<?php
$colorChoice = 'white';
switch (true) {
    case ($colorChoice === 'red') :
        echo '<span style="color:red;">We are in red condition</span>';
        break;
    case ($colorChoice === 'green') :
        echo '<span style="color:green;">We are in red condition</span>';
        break;
    case ($colorChoice === 'blue') :
        echo '<span style="color:blue">We are in red condition</span>';
        break;
    default :
        echo 'Please choose <span style="color:red;">red</span>, <span style="color:green;">green</span>, or <span style="color:blue">blue</span>';
}