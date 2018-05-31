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
    require '../model/TipoEquipo.php';

    $tipo_equipo     = new TipoEquipo();
   
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
                <form method="POST" action="../controllers/controllerAddEquipo.php" class="">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="serial_equipo" class="control-label">serial</label>
                                <input id="serial_equipo" type="text" name="serial_equipo" class="form-control" pattern="[0-9]{8,14}" title="Por favor ingresa unicamente los números"
                                    required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="cod_tipo_equipo" class="control-label">Tipo del equipo</label>
                                <div>
                                    <!-- SELECCIONA TIPO DE EQUIPO -->
                                    <?php $tipo_equipo->readTipoEquipo();?>
                                    <!-- /SELECCIONA TIPO DE EQUIPO -->
                                </div>
                            </div>
                        </div>
                    </div>

                  <div class="row">
                        

                 

                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 pull-right">
                            <button id="enviar" name="btnClickedEquipo" value="send" type="submit" class="btn btn-block btn-success pmd-z-depth-3 pmd-ripple-effect" onsubmit="return checkPass()">Ingresar nuevo equipo</button>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2"> &nbsp;&nbsp;&nbsp;&nbsp;</div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 pull-right">
                            <a id="listEquipo" href="./listEquipo.php">
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