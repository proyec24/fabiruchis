<?php

include "bd.php";
echo '1';
$nomina = filter_input(INPUT_POST, "nomina");
$query = "SELECT * FROM profesor WHERE id_profesor ='$nomina'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);
if($row){
  echo '1';
}
mysqli_close($con);
?>