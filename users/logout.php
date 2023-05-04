<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['password']);
setcookie('username', "", -5000);
setcookie('password', "", -5000);
$_COOKIE['rem'] = 0;
session_unset();
session_destroy();
header("Location: ../index.php");
exit();
?>
