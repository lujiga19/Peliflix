<?php
include('db.php');
$nombre=$_POST['nombre'];
$pais=$_POST['pais'];
$sinopsis=$_POST['sinopsis'];
$ano_lanzamiento=$_POST['ano_lanzamiento'];
$clasificacion=$_POST['clasificacion'];
$categoria=$_POST['categoria'];
$director=$_POST['director'];
$actor=$_POST['actor'];





$permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_";

for ($i=0; $i<strlen($sinopsis); $i++){
  try{
  if (strpos($permitidos, substr($sinopsis,$i,1))===false){
     echo $sinopsis . "Sinopsis no valida";
     return false;
     throw new customException($sinopsis);
  } 
}
catch (customException $e){
  echo $e->errorMessage();
}
}

 if($ano_lanzamiento<1900 || $ano_lanzamiento>2024){
  echo $ano_lanzamiento. "  Fuera de rango";
  return false;
 }


$consulta="INSERT INTO pelicula (idpelicula,nombre,pais,sinopsis,ano,clasificacion,categoria,director,actor) values('','$nombre','$pais','$sinopsis','$ano_lanzamiento','$clasificacion','$categoria','$director','$actor')";
$resultado=mysqli_query($conexion,$consulta);

if($resultado==true){
    ?>
    <?php
    include("LUJGCrearPelicula.html");

  ?>
  <h1 class="bad">REGISTRO EXITOSO</h1>
  <?php
}
else{
    ?>
    <?php
    include("LUJGCrearPelicula.html");

  ?>
  <h1 class="bad">ERROR  </h1>
  <?php
}
?>
mysqli_free_result($resultado);
mysqli_close($conexion);
