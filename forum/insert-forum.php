<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "fusiontech");

$text = !empty($_POST['text']) ? $_POST['text'] : "";
$username = !empty($_POST['username']) ? $_POST['username'] : "";
if ($text != ""){
    $qry = "INSERT INTO forum (username, content) values ('$username', '$text'); ";
    $out = mysqli_query($connect, $qry);
}
$qry = "Select * from forum order by createtime desc";
$out = mysqli_query($connect, $qry);
if (mysqli_num_rows($out) > 0){
    while ($fetch = mysqli_fetch_assoc($out)){
        $align = 'float-start';
        $bg = "bg-dark";
        $exc = '<i class="fa fa fa-exclamation mx-1"></i>';
        $report = "Report";

        if ( $_SESSION['username'] == $fetch['username'] ){
            $align = 'float-end';
            $bg = 'cst-bg-chat';
            $report = "";
            $exc = "";
        }

        echo '<div class="'.$bg.' text-white p-4 m-4 rounded-4 w-75 chat-box '.$align.'">
        <form action="forum/report.php" method="post">
        <div class="clearfix">
            <div class="float-start" id="chat-user">
                <input type="button" value="'.$fetch["username"].'" class="btn p-0 m-0 '.$bg.' cst-text-light text-capitalize border-0 text-decoration-underline" name="user" disabled>
            </div>
            <div class="float-end fw-medium text-secondary text-decoration-underline" id="chat-user">
                '.$exc.'<input type="submit" value="'.$report.'" class="btn p-0 m-0 '.$bg.' text-secondary border-0 text-decoration-underline fw-medium" name="user-report">
            </div>
            </form>
        </div>

        <pre class="chat-text text-poppins mt-3 mb-2" id="chat-text">'.$fetch['content'].'</pre>

        <div class="text-secondary fw-light float-end">'.$fetch['createtime'].'</div>
    </div>';
    }
}

?>