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
    <link rel="stylesheet" type="text/css" href="css/estiloregis.css">
    <link rel="shortcut icon"  href="img/ORDREST1.png">

    <!-- java script -->
    <script text="text/js" src="js/validaciones.js"> </script>
    <title>ORDREST</title>
  </head>
  <body style="background-color: #eee;">
<style>
h1{
 color:white;
 text-align:center;
}
label{
  color:white;
  text-align:center;
}

</style>
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
      <li class="nav-item" style="padding-left: 10px;left: 8%;">
        <a class="nav-link" href="estudiantes.php" style="border-radius: 10px;">Estudiantes</a>
      </li>
    </ul>
  </div>
</nav>

<form  class="contenedor" action="insertar.php" method="post" style="position:absolute;background-color:#404040;width:550px;height:390px;top:20%;left:30%;">
<h1>Registro</h1>
<div style="position:absolute;left:10%;">
    <input required type="char" name="documento" onkeypress="return SoloNumeros(event)" placeholder="Documento">
</div>
<div style="position:absolute;left:60%;">
    <input required type="char" name="carnet" onkeypress="return SoloNumeros(event)" placeholder="Carnet Estudiantil">
</div>
<div style="position:absolute;left:10%;top:32%;">
    <input required type="text" name="nombre" onkeypress="return SoloLetras(event)" placeholder="Nombre">
</div>
<div style="position:absolute;left:60%;top:32%;">
    <input required type="text" name="apellido1" onkeypress="return SoloLetras(event)" placeholder="Primer Apellido">
</div>
<div style="position:absolute;left:10%;top:48%;">
    <input required type="text" name="apellido2" onkeypress="return SoloLetras(event)" placeholder="Segundo Apellido">
</div>
<div style="position:absolute;left:60%;top:48%;">   
    <input required type="char" name="grado" onkeypress="return SoloLetras(event)" placeholder="Grado">
</div>
<div style="position:absolute;left:10%;top:65%;">
<input required type="char" name="aula" onkeypress="return SoloNumeros(event)" placeholder="Aula">
</div>
<div style="position:absolute;left:65%;top:60%;">
<label>Grupo</label>
<select name="grupo" id="">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
</select>
</div>
<div style="position:absolute;left:62%;top:70%;">
<label>jornada</label>    
<select name="jornada" id="">
<option value="tarde">tarde</option>
<option value="mañana">mañana</option>
</select>
</div>
<div style="position:absolute;left:40%;top:83%;">
  <button class="btn btn-primary" type="submit" style="position:relative;left:10px;border:1px solid white;top: 4px;background-color: #262626;">Registrar</button>
</div>
</form>
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