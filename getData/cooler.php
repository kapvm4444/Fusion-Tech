<?php

$connect = mysqli_connect("localhost", "root", "", "fusiontech");

//GPU Brands
$ssdModel = !empty($_POST['ssdModel']) ? $_POST['ssdModel'] : "";
if (!empty($ssdModel)){
    $qry = "select distinct brand from cooler";
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
$coolerBrand = !empty($_POST['coolerBrand']) ? $_POST['coolerBrand'] : "";
if (!empty($coolerBrand)){
    $qry = "select * from cooler where brand = '".$coolerBrand."'";
    $out = mysqli_query($connect, $qry);

    if(mysqli_num_rows($out) > 0){
        echo '<option value="">-- Please Select --</option>';
        while ($fetch = mysqli_fetch_assoc($out)){
            echo '<option value="'.$fetch['name'].'">'.$fetch['name'].' '.$fetch['type'].' With '.$fetch['fan'].' Fans | +'.$fetch['price'].'</option>'.
            '<script>cooler = '.$fetch['price'].' </script>';
        }
    }
}
