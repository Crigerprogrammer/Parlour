<?php
  session_start();
  require 'php/cCompra.php';

  $sql2 = "
	SELECT A.* FROM CLIENTE A  
	JOIN USUARIO B ON A.CUI = B.CUI
	WHERE B.USUARIO = '".$_SESSION['user']."' ";
  $statement2 = $conn->prepare($sql2);
  $statement2->execute();
  $cui = $statement2->fetchAll(PDO::FETCH_OBJ);

  

  $sql = "SELECT * FROM PROMOCION";
  $statement = $conn->prepare($sql);
  $statement->execute();
  $promociones = $statement->fetchAll(PDO::FETCH_OBJ);

?>


<!DOCTYPE HTML>
<html>
<head>
<title>Parlour Arte en Azucar</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Cooks Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
<link href='//fonts.googleapis.com/css?family=Alex+Brush' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
</head>

<body>
<!-- header -->
<div class="header">
	<div class="container">
		<nav class="navbar navbar-default">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
				<div class="logo">
					<a class="navbar-brand" href="index.html">Parlour</a>
				</div>
			</div>

			<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
				<nav class="cl-effect-13" id="cl-effect-13">
					<ul class="nav navbar-nav">
						<li><a href="index2.php" class="active">Inicio</a></li>
						<li><a href="events.php">Comprar</a></li>
						<li><a href="compras.php">Ver mis compras</a></li>
						<li role="presentation" class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
							  Nosotros <span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
							  <li><a href="productos.php">Nuestro Productos</a></li>
							</ul>
						</li>
					</ul>
				</nav>
				<div class="social-icons">
					<ul>
						<li><a class="icon-link round twitter" href="https://www.facebook.com/Parlour-101267062128381"></a></li>
					</ul>
				</div>
			</div>
			<!-- /.navbar-collapse -->
		</nav>
	</div>
</div>
<!-- header -->

<form method="POST" name="cCompra" enctype="multipart/form-data">
<div class="typo">
	<div class="container">
<h3 class="bars wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">Comprar</h3>
			<div class="input-group wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
				<span class="input-group-addon" id="basic-addon1"></span>
				<input 
					type="text" 
					class="form-control" 
					<?php foreach($cui as $cuis): ?>
					value =" <?= $cuis->NOMBRES; ?>" 
					<?php endforeach; ?>  
					aria-describedby="basic-addon1" readonly>
			</div>
			<div class="input-group wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
				<span class="input-group-addon" id="basic-addon1"></span>
				<input 
					type="text" 
					class="form-control" 
					<?php foreach($cui as $cuis): ?>
					value =" <?= $cuis->APELLIDOS; ?>" 
					<?php endforeach; ?>  
					aria-describedby="basic-addon1" readonly>
			</div>
			<div class="input-group wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
				<span class="input-group-addon" id="basic-addon1"></span>
				<input 
					type="text" 
					class="form-control" 
					<?php foreach($cui as $cuis): ?>
					value =" <?= $cuis->CORREO; ?>" 
					<?php endforeach; ?>  
					aria-describedby="basic-addon1" readonly>
			</div>
			<div class="input-group wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
				<span class="input-group-addon" id="basic-addon1"></span>
				<input 
					type="text" 
					class="form-control" 
					<?php foreach($cui as $cuis): ?>
					value =" <?= $cuis->DIRECCION; ?>" 
					<?php endforeach; ?>  
					aria-describedby="basic-addon1" readonly>
			</div>
			<div class="input-group wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
				<span class="input-group-addon" id="basic-addon1"></span>
				<input 
					type="text" 
					name="cui"
					class="form-control" 
					<?php foreach($cui as $cuis): ?>
					value =" <?= $cuis->CUI; ?>" 
					<?php endforeach; ?>  
					aria-describedby="basic-addon1" readonly>
			</div>

			<div class="input-group wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
			<span class="input-group-addon" id="basic-addon1"></span>
			<select name="promocion" class="form-control" >
			<?php foreach($promociones as $promocion): ?>
						<option name="promocion" value="<?= $promocion->COD_PROMOCION; ?>" class="form-control"><?= $promocion->DESC_PROMOCION; ?></option>
				<?php endforeach; ?>   
			</select>
			</div>
			
			<div class="input-group wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">			
			<a onclick="return confirm('Esta seguro de Comprar?')">
            <button type="submit"
            value="Registrar Usuario"
            name="send"
            class="btn btn-warning">Comprar Promocion </button>
       		 </a>
				</div>
				
	</div>
	</div>

</form>









<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="footer-grids">
			<div class="col-md-3 footer-grid wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
				<h3>Proyecto de Seminario</h3>
				<div class="footer-grd-left">
					<img src="images/6.jpg" class="img-responsive" alt=" " />
				</div>
				<div class="footer-grd-left">
					<p>Proyecto de Seminario 2021
						UMG
					</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-3 footer-grid wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
				<h3>Integrantes</h3>
				<ul>
					<li><a href="#">Cristian Hernandez </a></li>
					<li><a href="#">Cristopher Flores</a></li>
					<li><a href="#">Mariano Sandoval</a></li>
					<li><a href="#">Maria Jose</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<div class="footer-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
	<div class="container">
		<p>&copy 2021 - Crigerprogrammer</p>
	</div>
</div>
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>