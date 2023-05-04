<?php

$connect = mysqli_connect("localhost", "root", "", "fusiontech");

//Left Side CPU
$cpuL = !empty($_POST['cpuL']) ? $_POST['cpuL'] : "";
if ($cpuL == 'select'){

    echo '<script>'.
        'document.getElementById("cpuNameL").innerHTML = "-";'.
        'document.getElementById("cpuClockL").innerHTML = "-";'.
        'document.getElementById("cpuCoreL").innerHTML = "-";'.
        'document.getElementById("cpuThreadL").innerHTML = "-";'.
        'document.getElementById("cpuGpuL").innerHTML = "-";'.
        'document.getElementById("cpuGpuMemL").innerHTML = "-";'.
        'document.getElementById("cpuSocketL").innerHTML = "-";'.
        'document.getElementById("cpuRamL").innerHTML = "-";'.
        'document.getElementById("cpuPriceL").innerHTML = "-";'.
        '</script>';

}
elseif (!empty($cpuL)){
    $qry = "select * from cpu where model = '" . $cpuL . "';";
    $out = mysqli_query($connect, $qry);

    if(mysqli_num_rows($out) > 0){
        while ($fetch = mysqli_fetch_assoc($out)){

            $cpuGpuName = ($fetch['gpu'] != "") ? $fetch['gpu'] : "N/A" ;

            echo '<script>'.
                'document.getElementById("cpuNameL").innerHTML = "'.$fetch['model'].'";'.
                'document.getElementById("cpuClockL").innerHTML = "'.$fetch['max_clock_speed'].' GHz";'.
                'document.getElementById("cpuCoreL").innerHTML = "'.$fetch['cores'].'";'.
                'document.getElementById("cpuThreadL").innerHTML = "'.$fetch['threads'].'";'.
                'document.getElementById("cpuGpuL").innerHTML = "'.$cpuGpuName.'";'.
                'document.getElementById("cpuSocketL").innerHTML = "'.$fetch['socket'].'";'.
                'document.getElementById("cpuRamL").innerHTML = "'.$fetch['ram'].'";'.
                'document.getElementById("cpuPriceL").innerHTML = "Rs. '.$fetch['price'].'";'.
                '</script>';

        }
    }
}

//Right Side CPU
$cpuR = !empty($_POST['cpuR']) ? $_POST['cpuR'] : "";
if ($cpuR == 'select'){

    echo '<script>'.
        'document.getElementById("cpuNameR").innerHTML = "-";'.
        'document.getElementById("cpuClockR").innerHTML = "-";'.
        'document.getElementById("cpuCoreR").innerHTML = "-";'.
        'document.getElementById("cpuThreadR").innerHTML = "-";'.
        'document.getElementById("cpuGpuR").innerHTML = "-";'.
        'document.getElementById("cpuSocketR").innerHTML = "-";'.
        'document.getElementById("cpuRamR").innerHTML = "-";'.
        'document.getElementById("cpuPriceR").innerHTML = "-";'.
        '</script>';

}
elseif (!empty($cpuR)){
    $qry = "select * from cpu where model = '" . $cpuR . "';";
    $out = mysqli_query($connect, $qry);

    if(mysqli_num_rows($out) > 0){
        while ($fetch = mysqli_fetch_assoc($out)){

            $cpuGpuName = ($fetch['gpu'] != "") ? $fetch['gpu'] : "N/A" ;

            echo '<script>'.
                'document.getElementById("cpuNameR").innerHTML = "'.$fetch['model'].'";'.
                'document.getElementById("cpuClockR").innerHTML = "'.$fetch['max_clock_speed'].' GHz";'.
                'document.getElementById("cpuCoreR").innerHTML = "'.$fetch['cores'].'";'.
                'document.getElementById("cpuThreadR").innerHTML = "'.$fetch['threads'].'";'.
                'document.getElementById("cpuGpuR").innerHTML = "'.$cpuGpuName.'";'.
                'document.getElementById("cpuSocketR").innerHTML = "'.$fetch['socket'].'";'.
                'document.getElementById("cpuRamR").innerHTML = "'.$fetch['ram'].'";'.
                'document.getElementById("cpuPriceR").innerHTML = "Rs. '.$fetch['price'].'";'.
                '</script>';

        }
    }
}

?>