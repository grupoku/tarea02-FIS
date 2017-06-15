<?php
    $nombre =  $_POST["nombre"];
    $telefono =  $_POST["telefono"];
    $id_gym =  $_POST["gimnasio"];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Gimnasio Polideportivo Recoleta</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet"  href="css/bootstrap.min.css">
	<link rel="stylesheet"  href="css/bootstrap.css">
  <link rel="stylesheet"  href="css/bootstrap-social.css">


</head>

<body style="background-image: url('images/CANCHA.png'); background-attachment: fixed; background-position: center;">
  <header>
    <div class="container">
    	<h1>Gimnasio Polideportivo Recoleta</h1>
    </div>
  </header>
  <div class="container">
      <!-- Botonera -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <ul class="nav navbar-nav"><li><a class="navbar-brand" href="index.php">Inicio</a></li></ul>
          </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">


            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"   aria-expanded="false">Recintos<span class="caret"></span></a>
            <ul class="dropdown-menu">
            <li><a href="condor.php">Condor Rojas Norte</a></li>
            <li><a href="phelps.php">El Phelps</a></li>
            <li><a href="massu.php">Massu</a></li>
            <li><a href="nba.php">NBA</a></li>

            </ul>
            <li><a href="contacto.php">Contacto</a></li>
            </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">

            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
      <!--Fin Botonera-->
      <!--Contenido-->
</div>

      <div class="container">
        <div class="col-md-5">
        <h3>Reserva de cancha en Gimnasio:</h3>
        <h4>
        <?php
          require("db/connect.php");
          $consulta = mysqli_query($conexion, "SELECT * FROM gym WHERE id_gym = $id_gym");
          $fila = mysqli_fetch_assoc($consulta);
          echo $fila["Nombre"];
        ?>
        </h4>
                <h4>Informacion de contacto:</h4>
        <h5><?php echo $nombre;?></h5>
        <h5><?php echo $telefono;?></h5>
        </div>

        <div class="col-md-7">
        <!--INICIO PRUEBA-->
        <?php          

     
            require("db/connect.php");
            if($consulta_cliente = mysqli_query($conexion,  "SELECT * FROM cliente WHERE Nombre = $nombre")){
              $fila = mysqli_fetch_assoc($consulta_cliente);
              echo $fila["nombre"];
              $id_cliente = $fila["id_cliente"];
              $consulta_horarios = mysqli_query($conexion, "SELECT * FROM horarios WHERE id_cliente = $id_cliente");
              while ( $fila = mysqli_fetch_assoc($consulta_horarios) ) {
                  
              }
            }
          
          ?>

          <!--FIN PRUEBA-->
        <h1>Actualmente no posees reservas</h1>
          <table class="table">
            <?php

          require("db/connect.php");
          $consulta_canchas = mysqli_query($conexion,  "SELECT * FROM canchas WHERE id_gym = $id_gym");

          if ($nombre != "" && $telefono != "") {
              while( $filas_canchas = mysqli_fetch_assoc($consulta_canchas)  ){
              echo "<tr>";
              echo "<td>CANCHA: ".$filas_canchas["Nombre"]."</td>";
              $id_cancha = $filas_canchas["id_cancha"];
              $precio_cancha = $filas_canchas["Precio"];
              //echo $id_cancha;
              $consulta_horarios = mysqli_query($conexion,  "SELECT * FROM horarios WHERE id_cancha = $id_cancha");
              while( $filas_horarios = mysqli_fetch_assoc($consulta_horarios)  ){
                if( $filas_horarios["estado"] == "disponible" ){
                  echo "<tr>";
                  echo "<td>".$filas_horarios["fecha"]."</td>";
                  echo "<td>".$filas_horarios["hora"]."</td>";
                  echo "<td>".$precio_cancha."</td>";
                  echo "<td><a href=\"exit.php?add=true&nombre=$nombre&telefono=$telefono&id_gym=$id_gym&id_cancha=$id_cancha&id_horario=".$filas_horarios["id_horario"]."\">Reservar</a></td>";
                  echo "</tr>";
                }
              }
              echo "</tr>";
            }
          }else{
            echo "<h2>Debe ingresar sus datos de contacto para poder hacer una reserva</h2>";
          }
          ?>

          </table>
        </div>

      </div>

      <div class="footer text-center">
          <h4>&copy; Todos los derechos reservados.<br>Valparaiso, Chile.<br>2017</h4>
      </div>


  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
