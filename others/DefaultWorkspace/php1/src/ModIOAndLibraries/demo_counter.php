<?php
function getCount( $counter )
{
    if (!file_exists($counter)) touch($counter);
    $fh = fopen( $counter, 'r' );
    //get the current count
    $num = (int) fread( $fh, 10 );
    fclose( $fh );
    return $num;
}
echo 'Hit count: ' . getCount('counter.txt') . PHP_EOL;