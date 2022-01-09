<?php

$dbhost= "localhost";
$dbuser ="root";
$dbpass="";
$dbname="FINAL";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn){

   die("No Existe Conexion: ".mysqli_connect_error());

}


 ?>
