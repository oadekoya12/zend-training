<?php
/**
 * fun_empty_args.php
 */

function processUser(...$args){
    $output = null;
    if(count($args)){
        foreach($args as $arg){
            $output .= $arg . PHP_EOL;
        }
    }
    return $output;
}

echo processUser('Mark', 'Watney', 'Botanist');