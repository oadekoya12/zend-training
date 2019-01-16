<?php
/*
*  1. Build a launch checklist with the six items
*  2. Iterate the launch checklist using a foreach loop, using keys and values.
*  3. Conditionally test for a particular list item and build an output string.
*  4. Echo the output.
**/

$lunch = ['Sandwich', 'Roll-up', 'Soup', 'Salad', 'Protein', 'Nuts'];
print_r($lunch);
foreach ($lunch as $key => $value) {
  echo (($value === 'Salad') ? 'Salad is a good choice for lunch' : null);
}
