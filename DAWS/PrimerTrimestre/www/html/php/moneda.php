<?php
  $cantidad = (int)$_POST['cant'];
  $conv = $_POST['convert'];
  if ($conv == "etod"){
    $cantidad *= 1.18;
    // echo "<p>La cantidad en Dolares es: $cantidad</p>";
  }
?>
