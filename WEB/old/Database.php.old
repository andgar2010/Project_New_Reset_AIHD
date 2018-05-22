<?php
/**
 * Modelo Clase Usuario
 *
 * @category Class
 * @package  Model
 * @author   Andres Garcia <afagrcia0479@misena.edu.co>
 * @license  <a href="www.mit.org">mit</a>
 * @Release  GIT:<ASD4A6S54DASD>
 * @link     www.github.com/andgar2010
 *
 * This Model of Class User
 * Source DB
 */
Class Database
{
    private $_con;
    private $_dbhost    = 'localhost';  //  nombre de ruta base de datos
    private $_dbuser    = 'root';       //  nombre de usuario de base de datos
    private $_dbpass    = '';           //  contraseña de usuario de base de datos
    private $_dbname    = 'newreset';   //  nombre de base de datos que utiliza

    /**
     * This Construct Class Database
     */
    public function __construct()
    {
        $this->connectDb();
    }

    /**
     * This Method Connect to DB
     *
     * @return con object establecido conexion
     */
    public function connectDb()
    {

            $this->_con = mysqli_connect($this->_dbhost, $this->_dbuser, $this->_dbpass, $this->_dbname);
            if (mysqli_connect_error()) {
                $stusT  = 'error';
                $titleT = 'Error';
                $msg    = $msgT = 'No pudo conexión con el base de datos';
                $class  = 'alert alert-danger';
                // echo '<script>toastr.'.$stusT.'("'.$msgT.'", "'.$titleT.'", {timeOut: 6000, "closeButton": true, "progressBar": true})</script>';
                echo '<div class="'.$class.' text-center">'. $msg.'</div>';
                die('Conexión a la base de datos falló: ' . mysqli_connect_error() . ' código error: ' . mysqli_connect_errno());
        }
    }

    /**
     * Function sanitize
     *
     * $var @param String
     * This inpur string
     *
     * @return String
     * $vareturn vareturn
     */
    function sanitize($var)
    {
        return mysqli_real_escape_string($this->_con, $var);
    }

    function createUser($tipo_doc, $documento, $nombre, $apellido, $cod_genero, $email, $cod_area, $cod_cargo, $cod_rol)
    {
        $sql_insert = "INSERT INTO `usuario`
                            (`tipo_doc`, `documento`, `apellido`, `nombre`, `genero`, `email`, `cod_area`, `cod_cargo`, `cod_rol`, `cod_estado`)
                        VALUES (
                            '".$tipo_doc."',
                            '".$documento."',
                            '".$apellido."',
                            '".$nombre."',
                            '".$cod_genero."',
                            '".$email."',
                            '".$cod_area."',
                            '".$cod_cargo."',
                            '".$cod_rol."',
                            '2')";

        $insertadoClienteDb = mysqli_query($this->_con, $sql_insert);
        return ($insertadoClienteDb) ? true : false;
    }

}

?>