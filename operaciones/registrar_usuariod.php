<?php
include "../include/conexion.php"; //incluir el archivo de la conexion
$docente = $_POST['docente']; //recibir datos y guardando en una variable $docente
$usuario = $_POST['usuario']; //recibir datos y guardando en una variable $usuario
$password = $_POST['password']; //recibir datos y guardando en una variable $password

$password_fuerte = password_hash($password, PASSWORD_DEFAULT);// encriptar password

$consulta = "INSERT INTO usuarios_docentes (id_docente, usuario, password) VALUES ('$docente', '$usuario', '$password_fuerte')";
$ejec_consulta = mysqli_query($conexion, $consulta);
if($ejec_consulta){
    echo "<script>
        alert('Registro Satisfactorio');
        window.location = '../login.php';
    </script>";
}else{
    echo "<script>
        alert('Error al registrar usuario');
        window.history.back();
    </script>";
}

?>