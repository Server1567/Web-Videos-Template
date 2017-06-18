<?php 
	session_start();
	include("com.php");

	if(isset($_POST['user']) && !empty($_POST['user']) &&
	   isset($_POST['pass']) && !empty($_POST['pass'])) {
		
		$com = mysql_connect($host, $user, $pass) or die("Problemas con el Servidor");
		mysql_select_db($db, $com) or die("Problemas con DB");

		$select = mysql_query("SELECT * FROM dat_Admin WHERE PASSWORD='$_POST[pass]'", $com);

		$session =  mysql_fetch_array($select);

		if($_POST['pass'] == $session['PASSWORD']) {
			$_SESSION['username'] = $_POST['user'];
			echo "Welcome!";
		}
		else  {
			echo "Campos mal escritos";
		}

	}
	else {
		echo "Ingrese los campos";
	}
?>