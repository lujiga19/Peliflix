<?php
include('db.php');
$nombre=$_POST['nombre'];
$ap_paterno=$_POST['ap_paterno'];
$ap_materno=$_POST['ap_materno'];
$nacionalidad=$_POST['nacionalidad'];
$fecha_nac=$_POST['fecha_nac'];


$consulta="INSERT INTO director (iddirector,nombre,ap_paterno,ap_materno,nacionalidad,fecha_nac) values('','$nombre','$ap_paterno','$ap_materno','$nacionalidad','$fecha_nac')";
$resultado=mysqli_query($conexion,$consulta);

if($resultado==true){
    ?>
    <?php
    include("LUJGCrearDirector.html");

  ?>
  <h1 class="bad">REGISTRO EXITOSO</h1>
  <?php
}
else{
    ?>
    <?php
    include("LUJGCrearDirector.html");

  ?>
  <h1 class="bad">ERROR  </h1>
  <?php
}
?>
mysqli_free_result($resultado);
mysqli_close($conexion);
