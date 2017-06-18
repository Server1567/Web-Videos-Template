<?php 

	session_start();

	if(isset($_SESSION['username'])) {
		echo "Welcome -  You can see this website";
		echo "<br><a href='hakai.php'>Cerrar Sesión</a>";
	}
	else
		echo "Error de Acceso";

?>