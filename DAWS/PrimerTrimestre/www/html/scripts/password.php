<?php
function rand_Pass($upper = 1, $lower = 5, $numeric = 3, $other = 2){
  $password = array();
  for ($i = 0; $i < $upper; $i++){
    $password[] = chr(rand(65, 90));
  }
  for ($i = 0; $i < $lower; $i++){
    $password[] = chr(rand(97, 122));
  }
  for ($i = 0; $i < $numeric; $i++){
    $password[] = chr(rand(48, 57));
  }
  for ($i = 0; $i < $other; $i++){
    $password[] = chr(rand(33, 47));
  }
  shuffle($password);
  $pass = implode("", $password);
  return $pass;
}
  $nameTitle = "Random Password";
  $tituloEj = "Random password";
  $descEj = "Crea una contraseña aleatoria.";
  include("php/header.php");
  include("php/headerEj.php");
///      CONTENIDO      ///
  $password = rand_Pass();
  echo "<p>Tu contraseña es: $password<p>";

///      CONTENIDO      ///
  include("php/footerEj.php");
  include("php/footer.php");
?>
