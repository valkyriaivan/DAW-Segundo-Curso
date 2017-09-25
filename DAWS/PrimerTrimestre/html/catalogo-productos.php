<?php $nameTitle = "Catalogo de productos" ?>
<?php
  include("php/header.php");
?>
<style>
  .art::after{
    clear:both;
    float:none;
  }

</style>
<div class="space-medium bg-default">
  <div class="container">
    <div class="row">
     <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
      <h1>Catalogo de productos</h1>
      <p>Muestra el producto que pida el usuario</p>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <div class="well-block">
          <?php
            $nombreProducto = ["Xiaomi Redmi Note 4", "Bq Aquaris U Plus", "Meizu M5 Note "];
            $descripcion = ["El Xiaomi Redmi Note 4 es uno de los mejores móviles del momento en su gama.", "Con Aquaris U Plus damos un paso más en el uso del metal.", "Meizu lanza un nuevo terminal de gama media alta para su línea M, el nuevo Meizu M5 Note."];

            $foto = ["catalogo-productos/bq-aquaris-U.jpg","catalogo-productos/xiaomi-redmi-note4.jpg","catalogo-productos/meizu-m5-note.jpg"];

            $id = $_GET["id"];

            if (($id>sizeof($nombreProducto)) && ($id<=0)){
              echo "<h1>El producto que ha pedido no existe.";
              http_response_code(404);
            }
            else{
              $articulo = [$nombreProducto[$id-1], $descripcion[$id-1], $foto[$id-1]];
              echo "<div class='art'>";
                echo "<img src='$articulo[2]' style='position:relative; float:left;overflow:auto;;width:200px;height:200px;'>";
                echo "<div text-align:'justify'><h1>$articulo[0]</h1>";
                echo "<p>$articulo[1]</p></div>";
                echo "<div style='clear:both; float:none'></div>";
              echo "</div>";
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
