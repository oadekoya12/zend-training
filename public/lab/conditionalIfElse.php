<?php
$valueA = "50";
$valueB = 50;

//output is Equal
if ( $valueA == $valueB ) {
  echo "Equal";
} else {
  echo "Not equal";
}
echo "<br>";
//output is "Not identical"
if ( $valueA === $valueB ) {
  echo "Identical";
} else {
  echo "Not identical";
}
