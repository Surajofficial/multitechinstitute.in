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
                            <form id="form" action="edit_blog_code.php" method="POST">
                                <div class="mb-3">
                                    <label class="form-label required">URL</label>
                                    <input type="text" name="blog_url"  class="form-control" value="<?php echo $row['url'] ?>" disabled>
                                    <input type="hidden" name="blog_url" value="<?php echo $row['url'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label required">Blog Title</label>
                                    <input type="text" value="<?php echo $row['title'] ?>" name="blog_title"
                                        placeholder="Enter Blog Title" class="form-control" autocomplete="off">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label required">Blog Description</label>
                                    <textarea name="blog_dec" id="blog_dec" cols="140"
                                        rows="10"><?php echo $row['dec'] ?></textarea>

                                </div>
                                <div class="mb-3">
                                    <label class="form-label required">Blog KeyWord</label>
                                    <textarea name="blog_key" id="blog_key" cols="140"
                                        rows="10"><?php echo $row['key'] ?></textarea>

                                </div>
                                <div class="mb-3">
                                    <label class="form-label required">Blog Short</label>
                                    <textarea name="blog_short" id="blog_short" cols="140"
                                        rows="10"><?php echo $row['short'] ?></textarea>

                                </div>
                                <div class="mb-3">
                                    <label class="form-label required">Blog Content</label>
                                    <textarea name="blog_data" class="p-3" id="editor" cols="140"
                                        rows="10"><?php echo $row['data'] ?></textarea>

                                </div>
                                <div class="mb-3">
                                    <label for="catagry">
                                        <h6>Catagry</h6>
                                    </label>
                                    <select id="id_100" class="custom-select" name="cat_name">
                                        <?php
                                 $query = "SELECT * FROM category order by sno";
                                 
                                 if($result=mysqli_query($conn,$query)){
                                     while($row2 = mysqli_fetch_assoc($result)){
                                         echo '<option value="'.$row2['cat_name'].'" >'.$row2['cat_name'].'</option>';
                                     }
                                 }
                                 
                                 ?>
                                    </select>
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