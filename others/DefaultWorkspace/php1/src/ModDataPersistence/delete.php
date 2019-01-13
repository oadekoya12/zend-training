<?php
function delete($conn, string $table, int $data)
{
    // Build a query
    $query = "DELETE FROM $table WHERE id='$data'";

    // Execute the query returning boolean true on success
    return mysqli_query($conn, $query);
}

$config = require_once 'config.php';
$conn = mysqli_connect($config['db']['dsn'], $config['db']['username'], $config['db']['password'], $config['db']['database']);

echo delete($conn, 'orders', 8) ? 'Data deleted' : 'Data not deleted';