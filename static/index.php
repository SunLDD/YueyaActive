<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>shanyu.Z</title>
</head>
<body>
	<h3>404.  \(^o^)/~	</h3>
	<h4>倒计时 <b style="color:red;" id="timeOut">5</b> 秒跳转到首页</h4>
	<script type="text/javascript">
	/*
	 * 时间倒计时
	 * TODO。是否可以更高效的方法代替
	 */
		var timeOut = document.getElementById('timeOut'),// 当前的时间的id
			locTime = timeOut.innerText;

		var locIndex = window.location.href.indexOf("shanyu.Z"),
			locHref = window.location.href.substr(0, locIndex+8);

		var time = function(){
			locTime--;
			if ( locTime < 0 ) {
				clearInterval(time);
				window.location = locHref;
			}else{
				timeOut.innerHTML = locTime;
			}
		};
		setInterval(time, 1000);
	</script>
</body>
</html>