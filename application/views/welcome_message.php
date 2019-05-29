<!DOCTYPE html>
<html lang="ru" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Вход</title>
		<link href="http://localhost/css/datepicker.min.css" rel="stylesheet" type="text/css">
    <link href="http://localhost/css/timepicker.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
		<style>

		.welcome{
			background-color: #222;
			text-align: center;
		}

		.carousel-inner
		{
			text-align:center;
		}

		.forcar
		{
			margin-top: -9%;

		}

.carousel-caption
{
	top:40%;
}

.chit
{
	font-size:500%;
	font-family: "Times";
}
.chit1
{
		font-family: "Times";
}
		.carousel
		{
			max-width: 100%;
			max-height: 100%;
			margin:0 auto;
			z-index: 0;
			margin-top: 0px;
			text-align:center;

		}




html {
	overflow:  hidden;
	}


		</style>
	</head>
	<body class="bg">
		<script src="https://code.jquery.com/jquery-3.4.1.min.js" ></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
		<script src="http://localhost/js/jquery-ui.js"></script>
		<script src="http://localhost/js/datepicker.min.js"></script>


		<nav id="nav"class="navbar navbar-inverse" style="margin-bottom:0px">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">HACKGatchina</a>
				</div>
				<ul class="nav navbar-nav navbar-right">
					<li><a  class="btn btn-default navbar-btn btn-lg welcome" href="https://oauth.vk.com/authorize?client_id=<?php echo $id; ?>&display=popup&redirect_uri=<?php echo $url; ?>&response_type=code&v=5.95">
							<img src="http://localhost/img/vk.svg" width="20px" height="20px" alt="">
							 Хочу играть!
							 <img src="http://localhost/img/door.svg" width="20px" height="20px" alt="">
						 </a></li>
        </ul>
			</div>
		</nav>
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

			<div id="carousel" class="carousel slide" data-ride="carousel" >
		  <div class="carousel-inner">
		    <div class="item active">
					<div class="carousel-caption">
        	<h1 class="chit">Требуй от себя невозможного и получишь максимум<br></br> <br><h1 class="chit1">Дмитрий Вячеславович Клоков</h1></br></h1>
      		</div>
		      <img src="http://localhost/img/IMG_7955.JPG" alt="" class="forcar">
		    </div>
		    <div class="item">
					<div class="carousel-caption">
        	<h1 class="chit">Победит не тот, кто сильнее, а тот, кто готов идти до конца<br></br> <br><h1 class="chit1">Федор Емельяненко</h1></br></h1>
      		</div>
		      <img src="http://localhost/img/IMG_7956.JPG" alt="..." class="forcar">
		    </div>
		    <div class="item">
					<div class="carousel-caption">
        	<h1 class="chit">Сила зависит не от физических способностей, а от несгибаемой воли<br></br> <br><h1 class="chit1">Махатма Ганди</h1></br></h1>
      		</div>
		      <img src="http://localhost/img/IMG_7965.JPG" alt="..." class="forcar">
		    </div>
				<div class="item">
					<div class="carousel-caption">
        	<h1 class="chit">Спорт не воспитывает характер, а выявляет его<br></br> <br><h1 class="chit1">Хейвуд Браун</h1></br></h1>
      		</div>
		      <img src="http://localhost/img/IMG_7959.JPG" alt="..." class="forcar">
		    </div>
				<div class="item">
					<div class="carousel-caption">
      	<h1 class="chit">Секрет успеха – это верность своей цели<br></br> <br><h1 class="chit1">Бенджамин Дизраэли</h1></br></h1>
      		</div>
					<img src="http://localhost/img/IMG_7972.JPG" alt="..." class="forcar">
				</div>
				<div class="item">
					<div class="carousel-caption">
        	<h1 class="chit">Неважно, как медленно ты продвигаешься. Главное – ты не останавливаешься<br></br> <br><h1 class="chit1">Брюс Ли</h1></br></h1>
      		</div>
					<img src="http://localhost/img/IMG_7973.JPG" alt="..." class="forcar">
				</div>
		  </div>
			<a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Предыдущий</span>
  </a>
  <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Следующий</span>
  </a>
		</div>





	</body>
</html>
<script>
$(function () {
  $('#carousel').carousel({
    interval: 4000,
    pause: false,
    ride: 'carousel',
    wrap: true
  });
});
</script>
