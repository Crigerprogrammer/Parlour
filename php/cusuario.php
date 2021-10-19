<?php 
require ("conexion.php");

if(isset($_POST['usuario'])){
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $estado = 1;
    $cui = $_POST['cui2'];

    $sql = "INSERT INTO USUARIO(USUARIO, CONTRASEÑA, ESTADO)
            VALUES('".$usuario."', CAST('".$contraseña."'AS VARBINARY(MAX)), '".$estado"')";
    $statement = $conn->prepare($sql);

    if($statement->execute()){
        $mensaje = "USUARIO Creado Correctamente";
        echo '<h1 class= "bad">';
        echo $mensaje;
        echo '</h1>';
    }
}
