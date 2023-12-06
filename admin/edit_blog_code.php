<?php
include 'conn.php';
$data = $_POST['blog_data'];
$dec = $_POST['blog_dec'];
$key = $_POST['blog_key'];
$title = $_POST['blog_title'];
$cat = $_POST['cat_name'];
$url = $_POST['blog_url'];
$short = $_POST['blog_short'];
$query = "UPDATE `blog` SET `category`='$cat',`title`='$title',`data`='$data',`dec`='$dec',`key`='$key',`short`= ".'"'.$short.'"'."  WHERE `url`='$url'";
// echo $query;
if(mysqli_query($conn,$query)){
   header("location:edit_blog.php?url='$url'");
}
else{
    echo "Somthing Went Wrong:".mysqli_error($conn);
}
?>