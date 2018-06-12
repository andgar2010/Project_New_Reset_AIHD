<?php
/**
 * Model Clase EstadoTicket
 * 
 * @category Class
 * @package  Model
 * @author   Andres Garcia <afagrcia0479@misena.edu.co>
 * @author   Dayanne Agudelo <dsagudelo84@misena.edu.co>
 * @license  <a href="www.mit.org">mit</a>
 * @version  GIT:<ASD4A6S54DASD>
 * @link     www.github.com/andgar2010
 * 
 * This Model of Class EstadoTicket
 * Source DB
 */

 class EstadoTicket 
 {
     protected $id_estado_ticket;
     protected $nombre;

     /**
      * This Construct Class EstadoTicket
      */
      public function __construct()
      {

      }

      /**
       * Get the value of id_estado_ticket
       */
      public function getId_estado_ticket()
      {
       return $this->id_estado_ticket;   
      }

      /**
       * Set the value of id_estado_ticket
       * 
       * @return self
       */
      public function setId_estado_ticket($id_estado_ticket)
      {
          $this->id_estado_ticket = $id_estado_ticket;

          return $this;
      }



      /**
       * Get the value of nombre
       */
       public function getNombre($nombre)
       {
           return $this->nombre;
       }

       /**
        * Set the valuee of nombre
        *
        *@return self
        */
        public function setNombre($nombre)
        {
            $this->nombre = $nombre;

            return $this;
        }

        /**
         * consultar lista de id_estado_ticket
         * 
         * @return String array_listEstado_ticket
         */
        public function readAllEstado_ticket()
        {
                include '../../config/Database.php';
                $sql_query = "SELECT * FROM estado_ticket";

                if($output_sql = $db->query($sql_quey)){
                    
                    if ($row = $output_sql->num_rows == 0){
                        echo 'No hay datos de Estado Ticket';
                    }else{
                        while ($row = $output_sql->fetch_assoc()){
                            echo '<option value="'.$row['id_estado_ticket'].'">'.$row['nombre'].'</option>';

                        }
                        $output_sql->close();
                    }
                    $db->close();
                }
        }//End readEstado_Ticket()
}
 ?>

