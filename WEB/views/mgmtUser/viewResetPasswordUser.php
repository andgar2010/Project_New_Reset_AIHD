<?php
/**
 * Modelo Clase Usuario
 *
 * @category View
 * @package  GestionUsuarios
 * @author   Andres Garcia <afagrcia0479@misena.edu.co>
 * @license  <a href="www.mit.org">mit</a>
 * @version  GIT:<ASD4A6S54DASD>
 * @link     www.github.com/andgar2010
 *
 * Editar cuenta de usuario MVC Source DB
 */

if (isset($_GET['id'])) {

    $id_usuario = intval($_GET['id']);
    include '../model/Usuario.php';
    $usuario = new Usuario();
    $usuario->readSingleRecordUsuer($id_usuario);

    if ($usuario->getNombre() == null) {

        //Si no encontrado registro de usuario en base de datos, redireccionar -> index.php con parametros
        header("location: ../index.php?info=noFoundDBNewUser");

    } else {

        //Si encontrado registro de usuario en base de datos, llevar datos de usuario al formulario
        $id_usuario             = $usuario->getId_usuario();
        $cod_tipo_doc           = $usuario->getCod_tipo_doc();
        $documento              = $usuario->getDocumento();
        $nombre                 = $usuario->getNombre();
        $apellido               = $usuario->getApellido();
        $cod_genero             = $usuario->getCod_genero();
        $email                  = $usuario->getEmail();
        $temp_password          = $usuario->getPassword();
        $cod_area               = $usuario->getCod_area();
        $cod_cargo              = $usuario->getCod_cargo();
        $cod_rol                = $usuario->getCod_rol();
        $cod_estado_usuario     = $usuario->getCod_estado_usuario();
    }

} else {

    header('location: ../index.php?info=noFoundDBNewUser');
}
?>

    <!DOCTYPE html>
    <html lang="es">

    <head>
        <!-- HTML Meta Tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Confirmar nuevo del usuario</title>
        <meta name="description" content="Confirmar nuevo usuario de NEW RESET A.H.I.D.">
        <!-- End HTML Meta Tags -->

        <?php   require '../config/base_head.php';
            //require '../config/googleAnaytics.php';?>

    </head>

    <body>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="section-title modal-title text-center">Restablecer la contraseña</h1>
                </div>
                <hr>
                <div class="modal-body">

                <form method="post" action="../controllers/controllerResetPasswordUser.php" class="">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                        <?php echo'
                                <input type="hidden" name="id_usuario" id="id_usuario" class="form-control" value="'.$id_usuario.'">
                                <input type="hidden" id="documento" name="documento" value="'.$documento.'" class="form-control">';
                        ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-5"></div>
                                    <div class="col-sm-5">
                                        <label for="password" class="control-label text-center">Contraseña</label>
                                    </div>
                                </div>
                            <div class="row">
                                    <div class="col-sm-2"></div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <input id="cod_confirm" type="text" name="cod_confirm" placeholder="Codigo de confirmación para restablecer la contraseña por enviado a su correo" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input id="new_password" type="password" name="new_password" placeholder="Nueva contraseña" class="form-control" title="La contraseña debe tener minimo 7 caracteres, una letra mayúscula, una letra minúscula, un numero y un simbolo."  pattern="[a-zA-Z0-9]{7,30}"/>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input id="confirm_password" type="password" name="new_password_repeat" placeholder="Nueva contraseña (repetir)" class="form-control" required onkeyup="checkPass(); return false;" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-10">
                                        <span id="confirmMessage"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 pull-right">
                            <button id="enviar" name="btnClickedUser" value="sendReseted" type="submit" class="btn btn-block btn-success pmd-z-depth-3 pmd-ripple-effect" onsubmit="return checkPass()">Cambiar la contraseña</button>
                        </div>
                        &nbsp;
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 pull-right">
                            <a id="listUsers" href="../index.php">
                                <button id="cancelar" name="cancelar" type="button" class="btn btn-block btn-danger pmd-z-depth-3 pmd-ripple-effect">Cancelar</button>
                            </a>
                        </div>

                    </div>
                    <br>
                </form>
            </div>
        </div>
    </div>
    <div class="modal-footer"></div>

    <?php require '../config/base_script.php';?>

    <script src="../assets/js/checkComparativePassword.js"></script>

</body>
</html>