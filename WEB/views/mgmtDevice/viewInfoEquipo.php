<?php
/**
 * Modelo Vista Usuario
 *
 * @category View
 * @package  GestionUsuarios
 * @author   Andres Garcia <afagrcia0479@misena.edu.co>
 * @author   Camila Torres <lctorres14@misena.edu.co>

 * @license  <a href="www.mit.org">mit</a>
 * @version  GIT:<ASD4A6S54DASD>
 * @link     www.github.com/andgar2010
 *
 * Editar cuenta de usuario MVC Source DB
 */
   
if (isset($_GET['id'])) {

    $id_equipo = intval($_GET['id']);
    include '../../model/Equipo.php';
    $equipo = new Equipo();
    $equipo->readSingleEquipo($id_equipo);



   if ($equipo->getSerial_equipo() == null) {

        //Si no encontrado registro de usuario en base de datos, redireccionar -> viewListUsers.php con parametros
        header("location: ./viewListEquipo.php?info=search&result=no");

    } else {

        //Si encontrado registro de usuario en base de datos, llevar datos de usuario al formulario
        $id_equipo             = $equipo->getId_equipo();
        $cod_tipo_equipo           = $equipo->getCod_tipo_equipo();
        $serial_equipo              = $equipo->getSerial_equipo();
        $cod_estado_equipo     = $equipo->getCod_estado_equipo();
    }

} else {

    header('location:./viewListEquipo.php?info=search&result=no');
}
?>

    <!DOCTYPE html>
    <html lang="es">

    <head>
        <!-- HTML Meta Tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Editar equipo</title>
        <meta name="description" content="Registro de nuevo equipo de NEW RESET A.H.I.D.">
        <!-- End HTML Meta Tags -->

        <?php   require '../../config/base_head.php';
            //require '../config/googleAnaytics.php';?>
    </head>

    <body>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="section-title modal-title text-center">Editar equipo</h1>
                </div>
                <hr>
                <div class="modal-body">
                    <table class="table table-striped table-condensed">
                        <tr>
                            <th width="20%">ID Equipo</th>
                            <td>
                                <?php echo $id_equipo; ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Tipo Equipo</th>
                            <td>
                                <?php echo $equipo->printCodTipoEquipoToTable($cod_tipo_equipo)  ; ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Serial</th>
                            <td>
                                <?php echo $serial_equipo; ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Estado del equipo</th>
                            <td>
                                <?php echo $equipo->printCodEstadoEquipoToTable($cod_estado_equipo); ?>
                            </td>
                        </tr>
                    </table>
                    <a onClick="goToListDevices()" class="btn btn-sm btn-info">
			        	<span class="fa fa-arrow-circle-left fa-lg" aria-hidden="true"></span> Regresar
			        </a>

			        <a onClick="goToEditDevice(<?php echo $id_equipo;?>)" title="Editar datos" class="btn btn-sm btn-success">
			        	<span class="fa fa-edit fa-lg" aria-hidden="true"></span> Editar datos
			        </a>


			         <a href="../../controllers/controllerDeletedEquipo.php?btnClickedUser=delete&name=<?php echo $serial_equipo .'&nik='.$id_equipo;?>" title="Eliminar" class="btn btn-sm btn-danger" onclick="return confirm(\'Esta seguro de borrar los datos '.$serial_equipo.'? \')">
			        	<span class="fa fa-trash fa-lg" aria-hidden="true"></span> Eliminar
			        </a>
                </div>
            </div>
        </div>
        <div class="modal-footer"></div>

        <?php require '../../config/base_script.php';?>
    </body>

    </html>