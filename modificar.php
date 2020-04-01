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
    <link rel="stylesheet" type="text/css" href="css/estiloregistro.css">
    <link rel="shortcut icon"  href="img/ORDREST1.png">
    <title>ORDREST</title>
  </head>
  <body style="background-color: #eee">
  <!-- barra de busqueda -->
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
  <div class="collapse navbar-collapse" id="navbarNav" style="position:relative;right: 20%;">
    <ul class="navbar-nav justify-content-center">
    <li class="nav-item" style="padding-left: 10px;">
        <a class="nav-link" href="estudiantes.php" style=" border-radius: 10px;left: 20%;">Regresar</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="inicio.php" style=" border-radius: 10px;left: 35%;">Inicio<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
<!-- -------------------------------------------------------------------------------------------------------- -->
<?php
include('php/conexion.php');
$id=$_REQUEST['id']; 
$query="SELECT * FROM estudiantes WHERE documento='$id'";
$resultado=$conexion->query($query);
$row=$resultado->fetch_assoc();  
?>

<form  action="modificar_proceso.php?id=<?php echo $row['documento']?>" method="post"style="position:absolute;background-color:#404040;width:550px;height:390px;top:20%;left:30%;">
<h1>actualizar datos</h1>
<div style="position:absolute;left:10%;">
    <input required type="char" name="documento" onkeypress="return SoloNumeros(event)" value="<?php echo $row['documento']; ?>">
</div>
<div style="position:absolute;left:60%;">
    <input required type="char" name="carnet" onkeypress="return SoloNumeros(event)" value="<?php echo $row['carnet_e']; ?>">
</div>
<div style="position:absolute;left:10%;top:32%;">
    <input required type="text" name="nombre" onkeypress="return SoloLetras(event)" value="<?php echo $row['nombre_e']; ?>">
</div>
<div style="position:absolute;left:60%;top:32%;">
    <input required type="text" name="apellido1" onkeypress="return SoloLetras(event)" value="<?php echo $row['apellido1']; ?>">
</div>
<div style="position:absolute;left:10%;top:48%;">
    <input required type="text" name="apellido2" onkeypress="return SoloLetras(event)" value="<?php echo $row['apellido2']; ?>">
</div>
<div style="position:absolute;left:60%;top:48%;">   
    <input required type="char" name="grado" onkeypress="return SoloLetras(event)" value="<?php echo $row['grado']; ?>">
</div>
<div style="position:absolute;left:10%;top:65%;">
<input required type="char" name="aula" onkeypress="return SoloNumeros(event)" value="<?php echo $row['aula_e']; ?>">
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
  <button class="btn btn-primary" type="submit" style="position:relative;left:10px;border:1px solid white;top: 4px;background-color: blue;">actualizar</button>
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