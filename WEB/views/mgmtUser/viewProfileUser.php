<?php
/**
 * Modelo Clase Usuario
 *
 * @category View
 * @package  GestionUsuarios
 * @author   Andres Garcia <afagrcia0479@misena.edu.co>
 * @license  <a href="www.mit.org">mit</a>
 * @version  GIT:<ASD4A6S54DASD>
 * @link     www.github.com/andgar2010
 *
 * Editar cuenta de usuario MVC Source DB
 */

if (isset($_GET['id'])) {

    $id_usuario = intval($_GET['id']);
    include '../../model/Usuario.php';
    $usuario = new Usuario();
    $usuario->readSingleRecordUser($id_usuario);

    if ($usuario->getNombre() == null) {

        //Si no encontrado registro de usuario en base de datos, redireccionar -> viewListUsers.php con parametros
        header("location: ./viewListUsers.php?info=search&result=no");

    } else {

        //Si encontrado registro de usuario en base de datos, llevar datos de usuario al formulario
        $id_usuario             = $usuario->getId_usuario();
        $cod_tipo_doc           = $usuario->getCod_tipo_doc();
        $documento              = $usuario->getDocumento();
        $nombre                 = $usuario->getNombre();
        $apellido               = $usuario->getApellido();
        $cod_genero             = $usuario->getCod_genero();
        $email                  = $usuario->getEmail();
        $cod_area               = $usuario->getCod_area();
        $cod_cargo              = $usuario->getCod_cargo();
        $cod_rol                = $usuario->getCod_rol();
        $cod_estado_usuario     = $usuario->getCod_estado_usuario();
    }

} else {

    header('location:./viewListUsers.php?info=search&result=no');
}
?>

    <!DOCTYPE html>
    <html lang="es">

    <head>
        <!-- HTML Meta Tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Editar usuario</title>
        <meta name="description" content="Registro de nuevo usuario de NEW RESET A.H.I.D.">
        <!-- End HTML Meta Tags -->

        <?php 
            require '../../config/base_head.php';
            //require '../config/googleAnaytics.php';?>
    </head>

    <body>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="section-title modal-title text-center">Editar usuario</h1>
                </div>
                <hr>
                <div class="modal-body">
                    <table class="table table-striped table-condensed">
                        <tr>
                            <th width="20%">ID Usuario</th>
                            <td>
                                <?php echo $id_usuario; ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Documento</th>
                            <td>
                                <?php echo printCodTDoc($cod_tipo_doc) .' '. $documento; ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Nombre del Usuario</th>
                            <td>
                                <?php echo $nombre .' '. $apellido; ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Género</th>
                            <td>
                                <?php echo printCodGen($cod_genero); ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>
                                <?php echo $email; ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Cargo - Area</th>
                            <td>
                                <?php echo printCodCargoText($cod_cargo) .' '.printCodAreaText($cod_area); ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Rol</th>
                            <td>
                                <?php echo printCodRolText($cod_rol); ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Estado del usuario</th>
                            <td>
                                <?php echo printCodEstadoUToText($cod_estado_usuario); ?>
                            </td>
                        </tr>
                    </table>
                    <a onClick="goToListUsers()" class="btn btn-sm btn-info">
			        	<span class="fa fa-arrow-circle-left fa-lg" aria-hidden="true"></span> Regresar
			        </a>

			        <a onClick="goToEditUser(<?php echo $id_usuario;?>)" title="Editar datos" class="btn btn-sm btn-success">
			        	<span class="fa fa-edit fa-lg" aria-hidden="true"></span> Editar datos
			        </a>


			        <a href="../../controllers/controllerDeletedUser.php?btnClickedUser=delete&name=<?php echo $nombre .'&nik='.$id_usuario;?>" title="Eliminar" class="btn btn-sm btn-danger" onclick="return confirm(\'Esta seguro de borrar los datos '.$nombre. ' '. $apellido.'? \')">
			        	<span class="fa fa-trash fa-lg" aria-hidden="true"></span> Eliminar
			        </a>
                </div>
            </div>
        </div>
        <div class="modal-footer"></div>

        <?php require '../../config/base_script.php';?>
        <?php
        /**
         * Imprimir estado de usuario en texto por codigo de estado de usuario BD
         *
         * $cod_estado_usuario @param int codigo de estado de usuario desde BD
         *
         * @return String echo <td></td>
         */
        function printCodGen($cod_genero)
        {
            switch ($cod_genero) {
            case '1':
                echo 'Masculino';
                break;
            case '2':
                echo 'Femenino';
                break;
            default:
                echo '<span class="label label-warning">No seleccionado</span>';
                break;
            }
        }

        /**
         * Imprimir estado de usuario en texto por codigo de estado de usuario BD
         *
         * $cod_estado_usuario @param int codigo de estado de usuario desde BD
         *
         * @return String echo <td></td>
         */
        function printCodTDoc($cod_tipo_doc)
        {
            switch ($cod_tipo_doc) {
            case '1':
                echo 'CC';
                break;
            case '2':
                echo 'CE';
                break;
            case '3':
                echo 'Pasaporte';
                break;
            default:
                echo '<span class="label label-warning">No seleccionado</span>';
                break;
            }
        }

        /**
         * Imprimir estado de usuario en texto por codigo de estado de usuario BD
         *
         * $cod_estado_usuario @param int codigo de estado de usuario desde BD
         *
         * @return String echo <td></td>
         */
        function printCodEstadoUToText($cod_estado_usuario)
        {
            switch ($cod_estado_usuario) {
            case '1':
                echo '<span class="label label-info">inactivo</span>';
                break;
            case '2':
                echo '<span class="label label-success">Activo</span>';
                break;
            default:
                echo '<span class="label label-warning">No seleccionado</span>';
                break;
            }
        }

        /**
         * Imprimir rol de usuario en texto por codigo de rol de usuario BD
         *
         * $cod_rol @param int codigo de rol de usuario desde BD
         *
         * @return String echo <td></td>
         */
        function printCodRolText($cod_rol)
        {
            switch ($cod_rol) {
            case '1':
                echo'Superadministrador';
                break;
            case '2':
                echo'Técnico';
                break;
            case '3':
                echo'Administrativo';
                break;
            case '4':
                echo'Usuario';
                break;
            default:
                echo'<span class="label label-warning">No seleccionado</span>';
                break;
            }
        }

        /**
         * Imprimir cargo de usuario en texto por codigo de cargo de usuario BD
         *
         * $cod_cargo @param int codigo de cargo de usuario desde BD
         *
         * @return String echo <td></td>
         */
        function printCodCargoText($cod_cargo)
        {
            switch ($cod_cargo) {
            case '1':
                echo'Técnico';
                break;
            case '2':
                echo'Rector';
                break;
            case '3':
                echo'Coordinador académico';
                break;
            case '4':
                echo'Profesor';
                break;
            default:
                echo'<span class="label label-warning">No seleccionado</span>';
                break;
            }
        }

        /**
         * Imprimir area de usuario en texto por codigo de area de usuario BD
         *
         * $cod_area @param int codigo de area de usuario desde BD
         *
         * @return String echo <td></td>
         */
        function printCodAreaText($cod_area)
        {
            switch ($cod_area) {
            case '1':
                echo'Académica';
                break;
            case '2':
                echo'Administrativa';
                break;
            case '3':
                echo'Técnica';
                break;
            case '4':
                echo'Tecnológica';
                break;
            default:
                echo'<span class="label label-warning">No seleccionado</span>';
                break;
            }
        }
        ?>
    </body>

    </html>