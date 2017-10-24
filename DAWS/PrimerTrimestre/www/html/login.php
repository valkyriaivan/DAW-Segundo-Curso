<?php
  $nameTitle = "Formulario";
  $tituloEj = "Formulario";
  $descEj = "Formulario donde introducimos varios campos y realiza comprobaciones.";
  include("php/header.php");
  include("php/headerEj.php");
?>
          <?php
            function test_input($data) {
              $data = trim($data);
              //Quitar las comillas escapadas \' y \ ""
              $data = stripslashes($data);
              //Prevenir la introducción de scripts en los campos
              $data = htmlspecialchars($data);
              return $data;
            }

            $metodo = $_SERVER["REQUEST_METHOD"];
            $contra = $correo = "";
            $conocido = array();
            $emailErr = $passwordErr = "";
            $error = false;
            $errores = array();
            $usuario = array();

            if ($metodo == "POST") {
              $usuarios = array ("pepe@gmail.com" =>array ("nombre" => "Pepe", "password" => '$2y$10$k5wmNKV.1lr8zzvOpj/Yiu.3jzolCja1BwNeB56CaVz06JgBC7ip2', "direccion" => "la que sea"), "juan@gmail.com" =>array ("nombre" => "Juan", "password" => '$2y$10$RAmZZAHLhlV.DcUHcdRxhuURDngUlA40rUvJ7I07Att3T8bnpi2Be', "direccion" => "Calle Mayor"));

              $correo = test_input($_POST["correo"]);
              if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
                array_push($errores, "El formato del correo no es el correcto.");
                $emailErr = true;
              }

              foreach ($usuarios as $email => $arrayTest) {
                if ($email == $correo){
                  foreach ($arrayTest as $test => $value) {
                    array_push($usuario, $value);
                  }
                }
              }
              if (!password_verify($_POST["contra"], $usuario[1])) {
                array_push($errores, "La contraseña/email no son correctas.");
                $passwordErr = true;
              }

              if (sizeOf($errores) > 0){
                $error = true;
              }
              if (!$error){
                $_SESSION["correoUsuario"] = $correo;
                $_SESSION["nombreUsuario"] = $usuario[0];
                $_SESSION["direccion"] = $usuario[2];

                header("Location: index.php");
              }
            }
            if ($metodo == "GET" || $error){
              if ($error){
                //Mostrar todos los mensajes de error
                for ($i = 0; $i < sizeOf($errores); $i++)
                  echo "<div class='alert alert-danger' role='alert'>$errores[$i]</div>";
              }
              ?>
              <form action="" method="post">
                <div class="form-group <?php if ($emailErr) echo 'has-error';?>">
                  <label for="correo">Correo</label>
                  <input type="text" class="form-control" id="correo" name="correo" placeholder="Introduce tu correo electrónico" value="<?php echo $correo == ""? $correo: $correo; ?>">
                </div>
                <div class="form-group <?php if ($passwordErr) echo 'has-error';?>">
                  <label for="contra">Contraseña</label>
                  <input type="password" class="form-control" id="contra" name="contra" placeholder="Introduce tu correo electrónico">
                </div>
                <button type="submit" class="btn btn-default">Login</button>
              </form>
            <?php
            }
          ?>
<?php
  include("php/footerEj.php");
  include("php/footer.php");
?>
