<?php
require_once 'forms.php';
$config = require 'config.php';

// Check for posted data and filter
if($_POST
    && $item = filter_var($_POST['item'], FILTER_SANITIZE_STRING)
    && $priority = filter_var($_POST['priority'], FILTER_VALIDATE_INT)){
    echo 'Data is validated ... and handled';
    exit;
}

// Get the form
echo getForm($config, 'add_item');