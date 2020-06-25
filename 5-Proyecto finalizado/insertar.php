<!-- código para insertar un estudiantes-->
<?php
include ('php/conexion.php');
echo "<head><link rel='shortcut icon' href='img/ORDREST1.png'></head>";
$documento=$_POST['documento'];
$carnet=$_POST['carnet'];
$nombre=$_POST['nombre'];
$apellido1=$_POST['apellido1'];
$apellido2=$_POST['apellido2'];
$grado=$_POST['grado'];
$grupo=$_POST['grupo'];
$aula=$_POST['aula'];
$jornada=$_POST['jornada'];

$query = ("SELECT documento,carnet_e FROM estudiantes");
$resultado=$conexion->query($query);
while ($fila=$resultado->fetch_assoc()) {
$docu=$fila['documento'];
$car=$fila['carnet_e'];
}
if($documento == $docu || $carnet == $car){
    echo '<script type="text/javascript">
    alert("este documento ya esta registrado por favor verifique los datos");
    window.location.href="registro.php";
    </script>';
}else{
$insertar= "INSERT INTO estudiantes(documento,carnet_e,nombre_e,apellido1,apellido2,grado,grupo,aula_e,jornada)
VALUES('$documento','$carnet','$nombre','$apellido1','$apellido2','$grado','$grupo','$aula','$jornada')";
$resul=$conexion->query($insertar);
if ($resul){
    echo '<script type="text/javascript">
    alert("registro exitoso");
    window.location.href="registro.php";
    </script>';
}else{
    echo '<script type="text/javascript">
    alert("ocurrio un problema");
    window.location.href="registro.php"
    </script>';
}
}
?>