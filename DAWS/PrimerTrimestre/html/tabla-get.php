<?php $nameTitle = "Tabla GET" ?>
<?php
  include("php/header.php");
?>
<div class="space-medium bg-default">
  <div class="container">
    <div class="row">
     <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
       <h1>Tabla gET</h1>
      <p>Realiza bucles para crear una tabla del tamaño que introduzca el usuario.</p>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <div class="well-block">
          <?php
            echo "<table border=1>";
            $contador=1;
            $lado = $_GET["lado"];
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
        </div>
      </div>
    </div>
  </div>
</div>

<?php
  include("php/footer.php");
?>
