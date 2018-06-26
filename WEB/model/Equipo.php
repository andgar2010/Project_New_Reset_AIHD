<?php
/**
 * Modelo Clase Equipo
 *
 * @category Class
 * @package  Class
 * @author   Andres Garcia <afagrcia0479@misena.edu.co>
 * @author   Camila Torres <lctorres14@misena.edu.co>
 * @license  <a href="www.mit.org">mit</a>
 * @version  GIT:<ASD4A6S54DASD>
 * @link     www.github.com/andgar2010
 *
 * This Model of Class Equipo
 * Source DB
 */

class Equipo
{
    protected $id_equipo;
    protected $serial_equipo;
    protected $cod_estado_equipo;
    protected $cod_tipo_equipo;

    /**
     * This Construct Class Equipo
     */
    public function __construct()
    {

    }

    /**
     * Set the value of id_equipo
     *
     * @return  self
     */
    public function setId_equipo($id_equipo)
    {
        $this->id_equipo = $id_equipo;

        return $this;
    }

    /**
     * Get the value of id_equipo
     */
    public function getId_equipo()
    {
        return $this->id_equipo;
    }

    /**
     * Set the value of serial
     *
     * @return  self
     */
    public function setSerial_equipo($serial_equipo)
    {
        $this->serial_equipo = $serial_equipo;

        return $this;
    }
   
    /**
     * Get the value of serial
     */
    public function getSerial_equipo()
    {
        return $this->serial_equipo;
    }
     /**
     * Set the value of serial
     *
     * @return  self
     */
    public function setCod_estado_equipo($cod_estado_equipo)
    {
        $this->cod_estado_equipo = $cod_estado_equipo;

        return $this;
    }
   
    /**
     * Get the value of serial
     */
    public function getCod_estado_equipo()
    {
        return $this->cod_estado_equipo;
    }
    /**
     * Set the value of serial
     *
     * @return  self
     */
     public function setCod_tipo_equipo($cod_tipo_equipo)
    {
        $this->cod_tipo_equipo = $cod_tipo_equipo;

        return $this;
    }
   
    /**
     * Get the value of serial
     */
    public function getCod_tipo_equipo()
    {
        return $this->cod_tipo_equipo;
    }
    /**
     * Set the value of serial
     *
     * @return  self
     */


    
    
     function createEquipo()
    {
        include '../config/Database.php';
        define('ACTIVO', '2');//Defecto num 2: Activo por ENUM Estado de Ususario





        $sql_insert = "INSERT INTO `equipo`
                            (`cod_tipo_equipo`,
                            `serial_equipo`,
                        `cod_estado_equipo`)
                        VALUES
                            ('".$this->getCod_tipo_equipo()."',
                            '".$this->getserial_equipo()."',
                            
                            '".ACTIVO."');";

        $insertadoClienteDb = $db->query($sql_insert) or die(infoErrorCreatedEquipo($db));
        //$insertadoClienteDb->close();
        $db->close();
        return ($insertadoClienteDb) ? true : false;
    }

