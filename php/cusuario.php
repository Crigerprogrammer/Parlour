<?php 
require ("conexion.php");

if(isset($_POST['regusuario'])){
    $usuario = $_POST['regusuario'];
    $contraseña = $_POST['regcontraseña'];
    $estado = 1;

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
