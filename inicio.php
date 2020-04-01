<?php
include 'php/conexion.php';

session_start();
if($_SESSION['administrador']){

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/estiloi.css">
    <link rel="shortcut icon"  href="img/ORDREST1.png">
    <title>ORDREST</title>
  </head>
  <body style="background-color: #eee">
    <nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="#"><img src="img/ORDREST1.png">ORDREST</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="registro.php" style="font-size:20px;">Registrar<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item" style="padding-left: 10px;">
        <a class="nav-link" href="asistencia.php" style="font-size:20px;">Asistencia</a>
      </li>
      <li class="nav-item" style="padding-left: 10px;">
        <a class="nav-link" href="estudiantes.php" style="font-size:20px;">Estudiantes</a>
      </li>
      <li class="nav-item" style="padding-left: 10px;">
        <a class="nav-link" href="horario.php" style="font-size:20px;">horario</a>
      </li>
       <li class="nav-item" style="padding-left: 10px;">
        <a class="nav-link" href="logout.php" style="font-size:20px;">Cerrar sesión</a>
      </li>
    </ul>
  </div>
</nav>
<!--#08A1FD;-->
<div class="container-fluid" style="border: 2px solid black;background-color: #404040;border-radius: 10px;box-shadow: 0px 0px 10px black;">
	<h1>Bienvenido administrador</h1>
	<h1>Que tenga una buena semana</h1>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php
}else{
  header('Location: index.php');
}
?>