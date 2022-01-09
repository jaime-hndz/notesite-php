<?php

  include ("conn.php");

  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM users_teacher WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if(!$result){
      die("Falló la consulta");

    }else {
      unlink('perfiles/'.$id.'.jpg');
    }

    header("location: table_teacher.php");
  }

 ?>
