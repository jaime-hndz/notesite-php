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

 ?>
 <?php

  if (isset($_GET["pagina"])) {

     if($_GET["pagina"]==1){
       header("location: table_admin.php");
     }else {
       $pagina = $_GET["pagina"];
     }

   }else {
     $pagina = 1;
   }
   $_SESSION["pagina"] = $pagina;
?>
<?php include 'includes/header.php'; ?>
<script type="text/javascript">
  function ConfirmDelete ()
  {
    var respuesta = confirm("¿Estas seguro que desea Eliminar al usuario?");
    if (respuesta == true){
        return true;
    }else {
      return false;
    }
  }
</script>

<title>Tabla Administradores</title>
<link rel="stylesheet" href="css/veradmin.css">
<link rel="stylesheet" href="css/sidebarstyle.css">
<?php include 'sidebar.php'; ?>
<img src="img/programmers2.svg" align="right" name="fon" class="fon" >
<body background="img/fondoadminn.png">

<br>

<h1>Administradores</h1>

<div class="tabla" style="overflow-x:auto;">

<table border="1">
  <thead>

    <th>Id</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Email</th>
    <!--<th height="30px" width="30px">Contraseña</th>-->
    <th colspan="2">Acciones</th>

  </thead>
  <tbody>
    <?php
      $tamagno_pagina = 5;
      $empezar_desde = ($pagina - 1)* $tamagno_pagina;

      $query_all = "SELECT * FROM users_admin";
      $result_all = mysqli_query($conn, $query_all);
      $num_filas= mysqli_num_rows($result_all);

      $query2 = "SELECT * FROM users_admin LIMIT $empezar_desde, $tamagno_pagina";
      $result2 = mysqli_query($conn, $query2);
      $total_paginas= ceil($num_filas/$tamagno_pagina);

      if ($total_paginas == 0) {
        echo "<br><br>";
      }else{
      echo "<br><br>";
      echo "Numeros de registros de la consulta: ".$num_filas."<br>";
      //echo "Mostramos: ".$tamagno_pagina." registros por pagina <br>";
      echo "Mostrando la pagina ".$pagina." de " .$total_paginas. "<br>" ;
      }

      while ($row2 = mysqli_fetch_array($result2)) {  ?>

        <tr>

            <td> <?php echo $row2['id']  ?> </td>
            <td> <?php echo $row2['nombre']  ?> </td>
            <td> <?php echo $row2['apellido']  ?> </td>
            <td> <?php echo $row2['email']  ?> </td>
            <!--<td>  <?php //echo $row2['password']  ?></td>-->
            <td>
                <a href="modificar_admin.php?id=<?php echo $row2['id']?>"><button  class="edi">Editar</button>  </a>
            </td>
            <td>
                <a href="Eliminar_admin.php?id=<?php echo $row2['id']?>"><button  class="eli" onclick="return ConfirmDelete()">Eliminar</button>  </a>
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
            }else{
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
