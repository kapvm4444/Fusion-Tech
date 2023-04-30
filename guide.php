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
$page = "guide" ?>

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
<body class="cst-bg-darker text-white ">

<!-- Header Nav Bar -->
<?php include 'head-nav.php'?>

<div class="text-center w-100 p-5 display-2 cst-about cst-bg-dark">
    Guide
</div>


<div class="row m-5 p-5">
    <div class="col-sm-12 col-lg-6 text-center">
<!--        <iframe width="550" height="300" src="https://www.youtube.com/embed/v7MYOpFONCU" title="First Person View PC BUILD Guide! (POV)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>-->
        <a href="https://www.youtube.com/embed/v7MYOpFONCU" class="text-decoration-none text-white">
            <img class="img-fluid" src="Res/Guide_Thumbnails/Guide_Thumbnail%201.png" height="300" width="550" alt="Thumbnail image 1"></a>
    </div>
    <div class="col-sm-12 col-lg-6">
        <div class="display-6 text-start ms-4 mt-5 mt-lg-0">Want to build your own pc, don't worry here is a tutorial video for you</div>
    </div>
</div>



<div class="row m-5 p-5">
    <div class="col-sm-12 col-lg-6 text-center">
<!--        <iframe width="550" height="300" src="https://www.youtube.com/embed/c3dggnkaEs8" title="How to cable manage your PC like a PRO!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>-->
        <a href="https://www.youtube.com/embed/c3dggnkaEs8" class="text-decoration-none text-white">
            <img class="img-fluid" src="Res/Guide_Thumbnails/Guide_Thumbnail%202.png" height="300" width="550" alt="Thumbnail image 2"></a>
    </div>
    <div class="col-sm-12 col-lg-6">
        <div class="display-6 text-start ms-4 mt-5 mt-lg-0">Want to get rid of all cables!, Take a look at these</div>
    </div>
</div>


<div class="row m-5 p-5">
    <div class="col-sm-12 col-lg-6 text-center">
<!--        <iframe width="550" height="300" src="https://www.youtube.com/embed/T54GsfgmIXE" title="3 Tips for Keeping a PC Clean (Long-Term)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>-->
        <a href="https://www.youtube.com/embed/T54GsfgmIXE" class="text-decoration-none text-white">
            <img class="img-fluid" src="Res/Guide_Thumbnails/Guide_Thumbnail%203.png" height="300" width="550" alt="Thumbnail image 3"></a>
    </div>
    <div class="col-sm-12 col-lg-6">
        <div class="display-6 text-start ms-4 mt-5 mt-lg-0">Prevent dusting on your PC by these simple maintaining tips</div>
    </div>
</div>

<div class="row m-5 p-5">
    <div class="col-sm-12 col-lg-6 text-center">
<!--        <iframe width="550" height="300" src="https://www.youtube.com/embed/5ZnDESqJdyU" title="Beginners Guide to Watercooling! Easy to Understand Tutorial" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>-->
        <a href="https://www.youtube.com/embed/5ZnDESqJdyU" class="text-decoration-none text-white">
            <img class="img-fluid" src="Res/Guide_Thumbnails/Guide_Thumbnail%204.png" height="300" width="550" alt="Thumbnail image 4"></a>
    </div>
    <div class="col-sm-12 col-lg-6">
        <div class="display-6 text-start ms-4 mt-5 mt-lg-0">Are you installing water cooling in your PC, Here's a quick guide</div>
    </div>
</div>

<div class="row m-5 p-5">
    <div class="col-sm-12 col-lg-6 text-center">
<!--        <iframe width="550" height="300" src="https://www.youtube.com/embed/iwXm_rbJ2uA" title="Finally building a PC? Watch this first..." frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>-->
        <a href="https://www.youtube.com/embed/iwXm_rbJ2uA" class="text-decoration-none text-white">
            <img class="img-fluid" src="Res/Guide_Thumbnails/Guide_Thumbnail%205.png" height="300" width="550" alt="Thumbnail image 5"></a>
    </div>
    <div class="col-sm-12 col-lg-6">
        <div class="display-6 text-start ms-4 mt-5 mt-lg-0">Are You building a PC? Watch this first...</div>
    </div>
</div>
<?php include 'footer.php'?>

</body>
</html>
