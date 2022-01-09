<?php

$contraseñaReal = $row['password'];
$error_pass= $error_pass2 = $error_final = $error_pass3 ='';

if ($_SERVER["REQUEST_METHOD"]== "POST") {

  if (isset($_POST['txtpassword3'])) {

    $contraseñaVieja =  $_POST['txtpassword3'];
    $contraseñaNueva = $_POST['txtpassword4'];
    $contraseñaNueva2 = $_POST['txtpassword5'];

    if(password_verify($contraseñaVieja,$contraseñaReal)){

      if (strlen($contraseñaNueva) > 5) {

        if ($contraseñaNueva == $contraseñaNueva2) {

          $ultipass =  password_hash($contraseñaNueva, PASSWORD_DEFAULT);
          if ((empty($error_pass3)) && (empty($error_pass)) && (empty($error_pass2))) {

            $insertar="UPDATE users_admin SET password='".$ultipass."'";

            if ($stmt = mysqli_query($conn, $insertar)) {

              ?>
              <script type="text/javascript">
                alert('Se cambió la contraseña correctamente.');
              </script>
              <?php

            }
            else {
              ?>
              <script type="text/javascript">
                alert('Algo salió mal, intentalo mas tarde');
              </script>
              <?php

            }
          }

        }else {
          ?>
          <script type="text/javascript">
            alert('Las contraseñas no coinciden');
          </script>
          <?php
        }

      }else {
        ?>
        <script type="text/javascript">
          alert('Contraseña Insegura');
        </script>
        <?php
      }
    }else {
      ?>
      <script type="text/javascript">
        alert('Contraseña anterior incorrecta');
      </script>
      <?php
    }

  }

  if (isset($_FILES['avatar'])) {

    $tips = 'jpg';
    $type = array('image/jpeg' =>  'jpg');
    $id = $row['id'];

    $nombrefoto1 = $_FILES['avatar']['name'];
    $ruta1 = $_FILES['avatar']['tmp_name'];
    $name = $id.'.'.$tips;


    if (is_uploaded_file($ruta1)) {
      $destino1 = "perfiles/a".$name;
      copy($ruta1, $destino1);
    }

   $sql = "UPDATE users_admin SET avatar = '".$destino1."' WHERE id ='".$row['id']."'";

   if ($stmtAva = mysqli_query($conn, $sql)) {
     header("Location: index.php");

   }else {

   }
 }

}else {
  $error_pass= $error_pass2 = $error_final = $error_pass3 ='';
}
?>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script	  src="https://code.jquery.com/jquery-3.5.0.js"  integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" data-auto-replace-svg="nest"></script>
<div class="btn">
    <span class="fas fa-bars"></span>
</div>
<nav class="sidebar">
<div class="text">NoteSite </div>

<img src="<?php echo $row['avatar'] ?>" height="130" width="130" alt="" class="perfil">
<ul>
    <li><a href="index_admin.php"><i class="fas fa-house-user"></i>  Inicio</a></li>
    <li>
        <a href="#" class="reg-btn" ><i class="fas fa-plus-square"></i>  Registrar <span class="fas fa-caret-down first"></span></a>
        <ul class="reg-show">
            <li><a href="register_admin.php">Administrador/a</a></li>
            <li><a href="register_teacher.php">Profesor/a</a></li>
            <li><a href="register_student.php">Estudiante</a></li>
        </ul>
    </li>

    <li>
        <a href="#" class="ver-btn"><i class="fas fa-address-card"></i>  Ver <span class="fas fa-caret-down second"></span></a>
        <ul class="ver-show">
            <li><a href="table_admin.php">Administradores/as</a></li>
            <li><a href="table_teacher.php">Profesores/as</a></li>
            <li><a href="table_student.php">Estudiantes</a></li>
        </ul>
    </li>
    <li>
        <a href="#" class="cambiar-btn"><i class="fas fa-edit"></i>  Cambiar <span class="fas fa-caret-down third"></span></a>
        <ul class="cambiar-show">
            <li><a href="#ventana2" data-toggle="modal">Foto de perfil</a></li>
            <li><a href="#ventana1" data-toggle="modal">Contraseña</a></li>
        </ul>
    </li>
    <!--<li><a href="#ventana1" class="nav-link" data-toggle="modal">    <i class="fas fa-edit"></i>  Cambiar Clave</a></li>
    <li><a href="#ventana2" class="nav-link" data-toggle="modal">    <i class="fas fa-edit"></i>  Cambiar Foto</a></li>-->
    <li><a href="logout.php"><i class="fas fa-user-lock"></i>  Cerrar Sesion</a></li>
