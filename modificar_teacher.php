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

    $query2 = "UPDATE users_teacher SET nombre = '".$nombre."', apellido = '".$apellido."', materia = '".$materia."', materia2 = '".$materia2."', materia3 = '".$materia3."', materia4 = '".$materia4."', materia5 = '".$materia5."', materia6 = '".$materia6."' WHERE id = $id ";


    if ($result2 = mysqli_query($conn, $query2)) {

      header ("location: table_teacher.php?pagina=". $_SESSION["pagina"]);
    }
    else {
      $error_final = 'Algo salió mal, intentalo mas tarde';
    }
  }

  }

 ?>

<?php include 'includes/header.php'; ?>
<link rel="stylesheet" href="css/sidebarstyle2.css">
<?php include 'sidebar.php'; ?>
<title>Modificar Profesor</title>

<link rel="stylesheet" href="css/moditichel.css">
<body background="img/moditichel2.png">
<br>
<img src="img/profe2.svg" align="right" name="fon" class="fon" >
<h1>Editar Profesor</h1>
<form class="" action="modificar_teacher.php?id=<?php echo $_GET['id']; ?>" method="post">
<div style="overflow-x:auto;" class="tabla">
<table border="1">
  <thead>

    <th>Id</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Email</th>
    <th colspan="6">Materia</th>

  </thead>
  <tbody>
    <?php

      $id = $_GET['id'];
      $query2 = "SELECT * FROM users_teacher where id ='".$id."' ";
      $result2 = mysqli_query($conn, $query2);

      while ($row2 = mysqli_fetch_array($result2)) {  ?>

        <tr>

            <td> <?php echo $row2['id']  ?> </td>
            <td><input name="nombre" type="text" min="0" max="100" value="<?php echo $row2['nombre']  ?>" required></td>
            <td><input name="apellido" type="text" min="0" max="100" value="<?php echo $row2['apellido']  ?>" required></td>
            <td><?php echo $row2['email']  ?></td>
            <td>
              <select class='' name='materia'>
                  <!--<option value="<?php //echo $row2['materia']  ?>"><?php //echo $row2['materia']  ?></option>-->
                  <option value='artistica'  <?php if($row2['materia'] == 'artistica'){ echo "selected";}?>>Artistica</option>
                  <option value='fihr'  <?php if($row2['materia'] == 'fihr'){ echo "selected";}?>>Formacion Integral, Humana y Religiosa</option>
                  <option value='fisica'  <?php if($row2['materia'] == 'fisica'){ echo "selected";}?>>Educación Física</option>
                  <option value='ingles'  <?php if($row2['materia'] == 'ingles'){ echo "selected";}?>>Inglés</option>
                  <option value='lenguaje'  <?php if($row2['materia'] == 'lenguaje'){ echo "selected";}?>>Lenguaje y Literatura</option>
                  <option value='matematicas'  <?php if($row2['materia'] == 'matematicas'){ echo "selected";}?>>Matemáticas</option>
                  <option value='naturales'  <?php if($row2['materia'] == 'naturales'){ echo "selected";}?>>Ciencas Naturales</option>
                  <option value='sociales'  <?php if($row2['materia'] == 'sociales'){ echo "selected";}?>>Ciencias Sociales</option>
               </select>
             </td>
             <td>
               <select class='' name='materia2'>
                   <option value="2"></option>
                   <option value='artistica'  <?php if($row2['materia2'] == 'artistica'){ echo "selected";}?>>Artistica</option>
                   <option value='fihr'  <?php if($row2['materia2'] == 'fihr'){ echo "selected";}?>>Formacion Integral, Humana y Religiosa</option>
                   <option value='fisica'  <?php if($row2['materia2'] == 'fisica'){ echo "selected";}?>>Educación Física</option>
                   <option value='ingles'  <?php if($row2['materia2'] == 'ingles'){ echo "selected";}?>>Inglés</option>
                   <option value='lenguaje'  <?php if($row2['materia2'] == 'lenguaje'){ echo "selected";}?>>Lenguaje y Literatura</option>
                   <option value='matematicas'  <?php if($row2['materia2'] == 'matematicas'){ echo "selected";}?>>Matemáticas</option>
                   <option value='naturales'  <?php if($row2['materia2'] == 'naturales'){ echo "selected";}?>>Ciencas Naturales</option>
                   <option value='sociales'  <?php if($row2['materia2'] == 'sociales'){ echo "selected";}?>>Ciencias Sociales</option>
                </select>
              </td>
              <td>
                <select class='' name='materia3'>
                    <option value="3"></option>
                    <option value='artistica'  <?php if($row2['materia3'] == 'artistica'){ echo "selected";}?>>Artistica</option>
                    <option value='fihr'  <?php if($row2['materia3'] == 'fihr'){ echo "selected";}?>>Formacion Integral, Humana y Religiosa</option>
                    <option value='fisica'  <?php if($row2['materia3'] == 'fisica'){ echo "selected";}?>>Educación Física</option>
                    <option value='ingles'  <?php if($row2['materia3'] == 'ingles'){ echo "selected";}?>>Inglés</option>
                    <option value='lenguaje'  <?php if($row2['materia3'] == 'lenguaje'){ echo "selected";}?>>Lenguaje y Literatura</option>
                    <option value='matematicas'  <?php if($row2['materia3'] == 'matematicas'){ echo "selected";}?>>Matemáticas</option>
                    <option value='naturales'  <?php if($row2['materia3'] == 'naturales'){ echo "selected";}?>>Ciencas Naturales</option>
                    <option value='sociales'  <?php if($row2['materia3'] == 'sociales'){ echo "selected";}?>>Ciencias Sociales</option>
                 </select>
               </td>
               <td>
                 <select class='' name='materia4'>
                     <option value="4"></option>
                     <option value='artistica'  <?php if($row2['materia4'] == 'artistica'){ echo "selected";}?>>Artistica</option>
                     <option value='fihr'  <?php if($row2['materia4'] == 'fihr'){ echo "selected";}?>>Formacion Integral, Humana y Religiosa</option>
                     <option value='fisica'  <?php if($row2['materia4'] == 'fisica'){ echo "selected";}?>>Educación Física</option>
                     <option value='ingles'  <?php if($row2['materia4'] == 'ingles'){ echo "selected";}?>>Inglés</option>
                     <option value='lenguaje'  <?php if($row2['materia4'] == 'lenguaje'){ echo "selected";}?>>Lenguaje y Literatura</option>
                     <option value='matematicas'  <?php if($row2['materia4'] == 'matematicas'){ echo "selected";}?>>Matemáticas</option>
                     <option value='naturales'  <?php if($row2['materia4'] == 'naturales'){ echo "selected";}?>>Ciencas Naturales</option>
                     <option value='sociales'  <?php if($row2['materia4'] == 'sociales'){ echo "selected";}?>>Ciencias Sociales</option>
                  </select>
                </td>
                <td>
                  <select class='' name='materia5'>
                      <option value="5"></option>
                      <option value='artistica'  <?php if($row2['materia5'] == 'artistica'){ echo "selected";}?>>Artistica</option>
                      <option value='fihr'  <?php if($row2['materia5'] == 'fihr'){ echo "selected";}?>>Formacion Integral, Humana y Religiosa</option>
                      <option value='fisica'  <?php if($row2['materia5'] == 'fisica'){ echo "selected";}?>>Educación Física</option>
                      <option value='ingles'  <?php if($row2['materia5'] == 'ingles'){ echo "selected";}?>>Inglés</option>
                      <option value='lenguaje'  <?php if($row2['materia5'] == 'lenguaje'){ echo "selected";}?>>Lenguaje y Literatura</option>
                      <option value='matematicas'  <?php if($row2['materia5'] == 'matematicas'){ echo "selected";}?>>Matemáticas</option>
                      <option value='naturales'  <?php if($row2['materia5'] == 'naturales'){ echo "selected";}?>>Ciencas Naturales</option>
                      <option value='sociales'  <?php if($row2['materia5'] == 'sociales'){ echo "selected";}?>>Ciencias Sociales</option>
                   </select>
                 </td>
                 <td>
                   <select class='' name='materia6'>
                       <option value="6"></option>
                       <option value='artistica'  <?php if($row2['materia6'] == 'artistica'){ echo "selected";}?>>Artistica</option>
                       <option value='fihr'  <?php if($row2['materia6'] == 'fihr'){ echo "selected";}?>>Formacion Integral, Humana y Religiosa</option>
                       <option value='fisica'  <?php if($row2['materia6'] == 'fisica'){ echo "selected";}?>>Educación Física</option>
                       <option value='ingles'  <?php if($row2['materia6'] == 'ingles'){ echo "selected";}?>>Inglés</option>
                       <option value='lenguaje'  <?php if($row2['materia6'] == 'lenguaje'){ echo "selected";}?>>Lenguaje y Literatura</option>
                       <option value='matematicas'  <?php if($row2['materia6'] == 'matematicas'){ echo "selected";}?>>Matemáticas</option>
                       <option value='naturales'  <?php if($row2['materia6'] == 'naturales'){ echo "selected";}?>>Ciencas Naturales</option>
                       <option value='sociales'  <?php if($row2['materia6'] == 'sociales'){ echo "selected";}?>>Ciencias Sociales</option>
                    </select>
                  </td>



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
