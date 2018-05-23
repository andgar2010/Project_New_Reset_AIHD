<?php
// ob_start();
// session_start();

require '../config/Database.php';
require '../model/Usuario.php';
$usuario = new Usuario();
    if (isset($_POST['email']) && isset($_POST['password'])) {
        echo '<pre>';
        var_dump($_POST);
        echo '</pre>';

        $usuario->setEmail($_POST['email']);
        $usuario->setPassword($_POST['password']);

        $email      = $usuario->getEmail();
        $password   = $usuario->getPassword();
        echo 'Ingresado usuario de email: '. $usuario->getEmail();
        echo '<br>Ingresado usuario de password: '. $usuario->getPassword() . "<br>";

        $query_sql = "SELECT * FROM usuario WHERE email = '". $email ."' AND password='" . $password."'";
        echo $query_sql;

        $output_sql = $db->query($query_sql);

        if ($row = $output_sql->num_rows == 0) {

            header('location: ../index.php?info=noFoundDB');

        } else {

            while ($obj = $output_sql->fetch_object()) {

                // echo '<pre>';
                // var_dump($obj);
                // echo '</pre>';

                // echo '<br>Ingresado usuario de email: '. $email;
                // echo '<br>Ingresado usuario de password: '. $password;
                // echo '<br>Se encontrado en BD';
                // echo '<br>BD usuario de email: '. $obj->email;
                // echo '<br>BD usuario de password: '. $obj->password;

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

            $_SESSION['nombre']     = $usuario->getNombre;
            $_SESSION['apellido']   = $usuario->getApellido;
            $_SESSION['cod_rol']    = $usuario->getCod_rol;

        $output_sql->close();
        header('location:../views/dashboard.php');
    }
    $db->close();

}







// echo '<pre>';
// var_dump($db->query($sql_query));
// echo '</pre>';



// if (isset($_POST['email']) && isset($_POST['password'])) {



//  else {

    //     while ($obj = $output_sql->fetch_object()) {

    //         echo 'Ingresado usuario de email: '. $email;
    //         echo '<br>Ingresado usuario de password: '. $password;
    //         echo '<br>Se encontrado en BD';
    //         echo 'BD usuario de email: '. $obj->email;
    //         echo '<br>BD usuario de password: '. $obj->password;

    //         // $usuario->id_usuario   = $db->sanitize($obj->id_usuario);
    //         // $usuario->cod_tipo_doc = $db->sanitize($obj->cod_tipo_doc);
    //         // $usuario->documento    = $db->sanitize($obj->documento);
    //         // $usuario->nombre       = $db->sanitize($obj->nombre);
    //         // $usuario->apellido     = $db->sanitize($obj->apellido);
    //         // $usuario->cod_genero   = $db->sanitize($obj->cod_genero);
    //         // $usuario->email        = $db->sanitize($obj->email);
    //         // $usuario->cod_area     = $db->sanitize($obj->cod_area);
    //         // $usuario->cod_cargo    = $db->sanitize($obj->cod_cargo);
    //         // $usuario->cod_rol      = $db->sanitize($obj->cod_rol);
    //         // $usuario->cod_estado   = $db->sanitize($obj->cod_estado);
    //     }

    //     $output_sql->close();
    // }
    // $db->close();

// }


// if ( isset($_POST['email']) && isset($_POST['password']) ) {
//     $email      = $usuario->sanitize($_POST['email']);
//     $password   = $usuario->sanitize($_POST['password']);

//     $query_sql = "SELECT * FROM usuario WHERE email = '$email'";

//     $output_sql = $db->query($sql_query);

//     if ($row = $output_sql->num_rows == 0) {
//         header('location: ../index.php?info=noFoundDB');
//     } else {

//         while ($obj = $output_sql->fetch_object()) {
//             $usuario->id_usuario   = $db->sanitize($obj->id_usuario);
//             $usuario->cod_tipo_doc = $db->sanitize($obj->cod_tipo_doc);
//             $usuario->documento    = $db->sanitize($obj->documento);
//             $usuario->nombre       = $db->sanitize($obj->nombre);
//             $usuario->apellido     = $db->sanitize($obj->apellido);
//             $usuario->cod_genero   = $db->sanitize($obj->cod_genero);
//             $usuario->email        = $db->sanitize($obj->email);
//             $usuario->cod_area     = $db->sanitize($obj->cod_area);
//             $usuario->cod_cargo    = $db->sanitize($obj->cod_cargo);
//             $usuario->cod_rol      = $db->sanitize($obj->cod_rol);
//             $usuario->cod_estado   = $db->sanitize($obj->cod_estado);
//         }

//         $output_sql->close();
//     }
//     $db->close();

//     echo 'Ingresado usuario de email: '. $email;
//     echo '<br>Ingresado usuario de password: '. $password;
//     echo '<br> dato de BD usuario email: '. $usuario->password;
//     echo '<br> dato de BD usuario password: '. $usuario->email;


//     // // Si encuentra igual registro de email y password de BD. y ingresado usuario && ($password == $passwordDB)
//     // if (($email == $usuario->email) && ($password == $usuario->password))  {
//     //     $_SESSION['nombre']     = $usuario->nombre;
//     //     $_SESSION['apellido']   = $usuario->apellido;
//     //     $_SESSION['cod_rol']    = $usuario->cod_rol;

//     //     header('location:../views/dashboard.php');

//     // } else {
//     //     header('location:../index.php?info=errorUserOrPass');
//     // }

// } else {
//     header('location:../index.php?info=noInput');
// }

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