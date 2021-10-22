<?php

require 'php/conexion.php';

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
   <form action="validar.php" method="POST">
   <h1 class="animate__animated animate__backInLeft">Bienvenido a Parlour, Arte en Azúcar</h1>
   <p>Usuario <input type="text" placeholder="ingrese su usuario" name="usuario"></p>
   <p>Contraseña <input type="password" placeholder="ingrese su contraseña" name="contraseña"></p>
   <input type="submit" value="Ingresar">
   <br></br>
   <a href="registrarse1.php" class="linkregistrar">Registrarse a Parlour</a>
    <br><br>
    <a href="registrarse1.php" class="olvideclave">¿Olvidó su Contraseña?</a>
   </form> 
</body>
</html>
