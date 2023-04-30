<?php

$connect = mysqli_connect("localhost", "root", "", "fusiontech");

//GPU Brands
$coolerModel = !empty($_POST['coolerModel']) ? $_POST['coolerModel'] : "";
if (!empty($coolerModel)){
    $qry = "select distinct brand from smps";
    $out = mysqli_query($connect, $qry);

    if(mysqli_num_rows($out) > 0){
        echo '<option value="">-- Please Select --</option>';
        while ($fetch = mysqli_fetch_assoc($out)){
            echo '<option value="'.$fetch['brand'].'">'.$fetch['brand'].'</option>';
        }
    }
}
//.' | +'.$fetch['price']

//GPU Models
$smpsBrand = !empty($_POST['smpsBrand']) ? $_POST['smpsBrand'] : "";
if (!empty($smpsBrand)){
    $qry = "select * from smps where brand = '".$smpsBrand."'";
    $out = mysqli_query($connect, $qry);

    if(mysqli_num_rows($out) > 0){
        echo '<option value="">-- Please Select --</option>';
        while ($fetch = mysqli_fetch_assoc($out)){
            echo '<option value="'.$fetch['name'].'">'.$fetch['name'].' '.$fetch['watts'].'W | +'.$fetch['price']. '</option>' .
                '<script>smps = '.$fetch['price'].' </script>';
        }
    }
}
