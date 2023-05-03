<?php
$page = "feed";


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

if (!isset($_SESSION['username'])){
    sleep(1);
    header("Location: http://localhost/Fusion%20Tech/users/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="Res/favicon.png">
    <script src="bootstrap-5.3.0-alpha1-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/Docs.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Fusion Tech - Forum</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <script>
        $(document).ready(function (){
            //Send Context to page----------------------------------------
            $('#send').attr('disabled', 'disabled');

            $('#send').click(function (){
                let text = $('#text-area').val();
                let username = "<?php echo $_SESSION['username'] ?>";
                if (text !== ""){
                    $.ajax({
                        type: 'post',
                        url: 'forum/insert-forum.php',
                        data: {'text':text, 'username':username},
                        success: function (result){
                            $('#chat-screen').html(result);
                        }
                    })
                    $('#text-area').val("");
                }

            })
            $('#text-area').keyup(function (){
                if ($('#text-area').val().length > 0){
                    $('#send').removeAttr('disabled');
                }else{
                    $('#send').attr('disabled', 'disabled');
                }
            })

        });

        //Report User
        //-----REPORT BUTTON-----------------------------------------------------------
        function Report(username){
            $.ajax({
                type: 'post',
                url: 'forum/report.php',
                data: {'user-name': username},
                success: function (){
                    alert("User : '" + username + "' is Reported Successfully");
                },
                error: function (){
                    alert("Oops! Somethign went wrong, Refresh the page and try again")
                }

            })
        }

        //Refresh The Fields------------------------------------------------------------
        setInterval(function () {
            $.ajax({
                type: 'post',
                url: 'forum/refresh.php',
                success: function (result){
                    $('#chat-screen').html(result);
                }
            })
        }, 500);

    </script>
    <script>
    </script>
</head>
<body class="cst-bg-darker text-black" style="background: url('Res/image/feed.jpg') repeat fixed;">

<!-- Header Nav Bar -->
<?php include 'head-nav.php'?>

<div class="w-100 text-black" id="chat-screen">
    <?php
    $qry = "Select * from forum order by createtime desc";
    $out = mysqli_query($connect, $qry);
    if (mysqli_num_rows($out) > 0){
        while ($fetch = mysqli_fetch_assoc($out)){
            $align = 'float-start';
            $bg = "bg-dark";
            $exc = '<i class="fa fa-exclamation mx-1"></i>';
            $report = "Report";

            if ( $_SESSION['username'] == $fetch['username'] ){
                $align = 'float-end';
                $bg = 'cst-bg-chat';
                $report = "";
                $exc = "";
            }

            echo '<div class="'.$bg.' text-white p-4 m-4 rounded-4 w-75 chat-box '.$align.'">
        <div class="clearfix">
            <div class="float-start" id="chat-user">
                <input type="button" value="'.$fetch["username"].'" class="btn p-0 m-0 '.$bg.' cst-text-light text-capitalize border-0 text-decoration-underline" name="user" disabled>
            </div>
            <div class="float-end fw-medium text-secondary text-decoration-underline" id="chat-user">
                '.$exc.'<input type="button" value="'.$report.'" class="btn p-0 m-0 '.$bg.' text-secondary float-end border-0 text-decoration-underline fw-medium" onclick="Report(\''.$fetch["username"].'\');" name="user-report">
            </div>
        </div>

        <pre class="chat-text text-poppins mt-3 mb-2" id="chat-text">'.$fetch['content'].'</pre>

        <div class="text-secondary fw-light float-end">'.$fetch['createtime'].'</div>
    </div>';
        }
    }
    ?>
</div>

<div class="m-5 cst-h upper">
</div>

<!--Message Box-->
<div class="p-4 m-0 position-fixed bottom-0 end-0 start-0 row w-100 cst-bg-dark">
    <div class="col-11">
        <textarea placeholder="Message" id="text-area" type="text" class="non-resize form-control w-100 rounded-3 border-0 ps-4 chat" required></textarea>
    </div>
    <div class="col-1 text-sm-start text-md-center">
        <button class="btn btn-success fw-bolder text-white border-0 rounded-pill py-sm-2 py-lg-3 px-3" id="send"><i class="fa fa-send"></i> Send</button>
    </div>
</div>
<script>
    function Report(username){
        $.ajax({
            type: 'post',
            url: 'forum/report.php',
            data: {'user-name': username},
            success: function (){
                alert("User : '" + username + "' is Reported Successfully");
            },
            error: function (){
                alert("Oops! Somethign went wrong, Refresh the page and try again")
            }

        })
    }
</script>
</body>
</html>