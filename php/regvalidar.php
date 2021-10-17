<?php
require ("conexion.php");

if(isset($_POST['cui'])){
    $cui = $_POST['cui'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $tel_default = $_POST['tel_default'];
    $tel_secundario = $_POST['tel_secundario'];
    $correo = $_POST['correo'];
    $direccion = $_POST['direccion'];
    $nit = $_POST['nit'];


    $consulta = "INSERT INTO [dbo].[CLIENTE] (CUI, NOMBRES, APELLIDOS, TEL_DEFAULT, TEL_SECUNDARIO, CORREO, DIRECCION, NIT) 
        VALUES ('".$cui."', '".$nombres."', '".$apellidos."', '".$tel_default."', '".$tel_secundario."', '".$correo."',
        '".$direccion."', '".$nit."')";
    $statement = $conn->prepare($consulta);

    $consulta2 = "CALL ES_EMPLEADO";
    $statement2 = $conn->prepare($consulta2);

    if($statement->execute() AND $statement2->execute()){
        $mensaje = "Cliente creado correctamente, Favor ingresar Usuario";
        header("location:registrarse2.php");
        echo '<h1 class="bad">';
        echo $mensaje;
        echo '</h1>';
    }
}


?>