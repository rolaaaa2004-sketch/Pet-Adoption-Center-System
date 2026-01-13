<?php
include "db.php";
$pet_id = $_GET['id'];
$user_id = $_SESSION['user_id'];

$conn->query("INSERT INTO adoption_requests (user_id, pet_id)
              VALUES ($user_id, $pet_id)");

$conn->query("UPDATE pets SET status='pending' WHERE id=$pet_id");

echo "Adoption request submitted successfully";
?>
