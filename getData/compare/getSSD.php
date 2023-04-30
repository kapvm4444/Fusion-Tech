<?php

$connect = mysqli_connect("localhost", "root", "", "fusiontech");

//Left Side SSD
$ssdL = !empty($_POST['ssdL']) ? $_POST['ssdL'] : "";
if ($ssdL == 'select'){

    echo '<script>'.
        'document.getElementById("ssdNameL").innerHTML = "-";'.
        'document.getElementById("ssdReadL").innerHTML = "-";'.
        'document.getElementById("ssdWriteL").innerHTML = "-";'.
        'document.getElementById("ssdTypeL").innerHTML = "-";'.
        'document.getElementById("ssdSizeL").innerHTML = "-";'.
        'document.getElementById("ssdPciVL").innerHTML = "-";'.
        'document.getElementById("ssdPriceL").innerHTML = "-";'.
        '</script>';

}
elseif (!empty($ssdL)){
    $qry = "select * from storage where name = '" . $ssdL . "';";
    $out = mysqli_query($connect, $qry);

    if(mysqli_num_rows($out) > 0){
        while ($fetch = mysqli_fetch_assoc($out)){

            $ssdSize = $fetch['capacity'];
            $ssdSize = ($ssdSize > 1023) ? (int)($ssdSize/1024).' TB' : (int)$ssdSize." GB" ;

            echo '<script>'.
                'document.getElementById("ssdNameL").innerHTML = "'.$fetch['name'].'";'.
                'document.getElementById("ssdReadL").innerHTML = "'.$fetch['read_speed'].' MB/s";'.
                'document.getElementById("ssdWriteL").innerHTML = "'.$fetch['write_speed'].' MB/s";'.
                'document.getElementById("ssdTypeL").innerHTML = "'.$fetch['interface'].'";'.
                'document.getElementById("ssdSizeL").innerHTML = "'.$ssdSize.'";'.
                'document.getElementById("ssdPciVL").innerHTML = "'.$fetch['pci'].'";'.
                'document.getElementById("ssdPriceL").innerHTML = "Rs. '.$fetch['price'].'";'.
                '</script>';

        }
    }
}

//Right Side SSD
$ssdR = !empty($_POST['ssdR']) ? $_POST['ssdR'] : "";
if ($ssdR == 'select'){

    echo '<script>'.
        'document.getElementById("ssdNameR").innerHTML = "-";'.
        'document.getElementById("ssdReadR").innerHTML = "-";'.
        'document.getElementById("ssdWriteR").innerHTML = "-";'.
        'document.getElementById("ssdTypeR").innerHTML = "-";'.
        'document.getElementById("ssdSizeR").innerHTML = "-";'.
        'document.getElementById("ssdPciVR").innerHTML = "-";'.
        'document.getElementById("ssdPriceR").innerHTML = "-";'.
        '</script>';

}
elseif (!empty($ssdR)){
    $qry = "select * from storage where name = '" . $ssdR . "';";
    $out = mysqli_query($connect, $qry);

    if(mysqli_num_rows($out) > 0){
        while ($fetch = mysqli_fetch_assoc($out)){

            $ssdSize = $fetch['capacity'];
            $ssdSize = ($ssdSize >  1023) ? (int)($ssdSize/1024).' TB' : (int)$ssdSize." GB" ;

            echo '<script>'.
                'document.getElementById("ssdNameR").innerHTML = "'.$fetch['name'].'";'.
                'document.getElementById("ssdReadR").innerHTML = "'.$fetch['read_speed'].' MB/s";'.
                'document.getElementById("ssdWriteR").innerHTML = "'.$fetch['write_speed'].' MB/s";'.
                'document.getElementById("ssdTypeR").innerHTML = "'.$fetch['interface'].'";'.
                'document.getElementById("ssdSizeR").innerHTML = "'.$ssdSize.'";'.
                'document.getElementById("ssdPciVR").innerHTML = "'.$fetch['pci'].'";'.
                'document.getElementById("ssdPriceR").innerHTML = "Rs. '.$fetch['price'].'";'.
                '</script>';

        }
    }
}
