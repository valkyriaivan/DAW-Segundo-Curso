<?php
  $nameTitle = "Tabla";
  $tituloEj = "Tabla";
  $descEj = "Realiza bucles para crear una tabla.";
  include("php/header.php");
  include("php/headerEj.php");
?>
          <?php
            echo "<table border=1>";
            $contador=1;
            const lado = 10;
              for ($n1=1; $n1<=lado; $n1++){
                echo "<tr>";
                for ($n2=1; $n2<=lado; $n2++){
                    echo "<td>", $contador, "</td>";
                    $contador=$contador+1;
                }
                echo "</tr>";
            }
            echo "</table>";
          ?>
<?php
  include("php/footerEj.php");
  include("php/footer.php");
?>
