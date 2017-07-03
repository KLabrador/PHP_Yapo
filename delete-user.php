<?php

SESSION_START();
$username = $_POST['username'];	
$role = $_POST['role'];	
for ($x=0;$x<=count($data);$x++){
	if ($username===$data[$x]->username){
		unset($data[$x]);
		echo "Usuario $username eliminado";
	}
}
echo "Usuario $username eliminado";
?>
	<br><br>
	<a href="admin.php"> Volver </a>
	<br><br>
	<a href="cerrar_sesion.php"> Salir </a>