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
    include '../model/Usuario.php';
    $usuario = new Usuario();
    $usuario->readSingleRecordUsuer($id_usuario);

    if ($usuario->nombre == null) {

        //Si no encontrado registro de usuario en base de datos, redireccionar -> viewListUsers.php con parametros
        header("location: ./viewListUsers.php?info=search&result=no");

    } else {

        //Si encontrado registro de usuario en base de datos, llevar datos de usuario al formulario
        $id_usuario     = $usuario->id_usuario;
        $cod_tipo_doc   = $usuario->cod_tipo_doc;
        $documento      = $usuario->documento;
        $nombre         = $usuario->nombre;
        $apellido       = $usuario->apellido;
        $cod_genero     = $usuario->cod_genero;
        $email          = $usuario->email;
        $cod_area       = $usuario->cod_area;
        $cod_cargo      = $usuario->cod_cargo;
        $cod_rol        = $usuario->cod_rol;
        $cod_estado     = $usuario->cod_estado;
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

    <?php   require '../config/base_head.php';
            //require '../config/googleAnaytics.php';?>


    <!--
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,400italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    -->

</head>

<body>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="section-title modal-title text-center">Editar usuario</h1>
            </div>
            <hr>
            <div class="modal-body">
        <?php
        echo'
                <form method="post" action="" class="">

                    <div class="row">
                        <div class="col-sm-4">
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group text-center">
                                <label for="cod_tipo_doc" class="control-label ">Estado de Usuario</label>
                                <div>
                                <!-- SELECCIONA ESTADO DE USUARIO -->';

                                printBtnRadioCodEstado($cod_estado);

                                echo '
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="documento" class="control-label">Número de cédula</label>
                                <input type="hidden" name="id_usuario" id="id_usuario" class="form-control" value="'.$id_usuario.'">
                                <input id="documento" type="text" name="documento" value="'.$documento.'" class="form-control" disabled>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="cod_tipo_doc" class="control-label">Tipo de cédula</label>
                                <div>
                                <!-- SELECCIONA TIPO DE CEDULA -->';

                                printBtnRadioCodTipoDoc($cod_tipo_doc);

                                echo '
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="nombre" class="control-label">Nombre de usuario</label>
                                <input id="nombre" type="text" name="nombre" class="form-control" value="'.$nombre.'" title="Por favor ingresa correctamente nombre del usuario"
                                    required/>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="apellido" class="control-label">Apellido de usuario</label>
                                <input id="apellido" type="text" name="apellido" class="form-control" value="'.$apellido.'" title="Por favor ingresa correctamente apellido del usuario"
                                    required/>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email" class="control-label">Email</label>
                                <input id="email" type="email" name="email" class="form-control" value="'.$email.'" title="Por favor ingresa correo electrónico de usuario"
                                    required/>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="cod_genero" class="control-label">Género de usuario</label>
                                    <div>';

                                    printBtnRadioCodGenero($cod_genero);
                            echo'
                                </div>
                            </div>
                        </div>

                    </div>
                    <hr>
                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group text-center">
                                <label for="cod_area" class="control-label ">Área de la Institución a la que pertenece el usuario</label>
                                <div>
                                    <select id="cod_area" name="cod_area" required>';

                                    printOptionCodArea($cod_area);

                                    echo'
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group text-center">
                                <label for="cod_cargo" class="control-label">Cargo del usuario</label>
                                <div>
                                    <select id="cod_cargo" name="cod_cargo" required>';

                                    printOptionCodCargo($cod_cargo);

                                    echo'
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group text-center">
                                <label for="cod_rol" class="control-label">Asignar rol al usuario</label>
                                <div>
                                    <select id="cod_rol" name="cod_rol" required>';

                                    printOptionCodRol($cod_rol);

                                    echo'
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>';?>
                    <hr>
                    <div class="row">

                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 pull-right">
                            <button id="enviar" name="send" type="submit" class="btn btn-block btn-success pmd-z-depth-3 pmd-ripple-effect" onsubmit="return checkPass()">Actualizar datos</button>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2"> &nbsp;&nbsp;&nbsp;&nbsp;</div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 pull-right">
                            <a id="listUsers" href="./viewListUsers.php">
                                <button id="cancelar" name="cancelar" type="button" class="btn btn-block btn-danger pmd-z-depth-3 pmd-ripple-effect">Cancelar</button>
                            </a>
                        </div>

                    </div>
                    <br>
                </form>
            </div>
        </div>
    </div>
    <div class="modal-footer"></div>

    <?php require '../config/base_script.php';?>
    <!--
    <script src="assets/js/bs-animation.js"></script>
    <script src="assets/js/checkComparativePassword.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    -->
</body>

</html>


<?php
$msg = $class = null;
if (isset($_POST) && !empty($_POST)) {
    if (isset($_POST['send'])) {

        $usuario->id_usuario    = $usuario->sanitize($_POST['id_usuario']);
        $usuario->cod_tipo_doc  = $usuario->sanitize($_POST['cod_tipo_doc']);
        $usuario->documento     = $usuario->sanitize($_POST['documento']);
        $usuario->nombre        = $usuario->sanitize($_POST['nombre']);
        $usuario->apellido      = $usuario->sanitize($_POST['apellido']);
        $usuario->cod_genero    = $usuario->sanitize($_POST['cod_genero']);
        $usuario->email         = $usuario->sanitize($_POST['email']);
        $usuario->cod_area      = $usuario->sanitize($_POST['cod_area']);
        $usuario->cod_cargo     = $usuario->sanitize($_POST['cod_cargo']);
        $usuario->cod_rol       = $usuario->sanitize($_POST['cod_rol']);
        $usuario->cod_estado    = $usuario->sanitize($_POST['$cod_estado']);


        $creadoNuevoRegistrodB = $usuario->createUser();
        if ($creadoNuevoRegistrodB) {
            header("location: ./viewListUsers.php?info=updated&name=$usuario->nombre");
            // $stusT  = 'success';
            // $titleT = 'Bien hecho!';
            // $msgT   = 'Los datos han sido guardados con éxito.';
            // $class  = "alert alert-success";
            // $msg    = 'Datos insertados con éxito';
        } else {
            $stusT  = 'error';
            $titleT = 'Error';
            $msg    = $msgT = 'No se pudieron insertar los datos';
            $class  = 'alert alert-danger';
            echo '<script>toastr.'.$stusT.'("'.$msgT.'", "'.$titleT.'", {timeOut: 6000, "closeButton": true, "progressBar": true})</script>';
            echo '<div class="'.$class.'">'. $msg. '</div>';
        }
        // if (isset($msg) && isset($class)) {
        // }
    }
}

/* ========================== */
/* ----- FUNCTION PRINT ----- */
/* ========================== */

/**
 * Imprimir select>option Código de rol, según codigo de rol
 *
 * @param Int $cod_rol Código de rol
 *
 * @return void echo
 */
function printOptionCodRol($cod_rol)
{
    switch ($cod_rol) {
    case 'Técnico':
        echo '<option value="0"> ------ Seleccionar ------ </option>
                <option value="1" selected>Técnico</option>
                <option value="2">Administrativo</option>
                <option value="3">Usuario</option>';
        break;
    case 'Administrativo':
        echo '<option value="0"> ------ Seleccionar ------ </option>
                <option value="1">Técnico</option>
                <option value="2" selected>Administrativo</option>
                <option value="3">Usuario</option>';
        break;
    case 'Usuario':
        echo '<option value="0"> ------ Seleccionar ------ </option>
                <option value="1">Técnico</option>
                <option value="2">Administrativo</option>
                <option value="3" selected>Usuario</option>';
        break;
    default:
        echo '<option value="0" selected> ------ Seleccionar ------ </option>
                <option value="1">Técnico</option>
                <option value="2">Administrativo</option>
                <option value="3">Usuario</option>';
        break;
    }
}

/**
 * Imprimir select>option Código de cargo, según codigo de cargo
 *
 * @param Int $cod_cargo Código de cargo
 *
 * @return void echo
 */
function printOptionCodCargo($cod_cargo)
{
    switch ($cod_cargo) {
    case 'Técnico':
        echo '<option value="0"> ------ Seleccionar ------ </option>
                <option value="1" selected>Técnico</option>
                <option value="2">Rector</option>
                <option value="3">Coordinador académico</option>
                <option value="4">Profesor</option>';
        break;
    case 'Rector':
        echo '<option value="0"> ------ Seleccionar ------ </option>
                <option value="1">Técnico</option>
                <option value="2" selected>Rector</option>
                <option value="3">Coordinador académico</option>
                <option value="4">Profesor</option>';
        break;
    case 'Coordinador académico':
        echo '<option value="0"> ------ Seleccionar ------ </option>
                <option value="1">Técnico</option>
                <option value="2">Rector</option>
                <option value="3" selected>Coordinador académico</option>
                <option value="4">Profesor</option>';
        break;
    case 'Profesor':
        echo '<option value="0"> ------ Seleccionar ------ </option>
                <option value="1">Técnico</option>
                <option value="2">Rector</option>
                <option value="3">Coordinador académico</option>
                <option value="4" selected>Profesor</option>';
        break;
    default:
        echo '<option value="0" selected> ------ Seleccionar ------ </option>
                <option value="1">Técnico</option>
                <option value="2">Rector</option>
                <option value="3">Coordinador académico</option>
                <option value="4">Profesor</option>';
        break;
    }
}



/**
 * Imprimir select>option Código de Área, según codigo de área
 *
 * @param Int $cod_area Código de Área
 *
 * @return void echo
 */
function printOptionCodArea($cod_area)
{
    switch ($cod_area) {
    case 'Académica':
        echo '<option value="0"> ------ Seleccionar ------ </option>
                <option value="1" selected>Académica</option>
                <option value="2">Administrativa</option>
                <option value="3">Técnica</option>
                <option value="4">Tecnológica</option>';
        break;
    case 'Administrativa':
        echo '<option value="0"> ------ Seleccionar ------ </option>
                <option value="1">Académica</option>
                <option value="2" selected>Administrativa</option>
                <option value="3">Técnica</option>
                <option value="4">Tecnológica</option>';
        break;
    case 'Técnica':
        echo '<option value="0" > ------ Seleccionar ------ </option>
                <option value="1">Académica</option>
                <option value="2">Administrativa</option>
                <option value="3" selected>Técnica</option>
                <option value="4">Tecnológica</option>';
        break;
    case 'Tecnológica':
        echo '<option value="0"> ------ Seleccionar ------ </option>
                <option value="1">Académica</option>
                <option value="2">Administrativa</option>
                <option value="3">Técnica</option>
                <option value="4" selected>Tecnológica</option>';
        break;
    default:
        echo '<option value="0" selected> ------ Seleccionar ------ </option>
                <option value="1">Académica</option>
                <option value="2">Administrativa</option>
                <option value="3">Técnica</option>
                <option value="4">Tecnológica</option>';
        break;
    }
}


/**
 * Imprimir button radio Código de género, según codigo de Código de género
 *
 * @param Int $cod_genero Código de Código de género
 *
 * @return void echo
 */
function printBtnRadioCodGenero($cod_genero)
{
    switch ($cod_genero) {
    case 'Masculino':
        echo '<label id="cod_genero" for="masculino" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input type="radio" name="cod_genero" id="masculino" value="1" checked>&nbsp;Masculino
            </label>
        &nbsp;
            <label id="cod_genero" for="femenino" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input type="radio" name="cod_genero" id="femenino" value="2">&nbsp;Femenino
            </label>';
        break;

    case 'Femenino':
        echo'<label id="cod_genero" for="masculino" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input type="radio" name="cod_genero" id="masculino" value="1">&nbsp;Masculino
            </label>
            &nbsp;
            <label id="cod_genero" for="femenino" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input type="radio" name="cod_genero" id="femenino" value="2" checked>&nbsp;Femenino
            </label>';

    default:
        echo'<label id="cod_genero" for="masculino" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input type="radio" name="cod_genero" id="masculino" value="1">&nbsp;Masculino
            </label>
            &nbsp;
            <label id="cod_genero" for="femenino" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input type="radio" name="cod_genero" id="femenino" value="2">&nbsp;Femenino
            </label>';
        break;
    }
}



/**
 * Imprimir button radio Tipo de documento, según codigo de Tipo de documento
 *
 * @param Int $cod_tipoDoc Código de Tipo de Documento
 *
 * @return void echo
 */
function printBtnRadioCodTipoDoc($cod_tipoDoc)
{
    switch ($cod_tipoDoc) {
    case 'Cedula de ciudadania':
        echo '<label for="cc" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input name="cod_tipo_doc" id="cc" value="1" type="radio" checked >&nbsp;CC
            </label>
            <label for="ce" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input name="cod_tipo_doc" id="ce" value="2" type="radio">&nbsp;CE
            </label>
            <label for="pasaporte" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input name="cod_tipo_doc" id="pasaporte" value="3" type="radio">&nbsp;Pasaporte
            </label>
    <!-- /SELECCIONA TIPO DE CEDULA -->';
        break;
    case 'Cedula de extranjeria':
        echo '<label for="cc" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input name="cod_tipo_doc" id="cc" value="1" type="radio">&nbsp;CC
            </label>
            <label for="ce" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input name="cod_tipo_doc" id="ce" value="2" type="radio" checked >&nbsp;CE
            </label>
            <label for="pasaporte" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input name="cod_tipo_doc" id="pasaporte" value="3" type="radio">&nbsp;Pasaporte
            </label>
    <!-- /SELECCIONA TIPO DE CEDULA -->';
        break;
    case 'Cedula de ciudadania':
        echo '<label for="cc" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input name="cod_tipo_doc" id="cc" value="1" type="radio">&nbsp;CC
            </label>
            <label for="ce" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input name="cod_tipo_doc" id="ce" value="2" type="radio">&nbsp;CE
            </label>
            <label for="pasaporte" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input name="cod_tipo_doc" id="pasaporte" value="3" type="radio" checked >&nbsp;Pasaporte
            </label>
    <!-- /SELECCIONA TIPO DE CEDULA -->';
        break;
    default:
        echo '<label for="cc" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input name="cod_tipo_doc" id="cc" value="1" type="radio" required>&nbsp;CC
            </label>
            <label for="ce" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input name="cod_tipo_doc" id="ce" value="2" type="radio" required>&nbsp;CE
            </label>
            <label for="pasaporte" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input name="cod_tipo_doc" id="pasaporte" value="3" type="radio" required>&nbsp;Pasaporte
            </label>
            <!-- <label for="nit" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input name="cod_tipo_doc" id="nit" value="4" type="radio">&nbsp;NIT
            </label> -->
            <!-- /SELECCIONA TIPO DE CEDULA -->';
        break;
    }
}

/**
 * Imprimir button radio Código de Estado del usuario, según Código de Estado del usuario
 *
 * @param Int $cod_estado Código de Código de Estado del usuario
 *
 * @return void echo
 */
function printBtnRadioCodEstado($cod_estado)
{
    switch ($cod_estado) {
    case 'Inactivo':
        echo '<label for="inactivo" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input name="cod_estado" id="inactivo" value="1" type="radio" checked >&nbsp;Inactivo
            </label>
            <label for="activo" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input name="cod_estado" id="activo" value="2" type="radio">&nbsp;Activo
            </label>';
        break;
    case 'Activo':
        echo '<label for="inactivo" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input name="cod_estado" id="inactivo" value="1" type="radio">&nbsp;Inactivo
            </label>
            <label for="activo" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input name="cod_estado" id="activo" value="2" type="radio" checked>&nbsp;Activo
            </label>';
        break;
    default:
        echo '<label for="inactivo" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input name="cod_estado" id="inactivo" value="1" type="radio">&nbsp;Inactivo
            </label>
            <label for="activo" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input name="cod_estado" id="activo" value="2" type="radio">&nbsp;Activo
            </label>';
        break;
    }
}

?>