<div id="container" height="100%" width="100%"></div>
<?php  
        $query="select name from products";
        $server = "localhost";
        $usuario = "root";
        $pass = "root";
        $db = "tienda";
        $con =  mysql_connect($server,$usuario,$pass);
        mysql_select_db($db);
        if (!$con) {
            die('No pudo conectarse: ' . mysql_error());
        }
        $result = mysql_query($query);
        if (!$result) {
            die('Error:'.mysql_error());
        }
?>


<script type="text/javascript">
	$(function () {
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Relacion de Costo por Productos'
        },
        xAxis: {
            categories: [
                <?php
                $result = mysql_query('select name from products');
                while ($fila = mysql_fetch_array($result, MYSQL_BOTH)) {?>
                    '<?php echo $fila['0']?>', 
                    <?php  
                }        
                mysql_free_result($result);
              ?>
            ]
        },
        yAxis: {
            min: 0,
            title: {
                text: '% de Costo'
            }
        },
        tooltip: {
            pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
            shared: true
        },
        plotOptions: {
            column: {
                stacking: 'percent'
            }
        },
        series: [{
            name: 'Envio',
            data: [ <?php
                $result = mysql_query('select name from products');
                while ($fila = mysql_fetch_array($result, MYSQL_BOTH)) {?>
                    parseInt(<?php echo '500'?>), 
                    <?php  
                }        
                mysql_free_result($result);
              ?>
             ] 
        },{
            name: 'Compra',
            data: 
           [ <?php
                $result = mysql_query('select price_1 from products');
                while ($fila = mysql_fetch_array($result, MYSQL_BOTH)) {?>
                    parseInt(<?php echo $fila['0']?>), 
                    <?php  
                }        
                mysql_free_result($result);
              ?>
             ] 
        }, {
            name: 'Venta',
            data: [ <?php
                $result = mysql_query('select saleprice_1 from products');
                while ($fila = mysql_fetch_array($result, MYSQL_BOTH)) {?>
                    parseInt(<?php echo $fila['0']?>), 
                    <?php  
                }        
                mysql_free_result($result);
    			mysql_close($con);
              ?>
             ] 
        }]
    });
});
</script>