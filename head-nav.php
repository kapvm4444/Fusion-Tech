<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/Docs.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="bootstrap-5.3.0-alpha1-dist/js/bootstrap.min.js"></script>
    <title></title>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-black box">
            <div class="container-fluid">
                <button class="navbar-toggler d-block d-lg-none text-white float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="mx-auto navbar-brand text-white" href="index.php#slider1">
                    <img src="Res/header1.png" alt="Fusion Tech" width="170" height="100"/>
                </a>
                <div class="position-absolute top-0 end-0 mt-4 mx-4">

                    <?php
                        if (isset($_SESSION['username']) && isset($_SESSION['password'])){
//                            echo '<a class="btn btn-dark" href="users/logout.php"><i class="fa fa-user mx-auto"></i> Logout '.$_SESSION['username'].'</a>';
                            echo '<div class="dropdown dropstart dropdown-menu-dark">
                        <a class="btn btn-dark dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Hello, '.$_SESSION['username'].'
                        </a>

                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="users/logout.php">Logout</a></li>
                        </ul>
                    </div>';
                        }
                        else{
//                            echo '<a class="btn btn-dark" href="users/login.php">Login / Signup</a>';
                            echo '<div class="dropdown dropstart dropdown-menu-dark" >
                        <a class="btn btn-dark dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="mx-auto navbar-nav navbar-nav-scroll">
                        <li class="nav-item mx-3 fw-bolder cst-font">
                            <a href="builder.php" class="nav-link text-white <?php echo ($page == "build" ? "cst-active" : "cst-hover") ?>">Builder</a>
                        </li>
                        <li class="nav-item mx-3 fw-bolder cst-font">
                            <a href="feed.php" class="nav-link text-white <?php echo ($page == "feed" ? "cst-active" : "cst-hover") ?>">Feed</a>
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

<!--<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown link
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>-->

</body>
</html>