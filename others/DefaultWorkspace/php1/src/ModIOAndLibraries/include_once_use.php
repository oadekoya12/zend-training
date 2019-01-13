<?php
include 'include_once.php';
$color = 'red';
echo $js;
?>
<p id="target">This is some colorful text</p>
<button id="button" onclick="setColor('<?php echo $color;?>')" type="submit">Set Color</button>