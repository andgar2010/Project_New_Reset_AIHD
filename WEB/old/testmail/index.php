<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="content">
        <div class="contact-main">
            <form action="" method="post">
                <h3>Tu correo electronico</h3>
                <input type="email" name="customer_email" id="email" class="form-control" required>
                <label for="" class="control-label">Nombre</label>
                <input type="text" name="customer_name" id="name" class="form-control" required>
                <label for="" class="control-label">Subject</label>
                <input type="text" name="subject" id="subject" class="form-control" required>
                <br>
                <h3 class="control-label">Mensaje</h3>
                <textarea name="message" id="message" placeholder="Leave your message here..." required></textarea>
                <?php
                    if (isset($_POST['send'])) {
                        include('sendmail.php'); //Mando a llamar ala funcion que se encarga de enviar el correo eletronico

                        /* Configuracion de variables para enviar el correo */
                        $mail_username              = ''; //Correo electronico saliente. ejemplo: tucorreo@gmail.com
                        $mail_userpassword          = ''; //Tu contraseña correo
                        $mail_sendtoAddAddressMail  = '';
                        $template         = "email_template.html"; //Ruta de la plantilla HTML para enviar nuestro mensaje

                        /* Inicio captura de datos enviados por $_POST para enviar el correo */
                        $mail_setFromEmail = $_POST['customer_email'];
                        $mail_setFromName = $_POST['customer_name'];
                        $txt_message      = $_POST['message'];
                        $mail_subject     = $_POST['subject'];

                        sendmail(
                            $mail_username,
                            $mail_userpassword,
                            $mail_setFromEmail,
                            $mail_setFromName,
                            $mail_sendtoAddAddressMail,
                            $txt_message,
                            $mail_subject,
                            $template);
                    }
                ?>
                <div class="enviar">
                    <div class="contact-check">
                    </div>
                    <div class="contact-enviar">
                        <input type="submit" value="Enviar mensaje" name="send">
                    </div>
                    <div class="clear"></div>
                </div>
            </form>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>