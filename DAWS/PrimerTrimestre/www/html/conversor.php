<?php
  $nameTitle = "Conversor";
  $tituloEj = "Conversor de moneda";
  $descEj = "Conversor de euros a dolares.";
  include("php/header.php");
  include("php/headerEj.php");
?>
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
<?php
  include("php/footerEj.php");
  include("php/footer.php");
?>
