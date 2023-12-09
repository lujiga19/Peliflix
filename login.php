<?php

include('db.php');

$USUARIO=$_POST['usuario'];
$PASSWORD=$_POST['password'];
session_start();


if($USUARIO=='admin_jgl'and $PASSWORD=='es1921011753'){
    header("location:LUJGAdministrador.html");

}

if($USUARIO=='mostrador_jgl'and $PASSWORD=='es1921011753'){
    header("location:LUJGSuscriptor.html");

}
else{
    include("index.html");
    ?>
    <h1>ERROR DE AUTENTIFICACION</h1>
    
    <?php
    
}
mysqli_free_result($resultado);
mysqli_close($conexion);





?>