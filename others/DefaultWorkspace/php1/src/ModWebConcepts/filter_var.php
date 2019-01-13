<?php
function checkYear($year)
{
    return (filter_var($year, FILTER_VALIDATE_INT))
        ? (bool) $year
        : FALSE;
}

echo checkYear(2016) ? 'VALID' : 'INVALID', '<br/>';
echo checkYear('ABCD') ? 'VALID' : 'INVALID';