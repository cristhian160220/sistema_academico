<?php 
include "../include/conexion.php";
$id = $_POST['id'];
$condicion = $_POST['condicion'];
$sql = "UPDATE condicion SET descripcion= '$condicion' where id='$id'";
$ejec = mysqli_query($conexion, $sql);

if ($ejec) {
    echo "<script>
    alert('Datos actualizados de manera Correcta');
    window.location= '../condicion.php';
    </script>";
}else{echo "<script>
    alert('Error al Actualizar Cargo');
    window.history.back();</script>";
}mysqli_close($conexion);
?>