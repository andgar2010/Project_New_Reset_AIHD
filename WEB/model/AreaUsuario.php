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

class AreaUsuario
{
    protected $id_area;
    protected $nombre;

    /**
     * This Construct Class Usuario
     */
    public function __construct()
    {

    }

    /**
     * Get the value of id_area
     */
    public function getId_area()
    {
        return $this->id_area;
    }

    /**
     * Set the value of id_area
     *
     * @return  self
     */
    public function setId_area($id_area)
    {
        $this->id_area = $id_area;

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
     * Consultar lista de area
     *
     * @return String arrayListArea
     */
    public function readArea()
    {
        include '../../config/Database.php';
        $sql_query = "SELECT * FROM area_usuario";

        if ($output_sql = $db->query($sql_query)) {

            if ($row = $output_sql->num_rows == 0) {
                echo'No hay datos de Area Usuarios';
            } else {
                while ($row = $output_sql->fetch_assoc()) {
                    echo'<option value="'.$row['id_area'].'">'.$row['nombre'].'</option>';
                }
                $output_sql->close();
            }
            $db->close();
        }

    }//End readArea()



     /**
     * Extraer el nombre del area
     *
     * @return String nomArea
     */
    public function readSingleNomArea($id_area)
    {
        include '../../config/Database.php';
        $sql_query = "SELECT * FROM area_usuario WHERE id_area = " . $id_area;

        if ($output_sql = $db->query($sql_query)) {

            if ($row = $output_sql->num_rows == 0) {
                echo'No hay datos de Area Usuarios';
            } else {
                while ($row = $output_sql->fetch_assoc()) {
                     $nomArea = $row['nombre'];
                }
                $output_sql->close();
            }
            $db->close();

        }

        return $nomArea;
    }//End readSingleNomArea()
}
?>