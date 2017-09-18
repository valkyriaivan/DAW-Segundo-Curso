<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <title>Título de la página</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i%7cMontserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Style -->
    <link href="css/style.css" rel="stylesheet">
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
                    <a href="/"><img src="images/logo.png" alt="Poned un logo"></a>
                </div>
                <div class="col-lg-8 col-md-4 col-sm-12 col-xs-12">
                    <div class="navigation">
                        <div id="navigation">
                            <!--<ul>
                                <li class="active"><a href="/" title="Home">Inicio</a></li>
                                <li class="has-sub"><a href="1.php" title="Página 1">Página 1</a>
                                    <ul>
                                        <li><a href="#" title="Service List">Página 1.1</a></li>
                                        <li><a href="#" title="Service Detail">Service Detail</a></li>
                                    </ul>
                                </li>
                                <li class="has-sub"><a href="#" title="Blog ">News</a>
                                    <ul>
                                        <li><a href="#" title="Blog">Blog Default</a></li>
                                        <li><a href="#" title="Blog Single ">Blog Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" title="Features">Features</a>
                                    <ul>
                                        <li><a href="#" title="Service List">Testimonial</a></li>
                                        <li><a href="#" title="Service Detail">Style Guide</a></li>
                                    </ul>
                                </li>
                                <li><a href="#" title="Contact Us">Contact</a> </li>
                            </ul>
                          -->
                          <?php
                            $dir = ".";
                            // Abre un directorio conocido, y procede a leer el contenido
                            if (is_dir($dir)) {
                              if ($dh = opendir($dir)) {
                                echo "<ul>";
                                while (($file = readdir($dh)) !== false) {
                                  $ext= pathinfo($file, PATHINFO_EXTENSION);
                                  if ($ext == "php"){
                                    $fileNew = str_replace('.php', '', $file);
                                    echo "<li><a href='$file'>$fileNew</a></li>";
                                  }
                                }
                                echo "</ul>";
                                closedir($dir);
                              }
                            }
                          ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!--inicio contenido -->
    <div class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <h1 class="hero-title">Escribe un título para esta parte</h1>
                    <p class="hero-text"><strong>Y una descripción</strong> </p>
				</div>
            </div>
        </div>
    </div>
    <div class="space-medium bg-default">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12"><img src="images/about-img.jpg" alt="" class="img-responsive"></div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    <div class="well-block">
                        <h1>Tu nombre</h1>
                        <h5 class="small-title ">un subtítulo</h5>
                        <p>Esta es nuestra <a href="">página</a></p>
                        <p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris posuere quam sit amet dui dignissim, sed eleifend eros faucibus. Nullam pellentesque sodales mattis. Duis
		 					dapibus miex.  Mauris vestibulum commodo.
						</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam interdum.</p>
                        <a href="# " class="btn btn-default">Ver más</a> </div>
                </div>
            </div>
        </div>
    </div>
	<!--Fin contenido -->
    <div class="footer">
        <!-- footer-->
        <div class="container">
            <div class="footer-block">
                <!-- footer block -->
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="footer-widget">
                            <h2 class="widget-title">Tu nombre</h2>
                            <ul class="listnone contact">
                                <li><i class="fa fa-map-marker"></i> Dirección </li>
                                <li><i class="fa fa-phone"></i> Teléfono</li>
                                <li><i class="fa fa-fax"></i> Fax</li>
                                <li><i class="fa fa-envelope-o"></i> info@tudominio.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-widget footer-social">
                            <!-- social block -->
                            <h2 class="widget-title">Social Feed</h2>
                            <ul class="listnone">
                                <li>
                                    <a href="#"> <i class="fa fa-facebook"></i> Facebook </a>
                                </li>
                                <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i> Google Plus</a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i> Linked In</a></li>
                                <li>
                                    <a href="#"> <i class="fa fa-youtube"></i>Youtube</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.social block -->
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <div class="footer-widget widget-newsletter">
                            <!-- newsletter block -->
                            <h2 class="widget-title">Newsletters</h2>
                            <p>Enter your email address to receive new patient information and other useful information right to your inbox.</p>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Email Address">
                                <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Subscribe</button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </div>
                        <!-- newsletter block -->
                    </div>
                </div>
                <div class="tiny-footer">
                    <!-- tiny footer block -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="copyright-content">
                                <p>© Tú mismo 2020 | some rights reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.tiny footer block -->
            </div>
            <!-- /.footer block -->
        </div>
    </div>
    <!-- /.footer-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menumaker.js"></script>
    <!-- sticky header -->
    <script src="js/jquery.sticky.js"></script>
    <script src="js/sticky-header.js"></script>
</body>

</html>
