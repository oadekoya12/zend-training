<?php
// load the source
define('VIEWPATH', __DIR__ . '/../view/');
define('INVALID', 'Invalid data entry');
foreach (glob(__DIR__ . '/../src/*.php') as $file) {
    require $file;
}

// Initialize variables
$sortBy = 'id';
$orderId = $status = $orderData = null;
$selected = [];

// Load the config
$config = require __DIR__ . '/../config/config.php';

// Set the default timezone for all date functions
date_default_timezone_set($config['default_timezone']);

// Check the sort by value that it exists and is in the config array
if ($_POST && isset($_POST['sort_by']) && array_key_exists($_POST['sort_by'], $config['sort_by'])) {
    $selected['sortBy'] = $config['sort_by'][$_POST['sort_by']];
}

// Check the filter value that it exists and is numeric
if (isset($_POST['filter']) && is_numeric($_POST['filter'])) {
    $selected['id'] = $_POST['filter'];
}

// Check the status filter that it exists and is in array of allowed values
if (isset($_POST['status_codes']) && array_key_exists($_POST['status_codes'], $config['status_codes'])) {
    $selected['status'] = $config['status_codes'][strtolower($_POST['status_codes'])];
}

// Query the database for the order records
if ($conn = getDbConnection($config['db'])) {
    $orderData = getOrders($config, $conn, $selected);
} else {
    echo 'Service unavailable';
}

$orders = $orderData['orders'];
$total = formatCurrency($orderData['total']);
$orderCount = count($orders);

if (isset($_GET['order']) && $_GET['order'] === 'new') {
    // Assign content with the new order form HTML
    $today = date('m/d/Y', time());
    $form = getForm($config, 'new_order', $conn);
    $content = $config['templates']['content_new_order'];
} elseif (isset($_POST['amount'])
    && isset($_POST['customer'])
    && isset($_POST['description'])
) { // A new order has been submitted

    // Initialize
    $data = [];

    // Filter the amount
    if ($_POST['amount']) $data['amount'] = (float)$_POST['amount'] ?? exit(INVALID);

    // Filter the customer foreign key
    if ($_POST['customer']) $data['customer'] = (int)($_POST['customer']) ?? exit(INVALID);

    // Filter description
    if ($_POST['description']) $data['description'] = htmlspecialchars($_POST['description']) ?? exit(INVALID);

    // Assume a now timestamp
    $data['date'] = time();

    // Assume a default status code
    $data['status'] = $config['status_codes']['default'];

    // Save the data and load the thank you
    if (saveOrder($conn, $data, 'orders')) {
        $success = true;
        $content = $config['templates']['form_result_content'];
    }
} else {
    // Load the default content
    $form = getForm($config, 'filter', $conn, $selected);
    $content = $config['templates']['content'];
}

// Load the main template
require __DIR__ . '/../view/' . $config['templates']['main'] . '.phtml';

