<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- HTML Meta Tags -->
    <title>Bienvenido NEW RESET A.I.H.D.</title>
    <meta name="description" content="NEW RESET es un sistema el cual permite brindar una determinada ayuda hacia una empresa que necesite un sistema de informacion el cual le aporte un soporte para su efectividad y mantenimiento de equipos.">

    <!-- Google / Search Engine Tags -->
    <meta itemprop="name" content="Bienvenido NEW RESET A.I.H.D.">
    <meta itemprop="description" content="NEW RESET es un sistema el cual permite brindar una determinada ayuda hacia una empresa que necesite un sistema de informacion el cual le aporte un soporte para su efectividad y mantenimiento de equipos.">
    <meta itemprop="image" content="assets/images/LogoV2Alpha.png">
    <!-- End Google / Search Engine Tags -->

    <!-- Facebook Meta Tags -->
    <meta property="og:url" content="http://127.0.0.1">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Bienvenido NEW RESET A.I.H.D.">
    <meta property="og:description" content="NEW RESET es un sistema el cual permite brindar una determinada ayuda hacia una empresa que necesite un sistema de informacion el cual le aporte un soporte para su efectividad y mantenimiento de equipos.">
    <meta property="og:image" content="assets/images/LogoV2Alpha.png">
    <!-- End Facebook Meta Tags -->

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bienvenido NEW RESET A.I.H.D.">
    <meta name="twitter:description" content="NEW RESET es un sistema el cual permite brindar una determinada ayuda hacia una empresa que necesite un sistema de informacion el cual le aporte un soporte para su efectividad y mantenimiento de equipos.">
    <meta name="twitter:image" content="assets/images/LogoV2Alpha.png">
    <!-- End Twitter Meta Tags -->

    <!-- End HTML Meta Tags -->

    <!-- <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="node_modules/propellerkit/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/propellerkit/dist/css/propeller.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,400italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="node_modules/animate.css/animate.min.css">
    <link rel="stylesheet" href="node_modules/aos/dist/aos.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/Team-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/github-fork-ribbon-css/0.2.2/gh-fork-ribbon.min.css"/>
    

    <script defer src="node_modules/jquery/dist/jquery.min.js"></script>
    <!-- <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script> -->
    <script defer src="node_modules/propellerkit/dist/js/bootstrap.min.js"></script>
    <script defer src="node_modules/propellerkit/dist/js/propeller.min.js"></script>
    <script defer src="assets/js/bs-animation.js"></script>
    <script defer src="node_modules/aos/dist/aos.js"></script>

    <script>
        $(document).ready(function () {
            $("#myBtn").click(function () {
                $("#myModal").modal();
            });
        });
    </script>

</head>

