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
            <a href="dashboard.html">Panel de control</a>
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
        <form id="validationForm" action="" method="post">
            <div class="pmd-card pmd-z-depth">
                <div class="pmd-card-body">
                    <!--Row 1-->
                    <div class="group-fields clearfix row">
                        <!--Columns size 4 -->
                        <label class="col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">Fecha de solicitud</label>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                            <!--Colmun 1 date-->
                            <div class="media-right datetimepicker">
                                <!--calendar start-->
                                <div class="range-calendar" style=" height:40px;">
                                    <div class="form-group pmd-textfield">
                                        <div class="input-group">
                                            <input id="datepicker-default" type="text" class="form-control datepicker" placeholder="Seleccionar Fecha">
                                            <div class="input-group-addon hidden-xs">
                                                <svg x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                                                    <g>
                                                        <path fill="#010101" d="M-8.736-20.232c0,2.88-2.304,5.184-5.184,5.184s-5.184-2.304-5.184-5.184v-13.824
                                                        c0-2.88,2.304-5.184,5.184-5.184s5.184,2.304,5.184,5.184V-20.232z M41.952-34.056c0-2.88-2.304-5.184-5.185-5.184
                                                        c-2.879,0-5.184,2.304-5.184,5.184v13.824c0,2.88,2.305,5.184,5.184,5.184c2.881,0,5.185-2.304,5.185-5.184V-34.056z M63.84-20.923
                                                        V58.68c0,3.111-2.534,5.645-5.76,5.645h-92.16c-3.226,0-5.76-2.533-5.76-5.645v-79.603c0-3.11,2.534-5.645,5.76-5.645h11.52v6.336
                                                        c0,4.954,3.687,8.87,8.64,8.87s8.64-4.032,8.64-8.87v-6.336h33.408v6.336c0,4.954,3.687,8.87,8.64,8.87
                                                        c4.954,0,8.641-4.032,8.641-8.87v-6.336h12.557C61.075-26.568,63.84-24.034,63.84-20.923z M54.624-5.192
                                                        c0-1.152-1.036-2.189-2.304-2.189h-80.64c-1.268,0-2.304,0.921-2.304,2.189v58.227c0,1.152,1.037,2.189,2.304,2.189h80.64
                                                        c1.268,0,2.304-0.922,2.304-2.189V-5.192z" />
                                                    </g>
                                                    <g>
                                                        <path fill="#A5A4A4" d="M7.2,4.414C7.2,5.08,6.667,5.613,6,5.613S4.8,5.08,4.8,4.414v-3.2c0-0.667,0.534-1.2,1.2-1.2
                                                        s1.2,0.533,1.2,1.2V4.414z M18.934,1.214c0-0.667-0.533-1.2-1.2-1.2s-1.2,0.533-1.2,1.2v3.2c0,0.666,0.533,1.199,1.2,1.199
                                                        s1.2-0.533,1.2-1.199V1.214z M24,4.254V22.68c0,0.721-0.587,1.307-1.333,1.307H1.333C0.586,23.986,0,23.4,0,22.68V4.254
                                                        c0-0.721,0.586-1.307,1.333-1.307H4v1.467c0,1.146,0.854,2.053,2,2.053s2-0.934,2-2.053V2.947h7.733v1.467
                                                        c0,1.146,0.854,2.053,2,2.053s2-0.934,2-2.053V2.947h2.906C23.36,2.947,24,3.533,24,4.254z M21.867,7.896
                                                        c0-0.268-0.24-0.507-0.534-0.507H2.667c-0.293,0-0.533,0.213-0.533,0.507v13.478c0,0.268,0.24,0.507,0.533,0.507h18.667
                                                        c0.294,0,0.534-0.213,0.534-0.507V7.896z" />
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="selected-date typo-fill-secondary"></span>
                                </div>
                                <!-- calendar end-->
                            </div>
                            <!--End Colmun 1 date-->
                        </div>
                        <!--End Columns size 4 -->
                        
                        <!--Colmun 2 Blank -->
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 "> </div>
                        <!--Colmun 2 Blank -->

                        <!--Colmun 3 NumTicket size 3-->
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 control-label">
                            <!-- Readonly Input Numero ticket -->
                            <div class="form-group pmd-textfield">
                                  <label for="first-name" class="control-label" style="display: block; text-align:right;"> Numero de ticket </label>
                                    <input type="text" readonly="" value="#000" id="first-name" class="mat-input form-control" style="text-align:right;"></input>
                                </div>
                        </div>
                        <!--End Colmun 3 NumTicket size 3-->

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
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

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
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

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







                    <br>



                    <!--Row 2-->
                    <div class="group-fields clearfix row">

                        <!--Colmun 1 Nombre de usuario-->
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <label for="regular1" class="control-label">
                                    Nombre*
                                </label>
                                <input type="text" id="regular1" class="form-control">
                            </div>
                        </div>
                        <!--End Colmun 1 Nombre de usuario-->
                        
                        <!--Colmun 1 Nombre de usuario-->
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <label for="regular1" class="control-label">
                                    Nombre*
                                </label>
                                <input type="text" id="regular1" class="form-control">
                            </div>
                        </div>
                        <!--End Colmun 1 Nombre de usuario-->

                        <!--Colmun 1 Nombre de usuario-->
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <label for="regular1" class="control-label">
                                    Nombre*
                                </label>
                                <input type="text" id="regular1" class="form-control">
                            </div>
                        </div>
                        <!--End Colmun 1 Nombre de usuario-->

                        <!--Colmun 1 Nombre de usuario-->
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <label for="regular1" class="control-label">
                                    Nombre*
                                </label>
                                <input type="text" id="regular1" class="form-control">
                            </div>
                        </div>
                        <!--End Colmun 1 Nombre de usuario-->

                    </div>
                    <!--End Row 2-->

                    <br>

                    
                    <!--Row 3-->
                    <div class="group-fields clearfix row">
                        <!--Colmun 1 Nombre de usuario-->
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <label for="regular1" class="control-label">
                                    Nombre*
                                </label>
                                <input type="text" id="regular1" class="form-control">
                            </div>
                        </div>
                        <!--End Colmun 1 Nombre de usuario-->

                        <!--Colmun 2 Apellido de usuario-->
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <label for="regular1" class="control-label">
                                    Apellido*
                                </label>
                                <input type="text" id="regular1" class="form-control">
                            </div>
                        </div>
                        <!--End Colmun 1 Nombre de usuario-->
                    </div>
                    <!--End Row 3-->

                    <div class="group-fields clearfix row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <label>City*</label>
                                <select class="select-simple form-control pmd-select2">
                                    <option></option>
                                    <option>Dallas Cowboys</option>
                                    <option>New York Giants</option>
                                    <option>Philadelphia Eagles</option>
                                    <option>Washington Redskins</option>
                                    <option>Chicago Bears</option>
                                    <option>Detroit Lions</option>
                                    <option>Green Bay Packers</option>
                                    <option>Minnesota Vikings</option>
                                    <option>Arizona Cardinals</option>
                                    <option>St. Louis Rams</option>
                                    <option>San Francisco 49ers</option>
                                    <option>Seattle Seahawks</option>
                                    <option>Baltimore Ravens</option>
                                    <option>Cincinnati Bengals</option>
                                    <option>Cleveland Browns</option>
                                    <option>Pittsburgh Steelers</option>
                                    <option>Houston Texans</option>
                                    <option>Indianapolis Colts</option>
                                    <option>Jacksonville Jaguars</option>
                                    <option>Tennessee Titans</option>
                                    <option>Denver Broncos</option>
                                    <option>Kansas City Chiefs</option>
                                    <option>Oakland Raiders</option>
                                    <option>San Diego Chargers</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <label>State*</label>
                                <select class="select-simple form-control pmd-select2">
                                    <option></option>
                                    <option>Dallas Cowboys</option>
                                    <option>New York Giants</option>
                                    <option>Philadelphia Eagles</option>
                                    <option>Washington Redskins</option>
                                    <option>Chicago Bears</option>
                                    <option>Detroit Lions</option>
                                    <option>Green Bay Packers</option>
                                    <option>Minnesota Vikings</option>
                                    <option>Arizona Cardinals</option>
                                    <option>St. Louis Rams</option>
                                    <option>San Francisco 49ers</option>
                                    <option>Seattle Seahawks</option>
                                    <option>Baltimore Ravens</option>
                                    <option>Cincinnati Bengals</option>
                                    <option>Cleveland Browns</option>
                                    <option>Pittsburgh Steelers</option>
                                    <option>Houston Texans</option>
                                    <option>Indianapolis Colts</option>
                                    <option>Jacksonville Jaguars</option>
                                    <option>Tennessee Titans</option>
                                    <option>Denver Broncos</option>
                                    <option>Kansas City Chiefs</option>
                                    <option>Oakland Raiders</option>
                                    <option>San Diego Chargers</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <label for="regular1" class="control-label">
                                    Zip Code*
                                </label>
                                <input type="text" id="regular1" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="group-fields clearfix row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <label for="regular1" class="control-label">
                                    Phone*
                                </label>
                                <input type="text" id="regular1" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <label for="regular1" class="control-label">
                                    Email*
                                </label>
                                <input type="text" id="regular1" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="group-fields clearfix row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                <label class="control-label">Address</label>
                                <textarea required class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
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
                </div>
                <div class="pmd-card-actions">
                    <a href="javascript:void(0);" class="btn btn-primary next">Submit</a>
                    <a href="javascript:void(0);" class="btn btn-default">Cancel</a>
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

