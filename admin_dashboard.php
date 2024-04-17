<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Welcome, Admin <?php echo $_SESSION['username']; ?>!</h1>
    <div>
        <h2>Admin Tools</h2>
        <ul>
            <li><a href="manage_users.php">Manage Users</a></li>
            <li><a href="reporting.php">View Reports</a></li>
            <li><a href="system_settings.php">System Settings</a></li>
        </ul>
    </div>
    <div>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
