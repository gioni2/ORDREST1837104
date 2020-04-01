<?php
error_reporting(0);
include "php/conexion.php";
if(isset($_POST['carnet'])){
$carnet=$_POST['carnet'];
$hora=date("h:i:s");
//--------------------------------------------------------------------------------------------------
$horario = ("SELECT inicio,fin FROM horario");
$resultado=$conexion->query($horario);
while ($fila=$resultado->fetch_assoc()) {
$inicio=$fila['inicio'];    
$fin=$fila['fin'];
}
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
  if($hora>$inicio && $hora<$fin){
    $asistencia = ("INSERT INTO asistencia values('01','$documento','si','1',now())");
    $resul=$conexion->query($asistencia);
      if($resul){
         echo "<script text='text/js'>alert('asitencia tomada');window.location.href='lector.php' </script>";
      }else{
         echo "<script text='text/js'>alert('los datos ingresados no son validos intente nuevamente');window.location.href='lector.php' </script>";
      }
  }else{
    $asistencia = ("INSERT INTO asistencia values('01','$documento','no valido','1',now())");
    $resul=$conexion->query($asistencia);
    if($resul){
        echo "<script text='text/js'>alert('lo sentimos su asistencia no cuenta');window.location.href='lector.php' </script>";
     }
  }
 }
}
?>