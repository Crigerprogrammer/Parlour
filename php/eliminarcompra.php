<?php 
require ("conexion.php");


if(isset($_GET['borrar'])){
    $id = $_GET['borrar'];

    $sql = "DELETE FROM MOV_SUSCRIPCIONES WHERE NUM_MOVIMIENTO = '$id'";
    $statement = $conn->prepare($sql);
    $statement->execute();
}

if($statement->execute()){
    $mensaje = "Eliminado correctamente";
    echo '<div class="alert alert-danger">';
    echo $mensaje;
    echo '</div>';
    header("location:../compras.php");
}