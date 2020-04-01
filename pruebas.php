<?php
error_reporting(0);
header("");
include "php/conexion.php";
if(isset($_POST['carnet'])){
$carnet=$_POST['carnet'];
$hora=date("h:i");
$entrada="12:43";
//--------------------------------------------------------------------------------------------------
 $query = ("SELECT documento FROM estudiantes where carnet_e='".$carnet."'");
 $resultado=$conexion->query($query);
 while ($fila=$resultado->fetch_assoc()) {
 $documento=$fila['documento'];
 }
 //----------------------------------------------------------------------------------------------
$select =("SELECT docu_estudiante from asistencia");
$validar=$conexion->query($select);
while ($var=$validar->fetch_assoc()){
$docu= $var['docu_estudiante'];
}
if($documento == $docu){
echo"<script text='text/js'>alert('fallo al tomar la asistencia');window.location.href='lector.php' </script>";
}else{
  if(!$entrada == $hora){
    $asistencia = ("INSERT INTO asistencia values('01','$documento','si','1',now())");
    $resul=$conexion->query($asistencia);
      if($resul){
         echo "<script text='text/js'>alert('asitencia tomada');window.location.href='lector.php' </script>";
      }else{
         echo "<script text='text/js'>alert('los datos ingresados no son validos intente nuevamente');window.location.href='lector.php' </script>";
      }
  }else{
    $asistencia = ("INSERT INTO asistencia values('01','$documento','no','1',now())");
    $resul=$conexion->query($asistencia);
  }
 }
}
?>


<form class="container"action="#" method="post" >
    <input class="pe" type="char" name="carnet" autofocus>
    <input class="bot" type="submit" value="enviar" >
</form>

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