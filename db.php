<?php
$conn = new mysqli("localhost", "root", "Lahari@121", "blog");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>