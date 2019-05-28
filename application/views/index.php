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
    .lll{
      color:#9d9d9d;
    }
    </style>


    <nav class="navbar navbar-inverse" style="margin-bottom:0px">
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
          <li style="margin-top: 2%">


              <input value="08.05.2019" type="text" style="width:150px" class="datepicker-here"/>   <span class="glyphicon glyphicon-calendar lll"></span>

          </li>
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


<div id="map" style="width: 100%; height: 915px; background: grey" />

<div id="myModal" class="modal fade">
</div>
  <script  type="text/javascript" charset="UTF-8" >



  var even = [];

  var i = 0;
/**
 * Creates a new marker and adds it to a group
 * @param {H.map.Group} group       The group holding the new marker
 * @param {H.geo.Point} coordinate  The location of the marker
 * @param {String} html             Data associated with the marker
 */

function addMarkerToGroup(group, coordinate, html, t1, t2, t3) {
  var marker = new H.map.Marker(coordinate);
  // add custom data to the marker
  marker.setData(t3);
  group.addObject(marker);
  even[i]=[];
  even[i][0]=t1;
  even[i][1]=t2;
  even[i][2]=t3;
  // even[i][3]=t4;
  // even[i][4]=t5;
  // even[i][5]=t6;
  // even[i][6]=t7;
  // even[i][7]=t8;
  // even[i][8]=t9;
  i=i+1;
}

/**
 * Add two markers showing the position of Liverpool and Manchester City football clubs.
 * Clicking on a marker opens an infobubble which holds HTML content related to the marker.
 * @param  {H.Map} map      A HERE Map instance within the application
 */
function addInfoBubble(map) {
  var group = new H.map.Group();

  map.addObject(group);

  // add 'tap' event listener, that opens info bubble, to the group
  group.addEventListener('tap', function (evt) {
    var b=$('.datepicker-here').val();
    b=b.split('.');
    b=b[2]+'-'+b[1]+'-'+b[0];

    $.ajax({

    url: "/index.php/app/get_info?id_pl="+evt.target.getData()+"&date="+b,
    success: function(e){
      $('.modal').html(e);
       $("#myModal").modal('show');

    }
  });
    // event target is the marker itself, group is a parent event target
    // for all objects that it contains
    // var bubble =  new H.ui.InfoBubble(evt.target.getPosition(), {
    //   // read custom data
    //   content: evt.target.getData()
    // });
    // show info bubble
    //ui.addBubble(bubble);
  }, false);

  //addMarkerToGroup(group, {lat: 59.570157813864654, lng: 30.127258300781254}, 'леня чепух');
  <?php foreach ($event as $key => $value): ?>
    addMarkerToGroup(group, {lat: <?php echo $value->point2?>, lng: <?php echo $value->point1?>}, '<div class="jj"></div>',` <?php echo $value->name?>`,` <?php echo $value->category?>`,` <?php echo $value->id_pl?>` );
  <?php endforeach; ?>


}



/**
 * Boilerplate map initialization code starts below:
 */

// initialize communication with the platform
var platform = new H.service.Platform({
  app_id: 'devportal-demo-20180625',
  app_code: '9v2BkviRwi9Ot26kp2IysQ',
  useHTTPS: true
});

var pixelRatio = window.devicePixelRatio || 1;
var defaultLayers = platform.createDefaultLayers({
  tileSize: pixelRatio === 1 ? 256 : 512,
  ppi: pixelRatio === 1 ? undefined : 320
});

// initialize a map - this map is centered over Europe
var map = new H.Map(document.getElementById('map'),
  defaultLayers.normal.map,{
  center: {lat: 59.570157813864654, lng: 30.127258300781254},
  zoom: 13,
  pixelRatio: pixelRatio
});

// MapEvents enables the event system
// Behavior implements default interactions for pan/zoom (also on mobile touch environments)
var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));


// create default UI with layers provided by the platform
var ui = H.ui.UI.createDefault(map, defaultLayers);

// Now use the map as required...
addInfoBubble(map);


  </script>

  </body>
</html>
