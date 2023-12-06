<!doctype html>
<html lang="en" dir="ltr">

<?php include 'head.php';
include './secure.php';
?>

<title>Edit Blog</title>

<body class="">
    <div class="page">
        <div class="page-main">
            <?php include 'header1.php'; 
            $url = $_GET['url'];
            $query = "SELECT * FROM blog WHERE url = $url";
            $result = mysqli_query($conn,$query);
            $row = mysqli_fetch_assoc($result);
            $scat = $row['category'];
            
            ?>

            <div class="my-3 my-md-5">
                <div class="container">
                    <div class="page-header">
                        <h1 class="page-title">
                           Edit Blog
                        </h1>


                    </div>

                    <div class="row row-cards spotlight-group d-flex flex-column justify-content-center align-items-center"
                        data-fit="contain" data-autohide="all">
                        <fieldset class="form-fieldset col-12 ml-5 ">
                            <form id="form" action="articlecode.php" method="POST">
                                <div class="mb-3">
                                    <label class="form-label required">Blog Content</label>
                                        <input type="text" value="<?php echo $row['title'] ?>" name="article"
                                        placeholder="Enter Blog Title"  class="form-control" autocomplete="off">

                                </div>
                                
                                <div class="mb-3">
                                    <input type="submit" class="form-control btn-green" id="submitbtn"
                                        style="cursor: pointer;" value="Save" autocomplete="off">
                                </div>
                            </form>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="./ckeditor_4.17.1_full/ckeditor/ckeditor.js"></script>
    <script>
    
       CKEDITOR.replace( 'editor' );
      
    </script>
     <script>
$("#id_100 option[value='<?php echo $scat; ?>']").attr("selected","selected");
        
    </script> 
    
  

</body>

</html>