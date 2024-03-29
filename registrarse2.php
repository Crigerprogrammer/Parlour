<?php 
  require 'php/cusuario.php';

  $sql2 = "
  SELECT * FROM CLIENTE 
  WHERE FECHA_INGRESO = (SELECT MAX(FECHA_INGRESO) FROM CLIENTE)";
  $statement2 = $conn->prepare($sql2);
  $statement2->execute();
  $cui = $statement2->fetchAll(PDO::FETCH_OBJ);


  $sql = "SELECT * FROM TIPO_USUARIO";
  $statement = $conn->prepare($sql);
  $statement->execute();
  $tipo_usuarios = $statement->fetchAll(PDO::FETCH_OBJ);


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
   <form method="POST" name="CrearUsuario" enctype="multipart/form-data">
   <h1 class="animate__animated animate__backInLeft">Formulario de Usuario</h1>
   <div>
        <label for="campousuario">CUI</label>
       <input
        type="text"
        class=""
        id="regusuario"
        name="cui2"
        <?php foreach($cui as $cuis): ?>
        value =" <?= $cuis->CUI; ?>" 
        <?php endforeach; ?>   
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
        <br><br>
        <label for="campocontraseña">Tipo_Usuario</label>
       <select name="tip_usuario" class="form_tipousuario">
       <?php foreach($tipo_usuarios as $tipo_usuario): ?>
                <option value="<?= $tipo_usuario->COD_TIPO_USUARIO; ?>" class="form-control"><?= $tipo_usuario->DESC_USUARIO; ?></option>
        <?php endforeach; ?>   
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
   <a class="linkregresar">Gracias por registrarse, al completar el formulario ingrese nuevamente</a>
   </form>
</body>
</html>
