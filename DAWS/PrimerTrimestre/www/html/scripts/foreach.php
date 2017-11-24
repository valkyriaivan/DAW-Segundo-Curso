<?php
  $nameTitle = "Foreach";
  $tituloEj = "Foreach";
  $descEj = "";
  include("php/header.php");
  include("php/headerEj.php");
?>
  <?php
  echo "<ul>";
  $color = array('blanco', 'verde', 'rojo');
  foreach ($color as $valor) {
    echo "<li>$valor</li>";
  }
  echo "</ul>";
  ?>

<?php
  include("php/footerEj.php");
  include("php/footer.php");
?>
