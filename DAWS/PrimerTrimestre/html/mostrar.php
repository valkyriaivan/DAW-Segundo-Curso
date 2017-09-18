<?php
  function recurseDir($dir) {
    if(is_dir($dir)) { //Comprueba si $dir es una carpeta
      if($dh = opendir($dir)){ //Abre el directorio
        echo "<ul>"; //Abre la lista
        while($file = readdir($dh)){ //Lee el directorio
          if($file != '.' && $file != '..'){ //Comprueba si no es .. ni .
            if(is_dir($dir . "/" . $file)){ //El $file es carpeta o un archivo
              echo "<li>$file</li>"; //Introduce el nombre de la carpeta
              recurseDir($dir . "/" . $file . "/"); //Vulve a llamar a la funcion cambiando el $dir
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
