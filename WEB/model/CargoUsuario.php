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

class CargoUsuario
{
    protected $id_cargo;
    protected $nombre;

    /**
     * This Construct Class Usuario
     */
    public function __construct()
    {

    }

    /**
     * Get the value of id_cargo
     */
    public function getId_cargo()
    {
        return $this->id_cargo;
    }

    /**
     * Set the value of id_cargo
     *
     * @return  self
     */
    public function setId_cargo($id_cargo)
    {
        $this->id_cargo = $id_cargo;

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
     * Consultar lista de cargo
     *
     * @return String arrayListCargo
     */
    public function readCargo()
    {
        include '../../config/Database.php';
        $sql_query = "SELECT * FROM cargo_usuario";

        if ($output_sql = $db->query($sql_query)) {

            if ($row = $output_sql->num_rows == 0) {
                echo'No hay datos de Cargo Usuarios';
            } else {
                while ($row = $output_sql->fetch_assoc()) {
                    echo'<option value="'.$row['id_cargo'].'">'.$row['nombre'].'</option>';
                }
                $output_sql->close();
            }
            $db->close();
        }

    }//End readCargo()


    /**
     * Extraer el nombre del cargo
     *
     * @return String nomCargo
     */
    public function readSingleNomCargo($id_cargo)
    {
        include '../config/Database.php';
        $sql_query = "SELECT * FROM cargo_usuario WHERE id_cargo = " . $id_cargo;

        if ($output_sql = $db->query($sql_query)) {

            if ($row = $output_sql->num_rows == 0) {
                echo'No hay datos de Cargo Usuario';
            } else {
                while ($row = $output_sql->fetch_assoc()) {
                    $nomCargo = $row['nombre'];
                }
                $output_sql->close();
            }
            $db->close();

        }

        return $nomCargo;
    }//End readSingleNomcargo()
  
    /**
     * Extraer el nombre del cargo
     *
     * @return String nomCargo
     */
    public function readSingleNomCargoUp($id_cargo)
    {
        include '../../config/Database.php';
        $sql_query = "SELECT * FROM cargo_usuario WHERE id_cargo = " . $id_cargo;

        if ($output_sql = $db->query($sql_query)) {

            if ($row = $output_sql->num_rows == 0) {
                echo'No hay datos de Cargo Usuario';
            } else {
                while ($row = $output_sql->fetch_assoc()) {
                    $nomCargo = $row['nombre'];
                }
                $output_sql->close();
            }
            $db->close();

        }

        return $nomCargo;
    }//End readSingleNomcargo()
}
?>