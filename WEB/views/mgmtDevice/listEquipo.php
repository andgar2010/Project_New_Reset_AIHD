<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de equipos</title>
    <?php include '../config/base_head.php';?>
    <?php include '../config/googleAnaytics.php';?>
    <?php include '../config/Toastr.php';?>
    <!-- Styles Ends -->
</head>
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
                        <a id="addUser" href="./viewAddUser.php" class="">
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
                               
                                <th> Equipo</th>
                                <th>Serial </th>
                            
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>portatil</td>
                                <td>544654</td>
                                
                                <td>visto </td>
                                
                               
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
                                <td>escritorio</td>
                                <td>544658</td>
                           
                                <td>nuevo</td>
                                
                               
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