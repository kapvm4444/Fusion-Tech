<?php $page = "build";
$connect = mysqli_connect("localhost", "root", "", "fusiontech");

if (isset($_COOKIE['rem'] ) && $_COOKIE['rem'] == 1){
    $username = $_COOKIE['username'];
    $password = $_COOKIE['password'];

    $qry = "select * from users where password = '" . $password . "' AND username = '" . $username . "'";
    $out = mysqli_query($connect, $qry);
    if (mysqli_num_rows($out) > 0) {
        while ($fetch = mysqli_fetch_assoc($out)) {
            session_start();
            $_SESSION['username'] = $_COOKIE['username'];
            $_SESSION['password'] = $_COOKIE['password'];
        }
    }
}
else{
    session_start();
}
if (!isset($_SESSION['username'])){
    sleep(1);
    header("Location: users/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="Res/favicon.png">
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/Docs.css">
    <script src="bootstrap-5.3.0-alpha1-dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Fusion Tech - Builder</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="bootstrap-5.3.0-alpha1-dist/js/Print/html5-3.6-respond-1.1.0.min.js"></script>
    <script>
        //GETTING THE TOTAL PRICE AND DISPLAYING IN THE END---------------------------------------------------------------------jQUERY-----------------------------------------------------------------------
        var cpu = 0;
        var ram = 0;
        var MB = 0;
        var cabinet = 0;
        var gpu = 0;
        var ssd = 0;
        var cooler = 0;
        var smps = 0;
        var total = 0;
        var os = 0;

        $(document).ready(function (){
            $('#catSelfCpu').change(function (){
                let str = $(this).children("option:selected").text();
                let arr = str.split("+");
                cpu = Number(arr[arr.length-1]);
                total = cpu + ram + MB + cabinet + gpu + ssd + cooler + smps + os;
                $('#subtotal').html(total);
            })
        });

        $(document).ready(function (){
            $('#catSelfRam').change(function (){
                let str = $(this).children("option:selected").text();
                let arr = str.split("+");
                ram = Number(arr[arr.length-1]);
                total = cpu + ram + MB + cabinet + gpu + ssd + cooler + smps + os;
                $('#subtotal').html(total);
            })
        });

        $(document).ready(function (){
            $('#catSelfMB').change(function (){
                let str = $(this).children("option:selected").text();
                let arr = str.split("+");
                MB = Number(arr[arr.length-1]);
                total = cpu + ram + MB + cabinet + gpu + ssd + cooler + smps + os;
                $('#subtotal').html(total);
            })
        });

        $(document).ready(function (){
            $('#catSelfCab').change(function (){
                let str = $(this).children("option:selected").text();
                let arr = str.split("+");
                cabinet = Number(arr[arr.length-1]);
                total = cpu + ram + MB + cabinet + gpu + ssd + cooler + smps + os;
                $('#subtotal').html(total);
            })
        });

        $(document).ready(function (){
            $('#catSelfGpu').change(function (){
                let str = $(this).children("option:selected").text();
                let arr = str.split("+");
                gpu = Number(arr[arr.length-1]);
                total = cpu + ram + MB + cabinet + gpu + ssd + cooler + smps + os;
                $('#subtotal').html(total);
            })
        });

        $(document).ready(function (){
            $('#catSelfSsd').change(function (){
                let str = $(this).children("option:selected").text();
                let arr = str.split("+");
                ssd = Number(arr[arr.length-1]);
                total = cpu + ram + MB + cabinet + gpu + ssd + cooler + smps + os;
                $('#subtotal').html(total);
            })
        });

        $(document).ready(function (){
            $('#catSelfCooler').change(function (){
                let str = $(this).children("option:selected").text();
                let arr = str.split("+");
                cooler = Number(arr[arr.length-1]);
                total = cpu + ram + MB + cabinet + gpu + ssd + cooler + smps + os;
                $('#subtotal').html(total);
            })
        });

        $(document).ready(function (){
            $('#catSelfSmps').change(function (){
                let str = $(this).children("option:selected").text();
                let arr = str.split("+");
                smps = Number(arr[arr.length-1]);
                total = cpu + ram + MB + cabinet + gpu + ssd + cooler + smps + os;
                $('#subtotal').html(total);
            })
        });

        $(document).ready(function (){
            $('#catSelfOS').change(function (){
                if ($(this).val() === 'home'){
                    os = 12000;
                }
                else if ($(this).val() === 'pro'){
                    os = 16000;
                }
                total = cpu + ram + MB + cabinet + gpu + ssd + cooler + smps + os;
                $('#subtotal').html(total);
            })
        });

        //validation for all required fields
        $(document).ready(function (){
            $('#pdf').click(function (){
                if (($('#catNameCpu').val() === "") || ($('#catNameRam').val() === "") || ($('#catNameMB').val() === "") || ($('#catNameCab').val() === "") || ($('#catNameGpu').val() === "") || ($('#catNameSsd').val() === "") || ($('#catNameCooler').val() === "") || ($('#catNameSmps').val() === "") || ($('#catNameOS').val() === "")){
                    if (($('#catSelfCpu').val() === "") || ($('#catSelfRam').val() === "") || ($('#catSelfMB').val() === "") || ($('#catSelfCab').val() === "") || ($('#catSelfGpu').val() === "") || ($('#catSelfSsd').val() === "") || ($('#catSelfCooler').val() === "") || ($('#catSelfSmps').val() === "") || ($('#catSelfOS').val() === "")){
                        alert("Please Select All Fields")
                    }
                }
                else {

                }
            })
        });


    </script>
    <script>
        //GETTING ALL THE DATA IN THE DROPDOWNS --------------------------------------------------------------------------jQUERY-----------------------------------------------------------------------------
        //display cpu models
        $(document).ready(function (){
            $('#catNameCpu').change(function (){
                var cpuBrand = $(this).val();
                if(cpuBrand !== ""){
                    $.ajax({
                        type: 'post',
                        url: 'getData/dropdowns-primary.php',
                        data: {'cpuBrand':cpuBrand},
                        success: function (result){
                            $('#catSelfCpu').html(result);
                        }
                    })
                }

            })
        });


        //Display RAM Brands
        $(document).ready(function (){
            $('#catSelfCpu').change(function (){
                var cpuModel = $(this).val();
                if(cpuModel !== ""){
                    $.ajax({
                        type: 'post',
                        url: 'getData/dropdowns-primary.php',
                        data: {'cpuModel':cpuModel},
                        success: function (result){
                            $('#catNameRam').html(result);
                        }
                    })
                }

            })
        });


        //Display RAM Models
        $(document).ready(function (){
            $('#catNameRam').change(function (){
                var ramBrand = $(this).val();
                var cpuModel = $('#catSelfCpu').val();
                if(ramBrand !== ""){
                    $.ajax({
                        type: 'post',
                        url: 'getData/dropdowns-primary.php',
                        data: {'ramBrand':ramBrand, 'cpuModel2':cpuModel},
                        success: function (result){
                            $('#catSelfRam').html(result);
                        }
                    })
                }

            })
        });


        //display MB Brands
        $(document).ready(function (){
            $('#catSelfRam').change(function (){
                var ramModel = $(this).val();
                var cpuModel = $('#catSelfCpu').val();
                if(ramModel !== "" && cpuModel !== ""){
                    $.ajax({
                        type: 'post',
                        url: 'getData/dropdowns-primary.php',
                        data: {'ramModelMb':ramModel, 'cpuModelMb':cpuModel},
                        success: function (result){
                            $('#catNameMB').html(result);
                        }
                    })
                }

            })
        });


        //display MB models
        $(document).ready(function (){
            $('#catNameMB').change(function (){
                var ramModel = $('#catSelfRam').val();
                var cpuModel = $('#catSelfCpu').val();
                var mbBrand = $(this).val();
                if(mbBrand !== ""){
                    $.ajax({
                        type: 'post',
                        url: 'getData/dropdowns-primary.php',
                        data: {'ramModelMb2':ramModel, 'cpuModelMb2':cpuModel, 'mbBrand':mbBrand},
                        success: function (result){
                            $('#catSelfMB').html(result);
                        }
                    })
                }

            })
        });


        //displaying cabinet brands
        $(document).ready(function (){
            $('#catSelfMB').change(function (){
                    $.ajax({
                        url: 'getData/cabinets.php',
                        success: function (result){
                            $('#catNameCab').html(result);
                        }
                    })
            })
        });


        //displaying cabinet models
        $(document).ready(function (){
            $('#catNameCab').change(function (){
                var cabComp = $(this).val();
                if(cabComp !== ""){
                    $.ajax({
                        type: 'post',
                        url: 'getData/dropdowns-primary.php',
                        data: {'cabCompany':cabComp},
                        success: function (result){
                           $('#catSelfCab').html(result);
                        }
                    })
                }

            })
        });


        //display Graphics Brands
        $(document).ready(function (){
            $('#catSelfCab').change(function (){
                var cabModel = $(this).val();
                if(cabModel !== ""){
                    $.ajax({
                        type: 'post',
                        url: 'getData/gpu.php',
                        data: {'cabModel':cabModel},
                        success: function (result){
                            $('#catNameGpu').html(result);
                        }
                    })
                }

            })
        });


        //display Graphics Models
        $(document).ready(function (){
            $('#catNameGpu').change(function (){
                var gpuBrand = $(this).val();
                if(gpuBrand !== ""){
                    $.ajax({
                        type: 'post',
                        url: 'getData/gpu.php',
                        data: {'gpuBrand':gpuBrand},
                        success: function (result){
                            $('#catSelfGpu').html(result);
                        }
                    })
                }

            })
        });


        //display SSD Brands
        $(document).ready(function (){
            $('#catSelfGpu').change(function (){
                var gpuModel = $(this).val();
                if(gpuModel !== ""){
                    $.ajax({
                        type: 'post',
                        url: 'getData/ssd.php',
                        data: {'gpuModel':gpuModel},
                        success: function (result){
                            $('#catNameSsd').html(result);
                        }
                    })
                }

            })
        });


        //display SSD Models
        $(document).ready(function (){
            $('#catNameSsd').change(function (){
                var ssdBrand = $(this).val();
                if(ssdBrand !== ""){
                    $.ajax({
                        type: 'post',
                        url: 'getData/ssd.php',
                        data: {'ssdBrand':ssdBrand},
                        success: function (result){
                            $('#catSelfSsd').html(result);
                        }
                    })
                }

            })
        });


        //display Cooler Brands
        $(document).ready(function (){
            $('#catSelfSsd').change(function (){
                var ssdModel = $(this).val();
                if(ssdModel !== ""){
                    $.ajax({
                        type: 'post',
                        url: 'getData/cooler.php',
                        data: {'ssdModel':ssdModel},
                        success: function (result){
                            $('#catNameCooler').html(result);
                        }
                    })
                }

            })
        });


        //display Cooler Models
        $(document).ready(function (){
            $('#catNameCooler').change(function (){
                var coolerBrand = $(this).val();
                if(coolerBrand !== ""){
                    $.ajax({
                        type: 'post',
                        url: 'getData/cooler.php',
                        data: {'coolerBrand':coolerBrand},
                        success: function (result){
                            $('#catSelfCooler').html(result);
                        }
                    })
                }

            })
        });


        //display SMPS Brands
        $(document).ready(function (){
            $('#catSelfCooler').change(function (){
                var coolerModel = $(this).val();
                if(coolerModel !== ""){
                    $.ajax({
                        type: 'post',
                        url: 'getData/smps.php',
                        data: {'coolerModel':coolerModel},
                        success: function (result){
                            $('#catNameSmps').html(result);
                        }
                    })
                }

            })
        });


        //display SMPS Models
        $(document).ready(function (){
            $('#catNameSmps').change(function (){
                var smpsBrand = $(this).val();
                if(smpsBrand !== ""){
                    $.ajax({
                        type: 'post',
                        url: 'getData/smps.php',
                        data: {'smpsBrand':smpsBrand},
                        success: function (result){
                            $('#catSelfSmps').html(result);
                        }
                    })
                }

            })
        });


    </script>
</head>
<body class="cst-bg-dark text-white">
<!-- Header Nav Bar -->
    <?php include 'head-nav.php'?>

<div class="text-center w-100 p-5 display-2 cst-about cst-bg-dark cst-text-light">
        The Builder
</div>

<!--Builder-->
<form action="pdf_grnerator.php" method="post">
    <div class="cst-bg-darker row text-white" id="Builder">
        <div class="col-sm-12 col-lg-4">
            <img src="Res/image/BuilderPC.png" class="img-fluid">
        </div>

        <div class="col-sm-12 col-lg-8">

            <table class="w-100">

                <tr class="p-5">
                    <td class="p-5 pb-0">
                        <label class="form-label text-white fw-bold">Processor <span   class="text-danger">*</label>

                        <select class="form-select border-1 border-success d-block" id="catNameCpu" name="processor" required>
                            <option value="">-- Please Select --</option>
                            <?php
                            $quary = "select distinct brand from cpu";
                            $exec = mysqli_query($connect, $quary);
                            if(mysqli_num_rows($exec) > 0){
                                while($data = mysqli_fetch_assoc($exec)){
                                    echo '<option value="'.$data['brand'].'">'.$data['brand'].'</option>';
                                }
                            }
                            ?>
                        </select>
                    </td>
                    <td class="p-5 pb-0">
                        <label class="form-label text-white fw-bold">Processor Model <span class="text-danger">*</span></label>
                        <select class="form-select border-1 border-success d-block" id="catSelfCpu" name="p_model" required>
                            <option value="">-- Please Select --</option>
                        </select>
                    </td>
                </tr>

                <tr class="p-5">
                    <td class="p-5 pb-0">
                        <label class="form-label text-white fw-bold">RAM <span class="text-danger">*</span></label>
                        <select class="form-select border-1 border-success d-block" id="catNameRam" name="ram" required>
                            <option value="">-- Please Select --</option>
                        </select>
                    </td>
                    <td class="p-5 pb-0">
                        <label class="form-label text-white fw-bold">RAM Model <span   class="text-danger">*</label>
                        <select class="form-select border-1 border-success d-block" id="catSelfRam" name="ram_model" required>
                            <option value="">-- Please Select --</option>
                        </select>
                    </td>
                </tr>

                <tr class="p-5">
                    <td class="p-5 pb-0">
                        <label class="form-label text-white fw-bold">MotherBoard <span class="text-danger">*</span></label>
                        <select class="form-select border-1 border-success d-block" id="catNameMB" name="motherboard" required>
                            <option value="">-- Please Select --</option>
                        </select>
                    </td>
                    <td class="p-5 pb-0">
                        <label class="form-label text-white fw-bold">MotherBoard Model <span   class="text-danger">*</label>
                        <select class="form-select border-1 border-success d-block" id="catSelfMB" name="mt_model" required>
                            <option value="">-- Please Select --</option>
                        </select>
                    </td>
                </tr>

                <tr class="p-5">
                    <td class="p-5 pb-0 w-50">
                        <label class="form-label text-white fw-bold">Cabinet <span class="text-danger">*</span></label>
                        <select class="form-select border-1 border-success d-block" id="catNameCab" name="cabinet" required>
                            <option value="">-- Please Select --</option>

                        </select>
                    </td>
                    <td class="p-5 pb-0 w-60">
                        <label class="form-label text-white fw-bold">Cabinet Model <span   class="text-danger">*</label>
                        <select class="form-select border-1 border-success d-block" id="catSelfCab" name="c_model" required>
                            <option value="">-- Please Select --</option>
                        </select>
                    </td>
                </tr>

                <tr class="p-5">
                    <td class="p-5 pb-0">
                        <label class="form-label text-white fw-bold">Graphics Card <span   class="text-danger">*</label>
                        <select class="form-select border-1 border-success d-block" id="catNameGpu" name="graphic-card" required>
                            <option value="">-- Please Select --</option>
                        </select>
                    </td>
                    <td class="p-5 pb-0">
                        <label class="form-label text-white fw-bold">Graphics Card Model <span class="text-danger">*</span></label>
                        <select class="form-select border-1 border-success d-block" id="catSelfGpu" name="gpu_model" required>
                            <option value="">-- Please Select --</option>
                        </select>
                    </td>
                </tr>

                <tr class="p-5">
                    <td class="p-5 pb-0">
                        <label class="form-label text-white fw-bold">SSD <span class="text-danger">*</span></label>
                        <select class="form-select border-1 border-success d-block" id="catNameSsd" name="ssd" required>
                            <option value="">-- Please Select --</option>
                        </select>
                    </td>
                    <td class="p-5 pb-0">
                        <label class="form-label text-white fw-bold">SSD Model <span   class="text-danger">*</label>
                        <select class="form-select border-1 border-success d-block" id="catSelfSsd" name="ssd_model" required>
                            <option value="">-- Please Select --</option>
                        </select>
                    </td>
                </tr>

                <tr class="p-5">
                    <td class="p-5 pb-0">
                        <label class="form-label text-white fw-bold">Cooler <span  class="text-danger">*</label>
                        <select class="form-select border-1 border-success d-block" id="catNameCooler" name="cooler" required>
                            <option value="">-- Please Select --</option>
                        </select>
                    </td>
                    <td class="p-5 pb-0">
                        <label class="form-label text-white fw-bold">Cooler Model <spa class="text-danger">*</spa></label>
                        <select class="form-select border-1 border-success d-block" id="catSelfCooler" name="cooler_model" required>
                            <option value="">-- Please Select --</option>
                        </select>
                    </td>
                </tr>

                <tr class="p-5">
                    <td class="p-5 pb-0">
                        <label class="form-label text-white fw-bold">SMPS <spa class="text-danger">*</spa></label>
                        <select class="form-select border-1 border-success d-block" id="catNameSmps" name="smps" required>
                            <option value="">-- Please Select --</option>
                        </select>
                    </td>
                    <td class="p-5 pb-0">
                        <label class="form-label text-white fw-bold">SMPS Model <span  class="text-danger">*</label>
                        <select class="form-select border-1 border-success d-block" id="catSelfSmps" name="smps_model" required>
                            <option value="">-- Please Select --</option>
                        </select>
                    </td>
                </tr>

                <tr class="p-5">
                    <td class="p-5 pb-0">
                        <label class="form-label text-white fw-bold">Windows <span class="text-danger">*</span></label>
                        <select class="form-select border-1 border-success d-block" id="catNameOS" name="windows" required>
                            <option value="">-- Please Select --</option>
                            <option value="ten">Windows 10</option>
                            <option value="eleven">Windows 11</option>
                        </select>
                    </td>
                    <td class="p-5 pb-0">
                        <label class="form-label text-white fw-bold">Windows Edition <span class="text-danger">*</span></label>
                        <select class="form-select border-1 border-success d-block" id="catSelfOS" name="win_edition" required>
                            <option value="">-- Please Select --</option>
                            <option value="home">Home Edition</option>
                            <option value="pro">Professional Edition</option>
                        </select>
                    </td>
                </tr>

            </table>

            <hr class="cst-text-darker border-2"/>

            <p class="ms-5 text-white mb-0">Your Estimation Price :</p>
            <div class="ms-5 display-6 text-white fw-bold" id="subtotal">
                0
            </div>
            <p class="text-white ms-5">including GST</p>
            <div class="my-3 ms-5"><input type="submit" value="Download PDF" name="submit" formtarget="_blank" class="btn btn-outline-dark text-success fw-bold"></div>
<!--            <a href="#" class="cst-text-razer cst-bg-darker p-0 fw-bold text-decoration-none" onclick="window.print();">Click Here</a>-->

        </div>
    </div>
</form>
<!--End of builder-->

    <?php include 'footer.php' ?>

</body>
</html>