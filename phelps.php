<!DOCTYPE html>
<html>
<head>
	<title>Gimnasio Polideportivo Recoleta - Phelps</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet"  href="css/bootstrap.min.css">
	<link rel="stylesheet"  href="css/bootstrap.css">
  <link rel="stylesheet"  href="css/bootstrap-social.css">
	<script type="text/javascript">
		$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})
	</script>
</head>

<body style="background-image: url('images/CANCHA.png'); background-attachment: fixed; background-position: center;">
  <header>
    <div class="container">
    	<h1>Gimnasio Polideportivo Recoleta: Phelps</h1>
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
            <button type="button" class="btn btn-default navbar-btn text-center" data-toggle="modal" data-target="#reservas">Reservas</button>

            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
      <!--Fin Botonera-->

      <!--Contenido-->
      <div class="main row">
      <div class="text-center col-md-12">
        <h2>Phelps</h2>
        <div class="col-md-offset-3 col-md-6" align="left">
        <p>

          Recinto dedicado a la practica de la Natacion enfocado para toda la comuna de Recoleta, con actividades para todos nuestras habitantes.
                <h4>Encargo: Pedro Tapia</h4>
                <h4>Equipamiento</h4>
                <ul>
                    <li>Posee de piscinas olimpicas de 25 x 50 mts </li>
                    <li>Capacidad 3.456 personas sentadas </li>
                    <li>2 camarines para los asistentes</li>
                    <li>Temperatura del agua 25-28 Grados Celsius </li>
                </ul>

                <h4>Informaciones: +56 9 3487 7643</h4>

        </p>

        </div>
      </div>
       <!--Imagen-->
       <div class="text-center col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <img src="images/natacion.jpg">
      </div>
      <!-- Canchas -->

      <div class="text-center col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <p><br>
        <h2>Piscina</h2>
          <h3>Horario</h3>
          Lunes-Martes: 10:00-16:30hrs<br>
          Miercoles-Viernes: 11:00-19:30hrs<br>
          Sabado: 10:30-20:00hrs
        </p>
      </div>

      </div>



      <!--Fin Contenido-->
      <!--Footer-->
      <div class="footer text-center col-lg-12">
          <h4>&copy; Todos los derechos reservados.<br>Valparaiso, Chile.<br>2017</h4>
      </div>
  </div>

<div id="reservas" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
      <form action="reservas.php" method="post">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="gridSystemModalLabel">Reservas</h4>
        </div>
        <div class="modal-body">
          <div class="row col-md-12">
              <div class="form-group">
                <label>*Nombre</label>
                <input name="nombre" type="text" class="form-control" placeholder="Nombre">
              </div>
              <div class="form-group">
                <label >*Telefono</label>
                <input name="telefono" type="text" class="form-control" placeholder="Telefono">
              </div>
          </div>
          <div class="row col-md-12">
            <label>Gimnasio</label>
            <select name="gimnasio" class="form-control">
               <option value="-1">Elija una opcion...</option>
              <?php

                require("db/connect.php");
                $consulta = mysqli_query($conexion, "SELECT * FROM gym");
                while( $fila = mysqli_fetch_assoc($consulta) ){
                  echo "<option value=\"".$fila["id_gym"]."\">".$fila["Nombre"]."</option>";    
                }
              ?>
            </select><br>
          </div>
        </div>
        <div class="modal-footer">
        <div class="col-md-12 text-center">
          <p>* los datos con asteriscos son obligatorios</p>
          <p>Para ver su estado actual de reserva de canchas, ingrese su nombre y telefono y presione el boton "ver disponibilidad"</p>
        </div>
        <div class="col-md-12">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Ver Disponibilidad</button>
        </div>
        </div>
        </form>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
