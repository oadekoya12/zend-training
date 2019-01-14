<?php
$valueA = 10;
$valueB = 20;

//output "Oranges"
if ( ( $valueA >= 50 ) xor ( $valueB === '20') ) {
  echo "Apples";
} else {
  echo "Oranges";
}
echo "<br>";
//output "Black"
if ( ( $valueA >= '5' ) xor ( $valueB === 20 ) ) {
  echo "White";
} else {
  echo "Black";
}
