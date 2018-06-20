<?php
/**
 * Modelo Clase Ticket
 *
 * @category Class
 * @package  Model
 * @author   Andres Garcia <afagrcia0479@misena.edu.co>
 * @author   Dayanne Agudelo <dsagudelo84@misena.edu.co>
 * @license  <a href="www.mit.org">mit</a>
 * @version  GIT:<ASD4A6S54DASD>
 * @link     www.github.com/andgar2010
 *
 * This Model of Class User
 * Source DB
 */

 /**
 * Modelo Clase ticket
 *
 * @category Class
 * @package  Model
 * @author   Andres Garcia <afagrcia0479@misena.edu.co>
 * @author   Dayanne Agudelo <dsagudelo84@misena.edu.co>
 * @license  <a href="www.mit.org">mit</a>
 * @Release  GIT:<ASD4A6S54DASD>
 * @link     www.github.com/andgar2010
 *
 * This Model of Class Ticket
 * Source DB
 */
class Ticket
{
    protected $id_ticket;
    protected $fecha_inicio;
    protected $fecha_fin;
    protected $descrip_incidencia;
    //protected $archivo_evidencia;
    protected $cod_categoria;
    protected $cod_estado_ticket;
    protected $cod_equipo;
    protected $cod_usuario;

    /**
     * This Construct Class Ticket
     */
    public function __construct()
    {
    }//End construct()

    /**
     * Get the value of id_ticket
     */
    public function getId_ticket()
    {
        return $this->id_ticket;
    }

    /**
     * Set the value of id_ticket
     * 
     *  @return self
     */
    public function setId_ticket($id_ticket)
    {
        include '../config/Database.php';
        $this->id_ticket= $db->real_escape_string($id_ticket);

        // Return $this;
    }

    /**
     * Get the value of fecha-inicio
     */
    public function getFecha_inicio()
    {
        return $this->fecha_inicio;
    }

    /**
     * Set the value of fecha_inicio
     * 
     * @return self
     */
    public function setFecha_inicio($fecha_inicio)
    {
        include '../config/Database.php';
        $this->fecha_inicio = $db->real_escape_string($fecha_inicio);

        //return $this;
    }

    /**
     * Get the value of Fecha_fin
     */
    public function getFecha_fin()
    {
        return $this->fecha_fin;
    }

    /**
     * Set the valur of fecha_fin
     * 
     * @return self
     */
    public function setFecha_fin($fecha_fin)
    {
        include '../config/Database.php';
        $this->fecha_fin =$db->real_escape_string($fecha_fin);
        //return $this;
    }

    /**
     * Get the values of descrip_incidencia
     **/
    public function getDescrip_incidencia()
    {
        return $this->descrip_incidencia;
    }
    
    /**
     * Set the value of descrip_incidencia
     *
     *@return self
    */
    public function setDescrip_incidencia($descrip_incidencia)
    {
        include '../config/Database.php';
       $this->descrip_incidencia = $db->real_escape_string($descrip_incidencia);

      //return $this;
    }
     

    /**
     * Get the values of archivo_evidencia
     *
    *public function getArchivo_evidencia()
    *{
    *    return $this->archivo_evidencia;
    *}
    */

    /**
     *  set the value of archivo evidencia
     * 
     * @return self
     
    *public function setArchivo_evidencia($archivo_evidencia)
    *{
     *   include '../config/Database.php';
     *   $this->archivo_evidencia = $db->real_escape_string($archivo_evidencia);

     *   //return $this;
    *}
    */

    /**
     * Get the values of cod_categoria
     */
    public function getCod_categoria()
    {
        return $this->cod_categoria;
    }

    /**
     * set the value of cod_categoria
     * 
     * @return self
     */
    public function setCod_categoria($cod_categoria)
    {
        include '../config/Database.php';
        $this->cod_categoria = $db->real_escape_string($cod_categoria);

        //return $this;
    }

    /**
     * Get the values of cod_estado_ticket
     */
    public function getCod_estado_ticket()
    {
        return $this->cod_estado_ticket;
    }

    /**
     * set the value of cod-estado_ticket
     * 
     * @return self
     */
    public function setCod_estado_ticket($cod_estado_ticket)
    {
        include '../config/Database.php';
        $this->cod_estado_ticket = $db->real_escape_string($cod_estado_ticket);

        //return $this;
    }

    /**
     * get the values of cod_equipo
     */
    public function getCod_equipo()
    {
        return $this->cod_equipo;
    }

    /**
     * set the values of cod_equipo
     * 
     * @return self
     */
    public function setCod_equipo($cod_equipo)
    {
        include '../config/Database.php';
        $this->cod_equipo =$db->real_escape_string($cod_equipo);

        //return $this;
    }

    /**
     * Get the values of cod_usuario
     */
    public function getCod_usuario()
    {
        return $this->cod_usuario;
    }

