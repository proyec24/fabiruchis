<?php
include 'bd.php';
if (
    isset($_GET['ID_Permiso']) &&
    isset($_GET['Fecha_Solicitud']) &&
    isset($_GET['Fecha_Inicio']) &&
    isset($_GET['Fecha_Fin']) &&
    isset($_GET['Motivo']) &&
    isset($_GET['FK_Estado_Permiso']) &&
    isset($_GET['FK_Horas_Permiso']) &&
    isset($_GET['FK_Profesor']) &&
    isset($_GET['FK_Tipo_Permiso'])
) {
    $base = new BaseDeDatos();
    $permiso = new Permiso();
    $permiso->Fecha_Solicitud = $_GET['Fecha_Solicitud'];
    $permiso->Fecha_Inicio = $_GET['Fecha_Inicio'];
    $permiso->Fecha_Fin = $_GET['Fecha_Fin'];
    $permiso->Motivo = $_GET['Motivo'];
    $permiso->FK_Estado_Permiso = $_GET['FK_Estado_Permiso'];
    $permiso->FK_Horas_Permiso = $_GET['FK_Horas_Permiso'];
    $permiso->FK_Profesor = $_GET['FK_Profesor'];
    $permiso->FK_Tipo_Permiso = $_GET['FK_Tipo_Permiso'];
    $base->AltasPermiso($permiso, $_GET['ID_Permiso']);
}