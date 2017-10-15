<?php
  $nameTitle = "Tabla GET";
  $tituloEj = "Tabla GET";
  $descEj = "Realiza bucles para crear una tabla del tamaño que introduzca el usuario.";
  include("php/header.php");
  include("php/headerEj.php");
?>
          <?php
            echo "<table border=1>";
            $contador=1;
            if (empty($_GET["lado"])){
              $nuevaUrl = $_SERVER['REQUEST_URI'] . "?lado=5";
              header("Location: $nuevaUrl");
            }
            else{
              $lado = $_GET["lado"];
            }
            for ($n1=1; $n1<=$lado; $n1++){
              echo "<tr>";
              for ($n2=1; $n2<=$lado; $n2++){
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
