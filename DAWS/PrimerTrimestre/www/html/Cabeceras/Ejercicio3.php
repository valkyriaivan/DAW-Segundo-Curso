<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ejercicio 3 cabeceras</title>
</head>
<body>
  <p>
    <?php
      echo "<h1>ERROR 404</h1>";
      echo "La página a la que intenta acceder no está disponible.";
      http_response_code(404);
    ?>
  </p>
</body>
</html>
