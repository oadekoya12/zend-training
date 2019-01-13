<?php
/**
 * Model Functions (Functions that interface the data store)
 */

/**
 * @param $config
 * @param $conn
 * @param null $selected
 * @return array
 */
function getOrders($config, $conn, $selected = null)
{
    // Initialize empty array
    $whereClaus = $sortBy = null;
    $where = [];

    // Where to id if passed
    if(isset($selected['id'])) $where['orders.id'] = $selected['id'];

    // Where to status if passed
    if(isset($selected['status'])) $where['status'] = $selected['status'];

    $sortBy = isset($selected['sortBy']) ? strtolower($selected['sortBy']) : $config['sort_by']['default'];

    if (count($where) && function_exists('getWhere')) {
        $whereClaus = getWhere($where);
    }

    // Build the query string
    $query = "SELECT orders.*, CONCAT(firstname, ' ', lastname) AS customer_name FROM orders LEFT JOIN customers ON customers.id = orders.customer" . $whereClaus . " ORDER BY $sortBy";

    // Set the query, retrieve and process the results
    if ($result = mysqli_query($conn, $query)) {

        // Initialize
        $orders = [];
        $totalValue = 0;

        // Fetch an associative array
        while ($row = $result->fetch_assoc()) {

            // Add to the row array a clean formatted date
            if ($row['date'] && is_numeric($row['date'])) {
                $row['date'] = date('M d, Y', $row['date']);
            }

            // Add to the row array a clean order status
            if ($row['status'] && ctype_alpha($row['status'])) {
                $row['status'] = ucfirst(strtolower($row['status']));
            }

            // add the whole row to the orders array
            $orders[] = $row;
            $totalValue += $row['amount'];
        }

        // Return the data as an array
        return [
            'orders' => $orders,
            'total' => $totalValue
        ];
    }
}

/**
 * @param $conn
 * @return array|bool
 */
function getCustomers($conn)
{
    // Build the query
    $query = "SELECT id, CONCAT(firstname, ' ', lastname) AS customer_name FROM customers ORDER BY firstname";

    // Set the query
    if ($result = mysqli_query($conn, $query)) return $result->fetch_all();
}

/**
 * @param $conn
 * @param array $data
 * @param string $table
 * @return bool|mysqli_result
 */
function saveOrder($conn, array $data, string $table)
{
    if (function_exists('getColumns')) {
        // Get the table columns
        $columns = getColumns($conn, $table);
        // Remove the id column if found as it auto increments
        if($columns[0] === 'id') array_shift($columns);
        // Check and account for the auto increment column
        if(count($columns) !== count($data)) return false;
        // Sort by values alphabetically
        sort($columns);
    } else {
        // construct the query with hard values, or
        return false;
    }

    // Get a column string
    $columnString = implode(',', $columns);

    // Order match data with columns
    foreach($columns as $item){
        $result[$item] = array_key_exists($item, $data) ? $data[$item] : null;
    }

    // Build a query
    $query = vsprintf("INSERT INTO $table ($columnString) VALUES (%d, '%s', %d, '%s', '%s')", $result);

    // Execute the query
    return mysqli_query($conn, $query);
}