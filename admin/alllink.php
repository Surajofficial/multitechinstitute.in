<!doctype html>
<html lang="en" dir="ltr">

<?php include 'head.php';
include './secure.php';
?>

<title>All Link</title>

<body class="">
    <div class="page">
        <div class="page-main">
            <?php include 'header1.php';
            ?>
            <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>

            <div class="my-3 my-md-5">
                <div class="container">
                    <div class="page-header">
                        <h1 class="page-title">
                            All Link
                        </h1>

                    <div class="page-options d-flex">
                            <a href="download.php" id="add" class="btn btn-green btn-sm">Download</a>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-2">
                            <div class="col-md-12 mb-3">
                                <label for="catagry">
                                    <h6>Catagry</h6>
                                </label>
                                <select class="custom-select" id="select">
                                    <option value="all" selected>All</option>
                                    <?php
                                 $query = "SELECT * FROM category";
                                 
                                 if($result=mysqli_query($conn,$query)){
                                     while($row = mysqli_fetch_assoc($result)){
                                         echo '<option value="'.$row['cat_name'].'" >'.$row['cat_name'].'</option>';
                                     }
                                 }
                                 
                                 ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-2 ml-auto">
                            <div class="col-12 mb-3">
                                <label for="state">
                                    <h6>State</h6>
                                </label>
                                <select class="custom-select" id="select2">
                                    <option value="all" selected>All</option>
                                    <?php
                                 $query = "SELECT DISTINCT(state) FROM blog";
                                 
                                 if($result=mysqli_query($conn,$query)){
                                     while($row = mysqli_fetch_assoc($result)){
                                         echo '<option value="'.$row['state'].'" >'.$row['state'].'</option>';
                                     }
                                 }
                                 
                                 ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row row-cards spotlight-group d-flex flex-column justify-content-center align-items-center"
                        data-fit="contain" data-autohide="all">
                        <fieldset id="loading" class="form-fieldset col-12 ml-5 ">
                          
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

        $(document).ready(function () {

var cat2 = $("#select").find('option:selected').val();
var cat3 = $("#select2").find('option:selected').val();
            function load2(ids="all", states="all") {
                $.ajax({
                    url: 'link_load.php',
                    type: 'POST',
                    data: {
                        id: ids,
                        state:states
                    },
                    success: function (data) {
                        $('#loading').html(data);
                    }
                })
            }
            load2(cat2,cat3);
            $("#select").change(function () {
              var cat2 = $("#select").find('option:selected').val();
              var cat3 = $("#select2").find('option:selected').val();
                load2(cat2,cat3);
                return cat2;

            })
              $("#select2").change(function () {
               var cat2 = $("#select").find('option:selected').val();
               var cat3 = $("#select2").find('option:selected').val();
                load2(cat2,cat3);
                return cat3;

            })
            $(document).on("click", ".delete", function () {
                $(this).preventDefault;
                var id = $(this).data("id");
                var url = $(this).data("url");
                // alert(url);
                var conf = confirm('Do You Want to delet this Image');
                if (conf) {
                    $.ajax({
                        url: 'delete_blog.php',
                        type: 'POST',
                        data: {
                            url: url
                        },
                        success: function (data) {
                            // console.log(data);
                            load2();
                        }
                    })
                }
            })
            $(document).on("click", ".status", function () {
                $(this).preventDefault;
                var status = $(this).data("status");
                var url = $(this).data("url");
                // alert(url);
               
                    $.ajax({
                        url: 'status_blog.php',
                        type: 'POST',
                        data: {
                            url: url,
                            status:status
                        },
                        success: function (data) {
                            // console.log(data);
                            load2();
                        }
                    })
                
            })

            $('#submitbtn').click(function (e) {
                e.preventDefault();
                var form_data = new FormData();

                // Read selected files
                var totalfiles = document.getElementById('file1').files.length;
                for (var index = 0; index < totalfiles; index++) {
                    form_data.append("file1[]", document.getElementById('file1').files[index]);
                }
                var totalfiles2 = document.getElementById('file2').files.length;
                for (var index = 0; index < totalfiles2; index++) {
                    form_data.append("file2[]", document.getElementById('file2').files[index]);
                }
                // Read selected files
                form_data.append("cat", $('#cat').find('option:selected').val());
                $.ajax({
                    url: 'ajaxfile.php',
                    type: 'post',
                    data: form_data,
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        if (response == 1) {
                            $('#preview').html("<font id='sucs' style='font-size:17px; color:green;'>Image Uploaded</font>");
                            load2();
                            $('#file1').val(null);
                            $('#file2').val(null);
                        } else {
                            // $('#err').fadeIn();
                            $('#preview').html(response);
                        }
                    }
                });


            });
            // jQuery END BRACEC 
        });
    </script>
</body>

</html>