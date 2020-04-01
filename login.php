<?php
include ('php/conexion.php');

$nombre = $_POST['nombre'];
$pass = $_POST['contra'];

$query = mysqli_query($conexion,"SELECT * FROM admin WHERE `usuario` = '$nombre' AND `password` = '$pass'");
$nr = mysqli_num_rows($query);
if ($nr == 1) {
	session_start();
	$id = mysqli_fetch_array($query);
	$_SESSION['administrador'] = $id['id'];
	header("Location: inicio.php");
}else{
	echo "<script text='text/javascript'>alert('los datos ingresados no son validos intente nuevamente');window.location.href='index.php' </script>";	
}


?>