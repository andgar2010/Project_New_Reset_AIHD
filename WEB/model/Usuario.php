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
    public $id_usuario;
    public $documento;
    public $cod_tipo_doc;
    public $nombre;
    public $apellido;
    public $cod_genero;
    public $email;
    public $password;
    public $cod_area;
    public $cod_cargo;
    public $cod_rol;
    public $cod_estado_usuario;
    public $fecha_creado;
    public $encontradoDB;

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
                            (`cod_tipo_doc`, `documento`, `nombre`, `apellido`, `cod_genero`, `email`, `password`, `cod_area`, `cod_cargo`, `cod_rol`, `cod_estado_usuario`)
                        VALUES (
                            '".$this->cod_tipo_doc."',
                            '".$this->documento."',
                            '".$this->nombre."',
                            '".$this->apellido."',
                            '".$this->cod_genero."',
                            '".$this->email."',
                            '".$this->password."',
                            '".$this->cod_area."',
                            '".$this->cod_cargo."',
                            '".$this->cod_rol."',
                            '".ACTIVO."')";

        $insertadoClienteDb = $db->query($sql_insert) or die(infoErrorCreatedUser($db));
        //$insertadoClienteDb->close();
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
                    //$numID = 1;
                    echo'
                    <tr>
                        <td class="text-center">'.$row['id_usuario'].'</td>
                        <td>
                            <a href="profile.php?nik='.$row['id_usuario'].'">
                            <span class="fa fa-user fa-lg" aria-hidden="true">&nbsp;</span>'.
                                $row['nombre'].' '. $row['apellido'].
                            '</a> </td>';

                        printCodCargoToText($row['cod_cargo']);

                        printCodAreaToText($row['cod_area']);

                        printCodRolToText($row['cod_rol']);

                        printCodEstadoUsuarioToText($row['cod_estado_usuario']);

                    echo'
                        <td class="text-center">
                            <a href="viewEditUser.php?id='.$row['id_usuario'].'" title="Editar datos" class="btn btn-primary btn-sm">
                                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> </a>
                            <a href="index.php?aksi=delete&nik='.$row['id_usuario'].'" title="Eliminar" onclick="return confirm(\'Esta seguro de borrar los datos '.$row['nombre']. ' '. $row['apellido'] .'? \')" class="btn btn-danger btn-sm">
                                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> </a>
                        </td>
                    </tr>';

                    //$numID++;
                }

                $output_sql->close();
            }
            $db->close();
        }
    }//End readUser()

    /**
     * Consultar unico usuario
     *
     * $id_usuario @param int numero de usuario desde selecciona lista de usuario
     *
     * @return Usuario objeto
     */
    function readSingleRecordUsuer($id_usuario)
    {
        include '../config/Database.php';
        $sql_query = "SELECT * FROM usuario WHERE id_usuario =". $id_usuario;

        if ($output_sql = $db->query($sql_query)) {

            if ($output_sql->num_rows == 0) {
                // Si no encontrado usuario en BD
                return $encontradoDB = false;
            } else {
                // Si encontrado datos de usuario en BD, recoge los datos al this objeto.
                $encontradoDB = true;

                /* fetch object array */
                while ($obj = $output_sql->fetch_object()) {
                    $this->id_usuario   = $this->sanitize($obj->id_usuario);
                    $this->cod_tipo_doc = $this->sanitize($obj->cod_tipo_doc);
                    $this->documento    = $this->sanitize($obj->documento);
                    $this->nombre       = $this->sanitize($obj->nombre);
                    $this->apellido     = $this->sanitize($obj->apellido);
                    $this->cod_genero   = $this->sanitize($obj->cod_genero);
                    $this->email        = $this->sanitize($obj->email);
                    $this->cod_area     = $this->sanitize($obj->cod_area);
                    $this->cod_cargo    = $this->sanitize($obj->cod_cargo);
                    $this->cod_rol      = $this->sanitize($obj->cod_rol);
                    $this->cod_estado_usuario   = $this->sanitize($obj->cod_estado_usuario);
                }

                /* fetch associative array */
                // while ($row = $result->fetch_assoc()) {
                //     printf ("%s (%s)\n", $row["Name"], $row["CountryCode"]);
                //     $this->id_usuario    = $this->sanitize($row['id_usuario']);
                //     $this->cod_tipo_doc  = $this->sanitize($row['cod_tipo_doc']);
                //     $this->documento     = $this->sanitize($row['num_cedula']);
                //     $this->nombre        = $this->sanitize($row['nombre']);
                //     $this->apellido      = $this->sanitize($row['apellido']);
                //     $this->cod_genero    = $this->sanitize($row['cod_genero']);
                //     $this->email         = $this->sanitize($row['email']);
                //     $this->cod_area      = $this->sanitize($row['cod_area']);
                //     $this->cod_cargo     = $this->sanitize($row['cod_cargo']);
                //     $this->cod_rol       = $this->sanitize($row['cod_rol']);
                //     $this->cod_estado    = $this->sanitize($row['cod_estado']);
                    //$this->password       = $this->sanitize($passwordRandom);
                    // $usuario->password   = $usuario->sanitize(password_hash($passwordRandom, PASSWORD_DEFAULT));
                    //$fecha_creado =  ;//Format Timedate BD '2018-05-13 16:40:39'
            }
            /* free output_sql set */
            $output_sql->close();
        }
        /* close connection */
        $db->close();
    } //End readSingleRecordUsuer()

    /**
     * Editar unico usuario
     *
     * $id_usuario @param int numero de usuario desde selecciona lista de usuario
     *
     * @return Boolean actualizadoUsuario
     */
    function updateUser($id_usuario)
    {
        include '../config/Database.php';

        //Controller
        $usuario->id_usuario   = $db->sanitize($id_usuario);
        $usuario->cod_tipo_doc = $db->sanitize($cod_tipo_doc);
        $usuario->documento    = $db->sanitize($documento);
        $usuario->nombre       = $db->sanitize($nombre);
        $usuario->apellido     = $db->sanitize($apellido);
        $usuario->cod_genero   = $db->sanitize($cod_genero);
        $usuario->email        = $db->sanitize($email);
        $usuario->cod_area     = $db->sanitize($cod_area);
        $usuario->cod_cargo    = $db->sanitize($cod_cargo);
        $usuario->cod_rol      = $db->sanitize($cod_rol);
        $usuario->cod_estado   = $db->sanitize($cod_estado);
        //End Controller

        if ($this->id_usuario == $id_usuario) {
            $sql_update = "UPDATE
								`usuario`
							SET
								`cod_tipo_doc`          = '". $this->cod_tipo_doc."',
								`documento`             = '". $this->documento."',
								`nombre`                = '". $this->nombre ."',
								`apellido`              = '". $this->apellido ."',
								`cod_genero`            = '". $this->cod_genero ."',
								`email`                 = '". $this->email ."',
								`password`              = '". $this->password ."',
								`cod_area`              = '". $this->cod_area ."',
								`cod_cargo`             = '". $this->cod_cargo ."',
								`cod_rol`               = '". $this->cod_rol ."',
								`cod_estado`            = '". $this->cod_estado ."'
							WHERE
								`usuario`.`id_usuario`  = ".$this->id_usuario;

            $actualizadoClienteDb = $db->query($sql_update)
            or die(
                '<h1 class="text-center">Oooops!</h1>
				    <br>
				    <p>Hubo un error al actualizar al Usuario.</p>
				    <br><br>
				    <strong>Origen error:</strong>
				    <br>' . mysqli_error($db)
            );

            /* free sql_update set */
            $actualizadoClienteDb->close();

            /* close connection */
            $db->close();

            return ($actualizadoClienteDb) ? true : false;
        }//End if equal object->id_usuario == $id_usuario

    } //End UpdateUser()

    /**
     * Desactivar usuario
     *
     * $id_usuario @param int numero de usuario desde selecciona lista de usuario
     *
     * @return Boolean desactivadoUsuario
     */
    function desactiveUser($id_usuario)
    {
        define(INACTIVO, 1);

        include '../config/Database.php';

        //Controller
        $usuario->id_usuario   = $db->sanitize($id_usuario);
        $usuario->cod_estado   = $db->sanitize($cod_estado);
        //End Controller

        if ($this->id_usuario == $id_usuario) {
            $sql_update = "UPDATE
								`usuario`
							SET
								`cod_estado`            = 'INACTIVO'
							WHERE
								`usuario`.`id_usuario`  = ".$this->id_usuario;

            $actualizadoClienteDb = $db->query($sql_update)
            or die(
                '<h1 class="text-center">Oooops!</h1>
				    <br>
				    <p>Hubo un error al actualizar estado al Usuario.</p>
				    <br><br>
				    <strong>Origen error:</strong>
				    <br>' . mysqli_error($db)
            );

            /* free sql_update set */
            $desactivadoClienteDb->close();

            /* close connection */
            $db->close();
            return ($desactivadoClienteDb) ? true : false;
        }//End if equal object->id_usuario == $id_usuario

    } //End DesactivedUser()

}// End Class Usuario