    /**
     * Set the values of Cod_usuario
     * 
     * @return self
     */
    public function setCod_usuario($cod_usuario)
    {
        include '../config/Database.php';
        $this->cod_usuario =$db->real_escape_string($cod_usuario);

        //return $this;
    }
    
    /**
     * 
     */
    function readLastTicket()
    {
        include '../../config/Database.php';

        $sql_query = "SELECT id_ticket FROM `ticket` ORDER BY id_ticket DESC LIMIT 1";
        
        if ($output_sql = $db->query($sql_query)) {

            if ($output_sql->num_rows == 0) {
                // Si no encontrado usuario en BD
                return $encontradoDB = 0;
            } else {
                /* fetch object array */
                while ($obj = $output_sql->fetch_object()) {
                    $Id_ticket = $obj->id_ticket;
                }
            }
            /* free output_sql set */
            $output_sql->close();
        }
        /* close connection */
        $db->close();

        return $Id_ticket;

    }


     /**
     * Crear ticket al BD mediante metodo por objeto ticket
     *
     * @return Boolean $insertadoTicketDb
     */
    function createTicket()
    {
        include '../config/Database.php';
        define('ENVIADO', '1');//Defecto num 1: Activo por Estado de TICKET
                            $sql_insert = "INSERT INTO `ticket`
                                                (`descrip_incidencia`,
                                                `cod_categoria`, 
                                                `cod_estado_ticket`,
                                                `cod_usuario`,
                                                `cod_equipo`) 
                                            VALUES 
                                                ('".$this->getDescrip_incidencia()."',
                                                '".$this->getCod_categoria()."',
                                                '".ENVIADO."',
                                                '".$this->getCod_usuario()."',
                                                '".$this->getCod_equipo()."')";
        $insertadoTicketDb = $db->query($sql_insert)or die (infoErrorCreatedTicket($db));
        $db->close();
        return ($insertadoTicketDb) ? true : false;
    }

/**
 * Consultar lista de ticket
 * 
 * @return String arrayListTicket
 */
public function readAllListTicket()
{
    include '../../config/Database.php';
    $sql_query = " SELECT 
	ticket.id_ticket, 
    ticket.fecha_inicio,
    tipo_equipo.nombre as 'NomTipoEquipo',
    equipo.serial_equipo,
    categoria_ticket.nombre as 'NomTipoIncidencia',
    ticket.descrip_incidencia,
    estado_ticket.nombre as 'NomEstadoTicket'
FROM
	ticket
INNER JOIN
	equipo
ON
	equipo.id_equipo = ticket.cod_equipo
INNER JOIN
	tipo_equipo
ON
	tipo_equipo.id_tipo_equipo = equipo.cod_tipo_equipo
INNER JOIN
	categoria_ticket
ON
	categoria_ticket.id_categoria = ticket.cod_categoria
INNER JOIN
	estado_ticket
ON
	estado_ticket.id_estado_ticket = ticket.cod_estado_ticket";

    if($output_sql = $db->query($sql_query)){
        if($row = $output_sql->num_rows == 0){
            echo'
            <tr>
                <td colspan="8">No hay datos</td>
            </tr>';
        }else{
            while ($row = $output_sql->fetch_assoc()){
                echo'
                <tr id="' .$row['id_ticket'] . '">
                    <td class="text-center" id="id_ticket">
                        <a onClick=" goToInfoTicket('. $row['id_ticket'] .')">
                        <span class="fa fa-info-circle fa-lg" aria-hidden="true">&nbsp;</span>'
                            .$row['id_ticket'].
                        '</a> 
                    </td>
                    <td>'
                        . $row['fecha_inicio'].
                    '</td>
                    <td>'
                        .$row['NomTipoEquipo'].
                    '</td>
                    <td>'
                        .$row['serial_equipo'].
                    '</td>
                    <td>'
                        .$row['NomTipoIncidencia'].
                    '</td>
                    <td>'
                        .$row['descrip_incidencia'].
                    '</td>
                    <td>'
                        .$row['NomEstadoTicket'].
                    '</td>';
                echo'
                    <td class="text-center">
                        <a id="editTicket" onClick="goToEditTicket('. $row['id_ticket'] . ') " title="Editar datos" class="btn btn-primary btn-sm">
                            <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> </a>
                        <a href="../../controllers/controllerDeleteTicket.php?btnClickedUser=delete&serial=' .$row['serial_equipo'].'& nik=' .$row['id_ticket'].'" title="Eliminar" onClick="return confirm(\'Desea finalizar el proceso del ticket numero ' .$row['id_ticket'] .'?\')"
                        class="btn btn-danger btn-sm">
                            <span class="fa fa-archive" aria-hidden="true"></span>
                            </a>
                    </tr>';
            }

            $output_sql->close();
        }

        $db->close();     
    }
} //End readTicket()

/**
 * consultar unico ticket
 * 
 * $id_ticket @param int numero de ticket desde seleccion lista de ticket
 * 
 * @return Ticket objeto
 */
public function readSingleRecordTicket($id_ticket)
{
    include '../../config/Database.php';
    
    $sql_query = "SELECT
	                fecha_inicio,
                    id_ticket,
                    cod_estado_ticket,
                    fecha_fin,
                    cod_usuario,
                    cod_equipo,
                    descrip_incidencia
                FROM
                	ticket
                WHERE
                	id_ticket = ". $id_ticket;
    
    
    if ($output_sql = $db->query($sql_query)){
        if($output_sql->num_rows == 0){
            //Si no encuentra ticket en BD
            return $encontradoDB = false;
        }else{
            
            //Si encuentra el ticket en BD, recoge los datos al this objeto.
            $encontradoDB = true;

            /*fetch object array*/
            while ($obj = $output_sql->fetch_object()){
                $this->id_ticket = $obj->id_ticket;
                $this->fecha_inicio = $obj->fecha_inicio;
                $this->cod_estado_ticket = $obj->cod_estado_ticket;
                $this->fecha_fin = $obj->fecha_fin;
                $this->cod_usuario = $obj->cod_usuario;
                $this->cod_equipo = $obj->cod_equipo;
                $this->descrip_incidencia = $obj->descrip_incidencia;
            }
            /*free output_sql set*/
            $output_sql->close();
        }
        /*close connection*/
        $db->close();
    } //End readSingleRecordTicket
}

