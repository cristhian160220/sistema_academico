
<?php
// conexión utiliza servidor-usuario-contraseña-base de datos
$conexión =mysqli_connect("localhost" , "", "", "sistema_academico");
if  ($conexion) {
}else{
        echo "conexion fallida";
    }

?>