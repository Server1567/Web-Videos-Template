//
//	Acá se desarrollará todo el Código del reproductor,
//	Y También de las Animaciones,
//	Name: Play.JS
//

(function(window, document){

	// Declaración de variables que se utilizarán a lo largo del reproductor

	var video = document.getElementsByTagName('video')[0];
	var videoControls = document.getElementById('videosControls');
	var play = document.getElementById('play');
	var progressContainer = document.getElementById('progress');
	var progressHolder = document.getElementById('play_progress');
	var fullScreenToggleButton = document.getElementById('fullScreen');
	var isVideoFullScreen = false;

	// Acá se crea el Reproductor
	var videoPlayer = {
		init: function() {
			// this is equal to the videoPlayer object.
			var that = this;
			// Helpful CSS trigger for JS.
			document.documentElement.className = 'js';
			// Get rid of the default controls, because we'll use our own.
			video.removeAttribute('controls');
			// Then meta data is ready, show the controls.
			video.addEventListener('loadeddata', this.initializeControls, false);
			// When play, pause buttons are pressed.
			this.handleButtonPresses();
			// When the full screen button is pressed...
			fullScreenToggleButton.addEventListener('click', function(){
				isVideoFullScreen ? that.fullScreenOff(): that.fullScreenOn();
			}, true);
		},
		initializeControls: fucntion(){
			// When all meta information has loaded, show controls
			videoPlayer.showHideControls();
		},
		showHideControls: function(){
			// Shows and hides the video player.
			video.addEventListener('mouseover', function(){
				videoControls.style.opacity = 1;
			}, false);

			videoControls.addEventListener('mouseover', function(){
				videoControls.style.opacity = 1;
			}, false);

			video.addEventListener('mouseout', function(){
				videoControls.style.opacity = 0;
			}, false);

			videoControls.addEventListener('mouseout', function(){
				videoControls.style.opacity = 0;
			}, false);
		},
		handleButtonPresses: function(){
			// Then the video or play button is clicked, play/pause the video.
			video.addEventListener('click', this.playPause, false);
			play.addEventListener('click', this.playPause, false);
			// When the play button is pressed.
			// switch to the "Pause" symbol.
			video.addEventListener('play', function(){
				play.title = "Pause";
				play.innerHTML = '<span id="pauseButton">&#x2590;&#x2590;</span>';
				// Begin tracking video's progress.
				videoPlayer.trackPlayProgress();
			}, false);
			// When the pause button is pressed,
			// switch the "Play" symbol.
			video.addEventListener('pause', function(){
				play.title = "Play";
				play.innerHTML = '&#x25BA;';
				// Video was paused, stop tracking progress.
				videoPlayer.stopTrackingPlayProgress();
			}, false);
			// When the video has concluded, pause it.
			video.addEventListener('ended', function(){
				this.currentTime = 0;
				this.pause();
			}, false);
		},
		playPause: function(){
			if(video.paused || video.ended){
				if(video.ended){
					video.currentTime = 0;
				}
				video.play();
			}
			else {
				video.pause();
			}
		},
		fullScreenOn: function(){
			isVideoFullScreen = true;
			// Set new width according to window width
			video.style.cssText = 'position: fixed; width:'  + window.innerWidth +  'px; height:'  + window.innerHeight +  'px;';
			// Apply a classname to the video and controls, if the designer needs it...
			video.className = 'fullsizeVideo';
			videoControls.className = 'fs-control';
			fullScreenToggleButton.className = 'fs-active control';
			// Listen for escape key. If pressed, close fullscreen.
			document.addEventListener('keydown', this.checkKeyCode, false);
		},
		fullScreenOff: function(){
			isVideoFullScreen = false;
			video.style.position = 'static';
			video.className = '';
			fullScreenToggleButton.className = 'control';
			videoControls.className = '';
		},
		// Determines if the escape key was pressed.
		checkKeyCode: function(e){
			e = e || window.event;
			if((e.keyCode || e.which) === 27){
				videoPlayer.fullScreenOff();
			}
		},
		// Every 50 milliseconds, update the play progress.
		trackPlayProgress: function(){
			(function progressTrack(){
				videoPlayer.updatePlayProgress();
				playProgressInterval = setTimeout(progressTrack, 50);
			})();
		},
		updatePlayProgress: function(){
			playProgressBar.style.width = ((video.currentTime / video.duration) * (progressHolder.offsetWidth)) + "px";
		},
		// Video was stoped, so stop updating progress.
		stopTrackingPlayProgress: function(){
			clearTimeout(playProgressInterval);
		},
		videoScrubbing: function(){
			progressHolder.addEventListener('mousedown', function(){
				videoPlayer.stopTrackingPlayProgress();
				videoPlayer.playPause();
				document.onmousemove = function(e){
					videoPlayer.setPlayProgress(e.pageX);
				};
				progressHolder.onmouseup = function(e){
					document.onmouseup = null;
					document.onmousemove = null;
					video.play();
					videoPlayer.setPlayProgress(e.pageX);
					videoPlayer.trackPlayProgress();
				};
			}, true);
		},
		setPlayProgress: function(clickX){
			var newPercent = Math.max(0, Math.min(1 (clickX - this.findPosX(progressHolder)) / progressHolder.offsetWidth));
			video.currentTime = newPercent * video.duration;
			playProgressBar.style.width = newPercent * (progressHolder.offsetWidth) + "px";
		},
		findPosX: function(progressHolder){
			var curleft = progressHolder.offsetParent;
			while(progressHolder = progressHolder.offsetParent){
				curleft += progressHolder.offsetLeft;
			}
			return curleft;
		}
	};

	videoPlayer.init();

}(this, document))