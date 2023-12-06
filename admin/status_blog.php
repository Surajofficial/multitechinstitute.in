<?php
include 'secure.php';
$url = $_POST['url'];
$status = $_POST['status'];
$query = "UPDATE blog set status='$status' where url = '$url'";
if(mysqli_query($conn,$query)){
    echo 1;
}
else{
    echo $query ;
}


?>