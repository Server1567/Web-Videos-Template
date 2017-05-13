<!DOCTYPE html>
<html lang="es">
<head>
	<!-- META TAGS -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
	<meta name="description" content="El Coro Acción Comunitaria nació como el coro oficial de la parroquia San Rafael Arcángel de la comunidad 24 de abril.">

	<!-- META TAGS -->

	<title>Coral Comunity</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" typr="text/css" href="css/animate.css">
	<link href="https://production.cdmycdn.com/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="styles.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Abel:100,300,400,500,700" rel="stylesheet">  
	<script src="js/jquery.js"></script>

	<!-- JavaScript -->

	<script>
		$(document).ready(function(){
			$("#home").click(function(){        // HOME
				$("#videos").hide();

				$("#details").fadeIn(1500);
				$(".main").fadeIn(1500);

				$.get("videos_home.php", function(data){
				  	$("#videos").html(data);

						$(".update").css({"width": "auto",
										  "margin-left": "auto",
										  "margin-right": "auto"});

				  	$("#videos").css("margin-top: 20px;");
				  	$("#videos").attr("class", "container jumbotron");
				  	$("#videos").fadeIn(500);
				});
			});

			$("#we_are, .we_are").click(function(){     // ACERCA DE NOSOTROS
				$("#details").hide();
				$("#videos").hide();
				$(".main").hide();

				$.ajax({

					beforeSend: function(){
						$("#videos").show();
						
						$(".update").css({"width": "100%",
										  "margin-left": "4%",
										  "margin-right": "4%"});

						$("#videos").html("<div class='jumbotron col-md-12'><center><div class='preloader'></div></center></div>");
					},
					method: "GET",
					url: "about_me.php",
					success: function(data){
						$("#videos").html(data);
						$("#videos").css("margin-top: 70px;");
						$("#videos").attr("class", "container-fluid jumbotron col-md-12");
						$("#videos").fadeIn(500);
					},
					timeout: 10000
				});
			});

			$("#concerts, #ver_mas, .concerts").click(function(){  // CONCIERTOS
				$("#details").hide();
				$(".main").hide();
				$("#videos").hide();
				//$("#videos").load("conciertos.php center");

				$.ajax({

					beforeSend: function(){
						$("#videos").show();
						
						$(".update").css({"width": "100%",
										  "margin-left": "4%",
										  "margin-right": "4%"});

						$("#videos").html("<center><h2 class='title_videos'>Nuestros vídeos</h2><br><div class='preloader'></div></center>");
					},
					method: "GET",
					url: "conciertos.php",
					success: function(data){
						$("#videos").html(data);
						$("#videos").css("margin-top: 70px;");
						$("#videos").attr("class", "container-fluid jumbotron col-md-12");
						$("#videos").fadeIn(500);
					},
					timeout: 10000
				});
			});
		});
	</script>

	<!-- JavaScript -->

</head>
<body>

<header class="col-md-12">
	<nav class="navbar navbar-inverse navbar-fixed-top style-nav">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
					<span class="sr-only">Menu</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

			</div>
			<div class="collapse navbar-collapse" id="navbar-1">
				<ul class="nav navbar-nav col-md-12 col-sm-12 navegacion">
					<li id="home"><a href="#">Inicio</a></li>
					<li id="we_are"><a href="#">Quienes somos</a></li>
					<li id="concerts"><a href="#">Conciertos</a></li>
				</ul>
			</div>
		</div>
	</nav>
</header>

