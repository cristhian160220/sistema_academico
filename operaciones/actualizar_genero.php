<?php 

include "../include/conexion.php";
$genero = $_POST ['genero'];
$id = $_POST['id'];
$sql = "UPDATE genero SET genero='$genero' WHERE id='$id'";
$ejec = mysqli_query($conexion, $sql);
if ($ejec) {
    echo "<script>
	alert('perfecto');
	window.location= '../genero.php';
	</script>";
}else{
    echo "<script>
	alert('error');
	window.history.back();
	</script>";
}
mysqli_close($conexion);
?>