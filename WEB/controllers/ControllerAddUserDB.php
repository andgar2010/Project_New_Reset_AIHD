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

include '../model/Usuario.php';
$usuario = new Usuario();
$msg = $class = null;
$passwordRandom = bin2hex(random_bytes(5));

if (isset($_POST) && !empty($_POST)) {
    if (isset($_POST['send'])) {
        $usuario->tipo_doc      = $usuario->sanitize($_POST['tipo_doc']);
        $usuario->documento     = $usuario->sanitize($_POST['num_cedula']);
        $usuario->nombre        = $usuario->sanitize($_POST['nombre']);
        $usuario->apellido      = $usuario->sanitize($_POST['apellido']);
        $usuario->cod_genero    = $usuario->sanitize($_POST['cod_genero']);
        $usuario->email         = $usuario->sanitize($_POST['email']);
        $usuario->cod_area      = $usuario->sanitize($_POST['cod_area']);
        $usuario->cod_cargo     = $usuario->sanitize($_POST['cod_cargo']);
        $usuario->cod_rol       = $usuario->sanitize($_POST['cod_rol']);
        $usuario->password      = $usuario->sanitize($passwordRandom);
        //$usuario->id         = $_con->sanitize($_POST['id']);
        //$fecha_creado =  ;//Format Timedate BD '2018-05-13 16:40:39'
        //$usuario->cod_estado = $_con->sanitize($_POST['cod_estado']);

        $creadoNuevoRegistrodB = $usuario->createUser();
        if ($creadoNuevoRegistrodB) {
            $stusT  = 'success';
            $titleT = 'Bien hecho!';
            $msgT   = 'Los datos han sido guardados con éxito.';
            $class  = "alert alert-success";
            $msg    = 'Datos insertados con éxito';
        } else {
            $stusT  = 'error';
            $titleT = 'Error';
            $msg    = $msgT = 'No se pudieron insertar los datos';
            $class  = 'alert alert-danger';
        }

        if (isset($msg) && isset($class)) {
            echo '<script>toastr.'.$stusT.'("'.$msgT.'", "'.$titleT.'", {timeOut: 6000, "closeButton": true, "progressBar": true})</script>';
            echo '<div class="'.$class.'">'.
            $msg.
            '</div>';
        }
    }
}
?>