/**
 * Imprimir estado de usuario en texto por codigo de estado de usuario BD
 *
 * $cod_estado_usuario @param int codigo de estado de usuario desde BD
 *
 * @return String echo <td></td>
 */
function printCodEstadoUsuarioToText($cod_estado_usuario)
{
    switch ($cod_estado_usuario) {
    case '1':
        echo '
            <td class="text-center">
                <span class="label label-info">inactivo</span>
            </td>';
        break;
    case '2':
        echo '
            <td class="text-center">
                <span class="label label-success">Activo</span>
            </td>';
        break;
    default:
        echo '
            <td class="text-center">
                <span class="label label-warning">No seleccionado</span>
            </td>';
        break;
    }
}

/**
 * Imprimir rol de usuario en texto por codigo de rol de usuario BD
 *
 * $cod_rol @param int codigo de rol de usuario desde BD
 *
 * @return String echo <td></td>
 */
function printCodRolToText($cod_rol)
{
    switch ($cod_rol) {
    case '1':
        echo'<td class="text-center">Superadministrador</td>';
        break;
    case '2':
        echo'<td class="text-center">Técnico</td>';
        break;
    case '3':
        echo'<td class="text-center">Administrativo</td>';
        break;
    case '4':
        echo'<td class="text-center">Usuario</td>';
        break;
    default:
        echo'<td class="text-center"><span class="label label-warning">No seleccionado</span></td>';
        break;
    }
}

