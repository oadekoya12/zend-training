<?php
function welcome(string $arg='JavaScript'){
    return "Welcome to the wonderful world of $arg coding";
}

echo welcome() . '<br>';
echo welcome('PHP');
echo welcome(['Python']);