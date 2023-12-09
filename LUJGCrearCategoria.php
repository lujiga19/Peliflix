<?php
include('db.php');
$categoria=$_POST['categoria'];




$consulta="INSERT INTO categoria (idcategoria,categoria) values(null,'$categoria')";
$resultado=mysqli_query($conexion,$consulta);

if($resultado==true){
    ?>
    <?php
    include("LUJGCrearCategoria.html");

  ?>
  <h1 class="bad">REGISTRO EXITOSO</h1>
  <?php
}
else{
    ?>
    <?php
    include("LUJGCrearCategoria.html");

  ?>
  <h1 class="bad">ERROR  </h1>
  <?php
}
?>
mysqli_free_result($resultado);
mysqli_close($conexion);

