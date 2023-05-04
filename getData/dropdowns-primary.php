<?php

$connect = mysqli_connect("localhost", "root", "", "fusiontech");

//Displaying Cabinet Models
$CabModel = !empty($_POST['cabCompany']) ? $_POST['cabCompany'] : "";

if (!empty($CabModel)){
    $qry = "select * from cabinet where brand = '" . $CabModel . "'";
    $out = mysqli_query($connect, $qry);

    if(mysqli_num_rows($out) > 0){
        echo '<option value="">-- Please Select --</option>';
        while ($fetch = mysqli_fetch_assoc($out)){
            echo '<option value="'.$fetch['name'].'">'.$fetch['name'].' '.$fetch['size'].' | +'.$fetch['price']. '</option>' .
                '<script>cabinet = '.$fetch['price'].' </script>';
        }
    }
}

//Displaying CPU Brand
$CpuBrand = !empty($_POST['cpuBrand']) ? $_POST['cpuBrand'] : "";

if (!empty($CpuBrand)){
    $qry = "select * from cpu where brand = '" . $CpuBrand . "'";
    $out = mysqli_query($connect, $qry);

    if(mysqli_num_rows($out) > 0){
        echo '<option value="">-- Please Select --</option>';
        while ($fetch = mysqli_fetch_assoc($out)){
            echo '<option value="'.$fetch['model'].'">'.$fetch['model'].' '.$fetch['max_clock_speed'].'GHz '.$fetch['cores'].'Core '.$fetch['threads'].'Thread | +'.$fetch['price']. '</option>' .
                '<script>cpu = ' .$fetch['price'].' </script>';
        }
    }
}

//Displaying RAM Model
$CpuModel = !empty($_POST['cpuModel']) ? $_POST['cpuModel'] : "";
$RamType = "abc";

if (!empty($CpuModel)){
    $qry = "select ram from cpu where model = '" . $CpuModel . "'";
    $out = mysqli_query($connect, $qry);
    if(mysqli_num_rows($out) > 0){
        while ($fetch = mysqli_fetch_assoc($out)){
            $RamType = $fetch['ram'];

        }
    }

    $qry = "select distinct brand from ram;";
    $out = mysqli_query($connect, $qry);
    if(mysqli_num_rows($out) > 0){
        echo '<option value="">-- Please Select --</option>';
        while ($fetch = mysqli_fetch_assoc($out)){
            echo '<option value="'.$fetch['brand'].'">'.$fetch['brand'].'</option>';
        }
    }
}

//displaying RAM Models
$ramBrand = !empty($_POST['ramBrand']) ? $_POST['ramBrand'] : "";

if (!empty($ramBrand)){
    $CpuModel2 = !empty($_POST['cpuModel2']) ? $_POST['cpuModel2'] : "";
    $RamType = "abc";

    $qry = "select ram from cpu where model = '" . $CpuModel2 . "'";
    $out = mysqli_query($connect, $qry);
    if(mysqli_num_rows($out) > 0){
        while ($fetch = mysqli_fetch_assoc($out)){
            $RamType = $fetch['ram'];

        }
    }

    $qry = "SELECT * FROM `ram` where brand = '".$ramBrand."';";
    $out = mysqli_query($connect, $qry);

    if(mysqli_num_rows($out) > 0){
        echo '<option value="">-- Please Select --</option>';
        while ($fetch = mysqli_fetch_assoc($out)){
            echo '<option value="'.$fetch['name'].'">'.$fetch['name'].' '.$fetch['size'].'GB '.$fetch['type'].' '.$fetch['frequency'].'MHz | +'.$fetch['price']. '</option>' .
                '<script>ram = '.$fetch['price'].' </script>';
        }
    }
}

//displaying Motherboard Brands
$ramModel = !empty($_POST['ramModelMb']) ? $_POST['ramModelMb'] : "";

if (!empty($ramModel)){
    $CpuModelMb = !empty($_POST['cpuModelMb']) ? $_POST['cpuModelMb'] : "";
    $RamTypeMb = "";
    $CpuSocketMb = "";


    $qry = "select * from cpu where model = '" . $CpuModelMb . "'";
    $out = mysqli_query($connect, $qry);
    if(mysqli_num_rows($out) > 0){
        while ($fetch = mysqli_fetch_assoc($out)){
            $CpuSocketMb = $fetch['socket'];
        }
    }

    $qry = "select type from ram where name = '" . $ramModel . "'";
    $out = mysqli_query($connect, $qry);
    if(mysqli_num_rows($out) > 0){
        while ($fetch = mysqli_fetch_assoc($out)){
            $RamTypeMb = $fetch['type'];
        }
    }

    $qry = "SELECT distinct brand FROM `motherboard` where socket = '".$CpuSocketMb."';";
    $out = mysqli_query($connect, $qry);

    if(mysqli_num_rows($out) > 0){
        echo '<option value="">-- Please Select --</option>';
        while ($fetch = mysqli_fetch_assoc($out)){
            echo '<option value="'.$fetch['brand'].'">'.$fetch['brand'].'</option>';
        }
    }
}


//Displaying MotherBoard Model
$mbBrand = !empty($_POST['mbBrand']) ? $_POST['mbBrand'] : "";

if (!empty($mbBrand)){
    $ramModelMb2 = !empty($_POST['ramModelMb2']) ? $_POST['ramModelMb2'] : "";
    $cpuModelMb2 = !empty($_POST['cpuModelMb2']) ? $_POST['cpuModelMb2'] : "";
    $RamTypeMb2 = "";
    $CpuSocketMb2 = "";

    $qry = "select * from cpu where model = '" . $cpuModelMb2 . "'";
    $out = mysqli_query($connect, $qry);
    if(mysqli_num_rows($out) > 0){
        while ($fetch = mysqli_fetch_assoc($out)){
            $CpuSocketMb2 = $fetch['socket'];
        }
    }

    $qry = "select type from ram where name = '" . $ramModelMb2 . "'";
    $out = mysqli_query($connect, $qry);
    if(mysqli_num_rows($out) > 0){
        while ($fetch = mysqli_fetch_assoc($out)){
            $RamTypeMb2 = $fetch['type'];
        }
    }

    $qry = "SELECT * FROM `motherboard` where socket = '".$CpuSocketMb2."' AND brand = '".$mbBrand."';";
    $out = mysqli_query($connect, $qry);

    if(mysqli_num_rows($out) > 0){
        echo '<option value="">-- Please Select --</option>';
        while ($fetch = mysqli_fetch_assoc($out)){
            $wifi = "";
            if ($fetch['wlan_bt'] == 1){
                $wifi = "WITH WI-FI";
            }
            echo '<option value="'.$fetch['name'].'">'.$fetch['name'].' '.$wifi.' | +'.$fetch['price'].'</option>'.
            '<script>MB = '.$fetch['price'].' </script>';
        }
    }
}