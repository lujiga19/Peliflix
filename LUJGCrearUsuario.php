<?php
include('db.php');

$nombre=$_POST['nombre'];
$ap_paterno=$_POST['ap_paterno'];
$ap_materno=$_POST['ap_materno'];
$rfc=$_POST['rfc'];
$curp=$_POST['curp'];
$membresia=$_POST['membresia'];
$fecha_inicio=$_POST['fecha_inicio'];
$fecha_termino=$_POST['fecha_termino'];



if ( strlen( $rfc ) != 13 ) exit ( "RFC el valor es invalido " ); 
if ( strlen( $curp ) != 18 ) exit ( "CURP el valor es invalido " ); 



$consulta="INSERT INTO usuario (idusuario,nombre,ap_paterno,ap_materno,rfc,curp,membresia,fecha_inicio,fecha_termino) values('','$nombre','$ap_paterno','$ap_materno','$rfc','$curp','$membresia','$fecha_inicio','$fecha_termino')";
$resultado=mysqli_query($conexion,$consulta);

if($resultado==true){
    ?>
    <?php
    include("LUJGCrearUsuario.html");

  ?>
  <h1 class="bad">REGISTRO EXITOSO</h1>
  <?php
}
else{
    ?>
    <?php
    include("LUJGCrearUsuario.html");

  ?>
  <h1 class="bad">ERROR  </h1>
  <?php
}
?>
mysqli_free_result($resultado);
mysqli_close($conexion);
