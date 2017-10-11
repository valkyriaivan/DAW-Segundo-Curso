<?php
  $nameTitle = "Sort2";
  $tituloEj = "Sort2";
  $descEj = "Ordena un string de temepraturas y muestra algunos calculos";
  include("php/header.php");
  include("php/headerEj.php");
///      CONTENIDO      ///
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
  echo "<h4>Media de temperaturas</h4>";
  echo "La media de la temperatura de este mes es: $resultado" . "º";


  echo "<h4>Las 5 temperaturas más bajas</h4>";
  for ($i=0; $i < 5; $i++) {
    echo  " " . $arrayTemp[$i] . "º";
  }

  echo "<h4>Las 5 temperaturas más altas</h4>";
  $arrayLongNew = $arrayLong - 5;
  for ($i=$arrayLong; $i >= $arrayLongNew; $i--) {
    echo  " " . $arrayTemp[$i] . "º";
  }
///      CONTENIDO      ///
  include("php/footerEj.php");
  include("php/footer.php");
?>
