<?php

  session_start();
  require_once 'conn.php';

  if ($_SESSION['Loggedin'] == true && $_SESSION['type'] == 'teacher') {

    $query = "SELECT * FROM users_teacher WHERE email = '". $_SESSION['email'] ."'";
    $result = mysqli_query($conn, $query);

    $row = mysqli_fetch_array($result);

    $materia = $row['materia'];
    $contraseñaReal = $row['password'];

  }else {
    header('location:index.php');
  }



 ?>
 <?php

  if (isset($_GET["pagina"])) {

     if($_GET["pagina"]==1){
       header("location: table_student.php");
     }else {
       $pagina = $_GET["pagina"];
     }

   }else {
     $pagina = 1;
   }

   $_SESSION["pagina"] = $pagina;

?>
<?php include 'includes/header.php'; ?>
<?php include 'sidebar2.php'; ?>

<link rel="stylesheet" href="css/teacherstyles.css">

<title>Inicio</title>

<body background="img/fondoprofe1.png">
<br>
<img src="img/tichel.svg" align="right" name="fon" class="fon" >

<div class="datos">
<div class="shadow p-3 mb-5 bg-white rounded">
<img align="right" src="<?php echo $row['avatar'] ?>" height="100" width="100" alt="">
<h1>Datos del profesor</h1>
<p>Nombre: <?php echo $row['nombre']; ?> <?php echo $row['apellido']; ?></p>
<p>Materia principal que imparte: <?php echo $materia_select; ?>  </p><p> ID de Profesor: <?php echo $row['id']; ?></p>
  </div>
  </div>



<form class="cambiar-contra" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
  <h3>Seleccione la materia que imparte:</h3> <br>
    <select class="" name="materia">
      <option value="<?php echo $row['materia']; ?>" <?php if($materia_select == $row['materia']){ echo "selected";}?>><?php echo $row['materia']; ?></option>
      <?php if ($row['materia2'] != '') {?>
        <option value="<?php echo $row['materia2']; ?>" <?php if($materia_select == $row['materia2']){ echo "selected";}?>><?php echo $row['materia2']; ?></option>
        <?php }?>
      <?php if ($row['materia3'] != '') {?>
        <option value="<?php echo $row['materia3']; ?>" <?php if($materia_select == $row['materia3']){ echo "selected";}?>><?php echo $row['materia3']; ?></option>
        <?php }?>
      <?php if ($row['materia4'] != '') {?>
        <option value="<?php echo $row['materia4']; ?>" <?php if($materia_select == $row['materia4']){ echo "selected";}?>><?php echo $row['materia4']; ?></option>
        <?php }?>
      <?php if ($row['materia5'] != '') {?>
        <option value="<?php echo $row['materia5']; ?>" <?php if($materia_select == $row['materia5']){ echo "selected";}?>><?php echo $row['materia5']; ?></option>
        <?php }?>
      <?php if ($row['materia6'] != '') {?>
        <option value="<?php echo $row['materia6']; ?>" <?php if($materia_select == $row['materia6']){ echo "selected";}?>><?php echo $row['materia6']; ?></option>
        <?php }?>

    </select>
<h3>Seleccione la clase:</h3> <br>
  <select class="" name="curso">
    <option value="-" <?php if($seccion_select == '-'){ echo "selected";}?>>-</option>
    <option value="5toA" <?php if($seccion_select == '5toA'){ echo "selected";}?>>5to A</option>
    <option value="5toB" <?php if($seccion_select == '5toB'){ echo "selected";}?>>5to B</option>
    <option value="5toC" <?php if($seccion_select == '5toC'){ echo "selected";}?>>5to C</option>
    <option value="5toD" <?php if($seccion_select == '5toD'){ echo "selected";}?>>5to D</option>
    <option value="5toE" <?php if($seccion_select == '5toE'){ echo "selected";}?>>5to E</option>
    <option value="6toA" <?php if($seccion_select == '6toA'){ echo "selected";}?>>6to A</option>
    <option value="6toB" <?php if($seccion_select == '6toB'){ echo "selected";}?>>6to B</option>
    <option value="6toC" <?php if($seccion_select == '6toC'){ echo "selected";}?>>6to C</option>
    <option value="6toD" <?php if($seccion_select == '6toD'){ echo "selected";}?>>6to D</option>
    <option value="6toE" <?php if($seccion_select == '6toE'){ echo "selected";}?>>6to E</option>
  </select>
  <input type="submit" value="Aceptar">
