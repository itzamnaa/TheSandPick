<div id="container" height="100%" width="100%"></div>
<script type="text/javascript">
	$(function () {
    $('#container').highcharts({
            chart: {
                zoomType: 'x'
            },
            title: {
                text: 'Visitas a La pagina'
            },
            subtitle: {
                text: document.ontouchstart === undefined ?
                        'Has Click y arrastra el cursor para seleccionar una zona' : 'Da click para hacer zoom'
            },
            xAxis: {
                type: 'datetime'
            },
            yAxis: {
                title: {
                    text: 'Exchange rate'
                }
            },
            legend: {
                enabled: false
            },
            plotOptions: {
                area: {
                    fillColor: {
                        linearGradient: {
                            x1: 0,
                            y1: 0,
                            x2: 0,
                            y2: 1
                        },
                        stops: [
                            [0, Highcharts.getOptions().colors[0]],
                            [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
                        ]
                    },
                    marker: {
                        radius: 2
                    },
                    lineWidth: 1,
                    states: {
                        hover: {
                            lineWidth: 1
                        }
                    },
                    threshold: null
                }
            },

            series: [{
                type: 'area',
                name: 'Visitas',
                data: 
                <?php
                    $query="select concat ('Date.UTC(',year(time),',',month(time),',',day(time),'),',count(*)) from visit group by date(time)";
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
                            $rows = array();
                            while($r = mysql_fetch_array($result)) 
                                {
                                    $row[0] = $r[0];
                                    array_push($rows,$row);
                                }
                        //print json_encode($rows, JSON_PRETTY_PRINT);
                        $str = json_encode($rows, JSON_NUMERIC_CHECK); 
                        $str = str_replace('"', "",$str);
                        echo $str;
                        mysql_free_result($result);
                        mysql_close($con);
?>
            }]
        });
});
</script>