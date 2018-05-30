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
                <form method="post" action="../controllers/controllerUpdateUser.php" class="">

                    <div class="row">
                        <div class="col-sm-4">
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group text-center">
                                <label for="cod_estado_usuario" class="control-label ">Estado de Usuario</label>
                                <div>
                                <!-- SELECCIONA ESTADO DE USUARIO -->';

                                printBtnRadioCodEstado($cod_estado_usuario);

                                echo '
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="hidden" name="id_usuario" id="id_usuario" class="form-control" value="'.$id_usuario.'">
                                <input type="hidden" id="documento" name="documento" value="'.$documento.'" class="form-control">
                                <label for="text_documento" class="control-label">Número de cédula</label>
                                <input id="text_documento" type="text" name="text_documento" value="'.$documento.'" class="form-control" disabled>
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
                            <button id="enviar" name="btnClickedUser" value="sendUpdate" type="submit" class="btn btn-block btn-success pmd-z-depth-3 pmd-ripple-effect" onsubmit="return checkPass()">Actualizar datos</button>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2"></div>
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
    case '1':
        echo '<option value="0"> ------ Seleccionar ------ </option>
                <option value="1" selected>Superadministrador</option>
                <option value="2">Técnico</option>
                <option value="3">Administrativo</option>
                <option value="4">Usuario</option>';
        break;
    case '2':
        echo '<option value="0"> ------ Seleccionar ------ </option>
                <option value="2" selected>Técnico</option>
                <option value="3">Administrativo</option>
                <option value="4">Usuario</option>';
        break;
    case '3':
        echo '<option value="0"> ------ Seleccionar ------ </option>
                <option value="2">Técnico</option>
                <option value="3" selected>Administrativo</option>
                <option value="4">Usuario</option>';
        break;
    case '4':
        echo '<option value="0"> ------ Seleccionar ------ </option>
                <option value="2">Técnico</option>
                <option value="3">Administrativo</option>
                <option value="4" selected>Usuario</option>';
        break;
    default:
        echo '<option value="0" selected> ------ Seleccionar ------ </option>
                <option value="2">Técnico</option>
                <option value="3">Administrativo</option>
                <option value="4">Usuario</option>';
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
    case '1':
        echo '<option value="0"> ------ Seleccionar ------ </option>
                <option value="1" selected>Técnico</option>
                <option value="2">Rector</option>
                <option value="3">Coordinador académico</option>
                <option value="4">Profesor</option>';
        break;
    case '2':
        echo '<option value="0"> ------ Seleccionar ------ </option>
                <option value="1">Técnico</option>
                <option value="2" selected>Rector</option>
                <option value="3">Coordinador académico</option>
                <option value="4">Profesor</option>';
        break;
    case '3':
        echo '<option value="0"> ------ Seleccionar ------ </option>
                <option value="1">Técnico</option>
                <option value="2">Rector</option>
                <option value="3" selected>Coordinador académico</option>
                <option value="4">Profesor</option>';
        break;
    case '4':
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
    case '1':
        echo '<option value="0"> ------ Seleccionar ------ </option>
                <option value="1" selected>Académica</option>
                <option value="2">Administrativa</option>
                <option value="3">Técnica</option>
                <option value="4">Tecnológica</option>';
        break;
    case '2':
        echo '<option value="0"> ------ Seleccionar ------ </option>
                <option value="1">Académica</option>
                <option value="2" selected>Administrativa</option>
                <option value="3">Técnica</option>
                <option value="4">Tecnológica</option>';
        break;
    case '3':
        echo '<option value="0" > ------ Seleccionar ------ </option>
                <option value="1">Académica</option>
                <option value="2">Administrativa</option>
                <option value="3" selected>Técnica</option>
                <option value="4">Tecnológica</option>';
        break;
    case '4':
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
    case '1':
        echo '<label id="cod_genero" for="masculino" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input type="radio" name="cod_genero" id="masculino" value="1" checked>&nbsp;Masculino
            </label>
        &nbsp;
            <label id="cod_genero" for="femenino" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input type="radio" name="cod_genero" id="femenino" value="2">&nbsp;Femenino
            </label>';
        break;

    case '2':
        echo'<label id="cod_genero" for="masculino" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input type="radio" name="cod_genero" id="masculino" value="1">&nbsp;Masculino
            </label>
            &nbsp;
            <label id="cod_genero" for="femenino" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input type="radio" name="cod_genero" id="femenino" value="2" checked>&nbsp;Femenino
            </label>';
            break;

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
    case '1':
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
    case '2':
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
    case '3':
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
 * @param Int $cod_estado_usuario Código de Código de Estado del usuario
 *
 * @return void echo
 */
function printBtnRadioCodEstado($cod_estado_usuario)
{
    switch ($cod_estado_usuario) {
    case '1':
        echo '<label for="inactivo" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input name="cod_estado_usuario" id="inactivo" value="1" type="radio" checked >&nbsp;Inactivo
            </label>
            <label for="activo" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input name="cod_estado_usuario" id="activo" value="2" type="radio">&nbsp;Activo
            </label>';
        break;
    case '2':
        echo '<label for="inactivo" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input name="cod_estado_usuario" id="inactivo" value="1" type="radio">&nbsp;Inactivo
            </label>
            <label for="activo" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input name="cod_estado_usuario" id="activo" value="2" type="radio" checked>&nbsp;Activo
            </label>';
        break;
    default:
        echo '<label for="inactivo" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input name="cod_estado_usuario" id="inactivo" value="1" type="radio">&nbsp;Inactivo
            </label>
            <label for="activo" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input name="cod_estado_usuario" id="activo" value="2" type="radio">&nbsp;Activo
            </label>';
        break;
    }
}

?>