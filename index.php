<?php

   session_start();

  if (isset($_SESSION["type"])) {

    if ($_SESSION["type"] == 'admin') {
      header("location:index_admin.php");
    }
    elseif ($_SESSION["type"] == 'student') {
      header("location:index_student.php");
    }
    elseif ($_SESSION["type"] == 'teacher') {
      header("location:index_teacher.php");
    }


  }else {

    header("location:login.php");

  }



 ?>
