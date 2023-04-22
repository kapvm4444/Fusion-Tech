<?php

$connect = mysqli_connect("localhost", "root", "", "fusiontech");
$CabModel = !empty($_POST['cabCompany']) ? $_POST['cabCompany'] : "";

if (!empty($CabModel)){
    $qry = "select * from cabinet where brand = '" . $CabModel . "'";
    $out = mysqli_query($connect, $qry);

    if(mysqli_num_rows($out) > 0){
        echo '<option value="">--Please Select--</option>';
        while ($fetch = mysqli_fetch_assoc($out)){
            echo '<option value="'.$fetch['name'].'">'.$fetch['name'].' | +'.$fetch['price'].'</option>';
        }
    }
}
else{
    echo '<option value="">Choose Proper Model</option>';
}
?>
