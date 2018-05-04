<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Propeller Admin Dashboard">
    <meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">

    <title>New Reset AIHD Admin Dashboard</title>
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon.ico">

    <!-- Google icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Bootstrap css -->
    <!-- build:[href] assets/css/ -->
    <link rel="stylesheet" type="text/css" href="../node_modules/propellerkit/dist/css/bootstrap.min.css">
    <!-- /build -->

    <!-- Propeller css -->
    <!-- build:[href] assets/css/ -->
    <link rel="stylesheet" type="text/css" href="../node_modules/propellerkit/dist/css/propeller.min.css">
    <!-- /build -->

    <!-- Font Awesome  -->
    <link rel="stylesheet" type="text/css" href="../node_modules/font-awesome/css/font-awesome.min">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- /build -->

    <!-- Propeller date time picker css-->
    <!-- build:[href] components/datetimepicker/css/ -->
    <link rel="stylesheet" type="text/css" href="../node_modules/propellerkit-datetimepicker/css/bootstrap-datetimepicker.css"
    />
    <link rel="stylesheet" type="text/css" href="../node_modules/propellerkit-datetimepicker/css/pmd-datetimepicker.css" />
    <!-- /build -->

    <!-- Propeller theme css-->
    <link rel="stylesheet" type="text/css" href="../assets/Framework/propeller-themes/css/propeller-theme.css" />

    <!-- Propeller admin theme css-->
    <link rel="stylesheet" type="text/css" href="../assets/Framework/propeller-themes/css/propeller-admin.css" />

    <!-- Custom Style -->
    <link rel="stylesheet" type="text/css" href="../assets/css/buttonRotate.css" />

    <!--Google Analytics code-->
    <script>
        (
            function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o), m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            }
        )
        (window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-124615-22', 'auto');
        ga('send', 'pageview');
    </script>
</head>
<!-- Styles Ends -->

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
                                            <img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="../assets/images/profile-1.png" data-holder-rendered="true">
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
                                            <img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="../assets/images/profile-2.png" data-holder-rendered="true">
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
                                            <img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="../assets/images/profile-3.png" data-holder-rendered="true">
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
                                            <img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="../assets/images/profile-4.png" data-holder-rendered="true">
                                        </span>
                                    </div>
                                    <div class="media-body">
                                        <span class="list-group-item-heading">
                                            <span>Valerii</span> Shared 5 collection.</span>
                                        <span class="list-group-item-text">30 Minutes ago</span>
                                    </div>
                                </a>
                            </li>
                        </ul><!-- End notifications list -->
                    </div>
                </div><!-- End notifications -->
            </div>
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a href="javascript:void(0);" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect pull-left margin-r8 pmd-sidebar-toggle">
                    <i class="material-icons">menu</i>
                </a>
                <a href="index.html" class="navbar-brand">
                    <img class="img-responsive" src="../assets/images/LogoInverted_TEXTV2Alpha_128.png" alt="Logo New Reset AHID">
                </a>
            </div>
        </div>

    </nav><!--End Nav bar -->
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
                        <img src="../assets/images/user-icon.png" alt="New User">
                    </div>
                    <div class="media-body media-middle">
                        Administrador
                        <i class="fa fa-chevron-circle-down rotate" aria-hidden="true"></i>
                    </div>
                    <div class="media-right media-middle">
                        <i class="dic-more-vert dic"></i>
                    </div>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="SignIn.php">
                            <i class="fa fa-sign-out" aria-hidden="true"></i> Cerrar sesión
                        </a>
                    </li>
                </ul>
            </li><!-- End user info -->

            <li>
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
            </li>


            <!-- Asistencia  -->
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
                        Asistencia Ticket <i class="fa fa-chevron-circle-down rotate" aria-hidden="true"></i>
                    </span>
                    <div class="media-right media-bottom">
                        <i class="dic-more-vert dic"></i>
                    </div>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a id="new-ticket" href="formulario-ticket.php" target="iframe">
                            <i class="media-left media-middle">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </i>
                            <span class="media-body">Solicitar Nuevo Ticket</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="media-left media-middle">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </i>
                            </i>
                            <span class="media-body"> Consultar Ticket</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="media-left media-middle">
                                <i class="fa fa-refresh" aria-hidden="true"></i>
                            </i>
                            <span class="media-body">Actualizar Ticket</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Asistencia  -->


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
                        <i class="dic-more-vert dic"></i>
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
            </li><!-- End Reporte  -->

        </ul>
    </aside><!-- End Left sidebar -->
    <!-- Sidebar Ends -->

    <!--content area start-->
    <div id="content" class="pmd-content content-area dashboard">

                <!-- Today's Site Activity -->
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <iframe align="center" width="100%" height="850px" frameborder="no" scrolling="yes" name="iframe" id="iframe" src="" frameborder="0"></iframe>
                </div>
                <!--end Today's Site Activity -->

    </div><!--end content area-->


    <!-- Scripts Starts -->
    <!-- build:[src] assets/js/ -->
    <script src="../assets/Framework/propeller-themes/js/jquery-1.12.2.min.js"></script>
    <script src="../node_modules/propellerkit/dist/js/bootstrap.min.js"></script>
    <!-- /build -->
    <script>
        $(document).ready(function () {
            var sPath = window.location.pathname;
            var sPage = sPath.substring(sPath.lastIndexOf('/') + 1);
            $(".pmd-sidebar-nav").each(function () {
                $(this).find("a[href='" + sPage + "']").parents(".dropdown").addClass("open");
                $(this).find("a[href='" + sPage + "']").parents(".dropdown").find('.dropdown-menu').css("display", "block");
                $(this).find("a[href='" + sPage + "']").parents(".dropdown").find('a.dropdown-toggle').addClass("active");
                $(this).find("a[href='" + sPage + "']").addClass("active");
            });
        });

    </script>
    <script type="text/javascript">
        (function () {
            "use strict";
            var toggles = document.querySelectorAll(".c-hamburger");
            for (var i = toggles.length - 1; i >= 0; i--) {
                var toggle = toggles[i];
                toggleHandler(toggle);
            };

            function toggleHandler(toggle) {
                toggle.addEventListener("click", function (e) {
                    e.preventDefault();
                    (this.classList.contains("is-active") === true) ? this.classList.remove("is-active") : this.classList.add("is-active");
                });
            }
        })();

    </script>

    <!-- build:[src] assets/js/ -->
    <script src="../node_modules/propellerkit/dist/js/propeller.min.js"></script>
    <!-- /build -->

    <!-- Javascript for revenue progressbar animation effect-->
    <script>
        function progress(percent, $element) {
            var progressBarWidth = percent * $element.width() / 100;
            $element.find('.progress-bar').animate({
                width: progressBarWidth
            }, 500);
        }

        progress(50, $('.cash-progressbar'));
        progress(30, $('.card-progressbar'));
        progress(60, $('.wallet-progressbar'));
        progress(40, $('.credit-progressbar'));
        progress(10, $('.other-progressbar'));

    </script>
    <!-- Javascript for revenue progressbar animation effect-->


    <!--circle chart-->
    <script src="../assets/Framework/propeller-themes/js/circles.min.js"></script>
    <script>
        < !--javascript for total sales chart-- >
        var colors = [
                ['#dfe3e7', '#f79332'],
                ['#dfe3e7', '#f79332'],
                ['#dfe3e7', '#f79332'],
                ['#dfe3e7', '#2ab7ee'],
                ['#dfe3e7', '#00719d']
            ],
                circles = [];
        for (var i = 1; i <= 3; i++) {
            var child = document.getElementById('circles-' + i),
                percentage = 10 + (i * 8);
            circles.push(Circles.create({
                id: child.id,
                value: percentage,
                radius: 50,
                width: 7,
                colors: colors[i - 1],
                textClass: 'circles-text',
                styleText: true
            }));
        }
        < !--javascript for total sales chart-- >

    </script>

    <!--staked column chart for payment-->
    <script src="../assets/Framework/propeller-themes/js/highcharts.js"></script>
    <script src="../assets/Framework/propeller-themes/js/highcharts-more.js"></script>

    <!-- Payment chart js-->
    <script>
            $(function paymentChart() {
                $('#payment-chart').highcharts({
                    chart: {
                        type: 'column'
                    },
                    colors: "#00719d,#2ab7ee".split(","),
                    title: {
                        text: 'Last 10 days comparison',
                        style: {
                            color: "#4d575d",
                            fontSize: "14px",
                        },
                    },
                    xAxis: {
                        categories: ['9-7', '10-7', '11-7', '12-7', '13-7', '14-7', '15-7', '16-7', '17-7', '18-7']
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: "Amount"
                        },
                        stackLabels: {
                            enabled: false,
                            style: {
                                fontWeight: 'bold',
                                color: (Highcharts.theme && Highcharts.theme.textColor) || 'black'
                            }
                        }
                    },
                    legend: {
                        enabled: !0,
                        align: "right",
                        layout: "horizontal",
                        labelFormatter: function () {
                            return this.name
                        },
                        borderColor: false,
                        borderRadius: 0,
                        navigation: {
                            activeColor: "#274b6d",
                            inactiveColor: "#CCC"
                        },
                        shadow: false,
                        itemStyle: {
                            color: "#888888",
                            fontSize: "12px",
                            fontWeight: "normal"
                        },
                        itemHoverStyle: {
                            color: "#000"
                        },
                        itemHiddenStyle: {
                            color: "#CCC"
                        },
                        itemCheckboxStyle: {
                            position: "absolute"
                        },
                        symbolHeight: 10,
                        symbolWidth: 10,
                        symbolPadding: 5,
                        verticalAlign: "bottom",
                        x: 0,
                        y: 0,
                        title: {
                            style: {
                                fontWeight: "normal"
                            }
                        }
                    },
                    tooltip: {
                        headerFormat: '<b>{point.x}</b><br/>',
                        pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}',
                        backgroundColor: '#ffffff',
                        borderColor: '#f0f0f0',
                        shadow: true
                    },
                    plotOptions: {
                        column: {
                            stacking: 'normal',
                            dataLabels: {
                                enabled: false,
                                color: (Highcharts.theme && Highcharts.theme.dataLabelsColor) || 'white',
                                style: {
                                    textShadow: '0 0 3px black'
                                }
                            }
                        }
                    },
                    credits: {
                        enabled: false,
                    },
                    series: [{
                        name: 'Card',
                        data: [25000, 50000, 75000, 75000, 60000, 70000, 10000, 2500, 5000, 25000]
                    }, {
                        name: 'Wallet',
                        data: [75000, 50000, 25000, 25000, 30000, 30000, 90000, 25000, 3000, 50000]
                    }]

                });
            });

    </script>

    <!--staked column chart for sms details-->
    <script>
        $(function smsChart() {
            $('#sms-chart').highcharts({
                chart: {
                    zoomType: 'none'
                },
                colors: "#e75c5c,#9159b8".split(","),
                title: {
                    text: 'Last 7 days comparison',
                    style: {
                        color: "#4d575d",
                        fontSize: "14px",
                    },
                },
                xAxis: [{
                    categories: ['3-7', '4-7', '5-7', '6-7', '7-7', '8-7', '9-7']
                }],
                yAxis: [{ // Primary yAxis
                    labels: {
                        style: {
                            color: Highcharts.getOptions().colors[1]
                        }
                    },
                    title: {
                        text: 'User Count',
                        style: {
                            color: Highcharts.getOptions().colors[1]
                        }
                    }
                }, { // Secondary yAxis
                    title: {
                        text: 'Total Days',
                        style: {
                            color: Highcharts.getOptions().colors[0]
                        }
                    },
                    labels: {
                        style: {
                            color: Highcharts.getOptions().colors[0]
                        }
                    },
                    opposite: true
                }],
                legend: {
                    enabled: !0,
                    align: "right",
                    layout: "horizontal",
                    labelFormatter: function () {
                        return this.name
                    },
                    borderColor: false,
                    borderRadius: 0,
                    navigation: {
                        activeColor: "#274b6d",
                        inactiveColor: "#CCC"
                    },
                    shadow: false,
                    itemStyle: {
                        color: "#888888",
                        fontSize: "12px",
                        fontWeight: "normal"
                    },
                    itemHoverStyle: {
                        color: "#000"
                    },
                    itemHiddenStyle: {
                        color: "#CCC"
                    },
                    itemCheckboxStyle: {
                        position: "absolute",
                        width: "12px",
                        height: "12px"
                    },
                    symbolHeight: 10,
                    symbolWidth: 10,
                    symbolPadding: 5,
                    verticalAlign: "bottom",
                    x: 0,
                    y: 0,
                    title: {
                        style: {
                            fontWeight: "normal"
                        }
                    }
                },
                tooltip: {
                    shared: true,
                    backgroundColor: '#ffffff',
                    borderColor: '#f0f0f0',
                    shadow: true
                },
                credits: {
                    enabled: false,
                },
                series: [{
                    name: 'Total Days',
                    type: 'spline',
                    yAxis: 1,
                    data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6],
                    tooltip: {
                        pointFormat: '<span style="font-weight: bold; color: {series.color}">{series.name}</span>: '
                    }
                }, {
                    name: 'Total Days error',
                    type: 'errorbar',
                    yAxis: 1,
                    data: [
                        [48, 51],
                        [68, 73],
                        [92, 110],
                        [128, 136],
                        [140, 150],
                        [171, 179],
                        [135, 143]
                    ],
                    tooltip: {
                        pointFormat: '(error range: {point.low}-{point.high})<br/>'
                    }
                }, {
                    name: 'User Count',
                    type: 'column',
                    data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2],
                    tooltip: {
                        pointFormat: '<span style="font-weight: bold; color: {series.color}">{series.name}</span>: <b>{point.y:.1f}</b> '
                    }
                }, {
                    name: 'User Count error',
                    type: 'errorbar',
                    data: [
                        [6, 8],
                        [5.9, 7.6],
                        [9.4, 10.4],
                        [14.1, 15.9],
                        [18.0, 20.1],
                        [21.0, 24.0],
                        [23.2, 25.3]
                    ],
                    tooltip: {
                        pointFormat: '(error range: {point.low}-{point.high})<br/>'
                    }
                }]
            });
        });

    </script>
    <!-- Scripts Ends -->
    <!-- Javascript for Datepicker -->
    <!-- build:[src] components/datetimepicker/js/ -->
    <script type="text/javascript" language="javascript" src="../node_modules/moment/min/moment-with-locales.js"></script>
    <script type="text/javascript" language="javascript" src="../node_modules/propellerkit-datetimepicker/js/bootstrap-datetimepicker.js"></script>
    <!-- /build -->
    <script>
        // Linked date and time picker
        // start date date and time picker
        $('#datepicker-default').datetimepicker();
        $(".auto-update-year").html(new Date().getFullYear());

    </script>

    <script src="../assets/js/animateSidebar.js"></script>

</body>

</html>
