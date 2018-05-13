<?php

$registrado = FALSE;

if
 (isset($_POST['num_cedula']) and
        isset($_POST['tipo_doc'] and
        isset($_POST['nombre']) and
        isset($_POST['apellido']) and
        isset($_POST['email']) and
        isset($_POST['genero']) and
        isset($_POST['cod_area']) and
        isset($_POST['cod_cargo']) and
        isset($_POST['cod_rol']) and
        isset($_POST['send']) 
        )
) {
    include "conexion.php";



    if ($registrado) {
        

        // ya registrado base de datos
        
    } else {

        $Num_cedula = mysqli_real_escape_string($conexion, $_POST['num_cedula']);
        $Nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
        $Apellido = mysqli_real_escape_string($conexion, $_POST['apellido']);
        $Num_tel = mysqli_real_escape_string($conexion, $_POST['num_tel']);
        $Email = mysqli_real_escape_string($conexion, $_POST['email']);
        $Password = password_hash($_POST['Password'], PASSWORD_DEFAULT);
        $TipoDoc = mysqli_real_escape_string($conexion, $_POST['tipoDocumento']);
//    
//    if($TipoDoc == "1")
//    {
//        $td = 1;
//    }else if($TipoDoc == "2")
//    {
//        $td = 2;
//    }else if($TipoDoc == "3")
//    {
//        $td = 3;
//    }

        $Query = 'INSERT INTO usuario(documento, nombre, apellido, telefono, correo, password_us, tipodocumento_idtipodocumento) values ("'
                . $Num_cedula . '", "'
                . $Nombre . '", "'
                . $Apellido . '", "'
                . $Num_tel . '","'
                . $Email . '","'
                . $Password . '","'
                . $TipoDoc . '")';
        $EjecutarQuery = $conexion->query($Query) or die('Hubo un error al registrar al Usuario ' . mysqli_error($conexion));
        mysqli_close($conexion);
        header('location: ../index.php');
    }
} else {
    header('location: ../index.php');
}
?>