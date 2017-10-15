<?php
$nameTitle = "Listado del directorio";
$tituloEj = "Listado del directorio";
$descEj = "Lista el nombre de las carpetas/subcarpetas dentro de un direcrorio y también los archivos.";
  include("php/header.php");
  include("php/headerEj.php");
?>
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
<?php
  include("php/footerEj.php");
  include("php/footer.php");
?>
