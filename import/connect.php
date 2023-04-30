<?php
session_start();
$_SESSION['username'] = $_COOKIE['username'];
$_SESSION['password'] = $_COOKIE['password'];
$host = "localhost";
$user = "root";
$pass = "";
$db = "fusiontech";
$connect = mysqli_connect($host, $user, $pass, $db);
?>

