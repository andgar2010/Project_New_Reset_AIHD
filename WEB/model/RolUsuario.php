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

class RolUsuario
{
    protected $id_rol;
    protected $nombre;

    /**
     * This Construct Class Usuario
     */
    public function __construct()
    {

    }

    /**
     * Get the value of id_rol
     */
    public function getId_rol()
    {
        return $this->id_rol;
    }

    /**
     * Set the value of id_rol
     *
     * @return  self
     */
    public function setId_rol($id_rol)
    {
        $this->id_rol = $id_rol;

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
     * Consultar lista de rol
     *
     * @return String arrayListRol
     */
    public function readRol()
    {
        include '../../config/Database.php';
        $sql_query = "SELECT * FROM rol_usuario";

        if ($output_sql = $db->query($sql_query)) {

            if ($row = $output_sql->num_rows == 0) {
                echo'No hay datos de Rol Usuarios';
            } else {
                while ($row = $output_sql->fetch_assoc()) {
                    echo'<option value="'.$row['id_rol'].'">'.$row['nombre'].'</option>';
                }
                $output_sql->close();
            }
            $db->close();
        }

    }//End readRol()
}
?>