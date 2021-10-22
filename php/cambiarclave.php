<?php 
require ("conexion.php");

if(isset($_POST['cambiarusuario'])){
    $usuario = $_POST['cambiarusuario'];
    $contraseña = $_POST['cambiarcontraseña'];

    $sql = ("UPDATE [dbo].[USUARIO] SET CONTRASEÑA=CONVERT(VARBINARY(MAX), '$contraseña')
    WHERE USUARIO= '$usuario'");
    $statement = $conn->prepare($sql);
    $statement->execute();
    header("location:../index.php");
}
?>
