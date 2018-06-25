<?php
session_start();

if (isset($_SESSION)) {
    $nombreUsuario = $_SESSION['nombres_completos'];
    $codRol = $_SESSION['cod_rol'];
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
            echo 'Superadministrador';
            break;
        case '2':
            echo 'Técnico';
            break;
        case '3':
            echo 'Administrativo';
            break;
        case '4':
            echo 'Usuario';
            break;
        default:
            echo '<span class="label label-warning">No seleccionado</span>';
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
    <meta name="description" content="Panel de Control NEW RESET A.I.H.D.">

    <?php
        require_once '../../config/base_head.php';
        //require '../config/googleAnaytics.php';
    ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/github-fork-ribbon-css/0.2.2/gh-fork-ribbon.min.css" />

    <!-- Styles Ends -->

    <!-- Scripts Starts -->
    <?php
        include_once '../../config/base_script.php';
    ?>
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

<body class="">

    <!-- Header Starts -->
    <!--Start Nav bar -->
    <nav class="navbar navbar-inverse navbar-fixed-top pmd-navbar pmd-z-depth">

        <div class="container-fluid">
            <div class="pmd-navbar-right-icon pull-right navigation">

                <!-- RIBBON  -->
                <a class="github-fork-ribbon" href="https: //github.com/andgar2010/Project_New_Reset_AIHD#readme" data-ribbon="EN DESARROLLO" title="EN DESARROLLO">EN DESARROLLO</a>

                <!-- Notifications -->
                <div class="dropdown notification icons pmd-dropdown">

                <!--
                    <a href="javascript:void(0)" title="Notification" class="dropdown-toggle pmd-ripple-effect" data-toggle="dropdown" role="button"
                    aria-expanded="true">
                        <div data-badge="3" class="material-icons md-light pmd-sm pmd-badge  pmd-badge-overlap">notifications_none</div>
                    </a>
                -->

                    <div class="pmd-dropdown-menu-container">
                        <div class="pmd-dropdown-menu-bg"></div>
                        <div class="dropdown-menu dropdown-menu-right pmd-card pmd-card-default pmd-z-depth pm-ini"
                            role="menu" style="clip: rect(0px, 320px, 0px, 320px);">
                            <!-- Card header -->
                            <!-- <div class="pmd-card-title">
                                <div class="media-body media-middle">
                                    <a href="notifications.html" class="pull-right">3 new notifications</a>
                                    <h3 class="pmd-card-title-text">Notifications</h3>
                                </div>
                            </div> -->
                            <!-- End Card header -->

                            <!-- Notifications list -->
                            <!-- <ul class="list-group pmd-list-avatar pmd-card-list">
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
                                                <img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="themes/images/profile-1.png" data-holder-rendered="true">
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
                                                <img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="themes/images/profile-2.png" data-holder-rendered="true">
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
                                                <img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="themes/images/profile-3.png" data-holder-rendered="true">
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
                                                <img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="themes/images/profile-4.png" data-holder-rendered="true">
                                            </span>
                                        </div>
                                        <div class="media-body">
                                            <span class="list-group-item-heading">
                                                <span>Valerii</span> Shared 5 collection.</span>
                                            <span class="list-group-item-text">30 Minutes ago</span>
                                        </div>
                                    </a>
                                </li>
                            </ul> -->
                            <!-- End notifications list -->
                        </div>
                    </div>
                </div>
                <!-- End notifications -->
            </div>
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a href="javascript:void(0);" data-target="basicSidebar" data-placement="left" data-position="slidepush" is-open="true" is-open-width="1200"
                    class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect pull-left margin-r8 pmd-sidebar-toggle">
                    <!-- TODO Need verfity work icon -->
                    <i class="material-icons md-light">&nbsp;&nbsp;<i class="fa fa-bars" aria-hidden="true"></i>menu</i>
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
    <aside id="basicSidebar" class="pmd-sidebar  sidebar-default pmd-sidebar-left bg-fill-darkblue sidebar-with-icons is-slidepush pmd-sidebar-left-fixed"
        role="navigation">
        <ul class="nav pmd-sidebar-nav">

            <!-- User info -->
            <li class="dropdown pmd-dropdown pmd-user-info visible-xs visible-md visible-sm visible-lg">
                <a aria-expanded="false" data-toggle="dropdown" class="btn-user dropdown-toggle media" data-sidebar="true" aria-expandedhref="javascript:void(0);">
                    <div class="media-left">
                        <img src="../../assets/images/user-icon.png" alt="New User">
                    </div>
                    <div class="media-body media-middle"> &nbsp;
                        <?php echo $nombreUsuario; ?> <i class="fa fa-chevron-circle-down rotate" aria-hidden="true"></i>
                    </div>
                    <div>
                        <i class="dic-more-vert dic" style="margin-left: 55px;">
                            &nbsp;<?php printCodRolToText($codRol);?>
                        </i>
                    </div>
                    <div class="media-right media-middle">
                        <i class="dic-more-vert dic"></i>
                    </div>
                </a>
                <div class="pmd-dropdown-menu-container">
                    <div class="pmd-dropdown-menu-bg"></div>
                    <ul class="dropdown-menu pm-ini">
                        <li>
                            <a href="../login/SignIn.php">
                                <i class="fa fa-sign-out" aria-hidden="true"></i> Cerrar sesión
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- End user info -->

            <!-- Solicitar nuevo ticket -->
            <li>
                <a class="pmd-ripple-effect" onClick="goToAddTicket()">
                    <div class="row">
                        <button type="button" class="btn btn-primary pmd-ripple-effect pmd-z-depth-2">
                            <span class="media-body">
                                <i class="fa fa-plus fa-lg"></i> Solicitar nuevo ticket
                            </span>
                        </button>
                    </div>
                </a>
            </li>
            <!-- End Solicitar nuevo ticket -->

            <!-- Lista de Tickets-->
            <li>
                <a id="listTicket" class="pmd-ripple-effect" onClick="goTolistTickets()">
                    <i class="media-left media-middle">
                            <i class="fa fa-table fa-lg"></i>
                        </i>
                        <span class="media-body">Gestión de Tickets</span>
                </a>
            </li>
            <!-- End Lista de Tickets-->

            <!-- Gestion de usuarios  -->
            <?php
            if ($codRol == 1 || $codRol == 2) {
                echo '
                <li>
			        <a class="pmd-ripple-effect" onClick="goToListUsers()">
                        <i class="media-left media-middle">
                            <i class="fa fa-user fa-lg"></i>
                        </i>
                        <span class="media-body">Gestión de usuarios</span>
                    </a>
                </li>
                ';
            }
            ?>
            <!-- End Gestion de usuarios  -->

            <!-- Gestion de usuarios  -->
            <?php
            if ($codRol == 1 || $codRol == 2) {
                echo '
                <li>
            	    <a id="listDevices" class="pmd-ripple-effect" onClick="goToListDevices()">
                        <i class="media-left media-middle">
                            <i class="fa fa-desktop fa-lg"></i>
                        </i>
                        <span class="media-body">Gestión de Equipos</span>
                    </a>
                </li>
                ';
            }
            ?>
            <!-- End Gestion de usuarios  -->

            <!-- <li class="dropdown pmd-dropdown">
                <a aria-expanded="false" data-toggle="dropdown" class="btn-user dropdown-toggle media" data-sidebar="true" href="javascript:void(0);">
                    <i class="media-left media-middle">
                        <svg x="0px" y="0px" width="18px" height="18px" viewBox="288.64 337.535 18 18" enable-background="new 288.64 337.535 18 18"
                            xml:space="preserve">
                            <title>022-layout view</title>
                            <desc>Created with Sketch.</desc>
                            <g>
                                <g>
                                    <path fill="#C9C8C8" d="M298.765,353.285v-2.25h3.375v-3.375h2.25v5.625H298.765z M290.89,347.66h2.25v3.375h3.375v2.25h-5.625
								V347.66z M296.515,339.785v2.25h-3.375v3.375h-2.25v-5.625H296.515z M295.39,348.785h4.5v-4.5h-4.5V348.785z M304.39,345.41h-2.25
								v-3.375h-3.375v-2.25h5.625V345.41z M288.64,355.535h18v-18h-18V355.535z"></path>
                                </g>
                            </g>
                            <text transform="matrix(1 0 0 1 -0.0154 1202.2578)" font-family="'HelveticaNeue-Bold'" font-size="186.0251">Created by Richard Wearn</text>
                            <text transform="matrix(1 0 0 1 -0.0154 1388.2891)" font-family="'HelveticaNeue-Bold'" font-size="186.0251">from the Noun Project</text>
                        </svg>
                    </i>
                    <span class="media-body">Pages</span>
                    <div class="media-right media-bottom">
                        <i class="dic-more-vert dic"></i>
                    </div>
                </a>
                <div class="pmd-dropdown-menu-container">
                    <div class="pmd-dropdown-menu-bg"></div>
                    <ul class="dropdown-menu pm-ini">
                        <li>
                            <a href="about.html">About</a>
                        </li>
                        <li>
                            <a href="contact.html">Contact</a>
                        </li>
                        <li>
                            <a href="404.html">404</a>
                        </li>
                        <li>
                            <a href="blank.html">Blank</a>
                        </li>
                        <li>
                            <a href="profile.html">Profile</a>
                        </li>
                    </ul>
                </div>
            </li> -->

        </ul>
    </aside>
    <!-- End Left sidebar -->
    <!-- Sidebar Ends -->

    <!--content area start-->
    <section id="content" class="pmd-content content-area dashboard">

        <div class="container">
            <div class="row" id="card-masonry">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php var_dump($_SESSION);?>
                </div>
            </div>
        </div>

    </section>
    <!--end content area-->

    <?php

    if (isset($_GET['info']) && isset($_GET['name'])) {
        switch ($_GET['info']) {
            case 'added':
                echo '<script> goToListUsers(); </script>';
                break;

            case 'updated':
                echo '<script> goToListUsers(); </script>';
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
                echo ' <script> goToListUsers(); </script>';
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