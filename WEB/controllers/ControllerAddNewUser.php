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

//ob_start();
require '../config/base_script.php';
require '../config/base_head.php';
require '../config/Toastr.php';
require '../model/Usuario.php';
$usuario = new Usuario();

$msg = $class = null;
$passwordRandom = bin2hex(random_bytes(3));

// if (headers_sent()) {
//     // las cabeceras ya se han enviado, no intentar añadir una nueva
// } else {
    // es posible añadir nuevas cabeceras HTTP
    if (isset($_POST['send'])) {
        if (isset($_POST) && !empty($_POST)) {
            $usuario->setCod_tipo_doc   = $_POST['cod_tipo_doc'];
            $usuario->setDocumento      = $_POST['num_cedula'];
            $usuario->setNombre         = $_POST['nombre'];
            $usuario->setApellido       = $_POST['apellido'];
            $usuario->setCod_genero     = $_POST['cod_genero'];
            $usuario->setEmail          = $_POST['email'];
            $usuario->setCod_area       = $_POST['cod_area'];
            $usuario->setCod_cargo      = $_POST['cod_cargo'];
            $usuario->setCod_rol        = $_POST['cod_rol'];
            $usuario->setPassword       = $passwordRandom;
            // $usuario->password      = $usuario->sanitize(password_hash($passwordRandom, PASSWORD_DEFAULT));
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
                //header("location: ../views/viewListUsers.php");
                header("location: ../views/viewListUsers.php?info=added&name=$usuario->nombre");
                ob_end_flush();
            } else {
                header("location: ../views/viewAddUser.php");
                // $stusT  = 'error';
                // $titleT = 'Error';
                // $msg    = $msgT = 'No se pudieron insertar los datos';
                // $class  = 'alert alert-danger';
            }

            // if (isset($msg) && isset($class)) {
            //     echo '<script>toastr.'.$stusT.'("'.$msgT.'", "'.$titleT.'", {timeOut: 6000, "closeButton": true, "progressBar": true})</script>';
            //     echo '<div class="'.$class.'">'.
            //     $msg.
            //     '</div>';
            // }
        }
    }
// }
?>