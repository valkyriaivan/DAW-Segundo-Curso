<?php
$nameTitle = "Formulario";
$tituloEj = "Formulario";
$descEj = "Formulario donde introducimos varios campos y realiza comprobaciones."
?>
<?php
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
            function IsChecked($chkname,$value)
            {
                if(!empty($_POST[$chkname]))
                {
                    foreach($_POST[$chkname] as $chkval)
                    {
                        if($chkval == $value)
                        {
                            return true;
                        }
                    }
                }
                return false;
            }
            $metodo = $_SERVER["REQUEST_METHOD"];
            $nombre = $correo  = $contacto = $comentario = "";
            $conocido = array();
            $nombreErr = $emailErr = $conocidoErr = $contactoErr = $comentarioErr = "";
            $error = false;
            $errores = array();
            if ($metodo == "POST") {
              $nombre = test_input($_POST["nombre"]);
              if ($nombre == ""){
                array_push($errores, "Introduce un nombre");
                $nombreErr = true;
              }
              $correo = test_input($_POST["correo"]);
              if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
                array_push($errores, "Formato inválido de correo");
                $emailErr = true;
              }
              $contacto = test_input($_POST["contacto"]);
              if(!isset($contacto)){
                array_push($errores, "Seleccione una preferencia de contacto.");
                $contactoErr = true;
              }

              $conocido = $_POST["conocido"];
              if(empty($conocido)){
                array_push($errores, "Seleccione la forma en la que nos conoció.");
                $conocidoErr = true;
              }

              $comentario = $_POST["comentario"];

              if (sizeOf($errores) > 0){
                $error = true;
              }
              if (!$error){
                  echo "<h4>Ha introducido los siguientes datos:</h4><hr>";
                  echo "<div>Nombre: $nombre<br/>";
                  echo "Correo: $correo<br/>";
                  echo "Preferencia de contacto: $contacto<br/>";
                  echo "Nos conociste mediante: ";
                  foreach ($conocido as $cono){
                    if($cono !== end($conocido)){
                      echo $cono . ", ";
                    }
                    else{
                      echo $cono . ".";
                    }
                  }
                  echo "<br>Comentario: $comentario </div>";
                  echo "Enviar otro <a href='" . htmlspecialchars($_SERVER['PHP_SELF']) . "'>mensaje</a>";
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
                <div class="form-group <?php if ($nombreErr) echo 'has-error';?>">
                  <label for="nombre">Nombre completo</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre completo" value="<?php echo $nombre == ""? $nombre: $nombre; ?>">
                </div>
                <div class="form-group <?php if ($emailErr) echo 'has-error';?>">
                  <label for="correo">Correo</label>
                  <input type="text" class="form-control" id="correo" name="correo"  placeholder="Introduce tu correo electrónico" value="<?php echo $correo == ""? $correo: $correo; ?>">
                </div>
                <div class="form-group <?php if ($conocidoErr) echo 'has-error';?>">
                  <fieldset>
                    <legend>Indica como nos has conocido:</legend>
                    <input type="checkbox" name="conocido[]" value="Web" <?php echo IsChecked(conocido,Web) ? "checked" : ""; ?>> <label>Web</label>
                    <input type="checkbox" name="conocido[]" value="Amigo" <?php echo IsChecked(conocido,Amigo) ? "checked" : ""; ?>> <label>Amigo</label>
                    <input type="checkbox" name="conocido[]" value="Prensa" <?php echo IsChecked(conocido,Prensa) ? "checked" : ""; ?>> <label>Prensa</label>
                    <input type="checkbox" name="conocido[]" value="Television" <?php echo IsChecked(conocido,Television) ? "checked" : ""; ?>> <label>Televisión</label><br>
                  </fieldset>
                </div>
                <div class="form-group <?php if ($contactoErr) echo 'has-error';?>">
                  <fieldset>
                    <legend>Por favor, introduzca su metodo de contacto favorito:</legend>
                    <input type="radio" name="contacto" value="Correo" <?php echo ($contacto == "Correo" || $contacto == "" ? "checked" : ""); ?>> <label>Correo</label>
                    <input type="radio" name="contacto" value="Telefono" <?php echo ($contacto == "Telefono" ? "checked" : ""); ?>> <label>Teléfono</label>
                  </fieldset>
                </div>
                <div>
                  <label for="comentario">Comentarios:</label>
                  <textarea class="form-control" rows="5" name="comentario"><?php echo ($comentario == "" ? $comentario : $comentario); ?></textarea>
                </div>
                <button type="submit" class="btn btn-default">Enviar</button>
              </form>
            <?php
            }
          ?>
<?php
  include("php/footerEj.php");
  include("php/footer.php");
?>
