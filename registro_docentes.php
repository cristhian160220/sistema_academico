<?php
//INCLUIMOS LO QUE NECESITAMOS

include('./include/conexion.php');
include('./include/busquedas.php');
include "include/verificar_sesion.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>registros de docentes </title>

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
                          <h2>Registrar docente<small></small></h2>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                          <form class="form-horizontal form-label-left" action="./operaciones/resgistrar_docente.php" method="POST" id="formulario_docente">
                          
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">DNI<span class="required">:</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="dni_docente" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="dni_docente" placeholder="Ingrese su DNI" required="" type="number" maxlength="8" ;>
                              </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Nombres y apellidos<span class="required">:</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="email" name="nombre" required="" class="form-control col-md-7 col-xs-12">
                              </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Fecha de Nacimiento<span class="required">:</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="date" id="email2" name="fecha" data-validate-linked="email" required="" class="form-control col-md-7 col-xs-12">
                              </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Dirección<span class="required">:</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="number" name="direccion" required="" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
                              </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Correo<span class="required">:</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="email" id="website" name="correo" required="" placeholder="youremail@example.com" class="form-control col-md-7 col-xs-12">
                              </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Teléfono<span class="required">:</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="occupation" type="number" name="telefono" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12 telefono" placeholder="915 068 001" id="telefono" maxlength="9" />
                              </div>
                            </div>
                            <div class="item form-group">
                              <label for="password" class="control-label col-md-3">Género:</label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <select type="number" name="genero" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" id="genero">
                                  <option value="">Seleccionar Género</option>
                                  <?php
                                  //ENVIAMOS LO QUE NUESTRA FUNCION PIDE EN ESTE CASO LA CONEXION 
                                  $buscar_genero = buscarGenero($conexion);
                                  //HACEMOS NUESTRO BUCLE
                                  //
                                  while ($res_b_genero = mysqli_fetch_array($buscar_genero)) {
                                    //IMPRIMIMOS NUESTRO ID COMO PRUEBA
                                    //echo $res_b_genero['id'];
                                  ?>
                                    <option value='<?php echo $res_b_genero['id'] ?>'><?php echo $res_b_genero['genero'] ?></option>
                                  <?php
                                  };
                                  ?>
                                </select>
                              </div>
                            </div>

                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12"> Educacion: </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="password2" type="text" name="condicion" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="">
                              </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Ocupacion Laboral:
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="telephone" name="nivel" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
                              </div>
                            </div>
                            <div class="item form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Cargo:
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <select id="cargo" required="" name="cargo" class="form-control col-md-7 col-xs-12" type="number">
                                  <option value="">Seleccionar Cargo</option>

                                  <?php
                                  $buscar_cargo = buscarCargo($conexion);
                                  while ($res_b_cargo = mysqli_fetch_array($buscar_cargo)) {
                                  ?>
                                    <option value='<?php echo $res_b_cargo['id'] ?>'><?php echo $res_b_cargo['descripcion'] ?></option>
                                  <?php
                                  }
                                  ?>
                                </select>
                              </div>
                              <br><br>
                              <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="./docentes.php" class="btn btn-warning" type="button">Cancelar</a>
						              <button class="btn btn-primary" type="reset">Limpiar</button>
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
bbiemvenida <a href="https://cfc.com">cfc</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div></body>

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