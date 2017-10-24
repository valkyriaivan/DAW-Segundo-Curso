<?php
  $nameTitle = "";
  $tituloEj = "";
  $descEj = "";
  include("php/header.php");
  include("php/headerEj.php");
?>
  <?php
  $edades=array("Juan"=>"31","María"=>"41","Andrés"=>"39","Berta"=>"40");
  echo "<br><h3>Ordenado por Nombre, ascendente</h3>";
  ksort($edades);
  foreach ($edades as $key => $val) {
    echo "$key - $val años.<br>";
  }
  echo "<br><h3>Ordenado por Edad, ascendente</h3>";
  asort($edades);
  foreach ($edades as $key => $val) {
    echo "$key - $val años.<br>";
  }
  echo "<br><h3>Ordenado por nOmbre, descendiente</h3>";
  krsort($edades);
  foreach ($edades as $key => $val) {
    echo "$key - $val años.<br>";
  }
  echo "<br><h3>Ordenado por Edad, descendiente</h3>";
  arsort($edades);
  foreach ($edades as $key => $val) {
    echo "$key - $val años.<br>";
  }
  ?>

<?php
  include("php/footerEj.php");
  include("php/footer.php");
?>
