<?php
/**
 * Modelo Clase Usuario
 *
 * @category Class
 * @package  Model
 * @author   Andres Garcia <afagrcia0479@misena.edu.co>
 * @license  <a href="www.mit.org">mit</a>
 * @version  GIT:<ASD4A6S54DASD>
 * @link     www.github.com/andgar2010
 *
 * This Model of Class User
 * Source DB
 */



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

class Usuario
{
    public $id;
    public $documento;
    public $nombre;
    public $apellido;
    public $cod_genero;
    public $email;
    public $password;
    public $cod_area;
    public $cod_cargo;
    public $cod_rol;
    public $cod_estado;

    /**
     * This Construct Class Database
     */
    public function __construct()
    {

    }

    // /**
    //  * Function sanitize
    //  *
    //  * $var @param String
    //  * This inpur string
    //  *
    //  * @return String
    //  * $vareturn vareturn
    //  */
    function sanitize($var)
    {
        include '../config/db.php';
        return $conx->real_escape_string($var);
    }

    function createUser()
    {
        include '../config/db.php';
        $sql_insert = "INSERT INTO `usuario`
                            (`tipo_doc`, `documento`, `apellido`, `nombre`, `genero`, `email`, `cod_area`, `cod_cargo`, `cod_rol`, `cod_estado`)
                        VALUES (
                            '".$this->tipo_doc."',
                            '".$this->documento."',
                            '".$this->apellido."',
                            '".$this->nombre."',
                            '".$this->cod_genero."',
                            '".$this->email."',
                            '".$this->cod_area."',
                            '".$this->cod_cargo."',
                            '".$this->cod_rol."',
                            '2')";

        $insertadoClienteDb = $conx->query($sql_insert);
        $conx->close();
        return ($insertadoClienteDb) ? true : false;
    }


}
?>