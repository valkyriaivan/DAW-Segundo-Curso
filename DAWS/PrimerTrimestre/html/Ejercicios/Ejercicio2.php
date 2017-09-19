<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ejercicio 2 cabeceras</title>
</head>
<body>
  <p>
    <?php
      $navegador = strpos($_SERVER['HTTP_USER_AGENT'],"Firefox"); //Extrae el navegador que utiliza el usuario
      if ($navegador !== false){
        echo "<h1>Hello world</h1>\n";
        echo "Estás viendo esta web desde mozilla";
      }
      else{
        echo "<h1>ERROR</h1>\n";
        echo "Por favor, abre la web desde Mozilla.";
      }
    ?>
  </p>
</body>
</html>
