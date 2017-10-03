<?php $nameTitle = "" ?>
<?php
  include("php/header.php");
?>
<div class="space-medium bg-default">
  <div class="container">
    <div class="row">
     <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
       <h1>Conversor de moneda</h1>
      <p>Conversor de euros a dolares.</p>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <div class="well-block">
          <?php
            $metodo = $_SERVER["REQUEST_METHOD"];
            $cant = "";
            if ($metodo == "POST") {
              $cant = htmlspecialchars($_POST["cant"], true);
              if (preg_match('^[+-]?([0-9]*[.])?[0-9]+$^', $cant)){
                echo '<pre>';
                // $cant = htmlspecialchars($_POST["cant"], true);
                $conv = htmlspecialchars($_POST["conversion"], true);
                if ($conv == "1"){
                $resul = round($cant * 1.17505, 2);
                  echo "Resultado: $cant"."€ =====> $resul$";
                }
                elseif ($conv == "2"){
                  $resul = round($cant * 0.85102, 2);
                  echo "Resultado: $cant$ =====> $resul"."€";
                }
                $url = $_SERVER["PHP_SELF"];
                echo "<p align='right'><a href='$url'>Realizar una nueva operación</a></p>";
                echo '</pre>';
              }
              else {
                $error = true;
                echo "<p>ERROR. Introduce un valor decimal valido.";
              }
            }
            if ($metodo == "GET" || $error){?>
              <form action="" method="post">
                <p>Introduce una cantidad: <input type="text" name="cant" value= "<?php echo $cant; ?>">
                <select name="conversion">
                  <option value="1">Euros a Dolares</option>
                  <option value="2">Dolares a Euros</option>
                </select>
               <p><input type="submit" value="Convertir" /></p>
              </form>
            <?php
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
