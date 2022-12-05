<?php 
include "../include/conexion.php";
$id = $_POST['id'];
$usuario = $_POST ['usuario'];
$password = $_POST ['password'];
$password_fuerte = password_hash($password, PASSWORD_DEFAULT);// encriptar password
$sql = "UPDATE usuarios_estudiante SET usuario='$usuario', password='$password_fuerte' WHERE id='$id'";
$ejec = mysqli_query($conexion, $sql);
if ($ejec) {
    echo "<script>
	alert('se cambiaron los datos');
	window.location= '../usuario_estudiantes.php';
	</script>";
}else{ echo "<script>
	alert('error');
	window.history.back();</script>";}
mysqli_close($conexion);
?>