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

class TipoDocumentoUsuario
{
    protected $id_tipo_documento;
    protected $nombre;

    /**
     * This Construct Class Usuario
     */
    public function __construct()
    {

    }

    /**
     * Get the value of id_tipo_documento
     */
    public function getId_tipo_documento()
    {
        return $this->id_tipo_documento;
    }

    /**
     * Set the value of id_tipo_documento
     *
     * @return  self
     */
    public function setId_tipo_documento($id_tipo_documento)
    {
        $this->id_tipo_documento = $id_tipo_documento;

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
     * Consultar lista de tipo_documento
     *
     * @return String arrayListTipoDocumento
     */
    public function readTipoDocumento()
    {
        include '../../config/Database.php';
        $sql_query = "SELECT * FROM tipo_documento_usuario LIMIT 3";

        if ($output_sql = $db->query($sql_query)) {

            if ($row = $output_sql->num_rows == 0) {
                echo'No hay datos de Tipo de Documento Usuarios';
            } else {
                while ($row = $output_sql->fetch_assoc()) {
                    echo'
                    <label
                        id="cod_tipo_doc"
                        for="'.$row['nombre'].'"
                        class="radio-inline pmd-radio pmd-radio-ripple-effect"
                    >
                        <input
                            name="cod_tipo_doc"
                            id="'.$row['nombre'].'"
                            value="'.$row['id_tipo_documento'].'"
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

    }//End readTipoDocumento()
}
?>




