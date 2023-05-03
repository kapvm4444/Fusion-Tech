<?php
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
$page = "contact" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <link rel="icon" href="Res/favicon.png">
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/Docs.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="bootstrap-5.3.0-alpha1-dist/js/bootstrap.bundle.min.js"></script>
    <title>Fusion Tech - Support</title>
</head>
<body class="bg-black text-white">

    <!-- Header Nav Bar -->
    <?php include 'head-nav.php'?>

    <div class="text-center w-100 p-5 display-2 cst-about cst-bg-dark">
        Contact Us
    </div>

    <div class="row m-5">
        <div class="col p-4">
<!--            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.617359077704!2d-73.9901490674254!3d40.74844447721131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a9b3117469%3A0xd134e199a405a163!2sEmpire%20State%20Building!5e0!3m2!1sen!2sin!4v1678363156330!5m2!1sen!2sin" width="800" height="800" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3015.9437119498966!2d70.7877936582018!3d22.29023863010531!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959ca181888778f%3A0xe8a42bf3739bb13f!2sComputer%20Department(AVPTI)!5e0!3m2!1sen!2sin!4v1682930256018!5m2!1sen!2sin" width="800" height="800" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col p-4">
            <div class="display-4 mb-5">Where Are We?</div>
            <div class="h6 fw-light"><span><i class="fa fa-map-marker me-3"></i></span>Computer Department, AVPTI, Rajkot, Gujarat, India</div>
            <div class="h6 fw-light"><span><i class="fa fa-phone me-3"></i></span>0123-123456, 0123-789456 (From 10AM - 10PM) (MON - SAT)</div>
            <div class="h6 fw-light"><span><i class="fa fa-envelope me-3"></i></span>info@fusiontech.com</div>


            <!--Email-->
            <div class="cst-bg-dark p-5 rounded-4 my-5">
                <div class="display-6 cst-text-light text-center mb-5">
                    Do you have any question?<br>Do not hesitate to contact us directly
                </div>
                <div class="cst-bg-dark border-0">
                    <div class="row">
                        <div class="col-6">
                            <input type="text" id="name" placeholder="Your Name" class="w-100 border-0 border-bottom border-success border-3 form-control px-3 d-inline-block">
                        </div>
                        <div class="col-6">
                            <input type="text" id="mail" placeholder="Your Email" class="w-100 border-0 border-bottom border-success border-3 form-control px-3 d-inline-block">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="text" id="subject" placeholder="Your Subject" class="w-100 border-0 border-bottom border-success border-3 form-control px-3 d-inline-block mt-4">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <textarea id="details" rows="5" class="w-100 form-control mt-4 border-0 border-bottom border-success border-3 d-block" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="row text-center justify-content-center mt-4">
                        <button type="submit" class="form-control btn btn-success rounded-4" id="submit" style="width: 120px">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('submit').onclick = function(){
            var name = document.getElementById('name').value;
            var subject = document.getElementById('subject').value;
            var details = document.getElementById('details').value;
            alert(name);

            if(name !== '' && subject !== '' && details !== '')
                var link = "mailto:kapvm4444@gmail.com?subject="+subject+"&body=Name:%20"+name+"%0A%0A"+details;
            else
                link = "mailto:kapvm4444@gmail.com"

            //window.open(link);
            window.location = link;

        }
    </script>

    <?php include 'footer.php' ?>
</body>
</html>