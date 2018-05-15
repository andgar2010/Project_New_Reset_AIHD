<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Usuarios</title>
    <?php
    require '../config/base_head.php';
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
            if (isset($_GET['info']) == 'added') {
                $stusT  = 'success';
                $titleT = 'Bien hecho!';
                $msgT   = 'Los datos han sido guardados con éxito.';
                $class  = "alert alert-success";
                $msg    = 'Datos insertados con éxito';
                $nameUser = $_GET['name'];
            }

            if (isset($msg) && isset($class)) {
                echo '<script>toastr.'.$stusT.'("'.$msgT.'", "'.$titleT.'", {timeOut: 6000, "closeButton": true, "progressBar": true})</script>';
                echo '<div class="'.$class.'">'. $nameUser. ' de '. $msg. '</div>';
            }
            ?>
            </div>
            <!-- End div row -->

            <!-- div row -->
            <div class="row">
                <!-- TABLE -->
                <div class="table-responsive">
                    <table class="table table-hover table-striped table-bordered ">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombres y apellidos</th>
                                <th>Cargo</th>
                                <th>Área</th>
                                <th>Rol</th>
                                <th>Estado</th>
                                <th>Acciones</th>
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
    <?php include '../config/base_script.php';?>

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
                { url: "./addUser.php", success: function(result)
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