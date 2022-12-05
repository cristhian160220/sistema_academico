<?php
include "include/conexion.php";
include "include/busquedas.php";
include "include/verificar_sesion.php";

$id_docente = $_GET['id'];
$busc_docente = buscarDocenteById($conexion, $id_docente);
$res_b_docente = mysqli_fetch_array($busc_docente);

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
	<link href="Gentella/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
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
								<h2>Editar datos del docente</h2>

								<div class="clearfix"></div>
							</div>
							<div class="x_content">
								<br />
								<form class="form-horizontal form-label-left" method="POST" action="operaciones/actualizar_docente.php">
									<input type="hidden" name="id" value="<?php echo $id_docente; ?>">
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">DNI :
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<input type="number" name="dni" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_docente['dni']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Apellidos y Nombres :
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<input type="text" name="apellidos_nombres" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_docente['apellidos_nombres']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12">Fecha de Nacimiento :
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<input type="date" name="fecha_nac" class="date-picker form-control col-md-7 col-xs-12" value="<?php echo $res_b_docente['fecha_nac']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Dirección :
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<input type="text" name="direccion" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_docente['direccion']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Correo :
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<input type="email" name="correo" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_docente['correo']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Teléfono:
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<input type="number" name="telefono" maxlength="9" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_docente['telefono']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Genero :</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<select name="id_genero" id="id_genero" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_docente['id_genero']; ?>">
												<option value="">Seleccione</option>
												<?php
												$id_genero_docente = $res_b_docente['id_genero'];
												$buscar_genero_d = buscarGenero($conexion);
												while ($res_b_genero_d = mysqli_fetch_array($buscar_genero_d)) {
													$id_genero_d = $res_b_genero_d['id'];
												?>
													<option value="<?php echo $res_b_genero_d['id']; ?>" <?php if ($id_genero_docente == $id_genero_d) {
																																									echo "selected";
																																								}
																																								?>>
														<?php echo $res_b_genero_d['genero']; ?></option>
												<?php
												};
												?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nivel de educación :
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<input name="nivel_educacion" id="nivel_educacion" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_docente['nivel_educacion']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Condición Laboral:
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<input name="cond_laboral" id="cond_laboral" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_docente['cond_laboral']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Cargo :
										</label>
										<div class="col-md-6 col-sm-6 col-xs-12">
											<select name="id_cargo" id="id_cargo" class="form-control col-md-7 col-xs-12" value="<?php echo $res_b_docente['id_cargo']; ?>">
												<option value="">Seleccione</option>
												<?php
												$id_cargo_d = $res_b_docente['id_cargo'];
												$buscar_cargo = buscarCargo($conexion);
												while ($res_b_cargo = mysqli_fetch_array($buscar_cargo)) {
													$id_cargo = $res_b_cargo['id'];
												?>
													<option value="<?php echo $res_b_cargo['id']; ?>" <?php if ($id_cargo_d == $id_cargo) {
														echo "selected";
																																								}
																																								?>>
														<?php echo $res_b_cargo['descripcion']; ?></option>
												<?php
												};
												?>
											</select>
										</div>
									</div>
									<div class="ln_solid"></div>
									<div class="form-group">
										<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
											<a href="./docentes.php" class="btn btn-warning" type="button">Cancelar</a>
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