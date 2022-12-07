<?php
include('./include/conexion.php');
include('./include/busquedas.php');
include "include/verificar_sesion.php";

$id_condicion = $_GET['id'];
$busc_condicion = buscarCondicionById($conexion, $id_condicion);
$res_b_condicion = mysqli_fetch_array($busc_condicion);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="./Gentella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="./Gentella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgres -->
    <link href="./Gentella/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstra-daterangepicker -->
    <link href="./Gentella/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstra-datetimepicker -->
    <link href="./Gentella/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- Ion.RangSlider -->
    <link href="./Gentella/vendors/normalize-css/normalize.css" rel="stylesheet">
    <link href="./Gentella/vendors/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="./Gentella/vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <!-- Bootstra Colorpicker -->
    <link href="./Gentella/vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    <link href="./Gentella/vendors/cropper/dist/cropper.min.css" rel="stylesheet">
    <!-- Custom Teme Style -->
    <link href="./Gentella/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
    <style>
        input[type=number]::-webkit-outer-spin-button,

        input[type=number]::-webkit-inner-spin-button {

            -webkit-appearance: none;

            margin: 0;

        }



        input[type=number] {

            -moz-appearance: textfield;

        }
    </style>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <?php include "include/menu.php" ?>
                <!-- Menu en la parte superior -->
                <!-- page content -->
                <div class="right_col" role="main">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">

                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <div class="x_panel">
                                                <div class="x_title">
                                                    <h2>Actualizar condicion<small></small></h2>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="x_content">
                                                    <form class="form-horizontal form-label-left" action="./operaciones/actualizar_condicion.php" method="POST" id="formulario_docente">
                                                    <input type="text" name="id" value="<?php echo $id_condicion;?>">

                                                        <div class="item form-group">
                                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Condición
                                                                <span class="required">:</span>
                                                            </label>
                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <input type="text" name="condicion" class="date-picker form-control col-md-7 col-xs-12" value="<?php echo $res_b_condicion['descripcion']; ?>">
                                                            </div>
                                                        </div>
                                                        <br><br>
                                                        <div class="ln_solid"></div>
                                                        <div class="form-group">
                                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                                <a href="./condicion.php" class="btn btn-warning" type="button">Cancelar</a>
                                                                <button type="submit" class="btn btn-success">Guardar</button>
                                                            </div>
                                                        </div>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /page content -->
                                <!-- footer content -->
                                <footer>
                                    <div class="pull-right">
                                        Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                                    </div>
                                    <div class="clearfix"></div>
                                </footer>
                                <!-- /footer content -->
                            </div>
                        </div>
    </body>

    <script src="./Gentella/vendors/bootstrap/dist/js/bootstrap.min.js"></script>

    <script src="./Gentella/vendors/fastclick/lib/fastclick.js"></script>

    <script src="./Gentella/vendors/nprogress/nprogress.js"></script>

    <script src="./Gentella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <script src="./Gentella/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="./Gentella/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="./Gentella/vendors/flot.curvedlines/curvedLines.js"></script>

    <script src="./Gentella/vendors/moment/min/moment.min.js"></script>
    <script src="./Gentella/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <script src=".Gentella/build/js/custom.min.js"></script>
    <script src="./js/campos-especificos.js"></script>
</body>

</html>
<script src="./Gentella/vendors/jquery/dist/jquery.min.js"></script>
<script src="./Gentella/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="./Gentella/vendors/fastclick/lib/fastclick.js"></script>
<script src="./Gentella/vendors/nprogress/nprogress.js"></script>
<script src="./Gentella/vendors/moment/min/moment.min.js"></script>
<script src="./Gentella/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="./Gentella/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<script src="./Gentella/vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
<script src="./Gentella/vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<script src="./Gentella/vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
<script src="./Gentella/vendors/jquery-knob/dist/jquery.knob.min.js"></script>
<script src="./Gentella/vendors/cropper/dist/cropper.min.js"></script>
<script src="./Gentella/build/js/custom.min.js"></script>

<script>
    $('#myDatepicker').datetimepicker();

    $('#myDatepicker2').datetimepicker({
        format: 'DD.MM.YYYY'
    });

    $('#myDatepicker3').datetimepicker({
        format: 'hh:mm A'
    });

    $('#myDatepicker4').datetimepicker({
        ignoreReadonly: true,
        allowInputToggle: true
    });

    $('#datetimepicker6').datetimepicker();

    $('#datetimepicker7').datetimepicker({
        useCurrent: false
    });

    $("#datetimepicker6").on("dp.change", function(e) {
        $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
    });

    $("#datetimepicker7").on("dp.change", function(e) {
        $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
    });
</script>
</body>

</html>