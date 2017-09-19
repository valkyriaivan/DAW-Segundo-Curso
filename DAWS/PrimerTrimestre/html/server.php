<?php
/**
* Lista los diferentes valores de los elementos de la matriz del sistema $_SERVER, entre
* ellos están los elementos que guardan los valores de las solicitudes y respuestas HTTP.
*/
$server_host=$_SERVER['HTTP_HOST'];
echo "<p><strong>Listado de los valores de los elementos de la matriz $SERVER obtenidos al acceder a $server_host</strong></p>";

foreach($_SERVER as $key => $value) {
    echo $key." = ".$value."<br>";
}
echo "<br>";

/* El mismo resultado pero usando la función getallheaders
*/
foreach (getallheaders() as $name => $value) {
    echo "$name: $value\n";
}

?>
