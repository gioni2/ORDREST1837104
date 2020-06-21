<?php
include ('php/conexion.php');

header('Content-type:application/xls');
header('Content-Disposition: attachment; filename=asistencia.xls');
$query="SELECT e.documento, e.carnet_e, e.nombre_e, e.apellido1, e.apellido2, e.grado, e.grupo, e.aula_e, e.jornada, a.verificar_asistencia, a.fecha from estudiantes e
inner join asistencia a on e.documento = a.docu_estudiante; ";
$result=$conexion->query($query);

?>

<table>
    <tr>
      <th>Documento</th>
      <th>Carnet</th>
      <th>Nombre</th>
      <th>Primer Apellido</th>
      <th>Segundo Apellido</th>
      <th>Grupo</th>
      <th>Grado</th>
      <th>Aula</th>
      <th>Jornada</th>
      <th>Asistio</th>
      <th>fecha</th>
    </tr>
    <?php
    while ($fila=$result->fetch_assoc()) {
    ?>
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
</table>
<?php
$borrar="DELETE FROM asistencia";
$delete=$conexion->query($borrar);

?>