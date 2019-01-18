<?php
/*
* 1. Define a function named getOrderTotal(...), which takes
*    two arguments and returns the sum.
* 2. Call the function and output the result.
**/
function sum(...$args){
  return array_sum($args);
}

echo sum(13, 25);
