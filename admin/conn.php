<?php  
// Connect to the Database 
$servername = "localhost";
$username = "cloudbik_multit76757stitu";
$password = "FJR+!wF}u+bW";
$database = "cloudbik_multit76_multitech";
// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
?>