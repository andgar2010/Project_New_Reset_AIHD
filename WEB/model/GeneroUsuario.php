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

class GeneroUsuario
{
    protected $id_genero;
    protected $nombre;

    /**
     * This Construct Class Usuario
     */
    public function __construct()
    {

    }

    /**
     * Get the value of id_genero
     */
    public function getId_genero()
    {
        return $this->id_genero;
    }

    /**
     * Set the value of id_genero
     *
     * @return  self
     */
    public function setId_genero($id_genero)
    {
        $this->id_genero = $id_genero;

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
     * Consultar lista de genero
     *
     * @return String arrayListGenero
     */
    public function readGenero()
    {
        include '../../config/Database.php';
        $sql_query = "SELECT * FROM genero_usuario";

        if ($output_sql = $db->query($sql_query)) {

            if ($row = $output_sql->num_rows == 0) {
                echo'No hay datos de Tipo de Documento Usuarios';
            } else {
                while ($row = $output_sql->fetch_assoc()) {
                    echo'
                    <label
                        id="cod_genero"
                        for="'.$row['nombre'].'"
                        class="radio-inline pmd-radio pmd-radio-ripple-effect"
                    >
                    <input
                        type="radio"
                        name="cod_genero"
                        id="'.$row['nombre'].'"
                        value="'.$row['id_genero'].'"
                        required
                    >
                        &nbsp;'.$row['nombre'].'
                    </label>';
                }
                $output_sql->close();
            }
            $db->close();
        }

    }//End readGenero()
}
?>