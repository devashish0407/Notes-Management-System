<?php
$conn = mysqli_connect("localhost", "root", "", "notes");

if (!$conn) {
    echo "Failed to connect to database: " . mysqli_connect_error();
    exit;
}
?>