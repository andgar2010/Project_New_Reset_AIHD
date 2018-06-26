<?php
/**
 * Modelo Vista Equipo
 *
 * @category View
 * @package  GestionEquipo
 * @author  Camila Torres <lctorres14@misena.edu.co>
 * @license  <a href="www.mit.org">mit</a>
 * @version  GIT:<ASD4A6S54DASD>
 * @link     www.github.com/andgar2010
 *
 * Editar cuenta de equipo MVC Source DB
 */
if (isset($_GET['id'])) {

    $id_equipo = intval($_GET['id']);
    include '../../model/Equipo.php';
    $equipo = new Equipo();
    $equipo->readSingleEquipo($id_equipo);

    if ($equipo->getSerial_equipo() == null) {

        //Si no encontrado registro de equipo en base de datos, redireccionar -> viewListEquipo.php con parametros
        header("location: ./viewListEquipo.php?info=search&result=no");

    } else {
        $id_equipo = $equipo->getId_Equipo();
        $serial_equipo = $equipo->getSerial_equipo();
        $cod_tipo_equipo = $equipo->getCod_tipo_equipo();
        $cod_estado_equipo = $equipo->getCod_estado_equipo();
    }
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

    <?php require '../../config/base_head.php';
          require '../../config/base_script.php';

//require '../config/googleAnaytics.php';?>

</head>
<body>
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="section-title modal-title text-center"> Editar Equipo</h1>
	</div>
	<hr>
	<div class="modal-body">
		<?php
echo '
			<form method="post" action="../../controllers/controllerUpdateEquipo.php" class="">
			<div class= "row">
			 <div class="col-sm-4">
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group text-center">
                                <label for="cod_estado_equipo" class="control-label ">Estado de Equipo</label>
                                <div>
                                <!-- SELECCIONA ESTADO DE EQUIPO -->';

printBtnRadioCodEstadoEquipo($cod_estado_equipo);

echo '
                                </div>
                            </div>
                      </div>
                </div>
					 <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="hidden" name="id_equipo" id="id_equipo" class="form-control" value="' . $id_equipo . '">
                                <input type="hidden" id="serial_equipo" name="serial_equipo" value="' . $serial_equipo . '" class="form-control">
                                <label for="text_serial_equipo" class="control-label">Serial equipo</label>
                                <input id="text_serial_equipo" type="text" name="text_serial_equipo" value="' . $serial_equipo . '" class="form-control" disabled>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="cod_tipo_equipo" class="control-label">Tipo de equipo</label>
                                <div>
                                <!-- SELECCIONA TIPO DE EQUIPO -->';

printBtnRadioCodTipoEquipo($cod_tipo_equipo);

echo '
                          </div>
                            </div>
                        </div>
                    </div>'; ?>
                    <hr>
                    <div class="row">

                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 pull-right">
                            <button id="enviar" name="btnClickedEquipo" value="sendUpdate" type="submit" class="btn btn-block btn-success pmd-z-depth-3 pmd-ripple-effect" onsubmit="return checkPass()">Actualizar datos</button>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2"></div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 pull-right">
                            <a  onClick="goToListEquipo()">
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

    <?php require '../../config/base_script.php';?>
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
 * Imprimir button radio Tipo de equipo, según codigo de tipo de equipó
 *
 * @param Int $cod_tipo_equipo Código de Tipo de equipo
 *
 * @return void echo
 */
function printBtnRadioCodTipoEquipo($cod_tipo_equipo)
{
    switch ($cod_tipo_equipo) {
        case '1':
            echo '<label for="Escritorio" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input name="cod_tipo_equipo" id="Escritorio" value="1" type="radio" checked >&nbsp;Escritorio
            </label>
            <label for="Portatil" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input name="cod_tipo_equipo" id="Portatil" value="2" type="radio">&nbsp;Portatil
            </label>

    <!-- /SELECCIONA TIPO DE EQUIPO -->';
            break;
        case '2':   
            echo '<label for="Escritorio" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input name="cod_tipo_equipo" id="Escritorio" value="1" type="radio">&nbsp;Escritorio
            </label>
            <label for="Portatil" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input name="cod_tipo_equipo" id="Portatil" value="2" type="radio" checked >&nbsp;Portatil
            </label>
    <!-- /SELECCIONA TIPO DE EQUIPO -->';
            break;

        default:
            echo '<label for="Hardware" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input name="cod_tipo_equipo" id="Hardware" value="1" type="radio" required>&nbsp;Hardware
            </label>
            <label for="Software" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input name="cod_tipo_equipo" id="Software" value="2" type="radio" required>&nbsp;Software
            </label>

            <!-- <label for="nit" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input name="cod_tipo_equipo" id="nit" value="4" type="radio">&nbsp;NIT
            </label> -->
            <!-- /SELECCIONA TIPO DE EQUIPO -->';
            break;
    }
}

/**
 * Imprimir button radio Código de Estado del equipo, según Código de Estado del equipo
 *
 * @param Int $cod_estado_equipo Código de Código de Estado del equipo
 *
 * @return void echo
 */
function printBtnRadioCodEstadoEquipo($cod_estado_equipo)
{
    switch ($cod_estado_equipo) {
        case '1':
            echo '<label for="inactivo" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input name="cod_estado_equipo" id="inactivo" value="1" type="radio" checked >&nbsp;Inactivo
            </label>
            <label for="activo" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input name="cod_estado_equipo" id="activo" value="2" type="radio">&nbsp;Activo
            </label>';
            break;
        case '2':
            echo '<label for="inactivo" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input name="cod_estado_equipo" id="inactivo" value="1" type="radio">&nbsp;Inactivo
            </label>
            <label for="activo" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input name="cod_estado_equipo" id="activo" value="2" type="radio" checked>&nbsp;Activo
            </label>';
            break;
        default:
            echo '<label for="inactivo" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input name="cod_estado_equipo" id="inactivo" value="1" type="radio">&nbsp;Inactivo
            </label>
            <label for="activo" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input name="cod_estado_equipo" id="activo" value="2" type="radio">&nbsp;Activo
            </label>';
            break;
    }
}
?>