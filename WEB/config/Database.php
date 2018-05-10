<?php
Class Database
{
    public $con;
    protected $dbhost    = 'localhost';  //  nombre de ruta base de datos
    protected $dbuser    = 'root';       //  nombre de usuario de base de datos
    protected $dbpass    = '';           //  contraseña de usuario de base de datos
    protected $dbname    = 'newreset';   //  nombre de base de datos que utiliza

    function __construct()
    {
        $this->connectDb();
    }

    function connectDb()
    {
        $this->con = mysqli_connect($this->$dbhost, $this->$dbuser, $this->$dbpass, $this->$dbname);
        if (mysqli_connect_error) {
            die('Conexión a la base de datos falló: ' . mysqli_connect_error() . ' código error: ' . mysqli_connect_errno());
        }
    }

    function sanitize($var)
    {
        return mysqli_real_escape_string($this->_con, $var);
    }

}

?>