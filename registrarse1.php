<?php 
include 'php/regvalidar.php';
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
    <!-- Formulario para registrar cliente -->
   <form method="POST" name="CrearCliente" enctype="multipart/form-data">
   <h1 class="animate__animated animate__backInLeft">Formulario de Registro</h1>
   <div>
       <label for="Cui">CUI</label>
       <input
        type="text"
        class=""
        id="regusuario"
        name="cui"
        placeholder="Ingrese su CUI"
        required
        >
        <label for="Nombres">NOMBRES</label>
       <input
        type="text"
        class=""
        id="regcontraseña"
        name="nombres"
        placeholder="Ingrese sus nombres"
        required
        >
        <label for="Apellidos">Apellidos</label>
       <input
        type="text"
        class=""
        id="regcontraseña"
        name="apellidos"
        placeholder="Ingrese sus apellidos"
        required
        >
        <label for="Tel">Telefono Principal</label>
       <input
        type="number"
        class=""
        id="regcontraseña"
        name="tel_default"
        required
        >
        <label for="Tel">Telefono Secundario</label>
       <input
        type="number"
        class=""
        id="regcontraseña"
        name="tel_secundario"
        required
        >
        <label for="Tel">Correo Electronico</label>
       <input
        type="email"
        class=""
        id="regcontraseña"
        name="correo"
        placeholder="Ej: example@gmail.com"
        required
        >
        <label for="Tel">Direccion</label>
       <input
        type="text"
        class=""
        id="regcontraseña"
        name="direccion"
        placeholder = 'Ej: Calle x Avenida x '
        required
        >
        <label for="Tel">NIT</label>
       <input
        type="text"
        class=""
        id="regcontraseña"
        placeholder = 'Ingrese su Nit'
        name="nit"
        required
        >
    </div>
    </br>
    <div>
        <a 
        href="registrarse2.php"
        onclick="return confirm('Esta seguro de registrarse?')">
            <button type="submit"
            value="Registrar Usuario"
            name="send"
            class="send">Registrar Usuario </button>
            
        </a>
    </div>
</br>
   <a href="index.php" class="linkregresar">Gracias por registrarse, Favor de llenar usuario</a>
   </form>
</body>
</html>