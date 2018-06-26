<?php
/**
 * Modelo Clase TipoFallaTicket
 *
 * @category Class
 * @package  Model
 * @author   Andres Garcia <afagrcia0479@misena.edu.co>
 * @author   Dayanne Agudelo <dsagudelo84@misena.edu.co>
 * @license  <a href="www.mit.org">mit</a>
 * @version  GIT:<ASD4A6S54DASD>
 * @link     www.github.com/andgar2010
 *
 * This Model of Class TipoFallaTicket
 * Source DB
 */

 Class TipoFallaTicket
 {
     protected $id_tipo_falla_ticket;
     protected $nombre;

     /**
      * This Construct Class TipoFallaTicket
      */
      public function __construct()
      {

      }

      /**
       * Get the value of id_tipo_falla_ticket
       */
      public function getId_tipo_falla_ticket()
      {
          return $this->id_tipo_falla_ticket;
      }

      /**
       * Set the value of id_tipo_falla_ticket
       * 
       * @return self
       */
      public function setId_tipo_falla_ticket($id_tipo_falla_ticket)
      {
          $this->id_tipo_falla_ticket = $id_tipo_falla_ticket;

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
       * @return self
       */
      public function setNombre($nombre)
      {
          $this->nombre = $nombre;

          return $this;
      }

      /**
       * consultar lista de categoria ticket
       * 
       * @return String arrayListCategoriaTicket
       */
      public function readAllCategoriaTicket()
      {
          include '../config/Database.php';
          $sql_query = "SELECT * FROM tipo_falla_ticket";

          if($output_sql = $db->query($sql_query)){

            if ($row = $output_sql->num_rows == 0){
                echo 'No hay datos de tipo de falla del Ticket';
            } else {
                while ($row = $output_sql->fetch_assoc()){
                echo '<option value="'.$row['id_tipo_falla_ticket'].'">'.$row['nombre'].'</option>';
                }
                $output_sql->close();
            }
            $db->close();
          }
      }//End readCategoriaTicket()

 public function readSingleCodToNameCategoria($id_tipo_falla_ticket)
 {
    include '../../config/Database.php';
    $sql_query = "SELECT nombre FROM tipo_falla_ticket WHERE id_tipo_falla_ticket =". $id_tipo_falla_ticket;
   if ($output_sql = $db->query($sql_query)) {

        if ($output_sql->num_rows == 0) {
            // Si no encontrado usuario en BD
            return $encontradoDB = false;
        } else {
            // Si encontrado datos de usuario en BD, recoge los datos al this objeto.
            $encontradoDB = true;

            /* fetch object array */
            while ($obj = $output_sql->fetch_object()) {
                $this->setNombre($obj->nombre);
             
            }             
        }
        /* free output_sql set */
        //$output_sql->close();
    }
    /* close connection */
    $db->close();
} //End readSingleRecordUsuer()


 }


 ?>