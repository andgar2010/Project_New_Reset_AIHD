<?php
/**
 * Modelo Clase Usuario
 *
 * @category Class
 * @package  Model
 * @author   Andres Garcia <afagrcia0479@misena.edu.co>
 * @author   Dayanne agudelo <dsagudelo84@misena.edu.co>
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
 require '../model/Ticket.php';
 $ticket = new Ticket();

 $msg = $class = null;
 if(isset($_POST['btnClickerUser']) == 'sendUpdate'){
     if(isset($_POST) && !empty($_POST)){
         $ticket->setId_ticket($_POST['id_ticket']);
         $ticket->setSerial_equipo($_POST['serial_equipo']);
         $ticket->setId_tipo_equipo($_POST['id_tipo_equipo']);
         $ticket->setDescrip_incidencia($_POST['descrip_incidencia']);
         $ticket->setArchivo_evidencia($_POST['archivo_evidencia']);

         //$actualizadoTicketDB = $ticket->updateTicket($id_ticket, $serial_equipo, $id_tipo_equipo, $decrip_incidencia, $archivo_evidencia);
         $actualizadoTicketDB = $ticket->updateTicket();
         if ($actualizadoTicketDB){
             header("location: ../views/dashboard/indexDashboard.php?info=updated&serial=$serial");
             // header("location: ../views/mgmtTicket/viewListTicket.php?info=updated&serial=$serial");
            // $stusT  = 'success';
            // $titleT = 'Bien hecho!';
            // $msgT   = 'Los datos han sido guardados con éxito.';
            // $class  = "alert alert-success";
            // $msg    = 'Datos insertados con éxito';
         }else{
             $stusT  = 'error';
             $titleT = 'Error';
             $msg    = $msgT = 'No se insertaron los datos';
             $class  = 'alert alert-danger';
             echo '<script>toastr.'.$stusT.'("'.$msgT.'","'.$titleT.'", {timeOut: 6000, "closeButton": true, "progressBar": true})</script>';
             echo '<div class="'.$class.'">'.$msg.'</div>';
         }
         // if (isset($msg) && isset($class)) {
        // }
     }
 }
 ?>