<section class="main">
		<div class="jumbotron susesor col-xs-12 hidden-sm hidden-md hidden-lg">
			<h2>Bienvenido a Coral Comunity!</h2>
			<h4>"Más que un Coro, una Hermandad"</h4>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, perspiciatis, reprehenderit, fuga enim quibusdam commodi expedita soluta voluptatibus quia atque nostrum dicta. Praesentium quaerat quam facere, rerum exercitationem vero sint.
			</p>
		</div>
		<div id="carousel" class="carousel slide hidden-xs" data-ride="carousel" role="presentation">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel" data-slide-to="0" class="active"></li>
				<li data-target="#carousel" data-slide-to="1"></li>
				<li data-target="#carousel" data-slide-to="2"></li>
			</ol>
		
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="res/carousel1.jpg" class="img-responsive img">
					<div class="carousel-caption">
						<h3 class="hidden-xs hidden-sm">Bienvenido a Coral Comunity!</h3>
						<h4 class="hidden-md hidden-lg">Bienvenido a Coral Comunity!</h4>
						<p class="hidden-xs">Donde puedes escuhar nuestras fabulosas canciones.</p>
					</div>
				</div>
				<div class="item">
					<img src="res/carousel2.jpg" class="img-responsive img">
					<div class="carousel-caption">
						<h3 class="hidden-xs hidden-sm">Mas que una banda, somos Salvavidas</h3>
						<h4 class="hidden-md hidden-lg">Mas que una banda, somos Salvavidas</h4>
						<p class="hidden-xs">Nuestras canciones te llevan a oír la vida.</p>
					</div>
				</div>
				<div class="item">
					<img src="res/carousel3.jpg" class="img-responsive img">
					<div class="carousel-caption">
						<h3 class="hidden-xs hidden-sm">Primero en Rep.Dom. y después en el Mundo</h3>
						<h4 class="hidden-md hidden-lg">Primero en Rep.Dom. y después en el Mndo</h4>
						<p class="hidden-xs">Cada Lugar que vamos nos abre nuevas puertas.</p>
					</div>
				</div>
			</div>
		
		</div>
</section>

<div id="update" class="update row">
	<div class="container jumbotron" id="videos"><br>    <!-- Vídeos de Presentación -->
		<center><h2 class="title_videos">Nuestros vídeos</h2></center>
		<section class="row">
			<div class="col-xs-12 col-sm-6 col-md-6 video-container">
				<div class="thumbnail">
					<video class="post" controls="true" preload poster="res/poster_1.png">
						<source type="video/mp4" src="res/videos/video_3.mp4">
					</video>
				</div>
			</div>

			<div class="col-xs-12 col-sm-6 col-md-6 video-container">
				<div class="thumbnail">
					<video class="post" controls="true" preload poster="res/poster_2.png">
						<source type="video/mp4" src="res/videos/video_4.mp4">
					</video>
				</div>
			</div>
		</section>

		<br><br><br>

		<div class="row">
			<center><button class="btn btn-primary" id="ver_mas">Ver Más</button></center>
		</div>
	</div>
	<br>
	<br>
	<br>
	
	<section class="jumbotron col-md-12" id="details">
		<div class="row">
			<div class="col-md-4">
				<h3 class="title_desc">Lorem ipsum dolor sit amet.</h3>
				<p class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, suscipit et cumque dignissimos maiores, fugit harum quibusdam modi delectus reiciendis!</p>
			</div>
			<div class="col-md-4">
				<h3 class="title_desc">Lorem ipsum dolor sit amet.</h3>
				<p class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, fuga, laborum! Aspernatur ullam quasi delectus. Quae illo sed, assumenda recusandae.</p>
			</div>
			<div class="col-md-4">
				<h3 class="title_desc">Lorem ipsum dolor sit amet.</h3>
				<p class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat explicabo debitis unde dicta itaque blanditiis consequuntur non neque mollitia necessitatibus.</p>
			</div>
		</div>
	</section>

</div>
 
<!-- Footer -->

<div class="container-fluid footer_abajo">
	<footer class="row">
		<div class="col-md-12 footer">

			<div class="row">
				<section class="col-xs-12 col-sm-5 col-md-5" id="contact">
					<h2>Contáctanos atraves de</h2>
					<p><strong>Correo Electrónico: </strong>correo@dominio.com</p>
					<p class="pais"><strong>Teléfono: &nbsp;</strong>
						<img src="res/bandera.png">&nbsp;+1(809)-621-4603
					</p>

				</section>

				<section class="col-xs-12 col-sm-7 col-md-7" id="redes_sociales">
					<h2>Redes Sociales</h2>
					<a href="#" class="facebook"><span class="fa fa-facebook"></span></a>
					<a href="#" class="twitter"><span class="fa fa-twitter"></span></a>
					<a href="#" class="youtube"><span class="fa fa-youtube"></span></a>

				</section>
			</div>
			<div class="row">
				<div class="col-md-12">
					<ul class="lista_copyright">
						<li id="li">
							<h5 class="copyright">Coral Comunity © 2017.&nbsp;&nbsp;&nbsp;&nbsp; Todos los derechos reservados.</h5>
						</li>
						<li id="li"><a href="#" class="credits we_are">Quienes Somos</a></li>
						<li id="li"><a href="#" class="credits concerts">Conciertos</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
</div>

<!-- Footer -->
<div class="clearfix visible-sm-block"></div>
<!-- Javascript de Bootstrap -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>