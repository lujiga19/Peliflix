
<?php
include('db.php');
$id=$_POST['id'];
$campo=$_POST['campo'];
$dato=$_POST['dato'];



$consulta="UPDATE actor2 SET nombre='$dato'where idactor='$id'";


$resultado=mysqli_query($conexion,$consulta);

if($resultado){
    ?>
    <?php
    include("LUJGActualizarActor.html");

  ?>
  <h1 class="bad">ACTUALIZACION EXITOSA</h1>
  <?php
}
else{
    ?>
    <?php
    include("LUJGActualizarActor.html");

  ?>
  <h1 class="bad">ERROR  </h1>
  <?php
}
?>
mysqli_free_result($resultado);
mysqli_close($conexion);
