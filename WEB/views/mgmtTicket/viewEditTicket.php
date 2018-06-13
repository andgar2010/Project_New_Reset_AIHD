<?php
session_start();

$id_usuario     = $_SESSION['id_usuario'];
$nombreUsuario  = $_SESSION['nombres_completos'];
$codRol         = $_SESSION['cod_rol'];
$nomArea        = $_SESSION['nom_area'];
$nomCargo       = $_SESSION['nom_cargo'];

include '../../Model/Ticket.php';
include '../../Model/Equipo.php';
$ticket = new Ticket();
$equipo = new Equipo();

$idLastTicket = $ticket->readLastTicket();


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Nuevo ticket">
    <meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">

    <title>Nuevo Ticket</title>
    <?php include '../../config/base_head.php';?>
    <?php include '../../config/Toastr.php';?>
    <link rel="stylesheet" href="../../node_modules/propellerkit-select2/css/pmd-select2.css">
</head>

<body>
    <!-- Container -->
    <div class="container">

        <!-- Row -->
        <div class="row">

            <!-- Col-12 -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 control-label">

                <!--breadcrum start-->
                <ol class="breadcrumb text-left">
                    <li>
                        <a href="dashboard.php">Lista de Ticket</a>
                    </li>
                    <li class="active">Solicitar nuevo ticket</li>
                </ol>
                <!--End breadcrum -->

                <!--Bloque-->
                <div class="section section-custom billinfo">

                <!--section-title -->
                <h1 class="section-title" id="services">
                    <span>Crear nuevo ticket</span>
                </h1>
                <!--End section-title -->

                    <!-- Start section content -->
                    <form id="newTicket" action="../../controllers/ControllerAddNewTicket.php" method="post" enctype="multipart/form-data">
                        <div class="pmd-card pmd-z-depth-5">
                            <div class="pmd-card-body">

                                    <!--Row 1-->
                                    <div class="group-fields clearfix row">

                                        <!--Colmun 1 FechaSolictud size 6-->
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 control-label">
                                            <!-- Readonly Input Numero ticket -->
                                            <div class="form-group pmd-textfield">
                                                <label for="now_time_ticket" class="control-label" style="display: block; text-align:center;">Fecha de solicitud </label>
                                                <input id="now_time_ticket" name="now_time_ticket" type="datetime" readonly="" value="" class="mat-input form-control" style="text-align:center; line-height: 20px;"
                                                    disabled></input>
                                            </div>
                                            <!-- End Readonly Input fecha inicio solicitud -->
                                        </div>
                                        <!--End Colmun 1 FechaSolictud size 6-->

                                        <!--Colmun 2 NumTicket size 6-->
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 control-label">
                                            <!-- Readonly Input Numero ticket -->
                                            <div class="form-group pmd-textfield">
                                                <label for="num_ticket" class="control-label" style="display: block; text-align:center;"> Numero de ticket </label>
                                                <input id="num_ticket" name="num_ticket" type="text" readonly="" value="# <?php echo ++$idLastTicket; ?>" class="mat-input form-control"
                                                    style="text-align:center;" disabled></input>
                                            </div>
                                        </div>
                                        <!--End Colmun 2 NumTicket size 6-->

                                        <!--Colmun 3 estado-->
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                            <div class="form-group pmd-textfield ">
                                                <label for="estado" class="control-label" style="display: block; text-align:center;"> Estado de ticket </label>
                                                <input id="estado" name="id_estado_ticket" type="text" class="form-control" readonly="" value="Nuevo<?php //echo $datos_ticket->estado; ?>" style="text-align:center;" disabled></input>
                                            </div>
                                        </div>
                                        <!--End Colmun 3 estado-->

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
                                                <label for="solve_time" class="control-label" style="display: block; text-align:center;"> Fecha de cierre </label>
                                                <input id="solve_time" type="text" name="solve_time" readonly="" value="00 Días 00:00:00" class="mat-input form-control" style="text-align:center;"
                                                    disabled></input>
                                            </div>
                                        </div> 
                                        <!--End Colmun 2 Tiempo por solucionado-->

                                     </div> 
                                    <!--End Row 2-->

                                    <!-- Row 3  -->
                                    <div class="group-fields clearfix row">

                                        <!--Column 1 Nombre completos-->
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                <label for="nombre" class="control-label" style="display: block; text-align:center;"> Nombres y apellidos </label>
                                                <input id="nombre" name="nombre" type="text" class="form-control" readonly="" value="<?php echo $nombreUsuario;?>" style="display: block; text-align:center;"
                                                    disabled>
                                                <input type="hidden" name="cod_usuario" id="id_usuario" class="form-control" value="<?php echo $id_usuario;?>">
                                            </div>
                                        </div>
                                        <!--End Column 1 Nombre completos-->

                                        <!--Colmun 2 Cargo-->
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                <label for="cargo" class="control-label" style="display: block; text-align:center;"> Cargo </label>
                                                <input id="cargo" name="cod_cargo" type="text" class="form-control" readonly="" value="<?php echo $nomCargo; ?>" style="text-align:center;" disabled></input>
                                            </div>
                                        </div>
                                        <!--End Colmun 2 Cargo-->

                                        <!--Colmun 3 Area-->
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                <label for="area" class="control-label" style="display: block; text-align:center;"> Area </label>
                                                <input id="area" name="cod_area" type="text" class="form-control" readonly="" value="<?php echo $nomArea ?>" style="text-align:center;" disabled></input>
                                            </div>
                                        </div>
                                        <!--End Colmun 3 Area-->

                                    </div>
                                    <!-- End Row 3  -->


                                    <!-- Row 4 -->
                                    <div class="group-fields clearfix row">

                                        <!--Colmun 1 Tipo de Equipo-->
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                <label for="rol" class="control-label" style="display: block; text-align:center;"> Tipo de Equipo* </label>
                                                <select id="cod_tipo_equipo" name="cod_tipo_equipo" class="select-simple form-control pmd-select2 text-center">
                                                    <option value=""> </option>
                                                    <option value="1">Escritorio</option>
                                                    <option value="2">Portátil</option>
                                                </select>
                                            </div>
                                        </div> 
                                        <!--End Colmun 1 Tipo de Equipo-->

                                        <!--Colmun 2 Serial Equipo-->
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                <label for="serial_equipo" class="control-label" style="display: block; text-align:center;"> Serial Equipo* </label>
                                                <select class="select-with-search form-control pmd-select2" id="serial_equipo" name="cod_equipo">
                                                    <?php $equipo->readAllSelectEquipo();?>
                                                </select>
                                            </div>
                                        </div>
                                        <!--End Colmun 2 Serial Equipo-->

                                        <!--Column 3 Tipo de falla-->
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                                <label for="categoria" class="control-label" style="display: block; text-align: center">Tipo de falla*</label>
                                                <select id="categoria" name="cod_categoria" class="select-simple form-control pmd-select2 text-center">
                                                    <option value=""> </option>
                                                    <option value="1">Hardware</option>
                                                    <option value="2">Software</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--End Column 3 Tipo de falla-->

                                    </div>
                                    <!-- End Row 4  -->

                                    <!--Row 5-->
                                    <div>
                                        <!--Colmun 1 Descripcion-->
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group pmd-textfield">
                                                <label class="control-label"> Descripción* </label>
                                                <textarea name="descrip_incidencia" class="form-control"required ></textarea>
                                            </div>
                                        </div>
                                        <!--End Colmun 1 Descripcion-->
                                    </div>
                                    <!--End Row 5-->

                                    <!--Row 6-->
                                    <div>
                                        <!--Colmun 1 Archivo adjunto-->
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group pmd-textfield">
                                                <label for="archivo" class="control-label"> Archivo adjunto </label>
                                                <input id="archivo" name="archivo" type='file' class="" placeholder="carga tu Archivo adjunto" >
                                            </div>
                                        </div>
                                        <!--End Colmun 1 Archivo adjunto-->
                                    </div>
                                    <!--End Row 6-->

                                    <div class="group-fields clearfix row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="checkbox pmd-default-theme">
                                <label class="pmd-checkbox checkbox-pmd-ripple-effect">
                                    <input type="checkbox" value="">
                                    <span>Save Details</span>
                                </label>
                            </div> 
                                        </div>
                                    </div>

                                    <div class="pmd-card-actions">
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pull-right">
                                                <button id="btn_ClickedTicket" name="btn_ClickedTicket" type="submit" class="btn btn-block btn-success pmd-z-depth-3 pmd-ripple-effect">Enviar</button>
                                            </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pull-right">
                                            <a id="listTicket">
                                                <button id="cancelar" name="cancelar" type="button" class="btn btn-block btn-danger pmd-z-depth-3 pmd-ripple-effect">Cancelar</button>
                                            </a>
                                        </div>
                                    </div>

                                    <div>
                                        <br>
                                        <br>
                                        <br>
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
    <?php include '../../config/base_script.php';?>

    <script src="../../node_modules/propellerkit-select2/js/pmd-select2.js"></script>

    <script>
        // Linked date and time picker
        // start date date and time picker
        $('#datepicker-default').datetimepicker();
        $(".auto-update-year").html(new Date().getFullYear());
    </script>

    <!-- Animate Sidebar -->
    <script src="../../assets/js/animateSidebar.js"></script>

    <?php include '../../config/TinyMCE.php';?>

    <!-- Moment and format datetime -->
    <?php include '../../config/moment.php';?>
    <script type="text/javascript">
        moment.locale('es');
        document.getElementById('now_time_ticket').value = moment().format('DD/MMM/YYYY, hh:mm a');
    </script>

    <!-- Jquery js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Propeller textfield js -->
<script type="text/javascript" src="http://propeller.in/components/textfield/js/textfield.js"></script>

<!-- Select2 js-->
<script type="text/javascript" src="http://propeller.in/components/select2/js/select2.full.js"></script>

<!-- Propeller Select2 -->
<script type="text/javascript">
	$(document).ready(function() {

		<!-- Selectbox with search -->
		$(".select-with-search").select2({
			theme: "bootstrap"
		});
		
	});
</script>
<script type="text/javascript" src="http://propeller.in/components/select2/js/pmd-select2.js"></script>
    <body>

</html>