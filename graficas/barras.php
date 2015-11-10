<div id="container" height="100%" width="100%"></div>
<script type="text/javascript">
	$(function () {
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Productos en almacen'
        },
        subtitle: {
            text: 'Source: <a href="http://en.wikipedia.org/wiki/List_of_cities_proper_by_population">Wikipedia</a>'
        },
        xAxis: {
            type: 'category',
            labels: {
                rotation: -45,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Cantidad de Productos disponibles'
            }
        },
        legend: {
            enabled: false
        },
        tooltip: {
            pointFormat: 'Cantidad disponible: <b>{point.y} unidades</b>'
        },
        series: [{
            name: 'Population',
            data: [
                <?php
                $link = mysql_connect('localhost', 'root', 'root');
                mysql_select_db('tienda');
                $result = mysql_query('select name, quantity from products order by quantity desc');
             while ($fila = mysql_fetch_array($result, MYSQL_BOTH)) {?>
                ['<?php echo $fila[0]?>', parseInt('<?php echo $fila[1]?>')],
              <?php  
               }        
               mysql_free_result($result);
               mysql_close($link);
              ?>  
            ],
           
        }]
    });
});
</script>