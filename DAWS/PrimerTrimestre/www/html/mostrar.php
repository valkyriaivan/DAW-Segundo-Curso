<?php $nameTitle = "Listado del directorio" ?>
<?php
  include("php/header.php");
?>
<div class="space-medium bg-default">
  <div class="container">
    <div class="row">
     <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
       <h1>listado del directorio</h1>
      <p>Lista el nombre de las carpetas/subcarpetas dentro de un direcrorio y también los archivos.</p>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <div class="well-block">
          <?php
            function recurseDir($dir) {
              if(is_dir($dir)) { //Comprueba si $dir es una carpeta
                if($dh = opendir($dir)){ //Abre el directorio
                  echo "<ul>"; //Abre la lista
                  while($file = readdir($dh)){ //Lee el directorio
                    if($file != '.' && $file != '..'){ //Comprueba si no es .. ni .
                      if(is_dir($dir . "/" . $file)){ //El $file es carpeta o un archivo
                        echo "<li>$file"; //Introduce el nombre de la carpeta
                        recurseDir($dir . "/" . $file . "/"); //Vulve a llamar a la funcion cambiando el $dir
                        echo "</li>";
                      }
                      else{
                        echo "<li>$file</li>"; //Muestra el nombre del archivo
                      }
                    }
                  }
                  echo "</ul>"; //cierra la lista
                }
                closedir($dh); //Cierra el directorio
              }
            }
            recurseDir("."); //Llama a la funcion
          ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
  include("php/footer.php");
?>
