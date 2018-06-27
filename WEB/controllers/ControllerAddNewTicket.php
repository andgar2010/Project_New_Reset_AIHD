<?php
/*
 * Modelo Clase Usuario
 *
 * @category Class
 * @package  Model
 * @author   Andres Garcia <afagrcia0479@misena.edu.co>
 * @author   Dayanne Agudelo <dsagudelo84@misena.edu.co>
 * @license  <a href="www.mit.org">mit</a>
 * @version  GIT:<ASD4A6S54DASD>
 * @link     www.github.com/andgar2010
 *
 * This Model of Class User
 * Source DB
 */
ob_start();
//ob_end_flush();

require '../config/base_head.php';
require '../config/base_script.php';
require '../config/Toastr.php';

require '../model/Ticket.php';
$ticket = new Ticket();
$msg = $class = null;

print_r($_POST);



if (isset($_POST['btn_ClickedTicket']) == 'send'){
    if (isset($_POST) && !empty($_POST)) {
        $ticket->setDescrip_incidencia($_POST['descrip_incidencia']);
        //$ticket->setArchivo_evidencia($_POST['archivo_evidencia']);
        $ticket->setCod_tipo_falla_ticket($_POST['cod_tipo_falla_ticket']);
        //$ticket->setCod_estado_ticket($_POST['cod_estado_ticket']);
        $ticket->setCod_usuario($_POST['cod_usuario']);
        $ticket->setCod_equipo($_POST['cod_equipo']);
        $creadoNuevoRegistrodb = $ticket->createTicket();
        
        if ($creadoNuevoRegistrodb){
            $id_ticket = $ticket->getId_ticket();
            $stusT    = 'success';
            $titleT   = 'Bien hecho!';
            $msgT     = 'Los datos han sido guardados con exito.';
            $class    = "alert alert-success";
            $msg      = 'Ticket enviado con exito';
            header("location: ../views/dashboard/indexDashboard.php?info=added&name=$id_ticket");
            //ob_end_flush();
        }else{
            $stusT = 'error';
            $titleT = 'Error';
            $msg = $msgT = 'No se pudo agregar el ticket';
            $class = 'alert alert-danger';
            header("location: ../views/mgmtTicket/viewAddTicket.php");            
        }
        if (isset($msg)&& isset($class)){
            echo '<script>toastr.'.$stusT.'("'.$msgT.'", "'.$titleT.'", {timeOut: 6000, "closeButton": true, "progressBar: true})</script>';
            echo '<div class="'.$class.'">'.
            $msg.
            '</div';
        }
    }
}
?>