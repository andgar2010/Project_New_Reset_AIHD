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

class TipoEquipo
{
    protected $id_tipo_equipo;
    protected $nombre;

    /**
     * This Construct Class Equipo
     */
    public function __construct()
    {

    }

    /**
     * Get the value of id_tipo_equipo
     */
    public function getId_tipo_equipo()
    {
        return $this->id_tipo_equipo;
    }

    /**
     * Set the value of id_tipo_equipo
     *
     * @return  self
     */
    public function setId_tipo_equipo($id_tipo_equipo)
    {
        $this->id_tipo_equipo = $id_tipo_equipo;

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
     * Consultar lista de tipo_equipo
     *
     * @return String arrayListTipoEquipo
     */
    public function readTipoEquipo()
    {
        include '../config/Database.php';
        $sql_query = "SELECT * FROM tipo_equipo";

        if ($output_sql = $db->query($sql_query)) {

            if ($row = $output_sql->num_rows == 0) {
                echo'No hay datos del tipo de equipo';
            } else {
                while ($row = $output_sql->fetch_assoc()) {
                    echo'
                    <label
                        id="cod_tipo_equipo"
                        for="'.$row['nombre'].'"
                        class="radio-inline pmd-radio pmd-radio-ripple-effect"
                    >
                        <input
                            name="cod_tipo_equipo"
                            id="'.$row['nombre'].'"
                            value="'.$row['id_tipo_equipo'].'"
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

    }//End readTipoEquipo()
}
?>




