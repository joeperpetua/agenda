<?php
$conexion=mysqli_connect("localhost","root","") or DIE("error". mysqli_connect_errno($conexion));
$db=mysqli_select_db($conexion,"agenda");
 ?>