<?php
include "../include/conexion.php";
$usuario = $_POST['usuario']; // recibir datos de login.php
$password = $_POST['password']; // recibir datos de login.php

$sql = "SELECT * FROM usuarios_docentes WHERE usuario='$usuario' ORDER BY id LIMIT 1"; // consulta de busqueda
$ejecutar_consulta = mysqli_query($conexion, $sql); // ejecuta consulta
$contar_filas = mysqli_num_rows($ejecutar_consulta); // cuenta las filas devueltas de la consulta
$resultado_consulta = mysqli_fetch_array($ejecutar_consulta);//desfragmentar respuesta
$pass = $resultado_consulta['password']; //capturo la contraseña de la base de datos
if($contar_filas==1 && password_verify($password,$pass)){
    session_start();
    $_SESSION['id_usu_sisacad_iesthuanta'] = $resultado_consulta['id'];
    header("location: ../index.php");
}else{
    echo "<script>
    alert('Error, Usuario y/o Contraseña incorrecta');
    window.history.back();
    </script>
    ";
}


?>