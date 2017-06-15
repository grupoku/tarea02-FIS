<!DOCTYPE html>
<html>
<head>
	<title>Gimnasio Polideportivo Recoleta</title>
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
            <li><a href="contacto.html">Contacto</a></li>
            </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <button type="button" class="btn btn-default navbar-btn" data-toggle="modal" data-target="#reservas">Reservas</button>

            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
      <!--Fin Botonera-->
      <!--Contenido-->
      <!--Slider-->
      <div class="main">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          </ol>
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div align="center" class="item active">
              <img src="images/banner1.jpg" alt="Responsive image">
              <div class="carousel-caption">
                <h1>Condor Rojas</h1>
              </div>
            </div>
            <div align="center" class="item">
              <img src="images/banner2.jpg" alt="Responsive image">
              <div class="carousel-caption">
                <h1>NBA</h1>
              </div>
            </div>
          </div>
          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span></a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <!--Fin Slider-->
      <div class="col-md-offset-1 col-md-10 text-left">
        <h1>Gimnasio Polideportivo Recoleta</h1>
        <p>
        El Gimnasio Polideportivo de la comuna de Recoleta fundado en el año 3000 AC. por el Alcalde Perico de los Palotes, cuenta con recintos  para distintas disciplinas deportivas completamente equipado. Ubicado en la Avenida Null 777.
        </p>
        <p>
        Este gimnasio posee 4 recintos:
        <ul>
         <li>Condor Rojas: Cuenta con 2 canchas techadas de futbol-sala </li>
         <li>Piscina Olimpica Phelps</li>
         <li>Massu: Con un conjunto de 4 canchas de Tenis </li>
         <li>NBA: Equipado con 2 canchas de Baloncesto y 2 de Volleyball</li>
        </ul>
        </p>
      </div>
      <div class="main row">
        <div class="main">
          <div class="col-sm-6 col-md-3">
            <div class="thumbnail" align="left">
              <img src="images/condor.jpg">
              <div class="caption">
                <h3>Condor Rojas Norte</h3>
                <h4>Encargo: Juan Soto</h4>
                <h4>Equipamiento</h4>
                <ul>
                    <li> Posee canchas de superficie sintetica con dimensiones de 20 x 40 mts </li>
                    <li>Capacidad 23.456 personas sentadas </li>
                    <li>6 camarines para los equipos </li>
                    <li>4 camarines para los arbitros</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="thumbnail" align="left">
              <img src="images/natacion.jpg">
              <div class="caption">
                <h3>El Phelps</h3>
                <h4>Encargo: Pedro Tapia</h4>
                <h4>Equipamiento</h4>
                <ul>
                    <li>Posee piscinas olimpicas de 25 x 50 mts </li>
                    <li>Capacidad 3.456 personas sentadas </li>
                    <li>2 camarines para los asistentes</li>
                    <li>Temperatura del agua 25-28 Grados Celsius </li>
                </ul>

              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="thumbnail" align="left">
              <!--<img src="images/linux.jpg" alt="..."> -->
              <img src="images/tenis4.jpg">
              <div class="caption">
                <h3>Massu</h3>
                <h4>Encargo: Luis Gonzales</h4>
                <h4>Equipamiento</h4>
                <ul>
                    <li>Posee 4 canchas de superficie sintetica con dimensiones de 23 x 8 mts </li>
                    <li>Cada una con una capacidad 456 personas sentadas </li>
                    <li>2 camarines por cancha </li>
                  </ul>


              </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-3">
            <div class="thumbnail" align="left">
              <!--<img src="images/linux.jpg" alt="..."> -->
              <img src="images/volley.jpg">
              <div class="caption">
                <h3>NBA</h3>
                <h4>Encargo: José Tapia</h4>
                <h4>Equipamiento</h4>
                <ul>
                    <li> Posee dos canchas baloncesto con dimensiones de 15 x 28 mts </li>
                    <li> Posee dos canchas voleyball con dimensiones de 18 x 9 mts </li>
                    <li> Capacidad 4.678 personas sentadas </li>
                    <li>8 camarines para los equipos </li>
                    <li>4 camarines para los arbitros</li>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--Footer-->
      <div class="footer text-center">
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
