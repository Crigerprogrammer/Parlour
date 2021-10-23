<?php 
require ("conexion.php");

if(isset($_POST['cui'])){
    $cui = $_POST['cui'];
    $promocion = $_POST['promocion'];
    $movimiento = '1';
   
    $sql = "INSERT INTO MOV_SUSCRIPCIONES (CUI, COD_PROMOCION, COD_MOVIMIENTO)
            VALUES('".$cui."', '".$promocion."','".$movimiento."')";
    $statement = $conn->prepare($sql);

    if($statement->execute()){
        $mensaje = "COMPRA REGISTRADA";
        echo '<h1 class= "bad">';
        echo $mensaje;
        echo '</h1>';
        header ("location:index2.php");
    }
}
