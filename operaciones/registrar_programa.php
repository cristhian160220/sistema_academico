<?php 
    include "../include/conexion.php";
    include "../include/busquedas.php";
    $codigo = $_POST['codigo'];
    $tipo = $_POST['tipo'];
    $nombre = $_POST['nombre'];
    $resolucion = $_POST['resolucion'];
    $b_programa = buscarProgramaByCodigo ($conexion, $codigo);
    $c_b_programa = mysqli_num_rows($b_programa);

    if ($c_b_programa == 0) {
    $insertar = "INSERT INTO programa_estudios (codigo, tipo, nombre, resolucion) VALUES ('$codigo', '$tipo', '$nombre', '$resolucion')";
    $ejec_consulta = mysqli_query($conexion, $insertar);
        if($ejec_consulta){
            echo "<script>
                alert('listo');
                window.location= '../programa_estudios.php';
    			</script>";
        }else{
            echo "<script>
                alert('error');
                window.history.back();
                </script>";}}
?>