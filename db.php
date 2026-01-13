<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$dbname = "pet_adoption";

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Database connection failed");
}
?>
