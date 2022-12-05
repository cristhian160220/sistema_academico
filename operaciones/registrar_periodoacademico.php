<?php 
include "../include/conexion.php";
$p_academico=$_POST['p_academico'];
$fecha_inicio=$_POST['fecha_inicio'];
$fecha_fin= $_POST['fecha_fin'];
$director=$_POST['director'];
$fecha_actas= $_POST['fecha_actas'];
$sql = "INSERT INTO periodo_academico (nombre, fecha_inicio, fecha_fin, director, fecha_actas ) VALUES ('$p_academico', '$fecha_inicio', '$fecha_fin', '$director ', '$fecha_actas')";
$ejec =mysqli_query($conexion, $sql);
if ($sql) {
    echo "<script>
                alert('listo');
                window.location= '../periodo_academico.php'
    			</script>";
}else{
    echo "<script>
        alert('error');
        window.history.back();
        </script> ";}?>