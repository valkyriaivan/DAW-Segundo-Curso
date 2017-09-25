<!DOCTYPE html
<html>
<head>
  <meta charset="utf-8">
  <title>Ejercicio 5 cabeceras</title>
</head>
<body>
  <p>
    <?php
      $lang = Locale::acceptFromHttp($_SERVER['HTTP_ACCEPT_LANGUAGE']); //Extrae el codigo del lenguaje del usuario

      if ($lang == "ca"){
        echo "<p>Aquesta página está en catalá.<p>";
      }
      elseif ($lang == "es"){
        echo "<p>Esta página está en castellano.</p>";
      }
      elseif ($lang == "en_US"){
        echo "<p>This web page is in english.</p>";
      }
    ?>
  </p>
</body>
</html>
