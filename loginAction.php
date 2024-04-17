<?php
session_start();
require 'connection.php';

$username = $_POST['username'];
$password = $_POST['password'];

// Modify the SELECT statement to include the 'points' column
$query = "SELECT id, username, password, user_type, points FROM users WHERE username = ?";

$stmt = $pdo->prepare($query);
$stmt->execute([$username]);
$user = $stmt->fetch();

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['user_type'] = $user['user_type'];
    $_SESSION['points'] = $user['points'];  // Store points in session

    header("Location: dashboard.php");
    exit;
} else {
    echo "Invalid username or password.";
}
?>
