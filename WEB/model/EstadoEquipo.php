<?php
/**
 * Modelo Clase Equipo
 *
 * @category Class
 * @package  Model
 * @author   Andres Garcia <afagrcia0479@misena.edu.co>
 * @author   Camila Torres <lctorres14@misena.edu.co>
 * @license  <a href="www.mit.org">mit</a>
 * @version  GIT:<ASD4A6S54DASD>
 * @link     www.github.com/andgar2010
 *
 * This Model of Class Equipo
 * Source DB
 */

class EstadoEquipo
{
    protected $id_estado_equipo;
    protected $nombre;

    /**
     * This Construct Class Equipo
     */
    public function __construct()
    {

    }

    /**
     * Get the value of id_estado_equipo
     */
    public function getId_estado_equipo()
    {
        return $this->id_estado_equipo;
    }

    /**
     * Set the value of id_estado_equipo
     *
     * @return  self
     */
    public function setId_estado_equipo($id_estado_equipo)
    {
        $this->id_estado_equipo = $id_estado_equipo;

        return $this;
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
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Consultar lista de estado_equipo
     *
     * @return String arrayListEstadoEquipo
     */
    public function readEstadoEquipo()
    {
        include '../config/Database.php';
        $sql_query = "SELECT * FROM estado_equipo";

        if ($output_sql = $db->query($sql_query)) {

            if ($row = $output_sql->num_rows == 0) {
                echo'No hay datos del estado del equipo';
            } else {
                while ($row = $output_sql->fetch_assoc()) {
                    echo'
                    <label
                        id="cod_estado_equipo"
                        for="'.$row['nombre'].'"
                        class="radio-inline pmd-radio pmd-radio-ripple-effect"
                    >
                        <input
                            name="cod_estado_equipo"
                            id="'.$row['nombre'].'"
                            value="'.$row['id_estado_equipo'].'"
                            type="radio"
                            required
                        >
                        &nbsp;'.$row['nombre'].'
                    </label>';
                }
                $output_sql->close();
            }
            $db->close();
        }

    }//End readEstadoEquipo()
}
?>




