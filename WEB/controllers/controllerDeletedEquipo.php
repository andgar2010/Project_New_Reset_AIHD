<?php
/**
 * Modelo Controller Equipo
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
require '../model/Equipo.php';
$equipo = new Equipo();
if (isset($_GET['btnClickedEquipo']) == 'delete') {
    $id = intval($_GET['nik']);
    $name =$_GET['name'];
    $result = $equipo->desactiveEquipo($id);

    if ($result) {
        header("location: ../views/viewListEquipo.php?info=deleted&name=$name");
    } else {
        header('location: ../views/viewListEquipo.php?info=errorDeleted');
    }

}


?>