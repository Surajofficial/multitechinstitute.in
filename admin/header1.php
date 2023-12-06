<?php include 'secure.php'?>
<div class="header py-4">

    <div class="container">
        <div class="d-flex">
            <a class="header-brand" href="./index.php">
                <img src="./demo/faces/male/2.jpg" class="header-brand-img avatar" alt="tabler logo">
            </a>
            <div class="d-flex order-lg-2 ml-auto">
                <div class="dropdown">
                    <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                        <span class="avatar" style="background-image: url(./demo/faces/male/2.jpg)"></span>
                        <span class="ml-2 d-none d-lg-block">
                            <span class="text-default">Ajay Tiwari</span>
                            <small class="text-muted d-block mt-1">Administrator</small>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a class="dropdown-item" href="#">
                            <i class="dropdown-icon fe fe-user"></i> Profile
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="dropdown-icon fe fe-send"></i> Message
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">
                            <i class="dropdown-icon fe fe-log-out"></i> Sign out
                        </a>
                    </div>
                </div>
            </div>
            <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                <span class="header-toggler-icon"></span>
            </a>
        </div>
    </div>
</div>
<div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg order-lg-first">
                <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                    <li class="nav-item">
                        <a href="./index.php" class="nav-link active"><i class="fe fe-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="./blogs.php" class="nav-link"><i class="fe fe-image"></i>Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a href="./blognum.php" class="nav-link"><i class="fe fe-image"></i>Add Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a href="./category.php" class="nav-link"><i class="fe fe-image"></i>Category</a>
                    </li>
                      <li class="nav-item">
                        <a href="./getlink.php" class="nav-link"><i class="fe fe-image"></i>Get Link</a>
                    </li>
                    </li>
                      <li class="nav-item">
                        <a href="./alllink.php" class="nav-link"><i class="fe fe-image"></i>All Link</a>
                    </li>
                     <li class="nav-item">
                        <a href="./updatekey.php" class="nav-link"><i class="fe fe-image"></i>Update Keyword</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>