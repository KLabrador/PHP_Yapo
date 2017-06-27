<?php

	$username = $_POST['username'];			//Se lee el nombre del usuario que quiere ingresar al sistema
	$password = md5($_POST['password']);	//Se lee el password y se encripta del usuario que quiere ingresar al sist.

	if ($username == 'admin') {
		ini_set(”session.cookie_lifetime”,300);  //El tiempo viene dado en segundos. 5 minutos = 300 segundos
		ini_set(”session.gc_maxlifetime”, 300);  //Se define el tiempo maximo de la sesion en 5 minutos = 300 seg
		SESSION_START();
		$_SESSION['username'] = $username;		 //Se guarda en variable de sesion el nombre del usuario
		$user = $_SESSION['username'];
		header('Location: admin.php');			 //Se hace la redireccion a la pagina del usuario que ingreso al sist.

	}

	if(($username == 'user1') AND $password == md5('1234')){
		ini_set(”session.cookie_lifetime”,300);  //El tiempo viene dado en segundos. 5 minutos = 300 segundos
		ini_set(”session.gc_maxlifetime”, 300);  //Se define el tiempo maximo de la sesion en 5 minutos = 300 seg
		SESSION_START();
		$_SESSION['username'] = $username;
		$user = $_SESSION['username'];
		header('Location: user1.php');
	}	
	
	if(($username == 'user2') AND $password == md5('1234')){
		ini_set(”session.cookie_lifetime”,300);  //El tiempo viene dado en segundos. 5 minutos = 300 segundos
		ini_set(”session.gc_maxlifetime”, 300);  //Se define el tiempo maximo de la sesion en 5 minutos = 300 seg	
		SESSION_START();
		$_SESSION['username'] = $username;
		$user = $_SESSION['username'];
		header('Location: user2.php');

	}	
	if(($username == 'user3') AND $password == md5('1234')){
		ini_set(”session.cookie_lifetime”,300);  //El tiempo viene dado en segundos. 5 minutos = 300 segundos
		ini_set(”session.gc_maxlifetime”, 300);  //Se define el tiempo maximo de la sesion en 5 minutos = 300 seg
		SESSION_START();
		$_SESSION['username'] = $username;
		$user = $_SESSION['username'];
		header('Location: user3.php');

	}	

	//De no se alguno de los usuarios autorizados para entrar al sistema, se vuelve a la pagina de inicio
	if (!$user) {
		header('Location: index.php');	
	}
	

?>