</form>

<div style="overflow-x:auto;" class="tabla">
<table>
  <thead>

    <th>No.</th>
    <th>nombre</th>
    <th>apellido</th>
    <th>seccion</th>
    <th>1ra Evaluación</th>
    <th>2da Evaluación</th>
    <th>3ra Evaluación</th>
    <th>4ta Evaluación</th>
    <th>Calificacion final</th>
    <th>Acciones</th>

  </thead>
  <tbody>
    <?php
      $tamagno_pagina = 5;
      $empezar_desde = ($pagina - 1)* $tamagno_pagina;

      $query_all = "SELECT * FROM ".$materia_select." WHERE seccion = '".$seccion_select."'";
      $result_all = mysqli_query($conn, $query_all);
      $num_filas= mysqli_num_rows($result_all);

      $query2 = "SELECT  id,nombre, apellido, seccion, 1ra, 2da, 3ra, 4ta, (1ra+2da+3ra+4ta)/4 as final FROM ".$materia_select." WHERE seccion = '".$seccion_select."' ORDER BY apellido LIMIT $empezar_desde, $tamagno_pagina";
      $result2 = mysqli_query($conn, $query2);

      $total_paginas= ceil($num_filas/$tamagno_pagina);

      if ($total_paginas == 0) {
        echo "<br><br>";
      }else{
      echo "<br><br>";
      echo "Numeros de registros de la consulta: ".$num_filas."<br>";
      echo "Mostrando la pagina ".$pagina." de " .$total_paginas. "<br>" ;
      }

      $numero = 1 + $empezar_desde;
      while ($row2 = mysqli_fetch_array($result2)) {  ?>

        <tr>
                 <?php $final_redond = ceil($row2['final']); ?>
            <td> <?php echo $numero++;  ?> </td>
            <td> <?php echo $row2['nombre']  ?> </td>
            <td> <?php echo $row2['apellido']  ?> </td>
            <td> <?php echo $row2['seccion']  ?> </td>
            <td> <?php echo $row2['1ra']  ?> </td>
            <td> <?php echo $row2['2da']  ?> </td>
            <td> <?php echo $row2['3ra']  ?> </td>
            <td> <?php echo $row2['4ta']  ?> </td>
            <td> <?php echo $final_redond;  ?> </td>
            <td>
                <a href="modificar_notas.php?id=<?php echo $row2['id'] ?>"><button  class="edi">Editar</button>  </a>
            </td>



        </tr>
        <?php } ?>







  </tbody>
</table>
</div>

<div class="pagination">
<?php
    $i=1;
      if ($pagina == 1 || $total_paginas == 0) {

          echo "<a class='null'> << </a>";
          echo "<a class='null'> < </a>";

      }else {

          echo "<a href='?pagina=". $i . "' class='flecha'> << </a>";
          echo "<a href='?pagina=". ($pagina - 1) . "' class='flecha'> < </a>";

      }


    for($i=1;$i<=$total_paginas; $i++){

        if($pagina == 1){
          $limax = $pagina + 4;
        }elseif ($pagina == 2) {
          $limax = $pagina + 3;
        }else {
        $limax = $pagina + 2;
        }
        if ($pagina == $total_paginas) {
          $limin = $pagina - 4;
        }elseif ($pagina == ($total_paginas - 1) ) {
          $limin = $pagina - 3;
        }else {
          $limin = $pagina - 2;
        }
        if ($i <= $limax) {
          if ($i >= $limin) {
            if ($i == $pagina) {
              echo "<a href='?pagina=". $i . "' class='active'>". $i . "</a>  ";
            }else {
              echo "<a href='?pagina=". $i . "'>". $i . "</a>  ";
            }
          }
        }
      }

      if ($pagina == $total_paginas || $total_paginas == 0) {

        echo "<a class='null'> > </a>";
        echo "<a class='null'> >> </a> ";

      }else {

          echo "<a href='?pagina=". ($pagina + 1) . "' class='flecha'> > </a>";
          echo "<a href='?pagina=". $total_paginas . "' class='flecha'> >> </a> ";

      }
?>
</div>



<?php include 'includes/footer.php';  ?>
