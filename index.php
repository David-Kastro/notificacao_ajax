<!DOCTYPE html>
<html>
<head>
	<title>Notification!</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">

		.notification{
			color: white;
			font-weight: bolder;
			font-size: 12px;
			width:18px;
			height: 18px;
			border-radius: 9px;
			background-color: red;
			line-height: 18px;
			text-align: center;
			z-index: 999;
			display: none;
			position: absolute;
			top: 0;
			right: 0;
		}

	</style>
</head>
<body>

<div class="bell" style="display: inline-block;position: relative;">
 	<i class="fa fa-bell-o" style="font-size: 48px;"></i>
 	<div class="notification">0</div>
</div>

<script type="text/javascript" src="jquery-3.3.1.min.js" ></script>
<script type="text/javascript" src="script.js" ></script>
</body>
</html>