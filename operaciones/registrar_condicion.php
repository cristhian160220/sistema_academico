<?php 
include "../include/conexion.php";
$condicion = $_POST['condicion'];
$sql = "INSERT INTO condicion (   descripcion  ) VALUES ('$condicion')";
$ejec = mysqli_query($conexion, $sql);
if ($ejec) {
 echo "<script>
        alert('listo');
         window.location= '../condicion.php'
    	</script>";}else{
		echo "<script>
		alert('error');
		window.history.back();</script>";}?>