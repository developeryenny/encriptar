<?php

 include_once 'inc/db.inc.php';


    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
         
    if ($conexion->connect_error) {
        die("Fallo al conectar con la BBDD: " . $conn->connect_error);
    } 

    mysqli_set_charset($conexion, "utf8");

    $sql ="Select Símbolo, NumeroHtml from encriptar";

    $result = mysqli_query($conexion, $sql);
         
   if ($result->num_rows > 0) {

        echo '<ul>';
        foreach($conexion->query($sql) as $row){

            $datos[]= array(

            'Símbolo'=> htmlentities($row['Símbolo']),
            'NumeroHtml'=>htmlentities($row['NumeroHtml'])
            );
            
    
            echo '<div>';
               echo '&nbsp;&nbsp;<b>Símbolo:</b> &nbsp'.htmlentities($row['Símbolo']).'&nbsp;<b>NumeroHtml:</b>&nbsp'.htmlentities($row['NumeroHtml']);

            echo'</div>';
   
        }
        echo '</ul>'; 
        }else {
    
            echo  '<div class="card-panel #fafafa grey lighten-5">No se han encontrado resultados</div>';
            

        }
            $conexion->close();
    
?>