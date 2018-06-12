<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de equipos</title>
    <?php include '../../config/base_head.php';?>
    <?php include '../../config/googleAnaytics.php';?>
    <?php include '../../config/Toastr.php';?>
    <!-- Styles Ends -->
</head>

<?php
            if (isset($_GET['info']) && isset($_GET['name'])) {

                $btnMsg = '<button type="button" class="close" data-dismiss="alert" aria-hidden="true"> &times;</button>';

                switch ($_GET['info']) {
                case 'added':
                    $nameUser = $_GET['name'];
                    $stusT  = 'success';
                    $titleT = 'Bien hecho!';
                    $msgT   = 'Los datos han sido guardados con éxito.';
                    $class  = "alert alert-success alert-dismissable pmd-z-depth-1";
                    $msg    = 'usuario de datos insertados con éxito';

                    if (isset($msg) && isset($class)) {
                        echo '<script>toastr.'.$stusT.'("'.$msgT.'", "'.$titleT.'", {timeOut: 6000, "closeButton": true, "progressBar": true})</script>';
                        echo '<div class="'.$class.'">'.$btnMsg . $nameUser. ' '. $msg. '</div>';
                    }
                    break;

                case 'updated':
                    $nameUser = $_GET['name'];
                    $stusT  = 'success';
                    $titleT = 'Bien hecho!';
                    $msgT   = 'Los datos han sido actualizado con éxito.';
                    $class  = "alert alert-success alert-dismissable pmd-z-depth-1";
                    $msg    = 'usuario de datos actualizado con éxito';

                    if (isset($msg) && isset($class)) {
                        echo '<script>toastr.'.$stusT.'("'.$msgT.'", "'.$titleT.'", {timeOut: 6000, "closeButton": true, "progressBar": true})</script>';
                        echo '<div class="'.$class.'">' . $btnMsg . $nameUser. ' '. $msg. '</div>';
                    }
                    break;

                case 'deleted':
                    $nameUser = $_GET['name'];
                    $stusT  = 'info';
                    $titleT = 'Bien hecho!';
                    $msgT   = 'Los datos han sido eliminado con éxito.';
                    $class  = "alert alert-info alert-dismissable pmd-z-depth-1";
                    $msg    = 'usuario de datos eliminado con éxito';

                    if (isset($msg) && isset($class)) {
                        echo '<script>toastr.'.$stusT.'("'.$msgT.'", "'.$titleT.'", {timeOut: 6000, "closeButton": true, "progressBar": true})</script>';
                        echo '<div class="'.$class.'">'. $btnMsg .$nameUser. ' '. $msg. '</div>';
                    }
                    break;

                default:
                /*echo '<div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"> &times;</button>Los datos han sido guardados con éxito.
                        </div>';*/
                    break;
                }
            }
            ?>
   <div class="container">
        <!-- div content -->
        <div  class="table-wrapper">
            <!-- div row -->
            <div class="table-title">
                <div class="row pmd-card-title">
                    <div class="col-sm-8 col-md-8">
                        <br>
                        <h1 class="pmd-card-title-text" align="center">Gestión de <strong>equipos</strong></h1>
                        <hr>
                    </div>
                    <!-- End div .col-sm-8 -->
                    <div class="col-sm-4 col-xs-6">
                        <br>
                        <a id="addEquipo"  class="">
                            <button type="button" class="btn btn-info pmd-btn-raised pmd-ripple-effect">
                                <i class="fa fa-plus" aria-hidden="true"></i> Agregar equipo
                            </button>
                        </a>
                    </div>
                    <!-- End div .col-sm-4 -->
                </div>

            </div>
<body>
    <!-- div container -->
    <div class="container">
        <!-- div content -->
        <div class="table-wrapper">
            <!-- div row -->
            <div class="table-title">
                <div class="row pmd-card-title">
                    <div class="pmd-card-title-text">
                        <h1>Lista de <strong>equipos</strong></h1>
                        <hr>
                    </div>
                </div>

            </div>
            <!-- End div row -->

            <!-- div row -->
            <div class="row">

            </div>
            <!-- End div row -->

            <!-- div row -->
            <div class="row">
                <!-- TABLE -->
                <div class="table-responsive">
                    <table class="table table-hover table-striped table-bordered ">
                        <thead>
                            <tr>
                                <th>Num</th>
                               
                                <th> Serial</th>
                                <th>Equipo</th>
                            
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require '../../model/Equipo.php';
                            $equipo = new Equipo();
                            $equipo->readAllEquipo();
                            ?>
                        </tbody>
                    </table>
                </div>
                <!-- END TABLE -->
            </div>
            <!-- End div row -->

        </div>
        <!-- End div content -->
    </div>
    <!-- End div container -->

    <!-- Scripts Starts -->
    <?php include '../../config/base_script.php';?>
    <!-- Scripts End -->
</body>
</html>