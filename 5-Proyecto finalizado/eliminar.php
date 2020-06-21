<?php
echo"<head><link rel='shortcut icon'  href='img/ORDREST1.png'></head>";
include("php/conexion.php");

$id=$_REQUEST['id'];

$query="DELETE FROM estudiantes WHERE documento='$id'";
$resultado=$conexion->query($query);
if ($resultado) {
	header("location:estudiantes.php");
    
}else{
	echo ("error");
}
?>


