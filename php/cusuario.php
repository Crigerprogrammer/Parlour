<?php 
require ("conexion.php");

if(isset($_POST['usuario'])){
    $cui = $_POST['cui2'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $estado = 1;
    $tipousuario = $_POST['tip_usuario'];

    $sql = "INSERT INTO USUARIO (CUI, USUARIO, CONTRASEÑA, ESTADO, COD_TIPO_USUARIO)
            VALUES('".$cui."', '".$usuario."', CAST('".$contraseña."'AS VARBINARY(MAX)), '".$estado."', '".$tipousuario."')";
    $statement = $conn->prepare($sql);

    if($statement->execute()){
        $mensaje = "USUARIO Creado Correctamente";
        echo '<h1 class= "bad">';
        echo $mensaje;
        echo '</h1>';
        header ("location:index.php");
    }
}
