<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/Docs.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="bootstrap-5.3.0-alpha1-dist/js/bootstrap.bundle.min.js"></script>

    <title></title>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-black box">
            <div class="container-fluid">
                <a class="mx-auto navbar-brand text-white" href="index.php#slider1">
                    <img src="Res/header1.png" alt="Fusion Tech" width="170" height="100"/>
                </a>
                <div class="position-absolute top-0 end-0 mt-4 mx-4">

                    <?php
                        if (isset($_SESSION['username']) && isset($_SESSION['password'])){
//                            echo '<a class="btn btn-dark" href="users/logout.php"><i class="fa fa-user mx-auto"></i> Logout '.$_SESSION['username'].'</a>';
                            echo '<div class="dropdown dropstart dropdown-menu-dark">
                        <a class="btn btn-dark dropdown-toggle" id="user-log" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Hello, '.$_SESSION['username'].'
                        </a>

                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="users/logout.php">Logout</a></li>
                        </ul>
                    </div>';
                        }
                        else{
                            echo '<div class="dropdown dropstart dropdown-menu-dark" >
                        <a class="btn btn-dark dropdown-toggle" id="user-log" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Sign-in
                        </a>

                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="users/login.php">Login</a></li>
                            <li><a class="dropdown-item" href="users/signup.php">Signup</a></li>
                        </ul>
                    </div>';
                        }
                    ?>

                </div>
            </div>
        </nav>
        <nav class="navbar navbar-dark bg-black text-white navbar-expand-lg sticky-top box">
            <div class="clearfix">
                <div class="float-start">
                    <button class="btn navbar-toggler ms-3 my-2 d-block d-lg-none text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="float-end position-absolute end-0 fs-2 mt-2 me-3 d-block d-lg-none text-akira ">Fusion Tech</div>
            </div>

<!--            OffCanvas---------------------------------------->
            <div class="offcanvas bg-black text-white offcanvas-start d-lg-none d-sm-block" data-bs-backdrop="false" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title fw-bold text-qualy" id="offcanvasExampleLabel">MENU</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="mx-auto navbar-nav navbar-nav-scroll text-center">
                        <li class="nav-item mx-3 fw-bolder cst-font">
                            <a href="builder.php" class="nav-link text-white <?php echo ($page == "build" ? "cst-active" : "cst-hover") ?>">Custom Build</a>
                        </li>
                        <li class="nav-item mx-3 fw-bolder cst-font">
                            <a href="feed.php" class="nav-link text-white <?php echo ($page == "feed" ? "cst-active" : "cst-hover") ?>">Forum</a>
                        </li>
                        <li class="nav-item mx-3 fw-bolder cst-font">
                            <a href="compare.php" class="nav-link text-white <?php echo ($page == "compare" ? "cst-active" : "cst-hover") ?>">Compare</a>
                        </li>
                        <li class="nav-item mx-3 fw-bolder cst-font">
                            <a href="shop.php" class="nav-link text-white <?php echo ($page == "shop" ? "cst-active" : "cst-hover") ?>">Store</a>
                        </li>
                        <li class="nav-item mx-3 fw-bolder cst-font">
                            <a href="gallary.php#slider1" class="nav-link text-white <?php echo ($page == "gallery" ? "cst-active" : "cst-hover") ?>">Gallery</a>
                        </li>
                        <li class="nav-item mx-3 fw-bolder cst-font">
                            <a href="guide.php" class="nav-link text-white <?php echo ($page == "guide" ? "cst-active" : "cst-hover") ?>">Guide</a>
                        </li>
                        <li class="nav-item mx-3 fw-bolder cst-font">
                            <a href="support.php" class="nav-link text-white <?php echo ($page == "contact" ? "cst-active" : "cst-hover") ?>">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
<!--            End OffCanvas------------------------------------>

            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="mx-auto navbar-nav navbar-nav-scroll">
                        <li class="nav-item mx-3 fw-bolder cst-font">
                            <a href="builder.php" class="nav-link text-white <?php echo ($page == "build" ? "cst-active" : "cst-hover") ?>">Custom Build</a>
                        </li>
                        <li class="nav-item mx-3 fw-bolder cst-font">
                            <a href="feed.php" class="nav-link text-white <?php echo ($page == "feed" ? "cst-active" : "cst-hover") ?>">Forum</a>
                        </li>
                        <li class="nav-item mx-3 fw-bolder cst-font">
                            <a href="compare.php" class="nav-link text-white <?php echo ($page == "compare" ? "cst-active" : "cst-hover") ?>">Compare</a>
                        </li>
                        <li class="nav-item mx-3 fw-bolder cst-font">
                            <a href="shop.php" class="nav-link text-white <?php echo ($page == "shop" ? "cst-active" : "cst-hover") ?>">Store</a>
                        </li>
                        <li class="nav-item mx-3 fw-bolder cst-font">
                            <a href="gallary.php#slider1" class="nav-link text-white <?php echo ($page == "gallery" ? "cst-active" : "cst-hover") ?>">Gallery</a>
                        </li>
                        <li class="nav-item mx-3 fw-bolder cst-font">
                            <a href="guide.php" class="nav-link text-white <?php echo ($page == "guide" ? "cst-active" : "cst-hover") ?>">Guide</a>
                        </li>
                        <li class="nav-item mx-3 fw-bolder cst-font">
                            <a href="support.php" class="nav-link text-white <?php echo ($page == "contact" ? "cst-active" : "cst-hover") ?>">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

</body>
</html>