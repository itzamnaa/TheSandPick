
<div id="container" height="100%" width="100%"></div>
<script type="text/javascript">
	$(function () {
    $('#container').highcharts({
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false
        },
        title: {
            text: 'Demanda de Cursos'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Porcentaje de Demanda',
            data:
            [
            <?php
                $link = mysql_connect('localhost', 'root', 'root');
                mysql_select_db('tienda');
                $result = mysql_query('select products.name,count(order_items.quantity) from products, order_items where order_items.product_id=products.id and products.primary_category=1 group by name;');
             while ($fila = mysql_fetch_array($result, MYSQL_BOTH)) {?>
                ['<?php echo $fila[0]?>', parseInt('<?php echo $fila[1]?>')],
              <?php  
               }        
               mysql_free_result($result);
               mysql_close($link);
              ?>  
            ]
        }]
    });
});
</script>