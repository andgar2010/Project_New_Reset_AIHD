<?php
session_start();

require '../config/Database.php';
require '../model/Usuario.php';
$usuario = new Usuario();

if ( isset($_POST['email']) && isset($_POST['password']) ) {
    $email      = $usuario->sanitize($_POST['email']);
    $password   = $usuario->sanitize($_POST['password']);

    $query_sql = "SELECT * FROM usuario WHERE email = '$email'";

    $output_sql = $db->query($sql_query);

    if ($row = $output_sql->num_rows == 0) {
        header('location: ../index.php?info=noFoundDB');
    } else {

        while ($obj = $output_sql->fetch_object()) {
            $usuario->id_usuario   = $db->sanitize($obj->id_usuario);
            $usuario->cod_tipo_doc = $db->sanitize($obj->cod_tipo_doc);
            $usuario->documento    = $db->sanitize($obj->documento);
            $usuario->nombre       = $db->sanitize($obj->nombre);
            $usuario->apellido     = $db->sanitize($obj->apellido);
            $usuario->cod_genero   = $db->sanitize($obj->cod_genero);
            $usuario->email        = $db->sanitize($obj->email);
            $usuario->cod_area     = $db->sanitize($obj->cod_area);
            $usuario->cod_cargo    = $db->sanitize($obj->cod_cargo);
            $usuario->cod_rol      = $db->sanitize($obj->cod_rol);
            $usuario->cod_estado   = $db->sanitize($obj->cod_estado);
        }

        $output_sql->close();
    }
    $db->close();

    // Si encuentra igual registro de email y password de BD. y ingresado usuario && ($password == $passwordDB)
    if ($email == $usuario->email)  {
        $_SESSION['nombre']     = $usuario->nombre;
        $_SESSION['apellido']   = $usuario->apellido;
        $_SESSION['cod_rol']    = $usuario->cod_rol;

        header('location:../views/dashboard.php');

    } else {
        header('location:../index.php?info=errorUserOrPass');
    }

} else {
    header('location:../index.php?info=noInput');
}

// if (isset($_POST['email']))
// {
//     include './conexion.php';

//     $Email = mysqli_real_escape_string($conexion, $_POST['email']);
//     $sqlQuery = 'SELECT * FROM usuario WHERE = "' .$Email. "'";
//     $EjecutarQuery = $conexion->query($sqlQuery) or die('Hubo un error al consultar al correo ' . mysqli_error($conexion));
//     mysqli_close($conexion);
//     header('location: ../index.php');
// }
?>