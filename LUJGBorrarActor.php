
<?php
include('db.php');
$actor=$_POST['actor'];



$consulta="DELETE FROM actor2 where idactor='$actor'";
$resultado=mysqli_query($conexion,$consulta);

if($resultado){
    ?>
    <?php
    include("LUJGBorrarActor.html");

  ?>
  <h1 class="bad">ELIMINACION EXITOSA</h1>
  <?php
}
else{
    ?>
    <?php
    include("LUJGBorrarActor.html");

  ?>
  <h1 class="bad">ERROR  </h1>
  <?php
}
?>
mysqli_free_result($resultado);
mysqli_close($conexion);
