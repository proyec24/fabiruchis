<?php
include 'bd.php';
if (
    isset($_GET['ID_Profesor']) &&
    isset($_GET['Nombre_Profesor']) &&
    isset($_GET['Apellidos_Profesor']) &&
    isset($_GET['Curp']) &&
    isset($_GET['Cumpleanos']) &&
    isset($_GET['Contrasena']) &&
    isset($_GET['FK_Plantel']) &&
    isset($_GET['FK_Tipo_Profesor'])
) {
    $base = new BaseDeDatos();
    $profesor = new Profesor();
    $profesor->ID_Profesor = $_GET['ID_Profesor'];
    $profesor->Nombre_Profesor = $_GET['Nombre_Profesor'];
    $profesor->Apellidos_Profesor = $_GET['Apellidos_Profesor'];
    $profesor->Curp = $_GET['Curp'];
    $profesor->Cumpleanos = $_GET['Cumpleanos'];
    $profesor->Contrasena = $_GET['Contrasena'];
    $profesor->FK_Plantel = $_GET['FK_Plantel'];
    $profesor->FK_Tipo_Profesor = $_GET['FK_Tipo_Profesor'];
    $base->AltasProfesor($profesor, $_GET['ID_Contacto']);
}