<?php
include 'code-login.php';
?>
<?php include 'includes/header.php'; ?>
<link rel="stylesheet" href="css/loginstyle.css">
<title>Iniciar sesión</title>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script	  src="https://code.jquery.com/jquery-3.5.0.js"  integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" data-auto-replace-svg="nest"></script>

<body >
<div class="wave">
  <img src="img/fondo4.png">
</div>
<div class="container">
<div class="img">
<?php
include 'carousel.php';
?>
</div>

<div class="login-container">

  <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
  <img class="avatar" src="img/logosin2.png">
  
     <br> <label for="Username">Correo</label><br>
      <input type="text" name="txtemail" placeholder="Ingrese el Usuario" maxlength="100" required autofocus>
      <div class="error"><?php echo $error_user; ?></div>

      <label for="password">Contraseña</label><br>
      <input type="password" name="txtpassword" placeholder="Ingrese la contraseña" id="pass1" maxlength="20" required>  <i class="fa fa-eye" id="eye"></i>
      <div class="error"><?php echo $error_pass; ?></div>

      <label for="TypeUser">Tipo de Usuario</label><br>
      <select class="" name="type">
        <option value="admin">Administrador</option>
        <option value="teacher">Profesor</option>
        <option value="student">Estudiante</option>
      </select>

      <br><br>
      <input type="submit" value="Aceptar">
      <input type="reset"  value="Cancelar">
      <br><br>


  </form>
  </div>
 </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>

  <script type="text/javascript">

  var pwd = document.getElementById('pass1');
  var eye = document.getElementById('eye');
  eye.addEventListener('click', togglePass);

  function togglePass(){


    eye.classList.toggle('active');
    (pwd.type == 'password') ? pwd.type = 'text':
     pwd.type = 'password' ;


  }

  </script>
<?php include 'includes/footer.php';  ?>
