<?php
session_start();
include "db.php";

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>

    <style>
        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #74ebd5, #9face6);
            font-family: Arial, sans-serif;
        }

        .container {
            background: white;
            width: 600px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        a {
            text-decoration: none;
            color: #4CAF50;
            font-weight: bold;
            margin: 0 5px;
        }

        a:hover {
            text-decoration: underline;
        }

        hr {
            margin: 15px 0;
        }
    </style>
</head>

<body>

<div class="container">

<h1>Welcome Lahari</h1>

<a href="logout.php">Logout</a> |
<a href="create.php">➕ Create Post</a>

<hr>

<h2>All Posts</h2>

<?php
$result = $conn->query("SELECT * FROM posts ORDER BY id DESC");

while ($row = $result->fetch_assoc()) {
    echo "<h3>" . $row['title'] . "</h3>";
    echo "<p>" . $row['content'] . "</p>";

    echo "<a href='edit.php?id=" . $row['id'] . "'>Edit</a> | ";
    echo "<a href='delete.php?id=" . $row['id'] . "'>Delete</a>";

    echo "<hr>";
}
?>

</div>

</body>
</html>