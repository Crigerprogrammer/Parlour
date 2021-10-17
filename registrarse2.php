<?php require 'php/ccliente.php';?>

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
   <form method="POST" name="CrearUsuario" enctype="multipart/form-data">
   <h1 class="animate__animated animate__backInLeft">Formulario de Usuario</h1>
   <div>
        <label for="campousuario">CUI</label>
       <input
        type="text"
        class=""
        id="regusuario"
        name="regusuario"
        placeholder="Ingrese su Usuario"
        required
        >
       <label for="campousuario">Usuario</label>
       <input
        type="text"
        class=""
        id="regusuario"
        name="usuario"
        placeholder="Ingrese su Usuario"
        required
        >
        <label for="campocontraseña">Contraseña</label>
       <input
        type="password"
        class=""
        id="regcontraseña"
        name="contraseña"
        placeholder="Ingrese su Contraseña"
        required
        >
        <label for="campocontraseña">Tipo_Usuario</label>
       <select >
        <option></option>    
    </select>
    </div>
    </br>
    <div>
        <a onclick="return confirm('Esta seguro de registrarse?')">
            <button type="submit"
            value="Registrar Usuario"
            name="send"
            class="send">Registrar Usuario </button>
        </a>
    </div>
</br>
   <a href="index.php" class="linkregresar">Gracias por registrarse, regresar a inicio</a>
   </form>
</body>
</html>