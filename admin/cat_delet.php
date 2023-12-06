<?php
include 'conn.php';
$id = $_POST['id'];
$query2 = "DELETE FROM `category` WHERE sno = '$id'";
$result = mysqli_query($conn, $query2);
?>