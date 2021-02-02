<?php

	include("Basedatos.php");
	
	if($conexion){
		echo "Servidor Conectado";
	} else {
		echo "ha ocurrido un error";
	}

	if(isset($_POST['enviarM'])){
		if(strlen($_POST['Correo_E']) >= 1  && strlen($_POST['mensaje']) >= 1 ){ /*o !empty()*/
			$nombre = trim($_POST['Correo_E']);
			$mensaje = trim($_POST['mensaje']); /*trim elimina los espacios en el inicio y final*/
			$fechareg = date("d/m/y");
			$consulta = "INSERT INTO mensajes(nombre, mensaje, fecha) VALUES ('$nombre','$mensaje','$fechareg')";
			$resultado = mysqli_query($conexion,$consulta);
			
			if ($resultado){
				?>
				<h3 class="h4 bg-success">Mensaje registrado correctamente</h3>
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