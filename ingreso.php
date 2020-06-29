<?php
include "bd.php";

if (isset($_GET['ID_Profesor']) && isset($_GET['Contrasena'])) {
    $ID_Profesor = $_GET['ID_Profesor'];
    $Contrasena = $_GET['Contrasena'];

    $bd = new BaseDeDatos();
    $res = $bd->Ingreso($ID_Profesor, $Contrasena);

    echo '{"ID_Profesor":'.$Contrasena.'}';
}