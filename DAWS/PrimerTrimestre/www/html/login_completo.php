<?php
  $nameTitle = "Login completo";
  $tituloEj = "Login completo";
  $descEj = "Página de registro usando base de datos.";
  include("login/login_functions.php");
  include("php/header.php");
  include("php/headerEj.php");

  if (isset($_SESSION['username'])) {?>
    <p>Está registrado como <strong><?php echo $_SESSION['username']; ?></strong></p>
  <?php
    }else{
      if ($error){
        //Mostrar todos los mensajes de error
        for ($i = 0; $i < sizeOf($errors); $i++)
          echo "<div class='alert alert-danger' role='alert'>$errors[$i]</div>";
      }
    ?>
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <div class="form-group">
          <label for="correo">Nombre de usuari@</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="Introduce tu correo electrónico">
        </div>
        <div class="form-group">
          <label for="contra">Contraseña</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Introduce tu correo electrónico">
        </div>
        <button type="submit" class="btn btn-default" name="login_user">Acceder</button>
      </form>
    <?php
    }
  include("php/footerEj.php");
  include("php/footer.php");
?>
