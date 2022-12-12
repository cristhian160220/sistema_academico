<?php 
 include "../include/conexion.php";
      $usuario = $_POST['usuario'];
      $password = $_POST['password'];

 $sql = "SELECT * FROM usuario_docentes WHERE usuario='$usuario' ORDER BY id LIMIT 1";

      $ejecutar_consulta= mysqli_query($conexion, $sql);
      $contar_filas = mysqli_num_rows($ejecutar_consulta);
      $resultado_consulta = mysqli_fetch_array($ejecutar_consulta);
      $pass = $resultado_consulta['password'];
      if($contar_filas==1 && password_verify($password,$pass)) {
        session_start();
    $_SESSION['id_usu_sistema_academico'] = $resultado_consulta['id'];
    header("location: ../index.php");
}else if($contar_filas === 0 ){
    echo "<script>
    alert('Esta persona no existe en nuestro universo');
    window.location= '../login.php'; </script> "; 
}else {
    echo "<script>
    alert('Usuario incorrecto');
    window.location= '../login.php';</script>";}
    