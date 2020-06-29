<?php
include 'bd.php';
if (
    isset($_GET['ID_Plantel']) &&
    isset($_GET['Nombre_Plantel']) &&
    isset($_GET['Direccion']) &&
    isset($_GET['Telefono'])
) {
    $base = new BaseDeDatos();
    $plantel = new Plantel();
    $plantel->Nombre_Plantel = $_GET['Nombre_Plantel'];
    $plantel->Direccion = $_GET['Direccion'];
    $plantel->Telefono = $_GET['Telefono'];
    $base->AltasPlantel($plantel, $_GET['ID_Plantel']);
}