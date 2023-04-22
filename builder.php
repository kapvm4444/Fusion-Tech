<?php $page = "build";

$connect = mysqli_connect("localhost", "root", "", "fusiontech");
$quary = "select distinct brand from cabinet";
$exec = mysqli_query($connect, $quary);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="Res/favicon.png">
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/Docs.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="bootstrap-5.3.0-alpha1-dist/js/bootstrap.bundle.min.js"></script>
    <title>Fusion Tech - Builder</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
        $(document).ready(function (){
            $('#catNameCab').change(function (){
                var cabComp = $(this).val();
                if(cabComp !== ""){
                    $.ajax({
                        type: 'post',
                        url: 'getData/dropdown.php',
                        data: {'cabCompany':cabComp},
                        success: function (result){
                            // $('#catSelfCab').css('display', 'visi')
                           $('#catSelfCab').html(result);
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
<div class="cst-bg-darker row text-white">
    <div class="col-sm-12 col-lg-4">
        <img src="Res/image/BuilderPC.png" class="img-fluid">
    </div>
    <div class="col-sm-12 col-lg-8 ">
        <table class="w-100">
            <tr class="p-5">
                <td class="p-5">
                    <label class="form-label text-white fw-bold">Cabinet</label>
                    <select class="form-select border-1 border-success d-block" id="catNameCab">
                        <option value="">--Please Select--</option>
                        <?php
                            if(mysqli_num_rows($exec) > 0){
                                while($data = mysqli_fetch_assoc($exec)){
                                    echo '<option value="'.$data[brand].'">'.$data[brand].'</option>';
                                }
                            }
                        ?>
                    </select>
                </td>
                <td class="p-5">
                    <label class="form-label text-white fw-bold">Cabinet Model</label>
                    <select class="form-select border-1 border-success d-block" id="catSelfCab">
                        <option value="">--Please Select--</option>
                    </select>
                </td>
            </tr>

            <tr class="p-5">
                <td class="p-5">
                    <label class="form-label text-white fw-bold">Processor</label>
                    <select class="form-select border-1 border-success d-block" id="catNameCpu">
                        <option value="">--Please Select--</option>
                    </select>
                </td>
                <td class="p-5">
                    <label class="form-label text-white fw-bold">Processor Model</label>
                    <select class="form-select border-1 border-success d-block" id="catSelfCpu">
                        <option value="">--Please Select--</option>
                    </select>
                </td>
            </tr>

            <tr class="p-5">
                <td class="p-5">
                    <label class="form-label text-white fw-bold">MotherBoard</label>
                    <select class="form-select border-1 border-success d-block" id="catNameMB">
                        <option value="">--Please Select--</option>
                    </select>
                </td>
                <td class="p-5">
                    <label class="form-label text-white fw-bold">MotherBoard Model</label>
                    <select class="form-select border-1 border-success d-block" id="catSelfMB">
                        <option value="">--Please Select--</option>
                    </select>
                </td>
            </tr>

            <tr class="p-5">
                <td class="p-5">
                    <label class="form-label text-white fw-bold">Graphics Card</label>
                    <select class="form-select border-1 border-success d-block" id="catNameGpu">
                        <option value="">--Please Select--</option>
                    </select>
                </td>
                <td class="p-5">
                    <label class="form-label text-white fw-bold">Graphics Card Model</label>
                    <select class="form-select border-1 border-success d-block" id="catSelfGpu">
                        <option value="">--Please Select--</option>
                    </select>
                </td>
            </tr>

            <tr class="p-5">
                <td class="p-5">
                    <label class="form-label text-white fw-bold">RAM</label>
                    <select class="form-select border-1 border-success d-block" id="catNameRam">
                        <option value="">--Please Select--</option>
                    </select>
                </td>
                <td class="p-5">
                    <label class="form-label text-white fw-bold">RAM Model</label>
                    <select class="form-select border-1 border-success d-block" id="catSelfRam">
                        <option value="">--Please Select--</option>
                    </select>
                </td>
            </tr>

            <tr class="p-5">
                <td class="p-5">
                    <label class="form-label text-white fw-bold">SSD</label>
                    <select class="form-select border-1 border-success d-block" id="catNameSsd">
                        <option value="">--Please Select--</option>
                    </select>
                </td>
                <td class="p-5">
                    <label class="form-label text-white fw-bold">SSD Model</label>
                    <select class="form-select border-1 border-success d-block" id="catSelfSsd">
                        <option value="">--Please Select--</option>
                    </select>
                </td>
            </tr>

            <tr class="p-5">
                <td class="p-5">
                    <label class="form-label text-white fw-bold">Cooler</label>
                    <select class="form-select border-1 border-success d-block" id="catNameCooler">
                        <option value="">--Please Select--</option>
                    </select>
                </td>
                <td class="p-5">
                    <label class="form-label text-white fw-bold">Cooler Model</label>
                    <select class="form-select border-1 border-success d-block" id="catSelfCooler">
                        <option value="">--Please Select--</option>
                    </select>
                </td>
            </tr>

            <tr class="p-5">
                <td class="p-5">
                    <label class="form-label text-white fw-bold">SMPS</label>
                    <select class="form-select border-1 border-success d-block" id="catNameSmps">
                        <option value="">--Please Select--</option>
                    </select>
                </td>
                <td class="p-5">
                    <label class="form-label text-white fw-bold">SMPS Model</label>
                    <select class="form-select border-1 border-success d-block" id="catSelfSmps">
                        <option value="">--Please Select--</option>
                    </select>
                </td>
            </tr>

            <tr class="p-5">
                <td class="p-5">
                    <label class="form-label text-white fw-bold">Windows</label>
                    <select class="form-select border-1 border-success d-block" id="catNameGpu">
                        <option value="">--Please Select--</option>
                        <option value="ten">Windows 10</option>
                        <option value="eleven">Windows 11</option>
                    </select>
                </td>
                <td class="p-5">
                    <label class="form-label text-white fw-bold">Windows Edition</label>
                    <select class="form-select border-1 border-success d-block" id="catSelfGpu">
                        <option value="">--Please Select--</option>
                        <option value="home">Home Edition</option>
                        <option value="pro">Professional Edition</option>
                    </select>
                </td>
            </tr>

        </table>

        <hr class="cst-text-darker border-2"/>

        <p class="text-white mb-0">Your Estimation Price :</p>
        <div class="display-6 text-white fw-bold">
            [sub-total]
        </div>
        <p class="text-white ">including GST</p>
        <div class="my-3"><a href="#" class="cst-text-razer text-decoration-none fw-bold">Click Here</a> To Download the Estimated price PDF</div>



    </div>
</div>
<!--End of builder-->

    <?php include 'footer.php' ?>

</body>
</html>