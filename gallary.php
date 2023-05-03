<?php
$connect = mysqli_connect("localhost", "root", "", "fusiontech");
if (isset($_COOKIE['rem'] ) && $_COOKIE['rem'] == 1){
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
$page = "gallery" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <script src="bootstrap-5.3.0-alpha1-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" href="Res/favicon.png">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/Docs.css">
    <title>Fusion Tech - Gallary</title>
</head>
<body class="cst-bg-darker text-white">

<!-- Header Nav Bar -->
<?php include 'head-nav.php'?>

<div class="text-center w-100 p-5 display-2 cst-about cst-bg-dark">
    Gallery
</div>

<div id="slider1" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" >
            <img src="Res/image/slider1.1.jpg" class="d-block w-100" alt="img1">
        </div>
    <div class="carousel-item">
            <img src="Res/image/slider1.2.jpg" class="d-block w-100" alt="img2" >
        </div>
    <div class="carousel-item">
            <img src="Res/image/slider1.3.jpg" class="d-block w-100" alt="img3">
        </div>
    </div>
</div>

<div class="row p-0" id="slider2">
    <a href="Res/image/gallary/galitem%20(1).jpg" target="_blank" class="text-decoration-none col-sm-12 col-md-6 col-lg-3 p-0 text-center overflow-hidden">
        <img src="Res/image/gallary/galitem%20(1).jpg" class="img-fluid gal-item" height="500" width="500" alt="img-1">
    </a>
    <a href="Res/image/gallary/galitem%20(2).jpg" target="_blank" class="text-decoration-none col-sm-12 col-md-6 col-lg-3 p-0 text-center overflow-hidden">
        <img src="Res/image/gallary/galitem%20(2).jpg" class="img-fluid gal-item" height="500" width="500" alt="img-2">
    </a>
    <a href="Res/image/gallary/galitem%20(3).jpg" target="_blank" class="text-decoration-none col-sm-12 col-md-6 col-lg-3 p-0 text-center overflow-hidden">
        <img src="Res/image/gallary/galitem%20(3).jpg" class="img-fluid gal-item" height="500" width="500" alt="img-3">
    </a>
    <a href="Res/image/gallary/galitem%20(4).jpg" target="_blank" class="text-decoration-none col-sm-12 col-md-6 col-lg-3 p-0 text-center overflow-hidden">
        <img src="Res/image/gallary/galitem%20(4).jpg" class="img-fluid gal-item" height="500" width="500" alt="img-4">
    </a>
</div>

<div class="row" id="slider2">
    <a href="Res/image/gallary/galitem%20(5).jpg" target="_blank" class="text-decoration-none col-sm-12 col-md-6 col-lg-3 p-0 text-center overflow-hidden">
        <img src="Res/image/gallary/galitem%20(5).jpg" class="img-fluid gal-item" height="500" width="500" alt="img-5">
    </a>
    <a href="Res/image/gallary/galitem%20(6).jpg" target="_blank" class="text-decoration-none col-sm-12 col-md-6 col-lg-3 p-0 text-center overflow-hidden">
        <img src="Res/image/gallary/galitem%20(6).jpg" class="img-fluid gal-item" height="500" width="500" alt="img-6">
    </a>
    <a href="Res/image/gallary/galitem%20(7).jpg" target="_blank" class="text-decoration-none col-sm-12 col-md-6 col-lg-3 p-0 text-center overflow-hidden">
        <img src="Res/image/gallary/galitem%20(7).jpg" class="img-fluid gal-item" height="500" width="500" alt="img-7">
    </a>
    <a href="Res/image/gallary/galitem%20(16).jpg" target="_blank" class="text-decoration-none col-sm-12 col-md-6 col-lg-3 p-0 text-center overflow-hidden">
        <img src="Res/image/gallary/galitem%20(16).jpg" class="img-fluid gal-item" height="500" width="500" alt="img-7">
    </a>
</div>

<div class="row" id="slider2">
    <a href="Res/image/gallary/galitem%20(8).jpg" target="_blank" class="text-decoration-none col-sm-12 col-md-6 col-lg-3 p-0 text-center overflow-hidden">
        <img src="Res/image/gallary/galitem%20(8).jpg" class="img-fluid gal-item" height="500" width="500" alt="img-8">
    </a>
    <a href="Res/image/gallary/galitem%20(9).jpg" target="_blank" class="text-decoration-none col-sm-12 col-md-6 col-lg-3 p-0 text-center overflow-hidden">
        <img src="Res/image/gallary/galitem%20(9).jpg" class="img-fluid gal-item" height="500" width="500" alt="img-9">
    </a>
    <a href="Res/image/gallary/galitem%20(10).jpg" target="_blank" class="text-decoration-none col-sm-12 col-md-6 col-lg-3 p-0 text-center overflow-hidden">
        <img src="Res/image/gallary/galitem%20(10).jpg" class="img-fluid gal-item" height="500" width="500" alt="img-10">
    </a>
    <a href="Res/image/gallary/galitem%20(11).jpg" target="_blank" class="text-decoration-none col-sm-12 col-md-6 col-lg-3 p-0 text-center overflow-hidden">
        <img src="Res/image/gallary/galitem%20(11).jpg" class="img-fluid gal-item" height="500" width="500" alt="img-11">
    </a>
</div>

<div class="row" id="slider2">
    <a href="Res/image/gallary/galitem%20(12).jpg" target="_blank" class="text-decoration-none col-sm-12 col-md-6 col-lg-3 p-0 text-center overflow-hidden">
        <img src="Res/image/gallary/galitem%20(12).jpg" class="img-fluid gal-item" height="500" width="500" alt="img-12">
    </a>
    <a href="Res/image/gallary/galitem%20(13).jpg" target="_blank" class="text-decoration-none col-sm-12 col-md-6 col-lg-3 p-0 text-center overflow-hidden">
        <img src="Res/image/gallary/galitem%20(13).jpg" class="img-fluid gal-item" height="500" width="500" alt="img-13">
    </a>
    <a href="Res/image/gallary/galitem%20(14).jpg" target="_blank" class="text-decoration-none col-sm-12 col-md-6 col-lg-3 p-0 text-center overflow-hidden">
        <img src="Res/image/gallary/galitem%20(14).jpg" class="img-fluid gal-item" height="500" width="500" alt="img-14">
    </a>
    <a href="Res/image/gallary/galitem%20(15).jpg" target="_blank" class="text-decoration-none col-sm-12 col-md-6 col-lg-3 p-0 text-center overflow-hidden">
        <img src="Res/image/gallary/galitem%20(15).jpg" class="img-fluid gal-item" height="500" width="500" alt="img-7">
    </a>
</div>


<?php include 'footer.php'?>


<script>

</script>
</body>
</html>
