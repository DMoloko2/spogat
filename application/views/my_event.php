<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HackGatchind</title>
    <link href="http://localhost/css/datepicker.min.css" rel="stylesheet" type="text/css">
    <link href="http://localhost/css/timepicker.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.0/mapsjs-ui.css?dp-version=1549984893" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
  </head>
  <body>


    <script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-core.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-service.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-ui.js"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-mapevents.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <script src="http://localhost/js/jquery-ui.js"></script>
    <script src="http://localhost/js/datepicker.min.js"></script>

    <style type="text/css">
    .log {
      position: absolute;
      top: 5px;
      left: 5px;
      height: 150px;
      width: 250px;
      overflow: scroll;
      background: white;
      margin: 0;
      padding: 0;
      list-style: none;
      font-size: 12px;
    }
    .log-entry {
      padding: 5px;
      border-bottom: 1px solid #d0d9e9;
    }
    .log-entry:nth-child(odd) {
        background-color: #e1e7f1;
    }
    .jj{
      width: 50px;
      height: 50px;
      background-color: #fff
    }
    </style>


    <nav class="navbar navbar-inverse" style="margin-bottom:20px">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="/index.php/app">HACKGatchina</a>
        </div>
        <ul class="nav navbar-nav">
          <!-- <li class="active"><a href="#">Home</a></li> -->
          <li><a href="/index.php/app/filter?cat=Футбол" class="foot_but">
            <img src="http://localhost/img/football.svg" width="20px" height="20px" alt="">
            Футбол
          </a></li>
          <li><a href="/index.php/app/filter?cat=Волейбол" class="vol_but">
            <img src="http://localhost/img/voleyball.svg" width="20px" height="20px" alt="">
            Волейбол
          </a></li>
          <li><a href="/index.php/app/filter?cat=Баскетбол" class="basket_but">
            <img src="http://localhost/img/basketball.svg" width="20px" height="20px" alt="">
            Баскетбол
          </a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">

          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo " "; echo $first_name; echo " "; echo $last_name; ?><span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="http://localhost/index.php/app/my_event">Мои события</a></li>
            </ul>
          </li>
          <li><a href="http://localhost/index.php/welcome" class = "logout"><span class="glyphicon glyphicon-log-in"></span> Выйти</a></li>
        </ul>
      </div>
    </nav>

<?php

echo "<table class='table'>";
echo "<tbody class='data'>";
echo "<thead>";
echo "<tr><b>";
echo "<td>Название</td>";
echo "<td>Время</td>";
echo "<td>Команда</td>";
echo "<td>Отказаться</td>";
echo "</b></tr>";
echo "</thead>";
foreach ($dataevent as $key => $value) {
  echo "<tr>";
  echo "<td>".$value->header."</td>";
  $temp=$value->time_begin+1;
  echo "<td>".$value->time_begin.' - '.$temp."</td>";
  echo "<td>".$value->count_people.' / '.$value->max_people."</td>";
  echo "<td><a href='http://localhost/index.php/app/deleteEvent?id_event=".$value->id_event."' class='btn btn-danger' id='".$value->id_event."'>Выйти</button></td>";
  echo "</tr>";
}
echo "</tbody>";
echo "</table>";
?>

</body>
    </html>
