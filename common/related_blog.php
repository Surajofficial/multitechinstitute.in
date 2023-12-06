<div class="course-sidebar about-img wow fadeInUp">
    <div class="course-widget course-details-info">
        <h4 class="pb-3">Our Recent Post</h4>
        <style>
            .blog li {
                margin: 0 !important;
                padding: 1px 11px 1px 16px !important;
            }
        </style>

        <div class="form-outline col-11 d-flex my-3" style="height: 30px;">
            <input type="search" placeholder="Search Here...." id="form1" style="height: 30px; margin-right: -12px;" class="form-control " />
            <!-- <button type="button" style="height: 30px; " class="btn  btn-primary">
                    <i class="fas fa-search"></i>
                </button> -->

        </div>

        <ul id="recent_blog" class="menusidebar  blog ">

        </ul>
    </div>

</div>
<div class="course-sidebar about-img wow fadeInUp">
    <div class="course-widget course-details-info">
        <h4 class="pb-3">Category</h4>
        <ul class="menusidebar blog ">
            <?php
            $query = "SELECT * from category";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $cat_name = $row['cat_name'];
                    $category = ($cat == $cat_name) ? 'active' : '';
                    echo '<li class="' . $category . '"><a
                  href="../blog/?cat=' . "'" . $cat_name . "'" . '"><i class="fas fa-angle-double-right"></i>
                  ' . $cat_name . '</a></li>';
                }
            }
            ?>

        </ul>
    </div>

</div>