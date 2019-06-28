<?php
if (isset($_GET['grupo'])) {
	echo '<p class="Subtitulo"> Contacto:'.$_GET['grupo'].'	</p> ';

}
else{
	echo '<p class="Subtitulo"> Contacto:Todos	</p> ';

}





if (mysqli_num_rows($consulta)>0) {
		while ($registro=mysqli_fetch_assoc($consulta)) {
			
?>
<details>
	<summary><p class="nbr_contacto"> <img src= <?php echo 'imagenes/'.$registro['foto']; ?> ><?php echo $registro['nombre']; ?></p></summary>
	<p class="items">Grupo: <?php echo $registro['grupo']; ?></p>
	<p class="items">Telefono: <?php echo $registro['telefono']; ?></p>
	<p class="items">Direccion: <?php echo $registro['direccion']; ?></p>
	<a href="./"><span>editar</span></a>
	<a href="./"><span>borrar</span></a> 
</details>
<?php
       }
}
else{
	echo "No hay contactos";
}
?>