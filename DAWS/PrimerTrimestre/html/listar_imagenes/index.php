<!DOCTYPE html>
<html>
    <head>
		<title>¡PHP para ganadores!</title>
		<meta content="initial-scale=1.0, width=device-width" name="viewport" />
		<meta content="text/html; charset=UTF-8" http-equiv="content-type" />
	</head>
	<body>
        <!-- Comentarios en HTML.-->
        <p>
          <?php
            $dir = ".";
            // Abre un directorio conocido, y procede a leer el contenido
            if (is_dir($dir)) {
                if ($dh = opendir($dir)) {
                    while (($file = readdir($dh)) !== false) {
                        if ((mime_content_type($file) == "image/jpeg") || (mime_content_type($file) == "image/gif")){
                          echo "<img src='$file'><br>";
                        }
                    }
                    closedir($dir);
                }
            }
          ?>
        </p>
	</body>
</html>
