<?php $nameTitle = "Inicio" ?>
<?php
  include("php/header.php");
?>
<div class="space-medium bg-default">
  <div class="container">
    <div class="row">
     <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
      <h1>LIstar fotos</h1>
      <p>Comprueba si </p>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <div class="well-block">
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
        </div>
      </div>
    </div>
  </div>
</div>
<?php
  include("php/footer.php");
?>
