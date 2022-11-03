<?php
session_start();
if (!isset($_SESSION['id_usu_sisacad_iesthuanta'])) {
   header("location: login.php");
}
?>