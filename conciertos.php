	<div class="row">
		<div id="view" class="view col-md-12 hide">
			<video type="video/mp4" src="res/videos/video_1.mp4" class="post" controls="true" id="videoView" preload>
		</div>	
	</div>

	<center><h2 class="title_videos">Nuestros vídeos</h2></center>
	<div id="contenido">
		<section class="row">
			<div class="col-xs-12 col-sm-6 col-md-3" id="video-container">
				<div class="thumbnail thumbnail-video">
					<video type="video/mp4" src="res/videos/video_1.mp4" class="post video" preload poster="res/poster_1.jpg"/>
				</div><br>
				<h5 class="title-video">Ángeles Fuimos | Cover</h5>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3" id="video-container">
				<div class="thumbnail thumbnail-video">
					<video type="video/mp4" src="res/videos/video_2.mp4" class="post video" preload poster="res/poster_2.jpg"/>
				</div><br>
				<h5 class="title-video">El poder nuestro es | Cover</h5>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3" id="video-container">
				<div class="thumbnail thumbnail-video">
					<video type="video/mp4" src="res/videos/video_3.mp4" class="post video" preload poster="res/poster_3.jpg"/>
				</div><br>
				<h5 class="title-video">Dan Dan Kokoro Hikareteku | Concert</h5>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3" id="video-container">
				<div class="thumbnail thumbnail-video">
					<video type="video/mp4" src="res/videos/video_4.mp4" class="post video" preload poster="res/poster_4.jpg"/>
				</div><br>
				<h5 class="title-video">UNRAVEL - Tokyo Ghoul | Metal Cover</h5>
			</div>
		</section>
		<section class="row">
			<div class="col-xs-12 col-sm-6 col-md-3" id="video-container">
				<div class="thumbnail thumbnail-video">
					<video type="video/mp4" src="res/videos/video_1.mp4" class="post video" preload poster="res/poster_1.jpg"/>
				</div><br>
				<h5 class="title-video">Ángeles Fuimos | Cover</h5>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3" id="video-container">
				<div class="thumbnail thumbnail-video">
					<video type="video/mp4" src="res/videos/video_2.mp4" class="post video" preload poster="res/poster_2.jpg"/>
				</div><br>
				<h5 class="title-video">El poder nuestro es | Cover</h5>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3" id="video-container">
				<div class="thumbnail thumbnail-video">
					<video type="video/mp4" src="res/videos/video_3.mp4" class="post video" preload poster="res/poster_3.jpg"/>
				</div><br>
				<h5 class="title-video">Dan Dan Kokoro Hikareteku | Concert</h5>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3" id="video-container">
				<div class="thumbnail thumbnail-video">
					<video type="video/mp4" src="res/videos/video_4.mp4" class="post video" preload poster="res/poster_4.jpg"/>
				</div><br>
				<h5 class="title-video">UNRAVEL - Tokyo Ghoul | Metal Cover</h5>
			</div>
		</section>
		<section class="row">
			<div class="col-xs-12 col-sm-6 col-md-3" id="video-container">
				<div class="thumbnail thumbnail-video">
					<video type="video/mp4" src="res/videos/video_1.mp4" class="post video" preload poster="res/poster_1.jpg"/>
				</div><br>
				<h5 class="title-video">Ángeles Fuimos | Cover</h5>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3" id="video-container">
				<div class="thumbnail thumbnail-video">
					<video type="video/mp4" src="res/videos/video_2.mp4" class="post video" preload poster="res/poster_2.jpg"/>
				</div><br>
				<h5 class="title-video">El poder nuestro es | Cover</h5>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3" id="video-container">
				<div class="thumbnail thumbnail-video">
					<video type="video/mp4" src="res/videos/video_3.mp4" class="post video" preload poster="res/poster_3.jpg"/>
				</div><br>
				<h5 class="title-video">Dan Dan Kokoro Hikareteku | Concert</h5>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3" id="video-container">
				<div class="thumbnail thumbnail-video">
					<video type="video/mp4" src="res/videos/video_4.mp4" class="post video" preload poster="res/poster_4.jpg"/>
				</div><br>
				<h5 class="title-video">UNRAVEL - Tokyo Ghoul | Metal Cover</h5>
			</div>
		</section>
	</div>
	<script>
		
		$(document).ready(function(){			
			$(".video").click(function(){
				var attr = $(this).attr("src");
				$("#view").attr("class", "view col-md-12 active");
				$("#view #videoView").attr("autoplay", "true");
				$("#view #videoView").attr("src", attr);

				$("html, body").animate({
					scrollTop: $("header").offset().top
				}, 1000);
			});
			
			$(".title-video").click(function(){
				var attr = $(this).attr("src");
				$("#view").attr("class", "view col-md-12 active");
				$("#view #videoView").attr("autoplay", "true");
				$("#view #videoView").attr("src", attr);

				$("html, body").animate({
					scrollTop: $("header").offset().top
				}, 1000);
			});
		});

	</script>