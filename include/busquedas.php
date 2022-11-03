<?php
function buscarGenero($conexion){
    $sql = "SELECT * FROM genero";
    return mysqli_query($conexion, $sql);
}
function buscarCargo($conexion){
    $sql = "SELECT * FROM cargo";
    return mysqli_query($conexion, $sql);
}
function buscarProgramaEstudio($conexion){
    $sql = "SELECT * FROM programa_estudios";
    return mysqli_query($conexion, $sql);
}
function buscarSemestre($conexion){
    $sql = "SELECT * FROM semestre";
    return mysqli_query($conexion, $sql);
}
function buscarCondicion($conexion){
    $sql = "SELECT * FROM condicion";
    return mysqli_query($conexion, $sql);
}
function buscarEstudianteByDni($conexion, $dni){
    $sql = "SELECT * FROM estudiante WHERE dni='$dni'";
    return mysqli_query($conexion, $sql);
}
function buscarEstudianteById($conexion, $id){
    $sql = "SELECT * FROM estudiante WHERE id='$id'";
    return mysqli_query($conexion, $sql);
}
function buscarEstudiantes($conexion){
    $sql = "SELECT * FROM estudiante";
    return mysqli_query($conexion, $sql);
}
function buscarDocenteById($conexion, $id){
    $sql = "SELECT * FROM docente WHERE id=$id";
    return mysqli_query($conexion, $sql);
}



?>