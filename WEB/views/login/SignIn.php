<?php
if (isset($_SESSION)) {
	session_destroy();
} else {
	session_start();
}
?>

<!doctype html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Login | Propeller - Admin Dashboard">
	<meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">
	<title>Login | NEW RESET AIHD - Admin Dashboard</title>

	<?php
		require '../../config/base_head.php';
		require '../../config/googleAnaytics.php';
	?>

	<!-- Styles Ends -->
</head>

<body class="body-custom">
	<div class="logincard">
		<div class="pmd-card card-default pmd-z-depth">
			<div class="login-card">
				<form role="form" method="POST" action="../../controllers/authLogin.php">
					<div class="pmd-card-title card-header-border text-center">
						<div class="loginlogo">
							<a href="../../index.php;">
								<img src="../../assets/images/IsotipoV2_Alpha_256.png" alt="Logo">
							</a>
						</div>
						<h3>Iniciar Sesión <span>con <strong>NEW RESET A.I.H.D.</strong> </span> </h3>
					</div>

					<div class="pmd-card-body">
						<div class="alert alert-success" role="alert"> Oh, ¡maldición! Change a few things up and try submitting again. </div>
						<div class="form-group pmd-textfield pmd-textfield-floating-label">
							<div class="form-group">
								<label id="email" for="email" class="control-label pmd-input-group-label">
									<span class="fa fa-user fa-lg"></span>&nbsp;Email</label>
								<input id="email" type="text" class="form-control" name="email" placeholder="                                          Ingrese su email" required>
							</div>
						</div>
						<div class="form-group pmd-textfield pmd-textfield-floating-label">
							<div class="form-group">
								<label id="password" for="password" class="control-label pmd-input-group-label">
									<span class="fa fa-key fa-lg"></span> Contraseña
								</label>
								<input id="password" type="password" class="form-control" name="password" placeholder="                                          ingrese contraseña"required>
							</div>
						</div>
					</div>
					<div class="pmd-card-footer card-footer-no-border card-footer-p16 text-center">
						<div class="form-group clearfix">
							<div class="checkbox pull-left">
								<label class="pmd-checkbox checkbox-pmd-ripple-effect">
									<input name="save_session" type="checkbox" value="on">
									<span class="pmd-checkbox"> Mantener la sesión iniciada</span>
									<!-- recordar tu contraseña? -->
								</label>
							</div>
							<span class="pull-right forgot-password">
								<a href="javascript:void(0);">He olvidado mi contraseña</a>
							</span>
						</div>
						<button type="submit" class="btn pmd-ripple-effect btn-primary btn-block">
							Iniciar Sesión &nbsp; <span class="fa fa-sign-in fa-lg" required></span>

						</button>

						<p class="redirection-link">¿No tiene una cuenta? <a href="javascript:void(0);" class="login-register">Cree una</a>.</p>
					</div>
				</form>
			</div>


			<!-- Crear cuenta con NEW RESET AIHD -->
			<div class="register-card">
				<div class="pmd-card-title card-header-border text-center">
					<div class="loginlogo">
						<a href="javascript:void(0);">
							<img src="../../assets/images/IsotipoV2_Alpha_256.png" alt="Logo">
						</a>
					</div>
					<h3>Crear cuenta <span>con <strong>NEW RESET AIHD</strong> </span> </h3>
				</div>
				<form role="form" method="POST" action="../../controllers/">
					<div class="pmd-card-body">
						<div class="form-group pmd-textfield pmd-textfield-floating-label">
							<label for="inputError1" class="control-label pmd-input-group-label">Usuario</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="material-icons md-dark pmd-sm">perm_identity</i>
								</div>
								<input type="text" class="form-control" id="exampleInputAmount">
							</div>
						</div>

						<div class="form-group pmd-textfield pmd-textfield-floating-label">
							<label for="inputError1" class="control-label pmd-input-group-label">Correo electrónico</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="material-icons md-dark pmd-sm">email</i>
								</div>
								<input type="text" class="form-control" id="exampleInputAmount">
							</div>
						</div>

						<div class="form-group pmd-textfield pmd-textfield-floating-label">
							<label for="inputError1" class="control-label pmd-input-group-label">Contraseña</label>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="material-icons md-dark pmd-sm">lock_outline</i>
								</div>
								<input type="text" class="form-control" id="exampleInputAmount">
							</div>
						</div>
					</div>

					<div class="pmd-card-footer card-footer-no-border card-footer-p16 text-center">
						<a href="#" type="button" class="btn pmd-ripple-effect btn-primary btn-block">Iniciar Sesión</a>
						<p class="redirection-link">Ya es una cuenta registrada?
							<a href="javascript:void(0);" class="register-login">Iniciar Sesión</a>. </p>
					</div>
				</form>
			</div>

			<!-- ¿Has olvidado tu contraseña? -->
			<div class="forgot-password-card">
				<form role="form" method="POST" action="../../controllers/">
					<div class="pmd-card-title card-header-border text-center">
						<div class="loginlogo">
							<a href="javascript:void(0);">
								<img src="../../assets/images/IsotipoV2_Alpha_256.png" alt="Logo">
							</a>
						</div>
						<h3>¿Has olvidado tu contraseña?
						<br><span>Envíe su dirección de correo electrónico y le enviaremos un enlace para restablecer su contraseña.</span></h3>
					</div>
					<div class="pmd-card-body">
						<div class="form-group pmd-textfield pmd-textfield-floating-label">
							<div class="form-group">
								<label id="email" for="email" class="control-label pmd-input-group-label">
									<span class="fa fa-user fa-lg"></span>&nbsp;Email</label>
								<input id="email" type="text" class="form-control" name="email" placeholder="                                          Ingrese su email"
								    required>
							</div>
						</div>
					</div>
					<div class="pmd-card-footer card-footer-no-border card-footer-p16 text-center">
						<a href="#" type="button" class="btn pmd-ripple-effect btn-primary btn-block">Enviar</a>
						<p class="redirection-link">Ya es una cuenta registrada?
							<a href="javascript:void(0);" class="register-login">Iniciar Sesión</a>
						</p>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Scripts Starts -->
	<?php include '../../config/base_script.php';?>
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
	<!-- login page sections show hide -->
	<script type="text/javascript">
		$(document).ready(function () {
			$('.app-list-icon li a').addClass("active");
			$(".login-for").click(function () {
				$('.login-card').hide()
				$('.forgot-password-card').show();
			});
			$(".signin").click(function () {
				$('.login-card').show()
				$('.forgot-password-card').hide();
			});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function () {
			$(".login-register").click(function () {
				$('.login-card').hide()
				$('.forgot-password-card').hide();
				$('.register-card').show();
			});

			$(".register-login").click(function () {
				$('.register-card').hide()
				$('.forgot-password-card').hide();
				$('.login-card').show();
			});
			$(".forgot-password").click(function () {
				$('.login-card').hide()
				$('.register-card').hide()
				$('.forgot-password-card').show();
			});
		});
	</script>

	<!-- Scripts Ends -->

</body>

</html>