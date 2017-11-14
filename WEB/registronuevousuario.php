<?php
if(isset($_POST['num_cedula']) and isset($_POST['nombre']) and isset($_POST['apellido']) and isset($_POST['num_tel']))
{
    include "conexion.php";
    $Num_cedula = mysqli_real_escape_string($conexion, $_POST['num_cedula']);
    $Nombre = mysqli_real_escape_string($conexion,$_POST['nombre']);
    $Apellido = mysqli_real_escape_string($conexion,$_POST['apellido']);
    $Num_tel = mysqli_real_escape_string($conexion, $_POST['num_tel']);
    $Query = 'INSERT INTO usuario(documento, nombre, apellido, telefono) values ("'.$Num_cedula.'", "'.$Nombre.'", "'.$Apellido.'", "'.$Num_tel.'")';
    $EjecutarQuery = $conexion->query($Query) or die ('Hubo un error al registrar al Usuario '.mysqli_error($conexion)); 
    mysqli_close($conexion);
    header('location: index.html');
}


?>