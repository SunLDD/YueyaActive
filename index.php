<!DOCTYPE html>
<html>
<head>
	<title>剧场</title>
	<meta charset="utf-8" />
</head>
<body>
	<div class="mian">
		<video id="vedio" width="500" height="500" preload="preload" controls="controls" type="vedio/mp4">
			<source src="./static/vedio/test.mp4" type="video/mp4" />
		</video>
		<button id="play-pause">播放</button>
	</div>
	<script type="text/javascript">
		var vedio = document.getElementById('vedio'),
			playOrPauseBtn = document.getElementById("play-pause"),
			isPlay = false;
		/*
		 * vedio.duration 视频总长度..(毫秒)
		 * vedio.currentTime 当前播放时间
		 */
		function fnPlayOrPauser() {
			// console.log(this);
			console.log( vedio.timeupdate );
			if ( !isPlay ) {
				this.innerText = "暂停";
				fnPlay();
			}else{
				this.innerText = "播放";
				fnPause();
			}
			isPlay = !isPlay;
		}
		// 视频播放
		function fnPlay(){
			vedio.play();
		}
		// 视频暂停
		function fnPause(){
			vedio.pause();
		}
		// 视频播放结束
		function playOver() {
			// 当前时间结束
			if ( vedio.duration == vedio.currentTime ) {
				console.log( vedio.currentTime );
			};
		}
		(function(){
			if ( !!playOrPauseBtn.attachEvent ) {
				playOrPauseBtn.attachEvent("onclick", fnPlayOrPauser);
				playOrPauseBtn.attachEvent("timeupdate", playOver);
			}else{
				playOrPauseBtn.addEventListener("click", fnPlayOrPauser, false);
				vedio.addEventListener("timeupdate", playOver, false);
			}
		}());
		
	</script>
</body>
</html>