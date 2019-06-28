<p class="titulo"> Ingresar Nuevo Registro</p>
<form action="index.php" method="POST" enctype="multipart/form-data"> 
	<img src="imagenes/koala.jpg" alt="" width="100%">
	<label>Nombre y apellido</label>
	<input type="text" name="nombre">
	<br>
	<label>Telefono</label>
	<input type="text" name="telefono">
	<br>
	<label>Direccion</label>
	<input type="text" name="direccion">
	<br>
	<select name="grupo">
		<option value="familia"> familia </option>
		<option value="amigos"> amigos </option>
		<option value="trabajo"> trabajo </option>
		<option value="otros"> otros </option>
	</select>
	<label>Imagen</label>
	<input type="file" name="imagen">
	<br>
	<input type="submit" class="insertar" name="insertar" value="insertar">
</form>
<
<?php
if (isset($_POST['insertar'])) {
 	$nombre=$_POST['nombre'];
 	$direccion=$_POST['direccion'];
 	$telefono=$_POST['telefono'];
 	$grupo=$_POST['grupo'];
 	if (is_uploaded_file($_FILES['imagen'][tmp_name])) {
 		$archivo=$_FILES['imagen']['name'];
 		move_uploaded_file($_FILES['imagen'][tmp_name], "imagenes/".$archivo);
 	}
 	$sql="INSERT INTO contactos (foto, nombre, direccion,telefono, grupo) VALUES ('$archivo', '$nombre', '$direccion', '$telefono', '$grupo')";
 	$insertar=mysqli_query($conexion, $sql)? print("<script>alert('nuevo registro')</script>"): print("<script>alert('error')</script>");
 } 
 ?>