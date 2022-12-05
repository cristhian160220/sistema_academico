<?php
include "../include/conexion.php";
include "../include/busquedas.php";
$id = $_POST['id'];
$programa = $_POST['programa_estudio'];
$descripcion = $_POST['descripcion'];
$nro_mdo = $_POST['nro_mdo'];
$sql = "UPDATE modulo_profesional SET descripcion=' $descripcion', nro_modulo='$nro_mdo', id_programa_estudio='$programa' WHERE id='$id' ";
$ejec_consulta = mysqli_query($conexion, $sql);

if ($ejec_consulta) {
    echo "<script>
	alert(listo');
	window.location= '../modulo_formativo.php';
	</script>";
    } else {echo "<script>
	alert('error');
	window.history.back();
	</script>";}
    mysqli_close($conexion);
    ?>
