<?php
$agregar_reserva = $_GET["add"];
if($agregar_reserva == "true"){
  $id_gym = $_GET["id_gym"];
  $id_cancha = $_GET["id_cancha"];
  $id_horario = $_GET["id_horario"];
  $nombre = $_GET["nombre"];
  $telefono = $_GET["telefono"];
  require("db/agregar_reserva.php");
}else{

  $mensaje ="";
}
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
            <li><a href="condor.html">Condor Rojas Norte</a></li>
            <li><a href="phelps.html">El Phelps</a></li>
            <li><a href="massu.html">Massu</a></li>
            <li><a href="nba.html">NBA</a></li>

            </ul>
            <li><a href="contacto.html">Contacto</a></li>
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
        
      <?php
        echo $agregar_reserva;
        echo $id_gym;
        echo $id_cancha;
        echo $id_horario;
      ?>
      <div class="jumbotron text-center">
        <h2><?php echo $mensaje;?></h2>
        <a href="index.php" class="btn">Volver al inicio</a>
      </div>

      </div>

      <div class="footer text-center">
          <h4>&copy; Todos los derechos reservados.<br>Valparaiso, Chile.<br>2017</h4>
      </div>


  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
