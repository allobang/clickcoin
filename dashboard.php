<?php
session_start();
require 'connection.php';

// Check if the user is logged in and has a valid session
if (!isset($_SESSION['user_id']) || !isset($_SESSION['user_type'])) {
    echo "You are not logged in. Please <a href='login.php'>login</a> to continue.";
    exit;
}

// Load different dashboard contents based on the user type
switch ($_SESSION['user_type']) {
    case 'admin':
        include('admin_dashboard.php');
        break;
    case 'customer':
        include('customer_dashboard.php');
        break;
    default:
        echo "Access Denied. Invalid user type.";
        exit;
}
?>
