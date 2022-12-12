<?php
session_start();
if (!isset($_SESSION['id_usu_sistema_academico'])) {
   header("location: login.php");
}
?>