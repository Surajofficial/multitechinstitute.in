<?php

$servername = "localhost";
$username = "multit76757stitu";
$password = "#*&&*C6svTEJ3";
$database = "multit76_multitech";
// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// cheking all field fill or not 
if (empty($_POST['email']) || empty($_POST['pass'])) {
    echo "input all field";
} 
else if(!isset($_POST['pass']) || $_POST['pass'] == ''){
    echo "input all field";
}
else {
    $email = $_POST['email'];
    $pass =  $_POST['pass'];
    $sql = $conn->prepare("SELECT * FROM user WHERE email = ? AND pass = ?");
    $sql->bind_param("ss",$email,$pass);
    $sql->execute();
    $result = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
    //   echo  gettype($_POST['rem']);
    // $query1 = "SELECT * FROM user WHERE email = '$email' and pass = '$pass'";
    // $result = $conn->query($query1);
    // $row = $result->fetch_assoc();
    //  checking user exit in db
    if (count($result) > 0) {
        // cheking rember chek or not 

        //   updating utk 
        $id = $result['0']['sno'];
        $utk = md5($id . $_POST['pass']);
        $query =  "UPDATE `user` SET  `utk`= '$utk' WHERE `sno`= '$id'";

        if ($result = $conn->query($query)) {
            //  seting cookie 
            setcookie("utk", $utk, time() + (3600 * 24));
            echo 1;
        } else {
            echo "somthing went wrong";
        }
    } else {
        echo 2;
    }
}
?>