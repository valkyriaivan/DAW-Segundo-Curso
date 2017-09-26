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
      <p>Muestra el producto que pida el usuario.</p>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <div class="well-block">
          <?php
            $nombreProducto = ["Xiaomi Redmi Note 4", "Bq Aquaris U Plus", "Meizu M5 Note ", "Apple iPhone 6", "Samsung Galaxy S6"];
            $descripcion = ["El Xiaomi Redmi Note 4 es uno de los mejores móviles del momento en su gama.", "Con Aquaris U Plus damos un paso más en el uso del metal.", "Meizu lanza un nuevo terminal de gama media alta para su línea M, el nuevo Meizu M5 Note.", "Apple presentó iPhone 6s, y con él, toda una avalancha de novedades y funcionalidades maceradas, como siempre, con un espectacular diseño.","El Samsunga Galaxy S6, lo último de la marca Coreana en smartphones. Sin duda un smartphone que no te dejará indiferente."];
            $foto = ["catalogo-productos/bq-aquaris-U.jpg","catalogo-productos/xiaomi-redmi-note4.jpg","catalogo-productos/meizu-m5-note.jpg","catalogo-productos/iphone-6.jpg","catalogo-productos/samsung-galaxy-s6.jpg"];
            $id = $_GET["id"];

            if (($id>sizeof($nombreProducto)) || ($id<=0)){
              echo "<h2>El producto que ha buscado no existe.";
              http_response_code(404);
            }
            else{
              $articulo = [$nombreProducto[$id-1], $descripcion[$id-1], $foto[$id-1]];
              echo "<div class='art'>";
                echo "<img src='$articulo[2]' style='position:relative; float:left;overflow:auto;width:200px;height:200px;'>";
                echo "<div text-align:'justify'><h1>$articulo[0]</h1>";
                echo "<p>$articulo[1]</p></div>";
                echo "<div style='clear:both; float:none'></div>";
              echo "</div>";
                $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                $url = substr($actual_link, 0, -1);
                $urlSig = $url . ($id + 1);
                $urlAnt = $url . ($id - 1);
                $urlUlt = $url . (sizeof($nombreProducto));
                $urlPri = $url . 1;

                echo "<ul class='pagination'>";
                if ($id == "1"){
                  echo "<li class='disabled'><a href='#'><span class='glyphicon glyphicon-fast-backward'></span></a></li>";
                  echo "<li class='disabled'><a href='#'><span class='glyphicon glyphicon-chevron-left'></span></a></li>";
                  echo "<li><a href=$urlSig><span class='glyphicon glyphicon-chevron-right'></span></a></li>";
                  echo "<li><a href=$urlUlt><span class='glyphicon glyphicon-fast-forward'></span></a></li>";
                }
                elseif ($id > "1" && $id < sizeof($nombreProducto)) {
                  echo "<li><a href=$urlPri><span class='glyphicon glyphicon-fast-backward'></span></a></li>";
                  echo "<li><a href=$urlAnt><span class='glyphicon glyphicon-chevron-left'></span></a></li>";
                  echo "<li><a href=$urlSig><span class='glyphicon glyphicon-chevron-right'></span></a></li>";
                  echo "<li><a href=$urlUlt><span class='glyphicon glyphicon-fast-forward'></span></a></li>";
                }
                else{
                  echo "<li><a href=$urlPri><span class='glyphicon glyphicon-fast-backward'></span></a></li>";
                  echo "<li><a href=$urlAnt><span class='glyphicon glyphicon-chevron-left'></span></a></li>";
                  echo "<li class='disabled'><a href='#'><span class='glyphicon glyphicon-chevron-right'></span></a></li>";
                  echo "<li class='disabled'><a href='#'><span class='glyphicon glyphicon-fast-forward'></span></a></li>";
                }
                echo "</ul>";
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
