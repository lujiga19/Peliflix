
<?php
include('db.php');
$pelicula=$_POST['pelicula'];



$consulta="DELETE FROM pelicula where idpelicula='$pelicula'";
$resultado=mysqli_query($conexion,$consulta);

if($resultado){
    ?>
    <?php
    include("LUJGBorrarPelicula.html");

  ?>
  <h1 class="bad">ELIMINACION EXITOSA</h1>
  <?php
}
else{
    ?>
    <?php
    include("LUJGBorrarPelicula.html");

  ?>
  <h1 class="bad">ERROR  </h1>
  <?php
}
?>
mysqli_free_result($resultado);
mysqli_close($conexion);
