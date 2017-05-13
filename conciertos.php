	<div class="row">
		<div id="view" class="view col-md-12 hide">
			<video class="post" controls="true" id="videoView" preload>
				<source src="res/videos/video_1.mp4" type="video/mp4">
			</video>
		</div>	
	</div>

	<div class="alert alert-warning alert-dismissible hide" role="alert" id="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<strong>Working!</strong> Actualmente estamos trabajando en mejorar esta parte.
	</div>

	<center><h2 class="title_videos">Nuestros vídeos</h2></center>
	<div id="contenido">
		<section class="row">
			<div class="col-xs-12 col-sm-6 col-md-3" id="video-container">
				<div class="thumbnail">
					<video class="post video" controls="true" preload poster="res/poster_1.png">
						<source src="res/videos/video_1.mp4" type="video/mp4" class="src">
					</video>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3" id="video-container">
				<div class="thumbnail">
					<video class="post video" controls="true" preload poster="res/poster_2.png">
						<source src="res/videos/video_2.mp4" type="video/mp4" class="src">
					</video>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3" id="video-container">
				<div class="thumbnail">
					<video class="post video" controls="true" preload poster="res/poster_1.png">
						<source src="res/videos/video_3.mp4" type="video/mp4" class="src">
					</video>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3" id="video-container">
				<div class="thumbnail">
					<video class="post video" controls="true" preload poster="res/poster_2.png">
						<source src="res/videos/video_4.mp4" type="video/mp4" class="src">
					</video>
				</div>
			</div>
		</section>
		<section class="row">
			<div class="col-xs-12 col-sm-6 col-md-3" id="video-container">
				<div class="thumbnail">
					<video class="post video" controls="true" preload poster="res/poster_1.png">
						<source src="res/videos/video_1.mp4" type="video/mp4" class="src">
					</video>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3" id="video-container">
				<div class="thumbnail">
					<video class="post video" controls="true" preload poster="res/poster_2.png">
						<source src="res/videos/video_2.mp4" type="video/mp4" class="src">
					</video>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3" id="video-container">
				<div class="thumbnail">
					<video class="post video" controls="true" preload poster="res/poster_1.png">
						<source src="res/videos/video_3.mp4" type="video/mp4" class="src">
					</video>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3" id="video-container">
				<div class="thumbnail">
					<video class="post video" controls="true" preload poster="res/poster_2.png">
						<source src="res/videos/video_4.mp4" type="video/mp4" class="src">
					</video>
				</div>
			</div>
		</section>
		<section class="row">
			<div class="col-xs-12 col-sm-6 col-md-3" id="video-container">
				<div class="thumbnail">
					<video class="post video" controls="true" preload poster="res/poster_1.png">
						<source src="res/videos/video_1.mp4" type="video/mp4" class="src">
					</video>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3" id="video-container">
				<div class="thumbnail">
					<video class="post video" controls="true" preload poster="res/poster_2.png">
						<source src="res/videos/video_2.mp4" type="video/mp4" class="src">
					</video>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3" id="video-container">
				<div class="thumbnail">
					<video class="post video" controls="true" preload poster="res/poster_1.png">
						<source src="res/videos/video_3.mp4" type="video/mp4" class="src">
					</video>
				</div>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3" id="video-container">
				<div class="thumbnail">
					<video class="post video" controls="true" preload poster="res/poster_2.png">
						<source src="res/videos/video_4.mp4" type="video/mp4" class="src">
					</video>
				</div>
			</div>
		</section>
	</div>
	<script>
		
		$(document).ready(function(){			
			$(".video").click(function(){
				var attr = $("video source:first-child").attr("src");
				//$("#view").attr("class", "view col-md-12 active");
				console.log(attr);

				var alert = document.getElementById("alert");

				alert.setAttribute("class", "alert alert-warning alert-dismissible");
			});
		});

	</script>