<?php
include 'php/conexion.php';

session_start();
if($_SESSION['administrador']){


?>
<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/estiloestudiantes.css">
    <link rel="shortcut icon"  href="img/ORDREST1.png">
    <title>ORDREST</title>
  </head>
  <!-- cuerpo de la página estudiantes-->
  <body style="background-color: #eee ">
  <nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="#"><img src="img/ORDREST1.png">ORDREST</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <li class="nav-item active">
        <a class="nav-link" href="registro.php" id="registrar" style="bottom: -40%;">Registrar<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link justify-item-end " href="inicio.php" id="salir" style="bottom: -40%;">Inicio<span class="sr-only">(current)</span></a>
      </li>
</ul>
  </div>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    <div class="formulario" style="position:absolute;left:30%;top:30%;">
		<input type="text" name="caja_busqueda" id="caja_busqueda" placeholder="Buscar"></input>	
	</div>
</nav>

<br><br><br><br><br><br>
  <div id="datos"></div>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
<?php
}else{
  header('Location: index.php');
}
?>