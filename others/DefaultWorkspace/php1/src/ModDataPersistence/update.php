<?php
function saveOrder($conn, array $data)
{
    // Build a query
    $query = vsprintf("UPDATE orders SET order_date='%d', order_status='%s' , amount='%d', description='%s' WHERE id='%d'", $data);

    // Execute the query returning boolean true on success
    return mysqli_query($conn, $query);
}

$config = require_once 'config.php';
$conn = mysqli_connect($config['db']['dsn'], $config['db']['username'], $config['db']['password'], $config['db']['database']);

$data = [time(), 'open', 500, 'big office chair', 8];
echo saveOrder($conn, $data) ? 'Data updated' : 'Data not updated';