<!-- código para ingresar hora de apertura y cierre del restaurante escolar-->

<?php
include "php/conexion.php";
$inicio=$_POST['inicio'];
$fin=$_POST['fin'];
$eliminar="DELETE FROM horario";
$resultado=$conexion->query($eliminar);

$insertar= "INSERT INTO horario VALUES('$inicio','$fin','1')";
$resul=$conexion->query($insertar);
if ($resul){
    echo '<script type="text/javascript">
    alert("horario tomado con exito");
    window.location.href="horario.php";
    </script>';
}else{
    echo '<script type="text/javascript">
    alert("ocurrio un problema");
    window.location.href="horario.php"
    </script>';
}
?>