    /**
     * Consultar lista de usuarios
     *
     * @return String arrayListUsers
     */
function readAllEquipo()
    {
        include '../../config/Database.php';
        $sql_query = "SELECT * FROM equipo";

        if ($output_sql = $db->query($sql_query)) {

            if ($row = $output_sql->num_rows == 0) {
                echo'
                <tr>
                    <td colspan="8">No hay datos</td>
                </tr>';
            } else {
                while ($row = $output_sql->fetch_assoc()) {
                    echo'
                    <tr>
                        <td class="text-center">'.$row['id_equipo'].'</td>
                        <td>
                            <a onClick=" goToInfoEquipo('. $row['id_equipo'] .')">
                            <span class="fa fa-user fa-lg" aria-hidden="true">&nbsp;</span>'.
                                $row['serial_equipo'].'</a> </td>';

                        $this->printCodTipoEquipoToTable($row['cod_tipo_equipo']);

                        $this->printCodEstadoEquipoToTable($row['cod_estado_equipo']);

                    echo'
                        <td class="text-center">
                           <a id="editEquipo" onClick=" goToEditEquipo('. $row['id_equipo'] .')" title="Editar datos" class="btn btn-primary btn-sm">
                                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> </a>
                            <a href="../../controllers/controllerDeletedEquipo.php?btnClickedUser=delete&name='.$row['serial_equipo'].'&nik='.$row['id_equipo'].'" title="Eliminar" onclick="return confirm(\'Esta seguro de borrar los datos '.$row['serial_equipo']. '? \')" class="btn btn-danger btn-sm">
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
    function readSingleEquipo($id_equipo)
    {
        include '../../config/Database.php';
        $sql_query = "SELECT * FROM equipo WHERE id_equipo =". $id_equipo;
       if ($output_sql = $db->query($sql_query)) {

            if ($output_sql->num_rows == 0) {
                // Si no encontrado usuario en BD
                return $encontradoDB = false;
            } else {
                // Si encontrado datos de usuario en BD, recoge los datos al this objeto.
                $encontradoDB = true;

                /* fetch object array */
                while ($obj = $output_sql->fetch_object()) {
                    $this->id_equipo           = $obj->id_equipo;
                    $this->cod_tipo_equipo     = $obj->cod_tipo_equipo;
                    $this->serial_equipo       = $obj->serial_equipo;
                    $this->cod_estado_equipo   = $obj->cod_estado_equipo;
                }             
            }
            /* free output_sql set */
            //$output_sql->close();
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
    function updateEquipo()
    {
        //function updateUser($id_usuario, $cod_tipo_doc, $documento, $nombre, $apellido, $cod_genero, $email, $cod_area, $cod_cargo, $cod_rol, $cod_estado_usuario)
        include '../config/Database.php';

        $sql_update = "UPDATE `equipo`
                        SET `cod_tipo_equipo`          = '".$this->getCod_tipo_equipo()."',
                            `serial_equipo`            = '".$this->getSerial_equipo()."',
                            `cod_estado_equipo`        = '".$this->getCod_estado_equipo()."'

                        WHERE
                            `equipo`.`id_equipo`  = ".$this->getId_equipo();

            $actualizadoEquipoDb = $db->query($sql_update) or die(infoErrorUpdateEquipo($db));

            /* free sql_update set */
            //$actualizadoUsuarioDb->close();

            /* close connection */
            $db->close();

            return ($actualizadoEquipoDb) ? true : false;
    } //End UpdateUser()

    /**
     * Desactivar usuario
     *
     * $id_usuario @param int numero de usuario desde selecciona lista de usuario
     *
     * @return Boolean desactivadoUsuario
     */
     function desactiveEquipo($id_equipo)
    {
        define('INACTIVO', '1');

        include '../config/Database.php';
            $sql_update = "UPDATE
                                `equipo`
                            SET
                                `cod_estado_equipo`    = '".INACTIVO."'
                            WHERE
                                `equipo`.`id_equipo`  = '".$id_equipo."'";
            $desactivadoClienteDb = $db->query($sql_update)
            or die(
                '<h1 class="text-center">Oooops!</h1>
                    <br>
                    <p>Hubo un error al actualizar estado al Equipo.</p>
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

/**
 * Imprimir estado de usuario en texto por codigo de estado de usuario BD
 *
 * $cod_estado_usuario @param int codigo de estado de usuario desde BD
 *
 * @return String echo <td></td>
 */
function printCodEstadoEquipoToTable($cod_estado_equipo)
{
    switch ($cod_estado_equipo)
     {
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
function printCodTipoEquipoToTable($cod_tipo_equipo)
{
    switch ($cod_tipo_equipo) 
    {
    case '1':
        echo '
            <td class="text-center">
                Escritorio
            </td>';
        break;
    case '2':
        echo '
            <td class="text-center">
                Portatil
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
 * Imprimir Aviso error crear nuevo usuario
 *
 * $db @param Object db desde BD
 *
 * @return String echo html
 */
function infoErrorCreatedEquipo($db)
{
    echo '<div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="btn btn-info" onclick="goBack()">Regresar</button>
                <h1 class="section-title modal-title text-center"> Oooops!</h1>
            </div>
            <hr>
            <div class="modal-body">
                Hubo un error al registrar al Equipo.
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
function infoErrorUpdateEquipo($db)
{
    echo '<div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="btn btn-info" onclick="goBack()">Regresar</button>
                <h1 class="section-title modal-title text-center"> Oooops!</h1>
            </div>
            <hr>
            <div class="modal-body">
                Hubo un error al actualizar el Equipo.
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

}// End Class Equipo
?>




