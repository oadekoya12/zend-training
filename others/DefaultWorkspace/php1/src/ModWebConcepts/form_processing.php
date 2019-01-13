<?php
// Simulated form data
$_POST['item'] = 'Landing gear check';
$_POST['priority'] = 1;

// Check for posted data and filter
if($_POST
    && $item = filter_var($_POST['item'], FILTER_SANITIZE_STRING)
    && $priority = filter_var($_POST['priority'], FILTER_VALIDATE_INT)){
    echo 'Data is validated, handle it ...';
} else {
    echo 'Invalid input';
    exit;
}