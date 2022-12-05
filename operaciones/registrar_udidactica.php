<?php 
include "../include/conexion.php";
include('../include/busquedas.php');
$nombre  = $_POST['nombre'];
$carrera  = $_POST['carrera'];
$modulo  = $_POST['modulo'];
$semestre  = $_POST['semestre'];
$creditos  = $_POST['creditos'];
$horas  = $_POST['horas'];
$tipo  = $_POST['tipo'];
$orden  = $_POST['orden'];
echo "Nombre:".$nombre." CARRERA:".$carrera." MODULO:".$modulo." SEMESTRE:".$semestre." CREDITOS:".$creditos." HORAS:".$horas." TIPO:".$tipo." ORDEN:".$orden;
$sql = "INSERT INTO unidad_didactica (descripcion, id_programa_estudio, id_modulo, id_semestre, creditos, horas, tipo, orden ) VALUES ('$nombre', '$carrera', '$modulo', '$semestre', '$creditos', '$horas', '$tipo', '$orden')";
$ejec =mysqli_query($conexion, $sql);
if ($sql) {
    echo "<script>
        alert('listo');
         window.location= '../unidad_didactica.php'
    	</script>";
                
}else{
    echo "<script>
        alert('Error');
        window.history.back();
        </script>
        ";}?>