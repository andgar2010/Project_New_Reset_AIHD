<?php
session_start();

if (isset($_POST['email'])) {
    include './conexion.php';
    
    $Email = mysqli_real_escape_string($conexion, $_POST['email']);
    
    $sqlQuery = 'SELECT * FROM usuario WHERE = "' .$Email. "'";
    
}

?>