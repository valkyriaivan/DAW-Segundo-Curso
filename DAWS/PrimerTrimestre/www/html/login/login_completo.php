<?php
  $nameTitle = "Login completo";
  $tituloEj = "Login completo";
  $descEj = "Página de registro usando base de datos.";
  include("funciones/login_functions.php");
  include("../php/header.php");
  include("../php/headerEj.php");

  if (isset($_SESSION['username'])) {?>
    <p>Está registrado como <strong><?php echo $_SESSION['username']; ?></strong></p>
    <p>¿Quiere volver a el indice? <a href='index.php'>Volver a indice</a></p>
  <?php
  }else{
    if (count($errors) > 0){
      //Mostrar todos los mensajes de error
      for ($i = 0; $i < sizeOf($errors); $i++)
        echo "<div class='alert alert-danger' role='alert'>$errors[$i]</div>";
    }
    if (isset($_SESSION['msg'])){
      //Mostrar todos los mensajes de error
      echo "<div class='alert alert-danger' role='alert'>$_SESSION[msg]</div>";
      unset($_SESSION['msg']);
    }

    if (isset($_GET["redirect"])){
      $redirect =  htmlspecialchars($_SERVER['PHP_SELF']) . "?redirect=" . $_GET["redirect"];
    }
    else{
      $redirect = htmlspecialchars($_SERVER['PHP_SELF']);
    }
    ?>
      <form action="<?php echo $redirect;?>" method="post">
        <div class="form-group <?php if ($nombreErr) echo 'has-error';?>">
          <label for="correo">Nombre de usuari@</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="Introduce tu usuario" value="<?php echo $username;?>">
        </div>
        <div class="form-group <?php if ($passErr) echo 'has-error';?>">
          <label for="contra">Contraseña</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Introduce tu contraseña">
        </div>
        <button type="submit" class="btn btn-default" name="login_user">Acceder</button>
        <?php
        echo "<p>¿Todavía no eres miembro? <a href='register.php'>Registrate</a></p>";
        ?>
      </form>
    <?php
    }
  include("../php/footerEj.php");
  include("../php/footer.php");
?>
