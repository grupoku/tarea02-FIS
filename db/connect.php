<?php

$servidor = "localhost";
$usuario = "root";
$contrasenia = "";
$base_datos =  "polideportivo";

if (!$conexion = mysqli_connect($servidor , $usuario, $contrasenia, $base_datos))
	echo "Error conectando a la base de datos";
?>