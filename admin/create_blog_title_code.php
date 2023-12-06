
<?php
include "secure.php";
$url = $_POST['blog_url'].".php";
$title = $_POST['blog_title'];
$cat = $_POST['cat_name'];
$path = "../blog/".$url;
$place = str_replace("-"," ",explode(".",explode("-in-",$url)[1])[0]);
   $x = explode(" ",$place);
            $y = " ";
            foreach ($x as $v) {
                $j = ucfirst($v);
                $y = "$y $j";
                };
                $place = trim($y);
$x1=explode("-",$url)[0];
$x2=explode("-",$url)[1];
$device =$x1=="ac"||$x=="led"?"$x1 $x2":$x1;
$course = str_replace("-"," ",explode("-in-",$url)[0]);
include "write.php";
$query = "SELECT * FROM blog WHERE url='$url'";
$result = mysqli_query($conn,$query);
if($url==".php"){
    echo 1;
    exit;
}
else if(mysqli_num_rows($result)>0){
    echo 1;
    exit;
}
?>
<?php


$myfile = fopen($path, "w") or die("Unable to open file!");

fwrite($myfile, $txt);
fclose($myfile);
$query = "INSERT INTO `blog`(`category`,`key`,`dec`, `url`, `title`, `data`, `short`,`state`) VALUES ('$cat','$key','$dec','$url','$title','$content','$short','$state')";
if(mysqli_query($conn,$query)){
   
    echo $url;
}
else{
    echo 1;
}


?>