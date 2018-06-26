<?php

use PHPMailer\PHPMailer\PHPMailer;

function sendEmail($mailAddAddress, $emailSubject, $txtMessage){
    require '../vendor/autoload.php';

    include './authSMTP.php';

    $mail = new PHPMailer();

    // Establecer el correo electronico para SMTP
    $mail->isSMTP();

    // Especificar el servidor de correo a utilizar
    $mail->Host = 'smtp.gmail.com';

    // Habilitar la autenticacion con SMTP
    $mail->SMTPAuth = true;

    // Habilitar encriptación
    $mail->SMTPSecure = 'tls';

    // Puerto TCP para conectarse
    $mail->Port = 587;

    // Correo electronico saliente.
    $mail->Username = $mailSetFromEmail;

    // Contraseña de Correo electronico saliente
    $mail->Password = $mailSetFromPassword;

    //Introduzca la direccion de la que debe aparecer el correo electronico. Puede utilizar cualquier direccion que el servidor SMTP acepte como valida. El segundo parametro opcional para esta funcion es el nombre que se mostrara com el remitente en lugar de la direccion de correo electronico en si.
    $mail->setFrom($mailSetFromEmail, $mailSetFromName);

    // Agregar correo destinatario (quien recibe el email enviado).
    $mail->addAddress($mailAddAddress);

    // Activar condificacion UTF-8
    $mail->CharSet = 'UTF-8';

    // Asunto del mensaje
    $mail->Subject = $emailSubject;

    // Establecer el formato de correo electronico en HTML
    $mail->isHTML(true);

    $mail->msgHTML($txtMessage);

    $mail->setLanguage('es', '../assets/Framework/PHPMailer/');

    if (!$mail->send()) {
        echo '<p style="color:red">No se pudo enviar el mensaje...<br>Error de correo: '.$mail->ErrorInfo.' </p>';
    } else {
        echo '<p style="color:green">Tu mensaje ha sido enviado!</p>';
    }
}