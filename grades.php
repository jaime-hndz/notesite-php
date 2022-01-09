<?php

session_start();

$_SESSION["Loggedin"] = true;
$_SESSION["email"] = 'admin@gmail.com';
$_SESSION["type"] = 'admin';

header("location:index.php");


 ?>
