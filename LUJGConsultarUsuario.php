

<?php

$inc=include('db.php');
$nombre=$_POST['nombre'];

if($inc){
    $consulta= "SELECT * FROM usuario WHERE nombre='$nombre'";
    $resultado=mysqli_query($conexion,$consulta);
    if($resultado){
        while($row=$resultado->fetch_array()){
            $id=$row['idusuario'];
            $nom=$row['nombre'];
            $ap_pat=$row['ap_paterno'];
            $ap_mat=$row['ap_materno'];
            $rfc=$row['rfc'];
            $curp=$row['curp'];
            $membresia=$row['membresia'];
            $fecha_inicio=$row['fecha_inicio'];
            $fecha_termino=$row['fecha_termino'];
            ?>
            
            
            <div>
                
                <b> ID: </b> <?php echo $id; ?></br>
                <b> Nombre: </b><?php echo $nom; ?></br>
                <b> Apellido Paterno: </b><?php echo $ap_pat; ?></br>
                <b> Apellido Materno: </b><?php echo $ap_mat; ?></br>
                <b> RFC: </b><?php echo $rfc; ?></br>
                <b> CURP: </b><?php echo $curp; ?></br>
                <b> Tipo de membresia: </b><?php echo $membresia; ?></br>
                <b> Fecha de inicio: </b><?php echo $fecha_inicio; ?></br>
                <b> Fecha de termino: </b><?php echo $fecha_termino; ?></br>
                

                </div>
            </div>
            <?php
        }
    }
   
}

?>