</ul>
</nav>

<script>
    $('.btn').click(function(){
        $(this).toggleClass("click");
        $('.sidebar').toggleClass("show");
    });

    $('.reg-btn').click(function(){
        $('nav ul .reg-show').toggleClass("show");
        $('nav ul .first').toggleClass("rotate");
    });

    $('.ver-btn').click(function(){
        $('nav ul .ver-show').toggleClass("show1");
        $('nav ul .second').toggleClass("rotate");
    });

    $('.cambiar-btn').click(function(){
        $('nav ul .cambiar-show').toggleClass("show2");
        $('nav ul .third').toggleClass("rotate");
    });

    $('nav ul li').click(function(){
$(this).addclass("active").siblings().removeClass("active");
    });


</script>

<div class="modal fade" id="ventana2">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">¿Quieres cambiar tu foto de perfil?</h3>
        <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><br>
      </div>
      <div class="modal-body">
        <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data" method="post">
          <input type="file" name="avatar" value="" required>
          <input type="submit" name="editar" value="Cambiar imagen">
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="ventana1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">¿Quieres cambiar tu contraseña?</h3>
        <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><br>

      </div>
      <div class="modal-body">
        <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

          <label for="password">Contraseña Anterior</label><br>
          <input type="password" name="txtpassword3" placeholder="Ingrese la contraseña" id="pass3" maxlength="20" required>
          <i class="fa fa-eye" id="eye1"></i>
          <div class="error"><?php echo $error_pass3; ?></div>
          <br>
          <label for="password">Nueva Contraseña</label><br>
          <input type="password" name="txtpassword4" placeholder="Ingrese la contraseña" id="pass4" maxlength="20" required>
          <p class="strength2" id="length2"></p>
          <div class="error"><?php echo $error_pass; ?></div>

          <label for="password">Confirmar Nueva Contraseña</label><br>
          <input type="password" name="txtpassword5" placeholder="confirme la contraseña" id="pass5" maxlength="20" required>
          <div class="error"><?php echo $error_pass2; ?></div>
          <p class="mal" id="error3"></p>



      </div>
      <div class="modal-footer" >
        <input type="submit" value="Aceptar" >
        <div class="error"><?php echo $error_final; ?></div>
        <button type="button" data-dismiss="modal">Cancelar</button>

        </form>
      </div>
    </div>
  </div>

</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
  integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script type="text/javascript">

  $(document).ready(function() {

    $('#pass5').keyup(function() {

      var pass4 = $('#pass4').val();
      var pass5 = $('#pass5').val();


          if ( pass4 === pass5 ) {
          //    $('#pass2:focus').css("border-color", "green");
          //    $('#error2').text('MATCH!').css('color', 'green');
              $('#error3').text('');
      } else {
          //    $('#pass2:focus').css("border-color", "red");
              $('#error3').text('Las contraseñas no coinciden').css('color', 'red');
          }
          if (pass5 == '') {
              $('#pass5:focus').css("border-color", "#a0b3b0");
              $('#error3').text('');
          }


      });

  });
  pass4.addEventListener('keyup', function(){

   strength1();
})



function strength1(){

  var val = document.getElementById('pass4').value;
  var status = document.getElementById('length2');
  var counter = 0;

  if (val!= "")

     {

       if (val.length <= 5)
         counter=1;
       if (val.length > 5 && val.length <= 10)
         counter=2;
       if (val.length > 10 && val.length <= 15)
         counter=3;

         if(counter == 1){
           status.innerHTML = "Insegura";
           status.style.background="transparent";
           status.style.color="##ff0000";
           status.style.color="#ff0000";

         }
         if(counter == 2){
           status.innerHTML = "Segura";
           status.style.background="transparent";
           status.style.color="#00b300";


         }
         if(counter == 3){
           status.innerHTML = "Muy Segura";
           status.style.background="transparent";
           status.style.color="#1a53ff";

         }

     }

  }

  var pwd4 = document.getElementById('pass4');
  var pwd5 = document.getElementById('pass5');
  var pwd3 = document.getElementById('pass3');
  var eye1 = document.getElementById('eye1');

  eye1.addEventListener('click', togglePass1);

  function togglePass1(){

    eye1.classList.toggle('active');

    (pwd4.type == 'password') ? pwd4.type = 'text':
    pwd4.type = 'password' ;

    (pwd5.type == 'password') ? pwd5.type = 'text':
    pwd5.type = 'password' ;

    (pwd3.type == 'password') ? pwd3.type = 'text':
    pwd3.type = 'password' ;

  }




</script>
