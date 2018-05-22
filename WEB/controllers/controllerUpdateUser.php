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
if (isset($_POST['btnClickedUser']) == 'sendUpdate') {
    if (isset($_POST) && !empty($_POST)) {
        $usuario->setId_usuario($_POST['id_usuario']);
        $usuario->setCod_tipo_doc($_POST['cod_tipo_doc']);
        $usuario->setDocumento($_POST['documento']);
        $usuario->setNombre($_POST['nombre']);
        $usuario->setApellido($_POST['apellido']);
        $usuario->setCod_genero($_POST['cod_genero']);
        $usuario->setEmail($_POST['email']);
        $usuario->setCod_area($_POST['cod_area']);
        $usuario->setCod_cargo($_POST['cod_cargo']);
        $usuario->setCod_rol($_POST['cod_rol']);
        $usuario->setCod_estado_usuario($_POST['cod_estado_usuario']);

        //$actualizadoUsuarioDB = $usuario->updateUser($id_usuario, $cod_tipo_doc, $documento, $nombre, $apellido, $cod_genero, $email, $cod_area, $cod_cargo, $cod_rol, $cod_estado_usuario);
        $actualizadoUsuarioDB = $usuario->updateUser();
        if ($actualizadoUsuarioDB) {
            $name = $usuario->getNombre();
            header("location: ../views/viewListUsers.php?info=updated&name=$name");
            // $stusT  = 'success';
            // $titleT = 'Bien hecho!';
            // $msgT   = 'Los datos han sido guardados con éxito.';
            // $class  = "alert alert-success";
            // $msg    = 'Datos insertados con éxito';
        } else {
            $stusT  = 'error';
            $titleT = 'Error';
            $msg    = $msgT = 'No se pudieron insertar los datos';
            $class  = 'alert alert-danger';
            echo '<script>toastr.'.$stusT.'("'.$msgT.'", "'.$titleT.'", {timeOut: 6000, "closeButton": true, "progressBar": true})</script>';
            echo '<div class="'.$class.'">'. $msg. '</div>';
        }
        // if (isset($msg) && isset($class)) {
        // }
    }
}
?>