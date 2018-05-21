<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro nuevo usuario</title>


    <!-- HTML Meta Tags -->
    <title>Registro nuevo usuario</title>
    <meta name="description" content="Registro de nuevo usuario de NEW RESET A.H.I.D.">
    <!-- End HTML Meta Tags -->

    <?php
    /*
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

    require '../config/base_head.php';
    require '../config/base_script.php';
    require '../config/Toastr.php';

    require '../model/RolUsuario.php';
    require '../model/CargoUsuario.php';
    require '../model/AreaUsuario.php';
    require '../model/TipoDocumentoUsuario.php';
    require '../model/GeneroUsuario.php';
    $rol        = new RolUsuario();
    $cargo      = new CargoUsuario();
    $area       = new AreaUsuario();
    $tipoDoc    = new TipoDocumentoUsuario();
    $genero     = new GeneroUsuario;
?>

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
                <h1 class="section-title modal-title text-center">Crear una cuenta usuario</h1>
            </div>
            <hr>
            <div class="modal-body">
                <form method="POST" action="../controllers/controllerAddNewUser.php" class="">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="num_cedula" class="control-label">Número de cédula</label>
                                <input id="num_cedula" type="text" name="num_cedula" class="form-control" pattern="[0-9]{8,14}" title="Por favor ingresa unicamente los números"
                                    required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="cod_tipo_doc" class="control-label">Tipo de cédula</label>
                                <div>
                                    <!-- SELECCIONA TIPO DE CEDULA -->
                                    <?php $tipoDoc->readTipoDocumento();?>
                                    <!-- /SELECCIONA TIPO DE CEDULA -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="nombre" class="control-label">Nombre de usuario</label>
                                <input id="nombre" type="text" name="nombre" class="form-control" title="Por favor ingresa correctamente nombre del usuario"
                                    required/>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="apellido" class="control-label">Apellido de usuario</label>
                                <input id="apellido" type="text" name="apellido" class="form-control" title="Por favor ingresa correctamente apellido del usuario"
                                    required/>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email" class="control-label">Email</label>
                                <input id="email" type="email" name="email" class="form-control" title="Por favor ingresa correo electrónico de usuario"
                                    required/>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="cod_genero" class="control-label">Género de usuario</label>
                                <div>
                                    <?php $genero->readGenero();?>
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
                                    <select id="cod_area" name="cod_area" required>
                                        <option value="0"> ------ Seleccionar ------ </option>
                                        <?php $area->readArea();?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group text-center">
                                <label for="cod_cargo" class="control-label">Cargo del usuario</label>
                                <div>
                                    <select id="cod_cargo" name="cod_cargo" required>
                                        <option value="0"> ------ Seleccionar ------ </option>
                                        <?php $cargo->readCargo();?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group text-center">
                                <label for="cod_rol" class="control-label">Asignar rol al usuario</label>
                                <div>
                                    <select id="cod_rol" name="cod_rol" required>
                                        <option value="0"> ------ Seleccionar ------ </option>
                                        <?php $rol->readRol();?>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                    <hr>
                    <div class="row">

                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 pull-right">
                            <button id="enviar" name="btnClickedUser" value="send" type="submit" class="btn btn-block btn-success pmd-z-depth-3 pmd-ripple-effect" onsubmit="return checkPass()">Crear nuevo usuario</button>
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
    <!-- <script src="assets/js/checkComparativePassword.js"></script> -->
    <!-- <script src="assets/js/bs-animation.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script> -->
</body>

</html>