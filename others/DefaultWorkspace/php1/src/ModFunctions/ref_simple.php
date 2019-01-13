<?php
$foo = 10;

// The "&" symbol defines an alias in $bar
$bar = &$foo;
$bar = 20;
echo $foo;