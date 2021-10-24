<?php
	session_start();
    
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Parlour Arte en Azucar</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
						<a class="navbar-brand" href="index2.php">Parlour</a>
					</div>
				</div>

				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-13" id="cl-effect-13">
						<ul class="nav navbar-nav">
							<li><a href="indexadmin.php" class="active">Inicio</a></li>
							<li><a href="registrarprod.php">Ingresar Productos</a></li>
							<li><a href="clientes.php">Ver Clientes</a></li>
							<li><a href="destroy.php">Cerrar Sesion</a></li>
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

<?php
    echo "<center><h1>Bienvenido" . $_SESSION['user'] . "</h1></center>";

?>

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