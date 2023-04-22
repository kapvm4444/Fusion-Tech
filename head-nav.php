<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/Docs.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="bootstrap-5.3.0-alpha1-dist/js/bootstrap.bundle.min.js"></script>
    <title></title>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-black box">
            <div class="container-fluid">
                <button class="btn navbar-toggler d-block d-lg-none text-white float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span> </button>
                <a class="mx-auto navbar-brand text-white" href="index.php">
                    <img src="Res/header1.png" alt="Fusion Tech" width="170" height="100"/>
                </a>
            </div>
        </nav>
        <nav class="navbar bg-black text-white navbar-expand-lg sticky-top box">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="nav mx-auto navbar-nav-scroll">
                        <li class="nav-item mx-3 fw-bolder cst-font">
                            <a href="builder.php" class="nav-link text-white <?php echo ($page == "build" ? "cst-active" : "cst-hover") ?>">Builder</a>
                        </li>
                        <li class="nav-item mx-3 fw-bolder cst-font">
                            <a href="feed.php" class="nav-link text-white <?php echo ($page == "feed" ? "cst-active" : "cst-hover") ?>">Feed</a>
                        </li>
                        <li class="nav-item mx-3 fw-bolder cst-font">
                            <a href="compare.php" class="nav-link text-white <?php echo ($page == "compare" ? "cst-active" : "cst-hover") ?>">Compare</a>
                        </li>
                        <li class="nav-item mx-3 fw-bolder cst-font">
                            <a href="shop.php" class="nav-link text-white <?php echo ($page == "shop" ? "cst-active" : "cst-hover") ?>">Store</a>
                        </li>
                        <li class="nav-item mx-3 fw-bolder cst-font">
                            <a href="gallary.php#slider1" class="nav-link text-white <?php echo ($page == "gallery" ? "cst-active" : "cst-hover") ?>">Gallery</a>
                        </li>
                        <li class="nav-item mx-3 fw-bolder cst-font">
                            <a href="guide.php" class="nav-link text-white <?php echo ($page == "guide" ? "cst-active" : "cst-hover") ?>">Guide</a>
                        </li>
                        <li class="nav-item mx-3 fw-bolder cst-font">
                            <a href="support.php" class="nav-link text-white <?php echo ($page == "contact" ? "cst-active" : "cst-hover") ?>">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

</div>
</body>
</html>