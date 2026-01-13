<?php
include "db.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Welcome to Dashboard</h2>

<p>You are logged in successfully.</p>

<a href="pets.php">View Available Pets</a><br><br>
<a href="logout.php">Logout</a>

</body>
</html>
