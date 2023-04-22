<?php $page = "compare" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <link rel="icon" href="Res/favicon.png">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/Docs.css">
    <script src="bootstrap-5.3.0-alpha1-dist/js/bootstrap.bundle.min.js"></script>
    <title>Fusion Tech</title>
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

        <!--CPU---------------------------------------------------------------------------------------->
        <div class="tab-pane fade" id="cpu-content" role="tabpanel" aria-labelledby="cpu-tab" tabindex="0">
            <table class="w-100 m-5 text-center">
                <!--Drop Down-->
                <tr>
                    <td class="px-5">
                        <p class="text-secondary mb-0">Processor Model</p>
                        <select class="form-select border-1 border-success">
                            <option value="">--Please Select--</option>
                        </select>
                    </td>
                    <td class="px-5">
                        <p class="text-secondary mb-0">Processor Model</p>
                        <select class="form-select border-1 border-success">
                            <option value="">--Please Select--</option>
                        </select>
                    </td>
                </tr>

                <!--Name-->
                <tr>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">Processor Name</p>
                        <div class="display-6">[Data]</div>
                    </td>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">Processor Name</p>
                        <div class="display-6">[Data]</div>
                    </td>
                </tr>

                <!--Base Clock-->
                <tr>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">Base Clock</p>
                        <div class="display-6">[Data]</div>
                    </td>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">Base Clock</p>
                        <div class="display-6">[Data]</div>
                    </td>
                </tr>

                <!--Turbo Clock-->
                <tr>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">Turbo Clock</p>
                        <div class="display-6">[Data]</div>
                    </td>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">Turbo Clock</p>
                        <div class="display-6">[Data]</div>
                    </td>
                </tr>

                <!--Cores-->
                <tr>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">Cores</p>
                        <div class="display-6">[Data]</div>
                    </td>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">Cores</p>
                        <div class="display-6">[Data]</div>
                    </td>
                </tr>

                <!--Threads-->
                <tr>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">Threads</p>
                        <div class="display-6">[Data]</div>
                    </td>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">Threads</p>
                        <div class="display-6">[Data]</div>
                    </td>
                </tr>

                <!--GPU-->
                <tr>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">Graphics</p>
                        <div class="display-6">[Data]</div>
                    </td>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">Graphics</p>
                        <div class="display-6">[Data]</div>
                    </td>
                </tr>

                <!--GPU Memory-->
                <tr>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">Graphics Memory</p>
                        <div class="display-6">[Data]</div>
                    </td>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">Graphics Memory</p>
                        <div class="display-6">[Data]</div>
                    </td>
                </tr>

                <!--Socket-->
                <tr>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">Socket Type</p>
                        <div class="display-6">[Data]</div>
                    </td>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">Socket Type</p>
                        <div class="display-6">[Data]</div>
                    </td>
                </tr>

                <!--Ram Type-->
                <tr>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">Supported RAM</p>
                        <div class="display-6">[Data]</div>
                    </td>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">Supported RAM</p>
                        <div class="display-6">[Data]</div>
                    </td>
                </tr>

                <!--Market Price-->
                <tr>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">Market Price</p>
                        <div class="display-6">[Data]</div>
                    </td>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">Market Price</p>
                        <div class="display-6">[Data]</div>
                    </td>
                </tr>

            </table>
        </div>
        <!--Integrated GPU---------------------------------------------------------------------------------------->
        <div class="tab-pane fade" id="dgpu-content" role="tabpanel" aria-labelledby="dgpu-tab" tabindex="0">
            <table class="w-100 m-5 text-center">
                <!--GPU Drop Down-->
                <tr>
                    <td class="px-5">
                        <p class="text-secondary mb-0">GPU Model</p>
                        <select class="form-select border-1 border-success">
                            <option value="">--Please Select--</option>
                        </select>
                    </td>
                    <td class="px-5">
                        <p class="text-secondary mb-0">GPU Model</p>
                        <select class="form-select border-1 border-success">
                            <option value="">--Please Select--</option>
                        </select>
                    </td>
                </tr>

                <!--GPU Name-->
                <tr>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">GPU Name</p>
                        <div class="display-6">[Data]</div>
                    </td>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">GPU Name</p>
                        <div class="display-6">[Data]</div>
                    </td>
                </tr>

                <!--GPU Base Clock-->
                <tr>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">Base Clock</p>
                        <div class="display-6">[Data]</div>
                    </td>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">Base Clock</p>
                        <div class="display-6">[Data]</div>
                    </td>
                </tr>

                <!--GPU Graphics Memory-->
                <tr>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">Memory Capacity</p>
                        <div class="display-6">[Data]</div>
                    </td>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">Memory Capacity</p>
                        <div class="display-6">[Data]</div>
                    </td>
                </tr>

                <!--GPU Graphics Memory-->
                <tr>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">Graphics Memory type</p>
                        <div class="display-6">[Data]</div>
                    </td>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">Graphics Memory type</p>
                        <div class="display-6">[Data]</div>
                    </td>
                </tr>

                <!--GPU Market Price-->
                <tr>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">Market Price</p>
                        <div class="display-6">[Data]</div>
                    </td>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">Market Price</p>
                        <div class="display-6">[Data]</div>
                    </td>
                </tr>

            </table>
        </div>
        <div class="tab-pane fade" id="ram-content" role="tabpanel" aria-labelledby="ram-tab" tabindex="0">
            <!--RAMs---------------------------------------------------------------------------------------->
            <table class="w-100 m-5 text-center">
                <!--RAM Drop Down-->
                <tr>
                    <td class="px-5">
                        <p class="text-secondary mb-0">RAM Model</p>
                        <select class="form-select border-1 border-success">
                            <option value="">--Please Select--</option>
                        </select>
                    </td>
                    <td class="px-5">
                        <p class="text-secondary mb-0">RAM Model</p>
                        <select class="form-select border-1 border-success">
                            <option value="">--Please Select--</option>
                        </select>
                    </td>
                </tr>

                <!--RAM Name-->
                <tr>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">RAM Name</p>
                        <div class="display-6">[Data]</div>
                    </td>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">RAM Name</p>
                        <div class="display-6">[Data]</div>
                    </td>
                </tr>

                <!--RAM Type-->
                <tr>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">Type</p>
                        <div class="display-6">[Data]</div>
                    </td>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">Type</p>
                        <div class="display-6">[Data]</div>
                    </td>
                </tr>

                <!--RAM frequency-->
                <tr>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">Frequency</p>
                        <div class="display-6">[Data]</div>
                    </td>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">Frequency</p>
                        <div class="display-6">[Data]</div>
                    </td>
                </tr>

                <!--RAM capacity-->
                <tr>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">Memory Capacity</p>
                        <div class="display-6">[Data]</div>
                    </td>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">Memory Capacity</p>
                        <div class="display-6">[Data]</div>
                    </td>
                </tr>

                <!--RAM RGB-->
                <tr>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">in-built RGB </p>
                        <div class="display-6">[Data]</div>
                    </td>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">in-built RGB </p>
                        <div class="display-6">[Data]</div>
                    </td>
                </tr>

                <!--RAM Market Price-->
                <tr>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">Market Price</p>
                        <div class="display-6">[Data]</div>
                    </td>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">Market Price</p>
                        <div class="display-6">[Data]</div>
                    </td>
                </tr>

            </table>
        </div>
        <div class="tab-pane fade" id="ssd-content" role="tabpanel" aria-labelledby="ssd-tab" tabindex="0">
            <!--SSD---------------------------------------------------------------------------------------->
            <table class="w-100 m-5 text-center">
                <!--SSD Drop Down-->
                <tr>
                    <td class="px-5">
                        <p class="text-secondary mb-0">SSD Model</p>
                        <select class="form-select border-1 border-success">
                            <option value="">--Please Select--</option>
                        </select>
                    </td>
                    <td class="px-5">
                        <p class="text-secondary mb-0">SSD Model</p>
                        <select class="form-select border-1 border-success">
                            <option value="">--Please Select--</option>
                        </select>
                    </td>
                </tr>

                <!--SSD Name-->
                <tr>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">SSD Name</p>
                        <div class="display-6">[Data]</div>
                    </td>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">SSD Name</p>
                        <div class="display-6">[Data]</div>
                    </td>
                </tr>

                <!--SSD Read-->
                <tr>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">Read Speed</p>
                        <div class="display-6">[Data]</div>
                    </td>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">Read Speed</p>
                        <div class="display-6">[Data]</div>
                    </td>
                </tr>

                <!--SSD Write-->
                <tr>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">Write Speed</p>
                        <div class="display-6">[Data]</div>
                    </td>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">Write Speed</p>
                        <div class="display-6">[Data]</div>
                    </td>
                </tr>

                <!--SSD Type-->
                <tr>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">SSD Type</p>
                        <div class="display-6">[Data]</div>
                    </td>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">SSD Type</p>
                        <div class="display-6">[Data]</div>
                    </td>
                </tr>

                <!--SSD Architecture-->
                <tr>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">SSD Architecture</p>
                        <div class="display-6">[Data]</div>
                    </td>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">SSD Architecture</p>
                        <div class="display-6">[Data]</div>
                    </td>
                </tr>

                <!--SSD Capacity-->
                <tr>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">SSD Capacity</p>
                        <div class="display-6">[Data]</div>
                    </td>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">SSD Capacity</p>
                        <div class="display-6">[Data]</div>
                    </td>
                </tr>

                <!--SSD PCI-->
                <tr>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">PCI Version</p>
                        <div class="display-6">[Data]</div>
                    </td>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">PCI Version</p>
                        <div class="display-6">[Data]</div>
                    </td>
                </tr>

                <!--SSD Market Price-->
                <tr>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">Market Price</p>
                        <div class="display-6">[Data]</div>
                    </td>
                    <td class="px-5">
                        <p class="text-secondary mb-0 mt-5">Market Price</p>
                        <div class="display-6">[Data]</div>
                    </td>
                </tr>

            </table>
        </div>

    </div>
</div>

<?php include 'footer.php'?>

</body>
</html>