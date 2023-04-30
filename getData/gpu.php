<?php

$connect = mysqli_connect("localhost", "root", "", "fusiontech");

//GPU Brands
$cabModel = !empty($_POST['cabModel']) ? $_POST['cabModel'] : "";
if (!empty($cabModel)){
    $qry = "select distinct brand from gpu";
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
$gpuBrand = !empty($_POST['gpuBrand']) ? $_POST['gpuBrand'] : "";
if (!empty($gpuBrand)){
    $qry = "select * from gpu where brand = '".$gpuBrand."'";
    $out = mysqli_query($connect, $qry);

    if(mysqli_num_rows($out) > 0){
        echo '<option value="">-- Please Select --</option>';
        while ($fetch = mysqli_fetch_assoc($out)){
            echo '<option value="'.$fetch['name'].'">'.$fetch['name'].' '.$fetch['vram'].'GB '.$fetch['type'].' | +'.$fetch['price'].'</option>'.
            '<script>gpu = '.$fetch['price'].' </script>';
        }
    }
}
