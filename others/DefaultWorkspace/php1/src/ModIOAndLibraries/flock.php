<?php
$file = 'target.txt';
$fh = fopen($file, 'w+');
flock($fh, LOCK_SH);
echo "$file is share locked!";