<?php

if(isset($_GET['buscar']) && !isset($_GET['grupo']) || isset($_GET['buscar']) && isset($_GET['grupo']) && $_GET['grupo']=="todos" ) {
	$buscar=$_GET['buscar'];
	$sql="SELECT * FROM contactos WHERE nombre LIKE '%$buscar%' OR direccion LIKE '%$buscar%' ORDER BY nombre ASC";
}

if (isset($_GET['grupo']) && $_GET['grupo']!="todos" && !isset($_GET['buscar'])) {
	$grupo = $_GET['grupo'];
	$sql="SELECT * FROM contactos WHERE grupo='".$grupo."' ORDER BY nombre ASC";
}

if (isset($_GET['grupo']) && isset($_GET['buscar']) && $_GET['grupo']!="todos") {
	$buscar=$_GET['buscar'];
	$grupo = $_GET['grupo'];
	$sql="SELECT * FROM contactos WHERE  nombre LIKE '%$buscar%' OR direccion LIKE '%$buscar%' AND grupo='".$grupo."' ORDER BY nombre ASC";
}

if (!isset($_GET['grupo']) && !isset($_GET['buscar']) || isset($_GET['grupo']) && $_GET['grupo']=="todos" && !isset($_GET['buscar'])) {
	$sql="SELECT * FROM contactos ORDER BY nombre ASC";
}

$consulta=mysqli_query($conexion,$sql);

?>