
<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Login - JP Stats</title>

	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href="assets/modules/bootstrap-5.1.3/css/bootstrap.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- Boostrap Icon-->
	<link rel="stylesheet" href="assets/modules/bootstrap-icons/bootstrap-icons.css">
</head>
<body>
 
	<div id="auth">
        
		<div class="row h-100">
			<div class="col-lg-7 d-none d-lg-block">
				<div id="auth-left">
 				</div>
			</div>
			<div class="col-lg-5 col-12">
				<div id="auth-right">
					<div class="auth-logo">
						<a href="index.html"><img src="assets/images/logo.png" alt="Logo"> Atrana</a>  
					</div>
					<h1 class="auth-title">JP Stats.</h1>
					<h2 class="auth-subtitle mb-5">Alavancando o seu negócio de forma simples.</h2>
					<p class="auth-subtitle mb-5">Acesse sua conta ou registre-se em nossa plataforma.</p>
		
					<form action="login.php" method="post">
						<div class="form-group position-relative has-icon-left mb-4">
							<input type="text" class="form-control form-control-xl" name="email" id="email" placeholder="E-mail" required>
							<div class="form-control-icon">
								<i class="bi bi-person"></i>
							</div>
						</div>
						<div class="form-group position-relative has-icon-left mb-4">
							<input type="password" class="form-control form-control-xl" name="pass" id="pass" placeholder="Senha">
							<div class="form-control-icon">
								<i class="bi bi-shield-lock"></i>
							</div>
						</div>
						<div class="form-check form-check-lg d-flex align-items-end">
							<input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
							<label class="form-check-label text-gray-600" for="flexCheckDefault">
								Lembrar de mim?
							</label>
						</div>
						<button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
					</form>
					<div class="text-center mt-5 text-lg fs-4">
						<p class="text-gray-600">Você tem uma conta? <a href="auth-register.html" class="font-bold">Registre-se.</a>.</p>
						<p><a class="font-bold" href="auth-forgot-password.html">Esqueceu sua senha?</a>.</p>
					</div>
				</div>
			</div>
			
		</div>
	</div>
		
	 

	<!-- General JS Scripts -->
	<script src="assets/js/atrana.js"></script>

	<!-- JS Libraies -->
	<script src="assets/modules/jquery/jquery.min.js"></script>
	<script src="assets/modules/bootstrap-5.1.3/js/bootstrap.bundle.min.js"></script>
	<script src="assets/modules/popper/popper.min.js"></script>

    <!-- Template JS File -->
	<script src="assets/js/script.js"></script>
	<script src="assets/js/custom.js"></script>
 </body>
</html>
