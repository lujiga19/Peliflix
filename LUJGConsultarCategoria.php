

<?php

$inc=include('db.php');
$categoria=$_POST['categoria'];

if($inc){
    $consulta= "SELECT * FROM categoria WHERE categoria='$categoria'";
    $resultado=mysqli_query($conexion,$consulta);
    if($resultado){
        ?>
        
        <?php
    
    

        
        while($row=$resultado->fetch_array()){
            $id=$row['idcategoria'];
            $cat=$row['categoria'];
          
            ?>
            
         <b> ID: </b> <?php echo $id; ?></br>
                <b> Categoria: </b><?php echo $cat; ?></br>
                
            <?php
        
        }
    }
   
}

?>