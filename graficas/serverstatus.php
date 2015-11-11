
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
                        var series2 = this.series[1];
                        var series3 = this.series[2];
                        setInterval(function () {
                            var x = (new Date()).getTime(), // current time
                                y = Math.random(),
                                hd=.22,
                                ram=Math.random();
                                series.addPoint([x, y], true, true);
                                series2.addPoint([x, hd], true, true);
                                series3.addPoint([x,ram], true, true);
                        }, 5000);
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
                    return '' + this.series.name + ' <b>' +
                        (Highcharts.numberFormat(this.y, 2)*100)+'%</b>';
                }
            },
            legend: {
                enabled: false
            },
            exporting: {
                enabled: false
            },
            series: [{
                name: 'CPU',
                data: (function () {
                    // generate an array of random data
                    var data = [],
                        time = (new Date()).getTime(),
                        i;
                    for (i = -19; i <= 0; i += 1) {
                        data.push({
                            x: time + i * 1000,
                            y: null
                        });
                    }
                    return data;
                }())
            },{
                name: 'HD',
                data: (function () {
                    // generate an array of random data
                    var data = [],
                        time = (new Date()).getTime(),
                        i;
                    for (i = -19; i <= 0; i += 1) {
                        data.push({
                            x: time + i * 1000,
                            y: null
                        });
                    }
                    return data;
                }())
            },{
                name: 'RAM',
                data: (function () {
                    // generate an array of random data
                    var data = [],
                        time = (new Date()).getTime(),
                        i;
                    for (i = -19; i <= 0; i += 1) {
                        data.push({
                            x: time + i * 1000,
                            y: null
                        });
                    }
                    return data;
                }())
            }]
        });
    });
});
</script>