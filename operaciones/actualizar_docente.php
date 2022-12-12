<?php
include "../include/conexion.php";
include "../include/busquedas.php";
$id = $_POST['id'];
$dni = $_POST['dni'];
$apellidos_nombres = $_POST['apellidos_nombres'];
$fecha_nac = $_POST['fecha_nac'];
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$id_genero = $_POST['id_genero'];
$nivel_educacion = $_POST['nivel_educacion'];
$cond_laboral = $_POST['cond_laboral'];
$id_cargo = $_POST['id_cargo'];


$sql = "UPDATE docente SET dni='$dni', apellidos_nombres='$apellidos_nombres', fecha_nac='$fecha_nac', direccion='$direccion', correo='$correo', telefono='$telefono', id_genero='$id_genero', nivel_educacion='$nivel_educacion', cond_laboral='$cond_laboral', id_cargo='$id_cargo' WHERE id='$id'";
$ejec_consulta = mysqli_query($conexion, $sql);

if ($ejec_consulta) {
    echo "<script>
	alert('listo');
	window.location= '../docentes.php';
	</script>";
} else {
    echo "<script>
	alert('ocurrio error');
	window.history.back();
	</script>";} mysqli_close($conexion);
?>