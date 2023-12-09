
<?php
include('db.php');
$categoria=$_POST['categoria'];



$consulta="DELETE FROM categoria where idcategoria='$categoria'";
$resultado=mysqli_query($conexion,$consulta);

if($resultado){
    ?>
    <?php
    include("LUJGBorrarCategoria.html");

  ?>
  <h1 class="bad">ELIMINACION EXITOSA</h1>
  <?php
}
else{
    ?>
    <?php
    include("LUJGBorrarCategoria.html");

  ?>
  <h1 class="bad">ERROR  </h1>
  <?php
}
?>
mysqli_free_result($resultado);
mysqli_close($conexion);
