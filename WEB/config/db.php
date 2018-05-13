<?php
$dbhost = 'localhost';  //  nombre de ruta base de datos
$dbuser = 'root';       //  nombre de usuario de base de datos
$dbpass = '';           //  contraseña de usuario de base de datos
$dbname = 'newreset';   //  nombre de base de datos que utiliza

$conx   = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if (mysqli_connect_errno())
{
    die('<br>
        <strong>Detalle Mensaje:</strong>
        <br>Conexión falló a la base de datos MariaDB:<br>'
        . mysqli_connect_error() .
        '<br><em>Código error:</em> ' . mysqli_connect_errno());
}
$conx->set_charset('utf8');


//magic quotes logic
if (get_magic_quotes_gpc())
{
    function stripslashes_deep($value)
    {
        $value = is_array($value) ?
        array_map('stripslashes_deep', $value) :
        stripslashes($value);
        return $value;
    }
    $_POST = array_map('stripslashes_deep', $_POST);
    $_GET = array_map('stripslashes_deep', $_GET);
    $_COOKIE = array_map('stripslashes_deep', $_COOKIE);
    $_REQUEST = array_map('stripslashes_deep', $_REQUEST);
}

?>