<body style="font-family:'Open Sans', sans-serif;">
    <nav class="navbar navbar-default" style="height:100px;">
    <a class="github-fork-ribbon" href="https: //github.com/andgar2010/Project_New_Reset_AIHD#readme" data-ribbon="EN DESARROLLO" title="EN DESARROLLO">EN DESARROLLO</a>
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand navbar-link" href="#" style="width:285px;">
                    <img class="img-responsive" src="assets/images/LogoV2Alpha.png" style="margin:-12px 0px 0px 0px;">
                </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <!-- <li  role="presentation">
                            <a href="#"> </a>
                        </li>
                        <li class="active" role="presentation">
                            <a href="#"> </a>
                        </li> -->
                    <li role="presentation">
                        <a href="#quienesSomos" style="margin:25px;">ACERCA </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="jumbotron hero">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-push-7 phone-preview">
                    <div class="iphone-mockup">
                        <img src="assets/images/iphone.svg" class="device">
                        <div class="screen" style="margin:0;padding:0;"></div>
                    </div>
                </div>
                <div class="col-md-6 col-md-pull-3 get-it">
                    <h1>NEW RESET A.I.H.D</h1>
                    <p>HELPDESK -COLEGIO DISTRITAL ALFREDO IRIARTE</p>
                    <p>
                        <button class="btn btn-success btn-lg" type="button" data-bs-hover-animate="pulse" data-toggle="modal" data-target="#modalLogin" style="border-radius: 8px;">Inicia sesion</button>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="modalLogin">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h3 class="modal-title">
                        <span class="fa fa-lock fa-lg"></span> iniciar sesion</h3>
                </div>

                <div class="modal-body">
                    <form role="form" method="POST" action="./controllers/auth/authLogin.php">
                        <div class="form-group">
                            <label id="email" for="email">
                                <span class="fa fa-user fa-lg"></span> Usuario</label>
                            <input id="email" type="text" class="form-control" name="email" placeholder="Ingrese su email" required>
                        </div>
                        <div class="form-group">
                            <label id="password" for="password">
                                <span class="fa fa-key fa-lg"></span> Contraseña</label>
                            <input id="password" type="password" class="form-control" name="password" placeholder="ingrese contraseña" required>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="save_session" type="checkbox" value="on">recordar tu contraseña?</label>
                        </div>
                        <button type="submit" class="btn btn-success pmd-btn-raised pmd-ripple-effect btn-block" style="border-radius: 8px;">
                            <i class="fa fa-sign-in fa-lg" required></i>
                            <br>
                            <br>
                            Ingresar
                        </button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger pmd-btn-raised pull-left" data-dismiss="modal">
                        <span class="fa fa-remove fa-lg" required></span> Cancelar</button>
                    <p>
                        <a href="#">¿He olvidado mi contraseña?</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <!-- Card Quienes Somos -->
                <div class="pmd-card pmd-card-default pmd-z-depth">

                    <!-- Card header -->
                    <div class="pmd-card-title">
                        <strong>
                            <h2 class="pmd-card-title-text text-center" data-aos="zoom-in" data-aos-duration="1600" id="quienesSomos"> ¿Quienes somos?</h2>
                        </strong>
                    </div>

                    <!-- Card media -->
                    <div class="pmd-card-media">
                    </div>

                    <!-- Card Body -->
                    <div class="pmd-card-body">
                        <p class="text-center" data-aos="zoom-in" data-aos-duration="1600">NEW RESET es un sistema el cual permite brindar una determinada ayuda hacia una empresa que necesite un sistema de informacion el cual le aporte un soporte para su efectividad y mantenimiento de equipos. En una empresa que brinda tecnologia e ingformatica, como sistemas de informacion para empresas pequeñas, fundada en octubre del 2018 donde ofrece necesidades de alojamientos de reducido tamaño. un producto facil de manejar y facil de implantar con un soporte tecnico online</p>
                    </div>

                    <!-- Card action -->
                    <div class="pmd-card-actions">
                    </div>
                </div><!-- End Card Quienes Somos -->

            </div> <!-- End Col-md-12 -->

        </div><!-- End 1 Row  -->

        <!-- 2 Row  -->
        <div class="row">

            <!-- End 1 Col -->
            <div class="col-lg-6 col-md-6">

                <!-- Card Nuestra Misión-->
                <div class="pmd-card pmd-card-default pmd-z-depth">
                    <!-- Card header -->
                    <div class="pmd-card-title">
                        <strong>
                            <h2 class="pmd-card-title-text text-center" data-aos="zoom-in" data-aos-duration="1500" id="nuestraMision">Nuestra Misión</h2>
                        </strong>
                    </div>

                    <!-- Card media -->
                    <div class="pmd-card-media">
                    </div>

                    <!-- Card Body -->
                    <div class="pmd-card-body">
                        <p class="text-center" data-aos="zoom-in" data-aos-duration="1500"> Llevar acabo sistemas de información innovadores, a medida de las necesidades empresariales. </p>
                    </div>

                    <!-- Card action -->
                    <div class="pmd-card-actions">
                    </div>

                </div><!-- End Card  -->

            </div> <!-- End 1 Col -->

            <!-- 2 Col -->
            <div class="col-lg-6 col-md-6">

                <!-- Card Nuestra Visión -->
                <div class="pmd-card pmd-card-default pmd-z-depth">

                    <!-- Card header -->
                    <div class="pmd-card-title">
                        <strong>
                            <h2 class="pmd-card-title-text text-center" data-aos="zoom-in" data-aos-duration="1600" id="nuestraVision">Nuestra Visión</h2>
                        </strong>
                    </div>

                    <!-- Card media -->
                    <div class="pmd-card-media">
                    </div>

                    <!-- Card Body -->
                    <div class="pmd-card-body">
                        <p class="text-center" data-aos="zoom-in" data-aos-duration="1600">Aumentar nuestra competitividad de manera íntegra y productiva, para llegar a ser reconocidos nacional e internacionalmente.</p>
                    </div>

                    <!-- Card action -->
                    <div class="pmd-card-actions">
                    </div>
                </div><!-- End Card Nuestra Visión -->

            </div> <!-- End 2 Col -->

            <!-- 3 Col -->
            <div class="col-lg-12 col-md-12">

                <!-- Card Quienes Somos -->
                <div class="pmd-card pmd-card-default pmd-z-depth">

                    <!-- Card header -->
                    <div class="pmd-card-title">
                        <strong>
                            <h2 class="pmd-card-title-text text-center" data-aos="zoom-in" data-aos-duration="1600" id="objetivo">Objetivo</h2>
                        </strong>
                    </div>

                    <!-- Card media -->
                    <div class="pmd-card-media">
                    </div>

                    <!-- Card Body -->
                    <div class="pmd-card-body">
                        <p class="text-center" data-aos="zoom-in" data-aos-duration="1600">Aumentar nuestra competitividad de manera íntegra y productiva, para llegar a ser reconocidos nacional e internacionalmente. New reset es un sistema el cual permite brindar una determinada ayuda hacia una empresa que necesite un sistema de información el cual le aporte un soporte para su efectividad y mantenimiento de equipos. </p>
                    </div>

                    <!-- Card action -->
                    <div class="pmd-card-actions">
                    </div>
                </div><!-- End Card Objetivo -->

            </div> <!-- End 3 Col -->

        </div><!-- End 2 Row  -->

    </div> <!-- End container -->

    <div class="team-clean">
        <div class="container">
            <div class="intro">
                <h2 class="pmd-card-title-text text-center" data-aos="zoom-in" data-aos-duration="1500" style="padding:10px 0px 0px;margin:20px 0px;">Equipo </h2>
                <p class="text-center" data-aos="zoom-in" data-aos-duration="1500">Nuestro equipo esta conformado por:  </p>
            </div>
            <div class="row people">
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12 item text-center">
            	<div class="pmd-card pmd-z-depth">
                	<div class="pmd-card-media" style="margin-top: 30px;">
                        <img class="img-circle" src="assets/images/avatar-AGarcia.jpg" data-aos="zoom-in" data-aos-duration="1000" alt="Avatar Andrés García" width="160" height="160">
                    </div>
                    <div class="pmd-card-title">
                        <h2 data-aos="zoom-in" data-aos-duration="1000" class="pmd-card-title-text name" style="margin-top: -24px;">Andrés García</h2>
                        <p data-aos="zoom-in" data-aos-duration="1000" class="title" style="margin-top: -4px;">Aprendiz ADSI</p>
                    </div>
                    <div class="pmd-card-body">
                        <p class="description" data-aos="zoom-in" data-aos-duration="1000">Mi nombre es Andrés García, tengo 27 años y actualmente soy estudiante tecnología de Analisis y Desarrollo en Sistemas de Información (ADSI) en SENA CEET (Centro Electricidad, Electrónica y Telecomunicaciones) en Bogotá D.C. Soy una persona que le encanta estar detrás de un computador, puede ser investigando sobre nuevas tendencias en software, aprendiendo una nueva tecnología o viendo qué hay de nuevo en el mundo. </p>
                    </div>
                    <div data-aos="zoom-in" data-aos-duration="1000" class="social pmd-card-actions">
                        <a class="pmd-btn-raised pmd-ripple-effect" href="#" role="button">
                            <i class="fa fa-github fa-lg"></i>
                        </a>
                        <a class="pmd-btn-raised pmd-ripple-effect" href="#" role="button">
                            <i class="fa fa-twitter fa-lg"></i>
                        </a>
                        <a class="pmd-btn-raised pmd-ripple-effect" href="#" role="button">
                            <i class="fa fa-skype fa-lg"></i>
                        </a>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 item text-center">
            	<div class="pmd-card pmd-z-depth">
                	<div class="pmd-card-media" style="margin-top: 30px;">
                        <img class="img-circle" src="assets/images/avatar-CTorres.jpg" data-aos="zoom-in" data-aos-duration="2000" alt="Avatar Camila Torres" width="160" height="160">
                    </div>
                    <div class="pmd-card-title">
                        <h2 data-aos="zoom-in" data-aos-duration="2000" class="pmd-card-title-text name" style="margin-top: -24px;">Camila Torres</h2>
                        <p data-aos="zoom-in" data-aos-duration="2000" class="title" style="margin-top: -4px;">Aprendiz ADSI</p>
                    </div>
                    <div class="pmd-card-body">
                        <p class="description" data-aos="zoom-in" data-aos-duration="2000">Mi nombre es Camila Torres, tengo 17 años, estoy estudiando Analisis y desarrollo de sistemas de informacion (ADSI) en SENA CEET (Centro Electricidad, Electrónica y Telecomunicaciones), soy una persona muy curiosa que siempre intenta encontrar el porque de las cosas, me gusta ver como funcionan las cosas, tratarlas de hacer yo misma y por esa razon decidi estudiar dicha carrera. </p>
                    </div>
                    <div data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="2800" class="social pmd-card-actions">
                        <a class="pmd-btn-raised pmd-ripple-effect" href="#" role="button">
                            <i class="fa fa-facebook-official fa-lg"></i>
                        </a>
                        <a class="pmd-btn-raised pmd-ripple-effect" href="#" role="button">
                            <i class="fa fa-twitter fa-lg"></i>
                            .0.
                            .0
                                                    </a>
                        <a class="pmd-btn-raised pmd-ripple-effect" href="#" role="button">
                            <i class="fa fa-instagram fa-lg"></i>
                        </a>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->

            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 item text-center">
            	<div class="pmd-card pmd-z-depth">
                	<div class="pmd-card-media" style="margin-top: 30px;">
                        <img class="img-circle" src="assets/images/avatar-DAgudelo.jpg" data-aos="zoom-in" data-aos-duration="3000" alt="Avatar Dayanne Adugelo" width="160" height="160">
                    </div>
                    <div class="pmd-card-title">
                        <h2 data-aos="zoom-in" data-aos-duration="1600" class="pmd-card-title-text name" style="margin-top: -24px;">Dayanne Agudelo</h2>
                        <p data-aos="zoom-in" data-aos-duration="100" class="title" style="margin-top: -4px;">Aprendiz ADSI</p>
                    </div>
                    <div class="pmd-card-body">
                        <p class="description" data-aos="zoom-in" data-aos-duration="1800">Mi nombre es Dayanne Agudelo, tengo 19 años y actualmente soy estudiante del programa tecnologo en Analisis y Desarrollo de Sistemas de Información (ADSI) en el SENA CEET (Centro Electricidad, Electrónica y Telecomunicaciones).</p>
                    </div>
                    <div data-aos="zoom-in" data-aos-duration="3000" data-aos-delay="2800" class="social pmd-card-actions">
                        <a class="pmd-btn-raised pmd-ripple-effect" href="#" role="button">
                            <i class="fa fa-facebook-official fa-lg"></i>
                        </a>
                        <a class="pmd-btn-raised pmd-ripple-effect" href="#" role="button">
                            <i class="fa fa-twitter fa-lg"></i>
                        </a>
                        <a class="pmd-btn-raised pmd-ripple-effect" href="#" role="button">
                            <i class="fa fa-instagram fa-lg"></i>
                        </a>
                    </div>
                </div>
            </div><!-- /.col-lg-4 -->
        </div>
        </div>
    </div>
    <section class="testimonials">
        <h2 class="text-center">Politica de proteccion de datos</h2>
        <blockquote>
         
        </blockquote>
    </section>
    <section class="features"></section>
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h5 class="text-center">NEW RESET A.I.H.D. V0.0.1 <i>Alpha</i></h5>
                    <h5>Derechos reservados © <?php echo date("Y");?></h5>
                    <p class="text-left">Andrés García y los contribuidores: Camila Torres &amp; Dayanne Agudelo&nbsp;</p>
                    <p class="text-left">Derechos reservados © <?php echo date("Y");?> PROJECT NEW RESET A.I.H.D. Development Team</p>
                </div>
                <div class="col-sm-6 social-icons">
                    <div class="row"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <a href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>