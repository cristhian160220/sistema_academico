<?php
include "include/conexion.php";
include "include/busquedas.php";
include "include/verificar_sesion.php";

$id_estudiante = $_GET['id'];
$busc_estudiante = buscarEstudianteById($conexion, $id_estudiante);
$res_b_estudiante = mysqli_fetch_array($busc_estudiante);

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
    <link href="Gentella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="Gentella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="Gentella/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="Gentella/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="Gentella/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="Gentella/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="Gentella/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="Gentella/build/css/custom.min.css" rel="stylesheet">
  </head>
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
                    <h2>Editar Estudiante</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left" method="POST" action="operaciones/actualizar_estudiante.php">
                        <input type="hidden" name="id" value="<?php echo $id_estudiante;?>">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">DNI :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" name="dni" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_estudiante['dni']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Apellidos y Nombres :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="nom_ap" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_estudiante['apellidos_nombres']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Genero :</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="id_genero" id="id_genero" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_estudiante['id_genero']; ?>">
                          <option value="">Seleccione</option>
                          <?php
                          $id_genero_estudiante = $res_b_estudiante['id_genero'];
                          $buscar_genero = buscarGenero($conexion);
                          while ($res_b_genero = mysqli_fetch_array($buscar_genero)) {
                            $id_genero = $res_b_genero['id'];
                          ?>
                          <option value="<?php echo $res_b_genero['id']; ?>" 
                          <?php if ($id_genero_estudiante == $id_genero) {
                            echo "selected";
                          } ?>
                          ><?php echo $res_b_genero['genero']; ?></option>
                          <?php
                          };
                          ?>
                        </select>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha de Nacimiento :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date" name="fecha_nac" class="date-picker form-control col-md-7 col-xs-12" required="required"  value="<?php echo $res_b_estudiante['fecha_nac']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Dirección :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="direccion" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_estudiante['direccion']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Correo :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" name="email" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_estudiante['correo']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">NRO Celular :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" name="cel" maxlength="9" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_estudiante['telefono']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Año de Ingreso :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date" name="anio_ingreso" maxlength="9" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_estudiante['anio_ingreso']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Programa de Estudios :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="programa_estudio" id="programa_estudio" class="form-control col-md-7 col-xs-12">
                          <option value="">Seleccione</option>
                          <?php
                          $buscar_pe = buscarProgramaEstudio($conexion);
                          while ($res_b_pe = mysqli_fetch_array($buscar_pe)) {
                          ?>
                          <option value="<?php echo $res_b_pe['id']; ?>"
                          <?php if ($res_b_estudiante['id_programa_estudios'] == $res_b_pe['id']) {
                            echo "selected";
                          } ?>
                          ><?php echo $res_b_pe['nombre']; ?></option>
                          <?php
                          };
                          ?>
                        </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Semestre:
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="semestre" id="semestre" class="form-control col-md-7 col-xs-12">
                          <option value="">Seleccione</option>
                          <?php
                          $buscar_sem = buscarSemestre($conexion);
                          while ($res_b_sem = mysqli_fetch_array($buscar_sem)) {
                          ?>
                          <option value="<?php echo $res_b_sem['id']; ?>"
                          <?php if ($res_b_estudiante['id_semestre'] == $res_b_sem['id']) {
                            echo "selected";
                          } ?>
                          ><?php echo $res_b_sem['descripcion']; ?></option>
                          <?php
                          };
                          ?>
                        </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Seccion :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="seccion" maxlength="9" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_estudiante['seccion']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Turno :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="turno" maxlength="9" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_estudiante['turno']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Condición :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="condicion" id="condicion" class="form-control col-md-7 col-xs-12">
                          <option value="">Seleccione</option>
                          <?php
                          $buscar_condicion = buscarCondicion($conexion);
                          while ($res_b_condicion = mysqli_fetch_array($buscar_condicion)) {
                          ?>
                          <option value="<?php echo $res_b_condicion['id']; ?>"
                          <?php if ($res_b_estudiante['id_condicion'] == $res_b_condicion['id']) {
                            echo "selected";
                          } ?>
                          ><?php echo $res_b_condicion['descripcion']; ?></option>
                          <?php
                          };
                          ?>
                        </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Discapacidad :
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="discapacidad" id="discapacidad" class="form-control col-md-7 col-xs-12">
                            <option value="">Seleccione</option>
                            <option value="SI" <?php if($res_b_estudiante['discapacidad'] == "SI"){ echo "selected";}; ?>>SI</option>
                            <option value="NO" <?php if($res_b_estudiante['discapacidad'] == "NO"){ echo "selected";}; ?>>NO</option>
                          </select>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancelar</button>
						  <button class="btn btn-primary" type="reset">Limpiar</button>
                          <button type="submit" class="btn btn-success">Actualizar Datos</button>
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
    <!-- jQuery -->
    <script src="Gentella/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="Gentella/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="Gentella/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="Gentella/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="Gentella/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="Gentella/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="Gentella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="Gentella/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="Gentella/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="Gentella/vendors/Flot/jquery.flot.js"></script>
    <script src="Gentella/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="Gentella/vendors/Flot/jquery.flot.time.js"></script>
    <script src="Gentella/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="Gentella/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="Gentella/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="Gentella/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="Gentella/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="Gentella/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="Gentella/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="Gentella/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="Gentella/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="Gentella/vendors/moment/min/moment.min.js"></script>
    <script src="Gentella/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="Gentella/build/js/custom.min.js"></script>
  </body>
</html>