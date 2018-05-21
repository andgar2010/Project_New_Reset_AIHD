<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Usuarios</title>
    <?php
    require '../config/base_head.php';
    require '../config/base_script.php';
    require '../config/Toastr.php'
    //include '../config/googleAnaytics.php';
    ;?>
    <!-- Styles Ends -->
</head>
<body>
    <!-- div container -->
    <div class="container">
        <!-- div content -->
        <div  class="table-wrapper">
            <!-- div row -->
            <div class="table-title">
                <div class="row pmd-card-title">
                    <div class="col-sm-8 col-md-8">
                        <br>
                        <h1 class="pmd-card-title-text" align="center">Gestión de <strong>usuarios</strong></h1>
                        <hr>
                    </div>
                    <!-- End div .col-sm-8 -->
                    <div class="col-sm-4 col-xs-6">
                        <br>
                        <a id="addUser" href="./viewAddUser.php" class="">
                            <button type="button" class="btn btn-info pmd-btn-raised pmd-ripple-effect">
                                <i class="fa fa-plus" aria-hidden="true"></i> Agregar usuario
                            </button>
                        </a>
                    </div>
                    <!-- End div .col-sm-4 -->
                </div>

            </div>
            <!-- End div row -->

            <!-- div row -->
            <div class="row">
            <?php

            if (isset($_GET['info']) && isset($_GET['name'])) {
                switch ($_GET['info']) {
                case 'added':
                    $nameUser = $_GET['name'];
                    $stusT  = 'success';
                    $titleT = 'Bien hecho!';
                    $msgT   = 'Los datos han sido guardados con éxito.';
                    $class  = "alert alert-success";
                    $msg    = 'usuario de datos insertados con éxito';

                    if (isset($msg) && isset($class)) {
                        echo '<script>toastr.'.$stusT.'("'.$msgT.'", "'.$titleT.'", {timeOut: 6000, "closeButton": true, "progressBar": true})</script>';
                        echo '<div class="'.$class.'">'. $nameUser. ' '. $msg. '</div>';
                    }
                    break;

                case 'updated':
                    $nameUser = $_GET['name'];
                    $stusT  = 'success';
                    $titleT = 'Bien hecho!';
                    $msgT   = 'Los datos han sido actualizado con éxito.';
                    $class  = "alert alert-success";
                    $msg    = 'usuario de datos actualizado con éxito';

                    if (isset($msg) && isset($class)) {
                        echo '<script>toastr.'.$stusT.'("'.$msgT.'", "'.$titleT.'", {timeOut: 6000, "closeButton": true, "progressBar": true})</script>';
                        echo '<div class="'.$class.'">'. $nameUser. ' '. $msg. '</div>';
                    }
                    break;

                case 'deleted':
                    $nameUser = $_GET['name'];
                    $stusT  = 'info';
                    $titleT = 'Bien hecho!';
                    $msgT   = 'Los datos han sido eliminado con éxito.';
                    $class  = "alert alert-info";
                    $msg    = 'usuario de datos eliminado con éxito';

                    if (isset($msg) && isset($class)) {
                        echo '<script>toastr.'.$stusT.'("'.$msgT.'", "'.$titleT.'", {timeOut: 6000, "closeButton": true, "progressBar": true})</script>';
                        echo '<div class="'.$class.'">'. $nameUser. ' '. $msg. '</div>';
                    }
                    break;

                default:

                    break;
                }
            }
            ?>
            </div>
            <!-- End div row -->

            <!-- div row -->
            <div class="row">
                <!-- TABLE -->
                <div class="table-responsive">
                    <table class="table table-hover table-striped table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Nombres y apellidos</th>
                                <th class="text-center">Cargo</th>
                                <th class="text-center">Área</th>
                                <th class="text-center">Rol</th>
                                <th class="text-center">Estado</th>
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            require '../model/Usuario.php';
                            $usuario = new Usuario();
                            $usuario->readUser();
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
    <script>
    $(document).ready(function()
    {
        $("#newTicket").click(function()
        {
            $.ajax(
                { url: "./newTicket.php", success: function(result)
                {
                    $("#content").html(result);
                }
                }
            );
        });
        $("#listTicket").click(function()
        {
            $.ajax(
                { url: "./listTicket.php", success: function(result)
                {
                    $("#content").html(result);
                }
                }
            );
        });
        $("#listUsers").click(function()
        {
            $.ajax(
                { url: "./listUsers.php", success: function(result)
                {
                    $("#content").html(result);
                }
                }
            );
        });
        $("#addUser").click(function()
        {
            $.ajax(
                { url: "./viewAddUser.php", success: function(result)
                {
                    $("#content").html(result);
                }
                }
            );
        });
    });
    </script>
    <!-- Scripts End -->
</body>
</html>