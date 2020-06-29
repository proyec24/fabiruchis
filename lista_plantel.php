<?php
include "bd.php";

if (isset($_GET['ID_Plantel'])) {
    $n = $_GET['ID_Plantel'];
    $bd = new BaseDeDatos();
    $res = $bd->ConsultaPlantel($n);

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