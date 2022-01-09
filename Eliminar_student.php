<?php

  include ("conn.php");

  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM users_student WHERE id = $id";
    $query2 = "DELETE FROM artistica WHERE id = $id";
    $query3 = "DELETE FROM fihr WHERE id = $id";
    $query4 = "DELETE FROM fisica WHERE id = $id";
    $query5 = "DELETE FROM ingles WHERE id = $id";
    $query6 = "DELETE FROM lenguaje WHERE id = $id";
    $query7 = "DELETE FROM matematicas WHERE id = $id";
    $query8 = "DELETE FROM naturales WHERE id = $id";
    $query9 = "DELETE FROM sociales WHERE id = $id";

    if($result = mysqli_query($conn, $query) && $result2 = mysqli_query($conn, $query2) && $result3 = mysqli_query($conn, $query3) && $result4 = mysqli_query($conn, $query4) && $result5 = mysqli_query($conn, $query5) && $result6 = mysqli_query($conn, $query6) && $result7 = mysqli_query($conn, $query7) && $result8 = mysqli_query($conn, $query8) && $result9 = mysqli_query($conn, $query9)){
      unlink('perfiles/'.$id.'.jpg');
    }else{

      die("Falló la consulta");

    }

    header("location: table_student.php");
  }

 ?>
