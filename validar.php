<?php
require 'php/conexion.php';
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$_POST['usuario'];

  $conn = new PDO("sqlsrv:server=tcp:parlor.database.windows.net,1433; Database=parlour", "parlouradmin", "Pasteleria2021$$");

  $consulta=("SELECT * FROM [dbo].[USUARIO] where USUARIO='$usuario' and CONTRASEÑA='$contraseña'");
//$resultado=sqlsrv_query($conn, $consulta);
  $statement = $conn->prepare($consulta);
  $statement->execute();

  $filas= $statement->fetchAll();
//$filas= $statement->fetchAll(PDO::FETCH_NAMED);

  if($filas == TRUE){
  
	$codigo_usuario = $filas[0][5];
	$msg = "Codigo usuario es : " . $codigo_usuario;
	if($codigo_usuario == 1)
	{
		//echo "<script type='text/javascript'>alert('$msg');</script>";
		header("location:index3.php");
	}
	elseif($codigo_usuario == 2)
	{
		//echo "<script type='text/javascript'>alert('$msg');</script>";
		header("location:index2.php");
	}
	elseif($codigo_usuario == 8)
	{
		//echo "<script type='text/javascript'>alert('$msg');</script>";
		header("location:index2.php");
	}
      

  } else{
      ?>
      <?php
      require 'index.php';

      ?>
        <h1 class="bad">ERROR DE AUTENTICACIÓN, SI NO RECUERDA SU CONTRASEÑA CONTÁCTENOS</h1>
  <?php
      }

  ?>
