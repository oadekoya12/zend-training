<?php
/**
 * Domain Functions (Functions that are Domain-specific, or business logic functions)
 */

/**
 * @param $config
 * @param $selectedStatus
 * @return string
 */
function getStatusSelect($config, $selectedStatus)
{
    // Alphabetize
    sort($config['status_codes']);
    return getSelectHTML($config['status_codes'], $selectedStatus, true, 'status_filter');
}

/**
 * @param $conn
 * @return string
 */
function getCustomersSelect($conn)
{
    $list = [];
    foreach(getCustomers($conn) as $key => $customer){
        $list[$customer[0]] = next($customer);
    }
    return getSelectHTML($list, null, false, 'customer');
}

/**
 * @param $amount
 * @param string $currency
 * @return string
 */
function formatCurrency($amount, $currency = '$')
{
    return $currency . number_format($amount, 0, '.', ',');
}