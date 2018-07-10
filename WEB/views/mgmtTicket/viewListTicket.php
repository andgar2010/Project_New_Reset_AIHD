<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Tickets</title>
    <link rel="stylesheet" href="../../node_modules/datatables.net-bs/css/dataTables.bootstrap.css">
    <!-- <link rel="stylesheet" href="../../node_modules/datatables.net-buttons-bs/css/buttons.bootstrap.css"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">

    <?php
    require '../../config/base_head.php';
    //require '../../config/base_script.php';
    require '../../config/Toastr.php'
    //include '../config/googleAnaytics.php';
    ;?>

    <!-- Scripts Starts -->
    <script defer src="../../assets/js/ajaxLoadPage.js"></script>
    <script defer src="../../node_modules/datatables.net/js/jquery.dataTables.js"></script>
    <script defer src="../../node_modules/datatables.net-bs/js/dataTables.bootstrap.js"></script>
    <script defer src="../../node_modules/datatables.net-buttons/js/dataTables.buttons.js"></script>
    <script defer src="../../node_modules/jszip/dist/jszip.min.js"></script>
    <script defer src="../../node_modules/pdfmake/build/pdfmake.min.js"></script>
    <script defer src="../../node_modules/pdfmake/build/vfs_fonts.js"></script>
    <script defer src="../../node_modules/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <!-- <script src="../../node_modules/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script> -->

    <script defer>
        $(document).ready(function() {
            $("#myTable").DataTable({
                "language":{
                    "sProcessing":     "Procesando...",
                    "sLengthMenu":     "Mostrar _MENU_ registros",
                    "sZeroRecords":    "No se encontraron resultados",
                    "sEmptyTable":     "Ningún dato disponible en esta tabla",
                    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix":    "",
                    "sSearch":         "Buscar:",
                    "sUrl":            "",
                    "sInfoThousands":  ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                                "sFirst":    "Primero",
                                "sLast":     "Último",
                                "sNext":     "Siguiente",
                                "sPrevious": "Anterior"
                    },
                    "oAria": {
                                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    }
                },"dom": // Insertar objeto tabla por formato:
                    // Encabezado de la tabla -- l->Num registros por pagina, f-> barra de filtro
                    "<'row'<'col-sm-6'l><'col-sm-6'f>>" +
                    // Cuerpo de la tabla -- t-> tabla, r (no aun entiendo)
                    "<'row'<'col-sm-12'tr>>" +
                    // Seccion estado de la tabla -- i-> info de tabla, p-> num Paginas por dividir registros
                    "<'row'<'col-sm-5'i><'col-sm-7'p>>" +
                    // Pie de la tabla -- B-> Botones de exportar
                    "<'row'<'col-sm-12'B>>",
                buttons: [
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5'
                ]
            });
        });
    </script>
    <!-- Scripts End -->


    <!-- <script src="../../node_modules/datatables.net-autofill/js/dataTables.autoFill.min.js"></script> -->
    <!-- <script src="../../node_modules/datatables.net-responsive/js/dataTables.responsive.min.js"></script> -->
    <!-- <script src="../../node_modules/datatables.net-rowgroup/js/dataTables.rowGroup.min.js"></script> -->
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
                        <h1>Lista de <strong>Tickets</strong></h1>
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
                    <table id="myTable" class="table table-hover table-striped table-bordered tablesorter">
                        <thead>
                            <tr>
                                <th>Num</th>
                                <th>Fecha de Solicitud</th>
                                <th>Tipo de Equipo</th>
                                <th>Serial Equipo</th>
                                <th>Tipo de incidencia</th>
                                <th>Descripción</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            require '../../model/Ticket.php';
                            $ticket = new Ticket();
                            $ticket->readAllListTicket();
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
</body>

</html>