<!DOCTYPE html>
<html lang="ru" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Вход</title>
		<link href="http://localhost/css/datepicker.min.css" rel="stylesheet" type="text/css">
    <link href="http://localhost/css/timepicker.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
		<style>
		.bg{
			background-image: url(http://localhost/img/fone.jpg);
			background-size: 100%;
		}
		.welcome{
			width: 80%;
			height: 70%;
			background-color: #fff;
			position: absolute;
			top: 50%;
			left: 50%;
    	margin-right: -50%;
			transform: translate(-50%, -50%);
			text-align: center;
		}

		</style>
	</head>
	<body class="bg">
		<script src="https://code.jquery.com/jquery-3.4.1.min.js" ></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
		<script src="http://localhost/js/jquery-ui.js"></script>
		<script src="http://localhost/js/datepicker.min.js"></script>


		<nav class="navbar navbar-inverse" style="margin-bottom:20px">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">HACKGatchina</a>
				</div>
<!--
				<ul class="nav navbar-nav navbar-right">
					<li>
						<button class="btn btn-default navbar-btn"><a href="https://oauth.vk.com/authorize?client_id=<?php echo $id; ?>&display=popup&redirect_uri=<?php echo $url; ?>&response_type=code&v=5.95">
							<img src="http://localhost/img/vk.svg" width="20px" height="20px" alt="">
							 Войти
						 </a></button>
					 </li>
				</ul>
			-->
			</div>
		</nav>
		<div class="welcome modal-content">
		<h1>Гатчина - территория спорта</h1><br>
		<h3>На портале собираются команды для организованной игры в футбол, волейбол и баскетбол на доступных спортивных площадках Гатчины<br><br><br><br><br><br><br><br></h3>
		<button class="btn btn-default navbar-btn btn-lg"><a href="https://oauth.vk.com/authorize?client_id=<?php echo $id; ?>&display=popup&redirect_uri=<?php echo $url; ?>&response_type=code&v=5.95">
			<img src="http://localhost/img/vk.svg" width="20px" height="20px" alt="">
			 Хочу играть!
			 <img src="http://localhost/img/door.svg" width="20px" height="20px" alt="">
		 </a></button>
		</div>


	</body>
</html>
