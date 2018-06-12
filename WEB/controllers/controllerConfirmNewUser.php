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

define('ACTIVO', '2');

$usuario = new Usuario();
$msg = $class = null;


try
{
    if (isset($_POST) && !empty($_POST)) {

        if (isset($_POST['btnClickedUser']) == 'sendCreated') {

            $usuario->readSingleRecordUsuer($_POST['id_usuario']);

            if ($usuario->getNombre() == null) {
                //Si no encontrado registro de usuario en base de datos, redireccionar -> index.php con parametros
                //header("location: ../index.php?info=noFoundDBNewUser");
            } else {
                //Si encontrado registro de usuario en base de datos, llevar datos de usuario al variable
                $id_usuario             = $usuario->getId_usuario();
                $cod_tipo_doc           = $usuario->getCod_tipo_doc();
                $documento              = $usuario->getDocumento();
                $nombre                 = $usuario->getNombre();
                $apellido               = $usuario->getApellido();
                $cod_genero             = $usuario->getCod_genero();
                $email                  = $usuario->getEmail();
                $temp_password_DB       = $usuario->getPassword();
                $cod_area               = $usuario->getCod_area();
                $cod_cargo              = $usuario->getCod_cargo();
                $cod_rol                = $usuario->getCod_rol();
                $cod_estado_usuario     = $usuario->getCod_estado_usuario();
            }

            if (($temp_password_DB  == $_POST['temp_password_input']) && ($id_usuario == $_POST['id_usuario']) && ($documento == $_POST['documento'])) {
                //
                $usuario->setId_usuario($_POST['id_usuario']);
                $usuario->setDocumento($_POST['documento']);
                $usuario->setNombre($_POST['nombre']);
                $usuario->setApellido($_POST['apellido']);
                $usuario->setPassword($_POST['new_password']);
                $usuario->setCod_estado_usuario(ACTIVO);

                $confrimadaNuevoUsuarioDB = $usuario->confirmNewUser();
                if ($confrimadaNuevoUsuarioDB) {
                    header("location: ../index.php?info=welcome");
                } else {
                    $stusT  = 'error';
                    $titleT = 'Error';
                    $msg    = $msgT = 'No se pudieron insertar los datos de nuevo usuario confirmado';
                    $class  = 'alert alert-danger';
                    echo '<script>toastr.'.$stusT.'("'.$msgT.'", "'.$titleT.'", {timeOut: 6000, "closeButton": true, "progressBar": true})</script>';
                    echo '<div class="'.$class.'">'. $msg. '</div>';
                }

            } else {
                // echo 'No conacuerda contraseña temporal, ID, documento de usuario en BD y Ingresado por usuario.';
                // echo '<br> temp password DB: ';
                // var_dump($temp_password_DB);

                // echo '<br> temp password input: ';
                // var_dump($_POST['temp_password_input']);

                // echo '<br> ID Usuario DB: ';
                // var_dump($id_usuario);

                // echo '<br> ID Usuario Input: ';
                // var_dump($_POST['id_usuario']);

                // echo '<br> Documento DB: ';
                // var_dump($documento);

                // echo '<br> Documento Input: ';
                // var_dump($_POST['documento']);

                //No conacuerda contraseña temporal, ID, documento de usuario en BD y Ingresado por usuario.
                // ->redirecciona al index.php con parametros
                header("location: ../index.php?info=errorTempPass");
            }
        }
    }
}
catch (Exception $e)
{
    echo $e;
}
?>