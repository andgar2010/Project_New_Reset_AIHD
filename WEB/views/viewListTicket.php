<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Tickets</title>
    <?php include '../config/base_head.php';?>
    <?php include '../config/googleAnaytics.php';?>
    <?php include '../config/Toastr.php';?>
    <!-- Styles Ends -->
</head>
<body>
    <!-- div container -->
    <div class="container">
        <!-- div content -->
        <div class="table-wrapper">
            <!-- div row -->
            <div class="table-title">
                <div class="row pmd-card-title">
                    <div class="pmd-card-title-text">
                        <h1>Lista de Tickets</h1>
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
                                <th>Fecha de Solicitud</th>
                                <th>Tipo de Equipo</th>
                                <th>Serial Equipo</th>
                                <th>Tipo de incidencia</th>
                                <th>Descripción</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>2018-05-11</td>
                                <td>Portatil</td>
                                <td>544654</td>
                                <td>Software</td>
                                <td>No abra office...</td>
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
    <!-- Scripts End -->
</body>
</html>