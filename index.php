<!DOCTYPE html>
<html>
<?php
 require_once("conexion.php");
?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, 
	initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>administracion de agenda</title>
	<link rel="stylesheet" type="text/css" href="estilos/estilos2.css">
	<link rel="stylesheet" type="text/css" href="estilos/menu3.css">
	<link rel="stylesheet" type="text/css" href="fonts.css">
</head>
<body>
	<header>
		<div class="barra_menu">
			<a href="#" class="btn-menu"><span class="icon-menu"></span><span id="titulo">Agenda 2019 - Grupo B</span></a>
		</div>
		<nav>
			<form action="">
				<?php  
					if (isset($_GET['grupo'])) {
						echo '<input type="hidden" name="grupo" value="'.$_GET['grupo'].'">';
					}
				?>
				<input type="text" name="buscar">
				<input type="image" src="imagenes/descarga.png" width="25px" height="25px">
			</form>
			<ul>
				<li><span class="icon-price-tag"></span><a href="index.php?grupo=todos">Todos</a></li>
				<li><span class="icon-price-tag"></span><a href="index.php?grupo=familia">Familia</a></li>
				<li><span class="icon-price-tag"></span><a href="index.php?grupo=amigos">Amigos</a></li>
				<li><span class="icon-price-tag"></span><a href="index.php?grupo=trabajo">Trabajo</a></li>
				<li><span class="icon-price-tag"></span><a href="index.php?grupo=otros">Otros</a></li>
			</ul>
		</nav>
</header>
 <div class="iconos">
 	<a class="btn_nuevo"href="#"><span class="icon-cross"></span></a>
 	<a class="btn_listado" href="#"><span class="icon-menu"></span></a>
 </div>
	<section> 
		<div class="listado">
			<?php include("filtros.php"); ?>
			<?php include("contactos.php"); ?>
		</div>
		<div class="alta"> 
			<?php include("insertar.php"); ?>
		</div>
	</section>
	<section>
		
	</section>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/pp.js"></script>
</body>
</html>