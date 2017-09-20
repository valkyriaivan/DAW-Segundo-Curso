<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Ejercicio 4 cabeceras</title>
</head>
<body>
  <p>
    <?php
      $ip = $_SERVER['REMOTE_ADDR'];
      $ipServer = $_SERVER['SERVER_ADDR'];
      //Comprueba si la IP del servidor y del cliente es igual. Si no lo es, manda error 401.
      if ($ip == $ipServer){
        echo "<h1>Bienvenido</h1>";
        echo "Estás autorizado a entrar en la página.";
      }
      else{
        echo "<h1>ERROR 401</h1>";
        echo "Lo sentimos, no tienen acceso a esta página.";
        http_response_code(401);
      }
    ?>
  </p>

</body>
</html>
