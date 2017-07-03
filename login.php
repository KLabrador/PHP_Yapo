<?php

$data['users'][0] = array(
	'username' => 'admin',
	'password' => '1234',
	'rol' => 'administrador',
	);
$data['users'][1] = array(
	'username' => 'user1',
	'password' => '1234',
	'rol' => 'usuario',
	);
$data['users'][2] = array(
	'username' => 'user2',
	'password' => '1234',
	'rol' => 'usuario',
	);
$data['users'][3] = array(
	'username' => 'user3',
	'password' => '1234',
	'rol' => 'usuario',
	);

	$username = $_POST['username'];			//Se lee el nombre del usuario que quiere ingresar al sistema
	$password = md5($_POST['password']);	//Se lee el password y se encripta del usuario que quiere ingresar al sist.

	if(($username == 'admin') AND $password == md5('1234')){
		ini_set(”session.cookie_lifetime”,300);  //El tiempo viene dado en segundos. 5 minutos = 300 segundos
		ini_set(”session.gc_maxlifetime”, 300);  //Se define el tiempo maximo de la sesion en 5 minutos = 300 seg
		SESSION_START();
		$_SESSION['username'] = $username;		 //Se guarda en variable de sesion el nombre del usuario
		$user = $_SESSION['username'];
		$_SESSION['data'] = json_encode($data['users']);
		header('Location: admin.php');			 //Se hace la redireccion a la pagina del usuario que ingreso al sist.
	}

	if(($username == 'user1') AND $password == md5('1234')){
		ini_set(”session.cookie_lifetime”,300);  //El tiempo viene dado en segundos. 5 minutos = 300 segundos
		ini_set(”session.gc_maxlifetime”, 300);  //Se define el tiempo maximo de la sesion en 5 minutos = 300 seg
		SESSION_START();
		$_SESSION['username'] = $username;
		$user = $_SESSION['username'];
		$_SESSION['data'] = json_encode($data['users']);
		header('Location: user1.php');
	}	
	
	if(($username == 'user2') AND $password == md5('1234')){
		ini_set(”session.cookie_lifetime”,300);  //El tiempo viene dado en segundos. 5 minutos = 300 segundos
		ini_set(”session.gc_maxlifetime”, 300);  //Se define el tiempo maximo de la sesion en 5 minutos = 300 seg	
		SESSION_START();
		$_SESSION['username'] = $username;
		$user = $_SESSION['username'];
		$_SESSION['data'] = json_encode($data['users']);
		header('Location: user2.php');

	}	
	if(($username == 'user3') AND $password == md5('1234')){
		ini_set(”session.cookie_lifetime”,300);  //El tiempo viene dado en segundos. 5 minutos = 300 segundos
		ini_set(”session.gc_maxlifetime”, 300);  //Se define el tiempo maximo de la sesion en 5 minutos = 300 seg
		SESSION_START();
		$_SESSION['username'] = $username;
		$user = $_SESSION['username'];
		$_SESSION['data'] = json_encode($data['users']);
		header('Location: user3.php');

	}	
	if(($username == 'user4') AND $password == md5('1234')){
		ini_set(”session.cookie_lifetime”,300);  //El tiempo viene dado en segundos. 5 minutos = 300 segundos
		ini_set(”session.gc_maxlifetime”, 300);  //Se define el tiempo maximo de la sesion en 5 minutos = 300 seg
		SESSION_START();
		$_SESSION['username'] = $username;
		$user = $_SESSION['username'];
		header('Location: user4.php');

	}	

	//De no se alguno de los usuarios autorizados para entrar al sistema, se vuelve a la página de inicio
	if (!$user) {
		header('Location: index.php');	
	}
	

	?>