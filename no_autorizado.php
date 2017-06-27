<?php

	session_start();
	session_unset();
	session_destroy();
	echo "No tiene permiso para ver esta pagina, por favor haga click <a href='index.php'>aqui.</a>";

?>