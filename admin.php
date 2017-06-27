<?php
	SESSION_START();
	$user = $_SESSION['username'];
	if ($user == 'user1' || $user == 'admin') {
		echo "Hola soy el $user. ";    //Se muestra cual usuario logro ingresar al sistema
	} else {
		if ((!$user) || ($user != 'admin')) {
			header('Location: no_autorizado.php'); //Se redirecciona a una pagina para indicar que no tiene permisos suficientes para ver esta informacion.
		}
	}

	?>
	<br><br>
	<a href="http://localhost:8080/cerrar_sesion.php"> Salir </a> <?php //Boton para salir del sistema y cerrar la sesion ?>
