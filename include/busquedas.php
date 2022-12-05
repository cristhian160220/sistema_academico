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
function buscarDocente($conexion){
    $sql = "SELECT * FROM docente";
    return mysqli_query($conexion, $sql);
}
function buscarDocenteById($conexion, $id){
    $sql = "SELECT * FROM docente WHERE id='$id'";
    return mysqli_query($conexion, $sql);
}
function buscarDocenteByDni($conexion, $dni){
    $sql = "SELECT * FROM docente WHERE dni='$dni'";
    return mysqli_query($conexion, $sql);
}
function buscarDatoInstitucional($conexion){
    $sql = "SELECT*FROM datos_institucionales";
    return mysqli_query($conexion, $sql);
}
function buscarModulo($conexion){
    $sql = "SELECT*FROM modulo_profesional";
    return mysqli_query($conexion, $sql);
}
function buscarPeriodoAcademico( $conexion){
    $sql = "SELECT*FROM periodo_academico";
    return mysqli_query($conexion, $sql);
}
function buscarSemestreById($conexion, $id){
    $sql = "SELECT *FROM semestre WHERE id= '$id'";
    return mysqli_query($conexion, $sql);
}
function buscarUsuarioDocente ($conexion){
    $sql = "SELECT * FROM usuarios_docentes";
    return mysqli_query($conexion, $sql);
}
?>