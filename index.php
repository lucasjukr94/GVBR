<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
body{
	font-family:Calibri;
	margin:0;
	padding:0;
}

.exterior{
	background-color:lightgray;
	width:100%;
	height:100%;
}

.content{
	width:80%;
	margin-left:10%;
}

.header{
	height:20vh;
	background-color:blue;
}

.body1{
	height:80vh;
	background-color:red;
}

.body2{
	height:100vh;
	background-color:pink;
}

.footer{
	height:30vh;
	background-color:black;
}

.up-button{
	position:fixed;
	width:50px;
	height:50px;
	bottom:50px;
	right:50px;
	background-color:purple;
}
</style>
</head>
<body>
	<div class="exterior">
		<div class="content">
			<div class="header">
			</div>
			<div class="body1">
			</div>
			<div class="body2">
			</div>
			<div class="footer">
			</div>
		</div>
		<div class="up-button">
			<a href="#" onclick="scrollup();return false;">Up</a>
		</div>
	</div>
</body>
<script>
function scrollup(){
	$("html, body").animate({ scrollTop: 0 }, "slow");
}
</script>
</html>