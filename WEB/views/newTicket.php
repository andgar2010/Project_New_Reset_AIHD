<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Nuevo ticket">
    <meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">

    <title>Nuevo Ticket</title>
    <?php include '../config/base_head.php';?>
    <?php include '../config/googleAnaytics.php';?>
    <?php include '../config/Toastr.php';?>
</head>

<body>
    <!-- Container -->
    <div class="container">

        <!-- Row -->
        <div class="row">

            <!-- Col-12 -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 control-label">
                <!-- Title -->
                <h1 class="section-title" id="services">
                    <span>Solicitar nuevo ticket</span>
                </h1>
                <!-- End Title -->

                <!--breadcrum start-->
                <ol class="breadcrumb text-left">
                    <li>
                        <a href="dashboard.php">Panel de control</a>
                    </li>
                    <li class="active">Solicitar nuevo ticket</li>
                </ol>
                <!--End breadcrum -->

                <!--Bloque-->
                <div class="section section-custom billinfo">

                    <!--section-title -->
                    <h2>Crear nuevo ticket</h2>
                    <!--End section-title -->

                    <!-- Start section content -->
                    <form id="newTicket" action="" method="post" enctype="multipart/form-data">
                        <div class="pmd-card pmd-z-depth-5">
                            <div class="pmd-card-body">

                                <!-- TO DO -->
                                <!-- PK idTicket OK  -->
                                    <!-- fecha_inicio OK  -->
                                    <!-- fin_atencion  -->
                                    <!-- archivo_evidencia  -->
                                    <!-- descrip_incidencia  -->
                                <!-- ENUM cod_categoria  -->
                                <!-- ENUM cod_estado_ticket -->
                                <!-- FK Usuario_idUsuarioÍndice  -->
                                <!-- FK Equipo_idEquipoÍndice -->

                                <?php
                                //$idLastTicket = $con->id;
                                //$idLastTicket++;
                                ?>

                                    <!--Row 1-->
                                    <div class="group-fields clearfix row">

                                        <!--Colmun 3 FechaSolictud size 6-->
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 control-label">
                                            <!-- Readonly Input Numero ticket -->
                                            <div class="form-group pmd-textfield">
                                                <label for="now_time_ticket" class="control-label" style="display: block; text-align:center;">Fecha de solicitud </label>
                                                <input id="now_time_ticket" name="now_time_ticket" type="datetime" readonly="" value="" class="mat-input form-control" style="text-align:center; line-height: 20px;"
                                                    disabled></input>
                                            </div>
                                            <!-- End Readonly Input fecha inicio solicitud -->
                                        </div>
                                        <!--End Colmun 3 FechaSolictud size 6-->

                                        <!--Colmun 3 NumTicket size 6-->
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 control-label">
                                            <!-- Readonly Input Numero ticket -->
                                            <div class="form-group pmd-textfield">
                                                <label for="num_ticket" class="control-label" style="display: block; text-align:center;"> Numero de ticket </label>
                                                <input id="num_ticket" name="num_ticket" type="text" readonly="" value="#000 <?php //echo $idLastTicket; ?>" class="mat-input form-control"
                                                    style="text-align:center;" disabled></input>
                                            </div>
                                        </div>
                                        <!--End Colmun 3 NumTicket size 6-->

                                    </div>
                                    <!--End Row 1-->

                                    <!--Row 2-->
                                    <div class="group-fields clearfix row">

                                        <!--Colmun 1 Tiempo transcurrido -->
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                                            <div class="form-group pmd-textfield">
                                                <label for="elapsed_time" class="control-label" style="display: block; text-align:center;"> Tiempo transcurrido </label>
                                                <input id="elapsed_time" name="elapsed_time " type="text" readonly="" value="00 Días 00:00:00" class="mat-input form-control"
                                                    style="text-align:center;" disabled></input>
                                            </div>
                                        </div>
                                        <!--End Colmun 1 Tiempo transcurrido -->

                                        <!--Colmun 2 Tiempo por solucionado-->
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                                            <div class="form-group pmd-textfield">
                                                <label for="tiemposolucionado" class="control-label" style="display: block; text-align:center;"> Tiempo por solucionado </label>
                                                <input type="text" readonly="" value="00 Días 00:00:00" id="first-name" class="mat-input form-control" style="text-align:center;"
                                                    disabled></input>
                                            </div>
                                        </div>
                                        <!--End Colmun 2 Tiempo por solucionado-->

                                    </div>
                                    <!--End Row 2-->

                                    <!-- Row 3  -->
                                    <div class="group-fields clearfix row">

                                        <!--Column 1 Nombre -->
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                <label for="nombre" class="control-label" style="display: block; text-align:center;"> Nombre </label>
                                                <input type="text" readonly="" value="nombre_usuario" id="regular1" class="form-control" style="display: block; text-align:center;"
                                                    disabled>
                                            </div>
                                        </div>
                                        <!--End Column 1 Nombre -->

                                        <!--Column 2 Apellidos -->
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                <label for="apellido" class="control-label" style="display: block; text-align:center;"> Apellidos </label>
                                                <input type="text" readonly="" value="apellido_usuario" id="regular1" class="form-control" style="display: block; text-align:center;"
                                                    disabled>
                                            </div>
                                        </div>
                                        <!--End Column 2 Apellidos -->

                                    </div>
                                    <!-- End Row 4  -->

                                    <!--Row 3-->
                                    <div class="group-fields clearfix row">

                                        <!--Colmun 1 Rol-->
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                <label for="rol" class="control-label" style="display: block; text-align:center;"> Rol </label>
                                                <input type="text" readonly="" value="nombre_rol" id="rol" class="mat-input form-control" style="text-align:center;" disabled></input>
                                            </div>
                                        </div>
                                        <!--End Colmun 1 Rol-->

                                        <!--Colmun 2 Area-->
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                <label for="area" class="control-label" style="display: block; text-align:center;"> Area </label>
                                                <input type="text" readonly="" value="nombre_area" id="area" class="mat-input form-control" style="text-align:center;" disabled></input>
                                            </div>
                                        </div>
                                        <!--End Colmun 2 Area-->

                                        <!--Colmun 3 Gerencia-->
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                <label for="gerencia" class="control-label" style="display: block; text-align:center;"> Gerencia </label>
                                                <input type="text" readonly="" value="nombre_gerencia" id="gerencia" class="mat-input form-control" style="text-align:center;" disabled></input>
                                            </div>
                                        </div>
                                        <!--End Colmun 3 Gerencia-->

                                    </div>
                                    <!--End Row 2-->

                                    <!-- Row 3  -->
                                    <div class="group-fields clearfix row">

                                        <!--Column 2 Categoria -->
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                <label for="categoria" class="control-label" style="display: block; text-align: center">Categoria*</label>
                                                <select class="select-simple form-control pmd-select2 text-center">
                                                    <option value=""> </option>
                                                    <option value="1">Hardware</option>
                                                    <option value="2">Software</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--End Column 2 Categoria -->

                                    </div>
                                    <!-- End Row 3  -->

                                    <!--Row 4-->
                                    <div>
                                        <!--Colmun 1 estado-->
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                <label for="estado" class="control-label" style="display: block; text-align:center;"> Estado </label>
                                                <input type="text" readonly="" value="nombre_estado" id="estado" class="mat-input form-control" style="text-align:center;"></input>
                                            </div>
                                        </div>
                                        <!--End Colmun 1 estado-->

                                        <!--Colmun 2 Prioridad-->
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                <label for="prioridad" class="control-label" style="display: block; text-align:center;"> Prioridad* </label>
                                                <select class="select-simple form-control pmd-select2">
                                                    <option value=""></option>
                                                    <option>muy baja</option>
                                                    <option> baja</option>
                                                    <option>medio</option>
                                                    <option>alta</option>
                                                    <option>muy alta</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--End Colmun 2 Prioridad-->

                                    </div>
                                    <!--End Row 4-->

                                    <!--Row 5-->
                                    <div>
                                        <!--Colmun 1 Ubicacion-->
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                <label for="ubicacion" class="control-label" style="display: block; text-align:center;"> Ubicacion* </label>
                                                <input type="text" value="" id="ubicacion" class="mat-input form-control" style="text-align:center;"></input>
                                            </div>
                                        </div>
                                        <!--End Colmun 1 Ubicacion-->

                                        <!--Colmun 2 Tipo de equipo-->
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                <label for="tipo_equipo" class="control-label" style="display: block; text-align:center;"> Tipo de equipo* </label>
                                                <select class="select-simple form-control pmd-select2">
                                                    <option></option>
                                                    <option>Portatil</option>
                                                    <option> Escritorio</option>
                                                    <option>VideoBeam</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--End Colmun 2 Tipo de equipo-->

                                    </div>
                                    <!--End Row 5-->

                                    <!--Row 6-->
                                    <div>
                                        <!--Colmun 1 Titulo-->
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                <label for="titulo" class="control-label"> Titiulo* </label>
                                                <input type="text" value="" id="titulo" class="mat-input form-control" style="text-align:center;"></input>
                                            </div>
                                        </div>
                                        <!--End Colmun 1 Titulo-->
                                    </div>
                                    <!--End Row 6-->

                                    <!--Row 7-->
                                    <div>
                                        <!--Colmun 1 Descripcion-->
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group pmd-textfield">
                                                <label class="control-label"> Descripcion* </label>
                                                <textarea required class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <!--End Colmun 1 Descripcion-->
                                    </div>
                                    <!--End Row 7-->

                                    <!--Row 8-->
                                    <div>
                                        <!--Colmun 1 Archivo adjunto-->
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group pmd-textfield">
                                                <label class="control-label"> Archivo adjunto </label>
                                                <input type='file' name='archivo1' id='archivo1' placeholder="carga tu Archivo adjunto" required>
                                            </div>
                                        </div>
                                        <!--End Colmun 1 Archivo adjunto-->
                                    </div>
                                    <!--End Row 8-->

                                    <div class="group-fields clearfix row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <!-- <div class="checkbox pmd-default-theme">
                                <label class="pmd-checkbox checkbox-pmd-ripple-effect">
                                    <input type="checkbox" value="">
                                    <span>Save Details</span>
                                </label>
                            </div> -->
                                        </div>
                                    </div>

                                    <div class="pmd-card-actions">
                                        <a href="javascript:void(0);" class="btn btn-primary next">Enviar</a>
                                        <a href="javascript:void(0);" class="btn btn-default">Cancelar</a>
                                    </div>

                            </div>

                        </div>
                        <!-- section content end -->
                    </form>
                </div>
                <!--End Bloque-->
            </div>
            <!-- End Col-12 -->
        </div>
        <!-- End Row -->
    </div>
    <!-- End Container -->
    <?php include '../config/base_script.php';?>

    <script>
        // Linked date and time picker
        // start date date and time picker
        $('#datepicker-default').datetimepicker();
        $(".auto-update-year").html(new Date().getFullYear());
    </script>

    <!-- Animate Sidebar -->
    <script src="../assets/js/animateSidebar.js"></script>

    <?php include '../config/TinyMCE.php';?>

    <!-- Moment and format datetime -->
    <?php include '../config/moment.php';?>
    <script type="text/javascript">
        moment.locale('es');
        document.getElementById('now_time_ticket').value = moment().format('DD/MMM/YYYY, hh:mm a');
    </script>

    <body>

</html>