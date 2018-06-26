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

// if (isset($_GET['id'])) {

    $id_usuario = intval($_GET['id']);
    //$id_usuario = intval(1);
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

// } else {

//     header('location:./viewListUsers.php?info=search&result=no');
// }
?>

    <!DOCTYPE html>
    <html lang="es">

    <head>
        <!-- HTML Meta Tags -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Actualizar datos del usuario</title>
        <meta name="description" content="Actualizar datos del usuario de NEW RESET A.H.I.D.">
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
                    <h1 class="section-title modal-title text-center">Actualizar datos del usuario</h1>
                </div>
                <hr>
                <div class="modal-body">
                    <?php
        echo'
                <form method="post" action="../controllers/controllerUpdateDataUser.php" class="">

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="hidden" name="id_usuario" id="id_usuario" class="form-control" value="'.$id_usuario.'">
                                <input type="hidden" id="documento" name="documento" value="'.$documento.'" class="form-control">
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
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-6">
                                        <label for="cod_genero" class="control-label text-center">Contraseña</label>
                                    </div>
                                </div>
                            <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input id="password" type="password" name="old_password" placeholder="Antigua contraseña" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input id="password" type="password" name="new_password" placeholder="Nueva contraseña" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input id="confirm_password" type="password" name="new_password_repeat" placeholder="Nueva contraseña (repetir)" class="form-control" required onkeyup="checkPass(); return false;" />
                                            <span id="confirmMessage"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    ';?>
                        <hr>
                        <div class="row">

                            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 pull-right">
                                <button id="enviar" name="btnClickedUser" value="sendUpdate" type="submit" class="btn btn-block btn-success pmd-z-depth-3 pmd-ripple-effect"
                                    onsubmit="return checkPass()">Actualizar datos</button>
                            </div>
                            &nbsp;
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
        <script src="assets/js/checkComparativePassword.js"></script>
    </body>

    </html>


    <?php

/* ========================== */
/* ----- FUNCTION PRINT ----- */
/* ========================== */

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
        echo '
            <option disabled> ------ Seleccionar ------ </option>
            <option value="1" disabled selected>Técnico</option>
            <option disabled>Rector</option>
            <option disabled>Coordinador académico</option>
            <option disabled>Profesor</option>';
        break;
    case '2':
        echo '
            <option disabled> ------ Seleccionar ------ </option>
            <option disabled>Técnico</option>
            <option value="2" disabled selected>Rector</option>
            <option disabled>Coordinador académico</option>
            <option disabled>Profesor</option>';
        break;
    case '3':
        echo '
            <option disabled> ------ Seleccionar ------ </option>
            <option disabled>Técnico</option>
            <option disabled>Rector</option>
            <option value="3" disabled selected>Coordinador académico</option>
            <option disabled>Profesor</option>';
        break;
    case '4':
        echo '
            <option disabled> ------ Seleccionar ------ </option>
            <option disabled>Técnico</option>
            <option disabled>Rector</option>
            <option disabled>Coordinador académico</option>
            <option value="4" disabled selected>Profesor</option>';
        break;
    default:
        echo '
            <option value="0" selected> ------ Seleccionar ------ </option>
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
        echo '
            <option disabled> ------ Seleccionar ------ </option>
            <option value="1" disabled selected>Académica</option>
            <option disabled>Administrativa</option>
            <option disabled>Técnica</option>
            <option disabled>Tecnológica</option>';
        break;
    case '2':
        echo '
            <option disabled> ------ Seleccionar ------ </option>
            <option disabled>Académica</option>
            <option value="2" disabled selected>Administrativa</option>
            <option disabled>Técnica</option>
            <option disabled>Tecnológica</option>';
        break;
    case '3':
        echo '
            <option disabled> ------ Seleccionar ------ </option>
            <option disabled>Académica</option>
            <option disabled>Administrativa</option>
            <option value="3" disabled selected>Técnica</option>
            <option disabled>Tecnológica</option>';
        break;
    case '4':
        echo '
            <option disabled> ------ Seleccionar ------ </option>
            <option disabled>Académica</option>
            <option disabled>Administrativa</option>
            <option disabled>Técnica</option>
            <option value="4" disabled selected>Tecnológica</option>';
        break;
    default:
        echo '
            <option value="0" selected> ------ Seleccionar ------ </option>
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
        echo '
            <label id="cod_genero" for="masculino" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input type="radio" id="masculino" name="cod_genero" value="1" checked disbaled>&nbsp;Masculino
            </label>
        &nbsp;
            <label id="cod_genero" for="femenino" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input type="radio" id="femenino" disabled>&nbsp;Femenino
            </label>';
        break;

    case '2':
        echo'
            <label id="cod_genero" for="masculino" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input type="radio" name="cod_genero" id="masculino" value="1">&nbsp;Masculino
            </label>
            &nbsp;
            <label id="cod_genero" for="femenino" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input type="radio" id="femenino" name="cod_genero" value="2" checked disabled>&nbsp;Femenino
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
    case '1':// -> Selected CC but disabled
        echo '
            <label for="cc" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input type="radio" id="cc" name="cod_tipo_doc" value="1" checked disabled>&nbsp;CC
            </label>

            <label for="ce" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input type="radio" id="ce" disabled>&nbsp;CE
            </label>

            <label for="pasaporte" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input type="radio" id="pasaporte" disabled>&nbsp;Pasaporte
            </label>
            <!-- /SELECCIONA TIPO DE CEDULA -->';
        break;
    case '2':
        echo '
            <label for="cc" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input type="radio" id="cc" disabled>&nbsp;CC
            </label>

            <label for="ce" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input type="radio" id="ce" name="cod_tipo_doc" value="2" checked disabled>&nbsp;CE
            </label>

            <label for="pasaporte" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input type="radio" id="pasaporte" disabled>&nbsp;Pasaporte
            </label>
            <!-- /SELECCIONA TIPO DE CEDULA -->';
        break;
    case '3':
        echo '
            <label for="cc" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input type="radio" id="cc" disabled>&nbsp;CC
            </label>

            <label for="ce" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input type="radio" id="ce" disabled>&nbsp;CE
            </label>

            <label for="pasaporte" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input type="radio" id="pasaporte" name="cod_tipo_doc" value="3" checked disabled>&nbsp;Pasaporte
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
?>