/**
 * Imprimir cargo de usuario en texto por codigo de cargo de usuario BD
 *
 * $cod_cargo @param int codigo de cargo de usuario desde BD
 *
 * @return String echo <td></td>
 */
function printCodCargoToText($cod_cargo)
{
    switch ($cod_cargo) {
    case '1':
        echo'<td class="text-center">Técnico</td>';
        break;
    case '2':
        echo'<td class="text-center">Rector</td>';
        break;
    case '3':
        echo'<td class="text-center">Coordinador académico</td>';
        break;
    case '4':
        echo'<td class="text-center">Profesor</td>';
        break;
    default:
        echo'<td class="text-center"><span class="label label-warning">No seleccionado</span></td>';
        break;
    }
}

/**
 * Imprimir area de usuario en texto por codigo de area de usuario BD
 *
 * $cod_area @param int codigo de area de usuario desde BD
 *
 * @return String echo <td></td>
 */
function printCodAreaToText($cod_area)
{
    switch ($cod_area) {
    case '1':
        echo'<td class="text-center">Académica</td>';
        break;
    case '2':
        echo'<td class="text-center">Administrativa</td>';
        break;
    case '3':
        echo'<td class="text-center">Técnica</td>';
        break;
    case '4':
        echo'<td class="text-center">Tecnológica</td>';
        break;
    default:
        echo'<td class="text-center"><span class="label label-warning">No seleccionado</span></td>';
        break;
    }
}

/**
 * Imprimir Aviso error crear nuevo usuario
 *
 * $db @param Object db desde BD
 *
 * @return String echo html
 */
function infoErrorCreatedUser($db)
{
    echo '<div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="btn btn-info" onclick="goBack()">Regresar</button>
                <h1 class="section-title modal-title text-center"> Oooops!</h1>
            </div>
            <hr>
            <div class="modal-body">
                Hubo un error al registrar al Usuario.
                <br>
                <br>
                <strong>Origen error:</strong>
                </br> ' . mysqli_error($db) . '
            </div>
        </div>
    </div>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>';
}

/**
 * Imprimir Aviso error crear nuevo usuario
 *
 * $db @param Object db desde BD
 *
 * @return String echo html
 */
function infoErrorUpdateUser($db)
{
    echo '<div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="btn btn-info" onclick="goBack()">Regresar</button>
                <h1 class="section-title modal-title text-center"> Oooops!</h1>
            </div>
            <hr>
            <div class="modal-body">
                Hubo un error al actualizar al Usuario.
                <br>
                <br>
                <strong>Origen error:</strong>
                </br> ' . mysqli_error($db) . '
            </div>
        </div>
    </div>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>';
}
?>