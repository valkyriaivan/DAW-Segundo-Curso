<?php
  $nameTitle = "Tabla coloreada";
  $tituloEj = "Tabla coloreada";
  $descEj = "Realiza bucles para crear una tabla y colorea las celdas con números impares.";
  include("php/header.php");
  include("php/headerEj.php");

  echo "<table border=1>";
  $contador=1;
  const lado = 10;
  for ($n1=1; $n1<=lado; $n1++){
  	echo "<tr>";
  	for ($n2=1; $n2<=lado; $n2++){
      if (($contador % 2) == 0){
        echo "<td>", $contador, "</td>";
      }
      else{
      	echo "<td bgcolor='red'>", $contador, "</td>";
      }
      $contador=$contador+1;
    }
    echo "</tr>";
  }
  echo "</table>";

  include("php/footerEj.php");
  include("php/footer.php");
?>
