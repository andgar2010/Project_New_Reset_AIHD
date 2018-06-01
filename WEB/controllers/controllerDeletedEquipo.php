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
ob_start();
require '../model/Equipo.php';
$equipo = new Equipo();
if (isset($_GET['btnClickedEquipo']) == 'delete') {
    $id = intval($_GET['nik']);
    $name =$_GET['name'];
    $result = $equipo->desactiveEquipo($id);

    if ($result) {
        header("location: ../views/listEquipo.php?info=deleted&name=$name");
    } else {
        header('location: ../views/listEquipo.php?info=errorDeleted');
    }

}


?>