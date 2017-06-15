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
    	<h1>Header</h1>
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
            <ul class="nav navbar-nav"><li><a class="navbar-brand" href="index.html">Inicio</a></li></ul>
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
              <button type="button" class="btn btn-default navbar-btn" data-toggle="modal" data-target="#reservas">Reservas</button>
              <button type="button" class="btn btn-default navbar-btn" data-toggle="modal" data-target="#wad">Iniciar Sesion</button>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
      <!--Fin Botonera-->

      <!--Contenido-->
      <div class="col-md-12">
        <h3>Formulario contacto</h3>
      
      <div class="col-md-6">
        <p>
          Si tienes alguna duda contáctate con nosotros, envíanos un correo con tu consulta, duda o inquietud y te responderemos a la brevedad.
          </p>
        </div>
    </div>
      <div class="main col-xs-12 col-lg-6">
        <form>
  <div class="form-group">
    <label for="exampleInputName1">*Nombre Completo</label>
    <input type="text" class="form-control" id="exampleInputName1" placeholder="Nombre">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">*Email</label>
    <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">*Mensaje</label>
    <textarea class="form-control" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputFile">Archivos adjuntos</label>
    <input type="file" id="exampleInputFile">
    <p class="help-block">Adjunte cualquier documento necesario para su consulta.</p>
  </div>
  <button type="submit" class="btn btn-default">Enviar</button>
</form>
      </div>
      <div class="text-center col-lg-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d723.6731066261877!2d-71.61358550723098!3d-33.046182422994015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5f1974003fedbb42!2sFacultad+de+Ingenieria+Universidad+de+Valpara%C3%ADso!5e0!3m2!1ses-419!2s!4v1492404777771" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="main">
         <p class="text-center col-lg-12">
          
         </p>
      </div>
      <!--Footer-->
      <div class="footer text-center col-lg-12">
          <h4>&copy; Todos los derechos reservados.<br>Valparaiso, Chile.<br>2017</h4>
      </div>
  </div>
<div id="reservas" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="gridSystemModalLabel">Reservas</h4>
        </div>
        <div class="modal-body">
          <div class="row col-md-12">
            <form>
              <div class="form-group">
                <label>*Nombre Completo</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Nombre">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">*Email</label>
                <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
              </div>
            </form>
          </div>
          <div class="row col-md-12">
            <label>*Recinto</label>
            <select class="form-control">
               <option>Elija una opcion...</option>
               <option>Condor Rojas Norte</option>
               <option>El Phelps</option>
               <option>Massu</option>
               <option>NBA</option>
            </select><br>
          </div>
          <div class="row col-md-4">
            <label>*Dia</label>
            <select class="form-control">
               <option>Elija una opcion...</option>
               <option>Lunes</option>
               <option>Martes</option>
               <option>Miercoles</option>
               <option>Jueves</option>
               <option>Viernes</option>
               <option>Sabado</option>
            </select><br>
          </div>
          <div class="row col-md-offset-1 col-md-4">
            <label>*Hora</label>
            <select class="form-control">
               <option>Elija una opcion...</option>
               <option>10:00hrs</option>
               <option>11:00hrs</option>
               <option>12:00hrs</option>
               <option>13:00hrs</option>
               <option>14:00hrs</option>
               <option>15:00hrs</option>
               <option>16:00hrs</option>
               <option>17:00hrs</option>
               <option>18:00hrs</option>
               <option>19:00hrs</option>
            </select><br>
          </div>
        </div>
        <div class="modal-footer">
        <div class="col-sm-12">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>








