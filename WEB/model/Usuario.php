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
    protected $id_usuario;
    protected $documento;
    protected $cod_tipo_doc;
    protected $nombre;
    protected $apellido;
    protected $cod_genero;
    protected $email;
    protected $password;
    protected $cod_area;
    protected $cod_cargo;
    protected $cod_rol;
    protected $cod_estado_usuario;
    protected $fecha_creado;
    protected $encontradoDB;

    /**
     * This Construct Class Usuario
     */
    public function __construct()
    {
    }//End construct()

    /**
     * Get the value of encontradoDB
     */
    public function getEncontradoDB()
    {
        return $this->encontradoDB;
    }

    /**
     * Set the value of encontradoDB
     *
     * @return self
     */
    public function setEncontradoDB($encontradoDB)
    {
        include '../config/Database.php';
        $this->encontradoDB = $db->real_escape_string($encontradoDB);

        //return $this;
    }

    /**
     * Get the value of fecha_creado
     */
    public function getFecha_creado()
    {
        return $this->fecha_creado;
    }

    /**
     * Set the value of fecha_creado
     *
     * @return  self
     */
    public function setFecha_creado($fecha_creado)
    {
        include '../config/Database.php';
        $this->fecha_creado = $db->real_escape_string($fecha_creado);

        //return $this;
    }

    /**
     * Get the value of cod_estado_usuario
     */
    public function getCod_estado_usuario()
    {
        return $this->cod_estado_usuario;
    }

    /**
     * Set the value of cod_estado_usuario
     *
     * @return  self
     */
    public function setCod_estado_usuario($cod_estado_usuario)
    {
        include '../config/Database.php';
        $this->cod_estado_usuario = $db->real_escape_string($cod_estado_usuario);

        //return $this;
    }

    /**
     * Get the value of cod_rol
     */
    public function getCod_rol()
    {
        return $this->cod_rol;
    }

    /**
     * Set the value of cod_rol
     *
     * @return  self
     */
    public function setCod_rol($cod_rol)
    {
        include '../config/Database.php';
        $this->cod_rol = $db->real_escape_string($cod_rol);

        //return $this;
    }

    /**
     * Get the value of cod_cargo
     */
    public function getCod_cargo()
    {
        return $this->cod_cargo;
    }

    /**
     * Set the value of cod_cargo
     *
     * @return  self
     */
    public function setCod_cargo($cod_cargo)
    {
        include '../config/Database.php';
        $this->cod_cargo = $db->real_escape_string($cod_cargo);

        //return $this;
    }

    /**
     * Get the value of cod_area
     */
    public function getCod_area()
    {
        return $this->cod_area;
    }

    /**
     * Set the value of cod_area
     *
     * @return  self
     */
    public function setCod_area($cod_area)
    {
        include '../config/Database.php';
        $this->cod_area = $db->real_escape_string($cod_area);

        //return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setPassword($password)
    {
        include '../config/Database.php';
        $this->password = $db->real_escape_string($password);

        //return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        include '../config/Database.php';
        $this->email = $db->real_escape_string($email);

        //return $this;
    }

    /**
     * Get the value of cod_genero
     */
    public function getCod_genero()
    {
        return $this->cod_genero;
    }

    /**
     * Set the value of cod_genero
     *
     * @return  self
     */
    public function setCod_genero($cod_genero)
    {
        include '../config/Database.php';
        $this->cod_genero = $db->real_escape_string($cod_genero);

        //return $this;
    }

    /**
     * Get the value of apellido
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     *
     * @return  self
     */
    public function setApellido($apellido)
    {
        include '../config/Database.php';
        $this->apellido = $db->real_escape_string($apellido);

        //return $this;
    }

    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */
    public function setNombre($nombre)
    {
        include '../config/Database.php';
        $this->nombre = $db->real_escape_string($nombre);

        //return $this;
    }

    /**
     * Get the value of cod_tipo_doc
     */
    public function getCod_tipo_doc()
    {
        return $this->cod_tipo_doc;
    }

    /**
     * Set the value of cod_tipo_doc
     *
     * @return  self
     */
    public function setCod_tipo_doc($cod_tipo_doc)
    {
        include '../config/Database.php';
        $this->cod_tipo_doc = $db->real_escape_string($cod_tipo_doc);

        //return $this;
    }

    /**
     * Get the value of documento
     */
    public function getDocumento()
    {
        return $this->documento;
    }

    /**
     * Set the value of documento
     *
     * @return  self
     */
    public function setDocumento($documento)
    {
        include '../config/Database.php';
        $this->documento = $db->real_escape_string($documento);

        //return $this;
    }

    /**
     * Get the value of id_usuario
     */
    public function getId_usuario()
    {
        return $this->id_usuario;
    }

    /**
     * Set the value of id_usuario
     *
     * @return  self
     */
    public function setId_usuario($id_usuario)
    {
        include '../config/Database.php';
        $this->id_usuario = $db->real_escape_string($id_usuario);

        // return $this;
    }

    /**
     * Crear usuario al BD mediante metodo por objeto usuario
     *
     * @return Boolean $insertadoClienteDb
     */
    public function createUser()
    {
        include '../config/Database.php';
        define('INACTIVO', '1');//Defecto num 2: Activo por ENUM Estado de Ususario

        $sql_insert = "INSERT INTO `usuario`
                            (`cod_tipo_doc`,
                            `documento`,
                            `nombre`,
                            `apellido`,
                            `cod_genero`,
                            `email`,
                            `password`,
                            `cod_area`,
                            `cod_cargo`,
                            `cod_rol`,
                            `cod_estado_usuario`)
                        VALUES
                            ('".$this->getCod_tipo_doc()."',
                            '".$this->getDocumento()."',
                            '".$this->getNombre()."',
                            '".$this->getApellido()."',
                            '".$this->getCod_genero()."',
                            '".$this->getEmail()."',
                            '".$this->getPassword()."',
                            '".$this->getCod_area()."',
                            '".$this->getCod_cargo()."',
                            '".$this->getCod_rol()."',
                            '".INACTIVO."');";

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
    public function readAllListUsers()
    {
        include '../../config/Database.php';
        $sql_query = "SELECT * FROM usuario";

        if ($output_sql = $db->query($sql_query)) {
            if ($row = $output_sql->num_rows == 0) {
                echo'
                <tr>
                    <td colspan="8">No hay datos</td>
                </tr>';
            } else {
                while ($row = $output_sql->fetch_assoc()) {
                    echo '
                    <tr id="' . $row['id_usuario'] . '">
                        <td class="text-center" id="id_usuario">'.$row['id_usuario'].'</td>
                        <td>
                            <a onClick=" goToInfoUser('. $row['id_usuario'] .')">
                            <span class="fa fa-user fa-lg" aria-hidden="true">&nbsp;</span>'.
                                $row['nombre'].' '. $row['apellido'].
                            '</a> </td>';

                        printCodCargoToText($row['cod_cargo']);

                        printCodAreaToText($row['cod_area']);

                        printCodRolToText($row['cod_rol']);

                        printCodEstadoUsuarioToText($row['cod_estado_usuario']);


                        //href="../mgmtUser/viewEditUser.php?id='.$row['id_usuario'].'"
                    echo '
                        <td class="text-center">
                            <a id="editUser" onClick=" goToEditUser('. $row['id_usuario'] .')" title="Editar datos" class="btn btn-primary btn-sm">
                                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> </a>
                            <a href="../../controllers/controllerDeletedUser.php?btnClickedUser=delete&name='.$row['nombre'].'&nik='.$row['id_usuario'].'" title="Eliminar" onclick="return confirm(\'Esta seguro de borrar los datos '.$row['nombre']. ' '. $row['apellido'] .'? \')" class="btn btn-danger btn-sm">
                                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> </a>
                        </td>
                    </tr>';
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
    public function readSingleRecordUsuer($id_usuario)
    {
        include '../../config/Database.php';
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
                    $this->id_usuario           = $obj->id_usuario;
                    $this->cod_tipo_doc         = $obj->cod_tipo_doc;
                    $this->documento            = $obj->documento;
                    $this->nombre               = $obj->nombre;
                    $this->apellido             = $obj->apellido;
                    $this->cod_genero           = $obj->cod_genero;
                    $this->email                = $obj->email;
                    $this->password             = $obj->password;
                    $this->cod_area             = $obj->cod_area;
                    $this->cod_cargo            = $obj->cod_cargo;
                    $this->cod_rol              = $obj->cod_rol;
                    $this->cod_estado_usuario   = $obj->cod_estado_usuario;
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
    public function updateUser()
    {
        include '../config/Database.php';

        $sql_update = "UPDATE `usuario`
                        SET `cod_tipo_doc`          = '".$this->getCod_tipo_doc()."',
                            `documento`             = '".$this->getDocumento()."',
                            `nombre`                = '".$this->getNombre()."',
                            `apellido`              = '".$this->getApellido()."',
                            `cod_genero`            = '".$this->getCod_genero()."',
                            `email`                 = '".$this->getEmail()."',
                            `cod_area`              = '".$this->getCod_area()."',
                            `cod_cargo`             = '".$this->getCod_cargo()."',
                            `cod_rol`               = '".$this->getCod_rol()."',
                            `cod_estado_usuario`    = '".$this->getCod_estado_usuario()."'
                        WHERE
                            `usuario`.`id_usuario`  = '".$this->getId_usuario()."'";

            $actualizadoUsuarioDb = $db->query($sql_update) or die(infoErrorUpdateUser($db));

            /* free sql_update set */
            //$actualizadoUsuarioDb->close();

            /* close connection */
            $db->close();

            return ($actualizadoUsuarioDb) ? true : false;
    } //End UpdateUser()


    /**
     * Confirmar nuevo usuario
     *
     * @return Boolean confirmadaNuevoUsuario
     */
    public function confirmNewUser()
    {
        include '../../config/Database.php';

        $sql_update = "UPDATE `usuario`
                        SET `documento`             = '".$this->getDocumento()."',
                            `nombre`                = '".$this->getNombre()."',
                            `apellido`              = '".$this->getApellido()."',
                            `password`              = '".$this->getPassword()."',
                            `cod_estado_usuario`    = '".$this->getCod_estado_usuario()."'
                        WHERE
                            `usuario`.`id_usuario`  = '".$this->getId_usuario()."'";

            $confirmadaNuevoUsuarioDb = $db->query($sql_update) or die(infoErrorConfirmNewUser($db));

            /* close connection */
            $db->close();

            return ($confirmadaNuevoUsuarioDb) ? true : false;
    } //End confirmNewUser()


    /**
     * Cambia contraseña al codigo de confirmacion por solicitado de usuario
     *
     * @return Boolean recuperadoClave
     */
    public function recoveryPasswordUser()
    {
        include '../../config/Database.php';
        $codConfirm = bin2hex(random_bytes(7));

        $sql_update = "UPDATE `usuario`
                        SET
                            `password`              = '".$codConfirm."'
                        WHERE
                            `usuario`.`id_usuario`  = '".$this->getId_usuario()."'";

            $recuperadoClaveUsuarioDb = $db->query($sql_update) or die(infoErrorRecoveryPasswordUser($db));

            /* close connection */
            $db->close();

            return ($recuperadoClaveUsuarioDb) ? true : false;
    } //End recoveryPasswordUser()


    /**
     * Restablecer nueva contraseña, solicitado por usuario
     *
     * @return Boolean restablecidoNuevoClave
     */
    public function resetPasswordUser()
    {
        include '../../config/Database.php';

        $sql_update = "UPDATE `usuario`
                        SET
                            `password`              = '".$this->getPassword()."'
                        WHERE
                            `usuario`.`id_usuario`  = '".$this->getId_usuario()."'";

            $restablecidoNuevoClaveUsuarioDb = $db->query($sql_update) or die(infoErrorResetPasswordUser($db));

            /* close connection */
            $db->close();

            return ($restablecidoNuevoClaveUsuarioDb) ? true : false;
    } //End resetPasswordUser()

    /**
     * Desactivar usuario
     *
     * $id_usuario @param int numero de usuario desde selecciona lista de usuario
     *
     * @return Boolean desactivadoUsuario
     */
    public function desactiveUser($id_usuario)
    {
        define('INACTIVO', '1');

        include '../config/Database.php';
            $sql_update = "UPDATE
								`usuario`
							SET
								`cod_estado_usuario`    = '".INACTIVO."'
							WHERE
								`usuario`.`id_usuario`  = '".$id_usuario."'";
            $desactivadoClienteDb = $db->query($sql_update)
            or die(
                '<h1 class="text-center">Oooops!</h1>
				    <br>
				    <p>Hubo un error al actualizar estado al Usuario.</p>
				    <br><br>
				    <strong>Origen error:</strong>
				    <br>' . mysqli_error($db)
            );

            /* free sql_update set */
            //$desactivadoClienteDb->close();

            /* close connection */
            $db->close();
            return ($desactivadoClienteDb) ? true : false;
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
 * Imprimir Aviso error actualizar usuario
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

/**
 * Imprimir Aviso error confirmada nuevo usuario
 *
 * $db @param Object db desde BD
 *
 * @return String echo html
 */
function infoErrorConfirmNewUser($db)
{
    echo '<div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="btn btn-info" onclick="goBack()">Regresar</button>
                <h1 class="section-title modal-title text-center"> Oooops!</h1>
            </div>
            <hr>
            <div class="modal-body">
                Hubo un error al confirmada nuevo usuario.
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
 * Imprimir Aviso error recuperar la contrseña del usuario
 *
 * $db @param Object db desde BD
 *
 * @return String echo html
 */
function infoErrorRecoveryPasswordUser($db)
{
    echo '<div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="btn btn-info" onclick="goBack()">Regresar</button>
                <h1 class="section-title modal-title text-center"> Oooops!</h1>
            </div>
            <hr>
            <div class="modal-body">
                Hubo un error al recuperar contraseña del usuario.
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
 * Imprimir Aviso error restablecer la contrseña del usuario
 *
 * $db @param Object db desde BD
 *
 * @return String echo html
 */
function infoErrorResetPasswordUser($db)
{
    echo '<div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="btn btn-info" onclick="goBack()">Regresar</button>
                <h1 class="section-title modal-title text-center"> Oooops!</h1>
            </div>
            <hr>
            <div class="modal-body">
                Hubo un error al restablecer contraseña del usuario.
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
