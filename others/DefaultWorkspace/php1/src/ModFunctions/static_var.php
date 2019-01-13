<?php
function staticVar($arg = NULL) {
    static $foo;
    if ($arg === NULL) return $arg;
    $foo += $arg;
    return $foo;
}
echo staticVar(5) .'<br/>';
echo staticVar(10);