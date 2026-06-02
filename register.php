<?php
include "db.php";

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    $conn->query($sql);

    echo "Registered Successfully!";
}
?>

<form method="POST">
    <h2>Register</h2>
    <input name="username" placeholder="Username" required>
    <input name="password" type="password" placeholder="Password" required>
    <button name="register">Register</button>
</form>