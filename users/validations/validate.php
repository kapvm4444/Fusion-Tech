<?php
$connect = mysqli_connect("localhost", "root", "", "fusiontech");

$username = !empty($_POST['userText']) ? $_POST['userText'] : "";
if (!empty($username)){
    $qry = "select username from users where username = '$username'";
    $out = $connect->query($qry);

    if ($out->num_rows > 0){
        echo "<span class='text-danger'>The Username already taken, try another</span>";
    }
    else{
        echo "<span class='text-primary'>The Username available</span>";
    }
}

$email = !empty($_POST['mailText']) ? $_POST['mailText'] : "";
if (!empty($email)){
    $qry = "select email from users where email = '$email'";
    $out = $connect->query($qry);

    if (mysqli_num_rows($out) > 0){
        echo "<span class='text-danger'>Email Address already in use, try another</span>";
        echo "<script>$('#submit-btn').attr('disabled', 'disabled');</script>";
    }
}
