<?php
include "bd.php";
echo '1';
$nomina = filter_input(INPUT_POST, "nomina");
$nombre = filter_input(INPUT_POST, "nombre");
$apellidos = filter_input(INPUT_POST, "apellidos");
$curp = filter_input(INPUT_POST, "curp");
$diaNac = filter_input(INPUT_POST, "diaNac");
$contrasena = filter_input(INPUT_POST, "contrasena");
$plantel = filter_input(INPUT_POST, "plantel");
$tipo = filter_input(INPUT_POST, "tipo");
$query = "UPDATE profesor SET nombre_profesor = '$nombre', apellidos_profesor = '$apellidos', curp = '$curp', cumpleanos = '$diaNac', contrasena = '$contrasena', fk_plantel = '$plantel', fk_tipo_profesor = '$tipo' WHERE id_profesor = '$nomina'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);
if($row){
  echo '1';
}
mysqli_close($con);
?>