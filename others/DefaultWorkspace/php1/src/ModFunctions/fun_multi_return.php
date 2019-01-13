<?php
function formatCurrency(float $value, string $arg='$') {
    switch (strtolower($arg)) {
        case 'euro' :
        case '€' :
            return number_format($value, 2, ',', ' ') . '€';
        case 'pound' :
        case '£' :
            return '£' . number_format($value, 2, '.', ',');
        case 'dollar' :
        case '$' :
            return '$' . number_format($value, 2, '.', ',');
    }
    return NULL;
}
echo formatCurrency(9999, 'euro') ?? 'Unknown'; // 9 999,00€
echo formatCurrency(9999, '$') ?? 'Unknown';    // $9,999.00
