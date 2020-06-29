<?php
include "bd.php";
$user = filter_input(INPUT_POST, "usuario");
$password = filter_input(INPUT_POST, "contra");
$query = "SELECT * FROM profesor WHERE id_profesor ='$user' AND contrasena='$password'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);
if($row){
  echo '1';
}
mysqli_close($con);
?>