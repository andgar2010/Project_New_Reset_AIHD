<?php
/*
 * Modelo Controlador Equipo
 *
 * @category Controlller
 * @package  Controller
 * @author   Andres Garcia <afagrcia0479@misena.edu.co>
 * @author   Camila Torres <lctorres14@misena.edu.co>
 * @license  <a href="www.mit.org">mit</a>
 * @version  GIT:<ASD4A6S54DASD>
 * @link     www.github.com/andgar2010
 *
 * This Model of Controller Equipo
 * Source DB
 */
ob_start();
//ob_end_flush();

require '../config/base_head.php';
require '../config/base_script.php';
require '../config/Toastr.php';

require '../model/Equipo.php';
$equipo    = new Equipo();

$msg = $class = null;
$passwordRandom = bin2hex(random_bytes(3));

print_r($_POST);

if (isset($_POST['btnClickedEquipo']) == 'send') {
    if (isset($_POST) && !empty($_POST)) {
        $equipo->setCod_tipo_equipo($_POST['cod_tipo_equipo']);
        $equipo->setSerial_equipo($_POST['serial_equipo']);
      
       

        $creadoNuevoRegistrodB = $equipo->createEquipo();
        if ($creadoNuevoRegistrodB) {
            $serial_equipo = $equipo->getSerial_equipo();
            $stusT  = 'success';
            $titleT = 'Bien hecho!';
            $msgT   = 'Los datos han sido guardados con éxito.';
            $class  = "alert alert-success";
            $msg    = 'Datos insertados con éxito';
            //header("location: ../views/viewListEquipo.php");
            header('location: ../views/mgmtDevice/viewListEquipo.php?info=added&name=$serial_equipo');
            //ob_end_flush();
        } else {
            $stusT  = 'error';
            $titleT = 'Error';
            $msg    = $msgT = 'No se pudieron insertar los datos';
            $class  = 'alert alert-danger';
            header("location: ../views/mgmtDevice/viewAddEquipo.php");
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