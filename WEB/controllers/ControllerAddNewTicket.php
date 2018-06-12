<?php
/*
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
//ob_end_flush();

require '../config/base_head.php';
require '../config/base_script.php';
require '../config/Toastr.php';

require '../config/Ticket.php';
$ticket = new Ticket();

$msg = $class = null;


if (isset($_POST['btn_ClickedTicket']) == 'send'){
    if (isset($_POST) && !empty($_POST)) {
        $ticket->setDescrip_incidencia($_POST['descrip_incidencia']);
        $ticket->setArchivo_evidencia($_POST['archivo_evidencia']);
        $ticket->setCod_categoria($_POST['cod_categoria']);
        $ticket->setCod_estado_ticket($_POST['cod_estado_ticket']);
        $ticket->setCod_usuario($_POST['cod_usuario']);
        $ticket->setCod_equipo($_POST['cod_equipo']);

        $creadoNuevoRegistrodb = $ticket->createTicket();
        if ($creadoNuevoRegistrodb){
            $id_ticket = $ticket->getTicket();
            $stusT    = 'success';
            $titleT   = 'Bien hecho!';
            $msgT     = 'Los datos han sido guardados con exito.';
            $class    = "alert alert-success";
            $msg      = 'Ticket enviado con exito';
            

    

        }

    }
}