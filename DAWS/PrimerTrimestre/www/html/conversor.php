<?php $nameTitle = "" ?>
<?php
  include("php/header.php");
?>
<div class="space-medium bg-default">
  <div class="container">
    <div class="row">
     <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
       <h1>Nombre del programa</h1>
      <p>Descripción del programa</p>
      </div>
      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
        <div class="well-block">
          <form action="php/moneda.php" method="post">
           <p>Introduce una cantidad: <input type="text" name="cant" />
           <select name="convert">
             <option value="etod">Euros a Dolares</option>
             <option value="dtoe">Dolares a Euros</option>
           </select>
           <p><input type="submit" /></p>
           <?php
            function foo()
            {
              echo "Función de ejemplo.\n";

            }
          ?>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
  include("php/footer.php");
?>
