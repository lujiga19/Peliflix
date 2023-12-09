
<?php
include('db.php');
$usuario=$_POST['usuario'];



$consulta="DELETE FROM usuario where idusuario='$usuario'";
$resultado=mysqli_query($conexion,$consulta);

if($resultado){
    ?>
    <?php
    include("LUJGBorrarUsuario.html");

  ?>
  <h1 class="bad">ELIMINACION EXITOSA</h1>
  <?php
}
else{
    ?>
    <?php
    include("LUJGBorrarUsuario.html");

  ?>
  <h1 class="bad">ERROR  </h1>
  <?php
}
?>
mysqli_free_result($resultado);
mysqli_close($conexion);
