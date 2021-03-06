<?php
session_start();

if (isset($_SESSION)) {
    $nombreUsuario  = $_SESSION['nombres_completos'];
    $codRol         = $_SESSION['cod_rol'];
} else {
    header('location: ../../index.php?info=noAuth');
}

/**
 * Imprimir rol de usuario en texto por codigo de rol de usuario BD
 *
 * $cod_rol @param int codigo de rol de usuario desde BD
 *
 * @return String echo <td></td>
 */
function printCodRolToText($cod_rol)
{
    switch ($cod_rol) {
        case '1':
            echo'Superadministrador';
            break;
        case '2':
            echo'Técnico';
            break;
        case '3':
            echo'Administrativo';
            break;
        case '4':
            echo'Usuario';
            break;
        default:
            echo'<span class="label label-warning">No seleccionado</span>';
            break;
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Propeller Admin Dashboard">
    <meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">

    <title>New Reset AIHD Admin Dashboard</title>
    <?php
        require '../../config/base_head.php';
        //require '../config/googleAnaytics.php';
    ?>
    <!-- Styles Ends -->

    <!-- Scripts Starts -->
    <?php include '../../config/base_script.php';?>
    <!-- Scripts End -->

    <!-- Javascript for Datepicker -->
    <!-- build:[src] components/datetimepicker/js/ -->
    <script defer type="text/javascript" language="javascript" src="../../node_modules/moment/min/moment-with-locales.js"></script>
    <script defer type="text/javascript" language="javascript" src="../../node_modules/propellerkit-datetimepicker/js/bootstrap-datetimepicker.js"></script>
    <!-- /build -->
    <script>
        // Linked date and time picker
        // start date date and time picker
        $('#datepicker-default').datetimepicker();
        $(".auto-update-year").html(new Date().getFullYear());
    </script>

    <script defer src="../../assets/js/animateSidebar.js"></script>
    <script defer src="../../assets/js/ajaxLoadPage.js"></script>

</head>

<body>
    <!-- Header Starts -->
    <!--Start Nav bar -->
    <nav class="navbar navbar-inverse navbar-fixed-top pmd-navbar pmd-z-depth">
        <div class="container-fluid">
            <div class="pmd-navbar-right-icon pull-right navigation">
                <!-- Notifications -->
                <div class="dropdown notification icons pmd-dropdown">
                    <a href="javascript:void(0)" title="Notification" class="dropdown-toggle pmd-ripple-effect" data-toggle="dropdown" role="button"
                        aria-expanded="true">
                        <div data-badge="3" class="material-icons md-light pmd-sm pmd-badge  pmd-badge-overlap">notifications_none</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right pmd-card pmd-card-default pmd-z-depth" role="menu">
                        <!-- Card header -->
                        <div class="pmd-card-title">
                            <div class="media-body media-middle">
                                <a href="notifications.html" class="pull-right">3 new notifications</a>
                                <h3 class="pmd-card-title-text">Notifications</h3>
                            </div>
                        </div>

                        <!-- Notifications list -->
                        <ul class="list-group pmd-list-avatar pmd-card-list">
                            <li class="list-group-item" style="display:none">
                                <p class="notification-blank">
                                    <span class="dic dic-notifications-none"></span>
                                    <span>You don´t have any notifications</span>
                                </p>
                            </li>
                            <li class="list-group-item unread">
                                <a href="javascript:void(0)">
                                    <div class="media-left">
                                        <span class="avatar-list-img40x40">
                                            <img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="../../assets/images/profile-1.png" data-holder-rendered="true">
                                        </span>
                                    </div>
                                    <div class="media-body">
                                        <span class="list-group-item-heading">
                                            <span>Prathit</span> posted a new challanegs</span>
                                        <span class="list-group-item-text">5 Minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a href="javascript:void(0)">
                                    <div class="media-left">
                                        <span class="avatar-list-img40x40">
                                            <img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="../../assets/images/profile-2.png" data-holder-rendered="true">
                                        </span>
                                    </div>
                                    <div class="media-body">
                                        <span class="list-group-item-heading">
                                            <span>Keel</span> Cloned 2 challenges.</span>
                                        <span class="list-group-item-text">15 Minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item unread">
                                <a href="javascript:void(0)">
                                    <div class="media-left">
                                        <span class="avatar-list-img40x40">
                                            <img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="../../assets/images/profile-3.png" data-holder-rendered="true">
                                        </span>
                                    </div>

                                    <div class="media-body">
                                        <span class="list-group-item-heading">
                                            <span>John</span> posted new collection.</span>
                                        <span class="list-group-item-text">25 Minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="list-group-item unread">
                                <a href="javascript:void(0)">
                                    <div class="media-left">
                                        <span class="avatar-list-img40x40">
                                            <img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="../../assets/images/profile-4.png" data-holder-rendered="true">
                                        </span>
                                    </div>
                                    <div class="media-body">
                                        <span class="list-group-item-heading">
                                            <span>Valerii</span> Shared 5 collection.</span>
                                        <span class="list-group-item-text">30 Minutes ago</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <!-- End notifications list -->
                    </div>
                </div>
                <!-- End notifications -->
            </div>
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a href="javascript:void(0);" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect pull-left margin-r8 pmd-sidebar-toggle">
                    <i class="material-icons">menu</i>
                </a>
                <a href="../../index.php" class="navbar-brand">
                    <img class="img-responsive" src="../../assets/images/LogoInverted_TEXTV2Alpha_128.png" alt="Logo New Reset AHID">
                </a>
            </div>
        </div>

    </nav>
    <!--End Nav bar -->
    <!-- Header Ends -->

    <!-- Sidebar Starts -->
    <div class="pmd-sidebar-overlay"></div>

    <!-- Left sidebar -->
    <aside class="pmd-sidebar sidebar-default pmd-sidebar-slide-push pmd-sidebar-left pmd-sidebar-open bg-fill-darkblue sidebar-with-icons"
        role="navigation">
        <ul class="nav pmd-sidebar-nav">

            <!-- User info -->
            <li class="dropdown pmd-dropdown pmd-user-info visible-xs visible-md visible-sm visible-lg">
                <a aria-expanded="false" data-toggle="dropdown" class="btn-user dropdown-toggle media" data-sidebar="true" aria-expandedhref="javascript:void(0);">
                    <div class="media-left">
                        <img src="../../assets/images/user-icon.png" alt="New User">
                    </div>
                    <div class="media-body media-middle">
                        <?php echo $nombreUsuario;?> <i class="fa fa-chevron-circle-down rotate" aria-hidden="true"></i>
                    </div>
                    <div>
                        <i class="dic-more-vert dic" style="margin-left: 55px;">
                            <?php printCodRolToText($codRol);?>
                        </i>
                    </div>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="SignIn.php">
                            <i class="fa fa-sign-out" aria-hidden="true"></i> Cerrar sesión
                        </a>
                    </li>
                </ul>
            </li>
            <!-- End user info -->

            <!-- Solicitar nuevo ticket -->
            <li>
                <a id="newTicket">
                    <div class="row">
                        <button type="button" class="btn btn-primary pmd-ripple-effect pmd-z-depth-2">
                            <i class="fa fa-plus fa-lg"></i>Solicitar nuevo ticket
                        </button>
                    </div>
                </a>
            </li>
            <!-- End Solicitar nuevo ticket -->

            <!-- Lista de Tickets-->
            <li>
                <a id="listTicket" class="pmd-ripple-effect">
                    <span class="media-body">
                        <i class="fa fa-table fa-lg"></i>Lista de Tickets
                    </span>
                </a>
            </li>
            <!-- End Lista de Tickets-->

            <!-- Gestion de usuarios  -->
            <?php
                //<a id="listUsers" class="pmd-ripple-effect">
            if ($codRol == 1 || $codRol == 1) {
                echo '
                <li>
                    <a onClick="goToListUsers()" class="pmd-ripple-effect">
                        <span class="media-body">
                            <i class="fa fa-user fa-lg"></i>Gestión de usuarios
                        </span>
                    </a>
                </li>';
            }

            ?>
            <!-- End Gestion de usuarios  -->

            <!-- Gestion de Equipos  -->
            <?php
            if ($codRol == 1 || $codRol == 2) {
                echo '
                <li>
                <a id="listDevices" class="pmd-ripple-effect">
                    <span class="media-body">
                        <i class="fa fa-desktop fa-lg"></i>Gestión de Equipos
                    </span>
                </a>
            </li>';
            }
            ?>
            <!-- End Gestion de Equipos  -->

            <!-- Panel de Control-->
            <!-- <li>
                <a class="pmd-ripple-effect" href="dashboard.php">
                    <i class="media-left media-middle">
                        <svg version="1.1" x="0px" y="0px" width="19.83px" height="18px" viewBox="287.725 407.535 19.83 18" enable-background="new 287.725 407.535 19.83 18"
                            xml:space="preserve">
                            <g>
                                <path fill="#C9C8C8" d="M307.555,407.535h-9.108v10.264h9.108V407.535z M287.725,407.535v6.232h9.109v-6.232H287.725z M296.834,415.271h-9.109v10.264h9.109V415.271z M307.555,419.303h-9.108v6.232h9.108V419.303z"
                                />
                            </g>
                        </svg>
                    </i>
                    <span class="media-body">Panel de control</span>
                </a>
            </li> -->
            <!-- End Panel de Control -->

            <!-- Reporte  -->
            <li class="dropdown pmd-dropdown">
                <a aria-expanded="false" data-toggle="dropdown" class="btn-user dropdown-toggle media" data-sidebar="true" href="javascript:void(0);">
                    <i class="media-left media-middle">
                        <svg version="1.1" x="0px" y="0px" width="14.187px" height="18px" viewBox="0 0 14.187 18" enable-background="new 0 0 14.187 18"
                            xml:space="preserve">
                            <path fill="#C9C8C8" d="M0,0v18h14.187V0H0z M3.121,3.293h2.023v4.767H3.121V3.293z M11.211,14.764H2.948v-2.022h8.263V14.764 L11.211,14.764z M11.211,11.585H2.948V9.563h8.263V11.585L11.211,11.585z M11.211,8.407H7.455V6.385h3.756V8.407z M11.211,5.229 H7.455V3.207h3.756V5.229z"
                            />
                        </svg>
                    </i>
                    <span class="media-body">
                        Reporte <i class="fa fa-chevron-circle-down rotate" aria-hidden="true"></i>
                    </span>
                    <div class="media-right media-bottom">
                        <!-- <i class="dic-more-vert dic"></i> -->
                    </div>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="#">
                            <i class="media-left media-middle">
                                <i class="fa fa-file-text" aria-hidden="true"></i>
                            </i>
                            <span class="media-body"> Nuevo Reporte</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!-- End Reporte  -->

        </ul>
    </aside>
    <!-- End Left sidebar -->
    <!-- Sidebar Ends -->

    <!--content area start-->
    <div id="contentarea" class="pmd-content content-area dashboard">
        <!-- Today's Site Activity -->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="row">
                <div id="content" class="">

                <?php
                    print_r($_SESSION);
                ?>

                </div>

            </div>
            <!-- <iframe align="center" width="100%" height="850px" frameborder="no" scrolling="yes" name="iframe" id="iframe" src="./listTicket.php"></iframe> -->
        </div>
        <!--end Today's Site Activity -->

    </div>
    <!--end content area-->



    <?php

    if (isset($_GET['info']) && isset($_GET['name'])) {
        switch ($_GET['info']) {
            case 'added':
                echo ' <script>
                    goToListUsers();
                    </script>';
                break;

            case 'updated':
                echo ' <script>
                    goToListUsers();
                    </script>';
                // $nameUser = $_GET['name'];
                // $stusT = 'success';
                // $titleT = 'Bien hecho!';
                // $msgT = 'Los datos han sido actualizado con éxito.';
                // $class = "alert alert-success alert-dismissable pmd-z-depth-1";
                // $msg = 'usuario de datos actualizado con éxito';

                // if (isset($msg) && isset($class)) {
                //     echo '<script>toastr.' . $stusT . '("' . $msgT . '", "' . $titleT . '", {timeOut: 6000, "closeButton": true, "progressBar": true})</script>';
                //     echo '<div class="' . $class . '">' . $btnMsg . $nameUser . ' ' . $msg . '</div>';
                // }
                break;

            case 'deleted':
                    echo ' <script>
                goToListUsers();
                </script>';
                // $nameUser = $_GET['name'];
                // $stusT = 'info';
                // $titleT = 'Bien hecho!';
                // $msgT = 'Los datos han sido eliminado con éxito.';
                // $class = "alert alert-info alert-dismissable pmd-z-depth-1";
                // $msg = 'usuario de datos eliminado con éxito';

                // if (isset($msg) && isset($class)) {
                //     echo '<script>toastr.' . $stusT . '("' . $msgT . '", "' . $titleT . '", {timeOut: 6000, "closeButton": true, "progressBar": true})</script>';
                //     echo '<div class="' . $class . '">' . $btnMsg . $nameUser . ' ' . $msg . '</div>';
                // }
                break;

            default:
                /*echo '<div class="alert alert-success alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"> &times;</button>Los datos han sido guardados con éxito.
                        </div>';*/
                break;
        }
    }

    ?>

</body>

</html>