<?php
function saveOrder($conn, array $data)
{
    // Build a query
    $query = vsprintf("INSERT INTO orders (order_date, order_status, amount, description, customer_id) VALUES ('%d', '%s', '%d', '%s', '%s')", $data);

    // Execute the query returning boolean true on success
    return mysqli_query($conn, $query);
}

$config = require_once 'config.php';
$conn = mysqli_connect($config['db']['dsn'], $config['db']['username'], $config['db']['password'], $config['db']['database']);

$data = [time(), 'open', 400, 'office chair', 3];
echo saveOrder($conn, $data) ? 'Data saved' : 'Data not saved';