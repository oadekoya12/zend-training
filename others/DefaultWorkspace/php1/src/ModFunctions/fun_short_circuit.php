<?php
function formatCurrency(float $value, string $arg='$') {
    if(empty($value))return 'Missing value';
    switch (strtolower($arg)) {
        case 'euro' :
        case '€' :
            $item = number_format($value, 2, ',', ' ') . '€';
            break;
        case 'pound' :
        case '£' :
            $item = '£' . number_format($value, 2, '.', ',');
            break;
        case 'dollar' :
        case '$' :
            $item = '$' . number_format($value, 2, '.', ',');
            break;
        default :
            $item = NULL;
    }
    return $item;
}
echo formatCurrency(0, 'euro') ?? 'Unknown'; // Missing value
