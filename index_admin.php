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


 include 'includes/header.php';
 ?>



<title>Inicio</title>
<link rel="stylesheet" href="css/adminstyles.css">
<link rel="stylesheet" href="css/sidebarstyle.css">
<?php include 'sidebar.php'; ?>
<body background="img/fondoadmin3.png">
<br>

<div class="datos">
<div class="shadow p-3 mb-5 bg-white rounded">
<img align="right" src="<?php echo $row['avatar'] ?>" height="100" width="100" alt="">
<h1>Datos del administrador</h1>
<p>Nombre: <?php echo $row['nombre']; ?> <?php echo $row['apellido']; ?></p>
<p>ID de administrador: <?php echo $row['id']; ?></p>
</div>
</div>

<br><br>

<div class="navi">
<nav class="nav" >

  <a href="register_admin.php" class="nav-link active">Registrar nuevo administrador</a>
  <a href="table_admin.php" class="nav-link">Ver administradores</a>
  <a href="register_teacher.php" class="nav-link">Registrar nuevo profesor</a>
  <a href="table_teacher.php" class="nav-link">Ver Profesores</a>
  <a href="register_student.php" class="nav-link">Registrar nuevo estudiante</a>
  <a href="table_student.php" class="nav-link">Ver Studiantes</a>


</nav>
</div>

<img src="img/programmers.svg"  name="fon" class="fon" >



<?php include 'includes/footer.php';  ?>
