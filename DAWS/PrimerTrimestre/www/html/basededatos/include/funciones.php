<?php
require 'SimpleImage.php';
function getFoto(&$errors){
	if(isset($_FILES['foto']) && ($_FILES['foto']['error'] != UPLOAD_ERR_NO_FILE)){
		//Realizamos las operaciones ...
		//Comprobar la extensión
		if ($_FILES['foto']['error'] == UPLOAD_ERR_OK){
			$partesFichero = explode('.',$_FILES['foto']['name']);
			$file_ext=strtolower(end($partesFichero));
			$extensions= array("jpeg","jpg","png");

			if(in_array($file_ext,$extensions)=== false){
				$errors[]="Extensión no permitida, sólo son válidos archivos jpg o png";
				return "";
			}else{
				$nombreFicheroReal = basename($_FILES['foto']['tmp_name']) . ".$file_ext";
				if (move_uploaded_file($_FILES['foto']['tmp_name'],"./img/". $nombreFicheroReal)){
					try {
					  // Create a new SimpleImage object
					  $image = new \claviska\SimpleImage();

					  $image
						->fromFile("./img/". $nombreFicheroReal)  
						->resize(256)
						->toFile("./img/256_". $nombreFicheroReal); 

					  $image
						->resize(600) 
						->toFile("./img/600_". $nombreFicheroReal);

						return $nombreFicheroReal;
					} catch(Exception $err) {
					  // Handle errors
						$errors[]= $err->getMessage();
						return "";
					}
				}else{
					$errors[]= error_get_last();
					return "";
				}
			}
		}else{
			$errors[]= "Se ha producido un error al procesar la imagen";
			return "";
		}
		
	}else
		return "";
}
?>
