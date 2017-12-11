<?php

session_start();
if (isset($_POST['email'])and isset($_POST['password'])) {
    include 'conexion.php';
    $emailUsuario = mysqli_real_escape_string($conexion, $_POST['email']);
    $passwordUsuario = mysqli_real_escape_string($conexion, $_POST['password']);
    $comprobacionEmail = 'select * from usuario where correo="' . $emailUsuario . '"';
    $comprobacion = mysqli_query($conexion, $comprobacionEmail);

    if ($comprobacion->num_rows > 0) {
        $consulta_bd = mysqli_query($conexion, 'select password_us from usuario where correo="' . $emailUsuario . '"');
        $recoger_dato = mysqli_fetch_assoc($consulta_bd);

        $comprobacion_de_password = password_verify($passwordUsuario, $recoger_dato['password']);
        if ($comprobacion_de_password) {
            $_SESSION['email'] = $emailUsuario;
            $nombreUsu = 'select * from usuario where correo ="' . $emailUsuario . '"';
            $ejeNomU = $conexion->query($nombreUsu);
            $nombre = mysqli_fetc_assoc($ejeNomU);
            $_SESSION['name'] = $nombre['nombreUsu'];
            $_SESSION['ape'] = $nombre['apellidoUsu'];
            header('location: dashboard.php');
        } else {
            header('location: datosInvalidos.php');
        }
    } else {
        header('location: sinRegistro.php');
    }
} else {
    header('location: ../index.php');
}
?>
