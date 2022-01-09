<?php

  include 'code-register_teacher.php';


?>
<?php include 'includes/header.php'; ?>
<link rel="stylesheet" href="css/loginstyle.css">
<link rel="stylesheet" href="css/sidebarstyle2.css">
<?php include 'sidebar.php'; ?>
<title>Registrar</title>
<body >
<div class="wave">
  <img src="img/fondo4.png">
</div>
<div class="container">
<div class="img">
<img src="img/tichin3.svg">
</div>
<div class="login-container">
  <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
  <img class="avatar" src="img/logosin2.png">
  <br><br>
      <h3>Nuevo Profesor</h3>
      <label for="nombre">Nombre</label><br>
      <input type="text" name="txtnombre" placeholder="Ingrese su nombre" maxlength="100" required>

      <br><label for="Username">Apellido</label><br>
      <input type="text" name="txtapellido" placeholder="Ingrese su apellido" maxlength="100" required>

      <br><label for="Username">Correo</label><br>
      <input type="text" name="txtemail" placeholder="Ingrese su correo" maxlength="100" required>
      <div class="error"><?php echo $error_user; ?></div>


      <label for="password">Contraseña</label><br>
      <input type="password" name="txtpassword" placeholder="Ingrese la contraseña" id="pass1" maxlength="20" required><i class="fa fa-eye" id="eye"></i>
      <p class="strength" id="length"></p>
      <div class="error"><?php echo $error_pass; ?></div>

      <label for="password">Confirmar Contraseña</label><br>
      <input type="password" name="txtpassword2" placeholder="confirme la contraseña" id="pass2" maxlength="20" required>
      <div class="error"><?php echo $error_pass2; ?></div>
      <p class="mal" id="error2"></p>

      <?php
        echo "<label for='materia'>Materia asignada</label>";
        echo "<select class='' name='materia'>";
        echo "<option value='artistica'>Artistica</option>";
        echo "<option value='fihr'>Formacion Integral, Humana y Religiosa</option>";
        echo "<option value='fisica'>Educación Física</option>";
        echo "<option value='ingles'>Inglés</option>";
        echo "<option value='lenguaje'>Lenguaje y Literatura</option>";
        echo "<option value='matematicas'>Matemáticas</option>";
        echo "<option value='naturales'>Ciencas Naturales</option>";
        echo "<option value='sociales'>Ciencias Sociales</option>";
        echo "</select>";
       ?>
       <p>
         <button type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
           +
        </button>
       </p>
       <div class="collapse" id="collapseExample">

          <?php
            echo "<label for='materia2'>Materia extra</label>";
            echo "<select class='' name='materia2'>";
            echo "<option value='2'> </option>";
            echo "<option value='artistica'>Artistica</option>";
            echo "<option value='fihr'>Formacion Integral, Humana y Religiosa</option>";
            echo "<option value='fisica'>Educación Física</option>";
            echo "<option value='ingles'>Inglés</option>";
            echo "<option value='lenguaje'>Lenguaje y Literatura</option>";
            echo "<option value='matematicas'>Matemáticas</option>";
            echo "<option value='naturales'>Ciencas Naturales</option>";
            echo "<option value='sociales'>Ciencias Sociales</option>";
            echo "</select>";
           ?>
           <p>
             <button type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
               +
            </button>
           </p>
           <div class="collapse" id="collapseExample1">

              <?php
                echo "<label for='materia3'>Materia extra</label>";
                echo "<select class='' name='materia3'>";
                echo "<option value='3'> </option>";
                echo "<option value='artistica'>Artistica</option>";
                echo "<option value='fihr'>Formacion Integral, Humana y Religiosa</option>";
                echo "<option value='fisica'>Educación Física</option>";
                echo "<option value='ingles'>Inglés</option>";
                echo "<option value='lenguaje'>Lenguaje y Literatura</option>";
                echo "<option value='matematicas'>Matemáticas</option>";
                echo "<option value='naturales'>Ciencas Naturales</option>";
                echo "<option value='sociales'>Ciencias Sociales</option>";
                echo "</select>";
               ?>
               <p>
                 <button type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
                   +
                </button>
               </p>
               <div class="collapse" id="collapseExample2">
                 <?php
                   echo "<label for='materia4'>Materia extra</label>";
                   echo "<select class='' name='materia4'>";
                   echo "<option value='4'> </option>";
                   echo "<option value='artistica'>Artistica</option>";
                   echo "<option value='fihr'>Formacion Integral, Humana y Religiosa</option>";
                   echo "<option value='fisica'>Educación Física</option>";
                   echo "<option value='ingles'>Inglés</option>";
                   echo "<option value='lenguaje'>Lenguaje y Literatura</option>";
                   echo "<option value='matematicas'>Matemáticas</option>";
                   echo "<option value='naturales'>Ciencas Naturales</option>";
                   echo "<option value='sociales'>Ciencias Sociales</option>";
                   echo "</select>";
                  ?>
                  <p>
                    <button type="button" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">
                      +
                   </button>
                  </p>
                  <div class="collapse" id="collapseExample3">
                    <?php
                      echo "<label for='materia5'>Materia extra</label>";
                      echo "<select class='' name='materia5'>";
                      echo "<option value='5'> </option>";
                      echo "<option value='artistica'>Artistica</option>";
                      echo "<option value='fihr'>Formacion Integral, Humana y Religiosa</option>";
                      echo "<option value='fisica'>Educación Física</option>";
                      echo "<option value='ingles'>Inglés</option>";
                      echo "<option value='lenguaje'>Lenguaje y Literatura</option>";
                      echo "<option value='matematicas'>Matemáticas</option>";
                      echo "<option value='naturales'>Ciencas Naturales</option>";
                      echo "<option value='sociales'>Ciencias Sociales</option>";
                      echo "</select>";
                     ?>
                     <p>
                       <button type="button" data-toggle="collapse" data-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample">
                         +
                      </button>
                     </p>
                     <div class="collapse" id="collapseExample4">
                       <?php
                         echo "<label for='materia6'>Materia extra</label>";
                         echo "<select class='' name='materia6'>";
                         echo "<option value='6'> </option>";
                         echo "<option value='artistica'>Artistica</option>";
                         echo "<option value='fihr'>Formacion Integral, Humana y Religiosa</option>";
                         echo "<option value='fisica'>Educación Física</option>";
                         echo "<option value='ingles'>Inglés</option>";
                         echo "<option value='lenguaje'>Lenguaje y Literatura</option>";
                         echo "<option value='matematicas'>Matemáticas</option>";
                         echo "<option value='naturales'>Ciencas Naturales</option>";
                         echo "<option value='sociales'>Ciencias Sociales</option>";
                         echo "</select>";
                        ?>
                    </div>


                 </div>

              </div>

          </div>
      </div>

