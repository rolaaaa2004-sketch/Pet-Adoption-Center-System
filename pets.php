<?php
include "db.php";
$result = $conn->query("SELECT * FROM pets WHERE status='available'");
?>

<h2>Available Pets</h2>

<?php while ($pet = $result->fetch_assoc()) { ?>
<div>
    <p><?= $pet['name'] ?> - <?= $pet['breed'] ?></p>
    <a href="adopt.php?id=<?= $pet['id'] ?>">Adopt</a>
</div>
<?php } ?>
