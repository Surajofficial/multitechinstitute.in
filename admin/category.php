<!doctype html>
<html lang="en" dir="ltr">

<?php include 'head.php' ?>
<title>Category</title>

<body class="">
    <div class="page">
        <div class="page-main">
            <?php include 'header1.php'; ?>

            <div class="my-3 my-md-5">
                <div class="container">
                    <div class="page-header">
                        <h1 class="page-title">
                            Category
                        </h1>

                        <div class="page-options d-flex">
                            <a href="javascript:void(0)" id="add" class="btn btn-green btn-sm">Add Category</a>
                        </div>
                    </div>

                    <div class="row row-cards spotlight-group" data-fit="contain" data-autohide="all">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table table-vcenter card-table table-striped">
                                    <thead>
                                        <tr>
                                            <th>S.No.</th>
                                            <th>Category Name</th>
                                            <th class="w-1"></th>
                                        </tr>
                                    </thead>
                                    <tbody id="load_cat">


                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="catbox">
        <div class="container col-md-6 ">

            <div class="main col-12 p-6">
                <h1 id="cls">X</h1>
                <form class="col m-auto" id="add_cat" type="post" method="post">
                    <div class="form-row">
                        <div class="col-md-8 mb-3">
                            <label for="myfile">Category Name</label>
                            <input type="text" name="cat_name" class="form-control " id="cat_name" multiple>
                        </div>
                        <div class="col-md-8 mb-3">
                            <div id='preview'>

                            </div>
                            <button id="submitbtn" class="btn-primary col-md-8 btn btn-primary">Add</button>
                        </div>
                    </div>
                </form>


                <br>

            </div>
        </div>
    </div>


    <style>
        #catbox {
            position: fixed;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
            z-index: 999;
            overflow: hidden;
            display: none;
            justify-content: center;
            align-items: center;
            background-color: rgba(97, 95, 93, 0.281);

        }

        #catbox h1 {
            position: absolute;
            float: right;
            top: 2%;
            cursor: pointer;
            color: red;
            right: 5%;
        }

        .main {
            background-color: rgba(12, 11, 11, 0.925);
            position: relative;

        }

        .main label {
            font-size: 20px;
            color: rgb(233, 233, 217);
            font-weight: 400;

        }

        .page {
            overflow-y: hidden;
            z-index: 1;
        }
    </style>
    <style>
        #btn_load_more a {
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 200px;
            font-size: 20px;
            background-color: blueviolet;
            padding: 10px;
            vertical-align: middle;
            text-decoration: none;


        }

        #btn_load_more a:hover {
            background-color: #8a2be278;
        }
    </style>
    <script>

        $(document).ready(function () {

            $('#add').click(function (e) {
                $('#catbox').css('display', 'flex');
            })
            $('#cls').click(function (e) {
                $('#catbox').css('display', 'none');
            })

            function load2(ids) {
                $.ajax({
                    url: 'load_cat.php',
                    type: 'POST',
                    data: {
                        id: ids
                    },
                    success: function (data) {
                        $('#btn_load_more').remove();
                        $('#load_cat').html(data);
                    }
                })
            }
            load2();

            $(document).on("click", "#delet", function () {
                var id = $(this).data("id");
                var conf = confirm('Do You Want to delet this Image');
                if (conf) {
                    $.ajax({
                        url: 'cat_delet.php',
                        type: 'POST',
                        data: {
                            id: id
                        },
                        success: function (data) {
                            load2();
                        }
                    })
                }
            })

            $('#submitbtn').click(function (e) {
                e.preventDefault();
                // alert(cat);
                // Read selected files
                $.ajax({
                    url: 'add_cat.php',
                    type: 'post',
                    data: $('#add_cat').serialize(),
                    success: function (response) {
                        if (response == 1) {
                            $('#catbox').css('display', 'none');
                            load2();
                            $('#cat_name').val(null);
                        } else {
                            // $('#err').fadeIn();
                            // $('#preview').html(response);
                            console.log(response);
                        }
                    }
                });


            });
            // jQuery END BRACEC 
        });
    </script>
</body>

</html>