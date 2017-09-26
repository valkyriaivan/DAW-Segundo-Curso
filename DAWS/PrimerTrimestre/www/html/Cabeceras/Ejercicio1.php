<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ejercicio 1 cabeceras</title>
</head>
<body>
  <p>
    <?php
      $coma = strpos($_SERVER["HTTP_ACCEPT_LANGUAGE"],",");
      $lang = substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,$coma);
      if ($lang == "ca"){
        echo "<p>Aquesta página está en catalá.<p>";
      }
      elseif ($lang == "es-es"){
        echo "<p>Esta página está en castellano.</p>";
      }
      elseif ($lang == "en-US"){
        echo "<p>This web page is in english.</p>";
      }
    ?>
  </p>
</body>
</html>
