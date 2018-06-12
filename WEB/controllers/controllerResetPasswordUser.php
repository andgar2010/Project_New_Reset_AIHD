<?php
/**
 * Modelo Clase Usuario
 *
 * @category Class
 * @package  Model
 * @author   Andres Garcia <afagrcia0479@misena.edu.co>
 * @license  <a href="www.mit.org">mit</a>
 * @version  GIT:<ASD4A6S54DASD>
 * @link     www.github.com/andgar2010
 *
 * This Model of Class User
 * Source DB
 */

ob_start();

require '../config/base_head.php';
require '../config/base_script.php';
require '../config/Toastr.php';
require '../model/Usuario.php';

$usuario = new Usuario();
$msg = $class = null;


try
{
    if (isset($_POST) && !empty($_POST)) {

        if (isset($_POST['btnClickedUser']) == 'sendReseted') {

            $usuario->readSingleRecordUsuer($_POST['id_usuario']);

            if ($usuario->getNombre() == null) {
                //Si no encontrado registro de usuario en base de datos, redireccionar -> index.php con parametros
                //header("location: ../index.php?info=noFoundDBNewUser");
            } else {
                //Si encontrado registro de usuario en base de datos, llevar datos de usuario al variable
                $id_usuario             = $usuario->getId_usuario();
                $documento              = $usuario->getDocumento();
                $cod_confirmChangePsw   = $usuario->getPassword();
            }

            if (($cod_confirmChangePsw  == $_POST['cod_confirm']) && ($id_usuario == $_POST['id_usuario']) && ($documento == $_POST['documento'])) {
                //
                $usuario->setId_usuario($_POST['id_usuario']);
                $usuario->setDocumento($_POST['documento']);
                $usuario->setPassword($_POST['new_password']);
                $usuario->setCod_estado_usuario(ACTIVO);

                $cambiadaNuevoClaveUsuario = $usuario->resetPasswordUser();
                if ($cambiadaNuevoClaveUsuario) {
                    header("location: ../index.php?info=resetPsw");
                } else {
                    $stusT  = 'error';
                    $titleT = 'Error';
                    $msg    = $msgT = 'No se pudieron insertar los contraseña restablecido';
                    $class  = 'alert alert-danger';
                    echo '<script>toastr.'.$stusT.'("'.$msgT.'", "'.$titleT.'", {timeOut: 6000, "closeButton": true, "progressBar": true})</script>';
                    echo '<div class="'.$class.'">'. $msg. '</div>';
                }

            } else {
                //No conacuerda codigo de confirmacion restablecer lac contraseña, ID, documento de usuario en BD y Ingresado por usuario.
                // ->redirecciona al index.php con parametros
                header("location: ../index.php?info=errorChangePass");
            }
        }
    }
}
catch (Exception $e)
{
    echo $e;
}
?>