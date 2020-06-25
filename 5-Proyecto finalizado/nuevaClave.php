<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
        <title>ordrest</title>
        <link rel="stylesheet" href="css/estilos1.css" />
        <link rel="icon" href="" />
    </head>
    <body>
    <!-- código para enviar correo de cambio de contraseña-->
        <?php if(isset($_GET['user']) && isset($_GET['token'])){

            require_once 'php/conexion.php';
            
            $user = $_GET['user'];
            $token = $_GET['token'];

            $sql = mysqli_query($conexion, "SELECT token FROM adminn WHERE email = '$user'");
            $row = mysqli_fetch_array($sql);

            if($row['token'] == $token){

        ?>

        <?php   if(isset($_POST['enviar'])){
                
                require_once 'php/conexion.php';

                $password= $_POST['pass'];
                //$clave_confirm = $_POST['pass_confirm'];
                //confirmarClave = '$clave_confirm',

                $sql = "UPDATE adminn SET password = '$password', token = '' WHERE email = '$user'"; 

                $act = mysqli_query($conexion, $sql);

                if($act){
                    echo "<script>alert('Se ha actualizado tu contraseña, ya puedes iniciar sesión');</script>";
                    header("Refresh: 0, URL=http://localhost:8080/ordrest-4.5/index.php");
                }
            }
        ?>
         <section class="form_wrap">
            <section class="cantact_info">
                <section class="info_title">
                <h2>ordrest</h2>
            </section>
        </section>
        <!-- formulario de actualización de contraseña-->
            <form action="" method="POST" class="form_contact" onsubmit="return validarClave();">
                <h2>Recuperar Contraseña</h2>
                <div class="user_info">
                    <label for="pass">Contraseña</label> 
                    <input type="password" name="pass" id="pass" required /> 
                
                    <input type="submit" value="Enviar" name="enviar" />
                </div>
            </form>
        </section>
            
            <?php } ?>
    </body>
</html>

<?php } ?>