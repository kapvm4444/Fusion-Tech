<?php

$page = "shop";
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <link rel="icon" href="Res/favicon.png">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/Docs.css">
    <script src="bootstrap-5.3.0-alpha1-dist/js/bootstrap.bundle.min.js"></script>
    <title>Fusion Tech - Store</title>
</head>
<body class="cst-bg-darker text-white">

<!-- Header Nav Bar -->
<?php include 'head-nav.php'?>

    <div class="text-center w-100 p-5 display-2 cst-about cst-bg-dark">
        Store
    </div>

<!--Card-->
<div class="card-group justify-content-center">
<?php
$qry = "select * from shop_cards order by category";
$result = mysqli_query($connect, $qry);
    if(mysqli_num_rows($result) > 0){
        while($data = mysqli_fetch_assoc($result)){
            echo "<a href='".$data['link']."' class='text-decoration-none text-white' target='_blank'>
            <div class='card cst-bg-dark m-5 d-inline-block shop-item' style='width: 20rem'>
                <img class='object-fit-scale card-img-top cst-bg-darker' src='".$data["img"]."' height='300' width='300'>
                <div class='card-body text-capitalize' style='height: 15rem'>
                    <h4 class='card-title'>
                        ".$data['brand']." ".$data["name"]."
                    </h4>
                    <p class='card-text'>".
                    $data['category']."<br>".
                        "<i class='fa fa-rupee'></i>".$data["price"]."
                    </p>
                </div>

            ";
            if ($data["sale"] == 1){
                echo "<span class='position-absolute size-20 cst-bg-razer translate-middle badge'>New!</span>";
            }

            echo "</div></a>";
        }
    }
?>
</div>

<?php include 'footer.php'?>

</body>
</html>