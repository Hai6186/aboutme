<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<style type="text/css">  * { font-family:"標楷體"; margin-left:auto; margin-right:auto;}  h1 {color:blue; font-size:60px;}  h2 {color:#33ff33; font-size:40px;}  </style>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		吳升宏簡介
	</title>
	<script>

function change1() {

document.getElementById("pic").src = "mountain.jpg";

document.getElementById("h2text").innerText = "靜宜資管";
document.getElementById("h").innerText = "吳升宏";

}

function change2() {

document.getElementById("pic").src = "cliff.jpg";

document.getElementById("h2text").innerText = "Wu Shenghong";
document.getElementById("h").innerText = "Hello! My name is";

}

</script>
</head>
<body>
	<table width="80%">
		<tr>
			<td>
			<img src="cliff.jpg"width="110%" id="pic"
			onmouseover="change1()" onmouseout="change2()">
			</img>
			</td>
			<td>
			<h1 id="h">吳升宏</h1>
    		<h2 id="h2text">Wu Shenghong</h2>
			</td>
		</tr>
	</table>
	<table width="80%"border="1">
    <tr>
		<td>
		個人網頁：<a href="file:///C:/Users/student/Desktop/666.html">file:///C:/Users/student/Desktop/666.html</a><br>
		FB：<a href="https://www.facebook.com/">https://www.facebook.com/</a><br>
   		Tel:<a href:="tel:04-26328001,18110">04-26328001,18110</a><br>
   		E-Mail: <a href="n0909123696@gmail.com">n0909123696@gmail.com</a><br>
		</td>

		<td>
			大象席地而坐電影配樂<br>
			<audio controls>
				<source src="elephant.mp3" type="audio/mP3">
			</audio><br>
		</td>

		<td>
			不要去臺灣<br>
			<iframe src="https://www.youtube.com/embed/pW88QFpHXa8" allowfullscreen></iframe>
		</td>
		<td>
			<iframe
    		allow="microphone;"
    		width="350"
    		height="430"
    		src="https://console.dialogflow.com/api-client/demo/embedded/e6199877-005a-4602-bd4f-1058819a98f0">
			</iframe>
		</td>
	</tr>
		<?php echo date("Y-m-d") ?>
	</body>
	</html>