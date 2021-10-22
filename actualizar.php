<?php

require 'php/cambiarclave.php';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/cabecera.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
</head>
<body>
   <form action="php/cambiarclave.php" method="POST">
   <h1 class="animate__animated animate__backInLeft">Ingrese los datos para actualizar sus credenciales</h1>
   <p>Usuario Actual <input type="text" placeholder="ingrese su usuario actual" name="cambiarusuario"></p>
   <p>Nueva Contraseña <input type="password" placeholder="ingrese su nueva contraseña" name="cambiarcontraseña"></p>
   <input type="submit" value="Ingresar">
   <br></br>
   <a href="index.php" class="linkregistrar">Si no desea actualizar datos, regrese a inicio</a>
   </form> 
</body>
</html>