<?php
         // here instead of submit write the name of the submit button
        $processor = $_POST['processor'];  // here instead of processor write the of the variable which is placed in the processor section
        /*$ram = $_POST['ram'];
        $motherboard = $_POST['motherboard'];
        $cabinet = $_POST['cabinet'];
        $gpu = $_POST['graphic-card'];
        $ssd = $_POST['ssd'];
        $cooler = $_POST['cooler'];
        $smps = $_POST['smps'];
        $windows = $_POST['windows'];*/
        $p_model = $_POST['p_model'];
/*      $ram_model = $_POST['ram_model'];
        $mt_model = $_POST['mt_model'];
        $c_model = $_POST['c_model'];
        $gpu_model = $_POST['gpu_model'];
        $ssd_model = $_POST['ssd_model'];
        $cooler_model = $_POST['cooler_model'];
        $smps_model = $_POST['smps_model'];
        $win_edition = $_POST['win_edition'];*/

        require("docx/fpdf.php");

        $pdf = new FPDF();
        $pdf->AddPage();

        $pdf-> SetFont("Arial", "B", 15);
        $pdf->Cell(0,20, "The Estimation", 1,1,"C");

        $pdf->Cell(60, 10, "Processor", 1,0);
        $pdf->Cell(0, 10, $processor, 1,1);

        $pdf->Cell(60, 10, "Processor Model", 1,0);
        $pdf->Cell(0, 10, $p_model, 1,1);
//        $pdf->Cell(60, 10, "RAM", 1,0);
//        $pdf->Cell(60, 10, "RAM Model", 1,0);
//        $pdf->Cell(60, 10, "Motherboard", 1,0);
//        $pdf->Cell(60, 10, "Motherboard Model", 1,0);
//        $pdf->Cell(60, 10, "Cabinet", 1,0);
//        $pdf->Cell(60, 10, "Cabinet Model", 1,0);
//        $pdf->Cell(60, 10, "Graphic Card", 1,0);
//        $pdf->Cell(60, 10, "Graphic Card Model", 1,0);
//        $pdf->Cell(60, 10, "SSD", 1,0);
//        $pdf->Cell(60, 10, "SSD Model", 1,0);
//        $pdf->Cell(60, 10, "Cooler", 1,0);
//        $pdf->Cell(60, 10, "Cooler Model", 1,0);
//        $pdf->Cell(60, 10, "SMPS", 1,0);
//        $pdf->Cell(60, 10, "SMPS Model", 1,0);
//        $pdf->Cell(60, 10, "Windows", 1,0);
//        $pdf->Cell(60, 10, "Windows Model", 1,0);

        $pdf->Output();

?>

