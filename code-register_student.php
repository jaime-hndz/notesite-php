<?php

  session_start();
  require_once 'conn.php';

  if ($_SESSION['Loggedin'] == true && $_SESSION['type'] == 'admin') {

    $query = "SELECT * FROM users_admin WHERE email = '". $_SESSION['email'] ."'";
    $result = mysqli_query($conn, $query);

    $row = mysqli_fetch_array($result);


  }else {
    header('location:index.php');
  }

  $nombre = $apellido = $email = $pass = $pass2 = '';
  $error_user = $error_pass= $error_pass2 = $error_final ='';
  $materia = $seccion= $ultipass=  '';




  if ($_SERVER["REQUEST_METHOD"]== "POST") {

    $nombre = $_POST['txtnombre'];
    $apellido = $_POST['txtapellido'];
    $pass2 =$_POST['txtpassword2'];
    $email = $_POST['txtemail'];
    $seccion =  $_POST['seccion'];
    $curso  = $_POST['curso'];
    $seccion2 =  $_POST['curso'] . $_POST['seccion'];

        $query = mysqli_query($conn, "SELECT * FROM users_student WHERE email= '".$email."'");
        $nr = mysqli_num_rows($query);

        if($nr > 0){

          $error_user= 'Este usuario ya existe';

        }else {


        }

        if (strlen(trim($_POST["txtpassword"])) < 5) {

          $error_pass="La contraseña es muy floja, debe tener por lo menos 5 carácteres";
        }
        else {

          $pass = trim($_POST["txtpassword"]);

          if ($pass != $pass2) {
            $error_pass2 ="las contraseñas no coinciden";
          }

        }
        $ultipass =  password_hash($pass, PASSWORD_DEFAULT);

        if ((empty($error_user)) && (empty($error_pass)) && (empty($error_pass2)) ) {

          $insertar="INSERT INTO users_student (nombre, apellido, email, password, seccion, avatar)values('".$nombre."','".$apellido."','".$email."', '".$ultipass."', '".$seccion2."', 'perfiles/default.jpg')";
          $insertar2="INSERT INTO artistica (nombre, apellido, seccion, 1ra, 2da, 3ra, 4ta)values('".$nombre."','".$apellido."', '".$seccion2."', 0, 0, 0, 0)";
          $insertar3="INSERT INTO fihr (nombre, apellido, seccion, 1ra, 2da, 3ra, 4ta)values('".$nombre."','".$apellido."', '".$seccion2."', 0, 0, 0, 0)";
          $insertar4="INSERT INTO fisica (nombre, apellido, seccion, 1ra, 2da, 3ra, 4ta)values('".$nombre."','".$apellido."', '".$seccion2."', 0, 0, 0, 0)";
          $insertar5="INSERT INTO ingles (nombre, apellido, seccion, 1ra, 2da, 3ra, 4ta)values('".$nombre."','".$apellido."', '".$seccion2."', 0, 0, 0, 0)";
          $insertar6="INSERT INTO lenguaje (nombre, apellido, seccion, 1ra, 2da, 3ra, 4ta)values('".$nombre."','".$apellido."', '".$seccion2."', 0, 0, 0, 0)";
          $insertar7="INSERT INTO matematicas (nombre, apellido, seccion, 1ra, 2da, 3ra, 4ta)values('".$nombre."','".$apellido."', '".$seccion2."', 0, 0, 0, 0)";
          $insertar8="INSERT INTO naturales (nombre, apellido, seccion, 1ra, 2da, 3ra, 4ta)values('".$nombre."','".$apellido."', '".$seccion2."', 0, 0, 0, 0)";
          $insertar9="INSERT INTO sociales (nombre, apellido, seccion, 1ra, 2da, 3ra, 4ta)values('".$nombre."','".$apellido."', '".$seccion2."', 0, 0, 0, 0)";

        if ($stmt = mysqli_query($conn, $insertar) && $stmt2 = mysqli_query($conn, $insertar2) && $stmt3 = mysqli_query($conn, $insertar3)&& $stmt4 = mysqli_query($conn, $insertar4)&& $stmt5 = mysqli_query($conn, $insertar5)&& $stmt6 = mysqli_query($conn, $insertar6)&& $stmt7 = mysqli_query($conn, $insertar7)&& $stmt8 = mysqli_query($conn, $insertar8)&& $stmt9 = mysqli_query($conn, $insertar9)) {

            header ('location: index.php');

          }else{
            $error_final = 'Algo salió mal, intentalo mas tarde';
          }
        }



  }





 ?>
