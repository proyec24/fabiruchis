<?php
include "bd.php";
$user = filter_input(INPUT_POST, "usuario");
$password = filter_input(INPUT_POST, "contra");
$tipo_profesor=3;
$query = "SELECT * FROM profesor WHERE id_prof ='$user' AND contrasena='$password' AND fk_tipo_profesor='$tipo_profesor'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);
if($row){
  echo '1';
}
mysqli_close($con);
?>