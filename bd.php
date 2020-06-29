<?php
    $bd="heroku_db9e8d2d3365016";
    $user="b4964df4deb13c";
    $pass="b6f2563d";
    $hostname="us-cdbr-east-02.cleardb.com";
    $con = new mysqli($hostname, $user, $pass, $bd);
     if($con->connect_error){
        die("Error de conexion: " .$con->connection_error);
      }
?>

