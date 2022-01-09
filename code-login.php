<?php

  session_start();
  //Verifica si está logueado
  if(isset($_SESSION["Loggedin"]) && $_SESSION["Loggedin"]== true){

    header("location: index.php");
    exit;

  }

  require_once 'conn.php';

  $email = $pass = $ultipass= '';
  $error_user= $error_pass = '';


  if($_SERVER["REQUEST_METHOD"]=== "POST"){

      $email = $_POST["txtemail"];
      $pass =$_POST["txtpassword"];
      $type = $_POST["type"];

      $ultipass =  password_hash($pass, PASSWORD_DEFAULT);


      $query = mysqli_query($conn, "SELECT * FROM users_".$type." WHERE email= '".$email."'");
      $nr = mysqli_num_rows($query);
      $row = mysqli_fetch_array($query);

      if($nr> 0){

        if (password_verify($pass,$row['password'])) {



          //$query2 = mysqli_query($conn, "SELECT * FROM users_".$type." WHERE email='".$email."' and password='".$ultipass."'");
          //$nr2 = mysqli_num_rows($query2);

          //if ($nr2 > 0)

            session_start();

            $_SESSION["Loggedin"] = true;
            $_SESSION["email"] = $email;
            $_SESSION["type"] = $type;

            header("location:index.php");

          }
          else{

              $error_pass= 'contraseña incorrecta';

          }

      }
      else {

        $error_user= 'Este usuario no existe';


      }







  }

  mysqli_close($conn);
 ?>
