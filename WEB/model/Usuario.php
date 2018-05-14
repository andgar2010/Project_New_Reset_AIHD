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
    public $fecha_creado;

    /**
     * This Construct Class Usuario
     */
    public function __construct()
    {

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
        include '../config/Database.php';
        return $db->real_escape_string($var);
    }

    /**
     * Crear usuario al BD mediante metodo por objeto usuario
     *
     * @return Boolean $insertadoClienteDb
     */
    function createUser()
    {
        define('ACTIVO', '2');//Defecto num 2: Activo por ENUM Estado de Ususario

        include '../config/Database.php';
        $sql_insert = "INSERT INTO `usuario`
                            (`tipo_doc`, `documento`, `apellido`, `nombre`, `genero`, `email`, `password`, `cod_area`, `cod_cargo`, `cod_rol`, `cod_estado`)
                        VALUES (
                            '".$this->tipo_doc."',
                            '".$this->documento."',
                            '".$this->apellido."',
                            '".$this->nombre."',
                            '".$this->cod_genero."',
                            '".$this->email."',
                            '".$this->password."',
                            '".$this->cod_area."',
                            '".$this->cod_cargo."',
                            '".$this->cod_rol."',
                            '".ACTIVO."')";

        $insertadoClienteDb = $db->query($sql_insert) or die('Hubo un error al registrar al Usuario ' . mysqli_error($db));
        $insertadoClienteDb->close();
        $db->close();
        return ($insertadoClienteDb) ? true : false;
    }

    /**
     * Consultar lista de usuarios
     *
     * @return String arrayListUsers
     */
    function readUser()
    {
        include '../config/Database.php';
        $sql_query = "SELECT * FROM usuario";

        if ($output_sql = $db->query($sql_query)) {

            if ($row = $output_sql->num_rows == 0) {
                echo'
                <tr>
                    <td colspan="8">No hay datos</td>
                </tr>';
            } else {
                    while ($row = $output_sql->fetch_assoc()) {
                    $numID = 1;
                    echo'
                    <tr>
                        <td>'.$row['id_usuario'].'</td>
                        <td>
                            <a href="profile.php?nik='.$row['id_usuario'].'">
                            <span class="fa fa-user fa-lg" aria-hidden="true">&nbsp;</span>'.
                                $row['nombre'].' '. $row['apellido'].
                            '</a> </td>
                            <td>'.$row['cod_cargo'].'</td>
                            <td>'. $row['cod_area'].'</td>
                            <td>'. $row['cod_rol'].'</td>';

                            switch ($row['cod_estado']) {
                                case 'Inactivo':
                                    echo '
                                        <td>
                                            <span class="label label-info">inactivo</span>
                                        </td>';
                                    break;
                                case 'Activo':
                                    echo '
                                        <td>
                                            <span class="label label-success">Activo</span>
                                        </td>';
                                    break;
                                default:
                                    echo '
                                        <td>
                                            <span class="label label-warning">No seleccionado</span>
                                        </td>';
                                    break;
                            }

                            echo'
                            </td>
                            <td>
                                <a href="edit.php?nik='.$row['id_usuario'].'" title="Editar datos" class="btn btn-primary btn-sm">
                                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> </a>
                                <a href="index.php?aksi=delete&nik='.$row['id_usuario'].'" title="Eliminar" onclick="return confirm(\'Esta seguro de borrar los datos '.$row['nombre']. ' '. $row['apellido'] .'? \')" class="btn btn-danger btn-sm">
                                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> </a>
                            </td>
                    </tr>';
                    $numID++;
                    }

            $output_sql->close();
            }
            $db->close();
        }
    }
}
?>