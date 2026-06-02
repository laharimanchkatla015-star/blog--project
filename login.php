<?php
session_start();
include "db.php";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user'] = $username;
        header("Location: dashboard.php");
    } else {
        echo "Invalid username or password";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #74ebd5, #9face6);
            font-family: Arial, sans-serif;
        }

        .login-box {
            background: white;
            padding: 30px;
            width: 300px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            text-align: center;
        }

        .login-box h2 {
            margin-bottom: 20px;
        }

        .login-box input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .login-box button {
            width: 100%;
            padding: 10px;
            background: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .login-box button:hover {
            background: #45a049;
        }
    </style>
</head>

<body>

<div class="login-box">
    <form method="POST">
        <h2>Login</h2>
        <input name="username" placeholder="Username" required>
        <input name="password" type="password" placeholder="Password" required>
        <button name="login">Login</button>
    </form>
</div>

</body>
</html>