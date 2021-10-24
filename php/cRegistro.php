<?php 
require ("conexion.php");

if(isset($_POST['nombre'])){
    $nom = $_POST['nombre'];
    $desc = $_POST['descripcion'];
   
    $sql = "INSERT INTO PRODUCTO (NOMBRE_PRODUCTO, DESC_PRODUCTO)
            VALUES('".$nom."', '".$desc."')";
    $statement = $conn->prepare($sql);

    if($statement->execute()){
        $mensaje = "PRODUCTO REGISTRADO";
        header ("location:indexadmin.php");
        echo '<h1 class= "bad">';
        echo $mensaje;
        echo '</h1>';
    }
}
