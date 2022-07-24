
<?php

session_start();

$host = "localhost";
$user = "root";
$pw = "";
$bd = "crud";

$con = mysqli_connect($host, $user, $pw, $bd);



if(isset($con)){
  //  echo'Conexion Exitosa a la Base de Datos';
}
?>