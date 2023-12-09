
<?php
include('db.php');
$categoria=$_POST['categoria'];
$new=$_POST['new'];


$consulta="UPDATE categoria SET categoria='$new'where idcategoria='$categoria'";
$resultado=mysqli_query($conexion,$consulta);

if($resultado){
    ?>
    <?php
    include("LUJGActualizarCAtegoria.html");

  ?>
  <h1 class="bad">ACTUALIZACION EXITOSA</h1>
  <?php
}
else{
    ?>
    <?php
    include("LUJGActualizarCAtegoria.html");

  ?>
  <h1 class="bad">ERROR  </h1>
  <?php
}
?>
mysqli_free_result($resultado);
mysqli_close($conexion);
