<?php
$foo = 10;
$bar = 5;

//outpute is "Foo is greater than bar"
if ( $foo > $bar ){
  echo "Foo is greater than bar";
}elseif ($foo = $bar) {
  echo "The value for Foo has changed";
}
