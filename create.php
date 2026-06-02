<?php
session_start();
include "db.php";

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $sql = "INSERT INTO posts (title, content) VALUES ('$title', '$content')";
    $conn->query($sql);

    header("Location: dashboard.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>

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

        .post-box {
            background: white;
            padding: 30px;
            width: 400px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            text-align: center;
        }

        .post-box h2 {
            margin-bottom: 20px;
        }

        .post-box input,
        .post-box textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-family: Arial, sans-serif;
        }

        .post-box textarea {
            height: 120px;
            resize: none;
        }

        .post-box button {
            width: 100%;
            padding: 10px;
            background: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .post-box button:hover {
            background: #45a049;
        }
    </style>
</head>

<body>

<div class="post-box">
    <h2>Create Post</h2>

    <form method="POST">
        <input name="title" placeholder="Title" required>
        <textarea name="content" placeholder="Content" required></textarea>
        <button name="submit">Publish</button>
    </form>
</div>

</body>
</html>
<br>
<a href="dashboard.php">Back</a>