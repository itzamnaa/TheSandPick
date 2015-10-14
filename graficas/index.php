<!DOCTYPE html>
<html lang="en">
<head>
  <title>Reportes Graficos</title>
  <meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link href="https://bootswatch.com/readable/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="http://code.highcharts.com/highcharts.js"></script>
  <script src="http://code.highcharts.com/modules/exporting.js"></script> 
  <script src="http://code.highcharts.com/maps/highmaps.js"></script>
  <script src="http://code.highcharts.com/maps/modules/data.js"></script>
  <script src="http://code.highcharts.com/mapdata/custom/world.js"></script>
  <script src="http://code.highcharts.com/highcharts-more.js"></script>
  <script src="http://code.highcharts.com/modules/solid-gauge.js"></script>
  <script src="http://code.highcharts.com/modules/data.js"></script>
  <script src="http://code.highcharts.com/modules/drilldown.js"></script>
</head>
<body>

<div class="container">
<p></p>
  <ul class="nav nav-pills">
    <li class="active"><a id="g1" data-toggle="pill" href="#home">Lineas</a></li>
    <li><a id="g2" data-toggle="pill" href="#menu1">Pastel</a></li>
    <li><a id="g3" data-toggle="pill" href="#menu2">Dinamica</a></li>
    <li><a id="g4" data-toggle="pill" href="#menu3">Varias</a></li>
    <li><a id="g5" data-toggle="pill" href="#menu3">Polar</a></li>
    <li><a id="g6" data-toggle="pill" href="#menu3">Barras</a></li>
    <li><a id="g7" data-toggle="pill" href="#menu3">Medidores</a></li>
    <li><a id="g8" data-toggle="pill" href="#menu3">Pastel Anidado</a></li>
    <li><a id="g9" data-toggle="pill" href="#menu3">Detallada</a></li>
    <li><a id="g10" data-toggle="pill" href="#menu3">Barra Doble</a></li>
  </ul>
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active" ></div>
    <div id="menu1" class="tab-pane fade"></div>
    <div id="menu2" class="tab-pane fade" ></div>
    <div id="menu3" class="tab-pane fade" ></div>
  </div>
  <div class="row">
  <p></p>
  <div class="jumbotron">
  <div id="result"></div>
  </div>
</div>
</div>
</body>
<script type="text/javascript">
    $(function () {
         $.ajax({url: "lineas.php", success: function(result){
                $("#result").html(result);
            }});
        $('#g1').click(function(){
             $.ajax({url: "lineas.php", success: function(result){
                $("#result").html(result);
            }});
        });
        $('#g2').click(function(){
             $.ajax({url: "pastel.php", success: function(result){
                $("#result").html(result);
            }});
        });
        $('#g3').click(function(){
             $.ajax({url: "dinamica.php", success: function(result){
                $("#result").html(result);
            }});
        });
        $('#g4').click(function(){
             $.ajax({url: "varias.php", success: function(result){
                $("#result").html(result);
            }});
        });
        $('#g5').click(function(){
             $.ajax({url: "polar.php", success: function(result){
                $("#result").html(result);
            }});
        });
        $('#g6').click(function(){
             $.ajax({url: "barras.php", success: function(result){
                $("#result").html(result);
            }});
        });
        $('#g7').click(function(){
             $.ajax({url: "medidores.php", success: function(result){
                $("#result").html(result);
            }});
        });
        $('#g8').click(function(){
             $.ajax({url: "pastel2.php", success: function(result){
                $("#result").html(result);
            }});
        });
        $('#g9').click(function(){
             $.ajax({url: "detallada.php", success: function(result){
                $("#result").html(result);
            }});
        });
        $('#g10').click(function(){
             $.ajax({url: "barrasdoble.php", success: function(result){
                $("#result").html(result);
            }});
        });
    });
</script>
<style type="text/css">
    #result{
        border-radius: 15%;
    }
</style>
</html>
