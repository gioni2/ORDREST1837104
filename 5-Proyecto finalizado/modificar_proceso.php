<!-- código para actualizar datos de los estudiantes-->
<?php
include ("php/conexion.php");
echo"<head><link rel='shortcut icon'  href='img/ORDREST1.png'></head>";
$id=$_REQUEST['id'];
$carnet_e=$_POST['carnet'];
$nombre_e=$_POST['nombre'];
$apellido1=$_POST['apellido1'];
$apellido2=$_POST['apellido2'];
$grado=$_POST['grado'];
$grupo=$_POST['grupo'];
$aula_e=$_POST['aula'];
$jornada=$_POST['jornada'];

$query="UPDATE estudiantes SET carnet_e='$carnet_e',
nombre_e='$nombre_e',
apellido1='$apellido1',
apellido2='$apellido2',
grado='$grado',
grupo='$grupo',
aula_e='$aula_e',
jornada='$jornada' 
WHERE documento='$id'";
$resultado=$conexion->query($query);
if ($resultado) {
	header('location: estudiantes.php');
}else{
	echo '<script type="text/javascript">
    alert("te falle mi amo");
    window.location.href="registro.html";
    </script>';
}

?>