
<?php
include('db.php');
$id=$_POST['id'];
$campo=$_POST['campo'];
$dato=$_POST['dato'];



$consulta="UPDATE pelicula SET nombre='$dato'where idpelicula='$id'";


$resultado=mysqli_query($conexion,$consulta);

if($resultado){
    ?>
    <?php
    include("LUJGActualizarPelicula.html");

  ?>
  <h1 class="bad">ACTUALIZACION EXITOSA</h1>
  <?php
}
else{
    ?>
    <?php
    include("LUJGActualizarPelicula.html");

  ?>
  <h1 class="bad">ERROR  </h1>
  <?php
}
?>
mysqli_free_result($resultado);
mysqli_close($conexion);
