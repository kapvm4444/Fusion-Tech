<?php $page = "feed" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <link rel="icon" href="Res/favicon.png">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/Docs.css">
    <script src="bootstrap-5.3.0-alpha1-dist/js/bootstrap.bundle.min.js"></script>
    <title>Fusion Tech</title>
</head>
<body class="cst-bg-darker text-white" style="background: url('Res/image/feed.jpg') repeat;
">

<!-- Header Nav Bar -->
<?php include 'head-nav.php'?>

<div class="p-4 m-0 position-fixed bottom-0 end-0 start-0 row w-100 cst-bg-dark">
    <div class="col-11">
        <input placeholder="Message" type="text" class="form-control w-100 rounded-pill border-0 ps-4 chat">
    </div>
    <div class="col-1">
        <button class="form-control cst-bg-razer fw-bolder text-white border-0 rounded-pill py-2 px-3"><i class="fa fa-send"></i> Send</button>
    </div>
</div>


</body>
</html>