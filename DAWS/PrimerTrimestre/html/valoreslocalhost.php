<?php $nameTitle = "Listado de los valores" ?>
<?php
  include("php/header.php");
?>
<div class="space-medium bg-default">
  <div class="container">
    <div class="row">
     <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
       <h1>Listado de los valores</h1>
      <p>Lista los elementos de la matriz obtenidos al acceder a localhost</p>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <div class="well-block">
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
        </div>
      </div>
    </div>
  </div>
</div>

<?php
  include("php/footer.php");
?>
