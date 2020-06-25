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
    <link rel="stylesheet" type="text/css" href="css/asistencia.css">
    <link rel="shortcut icon"  href="img/ORDREST1.png">
    <title>ORDREST</title>
  </head>
  <body style="background-color: #eee">
  <!-- barra de navegación -->
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
</nav>
<li class="nav-item active">
<a class="nav-link justify-item-end" href='pdf.php' id="exportar" style='color: white;background-color:green;'>exportar</a>
</li>
<br><br><br><br>
<!-- listado de estudiante-->
<form>
<table class="table table-bordered" style="background-color: white;">
  <thead>
    <tr>
      <th scope="col" id="nom">Documento</th>
      <th scope="col" id="nom">Carnet</th>
      <th scope="col" id="nom">Nombre</th>
      <th scope="col" id="nom">Primer Apellido</th>
      <th scope="col" id="nom">Segundo Apellido</th>
      <th scope="col" id="nom">Grado</th>
      <th scope="col" id="nom">Grupo</th>
      <th scope="col" id="nom">Aula</th>
      <th scope="col" id="nom">Jornada</th>
      <th scope="col" id="nom">Asistio</th>
      <th scope="col" id="nom">fecha y hora</th>
    </tr>
<!--query para mostrar los estudiantes registrados-->
    <?php
$query="SELECT e.documento, e.carnet_e, e.nombre_e, e.apellido1, e.apellido2, e.grado, e.grupo, e.aula_e, e.jornada, a.verificar_asistencia, a.fecha from estudiantes e
inner join asistencia a on e.documento = a.docu_estudiante ORDER By jornada;";
$result=$conexion->query($query);
while ($fila=$result->fetch_assoc()) {
  
?>
  </thead>
  <tbody>
    <tr>
      <td id="row1"><?php echo $fila['documento']?></td>
      <td id="row1"><?php echo $fila['carnet_e']?></td>
      <td id="row1"><?php echo $fila['nombre_e'] ?></td>
      <td id="row1"><?php echo $fila['apellido1'] ?></td>
      <td id="row1"><?php echo $fila['apellido2'] ?></td>
      <td id="row1"><?php echo $fila['grado'] ?></td>
      <td id="row1"><?php echo $fila['grupo'] ?></td>
      <td id="row1"><?php echo $fila['aula_e']?></td>
      <td id="row1"><?php echo $fila['jornada'] ?></td>
      <td id="row1"><?php echo $fila['verificar_asistencia']?></td>
      <td id="row1"><?php echo $fila['fecha']?></td>
    </tr>
  <?php
  }
  ?>
  </tbody>
</table>
</tbody>
</table>
</form>



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