<?php

$connect = mysqli_connect("localhost", "root", "", "fusiontech");

$quary = "select distinct brand from cabinet";
$exec = mysqli_query($connect, $quary);
if(mysqli_num_rows($exec) > 0){
    echo '<option value="">-- Please Select --</option>';
    while($data = mysqli_fetch_assoc($exec)){
        echo '<option value="'.$data['brand'].'">'.$data['brand'].'</option>';
    }
}
