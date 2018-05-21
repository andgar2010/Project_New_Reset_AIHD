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

require '../model/Usuario.php';
$usuario = new Usuario();

$msg = $class = null;
if (isset($_POST['send'])) {
    if (isset($_POST) && !empty($_POST)) {
        $id_usuario         = $_POST['id_usuario'] ?? '';
        $cod_tipo_doc       = $_POST['cod_tipo_doc'] ?? '';
        $documento          = $_POST['documento'] ?? '';
        $nombre             = $_POST['nombre'] ?? '';
        $apellido           = $_POST['apellido'] ?? '';
        $cod_genero         = $_POST['cod_genero'] ?? '';
        $email              = $_POST['email'] ?? '';
        $cod_area           = $_POST['cod_area'] ?? '';
        $cod_cargo          = $_POST['cod_cargo'] ?? '';
        $cod_rol            = $_POST['cod_rol'] ?? '';
        $cod_estado_usuario = $_POST['$cod_estado_usuario'] ?? '';

        $actualizadoUsuarioDB = $usuario->updateUser($id_usuario, $cod_tipo_doc, $documento, $nombre, $apellido, $cod_genero, $email, $cod_area, $cod_cargo, $cod_rol, $cod_estado_usuario);
        if ($actualizadoUsuarioDB) {
            header("location: ./viewListUsers.php?info=updated&name=$usuario->nombre");
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