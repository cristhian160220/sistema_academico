<?php 
include "../include/conexion.php";
$id = $_POST['id'];
$usuario = $_POST ['usuario'];
$password = $_POST ['password'];
$password_fuerte = password_hash($password, PASSWORD_DEFAULT);// encriptar password
$sql = "UPDATE usuarios_docentes SET usuario='$usuario', password='$password_fuerte' WHERE id='$id'";
$ejec = mysqli_query($conexion, $sql);
if ($ejec) {
    echo "<script>
	alert('listpo');
	window.location= '../usuarios_docentes.php';
	</script>";
}else{
    echo "<script>
	alert('error no se puede');
	window.history.back();
	</script>";}mysqli_close($conexion);
?>