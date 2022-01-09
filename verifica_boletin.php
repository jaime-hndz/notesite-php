<?php


  date_default_timezone_set("America/Santo_Domingo");
  require_once 'conn.php';

    $query = "SELECT * FROM users_student WHERE id = '". $_GET['id'] ."'";
    $result = mysqli_query($conn, $query);

    $row = mysqli_fetch_array($result);

    $id = $row['id'];
    $seccion = $row['seccion'];
    $contraseñaReal = $row['password'];


 ?>

<?php include 'includes/header.php';
$hoy = date('j-m-Y');
$ahora = date('h:i A');
 ?>

<title>Inicio</title>
<br>
<img src="img/searchstudent.svg" align="right" name="fon" class="fon" >
<!--<img src="img/dato.svg" align="right" name="doc" class="doc" >-->
<div class="datos">

<div class="shadow p-3 mb-5 bg-white rounded">
<h1>Verificar datos del estudiante</h1>
<p>Nombre: <?php echo $row['nombre']; ?> <?php echo $row['apellido']; ?>.</p>
<p>Seccion: <?php echo $row['seccion']; ?>.  </p>
<p>Recuperado el: <?php echo $hoy; ?> a las <?php echo $ahora; ?>. </p>

</div>
</div>


<div style="overflow-x:auto;" class="tabla">
<div class="shadow p-3 mb-5 bg-white rounded">
<table border="1">
  <thead>
    <th>Materia</th>
    <th>1ra Evaluación</th>
    <th>2da Evaluación</th>
    <th>3ra Evaluación</th>
    <th>4ta Evaluación</th>
    <th>Calificacion final</th>
  </thead>
  <tbody>
    <!--artistica-->
    <?php
      $query_artistica = "SELECT  nombre, apellido, seccion, 1ra, 2da, 3ra, 4ta, (1ra+2da+3ra+4ta)/4 as final FROM artistica WHERE id='". $id . "' and seccion ='". $seccion ."' ";
      $result_artistica = mysqli_query($conn, $query_artistica);
      $row_artistica = mysqli_fetch_array($result_artistica);
    ?>
    <tr>
      <td>Artística</td>
      <td> <?php echo $row_artistica['1ra']  ?> </td>
      <td> <?php echo $row_artistica['2da']  ?> </td>
      <td> <?php echo $row_artistica['3ra']  ?> </td>
      <td> <?php echo $row_artistica['4ta']  ?> </td>
      <td> <?php echo ceil($row_artistica['final']);  ?> </td>
    </tr>

    <!--fihr-->
    <?php
      $query_fihr = "SELECT  nombre, apellido, seccion, 1ra, 2da, 3ra, 4ta, (1ra+2da+3ra+4ta)/4 as final FROM fihr WHERE id='". $id . "' and seccion ='". $seccion ."' ";
      $result_fihr = mysqli_query($conn, $query_fihr);
      $row_fihr = mysqli_fetch_array($result_fihr);
    ?>
    <tr>
      <td>Formacion Integral, Humana y Religiosa</td>
      <td> <?php echo $row_fihr['1ra']  ?> </td>
      <td> <?php echo $row_fihr['2da']  ?> </td>
      <td> <?php echo $row_fihr['3ra']  ?> </td>
      <td> <?php echo $row_fihr['4ta']  ?> </td>
      <td> <?php echo ceil($row_fihr['final']);  ?> </td>
    </tr>

    <!--fisica-->
    <?php
      $query_fisica = "SELECT  nombre, apellido, seccion, 1ra, 2da, 3ra, 4ta, (1ra+2da+3ra+4ta)/4 as final FROM fisica WHERE id='". $id . "' and seccion ='". $seccion ."' ";
      $result_fisica = mysqli_query($conn, $query_fisica);
      $row_fisica = mysqli_fetch_array($result_fisica);
    ?>
    <tr>
      <td>Educación Física</td>
      <td> <?php echo $row_fisica['1ra']  ?> </td>
      <td> <?php echo $row_fisica['2da']  ?> </td>
      <td> <?php echo $row_fisica['3ra']  ?> </td>
      <td> <?php echo $row_fisica['4ta']  ?> </td>
      <td> <?php echo ceil($row_fisica['final']);  ?> </td>
    </tr>

    <!--ingles-->
    <?php
      $query_ingles = "SELECT  nombre, apellido, seccion, 1ra, 2da, 3ra, 4ta, (1ra+2da+3ra+4ta)/4 as final FROM ingles WHERE id='". $id . "' and seccion ='". $seccion ."' ";
      $result_ingles = mysqli_query($conn, $query_ingles);
      $row_ingles = mysqli_fetch_array($result_ingles);
    ?>
    <tr>
      <td>Inglés</td>
      <td> <?php echo $row_ingles['1ra']  ?> </td>
      <td> <?php echo $row_ingles['2da']  ?> </td>
      <td> <?php echo $row_ingles['3ra']  ?> </td>
      <td> <?php echo $row_ingles['4ta']  ?> </td>
      <td> <?php echo ceil($row_ingles['final']);  ?> </td>
    </tr>

    <!--lenguaje-->
    <?php
      $query_lenguaje = "SELECT  nombre, apellido, seccion, 1ra, 2da, 3ra, 4ta, (1ra+2da+3ra+4ta)/4 as final FROM lenguaje WHERE id='". $id . "' and seccion ='". $seccion ."' ";
      $result_lenguaje = mysqli_query($conn, $query_lenguaje);
      $row_lenguaje = mysqli_fetch_array($result_lenguaje);
    ?>
    <tr>
      <td>Lenguaje y literatura</td>
      <td> <?php echo $row_lenguaje['1ra']  ?> </td>
      <td> <?php echo $row_lenguaje['2da']  ?> </td>
      <td> <?php echo $row_lenguaje['3ra']  ?> </td>
      <td> <?php echo $row_lenguaje['4ta']  ?> </td>
      <td> <?php echo ceil($row_lenguaje['final']);  ?> </td>
    </tr>

    <!--matematicas-->
    <?php
      $query_matematicas = "SELECT  nombre, apellido, seccion, 1ra, 2da, 3ra, 4ta,  (1ra+2da+3ra+4ta)/4  as final FROM matematicas WHERE id='". $id . "' and seccion ='". $seccion ."' ";
      $result_matematicas = mysqli_query($conn, $query_matematicas);
      $row_matematicas = mysqli_fetch_array($result_matematicas);
    ?>
    <tr>
      <td>Matemáticas</td>
      <td> <?php echo $row_matematicas['1ra']  ?> </td>
      <td> <?php echo $row_matematicas['2da']  ?> </td>
      <td> <?php echo $row_matematicas['3ra']  ?> </td>
      <td> <?php echo $row_matematicas['4ta']  ?> </td>
      <td> <?php echo ceil($row_matematicas['final']);  ?> </td>
    </tr>

    <!--naturales-->
    <?php
      $query_naturales = "SELECT  nombre, apellido, seccion, 1ra, 2da, 3ra, 4ta, (1ra+2da+3ra+4ta)/4 as final FROM naturales WHERE id='". $id . "' and seccion ='". $seccion ."' ";
      $result_naturales = mysqli_query($conn, $query_naturales);
      $row_naturales = mysqli_fetch_array($result_naturales);
    ?>
    <tr>
      <td>Ciencias Naturales</td>
      <td> <?php echo $row_naturales['1ra']  ?> </td>
      <td> <?php echo $row_naturales['2da']  ?> </td>
      <td> <?php echo $row_naturales['3ra']  ?> </td>
      <td> <?php echo $row_naturales['4ta']  ?> </td>
      <td> <?php echo ceil($row_naturales['final']);  ?> </td>
    </tr>

    <!--sociales-->
    <?php
      $query_sociales = "SELECT  nombre, apellido, seccion, 1ra, 2da, 3ra, 4ta, (1ra+2da+3ra+4ta)/4 as final FROM sociales WHERE id='". $id . "' and seccion ='". $seccion ."' ";
      $result_sociales = mysqli_query($conn, $query_sociales);
      $row_sociales = mysqli_fetch_array($result_sociales);
    ?>
    <tr>
      <td>Ciencias Sociales</td>
      <td> <?php echo $row_sociales['1ra']  ?> </td>
      <td> <?php echo $row_sociales['2da']  ?> </td>
      <td> <?php echo $row_sociales['3ra']  ?> </td>
      <td> <?php echo $row_sociales['4ta']  ?> </td>
      <td> <?php echo ceil($row_sociales['final']);  ?> </td>
    </tr>


  </tbody>
</table>
</div>
</div>



<?php include 'includes/footer.php';  ?>
