<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Usuarios</title>
    <?php include '../config/base_head.php';?>
    <?php include '../config/googleAnaytics.php';?>
    <?php include '../config/Toastr.php';?>
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
                        <a id="addUser" href="./addUser.php" class="">
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
                            <tr>
                                <td>1</td>
                                <td>Pepe Rodriguez</td>
                                <td>Profesor</td>
                                <td>Académica</td>
                                <td>Usuario</td>
                                <td>Activo</td>
                                <td>
                                    <!--  -->
                                    <a href="" class="btn btn-primary btn-sm">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <!--  -->
                                    <!-- END Button  -->
                                    <a href="" class="btn btn-danger btn-sm">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                    <!-- END Button  -->
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Lorena Sanchez</td>
                                <td>Rector</td>
                                <td>Administrativa</td>
                                <td>Administrativo</td>
                                <td>Activo</td>
                                <td>
                                    <!--  -->
                                    <a href="" class="btn btn-primary btn-sm">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <!--  -->
                                    <!-- END Button  -->
                                    <a href="" class="btn btn-danger btn-sm">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                    <!-- END Button  -->
                                </td>
                            <tr>
                                <td>3</td>
                                <td>José Tujiano</td>
                                <td>Rector</td>
                                <td>Administrativa</td>
                                <td>Administrativo</td>
                                <td>Inactivo</td>
                                <td>
                                    <!--  -->
                                    <a href="" class="btn btn-primary btn-sm">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <!--  -->
                                    <!-- END Button  -->
                                    <a href="" class="btn btn-danger btn-sm">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                    <!-- END Button  -->
                                </td>
                            </tr>
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