<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

if ($_POST) {
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $descripcion = $_POST['descripcion'];
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'libs/vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'paginaswebifcd@gmail.com';                     //SMTP username
    $mail->Password   = 'ekheppkkfjzycjgp';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('remitente@hmail.com', 'Estela');
    $mail->addAddress('paginaswebifcd@gmail.com', 'Laura');     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $asunto;
    
    // Construct the email body with the new fields
    $mail->Body = "
        <p><strong>Nombre:</strong> $nombre</p>
        <p><strong>Teléfono:</strong> $telefono</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Asunto:</strong> $asunto</p>
        <p><strong>Descripción:</strong></p>
        <p>$descripcion</p>
    ";

    $mail->send();
    header("Location:index.php");
    echo "Correo enviado";
} catch (Exception $e) {
    echo "Error en el envío: {$mail->ErrorInfo}";
}
