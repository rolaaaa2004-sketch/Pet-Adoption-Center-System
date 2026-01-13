<?php
include "db.php";

$result = $conn->query("SELECT * FROM pets");

if (!$result) {
    die("Query Error: " . $conn->error);
}
?>

<h2>Available Pets</h2>

<?php
if ($result->num_rows > 0) {
    while ($pet = $result->fetch_assoc()) {
?>
        <div>
            <p><?= $pet['name'] ?> - <?= $pet['breed'] ?></p>
            <a href="adopt.php?id=<?= $pet['id'] ?>">Adopt</a>
        </div>
<?php
    }
} else {
    echo "<p>No pets available</p>";
}
?>
