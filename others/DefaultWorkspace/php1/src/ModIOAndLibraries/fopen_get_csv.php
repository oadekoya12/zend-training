<?php
// Open and test for success
if (!$fh = fopen( 'bitcoin.csv', 'r' )) exit('Unable to open file');

$data = [];
while (!feof($fh)) {
    $data[] = fgetcsv($fh);
}

// Iterate the retrieved contents and output
for($i = 0; $i < count($data); $i++){
    print_r($data[$i]);
    echo '<br/>';
}

// Close the resource when finished
fclose($fh);