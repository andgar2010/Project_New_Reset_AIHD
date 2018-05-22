<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro nuevo usuario</title>


    <!-- HTML Meta Tags -->
    <title>Registro nuevo usuario</title>
    <meta name="description" content="Registro de nuevo usuario de NEW RESET A.H.I.D.">
    <!-- End HTML Meta Tags -->

    <?php include '../config/base_head.php' ?>
    <?php include '../config/Toastr.php';?>
    <?php include '../config/googleAnaytics.php';?>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,400italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">

</head>

<body>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="section-title modal-title text-center">Confirmar registro usuario</h1>
            </div>
            <div class="modal-body">
                <form method="post" action="../controllers/confirmNewUser.php">
                    <div class="form-group">
                        <label for="email" class="control-label">Email</label>
                        <input id="email" type="email" name="email" class="form-control" title="Por favor ingresa su correo electrónico registrado"
                            required/>
                        <input type="hidden" name="id" id="id" class="form-control" maxlength="100" value="<?php //echo $datos_usuario->id; ?>">
                    </div>

                    <div class="form-group">
                        <label for="temp_password" class="control-label">Asignada contraseña temporal</label>
                        <input id="temp_password" type="password" name="temp_password" class="form-control" required/>
                    </div>

                    <div class="form-group">
                        <label for="new_password" class="control-label">Nueva contraseña</label>
                        <input id="new_password" type="password" name="new_password" class="form-control" required/>
                    </div>

                    <div class="form-group">
                        <label for="confirm_password" class="control-label">Nueva contraseña (repetir)</label>
                        <input id="confirm_password" type="password" name="password_repeat" class="form-control" required onkeyup="checkPass(); return false;"
                        />
                        <br>
                        <span id="confirmMessage"></span>
                    </div>

                    <div class="form-group">
                        <div class="checkbox">
                            <label class="control-label">
                                <input type="checkbox" required/> Acepto
                                <a href="#">los terminos y condiciones</a>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit" onsubmit="return checkPass()">Crear nuevo usuario</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <div class="modal-footer"></div>

    <?php include '../config/base_script.php';?>
    <script src="assets/js/checkComparativePassword.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
</body>

</html>