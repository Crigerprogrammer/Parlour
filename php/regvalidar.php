<?php
require ("conexion.php");

if(isset($_POST['regusuario'])){
    $usuario = $_POST['regusuario'];
    $contraseña = $_POST['regcontraseña'];
    $estado = 1;

    $consulta = "INSERT INTO [dbo].[USUARIO] (USUARIO, CONTRASEÑA, ESTADO) 
        VALUES ('".$usuario."', CAST('".$contraseña."'AS VARBINARY(MAX)), '".$estado."')";
    $statement = $conn->prepare($consulta);

    if($statement->execute()){
        $mensaje = "Usuario creado correctamente, regrese a inicio";
        echo '<h1 class="bad">';
        echo $mensaje;
        echo '</h1>';
    }
}


?>