<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../Res/favicon.png">
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/Docs.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="bootstrap-5.3.0-alpha1-dist/js/bootstrap.bundle.min.js"></script>
    <title>Fusion Tech - Signup</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="bootstrap-5.3.0-alpha1-dist/js/validate.js"></script>
    <script>
        $(document).ready(function (){
            $(document).on('input', '#floatingInputUser', function (){
                var userText = $(this).val();
                if((/^$|\s+/).test(userText)){
                    let msg = "<span class='text-warning'>Username does not contain space</span>";
                    $('#user-text').html(msg);
                }
                else if (userText !== ""){
                    $.ajax({
                        type: 'post',
                        url: 'validations/validate.php',
                        data: {'userText': userText},
                        success: function (result){
                            $('#user-text').html(result);
                    }
                    })
                }
                else if (userText === ""){
                    let msg = "<span class='text-warning'>Username can't be empty</span>";
                    $('#user-text').html(msg);
                }
            })
        });


        //mail verification
        $(document).ready(function (){
            $(document).on('input', '#floatingInputMail', function (){
                var mailText = $(this).val();
                if (mailText !== ""){
                    $.ajax({
                        type: 'post',
                        url: 'validations/validate.php',
                        data: {'mailText': mailText},
                        success: function (result){
                            $('#email-text').html(result);
                        }
                    })
                }
            })
        });
    </script>
</head>
<body class="text-white" id="container">
<script id="val-scripts"></script>
<div class="col-12">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5 cst-bg-dark">
            <div class="card-body p-4 p-sm-5">
                <h5 class="card-title text-center mb-5 fw-bold fs-5"><div class="display-5 fw-bold">Sign Up</div></h5>
                <div class="text-center h4 text-danger mb-5" id="incorrect"></div>
                <form action="signup-create.php" method="post">
                    <div class="form-floating mb-3">
                        <input name="fname" type="text" class="text-white form-control cst-bg-dark border-0 border-bottom border-success border-3 rounded-0" id="floatingInputName" placeholder="Full Name" required>
                        <label class="fw-bold" for="floatingInputName"><i class="fa fa-user mx-1"></i>Full Name</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input name="uname" type="text" class="text-white form-control cst-bg-dark border-0 border-bottom border-success border-3 rounded-0" id="floatingInputUser" placeholder="Username" required>
                        <label class="fw-bold" for="floatingInputUser"><i class="fa fa-user mx-1"></i> Username</label>
                        <div class="text-secondary mt-2 fw-bold" id="user-text">We will use this as your login name (should be without any space)</div>
                    </div>

                    <div class="form-floating mb-3 mt-5">
                        <input name="mail" type="email" class="text-white form-control cst-bg-dark border-0 border-bottom border-success border-3 rounded-0" id="floatingInputMail" placeholder="name@example.com" required>
                        <label class="fw-bold" for="floatingInputMail"><i class="fa fa-envelope mx-1"></i> Email</label>
                        <div class="text-secondary mt-2 fw-bold" id="mail"><i class="mx-auto" id="mailValid"></i> Enter valid email address</div>
                        <div class="mt-2 fw-bold" id="email-text"></div>
                    </div>

                    <div class="form-floating mb-3 mt-5">
                        <input name="pass" type="password" class="text-white form-control cst-bg-dark border-0 border-bottom border-success border-3 rounded-0" maxlength="64" id="floatingPassword" placeholder="Password" required>
                        <label class="fw-bold" for="floatingPassword"><i class="fa fa-lock mx-1"></i> Password</label>
                    </div>
                    <div class="text-secondary mt-2 fw-bold" id="number">Must be 8-64 characters</div>

                    <hr class="my-4 mt-5">
                    <div class="d-grid">
                        <button type="submit" class="btn btn-outline-success text-uppercase fw-bold w-50 mx-auto" name="submit" id="submit-btn">Sign up</button>
                        <div class="text-secondary mx-auto mt-1" id="signupLabel">Enter all the details properly</div>
                    </div>
                    <hr class="my-4">

                    <div class="d-grid">
                        <a href="login.php" class="btn btn-outline-primary btn-login text-uppercase fw-bold w-50 mx-auto">Login</a>
                        <div class="text-secondary mx-auto mt-1" id="signupLabel">Already a user? Login now</div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
