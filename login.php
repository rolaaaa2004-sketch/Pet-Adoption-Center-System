<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "db.php";

$error = "";

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $_SESSION['user_id'] = $user['id'];

        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid email or password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form method="post">
    <h2>Login</h2>

    <?php if ($error != "") { ?>
        <p style="color:red; text-align:center;">
            <?= $error ?>
        </p>
    <?php } ?>

    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>

    <button type="submit" name="login">Login</button>

    <p style="text-align:center;">
        <a href="register.php">Create new account</a>
    </p>
</form>

</body>
</html>
