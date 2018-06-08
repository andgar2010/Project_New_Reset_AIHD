<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro nuevo equipo</title>


    <!-- HTML Meta Tags -->
    <title>Registro nuevo equipo</title>
    <meta name="description" content="Registro de nuevo equipo de NEW RESET A.H.I.D.">
    <!-- End HTML Meta Tags -->

    <?php
    /*
     * Modelo Vista Usuario
     *
     * @category Views
     * @package  Views
     * @author   Andres Garcia <afagrcia0479@misena.edu.co>
    * @author   Camila Torres <lctorres14@misena.edu.co>

     * @license  <a href="www.mit.org">mit</a>
     * @version  GIT:<ASD4A6S54DASD>
     * @link     www.github.com/andgar2010
     *
     * This Model of vista User
     * Source DB
     */

    require '../config/base_head.php';
    require '../config/base_script.php'; 
    require '../config/Toastr.php';

    require '../model/estado_equipo.php';
    require '../model/tipo_equipo.php';
    
    $estado_equipo      = new estado_equipo();
    $tipo_equipo     = new tipo_equipo();
   
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
                <h1 class="section-title modal-title text-center">Ingresar nuevo equipo </h1>
            </div>
            <hr>
            <div class="modal-body">
                <form method="POST" action="" class="">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="serial" class="control-label">serial</label>
                                <input id="serial" type="text" name="serial" class="form-control" pattern="[0-9]{8,14}" title="Por favor ingresa unicamente los números"
                                    required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="estado_equipo" class="control-label">Estado del equipo</label>
                                <div>
                                    <!-- SELECCIONA TIPO DE CEDULA -->
                                    <?php $serial->readserial();?>
                                    <!-- /SELECCIONA TIPO DE CEDULA -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <<!-- div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="nombre" class="control-label">Nombre de usuario</label>
                                <input id="nombre" type="text" name="nombre" class="form-control" title="Por favor ingresa correctamente nombre del usuario"
                                    required/>
                            </div>
                        </div> -->
<!-- 
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
                            </div> -->
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="tipo_equipo" class="control-label">Tipo del equipo </label>
                                <div>
                                    <?php $tipo_equipo>readtipo_equipo();?>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- <hr>
                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group text-center">
                                <label for="cod_area" class="control-label ">Área de la Institución a la que pertenece el usuario</label>
                                <div>
                                    <select id="cod_area" name="cod_area" required>
                                        <option value="0"> ------ Seleccionar ------ </option>
                                        <?php $area;?>
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
                                        <?php $cargo);?>
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
                                        <?php $rol->();?>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                    <hr>
                    <div class="row">
 -->
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 pull-right">
                            <button id="enviar" name="btnClickedUser" value="send" type="submit" class="btn btn-block btn-success pmd-z-depth-3 pmd-ripple-effect" onsubmit="return checkPass()">Ingresar nuevo equipo</button>
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