

<?php

$inc=include('db.php');
$nombre=$_POST['nombre'];

if($inc){
    $consulta= "SELECT * FROM actor2 WHERE nombre='$nombre'";
    $resultado=mysqli_query($conexion,$consulta);
    if($resultado){
        while($row=$resultado->fetch_array()){
            $id=$row['idactor'];
            $nom=$row['nombre'];
            $ap_pat=$row['ap_paterno'];
            $ap_mat=$row['ap_materno'];
            $nacionalidad=$row['nacionalidad'];
            $fecha_nac=$row['fecha_nac'];
            ?>
            
            
            <div>
            
                <b> ID: </b> <?php echo $id; ?></br>
                <b> Nombre: </b><?php echo $nom; ?></br>
                <b> Apellido Paterno: </b><?php echo $ap_pat; ?></br>
                <b> Apellido Materno: </b><?php echo $ap_mat; ?></br>
                <b> Nacionalidad: </b><?php echo $nacionalidad; ?></br>
                <b> Fecha de Nacimiento: </b><?php echo $fecha_nac; ?></br>
                

                </div>
            </div>
            <?php
        }
    }
   
}

?>