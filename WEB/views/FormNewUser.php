<?php
session_start();
?>

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
                                <form method="post" action="controllers/registronuevousuario.php">
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