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
require '../model/Usuario.php';
$usuario = new Usuario();
if (isset($_GET['btnClickedUser']) == 'delete') {
    $id = intval($_GET['nik']);
    $name =$_GET['name'];
    $result = $usuario->desactiveUser($id);

    if ($result) {
        header("location: ../views/viewListUsers.php?info=deleted&name=$name");
    } else {
        header('location: ../views/viewListUsers.php?info=errorDeleted');
    }

}


?>