<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if(isset($_POST['enviar'])){
    require_once 'php/conexion.php';

    $email = $_REQUEST['email'];

    $sql = "SELECT email FROM adminn WHERE email = '$email'"; 
    $result = mysqli_query($conexion, $sql)or die (mysqli_error($conexion));
    $row = mysqli_fetch_array($result);

    if(mysqli_num_rows($result) == 1){
        $token = uniqid();
        $sql = "UPDATE adminn SET token = '$token' WHERE email = '$email'";
        $act = mysqli_query($conexion, $sql);

        $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'ordrest12@gmail.com';                     // SMTP username
        $mail->Password   = 'ordrest123456789';                               // SMTP password
        $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('ordrest12@gmail.com', 'ordrest');
        $mail->addAddress($email);     // Add a recipient

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = "Recuperar Clave";
        $mail->Body    = "Hola " . $row['email'] . " , haz solictado cambiar tu contraseña, ingresa al siguiente link\n\n";
        $mail->Body .= "http://localhost/ordrest-4.5/nuevaClave.php?user=".$row['email']."&token=".$token."\n\n";
        $mail->CharSet = 'utf-8';
        $mail->send();
        
        echo "<script>
                alert('Te hemos enviado un email para cambiar tu contraseña');
                window.history.go(-2);
            </script>";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

    }else {
        echo "<script>
                alert('Esta dirección de correo electrónico no existe, vuelvalo a intentar.');
                window.history.go(-1);
            </script>";
    }
}


?>