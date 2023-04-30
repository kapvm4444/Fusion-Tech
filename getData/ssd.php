<?php

$connect = mysqli_connect("localhost", "root", "", "fusiontech");

//GPU Brands
$gpuModel = !empty($_POST['gpuModel']) ? $_POST['gpuModel'] : "";
if (!empty($gpuModel)){
    $qry = "select distinct brand from storage";
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
$ssdBrand = !empty($_POST['ssdBrand']) ? $_POST['ssdBrand'] : "";
if (!empty($ssdBrand)){
    $qry = "select * from storage where brand = '".$ssdBrand."'";
    $out = mysqli_query($connect, $qry);

    if(mysqli_num_rows($out) > 0){
        echo '<option value="">-- Please Select --</option>';
        while ($fetch = mysqli_fetch_assoc($out)){
            echo '<option value="'.$fetch['name'].'">'.$fetch['name'].' '.$fetch['interface'].' '.$fetch['hdd_type'].' '.$fetch['capacity'].'GB'.' | +'.$fetch['price'].'</option>'.
            '<script>ssd = '.$fetch['price'].' </script>';
        }
    }
}
