<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../Res/favicon.png">
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/Docs.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="bootstrap-5.3.0-alpha1-dist/js/bootstrap.bundle.min.js"></script>
    <title>Fusion Tech - Login</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body class="text-white" id="container">

    <div class="col-12">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card border-0 shadow rounded-3 my-5 cst-bg-dark">
                <div class="card-body p-4 p-sm-5">
                    <h5 class="card-title text-center mb-5 fw-bold fs-5"><div class="display-5 fw-bold">Sign In</div></h5>
                    <div class="text-center h4 text-danger mb-5" id="incorrect"></div>
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <div class="form-floating mb-3">
                            <input type="text" class="text-white form-control cst-bg-dark border-0 border-bottom border-success border-3 rounded-0" id="floatingInput" placeholder="name@example.com" name="uname">
                            <label class="fw-bold" for="floatingInput"><i class="fa fa-user mx-1"></i> Username</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="text-white form-control cst-bg-dark border-0 border-bottom border-success border-3 rounded-0" id="floatingPassword" placeholder="Password" name="pass">
                            <label class="fw-bold" for="floatingPassword"><i class="fa fa-lock mx-1"></i> Password</label>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck" name="remember">
                                    <label class="form-check-label" for="rememberPasswordCheck">
                                        Remember me
                                    </label>
                                </div>
                            </div>
                            <div class="col-6 text-end">
                                <a href="#" class="text-success text-decoration-none">Forgot Password?</a>
                            </div>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-outline-primary btn-login text-uppercase fw-bold" name="submit">Sign in</button>
                        </div>
                    </form>
                    <hr class="my-4">
                    <div class="d-grid">
                        <a href="signup.php" class="btn btn-outline-success btn-login text-uppercase fw-bold w-50 mx-auto">Sign up</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
$connect = mysqli_connect("localhost", "root", "", "fusiontech");
if (isset($_POST['submit'])) {
    if (isset($_POST['uname']) && isset($_POST['pass'])) {
        $username = $_POST['uname'];
        $password = $_POST['pass'];
        $remember = 0;
        if (!empty($_POST['remember'])){
            $remember = 1;
        }

        $qry = "select * from users where password = '" . $password . "' AND username = '" . $username . "'";
        $out = mysqli_query($connect, $qry);
        if (mysqli_num_rows($out) > 0) {
            while ($fetch = mysqli_fetch_assoc($out)) {

                setcookie('username', $username, time() + (60 * 60 * 24 * 30 * 12 * 10), "/");
                setcookie('password', $password, time() + (60 * 60 * 24 * 30 * 12 * 10), "/");
                setcookie('rem', $remember, time() + (60 * 60 * 24 * 30 * 12 * 10), "/");

                session_start();
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                $_COOKIE['username'] = $username;
                $_COOKIE['password'] = $password;
                header("Location: ../index.php");
                exit;
            }
        } else {
            echo '<script>' .
                'document.getElementById("incorrect").innerHTML = "Username or Password might be incorrect!"' .
                '</script>';
        }
    }
}
?>
</body>
</html>
