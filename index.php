<!DOCTYPE html>
<html>
<head>
	<title>剧场</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="static/css/style.css" />
	<script type="text/javascript" src="http://cdn.bootcss.com/jquery/1.12.1/jquery.js"></script>
</head>
<body>
	<div class="main">
		<div class="video-box">
			<video id="vedio" preload="preload" controls="controls" type="video/mp4">
				<source src="./static/video/test.mp4" type="video/mp4" />
			</video>
			<video id="vedio1" preload="preload" controls="controls" autoplay="autoplay" type="video/mp4">
				<source src="./static/video/test1.mp4" type="video/mp4" />
			</video>
			<video id="vedio2" preload="preload" controls="controls" autoplay="autoplay" type="video/mp4">
				<source src="./static/video/test2.mp4" type="video/mp4" />
			</video>
			<video id="vedio3" preload="preload" controls="controls" autoplay="autoplay" type="video/mp4">
				<source src="./static/video/test2.mp4" type="video/mp4" />
			</video>
			<video id="vedio4" preload="preload" controls="controls" autoplay="autoplay" type="video/mp4">
				<source src="./static/video/test1.mp4" type="video/mp4" />
			</video>
			<video id="vedio5" preload="preload" controls="controls" autoplay="autoplay" type="video/mp4">
				<source src="./static/video/test1.mp4" type="video/mp4" />
			</video>
			<video id="vedio6" preload="preload" controls="controls" autoplay="autoplay" type="video/mp4">
				<source src="./static/video/test2.mp4" type="video/mp4" />
			</video>
		</div>
		<!-- <button id="play-pause">播放</button> -->
		<div class="show-box hide">
			<div class="show-bg"></div>
			<div class="show-main">
				<h2>选择剧情发展</h2>
				<button class="btn1">剧情发展1</button>
				<button class="btn2">剧情发展2</button>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
			var video = $("video:eq(0)");
			video.bind('timeupdate', function() {
				var _this = $(this)[0];// 这里的0代表当前的视频 
				if ( ( _this.currentTime != 0 ) && (_this.duration == _this.currentTime) ){
					$(".show-box").fadeIn();
				}
			});
			//第一次选择
			$(".btn1").click(function(){
				$(".show-box").fadeOut();
				$("video").css("display","none");
				$("#vedio1").css("display","block");
			});
			var video = $("video:eq(1)");
			video.bind('timeupdate', function() {
				var _this = $(this)[0];// 这里的0代表当前的视频 
				if ( ( _this.currentTime != 1 ) && (_this.duration == _this.currentTime) ){
					$(".btn1").html("剧情发展3");
					$(".btn2").html("剧情发展4");
					$(".show-box").fadeIn();
				}
			});
			$(".btn2").click(function(){
				$(".show-box").fadeOut();
				$("video").css("display","none");
				$("#vedio2").css("display","block");
			});
			var video = $("video:eq(2)");
			video.bind('timeupdate', function() {
				var _this = $(this)[0];// 这里的0代表当前的视频 
				if ( ( _this.currentTime != 2 ) && (_this.duration == _this.currentTime) ){
					$(".btn1").html("剧情发展3");
					$(".btn2").html("剧情发展4");
					$(".show-box").fadeIn();
				}
			});
			//第二次选择
			$(".btn1").click(function(){
				$(".show-box").fadeOut();
				$("video").css("display","none");
				$("#vedio3").css("display","block");
			});
			var video = $("video:eq(3)");
			video.bind('timeupdate', function() {
				var _this = $(this)[0];// 这里的0代表当前的视频 
				if ( ( _this.currentTime != 3 ) && (_this.duration == _this.currentTime) ){
					$(".btn1").html("剧情发展5");
					$(".btn2").html("剧情发展6");
					$(".show-box").fadeIn();
				}
			});
			$(".btn2").click(function(){
				$(".show-box").fadeOut();
				$("video").css("display","none");
				$("#vedio4").css("display","block");
			});
			var video = $("video:eq(4)");
			video.bind('timeupdate', function() {
				var _this = $(this)[0];// 这里的0代表当前的视频 
				if ( ( _this.currentTime != 4 ) && (_this.duration == _this.currentTime) ){
					$(".btn1").html("剧情发展5");
					$(".btn2").html("剧情发展6");
					$(".show-box").fadeIn();
				}
			});
			//第三次选择
			$(".btn1").click(function(){
				$(".show-box").fadeOut();
				$("video").css("display","none");
				$("#vedio5").css("display","block");
			});
			var video = $("video:eq(5)");
			video.bind('timeupdate', function() {
				var _this = $(this)[0];// 这里的0代表当前的视频 
				if ( ( _this.currentTime != 5 ) && (_this.duration == _this.currentTime) ){
					$(".btn1").html("剧情发展7");
					$(".btn2").html("剧情发展8");
					$(".show-box").fadeIn();
				}
			});
			$(".btn2").click(function(){
				$(".show-box").fadeOut();
				$("video").css("display","none");
				$("#vedio6").css("display","block");
			});
			var video = $("video:eq(6)");
			video.bind('timeupdate', function() {
				var _this = $(this)[0];// 这里的0代表当前的视频 
				if ( ( _this.currentTime != 6 ) && (_this.duration == _this.currentTime) ){
					$(".btn1").html("剧情发展7");
					$(".btn2").html("剧情发展8");
					$(".show-box").fadeIn();
				}
			});
		});
		// });
		// var vedio = document.getElementById('vedio');
		// 	playOrPauseBtn = document.getElementById("play-pause");
		// 	isPlay = false;
		// /*
		//  * vedio.duration 视频总长度..(毫秒)
		//  * vedio.currentTime 当前播放时间
		//  */
		// function fnPlayOrPauser() {
		// 	// console.log(this);
		// 	if ( !isPlay ) {
		// 		this.innerText = "暂停";
		// 		fnPlay();
		// 	}else{
		// 		this.innerText = "播放";
		// 		fnPause();
		// 	}
		// 	isPlay = !isPlay;
		// }
		// // 视频播放
		// function fnPlay(){
		// 	vedio.play();
		// }
		// // 视频暂停
		// function fnPause(){
		// 	vedio.pause();
		// }
		// // 视频播放结束
		// function playOver() {
		// 	// 当前时间结束
		// 	if ( vedio.duration == vedio.currentTime ) {
		// 		console.log( vedio.currentTime );
		// 	};
		// }
		// (function(){
		// 	if ( !!playOrPauseBtn.attachEvent ) {
		// 		playOrPauseBtn.attachEvent("onclick"; fnPlayOrPauser);
		// 		playOrPauseBtn.attachEvent("timeupdate"; playOver);
		// 	}else{
		// 		playOrPauseBtn.addEventListener("click"; fnPlayOrPauser; false);
		// 		vedio.addEventListener("timeupdate"; playOver; false);
		// 	}
		// }());
	</script>
</body>
</html>