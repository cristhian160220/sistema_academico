<?php
include "../include/conexion.php";
include "../include/busquedas.php";
$id = $_POST['id'];
$dni = $_POST['dni'];
$nom_ap = $_POST['nom_ap'];
$id_genero = $_POST['id_genero'];
$fecha_nac = $_POST['fecha_nac'];
$direccion = $_POST['direccion'];
$email = $_POST['email'];
$cel = $_POST['cel'];
$anio_ingreso = $_POST['anio_ingreso'];
$programa_estudio = $_POST['programa_estudio'];
$semestre = $_POST['semestre'];
$seccion = $_POST['seccion'];
$turno = $_POST['turno'];
$condicion = $_POST['condicion'];
$discapacidad = $_POST['discapacidad'];

$sql = "UPDATE estudiante SET dni='$dni', apellidos_nombres='$nom_ap', id_genero='$id_genero', fecha_nac='$fecha_nac', direccion='$direccion', correo='$email', telefono='$cel', anio_ingreso='$anio_ingreso', id_programa_estudios='$programa_estudio', id_semestre='$semestre', seccion='$seccion', turno='$turno', id_condicion='$condicion', discapacidad='$discapacidad' WHERE id='$id'";

$ejec_consulta = mysqli_query($conexion, $sql);

if ($ejec_consulta) {
    echo "<script>
					alert('Datos actualizados de manera Correcta');
					window.location= '../estudiantes.php';
				</script>
			";
}else{
    echo "<script>
					alert('Error al Actualizar Registro');
					window.history.back();
				</script>
			";
}
mysqli_close($conexion);
?>