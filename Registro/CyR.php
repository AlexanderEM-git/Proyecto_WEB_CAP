<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Contactenos</title>
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

	<div class="Century container-sm p-5 text-center">
		<p class="Century display-1"><em>COMUNICATE CON NOSOTROS</em></p>
		<p>Gracias por visitarnos <strong>¡QUREMOS CONOCERTE!</strong> por eso es importante que nos dejes tus datos para contactarte y darle la información de tu interes.</p>
		<form method="post">
			<div class="mb-3 p-3">
			  <label for="Correo_E" class="form-label">Correo Electronico</label>
			  <input type="email" class="form-control" id="Correo_E" placeholder="nombre@ejemplo.com" name="Correo_E">
			</div>
			<div class="mb-3">
			  <label for="mensaje" class="form-label">Mensaje</label>
			  <textarea class="form-control" id="mensaje" rows="3" name="mensaje"></textarea>
			</div>
			<div class="col-12">
				<button type="submit" class="btn btn-secondary" name="enviarM">Enviar Mensaje</button>
			</div>
		</form>
	</div>
	
	<div class="p-3 container-sm text-center Century text-white">
		<?php
		include("mensajes.php");
		?>
	</div>
	
	
	<div class="Century container-sm p-5 text-center">
		<p class="Century display-1"><em>REGISTRO</em></p>	
	</div>

	
	<div class="container-md Century text-center">
		<!-- se envia-->
		<form class="row g-3" method="post">
		  <div class="col-12">
			<label for="CorreoE" class="form-label">Correo Electronico</label>
			<input type="email" class="form-control" id="CorreoE" name="CorreoE">
		  </div>
		  <div class="col-12">
			<label for="Contra" class="form-label">Contraseña</label>
			<input type="password" class="form-control" id="Contra" name="Contra">
		  </div>
		  <div class="col-12">
			<label for="cContra" class="form-label">Confirmar Contraseña</label>
			<input type="password" class="form-control" id="cContra" name="cContra">
		  </div>
		  <div class="col-12">
			<label for="Nombre" class="form-label">Nombre completo</label>
			<input type="text" class="form-control" id="Nombre" name="Nombre">
		  </div>
		  <div class="col-12">
			<label for="Telefono" class="form-label">Telefono</label>
			<input type="text" class="form-control" id="Telefono" name="Telefono" placeholder="Telefono Fijo o celular">
		  </div>
		  <div class="col-md-6">
			<label for="Direccion" class="form-label">Direccion</label>
			<input type="text" class="form-control" id="Direccion" name="Direccion">
		  </div>
<!--		  <div class="col-md-4">
			<label for="inputState" class="form-label">State</label>
			<select id="inputState" class="form-select">
			  <option selected>Choose...</option>
			  <option>...</option>
			</select>
		  </div>-->
		  <div class="col-md-6">
			<label for="Barrio" class="form-label">Barrio</label>
			<input type="text" class="form-control" id="Barrio" name="Barrio">
		  </div>
<!--		  <div class="col-12 text-start">
			<div class="form-check">
			  <input class="form-check-input" type="checkbox" id="gridCheck">
			  <label class="form-check-label" for="gridCheck">
				Check me out
			  </label>
			</div>
		  </div>-->
		  <div class="col-12">
			<button type="submit" class="btn btn-primary p-4" name="enviar">Enviar informacion</button>
		  </div>
		</form>
	</div>
	
	<div class="p-3 container-sm text-center Century text-white">
		<?php
		include("registrar.php");
		?>
	</div>

	
	<div class="Century container-sm p-5 text-center">
		<p class="Century display-1"><em>Ingresar</em></p>	
	</div>
	
	<div class="container-sm text-center">
			<a class="p-4 btn btn-secondary" href="Ingresar.php">Iniciar sesión</a>
	</div>
	
	<div class="p-3">
	</div>
	
	  <footer class="bg-secondary">
		  <div class="container justify-content-center">
		    <div class="row align-items-center ">
				<div class="col">
				  <img src="img/Logo_blanco.png" class="rounded mx-auto d-block" alt="Logo_blanco"><br>
				</div>
				<div class="col col-sm-8">
					<p class="Century">
					Iglesia Comunidad Cristiana Amor Y Poder<br>
				  	Carrera 48 No. 50 - 24<br>
					P.J.E 4247 del 8 de septiembre de 2010<br>
					© Itagüí - Colombia Política de privacidad<br>
					Política de Tratamiento de Datos Personales<br>
					WhatsApp:(+57) 300 590 22 73<br>
					Copyright © Todos los derechos reservados. Derechos de autor. Todos los contenidos de este Sitio
					</p>
				</div>
			 </div>
		  </div>
	  </footer>
	
<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>
