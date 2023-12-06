<?php
$metaData = array(
'title'		  =>'Blogs',
'description' =>'Multitech Institute is the best Laptop repairing institute in Delhi. We give practical based classes for LED TV repairing course and Mobile repairing course also.',
'keywords'	  =>'laptop repairing course, Laptop repairing institute, best laptop repairing course in india, Mobile repairing institute, Mobile repairing course, led tv repairing course, led tv repairing institute, best lcd led training institute, led tv training institute, led repairing institute in delhi, led repairing course, laptop repairing institute in tilak nagar, laptop repairing institute in uttam nagar',
'canonical'	=> 'https://www.multitechinstitute.in'	,
);
$Course_Json = file_get_contents('data/blog.json');
$Courses =  json_decode($Course_Json,true);
include('common/header.inc.php');

?>
<div class="header_inner">
    <div class="container pb-4">
        <h1><?=$metaData['title'];?></h1>
    </div>
</div>
<section class="bg-service pt-md-5 pb-1">
    <center class="pb-md-5"> <h1 class="whychoose">Our Blogs</h1>
  	  <!--<div class="sep_mks"></div>-->
    </center>
    <div class="container">
        <div class="row">
			<?php 
            include '../admin/conn.php';
            if(isset($_GET['cat'])){
                $cat =$_GET['cat'];
                $query = "SELECT * from blog where category = $cat and status = 'live' order by sno desc limit 9 "; 
                // echo $query;
                // exit;
                
            }
            else{
                $query = "SELECT * from blog where status = 'live'order by RAND() limit 9 ";
            }
            $result = mysqli_query($conn,$query);
            if (mysqli_num_rows($result)>0) {
                while ($row=mysqli_fetch_assoc($result)) {
                    ?>
                <div class="col-md-4 pb-5 pb-3 px-3">
               	 <?php include("common/blog_card.php"); ?>
                </div>
           <?php
                }
               
            } else {
                echo "<p class='text-center' style='margin-bottom:200px;font-size:20px'>Coming Soon....</p>";
            }
            ?>
        </div>
    </div>
    <!--<div class="btns mb-5">
        <button type="button" class="btn btn-default" style="background: #e21416;
        color: #fff;"><a href="<?=URL;?>courses.php" style="text-decoration:none; color:#fff;">VIEW ALL COURSES <i class="fas fa-arrow-alt-circle-right"></i></a></button>
    </div>-->
</section>



      
</div>


<?php include("common/subscribe.inc.php");?>
<?php include('common/footer.inc.php');?>