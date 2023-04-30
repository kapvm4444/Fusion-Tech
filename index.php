<?php
$connect = mysqli_connect("localhost", "root", "", "fusiontech");
if ($_COOKIE['rem'] == 1){
    $username = $_COOKIE['username'];
    $password = $_COOKIE['password'];

    $qry = "select * from users where password = '" . $password . "' AND username = '" . $username . "'";
    $out = mysqli_query($connect, $qry);
    if (mysqli_num_rows($out) > 0) {
        while ($fetch = mysqli_fetch_assoc($out)) {
            session_start();
            $_SESSION['username'] = $_COOKIE['username'];
            $_SESSION['password'] = $_COOKIE['password'];
        }
    }
}
else{
    session_start();
}
$page = "index" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <link rel="icon" href="Res/favicon.png">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/Docs.css">
    <script src="bootstrap-5.3.0-alpha1-dist/js/bootstrap.bundle.min.js"></script>
    <title>Fusion Tech</title>
</head>
<body class="cst-bg-darker text-white">

    <!-- Header Nav Bar -->
    <?php include 'head-nav.php'?>

    <!--<div class="w-100">
        <div class="position-absolute top-50 start-50 text-akira">Fusion Tech</div>
        <img class="img-fluid" src="Res/image/Showcase/welcome.jpg" width="100%" height="" alt="welcome-image">
    </div>-->

    <div id="slider1" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#slider1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#slider1" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#slider1" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#slider1" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#slider1" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#slider1" data-bs-slide-to="5" aria-label="Slide 6"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Res/image/Showcase/Gallary%20item%20(1).jpg" class="d-block w-100" alt="img1">
                <div class="carousel-caption d-none d-md-block top-50">
                    <p class="text-qualy  my-0 fw-bold shadow-lg">Welcome to,</p>
                    <div class="display-1 text-akira shadow-lg fw-bold my-0">Fusion Tech</div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Res/image/Showcase/build.jpg" class="d-block w-100" alt="img2" >
                <div class="carousel-caption d-none d-md-block top-50">
                    <div class="display-1 text-akira shadow-lg fw-bold">Build Up</div>
                    <p class="text-qualy my-0 fw-bold shadow-lg">Your Own PC in a couple of minutes</p>
                    <a href="builder.php" class="text-decoration-none btn btn-danger mt-4">Build Now</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Res/image/Showcase/compare.jpg" class="d-block w-100" alt="img3">
                <div class="carousel-caption d-none d-md-block top-50">
                    <p class="text-qualy my-0 fw-bold shadow-lg">Compare Products</p>
                    <div class="display-1 text-akira shadow-lg fw-bold my-0">Side by Side</div>
                    <a href="compare.php" class="text-decoration-none btn btn-secondary mt-4">Compare Now</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Res/image/Showcase/chat.jpg" class="d-block w-100" alt="img3">
                <div class="carousel-caption d-none d-md-block top-50">
                    <div class="display-1 text-akira shadow-lg fw-bold my-0">Communicate</div>
                    <p class="text-qualy my-0 fw-bold shadow-lg">With People around the world to see their Reviews and Builds</p>
                    <a href="feed.php" class="text-decoration-none btn btn-light mt-4">Click here</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Res/image/Showcase/chip%20(1).jpg" class="d-block w-100" alt="img3">
                <div class="carousel-caption d-none d-md-block top-50">
                    <p class="text-qualy my-0 fw-bold shadow-lg">Need any</p>
                    <div class="display-1 text-akira shadow-lg fw-bold my-0">Assistance</div>
                    <p class="text-qualy my-0 fw-bold shadow-lg">Check this Guidance Videos</p>
                    <a href="guide.php" class="text-decoration-none btn btn-dark mt-4">Watch Now</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="Res/image/Showcase/buy.jpg" class="d-block w-100" alt="img3">
                <div class="carousel-caption d-none d-md-block top-50">
                    <p class="text-qualy mb-0 fw-bold shadow-lg">Buy The Products at the lowest price available in</p>
                    <div class="display-1 text-akira shadow-lg fw-bold my-0">Store</div>
                    <a href="shop.php" class="text-decoration-none btn btn-dark mt-4">Shop Now</a>
                </div>
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#slider1" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#slider1" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <?php include 'footer.php'?>

</body>
</html>