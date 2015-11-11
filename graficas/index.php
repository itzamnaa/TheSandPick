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
  <script src="https://code.highcharts.com/modules/heatmap.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
</head>
<body>

<div class="container">
<p></p>
  <ul class="nav nav-pills centered">
    <li class="active"><a id="g1" data-toggle="pill" href="#p1"><span class="glyphicon glyphicon-usd"></span> Ventas</a></li>
    <li><a id="g2" data-toggle="pill" href="#p2"><span class="glyphicon glyphicon-signal"></span> Demanda</a></li>
    <li><a id="g4" data-toggle="pill" href="#p4"><span class="glyphicon glyphicon-check"></span> Finanzas</a></li>
    <li class="hide"><a id="g5" data-toggle="pill" href="#p5">Polar</a></li>
    <li><a id="g6" data-toggle="pill" href="#p6"><span class="glyphicon glyphicon-list-alt"></span> Almacén</a></li>
    <li class="hide"><a id="g7" data-toggle="pill" href="#p7">Medidores</a></li>
    <li class="hide"><a id="g8" data-toggle="pill" href="#p8">Pastel Anidado</a></li>
    <li><a id="g9" data-toggle="pill" href="#p9"><span class="glyphicon glyphicon-eye-open"></span> Visitas</a></li>
    <li><a id="g10" data-toggle="pill" href="#p10"><span class="glyphicon glyphicon-warning-sign"></span> Costos</a></li>
    <li class="hide"><a id="g11" data-toggle="pill" href="#p11">Area</a></li>
    <li><a id="g12" data-toggle="pill" href="#p12"><span class="glyphicon glyphicon-education"></span> Cursos</a></li>
    <li class="hide"><a id="g13" data-toggle="pill" href="#p13">Estado del Servidor</a></li>
    <li><a id="g3" data-toggle="pill" href="#p3"><span class="glyphicon glyphicon-user"></span> Actividad</a></li>
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
        <p>
          Esta grafica representa el comportamiento de las ventas durante los distintos meses del año, al mismo tiempo que compara este comportamiento con las ventas de los años anteriores
        </p>
      </div>
    </div>
    <div id="p2" class="tab-pane fade" >
      <div class="well well-sm">
        <p>
          Esta grafica representa la demanda que tienen los cursos en porcentaje, si un curso no aparece en esta grafica es porque este curso no tiene demanda
        </p>
      </div>
    </div>
    <div id="p3" class="tab-pane fade" >
      <div class="well well-sm">
        <p>
          Pequeño historial que cuenta las personas actualmente activas en la tienda online
        </p>
      </div>
    </div>
    <div id="p4" class="tab-pane fade" >
      <div class="well well-sm">
        <p>
          Esta grafica representa un resumen mensual y anual de la situación financiera de la empresa, compara el objetivo planteado o deseado del mes con las ventas reales. La grafica circular realiza una comparación simple de ganancias contra gastos de todo el año
        </p>
      </div>
    </div>
    <div id="p5" class="tab-pane fade" >
      <div class="well well-sm">
        <p>5</p>
      </div>
    </div>
    <div id="p6" class="tab-pane fade" >
      <div class="well well-sm">
        <p>
          Esta grafica lista los productos respecto a la cantidad de unidades disponibles en almacén, los últimos de la lista son los que tienen menos existencia, mientras que los primeros son los que se cuenta con una buena cantidad de existencias
        </p>
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
        <p>
          Esta grafica representa el trafico que tiene el sitio web, contabiliza por día cuantas visitas se tuvieron, puedes seleccionar un área en la grafica para ver mas claramente
        </p>
      </div>
    </div>
    <div id="p10" class="tab-pane fade" >
      <div class="well well-sm">
        <p>En esta grafica se representa en porcentaje, la ganancia que se tiene por producto, tomando en cuenta  los costos del producto y los gastos de envió</p>
        <ul class="list-group">
          <li class="list-group-item">
            <span class="badge">Envio</span>
            Representan los gastos generados por el envió
          </li>
          <li class="list-group-item">
            <span class="badge">Compra</span>
            Representa el costo del producto (lo que tu le pagaste a tu proveedor)
          </li>
          <li class="list-group-item">
            <span class="badge">Venta</span>
            Representa la ganancia que tienes del producto (Precio al que vendes el producto)
          </li>
        </ul>
      </div>
    </div>
    <div id="p11" class="tab-pane fade" >
      <div class="well well-sm">
        <p>11</p>
      </div>
    </div>
    <div id="p12" class="tab-pane fade" >
      <div class="well well-sm">
        <p>
          En este cuadro se representa la carga de alumnos que tienen los cursos respecto a los días de la semana
        </p>
        <p>La siguiente tabla representa que curso corresponde a cada código.</p>
        <table class="table table-striped">
          <th>Codigo</th><th>Valor</th>
          <tr><td>CGB</td><td>Curso de Guitarra Básico</td></tr>
          <tr><td>CGI</td><td>Curso de Guitarra Intermedio</td></tr>
          <tr><td>CGA</td><td>Curso de Guitarra Avanzado</td></tr>
          <tr><td>CVB</td><td>Curso de Violin Básico</td></tr>
          <tr><td>CVI</td><td>Curso de Violin Intermedio</td></tr>
          <tr><td>CVA</td><td>Curso de Violin Avanzado</td></tr>
          <tr><td>CPB</td><td>Curso de Piano Básico</td></tr>
          <tr><td>CPI</td><td>Curso de Piano Intermedio</td></tr>
          <tr><td>CPA</td><td>Curso de Piano Avanzado</td></tr>
          <tr><td>CBB</td><td>Curso de Bateria Basico</td></tr>
        </table>
      </div>
    </div>
    <div id="p13" class="tab-pane fade" >
      <div class="well well-sm">
        <p>12</p>
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
        $('#g12').click(function(){
             $.ajax({url: "cuadro.php", success: function(result){
                $("#result").html(result);
            }});
        });
        $('#g13').click(function(){
             $.ajax({url: "serverstatus.php", success: function(result){
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
