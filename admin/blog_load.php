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
$id = 0;
$result = mysqli_query($conn,$query);
$total = mysqli_num_rows($result);
if($total>0){
echo "<p class='col-11'>Total :". $total ." </p><br>";
    while($row=mysqli_fetch_assoc($result)){
        $id = $id+1;
        if($row['status']=="hide"){
            $status = '<a  data-status ="live" data-url ="'.$row['url'].'"  class="status btn btn-warning text-white btn-sm">Live</a>';
        }
        else{
            $status = '<a  data-status ="hide" data-url ="'.$row['url'].'"  class="status btn btn-danger text-white btn-sm">Hide</a>';
        }
        echo '<div class="col-11">
        <div class="card" id="blog'.$id.'">
            <div class="row row-0">
                <div class="col-3">
                    <img src="../assets/media/banner/banner1-small.jpg"
                        class="w-100 h-100 object-cover" alt="Card side image">
                </div>
                <div class="col">
                    <div class="card-body">
                        <h3 class="card-title">'.$row['title'].'</h3>
                        <p>'.$row['short'].'</p>
                        <a href="##" data-id ="blog'.$id.'" data-url="'.$row['url'].'" class="delete btn btn-danger btn-sm">Delete
                            Blog</a>
                        <a href="../blog/'.$row['url'].'" target="_blank"  class="btn btn-blue btn-sm">View
                            Blog</a>
                        <a href="edit_blog.php?url='."'".$row['url']."'".'" id="add" class="btn btn-green btn-sm">Edit
                            Blog</a>
                        '.$status.'
                    </div>
                </div>
            </div>
        </div>
    </div>
';
    }
}

?>
