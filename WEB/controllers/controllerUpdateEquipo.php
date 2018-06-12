<?php
/**
 * Modelo Controlador Equipo
 *
 * @category Controller
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

require '../config/base_head.php';
require '../config/base_script.php';
require '../config/Toastr.php';
require '../model/Equipo.php';
$equipo = new Equipo();

$msg = $class = null;
if (isset($_POST['btnClickedUser']) == 'sendUpdate') {
    if (isset($_POST) && !empty($_POST)) {
        $equipo->setId_equipo($_POST['id_equipo']);
        $equipo->setCod_tipo_equipo($_POST['cod_tipo_equipo']);
        $equipo->setSerial_equipo($_POST['serial_equipo']);
        $equipo->setCod_estado_equipo($_POST['cod_estado_equipo']);

        //$actualizadoEquipoDB = $equipo->updateEquipo($id_equipo, $cod_tipo_equipo, $cod_estado_equipo);
        $actualizadoEquipoDB = $equipo->updateEquipo();
        if ($actualizadoEquipoDB) {
            $serial_equipo = $equipo->getSerial_equipo();
            header("location: ../../views/mgmtDevice/viewListEquipo.php?info=updated&name=$name");
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