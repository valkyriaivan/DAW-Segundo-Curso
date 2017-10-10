<?php
  $nameTitle = "SoRT2";
  $tituloEj = "Sort2";
  $descEj = "Ordena un string de temepraturas y muestra algunos calculos";
  include("php/header.php");
  include("php/headerEj.php");
?>
  <?php
  echo "<h3>String original</h3>";
  $temperatura= "15, 20, 1, 9, 32, 28, 25, 12, 35, 4, 21, 5, 6, 8, 10";
  echo $temperatura;
  $arrayTemp = explode(", ", $temperatura);
  sort($arrayTemp);
  $arrayLong = count($arrayTemp);
  $suma = 0;

  foreach ($arrayTemp as $val) {
    $suma += $val;
  }
  $resultado = $suma / $arrayLong;
  echo "<br><h4>Media de temperaturas</h4>";
  echo "La media de la temperatura de este mes es: $resultado";

  echo "<br><h4>Las 5 temperaturas más bajas</h4>";
  for ($i=0; $i < 5; $i++) {
    echo  " " . $arrayTemp[$i];
  }
  rsort($arrayTemp);
  echo "<br><h4>Las 5 temperaturas más altas</h4>";
  for ($i=0; $i < 5; $i++) {
    echo  " " . $arrayTemp[$i];
  }

  ?>

<?php
  include("php/footerEj.php");
  include("php/footer.php");
?>
