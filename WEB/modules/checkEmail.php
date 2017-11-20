<?php
session_start();

if (isset($_POST['email']))
{
    include './conexion.php';
    
    $Email = mysqli_real_escape_string($conexion, $_POST['email']);
    $sqlQuery = 'SELECT * FROM usuario WHERE = "' .$Email. "'";
    $EjecutarQuery = $conexion->query($sqlQuery) or die('Hubo un error al consultar al correo ' . mysqli_error($conexion));
    mysqli_close($conexion);
    header('location: ../index.php');
}
?>