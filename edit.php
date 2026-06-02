<?php

include "db.php";

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM posts WHERE id=$id");
$post = $result->fetch_assoc();

if (isset($_POST['update'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $conn->query("UPDATE posts SET title='$title', content='$content' WHERE id=$id");

    header("Location: dashboard.php");
}
?>
<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
        background: linear-gradient(135deg, #74ebd5, #9face6);

        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .edit-box {
        background: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        width: 400px;
        text-align: center;
    }

    input, textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    textarea {
        height: 150px;
        resize: none;
    }

    button {
        background: #4CAF50;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }

    button:hover {
        background: #45a049;
    }
</style>
<div class="edit-box">
    <h2>Edit Post</h2>

    <form method="POST">
        <input name="title" value="<?php echo $post['title']; ?>"><br><br>

        <textarea name="content"><?php echo $post['content']; ?></textarea><br><br>

        <button name="update">Update</button>
    </form>
</div>
<br>
<a href="dashboard.php">Back</a>