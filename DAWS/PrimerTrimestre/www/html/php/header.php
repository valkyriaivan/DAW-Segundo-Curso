<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <title><?php echo $nameTitle ?></title>
    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i%7cMontserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/css/font-awesome.msession_start();in.css" rel="stylesheet">
    <!-- Style -->
    <link href="/css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js "></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js "></script>
<![endif]-->
<!-- https://easetemplate.com/free-website-templates/hairsalon/styleguide.html -->
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <a href="/"><img src="/images/logo.png" alt="Poned un logo"></a><br>
                    <?php
                      if (isset($_SESSION["correoUsuario"])){
                        echo $_SESSION["correoUsuario"];
                        echo "<a class='btn' href='/php/logout.php'>Log out</a>";
                      }
                      if (isset($_SESSION["username"])){
                        echo $_SESSION["username"];
                        echo "<a class='btn' href='/login/logout.php'>Log out</a>";
                      }
                    ?>
                </div>
                <div class="col-lg-8 col-md-4 col-sm-12 col-xs-12">
                    <div class="navigation">
                        <div id="navigation">
                          <?php
                            $dir = ".";
                            // Abre un directorio conocido, y procede a leer el contenido
                            if (is_dir($dir)) {
                              if ($dh = opendir($dir)) {
                                echo "<ul>";
                                $prueba = array();
                                while (($file = readdir($dh)) !== false) {
                                  array_push($prueba, $file);
                                }
                                natcasesort($prueba);
                                foreach ($prueba as $file) {
                                  $ext= pathinfo($file, PATHINFO_EXTENSION);
                                  if ($file !== "index.php"){
                                    if ($ext == "php"){
                                      $fileNew = str_replace('.php', '', $file);
                                      echo "<li><a href=$file>$fileNew</a></li>";
                                    }
                                  }
                                }
                                echo "</ul>";
                              }
                            }
                          ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
