<?php
$connect = mysqli_connect("localhost", "root", "", "fusiontech");
require("docx/makefont/makefont.php");
require("docx/fpdf.php");

///Processors Brand names--------
$processor = $_POST['processor'];
$ram = $_POST['ram'];
$motherboard = $_POST['motherboard'];
$cabinet = $_POST['cabinet'];
$gpu = $_POST['graphic-card'];
$ssd = $_POST['ssd'];
$cooler = $_POST['cooler'];
$smps = $_POST['smps'];
$windows = $_POST['windows'];
///Models-----------------------
$p_model = $_POST['p_model'];
$ram_model = $_POST['ram_model'];
$mt_model = $_POST['mt_model'];
$c_model = $_POST['c_model'];
$gpu_model = $_POST['gpu_model'];
$ssd_model = $_POST['ssd_model'];
$cooler_model = $_POST['cooler_model'];
$smps_model = $_POST['smps_model'];
$win_edition = $_POST['win_edition'];
///Price variables----------------
$price_cpu = 0;
$price_ram = 0;
$price_mb = 0;
$price_cab = 0;
$price_gpu = 0;
$price_ssd = 0;
$price_cooler = 0;
$price_smps = 0;
$price_windows = 0;

//Fetch Prices
//Processor
$qry = "Select distinct * from cpu where model = '$p_model'";
$out = mysqli_query($connect, $qry);
if (mysqli_num_rows($out) > 0){
    while ($fetch = mysqli_fetch_assoc($out)){
        $price_cpu = $fetch['price'];
    }
}
//RAM
$qry = "Select distinct * from ram where name = '$ram_model'";
$out = mysqli_query($connect, $qry);
if (mysqli_num_rows($out) > 0){
    while ($fetch = mysqli_fetch_assoc($out)){
        $price_ram = $fetch['price'];
    }
}
//Motherboard
$qry = "Select distinct * from motherboard where name = '$mt_model'";
$out = mysqli_query($connect, $qry);
if (mysqli_num_rows($out) > 0){
    while ($fetch = mysqli_fetch_assoc($out)){
        $price_mb = $fetch['price'];
    }
}
//cabinet
$qry = "Select distinct * from cabinet where name = '$c_model'";
$out = mysqli_query($connect, $qry);
if (mysqli_num_rows($out) > 0){
    while ($fetch = mysqli_fetch_assoc($out)){
        $price_cab = $fetch['price'];
    }
}
//GPU
$qry = "Select distinct * from gpu where name = '$gpu_model'";
$out = mysqli_query($connect, $qry);
if (mysqli_num_rows($out) > 0){
    while ($fetch = mysqli_fetch_assoc($out)){
        $price_gpu = $fetch['price'];
    }
}
//SSD
$qry = "Select distinct * from storage where name = '$ssd_model'";
$out = mysqli_query($connect, $qry);
if (mysqli_num_rows($out) > 0){
    while ($fetch = mysqli_fetch_assoc($out)){
        $price_ssd = $fetch['price'];
    }
}
//Cooler
$qry = "Select distinct * from cooler where name = '$cooler_model'";
$out = mysqli_query($connect, $qry);
if (mysqli_num_rows($out) > 0){
    while ($fetch = mysqli_fetch_assoc($out)){
        $price_cooler = $fetch['price'];
    }
}
//SMPS
$qry = "Select distinct * from smps where name = '$smps_model'";
$out = mysqli_query($connect, $qry);
if (mysqli_num_rows($out) > 0){
    while ($fetch = mysqli_fetch_assoc($out)){
        $price_smps = $fetch['price'];
    }
}
//Windows
if ($windows == 'ten')
    $windows = "Windows 10";
elseif ($windows == 'eleven')
    $windows = "Windows 11";
//--------
if ($win_edition == 'pro') {
    $win_edition = "Professional";
    $price_windows = 16000;
}elseif ($win_edition == 'home') {
    $win_edition = "Home";
    $price_windows = 12000;
}

//SubTotal---------------------
$subtotal = $price_cpu + $price_ram + $price_mb + $price_cab + $price_gpu + $price_ssd + $price_cooler + $price_smps + $price_windows;

$pdf = new FPDF();
$pdf->AddPage();
$pdf->AddFont('Akira', '', 'Akira.php');
$pdf->AddFont('Bahn', '', 'bahnschrift.php');
$pdf->AddFont('Poppins', '', 'Poppins.php');
$pdf->AddFont('PoppinsBold', '', 'Poppins-Bold.php');

$pdf->Image('Res/FTblack.png', 7, 0, 50, 50);


