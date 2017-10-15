<?php
  $nameTitle = "Subir imágen";
  $tituloEj = "Subir imágen";
  $descEj = "Sube una imágen al servidor, realizando algunas comprobaciones y tests.";
  include("php/header.php");
  include("php/headerEj.php");
?>
          <?php
          $error = false;
          $errors = array();

          $metodo = $_SERVER["REQUEST_METHOD"];
          if ($metodo == "POST") {
            if(isset($_FILES['imagen_enviada'])){
              if ($_FILES['imagen_enviada']['error'] == UPLOAD_ERR_OK){
                //Limitar tamaño del archivo
                if($_FILES['imagen_enviada']['size'] > (2 * 1024 * 1024)) {
                  $errors[]='El archivo no puede superar los 2MB';
                }
                //Comprobar la extensión
                $partesFichero = explode('.',$_FILES['imagen_enviada']['name']);
                $file_ext=strtolower(end($partesFichero));

                $extensions= array("jpeg","jpg","png");

                if(in_array($file_ext,$extensions)=== false){
                  $errors[]="Extensión no permitida, sólo son válidos archivos jpg o png";
                }
              }
              else{
                $errors[]="Se ha producido un error. Código de error: " . $_FILES['imagen_enviada']['error'];
              }

              if (sizeOf($errors) > 0){
                $error = true;
              }
              if (!$error){
                move_uploaded_file($_FILES['imagen_enviada']['tmp_name'],"fotos/". $_FILES['imagen_enviada']['name']);
                echo "La imágen se ha subido correctamente.";
              }
            }
          }
          if ($metodo == "GET" || $error){
            if ($error){
              //Mostrar todos los mensajes de error
              for ($i = 0; $i < sizeOf($errors); $i++)
                echo "<div class='alert alert-danger' role='alert'>$errors[$i]</div>";
            }?>
            <form action ="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method = "POST" enctype = "multipart/form-data">
              <input type = "file" name = "imagen_enviada" accept="image/*">
              <input type = "submit" value="Subir Imagen">
            </form>
          <?php
          }
          ?>
<?php
  include("php/footerEj.php");
  include("php/footer.php");
?>
