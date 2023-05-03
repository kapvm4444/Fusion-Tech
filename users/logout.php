<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['password']);
setcookie('username', "", -5000);
setcookie('password', "", -5000);
$_COOKIE['rem'] = 0;
session_unset();
session_destroy();
header("Location: http://localhost/Fusion%20Tech/index.php");
exit();
?>
