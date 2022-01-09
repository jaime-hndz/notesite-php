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

  $query2 = "UPDATE users_admin SET nombre = '".$nombre."', apellido = '".$apellido."' WHERE id = $id ";


  if ($result2 = mysqli_query($conn, $query2)) {

    header ("location: table_admin.php?pagina=". $_SESSION["pagina"]);
  }
  else {
    $error_final = 'Algo salió mal, intentalo mas tarde';
  }
  }

 ?>

<?php include 'includes/header.php'; ?>
<link rel="stylesheet" href="css/sidebarstyle.css">
<?php include 'sidebar.php'; ?>
<title>Modificar Administrador</title>

<link rel="stylesheet" href="css/modiadmin.css">
<body background="img/modiadmin2.png">
<br>
<img src="img/editableadmin.svg" align="right" name="fon" class="fon" >
<h1>Editar Administrador</h1>


<form class="" action="modificar_admin.php?id=<?php echo $_GET['id']; ?>" method="post">
<div style="overflow-x:auto;" class="tabla">
<table border="1">
  <thead>

    <th>Id</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Email</th>


  </thead>
  <tbody>
    <?php

      $id = $_GET['id'];
      $query2 = "SELECT * FROM users_admin where id ='".$id."' ";
      $result2 = mysqli_query($conn, $query2);

      while ($row2 = mysqli_fetch_array($result2)) {  ?>

        <tr>

            <td> <?php echo $row2['id']  ?> </td>
            <td><input name="nombre" type="text" min="0" max="100" value="<?php echo $row2['nombre']  ?>" required></td>
            <td><input name="apellido" type="text" min="0" max="100" value="<?php echo $row2['apellido']  ?>" required></td>
            <td><?php echo $row2['email']  ?></td>


        </tr>
        <?php } ?>

  </tbody>
</table>

</div>
<br>
<input type="submit" name="actualizar" value="Guardar"></input>
<a href="<?=$_SERVER["HTTP_REFERER"]?>"><i class="far fa-arrow-alt-circle-left"></i></a>
</form>

<div class="error"><?php echo $error_final; ?></div>
<?php include 'includes/footer.php';  ?>
