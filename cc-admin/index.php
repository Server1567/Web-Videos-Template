<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Administración de Coral Comunity</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" typr="text/css" href="../css/animate.css">
	<link href="https://production.cdmycdn.com/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<link rel="stylesheet" href="../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Abel:100,300,400,500,700" rel="stylesheet">  
	<script src="../js/jquery.js"></script>

	<style>
		
		* {
			margin: 0 auto;
			padding: 0 auto;
		}

		body {
			background-color: lightgray;
			margin: auto;
		}

		.jumbotron {
			width: 50%;
			border-radius: 5%;
			margin-top: 15%;
		}

		.form-control {
			width: 75%;
		}

		input[type=text]{
			text-align: center;
		}

		input[type=password]{
			text-align: center;
		}

	</style>

</head>
<body>

<div class="jumbotron">
	<h3 style="text-align: center;">CONTROL DE ACCESO</h3><br>
	<form action="enter.php" method="POST" name="form" id="form">
		<center>
		<div class="form-group">			
			<input type="text" placeholder="Administrador" class="form-control" name="user" required><br>
		</div>
		<div class="form-group">
			<input type="password" placeholder="TOKEN" class="form-control" name="pass" required><br>
		</div>
			<input type="submit" value="Entrar" class="btn btn-primary form-control">
		</center>
	</form>
</div>


<div class="clearfix visible-sm-block"></div>
<!-- Javascript de Bootstrap -->
<script type="text/javascript" src="../js/bootstrap.min.js"></script>	
</body>
</html>