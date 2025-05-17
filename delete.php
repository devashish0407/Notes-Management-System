<?php
include './connection.php';
$id=$_GET["id"];
$deletequery="DELETE FROM `notes` WHERE  `sno`='$id'";
$result=mysqli_query($conn,$deletequery);
header("location:./index.php");
?>