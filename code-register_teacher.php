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
  $materia = $materia2 = $materia3 = $materia4 = $materia5 = $materia6 = $seccion= $ultipass ='';




  if ($_SERVER["REQUEST_METHOD"]== "POST") {

    if (isset($_POST['txtemail'])) {

      $nombre = $_POST['txtnombre'];
      $apellido = $_POST['txtapellido'];
      $pass2 =$_POST['txtpassword2'];
      $email = $_POST['txtemail'];
      $materia = $_POST['materia'];
      $materia2 = $_POST['materia2'];
      $materia3 = $_POST['materia3'];
      $materia4 = $_POST['materia4'];
      $materia5 = $_POST['materia5'];
      $materia6 = $_POST['materia6'];

      if ($materia == $materia2 || $materia == $materia3 || $materia == $materia4 || $materia == $materia5 || $materia == $materia6 || $materia2 == $materia3 || $materia2 == $materia4 || $materia2 == $materia5 || $materia2 == $materia6 || $materia3 == $materia4 || $materia3 == $materia5 || $materia3 == $materia6 || $materia4 == $materia5 || $materia4 == $materia6 || $materia5 == $materia6 ) {

      }else {
        if ($materia2 == '2') {
          $materia2 = '';
        }
        if ($materia3 == '3') {
          $materia3 = '';
        }
        if ($materia4 == '4') {
          $materia4 = '';
        }
        if ($materia5 == '5') {
          $materia5 = '';
        }
        if ($materia6 == '6') {
          $materia6 = '';
        }

        $query = mysqli_query($conn, "SELECT * FROM users_teacher WHERE email= '".$email."'");
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

          $insertar="INSERT INTO users_teacher (nombre, apellido, email, password, materia, materia2, materia3, materia4, materia5, materia6, avatar) values('".$nombre."','".$apellido."','".$email."', '".$ultipass."', '".$materia."', '".$materia2."', '".$materia3."', '".$materia4."', '".$materia5."', '".$materia6."', 'perfiles/default.jpg')";

          if ($stmt = mysqli_query($conn, $insertar)) {

            header ('location: index.php');
          }
          else {
            $error_final = 'Algo salió mal, intentalo mas tarde';
          }
        }


      }





    }

  }





 ?>
