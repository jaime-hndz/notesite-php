<?php

  session_start();
  require_once 'conn.php';

  if ($_SESSION['Loggedin'] == true && $_SESSION['type'] == 'teacher') {

    $query = "SELECT * FROM users_teacher WHERE email = '". $_SESSION['email'] ."'";
    $result = mysqli_query($conn, $query);

    $row = mysqli_fetch_array($result);

    $materia = $_SESSION['materia_actual'];

  }else {
    header('location:index.php');
  }
  $error_final= '';

  if (isset($_POST['actualizar'])) {

  $id = $_GET['id'];
  $primera = $_POST['1ra'];
  $segunda = $_POST['2da'];
  $tercera = $_POST['3ra'];
  $cuarta = $_POST['4ta'];

  $query2 = "UPDATE ".$materia." SET 1ra = $primera, 2da = $segunda, 3ra = $tercera, 4ta = $cuarta WHERE id = $id ";


  if ($result2 = mysqli_query($conn, $query2)) {

    header ("location: index_teacher.php?pagina=". $_SESSION["pagina"]);
  }
  else {
    $error_final = 'Algo salió mal, intentalo mas tarde';
  }


  }


 ?>
<?php include 'includes/header.php'; ?>
<link rel="stylesheet" href="css/sidebarstyle2.css">
<?php include 'sidebar2.php'; ?>

<title>Editar Calificaciones</title>
<link rel="stylesheet" href="css/modinotas.css">
<body background="img/fondoprofe1.png">
<br>
<img src="img/editnotas.svg" align="right" name="doc" class="doc" >
<div class="datos">
<div class="shadow p-3 mb-5 bg-white rounded">
<h1>Datos</h1>
<p>Nombre: <?php echo $row['nombre']; ?> </p><p> Apellido: <?php echo $row['apellido']; ?></p>
<p>Materia que imparte: <?php echo $materia; ?>  </p><p> ID de Profesor: <?php echo $row['id']; ?></p>
</div>
</div>

<form class="" action="modificar_notas.php?id=<?php echo $_GET['id']; ?>" method="post">
<div style="overflow-x:auto;" class="tabla">
<table border="1">
  <thead>

    <th>ID de estudiante</th>
    <th>nombre</th>
    <th>apellido</th>
    <th>seccion</th>
    <th>1ra Evaluación</th>
    <th>2da Evaluación</th>
    <th>3ra Evaluación</th>
    <th>4ta Evaluación</th>
    <th>Calificacion final</th>


  </thead>
  <tbody>
    <?php

    $id = $_GET['id'];
    $query2 = "SELECT  id,nombre, apellido, seccion, 1ra, 2da, 3ra, 4ta, (1ra+2da+3ra+4ta)/4 as final FROM ".$materia." WHERE id = '".$id."'";
    $result2 = mysqli_query($conn, $query2);

    while ($row2 = mysqli_fetch_array($result2)) {  ?>

      <tr>
          <?php $final_redond = ceil($row2['final']); ?>
          <td> <?php echo $row2['id']  ?> </td>
          <td> <?php echo $row2['nombre']  ?> </td>
          <td> <?php echo $row2['apellido']  ?> </td>
          <td> <?php echo $row2['seccion']  ?> </td>
          <td><input name="1ra" type="number" min="0" max="100" value="<?php echo $row2['1ra']  ?>" required></td>
          <td><input name="2da" type="number" min="0" max="100" value="<?php echo $row2['2da']  ?>" required></td>
          <td><input name="3ra" type="number" min="0" max="100" value="<?php echo $row2['3ra']  ?>" required></td>
          <td><input name="4ta" type="number" min="0" max="100" value="<?php echo $row2['4ta']  ?>" required></td>
          <td> <?php echo $final_redond;  ?> </td>
      </tr>
      <?php } ?>

  </tbody>
</table>
</div>
<br>
<input type="submit" name="actualizar" value="Guardar"></input>
</form>
<div class="error"><?php echo $error_final; ?></div>
