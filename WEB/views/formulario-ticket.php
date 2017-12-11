<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Propeller Admin Dashboard">
    <meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">

    <title>Panel de Control New Reset AIHD</title>
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon.ico">

    <!-- Google icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Bootstrap css -->
    <!-- build:[href] assets/css/ -->
    <link rel="stylesheet" type="text/css" href="../node_modules/propellerkit/dist/css/bootstrap.min.css">
    <!-- /build -->

    <!-- Propeller css -->
    <!-- build:[href] assets/css/ -->
    <!-- build:[href] assets/css/ -->
    <link rel="stylesheet" type="text/css" href="../node_modules/propellerkit/dist/css/propeller.min.css">

    <!-- Font Awesome  -->
    <link rel="stylesheet" type="text/css" href="../node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- /build -->
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

    <!--Google Analytics code-->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-124615-22', 'auto');
        ga('send', 'pageview');
    </script>

</head>

<body>
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
    <!--breadcrum end-->

    <!--Bloque-->
    <div class="section section-custom billinfo">

        <!--section-title -->
        <h2>Crear nuevo ticket</h2>
        <!--section-title end -->

        <!-- section content start-->
        <form id="newTicket" action="" method="post" enctype="multipart/form-data">
            <div class="pmd-card pmd-z-depth">
                <div class="pmd-card-body">

                    <!--Row 1-->
                    <div class="group-fields clearfix row">

                        <!--Colmun 3 FechaSolictud size 6-->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 control-label">
                            <!-- Readonly Input Numero ticket -->
                            <div class="form-group pmd-textfield">
                                <label for="now-time" class="control-label" style="display: block; text-align:center;">Fecha de solicitud </label>
                                <input id="now-time" type="datetime" readonly="" value="" class="mat-input form-control" style="text-align:center; line-height: 20px;"></input>
                            </div>
                        </div>
                        <!--End Colmun 3 FechaSolictud size 6-->

                        <!--Colmun 3 NumTicket size 6-->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 control-label">
                            <!-- Readonly Input Numero ticket -->
                            <div class="form-group pmd-textfield">
                                <label for="first-name" class="control-label" style="display: block; text-align:center;"> Numero de ticket </label>
                                <input type="text" readonly="" value="#000" id="first-name" class="mat-input form-control" style="text-align:center;"></input>
                            </div>
                        </div>
                        <!--End Colmun 3 NumTicket size 6-->

                    </div>
                    <!--End Row 1-->

                    <!--Row 2-->
                    <div class="group-fields clearfix row">

                        <!--Colmun 1 Tiempo transccuido-->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                            <div class="form-group pmd-textfield">
                                <label for="tiempotransccuido" class="control-label" style="display: block; text-align:center;"> Tiempo transccuido </label>
                                <input type="text" readonly="" value="00 Días 00:00:00" id="first-name" class="mat-input form-control" style="text-align:center;"></input>
                            </div>
                        </div>
                        <!--End Colmun 1 Tiempo transccuido-->

                        <!--Colmun 2 Tiempo por solucionado-->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                            <div class="form-group pmd-textfield">
                                <label for="tiemposolucionado" class="control-label" style="display: block; text-align:center;"> Tiempo por solucionado </label>
                                <input type="text" readonly="" value="00 Días 00:00:00" id="first-name" class="mat-input form-control" style="text-align:center;"></input>
                            </div>
                        </div>
                        <!--End Colmun 2 Tiempo por solucionado-->

                    </div>
                    <!--End Row 2-->

                    <!-- Row 3  -->
                    <div class="group-fields clearfix row">

                        <!--Column 1 Tipo -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <label for="tipoticket" class="control-label" style="display: block; text-align: center"> Tipo* </label>
                                <select class="select-simple form-control pmd-select2">
                                    <option></option>
                                    <option>Incidente</option>
                                    <option>Solictud</option>
                                </select>
                            </div>

                        </div>
                        <!--End Column 1 Tipo -->

                        <!--Column 2 Categoria -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <label for="categoria" class="control-label" style="display: block; text-align: center"> Categoria* </label>
                                <select class="select-simple form-control pmd-select2">
                                    <option></option>
                                    <option>Hardware</option>
                                    <option>Software</option>
                                    <option>Telefonia IP</option>
                                    <option>Redes</option>
                                </select>
                            </div>
                        </div>
                        <!--End Column 2 Categoria -->

                    </div>
                    <!-- End Row 3  -->

                    <!-- Row 4  -->
                    <div class="group-fields clearfix row">

                        <!--Column 1 Nombre -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <label for="nombre" class="control-label" style="display: block; text-align:center;">
                                    Nombre
                                </label>
                                <input type="text" readonly="" value="nombre_usuario" id="regular1" class="form-control" style="display: block; text-align:center;">
                            </div>
                        </div>
                        <!--End Column 1 Nombre -->

                        <!--Column 2 Apellidos -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <label for="apellido" class="control-label" style="display: block; text-align:center;">
                                    Apellidos
                                </label>
                                <input type="text" readonly="" value="apellido_usuario" id="regular1" class="form-control" style="display: block; text-align:center;">
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
                                <input type="text" readonly="" value="nombre_rol" id="rol" class="mat-input form-control" style="text-align:center;"></input>
                            </div>
                        </div>
                        <!--End Colmun 1 Rol-->

                        <!--Colmun 2 Area-->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <label for="area" class="control-label" style="display: block; text-align:center;"> Area </label>
                                <input type="text" readonly="" value="nombre_area" id="area" class="mat-input form-control" style="text-align:center;"></input>
                            </div>
                        </div>
                        <!--End Colmun 2 Area-->

                        <!--Colmun 3 Gerencia-->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <label for="gerencia" class="control-label" style="display: block; text-align:center;"> Gerencia </label>
                                <input type="text" readonly="" value="nombre_gerencia" id="gerencia" class="mat-input form-control" style="text-align:center;"></input>
                            </div>
                        </div>
                        <!--End Colmun 3 Gerencia-->

                    </div>
                    <!--End Row 3-->


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
                                    <option></option>
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
                $(this).find("a[href='" + sPage + "']").parents(".dropdown").find('.dropdown-menu').css(
                    "display", "block");
                $(this).find("a[href='" + sPage + "']").parents(".dropdown").find('a.dropdown-toggle').addClass(
                    "active");
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
                    (this.classList.contains("is-active") === true) ? this.classList.remove("is-active"):
                        this.classList.add("is-active");
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
        < !--javascript
        for total sales chart-- >
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
        } <
        !--javascript
        for total sales chart-- >
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
                    categories: ['9-7', '10-7', '11-7', '12-7', '13-7', '14-7', '15-7', '16-7', '17-7',
                        '18-7'
                    ]
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

    <!-- Animate Sidebar -->
    <script src="../assets/js/animateSidebar.js"></script>

    <!-- TinyMCE Script  -->
    <script src="../node_modules/tinymce/tinymce.min.js"></script>

    <!-- TinyMCE Configure -->
    <script>
        tinymce.init({
            selector: 'textarea',
            height: 100,
            theme: 'modern',
            plugins: [
                'advlist autolink lists link image charmap print preview hr anchor pagebreak'
            ],
            language_url: '../assets/Framework/TinyMCE/langs/es_MX.js'
        });
    </script>

    <!-- Moment and format datetime -->
    <script src="../node_modules/moment/min/moment-with-locales.min.js"></script>
    <script type="text/javascript">
        moment.locale('es');
        document.getElementById('now-time').value = moment().format('DD/MMM/YYYY, hh:mm a');
    </script>

    <body>

</html>