<?php
include 'secure.php';
if(isset($_POST['id'])&&$_POST['id']!="all"&&isset($_POST['state'])&&$_POST['state']!="all"){
    $cat = $_POST['id'];
    $state = $_POST['state'];
    $query = "SELECT * FROM blog where category = '$cat' && state = '$state' order by sno desc";
}
else if(isset($_POST['id'])&&$_POST['id']!="all"){
    $cat = $_POST['id'];
    $state = $_POST['state'];
    $query = "SELECT * FROM blog where category = '$cat' order by sno desc";
}
else if(isset($_POST['state'])&&$_POST['state']!="all"){
    $cat = $_POST['id'];
    $state = $_POST['state'];
    $query = "SELECT * FROM blog where state = '$state' order by sno desc";
}
else{
    $query = "SELECT * FROM blog order by sno desc";
}
 $result = mysqli_query($conn,$query);
 $total = mysqli_num_rows($result);
 if($total>0){
        $i=0;
          echo '<table id="customers">
        <tr>
        <th>sno</th>
        <th>Title</th>
        <th>Link</th>
        <th>Keyword</th>
        <th>Description</th>
        </tr>
        
        ';
    while($row=mysqli_fetch_assoc($result)){
    $i = $i + 1;
    echo " <tr>
    <td>".$i."</td>
    <td>".$row['title']."</td>
    <td>https://www.multitechinstitute.in/blog/".$row['url']."</td>
     <td>".$row['key']."</td>
     <td>".$row['dec']."</td>
    </tr>";
    
    };
    
};

?>