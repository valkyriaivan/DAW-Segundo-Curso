<?php $nameTitle = "" ?>
<?php
  include("php/header.php");
?>
<div class="space-medium bg-default">
  <div class="container">
    <div class="row">
     <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
       <h1>Formulario</h1>
      <p>Formulario donde introducimos varios campos y realiza comprobaciones.</p>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <div class="well-block">
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
            $nombre = $correo = $conocido = $contacto = $comentario = "";
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
              $conocido = test_input($_POST["conocido"]);

              if($conocido == ""){
                array_push($errores, "Seleccione la forma en la que nos conoció.");
                $contactoErr = true;
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
                  echo "Nos conociste mediante: $conocido<br/>";
                  echo "Comentario: $comentario </div>";
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
                <div class="form-group">
                  <label for="nombre">Nombre completo</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre completo">
                </div>
                <div class="form-group">
                  <label for="correo">Correo</label>
                  <input type="text" class="form-control" id="correo" name="correo"  placeholder="Introduce tu correo electrónico">
                </div>
                <div>
                  Indica como nos has conocido:<hr>
                  <input type="checkbox" name="conocido" value="Web" checked> <label>Web</label>
                  <input type="checkbox" name="conocido" value="Amigo"> <label>Amigo</label>
                  <input type="checkbox" name="conocido" value="Prensa"> <label>Prensa</label>
                  <input type="checkbox" name="conocido" value="Televisión"> <label>Televisión</label><br>
                </div>
                <br>
                <div>
                  Por favor, introduzca su metodo de contacto favorito:<hr>
                  <input type="radio" name="contacto" value="Correo" checked> <label>Correo</label>
                  <input type="radio" name="contacto" value="Telefono"> <label>Teléfono</label>
                </div>
                <div>
                  <label for="comentario">Comentarios:</label>
                  <textarea class="form-control" rows="5" name="comentario"></textarea>
                </div>
                <button type="submit">Enviar</button>
              </form>
            <?php
            }
          ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
  include("php/footer.php");
?>
