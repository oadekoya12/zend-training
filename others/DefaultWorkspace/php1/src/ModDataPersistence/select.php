<?php
function getCustomers($conn)
{
    // Build the query
    $query = "SELECT id, CONCAT(firstname, ' ', lastname) AS customer_name FROM customers ORDER BY firstname";

    $results = [];
    // Set the query
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)) $results[] = $row;
    return $results;
}

$config = require_once 'config.php';
$conn = mysqli_connect($config['db']['dsn'], $config['db']['username'], $config['db']['password'], $config['db']['database']);
foreach(getCustomers($conn) as $customer){
    echo "{$customer['id']} {$customer['customer_name']}<br/>";
}