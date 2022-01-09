<?php

  session_start();
  require_once 'conn.php';
  //Verifica si está logueado y es admin
  if ($_SESSION['Loggedin'] == true && $_SESSION['type'] == 'admin') {

    $query = "SELECT * FROM users_admin WHERE email = '". $_SESSION['email'] ."'";
    $result = mysqli_query($conn, $query);

    $row = mysqli_fetch_array($result);


  }else {
    header('location:index.php');
  }

  $nombre = $apellido = $email = $pass = $pass2 = '';
  $error_user = $error_pass= $error_pass2 = $error_final ='';
  $materia = $seccion= $ultipass= '';




  if ($_SERVER["REQUEST_METHOD"]== "POST") {

    if (isset($_POST['txtemail'])) {
      $nombre = $_POST['txtnombre'];
      $apellido = $_POST['txtapellido'];
      $pass2 =$_POST['txtpassword2'];
      $email = $_POST['txtemail'];



          $query = mysqli_query($conn, "SELECT * FROM users_admin WHERE email= '".$email."'");
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

            $insertar="INSERT INTO users_admin (nombre, apellido, email, password, avatar) values('".$nombre."','".$apellido."','".$email."', '".$ultipass."', 'perfiles/default.jpg')";

            if ($stmt = mysqli_query($conn, $insertar)) {

              header ('location: index.php');
            }
            else {
              $error_final = 'Algo salió mal, intentalo mas tarde';
            }
          }


    }

  }





 ?>
