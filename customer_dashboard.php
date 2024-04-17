<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Dashboard</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>
    <div>
        <h2>Your Points: <?php echo $_SESSION['points']; // Assuming points are stored in session ?></h2>
        <ul>
            <li><a href="play_game.php">Play Game</a></li>
            <li><a href="redeem_points.php">Redeem Points</a></li>
            <li><a href="account_settings.php">Account Settings</a></li>
        </ul>
    </div>
    <div>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
