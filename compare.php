<?php

$page = "compare";
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <link rel="icon" href="Res/favicon.png">
    <script src="bootstrap-5.3.0-alpha1-dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/Docs.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Fusion Tech - Compare</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>

        //Left Sided CPU----------------------------
        $(document).ready(function (){
            $('#cpuSelectL').change(function (){
                var cpuL = $(this).val();
                if (cpuL !== ""){
                    $.ajax({
                        type: 'post',
                        url: 'getData/compare/getProcessor.php',
                        data: {'cpuL' : cpuL},
                        success : function (result){
                            $('#fetchScripts').html(result);
                        }
                    })
                }
            })
        });

        //Right Sided CPU-------------------------------
        $(document).ready(function (){
            $('#cpuSelectR').change(function (){
                var cpuR = $(this).val();
                if (cpuR !== ""){
                    $.ajax({
                        type: 'post',
                        url: 'getData/compare/getProcessor.php',
                        data: {'cpuR' : cpuR},
                        success : function (result){
                            $('#fetchScripts').html(result);
                        }
                    })
                }
            })
        });

    //     =============================================================================================================
        //Left Sided GPU Graphics----------------------------
        $(document).ready(function (){
            $('#gpuSelectL').change(function (){
                var gpuL = $(this).val();
                if (gpuL !== ""){
                    $.ajax({
                        type: 'post',
                        url: 'getData/compare/getGPU.php',
                        data: {'gpuL' : gpuL},
                        success : function (result){
                            $('#fetchScripts').html(result);
                        }
                    })
                }
            })
        });

        //Right Sided GPU Graphics----------------------------
        $(document).ready(function (){
            $('#gpuSelectR').change(function (){
                var gpuR = $(this).val();
                if (gpuR !== ""){
                    $.ajax({
                        type: 'post',
                        url: 'getData/compare/getGPU.php',
                        data: {'gpuR' : gpuR},
                        success : function (result){
                            $('#fetchScripts').html(result);
                        }
                    })
                }
            })
        });


        //====================================================================================================================
        //Left Sided RAM----------------------------
        $(document).ready(function (){
            $('#ramSelectL').change(function (){
                var ramL = $(this).val();
                if (ramL !== ""){
                    $.ajax({
                        type: 'post',
                        url: 'getData/compare/getRAM.php',
                        data: {'ramL' : ramL},
                        success : function (result){
                            $('#fetchScripts').html(result);
                        }
                    })
                }
            })
        });

        //Right Sided RAM----------------------------
        $(document).ready(function (){
            $('#ramSelectR').change(function (){
                var ramR = $(this).val();
                if (ramR !== ""){
                    $.ajax({
                        type: 'post',
                        url: 'getData/compare/getRAM.php',
                        data: {'ramR' : ramR},
                        success : function (result){
                            $('#fetchScripts').html(result);
                        }
                    })
                }
            })
        });


        //====================================================================================================================
        //Left Sided SSD----------------------------
        $(document).ready(function (){
            $('#ssdSelectL').change(function (){
                var ssdL = $(this).val();
                if (ssdL !== ""){
                    $.ajax({
                        type: 'post',
                        url: 'getData/compare/getSSD.php',
                        data: {'ssdL' : ssdL},
                        success : function (result){
                            $('#fetchScripts').html(result);
                        }
                    })
                }
            })
        });

        //Right Sided SSD----------------------------
        $(document).ready(function (){
            $('#ssdSelectR').change(function (){
                var ssdR = $(this).val();
                if (ssdR !== ""){
                    $.ajax({
                        type: 'post',
                        url: 'getData/compare/getSSD.php',
                        data: {'ssdR' : ssdR},
                        success : function (result){
                            $('#fetchScripts').html(result);
                        }
                    })
                }
            })
        });

    </script>

</head>
<body class="cst-bg-darker text-white">

<!-- Header Nav Bar -->
<?php include 'head-nav.php'?>

<div class="text-center w-100 p-5 display-2 cst-about cst-bg-dark">
    Compare
</div>

