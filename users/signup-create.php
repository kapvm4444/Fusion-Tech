<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "fusiontech");
$fullname = $_POST['fname'];
$username = $_POST['uname'];
$email = $_POST['mail'];
$password = $_POST['pass'];

$qry = "insert into users (full_name, username, email, password) values ('$fullname', '$username', '$email', '$password');";
$out = mysqli_query($connect, $qry);

setcookie('username', $username, time() + (60 * 60 * 24 * 30 * 12 * 10));
setcookie('password', $password, time() + (60 * 60 * 24 * 30 * 12 * 10));

$_SESSION['username'] = $username;
$_SESSION['password'] = $password;
$_COOKIE['username'] = $username;
$_COOKIE['password'] = $password;

header("Location: http://localhost/Fusion%20Tech/index.php");
exit();

?>

