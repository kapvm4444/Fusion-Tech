<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="Res/favicon.png">
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/Docs.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="bootstrap-5.3.0-alpha1-dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
        <footer class="py-5 short cst-bg-dark border-top border-success border-2" id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="display-6 mb-3">About Fusion Tech</div>
                        <p class="mb-3 cst-text-razer">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna. Phasellus semper scelerisque purus, et semper nisl lacinia sit amet. Praesent venenatis turpis vitae purus semper, eget sagittis velit venenatis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos
                        <hr class="light">
                    </div>
                    <div class="col-md-3 col-md-offset-1 cst-text-razer">
                        <h5 class="short text-white">Contact Us</h5>
                        <span class="phone">123-456-7890</span>
                        <p class="short">International: (333) 123-4567</p>
                        <p class="short">Fax: (111) 123-1234</p>
                        <ul class="list-unstyled">
                            <li><a href="mailto:kapvm4444@gmail.com" class="text-decoration-none text-white"><i class="fa fa-envelope me-2 text-danger"></i>info@fusiontech.com</a></li>
                        </ul>
                        <div class="social-icons mb-4">
                            <a class="text-decoration-none text-info" href="https://www.twitter.com"> <i class="fa fa-twitter me-2"></i></a>
                            <a class="text-decoration-none text-primary" href="https://www.facebook.com"> <i class="fa fa-facebook mx-2"></i></a>
                            <a class="text-decoration-none text-instagram" href="https://www.instagram.com"> <i class="fa fa-instagram mx-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    <img src="Res/footer.png" width="191" height="46" class="m-2 ms-0"><br>
                    © <span id="Year"></span> All Rights reserved
                </div>
            </div>
        </footer>

        <script>
            document.getElementById("Year").innerHTML = new Date().getFullYear();
        </script>
</body>