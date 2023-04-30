<?php

$connect = mysqli_connect("localhost", "root", "", "fusiontech");

//Left Side RAM
$ramL = !empty($_POST['ramL']) ? $_POST['ramL'] : "";
if ($ramL == 'select'){

    echo '<script>'.
        'document.getElementById("ramNameL").innerHTML = "-";'.
        'document.getElementById("ramTypeL").innerHTML = "-";'.
        'document.getElementById("ramFrqL").innerHTML = "-";'.
        'document.getElementById("ramCapacityL").innerHTML = "-";'.
        'document.getElementById("ramRGBL").innerHTML = "-";'.
        'document.getElementById("ramPriceL").innerHTML = "-";'.
        '</script>';

}
elseif (!empty($ramL)){
    $qry = "select * from ram where name = '" . $ramL . "';";
    $out = mysqli_query($connect, $qry);

    if(mysqli_num_rows($out) > 0){
        while ($fetch = mysqli_fetch_assoc($out)){

            $rgb = ($fetch['rgb'] < 1) ? "N/A" : "Available" ;

            echo '<script>'.
                'document.getElementById("ramNameL").innerHTML = "'.$fetch['name'].'";'.
                'document.getElementById("ramTypeL").innerHTML = "'.$fetch['type'].'";'.
                'document.getElementById("ramFrqL").innerHTML = "'.$fetch['frequency'].' MHz";'.
                'document.getElementById("ramCapacityL").innerHTML = "'.$fetch['size'].' GB";'.
                'document.getElementById("ramRGBL").innerHTML = "'.$rgb.'";'.
                'document.getElementById("ramPriceL").innerHTML = "Rs. '.$fetch['price'].'";'.
                '</script>';

        }
    }
}

//Right Side RAM
$ramR = !empty($_POST['ramR']) ? $_POST['ramR'] : "";
if ($ramR == 'select'){

    echo '<script>'.
        'document.getElementById("ramNameR").innerHTML = "-";'.
        'document.getElementById("ramTypeR").innerHTML = "-";'.
        'document.getElementById("ramFrqR").innerHTML = "-";'.
        'document.getElementById("ramCapacityR").innerHTML = "-";'.
        'document.getElementById("ramRGBR").innerHTML = "-";'.
        'document.getElementById("ramPriceR").innerHTML = "-";'.
        '</script>';

}
elseif (!empty($ramR)){
    $qry = "select * from ram where name = '" . $ramR . "';";
    $out = mysqli_query($connect, $qry);

    if(mysqli_num_rows($out) > 0){
        while ($fetch = mysqli_fetch_assoc($out)){

            $rgb = ($fetch['rgb'] < 1) ? "N/A" : "Available" ;

            echo '<script>'.
                'document.getElementById("ramNameR").innerHTML = "'.$fetch['name'].'";'.
                'document.getElementById("ramTypeR").innerHTML = "'.$fetch['type'].'";'.
                'document.getElementById("ramFrqR").innerHTML = "'.$fetch['frequency'].' MHZ";'.
                'document.getElementById("ramCapacityR").innerHTML = "'.$fetch['size'].' GB";'.
                'document.getElementById("ramRGBR").innerHTML = "'.$rgb.'";'.
                'document.getElementById("ramPriceR").innerHTML = "Rs. '.$fetch['price'].'";'.
                '</script>';

        }
    }
}

