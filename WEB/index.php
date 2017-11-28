<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bienvenido NEW RESET A.I.H.D.</title>
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">    
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,400italic">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
        <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/user.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
        <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
        <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
        <link rel="stylesheet" href="assets/css/Team-Clean.css">
    </head>

    <body style="font-family:'Open Sans', sans-serif;">
        <nav class="navbar navbar-default" style="height:100px;">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand navbar-link" href="#" style="width:285px;"><img class="img-responsive" src="assets/images/LogoV2Alpha.png" style="margin:-12px 0px 0px 0px;"></a>
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav navbar-right">
                        <!-- <li  role="presentation">
                            <a href="#"> </a>
                        </li>
                        <li class="active" role="presentation">
                            <a href="#"> </a>
                        </li> -->
                        <li role="presentation"><a href="#quienesSomos" style="margin:25px;">ACERCA </a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="jumbotron hero">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-push-7 phone-preview">
                        <div class="iphone-mockup"><img src="assets/images/iphone.svg" class="device">
                            <div class="screen" style="margin:0;padding:0;"></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-md-pull-3 get-it">
                        <h1>NEW RESET A.I.H.D</h1>
                        <p>HELPDESK -COLEGIO DISTRITAL ALFREDO IRIARTE</p>
                        <p>
                            <button class="btn btn-success btn-lg" type="button" data-bs-hover-animate="pulse" data-toggle="modal" data-target="#modalRegistro">Registrarse</button>
                            <button class="btn btn-primary btn-lg" type="button" data-bs-hover-animate="pulse" data-toggle="modal" data-target="#modalLogin">Inicia sesion</button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" role="dialog" tabindex="-1" id="modalLogin">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h4 class="modal-title"> <span class="glyphicon glyphicon-lock"></span> iniciar sesion</h4>

                    </div>
                    <div class="modal-body">
                        <form role="form" method="POST" action="modules/dashboard.php">
                            <div class="form-group">
                                <label for="usrname"><span class="glyphicon glyphicon-user"></span> Usuario</label>
                                <input type="text" class="form-control" id="usrname" placeholder="Ingrese su email" required>
                            </div>
                            <div class="form-group">
                                <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Contraseña</label>
                                <input type="Password" class="form-control" id="psw" placeholder="ingrese contraseña" required>
                            </div>
                            <div class="checkbox">
                                <label><input  type="checkbox" value="si" >recordar tu contraseña?</label>
                            </div>
                            <button type="submit" class="btn btn-success btn-block"><span  class="glyphicon glyphicon-off" required></span>  <p>Ingresar </p></button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove" required></span> Cancelar</button>
                        <p>¿no tiene una cuenta? <a href="registro.html">cree una </a></p>
                        <p><a href="#">he olvidado mi contraseña?</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" role="dialog" tabindex="-1" id="modalRegistro">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <h3 class="modal-title text-center">Crear una cuenta usuario.</h3>
                    </div>
                    <div class="modal-body">
                        <div class="register-photo">
                            <div class="form-container">
                                <div class="image-holder"></div>
                                <form method="post" action="modules/registronuevousuario.php">
                                    <div class="form-group">
                                        <input type="text" name="nombre" placeholder="Su nombre" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="apellido" placeholder="Su apellido" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <h5 style="color: #555; font-size: 1,05rem;">Género</h5>
                                            <div>
                                                <label class="radio-inline pmd-radio pmd-radio-ripple-effect" for="option-1">
                                                    <input type="radio" name="genero" id="option-1" value="M">&nbsp;Masculino
                                                </label> &nbsp;
                                                <label class="radio-inline pmd-radio pmd-radio-ripple-effect" for="option-2">
                                                    <input type="radio" name="genero" id="option-2" value="F">&nbsp;Femenino
                                                </label>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <div id="tipo_cedula">
                                            <h5 style="color: #555; font-size: 1,05rem;">Tipo de Cédula</h5>
                                            <div>
                                                <!-- SELECCIONA TIPO DE CEDULA -->
                                                <label class="radio-inline pmd-radio pmd-radio-ripple-effect">
                                                    <input name="tipoDocumento" id="inlineRadio1" value="1" type="radio">&nbsp;CC
                                                </label>
                                                <label class="radio-inline pmd-radio pmd-radio-ripple-effect">
                                                    <input name="tipoDocumento" id="inlineRadio2" value="2" type="radio">&nbsp;TI
                                                </label>
                                                <label class="radio-inline pmd-radio pmd-radio-ripple-effect">
                                                    <input name="tipoDocumento" id="inlineRadio3" value="3" type="radio">&nbsp;CE
                                                </label>
                                                <!-- /SELECCIONA TIPO DE CEDULA -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <!-- <label class="control-label" for="num_cedula">Número de Cédula</label> -->
                                        <input class="form-control" placeholder="Número de Cédula" id="num_cedula" name="num_cedula" pattern="[0-9]{8,14}" required=""
                                               title="Por favor ingresa unicamente los números" type="text">
                                        <span
                                            class="pmd-textfield-focused"></span>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-group pmd-textfield pmd-textfield-floating-label">
                                            <!-- <label class="control-label" for="num_tel">Número Telefonico</label> -->
                                            <input class="form-control" id="num_tel" name="num_tel" placeholder="Número Telefonico" pattern="[exto0-9 ]{7,20}" required=""
                                                   title="Por favor ingresa su número telefonico o celular" type="tel">
                                            <span
                                                class="pmd-textfield-focused"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <input id="password" type="password" name="Password" placeholder="Contraseña" class="form-control"  />
                                    </div>
                                    <div class="form-group">
                                        <input id="confirm_password" type="password" name="password-repeat" placeholder="Contraseña (repetir)" required class="form-control"  onkeyup="checkPass(); return false;" />
                                        <span id="confirmMessage"></span>
                                    </div>
                                    <script language='javascript' type='text/javascript'>
                                        function checkPass()
                                        {
                                            //Store the password field objects into variables ...
                                            var pass1 = document.getElementById('password');
                                            var pass2 = document.getElementById('confirm_password');
                                            //Store the Confimation Message Object ...
                                            var message = document.getElementById('confirmMessage');
                                            //Set the colors we will be using ...
                                            var goodColor = "#66cc66";
                                            var badColor = "#ff6666";

                                            var correcta = false;

                                            //Compare the values in the password field 
                                            //and the confirmation field
                                            if (pass1.value == pass2.value) {
                                                //The passwords match. 
                                                //Set the color to the good color and inform
                                                //the user that they have entered the correct password 
                                                pass2.style.backgroundColor = goodColor;
                                                message.style.color = goodColor;
                                                message.innerHTML = "Contraseña correcta!"
                                                correcta = true;
                                            } else {
                                                //The passwords do not match.
                                                //Set the color to the bad color and
                                                //notify the user.
                                                pass2.style.backgroundColor = badColor;
                                                message.style.color = badColor;
                                                message.innerHTML = "Contraseña incorrecta, debe ser igual a la anterior contraseña!"
                                            }
                                            return correcta;
                                        }
                                    </script>
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label class="control-label">
                                                <input required type="checkbox" /> Acepto los terminos y condiciones.</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-block" type="submit" onsubmit="return checkPass()">Crear nuevo usuario</button>
                                    </div><a class="already" data-toggle="modal" data-target="#modalLogin">Ya está registrado? Ingresa aquí.</a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer"></div>
                </div>
            </div>
        </div>
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center" data-aos="zoom-in" data-aos-duration="1600" id="quienesSomos">Quienes Somos?</h1>
                        <p class="text-center" data-aos="zoom-in" data-aos-duration="1600">NEW RESET es un sistema el cual permite brindar una determinada ayuda hacia una empresa que necesite
                            un sistema de informacion el cual le aporte un soporte para su efectividad y mantenimiento de equipos.
                            En una empresa que brinda tecnologia e ingformatica, como sistemas de informacion para empresas pequeñas,
                            fundada en octubre del 2030 donde ofrece necesidades de alojamientos de reducido tamaño. un producto
                            facil de manejar y facil de implantar con un soporte tecnico online</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-4">
                    <h1 class="text-center" data-aos="zoom-in" data-aos-duration="1500">Nuestra Misión </h1><span> </span>
                    <p class="text-center" data-aos="zoom-in" data-aos-duration="1500"> Llevar acabo sistemas de información innovadores, a medida de las necesidades empresariales. </p>
                </div>
                <div class="col-lg-6 col-md-4">
                    <h1 class="text-center" data-aos="zoom-in" data-aos-duration="1500">Nuestra Visión</h1><span> </span>
                    <p class="text-center" data-aos="zoom-in" data-aos-duration="1500">Aumentar nuestra competitividad de manera íntegra y productiva, para llegar a ser reconocidos nacional e
                        internacionalmente. </p>
                </div>
                <div class="col-lg-12 col-md-4">
                    <h1 class="text-center" data-aos="zoom-in" data-aos-duration="1500">Objetivo </h1>
                    <p class="text-center" data-aos="zoom-in" data-aos-duration="1500">Aumentar nuestra competitividad de manera íntegra y productiva, para llegar a ser reconocidos nacional e
                        internacionalmente. New reset es un sistema el cual permite brindar una determinada ayuda hacia una empresa
                        que necesite un sistema de información el cual le aporte un soporte para su efectividad y mantenimiento
                        de equipos. </p>
                </div>
            </div>
        </div>
        <div class="team-clean">
            <div class="container">
                <div class="intro">
                    <h2 class="text-center" data-aos="zoom-in" data-aos-duration="1500" style="padding:10px 0px 0px;margin:20px 0px;">Equipo </h2>
                    <p class="text-center" data-aos="zoom-in" data-aos-duration="1500">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet
                        vitae. </p>
                </div>
                <div class="row people">
                    <div class="col-md-4 col-sm-6 item"><img class="img-circle" src="assets/images/avatar-AGarcia.jpg" data-aos="zoom-in" data-aos-duration="1000">
                        <h3 data-aos="zoom-in" data-aos-duration="1000" class="name">Andrés García</h3>
                        <p data-aos="zoom-in" data-aos-duration="1000" class="title">Aprendiz ADSI</p>
                        <p class="text-center description" data-aos="zoom-in" data-aos-duration="1000">Mi nombre es Andrés García, tengo 27 años y actualmente soy estudiante tecnología de Analisis y Desarrollo
                            en Sistemas de Información (ADSI) en SENA CEET (Centro Electricidad, Electrónica y Telecomunicaciones)
                            en Bogotá D.C. Soy una persona que le encanta estar detrás de un computador, puede ser investigando
                            sobre nuevas tendencias en software, aprendiendo una nueva tecnología o viendo qué hay de nuevo en
                            el mundo. </p>
                        <div data-aos="zoom-in" data-aos-duration="1000" class="social"><a href="#"><i class="fa fa-github"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-skype" style="font-weight:normal;font-style:normal;"></i></a></div>
                    </div>
                    <div class="col-md-4 col-sm-6 item"><img class="img-circle" src="assets/images/2.jpg" data-aos="zoom-in" data-aos-duration="2000">
                        <h3 data-aos="zoom-in" data-aos-duration="2000" class="name">Camila Torres</h3>
                        <p data-aos="zoom-in" data-aos-duration="2000" class="title">Aprendiz ADSI </p>
                        <p data-aos="zoom-in" data-aos-duration="2000" class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida.
                            Aliquam varius finibus est, et interdum justo suscipit id. Etiam dictum feugiat tellus, a semper
                            massa. </p>
                        <div data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="2800" class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a>
                            <a
                                href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 item"><img class="img-circle" src="assets/images/2.jpg" data-aos="zoom-in" data-aos-duration="3000">
                        <h3 data-aos="zoom-in" data-aos-duration="1600" class="name">Dayanne Agudelo</h3>
                        <p data-aos="zoom-in" data-aos-duration="1600" class="title">Aprendiz ADSI </p>
                        <p data-aos="zoom-in" data-aos-duration="1800" class="description">Mi nombre es Dayanne Agudelo, tengo 19 años y actualmente soy estudiante del programa tecnologo en Analisis y Desarrollo
                            de Sistemas de Información (ADSI) en el SENA CEET (Centro Electricidad, Electrónica y Telecomunicaciones).
                            </p>
                        <div data-aos="zoom-in" data-aos-duration="3000" class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a>
                            <a
                                href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="testimonials">
            <h2 class="text-center">People Love It!</h2>
            <blockquote>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <footer>Famous tech website</footer>
            </blockquote>
        </section>
        <section class="features"></section>
        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h5 class="text-center">NEW RESET A.I.H.D. V0.0.1 Derechos reservados © 2017 </h5>
                        <p class="text-left">Andrés García y los contribuidores: Camila Torres &amp; Dayanne Agudelo&nbsp;</p>
                        <p class="text-left">Derechos reservados © 2017 PROJECT NEW RESET A.I.H.D. Development Team&nbsp; </p>
                    </div>
                    <div class="col-sm-6 social-icons">
                        <div class="row"></div>
                        <div class="row">
                            <div class="col-md-12"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script>
            $(document).ready(function () {
                $("#myBtn").click(function () {
                    $("#myModal").modal();
                });
            });
        </script>
        <script src="node_modules/jquery/dist/jquery.min.js"></script>
        <script src="assets/Framework/Bootstrap-3.3.7/js/bootstrap.min.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="assets/js/bs-animation.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    </body>

</html>
