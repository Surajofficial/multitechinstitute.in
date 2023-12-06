<!doctype html>
<html lang="en" dir="ltr">

<?php include 'head.php';
include './secure.php';
?>
<title> Create Blog</title>

<body class="">
    <div class="page">
        <div class="page-main">
            <?php include 'header1.php'; 
            // $id = $_GET['id'];
            // $query = "SELECT * FROM category WHERE sno = $id";
            // $result = mysqli_query($conn,$query);
            // $row = mysqli_fetch_assoc($result);
            
            ?>

            <div class="my-3 my-md-5">
                <div class="container">
                    <div class="page-header">
                        <h1 class="page-title">
                            Create Blog Link
                        </h1>


                    </div>

                    <div class="row row-cards spotlight-group d-flex flex-column justify-content-center align-items-center"
                        data-fit="contain" data-autohide="all">
                        <fieldset class="form-fieldset col-6 ml-5 ">
                            <form id="form" method="POST">
                                <div class="mb-3">
                                    <label class="form-label required">URL</label>
                                    <input type="text" id="blog_url" name="blog_url" placeholder="Enter Blog URL" class="form-control"
                                        autocomplete="off">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label required">Blog Title</label>
                                    <input type="text" id="blog_title" name="blog_title" placeholder="Enter Blog Title"
                                        class="form-control" autocomplete="off">
                                </div>
                                <div class="mb-3">
                                    <label for="catagry">
                                        <h6>Catagry</h6>
                                    </label>
                                    <select class="custom-select" name="cat_name" >
                                        <?php
                                 $query = "SELECT * FROM category order by sno";
                                 
                                 if($result=mysqli_query($conn,$query)){
                                     while($row = mysqli_fetch_assoc($result)){
                                         echo '<option value="'.$row['cat_name'].'" >'.$row['cat_name'].'</option>';
                                     }
                                 }
                                 
                                 ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <p id="priview" class="text-danger"></p>
                                    <input type="submit" class="form-control btn-green" id="submitbtn" style="cursor: pointer;"
                                        value="Create url" autocomplete="off">
                                </div>
                            </form>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

        $(document).ready(function () {

            $('#submitbtn').click(function (e) {
                e.preventDefault();
                $.ajax({
                    url: 'create_blog_title_code.php',
                    type: 'post',
                    data: $('#form').serialize(),
                    success: function (response) {
                        // console.log(response)
                        if (response == 1) {
                            $('#priview').html("Somthing Went Wrong");
                        } else {
                            // $('#err').fadeIn();
                            window.location.replace("edit_blog.php?url='"+response+"'");
                        }
                    }
                });
       
            });
            $('#blog_title').keyup(function(){
               let url = $('#blog_title').val();
                let result = url.replace(/ /g,"-").toLowerCase()
               $('#blog_url').val(result);
           })

            // jQuery END BRACEC 
        });
    </script>

</body>

</html>