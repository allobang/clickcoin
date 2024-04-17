<?php
require 'connection.php';

// Get username and password from POST request
$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// Check if passwords match
if ($password !== $confirm_password) {
    die("Error: Passwords do not match. Please go back and try again.");
}

// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// SQL query to insert new user
$query = "INSERT INTO users (username, password) VALUES (?, ?)";

// Prepare and execute the query
$stmt = $pdo->prepare($query);

try {
    $stmt->execute([$username, $hashed_password]);
    echo "User registered successfully! Redirecting to login page...";
    // Redirect to login page after successful registration
    header("Refresh: 3; url=index.php");
} catch (PDOException $e) {
    if ($e->getCode() == 23000) {
        echo "Username already exists!";
    } else {
        echo "Error: " . $e->getMessage();
    }
}
?>