$pdf->SetFont("Akira", "", 30);
$pdf->MultiCell(0,20, "Fusion Tech", 'LRT1','R');
$pdf->SetFont("bahn", "", 20);
$pdf->MultiCell(0,0, "Computer Hardware hub", 'LR1','R');
$pdf->MultiCell(0,20, "", 'LRB1','R');

$pdf->SetFont("PoppinsBold", "", 15);
$pdf->Cell(0,20, "Custom PC configuration Estimation", 1,1,"C");

$pdf->Cell(63, 13, "Category", 1,0,"C");
$pdf->Cell(63, 13, "Component", 1,0,"C");
$pdf->Cell(64, 13, "Price", 1,1,"C");

$pdf->SetFont("Poppins", "", 15);
//processor
$pdf->Cell(63, 10, "Processor", 1,0);
$pdf->Cell(63, 10, $processor, 1,0);
$pdf->Cell(64, 10, "", 'LR1',1);

$pdf->Cell(63, 10, "Processor Model", 1,0);
$pdf->Cell(63, 10, $p_model, 1,0);
$pdf->Cell(64, 10, $price_cpu, 'LRB1',1, "L");

//RAM
$pdf->Cell(63, 10, "RAM", 1,0);
$pdf->Cell(63, 10, $ram, 1,0);
$pdf->Cell(64, 10, "", 'LR1',1);

$pdf->Cell(63, 10, "RAM Model", 1,0);
$pdf->Cell(63, 10, $ram_model, 1,0);
$pdf->Cell(64, 10, $price_ram, 'LRB1',1, "L");

//Motherboard
$pdf->Cell(63, 10, "Motherboard", 1,0);
$pdf->Cell(63, 10, $motherboard, 1,0);
$pdf->Cell(64, 10, "", 'LR1',1);

$pdf->Cell(63, 10, "Motherboard Model", 1,0);
$pdf->Cell(63, 10, $mt_model, 1,0);
$pdf->Cell(64, 10, $price_mb, 'LRB1',1, "L");

//cabinet
$pdf->Cell(63, 10, "Cabinet", 1,0);
$pdf->Cell(63, 10, $cabinet, 1,0);
$pdf->Cell(64, 10, "", 'LR1',1);

$pdf->Cell(63, 10, "Cabinet Model", 1,0);
$pdf->Cell(63, 10, $c_model, 1,0);
$pdf->Cell(64, 10, $price_cab, 'LRB1',1, "L");

//Graphics
$pdf->Cell(63, 10, "Graphic Card", 1,0);
$pdf->Cell(63, 10, $gpu, 1,0);
$pdf->Cell(64, 10, "", 'LR1',1);

$pdf->Cell(63, 10, "Graphic Card Model", 1,0);
$pdf->Cell(63, 10, $gpu_model, 1,0);
$pdf->Cell(64, 10, $price_gpu, 'LRB1',1, "L");

//SSD
$pdf->Cell(63, 10, "SSD", 1,0);
$pdf->Cell(63, 10, $ssd, 1,0);
$pdf->Cell(64, 10, "", 'LR1',1);

$pdf->Cell(63, 10, "SSD Model", 1,0);
$pdf->Cell(63, 10, $ssd_model, 1,0);
$pdf->Cell(64, 10, $price_ssd, 'LRB1',1, "L");

//Cooler
$pdf->Cell(63, 10, "Cooler", 1,0);
$pdf->Cell(63, 10, $cooler, 1,0);
$pdf->Cell(64, 10, "", 'LR1',1);

$pdf->Cell(63, 10, "Cooler Model", 1,0);
$pdf->Cell(63, 10, $cooler_model, 1,0);
$pdf->Cell(64, 10, $price_cooler, 'LRB1',1, "L");

//SMPS
$pdf->Cell(63, 10, "SMPS", 1,0);
$pdf->Cell(63, 10, $smps, 1,0);
$pdf->Cell(64, 10, "", 'LR1',1);

$pdf->Cell(63, 10, "SMPS Model", 1,0);
$pdf->Cell(63, 10, $smps_model, 1,0);
$pdf->Cell(64, 10, $price_smps, 'LRB1',1, "L");

//Windows
$pdf->Cell(63, 10, "Windows", 1,0);
$pdf->Cell(63, 10, $windows, 1,0);
$pdf->Cell(64, 10, "", 'LR1',1);

$pdf->Cell(63, 10, "Windows Edition", 1,0);
$pdf->Cell(63, 10, $win_edition, 1,0);
$pdf->Cell(64, 10, $price_windows, 'LRB1',1, "L");

//total
$pdf->SetFont("PoppinsBold", "", 15);
$pdf->Cell(126, 10, "Sub Total", 1,0);
$pdf->Cell(64, 10, $subtotal." INR", 1,1);


$pdf->Output('D');
$pdf->Output('');
?>