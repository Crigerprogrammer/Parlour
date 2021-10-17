<?php 
require ("conexion.php");

if(isset($_POST['tipo_usuario'])){
    $tipo = $_POST['tipo_usuario'];
    $desc = $_POST['desc_usuario'];

    $sql = "INSERT INTO TIPO_USUARIO(TIPO_USUARIO, DESC_USUARIO)
            VALUES('".$tipo."', CAST('".$desc."'AS VARBINARY(MAX)) )";
    $statement = $conn->prepare($sql);

    if($statement->execute()){
        $mensaje = "USUARIO Agregado Correctamente";
        echo '<div class="alert alert-success">';
        echo $mensaje;
        echo '</div>';
    }
}