<br><br>
      <input type="submit" value="Aceptar">
      <a href="index.php"> <button type="button" name="button"> Cancelar </button> </a>
      <br><br>
      <div class="error"><?php echo $error_final; ?></div>
  </form>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script type="text/javascript">

    $(document).ready(function() {

      $('#pass2').keyup(function() {

        var pass1 = $('#pass1').val();
        var pass2 = $('#pass2').val();


            if ( pass1 === pass2 ) {
            //    $('#pass2:focus').css("border-color", "green");
            //    $('#error2').text('MATCH!').css('color', 'green');
                $('#error2').text('');
        } else {
            //    $('#pass2:focus').css("border-color", "red");
                $('#error2').text('Las contraseñas no coinciden').css('color', 'red');
            }
            if (pass2 == '') {
                $('#pass2:focus').css("border-color", "#a0b3b0");
                $('#error2').text('');
            }


        });

    });
    pass1.addEventListener('keyup', function(){

     strength();
  })



  function strength(){

    var val = document.getElementById('pass1').value;
    var status = document.getElementById('length');
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

    var pwd = document.getElementById('pass1');
    var pwd2 = document.getElementById('pass2');
    var eye = document.getElementById('eye');

    eye.addEventListener('click', togglePass);

    function togglePass(){

      eye.classList.toggle('active');

      (pwd.type == 'password') ? pwd.type = 'text':
      pwd.type = 'password' ;

      (pwd2.type == 'password') ? pwd2.type = 'text':
      pwd2.type = 'password' ;

    }




  </script>



<?php include 'includes/footer.php';  ?>
