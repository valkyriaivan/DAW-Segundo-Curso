<?php
  $nameTitle = "Sort3";
  $tituloEj = "Sort3";
  $descEj = "Ordena un array asociativo";
  include("php/header.php");
  include("php/headerEj.php");
///      CONTENIDO      ///
  //echo "<h3>String original</h3>";
  $produc=array("Xiaomi Redmi Note 4"=>"Es uno de los mejores móviles del momento en su gama.","Bq Aquaris U Plus"=>"Con Aquaris U Plus damos un paso más en el uso del metal.","Meizu M5 Note"=>"Meizu lanza un nuevo terminal de gama media alta para su línea M, el nuevo Meizu M5 Note.");
  function cmp($a, $b) {
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
  }

  uasort($produc, "cmp");
  echo "<p>";
  foreach ($produc as $nombre => $descripcion) {
    echo "<h3>$nombre</h3> $descripcion<br><br>";
  }
  echo "</p>";



///      CONTENIDO      ///
  include("php/footerEj.php");
  include("php/footer.php");
?>
