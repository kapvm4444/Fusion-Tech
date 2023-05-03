<?php

$connect = mysqli_connect("localhost", "root", "", "fusiontech");
$username = !empty($_POST['user-name']) ? $_POST['user-name'] : "";

if (!empty($username)){
    $qry = "UPDATE users SET report_count = report_count + 1 where username = '$username';";
    $out = mysqli_query($connect, $qry);
}

?>