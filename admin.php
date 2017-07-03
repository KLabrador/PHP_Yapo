<?php
SESSION_START();
$user = $_SESSION['username'];
if ($user == 'admin') {
		echo "Hola soy el $user. ";    //Se muestra cual usuario logro ingresar al sistema
	} else {
		if ((!$user) || ($user != 'admin')) {
			header('Location: no_autorizado.php'); //Se redirecciona a una pagina para indicar que no tiene permisos suficientes para ver esta informacion.
		}
	}

	?>
	<br><br>
    <form action="create-user.php" method="POST">

        <input type="text" name="username" placeholder="Usuario" required>

        <input type="text" name="role" placeholder="Role" required> 

		<input id="crearUsuario" type="submit" value="Crear Usuario">
    </form>

	<br>
    <form action="delete-user.php" method="POST">

        <input type="text" name="username" placeholder="Usuario" required>

		<input id="eliminarUsuario" type="submit" value="Eliminar Usuario">
    </form>

	<br>
	<a href="cerrar_sesion.php"> Salir </a> <?php //Boton para salir del sistema y cerrar la sesion ?>

	<script src="jQuery-2.1.4.min.js"></script>

