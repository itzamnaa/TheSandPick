
<div id="container" height="100%" width="100%"></div>
<div class="hide" id="contador"></div>
<script type="text/javascript">
	$(function () {
    $(document).ready(function () {
        Highcharts.setOptions({
            global: {
                useUTC: false
            }
        });

        $('#container').highcharts({
            chart: {
                type: 'spline',
                animation: Highcharts.svg, // don't animate in old IE
                marginRight: 10,
                events: {
                    load: function () {

                        // set up the updating of the chart each second
                        var series = this.series[0];
                        setInterval(function () {
                            $.ajax({url: "scount.php", success: function(result){
                                $("#contador").html(result);
                            }});
                            var x = (new Date()).getTime(), // current time
                                y = parseFloat($('#count').val());
                                series.addPoint([x, y], true, true);
                        }, 3000);
                    }
                }
            },
            title: {
                text: 'Numero de Usuarios Activos'
            },
            xAxis: {
                type: 'datetime',
                tickPixelInterval: 150
            },
            yAxis: {
                title: {
                    text: 'Value'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                formatter: function () {
                    return '<b>' + this.series.name + '</b> ' +
                        Highcharts.dateFormat('', this.x) + '<br/>' +
                        Highcharts.numberFormat(this.y, 0);
                }
            },
            legend: {
                enabled: false
            },
            exporting: {
                enabled: false
            },
            series: [{
                name: 'Usuarios Conectados',
                data: (function () {
                    // generate an array of random data
                    var data = [],
                        time = (new Date()).getTime(),
                        i;
                    for (i = -19; i <= 0; i += 1) {
                        data.push({
                            x: time + i * 1000,
                            y: 1
                        });
                    }
                    return data;
                }())
            }]
        });
    });
});
</script>