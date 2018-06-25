<!doctype html>
<html lang="es">

<head>
    <title>PHPMailer Enviar desde Localhost</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="content">
                <div class="contact-main">
                    <form action="" method="post">
                        <h3>Correo electronico para enviar al quien</h3>
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

                            //Mando a llamar a la funcion que se encarga de enviar el correo eletronico
                            include('sendemail.php');

                            //Ruta de la plantilla HTML para enviar nuestro mensaje
                            $template         = "./index.html";

                            /* Inicio captura de datos enviados por $_POST para enviar el correo */

                            //Correo electronico que recibira el mensaje
                            $mail_sendtoAddAddressMail  = $_POST['customer_email'];
                            $txt_message                = $_POST['message'];
                            $mail_subject               = $_POST['subject'];

                            sendemail($mail_sendtoAddAddressMail, $mail_subject, $template, $txt_message);
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
        </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>