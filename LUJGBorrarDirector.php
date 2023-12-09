
<?php
include('db.php');
$director=$_POST['director'];



$consulta="DELETE FROM director where iddirector='$director'";
$resultado=mysqli_query($conexion,$consulta);

if($resultado){
    ?>
    <?php
    include("LUJGBorrarDirector.html");

  ?>
  <h1 class="bad">ELIMINACION EXITOSA</h1>
  <?php
}
else{
    ?>
    <?php
    include("LUJGBorrarDirector.html");

  ?>
  <h1 class="bad">ERROR  </h1>
  <?php
}
?>
mysqli_free_result($resultado);
mysqli_close($conexion);
