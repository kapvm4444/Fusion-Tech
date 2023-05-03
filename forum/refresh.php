<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "fusiontech");
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
