<?php
include "bd.php";

if (isset($_GET['ID_Profesor'])) {
    $n = $_GET['ID_Profesor'];
    $bd = new BaseDeDatos();
    $res = $bd->ConsultaProfesor($n);

    $str = '';
    $n = count($res);
    echo "[";
    for ($i = 0; $i < $n; $i++) {
        echo json_encode($res[$i]);

        if ($i < ($n-1)) {
            echo ",";
        }
    }
    echo "]";
}