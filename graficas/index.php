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
    <li class="active"><a id="g1" data-toggle="pill" href="#p1">Ventas Mensuales</a></li>
    <li><a id="g2" data-toggle="pill" href="#p2">Demanda de Cursos</a></li>
    <li><a id="g3" data-toggle="pill" href="#p3">Dinamica</a></li>
    <li><a id="g4" data-toggle="pill" href="#p4">Situacion Funanciera</a></li>
    <li><a id="g5" data-toggle="pill" href="#p5">Polar</a></li>
    <li><a id="g6" data-toggle="pill" href="#p6">Diponibilidad de Almance</a></li>
    <li><a id="g7" data-toggle="pill" href="#p7">Medidores</a></li>
    <li><a id="g8" data-toggle="pill" href="#p8">Pastel Anidado</a></li>
    <li><a id="g9" data-toggle="pill" href="#p9">Visitas a la Tienda</a></li>
    <li><a id="g10" data-toggle="pill" href="#p10">Relacion de Costos por Producto</a></li>
    <li><a id="g11" data-toggle="pill" href="#p11">Area</a></li>
  </ul>
  <div class="row">
  <p></p>
  <div class="jumbotron">
  <div id="result"></div>
  </div>
</div>
<div class="tab-content row">
    <div id="p1" class="tab-pane fade in active" >
      <div class="well well-sm">
        <p>1</p>
      </div>
    </div>
    <div id="p2" class="tab-pane fade" >
      <div class="well well-sm">
        <p>2</p>
      </div>
    </div>
    <div id="p3" class="tab-pane fade" >
      <div class="well well-sm">
        <p>3</p>
      </div>
    </div>
    <div id="p4" class="tab-pane fade" >
      <div class="well well-sm">
        <p>4</p>
      </div>
    </div>
    <div id="p5" class="tab-pane fade" >
      <div class="well well-sm">
        <p>5</p>
      </div>
    </div>
    <div id="p6" class="tab-pane fade" >
      <div class="well well-sm">
        <p>6</p>
      </div>
    </div>
    <div id="p7" class="tab-pane fade" >
      <div class="well well-sm">
        <p>7</p>
      </div>
    </div>
    <div id="p8" class="tab-pane fade" >
      <div class="well well-sm">
        <p>8</p>
      </div>
    </div>
    <div id="p9" class="tab-pane fade" >
      <div class="well well-sm">
        <p>9</p>
      </div>
    </div>
    <div id="p10" class="tab-pane fade" >
      <div class="well well-sm">
        <p>10</p>
      </div>
    </div>
    <div id="p11" class="tab-pane fade" >
      <div class="well well-sm">
        <p>11</p>
      </div>
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
        $('#g11').click(function(){
             $.ajax({url: "area.php", success: function(result){
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
