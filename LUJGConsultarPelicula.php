

<?php

$inc=include('db.php');
$nombre=$_POST['nombre'];

if($inc){
    $consulta= "SELECT * FROM pelicula WHERE nombre='$nombre'";
    $resultado=mysqli_query($conexion,$consulta);
    if($resultado){
        while($row=$resultado->fetch_array()){
            $id=$row['idpelicula'];
            $nom=$row['nombre'];
            $pais=$row['pais'];
            $sinopsis=$row['sinopsis'];
            $ano=$row['ano'];
            $clasificacion=$row['clasificacion'];
            $categoria=$row['categoria'];
            $director=$row['director'];
            $actor=$row['actor'];
         
            
            ?>
            
            
            <div>
            
                <b> ID: </b> <?php echo $id; ?></br>
                <b> Nombre: </b><?php echo $nom; ?></br>
                <b> Pais: </b><?php echo $pais; ?></br>
                <b> Sinopsis: </b><?php echo $sinopsis; ?></br>
                <b> Ano de lanzamiento: </b><?php echo $ano; ?></br>
                <b> Clasificacion: </b><?php echo $clasificacion; ?></br>
                <b> Categoria: </b><?php echo $categoria; ?></br>
                <b> Director : </b><?php echo $director; ?></br>
                <b> Actor: </b><?php echo $actor; ?></br>

                </div>
            </div>
            <?php
        }
    }
   
}

?>