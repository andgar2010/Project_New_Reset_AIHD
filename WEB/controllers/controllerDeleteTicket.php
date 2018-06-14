<?php 
/**
 * Controller Delete ticket
 * 
 * @category Class
 * @package  model
 * @author   Andres Garcia <afagrcia0479@misena.edu.co>
 * @author   Dayanne Agudelo <dsagudelo84@misena.edu.co
 * @license  <a href="www.mit.org">mit</a>
 * @version  GIT:<ASD4A6S54DASD>
 * @link     www.github.com/andgar2010
 *
 *this controller of Class ticket
 * Source DB
 */
ob_start();
require '../model/Ticket.php';
$ticket = new Ticket();
if (isset($_GET['btnClickedUser']) == 'delete'){
    $id = intval($_GET['nik']);
    $serial =$_GET['serial'];
    $result = $ticket->archivarTicket($id);

    if ($result){
        header("location: ../views/dashboard/indexDashboard.php?info=deleted&serial=$serial");
        // header("location: ../views/mgmtTicket/viewListTicket.php?info=deleted&serial=serial");
    }else{
        header("location: ../views/dashboard/indexDashboard.php?info=errorDeleted");
        // header('location: ../views/mgmtTicket/viewListTciket.php?info=errorDeleted');
    }
}
?>