<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iniciar</title>
    <!-- Bootstrap -->
	<link href="css/extra.css" rel="stylesheet">
	<!--<link href="css/bootstrap-4.4.1.css" rel="stylesheet">-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
	
	
</head>

<body>
	
	<nav class="navbar navbar-expand-sm navbar-light bg-light sticky-top">
	  <div class="container-fluid">
		<a class="navbar-brand" href="index.php">
		  <img src="img/Logo_nav.png" alt="Casa Amor y Poder" width="100%" height="100%">
		</a>
		  
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-end Century text-center" id="navbarNav">
		  <ul class="navbar-nav">
			<li class="nav-item">
			  <a class="nav-link" aria-current="page" href="index.php">CASA</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="Quienes_somos.html">QUIENES SOMOS</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="Areas.html">AREAS</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link " href="tejido_social.html">TEJIDO SOCIAL</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="buenas_nuevas.html">BUENAS NUEVAS</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link active" href="CyR.php">CONTACTO Y REGISTRO</a>
			</li>
			<!--<li class="nav-item">
			  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Deshabilitado</a>
			</li>-->
		  </ul>
		</div>  
	  </div>
	</nav>
	
	<div class="p-5"></div>
	
	<div class="container-sm">
	<form class="col-12 text-center" action="validar.php" method="post">
		<h1 class="h3 mb-3 fw-normal">Inicie Sesión</h1>
		<label for="inputEmail" class="visually-hidden">Correo electronico</label>
		<input type="email" id="inputEmail" class="form-control" placeholder="Correo electronico" required="" autofocus="" name="CorreoE">
		<label for="inputPassword" class="visually-hidden">Contraseña</label>
		<input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required="" name="Contra">
		<div class="checkbox mb-3">
		  <label>
			<input type="checkbox" value="remember-me"> Remember me
		  </label>
		</div>
		<button class="w-100 btn btn-lg btn-primary" type="submit">Ingresar</button>
		<p class="mt-5 mb-3 text-muted">©Casa amor y poder</p>
	</form>
		
	</div>
	
	
	<div class="p-5"></div>
	  
	  
	  
	  
<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    
  </body>
</html>