<?php
session_start();
if (isset($_POST['email'])and isset($_POST['password'])) 
{
    include 'conexion.php';
    $emailUsuario             = myqsli_real_escape_string($connection, $_POST['email']);
    $passwordUsuario          = myqsli_real_escape_string($connection, $_POST['password']);
    $comprobacionEmail        = 'select * from usuario where correo="'. $emailUsuario.'"';
    $comprobacion             = $conexion->query($comprobacionEmail);
    
    if ($comprobacion->num_rows > 0)
    {
        $consulta_bd                   =mysqi_query($conexion, 'select password from usuario where email="' . $emailUsuario.'"');
        $recoger_dato                  =mysqi_fetch_assoc($consulta_bd);
        
        $comprobacion_de_password      = password_verify($passwordUsuario, $recoger_dato['password']);
        if ($comprobacion_de_password)
        {
            $_SESSION['email']  =$emailUsuario;
            $nombreUsu ='select * from usuario where correo ="' . $emailUsuario . '"';
            $ejeNomU  = $connection->quey($nombreUsu);
            $nombre  =mysqi_fetc_assoc($ejeNomU);
            $_SESSION['name']  = $nombre['nombreUsu'];
            $_SESSION['ape']   =$nombre['apellidoUsu'];
            header('location:index.php');
            
        }else{
            header('location:datosInvalidos.php');
        }
        
    }else{
        header('location: sinRegistro.php');
    }
} else{
    header('location: login.php');
}
?>