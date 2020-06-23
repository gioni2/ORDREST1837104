<!DOCTYPE html>
<html>
<head>
	    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
 <link rel="shortcut icon"  href="img/ORDREST1.png">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/estilologin.css">
	<title>INICIO DE SESION</title>
</head>
<body style="background-color: #eee">
<div class="model-dialog text-center" id="contenedor">
	<div class="col-sm-5 main-selection">
		<div class="contenedor2">
			<div class="col-12 user-img">
				<img src="img/usuario.png">
			</div>
			<form class="col-5 " action="login.php" method="post">
				<div class="form-group" id="conta">
					<label for="user" style="font-family: elefant;">Usuario</label>
					<input required id="user" type="char" name="nombre"  placeholder="Nombre de usuario" >
					<img src="img/persona.png" id="icon" style="position: absolute; top: 13%; left: 10%;height:30px;">
				</div>
					<div class="form-group" id="contraseña">
						<label for="pass" style="font-family: elefant;">Contraseña</label>
					<input required id="pass" type="password" name="contra" placeholder="Contraseña" >
					<img src="img/llave.png" id="icon2" style="position: absolute; top: 15%; left: 9%;height:17px;">
				</div>
                <input  type="submit" class="btn btn-primary" id="boton" value="ingresar">
			</form>
			<div class="col-12 forgot">
<button class="btn" data-toggle="modal" data-target="#staticBackdrop" id="boton2">
  ¿olvidaste contraseña?
</button>
</div>
</div>
</div>
</div>

<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" id="contenedor-modal">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel" style="font-family: Britannic Bold;"><br>Ingrese su correo electronico <br>para reestablecer contraseña </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form action="recuperar.php" method="POST">
       <label for="email" style="font-family: elefant;">Email</label>
       <input type="text" name="email" placeholder="ingrese su Email" required>
      </div>
      <div class="modal-footer">
       
        <input type="submit" value="enviar" name="enviar" class="btn btn-primary"></input>
	  </div>
	  
</form>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>


</html>