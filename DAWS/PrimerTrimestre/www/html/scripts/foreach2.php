<?php
  $nameTitle = "Foreach2";
  $tituloEj = "Foreach2";
  $descEj = "";
  include("php/header.php");
  include("php/headerEj.php");
?>
  <?php
  echo "<ul>";
  $color = array('blanco'=>'blanco.html', 'verde' => 'verde.html', 'rojo' => 'rojo.html');
  foreach ($color as $key => $valor) {
    echo "<li><a href='$valor'>$key</li>";
  }
  echo "</ul>";
  ?>

<?php
  include("php/footerEj.php");
  include("php/footer.php");
?>
