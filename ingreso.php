<?php
include "bd.php";
$user = filter_input(INPUT_POST, "usuario");
$password = filter_input(INPUT_POST, "contra");
$tipo_profesor=3;
$query = "SELECT * FROM profesor WHERE id_profesor ='$user' AND contrasena='$password' AND FK_Tipo_Profesor='$tipo_profesor'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);
if($row){
  echo '1';
}
mysqli_close($con);
?>