<?php

$connect = mysqli_connect("localhost", "root", "", "fusiontech");

//Left Side CPU
$gpuL = !empty($_POST['gpuL']) ? $_POST['gpuL'] : "";
if ($gpuL == 'select'){

    echo '<script>'.
        'document.getElementById("gpuNameL").innerHTML = "-";'.
        'document.getElementById("gpuClockL").innerHTML = "-";'.
        'document.getElementById("gpuMemL").innerHTML = "-";'.
        'document.getElementById("gpuTypeL").innerHTML = "-";'.
        'document.getElementById("gpuPriceL").innerHTML = "-";'.
        '</script>';

}
elseif (!empty($gpuL)){
    $qry = "select * from gpu where name = '" . $gpuL . "';";
    $out = mysqli_query($connect, $qry);

    if(mysqli_num_rows($out) > 0){
        while ($fetch = mysqli_fetch_assoc($out)){

            echo '<script>'.
                'document.getElementById("gpuNameL").innerHTML = "'.$fetch['name'].'";'.
                'document.getElementById("gpuClockL").innerHTML = "'.$fetch['max_clock_speed'].' GHz";'.
                'document.getElementById("gpuMemL").innerHTML = "'.$fetch['vram'].' GB";'.
                'document.getElementById("gpuTypeL").innerHTML = "'.$fetch['type'].'";'.
                'document.getElementById("gpuPriceL").innerHTML = "Rs. '.$fetch['price'].'";'.
                '</script>';

        }
    }
}

//Right Side GPU
$gpuR = !empty($_POST['gpuR']) ? $_POST['gpuR'] : "";
if ($gpuR == 'select'){

    echo '<script>'.
        'document.getElementById("gpuNameR").innerHTML = "-";'.
        'document.getElementById("gpuClockR").innerHTML = "-";'.
        'document.getElementById("gpuMemR").innerHTML = "-";'.
        'document.getElementById("gpuTypeR").innerHTML = "-";'.
        'document.getElementById("gpuPriceR").innerHTML = "-";'.
        '</script>';

}
elseif (!empty($gpuR)){
    $qry = "select * from gpu where name = '" . $gpuR . "';";
    $out = mysqli_query($connect, $qry);

    if(mysqli_num_rows($out) > 0){
        while ($fetch = mysqli_fetch_assoc($out)){

            echo '<script>'.
                'document.getElementById("gpuNameR").innerHTML = "'.$fetch['name'].'";'.
                'document.getElementById("gpuClockR").innerHTML = "'.$fetch['max_clock_speed'].' GHz";'.
                'document.getElementById("gpuMemR").innerHTML = "'.$fetch['vram'].' GB";'.
                'document.getElementById("gpuTypeR").innerHTML = "'.$fetch['type'].'";'.
                'document.getElementById("gpuPriceR").innerHTML = "Rs. '.$fetch['price'].'";'.
                '</script>';

        }
    }
}

