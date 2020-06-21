<?php
include ('php/conexion.php');
    $salida = "";

    $query = "SELECT * FROM estudiantes ORDER By jornada ";

   echo "<script type='text/javascript'>
   function comfir(){
     var respuesta= confirm('¿Esta seguro que quiere eliminar este estudiante?');
     if (respuesta == true)
     {
       return true;
     }else{
       return false;
     }
   }
 
 </script>";


    if (isset($_POST['consulta'])) {
    	$q = $conexion->real_escape_string($_POST['consulta']);
    	$query = "SELECT documento,carnet_e,nombre_e,apellido1,apellido2,grado,grupo,aula_e,jornada FROM estudiantes 
      WHERE documento LIKE '%" .$q."%' OR carnet_e LIKE '%" .$q."%' OR nombre_e LIKE '%" .$q."%' OR apellido1 LIKE '%" .$q."%' OR apellido2 LIKE '%" .$q."%'  OR grado LIKE '%" .$q."%'  OR grupo LIKE '%" .$q."%'  OR aula_e LIKE '%" .$q."%'  OR jornada LIKE '%" .$q."%' ";
    }

    $resultado = $conexion->query($query);
    if ($resultado->num_rows>0) {
    	$salida.="<table class='table table-bordered' style='background-color: white;'>
      <tr>
      <th scope='col' id='nom'>Documento</th>
      <th scope='col' id='nom'>Carnet</th>
      <th scope='col' id='nom'>Nombre</th>
      <th scope='col' id='nom'>Primer Apellido</th>
      <th scope='col' id='nom'>Segundo Apellido</th>
      <th scope='col' id='nom'>Grado</th>
      <th scope='col' id='nom'>Grupo</th>
      <th scope='col' id='nom'>Aula</th>
      <th scope='col' id='nom'>Jornada</th>
      <th scope='col' id='nom'>Modificar</th>
      <th scope='col' id='nom'>Eliminar</th>
    </tr>
    			

    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
    		$salida.="<tr>
    					<td>".$fila['documento']."</td>
    					<td>".$fila['carnet_e']."</td>
    					<td>".$fila['nombre_e']."</td>
    					<td>".$fila['apellido1']."</td>
						<td>".$fila['apellido2']."</td>
						<td>".$fila['grado']."</td>
						<td>".$fila['grupo']."</td>
						<td>#".$fila['aula_e']."</td>
            <td>".$fila['jornada']."</td>
            <td><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModalCenter' id='eliminar' style='background-color: ; border-color:' >
            <a href='modificar.php?id=$fila[documento]' style='color: white;'>modificar</a></button></td>
            <td><button class='btn btn-primary' data-toggle='modal' data-target='#exampleModalCenter' id='eliminar' style='background-color: red; border-color: red'>
            <a href='eliminar.php?id=$fila[documento]' style='color: white;'  onclick='return comfir();'>eliminar</a></button></td>
    				</tr>";

    	}
    	$salida.="</tbody></table>";
    }else{
    	$salida.="<h1>No se ha encontrado ningun registro <h1>";
    }


    echo $salida;

    $conexion->close();



?>