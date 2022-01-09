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


  $error_final = '';
  if (isset($_POST['actualizar'])) {

  $id = $_GET['id'];
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $seccion = $_POST['curso'];

  $query1 = "UPDATE users_student SET nombre = '".$nombre."', apellido = '".$apellido."', seccion = '".$seccion."' WHERE id = $id ";
  $query2 = "UPDATE artistica SET nombre = '".$nombre."', apellido = '".$apellido."', seccion = '".$seccion."' WHERE id = $id ";
  $query3 = "UPDATE fihr SET nombre = '".$nombre."', apellido = '".$apellido."', seccion = '".$seccion."' WHERE id = $id ";
  $query4 = "UPDATE fisica SET nombre = '".$nombre."', apellido = '".$apellido."', seccion = '".$seccion."' WHERE id = $id ";
  $query5 = "UPDATE ingles SET nombre = '".$nombre."', apellido = '".$apellido."', seccion = '".$seccion."' WHERE id = $id ";
  $query6 = "UPDATE lenguaje SET nombre = '".$nombre."', apellido = '".$apellido."', seccion = '".$seccion."' WHERE id = $id ";
  $query7 = "UPDATE matematicas SET nombre = '".$nombre."', apellido = '".$apellido."', seccion = '".$seccion."' WHERE id = $id ";
  $query8 = "UPDATE naturales SET nombre = '".$nombre."', apellido = '".$apellido."', seccion = '".$seccion."' WHERE id = $id ";
  $query9 = "UPDATE sociales SET nombre = '".$nombre."', apellido = '".$apellido."', seccion = '".$seccion."' WHERE id = $id ";

  if ($result1 = mysqli_query($conn, $query1) && $result2 = mysqli_query($conn, $query2) && $result3 = mysqli_query($conn, $query3) && $result4 = mysqli_query($conn, $query4) && $result5 = mysqli_query($conn, $query5) && $result6 = mysqli_query($conn, $query6) && $result7 = mysqli_query($conn, $query7) && $result8 = mysqli_query($conn, $query8) && $result9 = mysqli_query($conn, $query9)) {

    header ("location: table_student.php?pagina=". $_SESSION["pagina"]);
  }
  else {
    $error_final = 'Algo salió mal, intentalo mas tarde';
  }
  }

 ?>

<?php include 'includes/header.php'; ?>
<link rel="stylesheet" href="css/sidebarstyle3.css">
<link rel="stylesheet" href="css/modistudent.css">
<?php include 'sidebar.php'; ?>

<title>Modificar Estuadiante</title>
<body background="img/modistudent2.png">
<br>
<img src="img/moditudent.svg" align="right" name="fon" class="fon" >
<h1>Editar Estudiante</h1>

<form class="" action="modificar_student.php?id=<?php echo $_GET['id']; ?>" method="post">
<div style="overflow-x:auto;" class="tabla">
<table border="1" >
  <thead>

    <th>Id</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Email</th>

    <th>Curso</th>

  </thead>
  <tbody>
    <?php

      $id = $_GET['id'];
      $query2 = "SELECT * FROM users_student where id ='".$id."' ";
      $result2 = mysqli_query($conn, $query2);

      while ($row2 = mysqli_fetch_array($result2)) {  ?>

        <tr>

            <td> <?php echo $row2['id']  ?> </td>
            <td><input name="nombre" type="text" min="0" max="100" value="<?php echo $row2['nombre']  ?>" required></td>
            <td><input name="apellido" type="text" min="0" max="100" value="<?php echo $row2['apellido']  ?>" required></td>
            <td><?php echo $row2['email']  ?></td>

            <td><select class="" name="curso">

                <option value="5toA" <?php if($row2['seccion'] == '5toA'){ echo "selected";}?>>5to A</option>
                <option value="5toB" <?php if($row2['seccion'] == '5toB'){ echo "selected";}?>>5to B</option>
                <option value="5toC" <?php if($row2['seccion'] == '5toC'){ echo "selected";}?>>5to C</option>
                <option value="5toD" <?php if($row2['seccion'] == '5toD'){ echo "selected";}?>>5to D</option>
                <option value="5toE" <?php if($row2['seccion'] == '5toE'){ echo "selected";}?>>5to E</option>
                <option value="6toA" <?php if($row2['seccion'] == '6toA'){ echo "selected";}?>>6to A</option>
                <option value="6toB" <?php if($row2['seccion'] == '6toB'){ echo "selected";}?>>6to B</option>
                <option value="6toC" <?php if($row2['seccion'] == '6toC'){ echo "selected";}?>>6to C</option>
                <option value="6toD" <?php if($row2['seccion'] == '6toD'){ echo "selected";}?>>6to D</option>
                <option value="6toE" <?php if($row2['seccion'] == '6toE'){ echo "selected";}?>>6to E</option>

              </select></td>

        </tr>
        <?php } ?>

  </tbody>
</table>
      </div>
<br>
<input type="submit" name="actualizar" value="Guardar"></input>
</form>
<div class="error"><?php echo $error_final; ?></div>
<?php include 'includes/footer.php';  ?>
