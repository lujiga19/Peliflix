<?php
include('db.php');
$nombre=$_POST['nombre'];
$ap_paterno=$_POST['ap_paterno'];
$ap_materno=$_POST['ap_materno'];
$nacionalidad=$_POST['nacionalidad'];
$fecha_nac=$_POST['fecha_nac'];

$permitidos = "0123456789/-";
for ($i=0; $i<strlen($fecha_nac); $i++){
  if (strpos($permitidos, substr($fecha_nac,$i,1))===false){
     echo $fecha_nac . "Fecha no valida";
     return false;
  } 
}

$consulta="INSERT INTO actor2 (idactor,nombre,ap_paterno,ap_materno,nacionalidad,fecha_nac) values('','$nombre','$ap_paterno','$ap_materno','$nacionalidad','$fecha_nac')";
$resultado=mysqli_query($conexion,$consulta);

if($resultado==true){
    ?>
    <?php
    include("LUJGCrearActor.html");

  ?>
  <h1 class="bad">REGISTRO EXITOSO</h1>
  <?php
}
else{
    ?>
    <?php
    include("LUJGCrearActor.html");

  ?>
  <h1 class="bad">ERROR  </h1>
  <?php
}
?>
mysqli_free_result($resultado);
mysqli_close($conexion);
