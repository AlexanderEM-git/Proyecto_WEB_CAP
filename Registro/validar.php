<?php
	$usuario = $_POST['CorreoE'];
	$contrasena = $_POST['Contra'];

	session_start();
	$_SESSION['CorreoE'] = $usuario;

	include('Basedatos.php');

	$consulta = "SELECT*FROM usuarios where usuario='$usuario' and contraseña='$contrasena'";

	$resultado = mysqli_query($conexion,$consulta);


	$filas = mysqli_num_rows($resultado);

	if($filas){
		header("location: index.html");
	}else {
		?>
		<?php
		include("ingresar.php");
		?>
		<h1 class="container bg-warning">Error en la autentificacion</h1>
		<?php
	}
	mysqli_free_result($resultado);
	mysqli_close($conexion);
	
?>