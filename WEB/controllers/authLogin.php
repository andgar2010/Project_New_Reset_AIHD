<?php
// ob_start();
session_start();

require '../config/Database.php';
require '../model/Usuario.php';
$usuario = new Usuario();

if (isset($_POST['email']) && isset($_POST['password'])) {

    // echo '<pre>';
    // var_dump($_POST);
    // echo '</pre>';

    $usuario->setEmail($_POST['email']);
    $usuario->setPassword($_POST['password']);

    $email      = $usuario->getEmail();
    $password   = $usuario->getPassword();

    // echo 'Ingresado usuario de email: '. $usuario->getEmail();
    // echo '<br>Ingresado usuario de password: '. $usuario->getPassword() . "<br>";

    $query_sql = "SELECT * FROM usuario WHERE email = '". $email ."' AND password='" . $password."'";

    $output_sql = $db->query($query_sql);

    if ($row = $output_sql->num_rows == 0) {

        header('location: ../index.php?info=noFoundDB');

    } else {

        while ($obj = $output_sql->fetch_object()) {
            $usuario->setId_usuario($obj->id_usuario);
            $usuario->setCod_tipo_doc($obj->cod_tipo_doc);
            $usuario->setDocumento($obj->documento);
            $usuario->setNombre($obj->nombre);
            $usuario->setApellido($obj->apellido);
            $usuario->setCod_genero($obj->cod_genero);
            $usuario->setEmail($obj->email);
            $usuario->setCod_area($obj->cod_area);
            $usuario->setCod_cargo($obj->cod_cargo);
            $usuario->setCod_rol($obj->cod_rol);
            $usuario->setCod_estado_usuario($obj->cod_estado_usuario);
        }

        $output_sql->close();

    }
    $db->close();
}

$nombresCompletos = $usuario->getNombre().' '.$usuario->getApellido();

$_SESSION['nombre']                 = $usuario->getNombre();
$_SESSION['apellido']               = $usuario->getApellido();
$_SESSION['cod_rol']                = $usuario->getCod_rol();
$_SESSION['cod_estado_usuario']     = $usuario->getCod_estado_usuario();
$_SESSION['nombres_completos']      = $nombresCompletos;

switch ($_SESSION['cod_estado_usuario']) {
case '1': // -- cod_estado_usuario 1 Inactivo --
    header('location: ../index.php?info=stuInactive');
    break;
// -- End cod_estado_usuario 1 Inactivo --

case '2': // -- cod_estado_usuario 2 Activo --

    switch ($_SESSION['cod_rol']) {
    case '1'://SuperAdministrador
        header('location:../views/dashboard.php');
        break;
    case '2'://Tecnico
        header('location:../views/viewListUsers.php');
        break;
    case '3'://Administrativo
        header('location:../views/viewAddUser.php');
        break;
    case '4'://Profesor
        header('location:../views/listTicket.php');
        break;
    }//End Switch cod_rol

    break;
// -- End cod_estado_usuario 2 Activo --

default:
    # code...
    break;
}
?>