    /**
    * Editar unico ticket
    * 
    * $$id_ticket @param int numero de ticket desde seleccion de lista de ticket
    * 
    * @return Boolean actualizadoTicket
    */
    public function updateTicket()
    {
        include '../config/Database.php';

        $sql_update = "UPDATE   'ticket'
                        SET 'descrip_incidencia'         =
                            '".$this->getDescrip_incidencia()."'
                        
                        WHERE 
                            'ticket'.'id_ticket'        =  
                            '".$this->getId_ticket()."' AND 'ticket'.'cod_equipo' = '".$this->getCod_equipo()."'";

                          /*  "UPDATE   'ticket'
                        SET 'fecha_inicio'         =
                        '".$this->getFecha_inicio()."',
                            'cod_categoria'             =
                            '".$this->getCod_categoria()."',
                            'descrip_incidencia'    = 
                            '".$this->getDescrip_incidencia()."',
                            'archivo_evidencia'     =
                            '".$this->getArchivo_evidencia()."',
                            'cod_estado_ticket'     =
                            '".$this->getCod_estado_ticket()."'
                        WHERE 
                            'ticket'.'id_ticket'        =  
                            '".$this->getId_ticket()."'";*/
            $actualizadoTicketDb =$db->query($sql_update) or
            die(infoErrorUptadeTicket($db));

            /* free sql_update set */
            //$actualizadoTicketDb->close();

            /* close connection */
            $db->close();

            return ($actualizadoTicketDb) ? true : false;
    }//End updateTicket()

    /**
     * Archivar ticket
     * 
     * $id_ticket @param int numero de ticket desde seleccion lista de ticket
     * 
     * @return Boolean archivarTicket
     */
    public function archivarTicket($id_ticket)
    {
        define('SOLUCIONADO', '4');

        include '../config/Database.php';

       // UPDATE `ticket` SET `cod_estado_ticket` = '4' WHERE `ticket`.`id_ticket` = 12;
            $sql_update = "UPDATE `ticket` SET `cod_estado_ticket` = '".SOLUCIONADO."' WHERE `ticket`.`id_ticket` = ".$id_ticket;
            
            $archivadoTicketDb = $db->query($sql_update)
            or die(
                '<h1 class="text-center">Oooops!</h1>
                    <br>
                    <p>Hubo un error al archivar el ticket.</p>
                    <br><br>
                    <strong>Origen error:</strong>
                    <br>' . mysqli_error($db)
            );
            /* free sql_update set*/
            //$archivadoTicketDb->close();

            /*close connection*/
            $db->close();
            return ($archivadoTicketDb) ? true : false;
    }//End archivadoTicket}




/**
 * Imprimir aviso error crear nuevo ticket
 * 
 * $db @param Object db desde BD
 * 
 * @return String echo html
 */
function infoErrorCreateTicket($db)
{   
        echo '<div class="mosal-dialog">
            <div class="modal-content"
             <div class="modal-header"
                 <button class="btn btn-info" onclick="goBack()">Regresar</button>
                    <h1 class="section-title modal-title text-center"> Oooops!</h1>
                </div>
                <hr>
                <div class="modal-body">
                     Hubo un error al registrar el Ticket.
                    <br>
                    <br>
                     <strong>Origen error:</strong>
                    </br>' . mysqli_error($db). '
                </div>
             </div>
             </div>
    
        <script>
            function goBack() {
             window.history.back();
             }
            </script>';
}

}