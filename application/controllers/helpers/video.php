<?php

 class Zend_Controller_Action_Helper_Video extends Zend_Controller_Action_Helper_Abstract{
 	function __invoke(){
 		$html = '
			<article class="container-video">
				<div class="parallax-info">
					<div class="p-video-title">Show <span><img src="img/video-ico.png" alt="img"></span> Reel</div>
				</div>
				<div class="mk-video-mask"></div>
 				
				<!--<div class="video-container">
					<iframe width="auto" height="auto" src="//www.youtube.com/embed/tDvBwPzJ7dY?autoplay=1&loop=1&controls=0&start=31&enablejsapi=1" frameborder="0" allowfullscreen></iframe>
				</div>-->
 				
				<!-- 1. The <div> tag will contain the <iframe> (and video player) -->
				<div class="video-container"><div id="player"></div></div>
				<script>      // 2. This code loads the IFrame Player API code asynchronously.
					var tag = document.createElement("script");
					tag.src = "http://www.youtube.com/player_api";
					var firstScriptTag = document.getElementsByTagName("script")[0];
					firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
	
					// 3. This function creates an <iframe> (and YouTube player)
					//    after the API code downloads.
					var player;
					function onYouTubePlayerAPIReady() {
						player = new YT.Player("player", {
							height: "100%",
							width: "100%",			
							playerVars: { "rel":0 , "autoplay": 1, "loop":1, "controls":0, "start":30, "autohide":1,"wmode":"opaque" },
							videoId: "tDvBwPzJ7dY",
							events: {
								"onReady": onPlayerReady,
								"onStateChange": onPlayerStateChange}
						});
				}
	
					// 4. The API will call this function when the video player is ready.
					function onPlayerReady(event) {
						event.target.mute();
						//		event.target.setSize(width:100, height:750);
					}
					// when video ends
					function onPlayerStateChange(event) {        
						if(event.data === 0) {          
							event.target.playVideo();
						}
					}
				</script>
        </article>';
		return $html;
	}
	

}

?>