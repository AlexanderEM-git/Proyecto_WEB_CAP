<?php

	include("Basedatos.php");
	
	if($conexion){
		echo "Servidor Conectado";
	} else {
		echo "ha ocurrido un error";
	}

	if(isset($_POST['enviar'])){
		if(strlen($_POST['CorreoE']) >= 1  && strlen($_POST['Contra']) >= 1 ){ /*o !empty()*/
			$correo = trim($_POST['CorreoE']);
			$contrasena = trim($_POST['Contra']); /*trim elimina los espacios en el inicio y final*/
			$Ccontrasena = trim($_POST['cContra']);
			$nombre = trim($_POST['Nombre']);
			$telefono = trim($_POST['Telefono']);
			$direccion = trim($_POST['Direccion']);
			$barrio = trim($_POST['Barrio']);
			$fechareg = date("d/m/y");
			$consulta = "INSERT INTO usuarios(usuario, contraseña, nombre, telefono,direccion, barrio) VALUES ('$correo','$contrasena','$nombre','$telefono','$direccion','$barrio')";
			$resultado = mysqli_query($conexion,$consulta);
			
			if ($resultado){
				?>
				<h3 class="h4 bg-success">Te has registrado correctamente</h3>
				<?php
			}else{
				?>
				<h3 class="h4 bg-danger">Ups ha ocurrido un error</h3>
				<?php
			}
			mysqli_close($conexion);
		}else{
			?>
			<h3 class="h4 bg-warning">Llene los campos</h3>
			<?php
		}
		
	}

?>