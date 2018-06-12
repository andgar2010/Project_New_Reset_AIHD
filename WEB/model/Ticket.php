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
 * Modelo Clase Usuario
 *
 * @category Class
 * @package  Model
 * @author   Andres Garcia <afagrcia0479@misena.edu.co>
 * @author   Dayanne Agudelo <dsagudelo84@misena.edu.co>
 * @license  <a href="www.mit.org">mit</a>
 * @Release  GIT:<ASD4A6S54DASD>
 * @link     www.github.com/andgar2010
 *
 * This Model of Class User
 * Source DB
 */
class Ticket
{
    protected $id_ticket;
    protected $fecha_inicio;
    protected $fecha_fin;
    protected $descrip_incidencia;
    protected $archivo_evidencia;
    protected $cod_categoria;
    protected $cod_estado_ticket;
    protected $cod_equipo;
    protected $cod_usuario;

    /**
     * This Construct Class Usuario
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
     */
    public function getDescrip_incidencia()
    {
        return $this->descrip_incidencia;
    }

    /**
     * Set the value of descrip_incidencia
     * 
     * @return self
     */
    public function setDescrip_incidencia($descrip_incidencia)
    {
        include '../config/Database.php';
        $this->descrip_incidencia = $db->real_escape_string($descrip_incidencia);

        //return $this;
    }

    /**
     * Get the values of archivo_evidencia
     */
    public function getArchivo_evidencia()
    {
        return $this->archivo_evidencia;
    }

    /**
     *  set the value of archivo evidencia
     * 
     * @return self
     */
    public function setArchivo_evidencia($archivo_evidencia)
    {
        include '../config/Database.php';
        $this->archivo_evidencia = $db->real_escape_string($archivo_evidencia);

        //return $this;
    }

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
    public function get_Cod_equipo()
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
        $this->cod_estado =$db->real_escape_string($cod_equipo);

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
     * Crear ticket al BD mediante metodo por objeto ticket
     *
     * @return Boolean $insertadoTicketDb
     */
    function createTicket()
    {
        include '../config/Database.php';
        define('ENVIADO', '1');//Defecto num 1: Activo por Estado de TICKET

        $sql_insert = "INSERT INTO 'ticket'
                            ('descrip_incidencia',
                            'archivo_evidencia',
                            'cod_categoria',
                            'cod_estado_ticket',
                            'cod_usuario',
                            'cod_equipo')
                        VALUES
                            ('".$this->getDescrip_incidencia()."',
                            '".$this->getArchivo_evidencia()."',
                            '".$this->getCod_categoria()."',
                            '".$this->getCod_estado_ticket()."',
                            '".$this->getCod_usuario()."',
                            '".$this->get_Cod_equipo()."',
                            '".ENVIADO."');";

        $insertadoTicketDb = $db->query($sql_insert)or die (infoErrorCreatedTicket($db));
        $db->close();
        return ($insertadoTicketDb) ? true : false;
    }
     
}

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