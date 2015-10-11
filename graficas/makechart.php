
<?php
    function makebarschart($querynom,$queryval,$title,$subtitle){
    	$server = "localhost";
    	$usuario = "root";
    	$pass = "root";
    	$db = "tienda";
    	$con =  mysql_connect($server,$usuario,$pass);
    	mysql_select_db($db);
    	if (!$con) {
    		die('No pudo conectarse: ' . mysql_error());
    	}
    	$result = mysql_query($querynom);
    	if (!$result) {
    		die('Error:'.mysql_error());
    	}
    	while ($fila = mysql_fetch_assoc($result)) {
    		$names[] = $row['name'];
    	}
    	$result = mysql_query($queryval);
    	if (!$result) {
    		die('Error:'.mysql_error());
    	}
    	while ($fila = mysql_fetch_assoc($result)) {
    		$values[] = $row['val'];
    	}
?>

 <style type="text/css">
            table{
                text-align: center;
                display:inline-block;
            }
        </style>
        <script type="text/javascript">

$(function () {
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: '<?php echo $title ?>'
        },
        subtitle: {
            text: '<?php echo $subtitle ?>'
        },
        xAxis: {
            categories: [
                <?php
                $result = mysql_query($querynom);
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
                text: 'Cantidad de Personas'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'hombre',
            data: [
            <?php
                $result = mysql_query($queryval);
                while ($fila = mysql_fetch_array($result, MYSQL_BOTH)) {?>
                    parseInt(<?php echo $fila['0']?>), 
                    <?php  
                }        
                mysql_free_result($result);
              ?>
             ] 

            

        }]
    });
});
        </script>
<div id="container" style="min-width: 100%; height: 100%; margin: 0 auto"></div>
<?php
    	mysql_close($con);
    }

?>