<?php
include('../include/conexion.php');
include('../include/busquedas.php');

$dni = $_POST['dni_docente'];
$nombre = $_POST['nombre'];
$fecha = $_POST['fecha'];
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$genero = $_POST['genero'];
$condicion = $_POST['condicion'];
$nivel = $_POST['nivel'];
$cargo = $_POST['cargo'];
$b_docente = buscarDocenteByDni($conexion, $dni);
$c_r_b_docente = mysqli_num_rows($b_docente);
if ($c_r_b_docente === 0) {
 $insertar = "INSERT INTO docente (dni, apellidos_nombres, fecha_nac, direccion, correo, telefono,	id_genero, nivel_educacion, cond_laboral, id_cargo) VALUES ('$dni', '$nombre', '$fecha', '$direccion', '$correo', '$telefono', '$genero', '$condicion', '$nivel', '$cargo')";
$ejecutar_insertar = mysqli_query($conexion, $insertar);
$b_id_docente = buscarDocenteByDni($conexion, $dni);
$res_b_docente = mysqli_fetch_array($b_id_docente);
$id_docente = $res_b_docente['id'];
$pass = "@".$dni;
$password_fuerte = password_hash($pass, PASSWORD_DEFAULT);
 $insertar_usu = "INSERT INTO usuarios_docentes (id_docente, usuario, password) VALUES ('$id_docente', '$dni', '$password_fuerte')";
$ejec_insert_usu = mysqli_query($conexion, $insertar_usu);

if ($ejec_insert_usu) {
	echo "<script>
             alert('listo');
             window.location= '../docentes.php'
    		</script>";
}else{
	echo "<script>
		alert('Error');
		window.history.back();
		</script>
		";}}
?>