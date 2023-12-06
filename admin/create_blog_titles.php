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
            $num = $_POST['num'];
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
                            <form id="form" action="create_blog_titles_code.php" method="POST">
                                <div class="mb-3">
                                    <label for="catagry">
                                        <h6>State Type</h6>
                                    </label>
                                    <input type="hidden" id="num" name="num" value="<?php echo $num ?>"
                                        class="form-control" autocomplete="off">
                                    <select class="custom-select" id="stateType" name="state_type">
                                        <option value="same">Same</option>
                                        <option value="def">Different</option>
                                    </select>
                                </div>
                                <div class='mb-3 state2'>
                                    <label class='form-label required'>State</label>
                                    <input type='text' id='state' name='state' list="state_val"
                                        placeholder='Enter State Name' class='form-control' autocomplete='off'>
                                    <datalist id="state_val">
                                          <?php
                                 $query = "SELECT DISTINCT(state) FROM blog";
                                 
                                 if($result=mysqli_query($conn,$query)){
                                     while($row = mysqli_fetch_assoc($result)){
                                         echo '<option value="'.$row['state'].'" >'.$row['state'].'</option>';
                                     }
                                 }
                                 
                                 ?>
                                    </datalist>
                                </div>
                                <?php
                                for($i=1;$i<=$num;$i++){
                                    echo "<div class='mb-3'>
                    <label class='form-label required'>City</label>
                    <input type='text' id='city_$i' name='city_$i' placeholder='Enter City Name' class='form-control'
        autocomplete='off'>
                </div>
                    <div class='mb-3 state'>
                           <label class='form-label required'>State</label>
                   <input type='text' id='state_$i' name='state_$i' placeholder='Enter State Name' class='form-control' list='state_val'
        autocomplete='off'>
                    </div>";
                                }
                                
                                
                                ?>
                                <div class="mb-3">
                                    <label for="catagry">
                                        <h6>Catagry</h6>
                                    </label>
                                    <select class="custom-select" name="cat_name">
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
                                    <input type="submit" class="form-control btn-green" id="submitbtn"
                                        style="cursor: pointer;" value="Create url" autocomplete="off">
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
            $(".state").hide();
            $("#stateType").change(function () {
                var state = $("#stateType").find('option:selected').val();
                if (state == "same") {
                    $(".state").hide();
                    $(".state2").show();
                }
                else {
                    $(".state").show();
                    $(".state2").hide();
                }

            })
            // $('#submitbtn').click(function (e) {
            //     e.preventDefault();
            //     $.ajax({
            //         url: 'create_blog_titles_code.php',
            //         type: 'post',
            //         data: $('#form').serialize(),
            //         success: function (response) {
            //             // console.log(response)
            //             if (response == 1) {
            //                 $('#priview').html("Somthing Went Wrong");
            //             } else {
            //                 // $('#err').fadeIn();
            //                 window.location.replace("blogs.php?url='"+response+"'");
            //             }
            //         }
            //     });

            // });
            // jQuery END BRACEC 
        });
    </script>

</body>

</html>