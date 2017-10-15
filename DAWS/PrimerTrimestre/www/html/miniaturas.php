<?php
  $nameTitle = "Listado de fotos";
  $tituloEj = "Listado de fotos";
  $descEj = "Muestra las imágenes de una carpeta. Si estas no tienen miniatura, crea una y después la muestra.";
  include("php/header.php");
  include("php/headerEj.php");
?>
          <?php
            $dir = "listado_fotos2/";

            if (is_dir($dir)) {
              if ($dh = opendir($dir)) {
                echo "<table border=1 padding:15>";
                echo "<tr>";
                while (($file = readdir($dh)) !== false) {
                  if ((mime_content_type($dir . "/" . $file) == "image/jpeg") || (mime_content_type($dir . "/" . $file) == "image/png")){;
                    $thumb = "listado_fotos2/thumbs/".$file;
                    $file2 = $dir . $file;
                    if (!file_exists($thumb)) {
                      system("convert -sample 256x256 $file2 $thumb");
                    }
                    echo "<td><a href='$file2'><img src='$thumb'></a></td>";
                  }
                }
                echo "</tr>";
                echo "</table>";
                closedir($dh);
              }
            }
          ?>
<?php
  include("php/footerEj.php");
  include("php/footer.php");
?>
