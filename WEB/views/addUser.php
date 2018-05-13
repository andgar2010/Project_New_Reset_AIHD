<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro nuevo usuario</title>


    <!-- HTML Meta Tags -->
    <title>Registro nuevo usuario</title>
    <meta name="description" content="Registro de nuevo usuario de NEW RESET A.H.I.D.">
    <!-- End HTML Meta Tags -->

    <?php   include '../config/base_head.php';
            include '../config/Toastr.php';
            include '../config/googleAnaytics.php';?>

    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,400italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">

</head>

<body>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="section-title modal-title text-center">Crear una cuenta usuario</h1>
            </div>
            <div class="modal-body">

                <?php
                include '../config/Database.php';
                $db = new Database();
                $msg = $class = null;

                if (isset($_POST) && !empty($_POST)) {
                    if (isset($_POST['send'])) {

                        //$usuario = new Usuario();
                        //$usuario->id           = $_con->sanitize($_POST['id']);
                        $tipo_doc    = $db->sanitize($_POST['tipo_doc']);
                        $documento    = $db->sanitize($_POST['num_cedula']);
                        $nombre       = $db->sanitize($_POST['nombre']);
                        $apellido     = $db->sanitize($_POST['apellido']);
                        $cod_genero   = $db->sanitize($_POST['cod_genero']);
                        $email        = $db->sanitize($_POST['email']);
                        //$password     = $db->sanitize($_POST['password']);
                        $cod_area     = $db->sanitize($_POST['cod_area']);
                        $cod_cargo    = $db->sanitize($_POST['cod_cargo']);
                        $cod_rol      = $db->sanitize($_POST['cod_rol']);
                        //$usuario->cod_estado   = $_con->sanitize($_POST['cod_estado']);

                        $creadoNuevoRegistrodB = $db->createUser($tipo_doc, $documento, $nombre, $apellido, $cod_genero, $email, $cod_area, $cod_cargo, $cod_rol);
                        if ($creadoNuevoRegistrodB) {
                            $stusT  = 'success';
                            $titleT = 'Bien hecho!';
                            $msgT   = 'Los datos han sido guardados con éxito.';
                            $class  = "alert alert-success";
                            $msg    = 'Datos insertados con éxito';
                        } else {
                            $stusT  = 'error';
                            $titleT = 'Error';
                            $msg    = $msgT = 'No se pudieron insertar los datos';
                            $class  = 'alert alert-danger';
                        }

                        if (isset($msg) && isset($class)) {
                                    echo '<script>toastr.'.$stusT.'("'.$msgT.'", "'.$titleT.'", {timeOut: 6000, "closeButton": true, "progressBar": true})</script>';
                                    echo '<div class="'.$class.'">'.
                                            $msg.
                                        '</div>';
                        }
                    }
                }

                ?>

                <form method="post" action="" class="">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="num_cedula" class="control-label">Número de cédula</label>
                                <input id="num_cedula" type="text" name="num_cedula" class="form-control" pattern="[0-9]{8,14}" title="Por favor ingresa unicamente los números"
                                    required>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="tipo_doc" class="control-label">Tipo de cédula</label>
                                <div>
                                    <!-- SELECCIONA TIPO DE CEDULA -->
                                    <label for="cc" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                                        <input name="tipo_doc" id="cc" value="1" type="radio" required>&nbsp;CC
                                    </label>

                                    <label for="ce" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                                        <input name="tipo_doc" id="ce" value="2" type="radio" required>&nbsp;CE
                                    </label>

                                    <label for="pasaporte" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                                        <input name="tipo_doc" id="pasaporte" value="3" type="radio" required>&nbsp;Pasaporte
                                    </label>
                                    <!-- <label for="nit" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                    <input name="tipo_doc" id="nit" value="4" type="radio">&nbsp;NIT
                </label> -->
                                    <!-- /SELECCIONA TIPO DE CEDULA -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="nombre" class="control-label">Nombre de usuario</label>
                                <input id="nombre" type="text" name="nombre" class="form-control" title="Por favor ingresa correctamente nombre del usuario"
                                    required/>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="apellido" class="control-label">Apellido de usuario</label>
                                <input id="apellido" type="text" name="apellido" class="form-control" title="Por favor ingresa correctamente apellido del usuario"
                                    required/>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email" class="control-label">Email</label>
                                <input id="email" type="email" name="email" class="form-control" title="Por favor ingresa correo electrónico de usuario"
                                    required/>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="cod_genero" class="control-label">Género de usuario</label>
                                <div>
                                    <label id="cod_genero" for="masculino" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                                        <input type="radio" name="cod_genero" id="masculino" value="1">&nbsp;Masculino
                                    </label>
                                    &nbsp;
                                    <label id="cod_genero" for="femenino" class="radio-inline pmd-radio pmd-radio-ripple-effect">
                                        <input type="radio" name="cod_genero" id="femenino" value="2">&nbsp;Femenino
                                    </label>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-xs-12 col-sm-12">
                            <div class="form-group text-center">
                                <label for="cod_area" class="control-label ">Área de la Institución a la que pertenece el usuario</label>
                                <div>
                                    <select id="cod_area" name="cod_area" required>
                                        <option value="0"> ------ Seleccionar ------ </option>
                                        <option value="1">Académica</option>
                                        <option value="2">Administrativa</option>
                                        <option value="3">Técnica</option>
                                        <option value="4">Tecnológica</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6">
                            <div class="form-group text-center">
                                <label for="cod_cargo" class="control-label">
                                    &nbsp;
                                    <br>&nbsp;&nbsp;Cargo del usuario</label>
                                <div>
                                    <select id="cod_cargo" name="cod_cargo" required>
                                        <option value="0"> ------ Seleccionar ------ </option>
                                        <option value="1">Técnico</option>
                                        <option value="2">Rector</option>
                                        <option value="3">Coordinador académico</option>
                                        <option value="4">Profesor</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-6 col-sm-6">
                            <div class="form-group text-center">
                                <label for="cod_rol" class="control-label">&nbsp;
                                    <br>Asignar rol al usuario</label>
                                <div>
                                    <select id="cod_rol" name="cod_rol" required>
                                        <option value="0"> ------ Seleccionar ------ </option>
                                        <option value="1">Técnico</option>
                                        <option value="2">Administrativo</option>
                                        <option value="3">Usuario</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pull-right">
                            <button id="enviar" name="send" type="submit" class="btn btn-block btn-success pmd-z-depth-3 pmd-ripple-effect" onsubmit="return checkPass()">Crear nuevo usuario</button>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 pull-right">
                            <a id="listUsers" href="./listUsers.php">
                                <button id="cancelar" name="cancelar" type="button" class="btn btn-block btn-danger pmd-z-depth-3 pmd-ripple-effect">Cancelar</button>
                            </a>
                        </div>

                    </div>
                    <br>

                    <div class="form-group">
                        <!-- <button class="btn btn-primary btn-block" name="send" type="submit" >Crear nuevo usuario</button> -->
                    </div>

                </form>
            </div>
        </div>
    </div>
    <div class="modal-footer"></div>

    <?php include '../config/base_script.php';?>
    <script src="assets/js/checkComparativePassword.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
</body>

</html>