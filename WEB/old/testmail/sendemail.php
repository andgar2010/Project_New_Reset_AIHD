<?php

use PHPMailer\PHPMailer\PHPMailer;

    function sendemail($mail_username, $mail_userpassword, $mail_setFromEmail, $mail_setFromName, $mail_addAddress, $txt_message, $email_subject, $template){
        require '../../vendor/phpmailer/phpmailer/src/Exception.php';
        require '../../vendor/phpmailer/phpmailer/src/PHPMailer.php';
        require '../../vendor/phpmailer/phpmailer/src/SMTP.php';

        $mail = new PHPMailer();
        $mail->isSMTP();    // Establecer el correo electronico para utilizar SMTP
        $mail->Host = 'smtp.gmail.com';     //especificar el servidor de correo a utilizar
        $mail->SMTPAuth = true;         // Habilitar la autenticacion con SMTP
        $mail->Username = $mail_username;   // Correo electronico saliente ejemplo: tucorreo@email.com
        $mail->Password = $mail_userpassword;    // Tu contraseña de gmail saliente
        $mail->SMTPSecure = 'tls';      // Habilitar encriptacion, 'ssl' es aceptada
        $mail->Port = 587;      // Puerto TCP para conectarse
        $mail->setFrom($mail_setFromEmail, $mail_setFromName);      //Introduzca la direccion de la que debe aparecer el correo electronico. Puede utilizar cualquier direccion que el servidor SMTP acepte como valida. El segundo parametro opcional para esta funcion es el nombre que se mostrara com el remitente en lugar de la direccion de correo electronico en si.
        $mail->addAddress($mail_addAddress);        // Agregar quien recibe el email enviado
        $message = file_get_contents($template);
        $message = str_replace('{{first_name}}', $mail_setFromName, $message);
        $message = str_replace('{{customer_email}}', $mail_setFromEmail, $message);
        $mail->isHTML(true);  //Establecer el formato de correo electronico en HTML

        $mail->Subject = $email_subject;
        $mail->msgHTML($message);
        if (!$mail->send()) {
            echo '<p style="color:red"> No se pudo enviar el mensaje..';
            echo 'Error de correo:'. $mail->ErrorInfo;
            echo '</p>';
        } else {
            echo '<p style="color:green">Tu mensaje ha sido enviado!</p>';
        }


    }

?>