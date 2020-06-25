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
  <!-- cuerpo de la página horario-->
<body style="background-color: #eee">
<nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="#"><img src="img/ORDREST1.png">ORDREST</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav justify-content-center">
      <li class="nav-item active" style="left: 5%;">
        <a class="nav-link" href="inicio.php" style=" border-radius: 10px;">Inicio<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
<center>
<!-- formulario ingresar hora de apertuda de restaurante-->
<form  class="contenedor" action="rehora.php" method="post" style="position:absolute;background-color:#404040;width:550px;height:300px;top:20%;left:30%;color:white;">
	<h1>Horario del almuerzo</h1><br>
  <label >Hora inicio</label><br>
<div>
 <input required type="time" name="inicio"><br>
</div>
	<label >Hora final</label><br>
	<input required type="time" name="fin"><br><br>
	<input type="submit" value="enviar">
</form>
</center>
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