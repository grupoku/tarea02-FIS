<?php  


   require("connect.php");
    $consulta = mysqli_query($conexion , "SELECT * FROM cliente");
    while ($fila = mysqli_fetch_assoc($consulta)) {
      $id_cliente =  $fila["id_cliente"];
    }
    $id_cliente = $id_cliente +1;
   
    $consulta = mysqli_query($conexion, "INSERT INTO cliente (id_cliente, Nombre, Telefono, contraseña) VALUES ('$id_cliente', '$nombre', '$telefono', NULL)");

	mysqli_query($conexion, "UPDATE `horarios` SET `estado` = 'no disponible' WHERE `horarios`.`id_horario` = $id_horario");
	$mensaje = "Se ha reservado su cancha con exito";
?>