<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>

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
            width: 700px;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        form {
            text-align: center;
            margin-bottom: 20px;
        }

        input {
            padding: 8px;
            width: 60%;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            padding: 8px 12px;
            border: none;
            background: #4CAF50;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #45a049;
        }

        a {
            margin: 3px;
            text-decoration: none;
            color: #4CAF50;
            font-weight: bold;
        }
    </style>
</head>

<body>

<div class="container">
<?php
// HEAD
$conn = new mysqli("localhost", "root", "Lahari@121", "blog");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$search = isset($_GET['search']) ? $_GET['search'] : "";

$limit = 5;   // how many posts per page

$page = isset($_GET['page']) ? $_GET['page'] : 1;

$start = ($page - 1) * $limit;
?>
<form method="GET">
    <input type="text" name="search" placeholder="Search posts">
    <button type="submit">Search</button>
</form>
<?php

$sql = "SELECT * FROM posts WHERE 1=1";

if (!empty($search)) {
    $sql .= " AND (title LIKE '%$search%' OR content LIKE '%$search%')";
}

$sql .= " ORDER BY created_at DESC LIMIT $start, $limit";

$result = $conn->query($sql);

$count_sql = "SELECT COUNT(*) as total FROM posts";

if (!empty($search)) {
    $count_sql .= " WHERE title LIKE '%$search%' OR content LIKE '%$search%'";
}

$count_result = $conn->query($count_sql);
$total = $count_result->fetch_assoc()['total'];

$pages = ceil($total / $limit);

if (!empty($search)) {
    $sql .= " AND (title LIKE '%$search%' OR content LIKE '%$search%')";
}

?>
<?php while($row = $result->fetch_assoc()) { ?>
    <h3><?php echo $row['title']; ?></h3>
    <p><?php echo $row['content']; ?></p>
    <hr>
<?php } 
?>
<?php for ($i = 1; $i <= $pages; $i++) { ?>
    <a href="?page=<?php echo $i; ?>&search=<?php echo $search; ?>">
        <?php echo $i; ?>
    </a>
<?php } ?>