<div class="d-flex align-items-start">
    <div class="nav flex-column nav-tabs border-0 pb-4 cst-bg-darker" id="compareTab" role="tablist" aria-orientation="vertical">
        <button class="nav-link comp-tabs rounded-pill" id="cpu-tab" type="button" data-bs-toggle="tab" data-bs-target="#cpu-content" role="tab" aria-controls="cpu-content" aria-selected="true">Processors</button>
        <button class="nav-link comp-tabs rounded-pill" id="dgpu-tab" type="button" data-bs-toggle="tab" data-bs-target="#dgpu-content" role="tab" aria-controls="dgpu-content" aria-selected="true">Dedicated GPUs</button>
        <button class="nav-link comp-tabs rounded-pill" id="ram-tab" type="button" data-bs-toggle="tab" data-bs-target="#ram-content" role="tab" aria-controls="ram-content" aria-selected="true">RAM</button>
        <button class="nav-link comp-tabs rounded-pill" id="ssd-tab" type="button" data-bs-toggle="tab" data-bs-target="#ssd-content" role="tab" aria-controls="ssd-content" aria-selected="true">SSD</button>
    </div>

    <div class="tab-content w-75" id="compareContent">

        <!--CPU---------------------------------------------------------------------------------------------------------------------------------------------------------------->
        <div class="tab-pane fade" id="cpu-content" role="tabpanel" aria-labelledby="cpu-tab" tabindex="0">
            <table class="w-100 m-5 text-center">
                <!--Drop Down-->
                <tr>
                    <td class="px-5 w-50">
                        <div class="text-secondary mb-0">Processor Model</div>
                        <select class="form-select border-1 border-success" id="cpuSelectL">
                            <option value="select">--Please Select--</option>
                            <?php
                                $qry = "select * from cpu;";
                                $out = mysqli_query($connect, $qry);

                                if(mysqli_num_rows($out) > 0){
                                    while($fetch = mysqli_fetch_assoc($out)){
                                        echo '<option value="'.$fetch['model'].'">'.$fetch['model'].' | Rs.'.$fetch['price'].'</option>';
                                    }
                                }
                            ?>
                        </select>
                    </td>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0">Processor Model</p>
                        <select class="form-select border-1 border-success" id="cpuSelectR">
                            <option value="select">--Please Select--</option>
                            <?php
                            $qry = "select * from cpu;";
                            $out = mysqli_query($connect, $qry);

                            if(mysqli_num_rows($out) > 0){
                                while($fetch = mysqli_fetch_assoc($out)){
                                    echo '<option value="'.$fetch['model'].'">'.$fetch['model'].' | Rs.'.$fetch['price'].'</option>';
                                }
                            }
                            ?>
                        </select>
                    </td>
                </tr>

                <!--Name-->
                <tr>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">Processor Name</p>
                        <div class="display-6" id="cpuNameL">-</div>
                    </td>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">Processor Name</p>
                        <div class="display-6" id="cpuNameR">-</div>
                    </td>
                </tr>

                <!--Base Clock-->
                <tr>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">Clock Speed</p>
                        <div class="display-6" id="cpuClockL">-</div>
                    </td>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">Clock Speed</p>
                        <div class="display-6" id="cpuClockR">-</div>
                    </td>
                </tr>

                <!--Cores-->
                <tr>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">Cores</p>
                        <div class="display-6" id="cpuCoreL">-</div>
                    </td>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">Cores</p>
                        <div class="display-6" id="cpuCoreR">-</div>
                    </td>
                </tr>

                <!--Threads-->
                <tr>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">Threads</p>
                        <div class="display-6" id="cpuThreadL">-</div>
                    </td>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">Threads</p>
                        <div class="display-6" id="cpuThreadR">-</div>
                    </td>
                </tr>

                <!--GPU-->
                <tr>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">Graphics</p>
                        <div class="display-6" id="cpuGpuL">-</div>
                    </td>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">Graphics</p>
                        <div class="display-6" id="cpuGpuR">-</div>
                    </td>
                </tr>

                <!--Socket-->
                <tr>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">Socket Type</p>
                        <div class="display-6" id="cpuSocketL">-</div>
                    </td>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">Socket Type</p>
                        <div class="display-6" id="cpuSocketR">-</div>
                    </td>
                </tr>

                <!--Ram Type-->
                <tr>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">Supported RAM</p>
                        <div class="display-6" id="cpuRamL">-</div>
                    </td>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">Supported RAM</p>
                        <div class="display-6" id="cpuRamR">-</div>
                    </td>
                </tr>

                <!--Market Price-->
                <tr>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">Market Price</p>
                        <div class="display-6" id="cpuPriceL">-</div>
                    </td>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">Market Price</p>
                        <div class="display-6" id="cpuPriceR">-</div>
                    </td>
                </tr>

            </table>
        </div>
        <!--Dedicated GPU------------------------------------------------------------------------------------------------------------------------------------------------------>
        <div class="tab-pane fade" id="dgpu-content" role="tabpanel" aria-labelledby="dgpu-tab" tabindex="0">
            <table class="w-100 m-5 text-center">
                <!--GPU Drop Down-->
                <tr>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0">GPU Model</p>
                        <select class="form-select border-1 border-success" id="gpuSelectL">
                            <option value="select">--Please Select--</option>
                            <?php
                            $qry = "select * from gpu;";
                            $out = mysqli_query($connect, $qry);

                            if(mysqli_num_rows($out) > 0){
                                while($fetch = mysqli_fetch_assoc($out)){
                                    echo '<option value="'.$fetch['name'].'">'.$fetch['name'].' | Rs.'.$fetch['price'].'</option>';
                                }
                            }
                            ?>
                        </select>
                    </td>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0">GPU Model</p>
                        <select class="form-select border-1 border-success" id="gpuSelectR">
                            <option value="select">--Please Select--</option>
                            <?php
                            $qry = "select * from gpu;";
                            $out = mysqli_query($connect, $qry);

                            if(mysqli_num_rows($out) > 0){
                                while($fetch = mysqli_fetch_assoc($out)){
                                    echo '<option value="'.$fetch['name'].'">'.$fetch['name'].' | Rs.'.$fetch['price'].'</option>';
                                }
                            }
                            ?>
                        </select>
                    </td>
                </tr>

                <!--GPU Name-->
                <tr>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">GPU Name</p>
                        <div class="display-6" id="gpuNameL">-</div>
                    </td>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">GPU Name</p>
                        <div class="display-6" id="gpuNameR">-</div>
                    </td>
                </tr>

                <!--GPU Base Clock-->
                <tr>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">Base Clock</p>
                        <div class="display-6" id="gpuClockL">-</div>
                    </td>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">Base Clock</p>
                        <div class="display-6" id="gpuClockR">-</div>
                    </td>
                </tr>

                <!--GPU Graphics Memory-->
                <tr>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">Memory Capacity</p>
                        <div class="display-6" id="gpuMemL">-</div>
                    </td>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">Memory Capacity</p>
                        <div class="display-6" id="gpuMemR">-</div>
                    </td>
                </tr>

                <!--GPU Graphics Memory-->
                <tr>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">Graphics Memory type</p>
                        <div class="display-6" id="gpuTypeL">-</div>
                    </td>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">Graphics Memory type</p>
                        <div class="display-6" id="gpuTypeR">-</div>
                    </td>
                </tr>

                <!--GPU Market Price-->
                <tr>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">Market Price</p>
                        <div class="display-6" id="gpuPriceL">-</div>
                    </td>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">Market Price</p>
                        <div class="display-6" id="gpuPriceR">-</div>
                    </td>
                </tr>

            </table>
        </div>
        <!--RAMs--------------------------------------------------------------------------------------------------------------------------------------------------------------->
        <div class="tab-pane fade" id="ram-content" role="tabpanel" aria-labelledby="ram-tab" tabindex="0">
            <table class="w-100 m-5 text-center">
                <!--RAM Drop Down-->
                <tr>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0">RAM Model</p>
                        <select class="form-select border-1 border-success" id="ramSelectL">
                            <option value="">--Please Select--</option>
                            <?php
                            $qry = "select * from ram;";
                            $out = mysqli_query($connect, $qry);

                            if(mysqli_num_rows($out) > 0){
                                while($fetch = mysqli_fetch_assoc($out)){
                                    echo '<option value="'.$fetch['name'].'">'.$fetch['name'].' | Rs.'.$fetch['price'].'</option>';
                                }
                            }
                            ?>
                        </select>
                    </td>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0">RAM Model</p>
                        <select class="form-select border-1 border-success" id="ramSelectR">
                            <option value="">--Please Select--</option>
                            <?php
                            $qry = "select * from ram;";
                            $out = mysqli_query($connect, $qry);

                            if(mysqli_num_rows($out) > 0){
                                while($fetch = mysqli_fetch_assoc($out)){
                                    echo '<option value="'.$fetch['name'].'">'.$fetch['name'].' | Rs.'.$fetch['price'].'</option>';
                                }
                            }
                            ?>
                        </select>
                    </td>
                </tr>

                <!--RAM Name-->
                <tr>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">RAM Name</p>
                        <div class="display-6" id="ramNameL">-</div>
                    </td>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">RAM Name</p>
                        <div class="display-6" id="ramNameR">-</div>
                    </td>
                </tr>

                <!--RAM Type-->
                <tr>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">Type</p>
                        <div class="display-6" id="ramTypeL">-</div>
                    </td>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">Type</p>
                        <div class="display-6" id="ramTypeR">-</div>
                    </td>
                </tr>

                <!--RAM frequency-->
                <tr>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">Frequency</p>
                        <div class="display-6" id="ramFrqL">-</div>
                    </td>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">Frequency</p>
                        <div class="display-6" id="ramFrqR">-</div>
                    </td>
                </tr>

                <!--RAM capacity-->
                <tr>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">Memory Capacity</p>
                        <div class="display-6" id="ramCapacityL">-</div>
                    </td>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">Memory Capacity</p>
                        <div class="display-6" id="ramCapacityR">-</div>
                    </td>
                </tr>

                <!--RAM RGB-->
                <tr>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">in-built RGB </p>
                        <div class="display-6" id="ramRGBL">-</div>
                    </td>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">in-built RGB </p>
                        <div class="display-6" id="ramRGBR">-</div>
                    </td>
                </tr>

                <!--RAM Market Price-->
                <tr>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">Market Price</p>
                        <div class="display-6" id="ramPriceL">-</div>
                    </td>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">Market Price</p>
                        <div class="display-6" id="ramPriceR">-</div>
                    </td>
                </tr>

            </table>
        </div>
        <!--SSD---------------------------------------------------------------------------------------------------------------------------------------------------------------->
        <div class="tab-pane fade" id="ssd-content" role="tabpanel" aria-labelledby="ssd-tab" tabindex="0">
            <table class="w-100 m-5 text-center">
                <!--SSD Drop Down-->
                <tr>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0">SSD Model</p>
                        <select class="form-select border-1 border-success" id="ssdSelectL">
                            <option value="select">--Please Select--</option>
                            <?php
                            $qry = "select * from storage where hdd_type = 'ssd';";
                            $out = mysqli_query($connect, $qry);

                            if(mysqli_num_rows($out) > 0){
                                while($fetch = mysqli_fetch_assoc($out)){
                                    echo '<option value="'.$fetch['name'].'">'.$fetch['name'].' | Rs.'.$fetch['price'].'</option>';
                                }
                            }
                            ?>
                        </select>
                    </td>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0">SSD Model</p>
                        <select class="form-select border-1 border-success" id="ssdSelectR">
                            <option value="select">--Please Select--</option>
                            <?php
                            $qry = "select * from storage where hdd_type = 'ssd';";
                            $out = mysqli_query($connect, $qry);

                            if(mysqli_num_rows($out) > 0){
                                while($fetch = mysqli_fetch_assoc($out)){
                                    echo '<option value="'.$fetch['name'].'">'.$fetch['name'].' | Rs.'.$fetch['price'].'</option>';
                                }
                            }
                            ?>
                        </select>
                    </td>
                </tr>

                <!--SSD Name-->
                <tr>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">SSD Name</p>
                        <div class="display-6" id="ssdNameL">-</div>
                    </td>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">SSD Name</p>
                        <div class="display-6" id="ssdNameR">-</div>
                    </td>
                </tr>

                <!--SSD Read-->
                <tr>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">Read Speed</p>
                        <div class="display-6" id="ssdReadL">-</div>
                    </td>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">Read Speed</p>
                        <div class="display-6" id="ssdReadR">-</div>
                    </td>
                </tr>

                <!--SSD Write-->
                <tr>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">Write Speed</p>
                        <div class="display-6" id="ssdWriteL">-</div>
                    </td>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">Write Speed</p>
                        <div class="display-6" id="ssdWriteR">-</div>
                    </td>
                </tr>

                <!--SSD Type-->
                <tr>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">SSD Type</p>
                        <div class="display-6" id="ssdTypeL">-</div>
                    </td>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">SSD Type</p>
                        <div class="display-6" id="ssdTypeR">-</div>
                    </td>
                </tr>

                <!--SSD Capacity-->
                <tr>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">SSD Capacity</p>
                        <div class="display-6" id="ssdSizeL">-</div>
                    </td>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">SSD Capacity</p>
                        <div class="display-6" id="ssdSizeR">-</div>
                    </td>
                </tr>

                <!--SSD PCI-->
                <tr>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">PCI Version</p>
                        <div class="display-6" id="ssdPciVL">-</div>
                    </td>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">PCI Version</p>
                        <div class="display-6" id="ssdPciVR">-</div>
                    </td>
                </tr>

                <!--SSD Market Price-->
                <tr>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">Market Price</p>
                        <div class="display-6" id="ssdPriceL">-</div>
                    </td>
                    <td class="px-5 w-50">
                        <p class="text-secondary mb-0 mt-5">Market Price</p>
                        <div class="display-6" id="ssdPriceR">-</div>
                    </td>
                </tr>

            </table>
        </div>

    </div>
</div>

<?php include 'footer.php'?>
<footer id="fetchScripts">
</footer>
</body>
</html>