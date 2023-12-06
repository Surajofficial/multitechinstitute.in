<?php
include 'secure.php';
$id = $_POST['id'];
$cat = $_POST['cat_name'];
$query = "UPDATE `category` SET `cat_name`='$cat' WHERE sno = $id";
if(mysqli_query($conn,$query)){
    header("location:category.php");
}
echo $id. $cat;
?>