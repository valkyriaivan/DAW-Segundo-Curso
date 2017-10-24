<?php
  $nameTitle = "Registro";
  $tituloEj = "Registro";
  $descEj = "Página de registro usando base de datos.";
  include("funciones/login_functions.php");
  include("../php/header.php");
  include("../php/headerEj.php");

?>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <div class="form-group">
      <label for="correo">Nombre de usuari@</label>
      <input type="text" class="form-control" id="username" name="username" placeholder="Introduce un username">
    </div>
    <div class="form-group">
      <label for="correo">correo</label>
      <input type="text" class="form-control" id="email" name="email" placeholder="Introduce un correo electrónico">
    </div>
    <div class="form-group">
      <label for="correo">Contraseña</label>
      <input type="password" class="form-control" id="password" name="password_1" placeholder="Introduce una contraseña">
    </div>
    <div class="form-group">
      <label for="contra">Confirmar contraseña</label>
      <input type="password" class="form-control" id="password_2" name="password_2" placeholder="Introduce una contraseña">
    </div>
    <button type="submit" class="btn btn-default" name="reg_user">Registrarse</button>
  </form>
<?php
include("../php/footerEj.php");
include("../php/footer.php");
?>
