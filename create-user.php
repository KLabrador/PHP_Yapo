<?php

SESSION_START();
$username = $_POST['username'];	
$role = $_POST['role'];	
array_push($data, $_POST['username'], $_POST['role']);
echo "Usuario $username agregado.";
?>
	<br><br>
	<a href="admin.php"> Volver </a>
	<br><br>
	<a href="cerrar_sesion.php"> Salir </a>