<?php
session_start(); // Start the session
$email = $_SESSION['email']; // Retrieve email from session if available
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome <?php echo $_SESSION['email']; ?></h1>

    <a href="logout.php">Logout</a>
</body>
</html>